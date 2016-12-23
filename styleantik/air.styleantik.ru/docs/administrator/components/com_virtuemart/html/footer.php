<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' ); 
//Чтобы убрать соощение о пожертвованиях поставьте $helps=0;
$helps=0;
/**
*
* @version $Id: footer.php,v 1.1 2005/10/25 19:34:23 soeren_nb Exp $
* @package VirtueMart
* @subpackage classes
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
?>
<br />
<?php
           $helps=($helps != 0)?"<div style=\"float:left;\"><small>Вы можете поддержать развитие русского виртуемарта (virtuemart.ru).<br />
		Обязательно укажите что этот платеж для RusVirtuemart.
		<table cellpadding=\"5\"  cellspacing=\"4\" rules=\"all\" style=\"border:1px solid #cccccc;color:#3B679A;\"><tr>
		<td>по WebMoney :</td>
		<td>
		Z288454500730<br/>
		R294674249457<br/>
		E369477093895<br/>
		U422301761913<br/>
		</td>
		</tr><tr>
		<td>
	Yandex-Деньги </td>
	<td>
	4100193886602
	</td>
	</tr>
	</table>
	</small></div>
	":''; 
 echo $helps;                 
?>           
<br />
<div align="center">
	<a href="http://virtuemart.ru" target="_blank" style="display:block;width:90%; filter: alpha(opacity=60);" onmouseover="if( this.filters) { this.filters.alpha.opacity=100; }" onmouseout="if( this.filters) { this.filters.alpha.opacity=60; }">
    	<div style="float:left;width:95%;text-align:center;cursor:pointer;">
    		<img align="middle" style="-moz-opacity: 0.6;" onmouseover="this.style.MozOpacity=1.0;" onmouseout="this.style.MozOpacity = 0.6;" src="<?php echo IMAGEURL ?>ps_image/powered-by-virtuemart.png" border="0" alt="Работает на RusVirtueMart" />
    	</div>
	</a>
</div>
