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

class Buslik {
	private $expire;
	private $data = array();
	private $save = array();

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
		/* if (!defined('CACHE_DEBUG')) {
			define('CACHE_DEBUG', false);
		} */

		$this->expire = $expire;
		$this->delete('bus_cache_clears');
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
					$expire = (int)substr(strrchr($file, '.'), 1);

					if ($expire > time()) {
						$size = filesize($file);

						if ($size > 0) {
							$handle = fopen($file, 'r');

							if ($handle != false) {
								flock($handle, LOCK_SH);

								$result = fread($handle, $size);

								flock($handle, LOCK_UN);

								fclose($handle);

								$this->data[$hash]['expire'] = $expire - time();
								$this->data[$hash]['value'] = json_decode($result, true);
								$this->data[$hash]['path'] = $path;
								$this->data[$hash]['key'] = $key;

								return $this->data[$hash]['value'];
							}
						}
					} else {
						if (is_readable($file)) {
							unlink($file);
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

		unset($this->data[$hash], $this->save[$hash]);

		$files = glob(DIR_CACHE . 'buslik/' . $path . '/' . CACHE_PREFIX . '.' . $key . '.*', GLOB_NOSORT|GLOB_BRACE);

		if ($files) {
			if ($key != 'bus_cache_clears') {
				$bus_cache_clears = glob(DIR_CACHE . 'buslik/bus_cache_clears/' . CACHE_PREFIX . '.' . 'bus_cache_clears.*', GLOB_NOSORT|GLOB_BRACE);

				foreach ($bus_cache_clears as $file) {
					$files = array_merge($files, json_decode(file_get_contents($file)));
				}

				$files = array_merge($files, $bus_cache_clears);
			}

			foreach ($files as $k => $file) {
				if (is_readable($file) && unlink($file)) {
					unset($files[$k]);
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

		return empty(glob(DIR_CACHE . 'buslik/*{/*,/*/*,/*/*/*}*', GLOB_NOSORT|GLOB_BRACE));
	}

	public function __destruct() {
		foreach ($this->save as $hash => $result) {
			if (isset($this->data[$hash]['expire']) && $this->data[$hash]['expire'] > 0) {
				continue;
			}

			$result['expire'] = (time() + $result['expire']);
			$result['value'] = json_encode($result['value']);

			$file = DIR_CACHE . 'buslik/' . $result['path'] . '/' . CACHE_PREFIX . '.' . $result['key'] . '.cc' . 1 . '.' . $result['expire'];

			if (!\is_file($file)) {
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

				if (CACHE_COUNT > 1 && !is_file(DIR_CACHE . 'buslik/' . $result['path'] . '/' . CACHE_PREFIX . '.' . $result['key'] . '.cc' . CACHE_COUNT . '.' . $result['expire'])) {
					for ($i = 2; $i < CACHE_COUNT + 1; ++$i) {
						file_put_contents(DIR_CACHE . 'buslik/' . $result['path'] . '/' . CACHE_PREFIX . '.' . $result['key'] . '.cc' . $i . '.' . $result['expire'], $result['value']);
					}
				}
			}
		}
	}
}