<?php
defined( '_VALID_MOS' ) or die( '������ ������ � ����� �������� �� ��������.' );
/**
*
* @version $Id: class_currency_display.php 867 2007-06-20 18:41:06Z soeren_nb $
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
*  @copyright ��������� ����� (C) 2007 ��������� �������� � ������� ���� http://virtuemart.ru
*/
if(!defined("_CLASS_CURRENCY_DISPLAY_LOADED")) {
	define("_CLASS_CURRENCY_DISPLAY_LOADED", true);

	// ============================================================
	// ================ ����������� ������ ==========================
	// ============================================================
	// == ������ : 1.1	    (class_currency_display.php)
	// ============================================================
	// ==== ��������
	// == ����� ����������� ������ : ����������� �������� �������� ��� ������������
	// ==== ����� ��������� � :
	// == �� �����, �� ����� ���� �������� ����������� � ������� CurrencyConvert
	// ============================================================
	// ==== ������� :
	// == 16/11/2000 : S. Mouton	������ ������
	// == 29/11/2000 : S. Mouton	��������� ����, �������� ����
	// == 27/02/2001 : S. Mouton	������ ������������� : ���������� ����� DB ������� � �� DB �������
	// == 14/03/2001 : S. Mouton    ��������� ������ ��� � ���������� ��������
	// ============================================================

	class CurrencyDisplay {
		var $id      		= "euro";		// ������ ID ��������� � ������ (ex : language)
		var $symbol    		= "&euro;";	// �������� ������
		var $nbDecimal 		= 2;	// ���������� ���������� ������ ����� ��������� (��� ������� �����)
		var $decimal   		= ",";	// ���������� ����������� ('.', ',', ...)
		var $thousands 		= " "; 	// ����������� ����� ('', ' ', ',')
		var $positivePos	= 1;	// ������� ������� ������ � ����������� ���������� :
									// 0 = '00Symb'
									// 1 = '00 Symb'
									// 2 = 'Symb00'
									// 3 = 'Symb 00'
		var $negativePos	= 8;	// ������� ������� ������ � ����������� ���������� :
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
		// �������� ! ������� number_format ��������� ������� ����������
		// ���������� �� ������������ � ���� ������ ,
		// ������� ��� ���������� ������������ ���������� ���������� ��������.
		// ������� ��� : number_format ��������� 1, 2 ��� 4 ���������.
		// ��� �������� ��������, ����� ����� ����������� ����� : � ���� ������
		// ������������ �������� ','.
		// ������ ������� ������ �� ������ ��������� ��������������.
		// ���������� : ����� ��� ����������� il (�.�. 3 ���������), ��� �������� �������
		if( $decimals === '') {
			$decimals = $this->nbDecimal;
		}
		if ($this->thousands != ''){
			$res=number_format($nb,$decimals,$this->decimal,$this->thousands);
		} else {
			// ���� ���������� ���� ����� ����������� ����� �� ���������, ����������� ��������
			if ($this->decimal==','){
				$res=number_format($nb,$decimals,$this->decimal,'|');
				$res=str_replace('|','',$res);			
			} else {
				// � ���� ������, ���������� ������� ������
				$res=number_format($nb,$decimals,$this->decimal,$this->thousands);
				$res=str_replace(',','',$res);
			}
		}
		return($res);
	}

	// ================
	function getFullValue($nb, $decimals=''){
		$res = "";
		// ������� ������� ������
		if ($nb == abs($nb)){
			$res=$this->getValue($nb, $decimals);
			// ���������� �����
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
			// ���������� �����
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
	// ================ /����������� ������=========================
	// ============================================================
	} // ����� ������
}
?>