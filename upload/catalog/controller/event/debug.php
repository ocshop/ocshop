<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerEventDebug extends Controller {
	public function before(&$route, &$data) {
		$user = new \Cart\User($this->registry);
		if ($route && $user->isLogged()) {
			$this->session->data['debug'][$route] = microtime(true);
		}
	}

	public function after(&$route, &$data, &$output) {
		$user = new \Cart\User($this->registry);
		if ($route && $user->isLogged()) {
			if (isset($this->session->data['debug'][$route])) {
				$data = array(
					'route' => $route,
					'time'  => (round(microtime(true) - $this->session->data['debug'][$route], 3)*1000) . ' mc'
				);

				$this->log->write($data);
			}
		}
	}
}
