<?php

class ModelCatalogCoolfilter extends Model {

	public function getOptionByCoolfilterGroupsId($coolfilter_group_id, $category_id) {
		
		$coolfilter_group_id = (int)$coolfilter_group_id;
		
		$options_data = array();
		
		if ($this->checkGroup($coolfilter_group_id, $category_id)) {
			
			$options_data = $this->cache->get('option.' . $coolfilter_group_id . '.' . $this->config->get('config_language_id'));

			if(!$options_data && !is_array($options_data)) {
			
				$query = $this->db->query("SELECT co.*, cod.*, stl.style_id, tp.type_index	FROM `" . DB_PREFIX . "category_option` co LEFT JOIN `" . DB_PREFIX . "category_option_description` cod ON (co.option_id = cod.option_id) LEFT JOIN `" . DB_PREFIX . "style_option` stl ON (co.option_id = stl.option_id) LEFT JOIN `" . DB_PREFIX . "type_option` tp ON (co.option_id = tp.option_id) WHERE co.option_id IN (SELECT option_id FROM `" . DB_PREFIX . "coolfilter_group_option_to_coolfilter_group` WHERE coolfilter_group_id = " . $coolfilter_group_id . ") AND co.status = 1 AND cod.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY co.sort_order");
				  
				$options_data = $query->rows;  
				
				$this->cache->set('option.' . $coolfilter_group_id . '.' . $this->config->get('config_language_id'), $options_data);

			}
			
		}
		return $options_data;
	
	}
  
	public function checkGroup ($coolfilter_group_id, $category_id) {
		$query = $this->db->query("SELECT category_id FROM `" . DB_PREFIX . "coolfilter_group_to_category` WHERE coolfilter_group_id = '" . (int)$coolfilter_group_id . "'");
		$group_categories = $query->rows;
		
		if (!empty($group_categories)) {
			$query = $this->db->query("SELECT category_id FROM `" . DB_PREFIX . "coolfilter_group_to_category` WHERE coolfilter_group_id = '" . (int)$coolfilter_group_id . "' AND category_id = '" . $category_id . "'");
			$group_categories = $query->rows;
			if (!empty($group_categories)) {
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	}
  
	public function getManufacterItemNames($categories_id) {
		
		$categories_hash = md5($categories_id);
		
		$cache_data = $this->cache->get('get_manufacter_items_names.' . $categories_hash . '.' . $this->config->get('config_language_id'));
		
		if (!$cache_data && !is_array($cache_data)) {
		
			$query = $this->db->query("SELECT DISTINCT mnf.manufacturer_id as value, mnf.name, mnf.image FROM `" . DB_PREFIX . "manufacturer` mnf LEFT JOIN `" . DB_PREFIX . "product` as prd ON (mnf.manufacturer_id = prd.manufacturer_id) WHERE prd.product_id IN (SELECT product_id FROM `" . DB_PREFIX . "product_to_category` WHERE category_id IN (" . $this->db->escape($categories_id) . ")) ORDER BY mnf.name");
			
			$manufacters = $query->rows;
			
			$this->cache->set('get_manufacter_items_names.' . $categories_hash . '.' . $this->config->get('config_language_id'), $manufacters);
		}
		else {
			$manufacters = $cache_data;
		}
		
		return $manufacters;
	
	}
	
	public function getOptionItemNames($coolfilter_options_id, $categories_id) {
		
		$categories_hash = md5($categories_id);
		$cache_data = $this->cache->get('get_option_items_names.' . $coolfilter_options_id . '.' . $categories_hash . '.' . $this->config->get('config_language_id'));
		
		if (!$cache_data && !is_array($cache_data)) {
		
			$query = $this->db->query("SELECT DISTINCT prd.option_value_id as value, prd.option_id as id, opt.name, opv.image FROM `" . DB_PREFIX . "product_option_value` prd LEFT JOIN `" . DB_PREFIX . "option_value_description` as opt ON (opt.option_value_id=prd.option_value_id AND opt.option_value_id=prd.option_value_id) LEFT JOIN `" . DB_PREFIX . "option_value` as opv ON (opv.option_value_id=prd.option_value_id) WHERE prd.option_id IN (" . $this->db->escape($coolfilter_options_id) . ") AND opt.language_id = '" . (int)$this->config->get('config_language_id') . "' AND prd.product_id IN (SELECT product_id FROM `" . DB_PREFIX . "product_to_category` WHERE category_id IN (" . $this->db->escape($categories_id) . ")) ORDER BY opt.name");
			
			$options = $query->rows;
			$this->cache->get('get_option_items_names.' . $coolfilter_options_id . '.' . $categories_hash . '.' . $this->config->get('config_language_id'), $options);
		}
		else {
			$options = $cache_data;
		}
		
		return $options;
	
	}
	
	 public function getAttributeItemNames($coolfilter_attributes_id, $categories_id) {
			
		$query = $this->db->query("SELECT DISTINCT text as value, attribute_id as id, text as name FROM `" . DB_PREFIX . "product_attribute` WHERE attribute_id IN (" . $this->db->escape($coolfilter_attributes_id) . ") AND language_id = '" . (int)$this->config->get('config_language_id') . "' AND product_id IN (SELECT product_id FROM `" . DB_PREFIX . "product_to_category` WHERE category_id IN (" . $this->db->escape($categories_id) . ")) ORDER BY text");
		
		return $query->rows;
	
	}
	
	
 public function getParametereItemNames($coolfilter_parameteres_id, $categories_id) {

			$sql = "SELECT DISTINCT f.filter_id as value, f.filter_group_id as id,  fd.name as name FROM `" . DB_PREFIX . "filter` f LEFT JOIN " . DB_PREFIX . "filter_description fd ON (f.filter_id = fd.filter_id) LEFT JOIN " . DB_PREFIX . "filter_group fg ON (f.filter_group_id = fg.filter_group_id) WHERE f.filter_group_id IN (" . $this->db->escape($coolfilter_parameteres_id) . ") AND language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY f.sort_order ";
			$query = $this->db->query($sql);
		
	
		return $query->rows;

	
	}
	
	public function getPriceItemNames($categories_id) {
			
		if ($this->customer->isLogged()) {
			$customer_group_id = $this->customer->getCustomerGroupId();
		} else {
			$customer_group_id = $this->config->get('config_customer_group_id');
		}	

		$query = $this->db->query("SELECT MIN(pr.price) as min, MAX(pr.price) as max, MIN((SELECT pd2.price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = pr.product_id AND pd2.customer_group_id = '" . $customer_group_id . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW()))  ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1)) AS discount, MIN((SELECT ps.price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = pr.product_id AND ps.customer_group_id = '" . $customer_group_id . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1)) AS special FROM `" . DB_PREFIX . "product` pr LEFT JOIN `" . DB_PREFIX . "product_to_category` ct ON (pr.product_id = ct.product_id) WHERE pr.status = 1 AND ct.category_id IN (" . $this->db->escape($categories_id) . ") ");
		
		$prices = $query->rows;
		
		$prices[0]['min'] = ($prices[0]['discount'] && $prices[0]['discount'] < $prices[0]['min']) ? $prices[0]['discount'] : $prices[0]['min'];
		$prices[0]['min'] = ($prices[0]['special'] && $prices[0]['special'] < $prices[0]['min']) ? $prices[0]['special'] : $prices[0]['min'];
		
		$prices_value = array(
			0 => array('name' => 'min_price',
					   'value'=> $prices[0]['min'],
					   'image'=> ''),
			1 => array('name' => 'max_price',
					   'value'=> $prices[0]['max'],
					   'image'=> '')
		);
		
		return $prices_value;
	
	}
	
	
	private function getCategoryTree() {
	
		$cache_data = $this->cache->get('category_tree.' . $this->config->get('config_language_id'));
		
		if(!$cache_data && !is_array($cache_data)) {
			
			$query = $this->db->query("SELECT category_id,parent_id FROM `" . DB_PREFIX . "category` ORDER BY parent_id");
			$tree = $query->rows;
			
			$category_tree = array();
			
			foreach($tree as $brench) {
			
				$category_tree[$brench['parent_id']][] = $brench['category_id'];
			
			}
			
			$this->cache->set('category_tree.' . $this->config->get('config_language_id'), $category_tree);
			
		}else{	
			$category_tree = $cache_data; 
		}
		
		
		return $category_tree;
		
	}
	
	
	public function getChildrenCategorie($category_id) {
	
		
		$category_hash = md5($category_id);
		$cache_data = $this->cache->get('get_children_categorie.' . $category_hash . '.' . $this->config->get('config_language_id'));
		
		if(!$cache_data && !is_array($cache_data)) {
			$tree = $this->getCategoryTree();
			$categories = $this->getChildrenRec($category_id, $tree);
			
			$this->cache->set('get_children_categorie.' . $category_hash . '.' . $this->config->get('config_language_id'), $categories);
			
		}
		else {
			$categories = $cache_data;
		}
		
		return $categories;
	
	}
	
	private function getChildrenRec($category_id, $tree) {
		
		$categories = array();
		
		if ( !isset($tree[$category_id]) )
			return $categories;
			
		$level = $tree[$category_id];
		
		for ($i=0; $i < count($level); $i++) {
		
			$children_category_id = $level[$i];
			$categories[] = $children_category_id;
			
			if ( isset($tree[$children_category_id]) ){
				$categories = array_merge_recursive($categories, $this->getChildrenRec($children_category_id, $tree));
			}
			
		}
		
		return $categories;
	}
	
}

?>