<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class Session {
	protected $adaptor;
	protected $session_id = '';
	public $data = array();
	private $engine = 'native';

	public function __construct($engine = 'native', $registry = '') {
		$engine = strtolower($engine);
		if (!in_array($engine, array('db', 'file', 'native'))) {
			$engine = 'native';
		}
		$this->engine = $engine;
		$this->config = $registry->get('config');
		$this->request = $registry->get('request');
		$this->response = $registry->get('response');
		$class = 'Session\\' . $engine;

		if (class_exists($class) && $registry) {
			// убираем погрешности
			if ($this->config->get('session_lifetime') > $this->config->get('session_maxlifetime')) {
				$this->config->set('session_maxlifetime', (int)$this->config->get('session_lifetime'));
			}

			$prefix_count = iconv_strlen($this->config->get('session_prefix'));
			if ($engine == 'native' || $engine == 'file') {
				$length_end = 128 - $prefix_count;
			} else {
				$length_end = 255 - $prefix_count;
			}
			if ($this->config->get('session_length') > $length_end) {
				$this->config->set('session_length', (int)$length_end);
			}

			$this->adaptor = new $class($registry);

			if ($this->adaptor) {
				if ($engine == 'native') {
					ini_set('session.cookie_lifetime', $this->config->get('session_lifetime'));
					ini_set('session.cookie_path', $this->config->get('session_path'));
					ini_set('session.cookie_domain', $this->config->get('session_domain'));
					ini_set('session.cookie_secure', $this->config->get('session_secure'));
					ini_set('session.cookie_httponly', $this->config->get('session_httponly'));
					ini_set('session.cookie_samesite', $this->config->get('session_samesite'));
					ini_set('session.cookie_sameparty', $this->config->get('session_sameparty'));
					ini_set('session.gc_probability', $this->config->get('session_probability'));
					ini_set('session.gc_divisor', $this->config->get('session_divisor'));
					ini_set('session.gc_maxlifetime', $this->config->get('session_maxlifetime'));
					ini_set('session.save_path', DIR_SESSION);
					ini_set('session.use_strict_mode', true);
					ini_set('session.use_only_cookies', true);
					ini_set('session.use_cookies', true);
					ini_set('session.use_trans_sid', false);
					//ini_set('session.auto_start', 'On');

					if (version_compare(phpversion(), '7.1.0', '>=')) {
						ini_set('session.sid_length', $this->config->get('session_length'));
						ini_set('session.sid_bits_per_character', $this->config->get('session_bits_per_char'));
					} else {
						ini_set('session.entropy_length', $this->config->get('session_length'));
						ini_set('session.hash_bits_per_character', $this->config->get('session_bits_per_char'));
						ini_set('session.hash_function', 'sha512');
					}

					session_set_save_handler($this->adaptor);
					session_name($this->config->get('session_name'));

					if (!session_id()) {
						//https://overcoder.net/q/246853/php-%D0%BA%D0%B0%D0%BA-%D1%8F-%D0%BC%D0%BE%D0%B3%D1%83-%D1%81%D0%BE%D0%B7%D0%B4%D0%B0%D1%82%D1%8C-%D0%BD%D0%B5%D1%81%D0%BA%D0%BE%D0%BB%D1%8C%D0%BA%D0%BE-%D1%81%D0%B5%D1%81%D1%81%D0%B8%D0%B9
						//https://www.php.net/manual/ru/function.session-id.php
						/* if (isset($this->request->cookie[$this->config->get('session_name')])) {
							session_id($this->request->cookie[$this->config->get('session_name')]);
						} */

						$session_setting = array(
							'cookie_lifetime'  => $this->config->get('session_lifetime'),
							'cookie_path'      => $this->config->get('session_path'),
							'cookie_domain'    => $this->config->get('session_domain'),
							'cookie_secure'    => $this->config->get('session_secure'),
							'cookie_httponly'  => $this->config->get('session_httponly'),
							'gc_probability'   => $this->config->get('session_probability'),
							'gc_divisor'       => $this->config->get('session_divisor'),
							'gc_maxlifetime'   => $this->config->get('session_maxlifetime'),
							'save_path'        => DIR_SESSION,
							'use_strict_mode'  => true,
							'use_cookies'      => true,
							'use_only_cookies' => true,
							'use_trans_sid'    => false,
							//'read_and_close'   => true,
						);
						if (version_compare(phpversion(), '7.3.0', '>=')) {
							$session_setting['cookie_samesite'] = $this->config->get('session_samesite');
							//$session_setting['cookie_sameparty'] = $this->config->get('session_sameparty');
						}
						if (version_compare(phpversion(), '7.1.0', '>=')) {
							$session_setting['sid_length'] = $this->config->get('session_length');
							$session_setting['sid_bits_per_character'] = $this->config->get('session_bits_per_char');
						} else {
							$session_setting['entropy_length'] = $this->config->get('session_length');
							$session_setting['hash_bits_per_character'] = $this->config->get('session_bits_per_char');
							$session_setting['hash_function'] = 'sha512';
						}
						session_start($session_setting);
					} else {
						if (isset($this->request->cookie[$this->config->get('session_name')]) && !preg_match('/^[a-zA-Z0-9,\-]{' . $this->config->get('session_length') . '}$/', $this->request->cookie[$this->config->get('session_name')])) {
							$this->destroy($this->config->get('session_name'));
							header('Refresh: 1; URL=' . ($this->config->get('session_secure') ? HTTPS_SERVER : HTTP_SERVER));
							exit('Error: Invalid session ID!');
						}
					}
				} else {
					// сохранение сессионных данных
					register_shutdown_function(array($this, 'close'));
					// сборщик мусора
					register_shutdown_function(array($this, 'gc'));
				}
			} else {
				throw new \Exception('Error: Could not load session adaptor ' . $adaptor . ' session!');
			}
		} else {
			throw new \Exception('Error: Could not load session adaptor ' . $adaptor . ' session!');
		}
	}

	public function start($name = 'PHPSESSID', $session_id = '') {
		if (!$session_id) {
			if (isset($this->request->cookie[$name])) {
				$session_id = $this->request->cookie[$name];
			} else {
				$session_id = $this->createId();
			}
		}

		if (preg_match('/^[a-zA-Z0-9,\-]{' . $this->config->get('session_length') . '}$/', $session_id)) {
			$this->session_id = $session_id;

			if ($this->engine == 'native') {
				if (!isset($_SESSION[$session_id])) {
					$_SESSION[$session_id] = array();
				}

				$this->data = &$_SESSION[$session_id];
			} else {
				$this->data = $this->adaptor->read($session_id);
			}

			if ($this->engine != 'native' || $name != $this->config->get('session_name')) {
				$this->set($name, $this->session_id, array(
					'expires'   => ($this->config->get('session_lifetime') ? time() + $this->config->get('session_lifetime') : 0),
					'path'      => $this->config->get('session_path'),
					'domain'    => $this->config->get('session_domain'),
					'secure'    => $this->config->get('session_secure'),
					'httponly'  => $this->config->get('session_httponly'),
					'samesite'  => $this->config->get('session_samesite'),
					'sameparty' => $this->config->get('session_sameparty')
				));
			}
		} else {
			$this->destroy($name);
			header('Refresh: 1; URL=' . ($this->config->get('session_secure') ? HTTPS_SERVER : HTTP_SERVER));
			exit('Error: Invalid session ID!');
		}

		return $session_id;
	}

	public function get() {
		return $this->session_id;
	}

	// универсальное добавление куков
	public function set($name = null, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null, $sameparty = null) {
		if (isset($expires) && is_array($expires)) {
			if (isset($expires['path'])) {
				$path = $expires['path'];
			}
			if (isset($expires['domain'])) {
				$domain = $expires['domain'];
			}
			if (isset($expires['secure'])) {
				$secure = $expires['secure'];
			}
			if (isset($expires['httponly'])) {
				$httponly = $expires['httponly'];
			}
			if (isset($expires['samesite'])) {
				$samesite = $expires['samesite'];
			}
			if (isset($expires['sameparty'])) {
				$sameparty = $expires['sameparty'];
			}
			if (isset($expires['expires'])) {
				$expires = $expires['expires'];
			}
		}

		if (!isset($name)) {
			$name = $this->config->get('session_name');
		}
		if (!isset($value)) {
			$value = '';
		}
		if (!isset($expires)) {
			$expires = $this->config->get('session_other_lifetime');
		}
		if (!isset($path)) {
			$path = $this->config->get('session_path');
		}
		if (!isset($domain)) {
			$domain = $this->config->get('session_domain');
		}
		if (!isset($secure)) {
			$secure = $this->config->get('session_secure');
		}
		if (!isset($httponly)) {
			//$httponly = $this->config->get('session_other_httponly');
			$httponly = false;
		}
		if (!isset($samesite)) {
			$samesite = $this->config->get('session_other_samesite');
		}
		if (!isset($sameparty)) {
			$sameparty = $this->config->get('session_other_sameparty');
		}

		if (version_compare(phpversion(), '7.3.0', '>=')) {
			setcookie($name, $value, array(
				'expires'   => $expires,
				'path'      => $path,
				'domain'    => $domain,
				'secure'    => $secure,
				'httponly'  => $httponly,
				'samesite'  => $samesite,
				'sameparty' => $sameparty
			));
		} else {
			$string = 'Set-Cookie: ' . rawurlencode($name) . '=' . rawurlencode($value);

			if (!is_null($expires)) {
				$string .= '; expires=' . $expires;
			} else {
				$string .= '; expires=0';
			}

			if ($expires) {
				$string .= '; Max-Age=' . $expires;
			}

			if ($path) {
				$string .= '; Path=' . $path;
			}

			if ($domain) {
				$string .= '; Domain=' . $domain;
			}

			if ($secure) {
				$string .= '; Secure';
			}

			if ($httponly) {
				$string .= '; HttpOnly';
			}

			$samesite_s = strtolower($samesite);
			if ($samesite_s == 'lax' || $samesite_s == 'strict' || $samesite_s == 'none') {
				$string .= '; SameSite=' . $samesite;
			} else {
				$string .= '; SameSite=' . $this->config->get('session_other_samesite');
			}

			//https://github.com/privacycg/first-party-sets
			//https://www.chromestatus.com/feature/5280634094223360
			if ($sameparty) {
				$string .= '; SameParty';
				//$this->response->addHeader('Sec-First-Party-Set: owner="buslikdrev.by", minVersion=1');
			}

			//https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie
			//setcookie($name, $value, $expires, $path, $domain, $secure, $httponly);
			//$this->response->addHeader($string);
			header($string);
		}
	}

	public function getId() {
		return $this->session_id;
	}

	public function createId() {
		if ($this->engine == 'native' && version_compare(phpversion(), '7.6.0', '>=')) {
			/* if (session_status() != PHP_SESSION_ACTIVE) {
				session_start();
			} */
			//https://bugs.php.net/bug.php?id=79413
			return session_create_id();
		} elseif ($this->engine == 'native' && version_compare(phpversion(), '5.5.4', '>=')) {
			return $this->adaptor->create_sid();
		} elseif (function_exists('random_bytes')) {
			return substr(bin2hex(random_bytes($this->config->get('session_length'))), 0, $this->config->get('session_length'));
		} elseif (function_exists('openssl_random_pseudo_bytes')) {
			return substr(bin2hex(openssl_random_pseudo_bytes($this->config->get('session_length'))), 0, $this->config->get('session_length'));
		} else {
			return substr(bin2hex(mcrypt_create_iv($this->config->get('session_length'), MCRYPT_DEV_URANDOM)), 0, $this->config->get('session_length'));
		}
	}

	public function close() {
		if ($this->session_id && $this->data) {
			$this->adaptor->write($this->session_id, $this->data);
		}
	}

	public function destroy($name = 'PHPSESSID') {
		header('Clear-Site-Data: "cookies", "*"');
		//$this->response->addHeader('Clear-Site-Data: "cookies", "*"');

		$this->data = array();

		if (isset($_SESSION[$this->session_id])) {
			unset($_SESSION[$this->session_id]);
		}

		if (isset($_COOKIE[$name])) {
			unset($_COOKIE[$name]);
		}

		if (isset($this->request->cookie[$name])) {
			$this->set($name, $this->request->cookie[$name], array(
				'expires'   => - time() - $this->config->get('session_lifetime'),
				'path'      => $this->config->get('session_path'),
				'domain'    => $this->config->get('session_domain'),
				'secure'    => $this->config->get('session_secure'),
				'httponly'  => $this->config->get('session_httponly'),
				'samesite'  => $this->config->get('session_samesite'),
				'sameparty' => $this->config->get('session_sameparty')
			));

			$this->adaptor->destroy($this->request->cookie[$name]);
		}
	}

	public function gc($maxlifetime = 0) {
		if (!$maxlifetime) {
			$maxlifetime = $this->config->get('session_maxlifetime');
		}

		return $this->adaptor->gc($maxlifetime);
	}
}