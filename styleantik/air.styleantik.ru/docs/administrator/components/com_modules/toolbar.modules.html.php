<?php
/**
* @version $Id: toolbar.modules.html.php 4675 2006-08-23 16:55:24Z stingrey $
* @package Joomla RE
* @subpackage Modules
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
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mamboteam.ru)
*/

// no direct access
defined( '_VALID_MOS' ) or die( '������ ��������' );

/**
* @package Joomla RE
* @subpackage Modules
*/
class TOOLBAR_modules {
	/**
	* Draws the menu for a New module
	*/
	function _NEW()	{
		mosMenuBar::startTable();
		mosMenuBar::preview( 'modulewindow' );
		mosMenuBar::spacer();
		mosMenuBar::save();
		mosMenuBar::spacer();
		mosMenuBar::apply();
		mosMenuBar::spacer();
		mosMenuBar::cancel();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.modules.new' );
		mosMenuBar::endTable();
	}

	/**
	* Draws the menu for Editing an existing module
	*/
	function _EDIT( $cur_template, $publish ) {
		global $id;

		mosMenuBar::startTable();
		?>
			<td>
				<a class="toolbar" href="#" onClick="if (typeof document.adminForm.content == 'undefined') { alert('You can only preview `new` modules.'); } else { var content = document.adminForm.content.value; content = content.replace('#', '');  var title = document.adminForm.title.value; title = title.replace('#', ''); window.open('popups/modulewindow.php?title=' + title + '&content=' + content + '&t=<?php echo $cur_template; ?>', 'win1', 'status=no,toolbar=no,scrollbars=auto,titlebar=no,menubar=no,resizable=yes,width=200,height=400,directories=no,location=no'); }" >
					<img src="images/preview_f2.png" alt="��������" border="0" name="preview" align="middle">
					��������</a>
			</td>
		<?php
		mosMenuBar::spacer();
		mosMenuBar::save();
		mosMenuBar::spacer();
		mosMenuBar::apply();
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancel', '�������' );
		} else {
			mosMenuBar::cancel();
		}
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.modules.edit' );
		mosMenuBar::endTable();
	}
	function _DEFAULT() {
		mosMenuBar::startTable();
		mosMenuBar::publishList();
		mosMenuBar::spacer();
		mosMenuBar::unpublishList();
		mosMenuBar::spacer();
		mosMenuBar::custom( 'copy', 'copy.png', 'copy_f2.png', '�����', true );
		mosMenuBar::spacer();
		mosMenuBar::deleteList();
		mosMenuBar::spacer();
		mosMenuBar::editListX();
		mosMenuBar::spacer();
		mosMenuBar::addNewX();
		mosMenuBar::spacer();
		mosMenuBar::help( 'screen.modules' );
		mosMenuBar::endTable();
	}
}
?>