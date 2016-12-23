<?php
	/***************************************************\
	**   DatsoGallery - A Joomla! Gallery Component    **
	**   Copyright (C) 2006-2007  by Andrey Datso      **
	**   Version    : 1.3.9.1                          **
	**   Homepage   : http://www.datso.fr              **
	**   License    : Copyright, don't distribute      **
    **   Based on   : Akogallery 2.1 by Arthur Konze   **
	\***************************************************/

    defined ('_VALID_MOS') or die( 'Direct Access to this location is not allowed.' );
    error_reporting(E_ALL ^ E_NOTICE);
    global $dgurl;
    $submit = trim( mosGetParam( $_POST, 'submit', '' ) );
    if ( @$_REQUEST['is_editor'] ){
    print "<script>document.location.href='../../index.php'</script>\n";
    exit();
	}
    if ( $is_editor ){
    if ( $submit ){
    $database->setQuery( "DELETE FROM #__datsogallery_comments WHERE cmtid = '$cmtid'" );
    $database->query();
    echo mosRedirect(sefRelToAbs("$dgurl&func=detail&catid=$catid&id=$cmtpic"),  _DG_COMM_DELETED);
    } else {
    echo "<table width='100%' border='0' cellspacing='1' cellpadding='4'>";
    echo "<tr><td width='30%' height='20' class='sectiontableheader'>"._DG_AUTHOR."</td>";
    echo "<td width='70%' height='20' class='sectiontableheader'>"._DG_COMMENT."</td></tr>";
    $database->setQuery( "SELECT cmtid, cmtip, cmtname, cmttext, cmtdate, cmtpic FROM #__datsogallery_comments WHERE cmtid = '$cmtid'" );
    $result1=$database->query();
    list( $cmtid, $cmtip, $cmtname, $cmttext, $cmtdate, $cmtpic )=mysql_fetch_row( $result1 );
    echo "<tr class='sectiontableentry1'><td width='30%' valign='top'><b>$cmtname</b>";
    echo "<br><img src='components/com_datsogallery/images/ip.gif' title='$cmtip' hspace='3' border='0'></td>";
    $signtime=strftime( "%c", $cmtdate );
    $origtext=$cmttext;
    echo "<td width='70%' valign='top' colspan='2'><span class='small'>"._DG_COMMENT_ADDED.": $signtime<hr></span>$origtext</td></tr>";
    echo "<form action='".sefRelToAbs("$dgurl&func=deletecomment&catid=$catid&cmtid=$cmtid&cmtpic=$cmtpic")."' method='post'>";
    echo "<tr class='sectiontableentry1'><td colspan='2'>";
    echo "<input class='button' type='submit' name='submit' value='"._DG_DELETE_COMMENT."'>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' value='"._DG_CANCEL_TB."' class='button' onclick='javascript:history.go(-1);' />";
    echo "</td></tr></form>";
    echo "</table>";
    }
    } else {
    echo "<p><a href='".sefRelToAbs("$dgurl")."'>"._DG_BACK."</a>";
    }
?>
