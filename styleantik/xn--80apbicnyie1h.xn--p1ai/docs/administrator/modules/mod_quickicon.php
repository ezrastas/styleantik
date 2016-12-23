<?php
/**
* @version $Id: mod_quickicon.php 5571 2006-10-26 05:20:13Z Saka $
* @package Joomla RE
* @copyright ��������� ����� (C) 2005 Open Source Matters. ��� ����� ��������.
* @license �������� http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* Joomla! - ��������� ����������� �����������. ��� ������ ����� ���� ��������
* � ������������ � ����������� ������������ ��������� GNU, ������� ��������
* � ���������� ��������������� � ������� ���������� ������, ����������������
* �������� ����������� ������������ ��������� GNU ��� ������ �������� ��������� 
* �������� ��� �������� � �������� �������� �����.
* ��� ��������� ������������ � ��������� �� ��������� �����, �������� ���� COPYRIGHT.php.
* 
* @localized (C) 2005 Joom.Ru
* @translator Sourpuss (sourpuss@mail.ru)
*/

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ��������' );

if (!defined( '_JOS_QUICKICON_MODULE' )) {
	/** ensure that functions are declared only once */
	define( '_JOS_QUICKICON_MODULE', 1 );	

function quickiconButton( $link, $image, $text ) {
	?>
	<div style="float:left;">
		<div class="icon">
			<a href="<?php echo $link; ?>">
					<?php echo mosAdminMenus::imageCheckAdmin( $image, '/administrator/images/', NULL, NULL, $text ); ?>
					<span><?php echo $text; ?></span>
				</a>
		</div>
	</div>
	<?php
}
	
	$securitycheck 	= intval( $params->get( 'securitycheck', 1 ) );
?>
<div id="cpanel">
	<?php
	$link = 'index2.php?option=com_content&amp;sectionid=0&amp;task=new';
        quickiconButton( $link, 'module.png', '�������� �������/������' );

	$link = 'index2.php?option=com_content&sectionid=0';
        quickiconButton( $link, 'addedit.png', '�� ���������� �����' );

	$link = 'index2.php?option=com_typedcontent';
        quickiconButton( $link, 'addedit.png', 'C�������� ����������' );

	$link = 'index2.php?option=com_frontpage';
        quickiconButton( $link, 'frontpage.png', '������� ��������' );

	$link = 'index2.php?option=com_sections&amp;scope=content';
        quickiconButton( $link, 'sections.png', '�������' );

	$link = 'index2.php?option=com_categories&amp;section=content';
        quickiconButton( $link, 'categories.png', '���������' );

	$link = 'index2.php?option=com_media';
        quickiconButton( $link, 'mediamanager.png', '�����' );

	if ( $my->gid > 23 ) {
		$link = 'index2.php?option=com_trash';
                quickiconButton( $link, 'trash.png', '�������' );
	}

	if ( $my->gid > 23 ) {
		$link = 'index2.php?option=com_menumanager';
                quickiconButton( $link, 'menu.png', '����' );
	}

	if ( $my->gid > 24 ) {
		$link = 'index2.php?option=com_languages';
                quickiconButton( $link, 'langmanager.png', '�������� ������' );
	}

	if ( $my->gid > 23 ) {
		$link = 'index2.php?option=com_users';
                quickiconButton( $link, 'user.png', '������������' );
	}

	if ( $my->gid > 24 ) {
		$link = 'index2.php?option=com_config&hidemainmenu=1';
                quickiconButton( $link, 'config.png', '���������� ������������' );
		}
		
		if ($securitycheck) {
		// show security setting check
			josSecurityCheck('88%');
	}
	?>
</div>
	<div style="clear:both;"> </div>	
	<?php
}
?>