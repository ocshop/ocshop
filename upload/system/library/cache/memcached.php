<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Cache;
class Memcached {
	private $expire;
	private $memcached;

	const CACHEDUMP_LIMIT = 9999;

	public function __construct($expire = 3600) {
		$this->expire = $expire;
		$this->memcached = new \Memcached();
		$this->memcached->addServer(CACHE_HOSTNAME, CACHE_PORT);
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
}