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
class Mem {
	private $expire;
	private $active = false;
	private $memcache;

	public function __construct($expire = 3600) {
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
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

		$this->active = extension_loaded('memcache') && class_exists('Memcache') && function_exists('memcache_connect');

		if ($this->active) {
			$this->memcache = new \Memcache();
			$this->memcache->pconnect(CACHE_HOSTNAME, CACHE_PORT);
		}
	}

	public function get($key) {
		if ($this->active) {
			return $this->memcache->get(CACHE_PREFIX . $key);
		} else {
			return CACHE_NULL;
		}
	}

	public function set($key, $value, $expire = 0) {
		if ($this->active) {
			if (!$expire) {
				$expire = $this->expire;
			}

			$this->memcache->set(CACHE_PREFIX . $key, $value, MEMCACHE_COMPRESSED, $expire);
		}
	}

	public function delete($key) {
		if ($this->active) {
			if ($key == '*') {
				$this->flush();
			} else {
				$this->memcache->delete(CACHE_PREFIX . $key);
			}
		}
	}

	public function flush($timer = 5) {
		if ($this->active) {
			return $this->memcache->flush();
		} else {
			return false;
		}
	}

	public function __destruct() {
		if ($this->active) {
			$this->memcache->close();
		}
	}
}