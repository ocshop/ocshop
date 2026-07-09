<?php
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Session;
class Native extends \SessionHandler {
	private $config;

	public function __construct($registry) {
		$this->config = $registry->get('config');
	}

	#[\ReturnTypeWillChange]
	public function create_sid() /* : string */ {
		return (string)parent::create_sid();
	}

	/* public function validate_sid($session_id) {
		return parent::validate_sid($session_id);
	}

	public function update_timestamp($session_id, $data = '')) {
		return parent::update_timestamp($session_id, $data);
	} */

	#[\ReturnTypeWillChange]
	public function open($path, $session_id) /* : bool */ {
		return (bool)parent::open($path, $session_id);
	}

	#[\ReturnTypeWillChange]
	public function close() /* : bool */ {
		return (bool)parent::close();
	}

	#[\ReturnTypeWillChange]
	public function read($session_id) /* : string|false */ {
		return (string)parent::read($session_id);
	}

	#[\ReturnTypeWillChange]
	public function write($session_id, $data = '') /* : bool */ {
		return (bool)parent::write($session_id, $data);
	}

	#[\ReturnTypeWillChange]
	public function destroy($session_id) /* : bool */ {
		return (bool)parent::destroy($session_id);
	}

	#[\ReturnTypeWillChange]
	public function gc($maxlifetime = 0) /* : int|false */ {
		return (int)parent::gc($maxlifetime);
	}
}