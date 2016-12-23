<?php
/**
* @version $Id: mosloadposition.php 5873 2006-11-28 23:31:00Z facedancer $
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

$_MAMBOTS->registerFunction( 'onPrepareContent', 'botMosLoadPosition' );

/**
* ������, ����������� ������ � �������� �����������
*/
function botMosLoadPosition( $published, &$row, &$params, $page=0 ) {
	global $database, $_MAMBOTS;

	// simple performance check to determine whether bot should process further
	if ( strpos( $row->text, 'mosloadposition' ) === false ) {
		return true;
	}
	
 	// expression to search for
 	$regex = '/{mosloadposition\s*.*?}/i';

 	// check whether mambot has been unpublished
	if ( !$published ) {
		$row->text = preg_replace( $regex, '', $row->text );
		return true;
	}

 // ����� ��� ������� ������� � �������� � $matches
	preg_match_all( $regex, $row->text, $matches );

	// ���������� ��������
 	$count = count( $matches[0] );

 	// ������ ���������� ��������� ���� ������� � ������ ������� �������
 	if ( $count ) {
		// check if param query has previously been processed
		if ( !isset($_MAMBOTS->_content_mambot_params['mosloadposition']) ) {
			// load mambot params info
			$query = "SELECT params"
		. "\n FROM #__mambots"
		. "\n WHERE element = 'mosloadposition'"
		. "\n AND folder = 'content'"
		;
		$database->setQuery( $query );
			$database->loadObject($mambot);
					
			// save query to class variable
			$_MAMBOTS->_content_mambot_params['mosloadposition'] = $mambot;
		}
		
		// pull query data from class variable
		$mambot = $_MAMBOTS->_content_mambot_params['mosloadposition'];
		
	 	$botParams = new mosParameters( $mambot->params );

	 	$style	= $botParams->def( 'style', -2 );

 		processPositions( $row, $matches, $count, $regex, $style );
	}
}

function processPositions ( &$row, &$matches, $count, $regex, $style ) {
	global $database;

	$query = "SELECT position"
	. "\n FROM #__template_positions"
	. "\n ORDER BY position"
	;
	$database->setQuery( $query );
 	$positions 	= $database->loadResultArray();

 	for ( $i=0; $i < $count; $i++ ) {
 		$load = str_replace( 'mosloadposition', '', $matches[0][$i] );
 		$load = str_replace( '{', '', $load );
 		$load = str_replace( '}', '', $load );
 		$load = trim( $load );

		foreach ( $positions as $position ) {
	 		if ( $position == @$load ) {
				$modules	= loadPosition( $load, $style );
				$row->text 	= str_replace($matches[0][$i], $modules, $row->text);
				break;
	 		}
 		}
 	}

  	// �������� �����, �� ��������������� ������� ������
	$row->text = preg_replace( $regex, '', $row->text );
}

function loadPosition( $position, $style=-2 ) {
	$modules = '';
	if ( mosCountModules( $position ) ) {
		ob_start();
		mosLoadModules ( $position, $style );
		$modules = ob_get_contents();
		ob_end_clean();
	}

	return $modules;
}
?>