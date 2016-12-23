<?php
defined( '_VALID_MOS' ) or die( 'Прямой доступ запрещен.' ); 
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
* Перевод Федоринов Григорий ака skynet80
* http://virtuemart.ru
*/
class vmLanguage extends vmAbstractLanguage {
	var $_PHPSHOP_MENU = 'Меню';
	var $_PHPSHOP_CATEGORY = 'Категория';
	var $_PHPSHOP_CATEGORIES = 'Категории';
	var $_PHPSHOP_SELECT_CATEGORY = 'Выбрать категорию:';
	var $_PHPSHOP_ADMIN = 'Администрирование';
	var $_PHPSHOP_PRODUCT = 'Товар';
	var $_PHPSHOP_LIST = 'Список';
	var $_PHPSHOP_ALL = 'Все';
	var $_PHPSHOP_LIST_ALL_PRODUCTS = 'Список всех товаров';
	var $_PHPSHOP_VIEW = 'Вид';
	var $_PHPSHOP_SHOW = 'Показать';
	var $_PHPSHOP_ADD = 'Добавить';
	var $_PHPSHOP_UPDATE = 'Обновить';
	var $_PHPSHOP_DELETE = 'Удалить';
	var $_PHPSHOP_SELECT = 'Выбрать';
	var $_PHPSHOP_SUBMIT = 'Отправить';
	var $_PHPSHOP_RANDOM = 'Товары';
	var $_PHPSHOP_LATEST = 'Последние поступления';
	var $_PHPSHOP_HOME_TITLE = 'Главная';
	var $_PHPSHOP_CART_TITLE = 'Корзина';
	var $_PHPSHOP_CHECKOUT_TITLE = 'Оформить заказ';
	var $_PHPSHOP_LOGIN_TITLE = 'Войти';
	var $_PHPSHOP_LOGOUT_TITLE = 'Завершить сеанс';
	var $_PHPSHOP_BROWSE_TITLE = 'Просмотр';
	var $_PHPSHOP_SEARCH_TITLE = 'Поиск';
	var $_PHPSHOP_ACCOUNT_TITLE = 'Управление учетной записью';
	var $_PHPSHOP_NAVIGATION_TITLE = 'Навигация';
	var $_PHPSHOP_DEPARTMENT_TITLE = 'Отдел';
	var $_PHPSHOP_INFO = 'Информация';
	var $_PHPSHOP_BROWSE_LBL = 'Просмотр';
	var $_PHPSHOP_PRODUCTS_LBL = 'товаров';
	var $_PHPSHOP_PRODUCT_LBL = 'товар';
	var $_PHPSHOP_SEARCH_LBL = 'Поиск товара';
	var $_PHPSHOP_FLYPAGE_LBL = 'Подробнее ';
	var $_PHPSHOP_PRODUCT_SEARCH_LBL = 'Поиск';
	var $_PHPSHOP_PRODUCT_NAME_TITLE = 'Наименование';
	var $_PHPSHOP_PRODUCT_CATEGORY_TITLE = 'Категория товаров';
	var $_PHPSHOP_PRODUCT_DESC_TITLE = 'Описание';
	var $_PHPSHOP_CART_SHOW = 'Показать корзину';
	var $_PHPSHOP_CART_ADD_TO = 'Купить';
	var $_PHPSHOP_CART_NAME = 'Наименование';
	var $_PHPSHOP_CART_SKU = 'Артикул';
	var $_PHPSHOP_CART_PRICE = 'Цена';
	var $_PHPSHOP_CART_QUANTITY = 'Количество';
	var $_PHPSHOP_CART_SUBTOTAL = 'Промежуточный итог';
	var $_PHPSHOP_ADD_SHIPTO_1 = 'Добавить новый';
	var $_PHPSHOP_ADD_SHIPTO_2 = 'Адрес доставки';
	var $_PHPSHOP_NO_SEARCH_RESULT = 'Ваш поиск не дал результатов.<br />';
	var $_PHPSHOP_PRICE_LABEL = 'Цена: ';
	var $_PHPSHOP_ORDER_BUTTON_LABEL = 'Добавить в корзину';
	var $_PHPSHOP_NO_CUSTOMER = 'Вы не являетесь зарегистрированным клиентом. Пожалуйста, введите информацию для оформления заказа.';
	var $_PHPSHOP_DELETE_MSG = 'Вы уверены, что хотите удалить эту запись?';
	var $_PHPSHOP_THANKYOU = 'Спасибо за ваш заказ.';
	var $_PHPSHOP_NOT_SHIPPED = 'Не отправлен';
	var $_PHPSHOP_EMAIL_SENDTO = 'Подтверждающее письмо было выслано по адресу';
	var $_PHPSHOP_NO_USER_TO_SELECT = 'Извините, здесь нет пользователя, которого Вы можете добавить в список пользователей com_virtuemart';
	var $_PHPSHOP_ERROR = 'Ошибка';
	var $_PHPSHOP_MOD_NOT_REG = 'Модуль не зарегистрирован.';
	var $_PHPSHOP_MOD_ISNO_REG = '- неправильный модуль VirtueMart.';
	var $_PHPSHOP_MOD_NO_AUTH = 'У Вас нет прав для доступа к этому модулю.';
	var $_PHPSHOP_PAGE_404_1 = 'Страницы не существует';
	var $_PHPSHOP_PAGE_404_2 = 'Файл с указанным именем не существует. Невозможно найти файл:';
	var $_PHPSHOP_PAGE_403 = 'Недостаточно прав доступа';
	var $_PHPSHOP_FUNC_NO_EXEC = 'У Вас нет прав на выполнение';
	var $_PHPSHOP_FUNC_NOT_REG = 'Функция не зарегистрирована';
	var $_PHPSHOP_FUNC_ISNO_REG = ' это неправильная функция MOS_com_phpShop.';
	var $_PHPSHOP_ADMIN_MOD = 'Настройки';
	var $_PHPSHOP_USER_LIST_MNU = 'Список пользователей';
	var $_PHPSHOP_USER_LIST_LBL = 'Список пользователей';
	var $_PHPSHOP_USER_LIST_USERNAME = 'Имя пользователя';
	var $_PHPSHOP_USER_LIST_FULL_NAME = 'Полное имя';
	var $_PHPSHOP_USER_LIST_GROUP = 'Группа';
	var $_PHPSHOP_USER_FORM_MNU = 'Добавить пользователя';
	var $_PHPSHOP_USER_FORM_LBL = 'Добавить/Изменить информацию о пользователе';
	var $_PHPSHOP_USER_FORM_BILLTO_LBL = 'Контактная информация плательщика';
	var $_PHPSHOP_USER_FORM_SHIPTO_LBL = 'Адрес доставки';
	var $_PHPSHOP_USER_FORM_ADD_SHIPTO_LBL = 'Добавить адрес';
	var $_PHPSHOP_USER_FORM_NO_SHIPPING_ADDRESSES = 'Нет адресов доставки.';
	var $_PHPSHOP_USER_FORM_ADDRESS_LABEL = 'Адрес доставки';
	var $_PHPSHOP_USER_FORM_FIRST_NAME = 'Имя';
	var $_PHPSHOP_USER_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_USER_FORM_MIDDLE_NAME = 'Отчество';
	var $_PHPSHOP_USER_FORM_TITLE = 'Обращение';
	var $_PHPSHOP_USER_FORM_USERNAME = 'Имя пользователя';
	var $_PHPSHOP_USER_FORM_PASSWORD_1 = 'Пароль';
	var $_PHPSHOP_USER_FORM_PASSWORD_2 = 'Подтвердить пароль';
	var $_PHPSHOP_USER_FORM_PERMS = 'Разрешения';
	var $_PHPSHOP_USER_FORM_CUSTOMER_NUMBER = 'Номер клиента / ID';
	var $_PHPSHOP_USER_FORM_COMPANY_NAME = 'Название компании';
	var $_PHPSHOP_USER_FORM_ADDRESS_1 = 'Адрес 1';
	var $_PHPSHOP_USER_FORM_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_USER_FORM_CITY = 'Город';
	var $_PHPSHOP_USER_FORM_STATE = 'Регион';
	var $_PHPSHOP_USER_FORM_ZIP = 'Индекс';
	var $_PHPSHOP_USER_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_USER_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_USER_FORM_PHONE2 = 'Мобильный телефон';
	var $_PHPSHOP_USER_FORM_FAX = 'Факс';
	var $_PHPSHOP_USER_FORM_EMAIL = 'е-mail';
	var $_PHPSHOP_MODULE_LIST_MNU = 'Список модулей';
	var $_PHPSHOP_MODULE_LIST_LBL = 'Список модулей';
	var $_PHPSHOP_MODULE_LIST_NAME = 'Название модуля';
	var $_PHPSHOP_MODULE_LIST_PERMS = 'Права на модуль';
	var $_PHPSHOP_MODULE_LIST_FUNCTIONS = 'Функции';
	var $_PHPSHOP_MODULE_LIST_ORDER = 'Порядок сортировки';
	var $_PHPSHOP_MODULE_FORM_MNU = 'Добавить модуль';
	var $_PHPSHOP_MODULE_FORM_LBL = 'Описание модуля';
	var $_PHPSHOP_MODULE_FORM_MODULE_LABEL = 'Заголовок модуля (Для главного меню)';
	var $_PHPSHOP_MODULE_FORM_NAME = 'Название модуля';
	var $_PHPSHOP_MODULE_FORM_PERMS = 'Права на модуль';
	var $_PHPSHOP_MODULE_FORM_HEADER = 'Заголовок модуля';
	var $_PHPSHOP_MODULE_FORM_FOOTER = 'Нижний колонтитул модуля';
	var $_PHPSHOP_MODULE_FORM_MENU = 'Показать модуль в разделе Администрирования?';
	var $_PHPSHOP_MODULE_FORM_ORDER = 'Порядок отображения';
	var $_PHPSHOP_MODULE_FORM_DESCRIPTION = 'Описание модуля';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_CODE = 'Языковая кодировка';
	var $_PHPSHOP_MODULE_FORM_LANGUAGE_file = 'Языковой файл';
	var $_PHPSHOP_FUNCTION_LIST_MNU = 'Список функций';
	var $_PHPSHOP_FUNCTION_LIST_LBL = 'Список функций';
	var $_PHPSHOP_FUNCTION_LIST_NAME = 'Имя функции';
	var $_PHPSHOP_FUNCTION_LIST_CLASS = 'Имя класса';
	var $_PHPSHOP_FUNCTION_LIST_METHOD = 'Метод класса';
	var $_PHPSHOP_FUNCTION_LIST_PERMS = 'Права на функцию';
	var $_PHPSHOP_FUNCTION_FORM_MNU = 'Добавить функцию';
	var $_PHPSHOP_FUNCTION_FORM_LBL = 'Описание функции';
	var $_PHPSHOP_FUNCTION_FORM_NAME = 'Имя функции';
	var $_PHPSHOP_FUNCTION_FORM_CLASS = 'Имя класса';
	var $_PHPSHOP_FUNCTION_FORM_METHOD = 'Метод класса';
	var $_PHPSHOP_FUNCTION_FORM_PERMS = 'Права на функцию';
	var $_PHPSHOP_FUNCTION_FORM_DESCRIPTION = 'Описание функции';
	var $_PHPSHOP_CURRENCY_LIST_MNU = 'Список валют';
	var $_PHPSHOP_CURRENCY_LIST_LBL = 'Список валют';
	var $_PHPSHOP_CURRENCY_LIST_ADD = 'Добавить валюту';
	var $_PHPSHOP_CURRENCY_LIST_NAME = 'Название валюты';
	var $_PHPSHOP_CURRENCY_LIST_CODE = 'Код валюты';
	var $_PHPSHOP_COUNTRY_LIST_MNU = 'Список стран';
	var $_PHPSHOP_COUNTRY_LIST_LBL = 'Список стран';
	var $_PHPSHOP_COUNTRY_LIST_ADD = 'Добавить страну';
	var $_PHPSHOP_COUNTRY_LIST_NAME = 'Название страны';
	var $_PHPSHOP_COUNTRY_LIST_3_CODE = 'Код страны (3)';
	var $_PHPSHOP_COUNTRY_LIST_2_CODE = 'Код страны (2)';
	var $_PHPSHOP_STATE_LIST_MNU = 'Список регионов';
	var $_PHPSHOP_STATE_LIST_LBL = 'Список регионов для: ';
	var $_PHPSHOP_STATE_LIST_ADD = 'Добавить/Изменить регион';
	var $_PHPSHOP_STATE_LIST_NAME = 'Название региона';
	var $_PHPSHOP_STATE_LIST_3_CODE = 'Код региона (3)';
	var $_PHPSHOP_STATE_LIST_2_CODE = 'Код региона (2)';
	var $_PHPSHOP_ADDRESS = 'Адрес';
	var $_PHPSHOP_CONTINUE = 'Продолжить';
	var $_PHPSHOP_EMPTY_CART = 'Ваша корзина пуста.';
	var $_PHPSHOP_ISSHIPPING_MOD = 'InterShipper';
	var $_PHPSHOP_ISSHIP_PING_MNU = 'Связаться с сервером Intershipper';
	var $_PHPSHOP_ISSHIP_PING_LBL = 'Связаться с сервером Intershipper';
	var $_PHPSHOP_ISSHIP_PING_ERROR_LBL = 'Ошибка связи с сервером Intershipper';
	var $_PHPSHOP_ISSHIP_PING_GOOD_LBL = 'Связь произошла успешно с сервером Intershipper';
	var $_PHPSHOP_ISSHIP_PING_CARRIER_LBL = 'Вариант доставки';
	var $_PHPSHOP_ISSHIP_PING_RESPONSE_LBL = 'Время<br />ответа';
	var $_PHPSHOP_ISSHIP_PING_TIME_LBL = 'сек.';
	var $_PHPSHOP_ISSHIP_LIST_MNU = 'Список вариантов доставки';
	var $_PHPSHOP_ISSHIP_LIST_LBL = 'Доступные варианты доставки';
	var $_PHPSHOP_ISSHIP_LIST_CARRIER_LBL = 'Варианты&nbsp;доставки';
	var $_PHPSHOP_ISSHIP_LIST_PUBLISH_LBL = 'Активные';
	var $_PHPSHOP_ISSHIP_LIST_RATE_LBL = 'Плата за обработку груза';
	var $_PHPSHOP_ISSHIP_LIST_LEAD_LBL = 'Срок подготовки груза';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_F_LBL = 'фиксированный тариф';
	var $_PHPSHOP_ISSHIP_LIST_CHARGE_P_LBL = 'процент';
	var $_PHPSHOP_ISSHIP_LIST_DAYS_LBL = 'дней';
	var $_PHPSHOP_ISSHIP_LIST_HEAVY_LBL = 'Отгрузка крупных/тяжёлых товаров';
	var $_PHPSHOP_ISSHIP_FORM_MNU = 'Настроить варианты доставки';
	var $_PHPSHOP_ISSHIP_FORM_ADD_LBL = 'Добавить вариант доставки';
	var $_PHPSHOP_ISSHIP_FORM_UPDATE_LBL = 'Настроить вариант доставки';
	var $_PHPSHOP_ISSHIP_FORM_REFRESH_LBL = 'Обновить';
	var $_PHPSHOP_ISSHIP_FORM_CARRIER_LBL = 'Варианты доставки';
	var $_PHPSHOP_ISSHIP_FORM_PUBLISH_LBL = 'Активировать';
	var $_PHPSHOP_ISSHIP_FORM_HANDLING_LBL = 'Плата за обработку груза';
	var $_PHPSHOP_ISSHIP_FORM_LEAD_LBL = 'Срок подготовки груза';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_F_LBL = 'фиксированный тариф';
	var $_PHPSHOP_ISSHIP_FORM_CHARGE_P_LBL = 'процент';
	var $_PHPSHOP_ISSHIP_FORM_DAYS_LBL = 'дней';
	var $_PHPSHOP_ISSHIP_FORM_HEAVY_LBL = 'Отгрузка крупных/тяжёлых товаров';
	var $_PHPSHOP_ORDER_MOD = 'Заказы';
	var $_PHPSHOP_ORDER_CONFIRM_MNU = 'Подтвердить';
	var $_PHPSHOP_ORDER_CANCEL_MNU = 'Отменить заказ';
	var $_PHPSHOP_ORDER_PRINT_MNU = 'Напечатать заказ';
	var $_PHPSHOP_ORDER_DELETE_MNU = 'Удалить заказ';
	var $_PHPSHOP_ORDER_LIST_MNU = 'Список заказов';
	var $_PHPSHOP_ORDER_LIST_LBL = 'Список заказов';
	var $_PHPSHOP_ORDER_LIST_ID = 'Номер заказа';
	var $_PHPSHOP_ORDER_LIST_CDATE = 'Дата заказа';
	var $_PHPSHOP_ORDER_LIST_MDATE = 'Изменен';
	var $_PHPSHOP_ORDER_LIST_STATUS = 'Статус';
	var $_PHPSHOP_ORDER_LIST_TOTAL = 'Промежуточный итог';
	var $_PHPSHOP_ORDER_ITEM = 'Содержание заказа';
	var $_PHPSHOP_ORDER_PRINT_PO_LBL = 'Информация о заказе';
	var $_PHPSHOP_ORDER_PRINT_PO_NUMBER = 'Номер заказа';
	var $_PHPSHOP_ORDER_PRINT_PO_DATE = 'Дата заказа';
	var $_PHPSHOP_ORDER_PRINT_PO_STATUS = 'Статус заказа';
	var $_PHPSHOP_ORDER_PRINT_CUST_INFO_LBL = 'Информация о клиенте';
	var $_PHPSHOP_ORDER_PRINT_CUST_BILLING_LBL = 'Контактная информация плательщика';
	var $_PHPSHOP_ORDER_PRINT_CUST_SHIPPING_LBL = 'Информация о доставке';
	var $_PHPSHOP_ORDER_PRINT_BILL_TO_LBL = 'Плательщик';
	var $_PHPSHOP_ORDER_PRINT_SHIP_TO_LBL = 'Адрес доставки';
	var $_PHPSHOP_ORDER_PRINT_NAME = 'Имя';
	var $_PHPSHOP_ORDER_PRINT_COMPANY = 'Компания';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_1 = 'Адрес 1';
	var $_PHPSHOP_ORDER_PRINT_ADDRESS_2 = 'Адрес 2';
	var $_PHPSHOP_ORDER_PRINT_CITY = 'Город';
	var $_PHPSHOP_ORDER_PRINT_STATE = 'Регион';
	var $_PHPSHOP_ORDER_PRINT_ZIP = 'Индекс';
	var $_PHPSHOP_ORDER_PRINT_COUNTRY = 'Страна';
	var $_PHPSHOP_ORDER_PRINT_PHONE = 'Телефон';
	var $_PHPSHOP_ORDER_PRINT_FAX = 'Факс';
	var $_PHPSHOP_ORDER_PRINT_EMAIL = 'E-mail';
	var $_PHPSHOP_ORDER_PRINT_ITEMS_LBL = 'Содержание заказа';
	var $_PHPSHOP_ORDER_PRINT_QUANTITY = 'Количество';
	var $_PHPSHOP_ORDER_PRINT_QTY = 'кол-во';
	var $_PHPSHOP_ORDER_PRINT_SKU = 'Артикул';
	var $_PHPSHOP_ORDER_PRINT_PRICE = 'Цена';
	var $_PHPSHOP_ORDER_PRINT_TOTAL = 'Итого';
	var $_PHPSHOP_ORDER_PRINT_SUBTOTAL = 'Промежуточный итог';
	var $_PHPSHOP_ORDER_PRINT_TOTAL_TAX = 'Налог на стоимость заказа';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING = 'Стоимость доставки и плата за отгрузку';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_TAX = 'Налог на доставку';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LBL = 'Способ оплаты';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NAME = 'Имя держателя счёта';
	var $_PHPSHOP_ORDER_PRINT_ACCOUNT_NUMBER = 'Номер р/счета';
	var $_PHPSHOP_ORDER_PRINT_EXPIRE_DATE = 'Действителен до';
	var $_PHPSHOP_ORDER_PRINT_PAYMENT_LOG_LBL = 'История платежей';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_LBL = 'Информация о доставке';
	var $_PHPSHOP_ORDER_PRINT_PAYINFO_LBL = 'Информация об оплате';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_CARRIER_LBL = 'Вариант доставки';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_MODE_LBL = 'Вид доставки';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_DATE_LBL = 'Дата отгрузки';
	var $_PHPSHOP_ORDER_PRINT_SHIPPING_PRICE_LBL = 'Стоимость доставки';
	var $_PHPSHOP_ORDER_STATUS_LIST_MNU = 'Состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_MNU = 'Добавить вид состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_LIST_CODE = 'Код состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_LIST_NAME = 'Название состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_LBL = 'Состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_CODE = 'Код состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_NAME = 'Название состояния заказа';
	var $_PHPSHOP_ORDER_STATUS_FORM_LIST_ORDER = 'Порядок отображения';
	var $_PHPSHOP_PRODUCT_MOD = 'Товары';
	var $_PHPSHOP_CURRENT_PRODUCT = 'Текущий товар';
	var $_PHPSHOP_CURRENT_ITEM = 'Текущая позиция';
	var $_PHPSHOP_PRODUCT_INVENTORY_LBL = 'Товары на складе';
	var $_PHPSHOP_PRODUCT_INVENTORY_MNU = 'Просмотр товаров на складе';
	var $_PHPSHOP_PRODUCT_INVENTORY_PRICE = 'Цена';
	var $_PHPSHOP_PRODUCT_INVENTORY_STOCK = 'Количество';
	var $_PHPSHOP_PRODUCT_INVENTORY_WEIGHT = 'Вес';
	var $_PHPSHOP_PRODUCT_LIST_MNU = 'Товары';
	var $_PHPSHOP_PRODUCT_LIST_LBL = 'Список товаров';
	var $_PHPSHOP_PRODUCT_LIST_NAME = 'Наименование товара';
	var $_PHPSHOP_PRODUCT_LIST_SKU = 'Артикул';
	var $_PHPSHOP_PRODUCT_LIST_PUBLISH = 'Опубликовать';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE = 'Поиск товара';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT = 'изменен';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE = 'с изменением цены';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE = 'без иземенения цены';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER = 'После';
	var $_PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE = 'До';
	var $_PHPSHOP_PRODUCT_FORM_MNU = 'Добавить товар';
	var $_PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT = 'Редактировать товар';
	var $_PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE = 'Просмотр представления (fly-страницы) текущего товара';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ITEM_MNU = 'Добавить позицию';
	var $_PHPSHOP_PRODUCT_FORM_ADD_ANOTHER_ITEM_MNU = 'Добавить другую позицию';
	var $_PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL = 'Новый товар';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_PRODUCT_LBL = 'Обновить';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL = 'Информация о товаре';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL = 'Статус товара';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL = 'Габариты и вес';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL = 'Изображения товара';
	var $_PHPSHOP_PRODUCT_FORM_NEW_ITEM_LBL = 'Новая позиция';
	var $_PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL = 'Обновить позицию';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL = 'Информация о позиции';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL = 'Статус позиции';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL = 'Размер позиции и вес';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL = 'Изображения позиции';
	var $_PHPSHOP_PRODUCT_FORM_RETURN_LBL = 'Вернуться к родительскому товару';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL = 'Чтобы изменить текущее изображение, введите путь к новому файлу.';
	var $_PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL = 'Удалить текущее изображение.';
	var $_PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL = 'Позиции товара';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL = 'Свойства позиции';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG = 'Вы уверены, что хотите удалить этот товар и позиции связанные с ним?';
	var $_PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG = 'Вы уверены, что хотите удалить эту позицию?';
	var $_PHPSHOP_PRODUCT_FORM_VENDOR = 'Продавец';
	var $_PHPSHOP_PRODUCT_FORM_MANUFACTURER = 'Производитель';
	var $_PHPSHOP_PRODUCT_FORM_SKU = 'Артикул';
	var $_PHPSHOP_PRODUCT_FORM_NAME = 'Наименование';
	var $_PHPSHOP_PRODUCT_FORM_URL = 'URL';
	var $_PHPSHOP_PRODUCT_FORM_CATEGORY = 'Категория';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_GROSS = 'Цена товара (с налогами)';
	var $_PHPSHOP_PRODUCT_FORM_PRICE_NET = 'Цена товара (без налогов)';
	var $_PHPSHOP_PRODUCT_FORM_DESCRIPTION = 'Описание товара';
	var $_PHPSHOP_PRODUCT_FORM_S_DESC = 'Краткое описание';
	var $_PHPSHOP_PRODUCT_FORM_IN_STOCK = 'На складе';
	var $_PHPSHOP_PRODUCT_FORM_ON_ORDER = 'В заказе';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE = 'Доступно с';
	var $_PHPSHOP_PRODUCT_FORM_SPECIAL = 'Специальное предложение';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE = 'Тип скидки';
	var $_PHPSHOP_PRODUCT_FORM_PUBLISH = 'Опубликовать?';
	var $_PHPSHOP_PRODUCT_FORM_LENGTH = 'Длина';
	var $_PHPSHOP_PRODUCT_FORM_WIDTH = 'Ширина';
	var $_PHPSHOP_PRODUCT_FORM_HEIGHT = 'Высота';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM = 'Единица измерения';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT = 'Вес';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM = 'Единица измерения';
	var $_PHPSHOP_PRODUCT_FORM_THUMB_IMAGE = 'Маленькая картинка';
	var $_PHPSHOP_PRODUCT_FORM_FULL_IMAGE = 'Большая картинка';
	var $_PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT = 'кг';
	var $_PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT = 'см';
	var $_PHPSHOP_PRODUCT_FORM_UNIT = 'Единица';
	var $_PHPSHOP_PRODUCT_FORM_UNIT_DEFAULT = 'шт';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING = 'Кол-во в упаковке';
	var $_PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION = 'Здесь Вы можете указать количество единиц товара в упаковке. (макс. 65535)';
	var $_PHPSHOP_PRODUCT_FORM_BOX = 'Единиц в коробке';
	var $_PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION = 'Здесь Вы можете указать количество единиц товара в коробке. (макс. 65535)';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL = 'Результаты добавления товара';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL = 'Результаты обновления товара';
	var $_PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL = 'Результаты добавления позиции';
	var $_PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL = 'Результаты обновления позиции';
	var $_PHPSHOP_PRODUCT_CSV_UPLOAD = 'Экспорт/Импорт через CSV';
	var $_PHPSHOP_PRODUCT_FOLDERS = 'Дерево категорий товара';
	var $_PHPSHOP_CATEGORY_LIST_MNU = 'Список категорий';
	var $_PHPSHOP_CATEGORY_LIST_LBL = 'Список категорий';
	var $_PHPSHOP_CATEGORY_FORM_MNU = 'Добавить категорию';
	var $_PHPSHOP_CATEGORY_FORM_LBL = 'Информация о категории';
	var $_PHPSHOP_CATEGORY_FORM_NAME = 'Название категории';
	var $_PHPSHOP_CATEGORY_FORM_PARENT = 'Родительская категория';
	var $_PHPSHOP_CATEGORY_FORM_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_CATEGORY_FORM_PUBLISH = 'Опубликовать?';
	var $_PHPSHOP_CATEGORY_FORM_FLYPAGE = 'Просмотр представления (fly-страницы) категории';
	var $_PHPSHOP_ATTRIBUTE_LIST_MNU = 'Список свойств';
	var $_PHPSHOP_ATTRIBUTE_LIST_LBL = 'Список свойств для';
	var $_PHPSHOP_ATTRIBUTE_LIST_NAME = 'Название свойства';
	var $_PHPSHOP_ATTRIBUTE_LIST_ORDER = 'Порядок отображения';
	var $_PHPSHOP_ATTRIBUTE_FORM_MNU = 'Добавить свойство';
	var $_PHPSHOP_ATTRIBUTE_FORM_LBL = 'Форма свойства';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT = 'Новое свойство для товара';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT = 'Обновить свойство товара';
	var $_PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM = 'Новое свойство для позиции';
	var $_PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM = 'Обновить свойство для позиции';
	var $_PHPSHOP_ATTRIBUTE_FORM_NAME = 'Название свойства';
	var $_PHPSHOP_ATTRIBUTE_FORM_ORDER = 'Порядок отображения';
	var $_PHPSHOP_PRICE_LIST_MNU = 'Цены';
	var $_PHPSHOP_PRICE_LIST_LBL = 'Цены';
	var $_PHPSHOP_PRICE_LIST_FOR_LBL = 'Цена для';
	var $_PHPSHOP_PRICE_LIST_GROUP_NAME = 'Название группы';
	var $_PHPSHOP_PRICE_LIST_PRICE = 'Цена';
	var $_PHPSHOP_PRODUCT_LIST_CURRENCY = 'Валюта';
	var $_PHPSHOP_PRICE_FORM_MNU = 'Добавить цену';
	var $_PHPSHOP_PRICE_FORM_LBL = 'Информация о цене';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT = 'Новая цена для товара';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT = 'Обновить цену товара';
	var $_PHPSHOP_PRICE_FORM_NEW_FOR_ITEM = 'Новая цена для позиции';
	var $_PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM = 'Обновить цену для позиции';
	var $_PHPSHOP_PRICE_FORM_PRICE = 'Цена';
	var $_PHPSHOP_PRICE_FORM_CURRENCY = 'Валюта';
	var $_PHPSHOP_PRICE_FORM_GROUP = 'Группа покупателя';
	var $_PHPSHOP_REPORTBASIC_MOD = 'Отчеты';
	var $_PHPSHOP_RB_INDIVIDUAL = 'Отчет по отдельному товару';
	var $_PHPSHOP_RB_SALE_TITLE = 'Отчет о продажах';
	var $_PHPSHOP_RB_SALES_PAGE_TITLE = 'Анализ продаж';
	var $_PHPSHOP_RB_INTERVAL_TITLE = 'Установить интервал';
	var $_PHPSHOP_RB_INTERVAL_MONTHLY_TITLE = 'За текущий месяц';
	var $_PHPSHOP_RB_INTERVAL_WEEKLY_TITLE = 'За неделю';
	var $_PHPSHOP_RB_INTERVAL_DAILY_TITLE = 'За день';
	var $_PHPSHOP_RB_THISMONTH_BUTTON = 'За текущий месяц';
	var $_PHPSHOP_RB_LASTMONTH_BUTTON = 'За предыдущий месяц';
	var $_PHPSHOP_RB_LAST60_BUTTON = 'За последние 60 дней';
	var $_PHPSHOP_RB_LAST90_BUTTON = 'За последние 90 дней';
	var $_PHPSHOP_RB_START_DATE_TITLE = 'Начало';
	var $_PHPSHOP_RB_END_DATE_TITLE = 'Конец';
	var $_PHPSHOP_RB_SHOW_SEL_RANGE = 'Показать выбранный период';
	var $_PHPSHOP_RB_REPORT_FOR = 'Отчет за ';
	var $_PHPSHOP_RB_DATE = 'Дата';
	var $_PHPSHOP_RB_ORDERS = 'Заказы';
	var $_PHPSHOP_RB_TOTAL_ITEMS = 'Всего продано';
	var $_PHPSHOP_RB_REVENUE = 'Выручка';
	var $_PHPSHOP_RB_PRODLIST = 'Список товаров';
	var $_PHPSHOP_SHOP_MOD = 'Магазин';
	var $_PHPSHOP_PRODUCT_THUMB_TITLE = 'Изображение';
	var $_PHPSHOP_PRODUCT_PRICE_TITLE = 'Цена';
	var $_PHPSHOP_ORDER_STATUS_P = 'В обработке';
	var $_PHPSHOP_ORDER_STATUS_C = 'Подтвержден';
	var $_PHPSHOP_ORDER_STATUS_X = 'Отменён';
	var $_PHPSHOP_ORDER_BUTTON = 'Заказ';
	var $_PHPSHOP_SHOPPER_MOD = 'Покупатели';
	var $_PHPSHOP_SHOPPER_LIST_MNU = 'Покупатели';
	var $_PHPSHOP_SHOPPER_LIST_LBL = 'Список покупателей';
	var $_PHPSHOP_SHOPPER_LIST_USERNAME = 'Имя пользователя';
	var $_PHPSHOP_SHOPPER_LIST_NAME = 'Полное имя';
	var $_PHPSHOP_SHOPPER_LIST_GROUP = 'Группа';
	var $_PHPSHOP_SHOPPER_FORM_MNU = 'Добавить покупателя';
	var $_PHPSHOP_SHOPPER_FORM_LBL = 'Информация о покупателе';
	var $_PHPSHOP_SHOPPER_FORM_BILLTO_LBL = 'Контактная информация плательщика';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_INFO_LBL = 'Информация';
	var $_PHPSHOP_SHOPPER_FORM_SHIPTO_LBL = 'Информация о доставке';
	var $_PHPSHOP_SHOPPER_FORM_ADD_SHIPTO_LBL = 'Добавить адрес';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_LABEL = 'Адрес';
	var $_PHPSHOP_SHOPPER_FORM_USERNAME = 'Имя покупателя';
	var $_PHPSHOP_SHOPPER_FORM_FIRST_NAME = 'Имя';
	var $_PHPSHOP_SHOPPER_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_SHOPPER_FORM_MIDDLE_NAME = 'Отчество';
	var $_PHPSHOP_SHOPPER_FORM_TITLE = 'Обращение';
	var $_PHPSHOP_SHOPPER_FORM_SHOPPERNAME = 'Имя пользователя';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_1 = 'Пароль';
	var $_PHPSHOP_SHOPPER_FORM_PASSWORD_2 = 'Подтвердите пароль';
	var $_PHPSHOP_SHOPPER_FORM_GROUP = 'Группа покупателя';
	var $_PHPSHOP_SHOPPER_FORM_COMPANY_NAME = 'Название компании';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_1 = 'Адрес (улица, дом, квартира)';
	var $_PHPSHOP_SHOPPER_FORM_ADDRESS_2 = 'Адрес (район)';
	var $_PHPSHOP_SHOPPER_FORM_CITY = 'Город';
	var $_PHPSHOP_SHOPPER_FORM_STATE = 'Регион';
	var $_PHPSHOP_SHOPPER_FORM_ZIP = 'Индекс';
	var $_PHPSHOP_SHOPPER_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_SHOPPER_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_SHOPPER_FORM_PHONE2 = 'Мобильный телефон';
	var $_PHPSHOP_SHOPPER_FORM_FAX = 'Факс';
	var $_PHPSHOP_SHOPPER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_1 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_2 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_3 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_1 = 'Да';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_4_2 = 'Нет';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5 = '';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_1 = 'AAA';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_2 = 'BBB';
	var $_PHPSHOP_SHOPPER_FORM_EXTRA_FIELD_5_3 = 'CCC';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_MNU = 'Группы покупателей';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_LBL = 'Группы покупателей';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_NAME = 'Название группы';
	var $_PHPSHOP_SHOPPER_GROUP_LIST_DESCRIPTION = 'Описание группы';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_LBL = 'Добавить группу покупателей';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_MNU = 'Добавить группу покупателей';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_NAME = 'Название группы';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DESC = 'Описание группы';
	var $_PHPSHOP_STORE_MOD = 'Магазин';
	var $_PHPSHOP_STORE_FORM_MNU = 'Информация о магазине';
	var $_PHPSHOP_STORE_FORM_LBL = 'Информация о магазине';
	var $_PHPSHOP_STORE_FORM_CONTACT_LBL = 'Контактная информация';
	var $_PHPSHOP_STORE_FORM_FULL_IMAGE = 'Логотип';
	var $_PHPSHOP_STORE_FORM_UPLOAD = 'Загрузить изображение';
	var $_PHPSHOP_STORE_FORM_STORE_NAME = 'Название магазина';
	var $_PHPSHOP_STORE_FORM_COMPANY_NAME = 'Название компании владельца магазина';
	var $_PHPSHOP_STORE_FORM_ADDRESS_1 = 'Адрес (улица, дом, квартира)';
	var $_PHPSHOP_STORE_FORM_ADDRESS_2 = 'Адрес (район)';
	var $_PHPSHOP_STORE_FORM_CITY = 'Город';
	var $_PHPSHOP_STORE_FORM_STATE = 'Регион';
	var $_PHPSHOP_STORE_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_STORE_FORM_ZIP = 'Индекс';
	var $_PHPSHOP_STORE_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_STORE_FORM_CURRENCY = 'Валюта';
	var $_PHPSHOP_STORE_FORM_CATEGORY = 'Категория магазина';
	var $_PHPSHOP_STORE_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_STORE_FORM_FIRST_NAME = 'Имя';
	var $_PHPSHOP_STORE_FORM_MIDDLE_NAME = 'Отчество';
	var $_PHPSHOP_STORE_FORM_TITLE = 'Обращение';
	var $_PHPSHOP_STORE_FORM_PHONE_1 = 'Телефон 1';
	var $_PHPSHOP_STORE_FORM_PHONE_2 = 'Телефон 2';
	var $_PHPSHOP_STORE_FORM_FAX = 'Факс';
	var $_PHPSHOP_STORE_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_STORE_FORM_IMAGE_PATH = 'Путь к изображению';
	var $_PHPSHOP_STORE_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_PAYMENT = 'Оплата';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_MNU = 'Способы оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_LBL = 'Список способов оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_NAME = 'Название';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_CODE = 'Код';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_DISCOUNT = 'Скидка';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP = 'Группа покупателей';
	var $_PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR = 'Способ оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_MNU = 'Добавить способ оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LBL = 'Добавить способ оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_NAME = 'Название способа оплаты';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP = 'Группа покупателей';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT = 'Скидка';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_CODE = 'Код';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER = 'Порядок отображения';
	var $_PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR = 'Способ оплаты';
	var $_PHPSHOP_TAX_MOD = 'Налоги';
	var $_PHPSHOP_TAX_RATE = 'Налоговые ставки';
	var $_PHPSHOP_TAX_LIST_MNU = 'Список налоговых ставок';
	var $_PHPSHOP_TAX_LIST_LBL = 'Список налоговых ставок';
	var $_PHPSHOP_TAX_LIST_STATE = 'Регион, где действует налог';
	var $_PHPSHOP_TAX_LIST_COUNTRY = 'Страна, где действует налог';
	var $_PHPSHOP_TAX_LIST_RATE = 'Ставка налога';
	var $_PHPSHOP_TAX_FORM_MNU = 'Добавить налоговую ставку';
	var $_PHPSHOP_TAX_FORM_LBL = 'Добавить информацию о налоговой ставке';
	var $_PHPSHOP_TAX_FORM_STATE = 'Регион, где действует налог';
	var $_PHPSHOP_TAX_FORM_COUNTRY = 'Страна, где действует налог';
	var $_PHPSHOP_TAX_FORM_RATE = 'Ставка налога (если 16% => вводим 0.16)';
	var $_PHPSHOP_VENDOR_MOD = 'Продавцы';
	var $_PHPSHOP_VENDOR_ADMIN = 'Продавцы';
	var $_PHPSHOP_VENDOR_LIST_MNU = 'Список продавцов';
	var $_PHPSHOP_VENDOR_LIST_LBL = 'Список продавцов';
	var $_PHPSHOP_VENDOR_LIST_VENDOR_NAME = 'Название продавца';
	var $_PHPSHOP_VENDOR_LIST_ADMIN = 'Администрирование';
	var $_PHPSHOP_VENDOR_FORM_MNU = 'Добавить продавца';
	var $_PHPSHOP_VENDOR_FORM_LBL = 'Добавить информацию';
	var $_PHPSHOP_VENDOR_FORM_INFO_LBL = 'Информация о продавце';
	var $_PHPSHOP_VENDOR_FORM_CONTACT_LBL = 'Контактная информация';
	var $_PHPSHOP_VENDOR_FORM_FULL_IMAGE = 'Логотип';
	var $_PHPSHOP_VENDOR_FORM_UPLOAD = 'Загрузить логотип';
	var $_PHPSHOP_VENDOR_FORM_STORE_NAME = 'Название магазина';
	var $_PHPSHOP_VENDOR_FORM_COMPANY_NAME = 'Название компании';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_1 = 'Адрес (улица, дом, квартира)';
	var $_PHPSHOP_VENDOR_FORM_ADDRESS_2 = 'Адрес (район)';
	var $_PHPSHOP_VENDOR_FORM_CITY = 'Город';
	var $_PHPSHOP_VENDOR_FORM_STATE = 'Регион';
	var $_PHPSHOP_VENDOR_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_VENDOR_FORM_ZIP = 'Индекс';
	var $_PHPSHOP_VENDOR_FORM_PHONE = 'Телефон';
	var $_PHPSHOP_VENDOR_FORM_CURRENCY = 'Валюта';
	var $_PHPSHOP_VENDOR_FORM_CATEGORY = 'Категория продавца';
	var $_PHPSHOP_VENDOR_FORM_LAST_NAME = 'Фамилия';
	var $_PHPSHOP_VENDOR_FORM_FIRST_NAME = 'Имя';
	var $_PHPSHOP_VENDOR_FORM_MIDDLE_NAME = 'Отчество';
	var $_PHPSHOP_VENDOR_FORM_TITLE = 'Обращение';
	var $_PHPSHOP_VENDOR_FORM_PHONE_1 = 'Телефон 1';
	var $_PHPSHOP_VENDOR_FORM_PHONE_2 = 'Телефон 2';
	var $_PHPSHOP_VENDOR_FORM_FAX = 'Факс';
	var $_PHPSHOP_VENDOR_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_VENDOR_FORM_IMAGE_PATH = 'Путь к изображению';
	var $_PHPSHOP_VENDOR_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_VENDOR_CAT_LIST_MNU = 'Список категорий продавцов';
	var $_PHPSHOP_VENDOR_CAT_LIST_LBL = 'Список категорий продавцов';
	var $_PHPSHOP_VENDOR_CAT_NAME = 'Название категории';
	var $_PHPSHOP_VENDOR_CAT_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_VENDOR_CAT_VENDORS = 'Продавцы';
	var $_PHPSHOP_VENDOR_CAT_FORM_MNU = 'Добавить категорию продавцов';
	var $_PHPSHOP_VENDOR_CAT_FORM_LBL = 'Добавить категорию продавцов';
	var $_PHPSHOP_VENDOR_CAT_FORM_INFO_LBL = 'Информация о категории';
	var $_PHPSHOP_VENDOR_CAT_FORM_NAME = 'Название категории';
	var $_PHPSHOP_VENDOR_CAT_FORM_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_MANUFACTURER_MOD = 'Производители';
	var $_PHPSHOP_MANUFACTURER_ADMIN = 'Производители';
	var $_PHPSHOP_MANUFACTURER_LIST_MNU = 'Список производителей';
	var $_PHPSHOP_MANUFACTURER_LIST_LBL = 'Список производителей';
	var $_PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME = 'Название производителя';
	var $_PHPSHOP_MANUFACTURER_LIST_ADMIN = 'Администрирование';
	var $_PHPSHOP_MANUFACTURER_FORM_MNU = 'Добавить производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_LBL = 'Добавить информацию';
	var $_PHPSHOP_MANUFACTURER_FORM_INFO_LBL = 'Информация о производителе';
	var $_PHPSHOP_MANUFACTURER_FORM_NAME = 'Название производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_CATEGORY = 'Категория производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_EMAIL = 'E-mail';
	var $_PHPSHOP_MANUFACTURER_FORM_URL = 'Сайт производителя';
	var $_PHPSHOP_MANUFACTURER_FORM_DESCRIPTION = 'Описание';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_MNU = 'Список категорий производителей';
	var $_PHPSHOP_MANUFACTURER_CAT_LIST_LBL = 'Список категорий производителей';
	var $_PHPSHOP_MANUFACTURER_CAT_NAME = 'Название категории';
	var $_PHPSHOP_MANUFACTURER_CAT_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS = 'Производители';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_MNU = 'Добавить категорию производителей';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_LBL = 'Форма категории производителей';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL = 'Информация о категории';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_NAME = 'Название категории';
	var $_PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION = 'Описание категории';
	var $_PHPSHOP_HELP_MOD = 'Помощь';
	var $_PHPSHOP_CART_ACTION = 'Обновить';
	var $_PHPSHOP_CART_UPDATE = 'Обновить количество в корзине';
	var $_PHPSHOP_CART_DELETE = 'Удалить товар из корзины';
	var $_PHPSHOP_PRODUCT_PRICETAG = 'Цена';
	var $_PHPSHOP_PRODUCT_CALL = 'Позвоните, чтобы уточнить цену';
	var $_PHPSHOP_PRODUCT_PREVIOUS = 'Пред';
	var $_PHPSHOP_PRODUCT_NEXT = 'След';
	var $_PHPSHOP_CART_TAX = 'Налог';
	var $_PHPSHOP_CART_SHIPPING = 'Стоимость доставки и плата за отгрузку';
	var $_PHPSHOP_CART_TOTAL = 'Итого';
	var $_PHPSHOP_CHECKOUT_NEXT = 'Следующий';
	var $_PHPSHOP_CHECKOUT_REGISTER = 'Зарегистрироваться';
	var $_PHPSHOP_CHECKOUT_CONF_BILLINFO = 'Контактная информация плательщика';
	var $_PHPSHOP_CHECKOUT_CONF_COMPANY = 'Компания';
	var $_PHPSHOP_CHECKOUT_CONF_NAME = 'Имя';
	var $_PHPSHOP_CHECKOUT_CONF_ADDRESS = 'Адрес';
	var $_PHPSHOP_CHECKOUT_CONF_PHONE = 'Телефон';
	var $_PHPSHOP_CHECKOUT_CONF_FAX = 'Факс';
	var $_PHPSHOP_CHECKOUT_CONF_EMAIL = 'E-mail';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO = 'Информация о доставке';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_COMPANY = 'Компания';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_NAME = 'Имя';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_ADDRESS = 'Адрес';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_PHONE = 'Телефон';
	var $_PHPSHOP_CHECKOUT_CONF_SHIPINFO_FAX = 'Факс';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO = 'Информация об оплате';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_NAMECARD = 'Держатель карты (вводится латинскими буквами, как написано на карте)';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_METHOD = 'Способ оплаты';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_CCNUM = 'Номер карты';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_EXDATE = 'Действительна до';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_COMPORDER = 'Завершить заказ';
	var $_PHPSHOP_CHECKOUT_CONF_PAYINFO_REQINFO = 'необходимая информация для оплаты по кредитной карте';
	var $_PHPSHOP_ZONE_MOD = 'Регион доставки';
	var $_PHPSHOP_ZONE_LIST_MNU = 'Список регионов';
	var $_PHPSHOP_ZONE_FORM_MNU = 'Добавить регион';
	var $_PHPSHOP_ZONE_ASSIGN_MNU = 'Назначить регион';
	var $_PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL = 'Страна';
	var $_PHPSHOP_ZONE_ASSIGN_CURRENT_LBL = 'Текущий регион';
	var $_PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL = 'Назначить региону';
	var $_PHPSHOP_ZONE_ASSIGN_UPDATE_LBL = 'Обновить';
	var $_PHPSHOP_ASSIGN_ZONE_PG_LBL = 'Назначить регионы';
	var $_PHPSHOP_ZONE_FORM_NAME_LBL = 'Название региона';
	var $_PHPSHOP_ZONE_FORM_DESC_LBL = 'Описание региона';
	var $_PHPSHOP_ZONE_FORM_COST_PER_LBL = 'Региональная стоимость за единицу';
	var $_PHPSHOP_ZONE_FORM_COST_LIMIT_LBL = 'Лимит стоимости в регионе';
	var $_PHPSHOP_ZONE_LIST_LBL = 'Список регионов';
	var $_PHPSHOP_ZONE_LIST_NAME_LBL = 'Название региона';
	var $_PHPSHOP_ZONE_LIST_DESC_LBL = 'Описание региона';
	var $_PHPSHOP_ZONE_LIST_COST_PER_LBL = 'Региональная стоимость за единицу';
	var $_PHPSHOP_ZONE_LIST_COST_LIMIT_LBL = 'Лимит стоимости в регионе';
	var $_PHPSHOP_LOGIN_FIRST = 'Пожалуйста, сначала зарегистрируйтесь или авторизируйтесь на этом сайте (используйте модуль входа).<br/>Спасибо.';
	var $_PHPSHOP_STORE_FORM_TOS = 'Условия обслуживания';
	var $_PHPSHOP_AGREE_TO_TOS = 'Пожалуйста, ознакомьтесь сначала с нашими условиями обслуживания.';
	var $_PHPSHOP_I_AGREE_TO_TOS = 'Я согласен с данными условиями';
	var $_PHPSHOP_LEAVE_BLANK = '(оставьте пустым, если у вас<br />нет для этого отдельного php-файла!)';
	var $_PHPSHOP_RETURN_LOGIN = 'Уже зарегистрированы? Пожалуйста, войдите';
	var $_PHPSHOP_NEW_CUSTOMER = 'Впервые в нашем магазине? Пожалуйста, введите ваши данные';
	var $_PHPSHOP_ACC_CUSTOMER_ACCOUNT = 'Учетная запись покупателя:';
	var $_PHPSHOP_ACC_ORDER_INFO = 'Информация о заказе';
	var $_PHPSHOP_ACC_UPD_BILL = 'Здесь Вы можете изменить вашe контактную информацию.';
	var $_PHPSHOP_ACC_UPD_SHIP = 'Здесь Вы можете добавить новый адрес доставки.';
	var $_PHPSHOP_ACC_ACCOUNT_INFO = 'Информация об учетной записи';
	var $_PHPSHOP_ACC_SHIP_INFO = 'Информация о доставке';
	var $_PHPSHOP_ACC_NO_ORDERS = 'Нет заказов для отображения';
	var $_PHPSHOP_ACC_BILL_DEF = '- По-умолчанию (тот же, что и контактный)';
	var $_PHPSHOP_SHIPTO_TEXT = 'Вы можете добавить адрес доставки для вашей учетной записи. Придумайте подходящий код или обозначение для места доставки, которое Вы выберете ниже';
	var $_PHPSHOP_CONFIG = 'Глобальная конфигурация';
	var $_PHPSHOP_USERS = 'Пользователи';
	var $_PHPSHOP_IS_CC_PAYMENT = 'оплата кредитной картой?';
	var $_PHPSHOP_SHIPPING_MOD = 'Доставка';
	var $_PHPSHOP_SHIPPING_MENU_LABEL = 'Варианты доставки';
	var $_PHPSHOP_CARRIER_LIST_MNU = 'Варианты доставки';
	var $_PHPSHOP_CARRIER_LIST_LBL = 'Список вариантов доставки';
	var $_PHPSHOP_RATE_LIST_MNU = 'Тарифы доставки';
	var $_PHPSHOP_RATE_LIST_LBL = 'Список тарифов доставки';
	var $_PHPSHOP_CARRIER_LIST_NAME_LBL = 'Название';
	var $_PHPSHOP_CARRIER_LIST_ORDER_LBL = 'Порядок отображения';
	var $_PHPSHOP_CARRIER_FORM_MNU = 'Добавить вариант доставки';
	var $_PHPSHOP_CARRIER_FORM_LBL = 'Добавить/изменить вариант доставки';
	var $_PHPSHOP_RATE_FORM_MNU = 'Добавить тариф доставки';
	var $_PHPSHOP_RATE_FORM_LBL = 'Добавить/Изменить тариф доставки';
	var $_PHPSHOP_RATE_FORM_NAME = 'Описание тарифа доставки';
	var $_PHPSHOP_RATE_FORM_CARRIER = 'Вариант доставки';
	var $_PHPSHOP_RATE_FORM_COUNTRY = 'Страна';
	var $_PHPSHOP_RATE_FORM_ZIP_START = 'Начало диапазона почтовых индексов';
	var $_PHPSHOP_RATE_FORM_ZIP_END = 'Конец диапазона почтовых индексов';
	var $_PHPSHOP_RATE_FORM_WEIGHT_START = 'Минимальный вес';
	var $_PHPSHOP_RATE_FORM_WEIGHT_END = 'Максимальный вес';
	var $_PHPSHOP_RATE_FORM_VALUE = 'Стоимость доставки';
	var $_PHPSHOP_RATE_FORM_PACKAGE_FEE = 'Стоимость упаковки';
	var $_PHPSHOP_RATE_FORM_CURRENCY = 'Валюта';
	var $_PHPSHOP_RATE_FORM_VAT_ID = 'Ставка НДС';
	var $_PHPSHOP_RATE_FORM_LIST_ORDER = 'Порядок отображения';
	var $_PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL = 'Вариант доставки';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME = 'Описание тарифа доставки';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART = 'Вес от ...';
	var $_PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND = '... до';
	var $_PHPSHOP_CARRIER_FORM_NAME = 'Компания-доставки';
	var $_PHPSHOP_CARRIER_FORM_LIST_ORDER = 'Порядок отображения';
	var $_PHPSHOP_ERR_MSG_CARRIER_EXIST = 'ОШИБКА: Вариант доставки с таким идентификатором уже существует.';
	var $_PHPSHOP_ERR_MSG_CARRIER_ID_REQ = 'ОШИБКА: Выберите вариант доставки.';
	var $_PHPSHOP_ERR_MSG_CARRIER_INUSE = 'ОШИБКА: У данного варианта доставки есть тарифы доставки. Пожалуйста, удалите их сначала';
	var $_PHPSHOP_ERR_MSG_CARRIER_NOTFOUND = 'ОШИБКА: Невозможно найти вариант доставки этим идентификатором.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_REQ = 'ОШИБКА: Выберите вариант доставки.';
	var $_PHPSHOP_ERR_MSG_RATE_CARRIER_ID_INV = 'ОШИБКА: Невозможно найти вариант доставки этим идентификатором.';
	var $_PHPSHOP_ERR_MSG_RATE_NAME_REQ = 'ОШИБКА: Не указано описание тарифа доставки.';
	var $_PHPSHOP_ERR_MSG_RATE_COUNTRY_CODE_INV = 'ОШИБКА: Неверно указана страна назначения. Несколько стран могут быть разделены знаком ";".';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_START_REQ = 'ОШИБКА: Не указан минимальный вес.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_END_REQ = 'ОШИБКА: Не указан максимальный вес.';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_STARTEND_INV = 'ОШИБКА: Минимальный вес должен быть меньше, чем максимальный';
	var $_PHPSHOP_ERR_MSG_RATE_WEIGHT_VALUE_REQ = 'ОШИБКА: Не указана стоимость доставки';
	var $_PHPSHOP_ERR_MSG_RATE_CURRENCY_ID_INV = 'ОШИБКА: Не выбрана валюта';
	var $_PHPSHOP_ERR_MSG_RATE_ID_REQ = 'ОШИБКА: Не указан тариф доставки';
	var $_PHPSHOP_INFO_MSG_PLEASE_SELECT = 'Пожалуйста, выберите';
	var $_PHPSHOP_INFO_MSG_CARRIER = 'Вариант доставки';
	var $_PHPSHOP_INFO_MSG_SHIPPING_METHOD = 'Тариф доставки';
	var $_PHPSHOP_INFO_MSG_SHIPPING_PRICE = 'Цена';
	var $_PHPSHOP_INFO_MSG_VAT_ZERO_LBL = '0 (-нет-)';
	var $_PHPSHOP_PAYMENT_FORM_CC = 'Кредитная карта';
	var $_PHPSHOP_PAYMENT_FORM_USE_PP = 'Использовать платёжный процессор';
	var $_PHPSHOP_PAYMENT_FORM_BANK_DEBIT = 'Банковский дебет';
	var $_PHPSHOP_PAYMENT_FORM_AO = 'Доставка по адресу (оплата наличными при получении)';
	var $_PHPSHOP_CHECKOUT_MSG_2 = 'Пожалуйста, выберите адрес доставки!';
	var $_PHPSHOP_CHECKOUT_MSG_3 = 'Пожалуйста, выберите вариант доставки!';
	var $_PHPSHOP_CHECKOUT_MSG_4 = 'Пожалуйста, выберите способ оплаты!';
	var $_PHPSHOP_CHECKOUT_MSG_99 = 'Пожалуйста, проверьте введенные данные и подтвердите заказ!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIP = 'Пожалуйста, выберите вариант доставки.';
	var $_PHPSHOP_CHECKOUT_ERR_OTHER_SHIP = 'Пожалуйста, выберите другой вариант доставки.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_PAYM = 'Пожалуйста, выберите способ оплаты.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR = 'Пожалуйста, введите номер кредитной карты.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNAME = 'Держатель карты (вводится латинскими буквами, как написано на карте).';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATE = 'Введенный номер кредитной карты неверен.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCMON = 'Пожалуйста, введите месяц окончания действия кредитной карты.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCYEAR = 'Пожалуйста, введите год окончания действия кредитной карты.';
	var $_PHPSHOP_CHECKOUT_ERR_CCDATE_INV = 'Дата окончания действия кредитной карты недопустима.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_SHIPTO = 'Пожалуйста, выберите адрес доставки.';
	var $_PHPSHOP_CHECKOUT_ERR_CCNUM_INV = 'Неверный номер счёта.';
	var $_PHPSHOP_CHECKOUT_ERR_EMPTY_CART = 'Ваша корзина пуста!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CARR = 'ОШИБКА: Пожалуйста, выберите вариант доставки!';
	var $_PHPSHOP_CHECKOUT_ERR_RATE_NOT_FOUND = 'ОШИБКА: Не найден выбранный тариф доставки!';
	var $_PHPSHOP_CHECKOUT_ERR_SHIPTO_NOT_FOUND = 'ОШИБКА: Не найден адрес доставки!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCDATA = 'ОШИБКА: Нет данных крединой карты...';
	var $_PHPSHOP_CHECKOUT_ERR_NO_CCNR_FOUND = 'ОШИБКА: Номер кредитной карты не найден!';
	var $_PHPSHOP_CHECKOUT_ERR_TEST = 'Извините, введенный номер кредитной карты является тестовым!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_USER_DATA = 'Идентификатор пользователя не был найден в базе данных!';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_HOLDER_NAME = 'Вы не указали имя владельца банковского счета.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_IBAN = 'Вы не указали БИК банка.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BA_NUM = 'Вы не указали номер расчетного счета.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_SORT = 'Вы не указали ИНН банка.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_BANK_NAME = 'Вы не указали название банка.';
	var $_PHPSHOP_CHECKOUT_ERR_NO_VALID_STEP = 'Для оплаты необходима корректная процедура!';
	var $_PHPSHOP_CHECKOUT_MSG_LOG = 'Информация для оплаты получена и сохранена для дальнейшей обработки.<br />';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV = 'Сумма заказа меньше минимально допустимой.';
	var $_PHPSHOP_CHECKOUT_ERR_MIN_POV2 = 'Минимальная сумма заказа:';
	var $_PHPSHOP_CHECKOUT_PAYMENT_CC = 'Оплата кредитной картой';
	var $_PHPSHOP_CHECKOUT_PAYMENT_OTHER = 'Cпособы оплаты';
	var $_PHPSHOP_CHECKOUT_PAYMENT_SELECT = 'Пожалуйста, выберите способ оплаты:';
	var $_PHPSHOP_STORE_FORM_MPOV = 'Минимальная сумма заказа';
	var $_PHPSHOP_ACCOUNT_BANK_TITLE = 'Информация о банковском счёте';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_NR = 'Номер расчетного счета';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_SORT_CODE = 'ИНН банка';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_NAME = 'Название банка';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_IBAN = 'БИК';
	var $_PHPSHOP_ACCOUNT_LBL_BANK_ACCOUNT_HOLDER = 'Владелец банковского счета';
	var $_PHPSHOP_MODULES = 'Модули';
	var $_PHPSHOP_FUNCTIONS = 'Функции';
	var $_PHPSHOP_SPECIAL_PRODUCTS = 'Специальное предложение';
	var $_PHPSHOP_CHECKOUT_CUSTOMER_NOTE = 'При желании, Вы можете оставить комментарий к заказу';
	var $_PHPSHOP_ORDER_PRINT_CUSTOMER_NOTE = 'Комментарий покупателя';
	var $_PHPSHOP_INCLUDING_TAX = '(учитывая налоги $tax % )';
	var $_PHPSHOP_PLEASE_SEL_ITEM = 'Пожалуйста, выберите позицию';
	var $_PHPSHOP_PRODUCT_FORM_ITEM_LBL = 'Позиция';
	var $_PHPSHOP_DOWNLOADS_TITLE = 'Раздел закачек';
	var $_PHPSHOP_DOWNLOADS_START = 'Скачать';
	var $_PHPSHOP_DOWNLOADS_INFO = 'Пожалуйста, введите идентификатор закачки, который Вы получили по e-mail и нажмите \'Скачать\'.';
	var $_PHPSHOP_DOWNLOADS_ERR_EXP = 'Извините, но срок действия для закачки Вашего файла истёк';
	var $_PHPSHOP_DOWNLOADS_ERR_MAX = 'Извините, но Вы скачали максимально разрешённое количество раз';
	var $_PHPSHOP_DOWNLOADS_ERR_INV = 'Неверный идентификатор закачки!';
	var $_PHPSHOP_DOWNLOADS_ERR_SEND = 'Невозможно отправить сообщение для ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG = 'Сообщение было отправлено для';
	var $_PHPSHOP_DOWNLOADS_SEND_SUBJ = 'Информация о закачке';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_1 = 'файл(ы), которые Вы купили, готовы для скачивания';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_2 = 'Пожалуйста, введите следующий(ие) идентификатор(ы) в разделе закачек: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_3 = 'Максимальное количество скачиваний для каждого файла: ';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_4 = 'Скачивать в течение {expire} дней после первого скачивания';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_5 = 'Если у вас возникли вопросы, то пишите:';
	var $_PHPSHOP_DOWNLOADS_SEND_MSG_6 = 'Информация о скачивании для';
	var $_PHPSHOP_PRODUCT_FORM_DOWNLOADABLE = 'Скачиваемый товар?';
	var $_PHPSHOP_PAYPAL_THANKYOU = 'Благодарим за оплату. 
         Операция прошла успешно. Вы получите подтверждение по e-mail об оплате через PayPal. 
         Вы можете продолжить или пройти на <a href=http://www.paypal.com>www.paypal.com</a>, чтобы увидеть подробности операции.';
	var $_PHPSHOP_PAYPAL_ERROR = 'При обработке операции произошла ошибка. Статус Вашего заказа не изменился.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER1 = 'Спасибо за покупки в нашем магазине. Информация о Вашем заказе представлена ниже.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER2 = 'Спасибо за то, что являетесь нашим постоянным клиентом.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER3 = 'Если у вас возникли вопросы, то пишите:';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER4 = 'Получен следующий заказ.';
	var $_PHPSHOP_CHECKOUT_EMAIL_SHOPPER_HEADER5 = 'Чтобы просмотреть заказ, проследуйте по ссылке ниже.';
	var $_PHPSHOP_CART_ERROR_NO_NEGATIVE = 'Отрицательное количество не допустимо.';
	var $_PHPSHOP_CART_ERROR_NO_VALID_QUANTITY = 'Пожалуйста, введите допустимое значение для этой позиции.';
	var $_PHPSHOP_CART_STOCK_1 = 'Выбранное значение превышает количество товаров на складе. ';
	var $_PHPSHOP_CART_STOCK_2 = 'В настоящее время доступно $product_in_stock единиц товара. ';
	var $_PHPSHOP_CART_STOCK_3 = 'Щёлкнув здесь, Вы можете оставить заявку на товар.';
	var $_PHPSHOP_CART_SELECT_ITEM = 'Для того, чтобы добавить этот товар в Вашу корзину Вы должны выбрать свойства товара на странице с его описанием.';
	var $_PHPSHOP_REGISTRATION_FORM_NONE = 'нет';
	var $_PHPSHOP_REGISTRATION_FORM_MR = 'Г-н';
	var $_PHPSHOP_REGISTRATION_FORM_MRS = 'Г-жа';
	var $_PHPSHOP_REGISTRATION_FORM_DR = 'Доктор';
	var $_PHPSHOP_REGISTRATION_FORM_PROF = 'Профессор.';
	var $_PHPSHOP_DEFAULT = 'По-умолчанию';
	var $_PHPSHOP_AFFILIATE_MOD = 'Администрирование партнерской программы';
	var $_PHPSHOP_AFFILIATE_LIST_MNU = 'Список партнёров';
	var $_PHPSHOP_AFFILIATE_LIST_LBL = 'Список партнёров';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME = 'Название партнёра';
	var $_PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE = 'Активен';
	var $_PHPSHOP_AFFILIATE_LIST_RATE = 'Ставка';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL = 'Итог за месяц';
	var $_PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION = 'Комиссионные за месяц';
	var $_PHPSHOP_AFFILIATE_LIST_ORDERS = 'Порядок отображения';
	var $_PHPSHOP_AFFILIATE_EMAIL_MNU = 'E-mail партнеров';
	var $_PHPSHOP_AFFILIATE_EMAIL_LBL = 'E-mail партнеров';
	var $_PHPSHOP_AFFILIATE_EMAIL_WHO = 'Кому отправить e-mail(* = Всем)';
	var $_PHPSHOP_AFFILIATE_EMAIL_CONTENT = 'Ваш e-mail';
	var $_PHPSHOP_AFFILIATE_EMAIL_SUBJECT = 'Тема';
	var $_PHPSHOP_AFFILIATE_EMAIL_STATS = 'Включая текущую статистику';
	var $_PHPSHOP_AFFILIATE_FORM_RATE = 'Комиссионная ставка (проценты)';
	var $_PHPSHOP_AFFILIATE_FORM_ACTIVE = 'Активен?';
	var $_PHPSHOP_DELIVERY_TIME = 'Обычно отгружается в течение';
	var $_PHPSHOP_DELIVERY_INFORMATION = 'Информация о доставке';
	var $_PHPSHOP_MORE_CATEGORIES = 'Еще категории';
	var $_PHPSHOP_AVAILABILITY = 'Доступен';
	var $_PHPSHOP_CURRENTLY_NOT_AVAILABLE = 'Этого товара сейчас нет в наличии.';
	var $_PHPSHOP_PRODUCT_AVAILABLE_AGAIN = 'Ожидается поступление этого товара: ';
	var $_PHPSHOP_STATISTIC_SUMMARY = 'Панель управления';
	var $_PHPSHOP_STATISTIC_STATISTICS = 'Статистика';
	var $_PHPSHOP_STATISTIC_CUSTOMERS = 'Покупатели';
	var $_PHPSHOP_STATISTIC_ACTIVE_PRODUCTS = 'Активные товары';
	var $_PHPSHOP_STATISTIC_INACTIVE_PRODUCTS = 'Неактивные товары';
	var $_PHPSHOP_STATISTIC_SUM = 'Всего';
	var $_PHPSHOP_STATISTIC_NEW_ORDERS = 'Новые заказы';
	var $_PHPSHOP_STATISTIC_NEW_CUSTOMERS = 'Новые покупатели';
	var $_PHPSHOP_WAITING_LIST_MESSAGE = 'Пожалуйста, оставьте свой e-mail, чтобы мы известили Вас, когда этот товар снова появится на складе. 
                                         Мы не будем продавать, передавать третьим лицам или другим способом использовать Ваш e-mail, кроме как для 
                                         уведомления о том, что товар снова поступил на склад.<br /><br />Спасибо!';
	var $_PHPSHOP_WAITING_LIST_THANKS = 'Спасибо за ожидание! <br />Мы сообщим Вам о появлении товара, как только он поступит на склад.';
	var $_PHPSHOP_WAITING_LIST_NOTIFY_ME = 'Уведомить!';
	var $_PHPSHOP_CHECK_OUT_THANK_YOU_PRINT_VIEW = 'Вид для печати';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZE_OR_CYBERCASH = 'Пожалуйста, выберите Authorize.net или CyberCash';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS = ' Статус файла конфигурации:';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_WRITEABLE = 'доступен для записи';
	var $_PHPSHOP_ADMIN_CFG_FILE_STATUS_UNWRITEABLE = 'недоступен для записи';
	var $_PHPSHOP_ADMIN_CFG_GLOBAL = 'Глобальные настройки';
	var $_PHPSHOP_ADMIN_CFG_PATHANDURL = 'Путь & URL';
	var $_PHPSHOP_ADMIN_CFG_SITE = 'Сайт';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING = 'Доставка';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT = 'Оформление заказа';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADABLEGOODS = 'Скачивание';
	var $_PHPSHOP_ADMIN_CFG_PAYEMENTOPTIONS = 'Оплата';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE = 'Использовать только как каталог';
	var $_PHPSHOP_ADMIN_CFG_USE_ONLY_AS_CATALOGUE_EXPLAIN = 'Если отмечено, то магазин будет работать <b>только как каталог</b>. При этом все функциональные возможности корзины будут отключены.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES = 'Показывать цены';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX = 'Цена включая налоги';
	var $_PHPSHOP_ADMIN_CFG_PRICES_INCLUDE_TAX_EXPLAIN = 'Отметьте этот пункт, чтобы показывать цены с учётом налога. Если пункт не отмечен, то цены показываются без налога.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRICES_EXPLAIN = 'Отметьте этот пункт, чтобы показывать цены. Если Вы используете магазин как каталог, Вы можете отключить отображение цен на сайте.';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX = 'Виртуальный налог';
	var $_PHPSHOP_ADMIN_CFG_VIRTUAL_TAX_EXPLAIN = 'Этот пункт определяет, облагаются ли налогом товары с нулевым весом или нет. Измените <b>ps_checkout.php->calc_order_taxable()</b>, чтобы настроить под собственные нужды данную функцию';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE = 'Способ расчёта налога:';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_SHIP = 'Основан на адресе доставки';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_VENDOR = 'Основан на адресе продавца';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EXPLAIN = 'Этот пункт определяет, какая налоговая ставка используется для расчёта налога:<br />
                                                 <ul><li>на основе региона/страны владельца магазина;</li>
                                                 <li>на основе адреса покупателя.</li>
 												<li>режим "Cтавка EC", когда налог определяется для каждого товара по отдельности, если покупатель из Евросоюза, в противном случае налог рассчитывается исходя из адреса покупателя.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE = 'Разрешить различные налоговые ставки?';
	var $_PHPSHOP_ADMIN_CFG_MULTI_TAX_RATE_EXPLAIN = 'Отметьте этот пункт, если у Вас есть товары с различной налоговой ставкой<br>(например, 10% для книг и еды, 18% для остальных товаров)';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE = 'Вычитать скидку перед добавлением налогов/доставки?';
	var $_PHPSHOP_ADMIN_CFG_REVIEW = 'Разрешить клиентам оставлять отзывы/рейтинги';
	var $_PHPSHOP_ADMIN_CFG_REVIEW_EXPLAIN = 'Отметьте этот пункт, если Вы хотите разрешить вашим клиентам <strong>оценивать товары</strong> и <strong>писать отзывы</strong> на них. <br />
                                                                                 Таким образом ваши клиенты смогут оставлять свои отзывы о товарах для других клиентов.<br />';
	var $_PHPSHOP_ADMIN_CFG_SUBSTRACT_PAYEMENT_BEFORE_EXPLAIN = 'Этот пункт определяет последовательность расчёта скидки на заказанные товары: до (пункт отмечен) или после начисления суммы налогов и суммы за доставку.';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK = 'Разрешить клиентам указывать банковские реквизиты?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_CAN_BE_BLANK_EXPLAIN = 'Отметьте этот пункт, если Вы хотите, чтобы у Ваших клиентов при регистрации, была возможность указывать свой регион.';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE = 'Разрешить выбор региона для покупателя?';
	var $_PHPSHOP_ADMIN_CFG_CAN_SELECT_STATE_EXPLAIN = 'Отметьте, если ваши покупатели смогут выбирать свой регион когда регистрируются.';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS = 'Покупатели должны соглашаться с \\"Условиями обслуживания\\"?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_EXPLAIN = 'Отметьте этот пункт, если Вы хотите, чтобы ваши клиенты соглашались с Условиями обслуживания, во время регистрации в магазине.';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK = 'Проверять наличие на складе?';
	var $_PHPSHOP_ADMIN_CFG_CHECK_STOCK_EXPLAIN = 'Отметьте этот пункт, если Вы хотите, чтобы система проверяла количество доступного товара на складе. Если Вы отметите этот пункт, то система не разрешит добавить в корзину товара больше, чем доступно на складе.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE = 'Включить партнёрскую программу?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AFFILIATE_EXPLAIN = 'Этот пункт включает слежение за партнёрской программой в магазине. Включите его, если Вы добавили партнеров через панель администрирования.';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT = 'Формат письма:';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_TEXT = 'Текст';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_HTML = 'HTML';
	var $_PHPSHOP_ADMIN_CFG_MAIL_FORMAT_EXPLAIN = 'Определяет формат письма, высылаемого покупателю при подтверждении заказа:<br />
                                                                                         <ul><li>как простой текст</li>
                                                                                         <li>или в формате html с изображениями.</li></ul>';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN = 'Разрешить администрирование через магазин (frontend) пользователям, не допущенным в панель администрирования?';
	var $_PHPSHOP_ADMIN_CFG_FRONTENDAMDIN_EXPLAIN = 'Включив эту опцию, Вы можете разрешить пользователям, не имеющим доступа к панели администрирования, администрировать магазин через магазин (frontend)(например пользователям с правами Registered / Editor).';
	var $_PHPSHOP_ADMIN_CFG_URL = 'Адрес';
	var $_PHPSHOP_ADMIN_CFG_URL_EXPLAIN = 'Адрес Вашего сайта. Обычно полностью совпадает с адресом Joomla (со слешем в конце!)';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE = 'Адрес для защищённого режима';
	var $_PHPSHOP_ADMIN_CFG_URLSECURE_EXPLAIN = 'Адрес для защищенного режима (SSL-ссылка) Вашего сайта (https со слешем в конце!)';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT = 'Ссылка на компонент';
	var $_PHPSHOP_ADMIN_CFG_URLCOMPONENT_EXPLAIN = 'Ссылка на компонент VirtueMart (со слешем в конце!)';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE = 'Адрес папки с изобржениями';
	var $_PHPSHOP_ADMIN_CFG_URLIMAGE_EXPLAIN = 'Адресс папки с изображениями для VirtueMart.(со слешем в конце!)';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH = 'Путь к панели администрирования';
	var $_PHPSHOP_ADMIN_CFG_ADMINPATH_EXPLAIN = 'Путь к папке компонента VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH = 'Путь к классам';
	var $_PHPSHOP_ADMIN_CFG_CLASSPATH_EXPLAIN = 'Путь к папке классов VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH = 'Путь к страницам представления';
	var $_PHPSHOP_ADMIN_CFG_PAGEPATH_EXPLAIN = 'Путь к папке с html-страницами VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH = 'Путь к изображениям';
	var $_PHPSHOP_ADMIN_CFG_IMAGEPATH_EXPLAIN = 'Путь к папке shop_image VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE = 'Главная страница';
	var $_PHPSHOP_ADMIN_CFG_HOMEPAGE_EXPLAIN = 'Эта страница будет загружаться по умолчанию.';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE = 'Страница для вывода ошибок';
	var $_PHPSHOP_ADMIN_CFG_ERRORPAGE_EXPLAIN = 'Страница по умолчанию, для отображения сообщений об ошибках.';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE = 'Страница для отладки';
	var $_PHPSHOP_ADMIN_CFG_DEBUGPAGE_EXPLAIN = 'Эта страница для показа отладочных сообщений по умолчанию.';
	var $_PHPSHOP_ADMIN_CFG_DEBUG = 'Включить режим отладки?';
	var $_PHPSHOP_ADMIN_CFG_DEBUG_EXPLAIN = 'Включить режим отладки. При включении данного режима, внизу каждой страницы будет выводится информация для отладки магазина. Очень полезно во время разработки и модификации магазина, так как там будет отображено содержание корзины, значение полей форм и другая информация.';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE = 'Страница товара (flypage)';
	var $_PHPSHOP_ADMIN_CFG_FLYPAGE_EXPLAIN = 'Это страница будет показывать информацию о товаре по умолчанию.';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE = 'Шаблон категории';
	var $_PHPSHOP_ADMIN_CFG_CATEGORY_TEMPLATE_EXPLAIN = 'Страница шаблона категории (по-умолчанию) для отображения товаров в категории<br />Вы можете создавать новые шаблоны, модифицируя существующие файлы шаблонов, которые находятся в папке <b>COMPONENTPATH/html/templates/</b> и начинаются с <b>browse_</b>)';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW = 'Количество товаров в строке';
	var $_PHPSHOP_ADMIN_CFG_PRODUCTS_PER_ROW_EXPLAIN = 'Этот пункт определяет количество товаров в строке.<br />Например, если Вы установите 4, шаблон категории отобразит 4 товара в строке. <b>Для корректной работы не забудьте поменять шаблон на соответствующий</b>.';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE = 'Изображение для товара без картинки';
	var $_PHPSHOP_ADMIN_CFG_NOIMAGEPAGE_EXPLAIN = 'Это изображение будет показано когда нет изображения товара.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS = 'Количество записей на странице поиска';
	var $_PHPSHOP_ADMIN_CFG_SEARCHROWS_EXPLAIN = 'Описывает, сколько возвращенных ссылок будет размещено на одной странице после поиска.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1 = 'Цвет подсветки поиска нечетных строк';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR1_EXPLAIN = 'Описывает цвет нечетных строк в списке результатов поиска.';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2 = 'Цвет подсветки поиска четных строк';
	var $_PHPSHOP_ADMIN_CFG_SEARCHCOLOR2_EXPLAIN = 'Описывает цвет четных строк в списке результатов поиска.';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS = 'Максимальное количество записей для отображения';
	var $_PHPSHOP_ADMIN_CFG_MAXIMUMROWS_EXPLAIN = 'Задает число строк, которые будут показываться в окне выбор перечня заказов';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION = 'Показывать эмблему магазина';
	var $_PHPSHOP_ADMIN_CFG_SHOWPHPSHOP_VERSION_EXPLAIN = 'Показывает картинку "Работает на RusVirtueMart" внизу страницы.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD = 'Выберите вариант доставки в вашем магазине';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_STANDARD = 'Стандартный модуль доставки с индивидуальными данными о расценках. <strong>РЕКОМЕНДУЕТСЯ !</strong>';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_ZONE = '  	Модуль регионов доставки Версия 1.0';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS = '<a href="http://www.ups.com" target="_blank">UPS Олайновые инструменты</a> Расчет доставки';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE = 'UPS код доступа';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_ACCESS_CODE_EXPLAIN = 'Ваш код доступа для UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID = 'UPS id пользователя';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_USER_ID_EXPLAIN = 'ID пользователя, которое Вы получили от UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD = 'UPS пароль';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_UPS_PASSWORD_EXPLAIN = 'Пароль для учетной записи в UPS';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER = 'Модуль InterShipper. Отметьте, если Вы имеете учетную запись <a href="http://www.intershipper.com" target="_blank">Intershipper.com</a> ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_DISABLE = 'Отключить выбор варианта доставки. Выбирается, если покупатели приобретают скачиваемый товар, который не нужно доставлять.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD = 'InterShipper пароль';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_PASSWORD_EXPLAIN = 'Ваш пароль для учетной записи в intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL = 'InterShipper e-mail';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_INTERSHIPPER_EMAIL_EXPLAIN = 'Ваш адрес e-mail для учетной записи в intershipper.';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY = 'Кодовое слово';
	var $_PHPSHOP_ADMIN_CFG_STORE_ENCODEKEY_EXPLAIN = 'Используется для хранения данных в базе с этим ключем. Это означает, что этот файл должен быть защищен от просмотра все время.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR = 'Включить баннер оформления заказа';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CHECKOUTBAR_EXPLAIN = 'Отметьте, если Вы хотите чтобы показывался покупателю \'баннер оформления заказа\' в течение процесса оформления заказа ( 1 - 2 - 3 - 4 с графикой).';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS = 'Выберите форму оформления заказа для Вашего магазина';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_STANDARD = '<strong>Стандартный :</strong><br/>
               1. Запрос адреса для доставки<br />
              2. Запрос варианта доставки<br />
              3. Запрос способа оплаты<br />
              4. Завершение оформления заказа';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_2 = '<strong>Процесс 2:</strong><br/>
               1. Запрос адреса для доставки<br />
              2. Запрос способа оплаты<br />
              3. Завершение оформления заказа';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_3 = '<strong>Процесс 3:</strong><br/>
               1. Запрос варианта доставки<br />
              2. Запрос способа оплаты<br />
              3. Завершение оформления заказа';
	var $_PHPSHOP_ADMIN_CFG_CHECKOUT_PROCESS_4 = '<strong>Процесс 4:</strong><br/>
               1. Запрос способа оплаты<br />
              2. Завершение оформления заказа';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS = 'Включить скачивание товара';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_DOWNLOADS_EXPLAIN = 'Отметьте для включения возможности скачивания товара. Только в том случае, если Вы хотите продавать скачиваемый товар.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS = 'Статус заказа на скачивание';
	var $_PHPSHOP_ADMIN_CFG_ORDER_ENABLE_DOWNLOADS_EXPLAIN = 'Выберите статус заказа, при котором будет выслано письмо покупателю с напоминанием о том, что он может скачать товар.';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS = 'Статус заказа, при котором невозможно скачивание';
	var $_PHPSHOP_ADMIN_CFG_ORDER_DISABLE_DOWNLOADS_EXPLAIN = 'Статус заказа, при котором скачивание отключено для покупателя.';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT = 'Путь к файлам для скачивания';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOADROOT_EXPLAIN = 'Путь к файлам для скачивания покупателями. (обязательно поставить слеш в конце \'/ \' !)<br>
        <span class="message">Для безопасности Вашего магазина : Если Вы можете установите директорию ЗА ПРЕДЕЛАМИ КОРНЕВОЙ ПАПКИ ВЕБСЕРВЕРА</span>';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX = 'Макс. кол-во скачиваний';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_MAX_EXPLAIN = 'Устанавливает количество скачиваний, которое можно сделать на одно ID скачивания, (для одного заказа)';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE = 'Интервал для скачивания';
	var $_PHPSHOP_ADMIN_CFG_DOWNLOAD_EXPIRE_EXPLAIN = 'Устанавливает интервал <strong>в секундах</strong>, в котором скачивание возможно для покупателя. 
  Этот  интервал начинает отсчитываться после первого скачиваия! Когда временной интервал истек, ID скачивания отключается.<br />Заметьте : 86400сек=24ч.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL = 'Включить IPN оплату через PayPal?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYPAL_EXPLAIN = 'Отметьте для того, чтобы ваши покупатели имели возможность оплачивать через PayPal.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL = 'PayPal e-mail:';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_EMAIL_EXPLAIN = 'Ваш почтовый адрес для получения денег через PayPal. Также используется как receiver_email.';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS = 'Статус заказа после успешного завершения платежа';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_SUCCESS_EXPLAIN = 'Выберите статус заказ для установки, если платеж прошел через PayPal IPN. Если используете функцию скачивания товара: 
  выберите статус, который включает возможность скачивания этого товара (при этом покупателю приходит письмо о том, что товар доступен для скачивания).';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED = 'Статус заказа для непоступивших оплат черз PayPal';
	var $_PHPSHOP_ADMIN_CFG_PAYPAL_STATUS_FAILED_EXPLAIN = 'Выберите статус заказа для проваленных оплат через PayPal.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE = 'Включить оплату через PayMate?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PAYMATE_EXPLAIN = 'Активируйте для того, чтобы разрешить покупателям использовать Австралийскую систему платежей PayMate.';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME = 'PayMate пользователь:';
	var $_PHPSHOP_ADMIN_CFG_PAYMATE_USERNAME_EXPLAIN = 'Ваша учетная запись для PayMate.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET = 'Включить оплату Authorize.net?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_EXPLAIN = 'Активируйте для использования Authorize.net в VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE = 'Тестовый режим ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_AUTORIZENET_TESTMODE_EXPLAIN = 'Выберите \'Да\' если тестируете. Выберите \'Нет\' для включения настоящих денежных операций.';
	var $_PHPSHOP_ADMIN_CFG_YES = 'Да';
	var $_PHPSHOP_ADMIN_CFG_NO = 'Нет';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME = 'Login ID для Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_USERNAME_EXPLAIN = 'Ваш Login ID для Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY = 'Ключ транзакции для Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_KEY_EXPLAIN = 'Ваш ключ транзакции для Authorize.net';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE = 'Тип авторизации';
	var $_PHPSHOP_ADMIN_CFG_AUTORIZENET_AUTENTICATIONTYPE_EXPLAIN = 'Это тип авторзиации на Authorize.Net.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH = 'Включить CyberCash?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_CYBERCASH_EXPLAIN = 'Активируйте для использования CyberCash в VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND = 'CyberCash MERCHANT';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_EXPLAIN = 'CC_MERCHANT - это ваш ID на CyberCash ';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY = 'CyberCash Merchant Key';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_MERCHAND_KEY_EXPLAIN = 'CyberCash Merchant Key - это ключ с CyberCash';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL = 'CyberCash URL для проведения платежа';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_URL_EXPLAIN = 'CyberCash URL для проведения платежа - это URL, предоставленный Cybercash для безопасной оплаты';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE = 'CyberCash AUTH TYPE';
	var $_PHPSHOP_ADMIN_CFG_CYBERCASH_AUTENTICATIONTYPE_EXPLAIN = 'CyberCash AUTH TYPE это тип авторизации для Cybercash';
	var $_PHPSHOP_ADVANCED_SEARCH = 'Поиск';
	var $_PHPSHOP_SEARCH_ALL_CATEGORIES = 'Поиск во все категоиях';
	var $_PHPSHOP_SEARCH_ALL_PRODINFO = 'Поиск в информации о товаре';
	var $_PHPSHOP_SEARCH_PRODNAME = 'Только в наименовании товара';
	var $_PHPSHOP_SEARCH_MANU_VENDOR = 'Только в Производителях/Продавцах';
	var $_PHPSHOP_SEARCH_DESCRIPTION = 'Только в описании товара';
	var $_PHPSHOP_SEARCH_AND = 'и';
	var $_PHPSHOP_SEARCH_NOT = 'не';
	var $_PHPSHOP_SEARCH_TEXT1 = 'Первый выпадающий список позволяет Вам выбрать категорию для ограничения результатов поиска. 
        Второй выпадающий список позволяет Вам искать товар по свойствам, например, только по наименованию. 
        Вы можете выбрать одно свойство (или оставить по умолчанию ВСЕ), и ввести слово, которое Вы ищите. ';
	var $_PHPSHOP_SEARCH_TEXT2 = ' Вы можете заново осуществить поиск путем добавления второго слова и выбора оператора И или НЕ. 
        При выборе оператора И, в результаты включатся слова, в которых присутствуют все заданные слова. 
        При выборе НЕ, в результаты включатся слова, в которых присутствует первое слово и отсутствует второе.';
	var $_PHPSHOP_ORDERBY = 'Сортировать по';
	var $_PHPSHOP_CUSTOMER_RATING = 'Рейтинг товара';
	var $_PHPSHOP_TOTAL_VOTES = 'Голосов';
	var $_PHPSHOP_CAST_VOTE = 'Пожалуйста, проголосуйте';
	var $_PHPSHOP_RATE_BUTTON = 'Оценить';
	var $_PHPSHOP_RATE_NOM = 'Рейтинг';
	var $_PHPSHOP_REVIEWS = 'Мнения  покупателей';
	var $_PHPSHOP_NO_REVIEWS = 'Нет оставленных мнений об этом товаре.';
	var $_PHPSHOP_WRITE_FIRST_REVIEW = 'Стать первым, кто оставил свое мнение...';
	var $_PHPSHOP_REVIEW_LOGIN = 'Пожалуйста, войдите, чтобы оставить свое мнение.';
	var $_PHPSHOP_REVIEW_ERR_RATE = 'Пожалуйста, проголосуйте за этот товар чтобы полностью выразить свое мнение!';
	var $_PHPSHOP_REVIEW_ERR_COMMENT1 = 'Пожалуйста, добавьте несколько слов в ваш текст Вашего мнения. Он должен содержать минимум 100 знаков.';
	var $_PHPSHOP_REVIEW_ERR_COMMENT2 = 'Пожалуйста, уменьшите текст мнения. Он должен содержать максимум 2000 знаков';
	var $_PHPSHOP_WRITE_REVIEW = 'Написать свое мнение об этом товаре!';
	var $_PHPSHOP_REVIEW_RATE = 'Первое: проголосуйте за этот товар. Пожалуйста, выберите оценку от 0 (плохо) до 5 (отлично).';
	var $_PHPSHOP_REVIEW_COMMENT = 'Теперь можете написать свое мнение о товаре....(мин. 100, макс. 2000 знаков) ';
	var $_PHPSHOP_REVIEW_COUNT = 'Введено знаков: ';
	var $_PHPSHOP_REVIEW_SUBMIT = 'Отправить мнение';
	var $_PHPSHOP_REVIEW_ALREADYDONE = 'Вы уже написали мнение для этого товара. Спасибо!';
	var $_PHPSHOP_REVIEW_THANKYOU = 'Спасибо за Ваше мнение!';
	var $_PHPSHOP_COMMENT = 'Комментарий';
	var $_PHPSHOP_CREDITCARD_FORM_LBL = 'Добавить/Изменить типы кредитных карт';
	var $_PHPSHOP_CREDITCARD_NAME = 'Название кредитной карты';
	var $_PHPSHOP_CREDITCARD_CODE = 'Кредитная карта - короткий код';
	var $_PHPSHOP_CREDITCARD_TYPE = 'Тип кредитной карты';
	var $_PHPSHOP_CREDITCARD_LIST_LBL = 'Список кредитных карт';
	var $_PHPSHOP_UDATE_ADDRESS = 'Изменить адрес';
	var $_PHPSHOP_CONTINUE_SHOPPING = 'Продолжить покупки';
	var $_PHPSHOP_THANKYOU_SUCCESS = 'Ваш заказ принят!';
	var $_PHPSHOP_ORDER_LINK = 'Ниже ссылка для того, чтобы посмотреть информацию о заказе.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_1 = 'Статус Вашего заказа No. {order_id} был изменен.';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_2 = 'Новый статус:';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_MSG_3 = 'Для просмотра информации о заказе, пожалуйста, пройдите по этой ссылке(или скопируйте её в адрессную строку Вашего браузер):';
	var $_PHPSHOP_ORDER_STATUS_CHANGE_SEND_SUBJ = 'Статус заказа изменен: Ваш заказ {order_id}';
	var $_PHPSHOP_ORDER_LIST_NOTIFY = 'Напомнить покупателю?';
	var $_PHPSHOP_ORDER_LIST_NOTIFY_ERR = 'Пожалуйста, сначала измените статус заказа!';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT = 'Скидка для группы по-умолчанию (в %)';
	var $_PHPSHOP_SHOPPER_GROUP_FORM_DISCOUNT_TIP = 'Положительное значение Х означает: если товару не назначена цена для этой группы покупателей, то цена по-умолчанию уменьшается на Х%. Отрицательное значение имеет противоположный эффект.';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LBL = 'Скидки на товары';
	var $_PHPSHOP_PRODUCT_DISCOUNT_LIST_LBL = 'Список скидок на товары';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDEDIT = 'Добавить/Редактировать скидку';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT = 'Введите величину скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNT_TIP = 'Укажите величину скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_AMOUNTTYPE = 'Тип скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT = 'Относительная (%)';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISTOTAL = 'Абсолютная';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ISPERCENT_TIP = 'Будет относительная или абсолютная?';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE = 'Начало действия скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP = 'Описывает дату начала действия скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE = 'Конец действия скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP = 'Описывает дату окончания действия скидки';
	var $_PHPSHOP_PRODUCT_DISCOUNT_ADDDISCOUNT_TIP = 'Вы можете использовать форму скидок на товар для добавления скидок!';
	var $_PHPSHOP_PRODUCT_DISCOUNT_SAVE = 'Сохранить';
	var $_PHPSHOP_FLYPAGE_ENLARGE_IMAGE = 'Увеличить';
	var $_PHPSHOP_CURRENCY_DISPLAY = 'Стиль отображения валюты';
	var $_PHPSHOP_CURRENCY_SYMBOL = 'Символ валюты';
	var $_PHPSHOP_CURRENCY_SYMBOL_TOOLTIP = 'Вы также можете использовать HTML замены здесь (например &nbps;...)';
	var $_PHPSHOP_CURRENCY_DECIMALS = 'Количество разрядов';
	var $_PHPSHOP_CURRENCY_DECIMALS_TOOLTIP = 'Количество показываемых разрядов после запятой (может быть равным 0)<br><b>Выполняет округление если значение имеет больше количество знаков</b>';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL = 'Десятичный разделитель';
	var $_PHPSHOP_CURRENCY_DECIMALSYMBOL_TOOLTIP = 'Знак используемый для разделения целой и дробной части';
	var $_PHPSHOP_CURRENCY_THOUSANDS = 'Разделитель тысяч';
	var $_PHPSHOP_CURRENCY_THOUSANDS_TOOLTIP = 'Знак используемый для разделения тысяч(может быть пустым)';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY = 'Формат положительного значения';
	var $_PHPSHOP_CURRENCY_POSITIVE_DISPLAY_TOOLTIP = 'Показывает формат, используемый для показа положительных значений.<br>(Символ заменяет знак валюты)';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY = 'Формат отрицательного значения';
	var $_PHPSHOP_CURRENCY_NEGATIVE_DISPLAY_TOOLTIP = 'Показывает формат, используемый для показа положительных значений.<br>(Символ заменяет знак валюты)';
	var $_PHPSHOP_OTHER_LISTS = 'Списки остальных товаров';
	var $_PHPSHOP_MORE_IMAGES = 'Просмотр дополнительных изображений';
	var $_PHPSHOP_AVAILABLE_IMAGES = 'Доступные изображения для';
	var $_PHPSHOP_BACK_TO_DETAILS = 'Назад к описанию товара';
	var $_PHPSHOP_FILEMANAGER = 'Управление файлами';
	var $_PHPSHOP_FILEMANAGER_LIST = 'Управление файлами::Список товаров';
	var $_PHPSHOP_FILEMANAGER_ADD = 'Добавить Изображение/Файл';
	var $_PHPSHOP_FILEMANAGER_IMAGES = 'Присоединенные изображения';
	var $_PHPSHOP_FILEMANAGER_DOWNLOADABLE = 'Для скачивания?';
	var $_PHPSHOP_FILEMANAGER_FILES = 'Присоединенные файлы (Таблицы данных,...)';
	var $_PHPSHOP_FILEMANAGER_PUBLISHED = 'Опубликован?';
	var $_PHPSHOP_FILES_LIST = 'Менеджер файлов: список изображений/файлов для';
	var $_PHPSHOP_FILES_LIST_FILENAME = 'Имя файла';
	var $_PHPSHOP_FILES_LIST_FILETITLE = 'Название файла';
	var $_PHPSHOP_FILES_LIST_FILETYPE = 'Тип файла';
	var $_PHPSHOP_FILES_LIST_EDITFILE = 'Изменить запись файла';
	var $_PHPSHOP_FILES_LIST_FULL_IMG = 'Полное изображение';
	var $_PHPSHOP_FILES_LIST_THUMBNAIL_IMG = 'Уменьшеное изображение';
	var $_PHPSHOP_FILES_FORM = 'Загрузить файл для';
	var $_PHPSHOP_FILES_FORM_CURRENT_FILE = 'Текущий файл';
	var $_PHPSHOP_FILES_FORM_FILE = 'Файл';
	var $_PHPSHOP_FILES_FORM_IMAGE = 'Изображение';
	var $_PHPSHOP_FILES_FORM_UPLOAD_TO = 'Загрузить в';
	var $_PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH = 'Путь к изображениям товаров по умолчанию';
	var $_PHPSHOP_FILES_FORM_UPLOAD_OWNPATH = 'Определить положение файла';
	var $_PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH = 'Путь для скачивания (для продажи скачиваемых товаров!)';
	var $_PHPSHOP_FILES_FORM_AUTO_THUMBNAIL = 'Автоматически создавать уменьшенные изображения?';
	var $_PHPSHOP_FILES_FORM_FILE_PUBLISHED = 'Файл опубликован?';
	var $_PHPSHOP_FILES_FORM_FILE_TITLE = 'Заголовок файла (то, что будет видеть покупатель)';
	var $_PHPSHOP_FILES_FORM_FILE_DESC = 'Описание файла';
	var $_PHPSHOP_FILES_FORM_FILE_URL = 'URL файла (не обязательно)';
	var $_PHPSHOP_FILES_PATH_ERROR = 'Пожалуйста, введите правильный путь!';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_SUCCESS = 'Создание уменьшенного изображения было завершено !';
	var $_PHPSHOP_FILES_IMAGE_RESIZE_FAILURE = 'Невозможно создать уменьшенное изображение!';
	var $_PHPSHOP_FILES_UPLOAD_FAILURE = 'Ошибка при загрузке Файла/Изображения';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_FAILURE = 'Невозможно удалить полное изображение.';
	var $_PHPSHOP_FILES_FULLIMG_DELETE_SUCCESS = 'Полное изображение было успешно удалено.';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_FAILURE = 'Невозможно удалить уменьшенное изображение (возможно отсутвует): ';
	var $_PHPSHOP_FILES_THUMBIMG_DELETE_SUCCESS = 'Уменьшенное изображение было успешно удалено.';
	var $_PHPSHOP_FILES_FILE_DELETE_FAILURE = 'Не могу удалить файл.';
	var $_PHPSHOP_FILES_FILE_DELETE_SUCCESS = 'Файл успешно удален.';
	var $_PHPSHOP_FILES_NOT_FOUND = 'Извините, но запрашиваемый файл не был найден!';
	var $_PHPSHOP_IMAGE_NOT_FOUND = 'Изображение не найдено!';
	var $_PHPSHOP_COUPON_MOD = 'Купоны';
	var $_PHPSHOP_COUPONS = 'Купоны';
	var $_PHPSHOP_COUPON_LIST = 'Перечень купонов';
	var $_PHPSHOP_COUPON_ALREADY_REDEEMED = 'Купон уже был использован.';
	var $_PHPSHOP_COUPON_REDEEMED = 'Купон использован! Большое спасибо.';
	var $_PHPSHOP_COUPON_ENTER_HERE = 'Если у Вас есть код купона, пожалуйста введите его ниже:';
	var $_PHPSHOP_COUPON_SUBMIT_BUTTON = 'Отправить';
	var $_PHPSHOP_COUPON_CODE_EXISTS = 'Этот код для купона уже существует. Пожалуйста, попробуйте снова.';
	var $_PHPSHOP_COUPON_EDIT_HEADER = 'Изменить купон';
	var $_PHPSHOP_COUPON_EDIT_HELP_TEXT = 'Щелкните на код купона для его редактирования. Для того, чтобы удалить выделите его и нажмите [Удалить] :';
	var $_PHPSHOP_COUPON_CODE_HEADER = 'Код';
	var $_PHPSHOP_COUPON_PERCENT_TOTAL = 'Процент или Сумма';
	var $_PHPSHOP_COUPON_TYPE = 'Тип купона';
	var $_PHPSHOP_COUPON_TYPE_TOOLTIP = 'Подарочный Купон будет удален после его использования, постоянный купон может использоваться все время.';
	var $_PHPSHOP_COUPON_TYPE_GIFT = 'Подарочный купон';
	var $_PHPSHOP_COUPON_TYPE_PERMANENT = 'Постоянный купон';
	var $_PHPSHOP_COUPON_VALUE_HEADER = 'Значение';
	var $_PHPSHOP_COUPON_DELETE_BUTTON = 'Удалить код';
	var $_PHPSHOP_COUPON_CONFIRM_DELETE = 'Вы уверены, что хотите удалить этот код купона?';
	var $_PHPSHOP_COUPON_COMPLETE_ALL_FIELDS = 'Пожалуйста, заполните все поля формы.';
	var $_PHPSHOP_COUPON_VALUE_NOT_NUMBER = 'Значение купона должно быть числом.';
	var $_PHPSHOP_COUPON_NEW_HEADER = 'Новый купон';
	var $_PHPSHOP_COUPON_COUPON_HEADER = 'Код купона';
	var $_PHPSHOP_COUPON_PERCENT = 'Процент';
	var $_PHPSHOP_COUPON_TOTAL = 'Сумма';
	var $_PHPSHOP_COUPON_VALUE = 'Значение';
	var $_PHPSHOP_COUPON_CODE_SAVED = 'Код купона сохранен.';
	var $_PHPSHOP_COUPON_SAVE_BUTTON = 'Сохранить купон';
	var $_PHPSHOP_COUPON_DISCOUNT = 'Купон на скидку';
	var $_PHPSHOP_COUPON_CODE_INVALID = 'Код купона не найден. Пожалуйста, попробуйте снова.';
	var $_PHPSHOP_COUPONS_ENABLE = 'Включить использование купонов';
	var $_PHPSHOP_COUPONS_ENABLE_EXPLAIN = 'Если Вы включите Использование купонов, Вы позволите покупателям вводить Номер купона для получения скидок при покупке.';
	var $_PHPSHOP_FREE_SHIPPING = 'Бесплатная доставка';
	var $_PHPSHOP_FREE_SHIPPING_CUSTOMER_TEXT = 'На этот заказ доставка бесплатна!';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT = 'Минимальное количество для бесплатной доставки';
	var $_PHPSHOP_FREE_SHIPPING_AMOUNT_TOOLTIP = 'Сумма (ВКЛЮЧАЯ НАЛОГИ!), на которую должен отовариться покупатель, чтобы получить бесплатную доставку
                                                (Например: <strong>50</strong> означает - Бесплатную доставку, когда покупатель делает заказ на 
                                                50 у.е (включая налоги) или больше.';
	var $_PHPSHOP_YOUR_STORE = 'Электронный магазин';
	var $_PHPSHOP_CONTROL_PANEL = 'Панель управления';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON = 'PDF - Кнопка';
	var $_PHPSHOP_ADMIN_CFG_PDF_BUTTON_EXPLAIN = 'Показать или скрыть PDF - Кнопку в магазине';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER = 'Покупатели должны соглашаться с терминами об обслуживанни при каждом заказе?';
	var $_PHPSHOP_ADMIN_CFG_AGREE_TERMS_ONORDER_EXPLAIN = 'Активируйте, если Вы хотите, чтобы покупатель каждый раз соглашался с терминами об обслуживанни при заказе товара (перед оформлением заказа).';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE = 'Тип банковской учетной записи';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_CHECKING = 'Проверка';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_BUSINESSCHECKING = 'Бизнес-проверка';
	var $_PHPSHOP_ACCOUNT_LBL_ACCOUNT_TYPE_SAVINGS = 'Сохранение';
	var $_PHPSHOP_PAYMENT_AN_RECURRING = 'Повторить счет?';
	var $_PHPSHOP_PAYMENT_AN_RECURRING_TOOLTIP = 'Активируйте, когда Вы хотите повторить счет.';
	var $_PHPSHOP_INTERNAL_ERROR = 'Внутренняя ошибка при обработке запроса к';
	var $_PHPSHOP_PAYMENT_ERROR = 'Неудача при проведении платежа';
	var $_PHPSHOP_PAYMENT_TRANSACTION_SUCCESS = 'Платеж успешно прошел';
	var $_PHPSHOP_UPS_RESPONSE_ERROR = 'UPS не может обработать запрос на расчет доставки.';
	var $_PHPSHOP_UPS_SHIPPING_GUARANTEED_DAYS = 'Количество дней, через которое гарантированно будет доставка';
	var $_PHPSHOP_UPS_PICKUP_METHOD = 'UPS метод погрузки';
	var $_PHPSHOP_UPS_PICKUP_METHOD_TOOLTIP = 'Как Вы хотите получить упаковку к UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE = 'Упаковка в UPS?';
	var $_PHPSHOP_UPS_PACKAGE_TYPE_TOOLTIP = 'Выбрать тип упаковки по умолчанию.';
	var $_PHPSHOP_UPS_TYPE_RESIDENTIAL = 'Обычная доставка?';
	var $_PHPSHOP_UPS_RESIDENTIAL = 'Обычная (RES)';
	var $_PHPSHOP_UPS_COMMERCIAL = 'Коммерческая доставка (COM)';
	var $_PHPSHOP_UPS_RESIDENTIAL_TOOLTIP = 'Стоимость Обчной (RES) или Коммерческой доставки(COM).';
	var $_PHPSHOP_UPS_HANDLING_FEE = 'Плата за обработку';
	var $_PHPSHOP_UPS_HANDLING_FEE_TOOLTIP = 'Ваши затраты на обработку товара для этого метода доставки.';
	var $_PHPSHOP_UPS_TAX_CLASS = 'Класс пошлин';
	var $_PHPSHOP_UPS_TAX_CLASS_TOOLTIP = 'Используйте следующий класс пошлин для платы за обработку.';
	var $_PHPSHOP_ERROR_CODE = 'Код ошибки';
	var $_PHPSHOP_ERROR_DESC = 'Описание ошибки';
	var $_PHPSHOP_CHANGE_TRANSACTION_KEY = 'Показать / Изменить Transaction Key';
	var $_PHPSHOP_CHANGE_PASSKEY_FORM = 'Показать/Изменить  Пароль/Transaction Key';
	var $_PHPSHOP_TYPE_PASSWORD = 'Пожалуйста, введите пароль пользователя';
	var $_PHPSHOP_CURRENT_PASSWORD = 'Текущий пароль';
	var $_PHPSHOP_CURRENT_TRANSACTION_KEY = 'Текущий ключ транзакции';
	var $_PHPSHOP_CHANGE_PASSKEY_SUCCESS = 'Ключ транзакций успешно изменен.';
	var $_PHPSHOP_PAYMENT_CVV2 = 'Запрос/Ввод значения код кредитной карты (CVV2/CVC2/CID)';
	var $_PHPSHOP_PAYMENT_CVV2_TOOLTIP = 'Проверка значений CVV2/CVC2/CID (трех- или четырех значный номер на обратной стороне кредитной карты, на лицевой стороне карты American Express)?';
	var $_PHPSHOP_CUSTOMER_CVV2_TOOLTIP = 'Пожалуйста, введите трех- или  четырех- значный номер, расположенный на обратной стороне кредитной карты (На лицевой стороне карты American Express)';
	var $_PHPSHOP_CUSTOMER_CVV2_ERROR = 'Вам нужно ввести код вашей кредитной карты для продолжения.';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME = 'Введите имя файла';
	var $_PHPSHOP_PRODUCT_FORM_FILENAME_TOOLTIP = 'Замечание: Здесь Вы можете ввести Имя файла. <strong>Если Вы введете имя файла, то дальше не будет загрузки!!! Вы должны загрузить его вручную через FTP!</strong>.';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD = 'Или загрузить новый файл';
	var $_PHPSHOP_PRODUCT_FORM_UPLOAD_TOOLTIP = 'Вы можете загрузить файл с Вашего компьютера. Этот файл будет вашим товаром для продажи. Существующий файл будет замещен.';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1 = 'Введите любой текст здесь, который будет показываться покупателю на fly-странице товара.<br />Например.: 24ч, 48 часов, 3 - 5 дней, При заказе.....';
	var $_PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2 = 'Или выберите изображение, которое будет показано на fly-странице товара.<br />Изображения расположены в директории <i>/components/com_virtuemart/shop_image/availability</i><br />';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST = 'Список свойств';
	var $_PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Примеры формата списка свойств:</h4>
        <pre>Размер,XL[+1.99],M,S[-2.99];Цвет,Красный,Зеленый,Желтый,Другой[=24.00];И так далее,..,..</pre>
        <h4>Использование ценовых корректировок для дополнительных свойств:</h4>
        <pre>
        + == Добавить сумму к цене.<br />
        - == Вычесть сумму из цены.<br />
        = == Установить цену товара, равную этой сумме.
      </pre>';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST = 'Дополнительный список свойств';
	var $_PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES = '<h4>Пример формата списка дополнительных свойств:</h4>
        <pre>Наименование;Дополнительно;</strong>...</pre>';
	var $_PHPSHOP_MULTISELECT = 'Для выбора сразу нескольких элементов: используйте клавишу CTRL и Мышь';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN = 'Включить платежи eProcessingNetwork.com?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_EXPLAIN = 'Проверить использование eProcessingNetwork.com в VirtueMart.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE = 'Тестовый режим?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_EPN_TESTMODE_EXPLAIN = 'Выберите \'Yes\', если сайт тестируется. Выберите \'No\' для включения транзакций.';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME = 'eProcessingNetwork.com ID пользователя';
	var $_PHPSHOP_ADMIN_CFG_EPN_USERNAME_EXPLAIN = 'Это ваш идентификатор пользователя eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY = 'eProcessingNetwork.com Ключ транзакций';
	var $_PHPSHOP_ADMIN_CFG_EPN_KEY_EXPLAIN = 'Это ваш ключ транзакций на eProcessingNetwork.com';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE = 'Тип авторизации';
	var $_PHPSHOP_ADMIN_CFG_EPN_AUTENTICATIONTYPE_EXPLAIN = 'Это тип авторизации на eProcessingNetwork.com.';
	var $_PHPSHOP_RELATED_PRODUCTS = 'Сопутствующие товары';
	var $_PHPSHOP_RELATED_PRODUCTS_TIP = 'Вы можете составить список сопутствующих товаров ниже. Для этого, выберите один или несколько <strong>Сопутствующих товаров</strong>.';
	var $_PHPSHOP_RELATED_PRODUCTS_HEADING = 'Вас, возможно, заинтересуют следующие товары';
	var $_PHPSHOP_IMAGE_ACTION = 'Действия над изображениями';
	var $_PHPSHOP_NONE = 'нет';
	var $_PHPSHOP_ORDER_HISTORY = 'История заказов';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT = 'Комментарий';
	var $_PHPSHOP_ORDER_HISTORY_COMMENT_EMAIL = 'Комментарии в Ваших заказах';
	var $_PHPSHOP_ORDER_HISTORY_INCLUDE_COMMENT = 'Включить этот комментарий?';
	var $_PHPSHOP_ORDER_HISTORY_DATE_ADDED = 'Дата добавлена';
	var $_PHPSHOP_ORDER_HISTORY_CUSTOMER_NOTIFIED = 'Покупатель уведомлен?';
	var $_PHPSHOP_ORDER_STATUS_CHANGE = 'Изменить статус заказа';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME = 'Имя пользователя, которое Вы получили при регистрации на USPS.com .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_USERNAME_TOOLTIP = 'Имя пользователя, которое Вы получили при регистрации на USPS.com .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD = 'Пароль, который Вы получили при регистрации на USPS.com .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PASSWORD_TOOLTIP = 'Пароль, который Вы получили при регистрации на USPS.com .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER = 'USPS сервер доставки, в настоящее дейстует только с рабочим сервером! Например: production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SERVER_TOOLTIP = 'USPS сервер доставки, в настоящее действует только с рабочим сервером! Например: production.shippingapis.com';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH = 'USPS путь доставки';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PATH_TOOLTIP = 'USPS путь доставки. Например: /ShippingAPI.dll';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE = 'USPS размер посылки';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_PACKAGESIZE_TOOLTIP = 'Выбор: обычный, большой и очень большой. Параметр зависит от того, что Вы пересылаете и основано на размерах пакета. По умолчанию - обычный.';
	var $_PHPSHOP_USPS_PADDING = 'Процент, для дополнения веса, чтобы отправить пакет. (Включая %)';
	var $_PHPSHOP_USPS_PADDING_TOOLTIP = 'Дополняет вес отправки, необходим, чтобы добавить вес коробки и обертки. Использование этого поля позволяет установить актуальный вес в настройки веса товара. Необходим знак %, например 15%';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_HANDLING_FEE = 'Пошлина за обработку';
	var $_PHPSHOP_USPS_HANDLING_FEE = 'Ваша пошлина за обработку.';
	var $_PHPSHOP_USPS_HANDLING_FEE_TOOLTIP = 'Вы хотите установить экстра цену за использование покупки через USPS?  В долларовом формате, Например 2.00 ';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE = 'Ваша международная пошлина за USPS доставку.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLHANDLINGFEE_TOOLTIP = 'Вы хотите установить экстра цену за использование интернациональной покупки через USPS?  Это дополнительно к обычной пошлине за обработку. В долларовом формате, Например 2.00';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE = 'Ваш международный тариф за доставку одного фунта груза через USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTLLBRATE_TOOLTIP = 'Ваш международный тариф за доставку одного фунта груза через USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE = 'Если отправляется посылка от 6 унций до 35 фунтов.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_MACHINABLE_TOOLTIP = 'Если посылка обрабатывается машинно, то по умолчанию должно быть No (Нет).';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP = 'USPS письмо по стране (для США)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0 = 'USPS экспресс-письмо на адрес';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP0_TOOLTIP = 'Стандартное экспресс-письмо USPS.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1 = 'USPS Экспресс-письмо конверт размером (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP1_TOOLTIP = 'Выберите, если возможно, доставку экспресс-письмом в конверте USPS. По умолчанию, должно быть No(Нет) т.к., возможно, заказ не сможет войти в конверт.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2 = 'USPS Приоритетные письма';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP2_TOOLTIP = 'Стандартные приоритетные USPS письма.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3 = 'Приоритетные письма конвертом (12.5" x 9.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP3_TOOLTIP = 'Выберите, если возможна доставка. По умолчанию должно быть No(Нет) т.к., возможно, заказ не сможет войти в конверт.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4 = 'USPS Приорететное письмо размером (11.25" x 8.75" x 6")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP4_TOOLTIP = 'Выберите если возможна доставка письмом в "квадратном" конверте. По умолчанию, должно быть No(Нет) т.к., возможно, заказ не сможет войти в конверт.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5 = 'USPS Приоритетное письмо в квадратном конверте (14" x 12" x 3.5")';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP5_TOOLTIP = 'Выберите, если возможна доставка USPS приоритетным письмом в квадратном конверте.  По умолчанию, должно быть No(Нет) т.к., возможно, заказ не сможет войти в конверт.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6 = 'USPS Первым классом (До 14 унций)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP6_TOOLTIP = 'Выберите если возможна доставка USPS Письмом первого класса.  Будет показываться, если упаковка меньше 0.88 фунта.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7 = 'USPS Отправка посылок';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP7_TOOLTIP = 'USPS отправка стандартным письмом.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8 = 'USPS стандартная печатная продукция';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP8_TOOLTIP = 'Выберите, если возможна доставка через USPS стандартной печатной продукции .  По умолчанию, должно быть  No (Нет), если только Вы не доставляете журналы и газеты в группы.  Ограничение до 15 фунтов.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9 = 'USPS Медиа письмо';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP9_TOOLTIP = 'Выберите, если возможна доставка USPS медиа письмом. По умолчанию, должно быть NO (Нет)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10 = 'USPS библиотечное письмо';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_SHIP10_TOOLTIP = 'Выберите, если возможна доставка USPS библиотечное письмо. По умолчанию, должно быть NO (Нет)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL = 'USPS Международное письмо';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0 = 'USPS Глобальная служба гарантированной экспресс-доставки документов';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL0_TOOLTIP = 'Выберите, если возможна доставка через глобальную службу USPS гарантированной доставки документов. По умолчанию, должно быть NO (Нет)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1 = 'USPS Глобальная служба гарантрованной экспресс доставки недокументальных материалов';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL1_TOOLTIP = 'Выберите, если возможна доставка USPS . По умолчанию должно быть NO (Нет)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2 = 'USPS Общее Экспресс письмо (EMS)';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL2_TOOLTIP = 'Стандартное USPS общее экспресс-письмо.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3 = 'USPS Общее приоритетное письмо в большом конверте';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL3_TOOLTIP = 'Выберите, если возможна доставка USPS общее приоритетное письмо в большом конверте.  По умолчанию, должно быть  No(Нет), т.к. заказ может не влезть в конверт.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4 = 'USPS Общее приоритетное письмо малым конвертом';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL4_TOOLTIP = 'Выберите, если возможна доставка USPS приоритетным письмом малым конвертом.  По умолчанию, должно быть  No(Нет), т.к. заказ может не влезть в конверт.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5 = 'USPS Общее приоритетное письмо - Различный вес';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL5_TOOLTIP = 'Стандартное USPS, общее приоритетное письмо.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6 = 'USPS Доставка самолетом';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL6_TOOLTIP = 'Выберите, если возможна доставка USPS доставка самолетом.  По умолчанию, должно быть  No(Нет), т.к. заказ может не влезть в конверт.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7 = 'USPS Airmail Parcel Post';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL7_TOOLTIP = 'Стандартная посылка самолетом USPS .';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8 = 'USPS экономная отправка';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL8_TOOLTIP = 'Выберите, если возможна доставка USPS Economy Letter Post.  По умолчанию должно быть  No(Нет), т.к. заказ может не влезть в конверт.';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9 = 'USPS стандартная экономная отправка';
	var $_PHPSHOP_ADMIN_CFG_STORE_SHIPPING_METHOD_USPS_INTL9_TOOLTIP = 'Стандартная отправка эконом-класса.';
	var $_PHPSHOP_USPS_RESPONSE_ERROR = 'USPS не смог обработать запрос тарифа на доставку.';
	var $_PHPSHOP_PARAMETERS_LBL = 'Параметры';
	var $_PHPSHOP_PRODUCT_TYPE_LBL = 'Тип товара';
	var $_PHPSHOP_PRODUCT_TYPE_LIST_LBL = 'Список типов товара';
	var $_PHPSHOP_PRODUCT_TYPE_ADDEDIT = 'Добавить/Изменить тип товара';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL = 'Список типов товара для ';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_MNU = 'Список типов товара';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL = 'Добавить тип товара для';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_MNU = 'Добавить тип товара';
	var $_PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE = 'Тип товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_NAME = 'Наименование типа товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION = 'Описание типа товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS = 'Параметры';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_LBL = 'Информация о типе товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH = 'Опубликовать?';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE = 'Страница отображения типа товара';
	var $_PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE = 'Fly-страница типа товара';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL = 'Параметры типа товара';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL = 'Информация о параметрах';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND = 'Тип товара не найден!';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME = 'Название параметра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION = 'Это название будет названием поля таблицы. Должно быть уникальным a-zA-Z0-9 без пробелов.<BR>Для примера: main_material';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL = 'Подпись параметра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DESCRIPTION = 'Описание параметра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE = 'Тип параметра';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER = 'Целый';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT = 'Текст';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT = 'Малый текст';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT = 'Вещественный';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR = 'Знаковый';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME = 'Дата и время';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE = 'Дата';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE_FORMAT = 'ГГГГ-MМ-ДД';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME = 'Время';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME_FORMAT = 'ЧЧ-ММ-СС';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK = 'Разделительная линия';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE = 'Выпадающий список';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES = 'Допустимые значения';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT = 'Показывает допустимые значения для выпадающего списка?';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION = '<strong>Если допустимые значения установлены, то могут устанавливаться только эти значения. Например, если установлены допустимые :</strong><BR><span class="sectionname">Сталь;Дерево;Пластик;...</span>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT = 'Значение по умолчанию';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT = 'Для значения по умолчанию параметра, используйте следующий формат:<ul><li>Дата: ГГГГ-ММ-ДД</li><li>Время: ЧЧ:ММ:СС</li><li>Дата и Время: ГГГГ-ММ-ДД ЧЧ:ММ:СС</li></ul>';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT = 'Единица';
	var $_PHPSHOP_PARAMETER_SEARCH = 'Расширенный поиск по характеристикам';
	var $_PHPSHOP_ADVANCED_PARAMETER_SEARCH = 'Поиск по параметрам';
	var $_PHPSHOP_PARAMETER_SEARCH_TEXT1 = 'Вы хотите найти товары в соответствии с их техническими параметрами?<BR>Вы можете использовать любую подготовленную форму:';
	var $_PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE = 'Извините, здесь нет категорий для поиска.';
	var $_PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE = 'Извините, здесь нет товаров с этим наименованием.';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_LIKE = 'Чтобы присутствовал';
	var $_PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE = 'Чтобы отсутствовал';
	var $_PHPSHOP_PARAMETER_SEARCH_FULLTEXT = 'Полнотекстовый поиск';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL = 'Все выбранные';
	var $_PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY = 'Любое выбранное';
	var $_PHPSHOP_PARAMETER_SEARCH_RESET_FORM = 'Очистить форму';
	var $_PHPSHOP_PARAMETER_SEARCH_IN_CATEGORY = 'Поиск в категории';
	var $_PHPSHOP_PARAMETER_SEARCH_CHANGE_PARAMETERS = 'Изменить параметры';
	var $_PHPSHOP_PARAMETER_SEARCH_DESCENDING_ORDER = 'По убыванию';
	var $_PHPSHOP_PARAMETER_SEARCH_ASCENDING_ORDER = 'По возрастанию';
	var $_PHPSHOP_PRODUCT_TYPE_PARAMETERS_IN_CATEGORY = 'Параметры категории';
	var $_PHPSHOP_FEE = 'Пошлина';
	var $_PHPSHOP_PRODUCT_CLONE = 'Копировать товар';
	var $_PHPSHOP_CSV_SETTINGS = 'Настройки';
	var $_PHPSHOP_CSV_DELIMITER = 'Разделитель';
	var $_PHPSHOP_CSV_ENCLOSURE = 'Символ разделения';
	var $_PHPSHOP_CSV_UPLOAD_FILE = 'Загрузить CSV файл';
	var $_PHPSHOP_CSV_SUBMIT_FILE = 'Отправить CSV файл';
	var $_PHPSHOP_CSV_FROM_DIRECTORY = 'Загрузить из директории';
	var $_PHPSHOP_CSV_FROM_SERVER = 'Загрузить CSV файл с сервера';
	var $_PHPSHOP_CSV_EXPORT_TO_FILE = 'Экспортировать CSV файл';
	var $_PHPSHOP_CSV_SELECT_FIELD_ORDERING = 'Выбрать сортировку по полю';
	var $_PHPSHOP_CSV_DEFAULT_ORDERING = 'Сортировка по умолчанию';
	var $_PHPSHOP_CSV_CUSTOMIZED_ORDERING = 'Настроить сортировку';
	var $_PHPSHOP_CSV_SUBMIT_EXPORT = 'Экспортировать все товары в CSV файл';
	var $_PHPSHOP_CSV_CONFIGURATION_HEADER = 'CSV Ипорт / Экспорт Настройки';
	var $_PHPSHOP_CSV_SAVE_CHANGES = 'Сохранить изменения';
	var $_PHPSHOP_CSV_FIELD_NAME = 'Имя поля';
	var $_PHPSHOP_CSV_DEFAULT_VALUE = 'значение по умолчанию';
	var $_PHPSHOP_CSV_FIELD_ORDERING = 'Поле сортировки';
	var $_PHPSHOP_CSV_FIELD_REQUIRED = 'Обязательное поле?';
	var $_PHPSHOP_CSV_IMPORT_EXPORT = 'Импорт/Экспорт';
	var $_PHPSHOP_CSV_NEW_FIELD = 'Добавить новое поле';
	var $_PHPSHOP_CSV_DOCUMENTATION = 'Документация';
	var $_PHPSHOP_PRODUCT_NOT_FOUND = 'Извините, но запрошенный товар не найден!';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS = 'Показывать товары, которых нет на складе';
	var $_PHPSHOP_ADMIN_CFG_SHOW_OUT_OF_STOCK_PRODUCTS_EXPLAIN = 'Когда включено - товары, которых временно нет на складе, - показываются. Иначе, такие товары не показываются.';
	var $_PHPSHOP_PRODUCT_PACKAGING1 = 'Количество {штук} в упаковке:';
	var $_PHPSHOP_PRODUCT_PACKAGING2 = 'Количество {штук} в коробке:';
	var $_PHPSHOP_HIDE_OUT_OF_STOCK = 'Скрыть товары, которых нет на складе';
	var $_PHPSHOP_FEATURED_PRODUCTS_LIST_LBL = 'Поступившие и товары со скидкой';
	var $_PHPSHOP_FEATURED = 'Поступившие';
	var $_PHPSHOP_BACK_TO_COUNTRY = 'Назад к странам';
	var $_PHPSHOP_BACK_TO_FILEMANAGER = 'Назад к файловому менеджеру';
	var $_PHPSHOP_ADD_STATE = 'Добавить регион';
	var $_PHPSHOP_LIST_STATES = 'Список регионов';
	var $_PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED = 'Поступившие и товары со скидкой';
	var $_PHPSHOP_SHOW_FEATURED = 'поступившие товары';
	var $_PHPSHOP_SHOW_DISCOUNTED = 'товары со скидкой';
	var $_PHPSHOP_FILTER = 'Фильтр';
	var $_PHPSHOP_BACK_TO_MAIN_SITE = 'Назад на сайт';
	var $_PHPSHOP_EXPAND_TREE = 'Развернуть дерево';
	var $_PHPSHOP_COLLAPSE_TREE = 'Свернуть дерево';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE = 'Цена со скидкой';
	var $_PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP = 'Здесь Вы можете, не обращая внимание на настройки товаров со скидками, ввести скидку на товар.<br/>
Магазин будет созавать новую запись с введенной скидкой.';
	var $_PHPSHOP_CART_PRICE_PER_UNIT = 'Цена за шт.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE = 'Магазин закрыт ?';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_TIP = 'Если отмечено, магазин будет показывать сообщения о том, что он закрыт.';
	var $_PHPSHOP_ADMIN_CFG_SHOP_OFFLINE_MSG = 'Сообщение о том, что магазин закрыт';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX = 'Префикс для табиц VirtueMart';
	var $_PHPSHOP_ADMIN_CFG_TABLEPREFIX_TIP = 'По умолчанию <strong>vm</strong>';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP = 'Показывать панель навигации вверху списка товаров?';
	var $_PHPSHOP_ADMIN_CFG_NAV_AT_TOP_TIP = 'Включает или выключает показ панели навигации вверху списка товаров в зоне пользователя.';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT = 'Показывать количество товаров?';
	var $_PHPSHOP_ADMIN_CFG_SHOW_PRODUCT_COUNT_TIP = 'Показывать количество товаров в категории, например: Категория (4)?';
	var $_PHPSHOP_ADMIN_CFG_ADDTOCART_STYLE = 'Стиль кнопки добавить в корзину';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING = 'Включить динамическое изменение размеров изображаения для предпросмотра?';
	var $_PHPSHOP_ADMIN_CFG_DYNAMIC_THUMBNAIL_RESIZING_TIP = 'Если отмечено, Вы включаете динамичесое изменение размеров изображения. Это означает, что все изображения изменяют размеры до указанных вами ниже, 
	путем применения функций GD2 библиотеки РНР (Вы можете проверить имеете ли Вы поддержку бибилотеки GD2 зайдя в "Главное меню"->"System" -> "System Info" -> "PHP Info" -> gd. 
        Качество изображений для предпросмотра гораздо выше чем если бы это сделал браузер. Новые изображения генерируются и складываются в папку /shop_image/prduct/resized. Если изображение уже сгенерировано, то копия его отсылается браузеру, а не генерируется каждый раз.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH = 'Ширина изображения для предпросмотра';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_WIDTH_TIP = '<strong>Ширина</strong> сгенерированных изображений.';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT = 'Ширина изображения для предпросмотра';
	var $_PHPSHOP_ADMIN_CFG_THUMBNAIL_HEIGHT_TIP = '<strong>Высота</strong> сгенерированных изображений.';
	var $_PHPSHOP_ADMIN_CFG_SHIPPING_NO_SELECTION = 'Пожалуйста, выберите вариант доставки!';
	var $_PHPSHOP_ADMIN_CFG_PRICE_CONFIGURATION = 'Цена';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL = 'Группа пользователей для показа цен';
	var $_PHPSHOP_ADMIN_CFG_PRICE_ACCESS_LEVEL_TIP = 'Выбранная группа пользователей и все группы с  правами выше этой, будут доступны для того, чтобы посмотреть цену товаров.';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX = 'Показать "(включая XX% налогов)" когда они сприменяются?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_INCLUDINGTAX_TIP = 'Когда отмечено, пользователи будут видеть текст "(включая xx% налоги)" - когда цены показываются включая налоги';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL = 'Показать стоимость упаковки?';
	var $_PHPSHOP_ADMIN_CFG_PRICE_SHOW_PACKAGING_PRICELABEL_TIP = 'Когда отмечено, цена формируется из цены товара и упаковки:<br/>
<strong>Цена за единицу (10 штук)</strong><br/>
Когда не отмечено, цена выглядит так: <strong>Цена: xx.xx руб.</strong>';
	var $_PHPSHOP_ADMIN_CFG_MORE_CORE_SETTINGS = 'Важные для работы настройки';
	var $_PHPSHOP_ADMIN_CFG_CORE_SETTINGS = 'Важные для работы настройки';
	var $_PHPSHOP_ADMIN_CFG_FRONTEND_FEATURES = 'Возможности зоны пользователя';
	var $_PHPSHOP_ADMIN_CFG_TAX_CONFIGURATION = 'Налоги';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_START = 'Минимальное количество';
	var $_PHPSHOP_PRODUCT_LIST_QUANTITY_END = 'Максимальное количество';
	var $_PHPSHOP_ADMIN_CFG_USER_REGISTRATION_SETTINGS = 'Регистрация пользователей';
	var $_PHPSHOP_ADMIN_CFG_ALLOW_REGISTRATION = 'Разрешить регистрацию пользователей?';
	var $_PHPSHOP_ADMIN_CFG_ACCOUNT_ACTIVATION = 'Необходима ли активация новый учетных записей?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION = 'Использовать (скрытую) регистрацию пользователей?';
	var $_PHPSHOP_ADMIN_CFG_SILENT_REGISTRATION_TIP = 'Когда включен, пользователи не могут вводить свой пароль. Вместо этого пароль генерируется на сервере и высылается письмом пользователю.';
	var $_PHPSHOP_USER_SEND_REGISTRATION_DETAILS = 'Здравствуйте %s,

Спасибо за регистрацию на %s. Ваша учетная запись создана.
Вы можете войти на  %s используя следующие данные:

Пользователь - %s
Пароль - %s
';
	var $_PEAR_LOG_CRIT = 'Критическая ошибка';
	var $_PEAR_LOG_ERR = 'Ошибка';
	var $_PEAR_LOG_WARNING = 'Предупреждение';
	var $_PEAR_LOG_INFO = 'Инфо';
	var $_PEAR_LOG_TIP = 'Совет';
	var $_PEAR_LOG_ALERT = 'Предупреждение';
	var $_PEAR_LOG_EMERG = 'Важно';
	var $_PEAR_LOG_NOTICE = 'Уведомление';
	var $_PEAR_LOG_DEBUG = 'Отладка';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP = 'Включить платеж PayFlow?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_EXPLAIN = 'Отметить для использования платежей  PayFlow Pro.';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE = 'Тестовый режим ?';
	var $_PHPSHOP_ADMIN_CFG_ENABLE_PFP_TESTMODE_EXPLAIN = 'Выберите \'Да\' пока идет тестирование. Выберите \'Нет\' для включения настоящих транзакций.';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNER = 'Ввести ID партнера';
	var $_PHPSHOP_ADMIN_CFG_PFP_PARTNET_EXPLAIN = 'ID партнера для авторизации на PayFlow Pro ';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME = 'PayFlow Pro ID пользователя';
	var $_PHPSHOP_ADMIN_CFG_PFP_USERNAME_EXPLAIN = 'Это идентификатор пользователя выданный Вам на PayFlow Pro';
	var $_VM_TAXDETAILS_LABEL = 'Общий налог содержит';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL = 'Сортировка товаров по умолчанию';
	var $_VM_BROWSE_ORDERBY_DEFAULT_FIELD_LBL_TIP = 'Описывает по каким полям товары будут отсортированы по умолчанию ';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL = 'Доступность поля "Сортировка"';
	var $_VM_BROWSE_ORDERBY_FIELDS_LBL_TIP = 'Выберите поля, для которых будет разрешена сортировка. Если Вы ничего не выделите то форма для сортировки показана не будет.';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO = 'Показывать короткую информацию о "Политике возврата" на странице подтверждения?';
	var $_VM_ADMIN_ONCHECKOUT_SHOW_LEGALINFO_TIP = 'В большинстве европейских стран законы требуют от владельцев магазинов информировать своих клиентов о политике возврата товара и отмены заказов. Так что, в большинстве случаях эта опция должа быть включена.';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT = 'Правовая информация (короткая версия).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_SHORTTEXT_TIP = 'Этот текст вкратце инструктирует Ваших покупателей о Вашей политике возврата товара и отмены заказов. Он будет показан на последней странице проверки, над кнопкой "Подвердить заказ"';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK = 'Полная версия политики возврата (Ссылка на описание).';
	var $_VM_ADMIN_ONCHECKOUT_LEGALINFO_LINK_TIP = 'Пожалуйста, заполните новое описание о деталях Вашей политики возврата товара и отмены заказов.
Потом Вы можете выбрать их здесь.';
	var $_VM_LEGALINFO_SHORTTEXT = '<h5>Политика возврата</h5>

Вы можете отменить этот заказ не позднее 2-х недель после того, как мы его получили.
Вы можете возвратить новые (неоткрытые товары) из отмененного заказа, но не познее 2-х недель после того, как они были доставлены к вам. 
Товары должны быть возвращены в их первоначальной упаковке.
Для большей информации по отмене заказов и возврату товара, см. <a href="%s" onclick="%s" target="_blank">Политика возврата</a>.';
	var $_PHPSHOP_ADMIN_CFG_TAX_MODE_EU = 'Ставка ЕС';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE = 'Папка для хранения данных о сессиях доступна для записи. Пожалуйста, исправьте это, либо свяжитесь со своим провайдером';
	var $_VM_SESSION_SAVEPATH_UNWRITABLE_TMPFIX = 'Путь для сохранения данных сессий %s не доступен для записи. Пожалуйста, исправьте! Магазин временно будет пробовать использовать %s вместо этого пути.';
	var $_VM_SESSION_COOKIES_NOT_ACCEPTED_TIP = 'Ваш браузер не принимает cookies. Если Вы хотите положить товары в Вашу тележку и купить их, то Вам необходимо включить cookies.';
	var $_PHPSHOP_CSV_SKIP_FIRST_LINE = 'Пропустить первую строку';
	var $_PHPSHOP_CSV_SKIP_DEFAULT_VALUE = 'Игнорировать значения по-умолчанию';
	var $_PHPSHOP_CSV_OVERWRITE_EXISTING_DATA = 'Заменить существующие данные';
	var $_PHPSHOP_CSV_INCLUDE_COLUMN_HEADERS = 'Включать заголовки колонок';
	var $_PHPSHOP_CSV_UPLOAD_SETTINGS = 'Параметры загрузки';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS = 'Доступные поля';
	var $_PHPSHOP_CSV_OUTPUT_CSV_UPLOAD_MESSAGES = 'CSV сообщения загрузки:';
	var $_PHPSHOP_CSV_OUTPUT_COUNT = 'Количество';
	var $_PHPSHOP_CSV_OUTPUT_TOTAL = 'Итог';
	var $_PHPSHOP_CSV_OUTPUT_FILE_IMPORTED = 'CSV файл импортирован';
	var $_PHPSHOP_CSV_OUTPUT_UPDATED = 'Обновлен';
	var $_PHPSHOP_CSV_OUTPUT_DELETED = 'Удален';
	var $_PHPSHOP_CSV_OUTPUT_ADDED = 'Добавлен';
	var $_PHPSHOP_CSV_OUTPUT_SKIPPED = 'Пропущен';
	var $_PHPSHOP_CSV_OUTPUT_INCORRECT = 'Неправильный';
	var $_PHPSHOP_CSV_AVAILABLE_FIELDS_USE = 'Следующие поля доступны для использвания при импорте/экспорте.';
	var $_PHPSHOP_CSV_MINIMAL_FIELDS = 'Минимальное количество полей, необходимых для добавления товара: product_sku, product_name и category_path. Поле product_sku должно быть уникальным для каждого товара, поля product_name и category_path могут быть не уникальными.';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SKU = 'Артикул товара.<br />Формат:<ul><li>Число</li><li>Буквы</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_NAME = 'Наименование товара.<br />Формат:<ul><li>Текст. HTML код не использовать.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DELETE = 'Поле product_delete - это специальное поле. Поле используется, чтобы определить необходимо удалить товар из базы или нет.<br />Использование:<ol><li>Добавьте поле (колонку) "product_delete" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте значение Y, против тех товаров, которые Вы хотите удалить. Если в ячейке стоит другое значение (не Y), то товар удален не будет.</li></ol><br /.>Формат:<ul><li>Y: Да, необходимо удалить товар</li><li>N: Нет, товар удалять не надо.</li><li>Пусто: Если Вы оставите поле пустым, то товар не будет удален.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DESC = 'Полное описание товара.<br />Формат:<ul><li>Текст. Можно использовать HTML код.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_S_DESC = 'Краткое описание товара.<br />Формат:<ul><li>Текст. HTML код не использовать.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PUBLISH = 'Статус товара - опубликован или скрыт.<br />Формат:<ul><li>Y: Да, товар опубликован</li><li>N: Нет, товар скрыт</li><li>Пусто: Если Вы оставите поле пустым, то товар будет опубликован.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WIDTH = 'Ширина товара.<br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_HEIGHT = 'Высота товара.<br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABLE_DATE = 'Дата, с которой товар доступен в магазине. При импортировании информации, формат даты должен быть  День/Месяц/Год или День-Месяц-Год. На системах, построенных на базе Windows, дата может быть до 19/01/2038.<br />Использование:<ol><li>Добавьте поле (колонку) "product_available_date" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте дату, начиная с которой товар доступен в магазине. Если поле содержит любую другую информацию, то оно будет проигнорировано.</li></ol><br />Формат:<ul><li>Дата: День/Месяц/Год или День-Месяц-Год</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_IN_STOCK = 'Количество товара на складе.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_in_stock" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте количество доступного товара. Если поле содержит любую другую информацию, то будет использовано значение по умолчанию.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE = 'Различные варианты одного товара. Используйте, чтобы указать различные характеристики, комплектации поставки. Например, майка может поставляться в разных цветовых вариантах и разных размеров. Вы можете указать размеры и цвета следующим образом: Размер,XL[+1.99],M,S[-2.99];Цвет,Красный,Зеленый,Желтый,Золотистый[=24.00];ИТакДалее,..,..<br /><br />Вы можете изменить стоимость товара с учетом различных характеристик:<ul><li>+: Добавить сумму к изначальной цене.</li><li>-: Вычесть сумму из изначальной цены.</li><li>=: Установить цену товара в данной комплектации, равной указанному значению.</li></ul><br />Использование:<ol><li>Добавьте поле (колонку) "attribute" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте информацию о вариантах поставки.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_AVAILABILITY = 'Показывается, через какое время товар обычно отгружается со склада. Значение поля может быть как текстовым, там и названием графического файла. Изображение должно быть помещено в каталог "/components/com_virtuemart/shop_image/availability/".<br />Использование:<ol><li>Добавьте поле (колонку) "product_availability" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_FULL_IMAGE = 'Название файла с изображением товара, который расположен в папке "/components/com_virtuemart/shop_image/product/". Названием файла может быть также ссылка на него.<br />Внимание: Если у Вас включена опция "Автоматически создать мини-изображение", Вам необходимо также заполнить поле "product_thumb_image". VirtueMart автоматически создаст мини-изображения.<br/><br />Использование:<ol><li>Добавьте поле (колонку) "product_full_image" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст:<ul><li>HTML код не использовать.</li><li>Ссылки (URL) допускаются.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_THUMB_IMAGE = 'Наименование файла с мини-изображением товара, который находится в папке "/components/com_virtuemart/shop_image/product/". Названием файла может быть также ссылка на него.<br />Внимание: Если у Вас включена опция "Автоматически создать мини-изображение", это поле все равно должно быть заполнено. VirtueMart изменяет размер изображения, указанного здесь.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_thumb_image" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст:<ul><li>HTML код не использовать.</li><li>Ссылки (URL) допускаются.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CUSTOM_ATTRIBUTE = 'Дополнительное свойство товара - в данном случае будет добавлено поле на страницу описания товара, где будет указано название возможного свойства товара, и будет поле, где покупатель может оставить свой текст. Удобно использовать, если Вы продаете кружки/майки и предоставляете услугу нанесения текста клиента на кружку/майку. Дополнительный вариант поставки указывается как: Наименование1;Наименование2;...<br />Использование:<ol><li>Добавьте поле (колонку) "custom_attribute" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br /.>Формат:<ul><li>Текст. HTML код не использовать.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PACKAGING = 'Определяет количество товара в упаковке.<br />Использование:<ol><li>Добавьте поле (колонку) "product_packaging" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте количество товара в упаковке.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_BOX = 'Определяет количество товара в коробке.<br />Использование:<ol><li>Добавьте поле (колонку) "product_box" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте количество товара в коробке.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT = 'Укажите фиксированный размер скидки или процент скидки для данного товара. Указанные значения добавляются как дополнительные данные, никаких вычислений при загрузке не происходит. Это тоже самое, если бы Вы добавляли скидки в "Список скидок на товары". Если скидка уже существует, то скидка не будет добавлена в базу, а к товару будет просто применена существующая скидка. Для определения, существует ли уже скидка или нет, должны строго выполняться следующие критерии:<ol><li>Величина скидки - фиксированный размер или процент</li><li>Дата начала действия</li><li>Дата окончания</li></ol>Это сделано для того, чтобы не заполнять базу абсолютно одинаковыми скидками.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_discount" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>Дополнительно: Добавьте поле (колонку) "product_discount_date_start" в закладку "Конфигурация" (файл CSV).  Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>Дополнительно: Добавьте поле (колонку) "product_discount_date_end" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой(их) колонке(ах), добавьте соответствующие значения.</li></ol><br /.>Формат:<ul><li>поле "product_discount"</li><ul><li>Число<br />например 10</li><li>При указании процента, Вы должны указать символ %<br />например 10%</li></ul><li>поле "product_discount_date_start"</li><ul><li>Дата: День/Месяц/Год или День-Месяц-Год<br />День и месяц могут быть 1 или 2 разрядными.<br />Год может быть 2 или 4 разрядным.</li></ul><li>поле "product_discount_date_end"</li><ul><li>Дата: День/Месяц/Год или День-Месяц-Год<br />День и месяц могут быть 1 или 2 разрядными.<br />Год может быть 2 или 4 разрядным.</li></ul></ul>';
	var $_ITEM_PREVIOUS = '< предыдущий';
	var $_ITEM_NEXT = 'следующий >';
	var $_CMN_OK = 'Ok';
	var $_CMN_CONTINUE = 'Продолжить';
	var $_CMN_CANCEL = 'Отменить';
	var $_BUTTON_SEND_REG = 'Регистрация';
	var $_CONTACT_FORM_NC = 'Пожалуйста, проверьте, что форма заполнена полностью и правильно.';
	var $_CMN_REQUIRED = 'Обязательно';
	var $_CMN_NEW = 'Новый';
	var $_CMN_SAVE = 'Сохранить';
	var $_CMN_NEW_ITEM_LAST = 'Новые значения по умолчанию находятся на последнем месте. Сортировка может быть изменена, когда позиция сохранена.';
	var $_CMN_OPTIONAL = 'Необязательно';
	var $_E_APPLY = 'Применить';
	var $_E_IMAGES = 'Изображения';
	var $_URL = 'URL:';
	var $_SEL_CATEGORY = 'Выберите категорию';
	var $_E_REMOVE = 'Удалить';
	var $_PN_LT = '<';
	var $_PN_RT = '>';
	var $_PN_PAGE = 'Страница';
	var $_PN_OF = 'из';
	var $_PN_START = 'В начало';
	var $_PN_PREVIOUS = 'Предыдущая';
	var $_PN_NEXT = 'Следующая';
	var $_PN_END = 'В конец';
	var $_PN_DISPLAY_NR = 'Показать #';
	var $_PN_RESULTS = 'Результаты';
	var $_CMN_PRINT = 'Версия для печати';
	var $_CMN_PDF = 'PDF';
	var $_CMN_EMAIL = 'E-mail';
	var $_BACK = 'Назад';
	var $_USERNAME = 'Имя пользователя';
	var $_PASSWORD = 'Пароль';
	var $_BUTTON_LOGIN = 'Войти';
	var $_REGISTER_UNAME = 'Имя пользователя';
	var $_REGISTER_EMAIL = 'E-mail';
	var $_REGWARN_NAME = 'Пожалуйста, введите Ваше имя.';
	var $_REGWARN_UNAME = 'Пожалуйста, введите имя пользователя.';
	var $_REGWARN_MAIL = 'Пожалуйста, введите правильный e-mail.';
	var $_SEND_SUB = 'Учётная запись %s, на сайте %s';
	var $_ASEND_MSG = 'Здравствуйте, %s,
	
	Новый пользователь зарегистрировался на %s.
	Этот e-mail содержит следующую информацию о новом пользователе:
	
	Настоящее имя - %s
	e-mail - %s
	Имя пользователя - %s
	
	Пожалуйста, не отвечайте на данное сообщение, так как оно генерируется автоматически и служит только для информации.';
	var $_REG_COMPLETE = '<div class="componentheading">Регистрация завершена!</div><br /> Теперь Вы можете войти.';
	var $_REG_COMPLETE_ACTIVATE = '<div class="componentheading">Регистрация завершена!</div><br /> Прежде чем войти, Вы должны активировать свою учетную запись, перейдя по ссылке, указанной в письме, высланном на Ваш e-mail.';
	var $_DATE_FORMAT_LC = '%A, %d %B %Y';
	var $_LAST_UPDATED = 'Изменено';
	var $_NOT_AUTH = 'У Вас недостаточно прав, чтобы просматривать запрошенный ресурс.';
	var $_DO_LOGIN = 'Вы должны войти.';
	var $_VALID_AZ09 = 'Пожалуйста, введите правильно %s.  Необходимо вводить без пробелов, более %d символов и только 0-9,a-z,A-Z';
	var $_CMN_PUBLISHED = 'Опубликовано';
	var $_CMN_UNPUBLISHED = 'Скрыто';
	var $_MORE = 'Подробнее...';
	var $_EMPTY_CATEGORY = 'В данной категории нет товаров.';
	var $_BUTTON_LOGOUT = 'Выход';
	var $_NO_ACCOUNT = 'Еще нет учетной записи?';
	var $_CREATE_ACCOUNT = 'Регистрация';
	var $_REGWARN_PASS = 'Пожалуйста, введите правильный пароль. Необходимо вводить без пробелов, более 6 символов и только символы 0-9,a-z,A-Z';
	var $_REGWARN_VPASS1 = 'Пожалуйста, подтвердите Ваш пароль.';
	var $_REGWARN_VPASS2 = 'Пароль и подтверждение пароля не совпадают. Пожалуйста, попробуйте снова.';
	var $_USEND_MSG_ACTIVATE = '%s - добро пожаловать!

Спасибо за регистрацию на %s. Ваша учетная запись создана и должна быть активирована, прежде чем Вы сможете использовать ее.
Чтобы активировать учетную запись, щелкните на следующую ссылку или скопируйте и вставьте ее в браузер:
%s

После активации Вы можете войти на сайт %s, используя следующее имя пользователя и пароль:

Имя пользователя - %s
Пароль - %s



	Пожалуйста, не отвечайте на данное сообщение, так как оно генерируется автоматически и служит только для информации.';
	var $_USEND_MSG = 'Добро пожаловать %s,

Спасибо за регистрацию на %s.

Вы можете войти на сайт %s, используя имя пользователя и пароль, указанные при регистрации.



	Пожалуйста, не отвечайте на данное сообщение, так как оно генерируется автоматически и служит только для информации.';
	var $_PROMPT_PASSWORD = 'Забыли пароль?';
	var $_HI = 'Добро пожаловать';
	var $_NEW_USER_MESSAGE_SUBJECT = 'Информация о новом пользователе';
	var $_NEW_USER_MESSAGE = 'Здравствуйте, %s,


Вы были добавлены Администратором, как пользователь на сайте %s.

Этот e-mail содержит необходимую информацию для входа на сайт %s

Имя пользователя - %s
Пароль - %s


	Пожалуйста, не отвечайте на данное сообщение, так как оно генерируется автоматически и служит только для информации.';
	var $_REMEMBER_ME = 'Запомнить';
	var $_REGISTER_TITLE = 'Регистрация';
	var $_JAN = 'Январь';
	var $_FEB = 'Февраль';
	var $_MAR = 'Март';
	var $_APR = 'Апрель';
	var $_MAY = 'Май';
	var $_JUN = 'Июнь';
	var $_JUL = 'Июль';
	var $_AUG = 'Август';
	var $_SEP = 'Сентябрь';
	var $_OCT = 'Октябрь';
	var $_NOV = 'Ноябрь';
	var $_DEC = 'Декабрь';
	var $_PHPSHOP_CSV_VERSION = '0.7';
	var $_PHPSHOP_CSV_ABOUT = 'О CSV';
	var $_PHPSHOP_CSV_PRICE_LIST_ONLY = 'Загрузить только цены';
	var $_PHPSHOP_CSV_MULTIPLE_PRICES_UPLOAD = 'Полное обновление цен';
	var $_PHPSHOP_CSV_IMPORT_CONFIG_CSV_FILE = 'Использовать заголовки колонок как конфигурацию для обновления';
	var $_PHPSHOP_CSV_COLLECT_DEBUG_INFO = 'Собирать информацию для отладки';
	var $_PHPSHOP_CSV_SHOW_PREVIEW = 'Показать первые строки загружаемого файла';
	var $_PHPSHOP_CSV_REGULAR_UPLOAD = 'Стандартная загрузка';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_UPLOAD = 'Загрузка типа товара';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_PARAMETERS_UPLOAD = 'Загрузка параметров типа товара';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_XREF_UPLOAD = 'Загрузка товаров принадлежащих разным типам одновременно';
	var $_PHPSHOP_CSV_PRODUCT_TYPE_DETAIL_UPLOAD = 'Загрузка подробной информации о типе товара';
	var $_PHPSHOP_CSV_EMPTY_DATABASE = 'Очистить базу';
	var $_PHPSHOP_CSV_CONTINUE_UPLOAD = 'Продолжить загрузку';
	var $_PHPSHOP_CSV_CANCEL_UPLOAD = 'Отменить загрузку';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION = '<span style="color: #FF0000; font-size: 1.2em;">Порядок загрузки файла CSV</span>
										<ol>
										<li>Создайте список товаров в формате CSV в котором колонки могут имеють или не иметь заголовков.
										<br />Мы рекомендуем использовать для выделения текста символ ~ (тильда), а для разделения полей символ ^ (знак вставки).
										<br /><span style="font-weight: bold;">Пример файла CSV: (текст не переведен специально)</span><br />
										<div class="quote" style="width:600px;overflow:scroll;"><pre>~G01~^~Hand Shovel~^~Hand Tools~^~4.99000~^~<p>Nice hand shovel to dig with in the yard.</p>~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8d886c5855770cc01a3b8a2db57f6600.jpg~^~cca3cd5db813ee6badf6a3598832f2fc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~10~^~1072911600~^~1~^~1~^~2~^~0~^~G01~^~~^~~^~Color::1|Size::2~^~~
~G02~^~Ladder~^~Garden Tools~^~49.99000~^~A really long ladder to reach high places.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~ffd5d5ace2840232c8c32de59553cd8d.jpg~^~8cb8d644ef299639b7eab25829d13dbc.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~76~^~1072911600~^~0~^~1~^~2~^~0~^~G02~^~~^~~^~Material::1~^~~
~G03~^~Shovel~^~Garden Tools~^~24.99000~^~Nice shovel.  You can dig your way to China with this one.~^~<ul>  <li>Hand crafted handle with maximum grip torque  </li><li>Titanium tipped shovel platter  </li><li>Half degree offset for less accidents  </li><li>Includes HowTo Video narrated by Bob Costas  </li></ul>    <b>Specifications</b><br>  5~ Diameter<br>  Tungsten handle tip with 5 point loft<br>~^~8147a3a9666aec0296525dbd81f9705e.jpg~^~520efefd6d7977f91b16fac1149c7438.jpg~^~10.0000~^~pounds~^~0.0000~^~0.0000~^~0.0000~^~inches~^~32~^~1072911600~^~0~^~1~^~2~^~0~^~G03~^~Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00]~^~~^~~^~~</pre></div></li>
										<li>Установите поля в закладке "Конфигурация" в таком же порядке, как Вы указали поля в файле CSV. Поля должны полностью совпадать, в закладке "Конфигурация" и файле CSV.
										<br /Например: product_sku, product_desc, product_price, category_path<br />
										<br /><span style="font-weight: bold;">Минимальное количество полей, необходимых для добавления товара:</span><br />
										product_sku<br />
										product_name<br />
										category_path<br />
										<br /><span style="font-weight: bold;">category_path</span> полный путь к категории, в которой должен находиться товар, 
										<br />
										<div class="quote">Категория/Подкатегория_1/Подкатегория_2</div>
										<br />
										Если необходимо определить товар в несколько категорий, Вы можете указать их, разделив символом									<span style="font-weight: bold;">|</span>
										<div class="quote">Категория /Подкатегория_1/Подкатегория_2|Категория_2/Подкатегория_22|Категория_3/Подкатегория_33</div>
										</li>
										<li>Выберите тип разделителя на закладке "Импорт/Экспорт".</li>
										<li>Установите параметры загрузки на закладке "Импорт/Экспорт".</li>
										<li>Выберите, хотите ли загружать файл с локального компьютера (Загрузить CSV-файл) или с сервера (Загрузить CSV-файл с сервера).</li>
										<li>Импортируйте товары в магазин.</li>
										</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_PRODUCT_TYPES = '<span style="color: #FF0000; font-size: 1.2em;">Типы товара</span><br /><br />
													Чтобы добавить типы товара, Вам необходимо 4 CSV файла. Каждый представляет часть типа товара.
													<ul>
													<li><span style="font-weight: bold;">Тип товара</span><br />
													Этот CSV файл содержит основные типы товара и должен выглядеть следующим образом:
													<table border="1">
													<tr style="border: 1px solid #000000;"><td>product_type_name</td><td>product_type_description</td><td>product_type_publish</td><td>product_type_browsepage</td><td>product_type_flypage</td></tr>
													<tr><td>Песня</td><td>Название песни</td><td>Y</td><td> </td><td> </td></tr>
													<tr><td>Альбом</td><td>Название альбома</td><td>Y</td><td> </td><td> </td></tr>
													<tr><td>Исполнитель</td><td>ФИО исполнителя</td><td>Y</td><td> </td><td> </td></tr>
													</table>
													</li><br />
													<li><span style="font-weight: bold;">Параметры типа товара</span><br />
													Этот CSV файл содержит параметры для каждого типа товара и должен выглядеть следующим образом:
													<div style="width: 50%; overflow: auto; height: 100px;">
													<table border="1">
													<tr><td>product_type_name</td><td>product_type_parameter_name</td><td>product_type_parameter_label</td><td>product_type_parameter_description</td><td>product_type_parameter_list_order</td><td>product_type_parameter_type</td><td>product_type_parameter_values</td><td>product_type_parameter_multiselect</td><td>product_type_parameter_default</td><td>product_type_parameter_unit</td></tr>
													<tr><td>Исполнитель</td><td>Имя</td><td>Имя</td><td>Имя исполнителя</td><td>1</td><td>I</td><td> </td><td>N</td><td> </td><td> </td></tr>
													<tr><td>Исполнитель</td><td>Дата рождения</td><td>Дата рождения</td><td>Дата рождения артиста</td><td>2</td><td>D</td><td> </td><td>N</td><td> </td><td> </td></tr>
													<tr><td>Альбом</td><td>Продолжительность</td><td>Продолжительность</td><td>Продолжительность альбома</td><td>3</td><td>M</td><td>00:01:00;00:02:00;00:03:00</td><td>Y</td><td>00:02:00</td><td>минуты</td></tr>
													</table>
													</div>
													<br />
													Параметры типов товара могут быть различных, а именно:
													<ul>
													<li>I: Целое</li>
													<li>T: Текст</li>
													<li>S: Короткий текст</li>
													<li>F: Число с плавающей запятой</li>
													<li>C: Символьный</li>
													<li>D: Дата и время</li>
													<li>M: Время</li>
													<li>V: Множественное значение</li>
													<li>B: Разрыв строки</li>
													</ul>
													</li><br />
													<li><span style="font-weight: bold;">Позиции на каждый тип товара</span><br />
													Этот CSV файл содержит детали для каждого параметра типа товара и должен выглядеть следующим образом:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td><td>product_type_parameter_namex</td><td>product_type_parameter_namex</td></tr>
													<tr><td>1234</td><td>Исполнитель</td><td>Поп звезда</td><td>1975</td></tr>
													<tr><td>5678</td><td>Исполнитель</td><td>Рок-группа</td><td>1980</td></tr>
													</table><br />
													На каждый тип товара Вы должны иметь отдельный CSV. Это необходимо, так как для каждого CSV файла количество колонок будет различное из-за разного набора параметров.
													</li><br />
													<li><span style="font-weight: bold;">Связи между типом товара и артикулом товара</span><br />
													Этот CSV файл содержит связи между типом товара и артикулом товара и должен выглядеть следующим образом:
													<table border="1">
													<tr><td>product_sku</td><td>product_type_name</td></tr>
													<tr><td>1234</td><td>Исполнитель</td></tr>
													<tr><td>5678</td><td>Исполнитель</td></tr>
													</table>
													</li>
													</ul><br />
													Использование:<br />
													<ol>
													<li>Загрузить CSV файл с типами товара</li>
													<li>Загрузить CSV файл с параметрами типа товара</li>
													<li>Загрузить CSV файл с подробной информацией о типе товара</li>
													<li>Загрузить CSV файл с товарами принадлежащими разным типам одновременно</li>
													</ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_EMPTY_DATABASE = '<span style="color: #FF0000; font-size: 1.2em;">Очистить базу</span><br /><br />
													 <span style="color: #FF0000; font-size: 2em;">ИСПОЛЬЗОВАТЬ С ОСТОРОЖНОСТЬЮ!!! ВОССТАНОВЛЕНИЕ НЕВОЗМОЖНО !!!</span><br /><br />
													 Функция очистки базы удалит все информацию из следующих таблиц, базы данных магазина:
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
													 Также будет удален первый производитель из таблицы:
													 <ul>
													 <li>manufacturer</li>
													 </ul>
													 Следующие таблицы будут полностью удалены:
													 <ul>
													 <li>product_type_x</li>
													 </ul>
													 Где x указывает на номер таблицы. Этот номер относится к типу товара, который есть в магазине. Поскольку таблица полностью очищается, то эти таблицы будут удалены. Загрузка новых типов товара создаст эти таблицы заново.<br /><br />
													 Использование:
													 <ol>
													 <li>Выберите "Очистить базу" из ниспадающего меню в параметрах загрузки</li>
													 <li>Отметьте "Собирать информацию для отладки", если Вам нужна дополнительная информацию</li>
													 <li>Щелкните на "Загрузить CSV-файл" или "Загрузить CSV-файл с сервера". Вводить имя файла необязательно.</li>
													 <li>Система попросит Вас подтвердить, что Вы действительно хотите очистить базу. Нажмите на "Ok", если Вы действительно хотите очистить базу, в противном случае нажмите "Отмена"</li>
													 <li>База данных будет очищена или Вы вернетесь к основному меню, в зависимости от Вашего ответа на предыдущий вопрос.</li>
													 </ol>';
	var $_PHPSHOP_CSV_EXPLANATION_DOCUMENTATION_MULTIPLE_PRICES_UPLOAD = '<span style="color: #FF0000; font-size: 1.2em;">Полное обновление цен</span><br /><br />
														    Использование:
														    <ol>
														    <li>Создайте CSV файл, который содержит следующие поля:
														    	<ul>
															<li>product_sku</li>
															<li>product_price</li>
															<li>product_currency</li>
															<li>price_quantity_start</li>
															<li>price_quantity_end</li>
															<li>price_delete</li>
															</ul>
														    Ознакомьтесь с информацией на закладке "Доступные поля", чтобы уточнить, какую информацию может содержать каждое поле. Если Вы хотите использовать заголовки колонок как конфигурацию для обновления, то Вам необходимо заполнить первую строку файла соответствующими названиями полей.
														    </li>
														    <li>В любом случае установите поля, как говорилось в первом пункте на закладке "Конфигурация" или, если Вы добавили название полей в CSV файл, выберите "Использовать заголовки колонок как конфигурацию для обновления" в разделе "Параметры загрузки" на закладке "Импорт/Экспорт".
														    </li>
														    <li>Выберите "Полное обновление цен" в разделе "Параметры загрузки"</li>
														    <li>Дополнительно, Вы можете выбрать "Показать первые строки загружаемого файла " и/или "Собирать информацию для отладки"</li>
														    <li>Выберите файл, который следует загрузить с локального компьютера или сервера</li>
														    <li>Щелкните на "Загрузить CSV-файл" или "Загрузить CSV-файл с сервера", в зависимости от того, откуда Вы загружаете файл</li>
														    <li>Цены в магазине будут обновлены</li>
														    </ol><br /><br />
														    <span style="font-weight: bold;">Удаление цены</span><br />
														    При использовании опции "Полное обновление цен", Вы можете также удалять цены. Цена удаляется, когда значения следующих полей в CSV файле совпадают с данными в базе, а в соответствующем поле <strong>price_delete</strong> стоит значение <strong>Y</strong>:
														    <ul>
														    <li>product_sku</li>
														    <li>product_price</li>
														    <li>product_currency</li>
														    <li>price_quantity_start</li>
														    <li>price_quantity_end</li>
														    </ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PRICE = 'Цена товара, без символа валюты.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_price" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LENGTH = 'Длина товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_length" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_LWH_UOM = 'Единицы измерения длины, ширины и высоты товара. Это могут быть сантиметры, миллиметры и т.д.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_lwh_uom" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT = 'Вес товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_weight" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_WEIGHT_UOM = 'Единицы измерения веса. Это могут быть гр., кг. и  т.д.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_weight_uom" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTES = 'Свойства товара - это часть данных о товаре, которые используются для определения дочерних товар.<br />Использование:<ol><li>Добавьте поле (колонку) "attributes" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать.<br />Свойства должны быть разделены символом (|). Например имя_атрибута_1::порядок_сортировки_1|имя_атрибута_2::порядок_сортировки_2</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_ATTRIBUTE_VALUES = 'Значения свойств товара являются значениями для дочерних товаров, которые связаны с соответствующим свойством родительского товара. Например, если "Дрель" может поставляться мощностью 800 Вт. и 1000 Вт., то, соответственно, свойства товара "Дрель" будут 800 Вт. и 1000 Вт., дочерними товарами будут товары "Дрель 800 Вт." и "Дрель 1000 Вт.", которые будут соответственно связаны с родительским товаром "Дрель".<br />Использование:<ol><li>Добавьте поле (колонку) "attributes_values" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать.<br />Значения должны быть разделены символом (|). Например: название_свойства_1::значение_свойства_1|название_свойства_2::значение_свойства_2</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_START = 'Дата начала действия скидки. Дополнительную информацию Вы можете посмотреть в описании поля "product_discount".<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_discount_date_start" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>product_discount_date_start</li><ul><li>Дата: День/Месяц/Год или День-Месяц-Год<br />День и месяц могут быть 1 или 2 разрядными.<br />Год может быть 2 или 4 разрядным.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_DISCOUNT_DATE_END = 'Дата окончания действия скидки. Дополнительную информацию Вы можете посмотреть в описании поля "product_discount".<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_discount_date_end" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>product_discount_date_end</li><ul><li>Дата: День/Месяц/Год или День-Месяц-Год<br />День и месяц могут быть 1 или 2 разрядными.<br />Год может быть 2 или 4 разрядным.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_UPLOAD_SETTINGS = '<ul><li><span style="font-weight: bold;">Пропустить первую строку</span><br />Если в Вашем CSV файле есть строка с заголовками колонок, выберите опцию "Пропустить первую строку", чтобы пропустить эту строку. Это позволит предотвратить добавление заголовков в Вашу базу данных..</li><li><span style="font-weight: bold;">Заменить существующие данные</span><br />Когда Вы добавляете новый товар в базу данных, и не хотите, чтобы была заменена какая-либо уже существующая информация о товаре в базе данных, Вам необходимо снять флажок с опции "Заменить существующие данные". По умолчанию включено обновление информации в базе данных.</li><li><span style="font-weight: bold;">Игнорировать значения по-умолчанию</span><br />На закладке "Конфигурация", Вы можете указать значение по умолчание, которое будет использоваться, если Вы оставляете это поле пустым при импортировании CSV файла. Если опция "Игнорировать значения по-умолчанию" включена, то если поле в CSV файле пустое, то оно просто не будет импортироваться в базу данных.</li><li><span style="font-weight: bold;">Загрузить только цены</span><br />Выберите "Загрузить только цены" в меню "Параметры загрузки" на закладке "Импорт/Экспорт", если Вы хотите обновить только цену товара. В этом случае, CSV файл должен содержать только два поля:<ol><li>product_sku</span></li><li>product_price</li></ol></li>Пожалуйста, учите, что настройки, сделанные на закладке "Конфигурация" будут игнорироваться.<li><span style="font-weight: bold;">Использовать заголовки колонок как конфигурацию для обновления</span><br />Вы можете использовать опцию "Использовать заголовки колонок как конфигурацию для обновления" в том случае, если в Вашем CSV файле есть строка с заголовками колонок, и Вы хотите использовать эти заголовки как текущую конфигурацию загружаемого файла. Заголовки, используемые в CSV файле, должны полностью совпадать с теми, что описаны на закладке "Доступные поля". При использовании данной опции, конфигурация CSV файла в базе не сохраняется. Пожалуйста, учите, что настройки и значения по умолчанию, сделанные на закладке "Конфигурация" будут игнорироваться, вся необходимая информация должна быть в CSV файле.</li><li><span style="font-weight: bold;">Показать первые строки загружаемого файла</span><br />Показать пять первых строк загружаемого файла. После, Вы можете продолжить загрузку файла в базу или отменить.</li><li><span style="font-weight: bold;">Собирать информацию для отладки</span><br />В случае, если у Вас возникают при импорте информации в базу данных, используйте опцию "Собирать информацию для отладки", чтобы увидеть, что происходит при импорте информации. В конце процесса импорта, будет сформирован отчет со всеми шагами и запросами, сделанными при импорте информации.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_NAME = 'Наименование производителя товара. Используется в комбинации с ID производителя. Если ID производителя не указано, то только проверяется наличие только наименования производителя. Новые производители будут создаваться с увеличивающимся ID. Процесс добавления/обновления производителей происходит следующим образом:<ol><li>Наименование производителя существует, ID существует --> ID будет обновлен на новый, если в базе отличается, от указанного в CSV файле</li><li>Наименование производителя существует, ID не существует --> Будет создан новый производитель с ID</li><li>Наименование производителя не существует, ID существует --> Общее наименование производителя будет добавлено с таким ID</li><li>Наименование производителя не существует, ID не существует --> Ничего не делаем</li></ol>Использование:<ol><li>Добавьте поле (колонку) "manufacturer_name" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_MANUFACTURER_ID = 'ID производителя товара, должно быть уникальным. Используется в комбинации с наименованием производителя. Если наименованием производителя не указано, то будет добавлена/обновлена только ссылка на производителя. Процесс добавления/обновления производителей происходит следующим образом:<ol><li>Наименование производителя существует, ID существует --> ID будет обновлен на новый, если в базе отличается, от указанного в CSV файле</li><li>Наименование производителя существует, ID не существует --> Будет создан новый производитель с ID</li><li>Наименование производителя не существует, ID существует --> Общее наименование производителя будет добавлено с таким ID</li><li>Наименование производителя не существует, ID не существует --> Ничего не делаем</li></ol>Использование:<ol><li>Добавьте поле (колонку) "manufacturer_id" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_URL = 'Ссылка на изображение или web-страницу товара. Если ссылка на изображение, то оно будет показано на странице с детальным описанием товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_url" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SALES = 'Количество товара, которое было продано. Значение из этого поля используется, например, для отображения наиболее продаваемых товаров.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_sales" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_SPECIAL = 'Вы можете указать, что Вы рекомендуете данный товар. Используется, например, в разделе Рекомендуемые товары (если у Вас стоит соответствующий модуль).<br />Использование:<ol><li>Добавьте поле (колонку) "product_special" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, против товаров, которые Вы хотите рекомендовать, поставьте Y.</li></ol><br />Формат:<ul><li>Y: Да, рекомендовать товар</li><li>N: Нет, не рекомендовать товар</li><li>Пусто: Если Вы оставите поле пустым, то товар не будет рекомендован</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_UNIT = 'Единица продаваемого товара. Например: штука, коробка, упаковка и т.д.<br />Использование:<ol><li>Добавьте поле (колонку) "product_unit" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_CATEGORY_PATH = 'Товары структурированы в магазине согласно пути категории. Путь к категории определяет, в какой категории расположен товар. Это относится только для основных товаров, но не для дочерних, дочерние товары определяются относительно родительских товаров, а не относительно категорий. Для дочерних товаров это поле должно быть пустым. Для основных товаров поле "category_path" должно быть пустым, так как у них нет основных товаров.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "category_path" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте путь к категории.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать<br />Путь к категории должен быть разделен символом (/). Например: Мебель/Стулья/Деревянные стулья</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_PARENT_SKU = 'Поле product_parent_sku необходимо для определения основного товара для дочерних товаров. Обратите внимание: поле "category_path" ДОЛЖНО быть пустым, в противном случае товар будет рассматриваться как основной товар.<br />Использование:<ol><li>Добавьте поле (колонку) "product_parent_sku" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте значение product_parent_sku родительского товара.</li></ol><br />Формат:<ul><li>Число</li><li>Буквы</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TAX_ID = 'ID налоговой ставки, который Вы хотите применить к товару<br />Использование:<ol><li>Добавьте поле (колонку) "product_tax_id" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте product_tax_id, необходимого налога.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_CURRENCY = 'Вы можете использовать различные валюты для товаров.<br />Использование:<ol><li>Добавьте поле (колонку) "product_currency" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте обозначение новой валюты.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать<br />Например: Доллар США, Евро, Руб.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_BROWSEPAGE = 'Это настраиваемая страница, необходимая для отображения типов Вашего товара. Оставьте поле пустым, если у Вас нет индивидуальных php-файлов для нее.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_browsepage" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст:<ul><li>HTML код не использовать.</li><li>Ссылки (URL) допускаются.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_DESCRIPTION = 'Описание типа Вашего товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_description" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. Можно использовать HTML код</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_FLYPAGE = 'Это настраиваемая страница, необходимая для отображения типов Вашего товара. Оставьте поле пустым, если у Вас нет индивидуальных php-файлов для нее.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_flypage" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст:<ul><li>HTML код не использовать.</li><li>Ссылки (URL) допускаются.</li></ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_NAME = 'Название типа товара. Это название должно быть уникальным и не содержать пробелы.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_name" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DEFAULT = 'Значение по умолчанию для параметра типа товара, когда его значение не задано.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_default" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_DESCRIPTION = 'Описание параметра типа товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_description" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. Можно использовать HTML код</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LABEL = 'Заголовок для параметра типа товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_label" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_LIST_ORDER = 'Определение порядка вывода параметров типа товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_list_order" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_MULTISELECT = 'Установите "Y" для того чтобы было возможно выбирать из возможных вариантов значений параметра.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_list_multiselect" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте значение Y или N.</li></ol><br />Формат:<ul><li>Y: Да, есть возможность выбора из нескольких вариантов</li><li>N: Нет, нет возможности выбора из нескольких вариантов</li><li>Пусто: Если Вы оставите поле пустым, то не будет возможности выбора из нескольких вариантов</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_NAME = 'Наименование параметра типа товара. Это наименование должно быть уникальным и не содержать пробелы, так как оно будет названием колонки деталей параметра.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_name" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_TYPE = 'Устанавливает тип параметра, который будет использован. Вы можете использовать различные параметры типов товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_type" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст:<ul>
													<li>I: Целое</li>
													<li>T: Текст</li>
													<li>S: Короткий текст</li>
													<li>F: Число с плавающей запятой</li>
													<li>C: Символьный</li>
													<li>D: Дата и время</li>
													<li>M: Время</li>
													<li>V: Множественное значение</li>
													<li>B: Разрыв строки</li>
													</ul></li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_UNIT = 'Позиция к которой относится параметр типа товара.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_unit" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Текст. HTML код не использовать</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PARAMETER_VALUES = 'Это значения параметра типа товара, они должны удовлетворять требованиям (формату), установленному в поле product_type_parameter_type.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_parameter_values" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Зависит от типа параметров установленных в поле product_type_parameter_type. Все значения должны быть разделены символом (;).</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRODUCT_TYPE_PUBLISH = 'Статус типа товара - тип товар опубликован или скрыт.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "product_type_publish" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Формат:<ul><li>Y: Да, тип товар опубликован</li><li>N: Нет, тип товар скрыт</li><li>Пусто: Если Вы оставите поле пустым, то тип товар будет опубликован.</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_DELETE = 'Поле price_delete - это специальное поле. Поле используется, чтобы определить, необходимо удалить цену товара из базы или нет. Можно использовать поле при использовании опции "Полное обновление цен, в разделе "Параметры загрузки" на закладке "Импорт/Экспорт". Цена удаляется, когда значения следующих полей в CSV файле совпадают с данными в базе:<ul><li>product_sku</li><li>product_price</li><li>product_currency</li><li>price_quantity_start</li><li>price_quantity_end</li></ul><br />Использование:<ol><li>Добавьте поле (колонку) "price_delete" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте значение Y, против тех товаров, у которых Вы хотите удалить цену. Если в ячейке стоит другое значение (не Y), то товар удален не будет.</li></ol><br />Формат:<ul><li>Y: Да, необходимо удалить цену</li><li>N: Нет, цену удалять не надо</li><li>Пусто: Если Вы оставите поле пустым, то товар не будет удален</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_START = 'Количество приобретаемого товара, при котором начинает действовать указанная цена.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "price_quantity_start" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Число</li></ul>';
	var $_PHPSHOP_CSV_EXPLANATION_PRICE_QUANTITY_END = 'Количество приобретаемого товара, после которого перестает действовать указанная цена.<br /><br />Использование:<ol><li>Добавьте поле (колонку) "price_quantity_end" в закладку "Конфигурация" (файл CSV). Название поля зависит от регистра и должно быть в нижнем регистре.</li><li>В файле CSV, в этой колонке, добавьте необходимую информацию.</li></ol><br />Число</li></ul>';
        
}
class phpShopLanguage extends vmLanguage { }

/** @global vmLanguage $VM_LANG */
$VM_LANG =& new vmLanguage();
?>