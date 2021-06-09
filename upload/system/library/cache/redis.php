<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Cache;
class Redis {
	private $expire;
	private $redis;

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
		$this->redis = new \Redis();
		$this->redis->pconnect(CACHE_HOSTNAME, CACHE_PORT);
		//$this->redis->auth(CACHE_PASSWORD);
	}

	public function get($key) {
		if ($this->redis->exists(CACHE_PREFIX . $key)) {
			$data = $this->redis->get(CACHE_PREFIX . $key);

			return json_decode($data, true);
		}

		return false;
	}

	public function set($key, $value, $expire = 0) {
		$status = $this->redis->set(CACHE_PREFIX . $key, json_encode($value));

		if ($status) {
			$this->redis->setTimeout(CACHE_PREFIX . $key, $this->expire);
		}

		return $status;
	}

	public function delete($key) {
		$this->redis->delete(CACHE_PREFIX . $key);
	}

	// чистка всего кэша
	public function flush($timer = 5) {
		$status = false;

		if (method_exists($this->redis, 'flushDb')) {
			$this->redis->flushDb();
			$status = true;
		}

		return $status;
	}
}
