<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Session;
class Native extends \SessionHandler {
	public function __construct($registry) {
		$this->config = $registry->get('config');
	}

	public function create_sid() {
		return parent::create_sid();
	}

	public function validate_sid($session_id) {
		return parent::validate_sid($session_id);
	}

	public function update_timestamp($session_id, $data = array()) {
		return parent::update_timestamp($session_id, $data);
	}

	public function open($path, $session_id) {
		return parent::open($path, $session_id);
	}

	public function close() {
		return parent::close();
	}

	public function read($session_id) {
		if ($this->config->get('session_prefix')) {
			$session_id = str_replace('sess_', $this->config->get('session_prefix'), $session_id);
		}
		return parent::read($session_id);
	}

	public function write($session_id, $data = array()) {
		if ($this->config->get('session_prefix')) {
			$session_id = str_replace('sess_', $this->config->get('session_prefix'), $session_id);
		}
		return parent::write($session_id, $data);
	}

	public function destroy($session_id) {
		if ($this->config->get('session_prefix')) {
			$session_id = str_replace('sess_', $this->config->get('session_prefix'), $session_id);
		}
		return parent::destroy($session_id);
	}

	public function gc($maxlifetime = 0) {
		return parent::gc(time() + $maxlifetime);
	}
}