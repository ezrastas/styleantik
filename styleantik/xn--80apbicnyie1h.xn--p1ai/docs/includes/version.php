<?php
/**
* @version $Id: version.php 6086 2006-12-24 19:13:59Z robs $
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

// no direct access
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

/**
 * Информация о версии
 * @package Joomla RE
 */
class joomlaVersion {
        /** @var string Продукт */
        var $PRODUCT    = 'Joomla!';
        /** @var int Номер основной версии */
        var $RELEASE    = '1.0';
        /** @var string Development Status */
        var $DEV_STATUS = 'Стабильная версия';
        /** @var int Подверсия */
        var $DEV_LEVEL  = '12';
        /** @var int Номер сборки */
	var $BUILD	 	= '$Revision: 6086 $';
        /** @var string Кодовое имя */
	var $CODENAME 	= 'Sunfire';
        /** @var string Дата */
	var $RELDATE 	= '25 December 2006';
        /** @var string Время */
	    var $RELTIME 	= '20:00';
        /** @var string Временная зона */
        var $RELTZ                 = 'UTC';
        /** @var string Текст авторских прав */
        var $COPYRIGHT  = 'Авторские права &copy; 2005 Open Source Matters. Все права защищены.';
        /** @var string URL */
        var $URL        = '<a href="http://www.joomla.org">Joomla!</a> - свободное программное обеспечение, распространяемое по лицензии GNU/GPL.';
	/** @var string Whether site is a production = 1 or demo site = 0: 1 is default */
	    var $SITE 		= 1; 
	/** @var string Whether site has restricted functionality mostly used for demo sites: 0 is default */
	var $RESTRICT	= 0;
	/** @var string Whether site is still in development phase (disables checks for /installation folder) - should be set to 0 for package release: 0 is default */
	var $SVN		= 0;


        /**
         * @return string Длинный формат версии
         */
        function getLongVersion() {
                return $this->PRODUCT .' '. $this->RELEASE .'.'. $this->DEV_LEVEL .' '
                        . $this->DEV_STATUS
                        .' [ '.$this->CODENAME .' ] '. $this->RELDATE .' '
                        . $this->RELTIME .' '. $this->RELTZ;
        }

        /**
         * @return string Краткий формат версии
         */
        function getShortVersion() {
                return $this->RELEASE .'.'. $this->DEV_LEVEL;
        }

        /**
         * @return string Version suffix for help files
         */
        function getHelpVersion() {
                if ($this->RELEASE > '1.0') {
                        return '.' . str_replace( '.', '', $this->RELEASE );
                } else {
                        return '';
                }
        }
}
$_VERSION = new joomlaVersion();

$version = $_VERSION->PRODUCT .' '. $_VERSION->RELEASE .'.'. $_VERSION->DEV_LEVEL .''
. $_VERSION->DEV_STATUS
.' [ '.$_VERSION->CODENAME .' ] '. $_VERSION->RELDATE .' '
. $_VERSION->RELTIME .' '. $_VERSION->RELTZ;
?>