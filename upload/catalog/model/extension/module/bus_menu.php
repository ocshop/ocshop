<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2022; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ )

if (version_compare(VERSION, '2.3.0', '<')) {
	class ModelModuleBusMenu extends ModelExtensionModuleBusMenu {}
}

class ModelExtensionModuleBusMenu extends Model {
	// вывод настроек модуля
	public function getModule($module_id = 0, $setting = array('cache' => 0)) {
		$config_store_id = (int)$this->config->get('config_store_id');
		$cache_data = array();

		if ($setting['cache']) {
			$cache_data = $this->cache->get('seo_url.bus_menu.setting.' . (int)$module_id . '.' . $config_store_id);
		}

		if (!$cache_data) {
			/* if ($module_id) { */
				$sql = " WHERE bmts.store_id = '" . $config_store_id . "' AND bm.module_id = '" . (int)$module_id . "'";
			/* } else {
				$sql = " WHERE  bm.position = 'content_menu' AND bmts.store_id = '" . $config_store_id . "'";
			} */

			$query = $this->db->query("SELECT bm.module_id, bm.setting, bm.cats FROM " . DB_PREFIX . "bus_menu bm LEFT JOIN " . DB_PREFIX . "bus_menu_to_store bmts ON (bm.module_id = bmts.module_id)" . $sql);

			if ($query->row) {
				$cache_data['setting'] = json_decode($query->row['setting'], true);
				$cache_data['setting']['module_id'] = $query->row['module_id'];
				$cats = json_decode($query->row['cats'], true);
				$cache_data['cats'] = array (
					'cats_horizontal' => (isset($cats['cats_horizontal']) ? $cats['cats_horizontal'] : null),
					'cats_vertical' => (isset($cats['cats_vertical']) ? $cats['cats_vertical'] : null),
					'cats_cell' => (isset($cats['cats_cell']) ? $cats['cats_cell'] : null)
				);
			}

			if ($setting['cache'] && $cache_data) {
				$this->cache->set('seo_url.bus_menu.setting.' . (int)$module_id . '.' . $config_store_id, $cache_data);
			}
		}

		return $cache_data;
	}

	// вывод индивидуальных данных
	public function getCat($id, $table = 'category', $setting = array('cache' => 0, 'submanufacturers_status' => false)) {
		$id = (int)$id;
		$table = (isset($table) && in_array($table, array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($table) : 'category');
		$config_language_id = (int)$this->config->get('config_language_id');
		$config_store_id = (int)$this->config->get('config_store_id');
		$cache_data = array();

		if ($setting['cache'] == 1) {
			$cache_data = $this->cache->get($table . '.' . 'bus_menu.getCat.' . (int)$this->config->get('config_language_id') . '.' . $config_store_id);
		}

		if (!isset($cache_data[$id])) {
			if ($table == 'blog_category') {
				$select = " c.image, c.status, cd.meta_title AS title, cd.description AS description,";
				$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
			} elseif ($table == 'article') {
				$select = " c.image, c.status, cd.meta_title AS title, cd.description AS description,";
				$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
			} elseif ($table == 'category') {
				$select = " c.image, c.top, c.column, c.status, cd.meta_title AS title, cd.description AS description,";
				$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
			} elseif ($table == 'information') {
				$select = " '' AS image, c.bottom, cd.title AS name, cd.meta_title AS title, cd.description AS description,";
				$where = " WHERE c." . $table . "_id = '" . $id . "'";
			} elseif ($table == 'manufacturer') {
				if ($setting['submanufacturers_status']) {
					$select = " c.image, c.top, c.column, c.status, cd.meta_title AS title, cd.description AS description,";
					$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
				} else {
					$select = " c.name, c.image, cd.meta_title AS title, cd.description AS description,";
					$where = " WHERE c." . $table . "_id = '" . $id . "'";
				}
			} elseif ($table == 'product') {
				$select = " c.image, c.status, cd.meta_title AS title, cd.description AS description,";
				$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
			} else {
				$select = " c.image, cd.meta_title AS title, cd.description AS description,";
				$where = " WHERE c." . $table . "_id = '" . $id . "'";
			}

			$cache_data[$id] = $this->db->query("SELECT DISTINCT c." . $table . "_id," . $select . " cd.* FROM " . DB_PREFIX . $table . " c LEFT JOIN " . DB_PREFIX . $table . "_description cd ON (c." . $table . "_id = cd." . $table . "_id) LEFT JOIN " . DB_PREFIX . $table . "_to_store c2s ON (c." . $table . "_id = c2s." . $table . "_id)" . $where . " AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . $config_store_id . "'")->row;
			if ($setting['cache'] == 1 && $cache_data) {
				$this->cache->set($table . '.' . 'bus_menu.getCat.' . (int)$this->config->get('config_language_id') . '.' . $config_store_id, $cache_data);
			}
		}

		return $cache_data[$id];
	}

	// вывод всех данных
	public function getCats($id = 0,  $table = 'category', $setting = array('cache' => 0, 'level_limit' => 0, 'submanufacturers_status' => false)) {
		$id = (int)$id;
		$table = (isset($table) && in_array($table, array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($table) : 'category');
		$config_language_id = (int)$this->config->get('config_language_id');
		$config_store_id = (int)$this->config->get('config_store_id');
		$level = (isset($setting['level']) && !empty($setting['level']) ? (int)$setting['level'] : 0);
		$level_limit = (isset($setting['level_limit']) && !empty($setting['level_limit']) ? (int)$setting['level_limit'] : 0);
		$limit = (isset($setting['limit']) && !empty($setting['limit']) ? " LIMIT " . (int)$setting['limit'] : false);
		$cache_data = array();

		if ($setting['cache'] == 1) {
			$cache_data = $this->cache->get($table . '.' . 'bus_menu.getCats.' . $id . '.' . $config_language_id . '.' . $config_store_id);
		}

		if (!$cache_data) {
			if ($table == 'blog_category') {
				$select = " c.image, c.top, c.status,";
				$where = " WHERE c.parent_id = '" . $id . "' AND c.status = '1'";
				if (isset($setting['top'])) {
					$where .= " AND c.top = '1'";
				}
				/* if ($level_limit) {
					$select = $select . " (SELECT GROUP_CONCAT(cp.path_id ORDER BY cp.level SEPARATOR '_') FROM " . DB_PREFIX . $table . "_path cp WHERE cp." . $table . "_id = c." . $table . "_id GROUP BY cp." . $table . "_id) AS path,";
					$where = " LEFT JOIN " . DB_PREFIX . $table . "_path cp ON (c." . $table . "_id = cp." . $table . "_id)" . $where . " AND cp.level <= '" . $level_limit . "'";
				} */
			} elseif ($table == 'article') {
				$select = " c.image, c.status,";
				if ($id) {
					$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
				} else {
					$where = " WHERE c." . $table . "_id AND c.status = '1'";
				}
			} elseif ($table == 'information') {
				$select = " '' AS image, c.bottom, cd.title AS name,";
				if ($id) {
					$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
				} else {
					$where = " WHERE c." . $table . "_id AND c.status = '1'";
				}
				if (isset($setting['top'])) {
					$where .= " AND c.bottom = '1'";
				}
			} elseif ($table == 'manufacturer') {
				if ($setting['submanufacturers_status']) {
					$select = " c.image, c.top, c.column, c.status,";
					$where = " WHERE c.parent_id = '" . $id . "' AND c.status = '1'";
					if (isset($setting['top'])) {
						$where .= " AND c.top = '1'";
					}
					/* if ($level_limit) {
						$select = $select . " (SELECT GROUP_CONCAT(cp.path_id ORDER BY cp.level SEPARATOR '_') FROM " . DB_PREFIX . $table . "_path cp WHERE cp." . $table . "_id = c." . $table . "_id GROUP BY cp." . $table . "_id) AS path,";
						$where = " LEFT JOIN " . DB_PREFIX . $table . "_path cp ON (c." . $table . "_id = cp." . $table . "_id)" . $where . " AND cp.level <= '" . $level_limit . "'";
					} */
				} else {
					$select = " c.name, c.image,";
					if ($id) {
						$where = " WHERE c." . $table . "_id = '" . $id . "'";
					} else {
						$where = " WHERE c." . $table . "_id";
					}
				}
			} elseif ($table == 'product') {
				$select = " c.image, c.status,";
				$where = " WHERE c." . $table . "_id = '" . $id . "' AND c.status = '1'";
			} else {
				$select = " c.image, c.top, c.column, c.status,";
				$where = " WHERE c.parent_id = '" . $id . "' AND c.status = '1'";
				if (isset($setting['top'])) {
					$where .= " AND c.top = '1'";
				}
				/* if ($level_limit) {
					$select = $select . " (SELECT GROUP_CONCAT(cp.path_id ORDER BY cp.level SEPARATOR '_') FROM " . DB_PREFIX . $table . "_path cp WHERE cp." . $table . "_id = c." . $table . "_id GROUP BY cp." . $table . "_id) AS path,";
					$where = " LEFT JOIN " . DB_PREFIX . $table . "_path cp ON (c." . $table . "_id = cp." . $table . "_id)" . $where . " AND cp.level <= '" . $level_limit . "'";
				} */
			}

			$cache_data = $this->db->query("SELECT c." . $table . "_id," . $select . " cd.* FROM " . DB_PREFIX . $table . " c LEFT JOIN " . DB_PREFIX . $table . "_description cd ON (c." . $table . "_id = cd." . $table . "_id) LEFT JOIN " . DB_PREFIX . $table . "_to_store c2s ON (c." . $table . "_id = c2s." . $table . "_id)" . $where . " AND cd.language_id = '" . $config_language_id . "' AND c2s.store_id = '" . $config_store_id . "' ORDER BY c.sort_order" . $limit)->rows;
			if ($setting['cache'] == 1 && $cache_data) {
				$this->cache->set($table . '.' . 'bus_menu.getCats.' . $id . '.' . $config_language_id . '.' . $config_store_id, $cache_data);
			}
		}

		return $cache_data;
	}

	// вывод категорий в зависимости от уровня
	public function getCatsLevel($id = 0, $table = 'category', $setting = array('cache' => 0, 'level' => 0, 'submanufacturers_status' => false)) {
		$id = (int)$id;
		$table = (isset($table) && in_array($table, array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($table) : 'category');
		$config_language_id = (int)$this->config->get('config_language_id');
		$config_store_id = (int)$this->config->get('config_store_id');
		$level = (isset($setting['level']) && !empty($setting['level']) ? (int)$setting['level'] : 0);
		$level_limit = (isset($setting['level_limit']) && !empty($setting['level_limit']) ? (int)$setting['level_limit'] : false);
		$limit = (isset($setting['limit']) && !empty($setting['limit']) ? " LIMIT " . (int)$setting['limit'] : false);
		$cache_data = array();

		if (!$cache_data) {
			// текущая категория
			if ($id) {
				$id_now = " AND cp." . $table . "_id != cp.path_id AND cp.path_id = '" . $id . "'";
			} else {
				$id_now = " AND c." . $table . "_id = cp." . $table . "_id AND cp." . $table . "_id = cp.path_id";
			}

			$cache_data = $this->db->query("SELECT *, cd.name, (SELECT GROUP_CONCAT(cp.path_id ORDER BY cp.level SEPARATOR '_') FROM " . DB_PREFIX . $table . "_path cp WHERE cp." . $table . "_id = c." . $table . "_id AND cp.path_id != cp." . $table . "_id GROUP BY cp." . $table . "_id) AS path FROM " . DB_PREFIX . $table . " c LEFT JOIN " . DB_PREFIX . $table . "_path cp ON (c." . $table . "_id = cp." . $table . "_id) LEFT JOIN " . DB_PREFIX . $table . "_description cd ON (c." . $table . "_id = cd." . $table . "_id) LEFT JOIN " . DB_PREFIX . $table . "_to_store c2s ON (c." . $table . "_id = c2s." . $table . "_id) WHERE c.status = '1' AND cd.language_id = '" . $config_language_id . "' AND c2s.store_id = '" . $config_store_id . "' AND cp.level <= " . $level . $id_now . " ORDER BY c.sort_order, LCASE(cd.name)" . $limit)->rows;
			if ($setting['cache'] == 1 && $cache_data) {
				$this->cache->set($table . '.' . 'bus_menu.getCatsLevel.' . $id . '.' . $level . '.' . $config_language_id . '.' . $config_store_id, $cache_data);
			}
		}

		return $cache_data;
	}

	// подсчёт рейтинга
	public function getRatingCount($id, $table = 'category', $setting = array('cache' => 0, 'submanufacturers_status' => false)) {
		$id = (int)$id;
		$table = (isset($table) && in_array($table, array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($table) : 'category');
		$config_language_id = (int)$this->config->get('config_language_id');
		$config_store_id = (int)$this->config->get('config_store_id');
		$cache_data = array();

		if ($setting['cache'] == 1) {
			$cache_data = $this->cache->get($table . '.' . 'bus_menu.getRatingCount.' . $config_store_id);
		}

		if (!isset($cache_data[$id])) {
			if ($table == 'blog_category') {
				$search_table = 'article';
			} else {
				$search_table = 'product';
			}

			$reviews_total = 0;
			$reviews_select = 0;
			$reviews_join = false;
			$viewed_total = 0;
			$viewed_select = 0;
			$viewed_join = false;
			$orders_total = 0;
			$orders_select = 0;
			$orders_join = false;
			$fraction = 0;
			$rating_count_path_not = false;
			if (!empty($setting['rating_count_check'])) {
				if (in_array(1, $setting['rating_count_check'])) {
					if ($search_table == 'article') {
						$reviews_total = "IF(r1.rating_total > 0, r1.rating_total, 0)";
						$reviews_select = "round(IF(AVG(r1.rating) > 0, AVG(r1.rating), 0))";
						$reviews_join = " LEFT JOIN (SELECT AVG(r1.rating) AS rating, COUNT(r1.rating) AS rating_total, r1." . $search_table . "_id, p2m." . $table . "_id FROM " . DB_PREFIX . "review_article r1 LEFT JOIN " . DB_PREFIX . "" . $search_table . "_to_" . $table . " p2m ON (r1." . $search_table . "_id = p2m." . $search_table . "_id AND r1.status = '1') WHERE p2m." . $table . "_id = '" . $id . "' GROUP BY p2m." . $table . "_id) r1 ON (p2m." . $search_table . "_id = r1." . $search_table . "_id)";
						$fraction += 1;
					} else {
						$reviews_total = "IF(r1.rating_total > 0, r1.rating_total, 0)";
						$reviews_select = "round(IF(AVG(r1.rating) > 0, AVG(r1.rating), 0))";
						$reviews_join = " LEFT JOIN (SELECT AVG(r1.rating) AS rating, COUNT(r1.rating) AS rating_total, r1." . $search_table . "_id, p2m." . $table . "_id FROM " . DB_PREFIX . "review r1 LEFT JOIN " . DB_PREFIX . "" . $search_table . "_to_" . $table . " p2m ON (r1." . $search_table . "_id = p2m." . $search_table . "_id AND r1.status = '1') WHERE p2m." . $table . "_id = '" . $id . "' GROUP BY p2m." . $table . "_id) r1 ON (p2m." . $search_table . "_id = r1." . $search_table . "_id)";
						$fraction += 1;
					}
				}
				if (in_array(2, $setting['rating_count_check'])) {
					$viewed_total = "IF(SUM(p.viewed) > 0, SUM(p.viewed), 0)";
					$viewed_max = $this->db->query("SELECT SUM(p.viewed) AS viewed FROM " . DB_PREFIX . "" . $search_table . " p LEFT JOIN " . DB_PREFIX . "" . $search_table . "_to_" . $table . " p2m ON (p." . $search_table . "_id = p2m." . $search_table . "_id) WHERE p2m." . $table . "_id AND p.status = '1' GROUP BY p2m." . $table . "_id ORDER BY SUM(p.viewed) DESC LIMIT 1")->row;
					$viewed_select = "round(IF(SUM(p.viewed) > 0, (5 / " . (isset($viewed_max['viewed']) ? $viewed_max['viewed'] : 0) . " * SUM(p.viewed)), 0))";
					$viewed_join = " LEFT JOIN (SELECT SUM(p.viewed) AS viewed, p." . $search_table . "_id, p2m." . $table . "_id FROM " . DB_PREFIX . "" . $search_table . " p LEFT JOIN " . DB_PREFIX . "" . $search_table . "_to_" . $table . " p2m ON (p." . $search_table . "_id = p2m." . $search_table . "_id AND p.status = '1') WHERE p2m." . $table . "_id = '" . $id . "' GROUP BY p2m." . $table . "_id) p ON (p2m." . $search_table . "_id = p." . $search_table . "_id)";
					$fraction += 1;
				}
				if (($table == 'category' || $table == 'manufacturer') && in_array(3, $setting['rating_count_check'])) {
					$orders_total = "IF(SUM(op.quantity) > 0, SUM(op.quantity), 0)";
					$order_max = $this->db->query("SELECT SUM(op.quantity) AS orders FROM " . DB_PREFIX . "order_product op LEFT JOIN " . DB_PREFIX . "product_to_" . $table . " p2m ON (op.product_id = p2m.product_id) WHERE p2m." . $table . "_id GROUP BY p2m." . $table . "_id ORDER BY SUM(op.quantity) DESC LIMIT 1")->row;
					$orders_select = "round(IF(SUM(op.quantity) > 0, (5 / " . (isset($order_max['orders']) ? $order_max['orders'] : 0) . " * SUM(op.quantity)), 0))";
					$orders_join = " LEFT JOIN (SELECT SUM(op.quantity) AS quantity, op.product_id, p2m." . $table . "_id FROM " . DB_PREFIX . "order_product op LEFT JOIN " . DB_PREFIX . "product_to_" . $table . " p2m ON (op.product_id = p2m.product_id) WHERE p2m." . $table . "_id = '" . $id . "' GROUP BY p2m." . $table . "_id) op ON (p2m.product_id = op.product_id)";
					$fraction += 1;
				}
			} else {
				if ($search_table == 'article') {
					$reviews_total = "IF(r1.rating_total > 0, r1.rating_total, 0)";
					$reviews_select = "round(IF(AVG(r1.rating) > 0, AVG(r1.rating), 0))";
					$reviews_join = " LEFT JOIN (SELECT AVG(r1.rating) AS rating, COUNT(r1.rating) AS rating_total, r1." . $search_table . "_id, p2m." . $table . "_id FROM " . DB_PREFIX . "review_article r1 LEFT JOIN " . DB_PREFIX . "" . $search_table . "_to_" . $table . " p2m ON (r1." . $search_table . "_id = p2m." . $search_table . "_id AND r1.status = '1') WHERE p2m." . $table . "_id = '" . $id . "' GROUP BY p2m." . $table . "_id) r1 ON (p2m." . $search_table . "_id = r1." . $search_table . "_id)";
					$fraction += 1;
				} else {
					$reviews_total = "IF(r1.rating_total > 0, r1.rating_total, 0)";
					$reviews_select = "round(IF(AVG(r1.rating) > 0, AVG(r1.rating), 0))";
					$reviews_join = " LEFT JOIN (SELECT AVG(r1.rating) AS rating, COUNT(r1.rating) AS rating_total, r1." . $search_table . "_id, p2m." . $table . "_id FROM " . DB_PREFIX . "review r1 LEFT JOIN " . DB_PREFIX . "" . $search_table . "_to_" . $table . " p2m ON (r1." . $search_table . "_id = p2m." . $search_table . "_id AND r1.status = '1') WHERE p2m." . $table . "_id = '" . $id . "' GROUP BY p2m." . $table . "_id) r1 ON (p2m." . $search_table . "_id = r1." . $search_table . "_id)";
					$fraction += 1;
				}
			}

			$cache_data[$id] = $this->db->query("SELECT " . $reviews_total . " AS reviews_total, " . $viewed_total . " AS viewed_total, " . $orders_total . " AS orders_total, " . $reviews_select . " AS reviews, " . $viewed_select . " AS viewed, " . $orders_select . " AS orders, round((" . $reviews_select . " + " . $viewed_select . " + " . $orders_select . ") / " . $fraction . ") AS rating_count FROM " . DB_PREFIX . "" . $search_table . "_to_" . $table . " p2m" . $reviews_join . $viewed_join . $orders_join . $rating_count_path_not . " WHERE p2m." . $table . "_id = '" . $id . "'")->row;
			if ($setting['cache'] == 1 && $cache_data) {
				$this->cache->set($table . '.' . 'bus_menu.getRatingCount.' . $config_store_id, $cache_data);
			}
		}

		return $cache_data[$id];
	}

	// подсчёт цены от/до
	public function getPriceCount($id, $table = 'category', $setting = array('cache' => 0, 'submanufacturers_status' => false)) {
		$id = (int)$id;
		$table = (isset($table) && in_array($table, array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($table) : 'category');
		$config_language_id = (int)$this->config->get('config_language_id');
		$config_store_id = (int)$this->config->get('config_store_id');
		$cache_data = array();

		if ($setting['cache'] == 1) {
			$cache_data = $this->cache->get($table . '.' . 'bus_menu.getPriceCount.' . $config_store_id);
		}

		if (!isset($cache_data[$id])) {
			if ($table == 'manufacturer') {
				if ($setting['submanufacturers_status']) {
					$cache_data[$id] = $this->db->query("SELECT IF(MIN(p.price)>0, MIN(p.price), 0) AS min_price, IF(MAX(p.price)>0, MAX(p.price), 0) AS max_price FROM " . DB_PREFIX . "product_to_manufacturer p2c LEFT JOIN " . DB_PREFIX . "product p ON (p.product_id = p2c.product_id AND p.status = '1') WHERE p2c.manufacturer_id = '" . $id . "' LIMIT 1")->row;
				} else {
					$cache_data[$id] = $this->db->query("SELECT IF(MIN(price)>0, MIN(price), 0) AS min_price, IF(MAX(price)>0, MAX(price), 0) AS max_price FROM " . DB_PREFIX . "product WHERE manufacturer_id = '" . $id . "' AND status = '1' AND price > '0'")->row;
				}
			} else {
				$cache_data[$id] = $this->db->query("SELECT IF(MIN(p.price)>0, MIN(p.price), 0) AS min_price, IF(MAX(p.price)>0, MAX(p.price), 0) AS max_price FROM " . DB_PREFIX . "product_to_category p2c LEFT JOIN " . DB_PREFIX . "product p ON (p.product_id = p2c.product_id AND p.status = '1') WHERE p2c.category_id = '" . $id . "' LIMIT 1")->row;
			}

			if ($setting['cache'] == 1 && $cache_data) {
				$this->cache->set($table . '.' . 'bus_menu.getPriceCount.' . $config_store_id, $cache_data);
			}
		}

		return $cache_data[$id];
	}

	// подсчёт категорий
	public function getCatCount($id, $table = 'category', $setting = array('cache' => 0, 'submanufacturers_status' => false)) {
		$id = (int)$id;
		$table = (isset($table) && in_array($table, array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($table) : 'category');
		$config_language_id = (int)$this->config->get('config_language_id');
		$config_store_id = (int)$this->config->get('config_store_id');
		$cache_data = array();

		if ($setting['cache'] == 1) {
			$cache_data = $this->cache->get($table . '.' . 'bus_menu.getCatCount.' . $config_store_id);
		}

		if (!isset($cache_data[$id])) {
			$cache_data[$id] = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . $table . " c LEFT JOIN " . DB_PREFIX . $table . "_to_store c2s ON (c." . $table . "_id = c2s." . $table . "_id) WHERE c.parent_id = '" . $id . "' AND c2s.store_id = '" . $config_store_id . "' AND c.status = '1'")->row['total'];
			if ($setting['cache'] == 1 && $cache_data) {
				$this->cache->set($table . '.' . 'bus_menu.getCatCount.' . $config_store_id, $cache_data);
			}
		}

		return $cache_data[$id];
	}

	// подсчёт товара и статей
	public function getCount($data = array(), $table = 'category', $setting = array('cache' => 0, 'submanufacturers_status' => false)) {
		if (isset($data['filter_cat_id'])) {
			$data['filter_cat_id'] = (int)$data['filter_cat_id'];
			$table = (isset($table) && in_array($table, array('blog_category', 'article', 'information', 'manufacturer', 'product')) ? $this->db->escape($table) : 'category');
			$config_language_id = (int)$this->config->get('config_language_id');
			$config_store_id = (int)$this->config->get('config_store_id');
			$cache_data = array();

			if ($setting['cache'] == 1) {
				$cache_data = $this->cache->get($table . '.' . 'bus_menu.getCount.' . $config_store_id);
			}

			if (!isset($cache_data[$data['filter_cat_id']])) {
				if ($table == 'blog_category') {
					$search_table = 'article';
				} else {
					$search_table = 'product';
				}

				$sql = "SELECT COUNT(DISTINCT p." . $search_table . "_id) AS total";

				if (!empty($data['filter_cat_id']) && ($table == 'blog_category' || $table == 'category' || ($setting['submanufacturers_status'] && $table == 'manufacturer'))) {
					if (!empty($data['filter_sub_cat'])) {
						$sql .= " FROM " . DB_PREFIX . $table . "_path cp LEFT JOIN " . DB_PREFIX . $search_table . "_to_" . $table . " p2c ON (cp." . $table . "_id = p2c." . $table . "_id)";
					} else {
						$sql .= " FROM " . DB_PREFIX . $search_table . "_to_" . $table . " p2c";
					}

					$sql .= " LEFT JOIN " . DB_PREFIX . $search_table . " p ON (p2c." . $search_table . "_id = p." . $search_table . "_id)";
				} else {
					$sql .= " FROM " . DB_PREFIX . $search_table . " p";
				}

				$sql .= " LEFT JOIN " . DB_PREFIX . $search_table . "_to_store p2s ON (p2s." . $search_table . "_id = p." . $search_table . "_id)";
				$sql .= " WHERE  p2s.store_id = '" . $config_store_id . "'";
				$sql .= " AND p.status = '1'";

				if (!empty($data['filter_cat_id']) && ($table == 'blog_category' || $table == 'category')) {
					if (!empty($data['filter_sub_cat'])) {
						$sql .= " AND cp.path_id = '" . $data['filter_cat_id'] . "'";
					} else {
						$sql .= " AND p2c." . $table . "_id = '" . $data['filter_cat_id'] . "'";
					}
				}

				if ($table == 'manufacturer') {
					if ($setting['submanufacturers_status'] && !empty($data['filter_cat_id']) && !empty($data['filter_sub_cat'])) {
						$sql .= " AND cp.path_id = '" . $data['filter_cat_id'] . "'";
					} elseif ($setting['submanufacturers_status'] && !empty($data['filter_cat_id'])) {
						$sql .= " AND p2c.manufacturer_id = '" . $data['filter_cat_id'] . "'";
					} else {
						$sql .= " AND p.manufacturer_id = '" . $data['filter_cat_id'] . "'";
					}
				}

				$cache_data[$data['filter_cat_id']] = $this->db->query($sql)->row['total'];
				if ($setting['cache'] == 1 && $cache_data) {
					$this->cache->set($table . '.' . 'bus_menu.getCount.' . $config_store_id, $cache_data);
				}
			}

			return $cache_data[$data['filter_cat_id']];
		} else {
			return false;
		}
	}
}
