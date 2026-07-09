<?php
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerInformationSitemap extends Controller {
	public function index() {
		$this->load->language('information/sitemap');

		$this->document->setTitle($this->language->get('heading_title'));
		$this->document->addLink($this->url->link('information/sitemap', '', true), 'canonical');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('information/sitemap')
		);

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_special'] = $this->language->get('text_special');
		$data['text_account'] = $this->language->get('text_account');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_password'] = $this->language->get('text_password');
		$data['text_address'] = $this->language->get('text_address');
		$data['text_history'] = $this->language->get('text_history');
		$data['text_download'] = $this->language->get('text_download');
		$data['text_cart'] = $this->language->get('text_cart');
		$data['text_checkout'] = $this->language->get('text_checkout');
		$data['text_search'] = $this->language->get('text_search');
		$data['text_blog_search'] = $this->language->get('text_blog_search');
		$data['text_information'] = $this->language->get('text_information');
		$data['text_contact'] = $this->language->get('text_contact');

		$this->load->model('catalog/category');
		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories_1 = $this->model_catalog_category->getCategories(0);

		foreach ($categories_1 as $category_1) {
			$level_2_data = array();

			$categories_2 = $this->model_catalog_category->getCategories($category_1['category_id']);

			foreach ($categories_2 as $category_2) {
				$level_3_data = array();

				$categories_3 = $this->model_catalog_category->getCategories($category_2['category_id']);

				foreach ($categories_3 as $category_3) {
					$level_3_data[] = array(
						'name' => $category_3['name'],
						'href' => $this->url->link('product/category', 'path=' . $category_1['category_id'] . '_' . $category_2['category_id'] . '_' . $category_3['category_id'])
					);
				}

				$level_2_data[] = array(
					'name'     => $category_2['name'],
					'children' => $level_3_data,
					'href'     => $this->url->link('product/category', 'path=' . $category_1['category_id'] . '_' . $category_2['category_id'])
				);
			}

			$data['categories'][] = array(
				'name'     => $category_1['name'],
				'children' => $level_2_data,
				'href'     => $this->url->link('product/category', 'path=' . $category_1['category_id'])
			);
		}

		$data['pro_blog_categories'] = false;

		if ($this->config->get('configblog_sitemap')) {
			$this->load->model('blog/category');

			$data['pro_blog_categories'] = $this->getProBlogCategories(0);
		}

		$data['pro_manufacturers'] = false;

		$this->config->set('config_manufacturers_sitemap', 1);
		if ($this->config->get('config_manufacturers_sitemap')) {
			$this->load->model('catalog/manufacturer');

			$data['pro_manufacturers'] = $this->getProManufacturers(0);
		}

		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		$data['history'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['search'] = $this->url->link('product/search');
		$data['blog_search'] = ($this->config->get('configblog_sitemap') ? $this->url->link('blog/search') : false);
		$data['contact'] = $this->url->link('information/contact');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			$data['informations'][] = array(
				'title' => $result['title'],
				'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
			);
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/sitemap', $data));
	}

	private function getProBlogCategories($parent_id, $current_path = '') {
		$output = '';

		$pro_blog_categories = $this->model_blog_category->getCategories($parent_id);

		if ($pro_blog_categories) {
			//$output .= '<br/>';

			if ($current_path) {
				$output .= '                <ul>';
				$output .= "\n";
			}

			if (!$current_path) {
				if ($this->config->get('configblog_name')) {
					$output .= '<li><a href="' . $this->url->link('blog/latest') . '">' . $this->config->get('configblog_name') . '</a>';
					$output .= "\n";
				} else {
					$output .= '<li><a href="' . $this->url->link('blog/latest') . '">' . $this->language->get('text_blog') . '</a>';
					$output .= "\n";
				}

				$output .= '              <ul>';
				$output .= "\n";
			}

			foreach ($pro_blog_categories as $blogcategory) {
				if (!$current_path) {
					$new_path = $blogcategory['blog_category_id'];
				} else {
					$new_path = $current_path . '_' . $blogcategory['blog_category_id'];
				}

				$output .= '                <li><a href="' . $this->url->link('blog/category', 'blog_category_id=' . $new_path) . '">' . $blogcategory['name'] . '</a>';
				$output .= "\n";
				$output .= $this->getProBlogCategories($blogcategory['blog_category_id'], $new_path);
				$output .= '                </li>';
				$output .= "\n";
			}

			if (!$current_path) {
				$output .= '              </ul>';
				$output .= "\n";
				$output .= '            </li>';
				$output .= "\n";
			}

			if ($current_path) {
				$output .= '                </ul>';
				$output .= "\n";
			}
		}

		return $output;
	}

	private function getProManufacturers($parent_id, $current_path = '') {
		$output = '';

		$pro_manufacturers = $this->model_catalog_manufacturer->getManufacturers($parent_id);

		if ($pro_manufacturers) {
			//$output .= '<br/>';

			if ($current_path) {
				$output .= '                <ul>';
				$output .= "\n";
			}

			if (!$current_path) {
				$output .= '<li><a href="' . $this->url->link('product/manufacturer') . '">' . $this->language->get('text_manufacturers') . '</a>';
				$output .= "\n";
				$output .= '              <ul>';
				$output .= "\n";
			}

			foreach ($pro_manufacturers as $manufacturer) {
				if (!$current_path) {
					$new_path = $manufacturer['manufacturer_id'];
				} else {
					$new_path = $current_path . '_' . $manufacturer['manufacturer_id'];
				}

				$output .= '                <li><a href="' . $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $new_path) . '">' . $manufacturer['name'] . '</a>';
				$output .= "\n";
				$output .= '                </li>';
				$output .= "\n";
			}

			if (!$current_path) {
				$output .= '              </ul>';
				$output .= "\n";
				$output .= '            </li>';
				$output .= "\n";
			}

			if ($current_path) {
				$output .= '                </ul>';
				$output .= "\n";
			}
		}

		return $output;
	}
}
