<?php
/*
* Доработка под VirtueMart: sourpuss (c) 2007 Joom.ru
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$payee_purse=mosGetParam($_REQUEST,'payee_purse',null);

?>

<?php if (@LMI_MODE == 1) {?>


<font style="font-size : 12px; color : #ff0004; font-weight : bold;"><?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_ATTENTION ?></font><br /><br />
<font style="font-size : 12px;"><?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_DESCR ?><br />
<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_WMID_PURSES;
				if (LMI_PAYEE_WMR_PURSE != "") {
					echo LMI_PAYEE_WMR_PURSE; ?><br />
<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT;
				printf("%.2f", $db->f("order_total"));
				echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_R;
				}
				if (LMI_PAYEE_WMZ_PURSE != "") {
					echo LMI_PAYEE_WMZ_PURSE;?><br />
<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT;
					$def_order_total = $db->f("order_total");
					$rate = LMI_PAYEE_WMZ_RATE;
					$order_total = $def_order_total/$rate;
					printf("%.2f", $order_total);
				echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_Z;
				}
				if (LMI_PAYEE_WME_PURSE != "") {
					echo LMI_PAYEE_WME_PURSE;?><br />
<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT;
					$def_order_total = $db->f("order_total");
					$rate = LMI_PAYEE_WME_RATE;
					$order_total = $def_order_total/$rate;
					printf("%.2f", $order_total);
				echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_E;
				}
				if (LMI_PAYEE_WMU_PURSE != "") {
					echo LMI_PAYEE_WMU_PURSE;?><br />
<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT;
					$def_order_total = $db->f("order_total");
					$rate = LMI_PAYEE_WMU_RATE;
					$order_total = $def_order_total/$rate;
					printf("%.2f", $order_total);
				echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_U;
				}
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_NOTES;
printf("%08d", $db->f("order_id"))?>"</font><br /><br />
<?php }?>

<p>Откройте https://merchant.webmoney.ru/ и перейдите в раздел "Настройки",
настройте все кошельки который вы указали в полях "WMx Кошелек продавца:" и настройте их для приема платежей по инструкции "Merchant WebMoney Transfer".
В поле "Result URL:"  впишите следующий адрес;
если ваш хостинг поддерживает передачу данных через SSL то "https://(имя вашего сайта)/administrator/components/com_virtuemart/mailer_wm.php",
если нет то "http://(имя вашего сайта)/administrator/components/com_virtuemart/mailer_wm.php",
Для полей "Success URL:, Fail URL:" впишите следующий адрес;
если ваш хостинг поддерживает передачу данных через SSL то "https://(имя вашего сайта)/administrator/components/com_virtuemart/notify_wm.php",
если нет то "http://(имя вашего сайта)/administrator/components/com_virtuemart/notify_wm.php",
а "методы вызова" для этих полей поставьте в "POST".
Обязательно отметьте поле "Позволять использовать URL, передаваемые в форме:" а то параметр "Тест Да/Нет?" не будет обрабатываться, а будет использоваться из настроек
в "Merchant WebMoney Transfer".
</p>
Примечание: Не устанавливайте флажок "Передавать параметры в предварительном запросе" модуль пока их не обрабатывает.
<?php if (!isset($payee_purse)) { ?>
<form action="<?php $mosConfig_live_site ?>index.php" method="get">
<font style="font-size : 12px; font-weight : bold;"><?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_SELECT_DESCR ?></font><br />
<input type="hidden" name="option" value="com_virtuemart" />
<input type="hidden" name="page" value="account.order_details" />
<?php
global $lang, $Itemid;
if (isset($lang)) {
	echo "<input type=\"hidden\" name=\"lang\" value=\"$lang\" />";
}
if (isset($Itemid)) {
	echo "<input type=\"hidden\" name=\"Itemid\" value=\"$Itemid\" />";
}
?>
<input type="hidden" name="order_id" value="<?php $db->p("order_id") ?>" />
<?php if (LMI_PAYEE_WMR_PURSE != "") {?>
<input type="radio" name="payee_purse" value="<?php echo LMI_PAYEE_WMR_PURSE ?>" checked="checked" /><?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT_R;
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT;
printf("%.2f", $db->f("order_total"));
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_R;
} ?>
<?php if (LMI_PAYEE_WMZ_PURSE != "") {?>
<input type="radio" name="payee_purse" value="<?php echo LMI_PAYEE_WMZ_PURSE ?>" /><?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT_Z;
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT;
$def_order_total = $db->f("order_total");
$rate = LMI_PAYEE_WMZ_RATE;
$order_total = $def_order_total/$rate;
printf("%.2f", $order_total);
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_Z;
} ?>
<?php if (LMI_PAYEE_WME_PURSE != "") {?>
<input type="radio" name="payee_purse" value="<?php echo LMI_PAYEE_WME_PURSE ?>" /><?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT_E;
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT;
$def_order_total = $db->f("order_total");
$rate = LMI_PAYEE_WME_RATE;
$order_total = $def_order_total/$rate;
printf("%.2f", $order_total);
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_E;
} ?>
<?php if (LMI_PAYEE_WMU_PURSE != "") {?>
<input type="radio" name="payee_purse" value="<?php echo LMI_PAYEE_WMU_PURSE ?>" /><?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT_U;
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAYMENT;
$def_order_total = $db->f("order_total");
$rate = LMI_PAYEE_WMU_RATE;
$order_total = $def_order_total/$rate;
printf("%.2f", $order_total);
echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_U;
} ?>
<input align="middle" type="submit" value="<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_SELECT ?>" alt="<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_SELECT_DESCR ?>">
</form>
<?php }
  else { ?>
<?php
$def_order_total = $db->f("order_total");
$rates = substr($payee_purse, 0, 1 );
if ( $rates == 'R') {
$order_total = $def_order_total;
}
elseif ( $rates == 'Z') {
$rate = LMI_PAYEE_WMZ_RATE;
$order_total = $def_order_total/$rate;
}
elseif ( $rates == 'E') {
$rate = LMI_PAYEE_WME_RATE;
$order_total = $def_order_total/$rate;
}
else {
$rate = LMI_PAYEE_WMU_RATE;
$order_total = $def_order_total/$rate;
}
//$payee_purse =
?>
<form action="https://merchant.webmoney.ru/lmi/payment.asp" method="post">
<font style="font-size : 12px; font-weight : bold;">
<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAY_ORDER ?>
<input align="middle" type="image" name="submit" src="/images/M_images/logo_wm.gif" border="0" alt="<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAY ?>">
<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_PAY_ORDER ?></font>
<input type="hidden" name="LMI_PAYMENT_NO" value="<?php $db->p("order_id") ?>" />
<input type="hidden" name="LMI_PAYMENT_AMOUNT" value="<?php printf("%.2f", $order_total) ?>" />
<input type="hidden" name="LMI_PAYEE_PURSE" value="<?php echo $payee_purse ?>" />
<input type="hidden" name="LMI_MODE" value="<?php echo LMI_MODE ?>" />
<input type="hidden" name="LMI_PAYMENT_DESC" value="<?php echo $VM_LANG->_PHPSHOP_WEBMONEY_PAYMEXTRA_TEXT;
printf("%08d", $db->f("order_id"))?>" />
<input type="hidden" name="invoice" value="<?php $db->p("order_number") ?>" />
<input type="hidden" name="payee_purse" value="<?php echo $payee_purse ?>" />
<input type="hidden" name="WEBMONEY_EMAIL" value="<?php echo WEBMONEY_EMAIL ?>" />
</form>
<?php } ?>