<?php
defined( '_VALID_MOS' ) or die( '������ ������ � ����� �������� �� ��������.' );
/**
* Live Module ���������� ������  
* 
* @version $Id: currency_convert.php,v 1.3.2.2 2006/03/10 15:54:18 soeren_nb Exp $
* @package VirtueMart
* @subpackage classes
* @copyright ��������� ����� (C) 2004-2005 Soeren Eberhardt. ��� ����� ��������.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, �������� LICENSE.php
* VirtueMart - ��� ���������� ����������� �����������. ��� ������ ����� ���� �������� � ������������
* � ����� ������������ ��������� GNU, � ��� ��������������� �������� � ���� ���
* �������� ����������� �� �����, ��������������� �� ����� ������������ �������� GNU ���
* ������ ���������� �������� ��� �������� ��� ������������ ����������� � �������� �������� �����.
* �������� /administrator/components/com_virtuemart/COPYRIGHT.php ��� ��������� ���������� �� ��������� ������ � �������.
*
* http://virtuemart.net
*
* ������� ��������: ������������� ��������� ����������� ����� '�����-V' (www.ukrconsulting.biz)
* ����� ��������: ����������� ���������
*
* 
* @copyright ��������� ����� (C) 2007 ��������� �������� � ������� ���� http://virtuemart.ru
*/
function convertECB ($amountA, $currA, $currB) {
	global $mosConfig_cachepath, $mosConfig_live_site, $mosConfig_absolute_path;
	/* ����������:
	* $amountA 	- �����, ������� ���������� ��������������
	* $currA 	- ������, ������� ��������������
	* $currB	- ������, � ������� ������������ ���������������
	* $do_date	- ���� �����������, ��������� ������ ����
	*/

	setlocale(LC_TIME, "en-GB");
	$now = time() + 3600; // ����� � ��� (��������) GMT + 1 ��� (3600 ������)
	if (date("I")) {
		$now += 3600; // ������������� ��� �������� �������� �������
	}
	$weekday_now_local = gmdate('w', $now); // ���� ������, �����: ������ ���������� � ����������� (= 0) !!
	$date_now_local = gmdate('Ymd', $now);
	$time_now_local = gmdate('Hi', $now);
	$time_ecb_update = '1415';
	if( empty($mosConfig_cachepath) )
	  $store_path = $mosConfig_cachepath;
	else
	  $store_path = $mosConfig_absolute_path."/media";
	  
	$archivefile_name = $store_path.'/daily.xml';
	$ecb_filename = 'http://www.ecb.int/stats/eurofxref/eurofxref-daily.xml';
	$val = '';
	$archive = 'yes';

	if(file_exists($archivefile_name)) {
	  // ����� ������� ��� Filename
	  $file_datestamp = date('Ymd',filemtime ($archivefile_name)); 
	  $curr_filename = $archivefile_name;
	  $archive = '';
	}
	else 
	  $curr_filename = $ecb_filename;
	  
	if( !is_writable( $store_path )) {
	  $archive = '';
	  $vmLogger->debug( "���� $archivefile_name �� ����� ���� ������. ���������� $store_path �������� �� ������" );
	}
		
	$handle = @fopen($curr_filename, 'r');
	if ($handle) {
		$contents = '';
		$contentfile = '';
		do {
			$data = @fread($handle, 4096);
				if (strlen($data) == 0) {
       				break;
   				}
   			$contents .= $data; // � ���� ����������� ����� ��������� ������ �����, �������� ����� �  htmlspecialchars($data)
   			$contentfile .= $data; // ����, ������� ����� ������� �������, ���� ����������
		} while (true);
		@fclose($handle);

		// ���� archivefile (���� ������) �� ����������
		if($archive == 'yes') {
			// ������ ������� ����� ����
			$fp = @fopen($archivefile_name,'wb');
			@fwrite($fp,$contentfile);
			@fclose($fp);
			@chmod($archivefile_name,0644);
		}

		$contents = str_replace ("<Cube currency='USD'", " <Cube currency='EUR' rate='1'/> <Cube currency='USD'", $contents);
		
		/* XML �������������� ������ */
		require_once( $mosConfig_absolute_path. '/includes/domit/xml_domit_lite_include.php' );
		$xmlDoc =& new DOMIT_Lite_Document();
		$xmlDoc->parseXML( $contents, false, true );
		
		$currency_list = $xmlDoc->getElementsByTagName( "Cube" );
		// ������ �� ������ ������ (Currency List)
		for ($i = 0; $i < $currency_list->getLength(); $i++) {
			$currNode =& $currency_list->item($i);
			$currency[$currNode->getAttribute("currency")] = $currNode->getAttribute("rate");
			unset( $currNode );
		}
		$valA = $currency[$currA];
		$valB = $currency[$currB];
		
		if ($valA) {
			$val = $amountA * $valB / $valA;
		} 
		else {
			$val = 0;
		}
	}
	return $val;
} // ����� ������� convertecb

?>
