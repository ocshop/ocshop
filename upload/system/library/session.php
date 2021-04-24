<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class Session {
	protected $adaptor;
	protected $session_id = '';
	private $engine = 'native';
	public $data = array();

	public function __construct($engine = 'native', $registry = '') {
		$this->engine = $engine;
		$this->config = $registry->get('config');
		$this->request = $registry->get('request');
		$class = 'Session\\' . $engine;

		if (class_exists($class) && $registry) {
			if ($this->config->get('config_session_lifetime') > 0) {
				$this->config->set('session_lifetime', (int)$this->config->get('config_session_lifetime'));
			}
			$this->config->set('session_lifetime', 0);
			ini_set('session.cookie_lifetime', $this->config->get('session_lifetime'));
			ini_set('session.cookie_path', $this->config->get('session_path'));
			ini_set('session.cookie_domain', $this->config->get('session_domain'));
			ini_set('session.cookie_secure', $this->config->get('session_secure'));
			ini_set('session.cookie_httponly', $this->config->get('session_httponly'));
			ini_set('session.cookie_samesite', $this->config->get('session_samesite'));
			//ini_set('session.save_path', '/tmp');
			//ini_set('session.auto_start', 'On');
			//ini_set('session.use_strict_mode', false);

			$this->adaptor = new $class($registry);

			if ($this->adaptor) {
				if ($engine == 'native') {
					session_set_save_handler($this->adaptor);
				}

				register_shutdown_function([&$this, 'close']);
				register_shutdown_function([&$this, 'gc']);
			}

			//if ($this->adaptor && !session_id($this->request->cookie[$this->config->get('session_name')])) {
			if ($this->adaptor && !session_id()) {
				ini_set('session.use_only_cookies', true);
				ini_set('session.use_cookies', true);
				ini_set('session.use_trans_sid', false);

				if (isset($this->request->cookie[session_name()]) && !preg_match('/^[a-zA-Z0-9,\-]{22,52}$/', $this->request->cookie[session_name()])) {
					throw new \Exception('Error: Invalid session ID!');
				}

				if ($engine == 'native') {
					//https://overcoder.net/q/246853/php-%D0%BA%D0%B0%D0%BA-%D1%8F-%D0%BC%D0%BE%D0%B3%D1%83-%D1%81%D0%BE%D0%B7%D0%B4%D0%B0%D1%82%D1%8C-%D0%BD%D0%B5%D1%81%D0%BA%D0%BE%D0%BB%D1%8C%D0%BA%D0%BE-%D1%81%D0%B5%D1%81%D1%81%D0%B8%D0%B9
					//https://www.php.net/manual/ru/function.session-id.php
					/* if (isset($this->request->cookie[$this->config->get('session_name')])) {
						session_id($this->request->cookie[$this->config->get('session_name')]);
					} */

					if (version_compare(phpversion(), '7.3.0', '>')) {
						session_set_cookie_params(array(
							'lifetime' => $this->config->get('session_lifetime'),
							'path' => $this->config->get('session_path'),
							'domain' => $this->config->get('session_domain'),
							'secure' => $this->config->get('session_secure'),
							'httponly' => $this->config->get('session_httponly'),
							'samesite' => $this->config->get('session_samesite')
						));
					} else {
						session_set_cookie_params(
							$this->config->get('session_lifetime'),
							$this->config->get('session_path'),
							$this->config->get('session_domain'),
							$this->config->get('session_secure'),
							$this->config->get('session_httponly')
						);
					}

					session_start();
				} else {
					$this->set($this->config->get('session_name'), $this->session_id, array(
						'lifetime' => $this->config->get('session_lifetime'),
						'path' => $this->config->get('session_path'),
						'domain' => $this->config->get('session_domain'),
						'secure' => $this->config->get('session_secure'),
						'httponly' => $this->config->get('session_httponly'),
						'samesite' => $this->config->get('session_samesite')
					));
				}
			}
		} else {
			throw new \Exception('Error: Could not load session adaptor ' . $adaptor . ' session!');
		}
	}

	public function start($key = 'PHPSESSID', $value = '') {
		if ($value) {
			$session_id = $value;
		} elseif (isset($this->request->cookie[$key])) {
			$session_id = $this->request->cookie[$key];
		} else {
			$session_id = $this->createId();
		}

		if (preg_match('/^[a-zA-Z0-9,\-]{22,52}$/', $session_id)) {
			$this->session_id = $session_id;

			if ($this->engine == 'native') {
				if (!isset($_SESSION[$session_id])) {
					$_SESSION[$session_id] = array();
				}

				$this->data = &$_SESSION[$session_id];
				//$this->data = $this->adaptor->read($session_id, true);
			} else {
				$this->data = $this->adaptor->read($session_id);
			}

			//echo json_encode($this->data, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);
			if ($key != 'PHPSESSID') {
				$this->set($this->config->get('session_name'), $this->session_id, array(
					'lifetime' => $this->config->get('session_lifetime'),
					'path' => $this->config->get('session_path'),
					'domain' => $this->config->get('session_domain'),
					'secure' => $this->config->get('session_secure'),
					'httponly' => $this->config->get('session_httponly'),
					'samesite' => $this->config->get('session_samesite')
				));
			}
		} else {
			throw new \Exception('Error: Invalid session ID!');
		}

		return $session_id;
	}

	public function get() {
		return $this->session_id;
	}

	public function set($key = 'PHPSESSID', $value = '', $lifetime = '', $path = '', $domain = '', $secure = '', $httponly = '', $samesite = '') {
		if ($key != 'PHPSESSID') {
			if (version_compare(phpversion(), '7.3.0', '>') && is_array($lifetime)) {
				setcookie($key, $value, $lifetime);
			} else {
				if (is_array($lifetime)) {
					if (isset($lifetime['path'])) {
						$path = $lifetime['path'];
					}
					if (isset($lifetime['domain'])) {
						$domain = $lifetime['domain'];
					}
					if (isset($lifetime['secure'])) {
						$secure = $lifetime['secure'];
					}
					if (isset($lifetime['httponly'])) {
						$httponly = $lifetime['httponly'];
					}
					if (isset($lifetime['samesite'])) {
						$samesite = $lifetime['samesite'];
						ini_set('session.cookie_samesite', $samesite);
					}
					if (isset($lifetime['lifetime'])) {
						$lifetime = $lifetime['lifetime'];
					}
				}
				if (version_compare(phpversion(), '7.3.0', '>')) {
					setcookie($key, $value, array(
						'lifetime' => $lifetime,
						'path'     => $path,
						'domain'   => $domain,
						'secure'   => $secure,
						'httponly' => $httponly,
						'samesite' => $samesite
					));
				} else {
					setcookie($key, $value, $lifetime, $path, $domain, $secure, $httponly);
				}
			}
		}
	}

	public function getId() {
		return $this->session_id;
	}

	public function createId() {
		if (version_compare(phpversion(), '7.6.0', '>')) {
			//https://bugs.php.net/bug.php?id=79413
			ini_set('session.use_strict_mode', 1);
			return session_create_id();
		} elseif (version_compare(phpversion(), '5.5.4', '>')) {
			return $this->adaptor->create_sid();
		} elseif (function_exists('random_bytes')) {
			return substr(bin2hex(random_bytes(26)), 0, 26);
		} elseif (function_exists('openssl_random_pseudo_bytes')) {
			return substr(bin2hex(openssl_random_pseudo_bytes(26)), 0, 26);
		} else {
			return substr(bin2hex(mcrypt_create_iv(26, MCRYPT_DEV_URANDOM)), 0, 26);
		}
	}

	public function close($key = 'PHPSESSID') {
		if (isset($this->request->cookie[$key])) {
			$this->adaptor->write($this->request->cookie[$key], $this->data);
		}
	}

	public function destroy($key = 'PHPSESSID') {
		$this->data = array();

		if (isset($this->request->cookie[$key])) {
			if (isset($_SESSION[$this->request->cookie[$key]])) {
				unset($_SESSION[$this->request->cookie[$key]]);
			}

			$this->adaptor->destroy($this->request->cookie[$key]);
		}
	}

	public function gc($maxlifetime = 0) {
		$this->adaptor->gc($maxlifetime);
	}
}