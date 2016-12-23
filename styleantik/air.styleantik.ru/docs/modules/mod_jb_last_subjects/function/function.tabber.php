<?php
//*****************************************************************************
//* Jonathan, www.joomlafreeware.com                                          *
//* @copyright Copyright (C) 2006 www.joomlafreeware.com                      *
//* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php    *
//*****************************************************************************
defined( '_VALID_MOS' ) or die( 'Прямой доступ закрыт.' );


//*********************************
//*       SHOW TABS               *
//*********************************
class my_tabs {
  /** @var int Use cookies */
  var $useCookies = 0;

  function my_tabs( $useCookies, $xhtml=NULL ) 
  {
    global $mosConfig_live_site, $mainframe;

    if (!$useCookies)
    {
	  echo("
        <script type='text/javascript' 
		src='$mosConfig_live_site/includes/joomla_enhanced/tabber/tabber.js'>
		</script>");
	}	
	if ($xhtml)
	{
	  $mainframe->addCustomHeadTag("
	    <link rel='stylesheet' href='includes/joomla_enhanced/tabber/tabber.css' TYPE='text/css' MEDIA='screen'>
	    <link rel='stylesheet' href='includes/joomla_enhanced/tabber/example-print.css' TYPE='text/css' MEDIA='print'>

		<script type='text/javascript'>

		/* Optional: Temporarily hide the 'tabber' class so it does not 'flash'
   		on the page as plain HTML. After tabber runs, the class is changed
   		to 'tabberlive' and it will appear. */

		// document.write('<style type='text/css'>.tabber{display:none;}<\/style>');
		</script>
	    ");  
	}
	else
	{
      echo("
        <link rel='stylesheet' href='$mosConfig_live_site/includes/joomla_enhanced/tabber/tabber.css' TYPE='text/css' >
	    <link rel='stylesheet' href='$mosConfig_live_site/includes/joomla_enhanced/tabber/example-print.css' TYPE='text/css' MEDIA='print'>
	    
		<script type='text/javascript'>

		/* Optional: Temporarily hide the 'tabber' class so it does not 'flash'
   		on the page as plain HTML. After tabber runs, the class is changed
   		to 'tabberlive' and it will appear. */

		document.write('<style type='text/css'>.tabber{display:none;}<\/style>');
		</script>
	    ");
	}
    if ($useCookies)
    {
	  echo("
	    <script type='text/javascript'>
	    /*==================================================
  		Set the tabber options (must do this before including tabber.js)
 		 ==================================================*/
		var tabberOptions = {

		  'cookie':\"tabber\", /* Name to use for the cookie */

		  'onLoad': function(argsObj)
		  {
		    var t = argsObj.tabber;
		    var i;

		    /* Optional: Add the id of the tabber to the cookie name to allow
		       for multiple tabber interfaces on the site.  If you have
		       multiple tabber interfaces (even on different pages) I suggest
		       setting a unique id on each one, to avoid having the cookie set
		       the wrong tab.
		    */
		    var id = t.id; /* ID of the main tabber DIV */
		    if (t.id) {
		      t.cookie = t.id + t.cookie;
		    }

		    /* If a cookie was previously set, restore the active tab */
		    i = parseInt(getCookie(t.cookie));
		    if (isNaN(i)) { return; }
		    t.tabShow(i);
		    // alert('getCookie(' + t.cookie + ') = ' + i);
		  },

		  'onClick':function(argsObj)
		  {
		    var c = argsObj.tabber.cookie;
		    var i = argsObj.index;
		    // alert('setCookie(' + c + ',' + i + ')');
		    setCookie(c, i);
		  }
		};

		/*==================================================
		  Cookie functions
		  ==================================================*/
		function setCookie(name, value, expires, path, domain, secure) {
		    document.cookie= name + \"=\" + escape(value) +
		        ((expires) ? \"; expires=\" + expires.toGMTString() : \"\") +
		        ((path) ? \"; path=\" + path : \"\") +
		        ((domain) ? \"; domain=\" + domain : \"\") +
		        ((secure) ? \"; secure\" : \"\");
		}

		function getCookie(name) {
		    var dc = document.cookie;
		    var prefix = name + \"=\";
		    var begin = dc.indexOf(\"; \" + prefix);
		    if (begin == -1) {
		        begin = dc.indexOf(prefix);
		        if (begin != 0) return null;
		    } else {
		        begin += 2;
		    }
		    var end = document.cookie.indexOf(\";\", begin);
		    if (end == -1) {
		        end = dc.length;
		    }
		    return unescape(dc.substring(begin + prefix.length, end));
		}
		function deleteCookie(name, path, domain) {
		    if (getCookie(name)) {
		        document.cookie = name + \"=\" +
		            ((path) ? \"; path=\" + path : \"\") +
		            ((domain) ? \"; domain=\" + domain : \"\") +
		            \"; expires=Thu, 01-Jan-70 00:00:01 GMT\";
		    }
		}

		</script>
	  "); //mainframe
	  if ($useCookies)
      { 
	    echo("
        <script type='text/javascript' 
		src='$mosConfig_live_site/includes/joomla_enhanced/tabber/tabber.js'>
		</script>
        ");
      }
	}
  }

  //****************************
  //*   creates a tab pane     *
  //****************************
  function my_pane_start($id){
    echo "<div class='tabber' id='$id'>";
  }

  /**
  * Ends Tab Pane
  */
  function my_pane_end() {
    echo "</div>";
  }

  /*
  * Creates a tab with title text and starts that tabs page
  * @param tabText - This is what is displayed on the tab
  * @param paneid - This is the parent pane to build this tab on
  */
  function my_tab_start( $tabText, $paneid ) 
  {
    echo "<div class='tabbertab'>";
	echo "<h2>$tabText</h2>";
  }

  /*
  * Ends a tab page
  */
  function my_tab_end() 
  {
    echo "</div>";
  }
}
?>