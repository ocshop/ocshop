<?php
// *   Аўтар: "БуслікДрэў" ( http://buslikdrev.by/ )
// *   © 2016-2020; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( http://opencart.pro/ )

class ControllerExtensionModuleBusEditor extends Controller {
	private $error = array();
	private $name_arhive = 'Convenient Editor';
	private $code = '01000048';
	private $name = 'Удобный Редактор - "Convenient Editor"';
	private $version = '1.0.1';
	private $author = 'BuslikDrev.by';
	private $link = 'https://liveopencart.ru/buslikdrev';

	// подмена $this->config->get()
	private function configGet($name = false) {
		if ($name) {
			$data = $this->config->get('bus_editor_' . $name);
		} else {
			$modification = $this->config->get('bus_editor_modification');

			if ($modification) {
				foreach($modification as $key => $result) {
					$data[$key] = $result;
				}
			}

			$tabl_array = $this->tablArray();

			foreach($tabl_array as $tabl) {
				$data[$tabl . '_href_status'] = $this->config->get('bus_editor_' . $tabl . '_href_status');
			}

			$data['href_admin'] = $this->config->get('bus_editor_href_admin');
		}

		return $data;
	}

	// для сокращения повторов - НЕ ПЫТАЙТЕСЬ ПОВТОРИТЬ!
	private function tablArray() {
		return array('blog_category', 'blog_article', /* 'article', */ 'category', 'information', 'manufacturer', 'product', 'universal');
	}

	private function setFile($name, $value, $format = 'xml') {
		$this->deleteFile($name);

		if ($value) {
			$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory'));

			if ($format == 'css') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_editor/bus_editor_';
			} elseif ($format == 'tpl') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/extension/module/bus_editor/bus_editor_';
			} elseif ($format == 'twig') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/extension/module/bus_editor/bus_editor_';
			} else {
				$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_editor.ocmod';
			}

			$file = $path . ($name == 'library' ? false : preg_replace('/[^A-Z0-9_]/i', '', $name)) . '.' . preg_replace('/[^A-Z_]/i', '', $format);

			$handle = fopen($file, 'w');

			flock($handle, LOCK_EX);

			fwrite($handle, $value);

			fflush($handle);

			flock($handle, LOCK_UN);

			fclose($handle);
		}
	}

	private function deleteFile($name, $format = 'xml') {
		$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory'));

		if ($format == 'css') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_editor/bus_editor_';
		} elseif ($format == 'tpl') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/extension/module/bus_editor/bus_editor_';
		} elseif ($format == 'twig') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/extension/module/bus_editor/bus_editor_';
		} else {
			$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_editor.ocmod';
		}

		$file = $path . ($name == 'library' ? false : preg_replace('/[^A-Z0-9_]/i', '', $name)) . '.' . preg_replace('/[^A-Z_]/i', '', $format);

		if (file_exists($file)) {
			unlink($file);
		}
	}

	private function copyFile($name, $newname, $format = 'xml', $newformat = 'xml_') {
		$file = $this->getFile($name, $format);
		$this->setFile($newname, $file, $newformat);
	}

	private function getFile($name = false, $format = 'xml') {
		$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory'));

		if ($format == 'css') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_editor/bus_editor_';
		} elseif ($format == 'tpl') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/extension/module/bus_editor/bus_editor_';
		} elseif ($format == 'twig') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/extension/module/bus_editor/bus_editor_';
		} else {
			$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_editor.ocmod';
		}

		$file = $path . ($name == 'library' ? false : preg_replace('/[^A-Z0-9_]/i', '', $name)) . '.' . preg_replace('/[^A-Z_]/i', '', $format);

		if (file_exists($file)) {
			if (filesize($file) > 0) {
				$handle = fopen($file, 'rb');

				flock($handle, LOCK_SH);

				$data = fread($handle, filesize($file));

				flock($handle, LOCK_UN);

				fclose($handle);

				return $data;
			}
		}

		return false;
	}

	public function index() {
		$this->load->language('extension/module/bus_editor');

		//$this->load->model('extension/module/bus_editor');

		//$this->load->model('design/layout');

		//$this->load->model('localisation/language');

		//$this->load->model('setting/store');

		//$this->load->model('tool/image');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));

		//$data['languages'] = $this->model_localisation_language->getLanguages();

		//$language_id = $this->config->get('config_language_id');

		$tabl_array = $this->tablArray();

		$data['tabl_array'] = $tabl_array;

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (isset($this->request->post['apply'])) {
				$apply = $this->request->post['apply'];
				$this->session->data['apply'] = $apply;
			} else {
				$apply = false;
			}

			unset($this->request->post['apply']);

			/* if (isset($this->request->post['style']) && isset($this->request->post['type'])) {
				$this->setFile($this->request->post['type'] . '_replace', html_entity_decode($this->request->post['style']));

				if (!empty($this->request->post['style'])) {
					$this->request->post['style'] = true;
				}
			} */

			$this->load->model('setting/setting');

			$post = array(
				'bus_editor_href_admin'          => $this->request->post['href_admin']
			);

			foreach($tabl_array as $tabl) {
				if (isset($this->request->post[$tabl . '_href_status'])) {
					$post['bus_editor_' . $tabl . '_href_status'] = $this->request->post[$tabl . '_href_status'];
				}
			}

			if (isset($this->request->post['modification'])) {
				$this->modification($this->request->post['modification']);
				$post['bus_editor_modification'] = $this->request->post['modification'];
			} else {
				$this->modification();
			}

			$this->model_setting_setting->editSetting('bus_editor', $post);

			if ($apply) {
				$this->session->data['success'] = $this->language->get('success_setting_apply');

				if (isset($this->session->data['modification'])) {
					$this->session->data['success'] = $this->session->data['modification'];
				}

				$this->response->redirect($this->url->link('extension/module/bus_editor', 'token=' . $this->session->data['token'], true));
			} else {
				$this->session->data['success'] = $this->language->get('success_setting_save');

				if (isset($this->session->data['modification'])) {
					$this->session->data['success'] = $this->session->data['modification'];
				}

				$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
			}
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['tab_blog_category'] = $this->language->get('tab_blog_category');
		$data['tab_blog_article'] = $this->language->get('tab_blog_article');
		$data['tab_category'] = $this->language->get('tab_category');
		$data['tab_information'] = $this->language->get('tab_information');
		$data['tab_manufacturer'] = $this->language->get('tab_manufacturer');
		$data['tab_product'] = $this->language->get('tab_product');
		$data['tab_universal'] = $this->language->get('tab_universal');
		$data['tab_other'] = $this->language->get('tab_other');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_select'] = $this->language->get('text_select');
		$data['text_select_all'] = $this->language->get('text_select_all');
		$data['text_unselect_all'] = $this->language->get('text_unselect_all');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_none'] = $this->language->get('text_none');
		$data['text_width'] = $this->language->get('text_width');
		$data['text_height'] = $this->language->get('text_height');
		$data['text_after'] = $this->language->get('text_after');
		$data['text_before'] = $this->language->get('text_before');
		$data['text_replace'] = $this->language->get('text_replace');
		$data['text_left'] = $this->language->get('text_left');
		$data['text_right'] = $this->language->get('text_right');
		$data['text_top'] = $this->language->get('text_top');
		$data['text_bottom'] = $this->language->get('text_bottom');

		$href_search = <<<'XML'
<?php echo $button_compare; ?>
XML;

		$data['text_example_search'] = sprintf($this->language->get('text_example'), htmlspecialchars($href_search, ENT_COMPAT, 'UTF-8'));

		$href_add = <<<'XML'
<?php if (isset($bus_editor_href)) { ?><!--noindex--><button type="button" data-toggle="tooltip" class="btn btn-success" title="<?php echo $button_bus_editor_href; ?>" onclick="window.open('<?php echo $bus_editor_href; ?>', '_blank');"><i class="fa fa-pencil"></i></button><!--/noindex--><?php } ?>
XML;

		$data['text_example_add'] = sprintf($this->language->get('text_example'), htmlspecialchars($href_add, ENT_COMPAT, 'UTF-8'));
		$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory'));
		$data['text_view'] = sprintf($this->language->get('text_view'), $theme);
		$data['text_author'] = $this->language->get('text_author');
		$data['text_corp'] = $this->language->get('text_corp');

		$data['entry_index'] = $this->language->get('entry_index');
		$data['entry_position'] = $this->language->get('entry_position');
		$data['entry_href_status'] = $this->language->get('entry_href_status');
		$data['entry_href_search'] = $this->language->get('entry_href_search');
		$data['entry_href_add'] = $this->language->get('entry_href_add');
		$data['entry_href_admin'] = $this->language->get('entry_href_admin');
		$data['entry_status'] = $this->language->get('entry_status');

		$data['help_index'] = $this->language->get('help_index');
		$data['help_blog_category_href_status'] = $this->language->get('help_blog_category_href_status');
		$data['help_blog_article_href_status'] = $this->language->get('help_blog_article_href_status');
		$data['help_category_href_status'] = $this->language->get('help_category_href_status');
		$data['help_information_href_status'] = $this->language->get('help_information_href_status');
		$data['help_manufacturer_href_status'] = $this->language->get('help_manufacturer_href_status');
		$data['help_product_href_status'] = $this->language->get('help_product_href_status');
		$data['help_href_search'] = $this->language->get('help_href_search');
		$data['help_href_add'] = $this->language->get('help_href_add');
		$data['help_href_admin'] = $this->language->get('help_href_admin');
		$data['help_status'] = $this->language->get('help_status');

		$data['button_apply'] = $this->language->get('button_apply');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_add'] = $this->language->get('button_add');
		$data['button_category_add'] = $this->language->get('button_category_add');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['error'])) {
			$data['error'] = $this->error['error'];
		} else {
			$data['error'] = false;
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = false;
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/bus_editor', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/module/bus_editor', 'token=' . $this->session->data['token'], true);
		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

		$module_info = $this->configGet();

		foreach ($tabl_array as $tabl) {
			if (isset($this->request->post[$tabl . '_href_status'])) {
				$data[$tabl . '_href_status'] = $this->request->post[$tabl . '_href_status'];
			} elseif (isset($module_info[$tabl . '_href_status'])) {
				$data[$tabl . '_href_status'] = $module_info[$tabl . '_href_status'];
			} else {
				$data[$tabl . '_href_status'] = false;
			}

			if (isset($this->request->post[$tabl . '_href_index'])) {
				$data[$tabl . '_href_index'] = $this->request->post[$tabl . '_href_index'];
			} elseif (isset($module_info[$tabl . '_href_index'])) {
				$data[$tabl . '_href_index'] = $module_info[$tabl . '_href_index'];
			} else {
				$data[$tabl . '_href_index'] = 0;
			}

			if (isset($this->request->post[$tabl . '_href_search'])) {
				$data[$tabl . '_href_search'] = $this->request->post[$tabl . '_href_search'];
			} elseif (isset($module_info[$tabl . '_href_search'])) {
				$data[$tabl . '_href_search'] = $module_info[$tabl . '_href_search'];
			} else {
				$data[$tabl . '_href_search'] = false;
			}

			if (isset($this->request->post[$tabl . '_href_position'])) {
				$data[$tabl . '_href_position'] = $this->request->post[$tabl . '_href_position'];
			} elseif (isset($module_info[$tabl . '_href_position'])) {
				$data[$tabl . '_href_position'] = $module_info[$tabl . '_href_position'];
			} else {
				$data[$tabl . '_href_position'] = false;
			}

			if (isset($this->request->post[$tabl . '_href_add'])) {
				$data[$tabl . '_href_add'] = $this->request->post[$tabl . '_href_add'];
			} elseif (isset($module_info[$tabl . '_href_add'])) {
				$data[$tabl . '_href_add'] = $module_info[$tabl . '_href_add'];
			} else {
				$data[$tabl . '_href_add'] = false;
			}
		}

		if (isset($this->request->post['href_admin'])) {
			$data['href_admin'] = $this->request->post['href_admin'];
		} elseif (isset($module_info['href_admin'])) {
			$data['href_admin'] = $module_info['href_admin'];
		} else {
			$data['href_admin'] = false;
		}

		/* if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (isset($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = true;
		} */

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/bus_editor/settings', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/bus_editor')) {
			$this->error['error'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	// установка
	public function install() {
		$this->load->language('extension/module/bus_editor');

		// посылыаем на йух
		if (!$this->user->hasPermission('modify', 'extension/extension/module')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			// создаём таблицу модуля
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_editor` (`module_id` int(11) NOT NULL, `setting` text NOT NULL, `cats` mediumtext NOT NULL, PRIMARY KEY (`module_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");

			// создаём индекс status товара, если его нет
			/* $result = $this->db->query("SHOW INDEX FROM `" . DB_PREFIX . "product` where Key_name='status'");
			if ($result->num_rows == 0) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ADD KEY status (status)");
			} */

			// включаем модификатор модуля, если заливался в БД
			$this->load->model('extension/modification');

			$code = $this->model_extension_modification->getModificationByCode($this->code);

			if ($code) {
				$this->model_extension_modification->enableModification($code['modification_id']);
			}

			// создаём копию из резерва и переименовываем модификатор, если заливался в system
			$file = $this->getFile(false, 'xml_');

			$this->setFile(false, $file, 'xml');

			// чистим кэши необходимые для модуля
			/* $this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			$this->cache->delete('article');
			$this->cache->delete('category');
			$this->cache->delete('information');
			$this->cache->delete('manufacturer');
			$this->cache->delete('product');
			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url'); */

			// готовим данные для ajax
			$text_install = $this->language->get('text_install');
			$text_ocmod_clear = $this->language->get('text_ocmod_clear');
			$text_ocmod_clearlog = $this->language->get('text_ocmod_clearlog');
			$text_ocmod_refresh = $this->language->get('text_ocmod_refresh');
			$text_cache_clear = $this->language->get('text_cache_clear');

			$success_install = $this->language->get('heading_title') . $this->language->get('success_install');

			$error_install = $this->language->get('error_install');

			$url_ocmod_clear = $this->url->link('extension/modification/clear', 'token=' . $this->session->data['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link('extension/modification/clearlog', 'token=' . $this->session->data['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link('extension/modification/refresh', 'token=' . $this->session->data['token'], true);
			$url_ocmod_refresh = str_ireplace('&amp;', '&', $url_ocmod_refresh);

			$text = <<<HTML
<script><!--
	$('a, button, select, input').attr('disabled', true);

	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 200, 'linear');

	$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_install <button type="button" class="close" data-dismiss="alert">×</button>');
	setTimeout('ocmodClear()', 2000);

function ocmodClear() {
	$.ajax({
		url: '$url_ocmod_clear',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('ocmodClearlog()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_install <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function ocmodClearlog() {
	$.ajax({
		url: '$url_ocmod_clearlog',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('ocmodRefresh()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_install <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function ocmodRefresh() {
	$.ajax({
		url: '$url_ocmod_refresh',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('cacheClear()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_install <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function cacheClear() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_cache_clear <button type="button" class="close" data-dismiss="alert">×</button>');
	setTimeout('success()', 2000);
}

function success() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success_install <button type="button" class="close" data-dismiss="alert">×</button>');
	$('a, button, select, input').removeAttr('disabled');
}
//--></script>
HTML;

			//echo $text;
			$this->response->addHeader('Content-Type: text/html; charset=utf-8');
			$this->response->setOutput($text);
			echo $this->response->getOutput();

			//$this->session->data['success'] = $text;

			//$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		} else {
			echo $this->error['error'];
		}
	}

	// удаление
	public function uninstall() {
		$this->load->language('extension/module/bus_editor');

		// посылыаем на йух
		if (!$this->user->hasPermission('modify', 'extension/extension/module')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			// очищаем таблицу модуля, если заливался в БД
			//$this->db->query("TRUNCATE `" . DB_PREFIX . "bus_editor`");

			// выключаем модификатор модуля
			$this->load->model('extension/modification');

			$code = $this->model_extension_modification->getModificationByCode($this->code);

			if ($code) {
				$this->model_extension_modification->disableModification($code['modification_id']);
			}

			// удаляем копию модификатора созданную из резерва, если заливался в system
			$this->deleteFile(false, 'xml');

			// чистим кэши необходимые для модуля
			/* $this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			$this->cache->delete('article');
			$this->cache->delete('category');
			$this->cache->delete('information');
			$this->cache->delete('manufacturer');
			$this->cache->delete('product');
			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url'); */
			//$this->load->controller('common/developer/theme');
			//$this->load->controller('common/developer/sass');

			// готовим данные для ajax
			$text_uninstall = $this->language->get('text_uninstall');
			$text_uninstall_files = $this->language->get('text_uninstall_files');
			$text_ocmod_clear = $this->language->get('text_ocmod_clear');
			$text_ocmod_clearlog = $this->language->get('text_ocmod_clearlog');
			$text_ocmod_refresh = $this->language->get('text_ocmod_refresh');
			$text_cache_clear = $this->language->get('text_cache_clear');

			$button_files_clear = $this->language->get('button_files_clear');

			$success_uninstall = $this->language->get('heading_title') . $this->language->get('success_uninstall');

			$error_uninstall = $this->language->get('error_uninstall');
			$error_uninstall_pro = $this->language->get('error_uninstall_pro');

			$url_uninstall_files = $this->url->link('extension/module/bus_editor/uninstallFiles', 'token=' . $this->session->data['token'], true);
			$url_uninstall_files = str_ireplace('&amp;', '&', $url_uninstall_files);
			$url_ocmod_clear = $this->url->link('extension/modification/clear', 'token=' . $this->session->data['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link('extension/modification/clearlog', 'token=' . $this->session->data['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link('extension/modification/refresh', 'token=' . $this->session->data['token'], true);
			$url_ocmod_refresh = str_ireplace('&amp;', '&', $url_ocmod_refresh);

			$text = <<<HTML
<script><!--
	$('a, button, select, input').attr('disabled', true);

	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 200, 'linear');

	$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
	setTimeout('ocmodClear()', 2000);

function ocmodClear() {
	$.ajax({
		url: '$url_ocmod_clear',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('ocmodClearlog()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function ocmodClearlog() {
	$.ajax({
		url: '$url_ocmod_clearlog',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('ocmodRefresh()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function ocmodRefresh() {
	$.ajax({
		url: '$url_ocmod_refresh',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('cacheClear()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function cacheClear() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_cache_clear <button type="button" class="close" data-dismiss="alert">×</button>');
	setTimeout('success()', 2000);
}

function success() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
	$('.alert-success').after('<a type="button" onclick="uninstallFiles();" class="btn btn-info alert" style="width:100%;" data-dismiss="alert"><i class="fa fa-trash-o"></i> $button_files_clear</a>');
	$('a, button, select, input').removeAttr('disabled');
}

function uninstallFilesPro() {
	$('.alert-success').addClass('alert-danger').removeClass('alert-success').html('<i class="fa fa-check-circle"></i> $error_uninstall_pro =( <button type="button" class="close" data-dismiss="alert">×</button>');
}

function uninstallFiles() {
	$.ajax({
		url: '$url_uninstall_files',
		method: 'GET',
		dataType: 'json',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_uninstall_files');
		},
		success: function(html) {
			$('button[onclick="uninstallFiles();"]').hide();
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> ' + html + ' =( <button type="button" class="close" data-dismiss="alert">×</button>');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			if (xhr) {
				$('.alert-danger').html('<i class="fa fa-check-circle"></i> ' + thrownError + ' ' + xhr.statusText + ' ' + xhr.responseText + ' =( <button type="button" class="close" data-dismiss="alert">×</button>');
			} else {
				$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
			}
		}
	});
}
//--></script>
HTML;

			//echo $text;
			$this->response->addHeader('Content-Type: text/html; charset=utf-8');
			$this->response->setOutput($text);
			echo $this->response->getOutput();

			//$this->session->data['success'] = $text;

			//$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		} else {
			echo $this->error['error'];
		}
	}

	// удаление файлов модуля
	public function uninstallFiles() {
		$this->load->language('extension/module/bus_editor');

		// посылыаем на йух
		if (!$this->user->hasPermission('modify', 'extension/extension/module') || !$this->user->hasPermission('modify', 'extension/module/bus_editor')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			// удаляем таблицу модуля
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_editor`");

			// удаляем индекс status товара
			/* $result = $this->db->query("SHOW INDEX FROM `" . DB_PREFIX . "product` where Key_name='status'");
			if ($result->num_rows > 0) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "product` DROP INDEX status");
			} */

			// удаляем модуль из БД списка установленных модулей
			/* $this->load->model('setting/extension');

			$results = $this->model_setting_extension->getExtensionInstalls(0, 1000);

			foreach ($results as $result) {
				if (stristr($result['filename'], $this->name_arhive)) {
					$this->model_setting_extension->deleteExtensionInstall($result['extension_install_id']);
					$paths = $this->model_setting_extension->getExtensionPathsByExtensionInstallId($result['extension_install_id']);

					foreach ($paths as $path) {
						$this->model_setting_extension->deleteExtensionPath($path['extension_path_id']);
					}
				}
			} */

			// удаляем модификатор модуля, если заливался в БД
			$this->load->model('extension/modification');

			$code = $this->model_extension_modification->getModificationByCode($this->code);

			if ($code) {
				$this->model_extension_modification->deleteModification($code['modification_id']);
			}

			// готовим данные для php
			//$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory'));

			$module_paths = array(
				// 2.1 OpenCart
				DIR_APPLICATION . 'controller/module/bus_editor.php',
				DIR_APPLICATION . 'language/belarusian/module/bus_editor.php',
				DIR_APPLICATION . 'language/english/module/bus_editor.php',
				DIR_APPLICATION . 'language/russian/module/bus_editor.php',
				DIR_APPLICATION . 'language/ukrainian/module/bus_editor.php',
				DIR_APPLICATION . 'model/module/bus_editor.php',
				/* DIR_APPLICATION . 'view/javascript/buslikdrev/colorpicker[NAGIBATOR]',
				DIR_APPLICATION . 'view/javascript/buslikdrev/nestable[NAGIBATOR]',
				DIR_APPLICATION . 'view/javascript/buslikdrev', */
				DIR_APPLICATION . 'view/template/module/bus_editor[NAGIBATOR]',
				DIR_CATALOG . 'controller/module/bus_editor.php',
				// 2.3 и 3.0 OpenCart
				DIR_APPLICATION . 'controller/extension/module/bus_editor.php',
				DIR_APPLICATION . 'language/be-by/extension/module/bus_editor.php',
				DIR_APPLICATION . 'language/en-gb/extension/module/bus_editor.php',
				DIR_APPLICATION . 'language/ru-ru/extension/module/bus_editor.php',
				DIR_APPLICATION . 'language/uk-ua/extension/module/bus_editor.php',
				DIR_APPLICATION . 'model/extension/module/bus_editor.php',
				DIR_APPLICATION . 'view/template/extension/module/bus_editor[NAGIBATOR]',
				DIR_CATALOG . 'controller/extension/module/bus_editor.php',
				DIR_SYSTEM . 'library/bus_editor.ocmod.xml_',
				DIR_SYSTEM . 'bus_editor.ocmod.xml',
			);

			$text = '------------------- Start: ' . date($this->language->get('datetime_format')) . ' ' . $this->language->get('text_uninstall_files_log') . ' ' . $this->language->get('heading_title') . ' -------------------';
			//$text .= "\n" . '<br>' . $this->language->get('success_uninstall_data_base') . DB_PREFIX . 'bus_editor';
			if ($code) {
				$text .= "\n" . '<br>' . $this->language->get('success_uninstall_modification') . $this->name . ' (id: ' . $this->code . ')';
			}
			foreach ($module_paths as $module_path) {
				$text .= $this->deleteDir($module_path);
			}
			$text .= "\n" . '<br>------------------- Stop: ' . date($this->language->get('datetime_format')) . ' ' . $this->language->get('text_uninstall_files_log') . ' ' . $this->language->get('heading_title') . ' -------------------' . "\n";

			// Log т.к. в 2.3-3.0 oc отчёт не выводится на экран через ajax
			$handle = fopen(DIR_LOGS . 'ocmod.log', 'w+');

			flock($handle, LOCK_EX);

			fwrite($handle, strip_tags($text));

			fflush($handle);

			flock($handle, LOCK_UN);

			fclose($handle);

			// Log
			//$ocmod = new Log('ocmod.log');
			//$ocmod->write($text);

			//echo $text;
			//$this->response->setOutput($text);
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($text, JSON_HEX_AMP));
		} else {
			$this->response->setOutput($this->error['error']);
		}
	}

	private function deleteDir($dirname, $nagibator = false) {
		$this->load->language('extension/module/bus_editor');

		$text = false;
		$files = glob($dirname . '*');

		if ($files) {
			foreach ($files as $dirname) {
				if (file_exists($dirname)) {
					if (is_dir($dirname)){
						$dir_del = true;
						$dir = opendir($dirname);
						while (($filename = readdir($dir)) !== false) {
							if ($filename != "." && $filename != "..") {
								$dir_del = false;
								if ($nagibator) {
									$dir_del = true;
									$file = $dirname . "/" . $filename;
									$text .= $this->deleteDir($file, true);
								}
							}
						}
						closedir($dir);

						if ($dir_del) {
							rmdir($dirname);
							$text .= "\n" . '<br>' . $this->language->get('success_uninstall_folder') . $dirname;
						}
					} else {
						unlink($dirname);
						$text .= "\n" . '<br>' . $this->language->get('success_uninstall_file') . $dirname;
					}
				}
			}
		} else {
			if (stristr($dirname, '[NAGIBATOR]')) {
				$dirname = str_replace('[NAGIBATOR]', '', $dirname);
				$text .= $this->deleteDir($dirname, true);
			}
		}

		return $text;
	}

	private function modification($data = array()) {
		// посылыаем на йух
		if (!$this->user->hasPermission('modify', 'extension/module/bus_editor')) {
			$this->error['error'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			$this->load->model('extension/modification');

			$code = $this->model_extension_modification->getModificationByCode($this->code);

			if ($code) {
				$this->model_extension_modification->deleteModification($code['modification_id']);
			}

			if (!$data) {
				$data = $this->configGet('modification');
			}

			if ($data) {
				$modification = $this->getFile(false, 'xml_');
				$modification = str_replace('<![CDATA[<?php echo $button_grid; ?>]]>', '<![CDATA[<?php echo $button_compare; ?>]]>', $modification);
				$modification = str_replace('<![CDATA[<h1><?php echo $heading_title; ?></h1>]]>', '<![CDATA[<?php echo $button_compare; ?>]]>', $modification);
			}

			$tabl_array = $this->tablArray();

			foreach ($tabl_array as $tabl) {
				if (isset($data[$tabl . '_href_search']) && !empty($data[$tabl . '_href_search'])) {
					$success = true;
					$href_search = <<<'XML'
<search index="0" tabl="{tabl}"><![CDATA[<?php echo $button_compare; ?>]]></search>
XML;

					$href_search = str_replace('{tabl}', $tabl, $href_search);

					if (!isset($data[$tabl . '_href_index'])) {
						$data[$tabl . '_href_index'] = 0;
					}

					$modification = str_replace($href_search, '<search index="' . (int)$data[$tabl . '_href_index'] . '"><![CDATA[' . $data[$tabl . '_href_search'] . ']]></search>', $modification);
					unset($href_search);
				}

				if (isset($data[$tabl . '_href_add']) && !empty($data[$tabl . '_href_add'])) {
					$success = true;
					$href_add = <<<'XML'
<add position="after" tabl="{tabl}"><![CDATA[			<?php if (isset($bus_editor_href)) { ?><!--noindex--><button type="button" data-toggle="tooltip" class="btn btn-success" title="<?php echo $button_bus_editor_href; ?>" onclick="window.open('<?php echo $bus_editor_href; ?>', '_blank');"><i class="fa fa-pencil"></i></button><!--/noindex--><?php } ?>]]></add>
XML;

					$href_add = str_replace('{tabl}', $tabl, $href_add);

					if (!isset($data[$tabl . '_href_position'])) {
						$data[$tabl . '_href_position'] = 'after';
					} else {
						if ($data[$tabl . '_href_position'] == 1) {
							$data[$tabl . '_href_position'] = 'before';
						} elseif ($data[$tabl . '_href_position'] == 2) {
							$data[$tabl . '_href_position'] = 'replace';
						} else {
							$data[$tabl . '_href_position'] = 'after';
						}
					}

					$modification = str_replace($href_add, '<add position="' . $data[$tabl . '_href_position'] . '"><![CDATA[			' . $data[$tabl . '_href_add'] . ']]></add>', $modification);
				}
			}

			if (isset($success)) {
				$data = array(
					'code'    => $this->code,
					'name'    => $this->name,
					'author'  => $this->author,
					'version' => $this->version,
					'link'    => $this->link,
					'xml'     => htmlspecialchars_decode($modification),
					'status'  => 1
				);

				$this->model_extension_modification->addModification($data);

				$this->deleteFile(false, 'xml');
			} else {
				$file = $this->getFile('library', 'xml_');

				$this->setFile(false, $file, 'xml');
			}

			// чистим кэши необходимые для модуля
			/* $this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			$this->cache->delete('article');
			$this->cache->delete('category');
			$this->cache->delete('information');
			$this->cache->delete('manufacturer');
			$this->cache->delete('product');
			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url'); */
			//$this->load->controller('common/developer/theme');
			//$this->load->controller('common/developer/sass');

			// готовим данные для ajax
			$text_ocmod_clear = $this->language->get('text_ocmod_clear');
			$text_ocmod_clearlog = $this->language->get('text_ocmod_clearlog');
			$text_ocmod_refresh = $this->language->get('text_ocmod_refresh');

			if (isset($this->session->data['apply'])) {
				$success = $this->language->get('success_setting_apply');
				unset($this->session->data['apply']);
			} else {
				$success = $this->language->get('success_setting_save');
			}

			$error_uninstall = $this->language->get('error_uninstall');

			$url_ocmod_clear = $this->url->link('extension/modification/clear', 'token=' . $this->session->data['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link('extension/modification/clearlog', 'token=' . $this->session->data['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link('extension/modification/refresh', 'token=' . $this->session->data['token'], true);
			$url_ocmod_refresh = str_ireplace('&amp;', '&', $url_ocmod_refresh);

			$text = <<<HTML
<script><!--
	$('a, button, select, input').attr('disabled', true);

	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 200, 'linear');

	ocmodClear();

function ocmodClear() {
	$.ajax({
		url: '$url_ocmod_clear',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('ocmodClearlog()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function ocmodClearlog() {
	$.ajax({
		url: '$url_ocmod_clearlog',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('ocmodRefresh()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function ocmodRefresh() {
	$.ajax({
		url: '$url_ocmod_refresh',
		method: 'GET',
		dataType: 'html',
		beforeSend: function() {
			$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh');
		},
		success: function(html) {
			if (html) {
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh <button type="button" class="close" data-dismiss="alert">×</button>');
				setTimeout('success()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function success() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success <button type="button" class="close" data-dismiss="alert">×</button>');
	$('a, button, select, input').removeAttr('disabled');
}
//--></script>
HTML;

			$this->session->data['modification'] = $text;
		}
	}
}
