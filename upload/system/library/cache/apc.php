<?php
// *	@copyright	OPENCART.PRO 2011 - 2015.
// *	@forum	http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Cache;
class APC {
	private $expire;
	private $cache;

	public function __construct($expire) {
		$this->expire = $expire;
	}

	public function get($key) {
		return apc_fetch(CACHE_PREFIX . $key);
	}

	public function set($key, $value) {
		return apc_store(CACHE_PREFIX . $key, $value, $this->expire);
	}

	public function delete($key) {
		apc_delete(CACHE_PREFIX . $key);
	}
}