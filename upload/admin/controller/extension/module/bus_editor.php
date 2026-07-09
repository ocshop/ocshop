<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2022; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ )

/*
                                                             ░░░░░                                                      
                                                            ▒░    ▒░                                                    
                                 ▒▒░░                       ▒  ▒▒  ▓                                                    
                                  ▓████▓▒░▒░░               ▒  ░▒░░▒                                                    
                                    ▒██████████▒░           ░    ▓▓░                                                    
                                    ░▒▒▓████▒▒▒▒▓██▒░       ░     █▓                                                    
                                     ░▓█████▓░     ▒▓█▒     ▒      █                                                    
                                       ░▒██████▓▒     ▒▓░   ▒       ░                                                   
                                       ▒██████████▒     ░▓  ▒                                                           
                                         ▒█████████       ░░ ▒                                                          
                                           ░▒▓█████         ░▒                                                          
                                          ▒▓███████▓         ░▒                                                         
                                              ░▓█▓▒▒▒░░░      ░                                                         
                                               ░░              ░                                                        
                                            ░▒                 ░                                                        
                                           ▓▒▒▒░░░░░░     ░    ░                                                        
                                           ▒█▒░▓▓▒░  ▒     ░░░                                                          
                                                     ░░   ▓                                                             
                                                      ▒  ▓                                                              
                                                      ▓ ▒░                                                              
                                                      ▓ ▓                                                               
                                                      ▓ ▒                                                               
                                                      ▒░░                                                               
                                                      ▒▒░                                                               
                                                      ▒▒░                                                               
                                                      ▓░░                                                               
                                                      ▓░▒                                                               
                                               ████▓ ░▒ ▒           ░▓███                                               
                                               ▒██████  ▓         ░██████                                               
                                                 ▒█████▓▓       ░██████░                                                
                                                   ▒█████▓    ░██████░                                                  
                                                     ▒█████▒░██████░                                                    
                                                       ▒█████████░                                                      
                                                        ▒██▒░███                                                        
                                                      ░██████████▒                                                      
                                                    ░██████░ ▓█████▒                                                    
                                                  ░██████░     ▓█████▒                                                  
                                                ░██████░         ▓█████▒                                                
                                              ░██████░             ▓█████▒                                              
                                            ▒██████░                 ▓█████▒                                            
                                          ░█████▓░                     ▓█████▒                                          
                                        ░▓████▓░                         ▓█████▒                                        
        ▒▒▒▒▒▒░                    ░▒▒▒▓███▓█▓▒       ▒▒▒▒▒▒░              ▓███▓▓░             ▒▒▒                      
        ████▓███░                  ▓███▓███░███░      ████████░              ▒▒▒▒▒▒           ░███                      
        ████ ███▓▒██▓ ▓██▒ ▒▓███▓▒ ▓███▒██▓░███░░███░ ███▓ ███▓░███▓██▓░ ▒▓███▓▓░▓██▒ ░███    ░███▓██▓░▒██▓  ▓██▒       
        ████ ███▒▒███ ███▓▒███░███▒▓██▓▒███░███░███▒  ███▓ ███▓▒███░███▓▒███░███▒▒███ ▒███    ░███░▓██▓ ███░ ███        
        ███████▒ ▒███ ███▓▒███ ███▒▓██▓▒███░██████▓   ███▓ ███▓▒███ ▓██▓▓███ ███▒ ███ ▓██▒    ░███ ▓██▓ ▓██▒▒██▓        
        ████ ███▒▒███ ███▓ ▓████▒░ ▓██▓▒███░██████░   ███▓ ███▓▒███     ▓███▓███▒ ███▒███     ░███ ▓██▓ ░███▓██▒        
        ████ ███▓▒███ ███▓░▒▒▓▓███▒▓██▓▒███░███████   ███▓ ███▓▒███     ▓███░▓▓▓▒ ▒█████▓     ░███ ▓██▓  ▓█████         
        ████ ███▓▒███ ███▓▓███ ███▒▓██▓▒███░███▒████  ███▓ ███▓▒███     ▓███ ███▒  █████▒     ░███ ▓██▓  ░████▓         
        ████████░▒███▓███▓░███▓███░▓██▓▒███░███░░███▓ ████████░▒███     ░███▓███░  ▓████  ░███░███▓███▓   ▓███░         
        ░░░░░░    ░░░░░░░░  ░░░░░  ░▒▒▒▒▒▒▒ ░░░  ░░░░ ░░░░░░    ░░░       ░░░░▒░░░░▒▒░░░   ░░░ ░░ ░░░     ▓███          
                                      ▒▓▓▓▓▒░                               ░▒▒▓▓▓▒                     ▒▓▓▓▓           
                                       ░▓████▓░                           ░▓████▓░                                      
                                         ░▓█████░                       ▒█████▓░                                        
                                           ░██████░                   ▒█████▓░                                          
                                             ░██████░               ▒█████▓░                                            
                                               ░██████░           ▒█████▓░                                              
                                                 ░██████░       ▒█████▓░                                                
                                                   ░█████▓░   ▒█████▓░                                                  
                                                     ░█████▓▒█████▓░                                                    
                                                       ░████▓███▓░                                                      
                                                        ▒██▓▒███░                                                       
                                                      ▒██████████▓░                                                     
                                                    ▒█████▓░ ▒█████▓░                                                   
                                                  ▒█████▓░     ▒█████▓░                                                 
                                                ▒█████▓░         ▒█████▓░                                               
*/

// забараняем прамы доступ
if (!class_exists('Controller')) {
	header('Refresh: 1; URL=/');
	exit('ЗАПРЫШЧАЮ!');
}

if (version_compare(VERSION, '2.2.0', '<')) {
	class ControllerModuleBusEditor extends ControllerExtensionModuleBusEditor {}
}

class ControllerExtensionModuleBusEditor extends Controller {
	private $error = array();
	private $name_arhive = 'Convenient Editor';
	private $code = '01000048';
	private $name = 'Удобный Редактор - "Convenient Editor"';
	private $version = '1.0.2';
	private $author = 'BuslikDrev.by';
	private $link = 'https://liveopencart.ru/buslikdrev';
	private $version_oc = 2.2;
	private $paths = array();

	public function __construct($foo) {
		parent::__construct($foo);
		if (version_compare(VERSION, '3.0.0', '>=')) {
			$this->language->set('bus_editor_version', $this->version);
			$this->version_oc = 3;
			$this->paths = array(
				'controller' => array(
					'bus_editor' => 'extension/module/bus_editor',
					'extension' => 'marketplace/extension',
					'modification' => 'marketplace/modification',
				),
				'language' => array(
					'bus_editor' => 'extension/module/bus_editor',
				),
				'model' => array(
					'bus_editor' => 'extension/module/bus_editor',
					'bus_editor_path' => 'model_extension_module_bus_editor',
					'module' => 'setting/module',
					'module_path' => 'model_setting_module',
					'extension' => 'setting/extension',
					'extension_path' => 'model_setting_extension',
					'modification' => 'setting/modification',
					'modification_path' => 'model_setting_modification',
					'event' => 'setting/event',
					'event_path' => 'model_setting_event',
				),
				'view' => array(
					'bus_editor' => 'extension/module/bus_editor',
				),
				'token' => 'user_token=' . $this->session->data['user_token']
			);
		} elseif (version_compare(VERSION, '2.2.0', '>=')) {
			$this->language->set('bus_editor_version', $this->version);
			$this->version_oc = 2.2;
			$this->paths = array(
				'controller' => array(
					'bus_editor' => 'extension/module/bus_editor',
					'extension' => 'extension/extension',
					'modification' => 'extension/modification',
				),
				'language' => array(
					'bus_editor' => 'extension/module/bus_editor',
				),
				'model' => array(
					'bus_editor' => 'extension/module/bus_editor',
					'bus_editor_path' => 'model_extension_module_bus_editor',
					'module' => 'extension/module',
					'module_path' => 'model_extension_module',
					'extension' => 'extension/extension',
					'extension_path' => 'model_extension_extension',
					'modification' => 'extension/modification',
					'modification_path' => 'model_extension_modification',
					'event' => 'extension/event',
					'event_path' => 'model_extension_event',
				),
				'view' => array(
					'bus_editor' => 'extension/module/bus_editor',
				),
				'token' => 'token=' . $this->session->data['token']
			);
		} else {
			$this->version_oc = 2;
			$this->paths = array(
				'controller' => array(
					'bus_editor' => 'module/bus_editor',
					'extension' => 'extension/module',
					'modification' => 'extension/modification',
				),
				'language' => array(
					'bus_editor' => 'module/bus_editor',
				),
				'model' => array(
					'bus_editor' => 'module/bus_editor',
					'bus_editor_path' => 'model_module_bus_editor',
					'module' => 'extension/module',
					'module_path' => 'model_extension_module',
					'extension' => 'extension/extension',
					'extension_path' => 'model_extension_extension',
					'modification' => 'extension/modification',
					'modification_path' => 'model_extension_modification',
					'event' => 'extension/event',
					'event_path' => 'model_extension_event',
				),
				'view' => array(
					'bus_editor' => 'module/bus_editor.tpl',
				),
				'token' => 'token=' . $this->session->data['token']
			);
		}
	}

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
		$this->deleteFile($name, $format);

		if ($value) {
			$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));

			if ($format == 'css') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_editor/bus_editor_';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
				if (!is_dir(str_replace('/bus_editor/bus_editor_', '', $path))) {
					mkdir(str_replace('/bus_editor/bus_editor_', '', $path), 0755);
				}
				if (!is_dir(str_replace('/bus_editor_', '', $path))) {
					mkdir(str_replace('/bus_editor_', '', $path), 0755);
				}
			} elseif ($format == 'js') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_editor/bus_editor_';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
				if (!is_dir(str_replace('/bus_editor/bus_editor_', '', $path))) {
					mkdir(str_replace('/bus_editor/bus_editor_', '', $path), 0755);
				}
				if (!is_dir(str_replace('/bus_editor_', '', $path))) {
					mkdir(str_replace('/bus_editor_', '', $path), 0755);
				}
			} elseif ($format == 'tpl') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_editor'] . '/bus_editor_';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
			} elseif ($format == 'twig') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_editor'] . '/bus_editor_';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
			} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
				$path = DIR_IMAGE . 'catalog/bus_editor/';
				$name = ($name == 'library' ? false : preg_replace('/[^\/A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
			} else {
				$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_editor.ocmod';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
			}

			$file = $path . $name . $format;

			$handle = fopen($file, 'w');

			flock($handle, LOCK_EX);

			fwrite($handle, $value);

			fflush($handle);

			flock($handle, LOCK_UN);

			fclose($handle);
		}
	}

	private function deleteFile($name, $format = 'xml') {
		$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));

		if ($format == 'css') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_editor/bus_editor_';
		} elseif ($format == 'js') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_editor/bus_editor_';
		} elseif ($format == 'tpl') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_editor'] . '/bus_editor_';
		} elseif ($format == 'twig') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_editor'] . '/bus_editor_';
		} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
			$path = DIR_IMAGE . 'catalog/bus_editor/';
		} else {
			$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_editor.ocmod';
		}

		$file = $path . ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name)) . '.' . preg_replace('/[^A-Z_]/i', '', $format);

		if (file_exists($file)) {
			unlink($file);
		}
	}

	private function copyFile($name, $newname, $format = 'xml', $newformat = 'xml_') {
		$file = $this->getFile($name, $format);
		$this->setFile($newname, $file, $newformat);
	}

	private function getFile($name = false, $format = 'xml') {
		$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));

		if ($format == 'css') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_editor/bus_editor_';
		} elseif ($format == 'js') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_editor/bus_editor_';
		} elseif ($format == 'tpl') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_editor'] . '/bus_editor_';
		} elseif ($format == 'twig') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_editor'] . '/bus_editor_';
		} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
			$path = DIR_IMAGE . 'catalog/bus_editor/';
		} else {
			$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_editor.ocmod';
		}

		$file = $path . ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name)) . '.' . preg_replace('/[^A-Z_]/i', '', $format);

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
		foreach ($this->load->language($this->paths['language']['bus_editor']) as $key => $lang) {
			$data[$key] = $lang;
		}

		//$this->load->model($this->paths['model']['bus_editor']);

		//$this->load->model('design/layout');

		//$this->load->model('localisation/language');

		//$this->load->model('setting/store');

		//$this->load->model('tool/image');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));

		$this->update();

		//$data['languages'] = $this->model_localisation_language->getLanguages();

		//$language_id = $this->config->get('config_language_id');

		$tabl_array = $this->tablArray();

		$data['tabl_array'] = $tabl_array;

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!empty($this->request->post['apply'])) {
				$apply = $this->request->post['apply'];
				unset($this->request->post['apply']);
			} else {
				$apply = false;
			}

			$this->load->model('setting/setting');

			$post = array(
				'bus_editor_version' => $this->version,
				'bus_editor_href_admin' => $this->request->post['href_admin']
			);

			foreach($tabl_array as $tabl) {
				if (isset($this->request->post[$tabl . '_href_status'])) {
					$post['bus_editor_' . $tabl . '_href_status'] = $this->request->post[$tabl . '_href_status'];
				}
			}

			if (isset($this->request->post['modification'])) {
				$post['bus_editor_modification'] = $this->request->post['modification'];
			}

			$modification = $this->modification(null, true, 1);

			$this->model_setting_setting->editSetting('bus_editor', $post);

			if ($apply) {
				$this->session->data['success'] = $this->language->get('success_setting_apply') . $modification;

				$this->response->redirect($this->url->link($this->paths['controller']['bus_editor'], $this->paths['token'], true));
			} else {
				$this->session->data['success'] = $this->language->get('success_setting_save') . $modification;

				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'] . '&type=module', true));
			}
		}

		if ($this->version_oc == 3) {
			$href_search = <<<'XML'
{{ button_compare }}
XML;
			$href_add = <<<'XML'
{% if (bus_editor_href is defined) %}<!--noindex--><button type="button" data-toggle="tooltip" class="btn btn-success" title="{{ button_bus_editor_href }}" onclick="window.open('{{ bus_editor_href }}', '_blank');"><i class="fa fa-pencil"></i></button><!--/noindex-->{% endif %}
XML;
		} else {
			$href_search = <<<'XML'
<?php echo $button_compare; ?>
XML;
			$href_add = <<<'XML'
<?php if (isset($bus_editor_href)) { ?><!--noindex--><button type="button" data-toggle="tooltip" class="btn btn-success" title="<?php echo $button_bus_editor_href; ?>" onclick="window.open('<?php echo $bus_editor_href; ?>', '_blank');"><i class="fa fa-pencil"></i></button><!--/noindex--><?php } ?>
XML;
		}

		$data['text_example_search'] = sprintf($this->language->get('text_example'), htmlspecialchars($href_search, ENT_COMPAT, 'UTF-8'));
		$data['text_example_add'] = sprintf($this->language->get('text_example'), htmlspecialchars($href_add, ENT_COMPAT, 'UTF-8'));

		$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory'));
		$data['text_view'] = sprintf($this->language->get('text_view'), $theme);

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
			'href' => $this->url->link('common/dashboard', $this->paths['token'], true)
		);

		if ($this->version_oc >= 2.2) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_extension'),
				'href' => $this->url->link($this->paths['controller']['extension'], $this->paths['token'], true)
			);
		}

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link($this->paths['controller']['extension'], $this->paths['token'] . ($this->version_oc >= 2.2 ? '&type=module' : false), true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link($this->paths['controller']['bus_editor'], $this->paths['token'], true)
		);

		$data['action'] = $this->url->link($this->paths['controller']['bus_editor'], $this->paths['token'], true);
		$data['cancel'] = $this->url->link($this->paths['controller']['extension'], $this->paths['token'] . ($this->version_oc >= 2.2 ? '&type=module' : false), true);

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

		if ($this->version_oc >= 3) {
			$template_engine = $this->registry->get('config')->get('template_engine');
			$this->registry->get('config')->set('template_engine', 'template');
		}

		$template = $this->load->view($this->paths['view']['bus_editor'], $data);

		if ($this->version_oc >= 3) {
			$this->registry->get('config')->set('template_engine', $template_engine);
			$this->response->addHeader('Content-Type: text/html; charset=utf-8');
		}

		$this->response->setOutput($template);
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', $this->paths['controller']['bus_editor'])) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	// установка
	public function install() {
		// посылыаем на йух
		$this->load->language($this->paths['language']['bus_editor']);

		if ($this->version_oc >= 2.2) {
			if (!$this->user->hasPermission('modify', 'extension/extension/module')) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		} else {
			if (!$this->user->hasPermission('modify', 'extension/module')) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		}

		if (!$this->error) {
			// создаём таблицу модуля
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_editor` (`module_id` int(11) NOT NULL AUTO_INCREMENT, `setting` text NOT NULL, PRIMARY KEY (`module_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_editor_description` (`module_id` int(11) NOT NULL, `language_id` int(11) NOT NULL, `setting` text NOT NULL, PRIMARY KEY (`module_id`, `language_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_editor_account` (`customer_id` int(11) NOT NULL, `setting` text NOT NULL, PRIMARY KEY (`customer_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");

			// создаём индекс status товара, если его нет
			/* $result = $this->db->query("SHOW INDEX FROM `" . DB_PREFIX . "product` where Key_name='status'");
			if ($result->num_rows == 0) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ADD KEY status (status)");
			} */

			// включаем модификатор модуля, если заливался в БД
			/* $this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->enableModification($code['modification_id']);
			} */

			// удаляем модификатор модуля, если заливался в БД
			$this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->deleteModification($code['modification_id']);
			}

			// создаём копию из резерва и переименовываем модификатор, если заливался в system
			$file = $this->getFile('library', 'xml_');

			$this->setFile(false, $file, 'xml');

			// создаём событие
			//$this->load->model($this->paths['model']['event']); 

			//if ($this->version_oc >= 3) {
				//$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_editor'] . '/event');

				//if (!$code) {
					//$this->{$this->paths['model']['event_path']}->addEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_editor'] . '/event', 1, 1001);
				//}
			//}

			// чистим кэши необходимые для модуля
			//$this->cache->delete('*');
			//$this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			//$this->cache->delete('article');
			//$this->cache->delete('category');
			//$this->cache->delete('information');
			//$this->cache->delete('manufacturer');
			//$this->cache->delete('product');
			//$this->cache->delete('seo_pro');
			//$this->cache->delete('seo_url');
			if ($this->version_oc >= 3) {
				$this->load->controller('common/developer/theme');
				$this->load->controller('common/developer/sass');
			}

			// готовим данные для ajax
			$text_install = $this->language->get('text_install');
			$text_ocmod_clear = $this->language->get('text_ocmod_clear');
			$text_ocmod_clearlog = $this->language->get('text_ocmod_clearlog');
			$text_ocmod_refresh = $this->language->get('text_ocmod_refresh');
			$text_cache_clear = $this->language->get('text_cache_clear');

			$success_install = $this->language->get('heading_title') . $this->language->get('success_install');

			$error_install = $this->language->get('error_install');

			$url_ocmod_clear = $this->url->link($this->paths['controller']['modification'] . '/clear', $this->paths['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link($this->paths['controller']['modification'] . '/clearlog', $this->paths['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link($this->paths['controller']['modification'] . '/refresh', $this->paths['token'], true);
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
	setTimeout(successModule, 2000);
}

function successModule() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success_install <button type="button" class="close" data-dismiss="alert">×</button>');
	$('a, button, select, input').removeAttr('disabled');
}
//--></script>
HTML;

			if ($this->version_oc >= 2.2) {
				$this->response->addHeader('Content-Type: text/html; charset=utf-8');
				$this->response->setOutput($text);
				echo $this->response->getOutput();
			} else {
				$this->session->data['success'] = $text;

				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'], true));
			}
		} else {
			echo $this->error['warning'];
		}
	}

	// удаление
	public function uninstall() {
		// посылыаем на йух
		$this->load->language($this->paths['language']['bus_editor']);

		if ($this->version_oc >= 2.2) {
			if (!$this->user->hasPermission('modify', 'extension/extension/module')) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		} else {
			if (!$this->user->hasPermission('modify', 'extension/module')) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		}

		if (!$this->error) {
			// Очищаем таблицу модуля
			//$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code`='bus_editor'");
			//$this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "bus_editor`");
			//$this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "bus_editor_description`");

			// выключаем модификатор модуля
			/* $this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->disableModification($code['modification_id']);
			} */

			// удаляем копию модификатора созданную из резерва, если заливался в system
			$this->deleteFile(false, 'xml');

			// удаляем событие
			//$this->load->model($this->paths['model']['event']); 

			//if ($this->version_oc >= 3) {
				//$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_editor'] . '/event');

				//if ($code) {
					//$this->{$this->paths['model']['event_path']}->deleteEvent($this->name_arhive);
				//}
			//}

			// чистим кэши необходимые для модуля
			//$this->cache->delete('*');
			//$this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			//$this->cache->delete('article');
			//$this->cache->delete('category');
			//$this->cache->delete('information');
			//$this->cache->delete('manufacturer');
			//$this->cache->delete('product');
			//$this->cache->delete('seo_pro');
			//$this->cache->delete('seo_url');
			if ($this->version_oc >= 3) {
				$this->load->controller('common/developer/theme');
				$this->load->controller('common/developer/sass');
			}

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

			$url_uninstall_files = $this->url->link($this->paths['controller']['bus_editor'] . '/uninstallFiles', $this->paths['token'], true);
			$url_uninstall_files = str_ireplace('&amp;', '&', $url_uninstall_files);
			$url_ocmod_clear = $this->url->link($this->paths['controller']['modification'] . '/clear', $this->paths['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link($this->paths['controller']['modification'] . '/clearlog', $this->paths['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link($this->paths['controller']['modification'] . '/refresh', $this->paths['token'], true);
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
	setTimeout(successModule, 2000);
}

function successModule() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
	$('.alert-success').after('<a type="button" onclick="uninstallFiles();" class="btn btn-info alert" style="width:100%;" data-dismiss="alert"><i class="fa fa-trash-o"></i> $button_files_clear</a>');
	$('a, button, select, input').removeAttr('disabled');
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

			if ($this->version_oc >= 2.2) {
				$this->response->addHeader('Content-Type: text/html; charset=utf-8');
				$this->response->setOutput($text);
				echo $this->response->getOutput();
			} else {
				$this->session->data['success'] = $text;

				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'], true));
			}
		} else {
			echo $this->error['warning'];
		}
	}

	// удаление файлов модуля
	public function uninstallFiles() {
		$this->load->language($this->paths['language']['bus_editor']);

		// посылыаем на йух
		if ($this->version_oc >= 2.2) {
			if (!$this->user->hasPermission('modify', 'extension/extension/module') || !$this->user->hasPermission('modify', $this->paths['controller']['bus_editor'])) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		} else {
			if (!$this->user->hasPermission('modify', 'extension/module') || !$this->user->hasPermission('modify', $this->paths['controller']['bus_editor'])) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		}

		if (!$this->error) {
			// удаляем права администратора
			$this->load->model('user/user_group');

			foreach ($this->model_user_user_group->getUserGroups() as $result) {
				if ($this->version_oc >= 4) {
					$this->model_user_user_group->removePermission($result['user_group_id'], 'access', $this->paths['controller']['bus_editor']);
					$this->model_user_user_group->removePermission($result['user_group_id'], 'modify', $this->paths['controller']['bus_editor']);
				} else {
					$users = array();
					$users[0]['user_group_id'] = $result['user_group_id'];
					$users[0]['type'] = 'access';
					$users[0]['route'] = $this->paths['controller']['bus_editor'];
					$users[1]['user_group_id'] = $result['user_group_id'];
					$users[1]['type'] = 'modify';
					$users[1]['route'] = $this->paths['controller']['bus_editor'];

					foreach ($users as $user) {
						$user_group_query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "user_group WHERE user_group_id = '" . (int)$user['user_group_id'] . "'");

						if ($user_group_query->num_rows) {
							$data = json_decode($user_group_query->row['permission'], true);

							if (isset($data[$user['type']])) {
								$data[$user['type']] = array_diff($data[$user['type']], array($user['route']));
							}

							$this->db->query("UPDATE " . DB_PREFIX . "user_group SET permission = '" . $this->db->escape(json_encode($data)) . "' WHERE user_group_id = '" . (int)$user['user_group_id'] . "'");
						}
					}
				}
			}

			// удаляем таблицу модуля
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_editor`");
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_editor_description`");
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_editor_account`");

			// удаляем индекс status товара
			/* $result = $this->db->query("SHOW INDEX FROM `" . DB_PREFIX . "product` where Key_name='status'");
			if ($result->num_rows > 0) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "product` DROP INDEX status");
			} */

			// удаляем модуль из БД списка установленных модулей
			if ($this->version_oc >= 3) {
				$this->load->model($this->paths['model']['extension']);

				$results = $this->{$this->paths['model']['extension_path']}->getExtensionInstalls(0, 1000);

				foreach ($results as $result) {
					if (stristr($result['filename'], $this->name_arhive)) {
						$this->{$this->paths['model']['extension_path']}->deleteExtensionInstall($result['extension_install_id']);
						$paths = $this->{$this->paths['model']['extension_path']}->getExtensionPathsByExtensionInstallId($result['extension_install_id']);

						foreach ($paths as $path) {
							$this->{$this->paths['model']['extension_path']}->deleteExtensionPath($path['extension_path_id']);
						}
					}
				}
			}

			// удаляем модификатор модуля, если заливался в БД
			$this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->deleteModification($code['modification_id']);
			}

			// удаляем событие
			//$this->load->model($this->paths['model']['event']); 

			//if ($this->version_oc >= 3) {
				//$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_editor'] . '/event');

				//if ($code) {
					//$this->{$this->paths['model']['event_path']}->deleteEvent($this->name_arhive);
				//}
			//}

			// готовим данные для php
			$db_paths = array(
				//DB_PREFIX . 'bus_editor_geo',
			);

			$module_paths = array(
				// 2.1 OpenCart
				DIR_APPLICATION . 'controller/module/bus_editor.php',
				//DIR_APPLICATION . 'model/module/bus_editor.php',
				DIR_APPLICATION . 'view/template/module/bus_editor',
				//DIR_CATALOG . 'controller/module/bus_editor.php',
				//DIR_CATALOG . 'model/module/bus_editor.php',
				// 2.3 и 3.0 OpenCart
				DIR_APPLICATION . 'controller/extension/module/bus_editor.php',
				//DIR_APPLICATION . 'model/extension/module/bus_editor.php',
				DIR_APPLICATION . 'view/template/extension/module/bus_editor',
				//DIR_CATALOG . 'controller/extension/module/bus_editor.php',
				//DIR_CATALOG . 'model/extension/module/bus_editor.php',
				//DIR_IMAGE . 'catalog/bus_editor[NAGIBATOR]',
				//DIR_LOGS . 'bus_editor',
				DIR_SYSTEM . 'library/bus_editor[NAGIBATOR]',
				DIR_SYSTEM . 'library/bus_editor.ocmod.xml_',
				DIR_SYSTEM . 'bus_editor.ocmod.xml',
			);

			// проверяем и удаляем со всех языковых файлов
			foreach (glob(DIR_APPLICATION . 'language/*') as $path) {
				$module_paths[] = $path . '/module/bus_editor[NAGIBATOR]';
				$module_paths[] = $path . '/extension/module/bus_editor[NAGIBATOR]';
			}

			/* foreach (glob(DIR_CATALOG . 'language/*') as $path) {
				$module_paths[] = $path . '/module/bus_editor[NAGIBATOR]';
				$module_paths[] = $path . '/extension/module/bus_editor[NAGIBATOR]';
			} */

			// проверяем и удаляем со всех тем
			foreach (glob(DIR_CATALOG . 'view/theme/*') as $path) {
				$module_paths[] = $path . '/stylesheet/bus_editor[NAGIBATOR]';
				$module_paths[] = $path . '/javascript/bus_editor[NAGIBATOR]';
				$module_paths[] = $path . '/javascript';
				$module_paths[] = $path . '/template/module/bus_editor[NAGIBATOR]';
				$module_paths[] = $path . '/template/extension/module/bus_editor[NAGIBATOR]';
			}

			$text = '------------------- Start: ' . date($this->language->get('datetime_format')) . ' ' . $this->language->get('text_uninstall_files_log') . ' ' . strip_tags($this->language->get('heading_title')) . ' -------------------';
			foreach ($db_paths as $path) {
				$text .= "\n" . '<br>' . $this->language->get('success_uninstall_data_base') . $path;
			}
			if ($code) {
				$text .= "\n" . '<br>' . $this->language->get('success_uninstall_modification') . $this->name . ' (id: ' . $this->code . ')';
			}
			foreach ($module_paths as $path) {
				$text .= $this->deleteDir($path);
			}
			$text .= "\n" . '<br>------------------- Stop: ' . date($this->language->get('datetime_format')) . ' ' . $this->language->get('text_uninstall_files_log') . ' ' . strip_tags($this->language->get('heading_title')) . ' -------------------' . "\n";

			// Log
			$handle = fopen(DIR_LOGS . 'ocmod.log', 'w+');

			flock($handle, LOCK_EX);

			fwrite($handle, strip_tags(str_replace(array(DIR_APPLICATION, DIR_CATALOG, DIR_IMAGE, DIR_SYSTEM), array(basename(DIR_APPLICATION) . '/', basename(DIR_CATALOG) . '/', basename(DIR_IMAGE) . '/', basename(DIR_SYSTEM) . '/'), $text)));

			fflush($handle);

			flock($handle, LOCK_UN);

			fclose($handle);

			//$ocmod = new Log('ocmod.log');
			//$ocmod->write($text);

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($text, JSON_HEX_AMP));
		} else {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($this->error['warning'], JSON_HEX_AMP));
		}
	}

	private function deleteDir($dirname, $nagibator = false) {
		$this->load->language($this->paths['language']['bus_editor']);

		$text = false;
		$files = glob($dirname . '*');

		if ($files) {
			foreach ($files as $dirname) {
				if (file_exists($dirname)) {
					if (is_dir($dirname)){
						$dir_del = true;
						$dir = opendir($dirname);
						while (($filename = readdir($dir)) !== false) {
							if ($filename != "." && $filename != ".." && $filename != "index.html" && $filename != ".htaccess") {
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
						$filename = basename($dirname);
						if ($nagibator || $filename != "index.html" && $filename != ".htaccess") {
							@unlink($dirname);
							$text .= "\n" . '<br>' . $this->language->get('success_uninstall_file') . $dirname;
						}
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

	private function update() {
		$version = $this->configGet('version');
		if ($this->validate() && ($this->request->server['REQUEST_METHOD'] != 'POST') && $version && version_compare($this->version, $version, '>')) {
			if (version_compare('1.1.1', $version, '>')) {

			}

			$this->session->data['success'] = $this->modification($this->language->get('heading_title') . $this->language->get('success_update'), true, 500);
		}
	}

	private function modification($message = false, $data = true, $speed = 2000) {
		// посылыаем на йух
		if ($this->version_oc >= 2.2) {
			if (!$this->user->hasPermission('modify', 'extension/extension/module')) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		} else {
			if (!$this->user->hasPermission('modify', 'extension/module')) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		}

		if (!$this->error) {
			$file = $this->getFile(false, 'xml');

			if ($data && $file) {
				$this->deleteFile(false, 'xml');
				if ($this->getFile('library', 'xml_')) {
					$this->setFile(false, $this->getFile('library', 'xml_'), 'xml');
				}
			} elseif ($data && !$file) {
				$this->setFile(false, $this->getFile('library', 'xml_'), 'xml');
			} elseif (!$data) {
				$this->deleteFile(false, 'xml');
			}

			// удаляем модификатор модуля, если заливался в БД
			$this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->deleteModification($code['modification_id']);
			}

			if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate() && isset($this->request->post['modification'])) {
				$setting = $this->request->post['modification'];

				$status = false;
				$modification = $this->getFile('library', 'xml_');

				foreach ($this->tablArray() as $tabl) {
					if (!empty($setting[$tabl . '_href_search'])) {
						$status = true;
						if (!isset($setting[$tabl . '_href_index'])) {
							$setting[$tabl . '_href_index'] = 0;
						}

						$modification = preg_replace('~<search index="0" tabl="' . $tabl . '"><!\[CDATA\[(.*?)\]\]></search>~iS', '<search index="' . $setting[$tabl . '_href_index'] . '" tabl="' . $tabl . '"><![CDATA[' . $setting[$tabl . '_href_search'] . ']]></search>', $modification);
					}

					if (!empty($setting[$tabl . '_href_add'])) {
						$status = true;
						if (!isset($data[$tabl . '_href_position'])) {
							$setting[$tabl . '_href_position'] = 'after';
						} else {
							if ($setting[$tabl . '_href_position'] == 1) {
								$setting[$tabl . '_href_position'] = 'before';
							} elseif ($setting[$tabl . '_href_position'] == 2) {
								$setting[$tabl . '_href_position'] = 'replace';
							} else {
								$setting[$tabl . '_href_position'] = 'after';
							}
						}

						$modification = preg_replace('~<add position="(.[^"]*?)" tabl="' . $tabl . '"><!\[CDATA\[(.*?)\]\]></add>~iS', '<add position="' . $setting[$tabl . '_href_position'] . '" tabl="' . $tabl . '"><![CDATA[' . $setting[$tabl . '_href_add'] . ']]></add>', $modification);
					}
				}

				if ($status && $modification) {
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
				}
			}

			// чистим кэши необходимые для модуля
			//$this->cache->delete('*');
			//$this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			//$this->cache->delete('article');
			//$this->cache->delete('category');
			//$this->cache->delete('information');
			//$this->cache->delete('manufacturer');
			//$this->cache->delete('product');
			//$this->cache->delete('seo_pro');
			//$this->cache->delete('seo_url');
			if ($this->version_oc >= 3) {
				$this->load->controller('common/developer/theme');
				//$this->load->controller('common/developer/sass');
			}

			// готовим данные для ajax
			$text_ocmod_clear = $this->language->get('text_ocmod_clear');
			$text_ocmod_clearlog = $this->language->get('text_ocmod_clearlog');
			$text_ocmod_refresh = $this->language->get('text_ocmod_refresh');

			if (isset($this->session->data['apply'])) {
				$success = $this->language->get('success_setting_apply') . ' ' . $message;
				unset($this->session->data['apply']);
			} else {
				$success = $this->language->get('success_setting_save') . ' ' . $message;
			}

			$error_uninstall = $this->language->get('error_uninstall');

			$url_ocmod_clear = $this->url->link($this->paths['controller']['modification'] . '/clear', $this->paths['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link($this->paths['controller']['modification'] . '/clearlog', $this->paths['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link($this->paths['controller']['modification'] . '/refresh', $this->paths['token'], true);
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
				setTimeout(ocmodClearlog, $speed);
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
				setTimeout(ocmodRefresh, $speed);
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
				setTimeout(successModule, $speed);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="close" data-dismiss="alert">×</button>');
		}
	});
}

function successModule() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success <button type="button" class="close" data-dismiss="alert">×</button>');
	$('a, button, select, input').removeAttr('disabled');
}
//--></script>
HTML;

			return $text;
		}
	}
}