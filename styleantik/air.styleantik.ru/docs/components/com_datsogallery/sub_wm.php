<?php

    $host  = $_SERVER['HTTP_HOST'];
    $pic = $_GET['src'];
    $img_info = getimagesize($pic);
	if (!$img_info) {
    header("Location: http://$host");
    exit;
	}else{
    header('content-type: image/jpeg');
    $watermark = imagecreatefrompng('watermark.png');
    $watermark_width = imagesx($watermark);
    $watermark_height = imagesy($watermark);
    $image = imagecreatetruecolor($watermark_width, $watermark_height);
    $image = imagecreatefromjpeg($_GET['src']);
    $size = getimagesize($_GET['src']);
    $dest_x = $size[0] - $watermark_width - 5;
    $dest_y = $size[1] - $watermark_height - 5;
    imagecopyresampled($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, $watermark_width, $watermark_height);
    imagejpeg($image, '', $dest_qual=95);
    imagedestroy($image);
    imagedestroy($watermark);
    }

?>
