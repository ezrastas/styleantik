<?php
defined( '_VALID_MOS' ) or die( 'Прямой доступ к этому каталогу не разрешен.' );
/**
*
* @version $Id: class_currency_display.php 867 2007-06-20 18:41:06Z soeren_nb $
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
*  @copyright Авторские права (C) 2007 Федоринов Григорий и Команда ВМРЕ http://virtuemart.ru
*/
if(!defined("_CLASS_CURRENCY_DISPLAY_LOADED")) {
	define("_CLASS_CURRENCY_DISPLAY_LOADED", true);

	// ============================================================
	// ================ ОТОБРАЖЕНИЕ ВАЛЮТЫ ==========================
	// ============================================================
	// == версия : 1.1	    (class_currency_display.php)
	// ============================================================
	// ==== Описание
	// == Класс отображения валюты : форматирует денежные значения для пользователя
	// ==== Имеет отношение к :
	// == Не имеет, но может быть идеально использован с классом CurrencyConvert
	// ============================================================
	// ==== История :
	// == 16/11/2000 : S. Mouton	Первая версия
	// == 29/11/2000 : S. Mouton	Добавлено ЕВРО, пересчет евро
	// == 27/02/2001 : S. Mouton	Полная реорганизация : разделение между DB версией и не DB версией
	// == 14/03/2001 : S. Mouton    Исправлен мелкий баг в негативных дисплеях
	// ============================================================

	class CurrencyDisplay {
		var $id      		= "euro";		// строка ID относится к валюте (ex : language)
		var $symbol    		= "&euro;";	// Печатный символ
		var $nbDecimal 		= 2;	// Количество десятичных знаков после двоеточия (или другого знака)
		var $decimal   		= ",";	// Десятичный разделитель ('.', ',', ...)
		var $thousands 		= " "; 	// Разделитель тысяч ('', ' ', ',')
		var $positivePos	= 1;	// Позиция символа валюты с Позитивными значениями :
									// 0 = '00Symb'
									// 1 = '00 Symb'
									// 2 = 'Symb00'
									// 3 = 'Symb 00'
		var $negativePos	= 8;	// Позиция символа валюты с Негативными значениями :
									// 0 = '(Symb00)'
									// 1 = '-Symb00'
									// 2 = 'Symb-00'
									// 3 = 'Symb00-'
									// 4 = '(00Symb)'
									// 5 = '-00Symb'
									// 6 = '00-Symb'
									// 7 = '00Symb-'
									// 8 = '-00 Symb'
									// 9 = '-Symb 00'
									// 10 = '00 Symb-'
									// 11 = 'Symb 00-'
									// 12 = 'Symb -00'
									// 13 = '00- Symb'
									// 14 = '(Symb 00)'
									// 15 = '(00 Symb)'
	// ================		 
	function CurrencyDisplay(	$id			="euro",
								$symbol		="&euro;",
								$nbDecimal	= 2,
								$decimal   	= ",",
								$thousands 	= " ",
								$positivePos= 1,
								$negativePos= 8){
		$this->id		 = $id;
		$this->symbol    = $symbol;
		$this->nbDecimal = $nbDecimal;
		$this->decimal   = $decimal;
		$this->thousands = $thousands;
		$this->positivePos = $positivePos;
		$this->negativePos = $negativePos;
	}

	// ================
	function getSymbol(){
		return($this->symbol);
	}

	// ================
	function getId(){
		return($this->id);
	}
	function getRounded( $nb, $decimals='' ) {
		if( $decimals === '') {
			$decimals = $this->nbDecimal;
		}
		return round( $nb, $decimals );
	}
	
	// ================
	function getValue($nb, $decimals=''){
		$res = "";		
		// Вримание ! функция number_format выполняет неявное округление
		// Округление не используется в этом классе ,
		// поэтому Вам необходимо использовать правильное десятичное значение.
		// Работет так : number_format принимает 1, 2 или 4 параметра.
		// это вызывает проблему, когда задан разделитель тысяч : в этом случае
		// отображается ненужная ','.
		// Именно поэтому работу мы должны выполнять самостоятельно.
		// Примечание : когда нет десятичного il (т.е. 3 параметра), все работает отлично
		if( $decimals === '') {
			$decimals = $this->nbDecimal;
		}
		if ($this->thousands != ''){
			$res=number_format($nb,$decimals,$this->decimal,$this->thousands);
		} else {
			// Если десятичный знак равен разделителю тысяч по умолчанию, используйте хитрость
			if ($this->decimal==','){
				$res=number_format($nb,$decimals,$this->decimal,'|');
				$res=str_replace('|','',$res);			
			} else {
				// В ином случае, достаточно простой замены
				$res=number_format($nb,$decimals,$this->decimal,$this->thousands);
				$res=str_replace(',','',$res);
			}
		}
		return($res);
	}

	// ================
	function getFullValue($nb, $decimals=''){
		$res = "";
		// Позиция символа валюты
		if ($nb == abs($nb)){
			$res=$this->getValue($nb, $decimals);
			// Позитивное число
			switch ($this->positivePos){
			case 0:
				// 0 = '00Symb'
				$res=$res.$this->symbol;
			break;
			case 2:
				// 2 = 'Symb00'
				$res=$this->symbol.$res;
			break;
			case 3:
				// 3 = 'Symb 00'
				$res=$this->symbol.' '.$res;
			break;
			case 1:
			default :
				// 1 = '00 Symb'
				$res=$res.' '.$this->symbol;
			break;
			}
		} else {
			// Негативное число
			$res=$this->getValue(abs($nb), $decimals);
			switch ($this->negativePos){
			case 0:
				// 0 = '(Symb00)'
				$res='('.$this->symbol.$res.')';
			break;
			case 1:
				// 1 = '-Symb00'
				$res='-'.$this->symbol.$res;
			break;
			case 2:
				// 2 = 'Symb-00'
				$res=$this->symbol.'-'.$res;
			break;
			case 3:
				// 3 = 'Symb00-'
				$res=$this->symbol.$res.'-';
			break;
			case 4:
				// 4 = '(00Symb)'
				$res='('.$res.$this->symbol.')';
			break;
			case 5:
				// 5 = '-00Symb'
				$res='-'.$res.$this->symbol;
			break;
			case 6:
				// 6 = '00-Symb'
				$res=$res.'-'.$this->symbol;
			break;
			case 7:
				// 7 = '00Symb-'
				$res=$res.$this->symbol.'-';
			break;
			case 9:
				// 9 = '-Symb 00'
				$res='-'.$this->symbol.' '.$res;
			break;
			case 10:
				// 10 = '00 Symb-'
				$res=$res.' '.$this->symbol.'-';
			break;
			case 11:
				// 11 = 'Symb 00-'
				$res=$this->symbol.' '.$res.'-';
			break;
			case 12:
				// 12 = 'Symb -00'
				$res=$this->symbol.' -'.$res;
			break;
			case 13:
				// 13 = '00- Symb'
				$res=$res.'- '.$this->symbol;
			break;
			case 14:
				// 14 = '(Symb 00)'
				$res='('.$this->symbol.' '.$res.')';
			break;
			case 15:
				// 15 = '(00 Symb)'
				$res='('.$res.' '.$this->symbol.')';
			break;
			case 8:
			default :
				// 8 = '-00 Symb'
				$res='-'.$res.' '.$this->symbol;
			break;
			}
		}
		return($res);
	}
	// ================ /ОТОБРАЖЕНИЕ ВАЛЮТЫ=========================
	// ============================================================
	} // конец класса
}
?>