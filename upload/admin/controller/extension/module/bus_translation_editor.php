<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2024; BuslikDrev - Усе правы захаваныя.
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

//namespace Opencart\Admin\Controller\Extension\BusTranslationEditor\Module;

// забараняем прамы доступ
if (!defined('VERSION')) {
	header('Refresh: 1; URL=/');
	exit('ЗАПРЫШЧАЮ!');
}

if (version_compare(VERSION, '4.0.0', '>=')) {
	class Controller extends \Opencart\System\Engine\Controller {}
}

if (version_compare(VERSION, '2.3.0', '<')) {
	class ControllerModuleBusTranslationEditor extends BusTranslationEditor {}
} elseif (version_compare(VERSION, '4.0.0', '<')) {
	class ControllerExtensionModuleBusTranslationEditor extends BusTranslationEditor {}
}

class BusTranslationEditor extends Controller {
	private $error = array();
	private $name_arhive = 'Translation editor';
	private $code_event = 'bus_translation_editor';
	private $code = '01000061';
	private $mame = 'Редактор перевода - "Translation editor"';
	private $version = '1.0.8';
	private $author = 'BuslikDrev.by';
	private $link = 'https://liveopencart.ru/buslikdrev';
	private $version_oc = 2.2;
	private $paths = array();

	public function __construct($foo) {
		parent::__construct($foo);
		if (method_exists($this->language, 'set')) {
			$this->language->set('bus_translation_editor_version', $this->version);
		}
		if (version_compare(VERSION, '4.0.0', '>=')) {
			$this->version_oc = 4;
			$this->paths = array(
				'controller' => array(
					'bus_cache' => 'extension/bus_cache/module/bus_cache',
					'bus_cache_event' => 'extension/bus_cache/event/bus_cache',
					'module' => 'extension/module',
					'extension' => 'marketplace/extension',
					'modification' => 'marketplace/modification',
				),
				'language' => array(
					'bus_cache' => 'extension/bus_cache/module/bus_cache',
				),
				'model' => array(
					'bus_cache' => 'extension/bus_cache/module/bus_cache',
					'bus_cache_path' => 'model_extension_module_bus_cache',
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
					'bus_cache' => 'extension/bus_cache/admin/view/template/module/bus_cache',
				),
				'token' => 'user_token=' . $this->session->data['user_token']
			);
		} elseif (version_compare(VERSION, '3.0.0', '>=')) {
			$this->version_oc = 3;
			$this->paths = array(
				'controller' => array(
					'bus_translation_editor' => 'extension/module/bus_translation_editor',
					'extension' => 'marketplace/extension',
					'modification' => 'marketplace/modification',
				),
				'language' => array(
					'bus_translation_editor' => 'extension/module/bus_translation_editor',
					'directory' => $this->config->get('config_language'),
				),
				'model' => array(
					'bus_translation_editor' => 'extension/module/bus_translation_editor',
					'bus_translation_editor_path' => 'model_extension_module_bus_translation_editor',
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
					'bus_translation_editor' => 'extension/module/bus_translation_editor',
				),
				'token' => 'user_token=' . $this->session->data['user_token']
			);
		} elseif (version_compare(VERSION, '2.2.0', '>=')) {
			$this->version_oc = 2.2;
			$this->paths = array(
				'controller' => array(
					'bus_translation_editor' => 'extension/module/bus_translation_editor',
					'extension' => 'extension/extension',
					'modification' => 'extension/modification',
				),
				'language' => array(
					'bus_translation_editor' => 'extension/module/bus_translation_editor',
					'directory' => $this->config->get('config_language'),
				),
				'model' => array(
					'bus_translation_editor' => 'extension/module/bus_translation_editor',
					'bus_translation_editor_path' => 'model_extension_module_bus_translation_editor',
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
					'bus_translation_editor' => 'extension/module/bus_translation_editor',
				),
				'token' => 'token=' . $this->session->data['token']
			);
		} else {
			$this->version_oc = 2;
			$this->load->model('localisation/language');
			$language = $this->model_localisation_language->getLanguage($this->config->get('config_language_id'));
			$this->paths = array(
				'controller' => array(
					'bus_translation_editor' => 'module/bus_translation_editor',
					'extension' => 'extension/module',
					'modification' => 'extension/modification',
				),
				'language' => array(
					'bus_translation_editor' => 'module/bus_translation_editor',
					'directory' => (!empty($language['directory']) ? $language['directory'] : 'english'),
				),
				'model' => array(
					'bus_translation_editor' => 'module/bus_translation_editor',
					'bus_translation_editor_path' => 'model_module_bus_translation_editor',
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
					'bus_translation_editor' => 'module/bus_translation_editor.tpl',
				),
				'token' => 'token=' . $this->session->data['token']
			);
		}
	}

	// подмена $this->config->get()
	private function configGet($name = '') {
		if (isset($this->session->data['import']) && !$name) {
			$data = $this->session->data['import'];
			unset($this->session->data['import']);
		} else {
			$data = $this->config->get('bus_translation_editor');
		}

		if ($data) {
			if ($name) {
				if (isset($data[$name])) {
					$data = $data[$name];
				} else {
					$data = null;
				}
			}
		} else {
			$data = null;
		}

		return $data;
	}

	private function setFile($name, $value, $format = 'xml') {
		$this->deleteFile($name, $format);

		if ($value) {
			$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));

			if ($format == 'css') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_translation_editor/bus_translation_editor_';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
				if (!is_dir(str_replace('/bus_translation_editor/bus_translation_editor_', '', $path))) {
					mkdir(str_replace('/bus_translation_editor/bus_translation_editor_', '', $path), 0755);
				}
				if (!is_dir(str_replace('/bus_translation_editor_', '', $path))) {
					mkdir(str_replace('/bus_translation_editor_', '', $path), 0755);
				}
			} elseif ($format == 'js') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_translation_editor/bus_translation_editor_';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
				if (!is_dir(str_replace('/bus_translation_editor/bus_translation_editor_', '', $path))) {
					mkdir(str_replace('/bus_translation_editor/bus_translation_editor_', '', $path), 0755);
				}
				if (!is_dir(str_replace('/bus_translation_editor_', '', $path))) {
					mkdir(str_replace('/bus_translation_editor_', '', $path), 0755);
				}
			} elseif ($format == 'tpl') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_translation_editor'] . '/bus_translation_editor_';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
			} elseif ($format == 'twig') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_translation_editor'] . '/bus_translation_editor_';
				$name = ($name == 'library' ? false : preg_replace('/[^A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
			} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
				$path = DIR_IMAGE . 'catalog/bus_translation_editor/';
				$name = ($name == 'library' ? false : preg_replace('/[^\/A-Z0-9_-]/i', '', $name));
				$format = '.' . preg_replace('/[^A-Z_]/i', '', $format);
			} else {
				$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_translation_editor.ocmod';
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
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_translation_editor/bus_translation_editor_';
		} elseif ($format == 'js') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_translation_editor/bus_translation_editor_';
		} elseif ($format == 'tpl') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_translation_editor'] . '/bus_translation_editor_';
		} elseif ($format == 'twig') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_translation_editor'] . '/bus_translation_editor_';
		} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
			$path = DIR_IMAGE . 'catalog/bus_translation_editor/';
		} else {
			$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_translation_editor.ocmod';
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
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_translation_editor/bus_translation_editor_';
		} elseif ($format == 'js') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_translation_editor/bus_translation_editor_';
		} elseif ($format == 'tpl') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_translation_editor'] . '/bus_translation_editor_';
		} elseif ($format == 'twig') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_translation_editor'] . '/bus_translation_editor_';
		} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
			$path = DIR_IMAGE . 'catalog/bus_translation_editor/';
		} else {
			$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_translation_editor.ocmod';
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

	public function path() {
		$json = array();

		$dir = DIR_LANGUAGE;

		if (isset($this->request->get['tab'])) {
			if ($this->request->get['tab'] == 'catalog') {
				$dir = DIR_CATALOG . 'language/';
			}
		}

		if (isset($this->request->get['store_id'])) {
			$store_id = (int)$this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		if (isset($this->request->get['path'])) {
			$path = preg_replace('/[^a-zA-Z0-9_\/-]/i', '', $this->request->get['path']);
		} else {
			$path = '';
		}

		if (!$this->validate()) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			if ($this->version_oc != 2) {
				$this->load->model('localisation/language');
			}

			$lang_codes = array();

			$languages = $this->model_localisation_language->getLanguages();

			if ($this->version_oc != 2) {
				foreach ($languages as $language) {
					$lang_codes[] = $language['code'];
				}
			} else {
				foreach ($languages as $language) {
					$lang_codes[] = $language['directory'];
				}
			}

			if ($lang_codes && substr(str_replace('\\', '/', realpath($dir . $this->paths['language']['directory'] . '/' . $path)), 0, strlen($dir)) == $dir) {
				$path_data = array();

				$files = glob(rtrim($dir . '{' . implode(',', $lang_codes) . '}/' . $path, '/') . '/*', GLOB_BRACE);

				if ($files) {
					foreach($files as $file) {
						$basename = basename($file);
						$extension = pathinfo($basename, PATHINFO_EXTENSION);
						if (!in_array($basename, $path_data) && ($extension == 'php' || !$extension))  {
							if (is_dir($file)) {
								$json['directory'][] = array(
									'name' => $basename,
									'path' => trim($path . '/' . $basename, '/')
								);
							} elseif (is_file($file)) {
								$json['file'][] = array(
									'name' => $basename,
									'path' => trim($path . '/' . str_replace('.php', '', $basename), '/')
								);
							}

							$path_data[] = $basename;
						}
					}
				}
			}

			if ($path) {
				$json['back'] = array(
					'name' => 'Back',
					'path' => urlencode(substr($path, 0, strrpos($path, '/'))),
				);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function langfile() {
		$json = array();

		$dir = DIR_LANGUAGE;

		if (isset($this->request->get['tab'])) {
			if ($this->request->get['tab'] == 'catalog') {
				$dir = DIR_CATALOG . 'language/';
			}
		}

		if (isset($this->request->get['store_id'])) {
			$store_id = (int)$this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		if (isset($this->request->get['path'])) {
			$path = preg_replace('/[^a-zA-Z0-9_\/-]/i', '', $this->request->get['path']) . '.php';
		} else {
			$path = '';
		}

		if (!$this->validate()) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			if ($this->version_oc != 2) {
				$this->load->model('localisation/language');
			}

			$main = false;

			$languages = $this->model_localisation_language->getLanguages();

			if ($this->version_oc != 2) {
				foreach ($languages as $language) {
					if ($language['code'] . '.php' == $path) {
						$main = true;
					}
				}
			} else {
				foreach ($languages as $language) {
					if ($language['directory'] . '.php' == $path) {
						$main = true;
					}
				}
			}

			$json['success'] = array();

			foreach ($languages as $language) {
				$language['code'] = ($this->version_oc != 2 ? $language['code'] : $language['directory']);
				if ($main) {
					$path = $language['code'] . '.php';
				}

				if (substr(str_replace('\\', '/', realpath($dir . $language['code'] . '/' . $path)), 0, strlen($dir)) == $dir) {
					foreach ($this->loadLanguage($path, $language['code'], $dir) as $lang) {
						$md5 = md5($lang['name']);
						$json['success'][$md5]['path'] = str_replace('.php', '', $path);
						$json['success'][$md5]['name'] = $lang['name'];
						$json['success'][$md5]['value'][$language['code']] = htmlentities($lang['value'], ENT_QUOTES);
					}
				}
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function search() {
		$start = microtime(true);
		$json = array();

		$this->load->language($this->paths['language']['bus_translation_editor']);

		$dir = DIR_LANGUAGE;
		$tab = 'admin';

		if (isset($this->request->get['tab'])) {
			if ($this->request->get['tab'] == 'catalog') {
				$dir = DIR_CATALOG . 'language/';
				$tab = 'catalog';
			}
		}

		if (isset($this->request->get['store_id'])) {
			$store_id = (int)$this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		$path = '';

		if (isset($this->request->get['search']) && iconv_strlen($this->request->get['search'])) {
			$search = mb_strtolower($this->request->get['search']);
		} else {
			$json['error'] = $this->language->get('error_install');
		}

		if (!$this->validate()) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			if ($this->version_oc != 2) {
				$this->load->model('localisation/language');
			}

			$lang_codes = array();

			$languages = $this->model_localisation_language->getLanguages();

			if ($this->version_oc != 2) {
				foreach ($languages as $language) {
					$lang_codes[] = $language['code'];
				}
			} else {
				foreach ($languages as $key => $language) {
					$languages[$key]['code'] = $language['directory'];
					$lang_codes[] = $language['directory'];
				}
			}

			$data = array();
			$data['list_lang'] = array();
			$json['type'] = 1;
			if ($json['type'] == 1) {
				$data['languages'] = $languages;
				$data['tab'] = $tab;
				$data['text_path'] = $this->language->get('text_path');
				$data['column_name'] = $this->language->get('column_name');
				$data['column_value'] = $this->language->get('column_value');
				$data['button_save'] = $this->language->get('button_save');
				$data['button_delete'] = $this->language->get('button_delete');
			}

			function stri_search($path, $extension, $search) {
				$file_arr = array();
				$totals = 0;
				$counts = 0;

				foreach (glob(rtrim($path, '/') . '/*' . $extension, GLOB_NOSORT|GLOB_BRACE) as $file) {
					if (is_dir($file)) {
						$files = stri_search($file, '', $search);
						$totals += $files['total'];
						$counts += $files['count'];
						foreach ($files['files'] as $f) {
							$file_arr[] = $f;
						}
					} elseif (is_file($file)) {
						$totals++;
						if (strpos(mb_strtolower(file_get_contents($file)), $search) !== false) {
							$counts++;
							$file_arr[] = $file;
						}
					}
				}

				return array('files' => $file_arr, 'total' => $totals, 'count' => $counts);
			}

			$files = stri_search($dir . '{' . implode(',', $lang_codes) . '}/', '', $search);
			$files['count_result'] = 0;

			foreach ($files['files'] as $file) {
				$basename = basename($file);
				if (pathinfo($basename, PATHINFO_EXTENSION) == 'php') {
					$path = str_replace($dir, '', $file);
					$path = str_replace(strstr($path, '/', true) . '/', '', $path);
					foreach ($languages as $language) {
						$language['code'] = ($this->version_oc != 2 ? $language['code'] : $language['directory']);
						foreach ($this->loadLanguage($path, $language['code'], $dir) as $lang) {
							if (strpos(mb_strtolower($lang['name']), $search) !== false || strpos(mb_strtolower($lang['value']), $search) !== false) {
								$md5 = md5($lang['name'] . $path);
								$files['count_result']++;
								$data['list_lang'][$md5]['path'] = str_replace('.php', '', $path);
								$data['list_lang'][$md5]['name'] = $lang['name'];
								$data['list_lang'][$md5]['value'][$language['code']] = htmlentities($lang['value'], ENT_QUOTES);
							}
						}
					}
				}
			}

			if ($json['type'] == 1 && $data['list_lang']) {
				// прогоняем снова для получения всего результата
				foreach ($data['list_lang'] as $md5 => $result) {
					foreach ($languages as $language) {
						foreach ($this->loadLanguage($result['path'] . '.php', $language['code'], $dir) as $lang) {
							if ($lang['name'] == $result['name']) {
								$data['list_lang'][$md5]['value'][$language['code']] = htmlentities($lang['value'], ENT_QUOTES);
							}
						}
					}
				}

				if ($this->version_oc >= 3) {
					$template_engine = $this->registry->get('config')->get('template_engine');
					$this->registry->get('config')->set('template_engine', 'template');
				}

				$template = $this->load->view($this->paths['view']['bus_translation_editor'], $data);

				if ($this->version_oc >= 3) {
					$this->registry->get('config')->set('template_engine', $template_engine);
					$this->response->addHeader('Content-Type: text/html; charset=utf-8');
				}

				$json['success'] = $template;
			} else {
				$json['success'] = $data['list_lang'];
			}

			$json['results'] = array(
				'time_php'     => sprintf($this->language->get('text_search_time_php'), round(microtime(true) - $start, 3)),
				'time_js'      => sprintf($this->language->get('text_search_time_js'), '{time}'),
				'total'        => $this->language->get('text_total') . ' ' . $files['total'],
				'count'        => $this->language->get('text_count') . ' ' . $files['count'],
				'count_result' => $this->language->get('text_count_result') . ' ' . $files['count_result']
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function save() {
		$json = array();

		$this->load->language($this->paths['language']['bus_translation_editor']);

		$dir = DIR_LANGUAGE;

		if (isset($this->request->get['tab'])) {
			if ($this->request->get['tab'] == 'catalog') {
				$dir = DIR_CATALOG . 'language/';
			}
		}

		if (isset($this->request->get['store_id'])) {
			$store_id = (int)$this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		if (isset($this->request->post['path'])) {
			$path = preg_replace('/[^a-zA-Z0-9_\/-]/i', '', $this->request->post['path']) . '.php';
		} else {
			$json['error'] = $this->language->get('error_warning');
		}

		if (isset($this->request->post['name'])) {
			$name = $this->request->post['name'];
		} else {
			$json['error'] = $this->language->get('error_warning');
		}

		if (isset($this->request->post['value'])) {
			$value = $this->request->post['value'];
		} else {
			$json['error'] = $this->language->get('error_warning');
		}

		if (!$this->validate()) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			if ($this->version_oc != 2) {
				$this->load->model('localisation/language');
			}

			$main = false;
			$valid = false;

			$languages = $this->model_localisation_language->getLanguages();

			if ($this->version_oc != 2) {
				foreach ($languages as $language) {
					if ($language['code'] . '.php' == $path) {
						$main = true;
					}
					if (isset($value[$language['code']]) && substr(str_replace('\\', '/', realpath($dir . $language['code'] . '/' . $path)), 0, strlen($dir)) == $dir) {
						$valid = true;
					}
				}
			} else {
				foreach ($languages as $language) {
					if ($language['directory'] . '.php' == $path) {
						$main = true;
					}
					if (isset($value[$language['directory']]) && substr(str_replace('\\', '/', realpath($dir . $language['directory'] . '/' . $path)), 0, strlen($dir)) == $dir) {
						$valid = true;
					}
				}
			}

			foreach ($languages as $language) {
				$language['code'] = ($this->version_oc != 2 ? $language['code'] : $language['directory']);
				if ($main) {
					$path = $language['code'] . '.php';
				}

				if ($valid) {
					if (!is_file($dir . $language['code'] . '/' . $path)) {
						$path_new = '';
						$basename = basename($path);

						foreach (explode('/', $path) as $p) {
							$path_new .= '/' . $p;
							if ($p == $basename) {
								file_put_contents($dir . $language['code'] . $path_new, '<?php');
							} else {
								if (!is_dir($dir . $language['code'] . $path_new)) {
									mkdir($dir . $language['code'] . $path_new, 0755, true);
								}
							}
						}
					}

					$data = file_get_contents($dir . $language['code'] . '/' . $path);

					$value[$language['code']] = str_replace(array("\r", "\n"), '', html_entity_decode($value[$language['code']], ENT_QUOTES));
					if (stristr($data, '$_[' . $name . ']') !== false) {
						$data = preg_replace('/\$_\[' . preg_quote($name, '/') . '\](.[\s\=]*)(.*?);(?=\r\n|\n|\r|)/S', '$_[' . $name . ']$1' . $value[$language['code']] . ';$3', $data);
					} else {
						$data = str_replace('<?php', '<?php' . "\r\n" . '$_[' . $name . '] = ' . $value[$language['code']] . ';', $data);
					}

					file_put_contents($dir . $language['code'] . '/' . $path, $data);
				} else {
					$json['error'] = $this->language->get('error_warning');
				}
			}

			if (!$json) {
				$json['success'] = $this->language->get('success_setting_save');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function delete() {
		$json = array();

		$this->load->language($this->paths['language']['bus_translation_editor']);

		$dir = DIR_LANGUAGE;

		if (isset($this->request->get['tab'])) {
			if ($this->request->get['tab'] == 'catalog') {
				$dir = DIR_CATALOG . 'language/';
			}
		}

		if (isset($this->request->get['store_id'])) {
			$store_id = (int)$this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		if (isset($this->request->post['path'])) {
			$path = preg_replace('/[^a-zA-Z0-9_\/-]/i', '', $this->request->post['path']) . '.php';
		} else {
			$json['error'] = $this->language->get('error_warning');
		}

		if (isset($this->request->post['name'])) {
			$name = $this->request->post['name'];
		} else {
			$json['error'] = $this->language->get('error_warning');
		}

		if (isset($this->request->post['value'])) {
			$value = $this->request->post['value'];
		} else {
			$json['error'] = $this->language->get('error_warning');
		}

		if (!$this->validate()) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			if ($this->version_oc != 2) {
				$this->load->model('localisation/language');
			}

			$main = false;
			$valid = false;

			$languages = $this->model_localisation_language->getLanguages();

			if ($this->version_oc != 2) {
				foreach ($languages as $language) {
					if ($language['code'] . '.php' == $path) {
						$main = true;
					}
					if (isset($value[$language['code']]) && substr(str_replace('\\', '/', realpath($dir . $language['code'] . '/' . $path)), 0, strlen($dir)) == $dir) {
						$valid = true;
					}
				}
			} else {
				foreach ($languages as $language) {
					if ($language['directory'] . '.php' == $path) {
						$main = true;
					}
					if (isset($value[$language['directory']]) && substr(str_replace('\\', '/', realpath($dir . $language['directory'] . '/' . $path)), 0, strlen($dir)) == $dir) {
						$valid = true;
					}
				}
			}

			foreach ($languages as $language) {
				$language['code'] = ($this->version_oc != 2 ? $language['code'] : $language['directory']);
				if ($main) {
					$path = $language['code'] . '.php';
				}

				if ($valid && is_file($dir . $language['code'] . '/' . $path)) {
					$data = file_get_contents($dir . $language['code'] . '/' . $path);

					if (stristr($data, '$_[' . $name . ']') !== false) {
						$data = preg_replace('/\$_\[' . preg_quote($name, '/') . '\](.[\s\=]*)(.*?);(?=\r\n|\n|\r|)/S', '', $data);
					}

					file_put_contents($dir . $language['code'] . '/' . $path, $data);
				} else {
					$json['error'] = $this->language->get('error_warning');
				}
			}

			if (!$json) {
				$json['success'] = $this->language->get('success_setting_save');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function restore() {
		$json = array();

		$this->load->language($this->paths['language']['bus_translation_editor']);

		$dir = DIR_LANGUAGE;
		$dir_dump = DIR_SYSTEM . 'library/bus_translation_editor/dump/admin/';

		if (isset($this->request->get['tab'])) {
			if ($this->request->get['tab'] == 'catalog') {
				$dir = DIR_CATALOG . 'language/';
				$dir_dump = DIR_SYSTEM . 'library/bus_translation_editor/dump/catalog/';
			}
		}

		if (isset($this->request->get['store_id'])) {
			$store_id = (int)$this->request->get['store_id'];
		} else {
			$store_id = 0;
		}

		if (isset($this->request->get['path'])) {
			$path = preg_replace('/[^a-zA-Z0-9_\/-]/i', '', $this->request->get['path']) . '.php';
		} else {
			$json['error'] = $this->language->get('error_warning');
		}

		if (!$this->validate()) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
			/* if (!is_file($dir_dump . $path)) {
				$json['error'] = $this->language->get('error_restore');
			} */

			if ($this->version_oc != 2) {
				$this->load->model('localisation/language');
			}

			$languages = $this->model_localisation_language->getLanguages();

			$main = true;

			foreach ($languages as $language) {
				$language['code'] = ($this->version_oc != 2 ? $language['code'] : $language['directory']);
				if (is_file($dir_dump . $language['code'] . '/' . $path)) {
					$main = false;
					copy($dir_dump . $language['code'] . '/' . $path, $dir . $language['code'] . '/' . $path);
				}
			}

			if ($main) {
				$json['error'] = 'Няма чаго аднаўляць!';
			}

			if (!$json) {
				//copy($dir_dump . $path, $dir . $path);
				$json['success'] = $this->language->get('success_setting_save');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	private function loadLanguage($filename, $code = '', $dir = '') {
		$_ = array();

		if (!$code) {
			$code = $this->paths['language']['directory'];
		}

		if (!$dir) {
			$dir = DIR_LANGUAGE;
		}

		$file = $dir . $code . '/' . $filename;

		if (is_file($file)) {
			$data = file_get_contents($file);

			if (preg_match_all('/\$_\[(.[^\]]*?)](.[\s\=]*)(.*?);(?=\r\n|\n|\r|)/S', $data, $matches)) {
				if (isset($matches[1]) && isset($matches[3])) {
					foreach ($matches[1] as $key => $result) {
						$_[] = array(
							'name'  => $result,
							'value' => $matches[3][$key],
						);
					}
				}
			}
		}

		return $_;
	}

	public function index() {
		foreach ($this->load->language($this->paths['language']['bus_translation_editor']) as $key => $lang) {
			$data[$key] = $lang;
		}

		$data['heading_title'] = $this->language->get('heading_title');

		//$this->load->model('customer/customer_group');

		if ($this->version_oc != 2) {
			$this->load->model('localisation/language');
		}

		$this->load->model('setting/store');

		//$this->load->model('tool/image');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		//$this->document->addStyle('view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');
		//$this->document->addScript('view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');

		$this->update();

		//$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if ($this->version_oc == 2) {
			foreach ($data['languages'] as $key => $language) {
				$data['languages'][$key]['code'] = $language['directory'];
			}
		}

		$language_id = $this->config->get('config_language_id');

		$server = ($this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG);

		$data['stores'] = $this->model_setting_store->getStores();

		$data['token'] = $this->paths['token'];

		$data['module_path'] = $this->paths['controller']['bus_translation_editor'];

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (isset($this->request->post['apply']) && !empty($this->request->post['apply'])) {
				$apply = $this->request->post['apply'];
				unset($this->request->post['apply']);
			} else {
				$apply = false;
			}

			$this->request->post['version'] = $this->version;
			$this->request->post['time_save'] = time();

			$this->load->model('setting/setting');

			$this->model_setting_setting->editSetting('bus_translation_editor', array('bus_translation_editor' => $this->request->post));

			if ($apply) {
				$this->session->data['success'] = $this->modification('', true, 300);
				//$this->session->data['success'] = $this->language->get('success_setting_apply');

				$this->response->redirect($this->url->link($this->paths['controller']['bus_translation_editor'], $this->paths['token'], true));
			} else {
				$this->session->data['success'] = $this->language->get('success_setting_save');

				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'] . '&type=module', true));
			}
		}

		if (isset($this->session->data['warning'])) {
			$data['error'] = $this->session->data['warning'];
			unset($this->session->data['warning']);
		} elseif (isset($this->error['warning'])) {
			$data['error'] = $this->error['warning'];
		} else {
			$data['error'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
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
			'href' => $this->url->link($this->paths['controller']['bus_translation_editor'], $this->paths['token'], true)
		);

		$data['action'] = $this->url->link($this->paths['controller']['bus_translation_editor'], $this->paths['token'], true);
		$data['cancel'] = $this->url->link($this->paths['controller']['extension'], $this->paths['token'] . ($this->version_oc >= 2.2 ? '&type=module' : false), true);

		$module_info = $this->configGet();

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (isset($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = true;
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		if ($this->version_oc >= 3) {
			$template_engine = $this->registry->get('config')->get('template_engine');
			$this->registry->get('config')->set('template_engine', 'template');
		}

		$template = $this->load->view($this->paths['view']['bus_translation_editor'], $data);

		if ($this->version_oc >= 3) {
			$this->registry->get('config')->set('template_engine', $template_engine);
			$this->response->addHeader('Content-Type: text/html; charset=utf-8');
		}

		$this->response->setOutput($template);
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', $this->paths['controller']['bus_translation_editor'])) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	// установка
	public function install() {
		// посылыаем на йух
		$this->load->language($this->paths['language']['bus_translation_editor']);

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
			// бэкапим данные
			if ($this->version_oc != 2) {
				$this->load->model('localisation/language');
			}

			$lang_codes = array();

			$languages = $this->model_localisation_language->getLanguages();

			foreach ($languages as $language) {
				$language['code'] = ($this->version_oc != 2 ? $language['code'] : $language['directory']);
				$lang_codes[] = $language['code'];
				if (!is_dir(DIR_SYSTEM . 'library/bus_translation_editor/dump/admin/' . $language['code'] . '/')) {
					mkdir(DIR_SYSTEM . 'library/bus_translation_editor/dump/admin/' . $language['code'] . '/', 0755, true);
				}
				if (!is_dir(DIR_SYSTEM . 'library/bus_translation_editor/dump/catalog/' . $language['code'] . '/')) {
					mkdir(DIR_SYSTEM . 'library/bus_translation_editor/dump/catalog/' . $language['code'] . '/', 0755, true);
				}
			}

			function dump($path) {
				foreach (glob(rtrim($path, '/') . '/*', GLOB_NOSORT|GLOB_BRACE) as $file) {
					$file_dump = DIR_SYSTEM . 'library/bus_translation_editor/' . str_replace(array(DIR_APPLICATION . 'language/', DIR_CATALOG . 'language/'), array('dump/admin/', 'dump/catalog/'), $file);
					if (is_dir($file)) {
						if (!is_dir($file_dump)) {
							mkdir($file_dump, 0755);
						}
						dump($file);
					} elseif (is_file($file) && !is_file($file_dump)) {
						copy($file, $file_dump);
					}
				}
			}

			$files = dump(DIR_APPLICATION . 'language/' . '{' . implode(',', $lang_codes) . '}/');
			$files = dump(DIR_CATALOG . 'language/' . '{' . implode(',', $lang_codes) . '}/');

			// создаём таблицу модуля
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_translation_editor` (`module_id` int(11) NOT NULL AUTO_INCREMENT, `setting` text NOT NULL, PRIMARY KEY (`module_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_translation_editor_description` (`module_id` int(11) NOT NULL, `language_id` int(11) NOT NULL, `setting` text NOT NULL, PRIMARY KEY (`module_id`, `language_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_translation_editor_account` (`customer_id` int(11) NOT NULL, `setting` text NOT NULL, PRIMARY KEY (`customer_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");

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

			// создаём копию из резерва и переименовываем модификатор, если заливался в system
			$file = $this->getFile('library', 'xml_');

			$this->setFile(false, $file, 'xml');

			// создаём событие
			//$this->load->model($this->paths['model']['event']); 

			//if ($this->version_oc >= 3) {
				//$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_translation_editor'] . '/event');

				//if (!$code) {
					//$this->{$this->paths['model']['event_path']}->addEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_translation_editor'] . '/event', 1, 1001);
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
		$this->load->language($this->paths['language']['bus_translation_editor']);

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
			//$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code`='bus_translation_editor'");
			//$this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "bus_translation_editor`");
			//$this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "bus_translation_editor_description`");

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
				//$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_translation_editor'] . '/event');

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

			$url_uninstall_files = $this->url->link($this->paths['controller']['bus_translation_editor'] . '/uninstallFiles', $this->paths['token'], true);
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
		$this->load->language($this->paths['language']['bus_translation_editor']);

		// посылыаем на йух
		if ($this->version_oc >= 2.2) {
			if (!$this->user->hasPermission('modify', 'extension/extension/module') || !$this->user->hasPermission('modify', $this->paths['controller']['bus_translation_editor'])) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		} else {
			if (!$this->user->hasPermission('modify', 'extension/module') || !$this->user->hasPermission('modify', $this->paths['controller']['bus_translation_editor'])) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		}

		if (!$this->error) {
			// удаляем права администратора
			$this->load->model('user/user_group');

			foreach ($this->model_user_user_group->getUserGroups() as $result) {
				if ($this->version_oc >= 4) {
					$this->model_user_user_group->removePermission($result['user_group_id'], 'access', $this->paths['controller']['bus_translation_editor']);
					$this->model_user_user_group->removePermission($result['user_group_id'], 'modify', $this->paths['controller']['bus_translation_editor']);
				} else {
					$users = array();
					$users[0]['user_group_id'] = $result['user_group_id'];
					$users[0]['type'] = 'access';
					$users[0]['route'] = $this->paths['controller']['bus_translation_editor'];
					$users[1]['user_group_id'] = $result['user_group_id'];
					$users[1]['type'] = 'modify';
					$users[1]['route'] = $this->paths['controller']['bus_translation_editor'];

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
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_translation_editor`");
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_translation_editor_description`");
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_translation_editor_account`");

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
				//$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_translation_editor'] . '/event');

				//if ($code) {
					//$this->{$this->paths['model']['event_path']}->deleteEvent($this->name_arhive);
				//}
			//}

			// готовим данные для php
			$db_paths = array(
				//DB_PREFIX . 'bus_translation_editor_geo',
			);

			$module_paths = array(
				// 2.1 OpenCart
				DIR_APPLICATION . 'controller/module/bus_translation_editor.php',
				DIR_APPLICATION . 'model/module/bus_translation_editor.php',
				DIR_APPLICATION . 'view/template/module/bus_translation_editor',
				//DIR_CATALOG . 'controller/module/bus_translation_editor.php',
				//DIR_CATALOG . 'model/module/bus_translation_editor.php',
				// 2.3 и 3.0 OpenCart
				DIR_APPLICATION . 'controller/extension/module/bus_translation_editor.php',
				DIR_APPLICATION . 'model/extension/module/bus_translation_editor.php',
				DIR_APPLICATION . 'view/template/extension/module/bus_translation_editor',
				//DIR_CATALOG . 'controller/extension/module/bus_translation_editor.php',
				//DIR_CATALOG . 'model/extension/module/bus_translation_editor.php',
				str_replace('/catalog/..', '', DIR_CATALOG . '../bus_translation_editor_install.js'),
				DIR_IMAGE . 'catalog/bus_translation_editor[NAGIBATOR]',
				//DIR_LOGS . 'bus_translation_editor',
				DIR_SYSTEM . 'library/bus_translation_editor[NAGIBATOR]',
				DIR_SYSTEM . 'library/bus_translation_editor.ocmod.xml_',
				DIR_SYSTEM . 'bus_translation_editor.ocmod.xml',
			);

			// проверяем и удаляем со всех языковых файлов
			foreach (glob(DIR_APPLICATION . 'language/*') as $path) {
				$module_paths[] = $path . '/module/bus_translation_editor[NAGIBATOR]';
				$module_paths[] = $path . '/extension/module/bus_translation_editor[NAGIBATOR]';
			}

			/* foreach (glob(DIR_CATALOG . 'language/*') as $path) {
				$module_paths[] = $path . '/module/bus_translation_editor[NAGIBATOR]';
				$module_paths[] = $path . '/extension/module/bus_translation_editor[NAGIBATOR]';
			} */

			// проверяем и удаляем со всех тем
			/* foreach (glob(DIR_CATALOG . 'view/theme/*') as $path) {
				$module_paths[] = $path . '/stylesheet/bus_translation_editor[NAGIBATOR]';
				$module_paths[] = $path . '/javascript/bus_translation_editor[NAGIBATOR]';
				$module_paths[] = $path . '/javascript';
				$module_paths[] = $path . '/template/module/bus_translation_editor[NAGIBATOR]';
				$module_paths[] = $path . '/template/extension/module/bus_translation_editor[NAGIBATOR]';
			} */

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
		$this->load->language($this->paths['language']['bus_translation_editor']);

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

	private function update() {
		$version = $this->configGet('version');
		if ($this->validate() && ($this->request->server['REQUEST_METHOD'] != 'POST') && $version && version_compare($this->version, $version, '>')) {
			if (version_compare('1.1.1', $version, '>')) {

			}

			$this->session->data['success'] = $this->modification($this->language->get('heading_title') . $this->language->get('success_update'), true, 300);
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
			/* $this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->deleteModification($code['modification_id']);
			} */

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