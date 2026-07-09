<?php
// *	@copyright	OPENCART.PRO 2011 - 2024.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerBlogLatest extends Controller {
	public function index() {
		$this->load->language('blog/latest');

		$this->load->model('blog/article');

		$this->load->model('tool/image');

		$configblog_meta_title = $this->config->get('configblog_meta_title');

		if (!empty($configblog_meta_title)) {
			$this->document->setTitle($configblog_meta_title);
		} else {
			$this->document->setTitle($this->language->get('heading_title'));
		}

		$this->document->setDescription($this->config->get('configblog_meta_description'));
		$this->document->setKeywords($this->config->get('configblog_meta_keyword'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
			$this->document->setRobots('noindex,follow');
		} else {
			$sort = 'p.date_added';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
			$this->document->setRobots('noindex,follow');
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
			$this->document->setRobots('noindex,follow');
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
			$limit = ($limit > 100 && $limit > $this->config->get('configblog_article_limit') ? 100 : $limit);
			$this->document->setRobots('noindex,follow');
		} else {
			$limit = (int)$this->config->get('configblog_article_limit');
		}

		$configblog_name = $this->config->get('configblog_name');

		if (!empty($configblog_name)) {
			$name = $configblog_name;
		} else {
			$name = $this->language->get('heading_title');
		}

		$configblog_html_h1 = $this->config->get('configblog_html_h1');

		if (!empty($configblog_html_h1)) {
			$data['heading_title'] = $configblog_html_h1;
		} else {
			$data['heading_title'] = $name;
		}

		$data['text_refine'] = $this->language->get('text_refine');
		$data['text_views'] = $this->language->get('text_views');
		$data['text_empty'] = $this->language->get('text_empty');
		$data['text_display'] = $this->language->get('text_display');
		$data['text_sort'] = $this->language->get('text_sort');
		$data['text_limit'] = $this->language->get('text_limit');
		$data['text_sort_by'] = $this->language->get('text_sort_by');
		$data['text_sort_name'] = $this->language->get('text_sort_name');
		$data['text_sort_date'] = $this->language->get('text_sort_date');
		$data['text_sort_rated'] = $this->language->get('text_sort_rated');
		$data['text_sort_viewed'] = $this->language->get('text_sort_viewed');

		$data['button_continue'] = $this->language->get('button_continue');
		$data['button_list'] = $this->language->get('button_list');
		$data['button_grid'] = $this->language->get('button_grid');
		$data['button_more'] = $this->language->get('button_more');

		$data['breadcrumbs'][] = array(
			'text' => $name,
			'href' => $this->url->link('blog/latest')
		);

		$configblog_review_status = $this->config->get('configblog_review_status');

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['categories'] = array();

		/* $results = $this->model_blog_category->getCategories(0);

		foreach ($results as $result) {
			$filter_data = array(
				'filter_blog_category_id' => $result['blog_category_id'],
				'filter_sub_category'     => true
			);

			$data['categories'][] = array(
				'name'  => $result['name'] . ($this->config->get('configblog_article_count') ? ' (' . $this->model_blog_article->getTotalArticles($filter_data) . ')' : ''),
				'href'  => $this->url->link('blog/category', 'blog_category_id=' . $this->request->get['blog_category_id'] . '_' . $result['blog_category_id'] . $url)
			);
		} */

		$data['articles'] = array();

		$article_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $limit,
			'limit' => $limit
		);

		$article_total = $this->model_blog_article->getTotalArticles($article_data);

		$results = $this->model_blog_article->getArticles($article_data);

		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('configblog_image_article_width'), $this->config->get('configblog_image_article_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('configblog_image_article_width'), $this->config->get('configblog_image_article_height'));
			}

			if ($configblog_review_status) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$data['articles'][] = array(
				'article_id'  => $result['article_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('configblog_article_description_length')) . '..',
				'date_added'  => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'viewed'      => $result['viewed'],
				'rating'      => $rating,
				'reviews'     => sprintf($this->language->get('text_reviews'), (int)$result['reviews']),
				'href'        => $this->url->link('blog/article',  '&article_id=' . $result['article_id'])
			);
		}

		$url = '';

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$data['sorts'] = array();

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_default'),
			'value' => 'p.sort_order-ASC',
			'href'  => $this->url->link('blog/latest', 'sort=p.sort_order&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_asc'),
			'value' => 'pd.name-ASC',
			'href'  => $this->url->link('blog/latest', 'sort=pd.name&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_name_desc'),
			'value' => 'pd.name-DESC',
			'href'  => $this->url->link('blog/latest', 'sort=pd.name&order=DESC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_date_asc'),
			'value' => 'p.date_added-ASC',
			'href'  => $this->url->link('blog/latest', 'sort=p.date_added&order=ASC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_date_desc'),
			'value' => 'p.date_added-DESC',
			'href'  => $this->url->link('blog/latest', 'sort=p.date_added&order=DESC' . $url)
		);

		if ($configblog_review_status) {
			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_desc'),
				'value' => 'rating-DESC',
				'href'  => $this->url->link('blog/latest', 'sort=rating&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_rating_asc'),
				'value' => 'rating-ASC',
				'href'  => $this->url->link('blog/latest', 'sort=rating&order=ASC' . $url)
			);
		}

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_viewed_desc'),
			'value' => 'p.viewed-DESC',
			'href'  => $this->url->link('blog/latest', 'sort=p.viewed&order=DESC' . $url)
		);

		$data['sorts'][] = array(
			'text'  => $this->language->get('text_viewed_asc'),
			'value' => 'p.viewed-ASC',
			'href'  => $this->url->link('blog/latest', 'sort=p.viewed&order=ASC' . $url)
		);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$data['limits'] = array();

		$limits = array_unique(array((int)$this->config->get('configblog_article_limit'), 25, 50, 75, 100));

		sort($limits);

		foreach($limits as $value){
			$data['limits'][] = array(
				'text'  => $value,
				'value' => $value,
				'href'  => $this->url->link('blog/latest', $url . '&limit=' . $value)
			);
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		$pagination = new Pagination();
		$pagination->total = $article_total;
		$pagination->page = $page;
		$pagination->limit = $limit;
		$pagination->url = $this->url->link('blog/latest', $url . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($article_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($article_total - $limit)) ? $article_total : ((($page - 1) * $limit) + $limit), $article_total, ceil($article_total / $limit));

		// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
		$this->document->addLink($this->url->link('blog/latest', '', true), 'canonical');

		if ($page == 2)  {
			$this->document->addLink($this->url->link('blog/latest', '', true), 'prev');
		} elseif($page > 2)   {
			$this->document->addLink($this->url->link('blog/latest', '&page='. ($page - 1), true), 'prev');
		}

		if ($limit && ceil($article_total / $limit) > $page) {
			$this->document->addLink($this->url->link('blog/latest', '&page='. ($page + 1), true), 'next');
		}

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('blog/latest', $data));
	}
}