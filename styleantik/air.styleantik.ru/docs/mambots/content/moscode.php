<?php
/**
* @version $Id: moscode.php 2411 2006-02-16 17:23:32Z stingrey $
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

$_MAMBOTS->registerFunction( 'onPrepareContent', 'botMosCode' );

/**
* ������ ��������� ����
*
* <b>�������������:</b>
* <code>{moscode}...�����-������ ���...{/moscode}</code>
*/
function botMosCode( $published, &$row, &$params, $page=0 ) {
	// ����������� ����������� ��������� ��� ����
	if ( strpos( $row->text, 'moscode' ) === false ) {
		return true;
	}
	
	// define the regular expression for the bot
	$regex = "#{moscode}(.*?){/moscode}#s";

	// check whether mambot has been unpublished
	if (!$published) {
		$row->text = preg_replace( $regex, '', $row->text );
		return true;
	}

	// ���������� ������
	$row->text = preg_replace_callback( $regex, 'botMosCode_replacer', $row->text );

	return true;
}
/**
* ������ ����������� ����� an image
* @param array - ������ ������������ (��. - preg_match_all)
* @return string
*/
function botMosCode_replacer( &$matches ) {
	$html_entities_match = array("#<#", "#>#");
	$html_entities_replace = array("&lt;", "&gt;");

	$text = $matches[1];

	$text = preg_replace($html_entities_match, $html_entities_replace, $text );

	// ������ 2 �������� "&nbsp; " ���,  ����� ������������ ���������������� ���, ��� ���� �� �������� �������� ������� �����.
	$text = str_replace("  ", "&nbsp; ", $text);
	// ����������� ������ 2 ��������� � " &nbsp;" ���������� �������� ����������� ��������.
	$text = str_replace("  ", " &nbsp;", $text);

	// ������ ��������� "&nbsp; &nbsp;" ���, ��� ��� � ��������� ��������� ������������� �� ������� ����, �� �������� ������� ������� �����.
	$text = str_replace("\t", "&nbsp; &nbsp;", $text);

	$text = str_replace('&lt;', '<', $text);
	$text = str_replace('&gt;', '>', $text);

	$text = highlight_string( $text, 1 );

	$text = str_replace('&amp;nbsp;', '&nbsp;', $text);
	$text = str_replace('&lt;br/&gt;', '<br />', $text);
	$text = str_replace('<font color="#007700">&lt;</font><font color="#0000BB">br</font><font color="#007700">/&gt;','<br />', $text);
	$text = str_replace('&amp;</font><font color="#0000CC">nbsp</font><font color="#006600">;', '&nbsp;', $text);
	$text = str_replace('&amp;</font><font color="#0000BB">nbsp</font><font color="#007700">;', '&nbsp;', $text);
	$text = str_replace('<font color="#007700">;&lt;</font><font color="#0000BB">br</font><font color="#007700">/&gt;','<br />', $text);

	return $text;
}
?>