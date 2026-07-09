<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2024; BuslikDrev - Усе правы захаваны.

namespace Bus_Cache;
//namespace Opencart\Extension\Bus_Cache\System\library\Bus_Cache;

// забараняем прамы доступ
if (!defined('VERSION')) {
	header('Refresh: 1; URL=/');
	exit('ЗАПРЫШЧАЮ!');
}

class APC {
	private $expire;
	private $active = false;

	public function __construct($expire = 3600) {
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
		}
		if (!defined('CACHE_USERNAME')) {
			define('CACHE_USERNAME', 'user');
		}
		if (!defined('CACHE_NULL')) {
			define('CACHE_NULL', false);
		}

		$this->expire = $expire;

		$this->active = ini_get('apc.enabled') && function_exists('apc_cache_info');
	}

	public function get($key) {
		if ($this->active) {
			return apc_fetch(CACHE_PREFIX . $key);
		} else {
			return CACHE_NULL;
		}
	}

	public function set($key, $value, $expire = 0) {
		if ($this->active) {
			if (!$expire) {
				$expire = $this->expire;
			}

			apc_store(CACHE_PREFIX . $key, $value, $expire);
		}
	}

	public function delete($key) {
		if ($this->active) {
			$cache_info = apc_cache_info(CACHE_USERNAME);

			$cache_list = $cache_info['cache_list'];

			if ($key == '*') {
				foreach ($cache_list as $entry) {
					apc_delete($entry['info']);
				}
			} else {
				foreach ($cache_list as $entry) {
					if (strpos($entry['info'], CACHE_PREFIX . $key) !== false) {
						apc_delete($entry['info']);
						break;
					}
				}
			}
		}
	}

	public function flush($timer = 5) {
		if ($this->active) {
			if (function_exists('apc_clear_cache')) {
				return apc_clear_cache('user');
			} else {
				$this->delete('*');

				return true;
			}
		} else {
			return false;
		}
	}
}