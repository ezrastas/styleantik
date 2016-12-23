<?php
// �����: ������ ���� ��������� ����� Mambo Framework!
// defined( '_VALID_MOS' ) or die( '������ ������ � ����� �������� �� ��������.' );
/**
*
* @version $Id: class.img2thumb.php,v 1.5.2.1 2006/03/14 18:42:10 soeren_nb Exp $
* @package VirtueMart
* @subpackage classes
* @copyright ��������� ����� (C) 2004-2005 Soeren Eberhardt. ��� ����� ��������.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* VirtueMart - ��� ���������� ����������� �����������. ��� ������ ����� ���� �������� � ������������
* � ����� ������������ ���������GNU, � ��� ��������������� �������� � ���� ���
* �������� ����������� �� �����, ��������������� �� ����� ������������ �������� GNU ���
* ������ ��������� �������� ��� �������� ��� ������������ ����������� � �������� �������� �����.
* �������� /administrator/components/com_virtuemart/COPYRIGHT.php ��� ��������� ���������� �� ��������� ������ � �������.
*
* http://virtuemart.net
* 
* ������� ��������: ������������� ��������� ����������� ����� '�����-V' (www.ukrconsulting.biz)
* ����� ��������: ����������� ���������
* 
*  @copyright ��������� ����� (C) 2007 ��������� �������� � ������� ���� http://virtuemart.ru
*/

/**
* class Image2Thumbnail
* �������� ���������� � ������� PHP4 � GDLib (�������������, �� �� �����������: 2.0.1 !)
*
*
* @author     Andreas Martens <heyn@plautdietsch.de>
* @author     Patrick Teague <webdude@veslach.com>
* @author     Soeren Eberhardt <soeren@virtuemart.net>
*@version	1.0b
*@date       modified 11/22/2004
*@modifications 
*   - ��������� ��������� GDLib < 2.0.1
*	- ��������� ��������� ������ gif ����������� 
*	- ������� jpg �����������
*	- �������� ��������� ����� 'if' ������ � ���� - 'switch' ������
*   - �������� ��� ��������������� ����� �������, ����� ��������� ���� �������� ����������������.
*/

class Img2Thumb	{
// ����� �����������
/**
*	������� ���������� - �� ������������
*	
*	@var int $bg_red				0-255 - ���������� �������� ����� ��� ����������� ����
*	@var int $bg_green				0-255 - ���������� �������� ����� ��� ����������� ����
*	@var int $bg_blue				0-255 - ���������� ������ ����� ��� ���������� ����
*	@var int $maxSize				0-1 - true/false - ���������, ������ �� ����������� ���� ��������� �� ������������ ��������
*/
	var $bg_red;
	var $bg_green;
	var $bg_blue;
	var $maxSize;
	/**
	 * string @var - ��� ����� ��� �����������
	 */
	var $fileout;

/**
*   ����������� - ������� ��������� ����������:
*	
*	@param string $filename			������� �����������
*	
*	���������� �������������� ����������:
*	
*	@param int $newxsize			����� ������������ ������ �����������
*	@param int $newysize			����� ������������ ������ �����������
*	@param string $fileout			������� ��� �������� �����������
*	@param int $thumbMaxSize		������ �� ����������� ��� �����������, ����� ��� ����� ��������������� $newxsize x $newysize
*	@param int $bgred				0-255 - ���������� �������� ����� ��� ����������� ����
*	@param int $bggreen				0-255 - ���������� �������� ����� ��� ����������� ����
*	@param int $bgblue				0-255 - ���������� ������ ����� ��� ����������� ����
*	
*/
	function Img2Thumb($filename, $newxsize=60, $newysize=60, $fileout='',
		$thumbMaxSize=0, $bgred=0, $bggreen=0, $bgblue=0)
	{		
		
		//	����� ����������� - ���������, ����� int ����� ����� ��� � ���������
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
*	������� ������� - �� ��������
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
		
		// ������������� ������� ������
		clearstatcache();
		
		switch($type)
		{
			case "gif":
				// � ���������, ��� ������� �� �������� � windows
				// ����� �������������� ���������������� php ��������� :(
				// ������ � ����, ��� ������ �������� �� ���� ��������� ��������.
				if( function_exists("imagecreatefromgif") )
				{
					$orig_img = imagecreatefromgif($filename);
					break;
				}
				else
				{
					echo '��������, ���� ������ �� ������������ <b>imagecreatefromgif()</b>';
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
*	������� ������� - �� ��������
*	�������� ������� ImageCreateTrueColor � ImageCopyResampled , ������� �������� ������ � GD 2.0.1 ��� ���� !
*/
	function NewImgResize($orig_img,$newxsize,$newysize,$filename)
	{
		//getimagesize ���������� ������
		// [0] = ������ � ��������
		// [1] = ������ � ��������
		// [2] = ����
		// [3] = �������� ���� ����������� "width=xx height=xx"
		
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
		
		/* �������� ��� ������, ����� ��������� maxSize �����������
		$im_out = ImageCreateTrueColor($newxsize,$newysize);
		ImageCopyResampled($im_out, $orig_img, 0, 0, 0, 0,
			$newxsize, $newysize,$orig_size[0], $orig_size[1]);
		*/

		//	����� ����������� - ������� ����� ����������� � �������������� maxSize
		if( $this->maxSize )
		{
			if( function_exists("imagecreatetruecolor") )
			  $im_out = imagecreatetruecolor($maxX,$maxY);
			else
			  $im_out = imagecreate($maxX,$maxY);
			  
                        // ��� ����������� ����� ��������� ������ � ������, ���� �� ���������, �� ��� ����� ������� ������ ����
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
*	������� ������� - �� ��������
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
*	������� ������� - �� ��������
*
*/
	function NewImgShow($new_img,$type)
	{
		/* �������� ��� ������ ��� ������������� 'switch' ������
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
*	������� ������� - �� ��������
*
*   1 = GIF, 2 = JPG, 3 = PNG, 4 = SWF,
*   5 = PSD, 6 = BMP,
*   7 = TIFF(������� ��� intel),
*   8 = TIFF(������� ��� motorola),
*   9 = JPC, 10 = JP2, 11 = JPX,
*   12 = JB2, 13 = SWC, 14 = IFF
*/
	function GetImgType($filename)
	{
		$info = getimagesize($filename);
		/* �������� ��� ������ ��� ������������� 'switch' ������
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
