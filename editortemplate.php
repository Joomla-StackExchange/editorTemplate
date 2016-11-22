<?php
/**
 * @package 	Editor Template
 * @version 	1.0.0
 * @author 		webchun
 * @copyright 	webchun
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
**/

defined('_JEXEC') or die;

class plgSystemeditorTemplate extends JPlugin
{
	public function onAfterRoute() {
		$templatename = $this->params->get('templatename', 'protostar');
	    $app = JFactory::getApplication();
	        if(JRequest::getVar('view') == 'form'){
	            $app->setTemplate($templatename, null);
	        }
	}
}
