<?php
/**
 * @Copyright
 * @package     TM Wrapper
 * @author      TemplateMonster
 * @link        http://www.templatemonster.com/
 *
 * @license     GNU/GPL
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
defined('_JEXEC') or die('Restricted access');

class PlgSystemSmoothScroll extends JPlugin
{
    public function onBeforeCompileHead()
    {
        $app = JFactory::getApplication();
        $client = new JApplicationWebClient();
        if(!$app->isAdmin() && !$client->mobile){
            JHtml::_('jquery.framework');
        }
    }
    /**
     * Trigger onAfterRender executes the main plugin procedure
     */
    public function onAfterRender()
    {
        $app = JFactory::getApplication();
        $client = new JApplicationWebClient();
        if(!$app->isAdmin() && !$client->mobile){
            $body = JFactory::getApplication()->getBody(false);
            $body = str_replace("</body>", "<script src=\"plugins/system/smoothscroll/assets/js/jquery.simplr.smoothscroll.min.js\"></script>\n</body>", $body);
            JFactory::getApplication()->setBody($body);
        }
    }
}