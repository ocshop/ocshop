<?php
// *	@copyright	OPENCART.PRO 2011 - 2020.
// *	@forum		http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelBlogArticle extends Model {
	public function updateViewed($article_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "article SET viewed = (viewed + 1) WHERE article_id = '" . (int)$article_id . "'");
	}

	public function getArticle($article_id) {
		$query = $this->db->query("SELECT DISTINCT *, pd.name AS name, p.image, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review_article r1 WHERE r1.article_id = p.article_id AND r1.status = '1' GROUP BY r1.article_id) AS rating, (SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review_article r2 WHERE r2.article_id = p.article_id AND r2.status = '1' GROUP BY r2.article_id) AS reviews, p.sort_order FROM " . DB_PREFIX . "article p LEFT JOIN " . DB_PREFIX . "article_description pd ON (p.article_id = pd.article_id) LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id)  WHERE p.article_id = '" . (int)$article_id . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return array(
				'meta_title'       => $query->row['meta_title'],
				'noindex'          => $query->row['noindex'],
				'meta_h1'          => $query->row['meta_h1'],
				'article_id'       => $query->row['article_id'],
				'name'             => $query->row['name'],
				'description'      => $query->row['description'],
				'meta_description' => $query->row['meta_description'],
				'meta_keyword'     => $query->row['meta_keyword'],
				'image'            => $query->row['image'],
				'rating'           => round($query->row['rating']),
				'reviews'          => $query->row['reviews'],
				'sort_order'       => $query->row['sort_order'],
				'article_review'   => $query->row['article_review'],
				'status'           => $query->row['status'],
				'gstatus'          => $query->row['gstatus'],
				'date_added'       => $query->row['date_added'],
				'date_modified'    => $query->row['date_modified'],
				'viewed'           => $query->row['viewed']
			);
		} else {
			return false;
		}
	}

	public function getArticles($data = array()) {
		$article_data = array();
		$cache = $this->config->get('configblog_cache_status');

		if ($cache) {
			$cache = 'article.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$this->config->get('config_customer_group_id') . '.' . md5(http_build_query($data));

			$article_data = $this->cache->get($cache);
		}

		if (!$article_data) {
			$sql = "SELECT p.article_id, (SELECT AVG(rating) AS total FROM " . DB_PREFIX . "review_article r1 WHERE r1.article_id = p.article_id AND r1.status = '1' GROUP BY r1.article_id) AS rating FROM " . DB_PREFIX . "article p LEFT JOIN " . DB_PREFIX . "article_description pd ON (p.article_id = pd.article_id) LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id)";

			if (!empty($data['filter_blog_category_id'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "article_to_blog_category a2c ON (p.article_id = a2c.article_id)";
			}

			$sql .= " WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'"; 

			if (!empty($data['filter_blog_category_id'])) {
				if (!empty($data['filter_sub_category'])) {
					$implode_data = array();

					$implode_data[] = (int)$data['filter_blog_category_id'];

					$this->load->model('blog/category');

					$categories = $this->model_blog_category->getCategoriesByParentId($data['filter_blog_category_id']);

					foreach ($categories as $blog_category_id) {
						$implode_data[] = (int)$blog_category_id;
					}

					$sql .= " AND a2c.blog_category_id IN (" . implode(', ', $implode_data) . ")";
				} else {
					$sql .= " AND a2c.blog_category_id = '" . (int)$data['filter_blog_category_id'] . "'";
				}
			}

			if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
				$sql .= " AND (";

				if (!empty($data['filter_name'])) {
					$implode = array();

					$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

					foreach ($words as $word) {
						$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
					}

					if ($implode) {
						$sql .= " " . implode(" AND ", $implode) . "";
					}

					if (!empty($data['filter_description'])) {
						$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
					}
				}

				if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
					$sql .= " OR ";
				}

				if (!empty($data['filter_tag'])) {
					$implode = array();

					$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

					foreach ($words as $word) {
						$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
					}

					if ($implode) {
						$sql .= " " . implode(" AND ", $implode) . "";
					}
				}

				$sql .= ")";
			}

			$sql .= " GROUP BY p.article_id";

			$sort_data = array(
				'pd.name',
				//opencart.pro
				'p.viewed',
				'rating',
				'p.sort_order',
				'p.date_added'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				if ($data['sort'] == 'pd.name' || $data['sort'] == 'p.model' || $data['sort'] == 'p.date_added') {
					$sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
				} else {
					$sql .= " ORDER BY " . $data['sort'];
				}
			} else {
				$sql .= " ORDER BY p.sort_order";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC, LCASE(pd.name) DESC";
			} else {
				$sql .= " ASC, LCASE(pd.name) ASC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if (!isset($data['start']) || $data['start'] < 0) {
					$data['start'] = 0;
				}

				if (!isset($data['limit']) || $data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}

			$query = $this->db->query($sql);

			foreach ($query->rows as $result) {
				$article_data[$result['article_id']] = $this->getArticle($result['article_id']);
			}

			if ($cache) {
				$this->cache->set($cache, $article_data);
			}
		}

		return $article_data;
	}

	public function getLatestArticles($limit) {
		$article_data = array();
		$cache = $this->config->get('configblog_cache_status');

		if ($cache) {
			$cache = 'article.latest.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$this->config->get('config_customer_group_id') . '.' . (int)$limit;

			$article_data = $this->cache->get($cache);
		}

		if (!$article_data) {
			$query = $this->db->query("SELECT p.article_id FROM " . DB_PREFIX . "article p LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.date_added DESC LIMIT " . (int)$limit);

			foreach ($query->rows as $result) {
				$article_data[$result['article_id']] = $this->getArticle($result['article_id']);
			}

			if ($cache) {
				$this->cache->set($cache, $article_data);
			}
		}

		return $article_data;
	}

	public function getPopularArticles($limit) {
		$article_data = array();

		$query = $this->db->query("SELECT p.article_id FROM " . DB_PREFIX . "article p LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.viewed DESC, p.date_added DESC LIMIT " . (int)$limit);

		foreach ($query->rows as $result) {
			$article_data[$result['article_id']] = $this->getArticle($result['article_id']);
		}

		return $article_data;
	}

	public function getArticleImages($article_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_image WHERE article_id = '" . (int)$article_id . "' ORDER BY sort_order ASC");

		return $query->rows;
	}

	public function getArticleRelated($article_id) {
		$article_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_related pr LEFT JOIN " . DB_PREFIX . "article p ON (pr.related_id = p.article_id) LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id) WHERE pr.article_id = '" . (int)$article_id . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		foreach ($query->rows as $result) {
			$article_data[$result['related_id']] = $this->getArticle($result['related_id']);
		}

		return $article_data;
	}

	public function getArticleRelatedByProduct($data) {
		$article_data = array();

		$sql = "SELECT * FROM " . DB_PREFIX . "product_related_article np LEFT JOIN " . DB_PREFIX . "article p ON (np.article_id = p.article_id) LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id) WHERE np.product_id = '" . (int)$data['product_id'] . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' LIMIT ". (int)$data['limit'];

		$query = $this->db->query($sql);

		foreach ($query->rows as $result) {
			$article_data[$result['article_id']] = $this->getArticle($result['article_id']);
		}

		return $article_data;
	}

	public function getArticleRelatedByCategory($data) {
		$article_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_related_wb pr LEFT JOIN " . DB_PREFIX . "article p ON (pr.article_id = p.article_id) LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id) WHERE pr.category_id = '" . (int)$data['category_id'] . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' LIMIT " . (int)$data['limit']);

		foreach ($query->rows as $result) {
			$article_data[$result['article_id']] = $this->getArticle($result['article_id']);
		}

		return $article_data;
	}

	public function getArticleRelatedByManufacturer($data) {
		$article_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_related_mn pr LEFT JOIN " . DB_PREFIX . "article p ON (pr.article_id = p.article_id) LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id) WHERE pr.manufacturer_id = '" . (int)$data['manufacturer_id'] . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' LIMIT " . (int)$data['limit']); 

		foreach ($query->rows as $result) {
			$article_data[$result['article_id']] = $this->getArticle($result['article_id']);
		}

		return $article_data;
	}

	public function getArticleRelatedProduct($article_id) {
		$this->load->model('catalog/product');

		$product_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_related_product np LEFT JOIN " . DB_PREFIX . "product p ON (np.product_id = p.product_id) LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE np.article_id = '" . (int)$article_id . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'");

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->model_catalog_product->getProduct($result['product_id']);
		}

		return $product_data;
	}

	public function getArticleLayoutId($article_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_to_layout WHERE article_id = '" . (int)$article_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return $query->row['layout_id'];
		} else {
			return  $this->config->get('config_layout_article');
		}
	}

	public function getCategories($article_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_to_blog_category WHERE article_id = '" . (int)$article_id . "'");

		return $query->rows;
	}

	public function getDownloads($article_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_to_download pd LEFT JOIN " . DB_PREFIX . "download d ON(pd.download_id = d.download_id) LEFT JOIN " . DB_PREFIX . "download_description dd ON (pd.download_id = dd.download_id) WHERE article_id = '" . (int)$article_id . "' AND dd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->rows;
	}

	public function getDownload($article_id, $download_id = false) {
		if ($download_id) {
			$download = " AND d.download_id = " . (int)$download_id;
		}

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "article_to_download pd LEFT JOIN " . DB_PREFIX . "download d ON(pd.download_id = d.download_id) LEFT JOIN " . DB_PREFIX . "download_description dd ON (pd.download_id = dd.download_id) WHERE article_id = '" . (int)$article_id . "'" . $download . " AND dd.language_id = '" . (int)$this->config->get('config_language_id') . "'");

		return $query->row;
	}

	public function getTotalArticles($data = array()) {
		$article_data = false;
		//$cache = $this->config->get('configblog_cache_status');
		$cache = false;

		if ($cache) {
			$cache = 'article.total.' . (int)$this->config->get('config_language_id') . '.' . (int)$this->config->get('config_store_id') . '.' . (int)$this->config->get('config_customer_group_id') . '.' . md5(http_build_query($data));

			$article_data = $this->cache->get($cache);
		}

		if (!$article_data) {
			$sql = "SELECT COUNT(DISTINCT p.article_id) AS total FROM " . DB_PREFIX . "article p LEFT JOIN " . DB_PREFIX . "article_description pd ON (p.article_id = pd.article_id) LEFT JOIN " . DB_PREFIX . "article_to_store p2s ON (p.article_id = p2s.article_id)";

			if (!empty($data['filter_blog_category_id'])) {
				$sql .= " LEFT JOIN " . DB_PREFIX . "article_to_blog_category a2c ON (p.article_id = a2c.article_id)";
			}

			$sql .= " WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "'";

			if (!empty($data['filter_blog_category_id'])) {
				if (!empty($data['filter_sub_blog_category'])) {
					$implode_data = array();

					$implode_data[] = (int)$data['filter_blog_category_id'];

					$this->load->model('blog/category');

					$categories = $this->model_blog_category->getCategoriesByParentId($data['filter_blog_category_id']);

					foreach ($categories as $blog_category_id) {
						$implode_data[] = (int)$blog_category_id;
					}

					$sql .= " AND a2c.blog_category_id IN (" . implode(', ', $implode_data) . ")";
				} else {
					$sql .= " AND a2c.blog_category_id = '" . (int)$data['filter_blog_category_id'] . "'";
				}
			}

			if (!empty($data['filter_name']) || !empty($data['filter_tag'])) {
				$sql .= " AND (";

				if (!empty($data['filter_name'])) {
					$implode = array();

					$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_name'])));

					foreach ($words as $word) {
						$implode[] = "pd.name LIKE '%" . $this->db->escape($word) . "%'";
					}

					if ($implode) {
						$sql .= " " . implode(" AND ", $implode) . "";
					}

					if (!empty($data['filter_description'])) {
						$sql .= " OR pd.description LIKE '%" . $this->db->escape($data['filter_name']) . "%'";
					}
				}

				if (!empty($data['filter_name']) && !empty($data['filter_tag'])) {
					$sql .= " OR ";
				}

				if (!empty($data['filter_tag'])) {
					$implode = array();

					$words = explode(' ', trim(preg_replace('/\s+/', ' ', $data['filter_tag'])));

					foreach ($words as $word) {
						$implode[] = "pd.tag LIKE '%" . $this->db->escape($word) . "%'";
					}

					if ($implode) {
						$sql .= " " . implode(" AND ", $implode) . "";
					}
				}

				$sql .= ")";
			}

			$query = $this->db->query($sql);

			$article_data = $query->row['total'];

			if ($cache) {
				$this->cache->set($cache, $article_data);
			}
		}

		return $article_data;
	}
}