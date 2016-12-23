<?php
	/***************************************************\
	**   DatsoGallery - A Joomla! Gallery Component    **
	**   Copyright (C) 2006-2007  by Andrey Datso      **
	**   Version    : 1.3.9.1                          **
	**   Homepage   : http://www.datso.fr              **
	**   License    : Copyright, don't distribute      **
	\***************************************************/

    defined ('_VALID_MOS') or die('Direct Access to this location is not allowed.');
    error_reporting(E_ALL ^ E_NOTICE);

    function resize_image($src_file, $dest_file, $new_size, $method, $dest_qual){
	$imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG', 4 => 'SWF', 5 => 'PSD',
	6 => 'BMP', 7 => 'TIFF', 8 => 'TIFF', 9 => 'JPC', 10 => 'JP2',
	11 => 'JPX', 12 => 'JB2', 13 => 'SWC', 14 => 'IFF');
	$imginfo = getimagesize($src_file);
    if ($imginfo == null) die(_DG_FOUR_ERR);
    $imginfo[2] = $imagetype[$imginfo[2]];
    if ($imginfo[2] != 'JPG' && $imginfo[2] != 'PNG' && $imginfo[2] != 'GIF' && ($method == 'gd1' || $method == 'gd2'))
    die("ОШИБКА: GD библиотека способна обрабатывать только JPG и PNG файлы!");
    $srcWidth = $imginfo[0];
	$srcHeight = $imginfo[1];
    $ratio = max($srcWidth, $srcHeight) / $new_size;
	$ratio = max($ratio, 1.0);
	$destWidth = (int)($srcWidth / $ratio);
	$destHeight = (int)($srcHeight / $ratio);
    switch ($method) {
    case "gd1" :
	if ($imginfo[2] == 'JPG')
	$src_img = imagecreatefromjpeg($src_file);
	else if ($imginfo[2] == 'PNG')
	$src_img = imagecreatefrompng($src_file);
	else
	$src_img = imagecreatefromgif($src_file);
	if (!$src_img){
	$ERROR = $lang_errors['invalid_image'];
	return false;
	}
	$dst_img = imagecreate($destWidth, $destHeight);
	imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
	imagejpeg($dst_img, $dest_file, $dest_qual);
	imagedestroy($src_img);
	imagedestroy($dst_img);
	break;
    case "gd2" :
    if ($imginfo[2] == 'JPG') {
	$src_img = imagecreatefromjpeg($src_file);}
	else if ($imginfo[2] == 'PNG'){
	$src_img = imagecreatefrompng($src_file);}
	else {
	$src_img = imagecreatefromgif($src_file);}
    if (!$src_img){
	$ERROR = $lang_errors['invalid_image'];
	return false;
	}
	$dst_img = imagecreatetruecolor($destWidth, $destHeight);
	imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
	imagejpeg($dst_img, $dest_file, $dest_qual);
	imagedestroy($src_img);
	imagedestroy($dst_img);
	break;
	}
    chmod($dest_file, octdec('755'));
    $imginfo = getimagesize($dest_file);
	if ($imginfo == null){
	return false;
	} else {
	return true;
	}
	}

    function thumb($srcFile, $dstFile, $ad_thumbwidth, $ad_thumbheight, $ad_thumbquality){
    global $mosConfig_absolute_path;
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/config.datsogallery.php");
    list($srcWidth, $srcHeight, $type) = getimagesize($srcFile);
    switch ($type) {
    case 1 : $srcHandle = imagecreatefromgif($srcFile); break;
    case 2 : $srcHandle = imagecreatefromjpeg($srcFile); break;
    case 3 : $srcHandle = imagecreatefrompng($srcFile); break;
    default : echo _DG_FOUR_ERR;
    return false;
    }
    if (!$srcHandle) {
    echo 'Could not execute imagecreatefrom() function! ';
    return false;
    }
    if($srcHeight < $srcWidth) {
    $ratio = (double)($srcHeight / $ad_thumbheight);
    $cpyWidth = round($ad_thumbwidth * $ratio);
    if ($cpyWidth > $srcWidth) {
    $ratio = (double)($srcWidth / $ad_thumbwidth);
    $cpyWidth = $srcWidth;
    $cpyHeight = round($ad_thumbheight * $ratio);
    $xOffset = 0;
    $yOffset = round(($srcHeight - $cpyHeight) / 2);
    } else {
    $cpyHeight = $srcHeight;
    $xOffset = round(($srcWidth - $cpyWidth) / 2);
    $yOffset = 0;
    }
    } else {
    $ratio = (double)($srcWidth / $ad_thumbwidth);
    $cpyHeight = round($ad_thumbheight * $ratio);
    if ($cpyHeight > $srcHeight) {
    $ratio = (double)($srcHeight / $ad_thumbheight);
    $cpyHeight = $srcHeight;
    $cpyWidth = round($ad_thumbwidth * $ratio);
    $xOffset = round(($srcWidth - $cpyWidth) / 2);
    $yOffset = 0;
    } else {
    $cpyWidth = $srcWidth;
    $xOffset = 0;
    $yOffset = round(($srcHeight - $cpyHeight) / 2);
    }
    }
    $dstHandle = ImageCreateTrueColor($ad_thumbwidth, $ad_thumbheight);
    if (!imagecopyresampled($dstHandle, $srcHandle, 0, 0, $xOffset, $yOffset, $ad_thumbwidth, $ad_thumbheight, $cpyWidth, $cpyHeight)) {
    echo 'Could not execute imagecopyresampled() function! ';
    return false;
    }
    imagedestroy($srcHandle);
    switch ($type) {
    case 1 : imagegif($dstHandle, $dstFile); break;
    case 2 : imagejpeg($dstHandle, $dstFile, $ad_thumbquality); break;
    case 3 : imagepng($dstHandle, $dstFile); break;
    default : echo 'File Type Not Supported! ';
    return false;
    }
    imagedestroy($dstHandle);
    return true;
    }

    function bb_decode ($text) {
	$text = nl2br($text);
	static $bbcode_tpl = array();
	static $patterns = array();
	static $replacements = array();
	if ((strpos($text, "[") === false || strpos($text, "]") === false)) {
	return $text;
	}
	$text = str_replace("[b]", '<b>', $text);
	$text = str_replace("[/b]", '</b>', $text);
	$text = str_replace("[u]", '<u>', $text);
	$text = str_replace("[/u]", '</u>', $text);
	$text = str_replace("[i]", '<i>', $text);
	$text = str_replace("[/i]", '</i>', $text);
    $text = str_replace("[B]", '<b>', $text);
	$text = str_replace("[/B]", '</b>', $text);
    $text = str_replace("[U]", '<u>', $text);
	$text = str_replace("[/U]", '</u>', $text);
    $text = str_replace("[I]", '<i>', $text);
	$text = str_replace("[/I]", '</i>', $text);
	if (!count($bbcode_tpl)) {
	$bbcode_tpl['url'] = '<span class="bblink"><a href="{URL}" target="_blank">{DESCRIPTION}</a></span>';
	$bbcode_tpl['email'] = '<span class="bblink"><a href="mailto:{EMAIL}">{EMAIL}</a></span>';
	$bbcode_tpl['url1'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
	$bbcode_tpl['url1'] = str_replace('{DESCRIPTION}', '\\1\\2', $bbcode_tpl['url1']);
	$bbcode_tpl['url2'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
	$bbcode_tpl['url2'] = str_replace('{DESCRIPTION}', '\\1', $bbcode_tpl['url2']);
	$bbcode_tpl['url3'] = str_replace('{URL}', '\\1\\2', $bbcode_tpl['url']);
	$bbcode_tpl['url3'] = str_replace('{DESCRIPTION}', '\\3', $bbcode_tpl['url3']);
	$bbcode_tpl['url4'] = str_replace('{URL}', 'http://\\1', $bbcode_tpl['url']);
	$bbcode_tpl['url4'] = str_replace('{DESCRIPTION}', '\\2', $bbcode_tpl['url4']);
	$bbcode_tpl['email'] = str_replace('{EMAIL}', '\\1', $bbcode_tpl['email']);
	$patterns[1] = "#\[url\]([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si";
	$replacements[1] = $bbcode_tpl['url1'];
	$patterns[2] = "#\[url\]([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\[/url\]#si";
	$replacements[2] = $bbcode_tpl['url2'];
	$patterns[3] = "#\[url=([a-z]+?://){1}([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si";
	$replacements[3] = $bbcode_tpl['url3'];
	$patterns[4] = "#\[url=([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+\(\)]+)\](.*?)\[/url\]#si";
	$replacements[4] = $bbcode_tpl['url4'];
	$patterns[5] = "#\[email\]([a-z0-9\-_.]+?@[\w\-]+\.([\w\-\.]+\.)?[\w]+)\[/email\]#si";
	$replacements[5] = $bbcode_tpl['email'];
	}
	$text = preg_replace($patterns, $replacements, $text);
	return $text;
	}

    function removeFile($srcFilename, $srcFilePath) {
	$removeFilename = $srcFilePath . '/' . $srcFilename;
	if (unlink($removeFilename)) {
	return true;
	} else {
	return false;
	}
	}

?>