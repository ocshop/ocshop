<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelToolSeoManager extends Model {
	public function updateUrlAlias($data) {
		if ($data['query']) {
			if (strrpos($data['query'], '/') === false) {
				$seomanager = 0;
			} else {
				$seomanager = 1;
			}

			if ((int)$data['url_alias_id']) {
				$this->db->query("UPDATE `" . DB_PREFIX . "url_alias` SET `query` = '" . $this->db->escape($data['query']) . "', `keyword` = '" . $this->db->escape($data['keyword']) . "' WHERE `url_alias_id` = '" . (int)$data['url_alias_id'] . "'");
			} else {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "url_alias` SET `query` = '" .  $this->db->escape($data['query']) . "', `keyword` = '" . $this->db->escape($data['keyword']) . "', `seomanager` = '" . $seomanager . "'");
			}

			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url');
		}
	}

	public function deleteUrlAlias($url_alias_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "url_alias` WHERE `url_alias_id` = '" . (int)$url_alias_id . "'");

		$this->cache->delete('seo_pro');
		$this->cache->delete('seo_url');
	}

	public function getUrlAaliases($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM `" . DB_PREFIX . "url_alias` ua";

			$implode = array();
			$singl = " AND ";

			if (!empty($data['filter_query'])) {
				//$implode[] = "ua.query = '" . $this->db->escape($data['filter_query']) . "'";
				$implode[] = "ua.query LIKE '" . $this->db->escape($data['filter_query']) . "%'";
			}

			if (!empty($data['filter_keyword'])) {
				//$implode[] = "ua.keyword = '" . $this->db->escape($data['filter_keyword']) . "'";
				$implode[] = "ua.keyword LIKE '" . $this->db->escape($data['filter_keyword']) . "%'";
			}

			if (isset($data['filter_additional']) && $data['filter_additional'] >= 0) {
				if ($data['filter_additional'] == 2) {
					$implode = array();
					$singl = " OR ";

					$keywords = $this->db->query("SELECT `keyword`, count(keyword) AS duble FROM `" . DB_PREFIX . "url_alias` GROUP BY `keyword` HAVING duble > 1");

					foreach ($keywords->rows as $keyword) {
						$implode[] = "ua.keyword = '" . $this->db->escape($keyword['keyword']) . "'";
					}

					if (!$implode) {
						$singl = " AND ";
						$implode[] = "ua.keyword = 'BuslikDrev'";
					}
				} else {
					$implode[] = "ua.seomanager = '" . (int)$data['filter_additional'] . "'";
				}
			}

			if ($implode) {
				if ($singl) {
					$sql .= " WHERE " . implode($singl, $implode);
				}
			}

			$sort_data = array('ua.query', 'ua.keyword');

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY ua.query";
			}

			if (isset($data['order']) && ($data['order'] == 'ASC')) {
				$sql .= " ASC";
			} else {
				$sql .= " DESC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}

			$query = $this->db->query($sql);

			return  $query->rows;
		} else {
			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "url_alias` ua WHERE ua.seomanager = '1' ORDER BY ua.query");

			return $query->rows;
		}
	}

	public function getTotalUrlAalias($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "url_alias` ua";

		$implode = array();
		$singl = " AND ";

		if (!empty($data['filter_query'])) {
			//$implode[] = "ua.query = '" . $this->db->escape($data['filter_query']) . "'";
			$implode[] = "ua.query LIKE '" . $this->db->escape($data['filter_query']) . "%'";
		}

		if (!empty($data['filter_keyword'])) {
			//$implode[] = "ua.keyword = '" . $this->db->escape($data['filter_keyword']) . "'";
			$implode[] = "ua.keyword LIKE '" . $this->db->escape($data['filter_keyword']) . "%'";
		}

		if (isset($data['filter_additional']) && $data['filter_additional'] >= 0) {
			if ($data['filter_additional'] == 2) {
				$implode = array();
				$singl = " OR ";

				$keywords = $this->db->query("SELECT `keyword`, count(keyword) AS duble FROM `" . DB_PREFIX . "url_alias` GROUP BY `keyword` HAVING duble > 1");

				foreach ($keywords->rows as $keyword) {
					$implode[] = "ua.keyword = '" . $this->db->escape($keyword['keyword']) . "'";
				}

				if (!$implode) {
					$singl = " AND ";
					$implode[] = "ua.keyword = 'BuslikDrev'";
				}
			} else {
				$implode[] = "ua.seomanager = '" . (int)$data['filter_additional'] . "'";
			}
		}

		if ($implode) {
			if ($singl) {
				$sql .= " WHERE " . implode($singl, $implode);
			}
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function updateSeoTag($data) {
		if ((int)$data['seo_tag_id']) {
			$this->db->query("UPDATE `" . DB_PREFIX . "pro_seo_tag` SET query = '" . $this->db->escape($data['query']) . "', view = '" . $this->db->escape($data['view']) . "', status = '" . (int)$data['status'] . "', date_modified = NOW() WHERE seo_tag_id = '" . (int)$data['seo_tag_id'] . "'");

			$this->db->query("DELETE FROM " . DB_PREFIX . "pro_seo_tag_description WHERE seo_tag_id = '" . (int)$data['seo_tag_id'] . "'");

			foreach ($data['meta'] as $language_id => $meta) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "pro_seo_tag_description` SET seo_tag_id = '" . (int)$data['seo_tag_id'] . "', language_id = '" . (int)$language_id . "', meta_h1 = '" .  $this->db->escape($meta['meta_h1']) . "', meta_title = '" .  $this->db->escape($meta['meta_title']) . "', meta_description = '" .  $this->db->escape($meta['meta_description']) . "', meta_keyword = '" .  $this->db->escape($meta['meta_keyword']) . "', description = '" .  $this->db->escape($meta['description']) . "', description_bottom = '" .  $this->db->escape($meta['description_bottom']) . "'");
			}
		} else {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "pro_seo_tag` SET query = '" . $this->db->escape($data['query']) . "', view = '" . $this->db->escape($data['view']) . "', status = '" . (int)$data['status'] . "', date_added = NOW(), date_modified = NOW()");

			$data['seo_tag_id'] = $this->db->getLastId();

			foreach ($data['meta'] as $language_id => $meta) {
				$this->db->query("INSERT INTO `" . DB_PREFIX . "pro_seo_tag_description` SET seo_tag_id = '" . (int)$data['seo_tag_id'] . "', language_id = '" . (int)$language_id . "', meta_h1 = '" .  $this->db->escape($meta['meta_h1']) . "', meta_title = '" .  $this->db->escape($meta['meta_title']) . "', meta_description = '" .  $this->db->escape($meta['meta_description']) . "', meta_keyword = '" .  $this->db->escape($meta['meta_keyword']) . "', description = '" .  $this->db->escape($meta['description']) . "', description_bottom = '" .  $this->db->escape($meta['description_bottom']) . "'");
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "pro_seo_tag_to_store WHERE seo_tag_id = '" . (int)$data['seo_tag_id'] . "'");

		if (isset($data['store'])) {
			foreach ($data['store'] as $store_id) {
				$this->db->query("INSERT INTO " . DB_PREFIX . "pro_seo_tag_to_store SET seo_tag_id = '" . (int)$data['seo_tag_id'] . "', store_id = '" . (int)$store_id . "'");
			}
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "url_alias WHERE query = '" . $this->db->escape($data['query']) . "'");

		if (!empty($data['keyword'])) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "url_alias SET query = '" . $this->db->escape($data['query']) . "', keyword = '" . $this->db->escape($data['keyword']) . "', seomanager = '1'");
		}

		$this->cache->delete('seo_pro');
		$this->cache->delete('seo_url');
	}

	public function deleteSeoTag($seo_tag_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "pro_seo_tag` WHERE seo_tag_id = '" . (int)$seo_tag_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "pro_seo_tag_description` WHERE seo_tag_id = '" . (int)$seo_tag_id . "'");
		$this->db->query("DELETE FROM `" . DB_PREFIX . "pro_seo_tag_to_store` WHERE seo_tag_id = '" . (int)$seo_tag_id . "'");
	}

	public function getSeoTag($seo_tag_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "pro_seo_tag` st LEFT JOIN `" . DB_PREFIX . "pro_seo_tag_description` std ON (st.seo_tag_id = std.seo_tag_id) WHERE st.seo_tag_id = '" . (int)$seo_tag_id . "' AND std.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getSeoTagMeta($seo_tag_id) {
		$seo_tag_meta_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "pro_seo_tag_description WHERE seo_tag_id = '" . (int)$seo_tag_id . "'");

		foreach ($query->rows as $result) {
			$seo_tag_meta_data[$result['language_id']] = array(
				'meta_h1'            => $result['meta_h1'],
				'meta_title'         => $result['meta_title'],
				'meta_description'   => $result['meta_description'],
				'meta_keyword'       => $result['meta_keyword'],
				'description'        => $result['description'],
				'description_bottom' => $result['description_bottom']
			);
		}

		return $seo_tag_meta_data;
	}

	public function getSeoTagStores($seo_tag_id) {
		$seo_tag_store_data = array();

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "pro_seo_tag_to_store` WHERE seo_tag_id = '" . (int)$seo_tag_id . "'");

		foreach ($query->rows as $result) {
			$seo_tag_store_data[] = $result['store_id'];
		}

		return $seo_tag_store_data;
	}

	public function getSeoTags($data = array()) {
		$sql = "SELECT *, (SELECT DISTINCT keyword FROM `" . DB_PREFIX . "url_alias` WHERE query = st.query LIMIT 1) AS keyword FROM `" . DB_PREFIX . "pro_seo_tag` st LEFT JOIN `" . DB_PREFIX . "pro_seo_tag_description` std ON (st.seo_tag_id = std.seo_tag_id)";

		$implode = array();
		$singl = " AND ";

		$implode[] = " std.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_store']) && $data['filter_store'] >= 0) {
			$sql .= " LEFT JOIN `" . DB_PREFIX . "pro_seo_tag_to_store` stts ON (st.seo_tag_id = stts.seo_tag_id)";
			$implode[] = "stts.store_id = '" . $this->db->escape($data['filter_store']) . "'";
		}

		if (!empty($data['filter_query'])) {
			//$implode[] = "st.query = '" . $this->db->escape($data['filter_query']) . "'";
			$implode[] = "st.query LIKE '" . $this->db->escape($data['filter_query']) . "%'";
		}

		if (!empty($data['filter_keyword'])) {
			$sql .= " LEFT JOIN (SELECT DISTINCT keyword, query FROM `" . DB_PREFIX . "url_alias`) ua ON (ua.query = st.query)";
			//$implode[] = "ua.keyword = '" . $this->db->escape($data['filter_keyword']) . "'";
			$implode[] = "ua.keyword LIKE '" . $this->db->escape($data['filter_query']) . "%'";
		}

		if ($implode) {
			if ($singl) {
				$sql .= " WHERE " . implode($singl, $implode);
			}
		}

		$sort_data = array('st.store, st.query, st.keyword');

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY std.seo_tag_id";
		}

		if (isset($data['order']) && ($data['order'] == 'ASC')) {
			$sql .= " ASC";
		} else {
			$sql .= " DESC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return  $query->rows;
	}

	public function getTotalSeoTags($data = array()) {
		$sql = "SELECT COUNT(*) AS total, (SELECT DISTINCT keyword FROM `" . DB_PREFIX . "url_alias` WHERE query = st.query LIMIT 1) AS keyword FROM `" . DB_PREFIX . "pro_seo_tag` st LEFT JOIN `" . DB_PREFIX . "pro_seo_tag_description` std ON (st.seo_tag_id = std.seo_tag_id)";

		$implode = array();
		$singl = " AND ";

		$implode[] = " std.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_store']) && $data['filter_store'] >= 0) {
			$sql .= " LEFT JOIN `" . DB_PREFIX . "pro_seo_tag_to_store` stts ON (st.seo_tag_id = stts.seo_tag_id)";
			$implode[] = "stts.store_id = '" . $this->db->escape($data['filter_store']) . "'";
		}

		if (!empty($data['filter_query'])) {
			//$implode[] = "st.query = '" . $this->db->escape($data['filter_query']) . "'";
			$implode[] = "st.query LIKE '" . $this->db->escape($data['filter_query']) . "%'";
		}

		if (!empty($data['filter_keyword'])) {
			$sql .= " LEFT JOIN (SELECT DISTINCT keyword, query FROM `" . DB_PREFIX . "url_alias`) ua ON (ua.query = st.query)";
			//$implode[] = "ua.keyword = '" . $this->db->escape($data['filter_keyword']) . "'";
			$implode[] = "ua.keyword LIKE '" . $this->db->escape($data['filter_query']) . "%'";
		}

		if ($implode) {
			if ($singl) {
				$sql .= " WHERE " . implode($singl, $implode);
			}
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
}
