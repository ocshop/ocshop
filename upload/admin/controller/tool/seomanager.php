<?php
// *	@copyright	OPENCART.PRO 2011 - 2025.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerToolSeoManager extends Controller {
	private $error = array();

	public function index() {
		// обновление с версии 2.3.0.2.5
		$this->updateModule();
		// обновление с версии 2.3.0.2.5

		$this->load->language('tool/seomanager');

		$this->load->model('tool/seomanager');

		$this->getList();
	}

	public function save() {
		$this->load->language('tool/seomanager');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('tool/seomanager');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$url = '';

			if (isset($this->request->get['filter_query'])) {
				$url .= '&filter_query=' . urlencode($this->request->get['filter_query']);
			}

			if (isset($this->request->get['filter_keyword'])) {
				$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page_url'])) {
				$url .= '&page_url=' . $this->request->get['page_url'];
			} elseif (isset($this->request->get['page_tag'])) {
				$url .= '&page_tag=' . $this->request->get['page_tag'];
			}

			if (isset($this->request->post['query']) && !isset($this->request->post['meta'])) {
				$this->model_tool_seomanager->updateUrlAlias($this->request->post);

				$this->session->data['success'] = $this->language->get('success_update_url');

				if (isset($this->request->get['filter_additional'])) {
					$url .= '&filter_additional=' . urlencode($this->request->get['filter_additional']);
				}

				$this->response->redirect($this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . $url, true));
			} elseif (isset($this->request->post['meta'])) {
				$this->model_tool_seomanager->updateSeoTag($this->request->post);

				$this->session->data['success'] = $this->language->get('success');

				if (isset($this->request->get['filter_store'])) {
					$url .= '&filter_store=' . urlencode($this->request->get['filter_store']);
				}

				$this->response->redirect($this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . $url . '#tab_seotag', true));
			}
		}

		$this->getList();
	}

	public function clear() {
		$this->load->language('tool/seomanager');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('tool/seomanager');

		if ($this->validate()) {
			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url');

			$this->session->data['success'] = $this->language->get('success_clear');

			$url = '';

			if (isset($this->request->get['filter_query'])) {
				$url .= '&filter_query=' . urlencode($this->request->get['filter_query']);
			}

			if (isset($this->request->get['filter_keyword'])) {
				$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
			}

			if (isset($this->request->get['filter_additional'])) {
				$url .= '&filter_additional=' . urlencode($this->request->get['filter_additional']);
			}

			if (isset($this->request->get['filter_store'])) {
				$url .= '&filter_store=' . urlencode($this->request->get['filter_store']);
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page_url'])) {
				$url .= '&page_url=' . $this->request->get['page_url'];
			} elseif (isset($this->request->get['page_tag'])) {
				$url .= '&page_tag=' . $this->request->get['page_tag'];
			}

			$this->response->redirect($this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . $url, true));
		}

		$this->getList();
	}

	public function delete() {
		$this->load->language('tool/seomanager');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('tool/seomanager');

		if ($this->validate()) {
			$url = '';

			if (isset($this->request->get['filter_query'])) {
				$url .= '&filter_query=' . urlencode($this->request->get['filter_query']);
			}

			if (isset($this->request->get['filter_keyword'])) {
				$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page_url'])) {
				$url .= '&page_url=' . $this->request->get['page_url'];
			} elseif (isset($this->request->get['page_tag'])) {
				$url .= '&page_tag=' . $this->request->get['page_tag'];
			}

			if (isset($this->request->post['selected_url'])) {
				foreach ($this->request->post['selected_url'] as $url_alias_id) {
					$this->model_tool_seomanager->deleteUrlAlias($url_alias_id);
				}

				$this->session->data['success'] = $this->language->get('success_delete_url');

				if (isset($this->request->get['filter_additional'])) {
					$url .= '&filter_additional=' . urlencode($this->request->get['filter_additional']);
				}

				$this->response->redirect($this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . $url, true));
			} elseif (isset($this->request->post['selected_tag'])) {
				foreach ($this->request->post['selected_tag'] as $seo_tag_id) {
					$this->model_tool_seomanager->deleteSeoTag($seo_tag_id);
				}

				$this->session->data['success'] = $this->language->get('success_delete_tag');

				if (isset($this->request->get['filter_store'])) {
					$url .= '&filter_store=' . urlencode($this->request->get['filter_store']);
				}

				$this->response->redirect($this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . $url . '#tab_seotag', true));
			} else {
				$this->session->data['info'] = $this->language->get('info_hz');
			}
		}

		$this->getList();
	}

	protected function getList() {
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_all'] = $this->language->get('text_all');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_additional_1'] = $this->language->get('text_additional_1');
		$data['text_additional_2'] = $this->language->get('text_additional_2');
		$data['text_additional_3'] = $this->language->get('text_additional_3');
		$data['text_description'] = $this->language->get('text_description');
		$data['text_description_bottom'] = $this->language->get('text_description_bottom');
		$data['text_no_results'] = $this->language->get('text_no_results');

		$data['column_query'] = $this->language->get('column_query');
		$data['column_keyword'] = $this->language->get('column_keyword');
		$data['column_store'] = $this->language->get('column_store');
		$data['column_route'] = $this->language->get('column_route');
		$data['column_action'] = $this->language->get('column_action');

		$data['entry_query'] = $this->language->get('entry_query');
		$data['entry_keyword'] = $this->language->get('entry_keyword');
		$data['entry_additional'] = $this->language->get('entry_additional');
		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_route'] = $this->language->get('entry_route');
		$data['entry_view'] = $this->language->get('entry_view');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_meta_h1'] = $this->language->get('entry_meta_h1');
		$data['entry_meta_title'] = $this->language->get('entry_meta_title');
		$data['entry_meta_description'] = $this->language->get('entry_meta_description');
		$data['entry_meta_keyword'] = $this->language->get('entry_meta_keyword');
		$data['entry_description'] = $this->language->get('entry_description');
		$data['entry_description_bottom'] = $this->language->get('entry_description_bottom');
		$data['entry_status'] = $this->language->get('entry_status');

		$data['help_query'] = $this->language->get('help_query');
		$data['help_route'] = $this->language->get('help_route');
		$data['help_view'] = sprintf($this->language->get('help_view'), $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory'));
		$data['help_keyword'] = $this->language->get('help_keyword');

		$data['button_insert'] = $this->language->get('button_insert');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_clear_cache'] = $this->language->get('button_clear_cache');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_filter'] = $this->language->get('button_filter');
		$data['button_clear'] = $this->language->get('button_clear');

		$data['tab_seourl'] = $this->language->get('tab_seourl');
		$data['tab_seotag'] = $this->language->get('tab_seotag');

		$data['token'] = $this->session->data['token'];

		$url = '';

		if (isset($this->request->get['filter_query'])) {
			$url .= '&filter_query=' . urlencode($this->request->get['filter_query']);
		}

		if (isset($this->request->get['filter_keyword'])) {
			$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
		}

		if (isset($this->request->get['filter_additional'])) {
			$url .= '&filter_additional=' . urlencode($this->request->get['filter_additional']);
		}

		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode($this->request->get['filter_store']);
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page_url'])) {
			$url .= '&page_url=' . $this->request->get['page_url'];
		} elseif (isset($this->request->get['page_tag'])) {
			$url .= '&page_tag=' . $this->request->get['page_tag'];
		}

		$data['save'] = $this->url->link('tool/seomanager/save', 'token=' . $this->session->data['token'] . $url, true);
		$data['clear'] = $this->url->link('tool/seomanager/clear', 'token=' . $this->session->data['token'] . $url, true);
		$data['delete'] = $this->url->link('tool/seomanager/delete', 'token=' . $this->session->data['token'] . $url, true);
		$data['cancel'] = $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'], true);

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . $url, true)
		);

		if (isset($this->error['error'])) {
			$data['error'] = $this->error['error'];
		} else {
			$data['error'] = '';
		}

		if (isset($this->error['query_url'])) {
			$data['error_query_url'] = $this->error['query_url'];
		} else {
			$data['error_query_url'] = '';
		}

		if (isset($this->error['keyword_url'])) {
			$data['error_keyword_url'] = $this->error['keyword_url'];
		} else {
			$data['error_keyword_url'] = '';
		}

		if (isset($this->error['query_tag'])) {
			$data['error_query_tag'] = $this->error['query_tag'];
		} else {
			$data['error_query_tag'] = '';
		}

		if (isset($this->error['meta_h1'])) {
			$data['error_meta_h1'] = $this->error['meta_h1'];
		} else {
			$data['error_meta_h1'] = array();
		}

		if (isset($this->error['meta_title'])) {
			$data['error_meta_title'] = $this->error['meta_title'];
		} else {
			$data['error_meta_title'] = array();
		}

		if (isset($this->error['meta_description'])) {
			$data['error_meta_description'] = $this->error['meta_description'];
		} else {
			$data['error_meta_description'] = array();
		}

		if (isset($this->error['meta_keyword'])) {
			$data['error_meta_keyword'] = $this->error['meta_keyword'];
		} else {
			$data['error_meta_keyword'] = array();
		}

		if (isset($this->error['keyword_tag'])) {
			$data['error_keyword_tag'] = $this->error['keyword_tag'];
		} else {
			$data['error_keyword_tag'] = '';
		}

		if (isset($this->session->data['info'])) {
			$data['info'] = $this->session->data['info'];

			unset($this->session->data['info']);
		} else {
			$data['info'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected_url']) && $this->validateStatusPro()) {
			$data['selected_url'] = (array)$this->request->post['selected_url'];
		} else {
			$data['selected_url'] = array();
		}

		if (isset($this->request->post['query'])) {
			$data['query'] = $this->request->post['query'];
		} else {
			$data['query'] = false;
		}

		if (isset($this->request->post['keyword'])) {
			$data['keyword'] = $this->request->post['keyword'];
		} else {
			$data['keyword'] = false;
		}

		if (isset($this->request->post['keyword'])) {
			$data['keyword'] = $this->request->post['keyword'];
		} else {
			$data['keyword'] = false;
		}

		if (isset($this->request->post['url_alias_id'])) {
			$data['url_alias_id'] = $this->request->post['url_alias_id'];
		} else {
			$data['url_alias_id'] = 0;
		}

		if (isset($this->request->post['selected_tag']) && $this->validateStatusPro()) {
			$data['selected_tag'] = (array)$this->request->post['selected_tag'];
		} else {
			$data['selected_tag'] = array();
		}

		if (isset($this->request->post['view'])) {
			$data['view'] = $this->request->post['view'];
		} else {
			$data['view'] = false;
		}

		if (isset($this->request->post['meta'])) {
			$data['meta'] = $this->request->post['meta'];
		} else {
			$data['meta'] = array();
		}

		if (isset($this->request->post['store'])) {
			$data['store_id'] = $this->request->post['store'];
		} else {
			$data['store_id'] = array(0);
		}

		if (isset($this->request->post['seo_tag_id'])) {
			$data['seo_tag_id'] = $this->request->post['seo_tag_id'];
		} else {
			$data['seo_tag_id'] = 0;
		}

		$data['url_aliases'] = array();

		if (isset($this->request->get['filter_query'])) {
			$filter_query = $this->request->get['filter_query'];
		} else {
			$filter_query = null;
		}

		if (isset($this->request->get['filter_keyword'])) {
			$filter_keyword = $this->request->get['filter_keyword'];
		} else {
			$filter_keyword = null;
		}

		if (isset($this->request->get['filter_additional'])) {
			$filter_additional = $this->request->get['filter_additional'];
		} else {
			$filter_additional = -1;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = false;
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page_url'])) {
			$page_url = (int)$this->request->get['page_url'];
		} else {
			$page_url = 1;
		}

		$filterdata = array(
			'filter_query'      => $filter_query,
			'filter_keyword'    => $filter_keyword,
			'filter_additional' => $filter_additional,
			'sort'              => $sort, 
			'order'             => $order, 
			'start'             => ($page_url - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$url_alias_total = $this->model_tool_seomanager->getTotalUrlAalias($filterdata);

		$results = $this->model_tool_seomanager->getUrlAaliases($filterdata);

		foreach ($results as $result) {
			$data['url_aliases'][] = array(
				'url_alias_id' => $result['url_alias_id'], 
				'query'        => $result['query'],
				'keyword'      => $result['keyword'],
				'selected_url' => isset($this->request->post['selected_url']) && in_array($result['url_alias_id'], $this->request->post['selected_url']), 
				'action_text'  => $this->language->get('text_edit')
			);
		}

		$this->load->model('setting/store');

		$data['stores'] = array();

		$store_default = array(
			'store_id' => 0,
			'name' => ($this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG) . ' - ' . $this->config->get('config_name') . ' ' . $this->language->get('text_default'),
			'url' => ($this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG)
		);

		$data['stores'][] = $store_default;

		$stores = $this->model_setting_store->getStores();

		foreach ($stores as $store) {
			$data['stores'][] = $store;
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['seo_tags'] = array();

		if (isset($this->request->get['filter_store'])) {
			$filter_store = $this->request->get['filter_store'];
		} else {
			$filter_store = -1;
		}

		if (isset($this->request->get['page_tag'])) {
			$page_tag = (int)$this->request->get['page_tag'];
		} else {
			$page_tag = 1;
		}

		$filterdata = array(
			'filter_store'      => $filter_store,
			'filter_query'      => $filter_query,
			'filter_keyword'    => $filter_keyword,
			'sort'              => $sort, 
			'order'             => $order, 
			'start'             => ($page_tag - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$seo_tags_total = $this->model_tool_seomanager->getTotalSeoTags($filterdata);

		$results = $this->model_tool_seomanager->getSeoTags($filterdata);

		foreach ($results as $result) {
			$store_data = array();

			$store_id = $this->model_tool_seomanager->getSeoTagStores($result['seo_tag_id']);

			foreach ($store_id as $store) {
				if (!$store) {
					$store_data[] = $store_default;
				} else {
					$store = $this->model_setting_store->getStore($store);

					if ($store) {
						$store_data[] = $store;
					}
				}
			}

			$data['seo_tags'][] = array(
				'seo_tag_id'   => $result['seo_tag_id'],
				'store_id'     => $store_id,
				'store'        => $store_data,
				'query'        => $result['query'],
				'view'         => $result['view'],
				'meta'         => $this->model_tool_seomanager->getSeoTagMeta($result['seo_tag_id']),
				'keyword'      => $result['keyword'],
				'status'       => $result['status'],
				'selected_tag' => isset($this->request->post['selected_tag']) && in_array($result['seo_tag_id'], $this->request->post['selected_tag']), 
				'action_text'  => $this->language->get('text_edit')
			);
		}

		$url = '';

		if (isset($this->request->get['filter_query'])) {
			$url .= '&filter_query=' . urlencode($this->request->get['filter_query']);
		}

		if (isset($this->request->get['filter_keyword'])) {
			$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
		}

		if (isset($this->request->get['filter_additional'])) {
			$url .= '&filter_additional=' . urlencode($this->request->get['filter_additional']);
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$url .= '&page_url={page}';

		$pagination = new Pagination();
		$pagination->total = $url_alias_total;
		$pagination->page = $page_url;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . $url, true);

		$data['filter_query'] = $filter_query;
		$data['filter_keyword'] = $filter_keyword;
		$data['filter_additional'] = $filter_additional;
		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['pagination_url'] = $pagination->render();
		if ($data['pagination_url']) {
			$data['pagination_url'] = str_replace('&amp;page_url={page}', '', $data['pagination_url']);
		}
		$data['results_url'] = sprintf($this->language->get('text_pagination'), ($url_alias_total) ? (($page_url - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page_url - 1) * $this->config->get('config_limit_admin')) > ($url_alias_total - $this->config->get('config_limit_admin'))) ? $url_alias_total : ((($page_url - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $url_alias_total, ceil($url_alias_total / $this->config->get('config_limit_admin')));

		$url = '';

		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode($this->request->get['filter_store']);
		}

		if (isset($this->request->get['filter_query'])) {
			$url .= '&filter_query=' . urlencode($this->request->get['filter_query']);
		}

		if (isset($this->request->get['filter_keyword'])) {
			$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$url .= '&page_tag={page}';

		$pagination = new Pagination();
		$pagination->total = $seo_tags_total;
		$pagination->page = $page_tag;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . $url . '#tab_seotag', true);

		$data['filter_store'] = $filter_store;

		$data['pagination_tag'] = $pagination->render();
		if ($data['pagination_tag']) {
			$data['pagination_tag'] = str_replace('&amp;page_tag={page}', '', $data['pagination_tag']);
		}
		$data['results_tag'] = sprintf($this->language->get('text_pagination'), ($seo_tags_total) ? (($page_tag - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page_tag - 1) * $this->config->get('config_limit_admin')) > ($seo_tags_total - $this->config->get('config_limit_admin'))) ? $seo_tags_total : ((($page_tag - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $seo_tags_total, ceil($seo_tags_total / $this->config->get('config_limit_admin')));

		$url = '';

		if (isset($this->request->get['filter_query'])) {
			$url .= '&filter_query=' . urlencode($this->request->get['filter_query']);
		}

		if (isset($this->request->get['filter_keyword'])) {
			$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
		}

		if (isset($this->request->get['filter_additional'])) {
			$url .= '&filter_additional=' . urlencode($this->request->get['filter_additional']);
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page_url'])) {
			$url .= '&page_url=' . $this->request->get['page_url'];
		}

		$data['sort_query_url'] = $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . '&sort=ua.query' . $url, true);
		$data['sort_keyword_url'] = $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . '&sort=ua.keyword' . $url, true);

		$url = '';

		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode($this->request->get['filter_store']);
		}

		if (isset($this->request->get['filter_query'])) {
			$url .= '&filter_query=' . urlencode($this->request->get['filter_query']);
		}

		if (isset($this->request->get['filter_keyword'])) {
			$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page_tag'])) {
			$url .= '&page_tag=' . $this->request->get['page_tag'];
		}

		$data['sort_store'] = $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . '&sort=st.store' . $url . '#tab_seotag', true);
		$data['sort_query_tag'] = $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . '&sort=st.query' . $url . '#tab_seotag', true);
		$data['sort_keyword_tag'] = $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . '&sort=st.keyword' . $url . '#tab_seotag', true);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('tool/seomanager', $data));
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'tool/seomanager')) {
			$this->error['error'] = $this->language->get('error_permission');
		}

		if (isset($this->request->post['query'])) {
			if (!$this->request->post['query']) {
				$this->error['query_url'] = $this->language->get('error_query');
				$this->error['error'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['query']) && isset($this->request->post['meta'])) {
			if (!$this->request->post['query']) {
				$this->error['query_tag'] = $this->language->get('error_route');
				$this->error['error'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['meta'])) {
			foreach ($this->request->post['meta'] as $language_id => $value) {
				if ((utf8_strlen($value['meta_h1']) < 0) || (utf8_strlen($value['meta_h1']) > 300)) {
					$this->error['meta_h1'][$language_id] = $this->language->get('error_meta_h1');
					$this->error['error'] = $this->language->get('error_warning');
				}

				if ((utf8_strlen($value['meta_title']) < 0) || (utf8_strlen($value['meta_title']) > 300)) {
					$this->error['meta_title'][$language_id] = $this->language->get('error_meta_title');
					$this->error['error'] = $this->language->get('error_warning');
				}

				if ((utf8_strlen($value['meta_description']) < 0) || (utf8_strlen($value['meta_description']) > 300)) {
					$this->error['meta_description'][$language_id] = $this->language->get('error_meta_description');
					$this->error['error'] = $this->language->get('error_warning');
				}

				if ((utf8_strlen($value['meta_keyword']) < 0) || (utf8_strlen($value['meta_keyword']) > 300)) {
					$this->error['meta_keyword'][$language_id] = $this->language->get('error_meta_keyword');
					$this->error['error'] = $this->language->get('error_warning');
				}
			}
		}

		if (isset($this->request->post['query']) && isset($this->request->post['keyword'])) {
			if (utf8_strlen($this->request->post['keyword']) > 0) {
				$this->load->model('catalog/url_alias');

				$url_alias_info = $this->model_catalog_url_alias->getUrlAlias($this->request->post['keyword']);

				if ($url_alias_info && $url_alias_info['query'] != $this->request->post['query']) {
					if (!isset($this->request->post['meta'])) {
						$this->error['keyword_url'] = sprintf($this->language->get('error_keyword')) . ' <a href="' . $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . '&filter_query=' . $url_alias_info['query'], true) . '" target="_blank">' . $url_alias_info['query'] . '</a>';
						$this->error['error'] = $this->language->get('error_warning');
					} else {
						$this->error['keyword_tag'] = sprintf($this->language->get('error_keyword')) . ' <a href="' . $this->url->link('tool/seomanager', 'token=' . $this->session->data['token'] . '&filter_query=' . $url_alias_info['query'], true) . '" target="_blank">' . $url_alias_info['query'] . '</a>';
						$this->error['error'] = $this->language->get('error_warning');
					}
				}
			}
		}

		return !$this->error;
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'tool/seomanager')) {
			$this->error['error'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	// обновление с версии 2.3.0.2.5
	private function updateModule() {
		if ($this->config->get('seomanager_meta_title_bestseller') || $this->config->get('seomanager_meta_title_latest') || $this->config->get('seomanager_meta_title_mostviewed') || $this->config->get('seomanager_meta_title_special')) {
			$this->load->model('localisation/language');

			$this->load->model('setting/setting');

			$languages = $this->model_localisation_language->getLanguages();

			if ($this->config->get('seomanager_meta_title_bestseller')) {
				$meta = array();

				foreach ($languages as $result) {
					$meta[$result['language_id']] = array(
						'meta_h1'            => $this->config->get('seomanager_meta_h1_bestseller'),
						'meta_title'         => $this->config->get('seomanager_meta_title_bestseller'),
						'meta_description'   => $this->config->get('seomanager_meta_description_bestseller'),
						'meta_keyword'       => $this->config->get('seomanager_meta_keyword_bestseller'),
						'description'        => $this->config->get('seomanager_description_bestseller'),
						'description_bottom' => $this->config->get('seomanager_description_bottom_bestseller')
					);
				}

				$up = array(
					'seo_tag_id' => 0,
					'query'      => 'product/bestseller',
					'meta'       => $meta,
					'status'     => 1,
					'store'      => array(0)
				);

				$this->model_tool_seomanager->updateSeoTag($up);
			}

			if ($this->config->get('seomanager_meta_title_latest')) {
				$meta = array();

				foreach ($languages as $result) {
					$meta[$result['language_id']] = array(
						'meta_h1'            => $this->config->get('seomanager_meta_h1_latest'),
						'meta_title'         => $this->config->get('seomanager_meta_title_latest'),
						'meta_description'   => $this->config->get('seomanager_meta_description_latest'),
						'meta_keyword'       => $this->config->get('seomanager_meta_keyword_latest'),
						'description'        => $this->config->get('seomanager_description_latest'),
						'description_bottom' => $this->config->get('seomanager_description_bottom_latest')
					);
				}

				$up = array(
					'seo_tag_id' => 0,
					'query'      => 'product/latest',
					'meta'       => $meta,
					'status'     => 1,
					'store'      => array(0)
				);

				$this->model_tool_seomanager->updateSeoTag($up);
			}

			if ($this->config->get('seomanager_meta_title_mostviewed')) {
				$meta = array();

				foreach ($languages as $result) {
					$meta[$result['language_id']] = array(
						'meta_h1'            => $this->config->get('seomanager_meta_h1_mostviewed'),
						'meta_title'         => $this->config->get('seomanager_meta_title_mostviewed'),
						'meta_description'   => $this->config->get('seomanager_meta_description_mostviewed'),
						'meta_keyword'       => $this->config->get('seomanager_meta_keyword_mostviewed'),
						'description'        => $this->config->get('seomanager_description_mostviewed'),
						'description_bottom' => $this->config->get('seomanager_description_bottom_mostviewed')
					);
				}

				$up = array(
					'seo_tag_id' => 0,
					'query'      => 'product/mostviewed',
					'meta'       => $meta,
					'status'     => 1,
					'store'      => array(0)
				);

				$this->model_tool_seomanager->updateSeoTag($up);
			}

			if ($this->config->get('seomanager_meta_title_special')) {
				$meta = array();

				foreach ($languages as $result) {
					$meta[$result['language_id']] = array(
						'meta_h1'            => $this->config->get('seomanager_meta_h1_special'),
						'meta_title'         => $this->config->get('seomanager_meta_title_special'),
						'meta_description'   => $this->config->get('seomanager_meta_description_special'),
						'meta_keyword'       => $this->config->get('seomanager_meta_keyword_special'),
						'description'        => $this->config->get('seomanager_description_special'),
						'description_bottom' => $this->config->get('seomanager_description_bottom_special')
					);
				}

				$up = array(
					'seo_tag_id' => 0,
					'query'      => 'product/special',
					'meta'       => $meta,
					'status'     => 1,
					'store'      => array(0)
				);

				$this->model_tool_seomanager->updateSeoTag($up);
			}

			// создаём событие
			$this->load->model('extension/event'); 

			$code = $this->model_extension_event->getEvent('Seomanager', 'catalog/view/*/before', 'tool/seomanager/event');

			if (!$code) {
				$this->model_extension_event->addEvent('Seomanager', 'catalog/view/*/before', 'tool/seomanager/event', 1, 1001);
			}

			$code = $this->model_extension_event->getEvent('Seomanager', 'catalog/controller/common/header/before', 'tool/seomanager/event');

			if (!$code) {
				$this->model_extension_event->addEvent('Seomanager', 'catalog/controller/common/header/before', 'tool/seomanager/event', 1, 1001);
			}

			$this->model_setting_setting->deleteSetting('seomanager');

			$this->session->data['success'] = $this->language->get('success');
		}
	}
}
