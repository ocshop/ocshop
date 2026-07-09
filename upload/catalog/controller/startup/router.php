<?php
// *	@copyright	OPENCART.PRO 2011 - 2022.
// *	@forum		http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerStartupRouter extends Controller {
	public function index() {
		// Route
		if (isset($this->request->get['route']) && $this->request->get['route'] != 'startup/router') {
			$route = $this->request->get['route'];
		} else {
			$route = $this->config->get('action_default');
		}

		// Sanitize the call
		$route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);

		$config_action_not_found = $this->config->get('config_action_not_found');
		if ($config_action_not_found) {
			$config_action_route = $this->request->get['route'];
			if (strpos($config_action_not_found, $config_action_route . "\r\n") !== false && strpos($config_action_not_found, ';' . $config_action_route . "\r\n") === false) {
				$route = $this->config->get('action_error');
			} elseif (strpos($config_action_not_found, $config_action_route . "|") !== false || strpos($config_action_not_found, "#|") !== false) {
				if (strpos($config_action_not_found, $config_action_route . "|") === false) {
					$config_action_route = '#';
				}
				foreach (explode("\r\n", $config_action_not_found) as $result) {
					if ($result[0] != ';' && strpos($result, $config_action_route . '|') !== false) {
						$explode = explode('|', $result);
						if (!empty($explode[2])) {
							$params = array();
							$exceptions = array_flip(explode(',', $explode[2]));
							$params_all = explode('&', parse_url($this->request->server['REQUEST_URI'], PHP_URL_QUERY));
							foreach ($params_all as $result) {
								$key = strstr($result, '=', true);
								if (isset($exceptions[$key])) {
									$params[$key] = 1;
								} elseif (isset($exceptions[$result])) {
									$params[$result] = 1;
								}
							}
							if ($params_all[0] && count($params) != count($params_all)) {
								$route = $this->config->get('action_error');
							}
						} elseif (!empty($explode[1]) && (!isset($explode[2]) && strpos($this->request->server['REQUEST_URI'], $explode[1]) !== false || isset($explode[2]) && ltrim($this->request->server['REQUEST_URI'], '/') == $explode[1])) {
							$route = $this->config->get('action_error');
						}
					}
				}
			}
			$this->config->set('config_action_not_found', false);
		}

		// Trigger the pre events
		$result = $this->event->trigger('controller/' . $route . '/before', array(&$route, &$data));

		if (!is_null($result)) {
			return $result;
		}

		// We dont want to use the loader class as it would make an controller callable.
		$action = new Action($route);

		// Any output needs to be another Action object.
		$output = $action->execute($this->registry); 

		// Trigger the post events
		$result = $this->event->trigger('controller/' . $route . '/after', array(&$route, &$data, &$output));

		if (!is_null($result)) {
			return $result;
		}

		return $output;
	}
}