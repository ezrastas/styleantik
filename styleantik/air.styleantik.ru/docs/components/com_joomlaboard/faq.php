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
defined( '_VALID_MOS' ) or die( 'Прямой доступ закрыт.' );
?>
         <h3 class="contentheading"><a name="boardcode"></a> Что такое boardcode?</h3>
         <p>Boardcode - специальные тэги, которые позволят Вам форматировать ваши сообщения.<br /> В настоящее время, Joomlaboard поддерживает <b>links</b> (ссылки), <b>bold</b> (полужирный ), <b>italic</b> (наклонный), <b>underline</b> (подчеркнутый), <b>quote</b> ("цитируемый" текст), <b>img</b> (рисунки), <b>size</b> (размер), <b>list</b> (список) и <b>color</b> (раскрашенный текст). <br /> <br />
         Тэги используются следующим образом:</p>
		<table width="90%">
		 <tr><th class="sectiontableheader">Код</th><th class="sectiontableheader">Результат</th></tr>
		 <tr><td  class="sectiontableentry2">[b]Полужирный [/b]</td><td  class="sectiontableentry2"><b>Полужирный </b></td></tr>
         <tr><td class="sectiontableentry1">[i]Наклонный[/i]</td><td class="sectiontableentry1"><i>Наклонный</i></td></tr>
         <tr class="sectiontableentry2"><td>[u]Подчеркнутый[/u]</td><td><u>Подчеркнутый</u></td></tr>
	     <tr class="sectiontableentry1"><td>[size=4]Размер[/size]</td><td><font size="4">Размер</font></td></tr>
	     <tr class="sectiontableentry2"><td>[color=#FF0000]Красный[/color]</td><td><font color="red">Красный</font></td></tr>
	     <tr class="sectiontableentry1"><td>[img=150]ссылка на рисунок[/img]</td><td>выводит изображение с шириной от 150 пикселей.<br />
	    <u>Пожалуйста помните, что Вы можете вывести рисунок с максимальной шириной 499 пикселей.</u></td></tr>
		<tr class="sectiontableentry2"><td>[ul]<br />[li]элемент 1[/li]<br />
		        [li]элемент 2[/li]<br />
	    	    [li]элемент 3[/li]<br />[/ul]<br /></td>
	        
		<td>
	        <ul><li>элемент 1</li>
	            <li>элемент 2</li>
		        <li>элемент 3</li></ul>
		</td></tr>

		<tr class="sectiontableentry1"><td>
		    [ol]<br />[li]элемент 1[/li]<br />
		    [li]элемент 2[/li]<br />
		    [li]элемент 3[/li]<br />[/ol]<br />
		</td>
		<td>   <ol><li>элемент 1</li>
		    <li>элемент 2</li>
	    	<li>элемент 3</li></ol>
		</td></tr>
		<tr class="sectiontableentry2"><td>[url]http://joomlaportal.ru/[/url]</td><td><a href="http://joomlaportal.ru/">http://joomlaportal.ru/</a></td></tr>
        <tr class="sectiontableentry1"><td>[url=http://joomlaportal.ru/]Joomla! по-русски[/url]</td><td><a href="http://joomlaportal.ru/">Joomla! по-русски</a></td></tr>
        <tr class="sectiontableentry2"><td>[quote]Цитата[/quote]</td><td><div class="sb_quote">Цитата</div></td></tr>
        <tr class="sectiontableentry1"><td>[code]<br />&lt;?<br /> //Пример кода <br />while ($adversary=='Neo'){ fork(agent_Smith);} ?&gt;<br />[/code]<br /></td>
        <td>
        	<table width="90%" border="0" align="center">
        	<tr><td><b>Код:</b></td></tr>
        		<tr><td><pre>
<?php
highlight_string('<?'."\n".'//Пример кода'."\n".'while ($adversary==\'Neo\')'.'{ fork(agent_Smith);}'."\n".'?>');
?>
        	</pre></td></tr>
         </table></td></tr></table>
