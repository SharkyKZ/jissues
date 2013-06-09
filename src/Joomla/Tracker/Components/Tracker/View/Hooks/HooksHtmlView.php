<?php
/**
 * @copyright  Copyright (C) 2013 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Tracker\Components\Tracker\View\Hooks;

use Joomla\Factory;
use Joomla\Tracker\View\AbstractTrackerHtmlView;

/**
 * The issues item view
 *
 * @since  1.0
 */
class HooksHtmlView extends AbstractTrackerHtmlView
{
	/**
	 * Method to render the view.
	 *
	 * @return  string  The rendered view.
	 *
	 * @since   1.0
	 * @throws  \RuntimeException
	 */
	public function render()
	{
		$this->renderer->set('project', Factory::$application->getProject());

		return parent::render();
	}
}