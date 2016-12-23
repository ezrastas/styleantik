<?php
/**
* @version $Id: mod_fullmenu.php 6070 2006-12-20 02:09:09Z robs $
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
* @localized (C) 2005 Joom.Ru  - Русский дом Joomla!
* @translator Sourpuss (sourpuss@mail.ru)
*/

// запрет прямого доступа
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

if (!defined( '_JOS_FULLMENU_MODULE' )) {
	/** ensure that functions are declared only once */
	define( '_JOS_FULLMENU_MODULE', 1 );

/**
* Full DHTML Admnistrator Menus
* @package Joomla RE
*/
class mosFullAdminMenu {
        /**
        * Show the menu
        * @param string The current user type
        */
        function show( $usertype='' ) {
                global $acl, $database;
                global $mosConfig_live_site, $mosConfig_enable_stats, $mosConfig_caching;

                // cache some acl checks
                $canConfig                         = $acl->acl_check( 'administration', 'config', 'users', $usertype );

                $manageTemplates         = $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_templates' );
                $manageTrash                 = $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_trash' );
                $manageMenuMan                 = $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_menumanager' );
                $manageLanguages         = $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_languages' );
                $installModules         = $acl->acl_check( 'administration', 'install', 'users', $usertype, 'modules', 'all' );
                $editAllModules         = $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'modules', 'all' );
                $installMambots         = $acl->acl_check( 'administration', 'install', 'users', $usertype, 'mambots', 'all' );
                $editAllMambots         = $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'mambots', 'all' );
                $installComponents         = $acl->acl_check( 'administration', 'install', 'users', $usertype, 'components', 'all' );
                $editAllComponents         = $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'components', 'all' );
                $canMassMail                 = $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_massmail' );
                $canManageUsers         = $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_users' );

		$query = "SELECT a.id, a.title, a.name"
                . "\n FROM #__sections AS a"
                . "\n WHERE a.scope = 'content'"
                . "\n GROUP BY a.id"
                . "\n ORDER BY a.ordering"
                ;
                $database->setQuery( $query );
                $sections = $database->loadObjectList();

                $menuTypes = mosAdminMenus::menutypes();
                ?>
                <div id="myMenuID"></div>
                <script language="JavaScript" type="text/javascript">
                var myMenu =
                [
                <?php
        // Home Sub-Menu
    ?>          [null,'Главная','index2.php',null,'Перейти на Главную страницу панели управления'],
                        _cmSplit,
                        <?php
        // Site Sub-Menu
?>                        [null,'Сайт',null,null,'Управление основными возможностями системы',
<?php
                        if ($canConfig) {
?>                                ['<img src="../includes/js/ThemeOffice/config.png" />','Глобальная конфигурация','index2.php?option=com_config&hidemainmenu=1',null,'Настройка основных параметров конфигурации системы'],
<?php
                        }
                        if ($manageLanguages) {
?>                                ['<img src="../includes/js/ThemeOffice/language.png" />','Языковые пакеты',null,null,'Управление языковыми файлами',
                                          ['<img src="../includes/js/ThemeOffice/language.png" />','Языковые пакеты сайта','index2.php?option=com_languages',null,'Управление Языковыми пакетами сайта'],
                                   ],
<?php
                        }
?>             ['<img src="../includes/js/ThemeOffice/media.png" />','Медиа','index2.php?option=com_media',null,'Управление медиа-файлами'],
                                        ['<img src="../includes/js/ThemeOffice/preview.png" />', 'Предпросмотр сайта', null, null, 'Предпросмотр сайта',
                                        ['<img src="../includes/js/ThemeOffice/preview.png" />','В новом окне','<?php echo $mosConfig_live_site; ?>/index.php','_blank','<?php echo $mosConfig_live_site; ?>'],
                                        ['<img src="../includes/js/ThemeOffice/preview.png" />','Внутри','index2.php?option=com_admin&task=preview',null,'<?php echo $mosConfig_live_site; ?>'],
                                        ['<img src="../includes/js/ThemeOffice/preview.png" />','Внутри с позициями','index2.php?option=com_admin&task=preview2',null,'<?php echo $mosConfig_live_site; ?>'],
				],
                                        ['<img src="../includes/js/ThemeOffice/globe1.png" />', 'Статистика сайта', null, null, 'Просмотр статистики по сайту',
<?php
                        if ($mosConfig_enable_stats == 1) {
?>                                        ['<img src="../includes/js/ThemeOffice/globe4.png" />', 'Браузеры, ОС, домены', 'index2.php?option=com_statistics', null, 'Статистика посещений сайта по браузерам, ОС и доменам'],
<?php
                        }
?>                                        ['<img src="../includes/js/ThemeOffice/search_text.png" />', 'Поисковые запросы', 'index2.php?option=com_statistics&task=searches', null, 'Статистика поисковых запросов по сайту']
                                ],
<?php
                        if ($manageTemplates) {
?>                                ['<img src="../includes/js/ThemeOffice/template.png" />','Шаблоны',null,null,'Управление шаблонами',
                                          ['<img src="../includes/js/ThemeOffice/template.png" />','Шаблоны сайта','index2.php?option=com_templates',null,'Шаблоны сайта'],
                                          _cmSplit,
                                          ['<img src="../includes/js/ThemeOffice/template.png" />','Шаблоны админцентра','index2.php?option=com_templates&client=admin',null,'Шаблоны админцентра Joomla'],
                                          _cmSplit,
                                          ['<img src="../includes/js/ThemeOffice/template.png" />','Позиции модулей','index2.php?option=com_templates&task=positions',null,'Позиции модулей']
                                  ],
<?php
                        }
                        if ($manageTrash) {
?>                                ['<img src="../includes/js/ThemeOffice/trash.png" />','Корзина','index2.php?option=com_trash',null,'Управление объектами, находящимися в корзине'],
<?php
                        }
                        if ($canManageUsers || $canMassMail) {
?>                                ['<img src="../includes/js/ThemeOffice/users.png" />','Пользователи','index2.php?option=com_users&task=view',null,'Управление пользователями'],
<?php
                                }
?>                        ],
<?php
        // Menu Sub-Menu
?>                        _cmSplit,
                        [null,'Меню',null,null,'Управление меню',
<?php
                        if ($manageMenuMan) {
?>                                ['<img src="../includes/js/ThemeOffice/menus.png" />','Управление меню','index2.php?option=com_menumanager',null,'Управление меню сайта'],
                                _cmSplit,
<?php
                        }
                        foreach ( $menuTypes as $menuType ) {
?>                                ['<img src="../includes/js/ThemeOffice/menus.png" />','<?php echo $menuType;?>','index2.php?option=com_menus&menutype=<?php echo $menuType;?>',null,''],
<?php
                        }
?>                        ],
                        _cmSplit,
<?php
        // Content Sub-Menu
?>                        [null,'Содержимое',null,null,'Управление структурой содержимого',
<?php
                        if (count($sections) > 0) {
?>                                ['<img src="../includes/js/ThemeOffice/edit.png" />','Содержимое по разделам',null,null,'Содержимое по разделам',
<?php
                                foreach ($sections as $section) {
                                        $txt = addslashes( $section->title ? $section->title : $section->name );
?>                                      ['<img src="../includes/js/ThemeOffice/document.png" />','<?php echo $txt;?>', null, null,'Раздел: <?php echo $txt;?>',
                                        ['<img src="../includes/js/ThemeOffice/edit.png" />', 'Содержимое в разделе: <?php echo $txt;?>', 'index2.php?option=com_content&sectionid=<?php echo $section->id;?>',null,null],
                                        ['<img src="../includes/js/ThemeOffice/backup.png" />', 'Архив раздела: <?php echo $txt;?>', 'index2.php?option=com_content&task=showarchive&sectionid=<?php echo $section->id;?>',null,null],                                        ['<img src="../includes/js/ThemeOffice/add_section.png" />', 'Добавить/изменить категории в разделе: <?php echo $txt;?>', 'index2.php?option=com_categories&section=<?php echo $section->id;?>',null,'Добавление или изменение категории в разделе: <?php echo $txt;?>'],
						['<img src="../includes/js/ThemeOffice/add_section.png" />', 'Категории раздела: <?php echo $txt;?>', 'index2.php?option=com_categories&section=<?php echo $section->id;?>',null, null],
					],
<?php
                                } // foreach
?>                                ],
                                _cmSplit,
<?php
                        }
?>
                                ['<img src="../includes/js/ThemeOffice/edit.png" />','Всё содержимое','index2.php?option=com_content&sectionid=0',null,'Управление списком всех объектов содержимого сайта'],
                                  ['<img src="../includes/js/ThemeOffice/edit.png" />','Статичное содержимое','index2.php?option=com_typedcontent',null,'Управление всеми статичными объектами содержимого сайта'],
                                  _cmSplit,
                                  ['<img src="../includes/js/ThemeOffice/add_section.png" />','Разделы','index2.php?option=com_sections&scope=content',null,'Управление разделами'],
                                ['<img src="../includes/js/ThemeOffice/add_section.png" />','Категории','index2.php?option=com_categories&section=content',null,'Управление категориями'],
                                _cmSplit,
                                  ['<img src="../includes/js/ThemeOffice/home.png" />','Главная страница','index2.php?option=com_frontpage',null,'Управление объектами содержимого, опубликоваными на главной странице сайта'],
                                  ['<img src="../includes/js/ThemeOffice/edit.png" />','Архив','index2.php?option=com_content&task=showarchive&sectionid=0',null,'Управление объектами содержимого, находящимися в Архиве'],
  				['<img src="../includes/js/ThemeOffice/globe3.png" />', 'Статистика страниц', 'index2.php?option=com_statistics&task=pageimp', null, 'Статистика страниц'],
                        ],
<?php
        // Components Sub-Menu
        if ($installComponents) {
?>                        _cmSplit,
                        [null,'Компоненты',null,null,'Управление компонентами',
<?php
                $query = "SELECT *"
                . "\n FROM #__components"
                . "\n WHERE name != 'frontpage'"
                . "\n AND name != 'media manager'"
                . "\n ORDER BY ordering, name"
                ;
                $database->setQuery( $query );
                $comps = $database->loadObjectList();        // component list
                $subs = array();        // sub menus
                // first pass to collect sub-menu items
                foreach ($comps as $row) {
                        if ($row->parent) {
                                if (!array_key_exists( $row->parent, $subs )) {
                                        $subs[$row->parent] = array();
                                }
                                $subs[$row->parent][] = $row;
                        }
                }
                $topLevelLimit = 19; //You can get 19 top levels on a 800x600 Resolution
                $topLevelCount = 0;
                foreach ($comps as $row) {
                        if ($editAllComponents | $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'components', $row->option )) {
                                if ($row->parent == 0 && (trim( $row->admin_menu_link ) || array_key_exists( $row->id, $subs ))) {
                                        $topLevelCount++;
                                        if ($topLevelCount > $topLevelLimit) {
                                                continue;
                                        }
                                        $name = addslashes( $row->name );
                                        $alt = addslashes( $row->admin_menu_alt );
                                        $link = $row->admin_menu_link ? "'index2.php?$row->admin_menu_link'" : "null";
                                        echo "\t\t\t\t['<img src=\"../includes/$row->admin_menu_img\" />','$name',$link,null,'$alt'";
                                        if (array_key_exists( $row->id, $subs )) {
                                                foreach ($subs[$row->id] as $sub) {
                                                        echo ",\n";
                                                        $name = addslashes( $sub->name );
                                                        $alt = addslashes( $sub->admin_menu_alt );
                                                        $link = $sub->admin_menu_link ? "'index2.php?$sub->admin_menu_link'" : "null";
                                                        echo "\t\t\t\t\t['<img src=\"../includes/$sub->admin_menu_img\" />','$name',$link,null,'$alt']";
                                                }
                                        }
                                        echo "\n\t\t\t\t],\n";
                                }
                        }
                }
                if ($topLevelLimit < $topLevelCount) {
            echo "\t\t\t\t['<img src=\"../includes/js/ThemeOffice/sections.png\" />','Все компоненты...','index2.php?option=com_admin&task=listcomponents',null,'Все компоненты'],\n";
                }
?>
                        ],
<?php
        // Modules Sub-Menu
                if ($installModules | $editAllModules) {
?>                        _cmSplit,
                        [null,'Модули',null,null,'Управление модулями',
<?php
                        if ($editAllModules) {
?>                                ['<img src="../includes/js/ThemeOffice/module.png" />', 'Модули сайта', "index2.php?option=com_modules", null, 'Модули сайта'],
                                ['<img src="../includes/js/ThemeOffice/module.png" />', 'Модули админцентра', "index2.php?option=com_modules&client=admin", null, 'Модули панели управления'],
<?php
                        }
?>                        ],
<?php
                } // if ($installModules | $editAllModules)
        } // if $installComponents
        // Mambots Sub-Menu
        if ($installMambots | $editAllMambots) {
?>                        _cmSplit,
                        [null,'Мамботы',null,null,'Управление мамботами',
<?php
                if ($editAllMambots) {
?>                                ['<img src="../includes/js/ThemeOffice/module.png" />', 'Мамботы сайта', "index2.php?option=com_mambots", null, 'Мамботы сайта'],
<?php
                }
?>                        ],
<?php
        }
?>
<?php
        // Installer Sub-Menu
        if ($installModules) {
?>                        _cmSplit,
                        [null,'Установка/удаление',null,null,'Установка и удаление расширений Joomla',
<?php
                if ($manageTemplates) {
?>                                ['<img src="../includes/js/ThemeOffice/install.png" />','Шаблон сайта','index2.php?option=com_installer&element=template&client=',null,'Установка шаблонов сайта'],
                                ['<img src="../includes/js/ThemeOffice/install.png" />','Шаблон админцентра','index2.php?option=com_installer&element=template&client=admin',null,'Установка шаблонов панели управления'],
<?php
                }
                if ($manageLanguages) {
?>                                ['<img src="../includes/js/ThemeOffice/install.png" />','Языковой пакет','index2.php?option=com_installer&element=language',null,'Установка или удаление языковых пакетов'],
                                _cmSplit,
<?php
                }
?>                                ['<img src="../includes/js/ThemeOffice/install.png" />', 'Компоненты','index2.php?option=com_installer&element=component',null,'Установить или удалить компоненты'],
                                ['<img src="../includes/js/ThemeOffice/install.png" />', 'Модули', 'index2.php?option=com_installer&element=module', null, 'Установить или удалить модули'],
                                ['<img src="../includes/js/ThemeOffice/install.png" />', 'Мамботы', 'index2.php?option=com_installer&element=mambot', null, 'Установить или удалить мамботы'],
                        ],
<?php
        } // if ($installModules)
        // Messages Sub-Menu
        if ($canConfig) {
?>                        _cmSplit,
                          [null,'Сообщения',null,null,'Управление сообщениями',
                                  ['<img src="../includes/js/ThemeOffice/messaging_inbox.png" />','Входящие','index2.php?option=com_messages',null,'Личные сообщения'],
                                  ['<img src="../includes/js/ThemeOffice/messaging_config.png" />','Конфигурация','index2.php?option=com_messages&task=config&hidemainmenu=1',null,'Конфигурация']
                          ],
<?php
        // System Sub-Menu
		/*
?>                        _cmSplit,
                          [null,'Система',null,null,'Управление системой',
	  				['<img src="../includes/js/ThemeOffice/joomla_16x16.png" />', 'Проверить версию Joomla', 'index2.php?option=com_admin&task=versioncheck', null,'Проверить версию Joomla'], 				
	  				['<img src="../includes/js/ThemeOffice/sysinfo.png" />', 'Системная информация', 'index2.php?option=com_admin&task=sysinfo', null,'Системная информация'],
	<?php
		*/
	?>			_cmSplit,
	  			[null,'Система',null,null,'Управление системой',
	  				['<img src="../includes/js/ThemeOffice/joomla_16x16.png" />', 'Проверить версию Joomla', 'http://www.joomla.org/content/blogcategory/32/66/', '_blank','Проверка версии'], 				
                             ['<img src="../includes/js/ThemeOffice/sysinfo.png" />', 'Информация о системе', 'index2.php?option=com_admin&task=sysinfo', null,'Системная информация'],
<?php
                  if ($canConfig) {
	?>				
                               ['<img src="../includes/js/ThemeOffice/checkin.png" />', 'Разблокировать все объекты', 'index2.php?option=com_checkin', null,'Разблокировать все заблокированные объекты'],
<?php
                        if ($mosConfig_caching) {
?>                                ['<img src="../includes/js/ThemeOffice/config.png" />','Очистить кэш содержимого','index2.php?option=com_admin&task=clean_cache',null,'Очистка кэша объектов содержимого'],
                                ['<img src="../includes/js/ThemeOffice/config.png" />','Очистить ВЕСЬ кэш','index2.php?option=com_admin&task=clean_all_cache',null,'Очистка всего кэша'],
<?php
                        }
                }
?>                        ],
<?php
                        }
?>                        _cmSplit,
<?php
        // Help Sub-Menu
?>			[null,'Помощь','index2.php?option=com_admin&task=help',null,null]
                ];
                cmDraw ('myMenuID', myMenu, 'hbr', cmThemeOffice, 'ThemeOffice');
                </script>
<?php
        }


        /**
        * Show an disbaled version of the menu, used in edit pages
        * @param string The current user type
        */
        function showDisabled( $usertype='' ) {
                global $acl;

                $canConfig                         = $acl->acl_check( 'administration', 'config', 'users', $usertype );
                $installModules         = $acl->acl_check( 'administration', 'install', 'users', $usertype, 'modules', 'all' );
                $editAllModules         = $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'modules', 'all' );
                $installMambots         = $acl->acl_check( 'administration', 'install', 'users', $usertype, 'mambots', 'all' );
                $editAllMambots         = $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'mambots', 'all' );
                $installComponents         = $acl->acl_check( 'administration', 'install', 'users', $usertype, 'components', 'all' );
                $editAllComponents         = $acl->acl_check( 'administration', 'edit', 'users', $usertype, 'components', 'all' );
                $canMassMail                 = $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_massmail' );
                $canManageUsers         = $acl->acl_check( 'administration', 'manage', 'users', $usertype, 'components', 'com_users' );

                $text = 'На этой странице меню не активно';
                ?>
                <div id="myMenuID" class="inactive"></div>
                <script language="JavaScript" type="text/javascript">
                var myMenu =
                [
                <?php
        /* Home Sub-Menu */
                ?>
                        [null,'<?php echo 'Главная'; ?>',null,null,'<?php echo $text; ?>'],
                        _cmSplit,
                <?php
        /* Site Sub-Menu */
                ?>
                        [null,'<?php echo 'Сайт'; ?>',null,null,'<?php echo $text; ?>'
                        ],
                <?php
        /* Menu Sub-Menu */
                ?>
                        _cmSplit,
                        [null,'<?php echo 'Меню'; ?>',null,null,'<?php echo $text; ?>'
                        ],
                        _cmSplit,
                <?php
        /* Content Sub-Menu */
                ?>
                         [null,'<?php echo 'Содержимое'; ?>',null,null,'<?php echo $text; ?>'
                        ],
                <?php
        /* Components Sub-Menu */
                        if ( $installComponents) {
                                ?>
                                _cmSplit,
                                [null,'<?php echo 'Компоненты'; ?>',null,null,'<?php echo $text; ?>'
                                ],
                                <?php
                        } // if $installComponents
                        ?>
                <?php
        /* Modules Sub-Menu */
                        if ( $installModules | $editAllModules) {
                                ?>
                                _cmSplit,
                                [null,'<?php echo 'Модули'; ?>',null,null,'<?php echo $text; ?>'
                                ],
                                <?php
                        } // if ( $installModules | $editAllModules)
                        ?>
                <?php
        /* Mambots Sub-Menu */
                        if ( $installMambots | $editAllMambots) {
                                ?>
                                _cmSplit,
                                [null,'<?php echo 'Мамботы'; ?>',null,null,'<?php echo $text; ?>'
                                ],
                                <?php
                        } // if ( $installMambots | $editAllMambots)
                        ?>


                        <?php
        /* Installer Sub-Menu */
                        if ( $installModules) {
                                ?>
                                _cmSplit,
                                [null,'<?php echo 'Установка/удаление'; ?>',null,null,'<?php echo $text; ?>'
                                        <?php
                                        ?>
                                ],
                                <?php
                        } // if ( $installModules)
                        ?>
                        <?php
        /* Messages Sub-Menu */
                        if ( $canConfig) {
                                ?>
                                _cmSplit,
                                  [null,'<?php echo 'Сообщения'; ?>',null,null,'<?php echo $text; ?>'
                                  ],
                                <?php
                        }
                        ?>

                        <?php
        /* System Sub-Menu */
                        if ( $canConfig) {
                                ?>
                                _cmSplit,
                                  [null,'<?php echo 'Система'; ?>',null,null,'<?php echo $text; ?>'
                                ],
                                <?php
                        }
                        ?>
                        _cmSplit,
                        <?php
        /* Help Sub-Menu */
                        ?>
                        [null,'<?php echo 'Помощь'; ?>',null,null,'<?php echo $text; ?>']
                ];
                cmDraw ('myMenuID', myMenu, 'hbr', cmThemeOffice, 'ThemeOffice');
                </script>
                <?php
		}
        }
}
$cache =& mosCache::getCache( 'mos_fullmenu' );

$hide = intval( mosGetParam( $_REQUEST, 'hidemainmenu', 0 ) );

if ( $hide ) {
        mosFullAdminMenu::showDisabled( $my->usertype );
} else {
        mosFullAdminMenu::show( $my->usertype );
}
?>