<?php
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

namespace Session;
class File {
	private $config;

	public function __construct($registry) {
		$this->config = $registry->get('config');
	}

    /* public function create_sid() {
        return parent::create_sid();
    }

    public function open($path, $name) {
        return true;
    }

    public function close() {
        return true;
    } */

	public function read($session_id = '') {
		$file = DIR_SESSION . $this->config->get('session_prefix') . basename($session_id);

		if (is_file($file)) {
			$size = filesize($file);

			if ($size) {
				$handle = fopen($file, 'r');

				flock($handle, LOCK_SH);

				$data = fread($handle, $size);

				flock($handle, LOCK_UN);

				fclose($handle);

				return json_decode($data, true);
			} else {
				return array();
			}
		}

		return array();
	}

	public function write($session_id = '', $data = array()) {
		$file = DIR_SESSION . $this->config->get('session_prefix') . basename($session_id);

		$handle = fopen($file, 'c');

		flock($handle, LOCK_EX);

		fwrite($handle, json_encode($data));
		ftruncate($handle, ftell($handle));
		fflush($handle);

		flock($handle, LOCK_UN);

		fclose($handle);

		return true;
	}

	public function destroy($session_id = '') {
		$file = DIR_SESSION . $this->config->get('session_prefix') . basename($session_id);

		if (is_file($file)) {
			unlink($file);
		}
	}

	public function gc($maxlifetime = 1440) {
		$total = 0;

		if (round(rand(1, $this->config->get('session_divisor') / $this->config->get('session_probability'))) == 1) {
			$files = glob(DIR_SESSION . $this->config->get('session_prefix') . '*');

			foreach ($files as $file) {
				if (is_file($file) && filemtime($file) < (time() - $maxlifetime)) {
					unlink($file);
					$total++;
				}
			}
		}

		return $total;
	}
}