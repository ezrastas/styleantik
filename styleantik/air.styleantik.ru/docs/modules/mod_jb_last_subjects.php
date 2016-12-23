<?php
/**
* Latest Joomlaboard Subjects Module
* @package Joomla
* @ All rights reserved
* @ Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
**/

defined( '_VALID_MOS' ) or die( 'Прямой доступ закрыт' );

global $mosConfig_absolute_path, $mosConfig_lang, $mosConfig_live_site, $mainframe;
global $version, $mosConfig_offset;

$joomlaboard_adm_path = "$mosConfig_absolute_path/administrator/components/com_joomlaboard";	

//Get right Language file
$joomlaboard_language_file= "$joomlaboard_adm_path/language/$mosConfig_lang.php";
if (file_exists($joomlaboard_language_file))
{
  require_once($joomlaboard_language_file);
} 
else
{
  $joomlaboard_language_file= "$joomlaboard_adm_path/language/english.php";  
  if (file_exists($joomlaboard_language_file))
  require_once($joomlaboard_language_file);
} 
//Tabber check
//Check Dir
$check_dir = mosPathName("$mosConfig_absolute_path/includes/joomla_enhanced");
if (!is_dir($check_dir))
{
  mkdir($check_dir);
}

$check_dir = mosPathName("$mosConfig_absolute_path/includes/joomla_enhanced/tabber");
if (!is_dir($check_dir))
{
  mkdir($check_dir);
}

//
$source_file = "$mosConfig_absolute_path/modules/mod_jb_last_subjects/tabber/tabber.css";
$target_file = "$mosConfig_absolute_path/includes/joomla_enhanced/tabber/tabber.css";
if (!file_exists($target_file))
{
  copy($source_file, $target_file );
}

$source_file = "$mosConfig_absolute_path/modules/mod_jb_last_subjects/tabber/tabber.js";
$target_file = "$mosConfig_absolute_path/includes/joomla_enhanced/tabber/tabber.js";
if (!file_exists($target_file))
{
  copy($source_file,$target_file );
}

$source_file = "$mosConfig_absolute_path/modules/mod_jb_last_subjects/tabber/tabber-minimized.js";
$target_file = "$mosConfig_absolute_path/includes/joomla_enhanced/tabber/tabber-minimized.js";
if (!file_exists($target_file))
{
  copy($source_file,$target_file );
}

$source_file = "$mosConfig_absolute_path/modules/mod_jb_last_subjects/function/function.tabber.php";
$target_file = "$mosConfig_absolute_path/includes/joomla_enhanced/function.tabber.php";
if (!file_exists($target_file))
{
  copy($source_file,$target_file );
}
//
$category 		= trim( $params->get( 'category','' ) );
$count 		    = intval( $params->get( 'count', 20 ) );
$count_per_page = intval( $params->get( 'count_per_page', 10 ) );
$show_author    = $params->get( 'show_author', 'username' );
$singlesubject	= $params->get( 'singlesubject', 1 );
$replysubject	= $params->get( 'replysubject', 1 );
$subject_length = intval( $params->get( 'subject_length', 100 ) );
$show_date	    = $params->get( 'show_date', 0 );
$show_order_number = $params->get( 'show_order_number', 1 );
$tooltips_enable   = $params->get( 'tooltips_enable', 1 );

mosCommonHTML::loadOverlib();  

//$now 		= date( 'Y-m-d H:i:s', time() + $mosConfig_offset * 60 * 60 );
//$access 	= !$mainframe->getCfg( 'shownoauth' );
//global $mosConfig_offset;

//find group id
$query = "select gid from #__users where id=$my->id";
$database->setQuery( $query );
$database->query();
$dse_groupid = $database->loadObjectList();
if (count($dse_groupid)) { $group_id  = $dse_groupid[0]->gid; }
else { $group_id  = 0; }


$query = 
    " SELECT u.id, ifnull(u.username, 'Guest') as username, ifnull(u.name,'Guest') as name,"
  . "   sb.subject, sb.id as sbid, sb.catid, from_unixtime(sb.time) as date, "
  . "   sb.hits, sb.locked, sb.parent, sc.name as catname "
  . " FROM #__sb_messages AS sb "
  . " LEFT JOIN #__users AS u ON sb.userid = u.id"
  . " INNER JOIN #__sb_categories sc on sb.catid=sc.id "
  . " WHERE "
  . ($category=='' ? "1=1 " : "(sb.catid IN ($category) or sc.parent IN ($category))")
  . "   AND (sc.pub_access<='$group_id') "
  . ($replysubject ? "" : " AND sb.parent=0 ")
  . ($singlesubject ? " GROUP BY sb.subject" : "")
  . " ORDER BY sb.time DESC LIMIT $count";

// initialise the query in the $database connector
// this translates the '#__' prefix into the real database prefix

$database->setQuery( $query );
$rows = $database->loadObjectList();

// cycle through the returned rows displaying them in a table
// with links to the content item
// escaping in and out of php is now permitted

$numitems = count($rows);
if ($numitems > $count_per_page)
{
  include_once("$mosConfig_absolute_path/includes/joomla_enhanced/function.tabber.php");
  $tabs 		= new my_tabs(1, 0);
  $tabs->my_pane_start( 'mod_jb_last_subjects-pane' );
  $tabs->my_tab_start( 1, 1 );
}
$i=0;
$tabid = 1;

echo ($show_order_number ? "<ol>" : "<ul>");
foreach ($rows as $row)
{ 
  $i++;
  $overlib   = "<table>";                            
  //$row->subject = htmlentities($row->subject, ENT_QUOTES);
  $overlib 	.= "<tr><td valign=top>"._GEN_TOPIC."</td><td>$row->subject</td></tr>";
  $row_catname  = stripslashes($row->catname);
  $row_username = stripslashes($row->username);
  $row_date     = mosFormatDate($row->date);
  $row_lock     = ($row->locked ? _CMN_YES : _CMN_NO);
  $overlib 	.= "<tr><td valign=top>"._GEN_CATEGORY."</td><td>$row_catname</td></tr>";
  $overlib 	.= "<tr><td valign=top>" . ucfirst(_GEN_BY) ."</td><td>$row_username</td></tr>";
  $overlib 	.= "<tr><td valign=top>"._GEN_DATE    ."</td><td>$row_date</td></tr>";
  if (!$row->parent)
  {$overlib .= "<tr><td valign=top>"._GEN_VIEWS    ."</td><td>$row->hits</td></tr>";}
  $overlib 	.= "<tr><td valign=top>". ucfirst(_GEN_LOCK)."</td><td>$row_lock</td></tr>";
  $overlib  .= "</table>";    

  
  $link = sefRelToAbs("index.php?option=com_joomlaboard&func=view&id=$row->sbid"
                     ."&catid=$row->catid#$row->sbid");
  
  $tooltips = '';
  if ($tooltips_enable==1)
  { 
    $title = _GEN_POSTS_DISPLAY;
	$tooltips = " onmouseout='return nd();'"
	          . " onmouseover=\"return overlib('$overlib',CAPTION,'$title',BELOW,RIGHT);\""; 
  }
  	
  echo "<li> <a href='$link' $tooltips >";
  echo substr(stripslashes($row->subject),0, $subject_length);
  switch ( $show_author ) {
  case 'none': 
	break;
  case 'username':
    echo " (";
    if ($show_date) {echo mosFormatDate(date($row->date), $date_format) .". ";}
    echo stripslashes($row->username) .")"  ;
	break;
  case 'realname':
    echo " (";
    if ($show_date) {echo mosFormatDate(date($row->date), $date_format) .". ";}
    echo stripslashes($row->name) .")"  ;
	break;
  }
  echo "</a></li>";
  if ($numitems > $count_per_page)
  {
    if (($i % $count_per_page==0) and ($i <> $numitems ))
    {
      echo ($show_order_number ? "</ol>" : "</ul>");
      $tabs->my_tab_end();
      $tabid++;
      $tabs->my_tab_start( $tabid, $tabid );
      $order_start = $i+1;
      echo ($show_order_number ? "<ol start=$order_start>" : "<ul>");
    }    
  }
}
echo ($show_order_number ? "</ol>" : "</ul>");
if ($numitems > $count_per_page)
{
  $tabs->my_tab_end();
  $tabs->my_pane_end();
}

?>


