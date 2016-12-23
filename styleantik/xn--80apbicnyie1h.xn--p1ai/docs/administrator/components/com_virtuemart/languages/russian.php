<?php
defined( '_VALID_MOS' ) or die( '������ ������ ��������.' ); 
/**
*
* @version $Id: admin.martlanguages.php 735 2007-02-28 15:07:26Z gregdev $
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2007 Soeren Eberhardt. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
* ������� ��������� �������� ��� skynet80
* http://virtuemart.ru
*/
class vmLanguage extends vmAbstractLanguage {
	var $_PHPSHOP_MENU = '����';
	var $_PHPSHOP_CATEGORY = '���������';
	var $_PHPSHOP_CATEGORIES = '���������';
	var $_PHPSHOP_SELECT_CATEGORY = '������� ���������:';
	var $_PHPSHOP_ADMIN = '�����������������';
	var $_PHPSHOP_PRODUCT = '�����';
	var $_PHPSHOP_LIST = '������';
	var $_PHPSHOP_ALL = '���';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = '������ ���� �������';
	var $_PHPSHOP_VIEW = '���';
	var $_PHPSHOP_SHOW = '��������';
	var $_PHPSHOP_ADD = '��������';
	var $_PHPSHOP_UPDATE = '��������';
	var $_PHPSHOP_DELETE = '�������';
	var $_PHPSHOP_SELECT = '�������';
	var $_PHPSHOP_SUBMIT = '���������';
	var $_PHPSHOP_RANDOM = '������';
	var $_PHPSHOP_LATEST = '��������� �����������';
	var $_PHPSHOP_HOME_TITLE = '�������';
	var $_PHPSHOP_CART_TITLE = '�������';
	var $_PHPSHOP_CHECKOUT_TITLE = '�������� �����';
	var $_PHPSHOP_LOGIN_TITLE = '�����';
	var $_PHPSHOP_LOGOUT_TITLE = '��������� �����';
	var $_PHPSHOP_BROWSE_TITLE = '��������';
	var $_PHPSHOP_SEARCH_TITLE = '�����';
	var $_PHPSHOP_ACCOUNT_TITLE = '���������� ������� �������';
	var $_PHPSHOP_NAVIGATION_TITLE = '���������';
	var $_PHPSHOP_DEPARTMENT_TITLE = '�����';
	var $_PHPSHOP_INFO = '����������';
	var $_PHPSHOP_BROWSE_LBL = '��������';
	var $_PHPSHOP_PRODUCTS_LBL = '�������';
	var $_PHPSHOP_PRODUCT_LBL = '�����';
	var $_PHPSHOP_SEARCH_LBL = '����� ������';
	var $_PHPSHOP_FLYPAGE_LBL = '��������� ';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = '�����';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = '������������';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = '��������� �������';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = '��������';
	var $_PHPSHOP_CART_SHOW = '�������� �������';
	var $_PHPSHOP_CART_ADD_TO = '������';
	var $_PHPSHOP_CART_NAME = '������������';
	var $_PHPSHOP_CART_SKU = '�������';
	var $_PHPSHOP_CART_PRICE = '����';
	var $_PHPSHOP_CART_QUANTITY = '����������';
	var $_PHPSHOP_CART_SUBTOTAL = '������������� ����';
	var $_PHPSHOP_ADD_SHIPTO_1 = '�������� �����';
	var $_PHPSHOP_ADD_SHIPTO_2 = '����� ��������';
	var $_PHPSHOP_NO_SEARCH_RESULT = '��� ����� �� ��� �����������.<br />';
	var $_PHPSHOP_PRICE_LABEL = '����: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = '�������� � �������';
	var $_PHPSHOP_NO_CUSTOMER = '�� �� ��������� ������������������ ��������. ����������, ������� ���������� ��� ���������� ������.';
	var $_PHPSHOP_DELETE_MSG = '�� �������, ��� ������ ������� ��� ������?';
	var $_PHPSHOP_THANKYOU = '������� �� ��� �����.';
	var $_PHPSHOP_NOT_SHIPPED = '�� ���������';
	var $_PHPSHOP_EMAIL_SENDTO = '�������������� ������ ���� ������� �� ������';
	var $_PHPSHOP_NO_USER_TO_SELECT = '��������, ����� ��� ������������, �������� �� ������ �������� � ������ ������������� com_virtuemart';
	var $_PHPSHOP_ERROR = '������';
	var $_PHPSHOP_MOD_NOT_REG = '������ �� ���������������.';
	var $_PHPSHOP_MOD_ISNO_REG = '- ������������ ������ VirtueMart.';
	var $_PHPSHOP_MOD_NO_AUTH = '� ��� ��� ���� ��� ������� � ����� ������.';
	var $_PHPSHOP_PAGE_404_1 = '�������� �� ����������';
	var $_PHPSHOP_PAGE_404_2 = '���� � ��������� ������ �� ����������. ���������� ����� ����:';
	var $_PHPSHOP_PAGE_403 = '������������ ���� �������';
	var $_PHPSHOP_FUNC_NO_EXEC = '� ��� ��� ���� �� ����������';
	var $_PHPSHOP_FUNC_NOT_REG = '������� �� ����������������';
	var $_PHPSHOP_FUNC_ISNO_REG = ' ��� ������������ ������� MOS_com_phpShop.';
	var $_PHPSHOP_ADMIN_MOD = '���������';
	var $_PHPSHOP_USER_LIST_MNU = '������ �������������';
	var $_PHPSHOP_USER_LIST_LBL = '������ �������������';
	var $_PHPSHOP_USER_LIST_USERNAME = '��� ������������';
	var $_PHPSHOP_USER_LIST_FULL_NAME = '������ ���';
	var $_PHPSHOP_USER_LIST_GROUP = '������';
	var $_PHPSHOP_USER_FORM_MNU = '�������� ������������';
	var $_PHPSHOP_USER_FORM_LBL = '��������/�������� ���������� � ������������';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = '���������� ���������� �����������';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = '����� ��������';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = '�������� �����';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = '��� ������� ��������.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = '����� ��������';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = '���';
	var $_PHPSHOP_USER_FORM_LAST_NAME = '�������';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = '��������';
	var $_PHPSHOP_USER_FORM_TITLE = '���������';
	var $_PHPSHOP_USER_FORM_USERNAME = '��� ������������';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = '������';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = '����������� ������';
	var $_PHPSHOP_USER_FORM_PERMS = '����������';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = '����� ������� / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = '�������� ��������';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = '����� 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = '����� 2';
	var $_PHPSHOP_USER_FORM_CITY = '�����';
	var $_PHPSHOP_USER_FORM_STATE = '������';
	var $_PHPSHOP_USER_FORM_ZIP = '������';
	var $_PHPSHOP_USER_FORM_COUNTRY = '������';
	var $_PHPSHOP_USER_FORM_PHONE = '�������';
	var $_PHPSHOP_USER_FORM_PHONE2 = '��������� �������';
	var $_PHPSHOP_USER_FORM_FAX = '����';
	var $_PHPSHOP_USER_FORM_EMAIL = '�-mail';
	var $_PHPSHOP_MODULE_LIST_MNU = '������ �������';
	var $_PHPSHOP_MODULE_LIST_LBL = '������ �������';
	var $_PHPSHOP_MODULE_LIST_NAME = '�������� ������';
	var $_PHPSHOP_MODULE_LIST_PERMS = '����� �� ������';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = '�������';
	var $_PHPSHOP_MODULE_LIST_ORDER = '������� ����������';
	var $_PHPSHOP_MODULE_FORM_MNU = '�������� ������';
	var $_PHPSHOP_MODULE_FORM_LBL = '�������� ������';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = '��������� ������ (��� �������� ����)';
	var $_PHPSHOP_MODULE_FORM_NAME = '�������� ������';
	var $_PHPSHOP_MODULE_FORM_PERMS = '����� �� ������';
	var $_PHPSHOP_MODULE_FORM_HEADER = '��������� ������';
	var $_PHPSHOP_MODULE_FORM_FOOTER = '������ ���������� ������';
	var $_PHPSHOP_MODULE_FORM_MENU = '�������� ������ � ������� �����������������?';
	var $_PHPSHOP_MODULE_FORM_ORDER = '������� �����������';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = '�������� ������';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = '�������� ���������';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = '�������� ����';
	var $_PHPSHOP_FUNCTION_LIST_MNU = '������ �������';
	var $_PHPSHOP_FUNCTION_LIST_LBL = '������ �������';
	var $_PHPSHOP_FUNCTION_LIST_NAME = '��� �������';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = '��� ������';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = '����� ������';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = '����� �� �������';
	var $_PHPSHOP_FUNCTION_FORM_MNU = '�������� �������';
	var $_PHPSHOP_FUNCTION_FORM_LBL = '�������� �������';
	var $_PHPSHOP_FUNCTION_FORM_NAME = '��� �������';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = '��� ������';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = '����� ������';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = '����� �� �������';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = '�������� �������';
	var $_PHPSHOP_CURRENCY_LIST_MNU = '������ �����';
	var $_PHPSHOP_CURRENCY_LIST_LBL = '������ �����';
	var $_PHPSHOP_CURRENCY_LIST_ADD = '�������� ������';
	var $_PHPSHOP_CURRENCY_LIST_NAME = '�������� ������';
	var $_PHPSHOP_CURRENCY_LIST_CODE = '��� ������';
	var $_PHPSHOP_COUNTRY_LIST_MNU = '������ �����';
	var $_PHPSHOP_COUNTRY_LIST_LBL = '������ �����';
	var $_PHPSHOP_COUNTRY_LIST_ADD = '�������� ������';
	var $_PHPSHOP_COUNTRY_LIST_NAME = '�������� ������';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = '��� ������ (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = '��� ������ (2)';
	var $_PHPSHOP_STATE_LIST_MNU = '������ ��������';
	var $_PHPSHOP_STATE_LIST_LBL = '������ �������� ���: ';
	var $_PHPSHOP_STATE_LIST_ADD = '��������/�������� ������';
	var $_PHPSHOP_STATE_LIST_NAME = '�������� �������';
	var $_PHPSHOP_STATE_LIST_3_CODE = '��� ������� (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = '��� ������� (2)';
	var $_PHPSHOP_ADDRESS = '�����';
	var $_PHPSHOP_CONTINUE = '����������';
	var $_PHPSHOP_EMPTY_CART = '���� ������� �����.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = '��������� � �������� Intershipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = '��������� � �������� Intershipper';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = '������ ����� � �������� Intershipper';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = '����� ��������� ������� � �������� Intershipper';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = '������� ��������';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = '�����<br />������';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = '���.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = '������ ��������� ��������';
	var $_PHPSHOP_ISSHIP_LIST_LBL = '��������� �������� ��������';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = '��������&nbsp;��������';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = '��������';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = '����� �� ��������� �����';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = '���� ���������� �����';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = '������������� �����';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = '�������';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = '����';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = '�������� �������/������ �������';
	var $_PHPSHOP_ISSHIP_FORM_MNU = '��������� �������� ��������';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = '�������� ������� ��������';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = '��������� ������� ��������';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = '��������';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = '�������� ��������';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = '������������';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = '����� �� ��������� �����';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = '���� ���������� �����';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = '������������� �����';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = '�������';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = '����';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = '�������� �������/������ �������';
	var $_PHPSHOP_ORDER_MOD = '������';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = '�����������';
	var $_PHPSHOP_ORDER_CANCEL_MNU = '�������� �����';
	var $_PHPSHOP_ORDER_PRINT_MNU = '���������� �����';
	var $_PHPSHOP_ORDER_DELETE_MNU = '������� �����';
	var $_PHPSHOP_ORDER_LIST_MNU = '������ �������';
	var $_PHPSHOP_ORDER_LIST_LBL = '������ �������';
	var $_PHPSHOP_ORDER_LIST_ID = '����� ������';
	var $_PHPSHOP_ORDER_LIST_CDATE = '���� ������';
	var $_PHPSHOP_ORDER_LIST_MDATE = '�������';
	var $_PHPSHOP_ORDER_LIST_STATUS = '������';
	var $_PHPSHOP_ORDER_LIST_TOTAL = '������������� ����';
	var $_PHPSHOP_ORDER_ITEM = '���������� ������';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = '���������� � ������';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = '����� ������';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = '���� ������';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = '������ ������';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = '���������� � �������';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = '���������� ���������� �����������';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = '���������� � ��������';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = '����������';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = '����� ��������';
	var $_PHPSHOP_ORDER_PRINT_NAME = '���';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = '��������';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = '����� 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = '����� 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = '�����';
	var $_PHPSHOP_ORDER_PRINT_STATE = '������';
	var $_PHPSHOP_ORDER_PRINT_ZIP = '������';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = '������';
	var $_PHPSHOP_ORDER_PRINT_PHONE = '�������';
	var $_PHPSHOP_ORDER_PRINT_FAX = '����';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = '���������� ������';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = '����������';
	var $_PHPSHOP_ORDER_PRINT_QTY = '���-��';
	var $_PHPSHOP_ORDER_PRINT_SKU = '�������';
	var $_PHPSHOP_ORDER_PRINT_PRICE = '����';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = '�����';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = '������������� ����';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = '����� �� ��������� ������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = '��������� �������� � ����� �� ��������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = '����� �� ��������';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = '������ ������';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = '��� ��������� �����';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = '����� �/�����';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = '������������ ��';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = '������� ��������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = '���������� � ��������';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = '���������� �� ������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = '������� ��������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = '��� ��������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = '���� ��������';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = '��������� ��������';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = '��������� ������';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = '�������� ��� ��������� ������';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = '��� ��������� ������';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = '�������� ��������� ������';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = '��������� ������';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = '��� ��������� ������';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = '�������� ��������� ������';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = '������� �����������';
	var $_PHPSHOP_PRODUCT_MOD = '������';
	var $_PHPSHOP_CURRENT_PRODUCT = '������� �����';
	var $_PHPSHOP_CURRENT_ITEM = '������� �������';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = '������ �� ������';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = '�������� ������� �� ������';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = '����';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = '����������';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = '���';
	var $_PHPSHOP_PRODUCT_LIST_MNU = '������';
	var $_PHPSHOP_PRODUCT_LIST_LBL = '������ �������';
	var $_PHPSHOP_PRODUCT_LIST_NAME = '������������ ������';
	var $_PHPSHOP_PRODUCT_LIST_SKU = '�������';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = '������������';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = '����� ������';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = '�������';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = '� ���������� ����';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = '��� ���������� ����';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = '�����';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = '��';
	var $_PHPSHOP_PRODUCT_FORM_MNU = '�������� �����';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = '������������� �����';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = '�������� ������������� (fly-��������) �������� ������';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = '�������� �������';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = '�������� ������ �������';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = '����� �����';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = '��������';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = '���������� � ������';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = '������ ������';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = '�������� � ���';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = '����������� ������';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = '����� �������';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = '�������� �������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = '���������� � �������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = '������ �������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = '������ ������� � ���';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = '����������� �������';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = '��������� � ������������� ������';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = '����� �������� ������� �����������, ������� ���� � ������ �����.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = '������� ������� �����������.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = '������� ������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = '�������� �������';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = '�� �������, ��� ������ ������� ���� ����� � ������� ��������� � ���?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = '�� �������, ��� ������ ������� ��� �������?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = '��������';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = '�������������';
	var $_PHPSHOP_PRODUCT_FORM_SKU = '�������';
	var $_PHPSHOP_PRODUCT_FORM_NAME = '������������';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = '���������';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = '���� ������ (� ��������)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = '���� ������ (��� �������)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = '�������� ������';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = '������� ��������';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = '�� ������';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = '� ������';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = '�������� �';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = '����������� �����������';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = '��� ������';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = '������������?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = '�����';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = '������';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = '������';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = '������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = '���';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = '������� ���������';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = '��������� ��������';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = '������� ��������';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = '��';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = '��';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = '�������';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = '��';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = '���-�� � ��������';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = '����� �� ������ ������� ���������� ������ ������ � ��������. (����. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = '������ � �������';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = '����� �� ������ ������� ���������� ������ ������ � �������. (����. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = '���������� ���������� ������';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = '���������� ���������� ������';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = '���������� ���������� �������';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = '���������� ���������� �������';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = '�������/������ ����� CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = '������ ��������� ������';
	var $_PHPSHOP_CATEGORY_LIST_MNU = '������ ���������';
	var $_PHPSHOP_CATEGORY_LIST_LBL = '������ ���������';
	var $_PHPSHOP_CATEGORY_FORM_MNU = '�������� ���������';
	var $_PHPSHOP_CATEGORY_FORM_LBL = '���������� � ���������';
	var $_PHPSHOP_CATEGORY_FORM_NAME = '�������� ���������';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = '������������ ���������';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = '�������� ���������';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = '������������?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = '�������� ������������� (fly-��������) ���������';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = '������ �������';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = '������ ������� ���';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = '�������� ��������';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = '������� �����������';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = '�������� ��������';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = '����� ��������';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = '����� �������� ��� ������';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = '�������� �������� ������';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = '����� �������� ��� �������';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = '�������� �������� ��� �������';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = '�������� ��������';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = '������� �����������';
	var $_PHPSHOP_PRICE_LIST_MNU = '����';
	var $_PHPSHOP_PRICE_LIST_LBL = '����';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = '���� ���';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = '�������� ������';
	var $_PHPSHOP_PRICE_LIST_PRICE = '����';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = '������';
	var $_PHPSHOP_PRICE_FORM_MNU = '�������� ����';
	var $_PHPSHOP_PRICE_FORM_LBL = '���������� � ����';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = '����� ���� ��� ������';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = '�������� ���� ������';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = '����� ���� ��� �������';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = '�������� ���� ��� �������';
	var $_PHPSHOP_PRICE_FORM_PRICE = '����';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = '������';
	var $_PHPSHOP_PRICE_FORM_GROUP = '������ ����������';
	var $_PHPSHOP_REPORTBASIC_MOD = '������';
	var $_PHPSHOP_RB_INDIVIDUAL = '����� �� ���������� ������';
	var $_PHPSHOP_RB_SALE_TITLE = '����� � ��������';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = '������ ������';
	var $_PHPSHOP_RB_INTERVAL_TITLE = '���������� ��������';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = '�� ������� �����';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = '�� ������';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = '�� ����';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = '�� ������� �����';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = '�� ���������� �����';
	var $_PHPSHOP_RB_LAST60_BUTTON = '�� ��������� 60 ����';
	var $_PHPSHOP_RB_LAST90_BUTTON = '�� ��������� 90 ����';
	var $_PHPSHOP_RB_START_DATE_TITLE = '������';
	var $_PHPSHOP_RB_END_DATE_TITLE = '�����';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = '�������� ��������� ������';
	var $_PHPSHOP_RB_REPORT_FOR = '����� �� ';
	var $_PHPSHOP_RB_DATE = '����';
	var $_PHPSHOP_RB_ORDERS = '������';
	var $_PHPSHOP_RB_TOTAL_ITEMS = '����� �������';
	var $_PHPSHOP_RB_REVENUE = '�������';
	var $_PHPSHOP_RB_PRODLIST = '������ �������';
	var $_PHPSHOP_SHOP_MOD = '�������';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = '�����������';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = '����';
	var $_PHPSHOP_ORDER_STATUS_P = '� ���������';
	var $_PHPSHOP_ORDER_STATUS_C = '�����������';
	var $_PHPSHOP_ORDER_STATUS_X = '�������';
	var $_PHPSHOP_ORDER_BUTTON = '�����';
	var $_PHPSHOP_SHOPPER_MOD = '����������';
	var $_PHPSHOP_SHOPPER_LIST_MNU = '����������';
	var $_PHPSHOP_SHOPPER_LIST_LBL = '������ �����������';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = '��� ������������';
	var $_PHPSHOP_SHOPPER_LIST_NAME = '������ ���';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = '������';
	var $_PHPSHOP_SHOPPER_FORM_MNU = '�������� ����������';
	var $_PHPSHOP_SHOPPER_FORM_LBL = '���������� � ����������';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = '���������� ���������� �����������';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = '����������';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = '���������� � ��������';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = '�������� �����';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = '�����';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = '��� ����������';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = '���';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = '�������';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = '��������';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = '���������';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = '��� ������������';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = '������';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = '����������� ������';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = '������ ����������';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = '�������� ��������';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = '����� (�����, ���, ��������)';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = '����� (�����)';
	var $_PHPSHOP_SHOPPER_FORM_CITY = '�����';
	var $_PHPSHOP_SHOPPER_FORM_STATE = '������';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = '������';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = '������';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = '�������';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = '��������� �������';
	var $_PHPSHOP_SHOPPER_FORM_FAX = '����';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = '��';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = '���';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = '������ �����������';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = '������ �����������';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = '�������� ������';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = '�������� ������';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = '�������� ������ �����������';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = '�������� ������ �����������';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = '�������� ������';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = '�������� ������';
	var $_PHPSHOP_STORE_MOD = '�������';
	var $_PHPSHOP_STORE_FORM_MNU = '���������� � ��������';
	var $_PHPSHOP_STORE_FORM_LBL = '���������� � ��������';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = '���������� ����������';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = '�������';
	var $_PHPSHOP_STORE_FORM_UPLOAD = '��������� �����������';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = '�������� ��������';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = '�������� �������� ��������� ��������';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = '����� (�����, ���, ��������)';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = '����� (�����)';
	var $_PHPSHOP_STORE_FORM_CITY = '�����';
	var $_PHPSHOP_STORE_FORM_STATE = '������';
	var $_PHPSHOP_STORE_FORM_COUNTRY = '������';
	var $_PHPSHOP_STORE_FORM_ZIP = '������';
	var $_PHPSHOP_STORE_FORM_PHONE = '�������';
	var $_PHPSHOP_STORE_FORM_CURRENCY = '������';
	var $_PHPSHOP_STORE_FORM_CATEGORY = '��������� ��������';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = '�������';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = '���';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = '��������';
	var $_PHPSHOP_STORE_FORM_TITLE = '���������';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = '������� 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = '������� 2';
	var $_PHPSHOP_STORE_FORM_FAX = '����';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = '���� � �����������';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = '��������';
	var $_PHPSHOP_PAYMENT = '������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = '������� ������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = '������ �������� ������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = '��������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = '���';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = '������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = '������ �����������';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = '������ ������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = '�������� ������ ������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = '�������� ������ ������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = '�������� ������� ������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = '������ �����������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = '������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = '���';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = '������� �����������';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = '������ ������';
	var $_PHPSHOP_TAX_MOD = '������';
	var $_PHPSHOP_TAX_RATE = '��������� ������';
	var $_PHPSHOP_TAX_LIST_MNU = '������ ��������� ������';
	var $_PHPSHOP_TAX_LIST_LBL = '������ ��������� ������';
	var $_PHPSHOP_TAX_LIST_STATE = '������, ��� ��������� �����';
	var $_PHPSHOP_TAX_LIST_COUNTRY = '������, ��� ��������� �����';
	var $_PHPSHOP_TAX_LIST_RATE = '������ ������';
	var $_PHPSHOP_TAX_FORM_MNU = '�������� ��������� ������';
	var $_PHPSHOP_TAX_FORM_LBL = '�������� ���������� � ��������� ������';
	var $_PHPSHOP_TAX_FORM_STATE = '������, ��� ��������� �����';
	var $_PHPSHOP_TAX_FORM_COUNTRY = '������, ��� ��������� �����';
	var $_PHPSHOP_TAX_FORM_RATE = '������ ������ (���� 16% => ������ 0.16)';
	var $_PHPSHOP_VENDOR_MOD = '��������';
	var $_PHPSHOP_VENDOR_ADMIN = '��������';
	var $_PHPSHOP_VENDOR_LIST_MNU = '������ ���������';
	var $_PHPSHOP_VENDOR_LIST_LBL = '������ ���������';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = '�������� ��������';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = '�����������������';
	var $_PHPSHOP_VENDOR_FORM_MNU = '�������� ��������';
	var $_PHPSHOP_VENDOR_FORM_LBL = '�������� ����������';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = '���������� � ��������';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = '���������� ����������';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = '�������';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = '��������� �������';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = '�������� ��������';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = '�������� ��������';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = '����� (�����, ���, ��������)';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = '����� (�����)';
	var $_PHPSHOP_VENDOR_FORM_CITY = '�����';
	var $_PHPSHOP_VENDOR_FORM_STATE = '������';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = '������';
	var $_PHPSHOP_VENDOR_FORM_ZIP = '������';
	var $_PHPSHOP_VENDOR_FORM_PHONE = '�������';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = '������';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = '��������� ��������';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = '�������';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = '���';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = '��������';
	var $_PHPSHOP_VENDOR_FORM_TITLE = '���������';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = '������� 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = '������� 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = '����';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = '���� � �����������';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = '��������';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = '������ ��������� ���������';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = '������ ��������� ���������';
	var $_PHPSHOP_VENDOR_CAT_NAME = '�������� ���������';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = '�������� ���������';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = '��������';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = '�������� ��������� ���������';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = '�������� ��������� ���������';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = '���������� � ���������';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = '�������� ���������';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = '�������� ���������';
	var $_PHPSHOP_MANUFACTURER_MOD = '�������������';
	var $_PHPSHOP_MANUFACTURER_ADMIN = '�������������';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = '������ ��������������';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = '������ ��������������';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = '�������� �������������';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = '�����������������';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = '�������� �������������';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = '�������� ����������';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = '���������� � �������������';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = '�������� �������������';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = '��������� �������������';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = '���� �������������';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = '��������';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = '������ ��������� ��������������';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = '������ ��������� ��������������';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = '�������� ���������';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = '�������� ���������';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = '�������������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = '�������� ��������� ��������������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = '����� ��������� ��������������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = '���������� � ���������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = '�������� ���������';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = '�������� ���������';
	var $_PHPSHOP_HELP_MOD = '������';
	var $_PHPSHOP_CART_ACTION = '��������';
	var $_PHPSHOP_CART_UPDATE = '�������� ���������� � �������';
	var $_PHPSHOP_CART_DELETE = '������� ����� �� �������';
	var $_PHPSHOP_PRODUCT_PRICETAG = '����';
	var $_PHPSHOP_PRODUCT_CALL = '���������, ����� �������� ����';
	var $_PHPSHOP_PRODUCT_PREVIOUS = '����';
	var $_PHPSHOP_PRODUCT_NEXT = '����';
	var $_PHPSHOP_CART_TAX = '�����';
	var $_PHPSHOP_CART_SHIPPING = '��������� �������� � ����� �� ��������';
	var $_PHPSHOP_CART_TOTAL = '�����';
	var $_PHPSHOP_CHECKOUT_NEXT = '���������';
	var $_PHPSHOP_CHECKOUT_REGISTER = '������������������';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = '���������� ���������� �����������';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = '��������';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = '���';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = '�����';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = '�������';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = '����';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = '���������� � ��������';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = '��������';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = '���';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = '�����';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = '�������';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = '����';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = '���������� �� ������';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = '��������� ����� (�������� ���������� �������, ��� �������� �� �����)';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = '������ ������';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = '����� �����';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = '������������� ��';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = '��������� �����';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = '����������� ���������� ��� ������ �� ��������� �����';
	var $_PHPSHOP_ZONE_MOD = '������ ��������';
	var $_PHPSHOP_ZONE_LIST_MNU = '������ ��������';
	var $_PHPSHOP_ZONE_FORM_MNU = '�������� ������';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = '��������� ������';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = '������';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = '������� ������';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = '��������� �������';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = '��������';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = '��������� �������';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = '�������� �������';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = '�������� �������';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = '������������ ��������� �� �������';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = '����� ��������� � �������';
	var $_PHPSHOP_ZONE_LIST_LBL = '������ ��������';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = '�������� �������';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = '�������� �������';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = '������������ ��������� �� �������';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = '����� ��������� � �������';
	var $_PHPSHOP_LOGIN_FIRST = '����������, ������� ����������������� ��� ��������������� �� ���� ����� (����������� ������ �����).<br/>�������.';
	var $_PHPSHOP_STORE_FORM_TOS = '������� ������������';
	var $_PHPSHOP_AGREE_TO_TOS = '����������, ������������ ������� � ������ ��������� ������������.';
	var $_PHPSHOP_I_AGREE_TO_TOS = '� �������� � ������� ���������';
	var $_PHPSHOP_LEAVE_BLANK = '(�������� ������, ���� � ���<br />��� ��� ����� ���������� php-�����!)';
	var $_PHPSHOP_RETURN_LOGIN = '��� ����������������? ����������, �������';
	var $_PHPSHOP_NEW_CUSTOMER = '������� � ����� ��������? ����������, ������� ���� ������';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = '������� ������ ����������:';
	var $_PHPSHOP_ACC_ORDER_INFO = '���������� � ������';
	var $_PHPSHOP_ACC_UPD_BILL = '����� �� ������ �������� ���e ���������� ����������.';
	var $_PHPSHOP_ACC_UPD_SHIP = '����� �� ������ �������� ����� ����� ��������.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = '���������� �� ������� ������';
	var $_PHPSHOP_ACC_SHIP_INFO = '���������� � ��������';
	var $_PHPSHOP_ACC_NO_ORDERS = '��� ������� ��� �����������';
	var $_PHPSHOP_ACC_BILL_DEF = '- ��-��������� (��� ��, ��� � ����������)';
	var $_PHPSHOP_SHIPTO_TEXT = '�� ������ �������� ����� �������� ��� ����� ������� ������. ���������� ���������� ��� ��� ����������� ��� ����� ��������, ������� �� �������� ����';
	var $_PHPSHOP_CONFIG = '���������� ������������';
	var $_PHPSHOP_USERS = '������������';
	var $_PHPSHOP_IS_CC_PAYMENT = '������ ��������� ������?';
	var $_PHPSHOP_SHIPPING_MOD = '��������';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = '�������� ��������';
	var $_PHPSHOP_CARRIER_LIST_MNU = '�������� ��������';
	var $_PHPSHOP_CARRIER_LIST_LBL = '������ ��������� ��������';
	var $_PHPSHOP_RATE_LIST_MNU = '������ ��������';
	var $_PHPSHOP_RATE_LIST_LBL = '������ ������� ��������';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = '��������';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = '������� �����������';
	var $_PHPSHOP_CARRIER_FORM_MNU = '�������� ������� ��������';
	var $_PHPSHOP_CARRIER_FORM_LBL = '��������/�������� ������� ��������';
	var $_PHPSHOP_RATE_FORM_MNU = '�������� ����� ��������';
	var $_PHPSHOP_RATE_FORM_LBL = '��������/�������� ����� ��������';
	var $_PHPSHOP_RATE_FORM_NAME = '�������� ������ ��������';
	var $_PHPSHOP_RATE_FORM_CARRIER = '������� ��������';
	var $_PHPSHOP_RATE_FORM_COUNTRY = '������';
	var $_PHPSHOP_RATE_FORM_ZIP_START = '������ ��������� �������� ��������';
	var $_PHPSHOP_RATE_FORM_ZIP_END = '����� ��������� �������� ��������';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = '����������� ���';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = '������������ ���';
	var $_PHPSHOP_RATE_FORM_VALUE = '��������� ��������';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = '��������� ��������';
	var $_PHPSHOP_RATE_FORM_CURRENCY = '������';
	var $_PHPSHOP_RATE_FORM_VAT_ID = '������ ���';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = '������� �����������';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = '������� ��������';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = '�������� ������ ��������';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = '��� �� ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... ��';
	var $_PHPSHOP_CARRIER_FORM_NAME = '��������-��������';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = '������� �����������';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = '������: ������� �������� � ����� ��������������� ��� ����������.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = '������: �������� ������� ��������.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = '������: � ������� �������� �������� ���� ������ ��������. ����������, ������� �� �������';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = '������: ���������� ����� ������� �������� ���� ���������������.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = '������: �������� ������� ��������.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = '������: ���������� ����� ������� �������� ���� ���������������.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = '������: �� ������� �������� ������ ��������.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = '������: ������� ������� ������ ����������. ��������� ����� ����� ���� ��������� ������ ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = '������: �� ������ ����������� ���.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = '������: �� ������ ������������ ���.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = '������: ����������� ��� ������ ���� ������, ��� ������������';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = '������: �� ������� ��������� ��������';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = '������: �� ������� ������';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = '������: �� ������ ����� ��������';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = '����������, ��������';
	var $_PHPSHOP_INFO_MSG_CARRIER = '������� ��������';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = '����� ��������';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = '����';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-���-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = '��������� �����';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = '������������ �������� ���������';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = '���������� �����';
	var $_PHPSHOP_PAYMENT_FORM_AO = '�������� �� ������ (������ ��������� ��� ���������)';
	var $_PHPSHOP_CHECKOUT_MSG_2 = '����������, �������� ����� ��������!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = '����������, �������� ������� ��������!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = '����������, �������� ������ ������!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = '����������, ��������� ��������� ������ � ����������� �����!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = '����������, �������� ������� ��������.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = '����������, �������� ������ ������� ��������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = '����������, �������� ������ ������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = '����������, ������� ����� ��������� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = '��������� ����� (�������� ���������� �������, ��� �������� �� �����).';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = '��������� ����� ��������� ����� �������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = '����������, ������� ����� ��������� �������� ��������� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = '����������, ������� ��� ��������� �������� ��������� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = '���� ��������� �������� ��������� ����� �����������.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = '����������, �������� ����� ��������.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = '�������� ����� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = '���� ������� �����!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = '������: ����������, �������� ������� ��������!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = '������: �� ������ ��������� ����� ��������!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = '������: �� ������ ����� ��������!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = '������: ��� ������ �������� �����...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = '������: ����� ��������� ����� �� ������!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = '��������, ��������� ����� ��������� ����� �������� ��������!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = '������������� ������������ �� ��� ������ � ���� ������!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = '�� �� ������� ��� ��������� ����������� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = '�� �� ������� ��� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = '�� �� ������� ����� ���������� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = '�� �� ������� ��� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = '�� �� ������� �������� �����.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = '��� ������ ���������� ���������� ���������!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = '���������� ��� ������ �������� � ��������� ��� ���������� ���������.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = '����� ������ ������ ���������� ����������.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = '����������� ����� ������:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = '������ ��������� ������';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'C������ ������';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = '����������, �������� ������ ������:';
	var $_PHPSHOP_STORE_FORM_MPOV = '����������� ����� ������';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = '���������� � ���������� �����';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = '����� ���������� �����';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = '��� �����';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = '�������� �����';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = '���';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = '�������� ����������� �����';
	var $_PHPSHOP_MODULES = '������';
	var $_PHPSHOP_FUNCTIONS = '�������';
	var $_PHPSHOP_SPECIAL_PRODUCTS = '����������� �����������';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = '��� �������, �� ������ �������� ����������� � ������';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = '����������� ����������';
	var $_PHPSHOP_INCLUDING_TAX = '(�������� ������ $tax % )';
	var $_PHPSHOP_PLEASE_SEL_ITEM = '����������, �������� �������';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = '�������';
	var $_PHPSHOP_DOWNLOADS_TITLE = '������ �������';
	var $_PHPSHOP_DOWNLOADS_START = '�������';
	var $_PHPSHOP_DOWNLOADS_INFO = '����������, ������� ������������� �������, ������� �� �������� �� e-mail � ������� \'�������\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = '��������, �� ���� �������� ��� ������� ������ ����� ����';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = '��������, �� �� ������� ����������� ����������� ���������� ���';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = '�������� ������������� �������!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = '���������� ��������� ��������� ��� ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = '��������� ���� ���������� ���';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = '���������� � �������';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = '����(�), ������� �� ������, ������ ��� ����������';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = '����������, ������� ���������(��) �������������(�) � ������� �������: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = '������������ ���������� ���������� ��� ������� �����: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = '��������� � ������� {expire} ���� ����� ������� ����������';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = '���� � ��� �������� �������, �� ������:';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = '���������� � ���������� ���';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = '����������� �����?';
	var $_PHPSHOP_PAYPAL_THANKYOU = '���������� �� ������. 
         �������� ������ �������. �� �������� ������������� �� e-mail �� ������ ����� PayPal. 
         �� ������ ���������� ��� ������ �� <a href=http://www.paypal.com>www.paypal.com</a>, ����� ������� ����������� ��������.';
	var $_PHPSHOP_PAYPAL_ERROR = '��� ��������� �������� ��������� ������. ������ ������ ������ �� ���������.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = '������� �� ������� � ����� ��������. ���������� � ����� ������ ������������ ����.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = '������� �� ��, ��� ��������� ����� ���������� ��������.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = '���� � ��� �������� �������, �� ������:';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = '������� ��������� �����.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = '����� ����������� �����, ����������� �� ������ ����.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = '������������� ���������� �� ���������.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = '����������, ������� ���������� �������� ��� ���� �������.';
	var $_PHPSHOP_CART_STOCK_1 = '��������� �������� ��������� ���������� ������� �� ������. ';
	var $_PHPSHOP_CART_STOCK_2 = '� ��������� ����� �������� $product_in_stock ������ ������. ';
	var $_PHPSHOP_CART_STOCK_3 = 'ٸ����� �����, �� ������ �������� ������ �� �����.';
	var $_PHPSHOP_CART_SELECT_ITEM = '��� ����, ����� �������� ���� ����� � ���� ������� �� ������ ������� �������� ������ �� �������� � ��� ���������.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = '���';
	var $_PHPSHOP_REGISTRATION_FORM_MR = '�-�';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = '�-��';
	var $_PHPSHOP_REGISTRATION_FORM_DR = '������';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = '���������.';
	var $_PHPSHOP_DEFAULT = '��-���������';
	var $_PHPSHOP_AFFILIATE_MOD = '����������������� ����������� ���������';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = '������ ���������';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = '������ ���������';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = '�������� ��������';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = '�������';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = '������';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = '���� �� �����';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = '������������ �� �����';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = '������� �����������';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-mail ���������';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail ���������';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = '���� ��������� e-mail(* = ����)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = '��� e-mail';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = '����';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = '������� ������� ����������';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = '������������ ������ (��������)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = '�������?';
	var $_PHPSHOP_DELIVERY_TIME = '������ ����������� � �������';
	var $_PHPSHOP_DELIVERY_INFORMATION = '���������� � ��������';
	var $_PHPSHOP_MORE_CATEGORIES = '��� ���������';
	var $_PHPSHOP_AVAILABILITY = '��������';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = '����� ������ ������ ��� � �������.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = '��������� ����������� ����� ������: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = '������ ����������';
	var $_PHPSHOP_STATISTIC_STATISTICS = '����������';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = '����������';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = '�������� ������';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = '���������� ������';
	var $_PHPSHOP_STATISTIC_SUM = '�����';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = '����� ������';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = '����� ����������';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = '����������, �������� ���� e-mail, ����� �� ��������� ���, ����� ���� ����� ����� �������� �� ������. 
                                         �� �� ����� ���������, ���������� ������� ����� ��� ������ �������� ������������ ��� e-mail, ����� ��� ��� 
                                         ����������� � ���, ��� ����� ����� �������� �� �����.<br /><br />�������!';
	var $_PHPSHOP_WAITING_LIST_THANKS = '������� �� ��������! <br />�� ������� ��� � ��������� ������, ��� ������ �� �������� �� �����.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = '���������!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = '��� ��� ������';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = '����������, �������� Authorize.net ��� CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' ������ ����� ������������:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = '�������� ��� ������';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = '���������� ��� ������';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = '���������� ���������';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = '���� & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = '����';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = '��������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = '���������� ������';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = '����������';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = '������';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = '������������ ������ ��� �������';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = '���� ��������, �� ������� ����� �������� <b>������ ��� �������</b>. ��� ���� ��� �������������� ����������� ������� ����� ���������.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = '���������� ����';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = '���� ������� ������';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = '�������� ���� �����, ����� ���������� ���� � ������ ������. ���� ����� �� �������, �� ���� ������������ ��� ������.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = '�������� ���� �����, ����� ���������� ����. ���� �� ����������� ������� ��� �������, �� ������ ��������� ����������� ��� �� �����.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = '����������� �����';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = '���� ����� ����������, ���������� �� ������� ������ � ������� ����� ��� ���. �������� <b>ps_checkout.php->calc_order_taxable()</b>, ����� ��������� ��� ����������� ����� ������ �������';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = '������ ������� ������:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = '������� �� ������ ��������';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = '������� �� ������ ��������';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = '���� ����� ����������, ����� ��������� ������ ������������ ��� ������� ������:<br />
                                                 <ul><li>�� ������ �������/������ ��������� ��������;</li>
                                                 <li>�� ������ ������ ����������.</li>
 												<li>����� "C����� EC", ����� ����� ������������ ��� ������� ������ �� �����������, ���� ���������� �� ���������, � ��������� ������ ����� �������������� ������ �� ������ ����������.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = '��������� ��������� ��������� ������?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = '�������� ���� �����, ���� � ��� ���� ������ � ��������� ��������� �������<br>(��������, 10% ��� ���� � ���, 18% ��� ��������� �������)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = '�������� ������ ����� ����������� �������/��������?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = '��������� �������� ��������� ������/��������';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = '�������� ���� �����, ���� �� ������ ��������� ����� �������� <strong>��������� ������</strong> � <strong>������ ������</strong> �� ���. <br />
                                                                                 ����� ������� ���� ������� ������ ��������� ���� ������ � ������� ��� ������ ��������.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = '���� ����� ���������� ������������������ ������� ������ �� ���������� ������: �� (����� �������) ��� ����� ���������� ����� ������� � ����� �� ��������.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = '��������� �������� ��������� ���������� ���������?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = '�������� ���� �����, ���� �� ������, ����� � ����� �������� ��� �����������, ���� ����������� ��������� ���� ������.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = '��������� ����� ������� ��� ����������?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = '��������, ���� ���� ���������� ������ �������� ���� ������ ����� ��������������.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = '���������� ������ ����������� � \\"��������� ������������\\"?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = '�������� ���� �����, ���� �� ������, ����� ���� ������� ����������� � ��������� ������������, �� ����� ����������� � ��������.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = '��������� ������� �� ������?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = '�������� ���� �����, ���� �� ������, ����� ������� ��������� ���������� ���������� ������ �� ������. ���� �� �������� ���� �����, �� ������� �� �������� �������� � ������� ������ ������, ��� �������� �� ������.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = '�������� ����������� ���������?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = '���� ����� �������� �������� �� ����������� ���������� � ��������. �������� ���, ���� �� �������� ��������� ����� ������ �����������������.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = '������ ������:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = '�����';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = '���������� ������ ������, ����������� ���������� ��� ������������� ������:<br />
                                                                                         <ul><li>��� ������� �����</li>
                                                                                         <li>��� � ������� html � �������������.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = '��������� ����������������� ����� ������� (frontend) �������������, �� ���������� � ������ �����������������?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = '������� ��� �����, �� ������ ��������� �������������, �� ������� ������� � ������ �����������������, ���������������� ������� ����� ������� (frontend)(�������� ������������� � ������� Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = '�����';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = '����� ������ �����. ������ ��������� ��������� � ������� Joomla (�� ������ � �����!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = '����� ��� ����������� ������';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = '����� ��� ����������� ������ (SSL-������) ������ ����� (https �� ������ � �����!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = '������ �� ���������';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = '������ �� ��������� VirtueMart (�� ������ � �����!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = '����� ����� � ������������';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = '������ ����� � ������������� ��� VirtueMart.(�� ������ � �����!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = '���� � ������ �����������������';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = '���� � ����� ���������� VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = '���� � �������';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = '���� � ����� ������� VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = '���� � ��������� �������������';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = '���� � ����� � html-���������� VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = '���� � ������������';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = '���� � ����� shop_image VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = '������� ��������';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = '��� �������� ����� ����������� �� ���������.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = '�������� ��� ������ ������';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = '�������� �� ���������, ��� ����������� ��������� �� �������.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = '�������� ��� �������';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = '��� �������� ��� ������ ���������� ��������� �� ���������.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = '�������� ����� �������?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = '�������� ����� �������. ��� ��������� ������� ������, ����� ������ �������� ����� ��������� ���������� ��� ������� ��������. ����� ������� �� ����� ���������� � ����������� ��������, ��� ��� ��� ����� ���������� ���������� �������, �������� ����� ���� � ������ ����������.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = '�������� ������ (flypage)';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = '��� �������� ����� ���������� ���������� � ������ �� ���������.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = '������ ���������';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = '�������� ������� ��������� (��-���������) ��� ����������� ������� � ���������<br />�� ������ ��������� ����� �������, ����������� ������������ ����� ��������, ������� ��������� � ����� <b>COMPONENTPATH/html/templates/</b> � ���������� � <b>browse_</b>)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = '���������� ������� � ������';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = '���� ����� ���������� ���������� ������� � ������.<br />��������, ���� �� ���������� 4, ������ ��������� ��������� 4 ������ � ������. <b>��� ���������� ������ �� �������� �������� ������ �� ���������������</b>.';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = '����������� ��� ������ ��� ��������';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = '��� ����������� ����� �������� ����� ��� ����������� ������.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = '���������� ������� �� �������� ������';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = '���������, ������� ������������ ������ ����� ��������� �� ����� �������� ����� ������.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = '���� ��������� ������ �������� �����';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = '��������� ���� �������� ����� � ������ ����������� ������.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = '���� ��������� ������ ������ �����';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = '��������� ���� ������ ����� � ������ ����������� ������.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = '������������ ���������� ������� ��� �����������';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = '������ ����� �����, ������� ����� ������������ � ���� ����� ������� �������';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = '���������� ������� ��������';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = '���������� �������� "�������� �� RusVirtueMart" ����� ��������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = '�������� ������� �������� � ����� ��������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = '����������� ������ �������� � ��������������� ������� � ���������. <strong>������������� !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	������ �������� �������� ������ 1.0';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS ��������� �����������</a> ������ ��������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS ��� �������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = '��� ��� ������� ��� UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS id ������������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'ID ������������, ������� �� �������� �� UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS ������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = '������ ��� ������� ������ � UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = '������ InterShipper. ��������, ���� �� ������ ������� ������ <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a> ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = '��������� ����� �������� ��������. ����������, ���� ���������� ����������� ����������� �����, ������� �� ����� ����������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper ������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = '��� ������ ��� ������� ������ � intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper e-mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = '��� ����� e-mail ��� ������� ������ � intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = '������� �����';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = '������������ ��� �������� ������ � ���� � ���� ������. ��� ��������, ��� ���� ���� ������ ���� ������� �� ��������� ��� �����.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = '�������� ������ ���������� ������';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = '��������, ���� �� ������ ����� ����������� ���������� \'������ ���������� ������\' � ������� �������� ���������� ������ ( 1 - 2 - 3 - 4 � ��������).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = '�������� ����� ���������� ������ ��� ������ ��������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>����������� :</strong><br/>
               1. ������ ������ ��� ��������<br />
              2. ������ �������� ��������<br />
              3. ������ ������� ������<br />
              4. ���������� ���������� ������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>������� 2:</strong><br/>
               1. ������ ������ ��� ��������<br />
              2. ������ ������� ������<br />
              3. ���������� ���������� ������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>������� 3:</strong><br/>
               1. ������ �������� ��������<br />
              2. ������ ������� ������<br />
              3. ���������� ���������� ������';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>������� 4:</strong><br/>
               1. ������ ������� ������<br />
              2. ���������� ���������� ������';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = '�������� ���������� ������';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = '�������� ��� ��������� ����������� ���������� ������. ������ � ��� ������, ���� �� ������ ��������� ����������� �����.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = '������ ������ �� ����������';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = '�������� ������ ������, ��� ������� ����� ������� ������ ���������� � ������������ � ���, ��� �� ����� ������� �����.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = '������ ������, ��� ������� ���������� ����������';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = '������ ������, ��� ������� ���������� ��������� ��� ����������.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = '���� � ������ ��� ����������';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = '���� � ������ ��� ���������� ������������. (����������� ��������� ���� � ����� \'/ \' !)<br>
        <span class="message">��� ������������ ������ �������� : ���� �� ������ ���������� ���������� �� ��������� �������� ����� ����������</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = '����. ���-�� ����������';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = '������������� ���������� ����������, ������� ����� ������� �� ���� ID ����������, (��� ������ ������)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = '�������� ��� ����������';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = '������������� �������� <strong>� ��������</strong>, � ������� ���������� �������� ��� ����������. 
  ����  �������� �������� ������������� ����� ������� ���������! ����� ��������� �������� �����, ID ���������� �����������.<br />�������� : 86400���=24�.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = '�������� IPN ������ ����� PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = '�������� ��� ����, ����� ���� ���������� ����� ����������� ���������� ����� PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal e-mail:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = '��� �������� ����� ��� ��������� ����� ����� PayPal. ����� ������������ ��� receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = '������ ������ ����� ��������� ���������� �������';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = '�������� ������ ����� ��� ���������, ���� ������ ������ ����� PayPal IPN. ���� ����������� ������� ���������� ������: 
  �������� ������, ������� �������� ����������� ���������� ����� ������ (��� ���� ���������� �������� ������ � ���, ��� ����� �������� ��� ����������).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = '������ ������ ��� ������������� ����� ���� PayPal';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = '�������� ������ ������ ��� ����������� ����� ����� PayPal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = '�������� ������ ����� PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = '����������� ��� ����, ����� ��������� ����������� ������������ ������������� ������� �������� PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate ������������:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = '���� ������� ������ ��� PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = '�������� ������ Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = '����������� ��� ������������� Authorize.net � VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = '�������� ����� ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = '�������� \'��\' ���� ����������. �������� \'���\' ��� ��������� ��������� �������� ��������.';
	var $_PHPSHOP_ADMIN_CFG_YES = '��';
	var $_PHPSHOP_ADMIN_CFG_NO = '���';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Login ID ��� Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = '��� Login ID ��� Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = '���� ���������� ��� Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = '��� ���� ���������� ��� Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = '��� �����������';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = '��� ��� ����������� �� Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = '�������� CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = '����������� ��� ������������� CyberCash � VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT - ��� ��� ID �� CyberCash ';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key - ��� ���� � CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash URL ��� ���������� �������';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash URL ��� ���������� ������� - ��� URL, ��������������� Cybercash ��� ���������� ������';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE ��� ��� ����������� ��� Cybercash';
	var $_PHPSHOP_ADVANCED_SEARCH = '�����';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = '����� �� ��� ���������';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = '����� � ���������� � ������';
	var $_PHPSHOP_SEARCH_PRODNAME = '������ � ������������ ������';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = '������ � ��������������/���������';
	var $_PHPSHOP_SEARCH_DESCRIPTION = '������ � �������� ������';
	var $_PHPSHOP_SEARCH_AND = '�';
	var $_PHPSHOP_SEARCH_NOT = '��';
	var $_PHPSHOP_SEARCH_TEXT1 = '������ ���������� ������ ��������� ��� ������� ��������� ��� ����������� ����������� ������. 
        ������ ���������� ������ ��������� ��� ������ ����� �� ���������, ��������, ������ �� ������������. 
        �� ������ ������� ���� �������� (��� �������� �� ��������� ���), � ������ �����, ������� �� �����. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' �� ������ ������ ����������� ����� ����� ���������� ������� ����� � ������ ��������� � ��� ��. 
        ��� ������ ��������� �, � ���������� ��������� �����, � ������� ������������ ��� �������� �����. 
        ��� ������ ��, � ���������� ��������� �����, � ������� ������������ ������ ����� � ����������� ������.';
	var $_PHPSHOP_ORDERBY = '����������� ��';
	var $_PHPSHOP_CUSTOMER_RATING = '������� ������';
	var $_PHPSHOP_TOTAL_VOTES = '�������';
	var $_PHPSHOP_CAST_VOTE = '����������, ������������';
	var $_PHPSHOP_RATE_BUTTON = '�������';
	var $_PHPSHOP_RATE_NOM = '�������';
	var $_PHPSHOP_REVIEWS = '������  �����������';
	var $_PHPSHOP_NO_REVIEWS = '��� ����������� ������ �� ���� ������.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = '����� ������, ��� ������� ���� ������...';
	var $_PHPSHOP_REVIEW_LOGIN = '����������, �������, ����� �������� ���� ������.';
	var $_PHPSHOP_REVIEW_ERR_RATE = '����������, ������������ �� ���� ����� ����� ��������� �������� ���� ������!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = '����������, �������� ��������� ���� � ��� ����� ������ ������. �� ������ ��������� ������� 100 ������.';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = '����������, ��������� ����� ������. �� ������ ��������� �������� 2000 ������';
	var $_PHPSHOP_WRITE_REVIEW = '�������� ���� ������ �� ���� ������!';
	var $_PHPSHOP_REVIEW_RATE = '������: ������������ �� ���� �����. ����������, �������� ������ �� 0 (�����) �� 5 (�������).';
	var $_PHPSHOP_REVIEW_COMMENT = '������ ������ �������� ���� ������ � ������....(���. 100, ����. 2000 ������) ';
	var $_PHPSHOP_REVIEW_COUNT = '������� ������: ';
	var $_PHPSHOP_REVIEW_SUBMIT = '��������� ������';
	var $_PHPSHOP_REVIEW_ALREADYDONE = '�� ��� �������� ������ ��� ����� ������. �������!';
	var $_PHPSHOP_REVIEW_THANKYOU = '������� �� ���� ������!';
	var $_PHPSHOP_COMMENT = '�����������';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = '��������/�������� ���� ��������� ����';
	var $_PHPSHOP_CREDITCARD_NAME = '�������� ��������� �����';
	var $_PHPSHOP_CREDITCARD_CODE = '��������� ����� - �������� ���';
	var $_PHPSHOP_CREDITCARD_TYPE = '��� ��������� �����';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = '������ ��������� ����';
	var $_PHPSHOP_UDATE_ADDRESS = '�������� �����';
	var $_PHPSHOP_CONTINUE_SHOPPING = '���������� �������';
	var $_PHPSHOP_THANKYOU_SUCCESS = '��� ����� ������!';
	var $_PHPSHOP_ORDER_LINK = '���� ������ ��� ����, ����� ���������� ���������� � ������.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = '������ ������ ������ No. {order_id} ��� �������.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = '����� ������:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = '��� ��������� ���������� � ������, ����������, �������� �� ���� ������(��� ���������� � � ��������� ������ ������ �������):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = '������ ������ �������: ��� ����� {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = '��������� ����������?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = '����������, ������� �������� ������ ������!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = '������ ��� ������ ��-��������� (� %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = '������������� �������� � ��������: ���� ������ �� ��������� ���� ��� ���� ������ �����������, �� ���� ��-��������� ����������� �� �%. ������������� �������� ����� ��������������� ������.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = '������ �� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = '������ ������ �� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = '��������/������������� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = '������� �������� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = '������� �������� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = '��� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = '������������� (%)';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = '����������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = '����� ������������� ��� ����������?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = '������ �������� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = '��������� ���� ������ �������� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = '����� �������� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = '��������� ���� ��������� �������� ������';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = '�� ������ ������������ ����� ������ �� ����� ��� ���������� ������!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = '���������';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = '���������';
	var $_PHPSHOP_CURRENCY_DISPLAY = '����� ����������� ������';
	var $_PHPSHOP_CURRENCY_SYMBOL = '������ ������';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = '�� ����� ������ ������������ HTML ������ ����� (�������� &nbps;...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = '���������� ��������';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = '���������� ������������ �������� ����� ������� (����� ���� ������ 0)<br><b>��������� ���������� ���� �������� ����� ������ ���������� ������</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = '���������� �����������';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = '���� ������������ ��� ���������� ����� � ������� �����';
	var $_PHPSHOP_CURRENCY_THOUSANDS = '����������� �����';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = '���� ������������ ��� ���������� �����(����� ���� ������)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = '������ �������������� ��������';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = '���������� ������, ������������ ��� ������ ������������� ��������.<br>(������ �������� ���� ������)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = '������ �������������� ��������';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = '���������� ������, ������������ ��� ������ ������������� ��������.<br>(������ �������� ���� ������)';
	var $_PHPSHOP_OTHER_LISTS = '������ ��������� �������';
	var $_PHPSHOP_MORE_IMAGES = '�������� �������������� �����������';
	var $_PHPSHOP_AVAILABLE_IMAGES = '��������� ����������� ���';
	var $_PHPSHOP_BACK_TO_DETAILS = '����� � �������� ������';
	var $_PHPSHOP_FILEMANAGER = '���������� �������';
	var $_PHPSHOP_FILEMANAGER_LIST = '���������� �������::������ �������';
	var $_PHPSHOP_FILEMANAGER_ADD = '�������� �����������/����';
	var $_PHPSHOP_FILEMANAGER_IMAGES = '�������������� �����������';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = '��� ����������?';
	var $_PHPSHOP_FILEMANAGER_FILES = '�������������� ����� (������� ������,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = '�����������?';
	var $_PHPSHOP_FILES_LIST = '�������� ������: ������ �����������/������ ���';
	var $_PHPSHOP_FILES_LIST_FILENAME = '��� �����';
	var $_PHPSHOP_FILES_LIST_FILETITLE = '�������� �����';
	var $_PHPSHOP_FILES_LIST_FILETYPE = '��� �����';
	var $_PHPSHOP_FILES_LIST_EDITFILE = '�������� ������ �����';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = '������ �����������';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = '���������� �����������';
	var $_PHPSHOP_FILES_FORM = '��������� ���� ���';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = '������� ����';
	var $_PHPSHOP_FILES_FORM_FILE = '����';
	var $_PHPSHOP_FILES_FORM_IMAGE = '�����������';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = '��������� �';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = '���� � ������������ ������� �� ���������';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = '���������� ��������� �����';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = '���� ��� ���������� (��� ������� ����������� �������!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = '������������� ��������� ����������� �����������?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = '���� �����������?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = '��������� ����� (��, ��� ����� ������ ����������)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = '�������� �����';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL ����� (�� �����������)';
	var $_PHPSHOP_FILES_PATH_ERROR = '����������, ������� ���������� ����!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = '�������� ������������ ����������� ���� ��������� !';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = '���������� ������� ����������� �����������!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = '������ ��� �������� �����/�����������';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = '���������� ������� ������ �����������.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = '������ ����������� ���� ������� �������.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = '���������� ������� ����������� ����������� (�������� ���������): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = '����������� ����������� ���� ������� �������.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = '�� ���� ������� ����.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = '���� ������� ������.';
	var $_PHPSHOP_FILES_NOT_FOUND = '��������, �� ������������� ���� �� ��� ������!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = '����������� �� �������!';
	var $_PHPSHOP_COUPON_MOD = '������';
	var $_PHPSHOP_COUPONS = '������';
	var $_PHPSHOP_COUPON_LIST = '�������� �������';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = '����� ��� ��� �����������.';
	var $_PHPSHOP_COUPON_REDEEMED = '����� �����������! ������� �������.';
	var $_PHPSHOP_COUPON_ENTER_HERE = '���� � ��� ���� ��� ������, ���������� ������� ��� ����:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = '���������';
	var $_PHPSHOP_COUPON_CODE_EXISTS = '���� ��� ��� ������ ��� ����������. ����������, ���������� �����.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = '�������� �����';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = '�������� �� ��� ������ ��� ��� ��������������. ��� ����, ����� ������� �������� ��� � ������� [�������] :';
	var $_PHPSHOP_COUPON_CODE_HEADER = '���';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = '������� ��� �����';
	var $_PHPSHOP_COUPON_TYPE = '��� ������';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = '���������� ����� ����� ������ ����� ��� �������������, ���������� ����� ����� �������������� ��� �����.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = '���������� �����';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = '���������� �����';
	var $_PHPSHOP_COUPON_VALUE_HEADER = '��������';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = '������� ���';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = '�� �������, ��� ������ ������� ���� ��� ������?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = '����������, ��������� ��� ���� �����.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = '�������� ������ ������ ���� ������.';
	var $_PHPSHOP_COUPON_NEW_HEADER = '����� �����';
	var $_PHPSHOP_COUPON_COUPON_HEADER = '��� ������';
	var $_PHPSHOP_COUPON_PERCENT = '�������';
	var $_PHPSHOP_COUPON_TOTAL = '�����';
	var $_PHPSHOP_COUPON_VALUE = '��������';
	var $_PHPSHOP_COUPON_CODE_SAVED = '��� ������ ��������.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = '��������� �����';
	var $_PHPSHOP_COUPON_DISCOUNT = '����� �� ������';
	var $_PHPSHOP_COUPON_CODE_INVALID = '��� ������ �� ������. ����������, ���������� �����.';
	var $_PHPSHOP_COUPONS_ENABLE = '�������� ������������� �������';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = '���� �� �������� ������������� �������, �� ��������� ����������� ������� ����� ������ ��� ��������� ������ ��� �������.';
	var $_PHPSHOP_FREE_SHIPPING = '���������� ��������';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = '�� ���� ����� �������� ���������!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = '����������� ���������� ��� ���������� ��������';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = '����� (������� ������!), �� ������� ������ ����������� ����������, ����� �������� ���������� ��������
                                                (��������: <strong>50</strong> �������� - ���������� ��������, ����� ���������� ������ ����� �� 
                                                50 �.� (������� ������) ��� ������.';
	var $_PHPSHOP_YOUR_STORE = '����������� �������';
	var $_PHPSHOP_CONTROL_PANEL = '������ ����������';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - ������';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = '�������� ��� ������ PDF - ������ � ��������';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = '���������� ������ ����������� � ��������� �� ������������ ��� ������ ������?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = '�����������, ���� �� ������, ����� ���������� ������ ��� ���������� � ��������� �� ������������ ��� ������ ������ (����� ����������� ������).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = '��� ���������� ������� ������';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = '��������';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = '������-��������';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = '����������';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = '��������� ����?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = '�����������, ����� �� ������ ��������� ����.';
	var $_PHPSHOP_INTERNAL_ERROR = '���������� ������ ��� ��������� ������� �';
	var $_PHPSHOP_PAYMENT_ERROR = '������� ��� ���������� �������';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = '������ ������� ������';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS �� ����� ���������� ������ �� ������ ��������.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = '���������� ����, ����� ������� �������������� ����� ��������';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS ����� ��������';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = '��� �� ������ �������� �������� � UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = '�������� � UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = '������� ��� �������� �� ���������.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = '������� ��������?';
	var $_PHPSHOP_UPS_RESIDENTIAL = '������� (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = '������������ �������� (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = '��������� ������ (RES) ��� ������������ ��������(COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = '����� �� ���������';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = '���� ������� �� ��������� ������ ��� ����� ������ ��������.';
	var $_PHPSHOP_UPS_TAX_CLASS = '����� ������';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = '����������� ��������� ����� ������ ��� ����� �� ���������.';
	var $_PHPSHOP_ERROR_CODE = '��� ������';
	var $_PHPSHOP_ERROR_DESC = '�������� ������';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = '�������� / �������� Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = '��������/��������  ������/Transaction Key';
	var $_PHPSHOP_TYPE_PASSWORD = '����������, ������� ������ ������������';
	var $_PHPSHOP_CURRENT_PASSWORD = '������� ������';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = '������� ���� ����������';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = '���� ���������� ������� �������.';
	var $_PHPSHOP_PAYMENT_CVV2 = '������/���� �������� ��� ��������� ����� (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = '�������� �������� CVV2/CVC2/CID (����- ��� ������� ������� ����� �� �������� ������� ��������� �����, �� ������� ������� ����� American Express)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = '����������, ������� ����- ���  �������- ������� �����, ������������� �� �������� ������� ��������� ����� (�� ������� ������� ����� American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = '��� ����� ������ ��� ����� ��������� ����� ��� �����������.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = '������� ��� �����';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = '���������: ����� �� ������ ������ ��� �����. <strong>���� �� ������� ��� �����, �� ������ �� ����� ��������!!! �� ������ ��������� ��� ������� ����� FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = '��� ��������� ����� ����';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = '�� ������ ��������� ���� � ������ ����������. ���� ���� ����� ����� ������� ��� �������. ������������ ���� ����� �������.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = '������� ����� ����� �����, ������� ����� ������������ ���������� �� fly-�������� ������.<br />��������.: 24�, 48 �����, 3 - 5 ����, ��� ������.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = '��� �������� �����������, ������� ����� �������� �� fly-�������� ������.<br />����������� ����������� � ���������� <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = '������ �������';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>������� ������� ������ �������:</h4>
        <pre>������,XL[+1.99],M,S[-2.99];����,�������,�������,������,������[=24.00];� ��� �����,..,..</pre>
        <h4>������������� ������� ������������� ��� �������������� �������:</h4>
        <pre>
        + == �������� ����� � ����.<br />
        - == ������� ����� �� ����.<br />
        = == ���������� ���� ������, ������ ���� �����.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = '�������������� ������ �������';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>������ ������� ������ �������������� �������:</h4>
        <pre>������������;�������������;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = '��� ������ ����� ���������� ���������: ����������� ������� CTRL � ����';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = '�������� ������� eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = '��������� ������������� eProcessingNetwork.com � VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = '�������� �����?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = '�������� \'Yes\', ���� ���� �����������. �������� \'No\' ��� ��������� ����������.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com ID ������������';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = '��� ��� ������������� ������������ eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com ���� ����������';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = '��� ��� ���� ���������� �� eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = '��� �����������';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = '��� ��� ����������� �� eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = '������������� ������';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = '�� ������ ��������� ������ ������������� ������� ����. ��� �����, �������� ���� ��� ��������� <strong>������������� �������</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = '���, ��������, ������������ ��������� ������';
	var $_PHPSHOP_IMAGE_ACTION = '�������� ��� �������������';
	var $_PHPSHOP_NONE = '���';
	var $_PHPSHOP_ORDER_HISTORY = '������� �������';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = '�����������';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = '����������� � ����� �������';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = '�������� ���� �����������?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = '���� ���������';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = '���������� ���������?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = '�������� ������ ������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = '��� ������������, ������� �� �������� ��� ����������� �� USPS.com .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = '��� ������������, ������� �� �������� ��� ����������� �� USPS.com .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = '������, ������� �� �������� ��� ����������� �� USPS.com .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = '������, ������� �� �������� ��� ����������� �� USPS.com .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS ������ ��������, � ��������� �������� ������ � ������� ��������! ��������: production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS ������ ��������, � ��������� ��������� ������ � ������� ��������! ��������: production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS ���� ��������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS ���� ��������. ��������: /ShippingAPI.dll';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS ������ �������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = '�����: �������, ������� � ����� �������. �������� ������� �� ����, ��� �� ����������� � �������� �� �������� ������. �� ��������� - �������.';
	var $_PHPSHOP_USPS_PADDING = '�������, ��� ���������� ����, ����� ��������� �����. (������� %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = '��������� ��� ��������, ���������, ����� �������� ��� ������� � �������. ������������� ����� ���� ��������� ���������� ���������� ��� � ��������� ���� ������. ��������� ���� %, �������� 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = '������� �� ���������';
	var $_PHPSHOP_USPS_HANDLING_FEE = '���� ������� �� ���������.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = '�� ������ ���������� ������ ���� �� ������������� ������� ����� USPS?  � ���������� �������, �������� 2.00 ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = '���� ������������� ������� �� USPS ��������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = '�� ������ ���������� ������ ���� �� ������������� ����������������� ������� ����� USPS?  ��� ������������� � ������� ������� �� ���������. � ���������� �������, �������� 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = '��� ������������� ����� �� �������� ������ ����� ����� ����� USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = '��� ������������� ����� �� �������� ������ ����� ����� ����� USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = '���� ������������ ������� �� 6 ����� �� 35 ������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = '���� ������� �������������� �������, �� �� ��������� ������ ���� No (���).';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS ������ �� ������ (��� ���)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS ��������-������ �� �����';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = '����������� ��������-������ USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS ��������-������ ������� �������� (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = '��������, ���� ��������, �������� ��������-������� � �������� USPS. �� ���������, ������ ���� No(���) �.�., ��������, ����� �� ������ ����� � �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS ������������ ������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = '����������� ������������ USPS ������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = '������������ ������ ��������� (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = '��������, ���� �������� ��������. �� ��������� ������ ���� No(���) �.�., ��������, ����� �� ������ ����� � �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS ������������ ������ �������� (11.25" x 8.75" x 6")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = '�������� ���� �������� �������� ������� � "����������" ��������. �� ���������, ������ ���� No(���) �.�., ��������, ����� �� ������ ����� � �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS ������������ ������ � ���������� �������� (14" x 12" x 3.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = '��������, ���� �������� �������� USPS ������������ ������� � ���������� ��������.  �� ���������, ������ ���� No(���) �.�., ��������, ����� �� ������ ����� � �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS ������ ������� (�� 14 �����)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = '�������� ���� �������� �������� USPS ������� ������� ������.  ����� ������������, ���� �������� ������ 0.88 �����.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS �������� �������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'USPS �������� ����������� �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS ����������� �������� ���������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = '��������, ���� �������� �������� ����� USPS ����������� �������� ��������� .  �� ���������, ������ ����  No (���), ���� ������ �� �� ����������� ������� � ������ � ������.  ����������� �� 15 ������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS ����� ������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = '��������, ���� �������� �������� USPS ����� �������. �� ���������, ������ ���� NO (���)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS ������������ ������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = '��������, ���� �������� �������� USPS ������������ ������. �� ���������, ������ ���� NO (���)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS ������������� ������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS ���������� ������ ��������������� ��������-�������� ����������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = '��������, ���� �������� �������� ����� ���������� ������ USPS ��������������� �������� ����������. �� ���������, ������ ���� NO (���)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS ���������� ������ �������������� �������� �������� ���������������� ����������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = '��������, ���� �������� �������� USPS . �� ��������� ������ ���� NO (���)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS ����� �������� ������ (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = '����������� USPS ����� ��������-������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS ����� ������������ ������ � ������� ��������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = '��������, ���� �������� �������� USPS ����� ������������ ������ � ������� ��������.  �� ���������, ������ ����  No(���), �.�. ����� ����� �� ������ � �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS ����� ������������ ������ ����� ���������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = '��������, ���� �������� �������� USPS ������������ ������� ����� ���������.  �� ���������, ������ ����  No(���), �.�. ����� ����� �� ������ � �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS ����� ������������ ������ - ��������� ���';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = '����������� USPS, ����� ������������ ������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS �������� ���������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = '��������, ���� �������� �������� USPS �������� ���������.  �� ���������, ������ ����  No(���), �.�. ����� ����� �� ������ � �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS Airmail Parcel Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = '����������� ������� ��������� USPS .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS ��������� ��������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = '��������, ���� �������� �������� USPS Economy Letter Post.  �� ��������� ������ ����  No(���), �.�. ����� ����� �� ������ � �������.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS ����������� ��������� ��������';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = '����������� �������� ������-������.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS �� ���� ���������� ������ ������ �� ��������.';
	var $_PHPSHOP_PARAMETERS_LBL = '���������';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = '��� ������';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = '������ ����� ������';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = '��������/�������� ��� ������';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = '������ ����� ������ ��� ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = '������ ����� ������';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = '�������� ��� ������ ���';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = '�������� ��� ������';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = '��� ������';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = '������������ ���� ������';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = '�������� ���� ������';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = '���������';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = '���������� � ���� ������';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = '������������?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = '�������� ����������� ���� ������';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Fly-�������� ���� ������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = '��������� ���� ������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = '���������� � ����������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = '��� ������ �� ������!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = '�������� ���������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = '��� �������� ����� ��������� ���� �������. ������ ���� ���������� a-zA-Z0-9 ��� ��������.<BR>��� �������: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = '������� ���������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = '�������� ���������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = '��� ���������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = '�����';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = '�����';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = '����� �����';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = '������������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = '��������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = '���� � �����';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = '����';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = '����-M�-��';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = '�����';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = '��-��-��';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = '�������������� �����';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = '���������� ������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = '���������� ��������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = '���������� ���������� �������� ��� ����������� ������?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>���� ���������� �������� �����������, �� ����� ��������������� ������ ��� ��������. ��������, ���� ����������� ���������� :</strong><BR><span class="sectionname">�����;������;�������;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = '�������� �� ���������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = '��� �������� �� ��������� ���������, ����������� ��������� ������:<ul><li>����: ����-��-��</li><li>�����: ��:��:��</li><li>���� � �����: ����-��-�� ��:��:��</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = '�������';
	var $_PHPSHOP_PARAMETER_SEARCH = '����������� ����� �� ���������������';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = '����� �� ����������';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = '�� ������ ����� ������ � ������������ � �� ������������ �����������?<BR>�� ������ ������������ ����� �������������� �����:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = '��������, ����� ��� ��������� ��� ������.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = '��������, ����� ��� ������� � ���� �������������.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = '����� �������������';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = '����� ������������';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = '�������������� �����';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = '��� ���������';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = '����� ���������';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = '�������� �����';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = '����� � ���������';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = '�������� ���������';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = '�� ��������';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = '�� �����������';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = '��������� ���������';
	var $_PHPSHOP_FEE = '�������';
	var $_PHPSHOP_PRODUCT_CLONE = '���������� �����';
	var $_PHPSHOP_CSV_SETTINGS = '���������';
	var $_PHPSHOP_CSV_DELIMITER = '�����������';
	var $_PHPSHOP_CSV_ENCLOSURE = '������ ����������';
	var $_PHPSHOP_CSV_UPLOAD_FILE = '��������� CSV ����';
	var $_PHPSHOP_CSV_SUBMIT_FILE = '��������� CSV ����';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = '��������� �� ����������';
	var $_PHPSHOP_CSV_FROM_SERVER = '��������� CSV ���� � �������';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = '�������������� CSV ����';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = '������� ���������� �� ����';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = '���������� �� ���������';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = '��������� ����������';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = '�������������� ��� ������ � CSV ����';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV ����� / ������� ���������';
	var $_PHPSHOP_CSV_SAVE_CHANGES = '��������� ���������';
	var $_PHPSHOP_CSV_FIELD_NAME = '��� ����';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = '�������� �� ���������';
	var $_PHPSHOP_CSV_FIELD_ORDERING = '���� ����������';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = '������������ ����?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = '������/�������';
	var $_PHPSHOP_CSV_NEW_FIELD = '�������� ����� ����';
	var $_PHPSHOP_CSV_DOCUMENTATION = '������������';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = '��������, �� ����������� ����� �� ������!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = '���������� ������, ������� ��� �� ������';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = '����� �������� - ������, ������� �������� ��� �� ������, - ������������. �����, ����� ������ �� ������������.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = '���������� {����} � ��������:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = '���������� {����} � �������:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = '������ ������, ������� ��� �� ������';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = '����������� � ������ �� �������';
	var $_PHPSHOP_FEATURED = '�����������';
	var $_PHPSHOP_BACK_TO_COUNTRY = '����� � �������';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = '����� � ��������� ���������';
	var $_PHPSHOP_ADD_STATE = '�������� ������';
	var $_PHPSHOP_LIST_STATES = '������ ��������';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = '����������� � ������ �� �������';
	var $_PHPSHOP_SHOW_FEATURED = '����������� ������';
	var $_PHPSHOP_SHOW_DISCOUNTED = '������ �� �������';
	var $_PHPSHOP_FILTER = '������';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = '����� �� ����';
	var $_PHPSHOP_EXPAND_TREE = '���������� ������';
	var $_PHPSHOP_COLLAPSE_TREE = '�������� ������';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = '���� �� �������';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = '����� �� ������, �� ������� �������� �� ��������� ������� �� ��������, ������ ������ �� �����.<br/>
������� ����� �������� ����� ������ � ��������� �������.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = '���� �� ��.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = '������� ������ ?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = '���� ��������, ������� ����� ���������� ��������� � ���, ��� �� ������.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = '��������� � ���, ��� ������� ������';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = '������� ��� ����� VirtueMart';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = '�� ��������� <strong>vm</strong>';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = '���������� ������ ��������� ������ ������ �������?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = '�������� ��� ��������� ����� ������ ��������� ������ ������ ������� � ���� ������������.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = '���������� ���������� �������?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = '���������� ���������� ������� � ���������, ��������: ��������� (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = '����� ������ �������� � �������';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = '�������� ������������ ��������� �������� ������������ ��� �������������?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = '���� ��������, �� ��������� ����������� ��������� �������� �����������. ��� ��������, ��� ��� ����������� �������� ������� �� ��������� ���� ����, 
	����� ���������� ������� GD2 ���������� ��� (�� ������ ��������� ������ �� �� ��������� ���������� GD2 ����� � "������� ����"->"System" -> "System Info" -> "PHP Info" -> gd. 
        �������� ����������� ��� ������������� ������� ���� ��� ���� �� ��� ������ �������. ����� ����������� ������������ � ������������ � ����� /shop_image/prduct/resized. ���� ����������� ��� �������������, �� ����� ��� ���������� ��������, � �� ������������ ������ ���.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = '������ ����������� ��� �������������';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = '<strong>������</strong> ��������������� �����������.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = '������ ����������� ��� �������������';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = '<strong>������</strong> ��������������� �����������.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = '����������, �������� ������� ��������!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = '����';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = '������ ������������� ��� ������ ���';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = '��������� ������ ������������� � ��� ������ �  ������� ���� ����, ����� �������� ��� ����, ����� ���������� ���� �������.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = '�������� "(������� XX% �������)" ����� ��� ������������?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = '����� ��������, ������������ ����� ������ ����� "(������� xx% ������)" - ����� ���� ������������ ������� ������';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = '�������� ��������� ��������?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = '����� ��������, ���� ����������� �� ���� ������ � ��������:<br/>
<strong>���� �� ������� (10 ����)</strong><br/>
����� �� ��������, ���� �������� ���: <strong>����: xx.xx ���.</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = '������ ��� ������ ���������';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = '������ ��� ������ ���������';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = '����������� ���� ������������';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = '������';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = '����������� ����������';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = '������������ ����������';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = '����������� �������������';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = '��������� ����������� �������������?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = '���������� �� ��������� ����� ������� �������?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = '������������ (�������) ����������� �������������?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = '����� �������, ������������ �� ����� ������� ���� ������. ������ ����� ������ ������������ �� ������� � ���������� ������� ������������.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = '������������ %s,

������� �� ����������� �� %s. ���� ������� ������ �������.
�� ������ ����� ��  %s ��������� ��������� ������:

������������ - %s
������ - %s
';
	var $_PEAR_LOG_CRIT = '����������� ������';
	var $_PEAR_LOG_ERR = '������';
	var $_PEAR_LOG_WARNING = '��������������';
	var $_PEAR_LOG_INFO = '����';
	var $_PEAR_LOG_TIP = '�����';
	var $_PEAR_LOG_ALERT = '��������������';
	var $_PEAR_LOG_EMERG = '�����';
	var $_PEAR_LOG_NOTICE = '�����������';
	var $_PEAR_LOG_DEBUG = '�������';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = '�������� ������ PayFlow?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = '�������� ��� ������������� ��������  PayFlow Pro.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = '�������� ����� ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = '�������� \'��\' ���� ���� ������������. �������� \'���\' ��� ��������� ��������� ����������.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = '������ ID ��������';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'ID �������� ��� ����������� �� PayFlow Pro ';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro ID ������������';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = '��� ������������� ������������ �������� ��� �� PayFlow Pro';
	var $_VM_TAXDETAILS_LABEL = '����� ����� ��������';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = '���������� ������� �� ���������';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = '��������� �� ����� ����� ������ ����� ������������� �� ��������� ';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = '����������� ���� "����������"';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = '�������� ����, ��� ������� ����� ��������� ����������. ���� �� ������ �� �������� �� ����� ��� ���������� �������� �� �����.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = '���������� �������� ���������� � "�������� ��������" �� �������� �������������?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = '� ����������� ����������� ����� ������ ������� �� ���������� ��������� ������������� ����� �������� � �������� �������� ������ � ������ �������. ��� ���, � ����������� ������� ��� ����� ����� ���� ��������.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = '�������� ���������� (�������� ������).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = '���� ����� ������� ������������� ����� ����������� � ����� �������� �������� ������ � ������ �������. �� ����� ������� �� ��������� �������� ��������, ��� ������� "���������� �����"';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = '������ ������ �������� �������� (������ �� ��������).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = '����������, ��������� ����� �������� � ������� ����� �������� �������� ������ � ������ �������.
����� �� ������ ������� �� �����.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>�������� ��������</h5>

�� ������ �������� ���� ����� �� ������� 2-� ������ ����� ����, ��� �� ��� ��������.
�� ������ ���������� ����� (���������� ������) �� ����������� ������, �� �� ������ 2-� ������ ����� ����, ��� ��� ���� ���������� � ���. 
������ ������ ���� ���������� � �� �������������� ��������.
��� ������� ���������� �� ������ ������� � �������� ������, ��. <a href="%s" onclick="%s" target="_blank">�������� ��������</a>.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = '������ ��';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = '����� ��� �������� ������ � ������� �������� ��� ������. ����������, ��������� ���, ���� ��������� �� ����� �����������';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = '���� ��� ���������� ������ ������ %s �� �������� ��� ������. ����������, ���������! ������� �������� ����� ��������� ������������ %s ������ ����� ����.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = '��� ������� �� ��������� cookies. ���� �� ������ �������� ������ � ���� ������� � ������ ��, �� ��� ���������� �������� cookies.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = '���������� ������ ������';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = '������������ �������� ��-���������';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = '�������� ������������ ������';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = '�������� ��������� �������';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = '��������� ��������';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = '��������� ����';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV ��������� ��������:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = '����������';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = '����';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV ���� ������������';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = '��������';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = '������';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = '��������';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = '��������';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = '������������';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = '��������� ���� �������� ��� ������������ ��� �������/��������.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = '����������� ���������� �����, ����������� ��� ���������� ������: product_sku, product_name � category_path. ���� product_sku ������ ���� ���������� ��� ������� ������, ���� product_name � category_path ����� ���� �� �����������.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = '������� ������.<br />������:<ul><li>�����</li><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = '������������ ������.<br />������:<ul><li>�����. HTML ��� �� ������������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = '���� product_delete - ��� ����������� ����. ���� ������������, ����� ���������� ���������� ������� ����� �� ���� ��� ���.<br />�������������:<ol><li>�������� ���� (�������) "product_delete" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� �������� Y, ������ ��� �������, ������� �� ������ �������. ���� � ������ ����� ������ �������� (�� Y), �� ����� ������ �� �����.</li></ol><br /.>������:<ul><li>Y: ��, ���������� ������� �����</li><li>N: ���, ����� ������� �� ����.</li><li>�����: ���� �� �������� ���� ������, �� ����� �� ����� ������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = '������ �������� ������.<br />������:<ul><li>�����. ����� ������������ HTML ���.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = '������� �������� ������.<br />������:<ul><li>�����. HTML ��� �� ������������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = '������ ������ - ����������� ��� �����.<br />������:<ul><li>Y: ��, ����� �����������</li><li>N: ���, ����� �����</li><li>�����: ���� �� �������� ���� ������, �� ����� ����� �����������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = '������ ������.<br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = '������ ������.<br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = '����, � ������� ����� �������� � ��������. ��� �������������� ����������, ������ ���� ������ ����  ����/�����/��� ��� ����-�����-���. �� ��������, ����������� �� ���� Windows, ���� ����� ���� �� 19/01/2038.<br />�������������:<ol><li>�������� ���� (�������) "product_available_date" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����, ������� � ������� ����� �������� � ��������. ���� ���� �������� ����� ������ ����������, �� ��� ����� ���������������.</li></ol><br />������:<ul><li>����: ����/�����/��� ��� ����-�����-���</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = '���������� ������ �� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_in_stock" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ���������� ���������� ������. ���� ���� �������� ����� ������ ����������, �� ����� ������������ �������� �� ���������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = '��������� �������� ������ ������. �����������, ����� ������� ��������� ��������������, ������������ ��������. ��������, ����� ����� ������������ � ������ �������� ��������� � ������ ��������. �� ������ ������� ������� � ����� ��������� �������: ������,XL[+1.99],M,S[-2.99];����,�������,�������,������,����������[=24.00];���������,..,..<br /><br />�� ������ �������� ��������� ������ � ������ ��������� �������������:<ul><li>+: �������� ����� � ����������� ����.</li><li>-: ������� ����� �� ����������� ����.</li><li>=: ���������� ���� ������ � ������ ������������, ������ ���������� ��������.</li></ul><br />�������������:<ol><li>�������� ���� (�������) "attribute" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ���������� � ��������� ��������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = '������������, ����� ����� ����� ����� ������ ����������� �� ������. �������� ���� ����� ���� ��� ���������, ��� � ��������� ������������ �����. ����������� ������ ���� �������� � ������� "/components/com_virtuemart/shop_image/availability/".<br />�������������:<ol><li>�������� ���� (�������) "product_availability" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = '�������� ����� � ������������ ������, ������� ���������� � ����� "/components/com_virtuemart/shop_image/product/". ��������� ����� ����� ���� ����� ������ �� ����.<br />��������: ���� � ��� �������� ����� "������������� ������� ����-�����������", ��� ���������� ����� ��������� ���� "product_thumb_image". VirtueMart ������������� ������� ����-�����������.<br/><br />�������������:<ol><li>�������� ���� (�������) "product_full_image" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����:<ul><li>HTML ��� �� ������������.</li><li>������ (URL) �����������.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = '������������ ����� � ����-������������ ������, ������� ��������� � ����� "/components/com_virtuemart/shop_image/product/". ��������� ����� ����� ���� ����� ������ �� ����.<br />��������: ���� � ��� �������� ����� "������������� ������� ����-�����������", ��� ���� ��� ����� ������ ���� ���������. VirtueMart �������� ������ �����������, ���������� �����.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_thumb_image" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����:<ul><li>HTML ��� �� ������������.</li><li>������ (URL) �����������.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = '�������������� �������� ������ - � ������ ������ ����� ��������� ���� �� �������� �������� ������, ��� ����� ������� �������� ���������� �������� ������, � ����� ����, ��� ���������� ����� �������� ���� �����. ������ ������������, ���� �� �������� ������/����� � �������������� ������ ��������� ������ ������� �� ������/�����. �������������� ������� �������� ����������� ���: ������������1;������������2;...<br />�������������:<ol><li>�������� ���� (�������) "custom_attribute" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br /.>������:<ul><li>�����. HTML ��� �� ������������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = '���������� ���������� ������ � ��������.<br />�������������:<ol><li>�������� ���� (�������) "product_packaging" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ���������� ������ � ��������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = '���������� ���������� ������ � �������.<br />�������������:<ol><li>�������� ���� (�������) "product_box" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ���������� ������ � �������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = '������� ������������� ������ ������ ��� ������� ������ ��� ������� ������. ��������� �������� ����������� ��� �������������� ������, ������� ���������� ��� �������� �� ����������. ��� ���� �����, ���� �� �� ��������� ������ � "������ ������ �� ������". ���� ������ ��� ����������, �� ������ �� ����� ��������� � ����, � � ������ ����� ������ ��������� ������������ ������. ��� �����������, ���������� �� ��� ������ ��� ���, ������ ������ ����������� ��������� ��������:<ol><li>�������� ������ - ������������� ������ ��� �������</li><li>���� ������ ��������</li><li>���� ���������</li></ol>��� ������� ��� ����, ����� �� ��������� ���� ��������� ����������� ��������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_discount" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>�������������: �������� ���� (�������) "product_discount_date_start" � �������� "������������" (���� CSV).  �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>�������������: �������� ���� (�������) "product_discount_date_end" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ����(��) �������(��), �������� ��������������� ��������.</li></ol><br /.>������:<ul><li>���� "product_discount"</li><ul><li>�����<br />�������� 10</li><li>��� �������� ��������, �� ������ ������� ������ %<br />�������� 10%</li></ul><li>���� "product_discount_date_start"</li><ul><li>����: ����/�����/��� ��� ����-�����-���<br />���� � ����� ����� ���� 1 ��� 2 ����������.<br />��� ����� ���� 2 ��� 4 ���������.</li></ul><li>���� "product_discount_date_end"</li><ul><li>����: ����/�����/��� ��� ����-�����-���<br />���� � ����� ����� ���� 1 ��� 2 ����������.<br />��� ����� ���� 2 ��� 4 ���������.</li></ul></ul>';
	var $_ITEM_PREVIOUS = '< ����������';
	var $_ITEM_NEXT = '��������� >';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = '����������';
	var $_CMN_CANCEL = '��������';
	var $_BUTTON_SEND_REG = '�����������';
	var $_CONTACT_FORM_NC = '����������, ���������, ��� ����� ��������� ��������� � ���������.';
	var $_CMN_REQUIRED = '�����������';
	var $_CMN_NEW = '�����';
	var $_CMN_SAVE = '���������';
	var $_CMN_NEW_ITEM_LAST = '����� �������� �� ��������� ��������� �� ��������� �����. ���������� ����� ���� ��������, ����� ������� ���������.';
	var $_CMN_OPTIONAL = '�������������';
	var $_E_APPLY = '���������';
	var $_E_IMAGES = '�����������';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = '�������� ���������';
	var $_E_REMOVE = '�������';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = '��������';
	var $_PN_OF = '��';
	var $_PN_START = '� ������';
	var $_PN_PREVIOUS = '����������';
	var $_PN_NEXT = '���������';
	var $_PN_END = '� �����';
	var $_PN_DISPLAY_NR = '�������� #';
	var $_PN_RESULTS = '����������';
	var $_CMN_PRINT = '������ ��� ������';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = '�����';
	var $_USERNAME = '��� ������������';
	var $_PASSWORD = '������';
	var $_BUTTON_LOGIN = '�����';
	var $_REGISTER_UNAME = '��� ������������';
	var $_REGISTER_EMAIL = 'E-mail';
	var $_REGWARN_NAME = '����������, ������� ���� ���.';
	var $_REGWARN_UNAME = '����������, ������� ��� ������������.';
	var $_REGWARN_MAIL = '����������, ������� ���������� e-mail.';
	var $_SEND_SUB = '������� ������ %s, �� ����� %s';
	var $_ASEND_MSG = '������������, %s,
	
	����� ������������ ����������������� �� %s.
	���� e-mail �������� ��������� ���������� � ����� ������������:
	
	��������� ��� - %s
	e-mail - %s
	��� ������������ - %s
	
	����������, �� ��������� �� ������ ���������, ��� ��� ��� ������������ ������������� � ������ ������ ��� ����������.';
	var $_REG_COMPLETE = '<div class="componentheading">����������� ���������!</div><br /> ������ �� ������ �����.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">����������� ���������!</div><br /> ������ ��� �����, �� ������ ������������ ���� ������� ������, ������� �� ������, ��������� � ������, ��������� �� ��� e-mail.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = '��������';
	var $_NOT_AUTH = '� ��� ������������ ����, ����� ������������� ����������� ������.';
	var $_DO_LOGIN = '�� ������ �����.';
	var $_VALID_AZ09 = '����������, ������� ��������� %s.  ���������� ������� ��� ��������, ����� %d �������� � ������ 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = '������������';
	var $_CMN_UNPUBLISHED = '������';
	var $_MORE = '���������...';
	var $_EMPTY_CATEGORY = '� ������ ��������� ��� �������.';
	var $_BUTTON_LOGOUT = '�����';
	var $_NO_ACCOUNT = '��� ��� ������� ������?';
	var $_CREATE_ACCOUNT = '�����������';
	var $_REGWARN_PASS = '����������, ������� ���������� ������. ���������� ������� ��� ��������, ����� 6 �������� � ������ ������� 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = '����������, ����������� ��� ������.';
	var $_REGWARN_VPASS2 = '������ � ������������� ������ �� ���������. ����������, ���������� �����.';
	var $_USEND_MSG_ACTIVATE = '%s - ����� ����������!

������� �� ����������� �� %s. ���� ������� ������ ������� � ������ ���� ������������, ������ ��� �� ������� ������������ ��.
����� ������������ ������� ������, �������� �� ��������� ������ ��� ���������� � �������� �� � �������:
%s

����� ��������� �� ������ ����� �� ���� %s, ��������� ��������� ��� ������������ � ������:

��� ������������ - %s
������ - %s



	����������, �� ��������� �� ������ ���������, ��� ��� ��� ������������ ������������� � ������ ������ ��� ����������.';
	var $_USEND_MSG = '����� ���������� %s,

������� �� ����������� �� %s.

�� ������ ����� �� ���� %s, ��������� ��� ������������ � ������, ��������� ��� �����������.



	����������, �� ��������� �� ������ ���������, ��� ��� ��� ������������ ������������� � ������ ������ ��� ����������.';
	var $_PROMPT_PASSWORD = '������ ������?';
	var $_HI = '����� ����������';
	var $_NEW_USER_MESSAGE_SUBJECT = '���������� � ����� ������������';
	var $_NEW_USER_MESSAGE = '������������, %s,


�� ���� ��������� ���������������, ��� ������������ �� ����� %s.

���� e-mail �������� ����������� ���������� ��� ����� �� ���� %s

��� ������������ - %s
������ - %s


	����������, �� ��������� �� ������ ���������, ��� ��� ��� ������������ ������������� � ������ ������ ��� ����������.';
	var $_REMEMBER_ME = '���������';
	var $_REGISTER_TITLE = '�����������';
	var $_JAN = '������';
	var $_FEB = '�������';
	var $_MAR = '����';
	var $_APR = '������';
	var $_MAY = '���';
	var $_JUN = '����';
	var $_JUL = '����';
	var $_AUG = '������';
	var $_SEP = '��������';
	var $_OCT = '�������';
	var $_NOV = '������';
	var $_DEC = '�������';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = '� CSV';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = '��������� ������ ����';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = '������ ���������� ���';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = '������������ ��������� ������� ��� ������������ ��� ����������';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = '�������� ���������� ��� �������';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = '�������� ������ ������ ������������ �����';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = '����������� ��������';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = '�������� ���� ������';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = '�������� ���������� ���� ������';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = '�������� ������� ������������� ������ ����� ������������';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = '�������� ��������� ���������� � ���� ������';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = '�������� ����';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = '���������� ��������';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = '�������� ��������';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">������� �������� ����� CSV</span>
										<ol>
										<li>�������� ������ ������� � ������� CSV � ������� ������� ����� ������ ��� �� ����� ����������.
										<br />�� ����������� ������������ ��� ��������� ������ ������ ~ (������), � ��� ���������� ����� ������ ^ (���� �������).
										<br /><span style="font-weight: bold;">������ ����� CSV: (����� �� ��������� ����������)</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~
~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~
~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>
										<li>���������� ���� � �������� "������������" � ����� �� �������, ��� �� ������� ���� � ����� CSV. ���� ������ ��������� ���������, � �������� "������������" � ����� CSV.
										<br /��������: product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">����������� ���������� �����, ����������� ��� ���������� ������:</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> ������ ���� � ���������, � ������� ������ ���������� �����, 
										<br />
										<div class="quote">���������/������������_1/������������_2</div>
										<br />
										���� ���������� ���������� ����� � ��������� ���������, �� ������ ������� ��, �������� ��������									<span style="font-weight: bold;">|</span>
										<div class="quote">��������� /������������_1/������������_2|���������_2/������������_22|���������_3/������������_33</div>
										</li>
										<li>�������� ��� ����������� �� �������� "������/�������".</li>
										<li>���������� ��������� �������� �� �������� "������/�������".</li>
										<li>��������, ������ �� ��������� ���� � ���������� ���������� (��������� CSV-����) ��� � ������� (��������� CSV-���� � �������).</li>
										<li>������������ ������ � �������.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">���� ������</span><br /><br />
													����� �������� ���� ������, ��� ���������� 4 CSV �����. ������ ������������ ����� ���� ������.
													<ul>
													<li><span style="font-weight: bold;">��� ������</span><br />
													���� CSV ���� �������� �������� ���� ������ � ������ ��������� ��������� �������:
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>�����</td><td>�������� �����</td><td>Y</td><td> </td><td> </td></tr>
													<tr><td>������</td><td>�������� �������</td><td>Y</td><td> </td><td> </td></tr>
													<tr><td>�����������</td><td>��� �����������</td><td>Y</td><td> </td><td> </td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">��������� ���� ������</span><br />
													���� CSV ���� �������� ��������� ��� ������� ���� ������ � ������ ��������� ��������� �������:
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>�����������</td><td>���</td><td>���</td><td>��� �����������</td><td>1</td><td>I</td><td> </td><td>N</td><td> </td><td> </td></tr>
													<tr><td>�����������</td><td>���� ��������</td><td>���� ��������</td><td>���� �������� �������</td><td>2</td><td>D</td><td> </td><td>N</td><td> </td><td> </td></tr>
													<tr><td>������</td><td>�����������������</td><td>�����������������</td><td>����������������� �������</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>������</td></tr>
													</table>
													</div>
													<br />
													��������� ����� ������ ����� ���� ���������, � ������:
													<ul>
													<li>I: �����</li>
													<li>T: �����</li>
													<li>S: �������� �����</li>
													<li>F: ����� � ��������� �������</li>
													<li>C: ����������</li>
													<li>D: ���� � �����</li>
													<li>M: �����</li>
													<li>V: ������������� ��������</li>
													<li>B: ������ ������</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">������� �� ������ ��� ������</span><br />
													���� CSV ���� �������� ������ ��� ������� ��������� ���� ������ � ������ ��������� ��������� �������:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>�����������</td><td>��� ������</td><td>1975</td></tr>
													<tr><td>5678</td><td>�����������</td><td>���-������</td><td>1980</td></tr>
													</table><br />
													�� ������ ��� ������ �� ������ ����� ��������� CSV. ��� ����������, ��� ��� ��� ������� CSV ����� ���������� ������� ����� ��������� ��-�� ������� ������ ����������.
													</li><br />
													<li><span style="font-weight: bold;">����� ����� ����� ������ � ��������� ������</span><br />
													���� CSV ���� �������� ����� ����� ����� ������ � ��������� ������ � ������ ��������� ��������� �������:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td></tr>
													<tr><td>1234</td><td>�����������</td></tr>
													<tr><td>5678</td><td>�����������</td></tr>
													</table>
													</li>
													</ul><br />
													�������������:<br />
													<ol>
													<li>��������� CSV ���� � ������ ������</li>
													<li>��������� CSV ���� � ����������� ���� ������</li>
													<li>��������� CSV ���� � ��������� ����������� � ���� ������</li>
													<li>��������� CSV ���� � �������� �������������� ������ ����� ������������</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">�������� ����</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">������������ � �������������!!! �������������� ���������� !!!</span><br /><br />
													 ������� ������� ���� ������ ��� ���������� �� ��������� ������, ���� ������ ��������:
													 <ul>
													 <li>products</li>
													 <li>product_price</li>
													 <li>product_mf_xref</li>
													 <li>product_attribute</li>
													 <li>category</li>
													 <li>category_xref</li>
													 <li>product_attribute_sku</li>
													 <li>product_category_xref</li>
													 <li>product_discount</li>
													 <li>product_type</li>
													 <li>product_type_parameter</li>
													 <li>product_product_type_xref</li>
													 </ul>
													 ����� ����� ������ ������ ������������� �� �������:
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 ��������� ������� ����� ��������� �������:
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													 ��� x ��������� �� ����� �������. ���� ����� ��������� � ���� ������, ������� ���� � ��������. ��������� ������� ��������� ���������, �� ��� ������� ����� �������. �������� ����� ����� ������ ������� ��� ������� ������.<br /><br />
													 �������������:
													 <ol>
													 <li>�������� "�������� ����" �� ������������ ���� � ���������� ��������</li>
													 <li>�������� "�������� ���������� ��� �������", ���� ��� ����� �������������� ����������</li>
													 <li>�������� �� "��������� CSV-����" ��� "��������� CSV-���� � �������". ������� ��� ����� �������������.</li>
													 <li>������� �������� ��� �����������, ��� �� ������������� ������ �������� ����. ������� �� "Ok", ���� �� ������������� ������ �������� ����, � ��������� ������ ������� "������"</li>
													 <li>���� ������ ����� ������� ��� �� ��������� � ��������� ����, � ����������� �� ������ ������ �� ���������� ������.</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">������ ���������� ���</span><br /><br />
														    �������������:
														    <ol>
														    <li>�������� CSV ����, ������� �������� ��������� ����:
														    	<ul>
															<li>product_sku</li>
															<li>product_price</li>
															<li>product_currency</li>
															<li>price_quantity_start</li>
															<li>price_quantity_end</li>
															<li>price_delete</li>
															</ul>
														    ������������ � ����������� �� �������� "��������� ����", ����� ��������, ����� ���������� ����� ��������� ������ ����. ���� �� ������ ������������ ��������� ������� ��� ������������ ��� ����������, �� ��� ���������� ��������� ������ ������ ����� ���������������� ���������� �����.
														    </li>
														    <li>� ����� ������ ���������� ����, ��� ���������� � ������ ������ �� �������� "������������" ���, ���� �� �������� �������� ����� � CSV ����, �������� "������������ ��������� ������� ��� ������������ ��� ����������" � ������� "��������� ��������" �� �������� "������/�������".
														    </li>
														    <li>�������� "������ ���������� ���" � ������� "��������� ��������"</li>
														    <li>�������������, �� ������ ������� "�������� ������ ������ ������������ ����� " �/��� "�������� ���������� ��� �������"</li>
														    <li>�������� ����, ������� ������� ��������� � ���������� ���������� ��� �������</li>
														    <li>�������� �� "��������� CSV-����" ��� "��������� CSV-���� � �������", � ����������� �� ����, ������ �� ���������� ����</li>
														    <li>���� � �������� ����� ���������</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">�������� ����</span><br />
														    ��� ������������� ����� "������ ���������� ���", �� ������ ����� ������� ����. ���� ���������, ����� �������� ��������� ����� � CSV ����� ��������� � ������� � ����, � � ��������������� ���� <strong>price_delete</strong> ����� �������� <strong>Y</strong>:
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = '���� ������, ��� ������� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_price" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = '����� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_length" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = '������� ��������� �����, ������ � ������ ������. ��� ����� ���� ����������, ���������� � �.�.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_lwh_uom" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = '��� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_weight" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = '������� ��������� ����. ��� ����� ���� ��., ��. �  �.�.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_weight_uom" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = '�������� ������ - ��� ����� ������ � ������, ������� ������������ ��� ����������� �������� �����.<br />�������������:<ol><li>�������� ���� (�������) "attributes" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������.<br />�������� ������ ���� ��������� �������� (|). �������� ���_��������_1::�������_����������_1|���_��������_2::�������_����������_2</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = '�������� ������� ������ �������� ���������� ��� �������� �������, ������� ������� � ��������������� ��������� ������������� ������. ��������, ���� "�����" ����� ������������ ��������� 800 ��. � 1000 ��., ��, ��������������, �������� ������ "�����" ����� 800 ��. � 1000 ��., ��������� �������� ����� ������ "����� 800 ��." � "����� 1000 ��.", ������� ����� �������������� ������� � ������������ ������� "�����".<br />�������������:<ol><li>�������� ���� (�������) "attributes_values" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������.<br />�������� ������ ���� ��������� �������� (|). ��������: ��������_��������_1::��������_��������_1|��������_��������_2::��������_��������_2</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = '���� ������ �������� ������. �������������� ���������� �� ������ ���������� � �������� ���� "product_discount".<br /><br />�������������:<ol><li>�������� ���� (�������) "product_discount_date_start" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>product_discount_date_start</li><ul><li>����: ����/�����/��� ��� ����-�����-���<br />���� � ����� ����� ���� 1 ��� 2 ����������.<br />��� ����� ���� 2 ��� 4 ���������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = '���� ��������� �������� ������. �������������� ���������� �� ������ ���������� � �������� ���� "product_discount".<br /><br />�������������:<ol><li>�������� ���� (�������) "product_discount_date_end" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>product_discount_date_end</li><ul><li>����: ����/�����/��� ��� ����-�����-���<br />���� � ����� ����� ���� 1 ��� 2 ����������.<br />��� ����� ���� 2 ��� 4 ���������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">���������� ������ ������</span><br />���� � ����� CSV ����� ���� ������ � ����������� �������, �������� ����� "���������� ������ ������", ����� ���������� ��� ������. ��� �������� ������������� ���������� ���������� � ���� ���� ������..</li><li><span style="font-weight: bold;">�������� ������������ ������</span><br />����� �� ���������� ����� ����� � ���� ������, � �� ������, ����� ���� �������� �����-���� ��� ������������ ���������� � ������ � ���� ������, ��� ���������� ����� ������ � ����� "�������� ������������ ������". �� ��������� �������� ���������� ���������� � ���� ������.</li><li><span style="font-weight: bold;">������������ �������� ��-���������</span><br />�� �������� "������������", �� ������ ������� �������� �� ���������, ������� ����� ��������������, ���� �� ���������� ��� ���� ������ ��� �������������� CSV �����. ���� ����� "������������ �������� ��-���������" ��������, �� ���� ���� � CSV ����� ������, �� ��� ������ �� ����� ��������������� � ���� ������.</li><li><span style="font-weight: bold;">��������� ������ ����</span><br />�������� "��������� ������ ����" � ���� "��������� ��������" �� �������� "������/�������", ���� �� ������ �������� ������ ���� ������. � ���� ������, CSV ���� ������ ��������� ������ ��� ����:<ol><li>product_sku</span></li><li>product_price</li></ol></li>����������, �����, ��� ���������, ��������� �� �������� "������������" ����� ��������������.<li><span style="font-weight: bold;">������������ ��������� ������� ��� ������������ ��� ����������</span><br />�� ������ ������������ ����� "������������ ��������� ������� ��� ������������ ��� ����������" � ��� ������, ���� � ����� CSV ����� ���� ������ � ����������� �������, � �� ������ ������������ ��� ��������� ��� ������� ������������ ������������ �����. ���������, ������������ � CSV �����, ������ ��������� ��������� � ����, ��� ������� �� �������� "��������� ����". ��� ������������� ������ �����, ������������ CSV ����� � ���� �� �����������. ����������, �����, ��� ��������� � �������� �� ���������, ��������� �� �������� "������������" ����� ��������������, ��� ����������� ���������� ������ ���� � CSV �����.</li><li><span style="font-weight: bold;">�������� ������ ������ ������������ �����</span><br />�������� ���� ������ ����� ������������ �����. �����, �� ������ ���������� �������� ����� � ���� ��� ��������.</li><li><span style="font-weight: bold;">�������� ���������� ��� �������</span><br />� ������, ���� � ��� ��������� ��� ������� ���������� � ���� ������, ����������� ����� "�������� ���������� ��� �������", ����� �������, ��� ���������� ��� ������� ����������. � ����� �������� �������, ����� ����������� ����� �� ����� ������ � ���������, ���������� ��� ������� ����������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = '������������ ������������� ������. ������������ � ���������� � ID �������������. ���� ID ������������� �� �������, �� ������ ����������� ������� ������ ������������ �������������. ����� ������������� ����� ����������� � ��������������� ID. ������� ����������/���������� �������������� ���������� ��������� �������:<ol><li>������������ ������������� ����������, ID ���������� --> ID ����� �������� �� �����, ���� � ���� ����������, �� ���������� � CSV �����</li><li>������������ ������������� ����������, ID �� ���������� --> ����� ������ ����� ������������� � ID</li><li>������������ ������������� �� ����������, ID ���������� --> ����� ������������ ������������� ����� ��������� � ����� ID</li><li>������������ ������������� �� ����������, ID �� ���������� --> ������ �� ������</li></ol>�������������:<ol><li>�������� ���� (�������) "manufacturer_name" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'ID ������������� ������, ������ ���� ����������. ������������ � ���������� � ������������� �������������. ���� ������������� ������������� �� �������, �� ����� ���������/��������� ������ ������ �� �������������. ������� ����������/���������� �������������� ���������� ��������� �������:<ol><li>������������ ������������� ����������, ID ���������� --> ID ����� �������� �� �����, ���� � ���� ����������, �� ���������� � CSV �����</li><li>������������ ������������� ����������, ID �� ���������� --> ����� ������ ����� ������������� � ID</li><li>������������ ������������� �� ����������, ID ���������� --> ����� ������������ ������������� ����� ��������� � ����� ID</li><li>������������ ������������� �� ����������, ID �� ���������� --> ������ �� ������</li></ol>�������������:<ol><li>�������� ���� (�������) "manufacturer_id" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = '������ �� ����������� ��� web-�������� ������. ���� ������ �� �����������, �� ��� ����� �������� �� �������� � ��������� ��������� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_url" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = '���������� ������, ������� ���� �������. �������� �� ����� ���� ������������, ��������, ��� ����������� �������� ����������� �������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_sales" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = '�� ������ �������, ��� �� ������������ ������ �����. ������������, ��������, � ������� ������������� ������ (���� � ��� ����� ��������������� ������).<br />�������������:<ol><li>�������� ���� (�������) "product_special" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, ������ �������, ������� �� ������ �������������, ��������� Y.</li></ol><br />������:<ul><li>Y: ��, ������������� �����</li><li>N: ���, �� ������������� �����</li><li>�����: ���� �� �������� ���� ������, �� ����� �� ����� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = '������� ������������ ������. ��������: �����, �������, �������� � �.�.<br />�������������:<ol><li>�������� ���� (�������) "product_unit" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = '������ ��������������� � �������� �������� ���� ���������. ���� � ��������� ����������, � ����� ��������� ���������� �����. ��� ��������� ������ ��� �������� �������, �� �� ��� ��������, �������� ������ ������������ ������������ ������������ �������, � �� ������������ ���������. ��� �������� ������� ��� ���� ������ ���� ������. ��� �������� ������� ���� "category_path" ������ ���� ������, ��� ��� � ��� ��� �������� �������.<br /><br />�������������:<ol><li>�������� ���� (�������) "category_path" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ���� � ���������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������<br />���� � ��������� ������ ���� �������� �������� (/). ��������: ������/������/���������� ������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = '���� product_parent_sku ���������� ��� ����������� ��������� ������ ��� �������� �������. �������� ��������: ���� "category_path" ������ ���� ������, � ��������� ������ ����� ����� ��������������� ��� �������� �����.<br />�������������:<ol><li>�������� ���� (�������) "product_parent_sku" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� �������� product_parent_sku ������������� ������.</li></ol><br />������:<ul><li>�����</li><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'ID ��������� ������, ������� �� ������ ��������� � ������<br />�������������:<ol><li>�������� ���� (�������) "product_tax_id" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� product_tax_id, ������������ ������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = '�� ������ ������������ ��������� ������ ��� �������.<br />�������������:<ol><li>�������� ���� (�������) "product_currency" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����� ������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������<br />��������: ������ ���, ����, ���.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = '��� ������������� ��������, ����������� ��� ����������� ����� ������ ������. �������� ���� ������, ���� � ��� ��� �������������� php-������ ��� ���.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_browsepage" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����:<ul><li>HTML ��� �� ������������.</li><li>������ (URL) �����������.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = '�������� ���� ������ ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_description" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. ����� ������������ HTML ���</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = '��� ������������� ��������, ����������� ��� ����������� ����� ������ ������. �������� ���� ������, ���� � ��� ��� �������������� php-������ ��� ���.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_flypage" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����:<ul><li>HTML ��� �� ������������.</li><li>������ (URL) �����������.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = '�������� ���� ������. ��� �������� ������ ���� ���������� � �� ��������� �������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_name" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = '�������� �� ��������� ��� ��������� ���� ������, ����� ��� �������� �� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_default" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = '�������� ��������� ���� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_description" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. ����� ������������ HTML ���</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = '��������� ��� ��������� ���� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_label" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = '����������� ������� ������ ���������� ���� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_list_order" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = '���������� "Y" ��� ���� ����� ���� �������� �������� �� ��������� ��������� �������� ���������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_list_multiselect" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� �������� Y ��� N.</li></ol><br />������:<ul><li>Y: ��, ���� ����������� ������ �� ���������� ���������</li><li>N: ���, ��� ����������� ������ �� ���������� ���������</li><li>�����: ���� �� �������� ���� ������, �� �� ����� ����������� ������ �� ���������� ���������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = '������������ ��������� ���� ������. ��� ������������ ������ ���� ���������� � �� ��������� �������, ��� ��� ��� ����� ��������� ������� ������� ���������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_name" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = '������������� ��� ���������, ������� ����� �����������. �� ������ ������������ ��������� ��������� ����� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_type" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����:<ul>
													<li>I: �����</li>
													<li>T: �����</li>
													<li>S: �������� �����</li>
													<li>F: ����� � ��������� �������</li>
													<li>C: ����������</li>
													<li>D: ���� � �����</li>
													<li>M: �����</li>
													<li>V: ������������� ��������</li>
													<li>B: ������ ������</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = '������� � ������� ��������� �������� ���� ������.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_unit" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>�����. HTML ��� �� ������������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = '��� �������� ��������� ���� ������, ��� ������ ������������� ����������� (�������), �������������� � ���� product_type_parameter_type.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_parameter_values" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>������� �� ���� ���������� ������������� � ���� product_type_parameter_type. ��� �������� ������ ���� ��������� �������� (;).</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = '������ ���� ������ - ��� ����� ����������� ��� �����.<br /><br />�������������:<ol><li>�������� ���� (�������) "product_type_publish" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />������:<ul><li>Y: ��, ��� ����� �����������</li><li>N: ���, ��� ����� �����</li><li>�����: ���� �� �������� ���� ������, �� ��� ����� ����� �����������.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = '���� price_delete - ��� ����������� ����. ���� ������������, ����� ����������, ���������� ������� ���� ������ �� ���� ��� ���. ����� ������������ ���� ��� ������������� ����� "������ ���������� ���, � ������� "��������� ��������" �� �������� "������/�������". ���� ���������, ����� �������� ��������� ����� � CSV ����� ��������� � ������� � ����:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />�������������:<ol><li>�������� ���� (�������) "price_delete" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� �������� Y, ������ ��� �������, � ������� �� ������ ������� ����. ���� � ������ ����� ������ �������� (�� Y), �� ����� ������ �� �����.</li></ol><br />������:<ul><li>Y: ��, ���������� ������� ����</li><li>N: ���, ���� ������� �� ����</li><li>�����: ���� �� �������� ���� ������, �� ����� �� ����� ������</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = '���������� �������������� ������, ��� ������� �������� ����������� ��������� ����.<br /><br />�������������:<ol><li>�������� ���� (�������) "price_quantity_start" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />�����</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = '���������� �������������� ������, ����� �������� ��������� ����������� ��������� ����.<br /><br />�������������:<ol><li>�������� ���� (�������) "price_quantity_end" � �������� "������������" (���� CSV). �������� ���� ������� �� �������� � ������ ���� � ������ ��������.</li><li>� ����� CSV, � ���� �������, �������� ����������� ����������.</li></ol><br />�����</li></ul>';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>