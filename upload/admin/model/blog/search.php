<?php
// *	@copyright	OPENCART.PRO 2011 - 2020.
// *	@forum		http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelBlogSearch extends Model {
	public function clear() {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_blog_search` WHERE customer_blog_search_id");
	}

	public function getCustomerSearches($data = array()) {
		$sql = "SELECT cbs.store_id, cbs.language_id, cbs.customer_id, cbs.keyword, cbs.blog_category_id, cbs.sub_category, cbs.description, cbs.articles, cbs.ip, cbs.date_added, CONCAT(c.firstname, ' ', c.lastname) AS customer FROM `" . DB_PREFIX . "customer_blog_search` cbs LEFT JOIN " . DB_PREFIX . "customer c ON (cbs.customer_id = c.customer_id)";

		$implode = array();

		if (!empty($data['filter_date_start'])) {
			$implode[] = "DATE(cbs.date_added) >= '" . $this->db->escape($data['filter_date_start']) . "'";
		}

		if (!empty($data['filter_date_end'])) {
			$implode[] = "DATE(cbs.date_added) <= '" . $this->db->escape($data['filter_date_end']) . "'";
		}

		if (!empty($data['filter_store']) && $data['filter_store'] >= 0) {
			$implode[] = "cbs.store_id = '" . (int)$data['filter_store'] . "'";
		}

		if (!empty($data['filter_language'])) {
			$implode[] = "cbs.language_id = '" . (int)$data['filter_language'] . "'";
		}

		if (!empty($data['filter_keyword'])) {
			$implode[] = "cbs.keyword LIKE '" . $this->db->escape($data['filter_keyword']) . "%'";
		}

		if (!empty($data['filter_customer'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '" . $this->db->escape($data['filter_customer']) . "'";
		}

		if (!empty($data['filter_ip'])) {
			$implode[] = "cbs.ip LIKE '" . $this->db->escape($data['filter_ip']) . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$sql .= " ORDER BY cbs.date_added DESC";

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

		return $query->rows;
	}

	public function getTotalCustomerSearches($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "customer_blog_search` cbs LEFT JOIN " . DB_PREFIX . "customer c ON (cbs.customer_id = c.customer_id)";

		$implode = array();

		if (!empty($data['filter_date_start'])) {
			$implode[] = "DATE(cbs.date_added) >= '" . $this->db->escape($data['filter_date_start']) . "'";
		}

		if (!empty($data['filter_date_end'])) {
			$implode[] = "DATE(cbs.date_added) <= '" . $this->db->escape($data['filter_date_end']) . "'";
		}

		if (!empty($data['filter_store']) && $data['filter_store'] >= 0) {
			$implode[] = "cbs.store_id = '" . (int)$data['filter_store'] . "'";
		}

		if (!empty($data['filter_language'])) {
			$implode[] = "cbs.language_id = '" . (int)$data['filter_language'] . "'";
		}

		if (!empty($data['filter_keyword'])) {
			$implode[] = "cbs.keyword LIKE '" . $this->db->escape($data['filter_keyword']) . "%'";
		}

		if (!empty($data['filter_customer'])) {
			$implode[] = "CONCAT(c.firstname, ' ', c.lastname) LIKE '" . $this->db->escape($data['filter_customer']) . "'";
		}

		if (!empty($data['filter_ip'])) {
			$implode[] = "cbs.ip LIKE '" . $this->db->escape($data['filter_ip']) . "'";
		}

		if ($implode) {
			$sql .= " WHERE " . implode(" AND ", $implode);
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
}