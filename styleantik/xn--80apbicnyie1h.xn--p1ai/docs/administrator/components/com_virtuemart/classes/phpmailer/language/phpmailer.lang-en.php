<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
*
* @version $Id: phpmailer.lang-en.php,v 1.3 2005/09/29 20:02:18 soeren_nb Exp $
* @package VirtueMart
* @subpackage phpMailer
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

/**
 * PHPMailer language file.  
 * English Version
 */

$PHPMAILER_LANG = array();

$PHPMAILER_LANG["provide_address"] = 'Вы должны ввести емайл адресатов' .
                                     '.';
$PHPMAILER_LANG["mailer_not_supported"] = ' отправка писем не поддерживается.';
$PHPMAILER_LANG["execute"] = 'Не могу выполнить: ';
$PHPMAILER_LANG["instantiate"] = 'Не поддерживается функция для отправки писем в PHP.';
$PHPMAILER_LANG["authenticate"] = 'Ошибка SMTP: Не могу авторизоваться.';
$PHPMAILER_LANG["from_failed"] = 'Следующий адрес отправителя задан неверно: ';
$PHPMAILER_LANG["recipients_failed"] = 'Ошибка SMTP: Следующий получатели заданы неверно' .
                                       ': ';
$PHPMAILER_LANG["data_not_accepted"] = 'Ошибка SMTP: Данные не приняты.';
$PHPMAILER_LANG["connect_host"] = 'Ошибка SMTP : Не могу подключится к хосту SMTP.';
$PHPMAILER_LANG["file_access"] = 'Нет доступа к файлу: ';
$PHPMAILER_LANG["file_open"] = 'Ошибка в файле: Не могу открыть файл: ';
$PHPMAILER_LANG["encoding"] = 'Неизвестная кодировка: ';
?>
