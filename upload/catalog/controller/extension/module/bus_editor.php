<?PHP
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2022; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ )

// забараняем прамы доступ
if (!class_exists('Controller')) {
	header('Refresh: 1; URL=/');
	exit('ЗАПРЫШЧАЮ!');
}

if (version_compare(VERSION, '2.2.0', '<')) {
	class ControllerModuleBusEditor extends ControllerExtensionModuleBusEditor {}
}

class ControllerExtensionModuleBusEditor extends Controller {
	public function index() {
		if (version_compare(VERSION, '2.2.0', '<')) {
			$this->user = new User($this->registry);
		} else {
			$this->user = new Cart\User($this->registry);
		}

		if ($this->user->isLogged()) {
			if (version_compare(VERSION, '3.0.0', '<')) {
				$token = '&token=' . $this->session->data['token'];
			} else {
				$token = '&user_token=' . $this->session->data['user_token'];
			}

			$bus_editor_href_admin = $this->config->get('bus_editor_href_admin');
			$bus_editor_href_admin = ($bus_editor_href_admin ? $bus_editor_href_admin : 'admin/');

			if ($this->config->get('bus_editor_blog_category_href_status') && isset($this->request->get['blog_category']) && $this->user->isLogged()) {
				$id = explode('_', (string)$this->request->get['blog_category']);
				$id = (int)array_pop($id);
				$this->response->redirect($bus_editor_href_admin . 'index.php?route=blog/category/edit' . $token . '&blog_category_id=' . $id);
			} elseif ($this->config->get('bus_editor_blog_article_href_status') && isset($this->request->get['article']) && $this->user->isLogged()) {
				$id = (int)$this->request->get['article'];
				$this->response->redirect($bus_editor_href_admin . 'index.php?route=blog/article/edit' . $token . '&article_id=' . $id);
			} elseif ($this->config->get('bus_editor_category_href_status') && isset($this->request->get['category']) && $this->user->isLogged()) {
				$id = explode('_', (string)$this->request->get['category']);
				$id = (int)array_pop($id);
				$this->response->redirect($bus_editor_href_admin . 'index.php?route=catalog/category/edit' . $token . '&category_id=' . $id);
			} elseif ($this->config->get('bus_editor_information_href_status') && isset($this->request->get['information']) && $this->user->isLogged()) {
				$id = (int)$this->request->get['information'];
				$this->response->redirect($bus_editor_href_admin . 'index.php?route=catalog/information/edit' . $token . '&information_id=' . $id);
			} elseif ($this->config->get('bus_editor_manufacturer_href_status') && isset($this->request->get['manufacturer']) && $this->user->isLogged()) {
				$id = explode('_', (string)$this->request->get['manufacturer']);
				$id = (int)array_pop($id);
				$this->response->redirect($bus_editor_href_admin . 'index.php?route=catalog/manufacturer/edit' . $token . '&manufacturer_id=' . $id);
			} elseif ($this->config->get('bus_editor_product_href_status') && isset($this->request->get['product']) && $this->user->isLogged()) {
				$id = (int)$this->request->get['product'];
				$this->response->redirect($bus_editor_href_admin . 'index.php?route=catalog/product/edit' . $token . '&product_id=' . $id);
			}
		} else {
			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 403 Forbidden');
			$this->response->setOutput($this->language->get('error_bus_editor_href'));
		}
	}
}