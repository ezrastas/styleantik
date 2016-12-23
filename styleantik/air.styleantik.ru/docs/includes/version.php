<?php
/**
* @version $Id: version.php 6086 2006-12-24 19:13:59Z robs $
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

// no direct access
defined( '_VALID_MOS' ) or die( '������ ��������' );

/**
 * ���������� � ������
 * @package Joomla RE
 */
class joomlaVersion {
        /** @var string ������� */
        var $PRODUCT    = 'Joomla!';
        /** @var int ����� �������� ������ */
        var $RELEASE    = '1.0';
        /** @var string Development Status */
        var $DEV_STATUS = '���������� ������';
        /** @var int ��������� */
        var $DEV_LEVEL  = '12';
        /** @var int ����� ������ */
	var $BUILD	 	= '$Revision: 6086 $';
        /** @var string ������� ��� */
	var $CODENAME 	= 'Sunfire';
        /** @var string ���� */
	var $RELDATE 	= '25 December 2006';
        /** @var string ����� */
	    var $RELTIME 	= '20:00';
        /** @var string ��������� ���� */
        var $RELTZ                 = 'UTC';
        /** @var string ����� ��������� ���� */
        var $COPYRIGHT  = '��������� ����� &copy; 2005 Open Source Matters. ��� ����� ��������.';
        /** @var string URL */
        var $URL        = '<a href="http://www.joomla.org">Joomla!</a> - ��������� ����������� �����������, ���������������� �� �������� GNU/GPL.';
	/** @var string Whether site is a production = 1 or demo site = 0: 1 is default */
	    var $SITE 		= 1; 
	/** @var string Whether site has restricted functionality mostly used for demo sites: 0 is default */
	var $RESTRICT	= 0;
	/** @var string Whether site is still in development phase (disables checks for /installation folder) - should be set to 0 for package release: 0 is default */
	var $SVN		= 0;


        /**
         * @return string ������� ������ ������
         */
        function getLongVersion() {
                return $this->PRODUCT .' '. $this->RELEASE .'.'. $this->DEV_LEVEL .' '
                        . $this->DEV_STATUS
                        .' [ '.$this->CODENAME .' ] '. $this->RELDATE .' '
                        . $this->RELTIME .' '. $this->RELTZ;
        }

        /**
         * @return string ������� ������ ������
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