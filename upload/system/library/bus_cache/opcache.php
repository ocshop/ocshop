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

class Opcache {
	private $expire;
	private $data = array();
	private $save = array();
	private $active = false;

	public function __construct($expire = 3600) {
		if (!defined('CACHE_PREFIX')) {
			define('CACHE_PREFIX', 'cache');
		}
		if (!defined('CACHE_COUNT')) {
			define('CACHE_COUNT', 1);
		}
		if (!defined('CACHE_NULL')) {
			define('CACHE_NULL', false);
		}
		if (!defined('CACHE_FOLDER')) {
			define('CACHE_FOLDER', serialize(array()));
		}
		if (!defined('CACHE_NAME')) {
			define('CACHE_NAME', 'default');
		}

		$this->expire = $expire;
		$this->delete('bus_cache_clears');
		$this->active = ini_get('opcache.enable') && function_exists('opcache_is_script_cached');
		if ($this->active) {
			// проверка актуальности кэша
			ini_set('opcache.validate_timestamps', false);
			// промежуток времени для проверки актуальности кэша
			ini_set('opcache.revalidate_freq', $expire);
			// искать по папкам файл кэша?
			ini_set('opcache.revalidate_path', false);
			// включить сверку контрольных сумм каждый N запросов
			ini_set('opcache.consistency_checks', 0);
			// запретить кэшировать, если кэш существует меньше указанных секунд
			ini_set('opcache.file_update_protection', 0);
			//opcache_reset();
			//opcache_invalidate(__FILE__, true);
		}
	}

	public function get($key) {
		$hash = md5($key);

		if ($key == CACHE_NAME) {
			$path = substr($key, 0, strrpos($key, '/'));
			$key = substr(strrchr($key, '/'), 1);
		} else {
			$path = substr($key, 0, strpos($key, '.'));

			if (!in_array($path, unserialize(CACHE_FOLDER))) {
				$path = 'opencart/' . ($path ? $path : 'other');
			}

			$path = $path . '/' . substr($hash, 0, 2);

			$key = $hash;
		}

		if (isset($this->data[$hash])) {
			return $this->data[$hash]['value'];
		}

		$files = glob(DIR_CACHE . 'buslik/' . $path . '/' . CACHE_PREFIX . '.' . $key . '.cc*', GLOB_NOSORT|GLOB_BRACE);

		if ($files) {
			foreach ($files as $file) {
				if (is_readable($file)) {
					$expire = filemtime($file);
					$t = time();

					if ($expire > $t) {
						$this->data[$key]['expire'] = ($expire - $t);
						$this->data[$hash]['path'] = $path;
						$this->data[$hash]['key'] = $key;

						require_once($file);

						if (!empty($bus_cache) && $bus_cache = base64_decode($bus_cache)) {
							$bus_cache = unserialize($bus_cache);

							$this->data[$key]['value'] = $bus_cache;

							return $this->data[$key]['value'];
						} else {
							$this->data[$key]['value'] = false;
						}

						unset($bus_cache);
					} else {
						if (is_readable($file) && unlink($file) && $this->active) {
							opcache_invalidate($file, true);
						}
					}
				}
			}
		}

		return CACHE_NULL;
	}

	public function set($key, $value, $expire = 0) {
		$hash = md5($key);

		if ($key == CACHE_NAME) {
			$path = substr($key, 0, strrpos($key, '/'));
			$key = substr(strrchr($key, '/'), 1);
		} else {
			$path = substr($key, 0, strpos($key, '.'));

			if (!in_array($path, unserialize(CACHE_FOLDER))) {
				$path = 'opencart/' . ($path ? $path : 'other');
			}

			$path = $path . '/' . substr($hash, 0, 2);

			$key = $hash;
		}

		if (!isset($this->save[$hash])) {
			if ($expire <= 0) {
				$this->save[$hash]['expire'] = $this->expire;
			} else {
				$this->save[$hash]['expire'] = $expire;
			}

			$this->data[$hash]['value'] = $value;
			$this->data[$hash]['path'] = $path;
			$this->data[$hash]['key'] = $key;
			$this->save[$hash]['value'] = $value;
			$this->save[$hash]['path'] = $path;
			$this->save[$hash]['key'] = $key;
		}
	}

	public function delete($key) {
		$hash = md5($key);

		if ($key == CACHE_NAME) {
			$path = substr($key, 0, strrpos($key, '/'));
			$key = substr(strrchr($key, '/'), 1);
		} elseif ($key == '*') {
			$path = '*{/*,/*/*,/*/*/*}';
			$key = '*';
		} else {
			$path = substr($key, 0, strpos($key, '.'));

			if (!in_array($path, unserialize(CACHE_FOLDER))) {
				$path = 'opencart/' . ($path ? $path : 'other');
			}

			$path = $path . '/' . substr($hash, 0, 2);

			$key = $hash;
		}

		unset($this->data[$key], $this->save[$key]);

		$files = glob(DIR_CACHE . 'buslik/' . $path . '/' . CACHE_PREFIX . '.' . $key . '.*.cc*', GLOB_NOSORT|GLOB_BRACE);

		if ($files) {
			if ($key != 'bus_cache_clears') {
				$bus_cache_clears = glob(DIR_CACHE . 'buslik/bus_cache_clears/' . CACHE_PREFIX . '.' . 'bus_cache_clears.*', GLOB_NOSORT|GLOB_BRACE);

				foreach ($bus_cache_clears as $file) {
					require_once($file);

					if (!empty($bus_cache) && $bus_cache = base64_decode($bus_cache)) {
						$bus_cache = unserialize($bus_cache);
						$files = array_merge($files, $bus_cache);
					}

					unset($bus_cache);
				}

				$files = array_merge($files, $bus_cache_clears);
			}

			foreach ($files as $key => $file) {
				if (is_readable($file) && unlink($file)) {
					unset($files[$key]);

					if ($this->active) {
						opcache_invalidate($file, true);
					}
				}
			}

			if ($files) {
				$this->save['bus_cache_clears.' . $hash]['expire'] = $this->expire;
				$this->save['bus_cache_clears.' . $hash]['value'] = $files;
				$this->save['bus_cache_clears.' . $hash]['path'] = 'buslik/bus_cache_clears';
				$this->save['bus_cache_clears.' . $hash]['key'] = 'bus_cache_clears.' . $hash;
			}
		}
	}

	public function flush($timer = 5) {
		$this->delete('*');

		if ($this->active) {
			opcache_reset();
		}

		return empty(glob(DIR_CACHE . 'buslik/*{/*,/*/*,/*/*/*}*', GLOB_NOSORT|GLOB_BRACE));
	}

	public function __destruct() {
		foreach ($this->save as $hash => $result) {
			if (isset($this->data[$hash]['expire']) && $this->data[$hash]['expire'] > 0) {
				continue;
			}

			$result['expire'] = (time() + $result['expire']);
			$result['value'] = serialize($result['value']);
			$result['value'] = '<?php $bus_cache = ' . ($result['value'] && is_string($result['value']) ? '"' . base64_encode($result['value']) . '"' : 'false') . '; ?>';

			$file = DIR_CACHE . 'buslik/' . $result['path'] . '/' . CACHE_PREFIX . '.' . $result['key'] . '.cc' . 1 . '.php';

			//var_dump(array(is_file($file), opcache_is_script_cached($file), $file, opcache_get_configuration()));

			if (!is_file($file)) {
				if (!is_dir(DIR_CACHE . 'buslik/' . $result['path'])) {
					mkdir(DIR_CACHE . 'buslik/' . $result['path'], 0755, true);
				}

				$handle = fopen($file, 'w');
			} else {
				$handle = false;
			}

			if ($handle != false && \is_writable($file)) {
				flock($handle, LOCK_EX);

				fwrite($handle, $result['value']);

				fflush($handle);

				flock($handle, LOCK_UN);

				fclose($handle);

				touch($file, $result['expire']);

				/* if ($this->active && ini_get('opcache.enable_cli')) {
					opcache_compile_file($file);
				} */

				if (CACHE_COUNT > 1 && !is_file(DIR_CACHE . 'buslik/' . $result['path'] . '/' . CACHE_PREFIX . '.' . $result['key'] . '.cc' . CACHE_COUNT . '.' . '.php')) {
					for ($i = 2; $i < CACHE_COUNT + 1; ++$i) {
						file_put_contents(DIR_CACHE . 'buslik/' . $result['path'] . '/' . CACHE_PREFIX . '.' . $result['key'] . '.cc' . $i . '.' . '.php', $result['value']);

						touch(DIR_CACHE . 'buslik/' . $result['path'] . '/' . CACHE_PREFIX . '.' . $result['key'] . '.cc' . $i . '.' . '.php', time(), $result['expire']);

						/* if ($this->active && ini_get('opcache.enable_cli')) {
							opcache_compile_file(DIR_CACHE . 'buslik/' . $result['path'] . '/' . CACHE_PREFIX . '.' . $result['key'] . '.cc' . $i . '.' . '.php');
						} */
					}
				}
			}
		}
	}
}