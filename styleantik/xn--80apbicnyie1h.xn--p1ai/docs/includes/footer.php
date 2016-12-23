<?php
/**
* @version $Id: footer.php 3711 2006-05-29 03:25:07Z stingrey $
* @package Joomla
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

global $_VERSION;
$myfronpage = ( mosGetParam( $_REQUEST, 'option', '' )=="com_frontpage" || mosGetParam( $_REQUEST, 'option', '' )=="" )?1:0;
// NOTE - You may change this file to suit your site needs
?>
<?php
/*
<div align="center">
	&copy; <?php echo mosCurrentDate( '%Y' ) . ' ' . $GLOBALS['mosConfig_sitename'];?>
</div>
<div align="center"><b>Хостинг от RU-CENTER</b> 
  <br />
  <a href="http://www.hosting.nic.ru/" target="_blank">RU-CENTER > Надежный хостинг от надежной компании</a> | <a href="http://www.mail.nic.ru/" target="_blank" alt="Заведите собственную почту от RU-CENTER">Заведите собственную почту от RU-CENTER</a>
</div>
<div align="center">
	<?php echo $_VERSION->URL; ?><br />Русская локализация &copy; 2006 Joom.Ru - Русский дом <?php if ($myfronpage) { ?><a href="http://joom.ru" title="joomla cms, free joomla template, Joomla - бесплатная система управления контентом" target="_blank"><?php } ?>Joomla CMS<?php if ($myfronpage) { ?></a><?php } ?>
</div>
*/
?>
