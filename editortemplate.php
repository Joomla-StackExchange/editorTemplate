<?php
/**
 * @package 	Editor Template
 * @version 	1.0.0
 * @author 	webchun
 * @copyright 	webchun
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
**/

defined('_JEXEC') or die;

class plgSystemeditorTemplate extends JPlugin
{
	public function onAfterRoute()
	{
		$template = $this->params->get('templatename', 'protostar');
	    	$app      = JFactory::getApplication();
		$view     = $app->input->get('view');

	        if ($view == 'form')
		{
			$app->setTemplate($template, null);
	        }
	}
}
