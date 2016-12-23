<?php
/**********************************************************************************
 * Two Shoes M-Factory Joomlaboard Discussbot
 * @version 1.0
 * @package Joomlaboard
 * @copyright (c) 2006 Two Shoes M-Factory
 * @license GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * @author http://www.tsmf.net
 **********************************************************************************/

/**********************************************************************************
 * Usage:
 * {mos_sb_discuss:<joomlaboard category id>}
 *
 **********************************************************************************/


// ################################################################
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Прямой доступ запрещен!' );
// ################################################################

$_MAMBOTS->registerFunction( 'onPrepareContent', 'botSbDiscuss' );

function botSbDiscuss( $published, &$row, &$params, $page=0 ) {
	global $database;	
	$rowItemid = mosGetParam( $_REQUEST, 'Itemid' );
	// define the regular expression for the bot
	$regex = "#{mos_sb_discuss:(.*?)}#s";

	if (!$published) {
		$row->text = preg_replace( $regex, '', $row->text );
		return true;
	}
	$mos_sb_discuss_entrytext = $row->text;
    	$mos_sb_discuss_matches = array();
    	if (preg_match_all("/{mos_sb_discuss:.+?}/", $mos_sb_discuss_entrytext, $mos_sb_discuss_matches, PREG_PATTERN_ORDER) > 0) {
       		foreach ($mos_sb_discuss_matches[0] as $mos_sb_discuss_match) {
          		$showbottext = "";
		       	$mos_sb_discuss_match = str_replace("{mos_sb_discuss:", "", $mos_sb_discuss_match);
          		$mos_sb_discuss_match = str_replace("}", "", $mos_sb_discuss_match);
          		$showbottext = make_sbforumlink( $mos_sb_discuss_match, $row, $rowItemid);
          		$mos_sb_discuss_entrytext = preg_replace("/{mos_sb_discuss:".$mos_sb_discuss_match."}/", $showbottext, $mos_sb_discuss_entrytext, 1);
         	}//chaerof
       		$row->text = $mos_sb_discuss_entrytext;
    	}//fi
}//noitcnuf

function make_sbforumlink($catid, &$row, $rowItemid){
	global $database, $mainframe, $my, $mosConfig_absolute_path;

   	// Include the Joomlaboard config file
   	if (file_exists( $mosConfig_absolute_path.'/administrator/components/com_joomlaboard/joomlaboard_config.php' )) 
      		include( $mosConfig_absolute_path.'/administrator/components/com_joomlaboard/joomlaboard_config.php' );
      	else 
      		return 'Ошибка joomlaboard, отсутствует файл config!';

	// Include the joomlaboard language file
   	$mosConfig_lang=$mainframe->getCfg( 'lang' );
   	if (file_exists($mosConfig_absolute_path.'/administrator/components/com_joomlaboard/language/'.$mosConfig_lang.'.php')) 
     		include_once($mosConfig_absolute_path.'/administrator/components/com_joomlaboard/language/'.$mosConfig_lang.'.php');
   	else 
     		include_once($mosConfig_absolute_path.'/administrator/components/com_joomlaboard/language/english.php');

  	if (! $sbConfig['discussBot'] ) 
		return '';

   	$database->setQuery("select id from #__menu where link='index.php?option=com_joomlaboard'");
   	$Itemid=$database->loadResult();

   	// Check if the subject as content title exists in the messages table
	$sb_title['subject']=$row->title;
	$subject=mosGetParam($sb_title,'subject','');
      	$database->setQuery('SELECT id FROM #__sb_messages' .
						"\n". 'WHERE catid =\''.$catid.'\' AND subject = \''.$subject.'\'');
      $resultid = $database->loadResult();


   // If there is no result from the first query let the link open a new reply possibility
    if ($resultid == ""){
      $showlink = sefRelToAbs("index.php?option=com_joomlaboard&Itemid=" . $Itemid
      . "&func=post&do=newFromBot&resubject=".strtr(base64_encode($row->title), "+/", "()")."&catid=".$catid
      . "&rowid=".$row->id."&rowItemid=".$rowItemid
      );
      $countPosts=0;
   }

   // If there is no result from the first query do an insert and get the new id
      else{
      $database->setQuery("SELECT count(id) from #__sb_messages where thread=$resultid");
      $countPosts=$database->loadResult();
      // Create the sef link and return it
         $showlink = sefRelToAbs("index.php?option=com_joomlaboard&Itemid=" . $Itemid
         . "&func=view&id=" . $resultid
         . "&catid=" . $catid
         );

      }

   //return ' Title='.$title.' - Resultid='.$resultid.' <A HREF="'.$showlink.'">'._MOSBOT_DISCUSS_A.''._MOSBOT_DISCUSS_B.'</a> ';
   return '<A HREF="'.$showlink.'">'._MOSBOT_DISCUSS_A.''.$countPosts.''._MOSBOT_DISCUSS_B.'</a>';

   }
?>
