<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Cache;
class APCu {
	private $expire;
	private $active = false;

	public function __construct($expire = 3600) {
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
		}
		$this->expire = $expire;
		$this->active = ini_get('apc.enabled') && function_exists('apcu_cache_info');
	}

	public function get($key) {
		return $this->active ? apcu_fetch(CACHE_PREFIX . $key) : false;
	}

	public function set($key, $value, $expire = 0) {
		return $this->active ? apcu_store(CACHE_PREFIX . $key, $value, $this->expire) : false;
	}

	public function delete($key) {
		if (!$this->active) {
			return false;
		}

		$cache_info = apcu_cache_info('user');
		$cache_list = $cache_info['cache_list'];
		foreach ($cache_list as $entry) {
			if (strpos($entry['info'], CACHE_PREFIX . $key) === 0) {
				apcu_delete($entry['info']);
			}
		}
	}

	// чистка всего кэша
	public function flush($timer = 5) {
		$status = false;

		if (function_exists('apcu_clear_cache')) {
			apcu_clear_cache();
			$status = true;
		}

		return $status;
	}
}