<?php
/**
* faq.php joomlaboard faq
* @package com_joomlaboard
* @copyright (C) 2000 - 2007 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF
* Joomla! is Free Software
**/

// Dont allow direct linking
defined( '_VALID_MOS' ) or die( '������ ������ ������.' );
?>
         <h3 class="contentheading"><a name="boardcode"></a> ��� ����� boardcode?</h3>
         <p>Boardcode - ����������� ����, ������� �������� ��� ������������� ���� ���������.<br /> � ��������� �����, Joomlaboard ������������ <b>links</b> (������), <b>bold</b> (���������� ), <b>italic</b> (���������), <b>underline</b> (������������), <b>quote</b> ("����������" �����), <b>img</b> (�������), <b>size</b> (������), <b>list</b> (������) � <b>color</b> (������������ �����). <br /> <br />
         ���� ������������ ��������� �������:</p>
		<table width="90%">
		 <tr><th class="sectiontableheader">���</th><th class="sectiontableheader">���������</th></tr>
		 <tr><td  class="sectiontableentry2">[b]���������� [/b]</td><td  class="sectiontableentry2"><b>���������� </b></td></tr>
         <tr><td class="sectiontableentry1">[i]���������[/i]</td><td class="sectiontableentry1"><i>���������</i></td></tr>
         <tr class="sectiontableentry2"><td>[u]������������[/u]</td><td><u>������������</u></td></tr>
	     <tr class="sectiontableentry1"><td>[size=4]������[/size]</td><td><font size="4">������</font></td></tr>
	     <tr class="sectiontableentry2"><td>[color=#FF0000]�������[/color]</td><td><font color="red">�������</font></td></tr>
	     <tr class="sectiontableentry1"><td>[img=150]������ �� �������[/img]</td><td>������� ����������� � ������� �� 150 ��������.<br />
	    <u>���������� �������, ��� �� ������ ������� ������� � ������������ ������� 499 ��������.</u></td></tr>
		<tr class="sectiontableentry2"><td>[ul]<br />[li]������� 1[/li]<br />
		        [li]������� 2[/li]<br />
	    	    [li]������� 3[/li]<br />[/ul]<br /></td>
	        
		<td>
	        <ul><li>������� 1</li>
	            <li>������� 2</li>
		        <li>������� 3</li></ul>
		</td></tr>

		<tr class="sectiontableentry1"><td>
		    [ol]<br />[li]������� 1[/li]<br />
		    [li]������� 2[/li]<br />
		    [li]������� 3[/li]<br />[/ol]<br />
		</td>
		<td>   <ol><li>������� 1</li>
		    <li>������� 2</li>
	    	<li>������� 3</li></ol>
		</td></tr>
		<tr class="sectiontableentry2"><td>[url]http://joomlaportal.ru/[/url]</td><td><a href="http://joomlaportal.ru/">http://joomlaportal.ru/</a></td></tr>
        <tr class="sectiontableentry1"><td>[url=http://joomlaportal.ru/]Joomla! ��-������[/url]</td><td><a href="http://joomlaportal.ru/">Joomla! ��-������</a></td></tr>
        <tr class="sectiontableentry2"><td>[quote]������[/quote]</td><td><div class="sb_quote">������</div></td></tr>
        <tr class="sectiontableentry1"><td>[code]<br />&lt;?<br /> //������ ���� <br />while ($adversary=='Neo'){ fork(agent_Smith);} ?&gt;<br />[/code]<br /></td>
        <td>
        	<table width="90%" border="0" align="center">
        	<tr><td><b>���:</b></td></tr>
        		<tr><td><pre>
<?php
highlight_string('<?'."\n".'//������ ����'."\n".'while ($adversary==\'Neo\')'.'{ fork(agent_Smith);}'."\n".'?>');
?>
        	</pre></td></tr>
         </table></td></tr></table>
