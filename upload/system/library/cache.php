<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class Cache {
	private $adaptor;

	public function __construct($adaptor, $expire = 3600) {
		$class = 'Cache\\' . $adaptor;

		if (class_exists($class)) {
			$this->adaptor = new $class($expire);
		} else {
			throw new \Exception('Error: Could not load cache adaptor ' . $adaptor . ' cache!');
		}
	}

	public function get($key) {
		return $this->adaptor->get($key);
	}

	public function set($key, $value = '', $expire = 0) {
		return $this->adaptor->set($key, $value, $expire);
	}

	public function delete($key) {
		return $this->adaptor->delete($key);
	}

	// чистка всего кэша
	public function flush($timer) {
		return $this->adaptor->flush($timer);
	}
}