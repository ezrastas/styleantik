<?php
/**
* @version $Id: users.class.php 4675 2006-08-23 16:55:24Z stingrey $
* @package Joomla RE
* @subpackage Users
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

// no direct access
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

/**
 * @package Joomla
 */
class mosUserParameters extends mosParameters {
	/**
	* @param string The name of the form element
	* @param string The value of the element
	* @param object The xml element for the parameter
	* @param string The control name
	* @return string The html for the element
	*/
	function _form_editor_list( $name, $value, &$node, $control_name ) {
		global $database;

		// compile list of the editors
		$query = "SELECT element AS value, name AS text"
		. "\n FROM #__mambots"
		. "\n WHERE folder = 'editors'"
		. "\n AND published = 1"
		. "\n ORDER BY ordering, name"
		;
		$database->setQuery( $query );
		$editors = $database->loadObjectList();

		array_unshift( $editors, mosHTML::makeOption( '', '- Выберите редактор -' ) );

		return mosHTML::selectList( $editors, ''. $control_name .'['. $name .']', 'class="inputbox"', 'value', 'text', $value );
	}
}
?>