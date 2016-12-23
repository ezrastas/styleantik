<?php
/**
* @version $Id: login.php 5973 2006-12-11 01:26:33Z robs $
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

/** проверка включения этого файла файлом-источником */
defined( '_VALID_MOS' ) or die( 'Доступ запрещен' );

$tstart = mosProfiler::getmicrotime();
?>
<?php echo "<?xml version=\"1.0\"?>\r\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $mosConfig_sitename; ?> - Панель управления Joomla!</title>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<style type="text/css">
@import url(templates/joomla_admin/css/admin_login.css);
</style>
<script language="javascript" type="text/javascript">
	function setFocus() {
		document.loginForm.usrname.select();
		document.loginForm.usrname.focus();
	}
</script>
<link rel="shortcut icon" href="<?php echo $mosConfig_live_site .'/images/favicon.ico';?>" />
</head>
<body onload="setFocus();">
<div id="wrapper">
	<div id="header">
			<div id="joomla"><img src="templates/joomla_admin/images/header_text.png" alt="Логотип Joomla!" /></div>
	</div>
</div>
<div id="ctr" align="center">
	<?php
	// handling of mosmsg text in url
	include_once( $mosConfig_absolute_path .'/administrator/modules/mod_mosmsg.php' );
	?>
	<div class="login">
		<div class="login-form">
			<img src="templates/joomla_admin/images/login.gif" alt="Вход" />
			<form action="index.php" method="post" name="loginForm" id="loginForm">
			<div class="form-block">
				<div class="inputlabel">Имя пользователя</div>
				<div><input name="usrname" type="text" class="inputbox" size="15" /></div>
				<div class="inputlabel">Пароль</div>
				<div><input name="pass" type="password" class="inputbox" size="15" /></div>
				<div align="left"><input type="submit" name="submit" class="button" value="Вход" /></div>
			</div>
			</form>
		</div>
		<div class="login-text">
			<div class="ctr"><img src="templates/joomla_admin/images/security.png" width="64" height="64" alt="security" /></div>
            <p>Добро пожаловать в Joomla!</p><p>Введите правильные имя пользователя и пароль для входа в административную часть Joomla!</p>
            <a href="<?php echo $mosConfig_live_site; ?>/" title="Перейти на сайт">Перейти на сайт</a>
		</div>
		<div class="clr"></div>
	</div>
</div>
<div id="break"></div>
<noscript>
!Предупреждение! Javascript должны быть разрешены для правильной работы админцентра
</noscript>
<div class="footer" align="center">
	<div align="center">
		<?php echo $_VERSION->URL; ?>
	</div>
</div>
</body>
</html>