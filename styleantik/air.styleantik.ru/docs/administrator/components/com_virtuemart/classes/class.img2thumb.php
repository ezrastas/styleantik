<?php
// Важно: Должно быть включаемо извне Mambo Framework!
// defined( '_VALID_MOS' ) or die( 'Прямой доступ к этому каталогу не разрешен.' );
/**
*
* @version $Id: class.img2thumb.php,v 1.5.2.1 2006/03/14 18:42:10 soeren_nb Exp $
* @package VirtueMart
* @subpackage classes
* @copyright Авторские права (C) 2004-2005 Soeren Eberhardt. Все права защищены.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотреть LICENSE.php
* VirtueMart - это бесплатное программное обеспечение. Эта версия могла быть изменена в соответствии
* с Общей Общественной ЛицензиейGNU, и при распространении включает в себя или
* является производной от работ, лицензированных по Общей Общественной Лицензии GNU или
* других есплатных лицензий или лицензий для программного обеспечения с открытым исходным кодом.
* Смотрите /administrator/components/com_virtuemart/COPYRIGHT.php для получения информации об авторских правах и деталей.
*
* http://virtuemart.net
* 
* Перевод выполнен: Департаментом переводов Юридической фирмы 'РЕДУТ-V' (www.ukrconsulting.biz)
* Автор перевода: Данильченко Станислав
* 
*  @copyright Авторские права (C) 2007 Федоринов Григорий и Команда ВМРЕ http://virtuemart.ru
*/

/**
* class Image2Thumbnail
* Создание пиктограмм с помощью PHP4 и GDLib (рекомендуется, но не обязательно: 2.0.1 !)
*
*
* @author     Andreas Martens <heyn@plautdietsch.de>
* @author     Patrick Teague <webdude@veslach.com>
* @author     Soeren Eberhardt <soeren@virtuemart.net>
*@version	1.0b
*@date       modified 11/22/2004
*@modifications 
*   - добавлена поддержка GDLib < 2.0.1
*	- добавлена поддержка чтения gif изображений 
*	- создает jpg пиктограммы
*	- изменены несколько групп 'if' данных в одну - 'switch' данные
*   - исходный код прокоментирован таким образом, чтобы изменения было возможно идентифицировать.
*/

class Img2Thumb	{
// Новая модификация
/**
*	частные переменные - не использовать
*	
*	@var int $bg_red				0-255 - переменная красного цвета для заполнителя фона
*	@var int $bg_green				0-255 - переменная зеленого цвета для заполнителя фона
*	@var int $bg_blue				0-255 - переменная синего цвета для заполнения фона
*	@var int $maxSize				0-1 - true/false - указывает, должна ли пиктограмма быть заполнена до максимальных пикселей
*/
	var $bg_red;
	var $bg_green;
	var $bg_blue;
	var $maxSize;
	/**
	 * string @var - Имя файла для пиктограммы
	 */
	var $fileout;

/**
*   Конструктор - требует следующих переменных:
*	
*	@param string $filename			каталог изображения
*	
*	Существуют дополнительные переменные:
*	
*	@param int $newxsize			новая максимальная ширина изображения
*	@param int $newysize			новая максимальная высота изображения
*	@param string $fileout			каталог для готового изображения
*	@param int $thumbMaxSize		должен ли заполняться фон пиктограммы, чтобы она точно соответствовала $newxsize x $newysize
*	@param int $bgred				0-255 - переменная красного цвета для заполнителя фона
*	@param int $bggreen				0-255 - переменная зеленого цвета для заполнителя фона
*	@param int $bgblue				0-255 - переменная синего цвета для заполнителя фона
*	
*/
	function Img2Thumb($filename, $newxsize=60, $newysize=60, $fileout='',
		$thumbMaxSize=0, $bgred=0, $bggreen=0, $bgblue=0)
	{		
		
		//	Новая модификация - проверяет, чтобы int цвета точно был в диапазоне
		if($thumbMaxSize)
		{
			$this->maxSize = true;
		}
		else
		{
			$this->maxSize = false;
		}
		if($bgred>=0 || $bgred<=255)
		{
			$this->bg_red = $bgred;
		}
		else
		{
			$this->bg_red = 0;
		}
		if($bggreen>=0 || $bggreen<=255)
		{
			$this->bg_green = $bggreen;
		}
		else
		{
			$this->bg_green = 0;
		}
		if($bgblue>=0 || $bgblue<=255)
		{
			$this->bg_blue = $bgblue;
		}
		else
		{
			$this->bg_blue = 0;
		}
		
		$this->NewImgCreate($filename,$newxsize,$newysize,$fileout);
	}
	
/**
*  
*	частная функция - не вызывать
*
*/
	function NewImgCreate($filename,$newxsize,$newysize,$fileout)
	{

		$type = $this->GetImgType($filename);
		
		$pathinfo = pathinfo( $fileout );
		if( empty( $pathinfo['extension'])) {
			$fileout .= '.'.$type;
		}
		$this->fileout = $fileout;
		
		// освобождается немного памяти
		clearstatcache();
		
		switch($type)
		{
			case "gif":
				// к сожалению, эта функция не работает в windows
				// через предварительно скомпилированную php установку :(
				// вместе с этим, она должна работать на всех остальных системах.
				if( function_exists("imagecreatefromgif") )
				{
					$orig_img = imagecreatefromgif($filename);
					break;
				}
				else
				{
					echo 'Извините, этот сервер не поддерживает <b>imagecreatefromgif()</b>';
					exit;
					break;
				}
			case "jpg":
				$orig_img = imagecreatefromjpeg($filename);
				break;
			case "png":
				$orig_img = imagecreatefrompng($filename);
				break;
		}
		
		$new_img =$this->NewImgResize($orig_img,$newxsize,$newysize,$filename);

		if (!empty($fileout))
		{
			 $this-> NewImgSave($new_img,$fileout,$type);
		}
		else
		{
			 $this->NewImgShow($new_img,$type);
		}
		
		ImageDestroy($new_img);
		ImageDestroy($orig_img);
	}
	
	/**
*  
*	частная функция - не вызывать
*	включает функция ImageCreateTrueColor и ImageCopyResampled , которые доступны только в GD 2.0.1 или выше !
*/
	function NewImgResize($orig_img,$newxsize,$newysize,$filename)
	{
		//getimagesize возвращает массив
		// [0] = ширина в пикселях
		// [1] = высота в пикселях
		// [2] = типа
		// [3] = значения тэга изображения "width=xx height=xx"
		
		$orig_size = getimagesize($filename);

		$maxX = $newxsize;
		$maxY = $newysize;
		
		if ($orig_size[0]<$orig_size[1])
		{
			$newxsize = $newysize * ($orig_size[0]/$orig_size[1]);
			$adjustX = ($maxX - $newxsize)/2;
			$adjustY = 0;
		}
		else
		{
			$newysize = $newxsize / ($orig_size[0]/$orig_size[1]);
			$adjustX = 0;
			$adjustY = ($maxY - $newysize)/2;
		}
		
		/* Исходный код удален, чтобы разрешить maxSize пиктограммы
		$im_out = ImageCreateTrueColor($newxsize,$newysize);
		ImageCopyResampled($im_out, $orig_img, 0, 0, 0, 0,
			$newxsize, $newysize,$orig_size[0], $orig_size[1]);
		*/

		//	Новая модификация - создает новое изображение с использованием maxSize
		if( $this->maxSize )
		{
			if( function_exists("imagecreatetruecolor") )
			  $im_out = imagecreatetruecolor($maxX,$maxY);
			else
			  $im_out = imagecreate($maxX,$maxY);
			  
                        // Фон изображения нужно заполнять только в случае, если он прозрачен, не все хотят обычный черный цвет
                        $bgfill = imagecolorallocate( $im_out, $this->bg_red, $this->bg_green, $this->bg_blue );
                    
                        if( function_exists( "imageAntiAlias" )) {
                                imageAntiAlias($im_out,true);
                        }
                    imagealphablending($im_out, false);
                    if( function_exists( "imagesavealpha")) {
                        imagesavealpha($im_out,true);
                    }
                    if( function_exists( "imagecolorallocatealpha")) {
                        $transparent = imagecolorallocatealpha($im_out, 255, 255, 255, 127);
                    }
                        
                        //imagefill( $im_out, 0,0, $bgfill );
                        if( function_exists("imagecopyresampled") ){
                                ImageCopyResampled($im_out, $orig_img, $adjustX, $adjustY, 0, 0, $newxsize, $newysize,$orig_size[0], $orig_size[1]);
                        }
                        else {
                                ImageCopyResized($im_out, $orig_img, $adjustX, $adjustY, 0, 0, $newxsize, $newysize,$orig_size[0], $orig_size[1]);
                        }
                        
                }
                else
                {
                
			if( function_exists("imagecreatetruecolor") )
			  $im_out = ImageCreateTrueColor($newxsize,$newysize);
			else
			  $im_out = imagecreate($newxsize,$newysize);
			  
			if( function_exists( "imageAntiAlias" ))
			  imageAntiAlias($im_out,true);
 		    imagealphablending($im_out, false);
		    if( function_exists( "imagesavealpha"))
			  imagesavealpha($im_out,true);
		    if( function_exists( "imagecolorallocatealpha"))
			  $transparent = imagecolorallocatealpha($im_out, 255, 255, 255, 127);
			  
			if( function_exists("imagecopyresampled") )
			  ImageCopyResampled($im_out, $orig_img, 0, 0, 0, 0, $newxsize, $newysize,$orig_size[0], $orig_size[1]);
			else
			  ImageCopyResized($im_out, $orig_img, 0, 0, 0, 0, $newxsize, $newysize,$orig_size[0], $orig_size[1]);
		}
		

		return $im_out;
	}
	
	/**
*  
*	частная функция - не вызывать
*
*/
	function NewImgSave($new_img,$fileout,$type)
	{

                switch($type)
                {
                        case "gif":
                                if( !function_exists("imagegif") )
                                {
                                        if (strtolower(substr($fileout,strlen($fileout)-4,4))!=".gif") {
                                                $fileout .= ".png";
                                        }
                                        return imagepng($new_img,$fileout);
                                        
                                }
                                else {
                                        if (strtolower(substr($fileout,strlen($fileout)-4,4))!=".gif") {
                                                $fileout .= '.gif';
                                        }
                                        return imagegif( $new_img, $fileout );
                                        
                                }
                                break;
                        case "jpg":
                                if (strtolower(substr($fileout,strlen($fileout)-4,4))!=".jpg")
                                        $fileout .= ".jpg";
                                return imagejpeg($new_img, $fileout, 100);
                                break;
                        case "png":
                                if (strtolower(substr($fileout,strlen($fileout)-4,4))!=".png")
					$fileout .= ".png";
				return imagepng($new_img,$fileout);
				break;
		}
	}
	
	/**
*  
*	частная фцнкция - не вызывать
*
*/
	function NewImgShow($new_img,$type)
	{
		/* Исходный код удален для использования 'switch' данных
		if ($type=="png")
		{
			header ("Content-type: image/png");
			 return imagepng($new_img);
		}
		if ($type=="jpg")
		{
			header ("Content-type: image/jpeg");
			 return imagejpeg($new_img);
		}
		*/
		switch($type)
		{
			case "gif":
				if( function_exists("imagegif") )
				{
					header ("Content-type: image/gif");
					return imagegif($new_img);
					break;
				}
				else
					$this->NewImgShow( $new_img, "jpg" );
			case "jpg":
				header ("Content-type: image/jpeg");
				return imagejpeg($new_img);
				break;
			case "png":
				header ("Content-type: image/png");
				return imagepng($new_img);
				break;
		}
	}
	
	/**
*  
*	частная функция - не вызывать
*
*   1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF,
*   5 = PSD, 6 = BMP,
*   7 = TIFF(порядок бит intel),
*   8 = TIFF(порядок бит motorola),
*   9 = JPC, 10 = JP2, 11 = JPX,
*   12 = JB2, 13 = SWC, 14 = IFF
*/
	function GetImgType($filename)
	{
		$info = getimagesize($filename);
		/* Исходный код удален для использования 'switch' данных
		if($size[2]==2)
			return "jpg";
		elseif($size[2]==3)
			return "png";
		*/
		switch($info[2]) {
			case 1:
				return "gif";
				break;
			case 2:
				return "jpg";
				break;
			case 3:
				return "png";
				break;
			default:
				return false;
		}
	}
	
}

?>
