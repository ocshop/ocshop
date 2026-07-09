<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2024; BuslikDrev - Усе правы захаваны.

//namespace Opencart\Catalog\Controller\Extension\BusCache\Event;

// забараняем прамы доступ
if (!defined('VERSION')) {
	header('Refresh: 1; URL=/');
	exit('ЗАПРЫШЧАЮ!');
}

if (version_compare(VERSION, '4.0.0', '>=')) {
	class Controller extends \Opencart\System\Engine\Controller {}
} else {
	class ControllerEventBusCache extends BusCache {}
}

class BusCache extends Controller {
	public function image(&$route = '', &$args = array(), &$output = '') {
		if (isset($args[2]) && $this->registry->has('bus_cache')) {
			$bus_cache_webp = $this->registry->get('bus_cache')->image(array('filename' => $args[0], 'width' => $args[1], 'height' => $args[2], 'output' => $output));
			if ($bus_cache_webp) {
				if ($this->request->server['HTTPS'] && defined('HTTPS_SERVER')) {
					$output = HTTPS_SERVER  .  'image/' . $bus_cache_webp;
				} else {
					$output = HTTP_SERVER  .  'image/' . $bus_cache_webp;
				}
			}
		}
	}

	public function start(&$route = '', &$args = array(), &$output = '') {
		if (!$this->registry->has('bus_cache')) {
			if ((!empty($this->request->get['route']) && str_replace(array('|', '.'), '/', $this->request->get['route']) == $route || $this->config->get('action_default') == $route) && !defined('DIR_CATALOG') && substr(php_sapi_name(), 0, 3) != 'cli') {
				if (version_compare(VERSION, '4.0.0.0', '>=')) {
					$this->registry->set('bus_cache', new \Opencart\Extension\Bus_Cache\System\library\Bus_Cache\Bus_Cache($this->registry, microtime(true)));
				}  else {
					$this->registry->set('bus_cache', new \Bus_Cache\Bus_Cache($this->registry, microtime(true)));
				}
			}
		}
	}

	public function output(&$route = '', &$args = array(), &$output = '') {
		if (!defined('DIR_CATALOG') && $this->registry->has('bus_cache') && (!empty($this->request->get['route']) && str_replace(array('|', '.'), '/', $this->request->get['route']) == $route || $this->config->get('action_default') == $route)) {
			if (!$output) {
				$output = $this->response->getOutput();
			}

			if ($output) {
				$setting = array();
				if ($this->registry->get('response') && method_exists($this->registry->get('response'), 'busGetHeaders')) {
					$setting['headers'] = $this->registry->get('response')->busGetHeaders();
				} elseif ($this->registry->get('response') && method_exists($this->registry->get('response'), 'getHeaders')) {
					$setting['headers'] = $this->registry->get('response')->getHeaders();
				}
				if ($this->registry->get('document') && method_exists($this->registry->get('document'), 'getStyles')) {
					$setting['styles'] = $this->registry->get('document')->getStyles();
				}
				if ($this->registry->get('document') && method_exists($this->registry->get('document'), 'getScripts')) {
					$setting['scripts'] = $this->registry->get('document')->getScripts('header');
					$setting['scripts_footer'] = $this->registry->get('document')->getScripts('footer');
				}
				$this->response->setOutput($this->registry->get('bus_cache')->output($output, $setting));
			}
		}
	}

	public function controller(&$route = '', &$args = array()) {
		if (!empty($this->request->get['route']) && $this->request->get['route'] != $route || $this->config->get('action_default') != $route) {
			if ($this->registry->has('bus_cache') && !defined('DIR_CATALOG')) {
				if (version_compare(VERSION, '4.0.0.0', '>=')) {
					$this->registry->get('config')->set('bus_cache_event_controller', $this->registry->get('bus_cache')->controller(new \Opencart\System\Engine\Action($route), $route, $args));

					if (version_compare(VERSION, '4.0.2.0', '>=')) {
						return new \Opencart\System\Engine\Action('extension/bus_cache/event/bus_cache.controllerFree');
					} else {
						return new \Opencart\System\Engine\Action('extension/bus_cache/event/bus_cache|controllerFree');
					}
				} else {
					$this->registry->get('config')->set('bus_cache_event_controller', $this->registry->get('bus_cache')->controller(new \Action($route), $route, $args));

					return new \Action('event/bus_cache|controllerFree');
				}
			}
		}
	}

	public function controllerFree($args = array()) {
		return $this->registry->get('config')->get('bus_cache_event_controller');
	}

	public function model(&$route = '', &$args = array(), &$output = '') {
		if ($this->registry->get('bus_cache') && !defined('DIR_CATALOG')) {
			if (version_compare(VERSION, '4.0.0.0', '>=')) {
				$key = substr($route, 0, strrpos($route, '/'));

				$class = '\Opencart\\' . $this->config->get('application') . '\Model\\' . str_replace(['_', '/'], ['', '\\'], ucwords($key, '_/'));

				return $this->registry->get('bus_cache')->model($class, $route, $args);
			}
		}
	}

	public function view(&$route = '', &$args = array(), &$output = '') {
		if ($this->registry->get('bus_cache') && !defined('DIR_CATALOG')) {
			if (version_compare(VERSION, '4.0.0.0', '>=')) {
				return $this->registry->get('bus_cache')->view($route, $args, $output);
			}
		}
	}

	public function moduleId(&$route = '', &$args = array(), &$output = '') {
		if ($route == 'setting/module/getModule' && $output) {
			if (isset($args[0])) {
				$output['module_id'] = (int)$args[0];
			} else {
				$output['module_id'] = 0;
			}
		}
	}
}