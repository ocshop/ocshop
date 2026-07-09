<?php
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonSearch extends Controller {
	public function index($setting) {
		if ($this->config->get('configblog_blog_search')) {
			if ($this->config->get('configblog_blog_search') == 2 || isset($this->request->get['route']) && in_array($this->request->get['route'], array('blog/article', 'blog/category', 'blog/latest', 'blog/search'))) {
				return $this->load->controller('extension/module/blog_search');
			}
		}

		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}

		return $this->load->view('common/search', $data);
	}
}