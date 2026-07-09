<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelExtensionShippingXshipping extends Model {
	function getQuote($address) {
		$this->load->language('extension/shipping/xshipping');

		$method_data = array();
		$quote_data = array();

		for($i = 1; $i <= 12; $i++) {
			if ($this->config->get('xshipping_status' . $i) && $this->config->get('xshipping_name' . $i)) {
				if (!$this->config->get('xshipping_geo_zone_id' . $i)) {
					$status = true;
				} else {
					$status = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('xshipping_geo_zone_id' . $i) . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')")->num_rows;
				}

				if ($status) {
					$shipping_cost = (float)$this->config->get('xshipping_cost' . $i);
					$free_shipping_cost = (float)$this->config->get('xshipping_free' . $i);

					if ($free_shipping_cost && $this->cart->getSubTotal() >= $free_shipping_cost) {
						$shipping_cost = 0;
					}

					$quote_data['xshipping' . $i] = array(
						'code'         => 'xshipping' . '.xshipping' . $i,
						'title'        => $this->config->get('xshipping_name' . $i),
						'cost'         => $shipping_cost,
						'tax_class_id' => $this->config->get('xshipping_tax_class_id' . $i),
						'text'         => $this->currency->format($this->tax->calculate($shipping_cost, $this->config->get('xshipping_tax_class_id' . $i), $this->config->get('config_tax')), $this->session->data['currency'])
					);
				}
			}
		}

		$method_data = array(
			'code'       => 'xshipping',
			'title'      => $this->language->get('text_title'),
			'quote'      => $quote_data,
			'sort_order' => $this->config->get('xshipping_sort_order'),
			'error'      => ''
		);

		return $method_data;
	}
}
