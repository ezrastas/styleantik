<?php
/**
* @version $Id: geshi.php 2970 2006-03-30 08:01:32Z stingrey $
* @localized Авторские права (C) 2005 Joom.Ru - Русский дом Joomla!
* @copyright Авторские права (C) 2005 Open Source Matters. Все права защищены.
* @license Лицензия http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотрите LICENSE.php
* Joomla! - свободное программное обеспечение. Эта версия может быть изменена
* в соответствии с Генеральной Общественной Лицензией GNU, поэтому возможно
* её дальнейшее распространение в составе результата работы, лицензированного
* согласно Генеральной Общественной Лицензией GNU или других лицензий свободных 
* программ или программ с открытым исходным кодом.
* Для просмотра подробностей и замечаний об авторском праве, смотрите файл COPYRIGHT.php.
* 
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mamboteam.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ ограничен' );

$_MAMBOTS->registerFunction( 'onPrepareContent', 'botGeshi' );

/**
* Мамбот подсветки кода
*
* Замена тэгов <pre>...</pre> подсвеченным текстом
*/
function botGeshi( $published, &$row, &$params, $page=0 ) {
	require_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/domit/xml_saxy_shared.php' );

	// определение правильного выражения для бота
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

	// выполнение замены
	$row->text = preg_replace_callback( $regex, 'botGeshi_replacer', $row->text );

	return true;
}
/**
* Замена совпадающих тэгов an image
* @param array - Массив соответствий (см. - preg_match_all)
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

	// Замена табуляций "&nbsp; &nbsp;" так, что код с символами табуляции выравнивается по правому краю, не создавая слишком длинных строк.
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