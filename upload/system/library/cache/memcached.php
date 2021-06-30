<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

//https://ospanel.io/forum/viewtopic.php?f=3&t=2191&start=10
namespace Cache;
class Memcached {
	private $expire;
	private $memcached;

	public function __construct($expire = 3600) {
		if (!defined('CACHEDUMP_LIMIT')) {
			define('CACHEDUMP_LIMIT', 9999);
		}
		if (!defined('CACHE_HOSTNAME')) {
			define('CACHE_HOSTNAME', 'localhost');
		}
		if (!defined('CACHE_PORT')) {
			define('CACHE_PORT', 11211);
		}
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
		}
		$this->expire = $expire;
		$this->memcached = new \Memcached();
		$this->memcached->addServer(CACHE_HOSTNAME, CACHE_PORT);
		//$this->memcached->setSaslAuthData(CACHE_USERNAME, CACHE_PASSWORD) ;
	}

	public function get($key) {
		return $this->memcached->get(CACHE_PREFIX . $key);
	}

	public function set($key, $value, $expire = 0) {
		return $this->memcached->set(CACHE_PREFIX . $key, $value, $this->expire);
	}

	public function delete($key) {
		$this->memcached->delete(CACHE_PREFIX . $key);
	}

	// чистка всего кэша
	public function flush($timer = 5) {
		$status = false;

		if (method_exists($this->memcached, 'flush')) {
			$this->memcached->flush($timer);
			$status = true;
		}
		if (method_exists($this->memcached, 'quit')) {
			$this->memcached->quit();
		}

		return $status;
	}
}