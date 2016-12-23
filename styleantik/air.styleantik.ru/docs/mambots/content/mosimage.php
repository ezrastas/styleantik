<?php
/**
* @version $Id: mosimage.php 5939 2006-12-06 12:43:29Z predator $
* @localized ��������� ����� (C) 2005 Joom.Ru - ������� ��� Joomla!
* @copyright ��������� ����� (C) 2005 Open Source Matters. ��� ����� ��������.
* @license �������� http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* Joomla! - ��������� ����������� �����������. ��� ������ ����� ���� ��������
* � ������������ � ����������� ������������ ��������� GNU, ������� ��������
* � ���������� ��������������� � ������� ���������� ������, ����������������
* �������� ����������� ������������ ��������� GNU ��� ������ �������� ��������� 
* �������� ��� �������� � �������� �������� �����.
* ��� ��������� ������������ � ��������� �� ��������� �����, �������� ���� COPYRIGHT.php.
* 
* @translator Oleg A. Myasnikov aka Sourpuss (sourpuss@mamboteam.ru)
*/

// ������ ������� �������
defined( '_VALID_MOS' ) or die( '������ ���������' );

$_MAMBOTS->registerFunction( 'onPrepareContent', 'botMosImage' );

/**
*/
function botMosImage( $published, &$row, &$params, $page=0 ) {
	global $database, $_MAMBOTS;
	
	// simple performance check to determine whether bot should process further
	if ( strpos( $row->text, 'mosimage' ) === false ) {
		return true;
	}
	
 	// expression to search for
	$regex = '/{mosimage\s*.*?}/i';

	// check whether mosimage has been disabled for page
	// check whether mambot has been unpublished
	if (!$published || !$params->get( 'image' )) {
		$row->text = preg_replace( $regex, '', $row->text );
		return true;
	}
	
	//count how many {mosimage} are in introtext if it is set to hidden.
	$introCount=0;
	if ( ! $params->get( 'introtext' ) & ! $params->get( 'intro_only') ) 
	{
		preg_match_all( $regex, $row->introtext, $matches );
		$introCount = count ( $matches[0] );
	}

	// ����� ��� ������� ������� � �������� � $matches
	preg_match_all( $regex, $row->text, $matches );

 	// ���������� ��������
	$count = count( $matches[0] );

 	// ������ ���������� ��������� ���� ������� � ������ ������� �������
 	if ( $count ) {
		// check if param query has previously been processed
		if ( !isset($_MAMBOTS->_content_mambot_params['mosimage']) ) {
			// load mambot params info
			$query = "SELECT params"
		. "\n FROM #__mambots"
		. "\n WHERE element = 'mosimage'"
		. "\n AND folder = 'content'"
		;
		$database->setQuery( $query );
			$database->loadObject($mambot);
			
			// save query to class variable
			$_MAMBOTS->_content_mambot_params['mosimage'] = $mambot;
		}

		// pull query data from class variable
		$mambot = $_MAMBOTS->_content_mambot_params['mosimage'];
		
	 	$botParams = new mosParameters( $mambot->params );

	 	$botParams->def( 'padding' );
	 	$botParams->def( 'margin' );
	 	$botParams->def( 'link', 0 );

		$images 	= processImages( $row, $botParams, $introCount );

		// ���������� � ���������� ���������� ��������� ���������� ��� ������� �� ��������� ������
		$GLOBALS['botMosImageCount'] 	= 0;
		$GLOBALS['botMosImageParams'] 	=& $botParams;
		$GLOBALS['botMosImageArray'] 	=& $images;
		//$GLOBALS['botMosImageArray'] 	=& $combine;

		// ���������� ������
		$row->text = preg_replace_callback( $regex, 'botMosImage_replacer', $row->text );

		// ���������� � ������� ���������� ��������
		unset( $GLOBALS['botMosImageCount'] );
		unset( $GLOBALS['botMosImageMask'] );
		unset( $GLOBALS['botMosImageArray'] );
		unset( $GLOBALS['botJosIntroCount'] );
		return true;
	}
}

function processImages ( &$row, &$params, &$introCount ) {
	global $mosConfig_absolute_path, $mosConfig_live_site;

	$images 		= array();

	// ������  \n ������� ����� ��� ������
	$row->images 	= explode( "\n", $row->images );
	$total 			= count( $row->images );

	$start = $introCount; 
	for ( $i = $start; $i < $total; $i++ ) {
		$img = trim( $row->images[$i] );

		// ��������� ��������� �����������
		if ( $img ) {
			$attrib = explode( '|', trim( $img ) );
			// $attrib[0] - �������� ����������� � ���� �� /images/stories

			// $attrib[1] ������������
			if ( !isset($attrib[1]) || !$attrib[1] ) {
				$attrib[1] = '';
			}

			// $attrib[2] �������������� ����� � ���������
			if ( !isset($attrib[2]) || !$attrib[2] ) {
				$attrib[2] = 'Image';
			} else {
				$attrib[2] = htmlspecialchars( $attrib[2] );
			}

			// $attrib[3] �����
			if ( !isset($attrib[3]) || !$attrib[3] ) {
				$attrib[3] = 0;
			}

			// $attrib[4] ���������
			if ( !isset($attrib[4]) || !$attrib[4] ) {
				$attrib[4]	= '';
				$border 	= $attrib[3];
			} else {
				$border 	= 0;
			}

			// $attrib[5] ������� ���������
			if ( !isset($attrib[5]) || !$attrib[5] ) {
				$attrib[5] = '';
			}

			// $attrib[6] ������������ ���������
			if ( !isset($attrib[6]) || !$attrib[6] ) {
				$attrib[6] = '';
			}

			// $attrib[7] ������
			if ( !isset($attrib[7]) || !$attrib[7] ) {
				$attrib[7] 	= '';
				$width 		= '';
			} else {
				$width 		= ' width: '. $attrib[7] .'px;';
			}

			// �������� ������� �����������
			$size = '';
			if ( function_exists( 'getimagesize' ) ) {
				$size 	= @getimagesize( $mosConfig_absolute_path .'/images/stories/'. $attrib[0] );
				if (is_array( $size )) {
					$size = ' width="'. $size[0] .'" height="'. $size[1] .'"';
				}
			}

			// ����������� ���� <image>
			$image = '<img src="'. $mosConfig_live_site .'/images/stories/'. $attrib[0] .'"'. $size;
			// ���� ��������� ���������, �� ������������ �� ��������
			if ( !$attrib[4] ) {
				if ($attrib[1] == 'left' OR $attrib[1] == 'right') {
					$image .= ' style="float: '. $attrib[1] .';"';
				} else {
					$image .= $attrib[1] ? ' align="middle"' : '';
				}
			}
			$image .=' hspace="6" alt="'. $attrib[2] .'" title="'. $attrib[2] .'" border="'. $border .'" />';

			// �������� ��������� ���� �� ���������
			$caption = '';
			if ( $attrib[4] ) {
				$caption = '<div class="mosimage_caption"';
				if ( $attrib[6] ) {
					$caption .= ' style="text-align: '. $attrib[6] .';"';
					$caption .= ' align="'. $attrib[6] .'"';
				}
				$caption .= '>';
				$caption .= $attrib[4];
				$caption .='</div>';
			}

			// �������������� �����
			if ( $attrib[4] ) {
				// initialize variables
				$margin  		= '';
				$padding 		= '';
				$float			= '';
				$border_width 	= '';
				$style			= '';
				if ( $params->def( 'margin' ) ) {
					$margin 		= ' margin: '. $params->def( 'margin' ).'px;';
				}				
				if ( $params->def( 'padding' ) ) {
					$padding 		= ' padding: '. $params->def( 'padding' ).'px;';
				}				
				if ( $attrib[1] ) {
					$float 			= ' float: '. $attrib[1] .';';
				}
				if ( $attrib[3] ) {
					$border_width	= ' border-width: '. $attrib[3] .'px;';
				}
				
				if ( $params->def( 'margin' ) || $params->def( 'padding' ) || $attrib[1] || $attrib[3] ) {
					$style = ' style="'. $border_width . $float . $margin . $padding . $width .'"';
				}
				
				$img = '<div class="mosimage" '. $style .' align="center">'; 

				// display caption in top position
				if ( $attrib[5] == 'top' && $caption ) {
					$img .= $caption;
				}

				$img .= $image;

				// ����������� ��������� � ������ �������
				if ( $attrib[5] == 'bottom' && $caption ) {
					$img .= $caption;
				}
				$img .='</div>';
			} else {
				$img = $image;
			}

			$images[] = $img;
		}
	}

	return $images;
}

/**
* ������ ����������� ����� an image
* @param array - ������ ������������ (��. - preg_match_all)
* @return string
*/
function botMosImage_replacer( &$matches ) {
	$i = $GLOBALS['botMosImageCount']++;

	return @$GLOBALS['botMosImageArray'][$i];
}
?>