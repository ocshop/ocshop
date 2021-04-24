<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Session;
class Native extends \SessionHandler {
	public function create_sid() {
		return parent::create_sid();
	}

	public function validate_sid($key) {
		return parent::validate_sid($key);
	}

	public function update_timestamp($key, $value = '') {
		return parent::update_timestamp($key, $value);
	}

	public function open($path, $name) {
		return parent::open($path, $name);
	}

	public function close() {
		return parent::close();
	}

	public function read($session_id, $get = false) {
		if ($get) {
			if (!isset($_SESSION[$session_id])) {
				$_SESSION[$session_id] = array();
			}
			return $_SESSION[$session_id];
		} else {
			return parent::read($session_id);
		}
	}

	public function write($session_id, $data = '') {
		//parent::write($session_id, session_encode());
		parent::write($session_id, serialize($data));

		return true;
	}

	public function destroy($session_id) {
		return parent::destroy($session_id);
	}

	public function gc($maxlifetime = 0) {
		return parent::gc(time() + $maxlifetime);
	}	
}