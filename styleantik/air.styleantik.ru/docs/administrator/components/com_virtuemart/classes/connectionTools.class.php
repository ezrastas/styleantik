<?php
defined( '_VALID_MOS' ) or die( '������ ������ � ����� �������� �� ��������.' ); 
/**
*
* @version $Id:connectionTools.class.php 431 2006-10-17 21:55:46 +0200 (Di, 17 ������� 2006) soeren_nb $
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
define( 'VM_PROXY_URL', '' );
define( 'VM_PROXY_PORT', '80' );
define( 'VM_PROXY_USER', '' );
define( 'VM_PROXY_PASS', '' );
/**
 * ������������� ����� ����������� ��� ������ � ������������ (http, headers, ... )
 * 
 * @author soeren
 * @since VirtueMart 1.1.0
 */
class vmConnector {
	
	var $handle = null;
	
	/**
	 * ������� ����� ������, �������� ��� ��������� http � ����������, ���� ������� ������
	 * @static 
	 * @param int $http_status
	 * @param string $mime_type
	 * @param string $content
	 */
	function sendHeaderAndContent( $http_status=200, $content='', $mime_type='text/html' ) {
	
		// �������� ��� ��������� (header) Joomla � ���������� ������
		while( @ob_end_clean() );
		
		$http_status = intval( $http_status );
		header("HTTP/1.0 $http_status");
		if( $mime_type ) {
			header( "Content-type: $mime_type; charset=".vmGetCharset() );
		} else {
			header( "Content-type: text/html; charset=".vmGetCharset() );
		}
		if( $content ) {
			echo $content;
		}
	}
	/**
	 * ��� ����� ������� ��� ������������ �������� ���������� � ��������,
	 * ������� ������, ����� �� ����������, � ��������� ���������.
	 * �������� ������������ cURL � ������������� fopen/fsockopen ���� cURL ����������
	 * @since VirtueMart 1.1.0
	 * @static 
	 * @param string $url
	 * @param string $postData
	 * @return mixed
	 */
	function handleCommunication( $url, $postData='', $headers=array() ) {
		global $vmLogger;

		$urlParts = parse_url( $url );
		if( !isset( $urlParts['port'] )) $urlParts['port'] = 80;
		if( !isset( $urlParts['scheme'] )) $urlParts['scheme'] = 'http';
		
		// ��������� ������
		if( trim( @VM_PROXY_URL ) != '') {
			if( !stristr(VM_PROXY_URL, 'http')) {
				$proxyURL['host'] = VM_PROXY_URL;
				$proxyURL['scheme'] = 'http';
			} else {
				$proxyURL = parse_url(VM_PROXY_URL);
			}
		}
		else {
			$proxyURL = '';
		}		
		
		if( function_exists( "curl_init" )) {

			$vmLogger->debug( '������������ ���������� cURL ��� ����� � '.$urlParts['host'] );

			$CR = curl_init();
			curl_setopt($CR, CURLOPT_URL, $urlParts['scheme'].'://'.$urlParts['host'].':'.$urlParts['port'].$urlParts['path']);
			
			// ������, ����� ���������, ��� ������ �� �������			
			curl_setopt($CR, CURLOPT_TIMEOUT, 30 );
			if( !empty( $headers )) {
				// ��������� �������������� ���������, ���� ������� ������
				curl_setopt($CR, CURLOPT_HTTPHEADER, $headers);
			}
			curl_setopt($CR, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($CR, CURLOPT_FAILONERROR, true);
			if( $postData ) {
				curl_setopt($CR, CURLOPT_POSTFIELDS, $postData );
				curl_setopt($CR, CURLOPT_POST, 1);
			}
			// ����� �� ��� ���������� ������?
			if( !empty($proxyURL) ) {
				$vmLogger->debug( '��������� ������: '.$proxyURL['host'].':'.VM_PROXY_PORT );
				//curl_setopt($CR, CURLOPT_HTTPPROXYTUNNEL, true);
				curl_setopt($CR, CURLOPT_PROXY, $proxyURL['host'] );
				curl_setopt($CR, CURLOPT_PROXYPORT, VM_PROXY_PORT );
				// ���������, ������� �� ������ �����������
				if( trim( @VM_PROXY_USER ) != '') {
					$vmLogger->debug( '������������ ����������� �� ������!' );
					curl_setopt($CR, CURLOPT_PROXYUSERPWD, VM_PROXY_USER.':'.VM_PROXY_PASS );
				}
			}
			
			if( $urlParts['scheme'] == 'https') {
				// ��� �������� PEER �����������... ��������� � ��� ���
				// ��� ���� ����� ����������� ��� ����������� ����� www.ups.com!
				curl_setopt($CR, CURLOPT_SSL_VERIFYPEER, 0);
				//curl_setopt($CR, CURLOPT_SSLCERT , "/usr/locale/xxxx/clientcertificate.pem");
			}
			$result = curl_exec( $CR );
			$error = curl_error( $CR );
			if( !empty( $error ) && stristr( $error, '502') && !empty( $proxyURL )) {
				$vmLogger->debug( '������������ � ����� NTLM �����������.');
				curl_setopt( $CR, CURLOPT_PROXYAUTH, CURLAUTH_NTLM );
				$result = curl_exec( $CR );
				$error = curl_error( $CR );
			}
			curl_close( $CR );
			
			if( !empty( $error )) {
				$vmLogger->err( $error );
				return false;
			}
			else {
				return $result;
			}
		}
		else {
			if( $postData ) { 				
				if( !empty( $proxyURL )) {
					// ���� ��� ���-���� ���������� �������, �� ������ ���������� ������ � �����
					if( $proxyURL['scheme'] == 'https'){
						$protocol = 'ssl';
					}
					else {
						$protocol = 'http';
					}
					$fp = fsockopen("$protocol://".$proxyURL['host'], VM_PROXY_PORT, $errno, $errstr, $timeout = 30);
				}
				else {
					// ���� ��� ���-���� ���������� �������, �� ������ ���������� ������ � �����
					if( $urlParts['scheme'] == 'https'){
						$protocol = 'ssl';
					}
					else {
						$protocol = $urlParts['scheme'];
					}
					$fp = fsockopen("$protocol://".$urlParts['host'], $urlParts['port'], $errno, $errstr, $timeout = 30);
				}
			}
			else {
				if( !empty( $proxyURL )) {
					// ��������� ���������� fopen (������ ������)
					$fp = fopen( $proxyURL['scheme'].'://'.$proxyURL['host'].':'.VM_PROXY_PORT, 'rb' );					
				}
				else {
					// ������ ���������� fopen (������ ������)
					$fp = fopen( $urlParts['scheme'].'://'.$urlParts['host'].':'.$urlParts['port'].$urlParts['path'], 'rb' );
				}
			}
			if(!$fp){
				//������ ��� ������
				$vmLogger->err( "�������� ������ �������! - $errstr ($errno)\n" );
				return false;
			}
			else {
				$vmLogger->debug( '������� ���������� � '.$urlParts['host']);
			}
			if( $postData ) {
				$vmLogger->debug('���������� ����������.' );
				//���������� ������ �������
				if( !empty( $proxyURL )) {
				   	fputs($fp, "POST ".$urlParts['host'].':'.$urlParts['port'].$urlParts['path']." HTTP/1.0\r\n");
				   	fputs($fp, "Host: ".$proxyURL['host']."\r\n");

				   	if( trim( @VM_PROXY_USER )!= '') {
				   		fputs($fp, "������-�����������: �������� " . base64_encode (VM_PROXY_USER.':'.VM_PROXY_PASS ) . "\r\n\r\n");
				   	}
				}
				else {
					fputs($fp, 'POST '.$urlParts['path']." HTTP/1.0\r\n");
					fputs($fp, 'Host:'. $urlParts['host']."\r\n");
				}
				fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
				fputs($fp, "Content-length: ".strlen($postData)."\r\n");
				fputs($fp, "Connection: close\r\n\r\n");
				fputs($fp, $postData . "\r\n\r\n");
			}
			else {
				if( !empty( $proxyURL )) {
				   	fputs($fp, "GET ".$urlParts['host'].':'.$urlParts['port'].$urlParts['path']." HTTP/1.0\r\n");
				   	fputs($fp, "Host: ".$proxyURL['host']."\r\n");
				   	if( trim( @VM_PROXY_USER )!= '') {
				   		fputs($fp, "������-�����������: �������� " . base64_encode (VM_PROXY_USER.':'.VM_PROXY_PASS ) . "\r\n\r\n");
				   	}
				}
				else {
					fputs($fp, 'GET '.$urlParts['path']." HTTP/1.0\r\n");
					fputs($fp, 'Host:'. $urlParts['host']."\r\n");
				}
			}
			// ��������� �������������� ���������, ���� ������� ������
		   	foreach( $headers as $header ) {
		   		fputs($fp, $header."\r\n");
		   	}
			$data = "";
			while (!feof($fp)) {
				$data .= @fgets ($fp, 4096);
			}
			fclose( $fp );
			
			// ���� �� �������� ����� �����������, ���-�� �����������, ���������� false.
			if ( trim($data) == '' ) {
				$vmLogger->err('�� ����� ����� � �������� �������� ������ '.$urlParts['host'].'. ������ �� ������� (���������). ����������, ���������� �����, �������.' );
				return false;
			}
			$result = trim( $data );
			
			return $result;
		}
	}
}
?>