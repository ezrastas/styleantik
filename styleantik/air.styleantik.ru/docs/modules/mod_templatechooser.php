<?php
/**
* @version $Id: mod_templatechooser.php 1492 2005-12-20 16:07:35Z Jinx $
* @package Joomla RE  
* @localized ��������� ����� (C) 2005 Joom.Ru - ������� ��� Joomla!
* @copyright ��������� ����� (C) 2005 Open Source Matters. ��� ����� ��������.
* @license �������� http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* Joomla! - ��������� ����������� �����������. ��� ������ ����� ���� ��������
* � ������������ � ����������� ������������ ��������� GNU, ������� ��������
* � ���������� ��������������� � ������� ���������� ������, ����������������
* �������� ����������� ������������ ��������� GNU ��� ������ �������� ��������� 
* �������� ��� �������� � �������� �������� �����.
* ��� ��������� ������������ � ��������� �� ��������� �����, �������� ���� COPYRIGHT.php.
* 
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mamboteam.ru)
*/

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ���������' );

global $cur_template;

// ����� ���������, ������������� � ���������� ������
$titlelength 	= $params->get( 'title_length', 20 );
$preview_height = $params->get( 'preview_height', 90 );
$preview_width 	= $params->get( 'preview_width', 140 );
$show_preview 	= $params->get( 'show_preview', 0 );

// ������ ������ �� �������� �������
$template_path 	= "$mosConfig_absolute_path/templates";
$templatefolder = @dir( $template_path );
$darray = array();

if ($templatefolder) {
	while ($templatefile = $templatefolder->read()) {
		if ($templatefile != "." && $templatefile != ".." && $templatefile != ".svn" && $templatefile != "css" && is_dir( "$template_path/$templatefile" )  ) {
			if(strlen($templatefile) > $titlelength) {
				$templatename = substr( $templatefile, 0, $titlelength-3 );
				$templatename .= "...";
			} else {
				$templatename = $templatefile;
			}
			$darray[] = mosHTML::makeOption( $templatefile, $templatename );
		}
	}
	$templatefolder->close();
}

sort( $darray );

// ����� ����������� �������������
// ��������� JavaScript ��� �������� �������������
$onchange = "";
if ($show_preview) {
	$onchange = "showimage()";
?>
<img src="<?php echo "templates/$cur_template/template_thumbnail.png";?>" name="preview" border="1" width="<?php echo $preview_width;?>" height="<?php echo $preview_height;?>" alt="<?php echo $cur_template; ?>" />
<script language='JavaScript1.2' type='text/javascript'>
<!--
	function showimage() {
		//if (!document.images) return;
		document.images.preview.src = 'templates/' + getSelectedValue( 'templateform', 'jos_change_template' ) + '/template_thumbnail.png';
	}
	function getSelectedValue( frmName, srcListName ) {
		var form = eval( 'document.' + frmName );
		var srcList = eval( 'form.' + srcListName );

		i = srcList.selectedIndex;
		if (i != null && i > -1) {
			return srcList.options[i].value;
		} else {
			return null;
		}
	}
-->
</script>
<?php
}
?>
<form action="index.php" name="templateform" method="post">
	<?php
	echo mosHTML::selectList( $darray, 'jos_change_template', "id=\"mod_templatechooser_jos_change_template\" class=\"button\" onchange=\"$onchange\"",'value', 'text', $cur_template );
	?>
	<input class="button" type="submit" value="<?php echo _CMN_SELECT;?>" />
</form>