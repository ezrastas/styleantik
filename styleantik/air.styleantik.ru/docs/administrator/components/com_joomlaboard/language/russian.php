<?php
/**
* russian.php joomlaboard russian
* @package com_joomlaboard
* @copyright (C) 2000 - 2007 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF
* Joomla! is Free Software
**/

// Dont allow direct linking
defined( '_VALID_MOS' ) or die( 'Прямой доступ закрыт.' );

// changed in 1.1.5
DEFINE('_GEN_CATEGORY','Категория');
DEFINE('_GEN_STARTEDBY','Автор: ');
DEFINE('_GEN_STATS','Статистика');
DEFINE('_STATS_TITLE',' форум - статистика');
DEFINE('_STATS_GEN_STATS','Основная статистика');
DEFINE('_STATS_TOTAL_MEMBERS','Участников:');
DEFINE('_STATS_TOTAL_REPLIES','Ответов:');
DEFINE('_STATS_TOTAL_TOPICS','Тем:');
DEFINE('_STATS_TODAY_TOPICS','Тем сегодня:');
DEFINE('_STATS_TODAY_REPLIES','Ответов сегодня:');
DEFINE('_STATS_TOTAL_CATEGORIES','Категорий:');
DEFINE('_STATS_TOTAL_SECTIONS','Секций:');
DEFINE('_STATS_LATEST_MEMBER','Последний участник:');
DEFINE('_STATS_YESTERDAY_TOPICS','Вчера тем:');
DEFINE('_STATS_YESTERDAY_REPLIES','Вчера ответов:');
DEFINE('_STATS_POPULAR_PROFILE','10 популярных участников (Просмотров профиля)');
DEFINE('_STATS_TOP_POSTERS','Лучшие по количеству сообщений');
DEFINE('_STATS_POPULAR_TOPICS','Самые популярные темы');
DEFINE('_COM_A_STATSPAGE','Включить ссылки на статистику');
DEFINE('_COM_A_STATSPAGE_DESC','Если установить в &quot;Да&quot; в заголовке будет показана ссылка на страницу статистики.Страница статистики показывает различную информацию о вашем форуме. <em>Статистика будет всегда доступна администраторам форума!</em>');
DEFINE('_COM_C_JBSTATS','Статистика форума');
DEFINE('_COM_C_JBSTATS_DESC','Статистика форума показывает статистическую информацию по вашему форуму');
define('_GEN_GENERAL','Основная');
define('_PERM_NO_READ','У вас нет прав для просмотра этого форума.');

//changed in 1.1.4 stable
DEFINE('_COM_A_PMS_TITLE','Система Личных Сообщений');
DEFINE('_COM_A_COMBUILDER_TITLE','Community Builder');
DEFINE('_FORUM_SEARCH','Искать: %s');
DEFINE('_MODERATION_DELETE_MESSAGE','Вы уверенны, что собираетесь удалить сообщение? \n\n примечание: Сообщение будет удалено навсегда!');
DEFINE('_MODERATION_DELETE_SUCCESS','Пост удалён успешно.');
DEFINE('_COM_A_SB_BY','Компонент - форум для Joomla. Автор');
DEFINE('_COM_A_RANKING','Показывать категорию');
DEFINE('_COM_A_BOT_REFERENCE','Показать описание мамбота');
DEFINE('_COM_A_MOSBOT','Включить Discuss Bot');
DEFINE('_PREVIEW','Предосмотор');
DEFINE('_COM_C_UPGRADE','Обновление БД до версии: ');
DEFINE('_COM_A_MOSBOT_TITLE','Discussbot');
DEFINE('_COM_A_MOSBOT_DESC',
 'Discuss Bot добавляет к статье ссылку для её обсуждения на форуме. Название статьи используется как название топика..'
.'<br />Если тема не существует, она создается. Если тема уже существует, пользователю показываются сообщения и он может ответить.'
.'<br /><strong>Вы должны скачать и установить Bot отдельно.</strong>'
.'<br />Посетите <a href="http://tsmf.jigsnet.com">TSMF Site</a> для получения информации.'
.'<br />После установки Вы должны добавлять Bot к нужным статьям в таком виде:'
.'<br />{mos_sb_discuss:<em>catid</em>}'
.'<br /><em>catid</em> является категорией, в которой статья может быть обсуждена. Чтобы находить надлежащий catid, изучите форумы '
.'и проверьте id категории из URL в статусной строке вашего браузера.'
.'<br />Пример: Если Вы добавляете Бот к статье с catid 26, Bot выглядит так: {mos_sb_discuss:26}'
.'<br />Это кажется немного трудным, но это действительно позволяет Вам иметь отдельные топики на форуме для обсуждения статей.');

//new in 1.1.4 stable
// search.class.php
DEFINE('_FORUM_SEARCHTITLE','Поиск');
DEFINE('_FORUM_SEARCHRESULTS','показано %s из %s результатов.');

// rules.php
DEFINE('_COM_FORUM_RULES','<h3 class="contentheading">Правила Форума</h3><ul><li>1. Администратор всегда прав!</li><li>2. Если администратор не прав, см. пунк первый!</li><li>3. Друг друга не обижать!</li><li>4. Не поганить форум!</li><li>...</li></ul>');

//smile.class.php
DEFINE('_COM_BOARDCODE','Boardcode');

// moderate_messages.php
DEFINE('_MODERATION_APPROVE_SUCCESS','Сообщение (я) было одобрено');
DEFINE('_MODERATION_DELETE_ERROR','ОШИБКА: Сообщение (я) не может быть удалено');
DEFINE('_MODERATION_APPROVE_ERROR','ОШИБКА: Сообщение (я) не было одобрено');

// listcat.php
DEFINE('_GEN_NOFORUMS','В этой категории нет никаких форумов!');

//new in 1.1.3 stable
DEFINE('_POST_GHOST_FAILED','Не возможно создать тему-сылку в старом форуме!');
DEFINE('_POST_MOVE_GHOST','Оставить тему-ссылку ("тема была перемещена") на старом форуме');

//new in 1.1 Stable
DEFINE('_GEN_FORUM_JUMP','Быстрый переход');
DEFINE('_COM_A_FORUM_JUMP','Включить быстрый переход');
DEFINE('_COM_A_FORUM_JUMP_DESC','Если выбрано &quot;Да&quot; на страницах форума появится выпадающий список, позволяющий быстро перейти к другому форуму или категории.');
//new in 1.1 RC1
DEFINE('_GEN_RULES','Правила');
DEFINE('_COM_A_RULESPAGE','Включить страницу правил');
DEFINE('_COM_A_RULESPAGE_DESC','Если выбрано &quot;Да&quot; в заголовке таблицы форума добавится ссылка на страницу с Правилами форума. Содержимое страницы правил может быть отредактировано непосредственно в файле rules.php, расположенном в диреткории /joomla_root/components/com_joomlaboard. <em>Не забудьте сделать резервную копию этого файла перед внесением изменений!</em>');
DEFINE('_MOVED_TOPIC','Топик перемещён:');
DEFINE('_COM_A_PDF','Включить генерацию PDF');
DEFINE('_COM_A_PDF_DESC','Выберите &quot;Да&quot; если хотите дать возможность пользователям загружать PDF файл с содержимым ветки.<br />Это <u>простой</u> PDF документ; без закладок, без оформления, просто содержащий весь текст ветки форума.');
DEFINE('_GEN_PDFA','Нажмите эту кнопку, чтобы сгенерировать PDF документ с содержанием этой ветки (откроется в новом окне).');
DEFINE('_GEN_PDF', 'PDF'); 
//new in 1.0.4 stable
DEFINE('_VIEW_PROFILE','Кликните здесь, чтобы посмотреть профайл этого пользователя');
DEFINE('_VIEW_ADDBUDDY','Кликните здесь, чтобы добавить пользователя в ваш контакт лист');
DEFINE('_POST_SUCCESS_POSTED','Ваше сообщение успешно добавлено');
DEFINE('_POST_SUCCESS_VIEW','Если Вы хотите вернуться к вашему посту, кликните ');
DEFINE('_POST_SUCCESS_FORUM','Если Вы хотите вернуться к списку разделов форума, кликните ');
DEFINE('_RANK_ADMINISTRATOR','Администратор');
DEFINE('_RANK_MODERATOR','Модератор');
DEFINE('_SHOW_LASTVISIT','С Вашего последнего посещения');
DEFINE('_COM_A_BADWORDS_TITLE','Фильтр нецензурных слов');
DEFINE('_COM_A_BADWORDS','Использовать фильтр нецензурных слов');
DEFINE('_COM_A_BADWORDS_DESC','Выберите &quot;Да&quot; если Вы хотите фильтровать сообщения, содержащие слова, перечисленные в настройках компонента Фильтр нецензурных слов. Для использования этой функции у Вас должен быть установлен компонент Фильтр нецензурных слов!');
DEFINE('_COM_A_BADWORDS_NOTICE','* Этот пост был отфильтрован, поскольку содержал одно или более слов, запрещенных к употреблению на форуме администратором *');
DEFINE('_COM_A_COMBUILDER_PROFILE','Создать профайл для Community Builder');
DEFINE('_COM_A_COMBUILDER_PROFILE_DESC','Кликните по ссылке, чтобы создать необходимые поля в профайле пользователя для компонента Community Builder. После того, как они будут созданы, Вы можете переименовать их или переместить, используя настройки компонента Community Builder, однако не переименовывайте их названия и опции. Если Вы удалите эти поля из Community Builder, Вы можете создать их снова, воспользовавшись этой ссылкой. Не рекомендуется нажимать на эту ссылку более одного раза!');
DEFINE('_COM_A_COMBUILDER_PROFILE_CLICK','> Кликните здесь <');
DEFINE('_COM_A_COMBUILDER','профайлы пользователя Community Builder');
DEFINE('_COM_A_COMBUILDER_DESC','Выберите &quot;Да&quot; для интеграции с компонентом Community Builder (www.mambojoe.com). Все функции профайла пользователя JoomlaBoard будут переданы в профайл пользователя компонента Community Builder и по ссылке на профайл Вы будете перенаправлены в этот компонент. Эта установка перекрывает настройки для профайла myPMS Pro в случае, если они тоже установлены в &quot;Да&quot;. Также не забудьте произвести необходимые изменения в базе Community Builder-а для интеграции его с форумом.');
DEFINE('_COM_A_AVATAR_SRC','Использовать картинку аватара из');
DEFINE('_COM_A_AVATAR_SRC_DESC','Если у Вас установлены компоненты myPMS Professional или Community Builder, Вы можете настроить JoomlaBoard так, чтобы он использовал в качестве  аватара  картинку пользователя, выбранную им в профайле myPMS Pro или Community Builder.');
DEFINE('_COM_A_KARMA','Показывать индикатор Кармы');
DEFINE('_COM_A_KARMA_DESC','Выберите &quot;Да&quot; чтобы показать индикатор Кармы пользователя и соответствующие кнопки (повысить / снизить) в случае,если активирован  Статус Пользователя.');
DEFINE('_COM_A_DISEMOTICONS','Отключить иконки эмоций');
DEFINE('_COM_A_DISEMOTICONS_DESC','Выберите &quot;Да&quot; чтобы полностью отключить графическое отображение эмоций (смайликов).');
DEFINE('_COM_C_SBCONFIG','Конфигурация JoomlaBoard');
DEFINE('_COM_C_SBCONFIGDESC','Управление всеми функциями JoomlaBoard');
DEFINE('_COM_C_FORUM','Управление<br/>форумами');
DEFINE('_COM_C_FORUMDESC','Добавление категорий/форумов и их настройка');
DEFINE('_COM_C_USER','Управление<br/>пользователями');
DEFINE('_COM_C_USERDESC','Управление пользователями и их профайлами');
DEFINE('_COM_C_FILES','Браузер<br/>файлов');
DEFINE('_COM_C_FILESDESC','Просмотр и управление загруженными файлами');
DEFINE('_COM_C_IMAGES','Браузер<br/>изображений');
DEFINE('_COM_C_IMAGESDESC','Просмотр и управление загруженными изображениями');
DEFINE('_COM_C_CSS','Изменить<br/>CSS файл');
DEFINE('_COM_C_CSSDESC','Изменение внешнего вида форума');
DEFINE('_COM_C_SUPPORT','Сайт поддержки<br/>JoomlaBoard');
DEFINE('_COM_C_SUPPORTDESC','Ссылка на сайт авторов JoomlaBoard-а (в новом окне)');
DEFINE('_COM_C_PRUNETAB','Очистка<br/>форумов');
DEFINE('_COM_C_PRUNETABDESC','Удаление старых веток (настраивается)');
DEFINE('_COM_C_PRUNEUSERS','Очистка<br/>пользователей');
DEFINE('_COM_C_PRUNEUSERSDESC','Синхронизация таблицы пользователей JoomlaBoard и Joomla');
DEFINE('_COM_C_LOADSAMPLE','Загрузка<br/>примеров');
DEFINE('_COM_C_LOADSAMPLEDESC','Для быстрого старта: загрузите примерную конфигурацию форумов в только что созданные таблицы JoomlaBoard');
DEFINE('_COM_C_UPGRADEDESC','Обновление Вашей базы данных компонента до последней версии после обновления файлов');
DEFINE('_COM_C_BACK','Вернуться в панель управления форумом');
DEFINE('_SHOW_LAST_SINCE','Активные темы с момента Вашего последнего посещения:');
DEFINE('_POST_SUCCESS_REQUEST2','Ваш запрос обработан');
DEFINE('_POST_NO_PUBACCESS3','Кликните здесь для регистрации.');
//==================================================================================================
//Changed in 1.0.4
//please update your local language file with these changes as well
DEFINE('_POST_SUCCESS_DELETE','Удаление прошло успешно.');
DEFINE('_POST_SUCCESS_EDIT','Редактирование прошло успешно.');
DEFINE('_POST_SUCCESS_MOVE','Топик успешно перемещён.');
DEFINE('_POST_SUCCESS_POST','Ваш пост успешно добавлен.');
DEFINE('_POST_SUCCESS_SUBSCRIBE','Запрос на подписку обработан.');
//==================================================================================================
//new in 1.0.3 stable
//Karma
DEFINE('_KARMA','Репутация');
DEFINE('_KARMA_SMITE','Понизить');
DEFINE('_KARMA_APPLAUD','Повысить');
DEFINE('_KARMA_BACK','Для возврата к теме,');
DEFINE('_KARMA_WAIT','Вы можете изменять карму только для одного человека каждые 6 часов. <br/>Пожалуйста убедитесь, что положенное время прошло, когда в следующий раз вы будете изменять карму пользователя.');
DEFINE('_KARMA_SELF_DECREASE','Пожалуйста не пытайтесь уменьшать собственную карму!');
DEFINE('_KARMA_SELF_INCREASE','Ваша Репутация была уменьшена для дальнейшего повышения!');
DEFINE('_KARMA_DECREASED','Репутация пользователя уменьшена. Если Вы не вернетесь в раздел форума через несколько секунд,');
DEFINE('_KARMA_INCREASED','Репутация пользователя уменьшена. Если Вы не вернетесь в раздел форума через несколько секунд,');
DEFINE('_COM_A_TEMPLATE_DESC','Выберите шаблон.');
DEFINE('_COM_A_TEMPLATE','Шаблон');
DEFINE('_PREVIEW_CLOSE','Закрыть это окно');
//==========================================
//new in 1.0 Stable
DEFINE('_GEN_PATHWAY','Путь :: ');
DEFINE('_COM_A_POSTSTATSBAR','Использовать графическую панель статистики');
DEFINE('_COM_A_POSTSTATSBAR_DESC','Установите &quot;Да&quot; если вы хотите чтобы статистика сообщений пользователей отображалась графической панелькой.');
DEFINE('_COM_A_POSTSTATSCOLOR','Носер цвета для линейки статистики');
DEFINE('_COM_A_POSTSTATSCOLOR_DESC','Получить номер цвета который будет использоваться в строке статистики сообщений пользователя');
DEFINE('_LATEST_REDIRECT','Форуму требуется (пере)установить ваши права доступа перед созданием списка последних сообщений для вас.\nНе волнуйтесь, это нормальный процесс при неактивности пользователя около 30 минут, возможно понадобиться войти на сайт снова.\nПожалуйста отправьте запрос поиска снова.');
DEFINE('_SMILE_COLOUR','Цвет');
DEFINE('_SMILE_SIZE','Размер');
DEFINE('_COLOUR_DEFAULT','Стандартный');
DEFINE('_COLOUR_RED','Красный');
DEFINE('_COLOUR_PURPLE','Фиолетовый');
DEFINE('_COLOUR_BLUE','Синий');
DEFINE('_COLOUR_GREEN','Зеленый');
DEFINE('_COLOUR_YELLOW','Желтый');
DEFINE('_COLOUR_ORANGE','Оранжевый');
DEFINE('_COLOUR_DARKBLUE','Темно-синий');
DEFINE('_COLOUR_BROWN','Коричневый');
DEFINE('_COLOUR_GOLD','Золотой');
DEFINE('_COLOUR_SILVER','Серебрянный');
DEFINE('_SIZE_NORMAL','Нормальный');
DEFINE('_SIZE_SMALL','Маленький');
DEFINE('_SIZE_VSMALL','Очень маленький');
DEFINE('_SIZE_BIG','Большой');
DEFINE('_SIZE_VBIG','Очень большой');
DEFINE('_IMAGE_SELECT_FILE','Выберите файл изображения для присоединения');
DEFINE('_FILE_SELECT_FILE','Выберите файл для присоединения');
DEFINE('_FILE_NOT_UPLOADED','Ваш файл не может быть загружен. Попробуйте снова создать пост или отредактировать уже имеющийся');
DEFINE('_IMAGE_NOT_UPLOADED','Ваше изображение не может быть загружен. Попробуйте снова создать пост или отредактировать уже имеющийся');
DEFINE('_BBCODE_IMGPH','Вставьте тэг [img] в текст сообщения для присоединения изображения');
DEFINE('_BBCODE_FILEPH','Вставьте тэг [file] в текст сообщения для присоединения файла');
DEFINE('_POST_ATTACH_IMAGE','[img]');
DEFINE('_POST_ATTACH_FILE','[file]');
DEFINE('_USER_UNSUBSCRIBE_ALL','Отметьте этот бокс для того, чтобы отписаться от всех тем (включая недоступные использующиеся для тестирования)');
DEFINE('_LINK_JS_REMOVED','<em>Активные ссылки содержащие JavaScript будут удалены автоматически</em>');
//==========================================
//new in 1.0 RC4
DEFINE('_COM_A_LOOKS','Внешний вид');
DEFINE('_COM_A_USERS','Пользовательские');
DEFINE('_COM_A_LENGTHS','Настройки длинны');
DEFINE('_COM_A_SUBJECTLENGTH','Макс. длинна темы');
DEFINE('_COM_A_SUBJECTLENGTH_DESC','Максимальная длинна поля для темы. Максимально допустимое число символов - 255. Если Ваш сайт сконфигурирован для использования мультибайтных символов - например Unicode, UTF-8, не-ISO-8599-x, используйте для вычисления максимальной длинны эту формулу:<br/><tt>round_down(255/(максимальное число байтов в одном символе))</tt><br/> Например для UTF-8, один символ может занимать 4 байта: 255/4=63.');
DEFINE('_LATEST_THREADFORUM','Топик / Форум');
DEFINE('_LATEST_NUMBER','Новых . . .');
DEFINE('_COM_A_SHOWNEW','Показать новые сообщения');
DEFINE('_COM_A_SHOWNEW_DESC','Если &quot;Да&quot; то JoomlaBoard показывает пользователю индикатор, какие форумы содержат новые посты и какие посты являются новыми начиная с его/ее последнего посещения.');
DEFINE('_COM_A_NEWCHAR','&quot;New&quot; индикатор');
DEFINE('_COM_A_NEWCHAR_DESC','Укажите, что должно использоваться, для обозначения новых постов (&quot;!&quot; или &quot;New!&quot;)');
DEFINE('_LATEST_AUTHOR','Автор');
DEFINE('_GEN_FORUM_NEWPOST','Новые сообщения после Вашего последнего визита есть');
DEFINE('_GEN_FORUM_NOTNEW','Нет новых сообщений со времени Вашего последнего визита');
DEFINE('_GEN_UNREAD','Новые ответы после Вашего последнего визита есть');
DEFINE('_GEN_NOUNREAD','Нет новых ответов со времени Вашего последнего визита');
DEFINE('_GEN_MARK_ALL_FORUMS_READ','Пометить все форумы как прочитанные');
DEFINE('_GEN_MARK_THIS_FORUM_READ','Пометить этот форум как прочитанный');
DEFINE('_GEN_FORUM_MARKED','Все сообщения в этом форуме будут помечены как прочитанные');
DEFINE('_GEN_ALL_MARKED','Все сообщения будут помечены как прочитанные');
DEFINE('_IMAGE_UPLOAD','Загрузить изображение');
DEFINE('_IMAGE_DIMENSIONS','Файл изображения может иметь размеры, не более, чем (ширина x высота)');
DEFINE('_IMAGE_ERROR_TYPE','Пожалуйста загружайте только изображения в формате jpeg, gif или png');
DEFINE('_IMAGE_ERROR_EMPTY','Пожалуйста выберите файл для загрузки');
DEFINE('_IMAGE_ERROR_SIZE','Размеры загружаемого изображения превышают максимально допустимые.');
DEFINE('_IMAGE_ERROR_WIDTH','Ширина изображения превышает максимально допустимую.');
DEFINE('_IMAGE_ERROR_HEIGHT','Высота изображения превышает максимально допустимую.');
DEFINE('_IMAGE_UPLOADED','Ваше изображение успешно загружено.');
DEFINE('_COM_A_IMAGE','Изображения');
DEFINE('_COM_A_IMGHEIGHT','Макс. высота изображения');
DEFINE('_COM_A_IMGWIDTH','Макс. ширина изображения');
DEFINE('_COM_A_IMGSIZE','Макс. размер файла изображения<br/><em>в Кб</em>');
DEFINE('_COM_A_IMAGEUPLOAD','Разрешить публичную загрузку изображений');
DEFINE('_COM_A_IMAGEUPLOAD_DESC','Установите &quot;Да&quot; для разрешения загрузки всем пользователям.');
DEFINE('_COM_A_IMAGEREGUPLOAD','Разрешить зарегистрированным пользователям загружать изображения');
DEFINE('_COM_A_IMAGEREGUPLOAD_DESC','Установите &quot;Да&quot; для разрешения загрузки зарегистрированным пользователям.<br/> Примечание: (Super)administrators и модераторы всегда имеют права на загрузку изображений.');
  //New since preRC4-II:
DEFINE('_COM_A_UPLOADS','Загрузки');
DEFINE('_FILE_TYPES','Ваш файл может иметь тип - макс. размер');
DEFINE('_FILE_ERROR_TYPE','Разрешено загружать только файлы с расширениями:\n');
DEFINE('_FILE_ERROR_EMPTY','Пожалуйста выберите файл для загрузки');
DEFINE('_FILE_ERROR_SIZE','Размер файла превышает максимально допустимый размер установленный администратором.');
DEFINE('_COM_A_FILE','Файлы');
DEFINE('_COM_A_FILEALLOWEDTYPES','Разрешенные типы файлов');
DEFINE('_COM_A_FILEALLOWEDTYPES_DESC','Укажите типы файлов, разрешенных для загрузки. Используйте запятую для разделения, <strong>строчные буквы</strong>, без пробелов.<br />Пример: zip,txt,exe,htm,html');
DEFINE('_COM_A_FILESIZE','Макс. размер файла<br/><em>в Кб</em>');
DEFINE('_COM_A_FILEUPLOAD','Разрешить загрузку всем пользователям');
DEFINE('_COM_A_FILEUPLOAD_DESC','Установите &quot;Да&quot; если всем разрешена загрузка файлов.');
DEFINE('_COM_A_FILEREGUPLOAD','Разрешить загрузку зарегистрированным пользователям');
DEFINE('_COM_A_FILEREGUPLOAD_DESC','Установите &quot;Да&quot; если только зарегистрированные пользователи могут загружать файлы.<br/> Примечание: (Super)administrators и модераторы всегда имеют права на загрузку файлов.');
DEFINE('_SUBMIT_CANCEL','Ваш пост было отменён');
DEFINE('_HELP_SUBMIT','Кликните для отправки сообщения');
DEFINE('_HELP_PREVIEW','Кликните для просмотра Вашего сообщения перед публикацией');
DEFINE('_HELP_CANCEL','Кликните для отмены Вашего сообщения');
DEFINE('_POST_DELETE_ATT','Установите флажок для удаления файлов и изображений, прикрепленных к сообщению (рекомендуется).');
   //new since preRC4-III
DEFINE('_COM_A_USER_MARKUP','Показывать редактора сообщения');
DEFINE('_COM_A_USER_MARKUP_DESC','Установите &quot;Да&quot; если хотите указывать под содержимым поста кто и когда его редактировал.');
DEFINE('_EDIT_BY','Содержимое поста отредактировано:');
DEFINE('_EDIT_AT','в:');
DEFINE('_UPLOAD_ERROR_GENERAL','Ошибка при загрузке аватары. Пожалуйста повторите или сообщите администратору');
DEFINE('_COM_A_IMGB_IMG_BROWSE','Просмотр загруженных изображений');
DEFINE('_COM_A_IMGB_FILE_BROWSE','Просмотр загруженных файлов');
DEFINE('_COM_A_IMGB_TOTAL_IMG','Число загруженных изображений');
DEFINE('_COM_A_IMGB_TOTAL_FILES','Число загруженных файлов');
DEFINE('_COM_A_IMGB_ENLARGE','Кликните изображение файла для просмотра в полном размере');
DEFINE('_COM_A_IMGB_DOWNLOAD','Кликните изображение файла для скачивания');
DEFINE('_COM_A_IMGB_DUMMY_DESC','Опция &quot;Заменить фиктивным&quot; заменяет выбранное изображение фиктивным.<br /> Это позволяет удалить фактически файл, не разрушая содержимое поста.<br /><small><em>Пожалуйста обратите внимание, что иногда требуется обновить окно в браузере, для отображения замены.</em></small>');
DEFINE('_COM_A_IMGB_DUMMY','Текущее фиктивное изображение');
DEFINE('_COM_A_IMGB_REPLACE','Заменить фиктивным');
DEFINE('_COM_A_IMGB_REMOVE','Удалить полностью');
DEFINE('_COM_A_IMGB_NAME','Имя');
DEFINE('_COM_A_IMGB_SIZE','Размер');
DEFINE('_COM_A_IMGB_DIMS','Измерения');
DEFINE('_COM_A_IMGB_CONFIRM','Вы действительно хотите удалить файл? \n Удаление файла нарушит ссылки в сообщениях...');
DEFINE('_COM_A_IMGB_VIEW','Просмотр/редактирование поста)');
DEFINE('_COM_A_IMGB_NO_POST','Нет ссылающихся сообщений!');
DEFINE('_USER_CHANGE_VIEW','Изменения вступят в силу при следующем посещении форума.<br /> Чтобы изменить тип представления &quot;Mid-Flight&quot; Вы можете использовать варианты из меню форума.');
DEFINE('_MOSBOT_DISCUSS_A','Обсудить новость в форуме. (');
DEFINE('_MOSBOT_DISCUSS_B',' сообщений)');
DEFINE('_POST_DISCUSS','Обсуждение статьи');
DEFINE('_COM_A_RSS','Включить RSS');
DEFINE('_COM_A_RSS_DESC','Лента RSS позволяет пользователю получать последние сообщения на форуме прямо на рабочий  стол или в любой RSS-клиент (например <a href="http://www.rssreader.com" target="_blank">rssreader.com</a>).');
DEFINE('_LISTCAT_RSS','получить последние сообщения прямо на Ваш рабочий стол');
DEFINE('_SEARCH_REDIRECT','Форуму необходимо (пере)установит ваши привилегии перед подготовкой вашего запроса.\nНе волнуйтесь обычно это происходит при неактивности пользователя в течение 30 минут.\nПожалуйста повторите Ваш запрос еще раз.');

//====================
//admin.forum.html.php
DEFINE('_COM_A_CONFIG','Конфигурация');
DEFINE('_COM_A_VERSION','Ваша версия ');
DEFINE('_COM_A_DISPLAY','Показать #');
DEFINE('_COM_A_CURRENT_SETTINGS','Текущие установки');
DEFINE('_COM_A_EXPLANATION','Пояснение');
DEFINE('_COM_A_BOARD_TITLE','Заголовок');
DEFINE('_COM_A_BOARD_TITLE_DESC','Название Вашего форума');
DEFINE('_COM_A_VIEW_TYPE','Вид по умолчанию');
DEFINE('_COM_A_VIEW_TYPE_DESC','Выберите между древовидным или плоским видом по умолчанию');
DEFINE('_COM_A_THREADS','Заголовков на страницу');
DEFINE('_COM_A_THREADS_DESC','Число заголовков на страницу для показа');
DEFINE('_COM_A_REGISTERED_ONLY','Только зарегистрированные пользователи');
DEFINE('_COM_A_REG_ONLY_DESC','Установите &quot;Да&quot;, чтобы позволить только зарегистрированным пользователям использовать форум (Просмотр & отправка), Установите &quot;Нет&quot;, чтобы позволить всем посетителям использовать форум');
DEFINE('_COM_A_PUBWRITE','Общий Чтение/Запись');
DEFINE('_COM_A_PUBWRITE_DESC','Установите &quot;Да&quot;, чтобы разрешить всем привелегии на запись, установите &quot;Нет&quot;, чтобы любой посетитель мог видеть сообщения, но только регистрированные пользователи могли писать сообщения');
DEFINE('_COM_A_USER_EDIT','Редактор пользователей');
DEFINE('_COM_A_USER_EDIT_DESC','Установите &quot;Да&quot;, чтобы зарегистрированные пользователи могли редактировать их собственные сообщения');
DEFINE('_COM_A_MESSAGE','Для того, чтобы сохранить изменения значений,нажмите кнопку &quot;Save&quot; на верху.');
DEFINE('_COM_A_HISTORY','Показать историю');
DEFINE('_COM_A_HISTORY_DESC','Установите &quot;Да&quot; если Вы хотите, чтобы показывалась история темы, когда нажимаете Ответить или Цитировать');
DEFINE('_COM_A_SUBSCRIPTIONS','Разрешить подписку');
DEFINE('_COM_A_SUBSCRIPTIONS_DESC','Установите &quot;Да&quot;, если Вы хотите разрешить зарегистрированным пользователям подписываться на тему и получать по e-mail уведомления о новом сообщении');
DEFINE('_COM_A_HISTLIM','Предельный размер Истории');
DEFINE('_COM_A_HISTLIM_DESC','Предел сообщений для показа в истории');
DEFINE('_COM_A_FLOOD','Защита от флуда');
DEFINE('_COM_A_FLOOD_DESC','Количетсво секунд, которые пользователь должен подождать между двумя сообщениями подряд. Установите 0 (ноль) для выключения защиты от Flood-а. ПРИМЕЧАНИЕ: Защита от Flood-а <em>может</em> привести к ухудшению производительности ...');
DEFINE('_COM_A_MODERATION','Посылать Email модераторам');
DEFINE('_COM_A_MODERATION_DESC','Установите &quot;Да&quot;, если Вы хотите посылать уведомления по e-mail  на новые сообщения, посланные в форум модератором. Примечание: Хотя каждый (super)administrator имет автоматически все привелегии модератора, назначьте их явно как модератору форума, чтобы также получать e-mails!.');

DEFINE('_COM_A_SHOWMAIL','Показывать Email');
DEFINE('_COM_A_SHOWMAIL_DESC','Установите &quot;Нет&quot;, если Вы никогда не хотите показывать e-mail адреса пользователей; не только для регистрированных пользователей.');
DEFINE('_COM_A_AVATAR','Разрешить Аватары');
DEFINE('_COM_A_AVATAR_DESC','Установите &quot;Да&quot;, если Вы хотите, чтобы зарегистрированные пользователи могли подключать Аватары (и управлять ими через их профаилы)');
DEFINE('_COM_A_AVHEIGHT','Макс. высота Аватара');
DEFINE('_COM_A_AVWIDTH','Макс. ширина Аватара');
DEFINE('_COM_A_AVSIZE','Макс. размер файла Аватара <br/><em>в килобайтах</em>');
DEFINE('_COM_A_USERSTATS','Показывать статистику пользователя');
DEFINE('_COM_A_USERSTATS_DESC','Установите &quot;Да&quot; для того, чтобы показывать статистику пользователя как число сообщений сделанных пользователем, тип пользователя (Админ, Модератор, Пользователь, и т.д..).');
DEFINE('_COM_A_AVATARUPLOAD','Разрешить загрузку Аватар');
DEFINE('_COM_A_AVATARUPLOAD_DESC','Установите &quot;Да&quot;, если Вы хотите, чтобы зарегистрированные пользователи могли загружать Аватары.');
DEFINE('_COM_A_AVATARGALLERY','Использовать галерею Аватар');
DEFINE('_COM_A_AVATARGALLERY_DESC','Установите &quot;Да&quot;, если Вы хотите, чтобы зарегистрированные пользователи могли выбирать Аватары из галереи, которую вы предоставляете ( (components/com_joomlaboard/avatars/gallery).');
DEFINE('_COM_A_RANKING_DESC','Установите &quot;Да&quot;, если Вы хотите показывать категорию зарегистрированных пользователей исходя из количества сообщений, которые они послали.<br/><strong>Учтите, что Вы должны разрешить статистику пользователя в закладке Frontend, чтобы показать категории пользователей.');
DEFINE('_COM_A_RANKINGIMAGES','Использовать картинки категорий');
DEFINE('_COM_A_RANKINGIMAGES_DESC','Установите &quot;Да&quot;, если Вы хотите показывать категорию зарегистрированных пользователей вместе с картинками (из components/com_joomlaboard/ranks). При выключении этой опции категории будут показываться в текстовом виде. Смотрите документацию на www.tsmf-mambo.com для более полной информации о картинках для категорий');
DEFINE('_COM_A_RANK1','Категория 1');
DEFINE('_COM_A_RANK1TXT','Категория 1 текст');
DEFINE('_COM_A_RANK2','Категория 2');
DEFINE('_COM_A_RANK2TXT','Категория 2 текст');
DEFINE('_COM_A_RANK3','Категория 3');
DEFINE('_COM_A_RANK3TXT','Категория 3 текст');
DEFINE('_COM_A_RANK4','Категория 4');
DEFINE('_COM_A_RANK4TXT','Категория 4 текст');
DEFINE('_COM_A_RANK5','Категория 5');
DEFINE('_COM_A_RANK5TXT','Категория 5 текст');
DEFINE('_COM_A_RANK6','Категория 6');
DEFINE('_COM_A_RANK6TXT','Категория 6 текст');
DEFINE('_COM_A_RANK','Категория');
DEFINE('_COM_A_RANK_NAME','Название категории');
DEFINE('_COM_A_RANK_LIMIT','Ограничение категории');
//email and stuff
$_COM_A_NOTIFICATION ="Уведомление о новом сообщении от ";
$_COM_A_NOTIFICATION1="Добавлен новый пост в тему на которую Вы подписаны ";
$_COM_A_NOTIFICATION2="Вы можете управлять Вашими подписками через ссылку 'мой профиль' на странице форума после того, как Вы вошли на сайт. Из Вашего профиля Вы можете отписаться от темы.";
$_COM_A_NOTIFICATION3="Не отвечайте на это уведомление по email т.к. это автоматически посланный e-mail.";
$_COM_A_NOT_MOD1="Добавлен новый пост в форум, модератором которого Вы являетесь ";
$_COM_A_NOT_MOD2="Пожалуйста проверьте после того, как Вы войдете на сайт.";

DEFINE('_COM_A_NO','Нет');
DEFINE('_COM_A_YES','Да');
DEFINE('_COM_A_FLAT','Плоский');
DEFINE('_COM_A_THREADED','Древовидный');
DEFINE('_COM_A_MESSAGES','Сообщений на страницу');
DEFINE('_COM_A_MESSAGES_DESC','Число сообщений на страницу для показа');
   //admin; changes from 0.9 to 0.9.1
DEFINE('_COM_A_USERNAME','Имя пользователя');
DEFINE('_COM_A_USERNAME_DESC','Установите &quot;Да&quot; если Вы хотите, чтобы имя пользователя (логин) использовалось вместо его реального имени');
DEFINE('_COM_A_CHANGENAME','Разрешить изменение имени');
DEFINE('_COM_A_CHANGENAME_DESC','Установите &quot;Да&quot; если Вы хотите разрешить зарегистрированным пользователям изменять их реальное имя при добавлении сообщения. Если установлено &quot;Нет&quot; - пользователи не смогут изменять свое имя');
   //admin; changes 0.9.1 to 0.9.2
DEFINE('_COM_A_BOARD_OFFLINE','Форум закрыт');
DEFINE('_COM_A_BOARD_OFFLINE_DESC','Установите &quot;Да&quot; если Вы хотите временно отключить форум. При этом форум останется доступен для СуперАдминистратора.');
DEFINE('_COM_A_BOARD_OFFLINE_MES','Сообщение о причине закрытия');
DEFINE('_COM_A_PRUNE','Очистить форумы');
DEFINE('_COM_A_PRUNE_NAME','Выберите форум:');
DEFINE('_COM_A_PRUNE_DESC','Функция очистки форума позволяет уничтожать ветки, в которых не проявлялась активность на протяжении выбранного количества дней. Эта функция не затрагивает ветки форума, которые прикреплены или закрыты; они должны быть удалены вручную. Ветки в закрытых форумах также не очищаются.');
DEFINE('_COM_A_PRUNE_NOPOSTS','Очистить ветки в которых нет сообщений за последние ');
DEFINE('_COM_A_PRUNE_DAYS','дней');
DEFINE('_COM_A_PRUNE_USERS','Очистить пользователей');
DEFINE('_COM_A_PRUNE_USERS_DESC','эта функция позволяет очистить список пользователей JoomlaBoard, при удалении пользователя Joomla. Она удаляет все профили пользователей форума, которые были удалены из системы.<br/>Если Вы уверены в правильности своих действий, нажмите &quot;Начать очистку&quot;.');


//general
DEFINE('_GEN_ACTION','Действие');
DEFINE('_GEN_AUTHOR','Автор');
DEFINE('_GEN_BY',' ');
DEFINE('_GEN_CANCEL','Отмена');
DEFINE('_GEN_CONTINUE','Отправить');
DEFINE('_GEN_DATE','Дата');
DEFINE('_GEN_DELETE','Удалить');
DEFINE('_GEN_EDIT','Редактировать');
DEFINE('_GEN_EMAIL','e-mail');
DEFINE('_GEN_EMOTICONS','Смайлики');
DEFINE('_GEN_FLAT','Плоский');
DEFINE('_GEN_FLAT_VIEW','Плоский вид');
DEFINE('_GEN_FORUMLIST','Список форумов');
DEFINE('_GEN_FORUM','Форум');
DEFINE('_GEN_HELP','Помощь');
DEFINE('_GEN_HITS','Просмотры');
DEFINE('_GEN_LAST_POST','Последний пост');
DEFINE('_GEN_LATEST_POSTS','Показать свежие посты');
DEFINE('_GEN_LOCK','Заблокировать');
DEFINE('_GEN_UNLOCK','Разблокировать');
DEFINE('_GEN_LOCKED_FORUM','этот форум заблокирован; новые посты невозможны.');
DEFINE('_GEN_LOCKED_TOPIC','этот форум/тема заблокирован(а); новые посты невозможны.');
DEFINE('_GEN_MESSAGE','Сообщение');
DEFINE('_GEN_MODERATED','этот форум модерируется; новые сообщения просматриваются до их публикации.');
DEFINE('_GEN_MODERATORS','Модераторы');
DEFINE('_GEN_MOVE','Переместить');
DEFINE('_GEN_NAME','Имя');
DEFINE('_GEN_POST_NEW_TOPIC','Создать новый топик');
DEFINE('_GEN_POST_REPLY','Ответить');
DEFINE('_GEN_MYPROFILE','Мой профиль');
DEFINE('_GEN_QUOTE','Цитировать');
DEFINE('_GEN_REPLY','Ответить');
DEFINE('_GEN_REPLIES','Ответы');
DEFINE('_GEN_THREADED','Древовидный');
DEFINE('_GEN_THREADED_VIEW','Древовидный вид');
DEFINE('_GEN_SIGNATURE','Подпись');
DEFINE('_GEN_ISSTICKY','эта тема прикреплена.');
DEFINE('_GEN_STICKY','Прикрепить');
DEFINE('_GEN_UNSTICKY','Открепить');
DEFINE('_GEN_SUBJECT','Тема');
DEFINE('_GEN_SUBMIT','Послать');
DEFINE('_GEN_TOPIC','Топик');
DEFINE('_GEN_TOPICS','Топики');
DEFINE('_GEN_TOPIC_ICON','Иконка топика');
DEFINE('_GEN_SEARCH_BOX','поиск...');
$_GEN_THREADED_VIEW="древовидный вид";
$_GEN_FLAT_VIEW    ="плоский вид";

//avatar_upload.php
DEFINE('_UPLOAD_UPLOAD','Загрузить');
DEFINE('_UPLOAD_DIMENSIONS','Ваша картинка может иметь максимальные размеры (ширина x высота)');
DEFINE('_UPLOAD_SUBMIT','Загрузить новую Аватару');
DEFINE('_UPLOAD_SELECT_FILE','Выберите файл');
DEFINE('_UPLOAD_ERROR_TYPE','Пожалуйста используйте только jpeg, gif or png файлы');
DEFINE('_UPLOAD_ERROR_EMPTY','Пожалуйста выберите файл до загрузки');
DEFINE('_UPLOAD_ERROR_NAME','Файл должен содержать цифры, буквы и не иметь пробелов.');
DEFINE('_UPLOAD_ERROR_SIZE','Размер файла картинки превысил максимум, установленный администратором.');
DEFINE('_UPLOAD_ERROR_WIDTH','Ширина картинки превысила максимум, установленный администратором.');
DEFINE('_UPLOAD_ERROR_HEIGHT','Высота картинки превысила максимум, установленный администратором.');
DEFINE('_UPLOAD_ERROR_CHOOSE',"Вы не выбрали Аватару из галереи..");
DEFINE('_UPLOAD_UPLOADED','Ваш Аватар загружен.');
DEFINE('_UPLOAD_GALLERY','Выберите картинку из галереи Аватар:');
DEFINE('_UPLOAD_CHOOSE','Подтвердите выбор.');

// listcat.php
DEFINE('_LISTCAT_ADMIN','Администратор должен создать их сначала из ');
DEFINE('_LISTCAT_DO','Они знают, что делать ');
DEFINE('_LISTCAT_INFORM','Информируйте их и попросите поторопиться!');
DEFINE('_LISTCAT_NO_CATS','Нет категорий определенных в форуме.');
DEFINE('_LISTCAT_PANEL','Административная панель Joomla.');
DEFINE('_LISTCAT_PENDING','Сообщения, ожидающие решения');

// moderation.php
DEFINE('_MODERATION_MESSAGES','Нет сообщений, ожидающих рассмотрения в этом форуме.');

// post.php
DEFINE('_POST_ABOUT_TO_DELETE','Вы собираетесь удалить пост');
DEFINE('_POST_ABOUT_DELETE','<strong>ПРИМЕЧАНИЕ:</strong><br/>
-если вы удалите тему в форуме (первый пост в списке), то будут удалены все связанные сообщения!
..Учитывайте, пустой пост и имя его пославшего, если только содержание должно быть удалено..
<br/>
- Все связанные посты удаленного обычного поста будут сдвинуты вверх на 1 в иерархии списка.');
DEFINE('_POST_CLICK','кликните здесь');
DEFINE('_POST_ERROR','Не могу найти username/email. Серьзная ошибка, база данных не описана');
DEFINE('_POST_ERROR_MESSAGE','Произошла неизвестная ошибка SQL и Ваш пост не отправлен.  Если ошибка повторится снова - свяжитесь с модератором.');
DEFINE('_POST_ERROR_MESSAGE_OCCURED','Произошла ошибка и содержимое поста не обновлено.  Пожалуйста, попытайтесь снова. Если ошибка повторится снова - свяжитесь с модератором.');
DEFINE('_POST_ERROR_TOPIC','Произошла ошибка при удалении. Проверьте ошибку внизу:');
DEFINE('_POST_FORGOT_NAME','Вы забыли указать Ваше имя.  Нажмите в вашем браузере&#146s кнопку назад, чтобы вернуться и попытаться снова.');
DEFINE('_POST_FORGOT_SUBJECT','Вы забыли указать тему.  Нажмите в вашем браузере&#146s кнопку назад , чтобы вернуться и попытаться снова.');
DEFINE('_POST_FORGOT_MESSAGE','Вы забыли ввести текст сообщения. Нажмите в вашем браузере&#146s кнопку назад , чтобы вернуться и попытаться снова.');
DEFINE('_POST_INVALID','Неправильный идентификатор сообщения запрошен.');
DEFINE('_POST_LOCK_SET','Топик заблокирован.');
DEFINE('_POST_LOCK_NOT_SET','Топик не может быть заблокирован.');
DEFINE('_POST_LOCK_UNSET','Топик разблокирован.');
DEFINE('_POST_LOCK_NOT_UNSET','Топик не может быть разблокирован.');
DEFINE('_POST_MESSAGE','Создать в теме ');
DEFINE('_POST_MOVE_TOPIC','Переместить топик в форум');
DEFINE('_POST_NEW','Отправить в ');
DEFINE('_POST_NO_SUBSCRIBED_TOPIC','Ваша подписка на этот топик не может быть обработана.');
DEFINE('_POST_NOTIFIED','Отметьте здесь, чтобы получать уведомления об ответах на эту тему');
DEFINE('_POST_STICKY_SET','Флаг ПРИКРЕПИТЬ установлен для этой темы.');
DEFINE('_POST_STICKY_NOT_SET','Флаг ПРИКРЕПИТЬ не может быть установлен для этой темы.');
DEFINE('_POST_STICKY_UNSET','Флаг ПРИКРЕПИТЬ удален для этой темы.');
DEFINE('_POST_STICKY_NOT_UNSET','Флаг ПРИКРЕПИТЬ не может быть удален для этой темы.');
DEFINE('_POST_SUBSCRIBE','Подписаться');
DEFINE('_POST_SUBSCRIBED_TOPIC','Вы подписаны на этот топик.');
DEFINE('_POST_SUCCESS','Ваш пост был успешным');
DEFINE('_POST_SUCCES_REVIEW','Содержимое Вашего поста успешно отправлено.  Оно будет просмотрено Модератором до публикации в форуме.');
DEFINE('_POST_SUCCESS_REQUEST','Ваш запрос обработан.  Если вы не возвращаетесь к теме,');
DEFINE('_POST_TOPIC_HISTORY','История топика ');
DEFINE('_POST_TOPIC_HISTORY_MAX',' В истории выводятся последние ');
DEFINE('_POST_TOPIC_HISTORY_LAST','сообщений  -  <i>(сначала идут последние сообщения)</i>');
DEFINE('_POST_TOPIC_NOT_MOVED','Ваш топик не может быть перемещён. Для возврата к топику: ');
DEFINE('_POST_TOPIC_FLOOD1','Администратор этого форума включил защиту от Flood-а, вы должны подождать');
DEFINE('_POST_TOPIC_FLOOD2',' секунд между постами, прежде, чем Вы пошлете другой пост.');
DEFINE('_POST_TOPIC_FLOOD3','Нажмите в Вашем браузере&#146s кнопку назад, чтобы вернуться к Вашему сообщению.');
DEFINE('_POST_EMAIL_NEVER','Ваш email адрес никогда не будет показан на сайте.');
DEFINE('_POST_EMAIL_REGISTERED','Ваш email адрес будет доступен только для зарегистрированных пользователей.');
DEFINE('_POST_LOCKED','Заблокирован администратором.');
DEFINE('_POST_NO_NEW','Новые ответы не разрешены.');
DEFINE('_POST_NO_PUBACCESS1','Создавать сообщения могут только зарегистрированные пользователи.');
DEFINE('_POST_NO_PUBACCESS2','Вам разрешено просматривать форум, но только зарегистрированные <br/>пользователи могут посылать сообщения.');

// showcat.php
DEFINE('_SHOWCAT_NO_TOPICS','>> Нет топков в этом форуме <<');
DEFINE('_SHOWCAT_PENDING','посты, ожидающие рассмотрения');

// userprofile.php
DEFINE('_USER_DELETE',' отметьте здесь для удаления Вашей подписи');
DEFINE('_USER_ERROR_A','Вы зашли на эту страницу с ошибкой. Пожалуйста, сообщите администратору по какой ссылке ');
DEFINE('_USER_ERROR_B','Вы нажали и оказались здесь. Она или он может подделать сообщение об ошибке.');
DEFINE('_USER_ERROR_C','Спасибо Вам!');
DEFINE('_USER_ERROR_D','Номер ошибки для включения в отчет: ');
DEFINE('_USER_GENERAL','Общие опции профиля');
DEFINE('_USER_MODERATOR','Вы назначены модератором в форумах');
DEFINE('_USER_MODERATOR_NONE','Нет форумов назначенных для Вас');
DEFINE('_USER_MODERATOR_ADMIN','Админ - модератор для всех форумов.');
DEFINE('_USER_NOSUBSCRIPTIONS','Нет подписок для Вас');
DEFINE('_USER_PREFERED','Предпочтительный вид');
DEFINE('_USER_PROFILE','Профиль для ');
DEFINE('_USER_PROFILE_NOT_A','Ваш профиль ');
DEFINE('_USER_PROFILE_NOT_B','не');
DEFINE('_USER_PROFILE_NOT_C',' может быть обновлен.');
DEFINE('_USER_PROFILE_UPDATED','Ваш профиль обновлен.');
DEFINE('_USER_RETURN_A','Если Вы не вернетесь к Вашему профилю в ближайшее время ');
DEFINE('_USER_RETURN_B','нажмите здесь');
DEFINE('_USER_SUBSCRIPTIONS','Темы, на которые Вы подписаны');
DEFINE('_USER_UNSUBSCRIBE',':: отписаться :: ');
DEFINE('_USER_UNSUBSCRIBE_A','Вы ');
DEFINE('_USER_UNSUBSCRIBE_B','не ');
DEFINE('_USER_UNSUBSCRIBE_C',' можете быть отписаны от этой темы.');
DEFINE('_USER_UNSUBSCRIBE_YES','Вы отписаны от этой темы.');
DEFINE('_USER_DELETEAV',' Отметьте здесь для удаления Вашего Аватара');
//New 0.9 to 1.0
DEFINE('_USER_ORDER','Предпочтительный порядок сортировки');
DEFINE('_USER_ORDER_DESC','Последние сообщения в начале');
DEFINE('_USER_ORDER_ASC','Последние сообщения в конце');

// view.php
DEFINE('_VIEW_DISABLED','Для добавления сообщений Вы должны зарегистрироваться или авторизоваться.');
DEFINE('_VIEW_POSTED','Послан ');
DEFINE('_VIEW_SUBSCRIBE',':: Подписаться на эту тему ::');
DEFINE('_MODERATION_INVALID_ID','Запрошен неправильный идентификатор сообщения.');
DEFINE('_VIEW_NO_POSTS','В этом форуме нет сообщений.');
DEFINE('_VIEW_VISITOR','Посетитель');
DEFINE('_VIEW_ADMIN','Администратор');
DEFINE('_VIEW_USER','Пользователь');
DEFINE('_VIEW_MODERATOR','Модератор');
DEFINE('_VIEW_REPLY','Ответить на это сообщение');
DEFINE('_VIEW_EDIT','Редактировать этот пост');
DEFINE('_VIEW_QUOTE','Цитировать этот пост в новом посте');
DEFINE('_VIEW_DELETE','Удалить этот пост');
DEFINE('_VIEW_STICKY','ПРИКРЕПИТЬ тему');
DEFINE('_VIEW_UNSTICKY','ОТПУСТИТЬ тему');
DEFINE('_VIEW_LOCK','Заблокировать эту тему');
DEFINE('_VIEW_UNLOCK','Разблокировать эту тему');
DEFINE('_VIEW_MOVE','Переместить эту тему в другой форум');
DEFINE('_VIEW_SUBSCRIBETXT','Подписаться на эту тему и получать уведомления по email о новых сообщениях');


//NEW-STRINGS-FOR-TRANSLATING-READY-FOR-SIMPLEBOARD 9.2


DEFINE('_HOME','Начало');
DEFINE('_POSTS','Постов:');
DEFINE('_TOPIC_NOT_ALLOWED','Сообщение');
DEFINE('_FORUM_NOT_ALLOWED','Форум');
DEFINE('_FORUM_IS_OFFLINE','Форум в режиме OFFLINE!');
DEFINE('_PAGE','Страница: ');
DEFINE('_NO_POSTS','Пусто');
DEFINE('_CHARS','символов максимально.');
DEFINE('_HTML_YES','HTML включен');
DEFINE('_YOUR_AVATAR','<b>Ваш Аватар</b>');
DEFINE('_NON_SELECTED','не выбран <br>');
DEFINE('_SET_NEW_AVATAR','Выберите новый Аватар');
DEFINE('_THREAD_UNSUBSCRIBE',':: отписаться ::');
DEFINE('_SHOW_LAST_POSTS','Активные темы за последние');
DEFINE('_SHOW_HOURS','часа(ов)');
DEFINE('_SHOW_POSTS','Всего: ');
DEFINE('_DESCRIPTION_POSTS','Будут показаны новые сообщения за последние');
DEFINE('_SHOW_4_HOURS','4 часов');
DEFINE('_SHOW_8_HOURS','8 часов');
DEFINE('_SHOW_12_HOURS','12 часов');
DEFINE('_SHOW_24_HOURS','24 часов');
DEFINE('_SHOW_48_HOURS','48 часов');
DEFINE('_SHOW_WEEK','Неделя');
DEFINE('_POSTED_AT','Добавлено');
DEFINE('_DATETIME','d.m.Y H:i');
DEFINE('_NO_TIMEFRAME_POSTS','За выбранный промежуток времени новых сообщений не найдено.');
DEFINE('_MESSAGE','Сообщение:');
DEFINE('_NO_SMILIE','нет');
DEFINE('_FORUM_UNAUTHORIZIED','Этот форум открыт только для зарегистрированных пользователей.');
DEFINE('_FORUM_UNAUTHORIZIED2','Если Вы уже зарегистрировались, пожалуйста выполните процедуру входа.');
DEFINE('_MESSAGE_ADMINISTRATION','Модерирование');
DEFINE('_MOD_APPROVE','Принять');
DEFINE('_MOD_DELETE','Удалить');

//NEW in RC1
DEFINE('_SHOW_LAST','Показать последние сообщения');
DEFINE('_POST_WROTE','писал(а)');
DEFINE('_COM_A_EMAIL','Email адрес форума');
DEFINE('_COM_A_EMAIL_DESC','Это email адрес форума. Введите правильный адрес');
DEFINE('_COM_A_WRAP','Переносить слова длиннее чем');
DEFINE('_COM_A_WRAP_DESC','Введите максимальное количество символов в одном слове. Эта опция позволяет Вам подогнать вывод сообщений форума к Вашему шаблону.<br/> для шаблонов, имеющих фиксированную ширину 70 символов - это максимально возможное значение.<br/>URLs, могут быть разной длинны, поэтому они не переносятся');
DEFINE('_COM_A_SIGNATURE','Макс. длинна подписи');
DEFINE('_COM_A_SIGNATURE_DESC','Максимальное количество символов в подписи пользователя.');
DEFINE('_SHOWCAT_NOPENDING','Нет ожидающих сообщений');
DEFINE('_COM_A_BOARD_OFSET','Временная зона форума');
DEFINE('_COM_A_BOARD_OFSET_DESC','Некоторые форумы расположены на серверах в часовых поясах, отличных от часового пояса пользователя. Укажите положительное или отрицательное значение в часах');

//New in RC2
DEFINE('_COM_A_BASICS','Основные');
DEFINE('_COM_A_FRONTEND','Вид форума');
DEFINE('_COM_A_SECURITY','Безопасность');
DEFINE('_COM_A_AVATARS','Аватары');
DEFINE('_COM_A_INTEGRATION','Интеграция');
DEFINE('_COM_A_PMS','Личные сообщения');
DEFINE('_COM_A_PMS_DESC','Выберите &quot;Да&quot; если Вы хотите, включить поддержку системы личных сообщений myPMS2 (соответствующий компонент должен быть установлен');
DEFINE('_VIEW_PMS','Кликните здесь, чтобы отправить пользователю Личное сообщение');

//new in RC3
DEFINE('_POST_RE','В ответ на: ');
DEFINE('_BBCODE_BOLD','Жирный текст: [b]текст[/b] ');
DEFINE('_BBCODE_ITALIC','Наклонный текст: [i]текст[/i]');
DEFINE('_BBCODE_UNDERL','Подчеркнутый текст: [u]текст[/u]');
DEFINE('_BBCODE_QUOTE','Текст цитаты: [quote]текст[/quote]');
DEFINE('_BBCODE_CODE','Текст кода: [code]код[/code]');
DEFINE('_BBCODE_ULIST','Ненумерованный список: [ul] [li]текст[/li] [/ul] - Подсказка: список должен содержать элементы списка');
DEFINE('_BBCODE_OLIST','Нумерованный список: [ol] [li]текст[/li] [/ol] - Подсказка: список должен содержать элементы списка');
DEFINE('_BBCODE_IMAGE','Изображение: [img size=(01-499)]http://www.google.com/images/web_logo_left.gif[/img]');
DEFINE('_BBCODE_LINK','Ссылка: [url]http://www.zzz.com/[/url] or [url=http://www.zzz.com/]This is a link[/url]');
DEFINE('_BBCODE_CLOSA','Закрыть все тэги');
DEFINE('_BBCODE_CLOSE','Закрыть все открытые тэги bbCode');
DEFINE('_BBCODE_COLOR','Цвет: [color=#FF6600]текст[/color]');
DEFINE('_BBCODE_SIZE','Размер: [size=1]размер текста[/size] - Подсказка: размер в пределах от 1 до 5');
DEFINE('_BBCODE_LITEM','Элемент списка: [li] элемент списка [/li]');
DEFINE('_BBCODE_HINT','bbCode Помощь - Подсказка: bbCode может быть применен только к выделенному тексту!');
DEFINE('_COM_A_TAWIDTH','Ширина области');
DEFINE('_COM_A_TAWIDTH_DESC','Задает ширину области ввода текста для обеспечения совместимости с Вашим шаблоном. <br/>Панель смайликов будет разбита на две строки, если ширина области <= 450');
DEFINE('_COM_A_TAHEIGHT','Высота области');
DEFINE('_COM_A_TAHEIGHT_DESC','Задает высоту области ввода текста для обеспечения совместимости с Вашим шаблоном.');
DEFINE('_COM_A_ASK_EMAIL','Использовать E-mail');
DEFINE('_COM_A_ASK_EMAIL_DESC','Требовать от пользователя ввода email адреса при добавлении сообщения? Выберите &quot;Нет&quot; если Вы хотите убрать эту проверку. Посетителям не будет показано поле для ввода email  адреса.');

?>