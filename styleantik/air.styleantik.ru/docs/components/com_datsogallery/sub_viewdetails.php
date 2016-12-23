<?php
    /***************************************************\
	**   DatsoGallery - A Joomla! Gallery Component    **
	**   Copyright (C) 2006-2007  by Andrey Datso      **
	**   Version    : 1.3.9.1                          **
	**   Homepage   : http://www.datso.fr              **
	**   License    : Copyright, don't distribute      **
    **   Based on   : Akogallery 2.1 by Arthur Konze   **
	\***************************************************/

    defined ('_VALID_MOS') or die('Direct Access to this location is not allowed.');
    //error_reporting(E_ALL ^ E_NOTICE);
    if (@$_REQUEST['is_editor']) {
    print "<script>document.location.href='../../index.php'</script>";
    exit();
    }

    GalleryHeader();
    $imagetoolbar = "<meta http-equiv=\"imagetoolbar\" content=\"no\" />\n";
    $mainframe->addCustomHeadTag( $imagetoolbar );
    echo "\n<script type=\"text/javascript\">\n";
    echo "  function validatecomment(){\n";
    echo "    if ((document.commentform.cmtname.value=='') || (document.commentform.cmttext.value=='')){\n";
    echo "      alert(\""._DG_ENTER_NAME_COMMENT."\");\n";
    echo "    } else {";
    echo "      document.commentform.action = 'index.php';\n";
    echo "      document.commentform.submit();\n";
    echo "    }\n";
    echo "  }\n";
    echo "</script>\n";
    echo "<script type=\"text/javascript\">\n";
    echo "  function validatesend2friend(){\n";
    echo "    if ((document.send2friend.send2friendname.value=='') || (document.send2friend.send2friendemail.value=='')){\n";
    echo "      alert(\""._DG_ENTER_NAME_EMAIL."\");\n";
    echo "    } else {";
    echo "      document.send2friend.action = 'index.php';\n";
    echo "      document.send2friend.submit();\n";
    echo "    }\n";
    echo "  }\n";
    echo "</script>\n";
    echo "<script type=\"text/javascript\" src=\"$gallerypath/js/jfunctions.js\"></script>\n";

    if ($ad_lightbox){
    $lightbox  = "<script type=\"text/javascript\" src=\"$gallerypath/js/lightbox/js/prototype.js\"></script>\n";
	$lightbox .= "<script type=\"text/javascript\" src=\"$gallerypath/js/lightbox/js/scriptaculous.js?load=effects\"></script>\n";
	$lightbox .= "<script type=\"text/javascript\" src=\"$gallerypath/js/lightbox/js/lightbox.js\"></script>\n";
	$lightbox .= "<link rel=\"stylesheet\" href=\"$gallerypath/js/lightbox/css/lightbox.css\" type=\"text/css\" media=\"screen\" />\n";
    $mainframe->addCustomHeadTag( $lightbox );
    } else {
    $standart_popup  = "<script type=\"text/javascript\" src=\"$gallerypath/sub_window.js\"></script>\n";
    $mainframe->addCustomHeadTag( $standart_popup );
    }

    $database->setQuery("select c.access "
    . " from #__datsogallery_catg as c "
    . " left join #__datsogallery as a on a.catid = c.cid "
    . " where a.id = $id ");

    $c_access = $database->loadResult();

    if ($gid < $c_access) {
    mosRedirect(sefRelToAbs("$dgurl"), _DG_NOT_ALLOWED_VIEW_PIC);
    }

    $database->setQuery( "select a.id, "
    . " a.catid, "
    . " a.imgtitle, "
    . " a.imgauthor, "
    . " a.imgtext, "
    . " a.imgdate, "
    . " a.imgcounter, "
    . " a.imgvotes, "
    . " a.imgvotesum, "
    . " a.published, "
    . " a.imgoriginalname, "
    . " a.imgfilename, "
    . " a.imgthumbname, "
    . " a.owner "
    . " from #__datsogallery as a "
    . " left join #__users as u on u.username = a.owner "
    . " where a.id = $id ");

    $list = $database->query();

    if (count($database->loadObjectList()) < 1) {
    mosRedirect(sefRelToAbs("$dgurl&func=userpannel"), _DG_PICSLAD);
    }

    list($id,$catid,$imgtitle,$imgauthor,$imgtext,$imgdate,$imgcounter,$imgvotes,$imgvotesum,$published,
    $imgoriginalname,$imgfilename,$imgthumbname,$imgowner,$imgownerid) = mysql_fetch_row($list);

    $id_cache = array();

    $query = "select * from #__datsogallery where catid = $catid and published = '1' and approved = 1 order by ordering $ad_sortby";
    $database->setQuery($query);
    $rows = $database->loadObjectList();

    if (count($rows)) {
	foreach ($rows as $row1) {
    $id_cache[] = $row1->id;
    $ft_cache[] = preg_replace('/\s\s+/', ' ', trim($row1->imgtitle));
    $wm = "$gallerypath/sub_wm.php?src=$picturedir";

    if (!$ad_showwatermark) {
    $fn_cache[] = $picturepath.$row1->imgfilename;
    } else {
    $fn_cache[] = $wm.$row1->imgfilename;
    }
    }
    }
    
    $act_key = array_search($id, $id_cache);
    if($ad_sortby == "ASC"){
    $nid = (isset($id_cache[$act_key + 1])) ? $id_cache[$act_key + 1] : 0;
    $pid = (isset($id_cache[$act_key - 1])) ? $id_cache[$act_key - 1] : 0;
    } else {
    $nid = (isset($id_cache[$act_key - 1])) ? $id_cache[$act_key - 1] : 0;
    $pid = (isset($id_cache[$act_key + 1])) ? $id_cache[$act_key + 1] : 0;}
    unset($id_cache);

    $query = "SELECT * FROM #__datsogallery where id = $id";
    $database->setQuery($query);
    $rows = $database->loadObjectList();
    $row = &$rows[0];
    $mainframe->setPageTitle ($row->imgtitle);

    if ($ad_slideshow)
    require "$gallerydir/sub_slideshow.php";

    $dt = "'dt1','dt2','dt3','dt4','dt5','dt6'";

    echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>\n";
    echo "<tr><td width='100' align='left' id='dt6'>\n";

    if ($pid > 0)
    echo "<a href='" . sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$pid") . "'>". _DG_PREV_IMAGE ."</a>";
    echo "</td>\n<td align='center'>";

    if ($ad_slideshow){
    echo "<div id='dt3'>"._DG_SLIDESHOW .": ";
    echo "<a href=\"javascript:void(0);\" onclick=\"stopstatus=0;runSlideShow();toggle($dt);clearAttr();\" style='cursor:pointer'>";
    echo _DG_START . "</a></div>";
    echo "<div id='dt4' style='display:none'>"._DG_SLIDESHOW .": ";
    echo "<a href='" . sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$id") . "' onclick=\"endSlideShow();toggle($dt);\" style='cursor:pointer'>"._DG_STOP."</a></div>";
    echo "</td>\n";
    }
    echo "<td width='100' align='right' id='dt5'>\n";

    if ($nid > 0)
    echo "<a href='" . sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$nid") . "'>"._DG_NEXT_IMAGE."</a>";
    echo "</td>\n</tr>\n</table><p />";

    $imgcounter++;

    $database->setQuery("update #__datsogallery set imgcounter = $imgcounter where id = $id");
    $database->query();

    if($my->username || ($ad_lightbox_fa > 0)){
    if ($ad_showwatermark && (!$ad_showtip) && (!$ad_lightbox)) {
    echo "<div align='center'><a href=\"javascript: void(0);\" onclick=\"return popup('$gallerypath/sub_wm.php?src=$originaldir$imgoriginalname', '$tle')\">";
    echo "<img src='$gallerypath/sub_wm.php?src=$picturedir$imgfilename' onmouseover=\"dg_dsm();return document.dg_rv\"";
    echo "style='".$ad_imgstyle."' name='SlideShow' title='"._DG_TOENLARGE."' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";

    } else if (!$ad_showwatermark && (!$ad_showtip) && (!$ad_lightbox)) {
    echo "<div align='center'><a href=\"javascript: void(0);\" onclick=\"return popup('$originalpath$imgoriginalname', '$tle')\">";
    echo "<img src='$picturepath$imgfilename' onmouseover=\"dg_dsm();return document.dg_rv\"";
    echo "style='".$ad_imgstyle."' name='SlideShow' title='"._DG_TOENLARGE."' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";

    } else if ($ad_showwatermark && ($ad_showtip) && (!$ad_lightbox)) {
    $tle = ereg_replace('"', '', $imgtitle);
    echo "<div align='center'><a href=\"javascript: void(0);\" onclick=\"return popup('$gallerypath/sub_wm.php?src=$originaldir$imgoriginalname', '$tle')\"";
    echo "onmouseover=\"return overlib('"._DG_VIEW_ORG_IMAGE."');\"";
    echo "onmouseout=\"return nd();\"><img src='$gallerypath/sub_wm.php?src=$picturedir$imgfilename'";
    echo "onmouseover=\"dg_dsm();return document.dg_rv\" style='".$ad_imgstyle."' name='SlideShow' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";

    } else if (!$ad_showwatermark && ($ad_showtip) && (!$ad_lightbox)) {
    $tle = ereg_replace('"', '', $imgtitle);
    echo "<div align='center'><a href=\"javascript: void(0);\" onclick=\"return popup('$originalpath$imgoriginalname', '$tle')\"";
    echo "onmouseover=\"return overlib('"._DG_VIEW_ORG_IMAGE."');\"";
    echo "onmouseout=\"return nd();\"><img src='$picturepath$imgfilename' onmouseover=\"dg_dsm();return document.dg_rv\"";
    echo "style='".$ad_imgstyle."' name='SlideShow' alt='' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";

    } else if ($ad_showwatermark && (!$ad_showtip) && ($ad_lightbox)) {
    $tle = ereg_replace('"', '', $imgtitle);
    echo "<div align='center'><a href='$gallerypath/sub_wm.php?src=$originaldir$imgoriginalname' rel=\"lightbox\" title=\"".$tle."\">";
    echo "<img src='$gallerypath/sub_wm.php?src=$picturedir$imgfilename' onmouseover=\"dg_dsm();return document.dg_rv\"";
    echo "style='".$ad_imgstyle."' name='SlideShow' title='"._DG_TOENLARGE."' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";

    } else if (!$ad_showwatermark && (!$ad_showtip) && ($ad_lightbox)) {
    echo "<div align='center'><a href='$originalpath$imgoriginalname' rel=\"lightbox\"  title=\"".$tle."\">";
    echo "<img src='$picturepath$imgfilename' onmouseover=\"dg_dsm();return document.dg_rv\"";
    echo "style='".$ad_imgstyle."' name='SlideShow' title='"._DG_TOENLARGE."' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";

    } else if ($ad_showwatermark && ($ad_showtip) && ($ad_lightbox)) {
    $tle = ereg_replace('"', '', $imgtitle);
    echo "<div align='center'><a href='$gallerypath/sub_wm.php?src=$originaldir$imgoriginalname' id='test' rel='lightbox' title=\"".$tle."\" ";
    echo "onmouseover=\"return overlib('"._DG_VIEW_ORG_IMAGE."');\"";
    echo "onmouseout=\"return nd();\"><img src='$gallerypath/sub_wm.php?src=$picturedir$imgfilename' style='".$ad_imgstyle."' ";
    echo "onmouseover=\"dg_dsm();return document.dg_rv\" name='SlideShow' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";

    } else if (!$ad_showwatermark && ($ad_showtip) && ($ad_lightbox)) {
    $tle = ereg_replace('"', '', $imgtitle);
    echo "<div align='center'><a href='$originalpath$imgoriginalname' rel=\"lightbox\"  title=\"".$tle."\"" ;
    echo "onmouseover=\"return overlib('"._DG_VIEW_ORG_IMAGE."');\"";
    echo "onmouseout=\"return nd();\"><img src='$picturepath$imgfilename' style='".$ad_imgstyle."'";
    echo "onmouseover=\"dg_dsm();return document.dg_rv\" name='SlideShow' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";
    }
    } else {
    if ($ad_showwatermark) {
    echo "<div align='center'><img src='$gallerypath/sub_wm.php?src=$picturedir$imgfilename'";
    echo "style='".$ad_imgstyle."' name='SlideShow' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";

    } else if (!$ad_showwatermark) {
    echo "<div align='center'><img src='$picturepath$imgfilename'";
    echo "style='".$ad_imgstyle."' name='SlideShow' alt='".$tle."' /></a>";
    echo "<div id='ImgText' style='padding-top:5px;font-size:16px;font-weight:700'></div></div>";
    }
    }
    echo "<div id='dt2'><p />";
    if ($ad_showdownload && (!$ad_downpub) && (!$my->username)) {
    echo "<div align='center'><img src=\"$gallerypath/images/no_download.gif\" border='0' title='"._DG_LOGIN_FIRST."' alt='' /></div>\n";
    } else if ($ad_showdownload && ($my->username)) {
    echo "<div align='center'><a href='" . sefRelToAbs("$dgurl&func=download&file=$imgoriginalname") . "' onmouseover=\"dg_dsm('"._DG_SAVE_AS."');return document.dg_rv\">
    <img src=\"$gallerypath/images/download.gif\" border='0' title='"._DG_SAVE_AS."' alt='' /></a></div>\n";
    } else if ($ad_showdownload && ($ad_downpub)) {
    echo "<div align='center'><a href='" . sefRelToAbs("$dgurl&func=download&file=$imgoriginalname") . "' onmouseover=\"dg_dsm('"._DG_SAVE_AS."');return document.dg_rv\">
    <img src=\"$gallerypath/images/download.gif\" border='0' title='"._DG_SAVE_AS."' alt='' /></a></div>\n";
    }
    echo "<p />";

    if ($ad_showdetail) {
    $fimgdate = strftime("%d.%m.%Y %H:%M", $imgdate);
    $imgsize = filesize("$mosConfig_absolute_path$ad_pathoriginals/$imgoriginalname");
    $dgfilesize = format_filesize($imgsize);
    $size_pic[0] = "";
    $size_pic[1] = "";
    $size_pic = @getimagesize("$mosConfig_absolute_path$ad_pathoriginals/$imgoriginalname");
    $x = "x";
    $res = "$size_pic[0] $x $size_pic[1]";

    if ($imgvotes > 0) {
    $fimgvotesum = number_format($imgvotesum / $imgvotes, 2, ",", ".");

    $frating = "$fimgvotesum ($imgvotes "._DG_VOTES.")";
    } else {
    $frating = _DG_NO_VOTES;
    }

    echo "\n<table width='100%' border='0' cellspacing='1' cellpadding='4'>";
    echo "<tr><td colspan='2' class='sectiontableheader'><strong>".$row->imgtitle."</strong>";
    echo "</td>\n</tr>\n";
    if ($ad_showimgtext){
    if ($imgtext){
    echo "<tr class='sectiontableentry1'><td width='30%' valign='top'><strong>". _DG_DESCRIPTION.":</strong></td>\n
    <td width='70%' valign='top'>".$row->imgtext."</td>\n</tr>\n"; }
    }
    if ($ad_showfimgdate){
    echo "<tr class='sectiontableentry2'><td width='30%' valign='top'><strong>". _DG_DATE_ADD.":</strong></td>\n
    <td width='70%' valign='top'>".$fimgdate."</td>\n</tr>\n"; }
    if ($ad_showimgcounter){
    echo "<tr class='sectiontableentry1'><td width='30%' valign='top'><strong>". _DG_HITS.":</strong></td>\n
    <td width='70%' valign='top'>".$imgcounter."</td>\n</tr>\n"; }
    if ($ad_showfrating){
    echo "<tr class='sectiontableentry2'><td width='30%' valign='top'><strong>". _DG_RATING.":</strong></td>\n
    <td width='70%' valign='top'>".$frating."</td>\n</tr>\n"; }
    if ($ad_showres){
    echo "<tr class='sectiontableentry1'><td width='30%' valign='top'><strong>"._DG_SIZE.":</strong></td>\n
    <td width='70%' valign='top'>".$res."</td>\n</tr>\n"; }
    if ($ad_showfimgsize){
    echo "<tr class='sectiontableentry2'><td width='30%' valign='top'><strong>"._DG_FILESIZE.":</strong></td>\n
    <td width='70%' valign='top'>".$dgfilesize."</td>\n</tr>\n"; }
    if ($ad_showimgauthor){
    if ($imgauthor == NULL){
    echo "<tr class='sectiontableentry1'><td width='30%' valign='top'><strong>"._DG_AUTHOR.":</strong></td>\n
    <td width='70%' valign='top'><strong>". $imgowner ."</strong></td>\n</tr>\n";
    } else {
    echo "<tr class='sectiontableentry1'><td width='30%' valign='top'><strong>"._DG_AUTHOR.":</strong></td>\n
    <td width='70%' valign='top'><strong>". $imgauthor ."</strong></td>\n</tr>\n"; }
    }
    echo "</table>\n";
    }

    if ($ad_showrating) {
    echo "<form name='ratingform' action='index.php' target='_top' method='post'>";
    echo "<input type='hidden' name='option' value='com_datsogallery' />";
    echo "<input type='hidden' name='Itemid' value='$Itemid' />";
    echo "<input type='hidden' name='func' value='votepic' />";
    echo "<input type='hidden' name='catid' value='$catid' />";
    echo "<input type='hidden' name='id' value='$id' />";
    echo "<table width='100%' border='0' cellspacing='1' cellpadding='3'>";
    echo "<tr><td class='sectiontableheader'><strong>". _DG_PICTURE_RATING."</strong></td>\n</tr>\n";
    echo "<tr><td class='sectiontableentry1' align='center'>";
    echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'><tr>";
    echo "<td align='center'>1 ("._DG_BAD.")</td>\n";

    $selitem = floor($ad_maxvoting / 2) + 1;

    for ($i = 1; $i <= $ad_maxvoting; $i++) {
    echo "<td align='center'><input type='radio' value='$i' name='imgvote'";

    if ($i == $selitem)
    echo " checked='checked'";
    echo " /></td>\n";
    }

    $i--;

    echo "<td align='center'>$i ("._DG_GOOD.")</td>\n<td align='right'>
    <input class='button' type='submit' value='" . _DG_VOTE . "' name='Vote' /></td>\n</tr>\n</table>\n";
    echo "</td>\n</tr>\n";
    echo "</table>\n</form>";
    }

    if ($ad_anoncomment) {
    $allowcomment = 1;
    } else if ($my->username) {
    $allowcomment = 1;
    } else {
    $allowcomment = 0;
    }

    if ($ad_showcomment) {
    if ($allowcomment) {
    $cryptinstall="./components/com_datsogallery/crypt/cryptographp.fct.php";
    require $cryptinstall;
    echo "<form name='commentform' action='index.php' target='_top' method='post'>";
    echo "<input type='hidden' name='option' value='com_datsogallery' />";
    echo "<input type='hidden' name='Itemid' value='$Itemid' />";
    echo "<input type='hidden' name='func' value='commentpic' />";
    echo "<input type='hidden' name='catid' value='$catid' />";
    echo "<input type='hidden' name='id' value='$id' />";

    if (!$my->username) {
    $ip = getenv("REMOTE_ADDR");
    echo "<input type='hidden' name='cmtname' value='$ip' />";
    }
    }
    echo "<table width='100%' border='0' cellspacing='1' cellpadding='4'>";
    echo "<tr><td width='30%' height='20' class='sectiontableheader'>"._DG_AUTHOR."</td>\n";
    echo "<td width='70%' height='20' class='sectiontableheader'>". _DG_COMMENT1."</td>\n</tr>\n";

    $line = 2;

    $database->setQuery("SELECT cmtid, cmtip, cmtname, cmttext, cmtdate "
    . " FROM #__datsogallery_comments "
    . " WHERE cmtpic = '$id' "
    . " ORDER BY cmtid ASC ");

    $result = $database->query();

    while ($row1 = mysql_fetch_object($result)) {
    $linecolor = ($line % 2) + 1;

    $database->setQuery("select username "
    . " from #__users "
    . " where username='$row1->cmtname' ");
    $userid = $database->loadResult();

    echo "<tr class='sectiontableentry" . $linecolor . "'><td width='30%' valign='top'><strong>" . $row1->cmtname . "</strong>";

    if ($is_editor) {
    echo "<br><img src='components/com_datsogallery/images/ip.gif' title='$row1->cmtip' hspace='3' border='0' alt='' />";
    echo "<a href='" . sefRelToAbs("$dgurl&func=deletecomment&catid=$catid&cmtid=$row1->cmtid") . "'>
    <img src='components/com_datsogallery/images/del.gif' title='". _DG_DELETE_COMMENT."' hspace='3' border='0' alt='' /></a>";
    }
    echo "</td>\n";

    $signtime = strftime("%d.%m.%Y %H:%M", $row1->cmtdate);
    $origtext = $row1->cmttext;

    if ($ad_bbcodesupport){
    require_once($mosConfig_absolute_path."/administrator/components/com_datsogallery/images.datsogallery.php");
    $origtext=bb_decode($origtext);
    }
    
    echo "<td width='70%' valign='top'><span class='small'>"._DG_COMM_ADDED.": $signtime <br /></span>".$origtext."</td>\n</tr>\n";

    $line++;
    }

    $linecolor=($line % 2) + 1;
    $bbcodestatus=array(_DG_BB_OFF, _DG_BB_ON);

    if ($allowcomment > 0) {
    if ($my->username && $ad_name_or_user == "name"){
    $database->setQuery("select name from #__users where username='$my->username'");
    $ubn = $database->loadObjectList();
    echo "<tr class='sectiontableentry" . $linecolor . "'><td width='30%' valign='top'><strong>" . $ubn[0]->name . "</strong>
    <input type='hidden' name='cmtname' value='".$ubn[0]->name."' />";
    } else if ($my->username && $ad_name_or_user == "user"){
    echo "<tr class='sectiontableentry" . $linecolor . "'><td width='30%' valign='top'><strong>" . $my->username . "</strong>
    <input type='hidden' name='cmtname' value='".$my->username."' />";
    } else {
    echo "<tr class='sectiontableentry" . $linecolor . "'><td width='30%' valign='top'><strong>" . _DG_GUEST . "</strong><br />";
    echo "<input type='hidden' name='cmtname' value='"._DG_GUEST."' />";
    }
    echo "<p /><small>" . _DG_BBCOD . " <strong>$bbcodestatus[$ad_bbcodesupport]</strong>.</small><br />";
    if ($ad_security){
    echo "<br /><small><b>"._DG_SECURITY."</b></small>";
    echo dsp_crypt(0,1);
    }
    echo "</td>\n";
    echo "<td width='70%' valign='top'><textarea cols='40' rows='4' name='cmttext' class='inputbox' wrap='virtual'></textarea></td>\n</tr>\n";
    echo "<tr class='sectiontableentry" . $linecolor . "'><td width='130'>";
    echo "<input type='submit' name='submit' value='"._DG_SEND."' class='button' onclick='validatecomment()' /></td>\n";
    echo "<td align='right'><input type='reset' value='"._DG_CLEAR."' name='reset' class='button' /></td>\n</tr>\n</table>\n";
    echo "</form>";
    } else {
    echo "<tr class='sectiontableentry" . $linecolor . "'><td width='30%' valign='top'></td>\n";
    echo "<td width='70%' valign='top'>". _DG_PLEASE_REGISTER . "</td>\n</tr>\n</table>\n";
    }
    }
    
    if ($ad_showsend2friend) {
    if ($my->username) {
    $sql = $database->setQuery("select name,email from #__users where username='$my->username'");
    $s2y = $database->loadObjectList();
    echo "<form method='post' name='send2friend' action='".sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$id")."'>";
    echo "<input type='hidden' name='option' value='com_datsogallery' />";
    echo "<input type='hidden' name='func' value='send2friend' />";
    echo "<input type='hidden' name='from2friendname' value='" . $s2y[0]->name . "' />";
    echo "<input type='hidden' name='from2friendemail' value='" . $s2y[0]->email . "' />";
    echo "<input type='hidden' name='catid' value='$catid' />";
    echo "<input type='hidden' name='id' value='$id' />";
    echo "<table width='100%' border='0' cellspacing='1' cellpadding='3'>";
    echo "<tr><td class='sectiontableheader' colspan='2'><strong>". _DG_SEND_FRIEND."</strong></td>\n</tr>\n";
    echo "<tr class='sectiontableentry1'><td width='30%' valign='top'><strong>". _DG_YOUR_NAME.":</strong></td>\n
    <td width='70%' valign='top'>" . $s2y[0]->name . "</td>\n</tr>\n";
    echo "<tr class='sectiontableentry2'><td width='30%' valign='top'><strong>". _DG_YOUR_MAIL.":</strong></td>\n
    <td width='70%' valign='top'>" . $s2y[0]->email . "</td>\n</tr>\n";
    echo "<tr class='sectiontableentry1'><td width='30%' valign='top'><strong>". _DG_FRIENDS_NAME.":</strong></td>\n
    <td width='70%' valign='top'>
    <input type='text' name='send2friendname' size='15' class='inputbox' />
    </td>\n</tr>\n";
    echo "<tr class='sectiontableentry2'><td width='30%' valign='top'><strong>". _DG_FRIENDS_MAIL.":</strong></td>\n
    <td width='70%' valign='top'>
    <input type='text' name='send2friendemail' size='15' class='inputbox'>
    </td>\n</tr>\n";
    echo "<tr class='sectiontableentry1'><td colspan='2' valign='top'>
    <input type='button' name='send' value='"._DG_SEND."' class='button' onclick='validatesend2friend()' />
    </td>\n</tr>\n";
    echo "</table>\n</form>";
    }
    }
    echo "</div>";
?>
