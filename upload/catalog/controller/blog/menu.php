<?php
// *	@copyright	OPENCART.PRO 2011 - 2015.
// *	@forum	http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerBlogMenu extends Controller {
	public function index() {

		$this->load->language('blog/menu');

		$data['text_blog'] = $this->language->get('text_blog');
		$data['text_all'] = $this->language->get('text_all');

		$data['blog'] = $this->url->link('blog/latest');

		// Menu
		$this->load->model('blog/category');

		$this->load->model('blog/article');

		$data['categories'] = array();

		$categories = $this->model_blog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_blog_category->getCategories($category['blog_category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_blog_category_id'  => $child['blog_category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('configblog_article_count') ? ' (' . $this->model_blog_article->getTotalArticles($filter_data) . ')' : ''),
						'href'  => $this->url->link('blog/category', 'blog_category_id=' . $category['blog_category_id'] . '_' . $child['blog_category_id'])
					);
				}

				// Level 1
				$filter_data = array(
						'filter_blog_category_id'  => $category['blog_category_id']
					);
				
				$data['categories'][] = array(
					'name'     => $category['name'] . ($this->config->get('configblog_article_count') ? ' (' . $this->model_blog_article->getTotalArticles($filter_data) . ')' : ''),
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('blog/category', 'blog_category_id=' . $category['blog_category_id'])
				);
			}
		}

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/blog/menu')) {
			return $this->load->view($this->config->get('config_template') . '/template/blog/menu', $data);
		} else {
			return $this->load->view('default/template/blog/menu', $data);
		}
	}
}