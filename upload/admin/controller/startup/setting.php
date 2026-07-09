<?php
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerStartupSetting extends Controller {
	public function index() {
		// Settings
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '0'");

		foreach ($query->rows as $setting) {
			if (!$setting['serialized']) {
				$this->config->set($setting['key'], $setting['value']);
			} else {
				$this->config->set($setting['key'], json_decode($setting['value'], true));
			}
		}

		// Settings session
		if (in_array($this->config->get('config_session_engine'), array('db', 'file', 'native'))) {
			$this->config->set('session_engine', $this->config->get('config_session_engine'));
		}
		if ($this->config->get('config_session_name')) {
			$this->config->set('session_name', $this->config->get('config_session_name'));
		}
		if ($this->config->get('config_session_prefix')) {
			$this->config->set('session_prefix', $this->config->get('config_session_prefix'));
		}
		if ($this->config->get('config_session_bits_per_char')) {
			$this->config->set('session_bits_per_char', $this->config->get('config_session_bits_per_char'));
		}
		if ($this->config->get('config_session_length')) {
			$this->config->set('session_length', $this->config->get('config_session_length'));
		}
		if ($this->config->get('config_session_lifetime')) {
			$this->config->set('session_lifetime', $this->config->get('config_session_lifetime'));
		}
		if ($this->config->get('config_session_maxlifetime')) {
			$this->config->set('session_maxlifetime', $this->config->get('config_session_maxlifetime'));
		}
		if ($this->config->get('config_session_other_lifetime')) {
			$this->config->set('session_other_lifetime', $this->config->get('config_session_other_lifetime'));
		}
		if ($this->config->get('config_session_probability')) {
			$this->config->set('session_probability', $this->config->get('config_session_probability'));
		}
		if ($this->config->get('config_session_divisor')) {
			$this->config->set('session_divisor', $this->config->get('config_session_divisor'));
		}
		if ($this->config->get('config_session_samesite')) {
			$this->config->set('session_samesite', $this->config->get('config_session_samesite'));
		}
		if ($this->config->get('config_session_other_samesite')) {
			$this->config->set('session_other_samesite', $this->config->get('config_session_other_samesite'));
		}
		if ($this->config->get('config_session_sameparty')) {
			$this->config->set('session_sameparty', $this->config->get('config_session_sameparty'));
		}
		if ($this->config->get('config_session_other_sameparty')) {
			$this->config->set('session_other_sameparty', $this->config->get('config_session_other_sameparty'));
		}

		// Set time zone
		if ($this->config->get('config_timezone')) {
			date_default_timezone_set($this->config->get('config_timezone'));

			// Sync PHP and DB time zones.
			$this->db->query("SET time_zone = '" . $this->db->escape(date('P')) . "'");
		}

		// Response output compression level
		if ($this->config->get('config_compression')) {
			$this->response->setCompression((int)$this->config->get('config_compression'));
		}
	}
}