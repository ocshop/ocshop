<?php
// *	@copyright	OPENCART.PRO 2011 - 2022.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerReportCustomerBlogSearch extends Controller {
	private $error = array();

	public function index() {
		$this->report();
	}

	public function clear() {
		$this->load->language('report/customer_blog_search');

		if ($this->validate()) {
			$this->load->model('blog/search');

			$this->model_blog_search->clear();

			$this->session->data['success'] = $this->language->get('success_clear');
		}

		$this->response->redirect($this->url->link('report/customer_blog_search', 'token=' . $this->session->data['token'], true));
	}

	protected function report() {
		$this->load->language('report/customer_blog_search');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_all'] = $this->language->get('text_all');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_keyword'] = $this->language->get('column_keyword');
		$data['column_articles'] = $this->language->get('column_articles');
		$data['column_store'] = $this->language->get('column_store');
		$data['column_language'] = $this->language->get('column_language');
		$data['column_category'] = $this->language->get('column_category');
		$data['column_sub_category'] = $this->language->get('column_sub_category');
		$data['column_description'] = $this->language->get('column_description');
		$data['column_customer'] = $this->language->get('column_customer');
		$data['column_ip'] = $this->language->get('column_ip');
		$data['column_date_added'] = $this->language->get('column_date_added');

		$data['entry_date_start'] = $this->language->get('entry_date_start');
		$data['entry_date_end'] = $this->language->get('entry_date_end');
		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_language'] = $this->language->get('entry_language');
		$data['entry_keyword'] = $this->language->get('entry_keyword');
		$data['entry_customer'] = $this->language->get('entry_customer');
		$data['entry_ip'] = $this->language->get('entry_ip');

		$data['button_clear'] = $this->language->get('button_clear');
		$data['button_filter'] = $this->language->get('button_filter');

		$data['token'] = $this->session->data['token'];

		if (isset($this->request->get['filter_date_start'])) {
			$filter_date_start = $this->request->get['filter_date_start'];
		} else {
			$filter_date_start = '';
		}

		if (isset($this->request->get['filter_date_end'])) {
			$filter_date_end = $this->request->get['filter_date_end'];
		} else {
			$filter_date_end = '';
		}

		if (isset($this->request->get['filter_store'])) {
			$filter_store = $this->request->get['filter_store'];
		} else {
			$filter_store = -1;
		}

		if (isset($this->request->get['filter_language'])) {
			$filter_language = $this->request->get['filter_language'];
		} else {
			$filter_language = null;
		}

		if (isset($this->request->get['filter_keyword'])) {
			$filter_keyword = $this->request->get['filter_keyword'];
		} else {
			$filter_keyword = null;
		}

		if (isset($this->request->get['filter_customer'])) {
			$filter_customer = $this->request->get['filter_customer'];
		} else {
			$filter_customer = null;
		}

		if (isset($this->request->get['filter_ip'])) {
			$filter_ip = $this->request->get['filter_ip'];
		} else {
			$filter_ip = null;
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter_date_start'])) {
			$url .= '&filter_date_start=' . $this->request->get['filter_date_start'];
		}

		if (isset($this->request->get['filter_date_end'])) {
			$url .= '&filter_date_end=' . $this->request->get['filter_date_end'];
		}

		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode($this->request->get['filter_store']);
		}

		if (isset($this->request->get['filter_language'])) {
			$url .= '&filter_language=' . urlencode($this->request->get['filter_language']);
		}

		if (isset($this->request->get['filter_keyword'])) {
			$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode($this->request->get['filter_customer']);
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . $this->request->get['filter_ip'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['clear'] = $this->url->link('report/customer_blog_search/clear', 'token=' . $this->session->data['token'] . $url, true);

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true),
			'text' => $this->language->get('text_home')
		);

		$data['breadcrumbs'][] = array(
			'href' => $this->url->link('report/customer_blog_search', 'token=' . $this->session->data['token'] . $url, true),
			'text' => $this->language->get('heading_title')
		);

		if (isset($this->session->data['error'])) {
			$data['error'] = $this->session->data['error'];

			unset($this->session->data['error']);
		} elseif (isset($this->error['error'])) {
			$data['error'] = $this->error['error'];
		} else {
			$data['error'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$this->load->model('setting/store');

		$data['stores'] = array();

		$store_default = array(
			'store_id' => 0,
			'name'     => ($this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG) . ' - ' . $this->config->get('config_name') . ' ' . $this->language->get('text_default'),
			'url'      => ($this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG)
		);

		$data['stores'][] = $store_default;

		$results = $this->model_setting_store->getStores();

		foreach ($results as $result) {
			$data['stores'][] = array(
				'store_id' => $result['store_id'],
				'name'     => $result['url'] . ' - ' . $result['name'],
				'url'      => $result['url']
			);
		}

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['searches'] = array();

		$filter_data = array(
			'filter_date_start' => $filter_date_start,
			'filter_date_end'   => $filter_date_end,
			'filter_store'      => $filter_store,
			'filter_language'   => $filter_language,
			'filter_keyword'    => $filter_keyword,
			'filter_customer'   => $filter_customer,
			'filter_ip'         => $filter_ip,
			'start'             => ($page - 1) * $this->config->get('configblog_limit_admin'),
			'limit'             => $this->config->get('configblog_limit_admin')
		);

		$this->load->model('blog/category');
		$this->load->model('blog/search');

		$search_total = $this->model_blog_search->getTotalCustomerSearches($filter_data);

		$results = $this->model_blog_search->getCustomerSearches($filter_data);

		foreach ($results as $result) {
			$store = $this->model_setting_store->getStore($result['store_id']);
			if (!$store) {
				$store = $store_default;
			}
			$language = $this->model_localisation_language->getLanguage($result['language_id']);

			$category_info = $this->model_blog_category->getCategory($result['blog_category_id']);

			if ($category_info) {
				$category = ($category_info['path']) ? $category_info['path'] . ' &gt; ' . $category_info['name'] : $category_info['name'];
			} else {
				$category = '';
			}

			if ($result['customer_id'] > 0) {
				$customer = sprintf($this->language->get('text_customer'), $this->url->link('customer/customer/edit', 'token=' . $this->session->data['token'] . '&customer_id=' . $result['customer_id'], true), $this->language->get('entry_customer'));
			} elseif ($result['customer_id'] < 0) {
				$customer = $this->language->get('text_robot');
			} else {
				$customer = $this->language->get('text_guest');
			}

			$data['searches'][] = array(
				'store'         => $store,
				'language'      => $language,
				'keyword'       => $result['keyword'],
				'articles'      => $result['articles'],
				'category'      => $category,
				'category_href' => $store['url'] . 'index.php?route=blog/category&blog_category_id=' . $result['blog_category_id'],
				'sub_category'  => ($result['sub_category'] ? $this->language->get('text_yes') : $this->language->get('text_no')),
				'description'   => ($result['description'] ? $this->language->get('text_yes') : $this->language->get('text_no')),
				'customer'      => $customer,
				'ip'            => $result['ip'],
				'date_added'    => date($this->language->get('datetime_format'), strtotime($result['date_added']))
			);
		}

		$url = '';

		if (isset($this->request->get['filter_date_start'])) {
			$url .= '&filter_date_start=' . $this->request->get['filter_date_start'];
		}

		if (isset($this->request->get['filter_date_end'])) {
			$url .= '&filter_date_end=' . $this->request->get['filter_date_end'];
		}

		if (isset($this->request->get['filter_store'])) {
			$url .= '&filter_store=' . urlencode($this->request->get['filter_store']);
		}

		if (isset($this->request->get['filter_language'])) {
			$url .= '&filter_language=' . urlencode($this->request->get['filter_language']);
		}

		if (isset($this->request->get['filter_keyword'])) {
			$url .= '&filter_keyword=' . urlencode($this->request->get['filter_keyword']);
		}

		if (isset($this->request->get['filter_customer'])) {
			$url .= '&filter_customer=' . urlencode($this->request->get['filter_customer']);
		}

		if (isset($this->request->get['filter_ip'])) {
			$url .= '&filter_ip=' . $this->request->get['filter_ip'];
		}

		$pagination = new Pagination();
		$pagination->total = $search_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('configblog_limit_admin');
		$pagination->url = $this->url->link('report/customer_blog_search', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($search_total) ? (($page - 1) * $this->config->get('configblog_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('configblog_limit_admin')) > ($search_total - $this->config->get('configblog_limit_admin'))) ? $search_total : ((($page - 1) * $this->config->get('configblog_limit_admin')) + $this->config->get('configblog_limit_admin')), $search_total, ceil($search_total / $this->config->get('configblog_limit_admin')));

		$data['filter_date_start'] = $filter_date_start;
		$data['filter_date_end'] = $filter_date_end;
		$data['filter_store'] = $filter_store;
		$data['filter_language'] = $filter_language;
		$data['filter_keyword'] = $filter_keyword;
		$data['filter_customer'] = $filter_customer;
		$data['filter_ip'] = $filter_ip;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('report/customer_blog_search', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'report/customer_blog_search')) {
			$this->error['error'] = $this->language->get('error_permission');
			$this->session->data['error'] =  $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
