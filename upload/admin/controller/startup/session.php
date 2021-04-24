<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerStartupSession extends Controller {
	public function index() {
		if ($this->config->get('config_session_engine')) {
			$this->config->set('session_engine', $this->config->get('config_session_engine'));
		}
		if ($this->config->get('config_session_name')) {
			$this->config->set('session_name', $this->config->get('config_session_name'));
		}
		$session = new Session($this->config->get('session_engine'), $this->registry);
		$this->registry->set('session', $session);

		$this->session->start($this->config->get('session_name'));
	}
}