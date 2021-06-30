<?php
// *	@copyright	OPENCART.PRO 2011 - 2020.
// *	@forum		http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionModuleCustommenu extends Controller {
	public function index($setting = array()) {
		$this->load->model('design/custommenu');

		$this->load->model('catalog/product');

		$categories_data = array();

		$custommenus = $this->model_design_custommenu->getcustommenus();

		$custommenu_child = $this->model_design_custommenu->getChildcustommenus();

		foreach($custommenus as $id => $custommenu) {
			$children_data = array();

			foreach($custommenu_child as $child_id => $child_custommenu) {
				if (($custommenu['custommenu_id'] != $child_custommenu['custommenu_id']) or !is_numeric($child_id)) {
					continue;
				}

				$child_name = '';

				if (($custommenu['custommenu_type'] == 'category') and ($child_custommenu['custommenu_type'] == 'category')) {
					$filter_data = array(
						'filter_category_id'  => $child_custommenu['link'],
						'filter_sub_category' => true
					);

					$child_name = ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : '');
				}

				$children_data[] = array(
					'name' => $child_custommenu['name'] . $child_name,
					'href' => $this->getcustommenuLink($custommenu, $child_custommenu)
				);
			}

			$categories_data[] = array(
				'name'     => $custommenu['name'],
				'children' => $children_data,
				'column'   => $custommenu['columns'] ? $custommenu['columns'] : 1,
				'href'     => $this->getcustommenuLink($custommenu)
			);
		}

		return $categories_data;
	}

	private function getcustommenuLink($parent, $child = null) {
		if ($this->config->get('configcustommenu_custommenu')) {
			$item = empty($child) ? $parent : $child;

			switch ($item['custommenu_type']) {
				case 'category':
					$route = 'product/category';

					if (!empty($child)) {
						$args = 'path=' . $parent['link'] . '_' . $item['link'];
					} else {
						$args = 'path=' . $item['link'];
					}
					break;
				case 'product':
					$route = 'product/product';
					$args = 'product_id=' . $item['link'];
					break;
				case 'manufacturer':
					$route = 'product/manufacturer/info';
					$args = 'manufacturer_id=' . $item['link'];
					break;
				case 'information':
					$route = 'information/information';
					$args = 'information_id=' . $item['link'];
					break;
				default:
					$tmp = explode('&', str_replace('index.php?route=', '', $item['link']));

					if (!empty($tmp)) {
						$route = $tmp[0];
						unset($tmp[0]);
						$args = (!empty($tmp)) ? implode('&', $tmp) : '';
					} else {
						$route = $item['link'];
						$args = '';
					}
				break;
			}

			$check = stripos($item['link'], 'http');
			$checkbase = strpos($item['link'], '/');
			if ( $check === 0 || $checkbase === 0 ) {
				$link = $item['link'];
			} else {
				$link = $this->url->link($route, $args);
			}

			return $link;
		}
	}
}