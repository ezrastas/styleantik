<?php
/**
* @version $Id: index.php 280 2005-09-30 21:56:34Z rhuk $
* @package Joomla
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

/*
 * ensure this file is being included by a parent file
 */
defined('_VALID_MOS') or die('Restricted access');
$tstart = mosProfiler :: getmicrotime();

/*
 * needed to seperate the ISO number from the language file constant _ISO
 */
$iso = explode('=', _ISO);

/*
 * xml prolog
 */
echo '<?xml version="1.0" encoding="'.$iso[1].'"?'.'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html XMLNS="http://www.w3.org/1999/xhtml">
   <head>
      <meta NAME="generator" CONTENT="HTML Tidy, see www.w3.org" />
      <title>
         <?php echo $mosConfig_sitename; ?> - Administration [Joomla]
      </title>
      <link REL="stylesheet" HREF="templates/joomla_admin_lsy/css/template_css.css" TYPE="text/css" />
      <link REL="stylesheet" HREF="templates/joomla_admin_lsy/css/theme.css" TYPE="text/css" />
      <script LANGUAGE="JavaScript" SRC="<?php echo $mosConfig_live_site; ?>/includes/js/JSCookMenu_mini.js" TYPE="text/javascript">
      </script>
      <script LANGUAGE="JavaScript" SRC="<?php echo $mosConfig_live_site; ?>/administrator/includes/js/ThemeOffice/theme.js" TYPE="text/javascript">
      </script>
      <script LANGUAGE="JavaScript" SRC="<?php echo $mosConfig_live_site; ?>/includes/js/joomla.javascript.js" TYPE="text/javascript">
      </script>
      <?php
      include_once ($mosConfig_absolute_path.'/editor/editor.php');
      initEditor();
      ?>
      <meta HTTP-EQUIV="Content-Type" CONTENT="text/html;&lt;?php echo _ISO; ?&gt;" />
      <meta NAME="Generator" CONTENT="Joomla! Content Management System" />
      <link REL="shortcut icon" HREF="<?php echo $mosConfig_live_site.'/images/favicon.ico';?>" />
   </head>
   <body ONLOAD="MM_preloadImages('templates/joomla_admin_lsy/images/help_f2.png','templates/joomla_admin_lsy/images/archive_f2.png','images/back_f2.png','images/cancel_f2.png','templates/joomla_admin_lsy/images/delete_f2.png','templates/joomla_admin_lsy/images/edit_f2.png','templates/joomla_admin_lsy/images/new_f2.png','templates/joomla_admin_lsy/images/preview_f2.png','templates/joomla_admin_lsy/images/publish_f2.png','templates/joomla_admin_lsy/images/save_f2.png','templates/joomla_admin_lsy/images/unarchive_f2.png','templates/joomla_admin_lsy/images/unpublish_f2.png','templates/joomla_admin_lsy/images/upload_f2.png')">
      <div ID="wrapper">
         <div ID="header">
            <div ID="joomla">
               <img SRC="templates/joomla_admin_lsy/images/header_text.png" ALT="Joomla! Logo" />
            </div>
         </div>
      </div>
      <table WIDTH="100%" CLASS="menubar" CELLPADDING="0" CELLSPACING="0" BORDER="0">
         <tr>
            <td CLASS="menubackgr" STYLE="padding-left:5px;">
               <?php mosLoadAdminModule( 'fullmenu' );?>
            </td>
            <td CLASS="menubackgr" ALIGN="right">
               <div ID="wrapper1">
                  <?php mosLoadAdminModules( 'header', 2 );?>
               </div>
            </td>
            <td CLASS="menubackgr" ALIGN="right" STYLE="padding-right:5px;">
               <a HREF="index2.php?option=logout" STYLE="color: #333333; font-weight: bold">Logout</a> <strong><?php echo $my->username;?></strong>
            </td>
         </tr>
      </table>
      <table WIDTH="100%" CLASS="menubar" CELLPADDING="0" CELLSPACING="0" BORDER="0">
         <tr>
            <td CLASS="menudottedline" WIDTH="40%">
               <?php mosLoadAdminModule( 'pathway' );?>
            </td>
            <td CLASS="menudottedline" ALIGN="right">
               <?php mosLoadAdminModule( 'toolbar' );?>
            </td>
         </tr>
      </table>
      <br />
      <?php mosLoadAdminModule( 'mosmsg' );?> 
      <div ALIGN="center" CLASS="centermain">
         <div CLASS="main">
            <?php mosMainBody_Admin(); ?>
         </div>
      </div>
      <div ALIGN="center" CLASS="footer">
         <table WIDTH="99%" BORDER="0">
            <tr>
               <td ALIGN="center">
                  <div ALIGN="center">
                     <?php echo $_VERSION->URL; ?>
                  </div>
                  <div ALIGN="center">
                     <?php echo $version; ?><br />
                     Joomla Administrator LSY Template by <a href="http://www.lewe.com" target="_blank">George Lewe</a><br />
                      <a HREF="http://www.joomla.org/content/blogcategory/32/66/" TARGET="_blank">Check for latest Version</a>
                  </div>
                  <?php
                  if ($mosConfig_debug) {
                      echo '<div class="smallgrey">';
                      $tend = mosProfiler :: getmicrotime();
                      $totaltime = ($tend - $tstart);
                      printf("Page was generated in %f seconds", $totaltime);
                      echo '</div>';
                  }
                  ?>
               </td>
            </tr>
         </table>
      </div>
      <?php mosLoadAdminModules( 'debug' );?>
   </body>
</html>

