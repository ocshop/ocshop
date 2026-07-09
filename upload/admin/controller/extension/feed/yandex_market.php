<?php
// *	@copyright	OPENCART.PRO 2011 - 2022.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionFeedYandexMarket extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/feed/yandex_market');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate())) {
			if (isset($this->request->post['yandex_market_categories'])) {
				$this->request->post['yandex_market_categories'] = implode(',', $this->request->post['yandex_market_categories']);
			}

			if (isset($this->request->post['yandex_market_manufacturers'])) {
				$this->request->post['yandex_market_manufacturers'] = implode(',', $this->request->post['yandex_market_manufacturers']);
			}

			$this->model_setting_setting->editSetting('yandex_market', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=feed', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_width'] = $this->language->get('text_width');
		$data['text_height'] = $this->language->get('text_height');
		$data['text_not_unload'] = $this->language->get('text_not_unload');
		$data['text_product_id'] = $this->language->get('text_product_id');
		$data['text_name'] = $this->language->get('text_name');
		$data['text_meta_h1'] = $this->language->get('text_meta_h1');
		$data['text_meta_title'] = $this->language->get('text_meta_title');
		$data['text_meta_keyword'] = $this->language->get('text_meta_keyword');
		$data['text_meta_description'] = $this->language->get('text_meta_description');
		$data['text_model'] = $this->language->get('text_model');
		$data['text_sku'] = $this->language->get('text_sku');
		$data['text_upc'] = $this->language->get('text_upc');
		$data['text_ean'] = $this->language->get('text_ean');
		$data['text_jan'] = $this->language->get('text_jan');
		$data['text_isbn'] = $this->language->get('text_isbn');
		$data['text_mpn'] = $this->language->get('text_mpn');
		$data['text_location'] = $this->language->get('text_location');
		$data['text_simplified'] = $this->language->get('text_simplified');
		$data['text_vendor_model'] = $this->language->get('text_vendor_model');
		$data['text_medicine'] = $this->language->get('text_medicine');
		$data['text_books'] = $this->language->get('text_books');
		$data['text_audiobooks'] = $this->language->get('text_audiobooks');
		$data['text_artist_title'] = $this->language->get('text_artist_title');
		$data['text_event_ticket'] = $this->language->get('text_event_ticket');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_tour'] = $this->language->get('text_tour');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_select_all'] = $this->language->get('text_select_all');
		$data['text_unselect_all'] = $this->language->get('text_unselect_all');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_secret_key'] = $this->language->get('entry_secret_key');
		$data['entry_data_feed'] = $this->language->get('entry_data_feed');
		$data['entry_shopname'] = $this->language->get('entry_shopname');
		$data['entry_company'] = $this->language->get('entry_company');
		$data['entry_id'] = $this->language->get('entry_id');
		$data['entry_type'] = $this->language->get('entry_type');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_model'] = $this->language->get('entry_model');
		$data['entry_vendorcode'] = $this->language->get('entry_vendorcode');
		$data['entry_barcode'] = $this->language->get('entry_barcode');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_image_resize'] = $this->language->get('entry_image_resize');
		$data['entry_image_quantity'] = $this->language->get('entry_image_quantity');
		$data['entry_desc_html'] = $this->language->get('entry_desc_html');
		$data['entry_param'] = $this->language->get('entry_param');
		$data['entry_main_category'] = $this->language->get('entry_main_category');
		$data['entry_category'] = $this->language->get('entry_category');
		$data['entry_manufacturer'] = $this->language->get('entry_manufacturer');
		$data['entry_currency'] = $this->language->get('entry_currency');
		$data['entry_in_stock'] = $this->language->get('entry_in_stock');
		$data['entry_out_of_stock'] = $this->language->get('entry_out_of_stock');
		$data['entry_preorder'] = $this->language->get('entry_preorder');
		$data['entry_quantity_status'] = $this->language->get('entry_quantity_status');
		$data['entry_from_charset'] = $this->language->get('entry_from_charset');

		$data['help_secret_key'] = $this->language->get('help_secret_key');
		$data['help_shopname'] = $this->language->get('help_shopname');
		$data['help_company'] = $this->language->get('help_company');
		$data['help_id'] = $this->language->get('help_id');
		$data['help_type'] = $this->language->get('help_type');
		$data['help_name'] = $this->language->get('help_name');
		$data['help_model'] = $this->language->get('help_model');
		$data['help_vendorcode'] = $this->language->get('help_vendorcode');
		$data['help_barcode'] = $this->language->get('help_barcode');
		$data['help_image'] = $this->language->get('help_image');
		$data['help_image_resize'] = $this->language->get('help_image_resize');
		$data['help_image_quantity'] = $this->language->get('help_image_quantity');
		$data['help_desc_html'] = htmlspecialchars($this->language->get('help_desc_html'));
		$data['help_param'] = $this->language->get('help_param');
		$data['help_main_category'] = $this->language->get('help_main_category');
		$data['help_category'] = $this->language->get('help_category');
		$data['help_manufacturer'] = $this->language->get('help_manufacturer');
		$data['help_currency'] = $this->language->get('help_currency');
		$data['help_in_stock'] = $this->language->get('help_in_stock');
		$data['help_out_of_stock'] = $this->language->get('help_out_of_stock');
		$data['help_preorder'] = $this->language->get('help_preorder');
		$data['help_quantity_status'] = $this->language->get('help_quantity_status');
		//$data['help_from_charset'] = $this->language->get('help_from_charset');
		$data['help_yandex_market'] = $this->language->get('help_yandex_market');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['tab_general'] = $this->language->get('tab_general');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['error_image_width'])) {
			$data['error_image_width'] = $this->error['error_image_width'];
		} else {
			$data['error_image_width'] = '';
		}

		if (isset($this->error['error_image_height'])) {
			$data['error_image_height'] = $this->error['error_image_height'];
		} else {
			$data['error_image_height'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_feed'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=feed', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/feed/yandex_market', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/feed/yandex_market', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=feed', true);

		if (isset($this->request->post['yandex_market_status'])) {
			$data['yandex_market_status'] = $this->request->post['yandex_market_status'];
		} else {
			$data['yandex_market_status'] = $this->config->get('yandex_market_status');
		}

		if (isset($this->request->post['yandex_market_secret_key'])) {
			$data['yandex_market_secret_key'] = $this->request->post['yandex_market_secret_key'];
		} else {
			$data['yandex_market_secret_key'] = $this->config->get('yandex_market_secret_key');
		}

		if (isset($this->request->post['yandex_market_shopname'])) {
			$data['yandex_market_shopname'] = $this->request->post['yandex_market_shopname'];
		} else {
			$data['yandex_market_shopname'] = $this->config->get('yandex_market_shopname');
		}

		if (isset($this->request->post['yandex_market_company'])) {
			$data['yandex_market_company'] = $this->request->post['yandex_market_company'];
		} else {
			$data['yandex_market_company'] = $this->config->get('yandex_market_company');
		}

		if (isset($this->request->post['yandex_market_id'])) {
			$data['yandex_market_id'] = $this->request->post['yandex_market_id'];
		} elseif ($this->config->has('yandex_market_id')) {
			$data['yandex_market_id'] = $this->config->get('yandex_market_id');
		} else {
			$data['yandex_market_id'] = 'product_id';
		}

		if (isset($this->request->post['yandex_market_type'])) {
			$data['yandex_market_type'] = $this->request->post['yandex_market_type'];
		} else {
			$data['yandex_market_type'] = $this->config->get('yandex_market_type');
		}

		$data['code_man'] = array('not_unload', 'name', 'meta_h1', 'meta_title', 'meta_keyword', 'meta_description', 'model', 'sku', 'upc', 'ean', 'jan', 'isbn', 'mpn', 'location');

		if (isset($this->request->post['yandex_market_name'])) {
			$data['yandex_market_name'] = $this->request->post['yandex_market_name'];
		} elseif ($this->config->has('yandex_market_name')) {
			$data['yandex_market_name'] = $this->config->get('yandex_market_name');
		} else {
			$data['yandex_market_name'] = 'name';
		}

		if (isset($this->request->post['yandex_market_model'])) {
			$data['yandex_market_model'] = $this->request->post['yandex_market_model'];
		} elseif ($this->config->has('yandex_market_model')) {
			$data['yandex_market_model'] = $this->config->get('yandex_market_model');
		} else {
			$data['yandex_market_model'] = 'model';
		}

		if (isset($this->request->post['yandex_market_vendorcode'])) {
			$data['yandex_market_vendorcode'] = $this->request->post['yandex_market_vendorcode'];
		} elseif ($this->config->has('yandex_market_vendorcode')) {
			$data['yandex_market_vendorcode'] = $this->config->get('yandex_market_vendorcode');
		} else {
			$data['yandex_market_vendorcode'] = 'sku';
		}

		if (isset($this->request->post['yandex_market_barcode'])) {
			$data['yandex_market_barcode'] = $this->request->post['yandex_market_barcode'];
		} elseif ($this->config->has('yandex_market_barcode')) {
			$data['yandex_market_barcode'] = $this->config->get('yandex_market_barcode');
		} else {
			$data['yandex_market_barcode'] = 'ean';
		}

		if (isset($this->request->post['yandex_market_image'])) {
			$data['yandex_market_image'] = $this->request->post['yandex_market_image'];
		} elseif ($this->config->has('yandex_market_image')) {
			$data['yandex_market_image'] = $this->config->get('yandex_market_image');
		} else {
			$data['yandex_market_image'] = 1;
		}

		if (isset($this->request->post['yandex_market_image_width'])) {
			$data['yandex_market_image_width'] = $this->request->post['yandex_market_image_width'];
		} elseif ($this->config->has('yandex_market_image_width')) {
			$data['yandex_market_image_width'] = $this->config->get('yandex_market_image_width');
		} else {
			$data['yandex_market_image_width'] = 600;
		}

		if (isset($this->request->post['yandex_market_image_height'])) {
			$data['yandex_market_image_height'] = $this->request->post['yandex_market_image_height'];
		} elseif ($this->config->has('yandex_market_image_height')) {
			$data['yandex_market_image_height'] = $this->config->get('yandex_market_image_height');
		} else {
			$data['yandex_market_image_height'] = 600;
		}

		if (isset($this->request->post['yandex_market_image_quantity'])) {
			$data['yandex_market_image_quantity'] = $this->request->post['yandex_market_image_quantity'];
		} elseif ($this->config->has('yandex_market_image_quantity')) {
			$data['yandex_market_image_quantity'] = $this->config->get('yandex_market_image_quantity');
		} else {
			$data['yandex_market_image_quantity'] = 10;
		}

		if (isset($this->request->post['yandex_market_desc_html'])) {
			$data['yandex_market_desc_html'] = $this->request->post['yandex_market_desc_html'];
		} elseif ($this->config->has('yandex_market_desc_html')) {
			$data['yandex_market_desc_html'] = $this->config->get('yandex_market_desc_html');
		} else {
			$data['yandex_market_desc_html'] = 1;
		}

		if (isset($this->request->post['yandex_market_param'])) {
			$data['yandex_market_param'] = $this->request->post['yandex_market_param'];
		} elseif ($this->config->has('yandex_market_param')) {
			$data['yandex_market_param'] = $this->config->get('yandex_market_param');
		} else {
			$data['yandex_market_param'] = 0;
		}

		if (isset($this->request->post['yandex_market_main_category'])) {
			$data['yandex_market_main_category'] = $this->request->post['yandex_market_main_category'];
		} elseif ($this->config->has('yandex_market_main_category')) {
			$data['yandex_market_main_category'] = $this->config->get('yandex_market_main_category');
		} else {
			$data['yandex_market_main_category'] = 1;
		}

		$this->load->model('catalog/category');

		$data['categories'] = $this->model_catalog_category->getCategories();

		if (isset($this->request->post['yandex_market_categories'])) {
			$data['yandex_market_categories'] = $this->request->post['yandex_market_categories'];
		} elseif ($this->config->has('yandex_market_categories')) {
			$data['yandex_market_categories'] = explode(',', $this->config->get('yandex_market_categories'));
		} else {
			$data['yandex_market_categories'] = array();
		}

		$this->load->model('catalog/manufacturer');

		$data['manufacturers'] = $this->model_catalog_manufacturer->getManufacturers();

		if (isset($this->request->post['yandex_market_manufacturers'])) {
			$data['yandex_market_manufacturers'] = $this->request->post['yandex_market_manufacturers'];
		} elseif ($this->config->has('yandex_market_manufacturers')) {
			$data['yandex_market_manufacturers'] = explode(',', $this->config->get('yandex_market_manufacturers'));
		} else {
			$data['yandex_market_manufacturers'] = array();
		}

		$this->load->model('localisation/currency');

		$currencies = $this->model_localisation_currency->getCurrencies();

		$allowed_currencies = array_flip(array('RUR', 'RUB', 'USD', 'BYN', 'BYR', 'KZT', 'EUR', 'UAH'));

		$data['currencies'] = array_intersect_key($currencies, $allowed_currencies);

		if (isset($this->request->post['yandex_market_currency'])) {
			$data['yandex_market_currency'] = $this->request->post['yandex_market_currency'];
		} else {
			$data['yandex_market_currency'] = $this->config->get('yandex_market_currency');
		}

		$this->load->model('localisation/stock_status');

		$data['stock_statuses'] = $this->model_localisation_stock_status->getStockStatuses();

		if (isset($this->request->post['yandex_market_in_stock'])) {
			$data['yandex_market_in_stock'] = $this->request->post['yandex_market_in_stock'];
		} elseif ($this->config->get('yandex_market_in_stock')) {
			$data['yandex_market_in_stock'] = $this->config->get('yandex_market_in_stock');
		} else {
			$data['yandex_market_in_stock'] = 7;
		}

		if (isset($this->request->post['yandex_market_out_of_stock'])) {
			$data['yandex_market_out_of_stock'] = $this->request->post['yandex_market_out_of_stock'];
		} elseif ($this->config->get('yandex_market_out_of_stock')) {
			$data['yandex_market_out_of_stock'] = $this->config->get('yandex_market_out_of_stock');
		} else {
			$data['yandex_market_out_of_stock'] = 5;
		}

		if (isset($this->request->post['yandex_market_preorder'])) {
			$data['yandex_market_preorder'] = $this->request->post['yandex_market_preorder'];
		} elseif ($this->config->get('yandex_market_preorder')) {
			$data['yandex_market_preorder'] = $this->config->get('yandex_market_preorder');
		} else {
			$data['yandex_market_preorder'] = 8;
		}

		if (isset($this->request->post['yandex_market_quantity_status'])) {
			$data['yandex_market_quantity_status'] = $this->request->post['yandex_market_quantity_status'];
		} else {
			$data['yandex_market_quantity_status'] = $this->config->get('yandex_market_quantity_status');
		}

		if (isset($this->request->post['yandex_market_from_charset'])) {
			$data['yandex_market_from_charset'] = $this->request->post['yandex_market_from_charset'];
		} else {
			$data['yandex_market_from_charset'] = $this->config->get('yandex_market_from_charset');
		}

		$data['data_feed'] = ($this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG) . 'index.php?route=extension/feed/yandex_market' . ($this->config->get('yandex_market_secret_key') ? '&secret_key=' . $this->config->get('yandex_market_secret_key') : false);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/feed/yandex_market', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/feed/yandex_market')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (empty($this->request->post['yandex_market_image_width'])) {
			$this->error['error_image_width'] = $this->language->get('error_image_width');
		} else {
			if ($this->request->post['yandex_market_image_width'] < 250) {
				$this->error['error_image_width'] = $this->language->get('error_image_width_min');
			} elseif ($this->request->post['yandex_market_image_width'] > 3500) {
				$this->error['error_image_width'] = $this->language->get('error_image_width_max');
			}
		}

		if (empty($this->request->post['yandex_market_image_height'])) {
			$this->error['error_image_height'] = $this->language->get('error_image_height');
		} else {
			if ($this->request->post['yandex_market_image_height'] < 250) {
				$this->error['error_image_height'] = $this->language->get('error_image_height_min');
			} elseif ($this->request->post['yandex_market_image_height'] > 3500) {
				$this->error['error_image_height'] = $this->language->get('error_image_height_max');
			}
		}

		return !$this->error;
	}
}
