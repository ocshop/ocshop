<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Cache;
class Redis {
	private $expire;
	private $cache;

	public function __construct($expire = 3600) {
		if (!defined('CACHEDUMP_LIMIT')) {
			define('CACHEDUMP_LIMIT', 9999);
		}
		if (!defined('CACHE_HOSTNAME')) {
			define('CACHE_HOSTNAME', 'localhost');
		}
		if (!defined('CACHE_PORT')) {
			define('CACHE_PORT', 6379);
		}
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
		}
		$this->expire = $expire;
		$this->cache = new \Redis();
		$this->cache->pconnect(CACHE_HOSTNAME, CACHE_PORT);
		//$this->cache->auth(CACHE_PASSWORD);
	}

	public function get($key) {
		if ($this->cache->exists(CACHE_PREFIX . $key)) {
			$data = $this->cache->get(CACHE_PREFIX . $key);

			return json_decode($data, true);
		}

		return false;
	}

	public function set($key, $value, $expire = 0) {
		$status = $this->cache->set(CACHE_PREFIX . $key, json_encode($value));

		if ($status) {
			$this->cache->setTimeout(CACHE_PREFIX . $key, $this->expire);
		}

		return $status;
	}

	public function delete($key) {
		$this->cache->delete(CACHE_PREFIX . $key);
	}

	// чистка всего кэша
	public function flush($timer = 5) {
		$status = false;

		if (method_exists($this->redis, 'flushDb')) {
			$redis->flushDb();
			$status = true;
		}

		return $status;
	}
}