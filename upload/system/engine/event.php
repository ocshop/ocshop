<?php
// *	@copyright	OCSHOP.CMS \ ocshop.net 2011 - 2015.
// *	@demo	http://ocshop.net
// *	@blog	http://ocshop.info
// *	@forum	http://forum.ocshop.info
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class Event {
	protected $registry;
	private $data = array();

	public function __construct($registry) {
		$this->registry = $registry;
	}

	public function register($key, $action) {
		$this->data[$key][] = $action;
	}

	public function unregister($key, $action) {
		if (isset($this->data[$key])) {
			foreach ($this->data[$key] as $index => $event) {
				if ($event == $action) {
					unset($this->data[$key][$index]);
				}
			}
		}
	}

	public function trigger($key, &$arg = array()) {
		if (isset($this->data[$key])) {
			foreach ($this->data[$key] as $event) {
				$action = new Action($event['action'], $arg);
				$event->execute($this->registry);
			}
		}
	}
}