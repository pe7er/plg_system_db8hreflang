<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  db8hreflang
 *
 * @author     Peter Martin
 * @copyright  Copyright 2016-2017 Peter Martin. All rights reserved.
 * @license    GNU Public License version 3 or later
 * @link       https://db8.eu
 */

defined('_JEXEC') or die;

/**
 * db8 hreflang System Plugin
 *
 * @since  3.6
 */
class PlgSystemDb8hreflang extends JPlugin
{
	/**
	 * Application object.
	 *
	 * @var    JApplicationCms
	 * @since  3.8.0
	 */
	protected $app;

	/**
	 * Replace Language Code for another after rendering the Page
	 *
	 * @return void
	 */
	public function onAfterRender()
	{
		if ($this->app->isSite())
		{
			$body = $this->app->getBody();

			$findCountry = substr($this->params->get("find_language"), 0, 2);
			$findRegion = substr($this->params->get("find_language"), -2, 2);
			$replaceCountry = substr($this->params->get("replace_language"), 0, 2);
			$replaceRegion = substr($this->params->get("replace_language"), -2, 2);

			$body = str_replace(
				'lang="' . strtolower($findCountry) . '-' . strtolower($findRegion) . '"',
				'lang="' . strtolower($replaceCountry) . '-' . strtolower($replaceRegion) . '"',
				$body
			);

			$body = str_replace(
				'hreflang="' . strtolower($findCountry) . '-' . strtoupper($findRegion) . '"',
				'hreflang="' . strtolower($replaceCountry) . '-' . strtoupper($replaceRegion) . '"',
				$body
			);

			$this->app->setBody($body);
		}
	}
}
