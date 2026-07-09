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

//https://ospanel.io/forum/viewtopic.php?f=3&t=2191&start=10
class Memcached {
	private $expire;
	private $active = false;
	private $memcached;

	public function __construct($expire = 3600) {
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
		}
		if (!defined('CACHE_USERNAME')) {
			define('CACHE_USERNAME', '');
		}
		if (!defined('CACHE_PASSWORD')) {
			define('CACHE_PASSWORD', '');
		}
		if (!defined('CACHEDUMP_LIMIT')) {
			define('CACHEDUMP_LIMIT', 9999);
		}
		if (!defined('CACHE_HOSTNAME')) {
			define('CACHE_HOSTNAME', 'localhost');
		}
		if (!defined('CACHE_PORT')) {
			define('CACHE_PORT', 11211);
		}
		if (!defined('CACHE_NULL')) {
			define('CACHE_NULL', false);
		}

		$this->expire = $expire;

		$this->active = extension_loaded('memcached') && class_exists('Memcached');

		if ($this->active) {
			$this->memcached = new \Memcached();
			$this->memcached->addServer(CACHE_HOSTNAME, CACHE_PORT);
			//$this->memcached->setSaslAuthData(CACHE_USERNAME, CACHE_PASSWORD) ;
		}
	}

	public function get($key) {
		if ($this->active) {
			return $this->memcached->get(CACHE_PREFIX . $key);
		} else {
			return CACHE_NULL;
		}
	}

	public function set($key, $value, $expire = 0) {
		if ($this->active) {
			if (!$expire) {
				$expire = $this->expire;
			}

			$this->memcached->set(CACHE_PREFIX . $key, $value, $expire);
		}
	}

	public function delete($key) {
		if ($this->active) {
			if ($key == '*') {
				$this->flush(1);
			} else {
				$this->memcached->delete(CACHE_PREFIX . $key);
			}
		}
	}

	public function flush($timer = 5) {
		if ($this->active) {
			return $this->memcached->flush($timer);
		} else {
			return false;
		}
	}

	public function __destruct() {
		if ($this->active && method_exists($this->memcached, 'quit')) {
			$this->memcached->quit();
		}
	}
}