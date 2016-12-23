<?php 
defined( '_VALID_MOS' ) or die( '������ ������ ��������.' ); 
/**
*
* @version $Id: version.php 873 2007-06-27 02:58:56Z gregdev $
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) 2004-2007 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
if( class_exists( 'vmVersion' ) ) {
	$VMVERSION =& new vmVersion();
	
	$shortversion = $VMVERSION->PRODUCT . " " . $VMVERSION->RELEASE . " " . $VMVERSION->DEV_STATUS. " ";
		
	$myVersion = $shortversion . " [".$VMVERSION->CODENAME ."] <br />" . $VMVERSION->RELDATE . " "
	. $VMVERSION->RELTIME . " " . $VMVERSION->RELTZ;
	return;
}
if( !class_exists( 'vmVersion' ) ) {
/** Version information */
class vmVersion {
	/** @var string Product */
	var $PRODUCT = '����';
	/** @var int Release Number */
	var $RELEASE = '1.0.12.1';
	/** @var string Development Status */
	var $DEV_STATUS = 'stable';
	/** @var string Codename */
	// �������::�������
	var $CODENAME = '������� �������';
	/** @var string Date */
	var $RELDATE = '23/08/2007';
	/** @var string Time */
	var $RELTIME = '19:00';
	/** @var string Timezone */
	var $RELTZ = 'CET';
	/** @var string Revision */
	var $REVISION = '$Revision: 156 $';
	/** @var string Copyright Text */
	var $COPYRIGHT = 'Copyright (�) 2006-2007 ��������� �������� � ������� ����. (C) 2005-2007 Soeren Eberhardt. ��� ����� ��������.'; 
	/** @var string URL */
	var $URL = '<a href="http://virtuemart.ru">VirtueMart RE</a> ���������� ��������� ��������/�������� ��� Joomla!/Mambo ����������� ��� GNU/GPL ����������.';
}
$VMVERSION =& new vmVersion();

$shortversion = $VMVERSION->PRODUCT . " " . $VMVERSION->RELEASE . " " . $VMVERSION->DEV_STATUS. " ";
	
$myVersion = $shortversion . " [".$VMVERSION->CODENAME ."] <br />" . $VMVERSION->RELDATE . " "
	. $VMVERSION->RELTIME . " " . $VMVERSION->RELTZ;
	
}

?>
