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

class xCache {
	private $expire;
	private $active = false;

	public function __construct($expire = 3600) {
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache_');
		}
		if (!defined('CACHE_USERNAME')) {
			define('CACHE_USERNAME', 'user');
		}
		if (!defined('CACHE_PASSWORD')) {
			define('CACHE_PASSWORD', 'password');
		}
		if (!defined('CACHE_TYPE_VAR')) {
			define('CACHE_TYPE_VAR', 1);
		}
		if (!defined('CACHE_NULL')) {
			define('CACHE_NULL', false);
		}

		$this->expire = $expire;

		$this->active = PHP_SAPI !== 'cli' && PHP_SAPI !== 'phpdbg' && extension_loaded('xcache') && function_exists('xcache_count');
	}

	public function get($key) {
		if ($this->active) {
			return xcache_get(CACHE_PREFIX . $key);
		} else {
			return CACHE_NULL;
		}
	}

	public function set($key, $value, $expire = 0) {
		if ($this->active) {
			if (!$expire) {
				$expire = $this->expire;
			}

			xcache_set(CACHE_PREFIX . $key, $value, $expire);
		}
	}

	public function delete($key) {
		if ($this->active) {
			if ($key == '*') {
				$this->flush();
			} else {
				xcache_unset(CACHE_PREFIX . $key);
			}
		}
	}

	public function flush($timer = 5) {
		if ($this->active) {
			$this->_auth();

			$max = xcache_count(CACHE_TYPE_VAR);

			for ($i = 0; $i < $max; $i++) {
				xcache_clear_cache(CACHE_TYPE_VAR, $i);
			}

			$max = xcache_count(CACHE_TYPE_VAR);

			$this->_auth(true);

			if ($max == 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

    protected function _auth($reverse = false) {
        static $backup = array();
        $keys = ['PHP_AUTH_USER' => CACHE_USERNAME, 'PHP_AUTH_PW' => CACHE_PASSWORD];

        foreach ($keys as $key => $value) {
            if ($reverse) {
                if (isset($backup[$key])) {
                    $_SERVER[$key] = $backup[$key];

                    unset($backup[$key]);
                } else {
                    unset($_SERVER[$key]);
                }
            } else {
                $value = env($key);

                if (!empty($value)) {
                    $backup[$key] = $value;
                }

                if (!empty($this->_config[$value])) {
                    $_SERVER[$key] = $this->_config[$value];
                } elseif (!empty($this->_config[$key])) {
                    $_SERVER[$key] = $this->_config[$key];
                } else {
                    $_SERVER[$key] = $value;
                }
            }
        }
    }
}