<?php
/**
 * @package 	Editor Template
 * @version 	1.0.0
 * @author 	webchun
 * @copyright 	webchun
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
**/

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

class plgSystemeditorTemplate extends CMSPlugin
{
	/**
	 * Application object.
	 */
	protected $app;

	public function onAfterRoute()
	{
		if ($this->app->isClient('administrator'))
		{
			return;
		}

		$template = $this->params->get('templatename', 'protostar');
		$view     = $this->app->input->get('view');
		$controller     = $this->app->input->get('controller');
		
		if (($view === 'form')||($controller=== 'config.display.modules') )
		{
			$this->app->setTemplate($template, null);
	        }
	}
}
