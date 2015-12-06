<?php
// *	@copyright	OPENCART.PRO 2011 - 2015.
// *	@forum	http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class Event {
	protected $registry;
	public $data = array();

	public function __construct($registry) {
		$this->registry = $registry;
	}
		
	public function register($trigger, $action) {
		$this->data[$trigger][] = $action;
	}
	
	public function unregister($trigger) {
		if (isset($this->data[$trigger])) {
			unset($this->data[$trigger]);
		}
	}

	public function trigger($trigger, $args = array()) {
		foreach ($this->data as $key => $value) {
			if (preg_match('/^' . str_replace(array('\*', '\?'), array('.*', '.'), preg_quote($key, '/')) . '/', $trigger)) {
				foreach ($value as $event) {
					$result = $event->execute($this->registry, $args);
				
					if (!is_null($result)) {
						return $result;
					}
				}
			}
		}
	}
}