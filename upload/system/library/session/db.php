<?php
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

/*
CREATE TABLE IF NOT EXISTS `oc_session` (
  `session_id` varchar(32) NOT NULL,
  `data` text NOT NULL,
  `expire` datetime NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
*/
namespace Session;
final class DB {
	private $db;
	private $config;

	public function __construct($registry) {
		$this->db = $registry->get('db');
		$this->config = $registry->get('config');
	}

	public function read($session_id = '') {
		if ($this->config->get('session_prefix')) {
			$session_id = substr_replace($session_id, $this->config->get('session_prefix'), (int)($this->config->get('session_length')/100*20), 0);
		}
		$query = $this->db->query("SELECT `data` FROM `" . DB_PREFIX . "session` WHERE `session_id` = '" . $this->db->escape($session_id) . "' AND `expire` > '" . $this->db->escape(date('Y-m-d H:i:s'))  . "'");

		if ($query->num_rows) {
			return json_decode($query->row['data'], true);
		} else {
			return array();
		}
	}

	public function write($session_id = '', $data = array()) {
		if ($session_id) {
			if ($this->config->get('session_prefix')) {
				$session_id = substr_replace($session_id, $this->config->get('session_prefix'), (int)($this->config->get('session_length')/100*20), 0);
			}
			if ($this->config->get('session_lifetime')) {
				$session_lifetime = $this->config->get('session_lifetime');
			} else {
				$session_lifetime = $this->config->get('session_maxlifetime');
			}
			$this->db->query("REPLACE INTO `" . DB_PREFIX . "session` SET `session_id` = '" . $this->db->escape($session_id) . "', `data` = '" . $this->db->escape($data ? json_encode($data) : '') . "', `expire` = '" . $this->db->escape(date('Y-m-d H:i:s', time() + $session_lifetime)) . "'");

			return true;
		} else {
			return false;
		}
	}

	public function destroy($session_id = '') {
		if ($this->config->get('session_prefix')) {
			$session_id = substr_replace($session_id, $this->config->get('session_prefix'), (int)($this->config->get('session_length')/100*20), 0);
		}
		$this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE `session_id` = '" . $this->db->escape($session_id) . "'");

		return true;
	}

	public function gc($maxlifetime = 1440) {
		$total = 0;

		if (round(rand(1, $this->config->get('session_divisor') / $this->config->get('session_probability'))) == 1) {
			$query = $this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE `expire` < '" . $this->db->escape(date('Y-m-d H:i:s', time())) . "' OR `expire` > '" . $this->db->escape(date('Y-m-d H:i:s', time() + $maxlifetime)) . "'");

			if ($query) {
				$query = $this->db->query("SELECT ROW_COUNT() AS total")->row['total'];

				if (isset($query->row['total'])) {
					$total = $query->row['total'];
				}
			}
		}

		return $total;
	}
}