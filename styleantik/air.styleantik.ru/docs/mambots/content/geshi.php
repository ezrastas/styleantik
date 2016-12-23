<?php
/**
* @version $Id: geshi.php 2970 2006-03-30 08:01:32Z stingrey $
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

$_MAMBOTS->registerFunction( 'onPrepareContent', 'botGeshi' );

/**
* ������ ��������� ����
*
* ������ ����� <pre>...</pre> ������������ �������
*/
function botGeshi( $published, &$row, &$params, $page=0 ) {
	require_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/domit/xml_saxy_shared.php' );

	// ����������� ����������� ��������� ��� ����
	if ( strpos( $row->text, 'pre>' ) === false ) {
		return true;
	}
	
	// define the regular expression for the bot
	$regex = "#<pre\s*(.*?)>(.*?)</pre>#s";

	// check whether mambot has been unpublished
	if (!$published) {
		return true;
	}

	$GLOBALS['_MAMBOT_GESHI_PARAMS'] =& $params;

	// ���������� ������
	$row->text = preg_replace_callback( $regex, 'botGeshi_replacer', $row->text );

	return true;
}
/**
* ������ ����������� ����� an image
* @param array - ������ ������������ (��. - preg_match_all)
* @return string
*/
function botGeshi_replacer( &$matches ) {
	$params =& $GLOBALS['_MAMBOT_GESHI_PARAMS'];
	include_once( dirname( __FILE__ ) . '/geshi/geshi.php' );

	$args = SAXY_Parser_Base::parseAttributes( $matches[1] );
	$text = $matches[2];

	$lang = mosGetParam( $args, 'lang', 'php' );
	$lines = mosGetParam( $args, 'lines', 'false' );


	$html_entities_match = array( "|\<br \/\>|", "#<#", "#>#", "|&#39;|", '#&quot;#', '#&nbsp;#' );
	$html_entities_replace = array( "\n", '&lt;', '&gt;', "'", '"', ' ' );

	$text = preg_replace( $html_entities_match, $html_entities_replace, $text );

	$text = str_replace('&lt;', '<', $text);
	$text = str_replace('&gt;', '>', $text);

	// ������ ��������� "&nbsp; &nbsp;" ���, ��� ��� � ��������� ��������� ������������� �� ������� ����, �� �������� ������� ������� �����.
	//$text = str_replace("\t", "&nbsp; &nbsp;", $text);
	$text = str_replace( "\t", '  ', $text );

	$geshi = new GeSHi( $text, $lang, dirname( __FILE__ ) . '/geshi/geshi' );
	if ($lines == 'true') {
		$geshi->enable_line_numbers( GESHI_NORMAL_LINE_NUMBERS );
	}
	$text = $geshi->parse_code();

	return $text;
}
?>