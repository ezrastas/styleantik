<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
/**
*
* @version $Id: help.about.php,v 1.4 2005/10/18 04:35:41 soeren_nb Exp $
* @package VirtueMart
* @subpackage html
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
mm_showMyFileName( __FILE__ );
include_once( ADMINPATH . "version.php" );
?>
<br /><br />
<table align="center" style="width: 80%;" class="admin">
 <tbody>
  <tr>
   <td>
    <pre><strong>Ваш<?php echo $VMVERSION->PRODUCT ?> версии:</strong> <?php echo $myVersion ?></pre>
    <img hspace="5" align="left" src="<?php echo $mosConfig_live_site ?>/administrator/components/com_virtuemart/cart.gif" alt="cart.gif" />
    <span style="font-weight: bold;">
     VirtueMart</span> это полностью  решение с открытым исходным кодом онлайн каталога/магазина Mambo и Joomla. Это приложение состоит из компонента, 6 модулей и 2 мамботов.
     Virtuemart развился из скрипта корзины, называемого  &quot;phpShop&quot; (Авторы: Edikon Corp. &amp; <a href="http://www.virtuemart.org/" target="_blank">phpShop</a> сообщество).
     <br /><br />VirtueMart выпускается под <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU / GPL лицензией</a>.
     <br /><br /><br />Здесь малый список тех кто внес свой вклад в развитие Virtuemart.
      <br /><br />
      <span style="font-weight: bold;">Лидер проекта:</span> Соерен Эбенхардт<br />
      <span style="font-weight: bold;">Домашняя страница:</span> <a href="http://virtuemart.net" target="_blank" title="virtuemart.net">http://virtuemart.net</a><br />
      <span style="font-weight: bold;">Форум:</span> <a href="http://virtuemart.net/index.php?option=com_smf&Itemid=71" target="_blank" title="VirtueMart Forum">Форум VirtueMart</a><br />
      <br />
      Проект по локализации Virtuemart
      <br />
	  <span style="font-weight: bold;">Лидер проекта:</span> Григорий Федоринов<br />
      <span style="font-weight: bold;">Домашняя страница:</span> <a href="http://virtuemart.ru/" target="_blank" title="virtuemart.ru">http://virtuemart.ru</a><br />
      <span style="font-weight: bold;">Форум:</span> <a href="http://forum.virtuemart.ru/" target="_blank" title="VirtueMart Форум">Форум VirtueMart</a><br />	      
      <br />
	<?php
	include( ADMINPATH."COPYRIGHT.php" );
	?>

	<br />
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank"><span style="font-weight: bold;">
      Если желаете поддержите Соерена в Развитии проекта.</span><br style="font-weight: bold;" /><br />
      <input type="hidden" name="cmd" value="_xclick" />
      <input type="hidden" name="business" value="soeren_nb@yahoo.de" />
      <input type="hidden" name="item_name" value="VirtueMart Donation" />
      <input type="hidden" name="item_number" />
      <input type="hidden" name="currency_code" value="EUR" />
      <input type="hidden" name="tax" value="0" />
      <input type="hidden" name="no_note" value="0" />
      <input type="hidden" name="amount" />
      <input type="image" border="0" src="<?php echo $mosConfig_live_site ?>/administrator/components/com_virtuemart/x-click-but21.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
    </form>
    
    <br />
   </td>
  </tr>
 </tbody>
</table>
