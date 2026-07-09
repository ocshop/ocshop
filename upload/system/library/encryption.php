<?php
// *	@copyright	OPENCART.PRO 2011 - 2023.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

final class Encryption {
	private $key;

	public function __construct($key) {
		$this->key = $key;
	}

	public function encrypt($value) {
		if (version_compare(phpversion(), '7.1.0', '>') == true || !function_exists('mcrypt_encrypt')) {
			// для улучшения сюда: https://www.php.net/manual/ru/function.openssl-encrypt.php
			return strtr(base64_encode(openssl_encrypt($value, 'aes-128-cbc', hash('sha256', $this->key, true), 0, hex2bin(substr(hash_hmac('sha256', $this->key, hash('sha256', $this->key, true)), 0, 32)))), '+/=', '-_,');
		} else {
			return strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, hash('sha256', hash('sha256', $this->key, true), true), $value, MCRYPT_MODE_ECB)), '+/=', '-_,');
		}
	}

	public function decrypt($value) {
		if (version_compare(phpversion(), '7.1.0', '>') == true || !function_exists('mcrypt_encrypt')) {
			// для улучшения сюда: https://www.php.net/manual/ru/function.openssl-encrypt.php
			return trim(openssl_decrypt(base64_decode(strtr($value, '-_,', '+/=')), 'aes-128-cbc', hash('sha256', $this->key, true), 0, hex2bin(substr(hash_hmac('sha256', $this->key, hash('sha256', $this->key, true)), 0, 32))));
		} else {
			return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, hash('sha256', hash('sha256', $this->key, true), true), base64_decode(strtr($value, '-_,', '+/=')), MCRYPT_MODE_ECB));
		}
	}
}
