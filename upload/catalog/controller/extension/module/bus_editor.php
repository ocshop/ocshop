<?php
// *   Аўтар: "БуслікДрэў" ( http://buslikdrev.by/ )
// *   © 2016-2020; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( http://opencart.pro/ )

class ControllerExtensionModuleBusEditor extends Controller {
	public function index() {
		$this->user = new Cart\User($this->registry);

		if ($this->config->get('bus_editor_blog_category_href_status') && isset($this->request->get['blog_category']) && $this->user->isLogged()) {
			$bus_editor_href_admin = $this->config->get('bus_editor_href_admin');
			$id = explode('_', (string)$this->request->get['blog_category']);
			$id = (int)array_pop($id);
			$this->response->redirect(($bus_editor_href_admin ? $bus_editor_href_admin : 'admin/') . 'index.php?route=blog/category/edit' . '&token=' . $this->session->data['token'] . '&blog_category_id=' . $id);
		} elseif ($this->config->get('bus_editor_blog_article_href_status') && isset($this->request->get['article']) && $this->user->isLogged()) {
			$bus_editor_href_admin = $this->config->get('bus_editor_href_admin');
			$this->response->redirect(($bus_editor_href_admin ? $bus_editor_href_admin : 'admin/') . 'index.php?route=blog/article/edit' . '&token=' . $this->session->data['token'] . '&article_id=' . (int)$this->request->get['article']);
		} elseif ($this->config->get('bus_editor_category_href_status') && isset($this->request->get['category']) && $this->user->isLogged()) {
			$bus_editor_href_admin = $this->config->get('bus_editor_href_admin');
			$id = explode('_', (string)$this->request->get['category']);
			$id = (int)array_pop($id);
			$this->response->redirect(($bus_editor_href_admin ? $bus_editor_href_admin : 'admin/') . 'index.php?route=catalog/category/edit' . '&token=' . $this->session->data['token'] . '&category_id=' . $id);
		} elseif ($this->config->get('bus_editor_information_href_status') && isset($this->request->get['information']) && $this->user->isLogged()) {
			$bus_editor_href_admin = $this->config->get('bus_editor_href_admin');
			$this->response->redirect(($bus_editor_href_admin ? $bus_editor_href_admin : 'admin/') . 'index.php?route=catalog/information/edit' . '&token=' . $this->session->data['token'] . '&information_id=' . (int)$this->request->get['information']);
		} elseif ($this->config->get('bus_editor_manufacturer_href_status') && isset($this->request->get['manufacturer']) && $this->user->isLogged()) {
			$bus_editor_href_admin = $this->config->get('bus_editor_href_admin');
			$id = explode('_', (string)$this->request->get['manufacturer']);
			$id = (int)array_pop($id);
			$this->response->redirect(($bus_editor_href_admin ? $bus_editor_href_admin : 'admin/') . 'index.php?route=catalog/manufacturer/edit' . '&token=' . $this->session->data['token'] . '&manufacturer_id=' . $id);
		} elseif ($this->config->get('bus_editor_product_href_status') && isset($this->request->get['product']) && $this->user->isLogged()) {
			$bus_editor_href_admin = $this->config->get('bus_editor_href_admin');
			$this->response->redirect(($bus_editor_href_admin ? $bus_editor_href_admin : 'admin/') . 'index.php?route=catalog/product/edit' . '&token=' . $this->session->data['token'] . '&product_id=' . (int)$this->request->get['product']);
		} else {
			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 403 Forbidden');
			$this->response->setOutput($this->language->get('error_bus_editor_href'));
		}
	}
}
