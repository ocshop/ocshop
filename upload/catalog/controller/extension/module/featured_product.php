<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerExtensionModuleFeaturedProduct extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured_product');

		$this->load->model('catalog/cms');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_tax'] = $this->language->get('text_tax');

		$data['button_cart'] = $this->language->get('button_cart');
		$data['button_wishlist'] = $this->language->get('button_wishlist');
		$data['button_compare'] = $this->language->get('button_compare');

		$data['products'] = array();

		if (empty($setting['limit'])) {
			$setting['limit'] = 4;
		}

		$results = array();

		if (isset($this->request->get['manufacturer_id'])) {
			$filter_data = array(
				'manufacturer_id' => $this->request->get['manufacturer_id'],
				'limit'           => $setting['limit']
			);

			$results = $this->model_catalog_cms->getProductRelatedByManufacturer($filter_data);
		} else {
			if (isset($this->request->get['path'])) {
				$parts = explode('_', (string)$this->request->get['path']);

				if(!empty($parts) && is_array($parts)) {
					$filter_data = array(
						'category_id' => array_pop($parts),
						'limit'       => $setting['limit']
					);

					$results = $this->model_catalog_cms->getProductRelatedByCategory($filter_data);
				}
			}
		}

		if ($results) {
			foreach ($results as $product) {
				if ($product) {
					if ($product['image']) {
						$image = $this->model_tool_image->resize($product['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product['special']) {
						$special = $this->currency->format($this->tax->calculate($product['special'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product['special'] ? $product['special'] : $product['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product['rating'];
					} else {
						$rating = false;
					}

					if ($product['description_mini']) {
						$product['description'] = $product['description_mini'];
					}

					$data['products'][] = array(
						'product_id'  => $product['product_id'],
						'thumb'       => $image,
						'name'        => $product['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($product['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'sticker'     => $this->getProStickers($product['product_id']),
						'minimum'     => $product['minimum'] > 0 ? $product['minimum'] : 1,
						'rating'      => $rating,
						'href'        => $this->url->link('product/product', 'product_id=' . $product['product_id'])
					);
				}
			}

			return $this->load->view('extension/module/featured_product', $data);
		}
	}

	private function getProStickers($product_id) {
		$stickers = $this->model_catalog_product->getProductStickerbyProductId($product_id);

		if (!$stickers) {
			return;
		}

		$server = $this->request->server['HTTPS'] ? $this->config->get('config_ssl') : $this->config->get('config_url');

		$data['stickers'] = array();

		foreach ($stickers as $sticker) {
			$data['stickers'][] = array(
				'position' => $sticker['position'],
				'name'     => $sticker['name'],
				'image'    => ($sticker['image'] ? $server . 'image/' . $sticker['image'] : false)
			);
		}

		return $this->load->view('product/stickers', $data);
	}
}