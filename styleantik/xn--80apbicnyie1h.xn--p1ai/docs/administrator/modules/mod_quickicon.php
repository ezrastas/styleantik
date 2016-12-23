<?php
/**
* @version $Id: mod_quickicon.php 5571 2006-10-26 05:20:13Z Saka $
* @package Joomla RE
* @copyright Авторские права (C) 2005 Open Source Matters. Все права защищены.
* @license Лицензия http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотрите LICENSE.php
* Joomla! - свободное программное обеспечение. Эта версия может быть изменена
* в соответствии с Генеральной Общественной Лицензией GNU, поэтому возможно
* её дальнейшее распространение в составе результата работы, лицензированного
* согласно Генеральной Общественной Лицензией GNU или других лицензий свободных 
* программ или программ с открытым исходным кодом.
* Для просмотра подробностей и замечаний об авторском праве, смотрите файл COPYRIGHT.php.
* 
* @localized (C) 2005 Joom.Ru
* @translator Sourpuss (sourpuss@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

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
        quickiconButton( $link, 'module.png', 'Добавить новость/статью' );

	$link = 'index2.php?option=com_content&sectionid=0';
        quickiconButton( $link, 'addedit.png', 'Всё содержимое сайта' );

	$link = 'index2.php?option=com_typedcontent';
        quickiconButton( $link, 'addedit.png', 'Cтатичное содержимое' );

	$link = 'index2.php?option=com_frontpage';
        quickiconButton( $link, 'frontpage.png', 'Главная страница' );

	$link = 'index2.php?option=com_sections&amp;scope=content';
        quickiconButton( $link, 'sections.png', 'Разделы' );

	$link = 'index2.php?option=com_categories&amp;section=content';
        quickiconButton( $link, 'categories.png', 'Категории' );

	$link = 'index2.php?option=com_media';
        quickiconButton( $link, 'mediamanager.png', 'Медиа' );

	if ( $my->gid > 23 ) {
		$link = 'index2.php?option=com_trash';
                quickiconButton( $link, 'trash.png', 'Корзина' );
	}

	if ( $my->gid > 23 ) {
		$link = 'index2.php?option=com_menumanager';
                quickiconButton( $link, 'menu.png', 'Меню' );
	}

	if ( $my->gid > 24 ) {
		$link = 'index2.php?option=com_languages';
                quickiconButton( $link, 'langmanager.png', 'Языковые пакеты' );
	}

	if ( $my->gid > 23 ) {
		$link = 'index2.php?option=com_users';
                quickiconButton( $link, 'user.png', 'Пользователи' );
	}

	if ( $my->gid > 24 ) {
		$link = 'index2.php?option=com_config&hidemainmenu=1';
                quickiconButton( $link, 'config.png', 'Глобальная конфигурация' );
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