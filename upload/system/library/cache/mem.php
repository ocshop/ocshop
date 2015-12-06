<?php
// *	@copyright	OPENCART.PRO 2011 - 2015.
// *	@forum	http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Cache;
class Mem {
	private $expire;
	private $cache;

	public function __construct($expire) {
		$this->expire = $expire;

		$this->cache = new \Memcache();
		$this->cache->pconnect(CACHE_HOSTNAME, CACHE_PORT);
	}

	public function get($key) {
		return $this->cache->get(CACHE_PREFIX . $key);
	}

	public function set($key,$value) {
		return $this->cache->set(CACHE_PREFIX . $key, $value, MEMCACHE_COMPRESSED, $this->expire);
	}

	public function delete($key) {
		$this->cache->delete(CACHE_PREFIX . $key);
	}
}