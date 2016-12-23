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
defined( '_VALID_MOS' ) or die( '������ ������ ������.' );

// changed in 1.1.5
DEFINE('_GEN_CATEGORY','���������');
DEFINE('_GEN_STARTEDBY','�����: ');
DEFINE('_GEN_STATS','����������');
DEFINE('_STATS_TITLE',' ����� - ����������');
DEFINE('_STATS_GEN_STATS','�������� ����������');
DEFINE('_STATS_TOTAL_MEMBERS','����������:');
DEFINE('_STATS_TOTAL_REPLIES','�������:');
DEFINE('_STATS_TOTAL_TOPICS','���:');
DEFINE('_STATS_TODAY_TOPICS','��� �������:');
DEFINE('_STATS_TODAY_REPLIES','������� �������:');
DEFINE('_STATS_TOTAL_CATEGORIES','���������:');
DEFINE('_STATS_TOTAL_SECTIONS','������:');
DEFINE('_STATS_LATEST_MEMBER','��������� ��������:');
DEFINE('_STATS_YESTERDAY_TOPICS','����� ���:');
DEFINE('_STATS_YESTERDAY_REPLIES','����� �������:');
DEFINE('_STATS_POPULAR_PROFILE','10 ���������� ���������� (���������� �������)');
DEFINE('_STATS_TOP_POSTERS','������ �� ���������� ���������');
DEFINE('_STATS_POPULAR_TOPICS','����� ���������� ����');
DEFINE('_COM_A_STATSPAGE','�������� ������ �� ����������');
DEFINE('_COM_A_STATSPAGE_DESC','���� ���������� � &quot;��&quot; � ��������� ����� �������� ������ �� �������� ����������.�������� ���������� ���������� ��������� ���������� � ����� ������. <em>���������� ����� ������ �������� ��������������� ������!</em>');
DEFINE('_COM_C_JBSTATS','���������� ������');
DEFINE('_COM_C_JBSTATS_DESC','���������� ������ ���������� �������������� ���������� �� ������ ������');
define('_GEN_GENERAL','��������');
define('_PERM_NO_READ','� ��� ��� ���� ��� ��������� ����� ������.');

//changed in 1.1.4 stable
DEFINE('_COM_A_PMS_TITLE','������� ������ ���������');
DEFINE('_COM_A_COMBUILDER_TITLE','Community Builder');
DEFINE('_FORUM_SEARCH','������: %s');
DEFINE('_MODERATION_DELETE_MESSAGE','�� ��������, ��� ����������� ������� ���������? \n\n ����������: ��������� ����� ������� ��������!');
DEFINE('_MODERATION_DELETE_SUCCESS','���� ����� �������.');
DEFINE('_COM_A_SB_BY','��������� - ����� ��� Joomla. �����');
DEFINE('_COM_A_RANKING','���������� ���������');
DEFINE('_COM_A_BOT_REFERENCE','�������� �������� �������');
DEFINE('_COM_A_MOSBOT','�������� Discuss Bot');
DEFINE('_PREVIEW','�����������');
DEFINE('_COM_C_UPGRADE','���������� �� �� ������: ');
DEFINE('_COM_A_MOSBOT_TITLE','Discussbot');
DEFINE('_COM_A_MOSBOT_DESC',
 'Discuss Bot ��������� � ������ ������ ��� � ���������� �� ������. �������� ������ ������������ ��� �������� ������..'
.'<br />���� ���� �� ����������, ��� ���������. ���� ���� ��� ����������, ������������ ������������ ��������� � �� ����� ��������.'
.'<br /><strong>�� ������ ������� � ���������� Bot ��������.</strong>'
.'<br />�������� <a href="http://tsmf.jigsnet.com">TSMF Site</a> ��� ��������� ����������.'
.'<br />����� ��������� �� ������ ��������� Bot � ������ ������� � ����� ����:'
.'<br />{mos_sb_discuss:<em>catid</em>}'
.'<br /><em>catid</em> �������� ����������, � ������� ������ ����� ���� ���������. ����� �������� ���������� catid, ������� ������ '
.'� ��������� id ��������� �� URL � ��������� ������ ������ ��������.'
.'<br />������: ���� �� ���������� ��� � ������ � catid 26, Bot �������� ���: {mos_sb_discuss:26}'
.'<br />��� ������� ������� �������, �� ��� ������������� ��������� ��� ����� ��������� ������ �� ������ ��� ���������� ������.');

//new in 1.1.4 stable
// search.class.php
DEFINE('_FORUM_SEARCHTITLE','�����');
DEFINE('_FORUM_SEARCHRESULTS','�������� %s �� %s �����������.');

// rules.php
DEFINE('_COM_FORUM_RULES','<h3 class="contentheading">������� ������</h3><ul><li>1. ������������� ������ ����!</li><li>2. ���� ������������� �� ����, ��. ���� ������!</li><li>3. ���� ����� �� �������!</li><li>4. �� �������� �����!</li><li>...</li></ul>');

//smile.class.php
DEFINE('_COM_BOARDCODE','Boardcode');

// moderate_messages.php
DEFINE('_MODERATION_APPROVE_SUCCESS','��������� (�) ���� ��������');
DEFINE('_MODERATION_DELETE_ERROR','������: ��������� (�) �� ����� ���� �������');
DEFINE('_MODERATION_APPROVE_ERROR','������: ��������� (�) �� ���� ��������');

// listcat.php
DEFINE('_GEN_NOFORUMS','� ���� ��������� ��� ������� �������!');

//new in 1.1.3 stable
DEFINE('_POST_GHOST_FAILED','�� �������� ������� ����-����� � ������ ������!');
DEFINE('_POST_MOVE_GHOST','�������� ����-������ ("���� ���� ����������") �� ������ ������');

//new in 1.1 Stable
DEFINE('_GEN_FORUM_JUMP','������� �������');
DEFINE('_COM_A_FORUM_JUMP','�������� ������� �������');
DEFINE('_COM_A_FORUM_JUMP_DESC','���� ������� &quot;��&quot; �� ��������� ������ �������� ���������� ������, ����������� ������ ������� � ������� ������ ��� ���������.');
//new in 1.1 RC1
DEFINE('_GEN_RULES','�������');
DEFINE('_COM_A_RULESPAGE','�������� �������� ������');
DEFINE('_COM_A_RULESPAGE_DESC','���� ������� &quot;��&quot; � ��������� ������� ������ ��������� ������ �� �������� � ��������� ������. ���������� �������� ������ ����� ���� ��������������� ��������������� � ����� rules.php, ������������� � ���������� /joomla_root/components/com_joomlaboard. <em>�� �������� ������� ��������� ����� ����� ����� ����� ��������� ���������!</em>');
DEFINE('_MOVED_TOPIC','����� ���������:');
DEFINE('_COM_A_PDF','�������� ��������� PDF');
DEFINE('_COM_A_PDF_DESC','�������� &quot;��&quot; ���� ������ ���� ����������� ������������� ��������� PDF ���� � ���������� �����.<br />��� <u>�������</u> PDF ��������; ��� ��������, ��� ����������, ������ ���������� ���� ����� ����� ������.');
DEFINE('_GEN_PDFA','������� ��� ������, ����� ������������� PDF �������� � ����������� ���� ����� (��������� � ����� ����).');
DEFINE('_GEN_PDF', 'PDF'); 
//new in 1.0.4 stable
DEFINE('_VIEW_PROFILE','�������� �����, ����� ���������� ������� ����� ������������');
DEFINE('_VIEW_ADDBUDDY','�������� �����, ����� �������� ������������ � ��� ������� ����');
DEFINE('_POST_SUCCESS_POSTED','���� ��������� ������� ���������');
DEFINE('_POST_SUCCESS_VIEW','���� �� ������ ��������� � ������ �����, �������� ');
DEFINE('_POST_SUCCESS_FORUM','���� �� ������ ��������� � ������ �������� ������, �������� ');
DEFINE('_RANK_ADMINISTRATOR','�������������');
DEFINE('_RANK_MODERATOR','���������');
DEFINE('_SHOW_LASTVISIT','� ������ ���������� ���������');
DEFINE('_COM_A_BADWORDS_TITLE','������ ����������� ����');
DEFINE('_COM_A_BADWORDS','������������ ������ ����������� ����');
DEFINE('_COM_A_BADWORDS_DESC','�������� &quot;��&quot; ���� �� ������ ����������� ���������, ���������� �����, ������������� � ���������� ���������� ������ ����������� ����. ��� ������������� ���� ������� � ��� ������ ���� ���������� ��������� ������ ����������� ����!');
DEFINE('_COM_A_BADWORDS_NOTICE','* ���� ���� ��� ������������, ��������� �������� ���� ��� ����� ����, ����������� � ������������ �� ������ ��������������� *');
DEFINE('_COM_A_COMBUILDER_PROFILE','������� ������� ��� Community Builder');
DEFINE('_COM_A_COMBUILDER_PROFILE_DESC','�������� �� ������, ����� ������� ����������� ���� � �������� ������������ ��� ���������� Community Builder. ����� ����, ��� ��� ����� �������, �� ������ ������������� �� ��� �����������, ��������� ��������� ���������� Community Builder, ������ �� ���������������� �� �������� � �����. ���� �� ������� ��� ���� �� Community Builder, �� ������ ������� �� �����, ���������������� ���� �������. �� ������������� �������� �� ��� ������ ����� ������ ����!');
DEFINE('_COM_A_COMBUILDER_PROFILE_CLICK','> �������� ����� <');
DEFINE('_COM_A_COMBUILDER','�������� ������������ Community Builder');
DEFINE('_COM_A_COMBUILDER_DESC','�������� &quot;��&quot; ��� ���������� � ����������� Community Builder (www.mambojoe.com). ��� ������� �������� ������������ JoomlaBoard ����� �������� � ������� ������������ ���������� Community Builder � �� ������ �� ������� �� ������ �������������� � ���� ���������. ��� ��������� ����������� ��������� ��� �������� myPMS Pro � ������, ���� ��� ���� ����������� � &quot;��&quot;. ����� �� �������� ���������� ����������� ��������� � ���� Community Builder-� ��� ���������� ��� � �������.');
DEFINE('_COM_A_AVATAR_SRC','������������ �������� ������� ��');
DEFINE('_COM_A_AVATAR_SRC_DESC','���� � ��� ����������� ���������� myPMS Professional ��� Community Builder, �� ������ ��������� JoomlaBoard ���, ����� �� ����������� � ��������  �������  �������� ������������, ��������� �� � �������� myPMS Pro ��� Community Builder.');
DEFINE('_COM_A_KARMA','���������� ��������� �����');
DEFINE('_COM_A_KARMA_DESC','�������� &quot;��&quot; ����� �������� ��������� ����� ������������ � ��������������� ������ (�������� / �������) � ������,���� �����������  ������ ������������.');
DEFINE('_COM_A_DISEMOTICONS','��������� ������ ������');
DEFINE('_COM_A_DISEMOTICONS_DESC','�������� &quot;��&quot; ����� ��������� ��������� ����������� ����������� ������ (���������).');
DEFINE('_COM_C_SBCONFIG','������������ JoomlaBoard');
DEFINE('_COM_C_SBCONFIGDESC','���������� ����� ��������� JoomlaBoard');
DEFINE('_COM_C_FORUM','����������<br/>��������');
DEFINE('_COM_C_FORUMDESC','���������� ���������/������� � �� ���������');
DEFINE('_COM_C_USER','����������<br/>��������������');
DEFINE('_COM_C_USERDESC','���������� �������������� � �� ����������');
DEFINE('_COM_C_FILES','�������<br/>������');
DEFINE('_COM_C_FILESDESC','�������� � ���������� ������������ �������');
DEFINE('_COM_C_IMAGES','�������<br/>�����������');
DEFINE('_COM_C_IMAGESDESC','�������� � ���������� ������������ �������������');
DEFINE('_COM_C_CSS','��������<br/>CSS ����');
DEFINE('_COM_C_CSSDESC','��������� �������� ���� ������');
DEFINE('_COM_C_SUPPORT','���� ���������<br/>JoomlaBoard');
DEFINE('_COM_C_SUPPORTDESC','������ �� ���� ������� JoomlaBoard-� (� ����� ����)');
DEFINE('_COM_C_PRUNETAB','�������<br/>�������');
DEFINE('_COM_C_PRUNETABDESC','�������� ������ ����� (�������������)');
DEFINE('_COM_C_PRUNEUSERS','�������<br/>�������������');
DEFINE('_COM_C_PRUNEUSERSDESC','������������� ������� ������������� JoomlaBoard � Joomla');
DEFINE('_COM_C_LOADSAMPLE','��������<br/>��������');
DEFINE('_COM_C_LOADSAMPLEDESC','��� �������� ������: ��������� ��������� ������������ ������� � ������ ��� ��������� ������� JoomlaBoard');
DEFINE('_COM_C_UPGRADEDESC','���������� ����� ���� ������ ���������� �� ��������� ������ ����� ���������� ������');
DEFINE('_COM_C_BACK','��������� � ������ ���������� �������');
DEFINE('_SHOW_LAST_SINCE','�������� ���� � ������� ������ ���������� ���������:');
DEFINE('_POST_SUCCESS_REQUEST2','��� ������ ���������');
DEFINE('_POST_NO_PUBACCESS3','�������� ����� ��� �����������.');
//==================================================================================================
//Changed in 1.0.4
//please update your local language file with these changes as well
DEFINE('_POST_SUCCESS_DELETE','�������� ������ �������.');
DEFINE('_POST_SUCCESS_EDIT','�������������� ������ �������.');
DEFINE('_POST_SUCCESS_MOVE','����� ������� ���������.');
DEFINE('_POST_SUCCESS_POST','��� ���� ������� ��������.');
DEFINE('_POST_SUCCESS_SUBSCRIBE','������ �� �������� ���������.');
//==================================================================================================
//new in 1.0.3 stable
//Karma
DEFINE('_KARMA','���������');
DEFINE('_KARMA_SMITE','��������');
DEFINE('_KARMA_APPLAUD','��������');
DEFINE('_KARMA_BACK','��� �������� � ����,');
DEFINE('_KARMA_WAIT','�� ������ �������� ����� ������ ��� ������ �������� ������ 6 �����. <br/>���������� ���������, ��� ���������� ����� ������, ����� � ��������� ��� �� ������ �������� ����� ������������.');
DEFINE('_KARMA_SELF_DECREASE','���������� �� ��������� ��������� ����������� �����!');
DEFINE('_KARMA_SELF_INCREASE','���� ��������� ���� ��������� ��� ����������� ���������!');
DEFINE('_KARMA_DECREASED','��������� ������������ ���������. ���� �� �� ��������� � ������ ������ ����� ��������� ������,');
DEFINE('_KARMA_INCREASED','��������� ������������ ���������. ���� �� �� ��������� � ������ ������ ����� ��������� ������,');
DEFINE('_COM_A_TEMPLATE_DESC','�������� ������.');
DEFINE('_COM_A_TEMPLATE','������');
DEFINE('_PREVIEW_CLOSE','������� ��� ����');
//==========================================
//new in 1.0 Stable
DEFINE('_GEN_PATHWAY','���� :: ');
DEFINE('_COM_A_POSTSTATSBAR','������������ ����������� ������ ����������');
DEFINE('_COM_A_POSTSTATSBAR_DESC','���������� &quot;��&quot; ���� �� ������ ����� ���������� ��������� ������������� ������������ ����������� ���������.');
DEFINE('_COM_A_POSTSTATSCOLOR','����� ����� ��� ������� ����������');
DEFINE('_COM_A_POSTSTATSCOLOR_DESC','�������� ����� ����� ������� ����� �������������� � ������ ���������� ��������� ������������');
DEFINE('_LATEST_REDIRECT','������ ��������� (����)���������� ���� ����� ������� ����� ��������� ������ ��������� ��������� ��� ���.\n�� ����������, ��� ���������� ������� ��� ������������ ������������ ����� 30 �����, �������� ������������ ����� �� ���� �����.\n���������� ��������� ������ ������ �����.');
DEFINE('_SMILE_COLOUR','����');
DEFINE('_SMILE_SIZE','������');
DEFINE('_COLOUR_DEFAULT','�����������');
DEFINE('_COLOUR_RED','�������');
DEFINE('_COLOUR_PURPLE','����������');
DEFINE('_COLOUR_BLUE','�����');
DEFINE('_COLOUR_GREEN','�������');
DEFINE('_COLOUR_YELLOW','������');
DEFINE('_COLOUR_ORANGE','���������');
DEFINE('_COLOUR_DARKBLUE','�����-�����');
DEFINE('_COLOUR_BROWN','����������');
DEFINE('_COLOUR_GOLD','�������');
DEFINE('_COLOUR_SILVER','�����������');
DEFINE('_SIZE_NORMAL','����������');
DEFINE('_SIZE_SMALL','���������');
DEFINE('_SIZE_VSMALL','����� ���������');
DEFINE('_SIZE_BIG','�������');
DEFINE('_SIZE_VBIG','����� �������');
DEFINE('_IMAGE_SELECT_FILE','�������� ���� ����������� ��� �������������');
DEFINE('_FILE_SELECT_FILE','�������� ���� ��� �������������');
DEFINE('_FILE_NOT_UPLOADED','��� ���� �� ����� ���� ��������. ���������� ����� ������� ���� ��� ��������������� ��� ���������');
DEFINE('_IMAGE_NOT_UPLOADED','���� ����������� �� ����� ���� ��������. ���������� ����� ������� ���� ��� ��������������� ��� ���������');
DEFINE('_BBCODE_IMGPH','�������� ��� [img] � ����� ��������� ��� ������������� �����������');
DEFINE('_BBCODE_FILEPH','�������� ��� [file] � ����� ��������� ��� ������������� �����');
DEFINE('_POST_ATTACH_IMAGE','[img]');
DEFINE('_POST_ATTACH_FILE','[file]');
DEFINE('_USER_UNSUBSCRIBE_ALL','�������� ���� ���� ��� ����, ����� ���������� �� ���� ��� (������� ����������� �������������� ��� ������������)');
DEFINE('_LINK_JS_REMOVED','<em>�������� ������ ���������� JavaScript ����� ������� �������������</em>');
//==========================================
//new in 1.0 RC4
DEFINE('_COM_A_LOOKS','������� ���');
DEFINE('_COM_A_USERS','����������������');
DEFINE('_COM_A_LENGTHS','��������� ������');
DEFINE('_COM_A_SUBJECTLENGTH','����. ������ ����');
DEFINE('_COM_A_SUBJECTLENGTH_DESC','������������ ������ ���� ��� ����. ����������� ���������� ����� �������� - 255. ���� ��� ���� ��������������� ��� ������������� ������������� �������� - �������� Unicode, UTF-8, ��-ISO-8599-x, ����������� ��� ���������� ������������ ������ ��� �������:<br/><tt>round_down(255/(������������ ����� ������ � ����� �������))</tt><br/> �������� ��� UTF-8, ���� ������ ����� �������� 4 �����: 255/4=63.');
DEFINE('_LATEST_THREADFORUM','����� / �����');
DEFINE('_LATEST_NUMBER','����� . . .');
DEFINE('_COM_A_SHOWNEW','�������� ����� ���������');
DEFINE('_COM_A_SHOWNEW_DESC','���� &quot;��&quot; �� JoomlaBoard ���������� ������������ ���������, ����� ������ �������� ����� ����� � ����� ����� �������� ������ ������� � ���/�� ���������� ���������.');
DEFINE('_COM_A_NEWCHAR','&quot;New&quot; ���������');
DEFINE('_COM_A_NEWCHAR_DESC','�������, ��� ������ ��������������, ��� ����������� ����� ������ (&quot;!&quot; ��� &quot;New!&quot;)');
DEFINE('_LATEST_AUTHOR','�����');
DEFINE('_GEN_FORUM_NEWPOST','����� ��������� ����� ������ ���������� ������ ����');
DEFINE('_GEN_FORUM_NOTNEW','��� ����� ��������� �� ������� ������ ���������� ������');
DEFINE('_GEN_UNREAD','����� ������ ����� ������ ���������� ������ ����');
DEFINE('_GEN_NOUNREAD','��� ����� ������� �� ������� ������ ���������� ������');
DEFINE('_GEN_MARK_ALL_FORUMS_READ','�������� ��� ������ ��� �����������');
DEFINE('_GEN_MARK_THIS_FORUM_READ','�������� ���� ����� ��� �����������');
DEFINE('_GEN_FORUM_MARKED','��� ��������� � ���� ������ ����� �������� ��� �����������');
DEFINE('_GEN_ALL_MARKED','��� ��������� ����� �������� ��� �����������');
DEFINE('_IMAGE_UPLOAD','��������� �����������');
DEFINE('_IMAGE_DIMENSIONS','���� ����������� ����� ����� �������, �� �����, ��� (������ x ������)');
DEFINE('_IMAGE_ERROR_TYPE','���������� ���������� ������ ����������� � ������� jpeg, gif ��� png');
DEFINE('_IMAGE_ERROR_EMPTY','���������� �������� ���� ��� ��������');
DEFINE('_IMAGE_ERROR_SIZE','������� ������������ ����������� ��������� ����������� ����������.');
DEFINE('_IMAGE_ERROR_WIDTH','������ ����������� ��������� ����������� ����������.');
DEFINE('_IMAGE_ERROR_HEIGHT','������ ����������� ��������� ����������� ����������.');
DEFINE('_IMAGE_UPLOADED','���� ����������� ������� ���������.');
DEFINE('_COM_A_IMAGE','�����������');
DEFINE('_COM_A_IMGHEIGHT','����. ������ �����������');
DEFINE('_COM_A_IMGWIDTH','����. ������ �����������');
DEFINE('_COM_A_IMGSIZE','����. ������ ����� �����������<br/><em>� ��</em>');
DEFINE('_COM_A_IMAGEUPLOAD','��������� ��������� �������� �����������');
DEFINE('_COM_A_IMAGEUPLOAD_DESC','���������� &quot;��&quot; ��� ���������� �������� ���� �������������.');
DEFINE('_COM_A_IMAGEREGUPLOAD','��������� ������������������ ������������� ��������� �����������');
DEFINE('_COM_A_IMAGEREGUPLOAD_DESC','���������� &quot;��&quot; ��� ���������� �������� ������������������ �������������.<br/> ����������: (Super)administrators � ���������� ������ ����� ����� �� �������� �����������.');
  //New since preRC4-II:
DEFINE('_COM_A_UPLOADS','��������');
DEFINE('_FILE_TYPES','��� ���� ����� ����� ��� - ����. ������');
DEFINE('_FILE_ERROR_TYPE','��������� ��������� ������ ����� � ������������:\n');
DEFINE('_FILE_ERROR_EMPTY','���������� �������� ���� ��� ��������');
DEFINE('_FILE_ERROR_SIZE','������ ����� ��������� ����������� ���������� ������ ������������� ���������������.');
DEFINE('_COM_A_FILE','�����');
DEFINE('_COM_A_FILEALLOWEDTYPES','����������� ���� ������');
DEFINE('_COM_A_FILEALLOWEDTYPES_DESC','������� ���� ������, ����������� ��� ��������. ����������� ������� ��� ����������, <strong>�������� �����</strong>, ��� ��������.<br />������: zip,txt,exe,htm,html');
DEFINE('_COM_A_FILESIZE','����. ������ �����<br/><em>� ��</em>');
DEFINE('_COM_A_FILEUPLOAD','��������� �������� ���� �������������');
DEFINE('_COM_A_FILEUPLOAD_DESC','���������� &quot;��&quot; ���� ���� ��������� �������� ������.');
DEFINE('_COM_A_FILEREGUPLOAD','��������� �������� ������������������ �������������');
DEFINE('_COM_A_FILEREGUPLOAD_DESC','���������� &quot;��&quot; ���� ������ ������������������ ������������ ����� ��������� �����.<br/> ����������: (Super)administrators � ���������� ������ ����� ����� �� �������� ������.');
DEFINE('_SUBMIT_CANCEL','��� ���� ���� ������');
DEFINE('_HELP_SUBMIT','�������� ��� �������� ���������');
DEFINE('_HELP_PREVIEW','�������� ��� ��������� ������ ��������� ����� �����������');
DEFINE('_HELP_CANCEL','�������� ��� ������ ������ ���������');
DEFINE('_POST_DELETE_ATT','���������� ������ ��� �������� ������ � �����������, ������������� � ��������� (�������������).');
   //new since preRC4-III
DEFINE('_COM_A_USER_MARKUP','���������� ��������� ���������');
DEFINE('_COM_A_USER_MARKUP_DESC','���������� &quot;��&quot; ���� ������ ��������� ��� ���������� ����� ��� � ����� ��� ������������.');
DEFINE('_EDIT_BY','���������� ����� ���������������:');
DEFINE('_EDIT_AT','�:');
DEFINE('_UPLOAD_ERROR_GENERAL','������ ��� �������� �������. ���������� ��������� ��� �������� ��������������');
DEFINE('_COM_A_IMGB_IMG_BROWSE','�������� ����������� �����������');
DEFINE('_COM_A_IMGB_FILE_BROWSE','�������� ����������� ������');
DEFINE('_COM_A_IMGB_TOTAL_IMG','����� ����������� �����������');
DEFINE('_COM_A_IMGB_TOTAL_FILES','����� ����������� ������');
DEFINE('_COM_A_IMGB_ENLARGE','�������� ����������� ����� ��� ��������� � ������ �������');
DEFINE('_COM_A_IMGB_DOWNLOAD','�������� ����������� ����� ��� ����������');
DEFINE('_COM_A_IMGB_DUMMY_DESC','����� &quot;�������� ���������&quot; �������� ��������� ����������� ���������.<br /> ��� ��������� ������� ���������� ����, �� �������� ���������� �����.<br /><small><em>���������� �������� ��������, ��� ������ ��������� �������� ���� � ��������, ��� ����������� ������.</em></small>');
DEFINE('_COM_A_IMGB_DUMMY','������� ��������� �����������');
DEFINE('_COM_A_IMGB_REPLACE','�������� ���������');
DEFINE('_COM_A_IMGB_REMOVE','������� ���������');
DEFINE('_COM_A_IMGB_NAME','���');
DEFINE('_COM_A_IMGB_SIZE','������');
DEFINE('_COM_A_IMGB_DIMS','���������');
DEFINE('_COM_A_IMGB_CONFIRM','�� ������������� ������ ������� ����? \n �������� ����� ������� ������ � ����������...');
DEFINE('_COM_A_IMGB_VIEW','��������/�������������� �����)');
DEFINE('_COM_A_IMGB_NO_POST','��� ����������� ���������!');
DEFINE('_USER_CHANGE_VIEW','��������� ������� � ���� ��� ��������� ��������� ������.<br /> ����� �������� ��� ������������� &quot;Mid-Flight&quot; �� ������ ������������ �������� �� ���� ������.');
DEFINE('_MOSBOT_DISCUSS_A','�������� ������� � ������. (');
DEFINE('_MOSBOT_DISCUSS_B',' ���������)');
DEFINE('_POST_DISCUSS','���������� ������');
DEFINE('_COM_A_RSS','�������� RSS');
DEFINE('_COM_A_RSS_DESC','����� RSS ��������� ������������ �������� ��������� ��������� �� ������ ����� �� �������  ���� ��� � ����� RSS-������ (�������� <a href="http://www.rssreader.com" target="_blank">rssreader.com</a>).');
DEFINE('_LISTCAT_RSS','�������� ��������� ��������� ����� �� ��� ������� ����');
DEFINE('_SEARCH_REDIRECT','������ ���������� (����)��������� ���� ���������� ����� ����������� ������ �������.\n�� ���������� ������ ��� ���������� ��� ������������ ������������ � ������� 30 �����.\n���������� ��������� ��� ������ ��� ���.');

//====================
//admin.forum.html.php
DEFINE('_COM_A_CONFIG','������������');
DEFINE('_COM_A_VERSION','���� ������ ');
DEFINE('_COM_A_DISPLAY','�������� #');
DEFINE('_COM_A_CURRENT_SETTINGS','������� ���������');
DEFINE('_COM_A_EXPLANATION','���������');
DEFINE('_COM_A_BOARD_TITLE','���������');
DEFINE('_COM_A_BOARD_TITLE_DESC','�������� ������ ������');
DEFINE('_COM_A_VIEW_TYPE','��� �� ���������');
DEFINE('_COM_A_VIEW_TYPE_DESC','�������� ����� ����������� ��� ������� ����� �� ���������');
DEFINE('_COM_A_THREADS','���������� �� ��������');
DEFINE('_COM_A_THREADS_DESC','����� ���������� �� �������� ��� ������');
DEFINE('_COM_A_REGISTERED_ONLY','������ ������������������ ������������');
DEFINE('_COM_A_REG_ONLY_DESC','���������� &quot;��&quot;, ����� ��������� ������ ������������������ ������������� ������������ ����� (�������� & ��������), ���������� &quot;���&quot;, ����� ��������� ���� ����������� ������������ �����');
DEFINE('_COM_A_PUBWRITE','����� ������/������');
DEFINE('_COM_A_PUBWRITE_DESC','���������� &quot;��&quot;, ����� ��������� ���� ���������� �� ������, ���������� &quot;���&quot;, ����� ����� ���������� ��� ������ ���������, �� ������ ���������������� ������������ ����� ������ ���������');
DEFINE('_COM_A_USER_EDIT','�������� �������������');
DEFINE('_COM_A_USER_EDIT_DESC','���������� &quot;��&quot;, ����� ������������������ ������������ ����� ������������� �� ����������� ���������');
DEFINE('_COM_A_MESSAGE','��� ����, ����� ��������� ��������� ��������,������� ������ &quot;Save&quot; �� �����.');
DEFINE('_COM_A_HISTORY','�������� �������');
DEFINE('_COM_A_HISTORY_DESC','���������� &quot;��&quot; ���� �� ������, ����� ������������ ������� ����, ����� ��������� �������� ��� ����������');
DEFINE('_COM_A_SUBSCRIPTIONS','��������� ��������');
DEFINE('_COM_A_SUBSCRIPTIONS_DESC','���������� &quot;��&quot;, ���� �� ������ ��������� ������������������ ������������� ������������� �� ���� � �������� �� e-mail ����������� � ����� ���������');
DEFINE('_COM_A_HISTLIM','���������� ������ �������');
DEFINE('_COM_A_HISTLIM_DESC','������ ��������� ��� ������ � �������');
DEFINE('_COM_A_FLOOD','������ �� �����');
DEFINE('_COM_A_FLOOD_DESC','���������� ������, ������� ������������ ������ ��������� ����� ����� ����������� ������. ���������� 0 (����) ��� ���������� ������ �� Flood-�. ����������: ������ �� Flood-� <em>�����</em> �������� � ��������� ������������������ ...');
DEFINE('_COM_A_MODERATION','�������� Email �����������');
DEFINE('_COM_A_MODERATION_DESC','���������� &quot;��&quot;, ���� �� ������ �������� ����������� �� e-mail  �� ����� ���������, ��������� � ����� �����������. ����������: ���� ������ (super)administrator ���� ������������� ��� ���������� ����������, ��������� �� ���� ��� ���������� ������, ����� ����� �������� e-mails!.');

DEFINE('_COM_A_SHOWMAIL','���������� Email');
DEFINE('_COM_A_SHOWMAIL_DESC','���������� &quot;���&quot;, ���� �� ������� �� ������ ���������� e-mail ������ �������������; �� ������ ��� ���������������� �������������.');
DEFINE('_COM_A_AVATAR','��������� �������');
DEFINE('_COM_A_AVATAR_DESC','���������� &quot;��&quot;, ���� �� ������, ����� ������������������ ������������ ����� ���������� ������� (� ��������� ��� ����� �� ��������)');
DEFINE('_COM_A_AVHEIGHT','����. ������ �������');
DEFINE('_COM_A_AVWIDTH','����. ������ �������');
DEFINE('_COM_A_AVSIZE','����. ������ ����� ������� <br/><em>� ����������</em>');
DEFINE('_COM_A_USERSTATS','���������� ���������� ������������');
DEFINE('_COM_A_USERSTATS_DESC','���������� &quot;��&quot; ��� ����, ����� ���������� ���������� ������������ ��� ����� ��������� ��������� �������������, ��� ������������ (�����, ���������, ������������, � �.�..).');
DEFINE('_COM_A_AVATARUPLOAD','��������� �������� ������');
DEFINE('_COM_A_AVATARUPLOAD_DESC','���������� &quot;��&quot;, ���� �� ������, ����� ������������������ ������������ ����� ��������� �������.');
DEFINE('_COM_A_AVATARGALLERY','������������ ������� ������');
DEFINE('_COM_A_AVATARGALLERY_DESC','���������� &quot;��&quot;, ���� �� ������, ����� ������������������ ������������ ����� �������� ������� �� �������, ������� �� �������������� ( (components/com_joomlaboard/avatars/gallery).');
DEFINE('_COM_A_RANKING_DESC','���������� &quot;��&quot;, ���� �� ������ ���������� ��������� ������������������ ������������� ������ �� ���������� ���������, ������� ��� �������.<br/><strong>������, ��� �� ������ ��������� ���������� ������������ � �������� Frontend, ����� �������� ��������� �������������.');
DEFINE('_COM_A_RANKINGIMAGES','������������ �������� ���������');
DEFINE('_COM_A_RANKINGIMAGES_DESC','���������� &quot;��&quot;, ���� �� ������ ���������� ��������� ������������������ ������������� ������ � ���������� (�� components/com_joomlaboard/ranks). ��� ���������� ���� ����� ��������� ����� ������������ � ��������� ����. �������� ������������ �� www.tsmf-mambo.com ��� ����� ������ ���������� � ��������� ��� ���������');
DEFINE('_COM_A_RANK1','��������� 1');
DEFINE('_COM_A_RANK1TXT','��������� 1 �����');
DEFINE('_COM_A_RANK2','��������� 2');
DEFINE('_COM_A_RANK2TXT','��������� 2 �����');
DEFINE('_COM_A_RANK3','��������� 3');
DEFINE('_COM_A_RANK3TXT','��������� 3 �����');
DEFINE('_COM_A_RANK4','��������� 4');
DEFINE('_COM_A_RANK4TXT','��������� 4 �����');
DEFINE('_COM_A_RANK5','��������� 5');
DEFINE('_COM_A_RANK5TXT','��������� 5 �����');
DEFINE('_COM_A_RANK6','��������� 6');
DEFINE('_COM_A_RANK6TXT','��������� 6 �����');
DEFINE('_COM_A_RANK','���������');
DEFINE('_COM_A_RANK_NAME','�������� ���������');
DEFINE('_COM_A_RANK_LIMIT','����������� ���������');
//email and stuff
$_COM_A_NOTIFICATION ="����������� � ����� ��������� �� ";
$_COM_A_NOTIFICATION1="�������� ����� ���� � ���� �� ������� �� ��������� ";
$_COM_A_NOTIFICATION2="�� ������ ��������� ������ ���������� ����� ������ '��� �������' �� �������� ������ ����� ����, ��� �� ����� �� ����. �� ������ ������� �� ������ ���������� �� ����.";
$_COM_A_NOTIFICATION3="�� ��������� �� ��� ����������� �� email �.�. ��� ������������� ��������� e-mail.";
$_COM_A_NOT_MOD1="�������� ����� ���� � �����, ����������� �������� �� ��������� ";
$_COM_A_NOT_MOD2="���������� ��������� ����� ����, ��� �� ������� �� ����.";

DEFINE('_COM_A_NO','���');
DEFINE('_COM_A_YES','��');
DEFINE('_COM_A_FLAT','�������');
DEFINE('_COM_A_THREADED','�����������');
DEFINE('_COM_A_MESSAGES','��������� �� ��������');
DEFINE('_COM_A_MESSAGES_DESC','����� ��������� �� �������� ��� ������');
   //admin; changes from 0.9 to 0.9.1
DEFINE('_COM_A_USERNAME','��� ������������');
DEFINE('_COM_A_USERNAME_DESC','���������� &quot;��&quot; ���� �� ������, ����� ��� ������������ (�����) �������������� ������ ��� ��������� �����');
DEFINE('_COM_A_CHANGENAME','��������� ��������� �����');
DEFINE('_COM_A_CHANGENAME_DESC','���������� &quot;��&quot; ���� �� ������ ��������� ������������������ ������������� �������� �� �������� ��� ��� ���������� ���������. ���� ����������� &quot;���&quot; - ������������ �� ������ �������� ���� ���');
   //admin; changes 0.9.1 to 0.9.2
DEFINE('_COM_A_BOARD_OFFLINE','����� ������');
DEFINE('_COM_A_BOARD_OFFLINE_DESC','���������� &quot;��&quot; ���� �� ������ �������� ��������� �����. ��� ���� ����� ��������� �������� ��� �������������������.');
DEFINE('_COM_A_BOARD_OFFLINE_MES','��������� � ������� ��������');
DEFINE('_COM_A_PRUNE','�������� ������');
DEFINE('_COM_A_PRUNE_NAME','�������� �����:');
DEFINE('_COM_A_PRUNE_DESC','������� ������� ������ ��������� ���������� �����, � ������� �� ����������� ���������� �� ���������� ���������� ���������� ����. ��� ������� �� ����������� ����� ������, ������� ����������� ��� �������; ��� ������ ���� ������� �������. ����� � �������� ������� ����� �� ���������.');
DEFINE('_COM_A_PRUNE_NOPOSTS','�������� ����� � ������� ��� ��������� �� ��������� ');
DEFINE('_COM_A_PRUNE_DAYS','����');
DEFINE('_COM_A_PRUNE_USERS','�������� �������������');
DEFINE('_COM_A_PRUNE_USERS_DESC','��� ������� ��������� �������� ������ ������������� JoomlaBoard, ��� �������� ������������ Joomla. ��� ������� ��� ������� ������������� ������, ������� ���� ������� �� �������.<br/>���� �� ������� � ������������ ����� ��������, ������� &quot;������ �������&quot;.');


//general
DEFINE('_GEN_ACTION','��������');
DEFINE('_GEN_AUTHOR','�����');
DEFINE('_GEN_BY',' ');
DEFINE('_GEN_CANCEL','������');
DEFINE('_GEN_CONTINUE','���������');
DEFINE('_GEN_DATE','����');
DEFINE('_GEN_DELETE','�������');
DEFINE('_GEN_EDIT','�������������');
DEFINE('_GEN_EMAIL','e-mail');
DEFINE('_GEN_EMOTICONS','��������');
DEFINE('_GEN_FLAT','�������');
DEFINE('_GEN_FLAT_VIEW','������� ���');
DEFINE('_GEN_FORUMLIST','������ �������');
DEFINE('_GEN_FORUM','�����');
DEFINE('_GEN_HELP','������');
DEFINE('_GEN_HITS','���������');
DEFINE('_GEN_LAST_POST','��������� ����');
DEFINE('_GEN_LATEST_POSTS','�������� ������ �����');
DEFINE('_GEN_LOCK','�������������');
DEFINE('_GEN_UNLOCK','��������������');
DEFINE('_GEN_LOCKED_FORUM','���� ����� ������������; ����� ����� ����������.');
DEFINE('_GEN_LOCKED_TOPIC','���� �����/���� ������������(�); ����� ����� ����������.');
DEFINE('_GEN_MESSAGE','���������');
DEFINE('_GEN_MODERATED','���� ����� ������������; ����� ��������� ��������������� �� �� ����������.');
DEFINE('_GEN_MODERATORS','����������');
DEFINE('_GEN_MOVE','�����������');
DEFINE('_GEN_NAME','���');
DEFINE('_GEN_POST_NEW_TOPIC','������� ����� �����');
DEFINE('_GEN_POST_REPLY','��������');
DEFINE('_GEN_MYPROFILE','��� �������');
DEFINE('_GEN_QUOTE','����������');
DEFINE('_GEN_REPLY','��������');
DEFINE('_GEN_REPLIES','������');
DEFINE('_GEN_THREADED','�����������');
DEFINE('_GEN_THREADED_VIEW','����������� ���');
DEFINE('_GEN_SIGNATURE','�������');
DEFINE('_GEN_ISSTICKY','��� ���� �����������.');
DEFINE('_GEN_STICKY','����������');
DEFINE('_GEN_UNSTICKY','���������');
DEFINE('_GEN_SUBJECT','����');
DEFINE('_GEN_SUBMIT','�������');
DEFINE('_GEN_TOPIC','�����');
DEFINE('_GEN_TOPICS','������');
DEFINE('_GEN_TOPIC_ICON','������ ������');
DEFINE('_GEN_SEARCH_BOX','�����...');
$_GEN_THREADED_VIEW="����������� ���";
$_GEN_FLAT_VIEW    ="������� ���";

//avatar_upload.php
DEFINE('_UPLOAD_UPLOAD','���������');
DEFINE('_UPLOAD_DIMENSIONS','���� �������� ����� ����� ������������ ������� (������ x ������)');
DEFINE('_UPLOAD_SUBMIT','��������� ����� �������');
DEFINE('_UPLOAD_SELECT_FILE','�������� ����');
DEFINE('_UPLOAD_ERROR_TYPE','���������� ����������� ������ jpeg, gif or png �����');
DEFINE('_UPLOAD_ERROR_EMPTY','���������� �������� ���� �� ��������');
DEFINE('_UPLOAD_ERROR_NAME','���� ������ ��������� �����, ����� � �� ����� ��������.');
DEFINE('_UPLOAD_ERROR_SIZE','������ ����� �������� �������� ��������, ������������� ���������������.');
DEFINE('_UPLOAD_ERROR_WIDTH','������ �������� ��������� ��������, ������������� ���������������.');
DEFINE('_UPLOAD_ERROR_HEIGHT','������ �������� ��������� ��������, ������������� ���������������.');
DEFINE('_UPLOAD_ERROR_CHOOSE',"�� �� ������� ������� �� �������..");
DEFINE('_UPLOAD_UPLOADED','��� ������ ��������.');
DEFINE('_UPLOAD_GALLERY','�������� �������� �� ������� ������:');
DEFINE('_UPLOAD_CHOOSE','����������� �����.');

// listcat.php
DEFINE('_LISTCAT_ADMIN','������������� ������ ������� �� ������� �� ');
DEFINE('_LISTCAT_DO','��� �����, ��� ������ ');
DEFINE('_LISTCAT_INFORM','������������ �� � ��������� ������������!');
DEFINE('_LISTCAT_NO_CATS','��� ��������� ������������ � ������.');
DEFINE('_LISTCAT_PANEL','���������������� ������ Joomla.');
DEFINE('_LISTCAT_PENDING','���������, ��������� �������');

// moderation.php
DEFINE('_MODERATION_MESSAGES','��� ���������, ��������� ������������ � ���� ������.');

// post.php
DEFINE('_POST_ABOUT_TO_DELETE','�� ����������� ������� ����');
DEFINE('_POST_ABOUT_DELETE','<strong>����������:</strong><br/>
-���� �� ������� ���� � ������ (������ ���� � ������), �� ����� ������� ��� ��������� ���������!
..����������, ������ ���� � ��� ��� ����������, ���� ������ ���������� ������ ���� �������..
<br/>
- ��� ��������� ����� ���������� �������� ����� ����� �������� ����� �� 1 � �������� ������.');
DEFINE('_POST_CLICK','�������� �����');
DEFINE('_POST_ERROR','�� ���� ����� username/email. �������� ������, ���� ������ �� �������');
DEFINE('_POST_ERROR_MESSAGE','��������� ����������� ������ SQL � ��� ���� �� ���������.  ���� ������ ���������� ����� - ��������� � �����������.');
DEFINE('_POST_ERROR_MESSAGE_OCCURED','��������� ������ � ���������� ����� �� ���������.  ����������, ����������� �����. ���� ������ ���������� ����� - ��������� � �����������.');
DEFINE('_POST_ERROR_TOPIC','��������� ������ ��� ��������. ��������� ������ �����:');
DEFINE('_POST_FORGOT_NAME','�� ������ ������� ���� ���.  ������� � ����� ��������&#146s ������ �����, ����� ��������� � ���������� �����.');
DEFINE('_POST_FORGOT_SUBJECT','�� ������ ������� ����.  ������� � ����� ��������&#146s ������ ����� , ����� ��������� � ���������� �����.');
DEFINE('_POST_FORGOT_MESSAGE','�� ������ ������ ����� ���������. ������� � ����� ��������&#146s ������ ����� , ����� ��������� � ���������� �����.');
DEFINE('_POST_INVALID','������������ ������������� ��������� ��������.');
DEFINE('_POST_LOCK_SET','����� ������������.');
DEFINE('_POST_LOCK_NOT_SET','����� �� ����� ���� ������������.');
DEFINE('_POST_LOCK_UNSET','����� �������������.');
DEFINE('_POST_LOCK_NOT_UNSET','����� �� ����� ���� �������������.');
DEFINE('_POST_MESSAGE','������� � ���� ');
DEFINE('_POST_MOVE_TOPIC','����������� ����� � �����');
DEFINE('_POST_NEW','��������� � ');
DEFINE('_POST_NO_SUBSCRIBED_TOPIC','���� �������� �� ���� ����� �� ����� ���� ����������.');
DEFINE('_POST_NOTIFIED','�������� �����, ����� �������� ����������� �� ������� �� ��� ����');
DEFINE('_POST_STICKY_SET','���� ���������� ���������� ��� ���� ����.');
DEFINE('_POST_STICKY_NOT_SET','���� ���������� �� ����� ���� ���������� ��� ���� ����.');
DEFINE('_POST_STICKY_UNSET','���� ���������� ������ ��� ���� ����.');
DEFINE('_POST_STICKY_NOT_UNSET','���� ���������� �� ����� ���� ������ ��� ���� ����.');
DEFINE('_POST_SUBSCRIBE','�����������');
DEFINE('_POST_SUBSCRIBED_TOPIC','�� ��������� �� ���� �����.');
DEFINE('_POST_SUCCESS','��� ���� ��� ��������');
DEFINE('_POST_SUCCES_REVIEW','���������� ������ ����� ������� ����������.  ��� ����� ����������� ����������� �� ���������� � ������.');
DEFINE('_POST_SUCCESS_REQUEST','��� ������ ���������.  ���� �� �� ������������� � ����,');
DEFINE('_POST_TOPIC_HISTORY','������� ������ ');
DEFINE('_POST_TOPIC_HISTORY_MAX',' � ������� ��������� ��������� ');
DEFINE('_POST_TOPIC_HISTORY_LAST','���������  -  <i>(������� ���� ��������� ���������)</i>');
DEFINE('_POST_TOPIC_NOT_MOVED','��� ����� �� ����� ���� ���������. ��� �������� � ������: ');
DEFINE('_POST_TOPIC_FLOOD1','������������� ����� ������ ������� ������ �� Flood-�, �� ������ ���������');
DEFINE('_POST_TOPIC_FLOOD2',' ������ ����� �������, ������, ��� �� ������� ������ ����.');
DEFINE('_POST_TOPIC_FLOOD3','������� � ����� ��������&#146s ������ �����, ����� ��������� � ������ ���������.');
DEFINE('_POST_EMAIL_NEVER','��� email ����� ������� �� ����� ������� �� �����.');
DEFINE('_POST_EMAIL_REGISTERED','��� email ����� ����� �������� ������ ��� ������������������ �������������.');
DEFINE('_POST_LOCKED','������������ ���������������.');
DEFINE('_POST_NO_NEW','����� ������ �� ���������.');
DEFINE('_POST_NO_PUBACCESS1','��������� ��������� ����� ������ ������������������ ������������.');
DEFINE('_POST_NO_PUBACCESS2','��� ��������� ������������� �����, �� ������ ������������������ <br/>������������ ����� �������� ���������.');

// showcat.php
DEFINE('_SHOWCAT_NO_TOPICS','>> ��� ������ � ���� ������ <<');
DEFINE('_SHOWCAT_PENDING','�����, ��������� ������������');

// userprofile.php
DEFINE('_USER_DELETE',' �������� ����� ��� �������� ����� �������');
DEFINE('_USER_ERROR_A','�� ����� �� ��� �������� � �������. ����������, �������� �������������� �� ����� ������ ');
DEFINE('_USER_ERROR_B','�� ������ � ��������� �����. ��� ��� �� ����� ��������� ��������� �� ������.');
DEFINE('_USER_ERROR_C','������� ���!');
DEFINE('_USER_ERROR_D','����� ������ ��� ��������� � �����: ');
DEFINE('_USER_GENERAL','����� ����� �������');
DEFINE('_USER_MODERATOR','�� ��������� ����������� � �������');
DEFINE('_USER_MODERATOR_NONE','��� ������� ����������� ��� ���');
DEFINE('_USER_MODERATOR_ADMIN','����� - ��������� ��� ���� �������.');
DEFINE('_USER_NOSUBSCRIPTIONS','��� �������� ��� ���');
DEFINE('_USER_PREFERED','���������������� ���');
DEFINE('_USER_PROFILE','������� ��� ');
DEFINE('_USER_PROFILE_NOT_A','��� ������� ');
DEFINE('_USER_PROFILE_NOT_B','��');
DEFINE('_USER_PROFILE_NOT_C',' ����� ���� ��������.');
DEFINE('_USER_PROFILE_UPDATED','��� ������� ��������.');
DEFINE('_USER_RETURN_A','���� �� �� ��������� � ������ ������� � ��������� ����� ');
DEFINE('_USER_RETURN_B','������� �����');
DEFINE('_USER_SUBSCRIPTIONS','����, �� ������� �� ���������');
DEFINE('_USER_UNSUBSCRIBE',':: ���������� :: ');
DEFINE('_USER_UNSUBSCRIBE_A','�� ');
DEFINE('_USER_UNSUBSCRIBE_B','�� ');
DEFINE('_USER_UNSUBSCRIBE_C',' ������ ���� �������� �� ���� ����.');
DEFINE('_USER_UNSUBSCRIBE_YES','�� �������� �� ���� ����.');
DEFINE('_USER_DELETEAV',' �������� ����� ��� �������� ������ �������');
//New 0.9 to 1.0
DEFINE('_USER_ORDER','���������������� ������� ����������');
DEFINE('_USER_ORDER_DESC','��������� ��������� � ������');
DEFINE('_USER_ORDER_ASC','��������� ��������� � �����');

// view.php
DEFINE('_VIEW_DISABLED','��� ���������� ��������� �� ������ ������������������ ��� ��������������.');
DEFINE('_VIEW_POSTED','������ ');
DEFINE('_VIEW_SUBSCRIBE',':: ����������� �� ��� ���� ::');
DEFINE('_MODERATION_INVALID_ID','�������� ������������ ������������� ���������.');
DEFINE('_VIEW_NO_POSTS','� ���� ������ ��� ���������.');
DEFINE('_VIEW_VISITOR','����������');
DEFINE('_VIEW_ADMIN','�������������');
DEFINE('_VIEW_USER','������������');
DEFINE('_VIEW_MODERATOR','���������');
DEFINE('_VIEW_REPLY','�������� �� ��� ���������');
DEFINE('_VIEW_EDIT','������������� ���� ����');
DEFINE('_VIEW_QUOTE','���������� ���� ���� � ����� �����');
DEFINE('_VIEW_DELETE','������� ���� ����');
DEFINE('_VIEW_STICKY','���������� ����');
DEFINE('_VIEW_UNSTICKY','��������� ����');
DEFINE('_VIEW_LOCK','������������� ��� ����');
DEFINE('_VIEW_UNLOCK','�������������� ��� ����');
DEFINE('_VIEW_MOVE','����������� ��� ���� � ������ �����');
DEFINE('_VIEW_SUBSCRIBETXT','����������� �� ��� ���� � �������� ����������� �� email � ����� ����������');


//NEW-STRINGS-FOR-TRANSLATING-READY-FOR-SIMPLEBOARD 9.2


DEFINE('_HOME','������');
DEFINE('_POSTS','������:');
DEFINE('_TOPIC_NOT_ALLOWED','���������');
DEFINE('_FORUM_NOT_ALLOWED','�����');
DEFINE('_FORUM_IS_OFFLINE','����� � ������ OFFLINE!');
DEFINE('_PAGE','��������: ');
DEFINE('_NO_POSTS','�����');
DEFINE('_CHARS','�������� �����������.');
DEFINE('_HTML_YES','HTML �������');
DEFINE('_YOUR_AVATAR','<b>��� ������</b>');
DEFINE('_NON_SELECTED','�� ������ <br>');
DEFINE('_SET_NEW_AVATAR','�������� ����� ������');
DEFINE('_THREAD_UNSUBSCRIBE',':: ���������� ::');
DEFINE('_SHOW_LAST_POSTS','�������� ���� �� ���������');
DEFINE('_SHOW_HOURS','����(��)');
DEFINE('_SHOW_POSTS','�����: ');
DEFINE('_DESCRIPTION_POSTS','����� �������� ����� ��������� �� ���������');
DEFINE('_SHOW_4_HOURS','4 �����');
DEFINE('_SHOW_8_HOURS','8 �����');
DEFINE('_SHOW_12_HOURS','12 �����');
DEFINE('_SHOW_24_HOURS','24 �����');
DEFINE('_SHOW_48_HOURS','48 �����');
DEFINE('_SHOW_WEEK','������');
DEFINE('_POSTED_AT','���������');
DEFINE('_DATETIME','d.m.Y H:i');
DEFINE('_NO_TIMEFRAME_POSTS','�� ��������� ���������� ������� ����� ��������� �� �������.');
DEFINE('_MESSAGE','���������:');
DEFINE('_NO_SMILIE','���');
DEFINE('_FORUM_UNAUTHORIZIED','���� ����� ������ ������ ��� ������������������ �������������.');
DEFINE('_FORUM_UNAUTHORIZIED2','���� �� ��� ������������������, ���������� ��������� ��������� �����.');
DEFINE('_MESSAGE_ADMINISTRATION','�������������');
DEFINE('_MOD_APPROVE','�������');
DEFINE('_MOD_DELETE','�������');

//NEW in RC1
DEFINE('_SHOW_LAST','�������� ��������� ���������');
DEFINE('_POST_WROTE','�����(�)');
DEFINE('_COM_A_EMAIL','Email ����� ������');
DEFINE('_COM_A_EMAIL_DESC','��� email ����� ������. ������� ���������� �����');
DEFINE('_COM_A_WRAP','���������� ����� ������� ���');
DEFINE('_COM_A_WRAP_DESC','������� ������������ ���������� �������� � ����� �����. ��� ����� ��������� ��� ��������� ����� ��������� ������ � ������ �������.<br/> ��� ��������, ������� ������������� ������ 70 �������� - ��� ����������� ��������� ��������.<br/>URLs, ����� ���� ������ ������, ������� ��� �� �����������');
DEFINE('_COM_A_SIGNATURE','����. ������ �������');
DEFINE('_COM_A_SIGNATURE_DESC','������������ ���������� �������� � ������� ������������.');
DEFINE('_SHOWCAT_NOPENDING','��� ��������� ���������');
DEFINE('_COM_A_BOARD_OFSET','��������� ���� ������');
DEFINE('_COM_A_BOARD_OFSET_DESC','��������� ������ ����������� �� �������� � ������� ������, �������� �� �������� ����� ������������. ������� ������������� ��� ������������� �������� � �����');

//New in RC2
DEFINE('_COM_A_BASICS','��������');
DEFINE('_COM_A_FRONTEND','��� ������');
DEFINE('_COM_A_SECURITY','������������');
DEFINE('_COM_A_AVATARS','�������');
DEFINE('_COM_A_INTEGRATION','����������');
DEFINE('_COM_A_PMS','������ ���������');
DEFINE('_COM_A_PMS_DESC','�������� &quot;��&quot; ���� �� ������, �������� ��������� ������� ������ ��������� myPMS2 (��������������� ��������� ������ ���� ����������');
DEFINE('_VIEW_PMS','�������� �����, ����� ��������� ������������ ������ ���������');

//new in RC3
DEFINE('_POST_RE','� ����� ��: ');
DEFINE('_BBCODE_BOLD','������ �����: [b]�����[/b] ');
DEFINE('_BBCODE_ITALIC','��������� �����: [i]�����[/i]');
DEFINE('_BBCODE_UNDERL','������������ �����: [u]�����[/u]');
DEFINE('_BBCODE_QUOTE','����� ������: [quote]�����[/quote]');
DEFINE('_BBCODE_CODE','����� ����: [code]���[/code]');
DEFINE('_BBCODE_ULIST','�������������� ������: [ul] [li]�����[/li] [/ul] - ���������: ������ ������ ��������� �������� ������');
DEFINE('_BBCODE_OLIST','������������ ������: [ol] [li]�����[/li] [/ol] - ���������: ������ ������ ��������� �������� ������');
DEFINE('_BBCODE_IMAGE','�����������: [img size=(01-499)]http://www.google.com/images/web_logo_left.gif[/img]');
DEFINE('_BBCODE_LINK','������: [url]http://www.zzz.com/[/url] or [url=http://www.zzz.com/]This is a link[/url]');
DEFINE('_BBCODE_CLOSA','������� ��� ����');
DEFINE('_BBCODE_CLOSE','������� ��� �������� ���� bbCode');
DEFINE('_BBCODE_COLOR','����: [color=#FF6600]�����[/color]');
DEFINE('_BBCODE_SIZE','������: [size=1]������ ������[/size] - ���������: ������ � �������� �� 1 �� 5');
DEFINE('_BBCODE_LITEM','������� ������: [li] ������� ������ [/li]');
DEFINE('_BBCODE_HINT','bbCode ������ - ���������: bbCode ����� ���� �������� ������ � ����������� ������!');
DEFINE('_COM_A_TAWIDTH','������ �������');
DEFINE('_COM_A_TAWIDTH_DESC','������ ������ ������� ����� ������ ��� ����������� ������������� � ����� ��������. <br/>������ ��������� ����� ������� �� ��� ������, ���� ������ ������� <= 450');
DEFINE('_COM_A_TAHEIGHT','������ �������');
DEFINE('_COM_A_TAHEIGHT_DESC','������ ������ ������� ����� ������ ��� ����������� ������������� � ����� ��������.');
DEFINE('_COM_A_ASK_EMAIL','������������ E-mail');
DEFINE('_COM_A_ASK_EMAIL_DESC','��������� �� ������������ ����� email ������ ��� ���������� ���������? �������� &quot;���&quot; ���� �� ������ ������ ��� ��������. ����������� �� ����� �������� ���� ��� ����� email  ������.');

?>