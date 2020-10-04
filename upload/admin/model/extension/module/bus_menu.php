<?php
// *   Аўтар: "БуслікДрэў" ( http://buslikdrev.by/ )
// *   © 2016-2020; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( http://opencart.pro/ )

class ModelExtensionModuleBusMenu extends Model {
	// добавление настроек модуля
	public function addModule($module_id, $data = array()) {
		if (isset($data['setting']['store'])) {
			foreach ($data['setting']['store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "bus_menu_to_store SET module_id = '" . (int)$module_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		$this->db->query("INSERT INTO `" . DB_PREFIX . "bus_menu` SET `module_id` = '" . (int)$module_id . "', `setting` = '" . $this->db->escape(json_encode($data['setting'])) . "', `cats` = '" . $this->db->escape(json_encode($data['cats'])) . "'");
	}

	// редактирование настроек модуля
	public function editModule($module_id, $data = array()) {
		$this->deleteModule($module_id);

		if (isset($data['setting']['store'])) {
			foreach ($data['setting']['store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "bus_menu_to_store SET module_id = '" . (int)$module_id . "', store_id = '" . (int)$store_id . "'");
			}
		}

		$this->db->query("INSERT INTO `" . DB_PREFIX . "bus_menu` SET `module_id` = '" . (int)$module_id . "', `setting` = '" . $this->db->escape(json_encode($data['setting'])) . "', `cats` = '" . $this->db->escape(json_encode($data['cats'])) . "'");
	}

	// удаление настроек модуля
	public function deleteModule($module_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "bus_menu` WHERE `module_id` = '" . (int)$module_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "bus_menu_to_store` WHERE `module_id` = '" . (int)$module_id . "'");
	}

	// вывод настроек модуля
	public function getModule($module_id = 0, $setting = array('cache' => 0)) {
		$cache_data = false;

		if ($setting['cache']) {
			$cache_data = $this->cache->get('seo_url.bus_menu.setting_admin.' . (int)$module_id . '.' . (int)$this->config->get('config_store_id'));
		}

		if (!$cache_data && json_encode($cache_data) != '[]') {
			$query = $this->db->query("SELECT module_id, setting, cats FROM " . DB_PREFIX . "bus_menu WHERE module_id = '" . (int)$module_id . "'");

			if ($query->row) {
				$cache_data['setting'] = json_decode($query->row['setting'], true);
				$cache_data['setting']['module_id'] = $query->row['module_id'];
				$cache_data['setting']['store'] = $this->getModuleStores($module_id);
				$cats = json_decode($query->row['cats'], true);
				$cache_data['cats'] = array (
					'cats_horizontal' => (isset($cats['cats_horizontal']) ? $cats['cats_horizontal'] : null),
					'cats_vertical' => (isset($cats['cats_vertical']) ? $cats['cats_vertical'] : null),
					'cats_cell' => (isset($cats['cats_cell']) ? $cats['cats_cell'] : null)
				);
			}

			if ($setting['cache']) {
				$this->cache->set('seo_url.bus_menu.setting_admin.' . (int)$module_id . '.' . (int)$this->config->get('config_store_id'), $cache_data);
			}
		}

		return $cache_data;
	}

	public function getModuleStores($module_id = 0) {
		$module_store_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "bus_menu_to_store WHERE module_id = '" . (int)$module_id . "'");

		foreach ($query->rows as $result) {
			$module_store_data[] = $result['store_id'];
		}

		return $module_store_data;
	}
}