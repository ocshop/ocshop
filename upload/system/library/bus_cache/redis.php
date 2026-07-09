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

//https://phpredis.github.io/phpredis/Redis.html
class Redis {
	private $expire;
	private $active = false;
	private $redis;

	public function __construct($expire = 3600) {
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
		}
		if (!defined('CACHE_USER')) {
			define('CACHE_USER', 'phpredis');
		}
		if (!defined('CACHE_PASSWORD')) {
			define('CACHE_PASSWORD', 'phpredis');
		}
		if (!defined('CACHEDUMP_LIMIT')) {
			define('CACHEDUMP_LIMIT', 9999);
		}
		if (!defined('CACHE_HOSTNAME')) {
			define('CACHE_HOSTNAME', '127.0.0.1');
		}
		if (!defined('CACHE_PORT')) {
			define('CACHE_PORT', 6379);
		}
		if (!defined('CACHE_NULL')) {
			define('CACHE_NULL', false);
		}

		$this->expire = $expire;

		$this->active = extension_loaded('redis') && class_exists('Redis');

		if ($this->active) {
			$this->redis = new \Redis();
			try {
				if ($this->redis->pconnect(CACHE_HOSTNAME, CACHE_PORT)) {
					$this->active = $this->redis->dbSize() !== null;
				}
				//var_dump($this->redis->dbSize());
				//var_dump(get_class_methods($this->redis));
			} catch (\Exception $e) {
				$this->active = false;

				if ($_SERVER['REQUEST_METHOD'] != 'POST') {
					echo 'Message Redis: ' . $e->getMessage() . '<br>';
				}
			} catch (\RedisException $e) {
				$this->active = false;

				if ($_SERVER['REQUEST_METHOD'] != 'POST') {
					echo 'Message Redis: ' . $e->getMessage() . '<br>';
				}
			} finally {
				if (!$this->active || !$this->redis->isConnected()) {
					$this->active = false;
				}
			}
		}
	}

	public function get($key) {
		if ($this->active && $this->redis->exists(CACHE_PREFIX . $key)) {
			return json_decode($this->redis->get(CACHE_PREFIX . $key), true);
		} else {
			return CACHE_NULL;
		}
	}

	public function set($key, $value, $expire = 0) {
		if ($this->active && $this->redis->set(CACHE_PREFIX . $key, json_encode($value))) {
			if (!$expire) {
				$expire = $this->expire;
			}

			$this->redis->expire(CACHE_PREFIX . $key, $expire);
		}
	}

	public function delete($key) {
		if ($this->active) {
			if ($key == '*') {
				$this->flush();
			} else {
				$this->redis->delete(CACHE_PREFIX . $key);
			}
		}
	}

	public function flush($timer = 5) {
		if ($this->active && method_exists($this->redis, 'flushDb')) {
			if (method_exists($this->redis, 'flushAll')) {
				$this->redis->flushAll(true);
			}

			return $this->redis->flushDb();
		} else {
			return false;
		}
	}
}