<html>

<head>
<?php mosShowHead(); ?>
<link href="<?php echo $mosConfig_live_site;?>/templates/owtweb_0901/css/template_css.css" rel="stylesheet" type="text/css"/>
</head>

<body bgcolor="white" background="<?php echo $mosConfig_live_site . $pfad; ?>/images/stories/0901bigback.png" link="#666666" vlink="blue" alink="#3366CC">
<table border="0" width="920" align="center" bgcolor="#993333">
    <tr>
        <td height="31">

            <table border="0" width="920" align="center">
                <tr>
                    <td width="595" bgcolor="#993333" rowspan="2" valign="top" align="left" style="border-width:1; border-color:rgb(204,51,0); border-style:solid;">

                        <p><img src="<?php echo $mosConfig_live_site . $pfad; ?>/images/stories/0901head.jpg" width="602" height="140" border="0"></p>
                    </td>
                    <td width="309" bgcolor="#663333" valign="top" style="border-width:1; border-color:rgb(204,51,0); border-style:solid;"><font color="white"><b>&nbsp;Newsflash &nbsp;<?php echo mosCurrentDate () ; ?></b></font></td>
                </tr>
                <tr>
                    <td width="309" height="25" bgcolor="#663333" valign="top" style="border-width:1; border-color:rgb(204,51,0); border-style:solid;" background="<?php echo $mosConfig_live_site . $pfad; ?>/images/stories/0901backright02.png" width="309 align="right">

                        <p>&nbsp;<?php mosLoadModules ( 'newsflash' ); ?></p>
                    </td>
                </tr>
            </table>

<table border="0" width="920" align="center">
                <tr>
                    <td height="6" width="690" valign="top">
                        <table border="0" width="712">
                            <tr>
                                <td width="349" valign="top" style="border-width:1; border-color:rgb(204,51,0); border-style:solid;">&nbsp;<?php mosLoadModules ( 'user1' ); ?></td>
                                <td width="349" style="border-width:1; border-color:rgb(204,51,0); border-style:solid;">&nbsp;<?php mosLoadModules ( 'user2' ); ?></td>
                            </tr>
                            <tr>
                                <td width="702" colspan="2" bgcolor="#663333">&nbsp;<?php mosPathWay(); ?></td>
                            </tr>
                            <tr>
                                <td width="702" height="9" colspan="2" style="border-width:1; border-color:rgb(204,51,0); border-style:solid;">
                                    <p>&nbsp;<?php mosMainBody(); ?></p>
                                </td>
                            </tr>
                        </table>
                    </td>
<td height="6" width="214" align="center" valign="top" style="border-width:1; border-color:rgb(204,51,0); border-style:solid;" background="<?php echo $mosConfig_live_site . $pfad; ?>/images/stories/0901backright.png">
                        <p>&nbsp;<?php mosLoadModules ( 'user4' ); ?></p>
                        <p>&nbsp;<?php mosLoadModules ( 'right' ); ?></p>
                        <p>&nbsp;<?php mosLoadModules ( 'user5' ); ?></p>
                        <p>&nbsp;<?php mosLoadModules ( 'user6' ); ?></p>
</td>
                </tr>
</table>
            <p align="center">&nbsp;<?php mosLoadModules ( 'footer' ); ?></p>
            <p align="center"><a href="http://www.owtweb.de" target="_blank" title="Homepage programmieren"><font size="1" color="#CC3300"><b>OWTweb - Internetsolution</b></font></a></p>
        </td>
    </tr>
</table>
<p align="center">&nbsp;</p>
</body>

</html>