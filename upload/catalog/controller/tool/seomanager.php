<?PHP
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerToolSeoManager extends Controller {
	public function event(&$route, &$data, &$output) {
		if (!defined('DIR_CATALOG')) {
			if (!isset($data['description'])) {
				$data['description'] = false;
			}

			if (!isset($data['description_bottom'])) {
				$data['description_bottom'] = false;
			}

			if ((isset($data['footer']) || $route == 'common/header') && isset($this->request->get['route'])) {
				$seomanager = $this->db->query("SELECT * FROM `" . DB_PREFIX . "pro_seo_tag` st LEFT JOIN `" . DB_PREFIX . "pro_seo_tag_to_store` stts ON (st.seo_tag_id = stts.seo_tag_id) WHERE st.status = '1' AND stts.store_id = '" . (int)$this->config->get('config_store_id') . "' AND st.query = '" . $this->db->escape($this->request->get['route']) . "'")->row;

				if ($seomanager) {
					$seomanager_desc = $this->db->query("SELECT * FROM `" . DB_PREFIX . "pro_seo_tag_description` WHERE seo_tag_id = '" . (int)$seomanager['seo_tag_id'] . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'")->row;

					if ($route == 'common/header') {
						if ($seomanager_desc['meta_title']) {
							$this->document->setTitle($seomanager_desc['meta_title']);
						}

						if ($seomanager_desc['meta_description']) {
							$this->document->setDescription($seomanager_desc['meta_description']);
						}

						if ($seomanager_desc['meta_keyword']) {
							$this->document->setKeywords($seomanager_desc['meta_keyword']);
						}
					} else {
						if ($seomanager['view']) {
							$route = $seomanager['view'];
						}

						if ($seomanager_desc['meta_h1']) {
							$data['heading_title'] = $seomanager_desc['meta_h1'];
						}

						if ($seomanager_desc['description']) {
							$data['description'] = html_entity_decode($seomanager_desc['description'], ENT_QUOTES, 'UTF-8');
						}

						if ($seomanager_desc['description_bottom']) {
							$data['description_bottom'] = html_entity_decode($seomanager_desc['description_bottom'], ENT_QUOTES, 'UTF-8');
						}
					}
				}
			}
		}
	}
}
