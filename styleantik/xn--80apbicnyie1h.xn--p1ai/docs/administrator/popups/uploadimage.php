<?php
/**
* @version $Id: uploadimage.php 5930 2006-12-06 06:27:58Z rmdstudio $
* @package Joomla RE
* @copyright ��������� ����� (C) 2005 Open Source Matters. ��� ����� ��������. 
* @localized ��������� ����� (C) 2005 Joom.Ru - ������� ��� Joomla! ��� ����� ��������.
* @license �������� http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* Joomla! - ��������� ����������� �����������. ��� ������ ����� ���� ��������
* � ������������ � ����������� ������������ ��������� GNU, ������� ��������
* � ���������� ��������������� � ������� ���������� ������, ����������������
* �������� ����������� ������������ ��������� GNU ��� ������ �������� ��������� 
* �������� ��� �������� � �������� �������� �����.
* ��� ��������� ������������ � ��������� �� ��������� �����, �������� ���� COPYRIGHT.php.
* 
* @translator Sourpuss (sourpuss@mail.ru)
*/

// ��������� ����� ������������� �������
define( "_VALID_MOS", 1 );	  

/** �������� ������������ */
require( '../includes/auth.php' );
include_once ( $mosConfig_absolute_path . '/language/' . $mosConfig_lang . '.php' );

/*
* Stops file upload below /images/stories directory
* Added 1.0.11
*/
function limitDirectory( &$directory ) {
	if ( strpos($directory, '../') !== false ) {
		$directory = str_replace('../', '', $directory);
	}

	if ( strpos($directory, '..\\') !== false ) {
		$directory = str_replace('..\\', '', $directory);
	}
	
	if ( strpos($directory, ':') !== false ) {
		$directory = str_replace(':', '', $directory);
	}
	
	return $directory;
}

// limit access to functionality
$option = strval( mosGetParam( $_SESSION, 'option', '' ) );
$task 	= strval( mosGetParam( $_SESSION, 'task', '' ) );

switch ($option) {
	case 'com_banners':
		break;		
		
	case 'com_categories':
	case 'com_content':
	case 'com_sections':
	case 'com_typedcontent':
		if ( $task != 'edit' && $task != 'editA' && $task != 'new' ) {
			echo _NOT_AUTH;
			return;
		}
		break;		
		
	default:
		echo _NOT_AUTH;
		return;
		break;		
}

$directory	= mosGetParam( $_REQUEST, 'directory', '');
$css 		= mosGetParam( $_REQUEST, 't','');

$media_path	= $mosConfig_absolute_path.'/media/';

$userfile2=(isset($_FILES['userfile']['tmp_name']) ? $_FILES['userfile']['tmp_name'] : "");
$userfile_name=(isset($_FILES['userfile']['name']) ? $_FILES['userfile']['name'] : "");

limitDirectory( $directory );

// check to see if directory exists
if ( $directory != 'banners' && $directory != '' && !is_dir($mosConfig_absolute_path .'/images/stories/'. $directory)) {
	$directory 	= '';
}
	
$action = "window.location.href = 'uploadimage.php?directory=$directory&amp;t=$css'";

if (isset($_FILES['userfile'])) {
	if ($directory == 'banners') {
		$base_Dir = "../../images/banners/";
	} else if ( $directory != '' ) {
		$base_Dir = '../../images/stories/'. $directory;

		if (!is_dir($mosConfig_absolute_path .'/images/stories/'. $directory)) {
			$base_Dir 	= '../../images/stories/';
			$directory 	= '';
		}
	} else {
		$base_Dir = '../../images/stories/';
	}  

	if (empty($userfile_name)) {
		mosErrorAlert("����������, �������� ����������� ��� ��������", $action);
	}

	$filename = split("\.", $userfile_name);

	if (eregi("[^0-9a-zA-Z_]", $filename[0])) {
		mosErrorAlert('����� ������ ������ �������� �� �������� �������� � �� ������ ��������� ��������.', $action );
	}

	if (file_exists($base_Dir.$userfile_name)) {
		mosErrorAlert('����������� '.$userfile_name.' ��� ����������.', $action );
	}

	if ((strcasecmp(substr($userfile_name,-4),'.gif')) && (strcasecmp(substr($userfile_name,-4),'.jpg')) && (strcasecmp(substr($userfile_name,-4),'.png')) && (strcasecmp(substr($userfile_name,-4),'.bmp')) &&(strcasecmp(substr($userfile_name,-4),'.doc')) && (strcasecmp(substr($userfile_name,-4),'.xls')) && (strcasecmp(substr($userfile_name,-4),'.ppt')) && (strcasecmp(substr($userfile_name,-4),'.swf')) && (strcasecmp(substr($userfile_name,-4),'.pdf'))) {
		mosErrorAlert('���� ������ ����� ���������� gif, png, jpg, bmp, swf, doc, xls ��� ppt', $action);
	}


	if (eregi('.pdf', $userfile_name) || eregi('.doc', $userfile_name) || eregi('.xls', $userfile_name) || eregi('.ppt', $userfile_name)) {
		if (!move_uploaded_file ($_FILES['userfile']['tmp_name'],$media_path.$_FILES['userfile']['name']) || !mosChmod($media_path.$_FILES['userfile']['name'])) {
			mosErrorAlert('�������� ����� '.$userfile_name.' ��������', $action);
		} else {
			mosErrorAlert('�������� ����� '.$userfile_name.' � '.$base_Dir.' ������� ���������', "window.close()");
		}
	} elseif (!move_uploaded_file ($_FILES['userfile']['tmp_name'],$base_Dir.$_FILES['userfile']['name']) || !mosChmod($base_Dir.$_FILES['userfile']['name'])) {
		mosErrorAlert('�������� ����� '.$userfile_name.' ��������', $action);
	} else {
		mosErrorAlert('�������� ����� '.$userfile_name.' � '.$base_Dir.' ������� ���������', "window.close()");
	}
		echo $base_Dir.$_FILES['userfile']['name'];
}

// css file handling
// check to see if template exists
if ( $css != '' && !is_dir($mosConfig_absolute_path .'/administrator/templates/'. $css .'/css/template_css.css' )) {
	$css 	= 'joomla_admin';
} else if ( $css == '' ) {
	$css 	= 'joomla_admin';
}

$iso = split( '=', _ISO );
// xml prolog
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>�������� �����</title>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
</head>
<body>

<link rel="stylesheet" href="../templates/<?php echo $css; ?>/css/template_css.css" type="text/css" />
<form method="post" action="uploadimage.php" enctype="multipart/form-data" name="filename">

<table class="adminform">
	<tr>
	<th class="title"> 
		�������� ����� : <?php echo $directory; ?>
	</th>
	</tr>
	<tr>
	  <td align="center">
		<input class="inputbox" name="userfile" type="file" />
	  </td>
	</tr>
	<tr>
	  <td>
		<input class="button" type="submit" value="���������" name="fileupload" />
		������������ ������ = <?php echo ini_get( 'post_max_size' );?>
	  </td>
</tr>
</table>

		<input type="hidden" name="directory" value="<?php echo $directory;?>" />
  </form>

</body>
</html>