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

	public function read($session_id) {
		return parent::read($session_id);
	}

	public function write($session_id, $data = array()) {
		return parent::write($session_id, $data);
	}

	public function destroy($session_id) {
		return parent::destroy($session_id);
	}

	public function gc($maxlifetime = 0) {
		return parent::gc(time() + $maxlifetime);
	}
}