<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2022; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ )

if (version_compare(VERSION, '2.3.0', '<')) {
	class ModelModuleBusMenu extends ModelExtensionModuleBusMenu {}
}

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
		$cache_data = array();

		if ($setting['cache']) {
			$cache_data = $this->cache->get('seo_url.bus_menu.setting_admin.' . (int)$module_id . '.' . (int)$this->config->get('config_store_id'));
		}

		if (!$cache_data) {
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

			if ($setting['cache'] && $cache_data) {
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

	public function getCatsDesc($data = array()) {
		$id = (isset($data['id']) ? (int)$data['id'] : 0);
		$table = (isset($data['table']) && in_array($data['table'], array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($data['table']) : 'category');
		$cache_data = array();

		if ($table == 'manufacturer' && !isset($data['submanufacturers_status'])) {
			$query = $this->db->query("SELECT " . $table . "_id, name FROM " . DB_PREFIX . $table . " WHERE " . $table . "_id = '" . $id . "'");
		} elseif ($table == 'information') {
			$query = $this->db->query("SELECT " . $table . "_id, language_id, title AS name FROM " . DB_PREFIX . $table . "_description WHERE " . $table . "_id = '" . $id . "'");
		} else {
			$query = $this->db->query("SELECT " . $table . "_id, language_id, name FROM " . DB_PREFIX . $table . "_description WHERE " . $table . "_id = '" . $id . "'");
		}

		if ($table == 'manufacturer' && !isset($data['submanufacturers_status'])) {
			$this->load->model('localisation/language');

			$languages = $this->model_localisation_language->getLanguages();

			foreach ($languages as $result) {
				$cache_data['name'][$result['language_id']] = strip_tags(html_entity_decode($query->row['name'], ENT_QUOTES, 'UTF-8'));
				//$cache_data['title'][$result['language_id']] = strip_tags(html_entity_decode($query->row['title'], ENT_QUOTES, 'UTF-8'));
				//$cache_data['descrption'][$result['language_id']] = strip_tags(html_entity_decode($query->row['descrption'], ENT_QUOTES, 'UTF-8'));
			}
		} else {
			foreach ($query->rows as $result) {
				$cache_data['name'][$result['language_id']] = strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'));
				//$cache_data['title'][$result['language_id']] = strip_tags(html_entity_decode($query->row['title'], ENT_QUOTES, 'UTF-8'));
				//$cache_data['descrption'][$result['language_id']] = strip_tags(html_entity_decode($query->row['descrption'], ENT_QUOTES, 'UTF-8'));
			}
		}

		return $cache_data;
	}

	public function getCats($data = array()) {
		$id = (isset($data['id']) ? (int)$data['id'] : 0);
		$id_all = (isset($data['id_all']) ? true : false);
		$table = (isset($data['table']) && in_array($data['table'], array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($data['table']) : 'category');
		$config_language_id = (int)$this->config->get('config_language_id');
		$config_store_id = (int)$this->config->get('config_store_id');
		$level = (isset($data['level']) && !empty($data['level']) ? (int)$data['level'] : false);
		$level_limit = (isset($data['level_limit']) && !empty($data['level_limit']) ? (int)$data['level_limit'] : false);
		if (!isset($data['cache'])) {
			$data['cache'] = false;
		}
		$cache_data = array();

		if ($data['cache'] == 1) {
			$cache_data = $this->cache->get($table . '.' . 'bus_menu.getCats.' . (!$id ? $id . '.' : false) . $config_language_id . '.' . $config_store_id);
		}

		if (!isset($cache_data[$id])) {
			if ($table == 'blog_category') {
				$select = " c.parent_id, c.image, c.top, c.status,";
				if (isset($data['name_stock'])) {
					$select = $select . " (SELECT GROUP_CONCAT(cd.name ORDER BY cp.level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') FROM " . DB_PREFIX . $table . "_path cp LEFT JOIN " . DB_PREFIX . $table . "_description cd ON (cp.path_id = cd." . $table . "_id) WHERE cp." . $table . "_id = c." . $table . "_id AND cd.language_id = '" . $config_language_id . "' GROUP BY cp." . $table . "_id) AS name_stock,";
				}
				if ($id) {
					$where = " WHERE c.parent_id = '" . $id . "' AND c.status = '1'";
				} else {
					if ($id_all) {
						$where = " WHERE c.parent_id = '0' AND c.status = '1'";
					} else {
						$where = " WHERE c." . $table . "_id AND c.status = '1'";
					}
				}
				if (isset($data['top'])) {
					$where .= " AND c.top = '1'";
				}
				if (!empty($data['filter_name'])) {
					$where .= " AND (cd.name LIKE '%" . $this->db->escape($data['filter_name']) . "%' OR cd.name LIKE '%" . $this->db->escape($this->trans_corect($data['filter_name'])) . "%')";
				}
				/* if ($level_limit) {
					$select = $select . " (SELECT GROUP_CONCAT(cp.path_id ORDER BY cp.level SEPARATOR '_') FROM " . DB_PREFIX . $table . "_path cp WHERE cp." . $table . "_id = c." . $table . "_id GROUP BY cp." . $table . "_id) AS path,";
					$where = " LEFT JOIN " . DB_PREFIX . $table . "_path cp ON (c." . $table . "_id = cp." . $table . "_id)" . $where . " AND cp.level <= '" . $level_limit . "'";
				} */
			} elseif ($table == 'article') {
				$select = " c.image, c.status,";
				if (isset($data['name_stock'])) {
					$select = $select . " cd.name AS name_stock,";
				}
				if ($id) {
					$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
				} else {
					$where = " WHERE c." . $table . "_id AND c.status = '1'";
				}
				if (!empty($data['filter_name'])) {
					$where .= " AND (cd.name LIKE '%" . $this->db->escape($data['filter_name']) . "%' OR cd.name LIKE '%" . $this->db->escape($this->trans_corect($data['filter_name'])) . "%')";
				}
			} elseif ($table == 'information') {
				$select = " '' AS image, c.bottom, cd.title AS name,";
				if (isset($data['name_stock'])) {
					$select = $select . " cd.title AS name_stock,";
				}
				if ($id) {
					$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
				} else {
					$where = " WHERE c." . $table . "_id AND c.status = '1'";
				}
				if (isset($data['top'])) {
					$where .= " AND c.bottom = '1'";
				}
				if (!empty($data['filter_name'])) {
					$where .= " AND (cd.title LIKE '%" . $this->db->escape($data['filter_name']) . "%' OR cd.title LIKE '%" . $this->db->escape($this->trans_corect($data['filter_name'])) . "%')";
				}
			} elseif ($table == 'manufacturer') {
				if (isset($data['submanufacturers_status'])) {
					$select = " c.parent_id, c.image, c.top, c.column, c.status,";
					if (isset($data['name_stock'])) {
						$select = $select . " (SELECT GROUP_CONCAT(cd.name ORDER BY cp.level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') FROM " . DB_PREFIX . $table . "_path cp LEFT JOIN " . DB_PREFIX . $table . "_description cd ON (cp.path_id = cd." . $table . "_id) WHERE cp." . $table . "_id = c." . $table . "_id AND cd.language_id = '" . $config_language_id . "' GROUP BY cp." . $table . "_id) AS name_stock,";
					}
					if ($id) {
						$where = " WHERE c.parent_id = '" . $id . "' AND c.status = '1'";
					} else {
						if ($id_all) {
							$where = " WHERE c.parent_id = '0' AND c.status = '1'";
						} else {
							$where = " WHERE c." . $table . "_id AND c.status = '1'";
						}
					}
					if (isset($data['top'])) {
						$where .= " AND c.top = '1'";
					}
					if (!empty($data['filter_name'])) {
						$where .= " AND (cd.name LIKE '%" . $this->db->escape($data['filter_name']) . "%' OR cd.name LIKE '%" . $this->db->escape($this->trans_corect($data['filter_name'])) . "%')";
					}
					/* if ($level_limit) {
						$select = $select . " (SELECT GROUP_CONCAT(cp.path_id ORDER BY cp.level SEPARATOR '_') FROM " . DB_PREFIX . $table . "_path cp WHERE cp." . $table . "_id = c." . $table . "_id GROUP BY cp." . $table . "_id) AS path,";
						$where = " LEFT JOIN " . DB_PREFIX . $table . "_path cp ON (c." . $table . "_id = cp." . $table . "_id)" . $where . " AND cp.level <= '" . $level_limit . "'";
					} */
				} else {
					$select = " c.name, c.image,";
					if (isset($data['name_stock'])) {
						$select = $select . " c.name AS name_stock,";
					}
					if ($id) {
						$where = " WHERE c." . $table . "_id = '" . $id . "'";
					} else {
						$where = " WHERE c." . $table . "_id";
					}
					if (!empty($data['filter_name'])) {
						$where .= " AND (c.name LIKE '%" . $this->db->escape($data['filter_name']) . "%' OR c.name LIKE '%" . $this->db->escape($this->trans_corect($data['filter_name'])) . "%')";
					}
				}
			} elseif ($table == 'product') {
				$select = " c.image, c.status,";
				if (isset($data['name_stock'])) {
					$select = $select . " cd.name AS name_stock,";
				}
				if ($id) {
					$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
				} else {
					$where = " WHERE c." . $table . "_id AND c.status = '1'";
				}
				if (!empty($data['filter_name'])) {
					$where .= " AND (cd.name LIKE '%" . $this->db->escape($data['filter_name']) . "%' OR cd.name LIKE '%" . $this->db->escape($this->trans_corect($data['filter_name'])) . "%')";
				}
			} else {
				$select = " c.parent_id, c.image, c.top, c.column, c.status,";
				if (isset($data['name_stock'])) {
					$select = $select . " (SELECT GROUP_CONCAT(cd.name ORDER BY cp.level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') FROM " . DB_PREFIX . $table . "_path cp LEFT JOIN " . DB_PREFIX . $table . "_description cd ON (cp.path_id = cd." . $table . "_id) WHERE cp." . $table . "_id = c." . $table . "_id AND cd.language_id = '" . $config_language_id . "' GROUP BY cp." . $table . "_id) AS name_stock,";
				}
				if ($id) {
					$where = " WHERE c.parent_id = '" . $id . "' AND c.status = '1'";
				} else {
					if ($id_all) {
						$where = " WHERE c.parent_id = '0' AND c.status = '1'";
					} else {
						$where = " WHERE c." . $table . "_id AND c.status = '1'";
					}
				}
				if (isset($data['top'])) {
					$where .= " AND c.top = '1'";
				}
				if (!empty($data['filter_name'])) {
					$where .= " AND (cd.name LIKE '%" . $this->db->escape($data['filter_name']) . "%' OR cd.name LIKE '%" . $this->db->escape($this->trans_corect($data['filter_name'])) . "%')";
				}
				/* if ($level_limit) {
					$select = $select . " (SELECT GROUP_CONCAT(cp.path_id ORDER BY cp.level SEPARATOR '_') FROM " . DB_PREFIX . $table . "_path cp WHERE cp." . $table . "_id = c." . $table . "_id GROUP BY cp." . $table . "_id) AS path,";
					$where = " LEFT JOIN " . DB_PREFIX . $table . "_path cp ON (c." . $table . "_id = cp." . $table . "_id)" . $where . " AND cp.level <= '" . $level_limit . "'";
				} */
			}

			if (isset($data['sort'])) {
				$sort = " ORDER BY " . $this->db->escape($data['sort']);
			} else {
				$sort = " ORDER BY c.sort_order";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$order = " DESC";
			} else {
				$order = " ASC";
			}

			$limit = (isset($data['limit']) && !empty($data['limit']) ? " LIMIT " . (isset($data['start']) ? (int)$data['start'] . "," : false) . (int)$data['limit'] : false);

			$cache_data[$id] = $this->db->query("SELECT c." . $table . "_id," . $select . " cd.* FROM " . DB_PREFIX . $table . " c LEFT JOIN " . DB_PREFIX . $table . "_description cd ON (c." . $table . "_id = cd." . $table . "_id) LEFT JOIN " . DB_PREFIX . $table . "_to_store c2s ON (c." . $table . "_id = c2s." . $table . "_id)" . $where . " AND cd.language_id = '" . $config_language_id . "' AND c2s.store_id = '" . $config_store_id . "'" . $sort . $order . $limit)->rows;

			if ($data['cache'] == 1 && $cache_data) {
				$this->cache->set($table . '.' . 'bus_menu.getCats.' . (!$id ? $id . '.' : false) . $config_language_id . '.' . $config_store_id, $cache_data);
			}
		}

		return $cache_data[$id];
	}

	private function trans_corect($input){
		$gost = array(
			'f'=>'а',
			','=>'б',
			'd'=>'в',
			'u'=>'г',
			'l'=>'д',
			't'=>'е',
			'`'=>'ё',
			';'=>'ж',
			'p'=>'з',
			'b'=>'и',
			'q'=>'й',
			'r'=>'к',
			'k'=>'л',
			'v'=>'м',
			'y'=>'н',
			'j'=>'о',
			'g'=>'п',
			'h'=>'р',
			'c'=>'с',
			'n'=>'т',
			'e'=>'у',
			'a'=>'ф',
			'['=>'х',
			'w'=>'ц',
			'x'=>'ч',
			'i'=>'ш',
			'o'=>'щ',
			']'=>'ъ',
			's'=>'ы',
			'm'=>'ь',
			'\''=>'э',
			'.'=>'ю',
			'z'=>'я',
			'F'=>'А',
			'<'=>'Б',
			'D'=>'В',
			'U'=>'Г',
			'L'=>'Д',
			'T'=>'Е',
			'`'=>'Ё',
			';'=>'Ж',
			'P'=>'З',
			'B'=>'И',
			'Q'=>'Й',
			'R'=>'К',
			'K'=>'Л',
			'V'=>'М',
			'Y'=>'Н',
			'J'=>'О',
			'G'=>'П',
			'H'=>'Р',
			'C'=>'С',
			'N'=>'Т',
			'E'=>'У',
			'A'=>'Ф',
			'{'=>'Х',
			'W'=>'Ц',
			'X'=>'Ч',
			'I'=>'Ш',
			'O'=>'Щ',
			'}'=>'Ъ',
			'S'=>'Ы',
			'M'=>'Ь',
			'"'=>'Э',
			'>'=>'Ю',
			'Z'=>'Я'
		);

		return strtr($input, $gost);
	}
}
