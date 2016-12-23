<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
/**
* @version $Id: install.virtuemart.php 590 2006-12-22 20:49:26Z soeren_nb $
* @package VirtueMart
* @subpackage core
* @copyright Copyright (C) 2004-2005 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
*
* http://virtuemart.net
*/

function virtuemart_is_installed() {
	global $database, $mosConfig_absolute_path, $mosConfig_dbprefix, 
		$VMVERSION, $shortversion, $myVersion, $version_info;

	//add VirtueMart admin menu image
	$database->setQuery( "UPDATE #__components SET admin_menu_img = '../administrator/components/com_virtuemart/favicon.ico' WHERE admin_menu_link = 'option=com_virtuemart'");
	$database->query();

	$option = 'com_virtuemart';
	$installfile = dirname( __FILE__ ) . "/install.php";
	
	$database->setQuery( "SHOW TABLES LIKE '".$mosConfig_dbprefix."vm_%'" );
	$vm_tables = $database->loadObjectList();
	
	if( file_exists( $mosConfig_absolute_path.'/administrator/components/'.$option.'/classes/htmlTools.class.php' ) 
		&& count( $vm_tables)> 30 ) {
		// VirtueMart is installed! But is it an older version that needs to be updated?
		$database->setQuery( 'SELECT id, params FROM `#__components` WHERE name = \'virtuemart_version\'' );
		$database->loadObject( $old_version );
		if( $old_version && file_exists( $mosConfig_absolute_path.'/administrator/components/com_virtuemart/classes/htmlTools.class.php')) {
			$version_info = new mosParameters( $old_version->params );
			include_once( $mosConfig_absolute_path.'/administrator/components/'.$option.'/version.php' );
			$VMVERSION = new vmVersion();
			$result = version_compare( $version_info->get( 'RELEASE' ), '1.0.5' );
			// IF we need to update, version_compare has returned -1, that means that the current version is lower than 1.0.5
			if( $result == -1 ) {
				return false;
			}			
		}
		
		@unlink( $installfile );
		if( ( file_exists($installfile)) || !file_exists(dirname( __FILE__ ) . "/virtuemart.cfg.php")) {
			die('<h2>��������� �� ����������� Virtuemart</h2>
			<p>� ��� ��� ���������� VirtueMart.</p>
			<p>�� ������
			<ol>
				<li>������� ���� <strong>'.$installfile.'</strong>,</li>
				<li>������������� ���� <strong>virtuemart.cfg-dist.php</strong> � <strong>virtuemart.cfg.php</strong></li>
			</ol>������ ��� ������������ RusVirtueMart.
			</p>');
		}
		else {
			mosRedirect('index2.php?option=com_virtuemart');
		}
	}
	return false;
	
}
function com_install() {
	global $mosConfig_absolute_path, $mosConfig_dbprefix, $database, 
		$VMVERSION, $myVersion, $shortversion, $version_info;
	include( $mosConfig_absolute_path. "/administrator/components/com_virtuemart/version.php" );
	if( !isset( $shortversion )) {
		$shortversion = $VMVERSION->PRODUCT . " " . $VMVERSION->RELEASE . " " . $VMVERSION->DEV_STATUS. " ";
		$myVersion = $shortversion . " [".$VMVERSION->CODENAME ."] <br />" . $VMVERSION->RELDATE . " "
					. $VMVERSION->RELTIME . " " . $VMVERSION->RELTZ;
	}
	if( defined( '_RELEASE' )) {
		// Refuse to install on Mambo 4.5.0
		if( _RELEASE == '4.5' || (float)_RELEASE <= 4.50 )
				die( '<h2>����������� VirtueMart �� ����� ���� ����������: ���������������� ������ Mambo!</h2>
					<p>VirtueMart ������� Mambo <strong>4.5.1</strong></p>
					<p>���� ������: Mambo <strong>'._RELEASE.'.0 '._DEV_STATUS.' '._DEV_LEVEL.'</strong>, ������� ��������: '._CODENAME.'</p>' );
	}
	// Check for old mambo-phpShop Tables. When they exist,
	// offer an Upgrade
	$database->setQuery( "SHOW TABLES LIKE '".$mosConfig_dbprefix."pshop_%'" );
	$pshop_tables = $database->loadObjectList();
	
	if( !empty( $pshop_tables )) {
	  $installation = "phpshopupdate";
	}
	else {
		$database->setQuery( 'SELECT id,params FROM `#__components` WHERE name = \'virtuemart_version\'' );
		$database->loadObject( $old_version );
		
		if( $old_version && file_exists( $mosConfig_absolute_path.'/administrator/components/com_virtuemart/classes/htmlTools.class.php')) {
			$version_info = new mosParameters( $old_version->params );
			$isBefore_103 = version_compare( $version_info->get( 'RELEASE' ), '1.0.3' );
			$isBefore_105 = version_compare( $version_info->get( 'RELEASE' ), '1.0.5' );
			// Version_compare returns -1, which is true for the meaning of the variable meaning
			if( $isBefore_103 == -1 ) {
				// the update from
				$installation = 'vm_update_from102_orOlder';
			}
			elseif( $isBefore_103 > -1 && $isBefore_105  == -1) {
				$installation = 'vm_update_from103_orYounger';
			}
			elseif( $isBefore_105 > -1) {
				$installation = 'vm_update_from105_orYounger';
			}
		}
		else {
			$installation = "new";
		}
	}
	?>
	<link rel="stylesheet" href="components/com_virtuemart/install.css" type="text/css" />
	<div align="center">
		<table width="100%" border="0">
			<tr>
				<td valign="middle" align="center">
					<div id="ctr" align="center">
						<div class="install">
							<div id="stepbar">
								<div>
									<a href="http://virtuemart.ru" target="_blank"><img border="0" align="right" src="components/com_virtuemart/cart.gif" alt="������� ��� �������" /></a>
									<br/>
								</div>
								<div class="clr"></div>
								<br/><br/><br/>
								<div class="step-on" >
								<div id="helps" style="background:#ffffff;"><small>�� ������ ���������� �������� �������� ����������� (virtuemart.ru).<br />
		����������� ������� ��� ���� ������ ��� Virtuemart RE (����).
		<table cellpadding="5"  cellspacing="4" rules="all" style="border:1px solid #cccccc;color:#3B679A;"><tr>
		<td>�� WebMoney :<br/>
		Z288454500730<br/>
		R294674249457<br/>
		E369477093895<br/>
		U422301761913<br/>
		</td>
		</tr><tr>
		<td>
	Yandex-������ <br/>
	4100193886602
	</td>
	</tr>
	</table>
	</small></div>
									<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
										���������� ���������� ������ ��������� � �������� virtuemart.<br /><br />
										<input type="hidden" name="cmd" value="_xclick" />
										<input type="hidden" name="business" value="soeren_nb@yahoo.de" />
										<input type="hidden" name="item_name" value="VirtueMart Donation" />
										<input type="hidden" name="item_number" value="" />
										<input type="hidden" name="currency_code" value="EUR" />
										<input type="hidden" name="tax" value="0" />
										<input type="hidden" name="no_note" value="0" />
										<input type="hidden" name="amount" value="" />
										<input type="image" src="components/com_virtuemart/x-click-but21.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
									</form>
								</div>
							</div>
							<div id="right">
								<div id="step">����� ���������� � <br/><?php echo $shortversion ?>!</div>
			
								<div class="clr"></div>
								<pre><?php echo $myVersion ?></pre>
									<h1>������ ��� ��������� ������  <font color="green">�������</font></h1>
								<table>
								<?php
								if( $installation == "new" ) { ?>
									<tr>
									<td colspan="3" class="error">������ ���������� ���� ������ (������ ��������� �� ���� ����� ������  mambo-phpShop/VirtueMart �� ���������� ���������, ������ ����� ����������� ��������� ����� ������).</td>
									</tr>
									<tr>
										<td width="40%">������� ��������� ���������. �� ������ ������������ VirtueMart �� ������� ������ ����.<br/></td>
										<td width="20%">&nbsp;</td>
										<td width="40%">��� ���������� ������ �������� ������������ ���������� ����������, ��� ������� ��� ��� �������� ����� ������ �  VirtueMart.
										</td>
									</tr>
									<tr>
										<td width="40%">
											<a title="����� � ������� &gt;&gt;" onclick="alert('���������� �� ���������� ��������� ���! \n ��� ����� ������� ������� �� ������ VirtueMart.');" name="Button1" class="button" href="index2.php?option=com_virtuemart&install_type=newinstall">����� � ������� &gt;&gt;</a>
										</td>
										<td width="20%">&nbsp;</td>
										<td width="40%">
											<a name="Button2" onclick="alert('���������� �� ���������� ��������� ���! \n ��� ����� ������� ������� �� ������ VirtueMart.');" class="button" title="���������� ���������� &gt;&gt;" href="index2.php?option=com_virtuemart&install_type=newinstall&install_sample_data=true">���������� ���������� &gt;&gt;</a>
										</td>
									</tr>
									<tr>
										<td align="center" colspan="3"><br /><br /><hr /><br /></td>
									</tr>
									<?php 
								}
								elseif( $installation == 'vm_update_from102_orOlder' || $installation == 'vm_update_from103_orYounger' ) { 
									$old_version = get_class($version_info) =='mosparameters' ? $version_info->get( 'RELEASE') : '1.0.x';
									?>
										<td colspan="3" class="error">[����� ����������]<br/>������ ��������� ����� ������������� ������  VirtueMart <?php echo $old_version ?>, ������ ���������� ���������� ����� ���� ������.</td>
									<tr>
									</tr>
									<tr>
										<td align="left" colspan="3">
											<div align="center">
												<a title="���������� � ������<?php echo $old_version ?> &gt;&gt;" onclick="alert('���������� �� ���������� ��������� ���! \n ��� ����� ������� ������� �� ������ VirtueMart.');" name="Button2" class="button" href="index2.php?option=com_virtuemart&install_type=<?php echo $installation ?>">���������� � ������ <?php echo $old_version ?> &gt;&gt;</a>
											</div><br /><br/>
											���� ���� ������ ��<strong><?php echo $old_version ?></strong>? ����� ���������� ������� ���� <pre><?php echo dirname(__FILE__).'/install.php' ?></pre><br />
											
										</td>
									</tr>
									<?php
								}
									elseif( $installation == 'phpshopupdate' ) {  ?>
									<tr>
										<td colspan="3" class="error">[����� ����������]<br/>������ ��������� ����� ������� �� mambo-phpShop, ������ ���������� ���������� ����� ���� ������.</td>
									</tr>
									<tr>
										<td align="left" colspan="3">���� �� ���������� � ������ mambo-phpShop,<strong>1.2 stable-pl3</strong> ��� <strong>Mambo �������� eCommerce</strong> �� ������ ������� �� ���� ������!<br />
											<br /><br/>
											<div align="center">
												<a title="���������� � ������ 1.2 stable-pl3 &gt;&gt;" onclick="alert('���������� �� ���������� ��������� ����! \n ��� ����� �������� �� ���������� � mambo-phpShop �� VirtueMart.');" name="Button2" class="button" href="index2.php?option=com_virtuemart&install_type=update12pl3">�������� � ������ 1.2 stable-pl3 &gt;&gt;</a>
											</div>
											<div class="error">���������:</div>
											���� ����� ������ ����� 1.1 � 1.2 stable.pl3 (�������� <i>1.2 beta3</i>), �� ������ ��������� ���� ���� ������ �����  �������������� �������� ���������� SQL (Step-by-Step SQL Update Scripts) �� ����� 
											<pre>/administrator/components/com_virtuemart/sql/other</pre> ����� ��������� VirtueMart. �� ������ ��������� ������� ��<a href="http://mamboforge.net/projects/mosphpmyadmin/" target="_blank">phpMyAdmin ��� Mambo/Joomla</a>.                
										</td>
									</tr>
									<tr>
										<td align="center" colspan="3"><br /><br /><hr /><br /></td>
									</tr>
									<tr>
										<td align="center" colspan="3">
											<br /><br/>
											<div align="center">
												<a title="���������� � ������ 1.2 RC2 &gt;&gt;" onclick="alert('���������� �� ���������� ��������� ����! \n ��� ����� �������� �� ���������� � mambo-phpShop �� VirtueMart.');" name="Button2" class="button" href="index2.php?option=com_virtuemart&install_type=update12">���������� � ������ 1.2 RC2 &gt;&gt;</a>
											</div>
										</td>
									</tr>
										<td align="center" colspan="3">���� �� ������������ � ������ 1.1(a) �������� �� ���� ������!<br /><br />
											<a name="Button2" class="button" title="���������� � ������ 1.1(a) &gt;&gt;" onclick="alert('���������� �� ���������� ��������� ����! \n ��� ����� �������� �� ���������� � mambo-phpShop �� VirtueMart.');" href="index2.php?option=com_virtuemart&install_type=update11">���������� � ������ 1.1(a) &gt;&gt;<a />
										</td>
									</tr>
									<tr>
										<td align="center" colspan="3"><br /><br /><hr /><br /></td>
									</tr>
									<?php 
								}
									?>
									<tr>
										<td align="center" colspan="3">
										������� �� <a href="http://virtuemart.ru" target="_blank">virtuemart.ru</a> ���� ��� ��������� �������������� ������ 
														<br clear="all" />
										������� �� ����������� ����<a href="http://www.virtuemart.net" target="_blank">virtuemart.net</a>  ���� ��� ��������� �������������� ������
										</td>
									</tr>
								</table>
							</div>
							<div class="clr"></div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<?php
}
?>