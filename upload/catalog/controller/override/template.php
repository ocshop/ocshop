<?php
// *	@copyright	OPENCART.PRO 2011 - 2015.
// *	@forum	http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerOverrideTemplate extends Controller {
	public function index(&$view, &$data) {
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/' . $view . '.tpl')) {
			$view = $this->config->get('config_template') . '/template/' . $view;
		} else {
			$view = 'default/template/' . $view;
		}
	}
}
