<?php
// *	@copyright	OPENCART.PRO 2011 - 2020.
// *	@forum		http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

final class Encryption {
	private $key;

	public function __construct($key) {
		$this->key = hash('sha256', $key, true);
	}

	public function encrypt($value) {
		if (version_compare(phpversion(), '7.1.0', '>') == true || !function_exists('mcrypt_encrypt')) {
			// для улучшения сюда: https://www.php.net/manual/ru/function.openssl-encrypt.php
			return strtr(base64_encode(openssl_encrypt($value, 'aes-128-cbc', $this->key)), '+/=', '-_,');
		} else {
			return strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, hash('sha256', $this->key, true), $value, MCRYPT_MODE_ECB)), '+/=', '-_,');
		}
	}

	public function decrypt($value) {
		if (version_compare(phpversion(), '7.1.0', '>') == true || !function_exists('mcrypt_encrypt')) {
			// для улучшения сюда: https://www.php.net/manual/ru/function.openssl-encrypt.php
			return trim(openssl_decrypt(base64_decode(strtr($value, '-_,', '+/=')), 'aes-128-cbc', $this->key));
		} else {
			return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, hash('sha256', $this->key, true), base64_decode(strtr($value, '-_,', '+/=')), MCRYPT_MODE_ECB));
		}
	}
}
