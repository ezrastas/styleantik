<?php
defined( '_VALID_MOS' ) or die( 'Прямой доступ к этому каталогу не разрешен.' );
/**
* Live Module конвертера валюты  
* 
* @version $Id: currency_convert.php,v 1.3.2.2 2006/03/10 15:54:18 soeren_nb Exp $
* @package VirtueMart
* @subpackage classes
* @copyright Авторские права (C) 2004-2005 Soeren Eberhardt. Все права защищены.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, смотреть LICENSE.php
* VirtueMart - это бесплатное программное обеспечение. Эта версия могла быть изменена в соответствии
* с Общей Общественной Лицензией GNU, и при распространении включает в себя или
* является производной от работ, лицензированных по Общей Общественной Лицензии GNU или
* других бесплатных лицензий или лицензий для программного обеспечения с открытым исходным кодом.
* Смотрите /administrator/components/com_virtuemart/COPYRIGHT.php для получения информации об авторских правах и деталей.
*
* http://virtuemart.net
*
* Перевод выполнен: Департаментом переводов Юридической фирмы 'РЕДУТ-V' (www.ukrconsulting.biz)
* Автор перевода: Данильченко Станислав
*
* 
* @copyright Авторские права (C) 2007 Федоринов Григорий и Команда ВМРЕ http://virtuemart.ru
*/
function convertECB ($amountA, $currA, $currB) {
	global $mosConfig_cachepath, $mosConfig_live_site, $mosConfig_absolute_path;
	/* переменные:
	* $amountA 	- сумма, которую необходимо конвертировать
	* $currA 	- валюта, которая конвертируется
	* $currB	- валюта, в которую производится конвертирование
	* $do_date	- если установлена, проверяет только дату
	*/

	setlocale(LC_TIME, "en-GB");
	$now = time() + 3600; // Время в ЕЦБ (Германия) GMT + 1 час (3600 секунд)
	if (date("I")) {
		$now += 3600; // Корректировка для экономии дневного времени
	}
	$weekday_now_local = gmdate('w', $now); // день недели, важно: неделя начинается в воскресенья (= 0) !!
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
	  // метка времени для Filename
	  $file_datestamp = date('Ymd',filemtime ($archivefile_name)); 
	  $curr_filename = $archivefile_name;
	  $archive = '';
	}
	else 
	  $curr_filename = $ecb_filename;
	  
	if( !is_writable( $store_path )) {
	  $archive = '';
	  $vmLogger->debug( "Файл $archivefile_name не может быть создан. Директория $store_path защищена от записи" );
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
   			$contents .= $data; // с этим синтаксисом будет переведен только текст, сплошной текст с  htmlspecialchars($data)
   			$contentfile .= $data; // файл, который будет записан позднее, если необходимо
		} while (true);
		@fclose($handle);

		// если archivefile (файл архива) не существует
		if($archive == 'yes') {
			// теперь пишется новый файл
			$fp = @fopen($archivefile_name,'wb');
			@fwrite($fp,$contentfile);
			@fclose($fp);
			@chmod($archivefile_name,0644);
		}

		$contents = str_replace ("<Cube currency='USD'", " <Cube currency='EUR' rate='1'/> <Cube currency='USD'", $contents);
		
		/* XML Синтаксический анализ */
		require_once( $mosConfig_absolute_path. '/includes/domit/xml_domit_lite_include.php' );
		$xmlDoc =& new DOMIT_Lite_Document();
		$xmlDoc->parseXML( $contents, false, true );
		
		$currency_list = $xmlDoc->getElementsByTagName( "Cube" );
		// Проход по Списку валюты (Currency List)
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
} // конец функции convertecb

?>
