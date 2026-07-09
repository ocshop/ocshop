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

//https://www.php.net/manual/ru/book.wincache.php
//https://github.com/cakephp/cakephp/blob/3.2.0/src/Cache/Engine/WincacheEngine.php
class winCache {
	private $expire;
	private $active = false;

	public function __construct($expire = 3600) {
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
		}
		if (!defined('CACHE_NULL')) {
			define('CACHE_NULL', false);
		}

		$this->expire = $expire;

		$this->active = extension_loaded('wincache') && function_exists('wincache_ucache_info');
		if ($this->active) {
			// Включает/отключает файловое кеширование.
			ini_set('wincache.fcenabled', true);
		}
	}

	public function get($key) {
		if ($this->active) {
			return wincache_ucache_get(CACHE_PREFIX . $key);
		} else {
			return CACHE_NULL;
		}
	}

	public function set($key, $value, $expire = 0) {
		if ($this->active) {
			if (!$expire) {
				$expire = $this->expire;
			}

			wincache_ucache_add(CACHE_PREFIX . $key, $value, $expire);
		}
	}

	public function delete($key) {
		if ($this->active) {
			if ($key == '*') {
				$this->flush();
			} else {
				wincache_ucache_delete(CACHE_PREFIX . $key);
			}
		}
	}

	public function flush($timer = 5) {
		if ($this->active && function_exists('wincache_ucache_clear')) {
			return wincache_ucache_clear();
		} else {
			return false;
		}
	}
}