<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2022; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ )

if (version_compare(VERSION, '4.0.0', '>=')) {
	//class ControllerModuleBusMenu extends ControllerExtensionModuleBusMenu {}
}

if (version_compare(VERSION, '2.3.0', '<')) {
	class ControllerModuleBusMenu extends ControllerExtensionModuleBusMenu {}
}

class ControllerExtensionModuleBusMenu extends Controller {
	private $version_oc = 2.3;
	private $paths = array();

	public function __construct($foo) {
		parent::__construct($foo);
		if (version_compare(VERSION, '3.0.0', '>=')) {
			$this->version_oc = 3;
			$this->paths = array(
				'controller' => array(
					'bus_menu' => 'extension/module/bus_menu',
				),
				'language' => array(
					'bus_menu' => 'extension/module/bus_menu',
				),
				'model' => array(
					'bus_menu' => 'extension/module/bus_menu',
					'bus_menu_path' => 'model_extension_module_bus_menu',
				),
				'view' => array(
					'bus_menu' => 'extension/module/bus_menu',
				)
			);
		} elseif (version_compare(VERSION, '2.3.0', '>=')) {
			$this->version_oc = 2.3;
			$this->paths = array(
				'controller' => array(
					'bus_menu' => 'extension/module/bus_menu',
				),
				'language' => array(
					'bus_menu' => 'extension/module/bus_menu',
				),
				'model' => array(
					'bus_menu' => 'extension/module/bus_menu',
					'bus_menu_path' => 'model_extension_module_bus_menu',
				),
				'view' => array(
					'bus_menu' => 'extension/module/bus_menu',
				)
			);
		} else {
			$this->version_oc = 2;
			$this->paths = array(
				'controller' => array(
					'bus_menu' => 'module/bus_menu',
				),
				'language' => array(
					'bus_menu' => 'module/bus_menu',
				),
				'model' => array(
					'bus_menu' => 'module/bus_menu',
					'bus_menu_path' => 'model_module_bus_menu',
				),
				'view' => array(
					'bus_menu' => 'module/bus_menu',
				)
			);
		}
	}

    /* public function event(&$route, &$data, &$output) {
		if ($route != $this->paths['model']['bus_menu'] . '/ajax' && preg_match_all('/(bus-gmaps[^"]{0,15})/i', $output, $maps)) {
			$output = str_replace('</body>', $this->index($maps, $route) . "\r\n" . '</body>', $output);
		}
    } */

	private function getCats($cats = array(), $setting = array()) {
		if (!isset($setting['level'])) {
			$setting['level'] = 1;
		}
		$level = $setting['level'];
		if (!isset($setting['path'])) {
			$setting['path'] = 0;
		}
		$path = $setting['path'];

		$submanufacturers_status = false;
		$level_new = $level + 1;
		$level_limit = $level - 1;

		if ($setting['image_status']) {
			if ($level < 3) {
				$setting['width_1'] = $setting['width_' . $level];
				$setting['height_1'] = $setting['height_' . $level];
				$setting['name_status_1'] = $setting['name_status_' . $level];
			} else {
				$setting['width_1'] = $setting['width_3'];
				$setting['height_1'] = $setting['height_3'];
				$setting['name_status_1'] = $setting['name_status_3'];
			}
		}

		$set_rating_count = $setting['rating_count'];
		if ($setting['rating_count_path_not']) {
			if ($setting['type'] && $level > 1) {
				$set_rating_count = false;
			} elseif (!$setting['type'] && $level <> 2) {
				$set_rating_count = false;
			}
		} else {
			if (!$setting['type'] && $level == 1) {
				$set_rating_count = false;
			}
		}

		$set_price_count = $setting['price_count'];
		if ($setting['price_count_path_not'] && $level > 1) {
			$set_price_count = false;
		}

		$language_id = $this->config->get('config_language_id');
		$tax = $this->config->get('config_tax');
		$currency = $this->session->data['currency'];
		$customer_price = $this->config->get('config_customer_price');

		$data = array();

		foreach ($cats as $cat) {
			$status = (!isset($cat['image_status']) || !empty($cat['status']) ? true : false);

			if (!$setting['cats_status'] && !$setting['type']) {
				if (isset($cat['bottom'])) {
					$status = ($cat['bottom'] ? true : false);
				} elseif (isset($cat['top'])) {
					$status = ($cat['top'] ? true : false);
				}
			}

			if ($status) {
				if ($setting['cats_status']) {
					//получаем данные из модуля - свои поля
					if ($setting['group_status'] || !empty($cat['query']) && (empty($cat['title']) || empty($cat['desc']) || empty($cat['name'][$language_id]) || empty($cat['link'][$language_id]))) {
						if ($setting['group_status']) {
							$table = $setting['group_status'];
							$sql_table = $table;
							$parameter = $table . '_id';
							if ($table == 'path') {
								$sql_table = 'category';
								$parameter = $table;
							}
							$cat['query'] =  $parameter . '=' . $cat[$sql_table . '_id'];
							$cat['category_id'] = $cat[$sql_table . '_id'];
						} else {
							$queries = explode('=', $cat['query']);
							$table = str_replace('_id', '', $queries[0]);
							$sql_table = $table;
							$cat['category_id'] = $queries[1];
						}

						if ($table == 'blog_category') {
							$route = 'blog/category';
						} elseif ($table == 'article') {
							$route = 'blog/article';
						} elseif ($table == 'information') {
							$route = 'information/information';
						} elseif ($table == 'manufacturer') {
							$route = 'product/manufacturer/info';
						} else {
							if ($table == 'path') {
								$sql_table = 'category';
							}

							$route = 'product/' . $sql_table;
						}

						if ($setting['group_status']) {
							$cat_info = $cat;
							unset($cat['title'], $cat['desc'], $cat['name'], $cat['link']);
						} else {
							$cat_info = ($setting['seo_then'] ? $this->{$this->paths['model']['bus_menu_path']}->getCat($cat['category_id'], $sql_table, array('cache' => $setting['cache'], 'submanufacturers_status' => $submanufacturers_status)) : false);
						}

						$image_status = (!empty($cat['image_status']) ? $cat['image_status'] : ($setting['group_status'] ? $setting['group_image_status'] : false));
						$image = (!empty($cat['image']) ? $cat['image'] : (!empty($cat_info['image']) ? $cat_info['image'] : false));
						$image_position = (!empty($cat['image_position']) ? $cat['image_position'] : 1);
						$sticker = (!empty($cat['sticker']) && is_file(DIR_IMAGE . $cat['sticker']) ? $setting['server'] . 'image/' . $cat['sticker'] : false);
						$sticker_position = (!empty($cat['sticker_position']) ? $cat['sticker_position'] : 6);
						$title = (!empty($cat['title'][$language_id]) ? $cat['title'][$language_id] : (!empty($cat_info['title']) ? $cat_info['title'] : false));
						$description = (!empty($cat['desc'][$language_id]) ? $cat['desc'][$language_id] : (!empty($cat_info['description_mini']) ? $cat_info['description_mini'] : (!empty($cat_info['description']) ? $cat_info['description'] : false)));
						if ($setting['path_status'] && $level_limit < $setting['path_lvl_limit']) {
							if (!empty($cat['group_status']) || $setting['group_status']) {
								if ($setting['path_lvl']) {
									//$children = $this->{$this->paths['model']['bus_menu_path']}->getCatsLevel($cat['category_id'], $sql_table, array('cache' => $setting['cache'], 'level' => $setting['path_lvl'], 'submanufacturers_status' => $submanufacturers_status, 'limit' => $setting['path_limit']));
									$children = $this->{$this->paths['model']['bus_menu_path']}->getCatsLevel($cat['category_id'], $sql_table, array('cache' => $setting['cache'], 'level' => 0, 'submanufacturers_status' => $submanufacturers_status, 'limit' => $setting['path_limit']));
									$path_new = (!empty($cat['path']) ? $cat['path'] . '_' . $cat['category_id'] : $cat['category_id']);
								} else {
									$children = $this->{$this->paths['model']['bus_menu_path']}->getCats($cat['category_id'], $sql_table, array('cache' => $setting['cache'], 'submanufacturers_status' => $submanufacturers_status, 'limit' => $setting['path_limit']));
									$path_new = (!empty($path) ? $path . '_' . $cat['category_id'] : $cat['category_id']);
								}
								$setting['group_status'] = $table;
								$setting['group_image_status'] = true;
							} else {
								$children = (!empty($cat['children']) ? $cat['children'] : false);
								$path_new = false;
							}
						} else {
							$children = false;
							$path_new = false;
						}
						if ($level == 1) {
							$cover = (!empty($cat['cover']) ? $cat['cover'] : $setting['cover']);
							$cover_position = (!empty($cat['cover_position']) ? $cat['cover_position'] : $setting['cover_position']);
							//$column = (!empty($cat['column']) ? $cat['column'] : (!empty($cat_info['column']) ? $cat_info['column'] : 1));
							if ($setting['type'] == 2) {
								$column_lg = (!empty($cat['column_lg']) ? $cat['column_lg'] : 1);
								$column_md = (!empty($cat['column_md']) ? $cat['column_md'] : 1);
								$column_sm = (!empty($cat['column_sm']) ? $cat['column_sm'] : 1);
								$column_xs = (!empty($cat['column_xs']) ? $cat['column_xs'] : 1);
							} else {
								$column_lg = (!empty($cat['column_lg']) ? $cat['column_lg'] : 4);
								$column_md = (!empty($cat['column_md']) ? $cat['column_md'] : 3);
								$column_sm = (!empty($cat['column_sm']) ? $cat['column_sm'] : 2);
								$column_xs = (!empty($cat['column_xs']) ? $cat['column_xs'] : 1);
							}
						}
						$cat_id = (!empty($cat['category_id']) ? $cat['category_id'] : 'buslikdrev');
						$name = (!empty($cat['name'][$language_id]) ? $cat['name'][$language_id] : (!empty($cat_info['name']) ? $cat_info['name'] : false));
						$link = (!empty($cat['link'][$language_id]) ? $cat['link'][$language_id] : $this->url->link($route, $cat['query']));
					
					} else {
						$table = false;
						$sql_table = false;
						$route = false;
						$image_status = (!empty($cat['image_status']) ? $cat['image_status'] : false);
						$image = (!empty($cat['image']) ? $cat['image'] : false);
						$image_position = (!empty($cat['image_position']) ? $cat['image_position'] : 1);
						$sticker = (!empty($cat['sticker']) && is_file(DIR_IMAGE . $cat['sticker']) ? $setting['server'] . 'image/' . $cat['sticker'] : false);
						$sticker_position = (!empty($cat['sticker_position']) ? $cat['sticker_position'] : 6);
						$title = (!empty($cat['title'][$language_id]) ? $cat['title'][$language_id] : false);
						$description = (!empty($cat['desc'][$language_id]) ? $cat['desc'][$language_id] : false);
						if ($setting['path_status'] && $level_limit < $setting['path_lvl_limit']) {
							$children = (!empty($cat['children']) ? $cat['children'] : false);
						} else {
							$children = false;
						}
						$path_new = false;
						if ($level == 1) {
							$cover = (!empty($cat['cover']) ? $cat['cover'] : $setting['cover']);
							$cover_position = (!empty($cat['cover_position']) ? $cat['cover_position'] : $setting['cover_position']);
							//$column = (!empty($cat['column']) ? $cat['column'] : 1);
							if ($setting['type'] == 2) {
								$column_lg = (!empty($cat['column_lg']) ? $cat['column_lg'] : 1);
								$column_md = (!empty($cat['column_md']) ? $cat['column_md'] : 1);
								$column_sm = (!empty($cat['column_sm']) ? $cat['column_sm'] : 1);
								$column_xs = (!empty($cat['column_xs']) ? $cat['column_xs'] : 1);
							} else {
								$column_lg = (!empty($cat['column_lg']) ? $cat['column_lg'] : 4);
								$column_md = (!empty($cat['column_md']) ? $cat['column_md'] : 3);
								$column_sm = (!empty($cat['column_sm']) ? $cat['column_sm'] : 2);
								$column_xs = (!empty($cat['column_xs']) ? $cat['column_xs'] : 1);
							}
						}
						$cat_id = 'buslikdrev';
						$name = (!empty($cat['name'][$language_id]) ? $cat['name'][$language_id] : false);
						$link = (!empty($cat['link'][$language_id]) ? $cat['link'][$language_id] : false);
					}
				} else {
					//получаем категории по-умолчанию
					if (isset($cat['bottom'])) {
						$table = 'information';
						$sql_table = 'information';
						$route = $sql_table . '/' . $sql_table;
						$cat['category_id'] = $cat[$sql_table . '_id'];
						$parameter = $table . '_id';
						$setting['path_status'] = false;
					} else {
						$table = 'path';
						$sql_table = 'category';
						$route = 'product/' . $sql_table;
						$parameter = $table;
					}
					$image_status = true;
					$image = $cat['image'];
					$image_position = 1;
					$sticker = false;
					$sticker_position = 6;
					$title = (!empty($cat['title']) ? $cat['title'] : false);
					$description = $cat['description'];
					if ($setting['path_status'] && $level_limit < $setting['path_lvl_limit'] && $sql_table == 'category') {
						if ($setting['path_lvl']) {
							//$children = $this->{$this->paths['model']['bus_menu_path']}->getCatsLevel($cat['category_id'], $sql_table, array('cache' => $setting['cache'], 'level' => $setting['path_lvl'], 'submanufacturers_status' => $submanufacturers_status, 'limit' => $setting['path_limit']));
							$children = $this->{$this->paths['model']['bus_menu_path']}->getCatsLevel($cat['category_id'], $sql_table, array('cache' => $setting['cache'], 'level' => 0, 'submanufacturers_status' => $submanufacturers_status, 'limit' => $setting['path_limit']));
							$path_new = (!empty($cat['path']) ? $cat['path'] . '_' . $cat['category_id'] : $cat['category_id']);
						} else {
							$children = $this->{$this->paths['model']['bus_menu_path']}->getCats($cat['category_id'], $sql_table, array('cache' => $setting['cache'], 'submanufacturers_status' => $submanufacturers_status, 'limit' => $setting['path_limit'], 'top' => true));
							$path_new = (!empty($path) ? $path . '_' . $cat['category_id'] : $cat['category_id']);
						}
					} else {
						$children = false;
						$path_new =false;
					}
					if ($level == 1) {
						$cover = $setting['cover'];
						$cover_position = $setting['cover_position'];
						//$column = (!empty($cat['column']) ? $cat['column'] : 1);
						if ($setting['type'] == 2) {
							$column_lg = (!empty($cat['column_lg']) ? $cat['column_lg'] : 1);
							$column_md = (!empty($cat['column_md']) ? $cat['column_md'] : 1);
							$column_sm = (!empty($cat['column_sm']) ? $cat['column_sm'] : 1);
							$column_xs = (!empty($cat['column_xs']) ? $cat['column_xs'] : 1);
						} else {
							$column_lg = (!empty($cat['column_lg']) ? $cat['column_lg'] : 4);
							$column_md = (!empty($cat['column_md']) ? $cat['column_md'] : 3);
							$column_sm = (!empty($cat['column_sm']) ? $cat['column_sm'] : 2);
							$column_xs = (!empty($cat['column_xs']) ? $cat['column_xs'] : 1);
						}
					}
					$cat_id = $cat['category_id'];
					$name = $cat['name'];
					$link = $this->url->link($route, $parameter . '=' . (!empty($path) ? $path . '_' : (!empty($cat['path']) ? $cat['path'] . '_' : false)) .  $cat['category_id']);
				}

				if ($setting['image_status'] && $image_status && $image && is_file(DIR_IMAGE . $image)) {
					$image = $this->model_tool_image->resize($image, $setting['width_1'], $setting['height_1']);
				} elseif ($setting['image_status'] && $image_status && (!$image || !is_file(DIR_IMAGE . $image))) {
					$image = $this->model_tool_image->resize('no_image.png', $setting['width_1'], $setting['height_1']);
					//$image = $this->model_tool_image->resize('placeholder.png',  $setting['width_1'], $setting['height_1']);
				} else {
					$image = false;
				}

				if ($children != false) {
					if (isset($setting['ajax_style'])) {
						$children_data = true;
					} else {
						$setting['level'] = $level_new;
						$setting['path'] = $path_new;
						$children_data = $this->getCats($children, $setting);
					}
				} else {
					$children_data = array();
				}

				if (!empty($cat['group_status'])) {
					$setting['group_status'] = false;
				}

				if ($setting['rating_count'] && $set_rating_count && ($sql_table == 'blog_category' || $sql_table == 'category' || $sql_table == 'manufacturer')) {
					$text_rating_count = false;
					$text_rating_count_total = false;
					$rating_count = $this->{$this->paths['model']['bus_menu_path']}->getRatingCount($cat_id, $sql_table, array('cache' => $setting['cache'], 'rating_count_check' => $setting['rating_count_check']));
					if (is_array($setting['rating_count_check'])) {
						if (in_array(1, $setting['rating_count_check'])) {
							$text_rating_count .= "\n" . $this->language->get('text_rating_count_reviews') . ' ' . $rating_count['reviews'];
							$text_rating_count_total .= "\n" . $this->language->get('text_rating_count_reviews_total') . ' ' . $rating_count['reviews_total'];
						}
						if (in_array(2, $setting['rating_count_check'])) {
							$text_rating_count .= ($text_rating_count_total ? ', ' : false) . "\n" . $this->language->get('text_rating_count_viewed') . ' ' . $rating_count['viewed'];
							$text_rating_count_total .= "\n" . $this->language->get('text_rating_count_viewed_total') . ' ' . $rating_count['viewed_total'];
						}
						if (($sql_table == 'category' || $sql_table == 'manufacturer') && in_array(3, $setting['rating_count_check'])) {
							$text_rating_count .= ($text_rating_count_total ? ', ' : false) . "\n" . $this->language->get('text_rating_count_orders') . ' ' . $rating_count['orders'];
							$text_rating_count_total .= "\n" . $this->language->get('text_rating_count_orders_total') . ' ' . $rating_count['orders_total'];
						}
						$text_rating_count .= ($text_rating_count_total ? '.' : false);
					} else {
						$text_rating_count .= "\n" . $this->language->get('text_rating_count_reviews') . ' ' . $rating_count['reviews'];
						$text_rating_count_total .= "\n" . $this->language->get('text_rating_count_reviews_total') . ' ' . $rating_count['reviews_total'];
						$text_rating_count .= '.';
					}
					if ($setting['product_count'] && ($sql_table == 'blog_category' || $sql_table == 'category' || $sql_table == 'manufacturer')) {
						$text_rating_count_total .= "\n" . ($sql_table == 'blog_category' ? $this->language->get('text_rating_count_article_total') : $this->language->get('text_rating_count_product_total')) . ' ' . $this->{$this->paths['model']['bus_menu_path']}->getCount(array('filter_cat_id'  => $cat_id, 'filter_sub_cat' => ($setting['product_count'] == 2 ? false : true)), $sql_table, array('cache' => $setting['cache'], 'submanufacturers_status' => $submanufacturers_status));
					}
					$rating_count['text_rating_count'] = html_entity_decode($this->language->get('text_rating_count') . $text_rating_count . "\n" . $text_rating_count_total, ENT_QUOTES, 'UTF-8');
				} else {
					$rating_count['rating_count'] = false;
					$rating_count['text_rating_count'] = false;
				}

				if ($setting['price_count'] && $set_price_count && ($sql_table == 'category' || $sql_table == 'manufacturer') && ($this->customer->isLogged() || !$customer_price)) {
					$price_count = false;
					$price = $this->{$this->paths['model']['bus_menu_path']}->getPriceCount($cat_id, $sql_table, array('cache' => $setting['cache'], 'submanufacturers_status' => $submanufacturers_status));

					if ($price['min_price'] > 0) {
						$price_count = ' ' . $this->currency->format($this->tax->calculate($price['min_price'], $tax), $currency);
					}
					if ($price['max_price'] > 0 && $price['min_price'] != $price['max_price']) {
						$price_count .= ' - ' . $this->currency->format($this->tax->calculate($price['max_price'], $tax), $currency);
					}
				} else {
					$price_count = false;
				}

				$cat_count = ($setting['cat_count'] && ($sql_table == 'blog_category' || $sql_table == 'category' || ($submanufacturers_status ? $sql_table == 'manufacturer' : false)) ? ' (' . $this->{$this->paths['model']['bus_menu_path']}->getCatCount($cat_id, $sql_table, array('cache' => $setting['cache'], 'submanufacturers_status' => $submanufacturers_status)) . ')' : false);
				$product_count = ($setting['product_count'] && ($sql_table == 'blog_category' || $sql_table == 'category' || $sql_table == 'manufacturer') ? ' (' . $this->{$this->paths['model']['bus_menu_path']}->getCount(array('filter_cat_id'  => $cat_id, 'filter_sub_cat' => ($setting['product_count'] == 2 ? false : true)), $sql_table, array('cache' => $setting['cache'], 'submanufacturers_status' => $submanufacturers_status)) . ')' : false);

				$data_cats = array(
					'image'            => $image,
					'image_position'   => $image_position,
					'sticker'		   => $sticker,
					'sticker_position' => $sticker_position,
					'title'            => ($title ? $title : $name),
					'children'         => $children_data,
					'rating'     	   => $rating_count['rating_count'],
					'text_rating'      => $rating_count['text_rating_count'],
					'cat_id'           => $cat_id,
					'name' 			   => (!$setting['name_status_1'] && $setting['image_status'] ? false : html_entity_decode($name, ENT_QUOTES, 'UTF-8')) . $cat_count . $product_count . $price_count,
					'href' 			   => $link
				);

				if ($setting['type'] == 3) {
					$data_cats['table'] = $table;
				}

				if ($level == 1) {
					if ($setting['cover_status'] && $cover && is_file(DIR_IMAGE . $cover)) {
						$cover = $this->model_tool_image->resize($cover, $setting['cover_width'], $setting['cover_height']);
					} /* elseif ($setting['cover_status'] && (!$cover || !is_file(DIR_IMAGE . $cover))) {
						$cover = $this->model_tool_image->resize('no_image.png', $setting['cover_width'], $setting['cover_height']);
						//$cover = $this->model_tool_image->resize('placeholder.png',  $setting['cover_width'], $setting['cover_height']);
					}  */else {
						$cover = false;
					}

					$data_cats['cover'] = $cover;
					$data_cats['cover_position'] = $cover_position;
					$data_cats['description'] = ($setting['desc_status'] && $setting['type'] != 1 && $setting['type'] != 3 ? utf8_substr(strip_tags(html_entity_decode($description, ENT_QUOTES, 'UTF-8')), 0, $setting['desc_limit']) : false);
					//$data_cats['column'] = $column;
					$data_cats['column_lg'] = ($column_lg == 5 ? $column_lg * 4.8 : 12 / $column_lg);
					$data_cats['column_md'] = ($column_md == 5 ? $column_md * 4.8 : 12 / $column_md);
					$data_cats['column_sm'] = ($column_sm == 5 ? $column_sm * 4.8 : 12 / $column_sm);
					$data_cats['column_xs'] = ($column_xs == 5 ? $column_xs * 4.8 : 12 / $column_xs);
				}

				$data[] = $data_cats;
			}
		}

		return $data;
	}

	public function ajax() {
		if (isset($this->request->post['module_id'])) {
			$get_module_id = (int)$this->request->post['module_id'];
			if (isset($this->request->post['cats_vertical_route'])) {
				$cats_vertical_route = (int)$this->request->post['cats_vertical_route'];
			} else {
				$cats_vertical_route = null;
			}
			if (isset($this->request->post['id_request'])) {
				$id_request = (int)$this->request->post['id_request'];
			} else {
				$id_request = 0;
			}
			if (isset($this->request->post['nohost_url'])) {
				$nohost_url = str_replace('&amp;', '&', preg_replace('/[^A-Z0-9-_:;.\/&?=]/i', '', $this->request->post['nohost_url']));
			} else {
				$nohost_url = null;
			}
			if (isset($this->request->post['host_url'])) {
				$host_url = str_replace('&amp;', '&', preg_replace('/[^A-Z0-9-_:;.\/&?=]/i', '', $this->request->post['host_url']));
			} else {
				$host_url = null;
			}
			$this->index(array('get_module_id' => $get_module_id, 'cats_vertical_route' => $cats_vertical_route, 'id_request' => $id_request, 'nohost_url' => $nohost_url, 'host_url' => $host_url));
		} else {
			$this->load->controller('error/not_found');
			//exit();
		}
	}

	public function index($setting) {
		if (isset($setting['get_module_id'])) {
			$module_id = $setting['get_module_id'];
			$cats_vertical_route = $setting['cats_vertical_route'];
			$id_request = $setting['id_request'];
			$nohost_url = $setting['nohost_url'];
			$host_url = $setting['host_url'];
			$get_module_id = $module_id;
		} elseif (isset($setting['module_id'])) {
			$module_id = $setting['module_id'];
		} else {
			echo 'buslikdrev';
			return false;
		}

		$this->load->model($this->paths['model']['bus_menu']);

		$setting = $this->{$this->paths['model']['bus_menu_path']}->getModule($module_id);

		$setting_cats['cats_horizontal'] = (!empty($setting['cats']['cats_horizontal']) ? $setting['cats']['cats_horizontal'] : array());
		$setting_cats['cats_vertical'] = (!empty($setting['cats']['cats_vertical']) ? $setting['cats']['cats_vertical'] : array());
		$setting_cats['cats_cell'] = (!empty($setting['cats']['cats_cell']) ? $setting['cats']['cats_cell'] : array());
		$setting = (!empty($setting['setting']) ? $setting['setting'] : array());
		$setting['filter_status'] = true;

		if (empty($setting['status'])) {
			return false;
		}

		if ($setting['debug']) {
			if ($this->version_oc == 2) {
				$this->user = new User($this->registry);
			} else {
				$this->user = new Cart\User($this->registry);
			}

			if (!$this->user->isLogged()) {
				$setting['debug'] = false;
			}
		}

		if ($setting['debug']) {
			$start = microtime(true);
		}

		// условие работы ajax-подгруки
		if (isset($get_module_id)) {
			// доверительное условие
			if ($setting['ajax'] && $get_module_id == $setting['module_id']) {
				$ajax = true;
			// кто-то пытается найти дыру
			} else {
				$this->load->controller('error/not_found');
				exit();
			}
		}

		if (!isset($id_request)) {
			if ($setting['filter_status'] && $setting['type'] == 2 && isset($this->request->get['path'])) {
				$id_request = explode('_', (string)$this->request->get['path']);
				$id_request = array_pop($id_request);
			} else {
				$id_request = 0;
			}
		}

		if (isset($this->request->server['HTTP_ACCEPT']) && stripos($this->request->server['HTTP_ACCEPT'], 'image/webp') !== false) {
		    $webp = true;
		} else {
		    $webp = false;
		}

		$language_id = (int)$this->config->get('config_language_id');
		$store_id = (int)$this->config->get('config_store_id');
		$currency = $this->session->data['currency'];
		$module_id = (int)$setting['module_id'];

		$bus_menu_cats_vertical = (!empty($setting['bus_menu']) ? $this->config->get('bus_menu_cats_vertical') : false);
		$setting_cats['cats_vertical_position'] = (isset($bus_menu_cats_vertical['position']) ? $bus_menu_cats_vertical['position'] : false);
		$setting_cats['cats_vertical_route'] = 0;

		$cats_vertical_status = (isset($setting['cats_vertical_status']) ? $setting['cats_vertical_status'] : false);

		if ($cats_vertical_status) {
			if (isset($cats_vertical_route)) {
				$setting_cats['cats_vertical_route'] = $cats_vertical_route;
			} else {
				if (isset($bus_menu_cats_vertical['route'])) {
					if (is_array($bus_menu_cats_vertical['route'][$store_id])) {
						if (isset($this->request->get['route'])) {
							$route = (string)$this->request->get['route'];
						} else {
							$route = 'common/home';
						}

						foreach ($bus_menu_cats_vertical['route'][$store_id] as $resuka) {
							if (!empty($resuka) && stristr($route, $resuka)) {
								$setting_cats['cats_vertical_route'] = 1;
							}
						}
					} elseif (is_int($bus_menu_cats_vertical['route'])) {
						$setting_cats['cats_vertical_route'] = 1;
					}
				}
			}
		}

		$data = array();
		if ($setting['cache'] == 3) {
			$data = $this->cache->get('seo_url.bus_menu.module.' . $module_id . '.' . md5($setting_cats['cats_vertical_route'] . $id_request . $webp . $currency . $language_id . $store_id));
			if (!$data) {
				$data = array();
			}
		}

		// условие запуска ajax
		if (!isset($get_module_id)) {
			// если ajax включён полностью
			if ($setting['ajax'] == 1) {
				$ajax = false;
			// включение ajax со второй категории
			} elseif ($setting['ajax'] == 2) {
				$ajax = true;
				$setting['path_lvl_limit'] = 1;
				//$setting['path_limit'] = 1;
				$setting['cache'] = 0;
				$setting['ajax_style'] = true;
			// включение ajax, если не создан файл кэша
			} elseif ($setting['ajax'] == 3 && !$data) {
				$ajax = false;
			// включение ajax со второй категории, если не создан файл кэша
			} elseif ($setting['ajax'] == 4 && !$data) {
				$ajax = true;
				$setting['path_lvl_limit'] = 1;
				//$setting['path_limit'] = 1;
				$setting['cache'] = 0;
				$setting['ajax_style'] = true;
			// отключение ajax
			} else {
				$ajax = true;
				$setting['ajax'] = false;
			}
		}

		if (!$data && $ajax) {
			// формируем данные по-умолчанию
			$setting['server'] = ($this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url'));
			$setting['module_id'] = (isset($setting['module_id']) ? $setting['module_id'] : $module_id);
			$setting['site_name'] = (isset($setting['site_name'][$language_id]) ? $setting['site_name'][$language_id] : false);
			$setting['site_link'] = (isset($setting['site_link'][$language_id]) ? $setting['site_link'][$language_id] : false);
			$setting['site_ico'] = (isset($setting['site_ico']) ? $setting['site_ico'] : false);
			$setting['site_image_width'] = (isset($setting['site_image_width']) ? $setting['site_image_width'] : 20);
			$setting['site_image_height'] = (isset($setting['site_image_height']) ? $setting['site_image_height'] : 20);
			$setting['site_ico_position'] = (isset($setting['site_ico_position']) ? $setting['site_ico_position'] : 1);
			//$setting['type'] = $setting['type'];
			//$setting['image_status'] = $setting['image_status'];
			//$setting['width_1'] = $setting['width_1'];
			//$setting['height_1'] = $setting['height_1'];
			//$setting['width_2'] = $setting['width_2'];
			//$setting['height_2'] = $setting['height_2'];
			//$setting['width_3'] = $setting['width_3'];
			//$setting['height_3'] = $setting['height_3'];
			//$setting['name_status_1'] = $setting['name_status_1'];
			//$setting['name_status_2'] = $setting['name_status_2'];
			//$setting['name_status_3'] = $setting['name_status_3'];
			$setting['desc_status'] = (isset($setting['desc_status']) ? $setting['desc_status'] : false);
			$setting['desc_limit'] = (isset($setting['desc_limit']) ? $setting['desc_limit'] : 50);
			$cats_status = $setting['cats_status'];
			$setting['cats_status'] = false;
			//$setting['cats_vertical_status'] = false;
			$setting['cats_vertical_name'] = (isset($setting['cats_vertical_name'][$language_id]) ? $setting['cats_vertical_name'][$language_id] : false);
			$setting['cats_vertical_link'] = (isset($setting['cats_vertical_link'][$language_id]) ? $setting['cats_vertical_link'][$language_id] : false);
			$setting['cats_vertical_ico'] = (isset($setting['cats_vertical_ico']) ? $setting['cats_vertical_ico'] : false);
			$setting['cats_vertical_image_width'] = (isset($setting['cats_vertical_image_width']) ? $setting['cats_vertical_image_width'] : 20);
			$setting['cats_vertical_image_height'] = (isset($setting['cats_vertical_image_height']) ? $setting['cats_vertical_image_height'] : 20);
			$setting['cats_vertical_ico_position'] = (isset($setting['cats_vertical_ico_position']) ? $setting['cats_vertical_ico_position'] : 1);
			//$setting['seo_now'] = $setting['seo_now'];
			$setting['seo_then'] = (isset($setting['seo_then']) ? $setting['seo_then'] : false);
			$setting['seo_cycle'] = (isset($setting['seo_cycle']) ? $setting['seo_cycle'] : false);
			//$setting['path_status'] = $setting['path_status'];
			//$setting['path_lvl'] = (isset($setting['path_lvl']) ? $setting['path_lvl'] : false);
			//$setting['path_lvl_limit'] = (isset($setting['path_lvl_limit']) ? $setting['path_lvl_limit'] : 2);
			//$setting['path_limit'] = (isset($setting['path_limit']) ? $setting['path_limit'] : 5);
			$setting['group_status'] = false;
			$setting['cover_status'] = (isset($setting['cover_status']) ? $setting['cover_status'] : false);
			$setting['cover'] = (isset($setting['cover']) ? $setting['cover'] : false);
			$setting['cover_width'] = (isset($setting['cover_width']) ? $setting['cover_width'] : false);
			$setting['cover_height'] = (isset($setting['cover_height']) ? $setting['cover_height'] : false);
			$setting['cover_position'] = (isset($setting['cover_position']) ? $setting['cover_position'] : 1);
			//$setting['design'] = ($setting['design'] == 'own' ? 'own_' . (int)$setting['design_id'] : (int)$setting['design']);
			$setting['designoptimiz'] = (isset($setting['designoptimiz']) ? $setting['designoptimiz'] : false);
			$setting['lg'] = (isset($setting['lg']) ? $setting['lg'] : false);
			$setting['lg_status'] = (isset($setting['lg_status']) ? $setting['lg_status'] : true);
			$setting['md'] = (isset($setting['md']) ? $setting['md'] : false);
			$setting['md_status'] = (isset($setting['md_status']) ? $setting['md_status'] : true);
			$setting['sm'] = (isset($setting['sm']) ? $setting['sm'] : false);
			$setting['sm_status'] = (isset($setting['sm_status']) ? $setting['sm_status'] : true);
			$setting['xs'] = (isset($setting['xs']) ? $setting['xs'] : false);
			$setting['xs_status'] = (isset($setting['xs_status']) ? $setting['xs_status'] : true);
			$setting['menu_color'] = (isset($setting['menu_color']) ? $setting['menu_color'] : false);
			$setting['menu_text_color'] = (isset($setting['menu_text_color']) ? $setting['menu_text_color'] : false);
			//$setting['cache'] = (isset($setting['cache']) ? $setting['cache'] : false);
			//$setting['ajax'] = (isset($setting['ajax']) ? $setting['ajax'] : false);
			//$setting['rating_count'] = (isset($setting['rating_count']) ? $setting['rating_count'] : false);
			$setting['rating_count_check'] = (isset($setting['rating_count_check']) ? $setting['rating_count_check'] : false);
			$setting['rating_count_path_not'] = (isset($setting['rating_count_path_not']) ? $setting['rating_count_path_not'] : false);
			//$setting['price_count'] = (isset($setting['price_count']) ? $setting['price_count'] : false);
			$setting['price_count_path_not'] = (isset($setting['price_count_path_not']) ? $setting['price_count_path_not'] : false);
			//$setting['cat_count'] = (isset($setting['cat_count']) ? $setting['cat_count'] : false);
			//$setting['product_count'] = $setting['product_count'];

			foreach ($this->load->language($this->paths['language']['bus_menu']) as $key => $lang) {
				$data[$key] = $lang;
			}

			if ($setting['site_ico'] == strip_tags(html_entity_decode($setting['site_ico'], ENT_QUOTES, 'UTF-8')) || $setting['cats_vertical_ico'] == strip_tags(html_entity_decode($setting['cats_vertical_ico'], ENT_QUOTES, 'UTF-8')) || $setting['image_status'] || $setting['cover_status']) {
				$this->load->model('tool/image');
			}

			$data['heading_title'] = $setting['site_name'];
			$data['heading_link'] = $setting['site_link'];
			if ($setting['site_ico'] == strip_tags(html_entity_decode($setting['site_ico'], ENT_QUOTES, 'UTF-8')) && is_file(DIR_IMAGE . $setting['site_ico'])) {
				$data['heading_ico'] = $this->model_tool_image->resize($setting['site_ico'], $setting['site_image_width'], $setting['site_image_height']);
			} else {
				$data['heading_ico'] = html_entity_decode($setting['site_ico'], ENT_QUOTES, 'UTF-8');
			}
			$data['heading_ico_position'] = $setting['site_ico_position'];
			$data['desc_status'] = $setting['desc_status'];

			$filter_data = array();
			if (isset($submanufacturers)) {
				$filter_data['submanufacturers_status'] = true;
			}
			$filter_data['cache'] = $setting['cache'];
			$filter_data['limit'] = 0;
			if (!$setting['type']) {
				$filter_data['top'] = true;
			}

			if ($cats_status && ($setting['type'] ? (!empty($setting_cats['cats_horizontal']) || !empty($setting_cats['cats_vertical']) || !empty($setting_cats['cats_cell'])) : !empty($setting_cats['cats_horizontal']))) {
				if ($setting['type'] == 1 || $setting['type'] == 3) {
					$cats = $setting_cats['cats_vertical'];
				} elseif ($setting['type'] == 2) {
					$cats = $setting_cats['cats_cell'];
				} else {
					$cats = $setting_cats['cats_horizontal'];
				}

				$setting['cats_status'] = true;
			} else {
				if ($setting['path_lvl']) {
					$filter_data['level'] = $setting['path_lvl'];
					$cats = $this->{$this->paths['model']['bus_menu_path']}->getCatsLevel($id_request, 'category', $filter_data);
				} else {
					$cats = $this->{$this->paths['model']['bus_menu_path']}->getCats($id_request, 'category', $filter_data);
				}
			}

			if ($cats_vertical_status) {
				if (!empty($setting_cats['cats_vertical'])) {
					$cats_vertical = $setting_cats['cats_vertical'];
				} else {
					$cats_vertical = $this->{$this->paths['model']['bus_menu_path']}->getCats(0, 'information', $filter_data);
				}

				if ($setting['cats_vertical_reverse']) {
					$cats_reverse = $cats;
					$cats = $cats_vertical;
					$cats_vertical = $cats_reverse;
				}
			}

			$data['cats'] = array();
			$data['cats_vertical'] = array();
			$data['cats_vertical_title'] = $setting['cats_vertical_name'];
			$data['cats_vertical_link'] = $setting['cats_vertical_link'];
			if ($setting['cats_vertical_ico'] == strip_tags(html_entity_decode($setting['cats_vertical_ico'], ENT_QUOTES, 'UTF-8')) && is_file(DIR_IMAGE . $setting['cats_vertical_ico'])) {
				$data['cats_vertical_ico'] = $this->model_tool_image->resize($setting['cats_vertical_ico'], $setting['cats_vertical_image_width'], $setting['cats_vertical_image_height']);
			} else {
				$data['cats_vertical_ico'] = html_entity_decode($setting['cats_vertical_ico'], ENT_QUOTES, 'UTF-8');
			}
			$data['cats_vertical_ico_position'] = $setting['cats_vertical_ico_position'];

			$cats_cache = array(false);
			if ($setting['cache'] == 2) {
				$cats_cache = $this->cache->get('seo_url.bus_menu.cats.' . $module_id . '.' . md5($id_request . $webp . $currency . $language_id . $store_id));

				if (!empty($cats_cache[0])) {
					$data['cats'] = $cats_cache[0];
				}
				if (!empty($cats_cache[1])) {
					$data['cats_vertical'] = $cats_cache[1];
				}
			}

			if (!$data['cats']) {
				if	($cats_vertical_status) {
					if ($setting['cats_vertical_reverse']) {
						if (!empty($setting_cats['cats_vertical'])) {
							$setting['cats_status'] = true;
						} else {
							$setting['cats_status'] = false;
						}
					}
				}

				$data['cats'] = $this->getCats($cats, $setting);

				if	($cats_vertical_status) {
					$setting['cats_status'] = false;
					if ($setting['cats_vertical_reverse']) {
						if (!empty($setting_cats['cats_horizontal'])) {
							$setting['cats_status'] = $cats_status;
						}
					} else {
						if (!empty($setting_cats['cats_vertical'])) {
							$setting['cats_status'] = true;
						}
					}

					$data['cats_vertical'] = $this->getCats($cats_vertical, $setting);
				}

				if ($setting['cache'] == 2) {
					$this->cache->set('seo_url.bus_menu.cats.' . $module_id . '.' . md5($id_request . $webp . $currency . $language_id . $store_id), array($data['cats'], $data['cats_vertical']));
				}
			}

			if ($setting['cover_status'] && $setting['cover'] && is_file(DIR_IMAGE . $setting['cover'])) {
				$data['cover'] = $this->model_tool_image->resize($setting['cover'], $setting['cover_width'], $setting['cover_height']);
			} elseif ($setting['cover_status'] && (!$setting['cover'] || !is_file(DIR_IMAGE . $setting['cover']))) {
				$data['cover'] = $this->model_tool_image->resize('no_image.png', $setting['cover_width'], $setting['cover_height']);
				//$data['cover'] = $this->model_tool_image->resize('placeholder.png',  $setting['cover_width'], $setting['cover_height']);
			} else {
				$data['cover'] = false;
			}

			$data['cover_position'] = $setting['cover_position'];
			$data['designoptimiz'] = $setting['designoptimiz'];
			$data['lg'] = $setting['lg'];
			$data['lg_status'] = $setting['lg_status'];
			$data['md'] = $setting['md'];
			$data['md_status'] = $setting['md_status'];
			$data['sm'] = $setting['sm'];
			$data['sm_status'] = $setting['sm_status'];
			$data['xs'] = $setting['xs'];
			$data['xs_status'] = $setting['xs_status'];
			$data['menu_color'] = $setting['menu_color'];
			$data['menu_text_color'] = $setting['menu_text_color'];

			if ($setting['cache'] == 3) {
				$this->cache->set('seo_url.bus_menu.module.' . $module_id . '.' . md5($setting_cats['cats_vertical_route'] . $id_request . $webp . $currency . $language_id . $store_id), $data);
			}
		}

		$data['module_id'] = $module_id;
		$data['id_request'] = $id_request;
		$data['type'] = $setting['type'];
		$setting['design'] = ($setting['design'] == 'own' ? 'own_' . (int)$setting['design_id'] : (int)$setting['design']);
		$data['design'] = $setting['design'];
		$data['ajax'] = $setting['ajax'];
		$data['cats_vertical_position'] = $setting_cats['cats_vertical_position'];
		$data['cats_vertical_route'] = $setting_cats['cats_vertical_route'];

		if (isset($nohost_url) && isset($host_url)) {
			$data['nohost_url'] = $nohost_url;
			$data['host_url'] = $host_url;
		} else {
			$request_url = $this->request->server['REQUEST_URI'];
			$data['nohost_url'] = (substr($request_url, 0, -(strlen($request_url)-1)) == '/' || $request_url == '/' ? substr($request_url, 1) : $request_url);
			$data['host_url'] = (isset($this->request->server['HTTPS']) ? HTTPS_SERVER : HTTP_SERVER) . $data['nohost_url'];
		}

		if (!isset($get_module_id)) {
			$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));

			if ($setting['type'] != 1) {
				if (file_exists(DIR_TEMPLATE . $theme . '/stylesheet/bus_menu/bus_menu.css')) {
					$this->document->addStyle('catalog/view/theme/' . $theme . '/stylesheet/bus_menu/bus_menu.css' . (isset($setting['version']) ? '?v=' . $setting['version'] : false));
				} elseif (file_exists(DIR_TEMPLATE . 'default/stylesheet/bus_menu/bus_menu.css')) {
					$this->document->addStyle('catalog/view/theme/default/stylesheet/bus_menu/bus_menu.css' . (isset($setting['version']) ? '?v=' . $setting['version'] : false));
				}
			}

			if (file_exists(DIR_TEMPLATE . $theme . '/stylesheet/bus_menu/bus_menu_' . $setting['type'] .  '_' . $setting['design'] . '.css')) {
				$this->document->addStyle('catalog/view/theme/' . $theme . '/stylesheet/bus_menu/bus_menu_' . $setting['type'] .  '_' . $setting['design'] . '.css' . (isset($setting['version']) ? '?v=' . $setting['version'] : false));
			} elseif (file_exists(DIR_TEMPLATE . 'default/stylesheet/bus_menu/bus_menu_' . $setting['type'] .  '_' . $setting['design'] . '.css')) {
				$this->document->addStyle('catalog/view/theme/default/stylesheet/bus_menu/bus_menu_' . $setting['type'] .  '_' . $setting['design'] . '.css' . (isset($setting['version']) ? '?v=' . $setting['version'] : false));
			}

			if ($setting['style']) {
				if (file_exists(DIR_TEMPLATE . $theme . '/stylesheet/bus_menu/bus_menu_' . $setting['type'] .  '_' . $setting['design'] . '_replace.css')) {
					$this->document->addStyle('catalog/view/theme/' . $theme . '/stylesheet/bus_menu/bus_menu_' . $setting['type'] .  '_' . $setting['design'] . '_replace.css' . (isset($setting['version']) ? '?v=' . $setting['version'] : false) . (isset($setting['time_save']) ? '&time=' . $setting['time_save'] : false));
				}
			}

			if ($setting['script']) {
				if (file_exists(DIR_TEMPLATE . $theme . '/javascript/bus_menu/bus_menu_' . $setting['type'] .  '_' . $setting['design'] . '_replace.js')) {
					$this->document->addScript('catalog/view/theme/' . $theme . '/javascript/bus_menu/bus_menu_' . $setting['type'] .  '_' . $setting['design'] . '_replace.js' . (isset($setting['version']) ? '?v=' . $setting['version'] : false) . (isset($setting['time_save']) ? '&time=' . $setting['time_save'] : false));
				}
			}
		}

		$data['ajax_style'] = true;
		if (isset($get_module_id) && ($setting['ajax'] == 2 || $setting['ajax'] == 4)) {
			$data['ajax_style'] = false;
		}
		$data['ajax_script'] = false;

		if ($setting['ajax'] && !isset($get_module_id)) {
			if ($setting['debug']) {
				$data['debug_ajax'] = (round(microtime(true) - $start, 3)*1000);
			} else {
				$data['debug_ajax'] = null;
			}

			$data['module_path'] = $this->paths['controller']['bus_menu'];

			$template = $this->view($this->paths['view']['bus_menu'] . '/ajax', $data);

			if ($setting['ajax'] == 1 || $setting['ajax'] == 3) {
				return $template;
			} elseif ($setting['ajax'] == 2 || $setting['ajax'] == 4) {
				$data['ajax_script'] = $template;
			}
		}

		if ($setting['debug']) {
			$data['debug'] = '<div class="bus-menu-debug-' . $module_id . '-' . $setting['type'] . '-' . $setting['design'] . '">';
			$data['debug'] .= (!$setting['type'] ? '<b>Примерное время подключение php-скрипта в header.php:</b> 0.006 сек. или 6 мс.<br>' : '<br>');
			$data['debug'] .= '<b>Время выполнения php-скрипта ЫМеню id модуля ' . $module_id . ' тип ' . $setting['type'] . ' дизайн ' . $setting['design'] . ':</b> ' . round(microtime(true) - $start, 3) . ' сек. или ' . (round(microtime(true) - $start, 3)*1000) . ' мс.<br>';
			$data['debug'] .= ($setting['ajax'] ? '<b>Время выполнения php-скрипта ЫМеню при ajax-подгрузки id модуля ' . $module_id . ' тип ' . $setting['type'] . ' дизайн ' . $setting['design'] . ':</b> <span class="bus-menu-debug-ajax-' . $module_id . '-' . $setting['type'] . '-' . $setting['design'] . '"></span><br>' : false);
			$data['debug'] .= '<b>Время загрузки шаблона ЫМеню id модуля ' . $module_id . ' тип ' . $setting['type'] . ' дизайн ' . $setting['design'] . ':</b> <span class="bus-menu-debug-theme-' . $module_id . '-' . $setting['type'] . '-' . $setting['design'] . '"></span><br>';
			$data['debug'] .= '<b>Количество ссылок в ЫМеню id модуля ' . $module_id . ' тип ' . $setting['type'] . ' дизайн ' . $setting['design'] . ':</b> <span class="bus-menu-debug-link-' . $module_id . '-' . $setting['type'] . '-' . $setting['design'] . '"></span><br>';
			$data['debug'] .= '</div>';
		} else {
			$data['debug'] = null;
		}

		$template = $this->view($this->paths['view']['bus_menu'] . '/bus_menu_' . $setting['type'] .  '_' . $setting['design'], $data);

		if (isset($get_module_id)) {
			$this->response->setOutput($template);
		} else {
			return $template;
		}
	}

	private function view($route = false, $data = array()) {
		if (!$route) {
			return false;
		}

		if ($this->version_oc >= 3) {
			$template_engine = $this->registry->get('config')->get('template_engine');
			$template_directory = $this->registry->get('config')->get('template_directory');
			$this->registry->get('config')->set('template_engine', 'template');
			if (!file_exists(DIR_TEMPLATE . $template_directory . $route . '.tpl')) {
				$this->registry->get('config')->set('template_directory', 'default/template/');
			}
		}

		if ($this->version_oc >= 2.3) {
			$template = $this->load->view($route, $data);
		} else {
			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/' . $route . '.tpl')) {
				$template = $this->load->view($this->config->get('config_template') . '/template/' . $route . '.tpl', $data);
			} else {
				$template = $this->load->view('default/template/' . $route . '.tpl', $data);
			}
		}

		if ($this->version_oc >= 3) {
			$this->registry->get('config')->set('template_engine', $template_engine);
			$this->registry->get('config')->set('template_directory', $template_directory);
		}

		return $template;
	}
}
