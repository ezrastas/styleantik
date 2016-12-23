<?php
/**
* @version $Id: toolbar.poll.html.php 5977 2006-12-11 03:08:31Z friesengeist $
* @package Joomla RE
* @subpackage Polls
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
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

/**
* @package Joomla RE
* @subpackage Polls
*/
class TOOLBAR_poll {
	/**
	* Draws the menu for a New category
	*/
	function _NEW() {
		mosMenuBar::startTable();
		mosMenuBar::save();
		mosMenuBar::spacer();
		mosMenuBar::cancel();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.polls.edit' );
		mosMenuBar::endTable();
	}
	/**
	* Draws the menu for Editing an existing category
	*/
	function _EDIT( $pollid, $cur_template ) {
		global $database;
		global $id;

		$sql = "SELECT template"
		. "\n FROM #__templates_menu"
		. "\n WHERE client_id = 0"
		. "\n AND menuid = 0"
		;
		$database->setQuery( $sql );
		$cur_template = $database->loadResult();
		mosMenuBar::startTable();
		$popup='pollwindow';
		?>
		<td><a class="toolbar" href="#" onclick="window.open('popups/<?php echo $popup;?>.php?pollid=<?php echo $pollid; ?>&t=<?php echo $cur_template; ?>', 'win1', 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no');" onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('preview','','images/preview_f2.png',1);"><img src="images/preview.png" alt="Предпросмотр" border="0" name="preview" align="middle" />&nbsp;Просмотр</a></td>
		<?php
		mosMenuBar::spacer();
		mosMenuBar::save();
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancel', 'Закрыть' );
		} else {
			mosMenuBar::cancel();
		}
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.polls.edit' );
		mosMenuBar::endTable();
	}
	function _DEFAULT() {
		mosMenuBar::startTable();
		mosMenuBar::publishList();
		mosMenuBar::spacer();
		mosMenuBar::unpublishList();
		mosMenuBar::spacer();
		mosMenuBar::deleteList();
		mosMenuBar::spacer();
		mosMenuBar::editListX();
		mosMenuBar::spacer();
		mosMenuBar::addNewX();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.polls' );
		mosMenuBar::endTable();
	}
}
?>