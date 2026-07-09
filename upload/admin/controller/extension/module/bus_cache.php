<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2024; BuslikDrev - Усе правы захаваны.

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

//namespace Opencart\Admin\Controller\Extension\BusCache\Module;

// забараняем прамы доступ
if (!defined('VERSION')) {
	header('Refresh: 1; URL=/');
	exit('ЗАПРЫШЧАЮ!');
}

if (version_compare(VERSION, '4.0.0', '>=')) {
	class Controller extends \Opencart\System\Engine\Controller {}
}

if (version_compare(VERSION, '2.3.0', '<')) {
	class ControllerModuleBusCache extends BusCache {}
} elseif (version_compare(VERSION, '4.0.0', '<')) {
	class ControllerExtensionModuleBusCache extends BusCache {}
}

class BusCache extends Controller {
	private $error = array();
	private $name_arhive = 'Buslik Cache';
	private $code_event = 'bus_cache';
	private $code = '01000024';
	private $mame = 'Буслік Кэш - "Buslik Cache"';
	public $version = '1.0.15.20';
	private $author = 'BuslikDrev.by';
	private $link = 'https://liveopencart.ru/buslikdrev';
	private $version_oc = 2.3;
	private $paths = array();

	public function __construct($foo) {
		parent::__construct($foo);
		if (!is_null($this->language) && method_exists($this->language, 'set')) {
			$this->language->set('bus_cache_version', $this->version);
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
				'token' => 'user_token=' . (isset($this->session->data['user_token']) ? $this->session->data['user_token'] : ''),
				'slash' => '|'
			);
		} elseif (version_compare(VERSION, '3.0.0', '>=')) {
			$this->version_oc = 3;
			$this->paths = array(
				'controller' => array(
					'bus_cache' => 'extension/module/bus_cache',
					'bus_cache_event' => 'extension/bus_cache/event/bus_cache',
					'module' => 'extension/extension/module',
					'extension' => 'marketplace/extension',
					'modification' => 'marketplace/modification',
				),
				'language' => array(
					'bus_cache' => 'extension/module/bus_cache',
				),
				'model' => array(
					'bus_cache' => 'extension/module/bus_cache',
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
					'bus_cache' => 'extension/module/bus_cache',
				),
				'token' => 'user_token=' . (isset($this->session->data['user_token']) ? $this->session->data['user_token'] : ''),
				'slash' => '/'
			);
		} elseif (version_compare(VERSION, '2.3.0', '>=')) {
			$this->version_oc = 2.3;
			$this->paths = array(
				'controller' => array(
					'bus_cache' => 'extension/module/bus_cache',
					'bus_cache_event' => 'extension/bus_cache/event/bus_cache',
					'module' => 'extension/extension/module',
					'extension' => 'extension/extension',
					'modification' => 'extension/modification',
				),
				'language' => array(
					'bus_cache' => 'extension/module/bus_cache',
				),
				'model' => array(
					'bus_cache' => 'extension/module/bus_cache',
					'bus_cache_path' => 'model_extension_module_bus_cache',
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
					'bus_cache' => 'extension/module/bus_cache',
				),
				'token' => 'token=' . (isset($this->session->data['token']) ? $this->session->data['token'] : ''),
				'slash' => '/'
			);
		} else {
			$this->version_oc = 2;
			$this->paths = array(
				'controller' => array(
					'bus_cache' => 'module/bus_cache',
					'bus_cache_event' => 'extension/bus_cache/event/bus_cache',
					'module' => 'extension/module',
					'extension' => 'extension/module',
					'modification' => 'extension/modification',
				),
				'language' => array(
					'bus_cache' => 'module/bus_cache',
				),
				'model' => array(
					'bus_cache' => 'module/bus_cache',
					'bus_cache_path' => 'model_module_bus_cache',
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
					'bus_cache' => 'module/bus_cache.tpl',
				),
				'token' => 'token=' . (isset($this->session->data['token']) ? $this->session->data['token'] : ''),
				'slash' => '/'
			);
		}

		if (version_compare(VERSION, '4.0.2', '>=')) {
			$this->paths['slash'] = '.';
		}
	}

	// подмена $this->config->get()
	private function configGet($name = '') {
		$data = $this->config->get('bus_cache');

		if (!$data) {
			$data = array();
		}

		if (isset($this->session->data['import']) && !$name && is_array($this->session->data['import'])) {
			$data = array_merge($data, $this->session->data['import']);
			unset($this->session->data['import']);
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

	private function setFile($name = false, $value = false, $format = 'xml') {
		$this->deleteFile($name, $format);

		if ($value) {
			if ($this->version_oc >= 4) {
				$theme = DIR_EXTENSION . 'bus_cache/catalog/view/theme/' . $this->config->get('config_theme');
			} else {
				$theme = DIR_CATALOG . 'view/theme/' . ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));
			}

			if ($format == 'css') {
				$path = $theme . '/stylesheet/bus_cache/bus_cache_';
				if (!is_dir(str_replace('/bus_cache_', '', $path))) {
					mkdir(str_replace('/bus_cache_', '', $path), 0755, true);
				}
			} elseif ($format == 'js') {
				$path = $theme . '/javascript/bus_cache/bus_cache_';
				if (!is_dir(str_replace('/bus_cache_', '', $path))) {
					mkdir(str_replace('/bus_cache_', '', $path), 0755, true);
				}
			} elseif ($format == 'tpl') {
				$path = $theme . '/template/' . $this->paths['controller']['bus_cache'] . '/bus_cache_';
			} elseif ($format == 'twig') {
				$path = $theme . '/template/' . $this->paths['controller']['bus_cache'] . '/bus_cache_';
			} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
				$path = DIR_IMAGE . 'catalog/bus_cache/';
			} elseif ($format == 'xml_') {
				$path = DIR_SYSTEM . 'library/bus_cache';
				$format = 'ocmod.' . $format;
			} else {
				$path = DIR_SYSTEM . 'bus_cache';
				$format = 'ocmod.' . preg_replace('/[^A-Z_]/i', '', $format);
			}

			$file = $path . preg_replace('/[^\/A-Z0-9_-]/i', '', $name) . '.' . $format;

			$handle = fopen($file, 'w');

			flock($handle, LOCK_EX);

			fwrite($handle, $value);

			fflush($handle);

			flock($handle, LOCK_UN);

			fclose($handle);
		}
	}

	private function deleteFile($name = false, $format = 'xml') {
		if ($this->version_oc >= 4) {
			$theme = DIR_EXTENSION . 'bus_cache/catalog/view/theme/' . $this->config->get('config_theme');
		} else {
			$theme = DIR_CATALOG . 'view/theme/' . ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));
		}

		if ($format == 'css') {
			$path = $theme . '/stylesheet/bus_cache/bus_cache_';
		} elseif ($format == 'js') {
			$path = $theme . '/javascript/bus_cache/bus_cache_';
		} elseif ($format == 'tpl') {
			$path = $theme . '/template/' . $this->paths['controller']['bus_cache'] . '/bus_cache_';
		} elseif ($format == 'twig') {
			$path = $theme . '/template/' . $this->paths['controller']['bus_cache'] . '/bus_cache_';
		} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
			$path = DIR_IMAGE . 'catalog/bus_cache/';
		} elseif ($format == 'xml_') {
			$path = DIR_SYSTEM . 'library/bus_cache';
			$format = 'ocmod.' . $format;
		} else {
			$path = DIR_SYSTEM . 'bus_cache';
			$format = 'ocmod.' . preg_replace('/[^A-Z_]/i', '', $format);
		}

		$file = $path . preg_replace('/[^\/A-Z0-9_-]/i', '', $name) . '.' . $format;

		if (file_exists($file)) {
			unlink($file);
		}
	}

	private function copyFile($name = false, $newname = false, $format = 'xml_', $newformat = 'xml') {
		$this->setFile($newname, $this->getFile($name, $format), $newformat);
	}

	private function getFile($name = false, $format = 'xml_') {
		if ($this->version_oc >= 4) {
			$theme = DIR_EXTENSION . 'bus_cache/catalog/view/theme/' . $this->config->get('config_theme');
		} else {
			$theme = DIR_CATALOG . 'view/theme/' . ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));
		}

		if ($format == 'css') {
			$path = $theme . '/stylesheet/bus_cache/bus_cache_';
		} elseif ($format == 'js') {
			$path = $theme . '/javascript/bus_cache/bus_cache_';
		} elseif ($format == 'tpl') {
			$path = $theme . '/template/' . $this->paths['controller']['bus_cache'] . '/bus_cache_';
		} elseif ($format == 'twig') {
			$path = $theme . '/template/' . $this->paths['controller']['bus_cache'] . '/bus_cache_';
		} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json', 'webmanifest', 'webapp', 'appcache'))) {
			$path = DIR_IMAGE . 'catalog/bus_cache/';
		} elseif ($format == 'xml_') {
			$path = DIR_SYSTEM . 'library/bus_cache';
			$format = 'ocmod.' . $format;
		} else {
			$path = DIR_SYSTEM . 'bus_cache';
			$format = 'ocmod.' . preg_replace('/[^A-Z_]/i', '', $format);
		}

		$file = $path . preg_replace('/[^\/A-Z0-9_-]/i', '', $name) . '.' . $format;

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

	public function clearEvent(&$route, &$args, &$output) {
		if ($route == 'blog/category/editCategory' || $route == 'blog/category/addCategory') {
			if ($this->config->get('bus_cache_clear_blog_category')) {
				$this->clear(array('tables' => array('blog_category')));
			}
		} elseif ($route == 'blog/article/editArticle' || $route == 'blog/article/addArticle') {
			if ($this->config->get('bus_cache_clear_blog_article')) {
				$this->clear(array('tables' => array('blog_article')));
			}
		} elseif ($route == 'catalog/category/editCategory' || $route == 'catalog/category/addCategory') {
			if ($this->config->get('bus_cache_clear_category')) {
				$this->clear(array('tables' => array('category')));
			}
		} elseif ($route == 'catalog/information/editInformation' || $route == 'catalog/information/addInformation') {
			if ($this->config->get('bus_cache_clear_information')) {
				$this->clear(array('tables' => array('information')));
			}
		} elseif ($route == 'catalog/manufacturer/editManufacturer' || $route == 'catalog/manufacturer/addManufacturer') {
			if ($this->config->get('bus_cache_clear_manufacturer')) {
				$this->clear(array('tables' => array('manufacturer')));
			}
		} elseif ($route == 'catalog/product/editProduct' || $route == 'catalog/product/addProduct') {
			if ($this->config->get('bus_cache_clear_product')) {
				$this->clear(array('tables' => array('product')));
			}
		}
	}

	public function download() {
		$this->load->language($this->paths['language']['bus_cache']);

		$status = true;

		if ($status && !$this->validate()) {
			$this->session->data['warning'] = $this->language->get('error_permission');
			$status = false;
		}

		if ($status && !in_array('curl', get_loaded_extensions())) {
			$this->session->data['warning'] = $this->language->get('error_curl');
			$status = false;
		}

		if ($status) {
			$post = array();
			$post['version'] = $this->version;
			if (!empty($this->request->post['order_id'])) {
				$post['order_id'] = $this->request->post['order_id'];
			}
			if (!empty($this->request->post['key'])) {
				$post['key'] = $this->request->post['key'];
			}

			if (!empty($this->session->data['bus_cache_update_download']) && !empty($this->session->data['bus_cache_update_sha1'])) {
				$post['download'] = $this->session->data['bus_cache_update_download'];
			} else {
				$post['download'] = false;
			}

			if (!empty($this->request->server['HTTP_HOST'])) {
				$domain = (!empty($this->request->server['HTTPS']) ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . '/';
			} elseif (!empty($this->request->server['SERVER_NAME'])) {
				$domain = (!empty($this->request->server['HTTPS']) ? 'https://' : 'http://') . $this->request->server['SERVER_NAME'] . '/';
			} else {
				$domain = '';
			}

			$ch = curl_init('https://update.buslikdrev.by/bus_cache.php');
			if (!empty($post)) {
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			}
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_TIMEOUT, 2);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, 2000);
			//curl_setopt($ch, CURLOPT_COOKIESESSION, false);
			//curl_setopt($ch, CURLOPT_COOKIEJAR, __dir__ . '/cookie.txt');
			//curl_setopt($ch, CURLOPT_COOKIEFILE, __dir__ . '/cookie.txt');
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
			curl_setopt($ch, CURLOPT_REFERER, $domain);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_PORT, 443);
			if ($this->version_oc >= 4) {
				curl_setopt($ch, CURLOPT_CAINFO, DIR_EXTENSION . 'bus_cache/system/library/bus_cache/cacert.pem'); // https://curl.se/docs/caextract.html
			} else {
				curl_setopt($ch, CURLOPT_CAINFO, DIR_SYSTEM . 'library/bus_cache/cacert.pem'); // https://curl.se/docs/caextract.html
			}
			if (version_compare(curl_version()['version'], '7.54.0', '>=')) {
				if (defined('CURL_SSLVERSION_MAX_TLSv1_3')) {
					$sslversion = CURL_SSLVERSION_MAX_TLSv1_3;
				} elseif (defined('CURL_SSLVERSION_MAX_TLSv1_2')) {
					$sslversion = CURL_SSLVERSION_MAX_TLSv1_2;
				} elseif (defined('CURL_SSLVERSION_MAX_TLSv1_1')) {
					$sslversion = CURL_SSLVERSION_MAX_TLSv1_1;
				} elseif (defined('CURL_SSLVERSION_MAX_TLSv1_0')) {
					$sslversion = CURL_SSLVERSION_MAX_TLSv1_0;
				} elseif (defined('CURL_SSLVERSION_MAX_DEFAULT')) {
					$sslversion = CURL_SSLVERSION_MAX_DEFAULT;
				} else {
					$sslversion = false;
				}

				if ($sslversion) {
					curl_setopt($ch, CURLOPT_SSLVERSION, $sslversion);
				}
			}
			if (version_compare(phpversion(), '7.0.7', '>=') && version_compare(curl_version()['version'], '7.25.0', '>=')) {
				curl_setopt($ch, CURLOPT_TCP_KEEPALIVE, true);
			}
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

			$result = curl_exec($ch);

			$error = curl_error($ch);

			curl_close($ch);

			$js = json_decode($result, true);
			if (json_last_error() === 0) {
				$result = $js;
			}

			if (is_array($result) && (!empty($result['version']) && is_string($result['version']) && version_compare($result['version'], $this->version, '>') || !empty($result['error']))) {
				$ajax = array();
				if (!empty($result['version'])) {
					$ajax['version'] = strip_tags(html_entity_decode($result['version']));
					$ajax['message'] = $this->language->get('text_version') . ': ' . $ajax['version'] . PHP_EOL;
				}

				if (!empty($result['error']) && $result['error']) {
					$ajax['error'] = true;
					$ajax['message'] = $this->language->get('error_update_' . (int)$result['error']);
				}

				if (!empty($result['message']) && is_string($result['message'])) {
					$ajax['message'] .= strip_tags(html_entity_decode($result['message']));

					if (!empty($result['download']) && is_string($result['download']) && !empty($result['sha1']) && is_string($result['sha1'])) {
						$this->session->data['bus_cache_update_download'] = $result['download'];
						$this->session->data['bus_cache_update_sha1'] = strip_tags(html_entity_decode($result['sha1']));
						$this->session->data['bus_cache_update_message'] = $ajax['message'];
						$ajax['download'] = $result['download'];
						$ajax['success'] = true;
					}
				}

				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($ajax, JSON_HEX_AMP));
			} elseif (is_string($result) && !empty($this->session->data['bus_cache_update_sha1'])) {
				if (!is_dir(DIR_IMAGE . 'bus_cache/download/')) {
					mkdir(DIR_IMAGE . 'bus_cache/download/', 0755, true);
				}
				$file = DIR_IMAGE . 'bus_cache/download/' . md5(rand(0, 1000));
				file_put_contents($file . '.data', $result);

				if (sha1_file($file . '.data') == $this->session->data['bus_cache_update_sha1']) {
					$zip = new \ZipArchive();
					if (defined('ZipArchive::RDONLY')) {
						$flag = \ZipArchive::RDONLY;
					} else {
						$flag = 16;
					}
					if ($zip->open($file . '.data', $flag)) {
						if ($this->version_oc >= 4) {
							$zip->extractTo(DIR_EXTENSION . 'bus_cache/');
						} else {
							if (!is_dir($file . '/')) {
								mkdir($file . '/', 0755);
							}
							$zip->extractTo($file . '/');
						}
						$zip->close();

						if (is_file($file . '.data')) {
							unlink($file . '.data');
						}
						if (is_file($file . '/install.json')) {
							unlink($file . '/install.json');
						}

						if ($this->version_oc < 4) {
							$dir = substr(DIR_APPLICATION, 0, -iconv_strlen(basename(DIR_APPLICATION) . '/'));
							$path = array($file . '/');
							$files = array();

							function str_replace_once($search, $replace, $text) {
								$pos = strpos($text, $search);
								return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
							}

							while (count($path) != 0) {
								$next = array_shift($path);

								foreach ((array)glob($next) as $f) {
									$f = str_replace('//', '/', $f);
									if (is_dir($f)) {
										$path[] = $f . '/*';
									} elseif (is_file($f)) {
										if ($f == $file . '/admin/controller/module/bus_cache.php') {
											$content = file_get_contents($f);
											if (strpos($content, '//namespace Opencart\Admin') > 11800) {
												$content = str_replace_once('namespace Opencart\Admin', '//namespace Opencart\Admin', $content);
											}
											file_put_contents($f, $content);
										} else {
											$content = file_get_contents($f);
											if (strpos($content, '//namespace Bus_Cache') !== false) {
												$content = str_replace(array('//namespace Bus_Cache', 'namespace Opencart'), array('namespace Bus_Cache', '//namespace Opencart'), $content);
											}
											file_put_contents($f, $content);
										}
									}

									$files[] = $f;
								}
							}

							if ($this->version_oc >= 2.3) {
								foreach ($files as $f) {
									if (is_dir($f)) {
										$f = str_replace(array($file . '/', $dir . 'admin/', $dir . 'catalog/', 'module/'), array($dir, DIR_APPLICATION, DIR_CATALOG, 'extension/module/'), $f);
										if (!is_dir($f)) {
											mkdir($f . '/', 0755, true);
										}
									}
								}

								rsort($files);

								foreach ($files as $f) {
									if (is_file($f)) {
										copy($f, str_replace(array($file . '/', $dir . 'admin/', $dir . 'catalog/', 'module/'), array($dir, DIR_APPLICATION, DIR_CATALOG, 'extension/module/'), $f));
										unlink($f);
									} elseif (is_dir($f)) {
										if (is_file(rtrim($f) . '/.htaccess')) {
											unlink(rtrim($f) . '/.htaccess');
										}
										rmdir($f);
									}
								}
							} else {
								foreach ($files as $f) {
									if (is_dir($f)) {
										$f = str_replace(array($file . '/', $dir . 'admin/', $dir . 'catalog/', '/be-by', '/en-gb', '/lt-lt', '/lv-lv', '/pl-pl', '/ru-ru', '/uk-ua'), array($dir, DIR_APPLICATION, DIR_CATALOG, '/belarusian', '/english', '/lithuanian', '/latvian', '/polish', '/russian', '/ukrainian'), $f);
										if (!is_dir($f)) {
											mkdir($f . '/', 0755, true);
										}
									}
								}

								rsort($files);

								foreach ($files as $f) {
									if (is_file($f)) {
										copy($f, str_replace(array($file . '/', $dir . 'admin/', $dir . 'catalog/', '/be-by', '/en-gb', '/lt-lt', '/lv-lv', '/pl-pl', '/ru-ru', '/uk-ua'), array($dir, DIR_APPLICATION, DIR_CATALOG, '/belarusian', '/english', '/lithuanian', '/latvian', '/polish', '/russian', '/ukrainian'), $f));
										unlink($f);
									} elseif (is_dir($f)) {
										if (is_file(rtrim($f) . '/.htaccess')) {
											unlink(rtrim($f) . '/.htaccess');
										}
										rmdir($f);
									}
								}
							}
						}

						$this->session->data['success'] = $this->modification($this->language->get('heading_title') . $this->language->get('success_update'), true, 1);
					} else {
						$this->session->data['warning'] = 'Zip архив не удалось распаковать!';
					}
				} else {
					unlink($file . '.data');

					$this->session->data['warning'] = $this->language->get('error_update_clone');
				}

				unset($this->session->data['bus_cache_update_download'], $this->session->data['bus_cache_update_sha1'], $this->session->data['bus_cache_update_message']);

				$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
			} else {
				if ($result === false) {
					$this->session->data['warning'] = sprintf($this->language->get('error_update'), ' Curl:' . $error);
				} else {
					$this->session->data['warning'] = sprintf($this->language->get('error_update'), '');
				}

				$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
			}
		} else {
			$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
		}
	}

	public function notification($status = false) {
		$message = '';

		if ($this->validate() && $status) {
			foreach ($this->load->language($this->paths['language']['bus_cache']) as $key => $lang) {
				$data[$key] = $lang;
			}

			$data['cache_size_limit'] = ($this->configGet('cache_size_limit') * 1024 * 1024);
			$data['support_disc_size_limit'] = ($this->configGet('support_disc_size_limit') * 1024 * 1024);

			if ($data['support_disc_size_limit'] <= 0) {
				$data['support_disc_size_limit'] = disk_free_space('.');
			}

			if ($data['cache_size_limit'] && $this->config->get('bus_cache_size_limit') > $data['cache_size_limit'] && $this->config->get('bus_cache_size_limit') < $data['support_disc_size_limit']) {
				$message = $data['error_cache_size_limit'];
			} elseif ($this->config->get('bus_cache_size_limit') > $data['support_disc_size_limit']) {
				$message = $data['error_support_disc_size_limit'];
			}

			if ($message && $this->version_oc >= 4 && $this->db->query("SELECT TABLE_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('notification') . "'")->num_rows) {
				if (!$this->db->query("SELECT notification_id FROM `" . DB_PREFIX . "notification` WHERE `title` = '" . $this->db->escape($this->mame) . "' AND `date_added` > (NOW() - INTERVAL 30 MINUTE)")->num_rows) {
					$message = '<a href="' . $this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true) . '" target="_blank">' . $this->mame . '</a>: ' . $message;
					$this->db->query("INSERT INTO `" . DB_PREFIX . "notification` SET `title` = '" . $this->db->escape($this->mame) . "', `text` = '" . $this->db->escape($message) . "', `status` = '0', `date_added` = NOW()");
				}
			}
		}

		return $message;
	}

	public function database() {
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			foreach ($this->load->language($this->paths['language']['bus_cache']) as $key => $lang) {
				$data[$key] = $lang;
			}

			if (isset($this->request->post['database_index_type'])) {
				$data['database_index_type'] = $this->request->post['database_index_type'];
			} elseif (isset($module_info['database_index_type'])) {
				$data['database_index_type'] = $module_info['database_index_type'];
			} else {
				$data['database_index_type'] = false;
			}

			if (isset($this->request->post['database_index'])) {
				$data['database_index'] = $this->request->post['database_index'];
			} elseif (isset($module_info['database_index'])) {
				$data['database_index'] = $module_info['database_index'];
			} else {
				$data['database_index'] = false;
			}

			$data['database_indexs'] = array();

			foreach ($this->db->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '" . DB_DATABASE . "'")->rows as $result) {
				$data['database_indexs'][] = array(
					'tabl'    => $result['TABLE_NAME'],
					'columns' => $this->db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE `table_schema` = '" . DB_DATABASE . "' AND TABLE_NAME = '" . $result['TABLE_NAME'] . "'")->rows,
					'indexs'  => $this->db->query("SHOW INDEXES FROM " . $result['TABLE_NAME'])->rows
				);
			}

			if ($this->version_oc >= 4) {
				extract($data);

				ob_start();

				require(DIR_OPENCART . $this->paths['view']['bus_cache'] . '.tpl');

				$template = ob_get_clean();
			} else {
				if ($this->version_oc >= 3) {
					$template_engine = $this->registry->get('config')->get('template_engine');
					$this->registry->get('config')->set('template_engine', 'template');
				}

				$template = $this->load->view($this->paths['view']['bus_cache'], $data);
				
				if ($this->version_oc >= 3) {
					$this->registry->get('config')->set('template_engine', $template_engine);
					$this->response->addHeader('Content-Type: text/html; charset=utf-8');
				}
			}

			$this->response->setOutput($template);
		}
	}

	public function export() {
		$this->load->language($this->paths['language']['bus_cache']);

		if ($this->validate()) {
			//$allowed = array('sql', 'json', 'csv', 'xls', 'xlsx', 'xml', 'yml');
			$allowed = array('json');

			if (isset($this->request->post['format']) && in_array($this->request->post['format'], $allowed)) {
				$format = $this->request->post['format'];
			} else {
				$format = 'json';
			}

			$file_name = 'bus_cache_v' . $this->version . '_' . date('Y-m-d_H-i-s', time()) . '.' . $format;
			$module_info = $this->configGet();

			$this->response->addheader('Pragma: public');
			$this->response->addheader('Expires: 0');
			$this->response->addheader('Content-Description: File Transfer');
			$this->response->addheader('Content-Type: application/octet-stream');
			$this->response->addheader('Content-Disposition: attachment; filename="' . $file_name  . '"');
			$this->response->addheader('Content-Transfer-Encoding: binary');

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('bus_cache' => $module_info, 'version' => $this->version), JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));
		} else {
			$this->session->data['warning'] = $this->language->get('error_permission');

			$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
		}
	}

	public function import() {
		$this->load->language($this->paths['language']['bus_cache']);

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (is_uploaded_file($this->request->files['import']['tmp_name'])) {
				$import = json_decode(file_get_contents($this->request->files['import']['tmp_name']), true);

				if (isset($import['bus_cache'])) {
					/* if (isset($import['version'])) {
						if ($import['version'] == '1.0') {
							$import['bus_cache']['status'] = 0;
						}
					} */

					$this->session->data['import'] = $import['bus_cache'];
					$this->session->data['success'] = sprintf($this->language->get('success_setting_import'), $this->language->get('heading_title'));
				} else {
					$this->session->data['warning'] = $this->language->get('error_setting_import');
				}
			} else {
				$this->session->data['warning'] = $this->language->get('error_setting_import');
			}
		} else {
			$this->session->data['warning'] = $this->language->get('error_permission');

			$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
		}
	}

	public function copy() {
		$this->load->language($this->paths['language']['bus_cache']);

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!empty($this->request->post['copy'])) {
				$import = array();
				$name_module = '';

				if ($this->request->post['copy'] == 1 && $this->config->get('asc_jetcache_settings')) {
					$name_module = 'Жыд Кэш v23+';
					$data = $this->config->get('asc_jetcache_settings');
					if (isset($data['jetcache_widget_status'])) {
						$import['status'] = $data['jetcache_widget_status'];
					}

					if (isset($data['pages_status'])) {
						$import['cache_status'] = $data['pages_status'];
					}
					if (isset($data['ex_session_black']) && is_array($data['ex_session_black'])) {
						$import['cache_ses'] = str_replace('#', ';', $data['ex_session_black']);
					}
					if (isset($data['ex_cookie_black']) && is_array($data['ex_cookie_black'])) {
						$import['cache_cok'] = str_replace('#', ';', $data['ex_cookie_black']);
					}
					if (isset($data['ex_route']) && is_array($data['ex_route'])) {
						$import['cache_rot'] = array();

						foreach ($data['ex_route'] as $key => $result) {
							$import['cache_rot'][] = (!empty($result['status']) ? '' : ';') . str_replace(array('/%', '%/'), '', $result['route']);
						}

						$import['cache_rot'] = implode("\r\n", $import['cache_rot']);
					}
					if (isset($data['ex_uri']) && is_array($data['ex_uri'])) {
						$import['cache_rot'] = (!empty($import['cache_rot']) ? $import['cache_rot'] . "\r\n" : false) . str_replace('#', ';', $data['ex_uri']);
					}
					if (isset($data['add_cont']) && is_array($data['add_cont'])) {
						$import['cache_controller'] = array();

						foreach ($data['add_cont'] as $key => $result) {
							if (isset($data['cont_status']) && !$data['cont_status']) {
								$result['status'] = false;
							}
							$import['cache_controller'][$key] = (!empty($result['status']) ? '' : ';') . $result['cont'];
						}

						$import['cache_controller'] = implode("\r\n", $import['cache_controller']);
					}
					if (isset($data['cont_ajax_routes']) && is_array($data['cont_ajax_routes'])) {
						$import['cache_controller_ajax'] = array();

						foreach ($data['cont_ajax_routes'] as $key => $result) {
							if (isset($data['cont_ajax_status']) && !$data['cont_ajax_status']) {
								$result['status'] = false;
							}
							$import['cache_controller_ajax'][$key] = (!empty($result['status']) ? '' : ';') . $result['route'];
						}

						$import['cache_controller_ajax'] = implode("\r\n", $import['cache_controller']);
					}
					if (isset($data['model']) && is_array($data['model'])) {
						$import['cache_model'] = array();

						foreach ($data['model'] as $key => $result) {
							if (isset($data['jetcache_model_status']) && !$data['jetcache_model_status']) {
								$result['status'] = false;
							}
							$import['cache_model'][$key] = (!empty($result['status']) ? '' : ';') . str_replace('model/', '',  utf8_strtolower(implode('/', preg_split('/(?=[A-Z])/', $result['model'], -1, PREG_SPLIT_NO_EMPTY)))) . '/' . $result['method'];
						}

						if (isset($data['query_model']) && is_array($data['query_model'])) {
							foreach ($data['query_model'] as $key => $result) {
								if (isset($data['jetcache_query_status']) && !$data['jetcache_query_status']) {
									$result['status'] = false;
								}
								$import['cache_model'][$key] = (!empty($result['status']) ? '' : ';') . str_replace('model/', '',  utf8_strtolower(implode('/', preg_split('/(?=[A-Z])/', $result['model'], -1, PREG_SPLIT_NO_EMPTY)))) . '/' . $result['method'];
							}
						}

						$import['cache_model'] = implode("\r\n", $import['cache_model']);
					}

					if (isset($data['images_x'])) {
						$import['pagespeed_image_w_h'] = !empty($data['images_x']);
					}
					if (isset($data['image_webp_status'])) {
						$import['pagespeed_image_webp_status'] = !empty($data['image_webp_status']);
						$import['pagespeed_image_webp_convert'] = 1;
					}
					$import['pagespeed_image_lazy_load'] = 0;

					if (isset($data['replacers']) && is_array($data['replacers'])) {
						$import['pagespeed_html_replace_before'] = array();

						foreach ($data['replacers'] as $key => $result) {
							if (isset($data['replacers_status']) && !$data['replacers_status']) {
								$result['status'] = false;
							}
							$import['pagespeed_html_replace_before'][$key] = (!empty($result['status']) ? '#|' : ';#|') . $result['in'] . '|' . str_replace(array("\r", "\n"), array('[\r]', '[\n]'), $result['out']);
						}

						$import['pagespeed_html_replace_before'] = implode("\r\n", $import['pagespeed_html_replace_before']);
					}
					if (!empty($data['minify_html_status'])) {
						$import['pagespeed_html_min'] = array(2,3,4);
					} else {
						$import['pagespeed_html_min'] = array();
					}

					if (!empty($data['minify_css_status'])) {
						$import['pagespeed_css_min'] = array(1,2,3,4);
					} else {
						$import['pagespeed_css_min'] = array();
					}
					if (isset($data['minify_css_ex_combine'])) {
						$import['pagespeed_css_min_exception'] = str_replace('#', ';', $data['minify_css_ex_combine']);
					}
					if (empty($data['minify_css_inline_footer']) && empty($data['minify_css_combine_inline'])) {
						$import['pagespeed_css_inline_transfer'] = 0;
					} elseif (!empty($data['minify_css_inline_footer']) && empty($data['minify_css_combine_inline'])) {
						$import['pagespeed_css_inline_transfer'] = 2;
					} elseif (empty($data['minify_css_inline_footer']) && !empty($data['minify_css_combine_inline'])) {
						$import['pagespeed_css_inline_transfer'] = 3;
					} elseif (!empty($data['minify_css_inline_footer']) && !empty($data['minify_css_combine_inline'])) {
						$import['pagespeed_css_inline_transfer'] = 4;
					}
					if (!empty($data['minify_css_ex_inline_footer'])) {
						$import['pagespeed_css_inline_exception'] = str_replace('#', ';', $data['minify_css_ex_inline_footer']);
					}

					if (!empty($data['minify_js_status'])) {
						$import['pagespeed_js_min'] = array(1);
					} else {
						$import['pagespeed_js_min'] = array();
					}
					if (isset($data['minify_js_ex_compress'])) {
						$import['pagespeed_js_min_exception'] = str_replace('#', ';', $data['minify_js_ex_compress']);
					}
					if (isset($data['minify_js_preload'])) {
						$import['pagespeed_js_inline_event'] = array();

						foreach (explode("\r\n", $data['minify_js_preload']) as $result) {
							if ($result[0] == '#') {
								$import['pagespeed_js_inline_event'][] = ';' . '#|' . str_replace('#', '', $result);
							} else {
								$import['pagespeed_js_inline_event'][] = '#|' . $result;
							}
						}

						$import['pagespeed_js_inline_event'] = implode("\r\n", $import['pagespeed_js_inline_event']);
					}
					if (empty($data['minify_js_inline_footer']) && empty($data['minify_js_combine_inline'])) {
						$import['pagespeed_js_inline_transfer'] = 0;
					} elseif (!empty($data['minify_js_inline_footer']) && empty($data['minify_js_combine_inline'])) {
						$import['pagespeed_js_inline_transfer'] = 2;
					} elseif (empty($data['minify_js_inline_footer']) && !empty($data['minify_js_combine_inline'])) {
						$import['pagespeed_js_inline_transfer'] = 3;
					} elseif (!empty($data['minify_js_inline_footer']) && !empty($data['minify_js_combine_inline'])) {
						$import['pagespeed_js_inline_transfer'] = 4;
					}
					if (!empty($data['minify_js_ex_inline_footer'])) {
						$import['pagespeed_js_inline_exception'] = str_replace('#', ';', $data['minify_js_ex_inline_footer']);
					}
					if (!empty($data['minify_js_ex_combine_inline'])) {
						$import['pagespeed_js_inline_exception'] = "\r\n" . str_replace('#', ';', $data['minify_js_ex_combine_inline']);
					}

					if (isset($data['jetcache_info_status'])) {
						$import['support_debug'] = $data['jetcache_info_status'];
					}
				}

				if ($import) {
					$this->session->data['import'] = $import;
					$this->session->data['success'] = sprintf($this->language->get('success_setting_import'), $name_module);
				} else {
					$this->session->data['warning'] = $this->language->get('error_setting_import');
				}
			} else {
				$this->session->data['warning'] = $this->language->get('error_setting_import');
			}
		} else {
			$this->session->data['warning'] = $this->language->get('error_permission');

			$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
		}
	}

	public function clear($setting = array()) {
		$this->load->language($this->paths['language']['bus_cache']);

		if (isset($this->request->post['route'])) {
			$this->request->get['route'] = $this->request->post['route'];
		}

		if (!empty($this->request->post['caches'])) {
			$this->request->get['caches'] = 1;
		} elseif (!empty($setting['caches'])) {
			$this->request->get['caches'] = 1;
		}
		if (!empty($this->request->post['twig'])) {
			$this->request->get['twig'] = 1;
			$setting['twig'] = 1;
		} elseif (!empty($setting['twig'])) {
			$this->request->get['twig'] = 1;
		}
		if (!empty($this->request->post['minify'])) {
			$this->request->get['minify'] = 1;
		} elseif (!empty($setting['minify'])) {
			$this->request->get['minify'] = 1;
		}
		if (!empty($this->request->post['images'])) {
			$this->request->get['images'] = 1;
		} elseif (!empty($setting['images'])) {
			$this->request->get['images'] = 1;
		}
		if (!empty($this->request->post['logs'])) {
			$this->request->get['logs'] = 1;
		} elseif (!empty($setting['logs'])) {
			$this->request->get['logs'] = 1;
		}
		if (!empty($this->request->post['modifications'])) {
			$this->request->get['modifications'] = 1;
		} elseif (!empty($setting['modifications'])) {
			$this->request->get['modifications'] = 1;
		}
		if (!empty($this->request->post['view_products'])) {
			$this->request->get['view_products'] = 1;
		} elseif (!empty($setting['view_products'])) {
			$this->request->get['view_products'] = 1;
		}
		if (!empty($this->request->post['customer_search'])) {
			$this->request->get['customer_search'] = 1;
		} elseif (!empty($setting['customer_search'])) {
			$this->request->get['customer_search'] = 1;
		}
		if (!empty($this->request->post['customer_blog_search'])) {
			$this->request->get['customer_blog_search'] = 1;
		} elseif (!empty($setting['customer_blog_search'])) {
			$this->request->get['customer_blog_search'] = 1;
		}
		if (!empty($this->request->post['customer_activity'])) {
			$this->request->get['customer_activity'] = 1;
		} elseif (!empty($setting['customer_activity'])) {
			$this->request->get['customer_activity'] = 1;
		}
		if (!empty($this->request->post['customer_session'])) {
			$this->request->get['customer_session'] = 1;
		} elseif (!empty($setting['customer_session'])) {
			$this->request->get['customer_session'] = 1;
		}

		if ($this->validate()) {
			$this->load->model('setting/setting');

			$text = '';

			if (!empty($this->request->get['minify'])) {
				if (($this->request->server['REQUEST_METHOD'] != 'POST')) {
					$module_info = $this->configGet();
					$module_info['time_save'] = time();
					if (!empty($module_info['pagespeed_css_min_download'])) {
						$this->request->post['pagespeed_css_min_download'] = $module_info['pagespeed_css_min_download'];
					}
					if (!empty($module_info['pagespeed_js_min_download'])) {
						$this->request->post['pagespeed_js_min_download'] = $module_info['pagespeed_js_min_download'];
					}

					$this->model_setting_setting->editSetting('bus_cache', array(
						'bus_cache'                         => $module_info,
						'bus_cache_status'                  => !empty($module_info['status']),
						'bus_cache_clear_blog_category'     => !empty($module_info['cache_clear']['blog_category']),
						'bus_cache_clear_blog_article'      => !empty($module_info['cache_clear']['blog_article']),
						'bus_cache_clear_category'          => !empty($module_info['cache_clear']['category']),
						'bus_cache_clear_information'       => !empty($module_info['cache_clear']['information']),
						'bus_cache_clear_manufacturer'      => !empty($module_info['cache_clear']['manufacturer']),
						'bus_cache_clear_product'           => !empty($module_info['cache_clear']['product']),
						'bus_cache_image_first_boot_status' => !empty($module_info['pagespeed_image_first_boot_status']),
						'bus_cache_image_webp_status'       => !empty($module_info['pagespeed_image_webp_status']),
						'bus_cache_image_webp_convert'      => !empty($module_info['pagespeed_image_webp_convert']),
						'bus_cache_image_webp_quality'      => (isset($module_info['pagespeed_image_webp_quality']) ? $module_info['pagespeed_image_webp_quality'] : 100),
						'bus_cache_support_disc_warning'    => !empty($module_info['support_disc_warning'])
					));
				}

				$this->deleteDir(DIR_IMAGE . 'bus_cache[NAGIBATOR]');
				$text .= "\n" . '<br>CSS, JS, Inline, Download, Critical delete';
			}

			if (!empty($this->request->get['images'])) {
				$this->deleteDir(DIR_IMAGE . 'cache/[NAGIBATOR]');
				$text .= "\n" . '<br>Images resize delete';
			}

			if (!empty($this->request->get['logs'])) {
				$text .= $this->deleteDir(DIR_LOGS);
				$setting['logs'] = 1;
			}

			if (!empty($this->request->get['view_products'])) {
				$this->db->query("UPDATE `" . DB_PREFIX . "product` SET viewed = '0'");
				$text .= ' product viewed ' . (method_exists($this->db, 'countAffected') ? $this->db->countAffected() : $this->db->query("SELECT ROW_COUNT() AS total")->row['total']+1);
				$setting['view_products'] = 1;
			}

			if (!empty($this->request->get['customer_search'])) {
				$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_search` WHERE customer_search_id");
				$text .= ' customer_search ' . (method_exists($this->db, 'countAffected') ? $this->db->countAffected() : $this->db->query("SELECT ROW_COUNT() AS total")->row['total']+1);
				$setting['customer_search'] = 1;
			}

			if (!empty($this->request->get['customer_blog_search'])) {
				if ($this->db->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('customer_blog_search') . "'")->num_rows) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_blog_search` WHERE customer_blog_search_id");
					$text .= ' customer_blog_search ' . (method_exists($this->db, 'countAffected') ? $this->db->countAffected() : $this->db->query("SELECT ROW_COUNT() AS total")->row['total']+1);
				}
				$setting['customer_blog_search'] = 1;
			}

			if (!empty($this->request->get['customer_activity'])) {
				if ($this->db->query("SELECT TABLE_NAME, COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('customer_activity') . "' AND COLUMN_NAME = 'activity_id'")->num_rows) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_activity` WHERE activity_id");
				} elseif ($this->db->query("SELECT TABLE_NAME, COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('customer_activity') . "' AND COLUMN_NAME = 'customer_activity_id'")->num_rows) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_activity` WHERE customer_activity_id");
				} else {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "customer_activity`");
				}
				$text .= ' customer_activity ' . (method_exists($this->db, 'countAffected') ? $this->db->countAffected() : $this->db->query("SELECT ROW_COUNT() AS total")->row['total']+1);
				if ($this->db->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('affiliate_activity') . "'")->num_rows) {
					if ($this->db->query("SELECT TABLE_NAME, COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('affiliate_activity') . "' AND COLUMN_NAME = 'activity_id'")->num_rows) {
						$this->db->query("DELETE FROM `" . DB_PREFIX . "affiliate_activity` WHERE activity_id");
					} elseif ($this->db->query("SELECT TABLE_NAME, COLUMN_NAME FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('affiliate_activity') . "' AND COLUMN_NAME = 'affiliate_activity_id'")->num_rows) {
						$this->db->query("DELETE FROM `" . DB_PREFIX . "affiliate_activity` WHERE affiliate_activity_id");
					} else {
						$this->db->query("DELETE FROM `" . DB_PREFIX . "affiliate_activity`");
					}
					$text .= ' affiliate_activity ' . (method_exists($this->db, 'countAffected') ? $this->db->countAffected() : $this->db->query("SELECT ROW_COUNT() AS total")->row['total']+1);
				}
				$setting['customer_activity'] = 1;
			}

			if (!empty($this->request->get['customer_session'])) {
				if (defined('DIR_SESSION')) {
					$this->deleteDir(DIR_SESSION);
					$text .= " file_session";
				} else {
					$this->deleteDir(session_save_path() . '/');
					$text .= " file_session";
				}

				$this->db->query("DELETE FROM `" . DB_PREFIX . "api_session` WHERE api_session_id");
				$this->db->query("OPTIMIZE TABLE `" . DB_PREFIX . "api_session`");
				$text .= ' api_session ' . (method_exists($this->db, 'countAffected') ? $this->db->countAffected() : $this->db->query("SELECT ROW_COUNT() AS total")->row['total']+1);
				if ($this->db->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('session') . "'")->num_rows) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "session` WHERE session_id");
					$text .= ' session ' . (method_exists($this->db, 'countAffected') ? $this->db->countAffected() : $this->db->query("SELECT ROW_COUNT() AS total")->row['total']+1);
					$this->db->query("OPTIMIZE TABLE `" . DB_PREFIX . "session`");
				}
				$setting['customer_session'] = 1;
			}

			if (!empty($this->request->get['cart_session'])) {
				$this->db->query("DELETE FROM `" . DB_PREFIX . "cart` WHERE customer_id = '0'");
				$this->db->query("OPTIMIZE TABLE `" . DB_PREFIX . "cart`");
				$text .= ' customer guset cart session ' . (method_exists($this->db, 'countAffected') ? $this->db->countAffected() : $this->db->query("SELECT ROW_COUNT() AS total")->row['total']+1);
				$setting['cart_session'] = 1;
			}

			if (!empty($this->request->get['modifications'])) {
				$module_info = $this->configGet();

				if ($this->version_oc < 4) {
					if (!empty($module_info['pagespeed_image_webp_status'])) {
						$this->setFile('_webp', $this->getFile('_webp', 'xml_'), 'xml');
					} else {
						$this->deleteFile('_webp', 'xml');
					}
					if (!empty($module_info['support_session_fix'])) {
						$this->setFile('_session_fix', $this->getFile('_session_fix', 'xml_'), 'xml');
					} else {
						$this->deleteFile('_session_fix', 'xml');
					}
				} else {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_image'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_notification'");

					if (!empty($module_info['pagespeed_image_webp_status'])) {
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_image', `trigger` = 'catalog/model/tool/image/resize/after', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "image', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
					}

					if (!empty($module_info['support_disc_warning'])) {
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_notification', `trigger` = 'admin/controller/common/dashboard/before', `action` = '" . $this->paths['controller']['bus_cache'] . $this->paths['slash'] . "notification', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
					}
				}
				$text = $this->modification($text, true, 1);
			}

			// при сохранении данных и чистки css, js
			if (!is_dir(DIR_IMAGE . 'bus_cache/download/')) {
				mkdir(DIR_IMAGE . 'bus_cache/download/', 0755, true);
			}

			if (!empty($this->request->post['pagespeed_css_min_download'])) {
				$css_links = str_replace('&amp;', '&', $this->request->post['pagespeed_css_min_download']);
				$css_links = explode("\r\n", $css_links);
				foreach ($css_links as $link) {
					$file = DIR_IMAGE . 'bus_cache/download/' . md5($link) . '.css';
					if ($link && stristr($link, '//') && !is_file($file)) {
						$href = @get_headers($link);
						if (!empty($href[0]) && strpos($href[0], '404') === false) {
							if (!empty($this->request->server['HTTP_USER_AGENT'])) {
								$user_agent = $this->request->server['HTTP_USER_AGENT'];
							} else {
								$user_agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36';
							}
							$context  = stream_context_create(array('http' =>
								array(
									'method'  => 'GET',
									'header'  => "Content-Type: application/x-www-form-urlencoded\r\n" . "Referer: /\r\n" . "User-Agent: " . $user_agent,
									/* 'content' => http_build_query(array(
										'family'  => 'Open+Sans:400,400i,300,700',
										'display' => 'swap'
									)) */
								)
							));
							$content = file_get_contents($link, false, $context);
							//$content = fopen($link, 'r', false, $context);
							if ($content) {
								file_put_contents($file, $content);
							}
						}
					}
				}
			}

			if (!empty($this->request->post['pagespeed_js_min_download'])) {
				$js_links = str_replace('&amp;', '&', $this->request->post['pagespeed_js_min_download']);
				$js_links = explode("\r\n", $js_links);
				foreach ($js_links as $link) {
					$file = DIR_IMAGE . 'bus_cache/download/' . md5($link) . '.js';
					if ($link && stristr($link, '//') && !is_file($file)) {
						$href = @get_headers($link);
						if (!empty($href[0]) && strpos($href[0], '404') === false) {
							if (!empty($this->request->server['HTTP_USER_AGENT'])) {
								$user_agent = $this->request->server['HTTP_USER_AGENT'];
							} else {
								$user_agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36';
							}
							$context  = stream_context_create(array('http' =>
								array(
									'method'  => 'GET',
									'header'  => "Content-Type: application/x-www-form-urlencoded\r\n" . "Referer: /\r\n" . "User-Agent: " . $user_agent,
									/* 'content' => http_build_query(array(
										'family'  => 'Open+Sans:400,400i,300,700',
										'display' => 'swap'
									)) */
								)
							));
							$content = file_get_contents($link, false, $context);
							//$content = fopen($link, 'r', false, $context);
							if ($content) {
								file_put_contents($file, $content);
							}
						}
					}
				}
			}

			if (!empty($this->request->get['twig'])) {
				$this->deleteDir(DIR_CACHE . 'template[NAGIBATOR]');
			}

			if (!$setting || !empty($this->request->get['caches']) || !empty($this->request->get['minify']) || !empty($this->request->get['images']) || !empty($this->request->get['modifications'])) {
				$cache_engine = $this->configGet('cache_engine');

				if ($this->version_oc == 4) {
					$class_cache = '\Opencart\Extension\Bus_Cache\System\Library\Bus_Cache\\' . $cache_engine;
					$file_cache = DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/' . $cache_engine . '.php';
				} else {
					$class_cache = '\Bus_Cache\\' . $cache_engine;
					$file_cache = DIR_SYSTEM . 'library/bus_cache/' . $cache_engine . '.php';
				}

				if (is_file($file_cache)) {
					if (in_array($cache_engine, array('apc', 'apcu', 'mem', 'memcached', 'opcache', 'redis', 'wincache', 'xcache'))) {
						(new $class_cache())->flush();
					}

					$text .= "\n" . '<br>' . ucfirst($cache_engine) . ' cache delete';

					$this->deleteDir(DIR_CACHE . '[NAGIBATOR]', array('template'));

					$this->model_setting_setting->editSetting('bus_cache_size_limit', array('bus_cache_size_limit' => 0));
				}
			} elseif (!empty($setting['tables']) && is_array($setting['tables'])) {
				$cache_engine = $this->configGet('cache_engine');

				if ($this->version_oc == 4) {
					$class_cache = '\Opencart\Extension\Bus_Cache\System\Library\Bus_Cache\\' . $cache_engine;
					$file_cache = DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/' . $cache_engine . '.php';
				} else {
					$class_cache = '\Bus_Cache\\' . $cache_engine;
					$file_cache = DIR_SYSTEM . 'library/bus_cache/' . $cache_engine . '.php';
				}

				if (is_file($file_cache)) {
					if ($cache_engine == 'buslik') {
						foreach ($setting['tables'] as $table) {
							$this->deleteDir(DIR_CACHE . 'buslik/' . $table . '[NAGIBATOR]');
							$this->deleteDir(DIR_CACHE . 'buslik/opencart/' . $table . '[NAGIBATOR]');
						}
					} elseif (in_array($cache_engine, array('apc', 'apcu', 'mem', 'memcached', 'opcache', 'redis', 'wincache', 'xcache'))) {
						if ($cache_engine == 'opcache') {
							foreach ($setting['tables'] as $table) {
								(new $class_cache())->delete($table);
							}
						} else {
							(new $class_cache())->flush();
						}
					} else {
						foreach ($setting['tables'] as $table) {
							(new $class_cache())->delete($table);
						}
					}

					$text .= "\n" . '<br>' . ucfirst($cache_engine) . ' cache delete';
				}
				$this->cache->delete('bus_cache_controller');
				$this->cache->delete('bus_cache_model');
			}

			if (isset($this->request->get['route']) && $this->request->get['route'] == $this->paths['controller']['bus_cache'] . $this->paths['slash'] . 'clear') {
				if (isset($this->request->post['info'])) {
					$this->request->get['info'] = $this->request->post['info'];
				}
				$text = str_replace(array(DIR_APPLICATION, DIR_CATALOG, DIR_IMAGE, DIR_SYSTEM), array(basename(DIR_APPLICATION) . '/', basename(DIR_CATALOG) . '/', basename(DIR_IMAGE) . '/', basename(DIR_SYSTEM) . '/'), $text);
				$this->session->data['success'] = $this->language->get('success_clear') . $text;

				if (isset($this->request->get['redirect'])) {
					$this->response->redirect($this->url->link($this->request->get['redirect'], $this->paths['token'], true));
				} else {
					$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
				}
			} else {
				$text = str_replace(array(DIR_APPLICATION, DIR_CATALOG, DIR_IMAGE, DIR_SYSTEM), array(basename(DIR_APPLICATION) . '/', basename(DIR_CATALOG) . '/', basename(DIR_IMAGE) . '/', basename(DIR_SYSTEM) . '/'), $text);
				return $this->language->get('success_clear') . $text;
			}
		} else {
			if (isset($this->request->get['route']) && $this->request->get['route'] == $this->paths['controller']['bus_cache'] . $this->paths['slash'] . 'clear') {
				$this->session->data['warning'] = $this->language->get('error_permission');
				$this->session->data['error'] = $this->language->get('error_permission');

				if (isset($this->request->get['redirect'])) {
					$this->response->redirect($this->url->link($this->request->get['redirect'], $this->paths['token'], true));
				} else {
					$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
				}
			} else {
				return $this->language->get('error_permission');
			}
		}
	}

	private function fileSizeConvert($bytes = 1) {
		$unit = array('b','kb','Mb','Gb','Tb','Pb');
		if ($bytes > 0) {
			return round($bytes/pow(1024, ($i=floor(log($bytes,1024)))), 2) . ' ' . $unit[$i];
		} else {
			return 0 . ' ' . $unit[0];
		}
	}

	// подсчёт всех названий и папок
	// scandir
	private function dirToArray($path, $ex = array(), $result = array('total' => 0, 'size' => 0)) {
		if (is_dir($path)) {
			$path = rtrim($path, "/\\") . DIRECTORY_SEPARATOR;
			if (!isset($ex["."])) {
				$ex = array_flip($ex);
				$ex["."] = 0;
				$ex[".."] = 0;
				$ex['index.html'] = 0;
				$ex['.htaccess'] = 0;
			}

			$files = scandir($path, SCANDIR_SORT_NONE);

			foreach ($files as $file) {
				if (!isset($ex[$file])) {
					if (is_dir($path . $file)) {
						$result = $this->dirToArray($path . $file, $ex, $result);
					} else {
						$result['total']++;
						//$result['size'] += stat($path . $file)['size'];
						//$result['size'] += lstat($path . $file)['size'];
						$result['size'] += filesize($path . $file);
					}
				}
			}

			//unset($files, $file);
		}

		return $result;
	}

	// readdir
	private function dirToArray2($path, $ex = array(), $result = array('total' => 0, 'size' => 0)) {
		if (\is_dir($path)) {
			try {
				$path = rtrim($path, "/\\") . DIRECTORY_SEPARATOR;
				$ex[] = ".";
				$ex[] = "..";
				$ex[] = 'index.html';
				$ex[] = '.htaccess';

				$files = opendir($path);

				while(false !== ($file = readdir($files))) {
					if (!in_array($file, $ex)) {
						if (\is_dir($path . $file)) {
							$result = $this->dirToArray($path . $file, $ex, $result);
						} else {
							$result['total']++;
							$result['size'] += \filesize($path . $file);
						}
					}
				}

				closedir($files);
				//unset($files, $file);
			} catch (Exception $e) {

			}
		}

		return $result;
	}

	public function getStats() {
		$data = array();

		if ($this->configGet('support_stats_status') && $this->validate()) {
			$data['support_cache_status'] = true;

			$files_cache = $this->config->get('bus_cache_stats');

			if (!$files_cache || !empty($this->request->get['clear'])) {
				$data['support_cache_status'] = false;

				$files_cache = array();
				$files_cache['cache'] = $this->dirToArray(DIR_CACHE);
				$files_cache['cache']['total'] +=1;
				$files_cache['cache']['size'] +=22;
				$files_cache['cache_minify'] = $this->dirToArray(DIR_IMAGE . 'bus_cache/');
				$files_cache['image_cache'] = $this->dirToArray(DIR_IMAGE . 'cache/');
				$files_cache['image'] = $this->dirToArray(DIR_IMAGE, array('bus_cache', 'cache'));
				$files_cache['image']['total'] += $files_cache['image_cache']['total'];
				$files_cache['image']['size'] += $files_cache['image_cache']['size'];

				if (defined('DIR_SESSION')) {
					$files_cache['session'] = $this->dirToArray(DIR_SESSION);
				} else {
					$files_cache['session'] = $this->dirToArray(session_save_path());
				}

				$files_cache['session_db'] = array();
				$files_cache['session_db']['total'] = 0;
				$files_cache['session_db']['size'] = 0;

				if ($this->db->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('session') . "'")->num_rows) {
					$files_cache['session_db']['total'] = $this->db->query("SELECT COUNT(`session_id`) AS `total` FROM `" . DB_PREFIX . "session`")->row['total'];
					$files_cache['session_db']['size'] = $this->db->query("SELECT (data_length + index_length) AS `size` FROM information_schema.TABLES WHERE `table_schema` = '" . DB_DATABASE . "' AND table_name = '" . DB_PREFIX . "session'")->row['size'];
				}

				$files_cache['session_cart'] = array();
				$files_cache['session_cart']['total'] = 0;
				$files_cache['session_cart']['size'] = 0;

				if ($this->db->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = '" . DB_DATABASE . "' AND TABLE_NAME = '" . DB_PREFIX . $this->db->escape('cart') . "'")->num_rows) {
					$files_cache['session_cart']['total'] = $this->db->query("SELECT COUNT(`session_id`) AS `total` FROM `" . DB_PREFIX . "cart`")->row['total'];
					$files_cache['session_cart']['size'] = $this->db->query("SELECT (data_length + index_length) AS `size` FROM information_schema.TABLES WHERE `table_schema` = '" . DB_DATABASE . "' AND table_name = '" . DB_PREFIX . "cart'")->row['size'];
				}

				$this->load->model('setting/setting');

				$this->model_setting_setting->editSetting('bus_cache_stats', array('bus_cache_stats' => $files_cache));
			}

			$data['support_cache_total'] = $files_cache['cache']['total'];
			$data['support_cache_size'] = $this->fileSizeConvert($files_cache['cache']['size']);
			$data['support_cache_minify_total'] = $files_cache['cache_minify']['total'];
			$data['support_cache_minify_size'] = $this->fileSizeConvert($files_cache['cache_minify']['size']);
			$data['support_image_total'] = $files_cache['image']['total'];
			$data['support_image_size'] = $this->fileSizeConvert($files_cache['image']['size']);
			$data['support_image_cache_total'] = $files_cache['image_cache']['total'];
			$data['support_image_cache_size'] = $this->fileSizeConvert($files_cache['image_cache']['size']);
			$data['support_session_total'] = $files_cache['session']['total'];
			$data['support_session_size'] = $this->fileSizeConvert($files_cache['session']['size']);
			$data['support_session_db_total'] = $files_cache['session_db']['total'];
			$data['support_session_db_size'] = $this->fileSizeConvert($files_cache['session_db']['size']);
			$data['support_session_cart_total'] = $files_cache['session_cart']['total'];
			$data['support_session_cart_size'] = $this->fileSizeConvert($files_cache['session_cart']['size']);

			$data['support_disc_size_limit'] = $this->configGet('support_disc_size_limit');

			if ($data['support_disc_size_limit']) {
				$data['support_disc_total'] = $this->fileSizeConvert($data['support_disc_size_limit'] * 1024 * 1024);
			} else {
				$data['support_disc_total'] = $this->fileSizeConvert(disk_total_space('.'));
			}

			if ($data['support_disc_size_limit']) {
				$size = 0;
				$size += $files_cache['cache']['size'];
				$size += $files_cache['image']['size'];
				$size += $files_cache['session']['size'];
				$size += $files_cache['session_db']['size'];
				$size += $files_cache['session_cart']['size'];
				$size += $this->config->get('bus_cache_size_limit');

				$data['support_disc_free'] = $this->fileSizeConvert(($data['support_disc_size_limit'] * 1024 * 1024) - $size);
			} else {
				$data['support_disc_free'] = $this->fileSizeConvert(disk_free_space('.'));
			}
		}

		/* $this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($data, JSON_HEX_AMP)); */
		header('Content-Type: application/json', true);
		exit(json_encode($data, JSON_HEX_AMP));
	}

	public function index() {
		foreach ($this->load->language($this->paths['language']['bus_cache']) as $key => $lang) {
			$data[$key] = $lang;
		}

		$data['heading_title'] = $this->language->get('heading_title');
		$data['help_pagespeed_css_style'] = htmlspecialchars($this->language->get('help_pagespeed_css_style'));
		$data['help_pagespeed_js_inline_transfer_onrot'] = htmlspecialchars($this->language->get('help_pagespeed_js_inline_transfer_onrot'));
		$data['help_pagespeed_js_inline_exception'] = htmlspecialchars($this->language->get('help_pagespeed_js_inline_exception'));
		$data['help_pagespeed_js_inline_event'] = htmlspecialchars($this->language->get('help_pagespeed_js_inline_event'));
		$data['help_pagespeed_js_script'] = htmlspecialchars($this->language->get('help_pagespeed_js_script'));

		//$this->load->model('customer/customer_group');

		$this->load->model('localisation/language');

		$this->load->model('setting/store');

		//$this->load->model('tool/image');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		//$this->document->addStyle('view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');
		//$this->document->addScript('view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');

		$this->update();

		//$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups();

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$language_id = $this->config->get('config_language_id');

		$server = (defined('HTTPS_CATALOG') && $this->request->server['HTTPS'] ? HTTPS_CATALOG : HTTP_CATALOG);

		$data['stores'] = $this->model_setting_store->getStores();

		$data['token'] = $this->paths['token'];

		$data['slash'] = $this->paths['slash'];

		$data['module_path'] = $this->paths['controller']['bus_cache'];

		$module_info = $this->configGet();

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (isset($this->request->post['apply']) && !empty($this->request->post['apply'])) {
				$apply = $this->request->post['apply'];
				unset($this->request->post['apply']);
			} else {
				$apply = false;
			}

			$this->request->post['version'] = $this->version;
			$this->request->post['time_save'] = time();

			if (isset($this->request->post['cache_par'])) {
				$this->request->post['cache_par'] = explode("\r\n", $this->request->post['cache_par']);
			}

			if (!empty($this->request->post['cache_engine_mine']) && !is_file(DIR_SYSTEM . 'library/bus_cache/' . $this->request->post['cache_engine_mine'] . '.php')) {
				unset($this->request->post['cache_engine_mine']);
			}

			if (1 == 0 && isset($this->request->post['database_status'])) {
				//ALTER TABLE `oc40`.`oc_voucher` ADD INDEX `укекуе` (`voucher_id`) KEY_BLOCK_SIZE = 111 USING BTREE COMMENT 'укеукеуке';
				$setup_sql = array();
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_attribute ADD INDEX attribute_id ( attribute_id );";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_attribute ADD INDEX language_id ( language_id );";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_description ADD INDEX language_id ( language_id );";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_image ADD INDEX product_id ( product_id );";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_image ADD INDEX sort_order ( sort_order );";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_option ADD INDEX product_id (product_id);";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_option ADD INDEX option_id (option_id);";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_option_value ADD INDEX product_option_id (product_option_id);";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_option_value ADD INDEX product_id (product_id);";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_option_value ADD INDEX option_id (option_id);";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_option_value ADD INDEX option_value_id (option_value_id);";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_option_value ADD INDEX subtract (subtract);";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_option_value ADD INDEX quantity (quantity);";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_reward ADD INDEX product_id ( product_id );";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_reward ADD INDEX customer_group_id ( customer_group_id );";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_to_category ADD INDEX category_id ( category_id );";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "product_to_store ADD INDEX store_id ( store_id );";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "setting ADD INDEX store_id ( store_id );";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "setting ADD INDEX `group` ( `group` );";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "setting ADD INDEX `key` ( `key` );";
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "setting ADD INDEX serialized ( serialized );";
				 
				$setup_sql[] = "ALTER TABLE " . DB_PREFIX . "url_alias ADD INDEX query ( query );";
			}

			if (!empty($module_info['pagespeed_image_webp_status']) && empty($this->request->post['pagespeed_image_webp_status'])) {
				if ($this->version_oc == 4) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_image'");
				} else {
					$this->deleteFile('_webp', 'xml');
				}
			} elseif (empty($module_info['pagespeed_image_webp_status']) && !empty($this->request->post['pagespeed_image_webp_status'])) {
				if ($this->version_oc == 4) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_image'");
					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_image', `trigger` = 'catalog/model/tool/image/resize/after', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "image', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
				} else {
					$this->setFile('_webp', $this->getFile('_webp', 'xml_'), 'xml');
				}
			}
			if ($this->version_oc < 4) {
				if (!empty($module_info['support_session_fix']) && empty($this->request->post['support_session_fix'])) {
					$this->deleteFile('_session_fix', 'xml');
				} elseif (empty($module_info['support_session_fix']) && !empty($this->request->post['support_session_fix'])) {
					$this->setFile('_session_fix', $this->getFile('_session_fix', 'xml_'), 'xml');
				}
			}
			$modification = '';
			if (!empty($module_info['status']) && empty($this->request->post['status'])) {
				$modification = $this->modification(false, false, 1);
			} elseif (empty($module_info['status']) && !empty($this->request->post['status'])) {
				$modification = $this->modification(false, true, 1);
			}

			if (isset($this->request->post['pagespeed_image_first_boot_onrot'])) {
				$this->request->post['pagespeed_image_first_boot_onrot'] = explode("\r\n", $this->request->post['pagespeed_image_first_boot_onrot']);
			}

			if (isset($this->request->post['pagespeed_image_first_boot_rot'])) {
				$this->request->post['pagespeed_image_first_boot_rot'] = explode("\r\n", $this->request->post['pagespeed_image_first_boot_rot']);
			}

			if (isset($this->request->post['pagespeed_css_style'])) {
				$this->setFile('replace', html_entity_decode($this->request->post['pagespeed_css_style']), 'css');

				if (!empty($this->request->post['pagespeed_css_style'])) {
					$this->request->post['pagespeed_css_style'] = true;
				}
			}

			if (isset($this->request->post['pagespeed_js_script'])) {
				$this->setFile('replace', html_entity_decode($this->request->post['pagespeed_js_script']), 'js');

				if (!empty($this->request->post['pagespeed_js_script'])) {
					$this->request->post['pagespeed_js_script'] = true;
				}
			}

			if ($this->version_oc >= 4) {
				if (empty($module_info['support_disc_warning']) && !empty($this->request->post['support_disc_warning'])) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_notification'");
					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_notification', `trigger` = 'admin/controller/common/dashboard/before', `action` = '" . $this->paths['controller']['bus_cache'] . $this->paths['slash'] . "notification', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
				} elseif (!empty($module_info['support_disc_warning']) && empty($this->request->post['support_disc_warning'])) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_notification'");
				}

				if (!empty($this->request->post['support_debug']) || !empty($this->request->post['pagespeed_css_critical'])) {
					setcookie('bus_cache_support_debug', md5($this->request->server['REMOTE_ADDR']), 0, '/', '', !empty($this->request->server['HTTPS']), true);
				} else {
					setcookie('bus_cache_support_debug', md5($this->request->server['REMOTE_ADDR']), -1000, '/', '', !empty($this->request->server['HTTPS']), true);
				}
			}

			// очищаем кэш предыдущего обработчика кэша
			if (!empty($this->request->post['cache_engine']) && !empty($module_info['cache_engine']) && $this->request->post['cache_engine'] != $module_info['cache_engine']) {
				$this->clear();
			}

			$this->load->model('setting/setting');

			// fix enabled/disabled OpenCart 4
			$this->model_setting_setting->editSetting('module_bus_cache', array('module_bus_cache_status' => !empty($this->request->post['status'])));

			$this->model_setting_setting->editSetting('bus_cache', array(
				'bus_cache'                         => $this->request->post,
				'bus_cache_status'                  => !empty($this->request->post['status']),
				'bus_cache_clear_blog_category'     => !empty($this->request->post['cache_clear']['blog_category']),
				'bus_cache_clear_blog_article'      => !empty($this->request->post['cache_clear']['blog_article']),
				'bus_cache_clear_category'          => !empty($this->request->post['cache_clear']['category']),
				'bus_cache_clear_information'       => !empty($this->request->post['cache_clear']['information']),
				'bus_cache_clear_manufacturer'      => !empty($this->request->post['cache_clear']['manufacturer']),
				'bus_cache_clear_product'           => !empty($this->request->post['cache_clear']['product']),
				'bus_cache_image_first_boot_status' => !empty($this->request->post['pagespeed_image_first_boot_status']),
				'bus_cache_image_webp_status'       => !empty($this->request->post['pagespeed_image_webp_status']),
				'bus_cache_image_webp_convert'      => !empty($this->request->post['pagespeed_image_webp_convert']),
				'bus_cache_image_webp_quality'      => (isset($this->request->post['pagespeed_image_webp_quality']) ? $this->request->post['pagespeed_image_webp_quality'] : 100),
				'bus_cache_support_disc_warning'    => !empty($this->request->post['support_disc_warning'])
			));

			if ($apply == 1) {
				$modification .= '<br>' . $this->clear();
			}

			if ($apply) {
				$this->session->data['success'] = $this->language->get('success_setting_apply') . $modification;

				$this->response->redirect($this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true));
			} else {
				$this->session->data['success'] = $this->language->get('success_setting_save') . $modification;

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

		if ($this->version_oc >= 2.3) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_extension'),
				'href' => $this->url->link($this->paths['controller']['extension'], $this->paths['token'], true)
			);
		}

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link($this->paths['controller']['extension'], $this->paths['token'] . ($this->version_oc >= 2.3 ? '&type=module' : false), true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true)
		);

		$data['action'] = $this->url->link($this->paths['controller']['bus_cache'], $this->paths['token'], true);
		$data['clear'] = $this->url->link($this->paths['controller']['bus_cache'] . $this->paths['slash'] . 'clear', $this->paths['token'], true);
		$data['clear_blog_search'] = ($this->config->get('configblog_article_limit') != null);
		if ($this->config->get('bus_app')) {
			$data['clear_pwa'] = $this->url->link(str_replace('bus_cache', 'bus_app', $this->paths['controller']['bus_cache']) . $this->paths['slash'] . 'clear', $this->paths['token'] . '&redirect=' . $this->paths['controller']['bus_cache'], true);
		} else {
			$data['clear_pwa'] = false;
		}
		$data['cancel'] = $this->url->link($this->paths['controller']['extension'], $this->paths['token'] . ($this->version_oc >= 2.3 ? '&type=module' : false), true);

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (isset($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = true;
		}

		if (isset($this->request->post['store'])) {
			$data['store'] = $this->request->post['store'];
		} elseif (isset($module_info['store'])) {
			$data['store'] = $module_info['store'];
		} else {
			$data['store'] = array(0);
		}

		if (isset($this->request->post['cache_status'])) {
			$data['cache_status'] = $this->request->post['cache_status'];
		} elseif (isset($module_info['cache_status'])) {
			$data['cache_status'] = $module_info['cache_status'];
		} else {
			$data['cache_status'] = true;
		}

		if (isset($this->request->post['cache_con'])) {
			$data['cache_con'] = $this->request->post['cache_con'];
		} elseif (isset($module_info['cache_con'])) {
			$data['cache_con'] = $module_info['cache_con'];
		} else {
			$data['cache_con'] = array(
				'config_maintenance',
				'config_store_id',
				'config_language_id',
				'config_customer_group_id'
			);
			$data['cache_con'] = implode("\r\n", $data['cache_con']);
		}

		if (isset($this->request->post['cache_ses'])) {
			$data['cache_ses'] = $this->request->post['cache_ses'];
		} elseif (isset($module_info['cache_ses'])) {
			$data['cache_ses'] = $module_info['cache_ses'];
		} else {
			$data['cache_ses'] = array(
				'guest',
				'language',
				'currency',
				'wishlist',
				'compare'
			);
			$data['cache_ses'] = implode("\r\n", $data['cache_ses']);
		}

		if (isset($this->request->post['cache_cok'])) {
			$data['cache_cok'] = $this->request->post['cache_cok'];
		} elseif (isset($module_info['cache_cok'])) {
			$data['cache_cok'] = $module_info['cache_cok'];
		} else {
			$data['cache_cok'] = array(
				'language',
				'languageauto'
			);
			$data['cache_cok'] = implode("\r\n", $data['cache_cok']);
		}

		if (isset($this->request->post['cache_par']) && is_array($this->request->post['cache_par'])) {
			$data['cache_par'] = implode("\r\n", $this->request->post['cache_par']);
		} elseif (isset($module_info['cache_par']) && is_array($module_info['cache_par'])) {
			$data['cache_par'] = implode("\r\n", $module_info['cache_par']);
		} else {
			$data['cache_par'] = array(
				'cache_off',
				'_route_',
				'route',
				'blog_article_id',
				'article_id',
				'category_id',
				'manufacturer_id',
				'product_id',
				'sort',
				'order',
				'page',
				'path',
				'limit',
				'search',
				'language'
			);
			$data['cache_par'] = implode("\r\n", $data['cache_par']);
		}

		if (isset($this->request->post['cache_onrot'])) {
			$data['cache_onrot'] = $this->request->post['cache_onrot'];
		} elseif (isset($module_info['cache_onrot'])) {
			$data['cache_onrot'] = $module_info['cache_onrot'];
		} else {
			$data['cache_onrot'] = false;
		}

		if (isset($this->request->post['cache_rot'])) {
			$data['cache_rot'] = $this->request->post['cache_rot'];
		} elseif (isset($module_info['cache_rot'])) {
			$data['cache_rot'] = $module_info['cache_rot'];
		} else {
			$data['cache_rot'] = array(
				'extension/module/bus_editor',
				'module/bus_editor',
				'account',
				'cart',
				'checkout',
				'compare',
				'wishlist',
				'country',
				'captcha',
				'success',
				'not_found',
				'api',
				'ajax_viewed',
				'contact'
			);
			$data['cache_rot'] = implode("\r\n", $data['cache_rot']);
		}

		if (isset($this->request->post['cache_customer'])) {
			$data['cache_customer'] = $this->request->post['cache_customer'];
		} elseif (isset($module_info['cache_customer'])) {
			$data['cache_customer'] = $module_info['cache_customer'];
		} else {
			$data['cache_customer'] = false;
		}

		if (isset($this->request->post['cache_cart'])) {
			$data['cache_cart'] = $this->request->post['cache_cart'];
		} elseif (isset($module_info['cache_cart'])) {
			$data['cache_cart'] = $module_info['cache_cart'];
		} else {
			$data['cache_cart'] = false;
		}

		if (isset($this->request->post['cache_cart_count'])) {
			$data['cache_cart_count'] = $this->request->post['cache_cart_count'];
		} elseif (isset($module_info['cache_cart_count'])) {
			$data['cache_cart_count'] = $module_info['cache_cart_count'];
		} else {
			$data['cache_cart_count'] = 0;
		}

		if (isset($this->request->post['cache_controller'])) {
			$data['cache_controller'] = $this->request->post['cache_controller'];
		} elseif (isset($module_info['cache_controller'])) {
			$data['cache_controller'] = $module_info['cache_controller'];
		} else {
			$data['cache_controller'] = false;
		}

		if (isset($this->request->post['cache_controller_ajax'])) {
			$data['cache_controller_ajax'] = $this->request->post['cache_controller_ajax'];
		} elseif (isset($module_info['cache_controller_ajax'])) {
			$data['cache_controller_ajax'] = $module_info['cache_controller_ajax'];
		} else {
			$data['cache_controller_ajax'] = false;
		}

		if (isset($this->request->post['cache_model'])) {
			$data['cache_model'] = $this->request->post['cache_model'];
		} elseif (isset($module_info['cache_model'])) {
			$data['cache_model'] = $module_info['cache_model'];
		} else {
			$data['cache_model'] = false;
		}

		//https://web-creator.ru/technologies/webdev/legacy/memcached
		$data['cache_engines'] = array();
		if ($this->version_oc >= 4) {
			$data['cache_engines'][] = array('code' => 'apc', 'name' => 'APC (Alternative PHP Cache)', 'status' => (is_file(DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/apc.php') && extension_loaded('apc') && function_exists('apc_cache_info') && ini_get('apc.enabled') ? true : false));
			$data['cache_engines'][] = array('code' => 'apcu', 'name' => 'APCu (Alternative PHP Cache) not opcode', 'status' => (is_file(DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/apcu.php') && extension_loaded('apcu') && function_exists('apcu_cache_info') && ini_get('apc.enabled') ? true : false));
			$data['cache_engines'][] = array('code' => 'buslik', 'name' => 'Буслік', 'status' => true);
			$data['cache_engines'][] = array('code' => 'mem', 'name' => 'Memcache', 'status' => (is_file(DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/mem.php') && extension_loaded('memcache') && class_exists('Memcache') && function_exists('memcache_connect') ? true : false));
			$data['cache_engines'][] = array('code' => 'memcached', 'name' => 'Memcached', 'status' => (is_file(DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/memcached.php') && extension_loaded('memcached') && class_exists('Memcached') ? true : false));
			$data['cache_engines'][] = array('code' => 'opcache', 'name' => 'OpCache' . (!function_exists('opcache_is_script_cached') || !ini_get('opcache.enable') ? ' not opcode' : ''), 'status' => (is_file(DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/opcache.php') ? true : false));
			$data['cache_engines'][] = array('code' => 'redis', 'name' => 'Redis', 'status' => (is_file(DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/redis.php') && extension_loaded('redis') && class_exists('Redis') ? true : false));
			//https://github.com/cakephp/cakephp/blob/3.2.0/src/Cache/Engine/WincacheEngine.php
			//https://www.php.net/manual/ru/ref.wincache.php
			$data['cache_engines'][] = array('code' => 'wincache', 'name' => 'winCache', 'status' => (is_file(DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/wincache.php') && extension_loaded('wincache') && function_exists('wincache_ucache_info') ? true : false));
			//https://github.com/cakephp/cakephp/blob/3.2.0/src/Cache/Engine/XcacheEngine.php
			$data['cache_engines'][] = array('code' => 'xcache', 'name' => 'xCache', 'status' => (is_file(DIR_EXTENSION . 'bus_cache/system/' . 'library/bus_cache/xcache.php') && extension_loaded('xcache') && function_exists('xcache_count') ? true : false));
		} else {
			$data['cache_engines'][] = array('code' => 'apc', 'name' => 'APC (Alternative PHP Cache)', 'status' => (is_file(DIR_SYSTEM . 'library/bus_cache/apc.php') && extension_loaded('apc') && function_exists('apc_cache_info') && ini_get('apc.enabled') ? true : false));
			$data['cache_engines'][] = array('code' => 'apcu', 'name' => 'APCu (Alternative PHP Cache) not opcode', 'status' => (is_file(DIR_SYSTEM . 'library/bus_cache/apcu.php') && extension_loaded('apcu') && function_exists('apcu_cache_info') && ini_get('apc.enabled') ? true : false));
			$data['cache_engines'][] = array('code' => 'buslik', 'name' => 'Буслік', 'status' => true);
			$data['cache_engines'][] = array('code' => 'mem', 'name' => 'Memcache', 'status' => (is_file(DIR_SYSTEM . 'library/bus_cache/mem.php') && extension_loaded('memcache') && class_exists('Memcache') && function_exists('memcache_connect') ? true : false));
			$data['cache_engines'][] = array('code' => 'memcached', 'name' => 'Memcached', 'status' => (is_file(DIR_SYSTEM . 'library/bus_cache/memcached.php') && extension_loaded('memcached') && class_exists('Memcached') ? true : false));
			$data['cache_engines'][] = array('code' => 'opcache', 'name' => 'OpCache' . (!function_exists('opcache_is_script_cached') || !ini_get('opcache.enable') ? ' not opcode' : ''), 'status' => (is_file(DIR_SYSTEM . 'library/bus_cache/opcache.php') ? true : false));
			$data['cache_engines'][] = array('code' => 'redis', 'name' => 'Redis', 'status' => (is_file(DIR_SYSTEM . 'library/bus_cache/redis.php') && extension_loaded('redis') && class_exists('Redis') ? true : false));
			$data['cache_engines'][] = array('code' => 'wincache', 'name' => 'winCache', 'status' => (is_file(DIR_SYSTEM . 'library/bus_cache/wincache.php') && extension_loaded('wincache') && function_exists('wincache_ucache_info') ? true : false));
			$data['cache_engines'][] = array('code' => 'xcache', 'name' => 'xCache', 'status' => (is_file(DIR_SYSTEM . 'library/bus_cache/xcache.php') && extension_loaded('xcache') && function_exists('xcache_count') ? true : false));
		}

		if (isset($this->request->post['cache_engine'])) {
			$data['cache_engine'] = $this->request->post['cache_engine'];
		} elseif (isset($module_info['cache_engine'])) {
			$data['cache_engine'] = $module_info['cache_engine'];
		} else {
			$data['cache_engine'] = 'buslik';
		}

		if (isset($this->request->post['cache_engine_mine'])) {
			$data['cache_engine_mine'] = $this->request->post['cache_engine_mine'];
		} elseif (isset($module_info['cache_engine_mine'])) {
			$data['cache_engine_mine'] = $module_info['cache_engine_mine'];
		} else {
			$data['cache_engine_mine'] = false;
		}

		if (isset($this->request->post['cache_oc'])) {
			$data['cache_oc'] = $this->request->post['cache_oc'];
		} elseif (isset($module_info['cache_oc'])) {
			$data['cache_oc'] = $module_info['cache_oc'];
		} else {
			$data['cache_oc'] = false;
		}

		if (isset($this->request->post['cache_expire'])) {
			$data['cache_expire'] = $this->request->post['cache_expire'];
		} elseif (isset($module_info['cache_expire'])) {
			$data['cache_expire'] = $module_info['cache_expire'];
		} else {
			$data['cache_expire'] = 3600;
		}

		if (isset($this->request->post['cache_expire_cart'])) {
			$data['cache_expire_cart'] = $this->request->post['cache_expire_cart'];
		} elseif (isset($module_info['cache_expire_cart'])) {
			$data['cache_expire_cart'] = $module_info['cache_expire_cart'];
		} else {
			$data['cache_expire_cart'] = 3600;
		}

		if (isset($this->request->post['cache_expire_controller'])) {
			$data['cache_expire_controller'] = $this->request->post['cache_expire_controller'];
		} elseif (isset($module_info['cache_expire_controller'])) {
			$data['cache_expire_controller'] = $module_info['cache_expire_controller'];
		} else {
			$data['cache_expire_controller'] = 3600;
		}

		if (isset($this->request->post['cache_expire_model'])) {
			$data['cache_expire_model'] = $this->request->post['cache_expire_model'];
		} elseif (isset($module_info['cache_expire_model'])) {
			$data['cache_expire_model'] = $module_info['cache_expire_model'];
		} else {
			$data['cache_expire_model'] = 3600;
		}

		if (isset($this->request->post['cache_expire_all'])) {
			$data['cache_expire_all'] = $this->request->post['cache_expire_all'];
		} elseif (isset($module_info['cache_expire_all'])) {
			$data['cache_expire_all'] = $module_info['cache_expire_all'];
		} else {
			$data['cache_expire_all'] = 36000;
		}

		if (isset($this->request->post['cache_size_limit'])) {
			$data['cache_size_limit'] = $this->request->post['cache_size_limit'];
		} elseif (isset($module_info['cache_size_limit'])) {
			$data['cache_size_limit'] = $module_info['cache_size_limit'];
		} else {
			$data['cache_size_limit'] = 0;
		}

		if (isset($this->request->post['cache_count'])) {
			$data['cache_count'] = $this->request->post['cache_count'];
		} elseif (isset($module_info['cache_count'])) {
			$data['cache_count'] = $module_info['cache_count'];
		} else {
			$data['cache_count'] = 1;
		}

		if (isset($this->request->post['cache_clear'])) {
			$data['cache_clear'] = $this->request->post['cache_clear'];
		} elseif (isset($module_info['cache_clear'])) {
			$data['cache_clear'] = $module_info['cache_clear'];
		} else {
			$data['cache_clear'] = array();
		}

		if (isset($this->request->post['pagespeed_status'])) {
			$data['pagespeed_status'] = $this->request->post['pagespeed_status'];
		} elseif (isset($module_info['pagespeed_status'])) {
			$data['pagespeed_status'] = $module_info['pagespeed_status'];
		} else {
			$data['pagespeed_status'] = true;
		}

		if (isset($this->request->post['pagespeed_onrot'])) {
			$data['pagespeed_onrot'] = $this->request->post['pagespeed_onrot'];
		} elseif (isset($module_info['pagespeed_onrot'])) {
			$data['pagespeed_onrot'] = $module_info['pagespeed_onrot'];
		} else {
			$data['pagespeed_onrot'] = false;
		}

		if (isset($this->request->post['pagespeed_rot'])) {
			$data['pagespeed_rot'] = $this->request->post['pagespeed_rot'];
		} elseif (isset($module_info['pagespeed_rot'])) {
			$data['pagespeed_rot'] = $module_info['pagespeed_rot'];
		} else {
			$data['pagespeed_rot'] = false;
		}

		if (isset($this->request->post['pagespeed_image_lazy_load'])) {
			$data['pagespeed_image_lazy_load'] = $this->request->post['pagespeed_image_lazy_load'];
		} elseif (isset($module_info['pagespeed_image_lazy_load'])) {
			$data['pagespeed_image_lazy_load'] = $module_info['pagespeed_image_lazy_load'];
		} else {
			$data['pagespeed_image_lazy_load'] = 1;
		}

		if (isset($this->request->post['pagespeed_image_first_boot_status'])) {
			$data['pagespeed_image_first_boot_status'] = $this->request->post['pagespeed_image_first_boot_status'];
		} elseif (isset($module_info['pagespeed_image_first_boot_status'])) {
			$data['pagespeed_image_first_boot_status'] = $module_info['pagespeed_image_first_boot_status'];
		} else {
			$data['pagespeed_image_first_boot_status'] = false;
		}

		if (isset($this->request->post['pagespeed_image_first_boot_onrot'])) {
			$data['pagespeed_image_first_boot_onrot'] = $this->request->post['pagespeed_image_first_boot_onrot'];
		} elseif (isset($module_info['pagespeed_image_first_boot_onrot'])) {
			$data['pagespeed_image_first_boot_onrot'] = $module_info['pagespeed_image_first_boot_onrot'];
		} else {
			$data['pagespeed_image_first_boot_onrot'] = array();
		}

		$data['pagespeed_image_first_boot_onrot'] = implode("\r\n", $data['pagespeed_image_first_boot_onrot']);

		if (isset($this->request->post['pagespeed_image_first_boot_rot'])) {
			$data['pagespeed_image_first_boot_rot'] = $this->request->post['pagespeed_image_first_boot_rot'];
		} elseif (isset($module_info['pagespeed_image_first_boot_rot'])) {
			$data['pagespeed_image_first_boot_rot'] = $module_info['pagespeed_image_first_boot_rot'];
		} else {
			$data['pagespeed_image_first_boot_rot'] = array();
		}

		$data['pagespeed_image_first_boot_rot'] = implode("\r\n", $data['pagespeed_image_first_boot_rot']);

		if (isset($this->request->post['pagespeed_image_w_h'])) {
			$data['pagespeed_image_w_h'] = $this->request->post['pagespeed_image_w_h'];
		} elseif (isset($module_info['pagespeed_image_w_h'])) {
			$data['pagespeed_image_w_h'] = $module_info['pagespeed_image_w_h'];
		} else {
			$data['pagespeed_image_w_h'] = false;
		}

		if (isset($this->request->post['pagespeed_image_webp_status'])) {
			$data['pagespeed_image_webp_status'] = $this->request->post['pagespeed_image_webp_status'];
		} elseif (isset($module_info['pagespeed_image_webp_status'])) {
			$data['pagespeed_image_webp_status'] = $module_info['pagespeed_image_webp_status'];
		} else {
			$data['pagespeed_image_webp_status'] = false;
		}

		if (isset($this->request->post['pagespeed_image_webp_convert'])) {
			$data['pagespeed_image_webp_convert'] = $this->request->post['pagespeed_image_webp_convert'];
		} elseif (isset($module_info['pagespeed_image_webp_convert'])) {
			$data['pagespeed_image_webp_convert'] = $module_info['pagespeed_image_webp_convert'];
		} else {
			$data['pagespeed_image_webp_convert'] = 0;
		}

		if (isset($this->request->post['pagespeed_image_webp_quality'])) {
			$data['pagespeed_image_webp_quality'] = $this->request->post['pagespeed_image_webp_quality'];
		} elseif (isset($module_info['pagespeed_image_webp_quality'])) {
			$data['pagespeed_image_webp_quality'] = $module_info['pagespeed_image_webp_quality'];
		} else {
			$data['pagespeed_image_webp_quality'] = 100;
		}

		if (isset($this->request->post['pagespeed_html_lazy_load'])) {
			$data['pagespeed_html_lazy_load'] = $this->request->post['pagespeed_html_lazy_load'];
		} elseif (isset($module_info['pagespeed_html_lazy_load'])) {
			$data['pagespeed_html_lazy_load'] = $module_info['pagespeed_html_lazy_load'];
		} else {
			$data['pagespeed_html_lazy_load'] = false;
		}

		if (isset($this->request->post['pagespeed_html_replace_before'])) {
			$data['pagespeed_html_replace_before'] = $this->request->post['pagespeed_html_replace_before'];
		} elseif (isset($module_info['pagespeed_html_replace_before'])) {
			$data['pagespeed_html_replace_before'] = $module_info['pagespeed_html_replace_before'];
		} else {
			$data['pagespeed_html_replace_before'] = false;
		}

		if (isset($this->request->post['pagespeed_html_replace_after'])) {
			$data['pagespeed_html_replace_after'] = $this->request->post['pagespeed_html_replace_after'];
		} elseif (isset($module_info['pagespeed_html_replace_after'])) {
			$data['pagespeed_html_replace_after'] = $module_info['pagespeed_html_replace_after'];
		} else {
			$data['pagespeed_html_replace_after'] = false;
		}
		
		if (isset($this->request->post['pagespeed_html_min'])) {
			$data['pagespeed_html_min'] = $this->request->post['pagespeed_html_min'];
		} elseif (isset($module_info['pagespeed_html_min'])) {
			$data['pagespeed_html_min'] = $module_info['pagespeed_html_min'];
		} else {
			$data['pagespeed_html_min'] = array();
		}

		if (isset($this->request->post['pagespeed_html_min_tags'])) {
			$data['pagespeed_html_min_tags'] = $this->request->post['pagespeed_html_min_tags'];
		} elseif (isset($module_info['pagespeed_html_min_tags'])) {
			$data['pagespeed_html_min_tags'] = $module_info['pagespeed_html_min_tags'];
		} else {
			$data['pagespeed_html_min_tags'] = ';#|\s\h\t\r\n|<meta|<title>|<link|<style|<script|<article|</article>|<hgroup|</hgroup>|<header|</header>|<main|</main>|<footer|</footer>|<br|<hr>|<p|<h1|</h1>|<h2|</h2>|<h3|</h3>|<h4|</h4>|<h5|</h5>|<h6|</h6>|<button|<div|</div>|<select|<option|<form|</form>|<ul|</ul>|<li|</li>|<head|</head>|<a|</a>|<input|<img';
		}

		if (isset($this->request->post['pagespeed_css_replace_before'])) {
			$data['pagespeed_css_replace_before'] = $this->request->post['pagespeed_css_replace_before'];
		} elseif (isset($module_info['pagespeed_css_replace_before'])) {
			$data['pagespeed_css_replace_before'] = $module_info['pagespeed_css_replace_before'];
		} else {
			$data['pagespeed_css_replace_before'] = false;
		}

		if (isset($this->request->post['pagespeed_css_replace_after'])) {
			$data['pagespeed_css_replace_after'] = $this->request->post['pagespeed_css_replace_after'];
		} elseif (isset($module_info['pagespeed_css_replace_after'])) {
			$data['pagespeed_css_replace_after'] = $module_info['pagespeed_css_replace_after'];
		} else {
			$data['pagespeed_css_replace_after'] = false;
		}

		if (isset($this->request->post['pagespeed_css_min'])) {
			$data['pagespeed_css_min'] = $this->request->post['pagespeed_css_min'];
		} elseif (isset($module_info['pagespeed_css_min'])) {
			$data['pagespeed_css_min'] = $module_info['pagespeed_css_min'];
		} else {
			$data['pagespeed_css_min'] = array();
		}

		if (isset($this->request->post['pagespeed_css_min_links'])) {
			$data['pagespeed_css_min_links'] = $this->request->post['pagespeed_css_min_links'];
		} elseif (isset($module_info['pagespeed_css_min_links'])) {
			$data['pagespeed_css_min_links'] = $module_info['pagespeed_css_min_links'];
		} else {
			$data['pagespeed_css_min_links'] = false;
		}

		if (isset($this->request->post['pagespeed_css_min_download'])) {
			$data['pagespeed_css_min_download'] = $this->request->post['pagespeed_css_min_download'];
		} elseif (isset($module_info['pagespeed_css_min_download'])) {
			$data['pagespeed_css_min_download'] = $module_info['pagespeed_css_min_download'];
		} else {
			$data['pagespeed_css_min_download'] = false;
		}

		if (isset($this->request->post['pagespeed_css_min_exception'])) {
			$data['pagespeed_css_min_exception'] = $this->request->post['pagespeed_css_min_exception'];
		} elseif (isset($module_info['pagespeed_css_min_exception'])) {
			$data['pagespeed_css_min_exception'] = $module_info['pagespeed_css_min_exception'];
		} else {
			$data['pagespeed_css_min_exception'] = false;
		}

		if (isset($this->request->post['pagespeed_css_min_font'])) {
			$data['pagespeed_css_min_font'] = $this->request->post['pagespeed_css_min_font'];
		} elseif (isset($module_info['pagespeed_css_min_font'])) {
			$data['pagespeed_css_min_font'] = $module_info['pagespeed_css_min_font'];
		} else {
			$data['pagespeed_css_min_font'] = false;
		}

		if (isset($this->request->post['pagespeed_css_min_convert'])) {
			$data['pagespeed_css_min_convert'] = $this->request->post['pagespeed_css_min_convert'];
		} elseif (isset($module_info['pagespeed_css_min_convert'])) {
			$data['pagespeed_css_min_convert'] = $module_info['pagespeed_css_min_convert'];
		} else {
			$data['pagespeed_css_min_convert'] = false;
		}

		if (isset($this->request->post['pagespeed_css_min_display'])) {
			$data['pagespeed_css_min_display'] = $this->request->post['pagespeed_css_min_display'];
		} elseif (isset($module_info['pagespeed_css_min_display'])) {
			$data['pagespeed_css_min_display'] = $module_info['pagespeed_css_min_display'];
		} else {
			$data['pagespeed_css_min_display'] = false;
		}

		if (isset($this->request->post['pagespeed_css_inline_transfer'])) {
			$data['pagespeed_css_inline_transfer'] = $this->request->post['pagespeed_css_inline_transfer'];
		} elseif (isset($module_info['pagespeed_css_inline_transfer'])) {
			$data['pagespeed_css_inline_transfer'] = $module_info['pagespeed_css_inline_transfer'];
		} else {
			$data['pagespeed_css_inline_transfer'] = 0;
		}

		if (isset($this->request->post['pagespeed_css_events'])) {
			$data['pagespeed_css_events'] = $this->request->post['pagespeed_css_events'];
		} elseif (!empty($module_info['pagespeed_css_events'])) {
			$data['pagespeed_css_events'] = $module_info['pagespeed_css_events'];
		} else {
			$data['pagespeed_css_events'] = array(
				'pagehide',
				'scroll',
				'mouseover',
				'touchstart'
			);
			$data['pagespeed_css_events'] = implode("\r\n", $data['pagespeed_css_events']);
		}

		if (isset($this->request->post['pagespeed_css_critical'])) {
			$data['pagespeed_css_critical'] = $this->request->post['pagespeed_css_critical'];
		} elseif (isset($module_info['pagespeed_css_critical'])) {
			$data['pagespeed_css_critical'] = $module_info['pagespeed_css_critical'];
		} else {
			$data['pagespeed_css_critical'] = false;
		}

		if (isset($this->request->post['pagespeed_css_critical_all'])) {
			$data['pagespeed_css_critical_all'] = $this->request->post['pagespeed_css_critical_all'];
		} elseif (isset($module_info['pagespeed_css_critical_all'])) {
			$data['pagespeed_css_critical_all'] = $module_info['pagespeed_css_critical_all'];
		} else {
			$data['pagespeed_css_critical_all'] = false;
		}

		if (isset($this->request->post['pagespeed_css_critical_offset'])) {
			$data['pagespeed_css_critical_offset'] = $this->request->post['pagespeed_css_critical_offset'];
		} elseif (isset($module_info['pagespeed_css_critical_offset'])) {
			$data['pagespeed_css_critical_offset'] = $module_info['pagespeed_css_critical_offset'];
		} else {
			$data['pagespeed_css_critical_offset'] = 50;
		}

		if (isset($this->request->post['pagespeed_css_critical_time'])) {
			$data['pagespeed_css_critical_time'] = $this->request->post['pagespeed_css_critical_time'];
		} elseif (isset($module_info['pagespeed_css_critical_time'])) {
			$data['pagespeed_css_critical_time'] = $module_info['pagespeed_css_critical_time'];
		} else {
			$data['pagespeed_css_critical_time'] = 1;
		}

		if (isset($this->request->post['pagespeed_css_critical_elements'])) {
			$data['pagespeed_css_critical_elements'] = $this->request->post['pagespeed_css_critical_elements'];
		} elseif (isset($module_info['pagespeed_css_critical_elements'])) {
			$data['pagespeed_css_critical_elements'] = $module_info['pagespeed_css_critical_elements'];
		} else {
			$data['pagespeed_css_critical_elements'] = array(
				'font-face',
				'keyframes',
				'::after, ::before',
				']'
			);
			$data['pagespeed_css_critical_elements'] = implode("\r\n", $data['pagespeed_css_critical_elements']);
		}

		if (isset($this->request->post['pagespeed_css_critical_links'])) {
			$data['pagespeed_css_critical_links'] = $this->request->post['pagespeed_css_critical_links'];
		} elseif (isset($module_info['pagespeed_css_critical_links'])) {
			$data['pagespeed_css_critical_links'] = $module_info['pagespeed_css_critical_links'];
		} else {
			$data['pagespeed_css_critical_links'] = array(
				'?route=account/login',
				'?route=checkout/cart',
				'?route=checkout/checkout',
				'?route=common/home',
				'?route=error/not_found',
				'?route=information/contact',
				'?route=information/sitemap',
				'?route=product/special'
			);
			$data['pagespeed_css_critical_links'] = implode("\r\n", $data['pagespeed_css_critical_links']);
		}

		if (isset($this->request->post['pagespeed_css_style'])) {
			$data['pagespeed_css_style'] = $this->getFile('replace', 'css');
		} elseif (!empty($module_info['pagespeed_css_style'])) {
			$data['pagespeed_css_style'] = $this->getFile('replace', 'css');
		} else {
			$data['pagespeed_css_style'] = false;
		}

		if (isset($this->request->post['pagespeed_js_replace_before'])) {
			$data['pagespeed_js_replace_before'] = $this->request->post['pagespeed_js_replace_before'];
		} elseif (isset($module_info['pagespeed_js_replace_before'])) {
			$data['pagespeed_js_replace_before'] = $module_info['pagespeed_js_replace_before'];
		} else {
			$data['pagespeed_js_replace_before'] = false;
		}

		if (isset($this->request->post['pagespeed_js_replace_after'])) {
			$data['pagespeed_js_replace_after'] = $this->request->post['pagespeed_js_replace_after'];
		} elseif (isset($module_info['pagespeed_js_replace_after'])) {
			$data['pagespeed_js_replace_after'] = $module_info['pagespeed_js_replace_after'];
		} else {
			$data['pagespeed_js_replace_after'] = false;
		}

		if (isset($this->request->post['pagespeed_js_min'])) {
			$data['pagespeed_js_min'] = $this->request->post['pagespeed_js_min'];
		} elseif (isset($module_info['pagespeed_js_min'])) {
			$data['pagespeed_js_min'] = $module_info['pagespeed_js_min'];
		} else {
			$data['pagespeed_js_min'] = array();
		}

		if (isset($this->request->post['pagespeed_js_min_links'])) {
			$data['pagespeed_js_min_links'] = $this->request->post['pagespeed_js_min_links'];
		} elseif (isset($module_info['pagespeed_js_min_links'])) {
			$data['pagespeed_js_min_links'] = $module_info['pagespeed_js_min_links'];
		} else {
			$data['pagespeed_js_min_links'] = false;
		}

		if (isset($this->request->post['pagespeed_js_min_download'])) {
			$data['pagespeed_js_min_download'] = $this->request->post['pagespeed_js_min_download'];
		} elseif (isset($module_info['pagespeed_js_min_download'])) {
			$data['pagespeed_js_min_download'] = $module_info['pagespeed_js_min_download'];
		} else {
			$data['pagespeed_js_min_download'] = false;
		}

		if (isset($this->request->post['pagespeed_js_min_exception'])) {
			$data['pagespeed_js_min_exception'] = $this->request->post['pagespeed_js_min_exception'];
		} elseif (isset($module_info['pagespeed_js_min_exception'])) {
			$data['pagespeed_js_min_exception'] = $module_info['pagespeed_js_min_exception'];
		} else {
			$data['pagespeed_js_min_exception'] = false;
		}

		if (isset($this->request->post['pagespeed_js_inline_event'])) {
			$data['pagespeed_js_inline_event'] = $this->request->post['pagespeed_js_inline_event'];
		} elseif (isset($module_info['pagespeed_js_inline_event'])) {
			$data['pagespeed_js_inline_event'] = $module_info['pagespeed_js_inline_event'];
		} else {
			$data['pagespeed_js_inline_event'] = false;
		}

		if (isset($this->request->post['pagespeed_js_inline_event_time'])) {
			$data['pagespeed_js_inline_event_time'] = $this->request->post['pagespeed_js_inline_event_time'];
		} elseif (isset($module_info['pagespeed_js_inline_event_time'])) {
			$data['pagespeed_js_inline_event_time'] = $module_info['pagespeed_js_inline_event_time'];
		} else {
			$data['pagespeed_js_inline_event_time'] = 0;
		}

		if (isset($this->request->post['pagespeed_js_inline_transfer'])) {
			$data['pagespeed_js_inline_transfer'] = $this->request->post['pagespeed_js_inline_transfer'];
		} elseif (isset($module_info['pagespeed_js_inline_transfer'])) {
			$data['pagespeed_js_inline_transfer'] = $module_info['pagespeed_js_inline_transfer'];
		} else {
			$data['pagespeed_js_inline_transfer'] = 0;
		}

		if (isset($this->request->post['pagespeed_js_inline_transfer_onrot'])) {
			$data['pagespeed_js_inline_transfer_onrot'] = $this->request->post['pagespeed_js_inline_transfer_onrot'];
		} elseif (isset($module_info['pagespeed_js_inline_transfer_onrot'])) {
			$data['pagespeed_js_inline_transfer_onrot'] = $module_info['pagespeed_js_inline_transfer_onrot'];
		} else {
			$data['pagespeed_js_inline_transfer_onrot'] = false;
		}

		if (isset($this->request->post['pagespeed_js_inline_exception'])) {
			$data['pagespeed_js_inline_exception'] = $this->request->post['pagespeed_js_inline_exception'];
		} elseif (isset($module_info['pagespeed_js_inline_exception'])) {
			$data['pagespeed_js_inline_exception'] = $module_info['pagespeed_js_inline_exception'];
		} else {
			$data['pagespeed_js_inline_exception'] = false;
		}

		if (isset($this->request->post['pagespeed_js_events'])) {
			$data['pagespeed_js_events'] = $this->request->post['pagespeed_js_events'];
		} elseif (!empty($module_info['pagespeed_js_events'])) {
			$data['pagespeed_js_events'] = $module_info['pagespeed_js_events'];
		} else {
			$data['pagespeed_js_events'] = array(
				'pagehide',
				'scroll',
				'mouseover',
				'touchstart'
			);
			$data['pagespeed_js_events'] = implode("\r\n", $data['pagespeed_js_events']);
		}

		if (isset($this->request->post['pagespeed_js_script'])) {
			$data['pagespeed_js_script'] = $this->getFile('replace', 'js');
		} elseif (!empty($module_info['pagespeed_js_script'])) {
			$data['pagespeed_js_script'] = $this->getFile('replace', 'js');
		} else {
			$data['pagespeed_js_script'] = false;
		}

		if (isset($this->request->post['database_status'])) {
			$data['database_status'] = $this->request->post['database_status'];
		} elseif (isset($module_info['database_status'])) {
			$data['database_status'] = $module_info['database_status'];
		} else {
			$data['database_status'] = false;
		}

		if (isset($this->request->post['database_links'])) {
			$data['database_links'] = $this->request->post['database_links'];
		} elseif (isset($module_info['database_links'])) {
			$data['database_links'] = $module_info['database_links'];
		} else {
			$data['database_links'] = false;
		}

		if (isset($this->request->post['cron_pregeneration'])) {
			$data['cron_pregeneration'] = $this->request->post['cron_pregeneration'];
		} elseif (isset($module_info['cron_pregeneration'])) {
			$data['cron_pregeneration'] = $module_info['cron_pregeneration'];
		} else {
			$data['cron_pregeneration'] = false;
		}

		if (isset($this->request->post['cron_pregeneration_query_count'])) {
			$data['cron_pregeneration_query_count'] = $this->request->post['cron_pregeneration_query_count'];
		} elseif (isset($module_info['cron_pregeneration_query_count'])) {
			$data['cron_pregeneration_query_count'] = $module_info['cron_pregeneration_query_count'];
		} else {
			$data['cron_pregeneration_query_count'] = 10;
		}

		if (isset($this->request->post['documentation_status'])) {
			$data['documentation_status'] = $this->request->post['documentation_status'];
		} elseif (isset($module_info['documentation_status'])) {
			$data['documentation_status'] = $module_info['documentation_status'];
		} else {
			$data['documentation_status'] = false;
		}

		if (isset($this->request->post['support_update_order_id'])) {
			$data['support_update_order_id'] = $this->request->post['support_update_order_id'];
		} elseif (isset($module_info['support_update_order_id'])) {
			$data['support_update_order_id'] = $module_info['support_update_order_id'];
		} else {
			$data['support_update_order_id'] = false;
		}

		if (isset($this->request->post['support_update_key'])) {
			$data['support_update_key'] = $this->request->post['support_update_key'];
		} elseif (isset($module_info['support_update_key'])) {
			$data['support_update_key'] = $module_info['support_update_key'];
		} else {
			$data['support_update_key'] = false;
		}

		if (isset($this->session->data['bus_cache_update_message'])) {
			$data['support_update'] = $this->session->data['bus_cache_update_message'];
		} else {
			$data['support_update'] = false;
		}

		if (isset($this->request->post['support_stats_status'])) {
			$data['support_stats_status'] = $this->request->post['support_stats_status'];
		} elseif (isset($module_info['support_stats_status'])) {
			$data['support_stats_status'] = $module_info['support_stats_status'];
		} else {
			$data['support_stats_status'] = false;
		}

		$data['support_cache_status'] = true;

		$files_cache = array();
		$files_cache['cache'] = array();
		$files_cache['cache']['total'] = 0;
		$files_cache['cache']['size'] = 0;
		$files_cache['cache_minify'] = array();
		$files_cache['cache_minify']['total'] = 0;
		$files_cache['cache_minify']['size'] = 0;
		$files_cache['image'] = array();
		$files_cache['image']['total'] = 0;
		$files_cache['image']['size'] = 0;
		$files_cache['image_cache'] = array();
		$files_cache['image_cache']['total'] = 0;
		$files_cache['image_cache']['size'] = 0;
		$files_cache['session'] = array();
		$files_cache['session']['total'] = 0;
		$files_cache['session']['size'] = 0;
		$files_cache['session_db'] = array();
		$files_cache['session_db']['total'] = 0;
		$files_cache['session_db']['size'] = 0;
		$files_cache['session_cart'] = array();
		$files_cache['session_cart']['total'] = 0;
		$files_cache['session_cart']['size'] = 0;

		$cache = $this->config->get('bus_cache_stats');

		if ($cache && is_array($cache)) {
			$files_cache = array_merge($files_cache, $cache);
		} else {
			if ($data['support_stats_status']) {
				$data['support_cache_status'] = false;
			}
		}

		$data['support_cache_total'] = $files_cache['cache']['total'];
		$data['support_cache_size'] = $this->fileSizeConvert($files_cache['cache']['size']);
		$data['support_cache_minify_total'] = $files_cache['cache_minify']['total'];
		$data['support_cache_minify_size'] = $this->fileSizeConvert($files_cache['cache_minify']['size']);
		$data['support_image_total'] = $files_cache['image']['total'];
		$data['support_image_size'] = $this->fileSizeConvert($files_cache['image']['size']);
		$data['support_image_cache_total'] = $files_cache['image_cache']['total'];
		$data['support_image_cache_size'] = $this->fileSizeConvert($files_cache['image_cache']['size']);
		$data['support_session_total'] = $files_cache['session']['total'];
		$data['support_session_size'] = $this->fileSizeConvert($files_cache['session']['size']);
		$data['support_session_db_total'] = $files_cache['session_db']['total'];
		$data['support_session_db_size'] = $this->fileSizeConvert($files_cache['session_db']['size']);
		$data['support_session_cart_total'] = $files_cache['session_cart']['total'];
		$data['support_session_cart_size'] = $this->fileSizeConvert($files_cache['session_cart']['size']);

		if (isset($this->request->post['support_disc_size_limit'])) {
			$data['support_disc_size_limit'] = $this->request->post['support_disc_size_limit'];
		} elseif (isset($module_info['support_disc_size_limit'])) {
			$data['support_disc_size_limit'] = $module_info['support_disc_size_limit'];
		} else {
			$data['support_disc_size_limit'] = 0;
		}

		if ($data['support_disc_size_limit']) {
			$data['support_disc_total'] = $this->fileSizeConvert($data['support_disc_size_limit'] * 1024 * 1024);
		} else {
			$data['support_disc_total'] = $this->fileSizeConvert(disk_total_space('.'));
		}

		if ($data['support_disc_size_limit']) {
			$size = 0;
			$size += $files_cache['cache']['size'];
			$size += $files_cache['image']['size'];
			$size += $files_cache['session']['size'];
			$size += $files_cache['session_db']['size'];
			$size += $files_cache['session_cart']['size'];
			$size += $this->config->get('bus_cache_size_limit');

			$data['support_disc_free'] = $this->fileSizeConvert(($data['support_disc_size_limit'] * 1024 * 1024) - $size);
		} else {
			$data['support_disc_free'] = $this->fileSizeConvert(disk_free_space('.'));
		}

		if (isset($this->request->post['support_session_fix'])) {
			$data['support_session_fix'] = $this->request->post['support_session_fix'];
		} elseif (isset($module_info['support_session_fix'])) {
			$data['support_session_fix'] = $module_info['support_session_fix'];
		} else {
			$data['support_session_fix'] = false;
		}

		if (isset($this->request->post['support_disc_warning'])) {
			$data['support_disc_warning'] = $this->request->post['support_disc_warning'];
		} elseif (isset($module_info['support_disc_warning'])) {
			$data['support_disc_warning'] = $module_info['support_disc_warning'];
		} else {
			$data['support_disc_warning'] = false;
		}

		if (isset($this->request->post['support_debug'])) {
			$data['support_debug'] = $this->request->post['support_debug'];
		} elseif (isset($module_info['support_debug'])) {
			$data['support_debug'] = $module_info['support_debug'];
		} else {
			$data['support_debug'] = false;
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		if ($this->version_oc >= 4) {
			extract($data);

			ob_start();

			require(DIR_OPENCART . $this->paths['view']['bus_cache'] . '.tpl');

			$template = ob_get_clean();
		} else {
			if ($this->version_oc >= 3) {
				$template_engine = $this->registry->get('config')->get('template_engine');
				$this->registry->get('config')->set('template_engine', 'template');
			}

			$template = $this->load->view($this->paths['view']['bus_cache'], $data);
			
			if ($this->version_oc >= 3) {
				$this->registry->get('config')->set('template_engine', $template_engine);
				$this->response->addHeader('Content-Type: text/html; charset=utf-8');
			}
		}

		$this->response->setOutput($template);
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', $this->paths['controller']['bus_cache'])) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (isset($this->request->post['pagespeed_image_webp_convert']) && $this->request->post['pagespeed_image_webp_convert'] == 1 && !empty($this->request->post['pagespeed_image_webp_status']) && !extension_loaded('gd')) {
			if (function_exists('dl') && !dl('gd.so')) {
				$this->error['warning'] = 'Библиотека GD не установлена, как ваш сайт работает?';
			} else {
				$this->error['warning'] = 'Библиотека GD не установлена, как ваш сайт работает?';
			}
		} elseif (isset($this->request->post['pagespeed_image_webp_convert']) && $this->request->post['pagespeed_image_webp_convert'] == 2 && !empty($this->request->post['pagespeed_image_webp_status']) && !extension_loaded('imagick')) {
			$this->error['warning'] = 'Библиотека ImageMagick не установлена, как ваш сайт работает?';
		}

		return !$this->error;
	}

	// установка
	public function install() {
		// посылыаем на йух
		$this->load->language($this->paths['language']['bus_cache']);

		if (!$this->user->hasPermission('modify', $this->paths['controller']['module'])) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			// создаём таблицу модуля
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_cache` (`module_id` int(11) NOT NULL AUTO_INCREMENT, `setting` text NOT NULL, PRIMARY KEY (`module_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_cache_description` (`module_id` int(11) NOT NULL, `language_id` int(11) NOT NULL, `setting` text NOT NULL, PRIMARY KEY (`module_id`, `language_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");
			//$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_cache_account` (`customer_id` int(11) NOT NULL, `setting` text NOT NULL, PRIMARY KEY (`customer_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");

			// создаём индекс status товара, если его нет
			/* $result = $this->db->query("SHOW INDEX FROM `" . DB_PREFIX . "product` where Key_name='status'");
			if ($result->num_rows == 0) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ADD KEY status (status)");
			} */

			if ($this->version_oc < 4) {
				// включаем модификатор модуля, если заливался в БД
				/* $this->load->model($this->paths['model']['modification']);

				if ($this->registry->has($this->paths['model']['modification_path'])) {
					$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

					if ($code) {
						$this->{$this->paths['model']['modification_path']}->enableModification($code['modification_id']);
					}
				} */

				// удаляем модификатор модуля, если заливался в БД
				$this->load->model($this->paths['model']['modification']);

				if ($this->registry->has($this->paths['model']['modification_path'])) {
					$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

					if ($code) {
						$this->{$this->paths['model']['modification_path']}->deleteModification($code['modification_id']);
					}
				}

				// создаём копию из резерва и переименовываем модификатор, если заливался в system
				$file = $this->getFile(false, 'xml_');

				$this->setFile(false, $file, 'xml');
			}

			// создаём событие
			if ($this->version_oc >= 4) {
				/* OC 2.1
				addEvent($code, $trigger, $action)
				OC 2.3
				addEvent($code, $trigger, $action, $status = 1)
				OC 3.0
				addEvent($code, $trigger, $action, $status = 1, $sort_order = 0)
				OC 4.0
				addEvent($code, $description, $trigger, $action, $status = true, $sort_order = 0) */
				$this->load->model($this->paths['model']['event']);

				if ($this->registry->has($this->paths['model']['event_path'])) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_clear'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_image'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_after'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_controller_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_model_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_model_module_id'");

					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_clear', `trigger` = 'admin/model/*/after', `action` = '" . $this->paths['controller']['bus_cache'] . $this->paths['slash'] . "clearEvent', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_image', `trigger` = 'catalog/model/tool/image/resize/after', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "image', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_before', `trigger` = 'catalog/controller/*/before', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "start', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '-1'" : false));
					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_after', `trigger` = 'catalog/controller/*/after', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "output', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '9999999'" : false));
					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_controller_before', `trigger` = 'catalog/controller/*/before', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "controller', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_model_before', `trigger` = 'catalog/model/*/before', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "model', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
					$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_model_module_id', `trigger` = 'catalog/model/setting/module/getModule/after', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "moduleId', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '1'" : false));
				}
			}

			// изменяем файлы
			if ($this->version_oc >= 4) {
				$module_paths = array(
					DIR_EXTENSION . 'bus_cache/catalog/controller/event/bus_cache.php',
					DIR_EXTENSION . 'bus_cache/system/library/bus_cache.php',
				);

				foreach (glob(DIR_EXTENSION . 'bus_cache/system/library/bus_cache/*') as $path) {
					$module_paths[] = $path;
				}

				foreach ($module_paths as $path) {
					if (is_file($path)) {
						file_put_contents($path, str_replace(array('namespace Bus_Cache', '//namespace Opencart'), array('//namespace Bus_Cache', 'namespace Opencart'), file_get_contents($path)));
					}
				}

				$path = DIR_SYSTEM . 'library/response.php';
				if (is_file($path)) {
					$file = file_get_contents($path);
					if (strpos($file, 'busGetHeaders') === false) {
						$file = str_replace("class Response {\r\n", "class Response {\r\npublic function busGetHeaders() {return \$this->headers;}\r\n", $file);
						$file = str_replace("class Response {\n", "class Response {\npublic function busGetHeaders() {return \$this->headers;}\n", $file);
						file_put_contents($path, $file);
					}
				}

				file_put_contents(DIR_EXTENSION . 'bus_cache/system/.htaccess', '<Files *.*>' . PHP_EOL . 'Order Deny,Allow' . PHP_EOL . 'Deny from all' . PHP_EOL . '</Files>');
			}

			// чистим кэши необходимые для модуля
			//$this->cache->delete('*');
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

			$url_ocmod_clear = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'clear', $this->paths['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'clearlog', $this->paths['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'refresh', $this->paths['token'], true);
			$url_ocmod_refresh = str_ireplace('&amp;', '&', $url_ocmod_refresh);

			$text = <<<HTML
<script><!--
	$('a, button, select, input').attr('disabled', true);

	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	if ($('#alert').length == 0) {
		$('html, body').animate({scrollTop: offsetTop}, 200, 'linear');
	}

	$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_install <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout('ocmodClearlog()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_install <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout('ocmodRefresh()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_install <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout('cacheClear()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_install <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
		}
	});
}

function cacheClear() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_cache_clear <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
	setTimeout(successModule, 2000);
}

function successModule() {
	if ($('#alert').length > 0) {
		$('#alert').removeClass('toast-container');
	}
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success_install <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
	$('a, button, select, input').removeAttr('disabled');
}
//--></script>
HTML;

			if ($this->version_oc >= 4) {
				//$this->response->addHeader('Content-Type: application/json');
				header('Content-Type: application/json', true);
				exit(json_encode(array('success' => $text), JSON_HEX_AMP));
			} elseif ($this->version_oc >= 2.3) {
				$this->language->set('text_success', $text);
			} else {
				$this->session->data['success'] = $text;

				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'], true));
			}
		} else {
			if ($this->version_oc >= 4) {
				//$this->response->addHeader('Content-Type: application/json');
				header('Content-Type: application/json', true);
				exit(json_encode(array('warning' => $this->error['warning']), JSON_HEX_AMP));
			} else {
				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'], true));
			}
		}
	}

	// удаление
	public function uninstall() {
		// посылыаем на йух
		$this->load->language($this->paths['language']['bus_cache']);

		if (!$this->user->hasPermission('modify', $this->paths['controller']['module'])) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			// Очищаем таблицу модуля
			$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code`='bus_cache'");
			$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code`='bus_cache_size_limit'");
			$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code`='bus_cache_stats'");
			$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code`='module_bus_cache'");
			//$this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "bus_cache`");
			//$this->db->query("TRUNCATE TABLE `" . DB_PREFIX . "bus_cache_description`");

			if ($this->version_oc < 4) {
				// выключаем модификатор модуля
				/* $this->load->model($this->paths['model']['modification']);

				if ($this->registry->has($this->paths['model']['modification_path'])) {
					$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

					if ($code) {
						$this->{$this->paths['model']['modification_path']}->disableModification($code['modification_id']);
					}
				} */

				// удаляем копию модификатора созданную из резерва, если заливался в system
				$this->deleteFile(false, 'xml');
			}

			// удаляем событие
			if ($this->version_oc >= 4) {
				$this->load->model($this->paths['model']['event']);

				if ($this->registry->has($this->paths['model']['event_path'])) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_clear'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_image'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_after'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_controller_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_model_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_model_module_id'");
				}
			}

			// изменяем файлы
			if ($this->version_oc >= 4) {
				$module_paths = array(
					DIR_EXTENSION . 'bus_cache/catalog/controller/event/bus_cache.php',
					DIR_EXTENSION . 'bus_cache/system/library/bus_cache.php',
				);

				foreach (glob(DIR_EXTENSION . 'bus_cache/system/library/bus_cache/*') as $path) {
					$module_paths[] = $path;
				}

				foreach ($module_paths as $path) {
					if (is_file($path)) {
						file_put_contents($path, str_replace(array('//namespace Bus_Cache', 'namespace Opencart'), array('namespace Bus_Cache', '//namespace Opencart'), file_get_contents($path)));
					}
				}
			}

			// изменяем файлы
			if ($this->version_oc >= 4) {
				$path = DIR_SYSTEM . 'library/response.php';
				if (is_file($path)) {
					$file = file_get_contents($path);
					if (strpos($file, 'busGetHeaders') !== false) {
						$file = str_replace("public function busGetHeaders() {return \$this->headers;}\r\n", '', $file);
						$file = str_replace("public function busGetHeaders() {return \$this->headers;}\n", '', $file);
						file_put_contents($path, $file);
					}
				}
			}

			// чистим кэши необходимые для модуля
			//$this->cache->delete('*');
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

			$url_uninstall_files = $this->url->link($this->paths['controller']['bus_cache'] . $this->paths['slash'] . 'uninstallFiles', $this->paths['token'], true);
			$url_uninstall_files = str_ireplace('&amp;', '&', $url_uninstall_files);
			$url_ocmod_clear = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'clear', $this->paths['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'clearlog', $this->paths['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'refresh', $this->paths['token'], true);
			$url_ocmod_refresh = str_ireplace('&amp;', '&', $url_ocmod_refresh);
			$version_oc = $this->version_oc;

			$text = <<<HTML
<style>
button.close{padding:0;background:transparent;border:0;-webkit-appearance:none}
.close {float:right;font-size:18px;font-weight:bold;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:0.2;filter:alpha(opacity=20)}
.close:hover,
.close:focus{color:#000;text-decoration:none;cursor:pointer;opacity:0.5;filter:alpha(opacity=50)}
</style>
<script><!--
	$('a, button, select, input').attr('disabled', true);

	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	if ($('#alert').length == 0) {
		$('html, body').animate({scrollTop: offsetTop}, 200, 'linear');
	}

	$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout('ocmodClearlog()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout('ocmodRefresh()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout('cacheClear()', 2000);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
		}
	});
}
function cacheClear() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_cache_clear <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
	setTimeout(successModule, 2000);
}

function successModule() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
	if ($version_oc < 4) {
		$('.alert-success').after('<a type="button" onclick="uninstallFiles();" class="btn btn-info" style="width:100%; pointer-events: auto;" data-dismiss="alert"><i class="fa fa-trash-o"></i> $button_files_clear</a>');
	}
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> ' + html + ' =( <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			if (xhr) {
				$('.alert-danger').html('<i class="fa fa-check-circle"></i> ' + thrownError + ' ' + xhr.statusText + ' ' + xhr.responseText + ' =( <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
			} else {
				$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
			}
		}
	});
}
//--></script>
HTML;

			if ($this->version_oc >= 4) {
				//$this->response->addHeader('Content-Type: application/json');
				header('Content-Type: application/json', true);
				exit(json_encode(array('success' => $text), JSON_HEX_AMP));
			} elseif ($this->version_oc >= 2.3) {
				$this->language->set('text_success', $text);
			} else {
				$this->session->data['success'] = $text;

				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'], true));
			}
		} else {
			if ($this->version_oc >= 4) {
				//$this->response->addHeader('Content-Type: application/json');
				header('Content-Type: application/json', true);
				exit(json_encode(array('warning' => $this->error['warning']), JSON_HEX_AMP));
			} else {
				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'], true));
			}
		}
	}

	// удаление файлов модуля
	public function uninstallFiles() {
		if ($this->version_oc >= 4) {
			return true;
		}
		$this->load->language($this->paths['language']['bus_cache']);

		// посылыаем на йух
		if (!$this->user->hasPermission('modify', $this->paths['controller']['module'])) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			// удаляем права администратора
			$this->load->model('user/user_group');

			foreach ($this->model_user_user_group->getUserGroups() as $result) {
				foreach (array('access', 'modify') as $type) {
					$user_group_query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "user_group WHERE user_group_id = '" . (int)$result['user_group_id'] . "'");

					if ($user_group_query->num_rows) {
						$data = json_decode($user_group_query->row['permission'], true);

						if (isset($data[$type])) {
							$data[$type] = array_diff($data[$type], array($this->paths['controller']['bus_cache']));
						}

						$this->db->query("UPDATE " . DB_PREFIX . "user_group SET permission = '" . $this->db->escape(json_encode($data)) . "' WHERE user_group_id = '" . (int)$result['user_group_id'] . "'");
					}
				}
			}

			// удаляем таблицу модуля
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_cache`");
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_cache_description`");
			//$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_cache_account`");

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
			if ($this->version_oc >= 4) {
				$this->load->model($this->paths['model']['event']);

				if ($this->registry->has($this->paths['model']['event_path'])) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_clear'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_image'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_after'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_controller_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_model_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_model_module_id'");
				}
			}

			// готовим данные для php
			$db_paths = array(
				//DB_PREFIX . 'bus_cache_geo',
			);

			// 4.0 - 4.1 OpenCart
			if ($this->version_oc >= 4) {
				$module_paths = array(
					DIR_EXTENSION . 'bus_cache[NAGIBATOR]'
				);
			} else {
				$module_paths = array(
					// 2.0 - 2.2 OpenCart
					DIR_APPLICATION . 'controller/module/bus_cache.php',
					//DIR_APPLICATION . 'model/module/bus_cache.php',
					DIR_APPLICATION . 'view/template/module/bus_cache',
					//DIR_CATALOG . 'controller/module/bus_cache.php',
					//DIR_CATALOG . 'model/module/bus_cache.php',
					// 2.3 - 3.1 OpenCart
					DIR_APPLICATION . 'controller/extension/module/bus_cache.php',
					//DIR_APPLICATION . 'model/extension/module/bus_cache.php',
					DIR_APPLICATION . 'view/template/extension/module/bus_cache',
					DIR_CATALOG . 'controller/event/bus_cache.php',
					//DIR_CATALOG . 'controller/extension/module/bus_cache.php',
					//DIR_CATALOG . 'model/extension/module/bus_cache.php',
					DIR_IMAGE . 'bus_cache[NAGIBATOR]',
					//DIR_LOGS . 'bus_cache',
					DIR_SYSTEM . 'library/bus_cache[NAGIBATOR]',
					DIR_SYSTEM . 'library/bus_cache.ocmod.xml_',
					DIR_SYSTEM . 'library/bus_cache_controller.ocmod.xml_',
					DIR_SYSTEM . 'library/bus_cache_model.ocmod.xml_',
					DIR_SYSTEM . 'library/bus_cache_session_fix.ocmod.xml_',
					DIR_SYSTEM . 'library/bus_cache_webp.ocmod.xml_',
					DIR_SYSTEM . 'library/bus_cube/bus_cache[NAGIBATOR]',
					DIR_SYSTEM . 'library/bus_cube',
					DIR_SYSTEM . 'bus_cache.ocmod.xml',
					DIR_SYSTEM . 'bus_cache_webp.ocmod.xml',
					DIR_SYSTEM . 'bus_cache_session_fix.ocmod.xml',
				);

				// проверяем и удаляем со всех языковых файлов
				foreach (glob(DIR_APPLICATION . 'language/*') as $path) {
					$module_paths[] = $path . '/module/bus_cache[NAGIBATOR]';
					$module_paths[] = $path . '/extension/module/bus_cache[NAGIBATOR]';
				}

				foreach (glob(DIR_CATALOG . 'language/*') as $path) {
					$module_paths[] = $path . '/module/bus_cache[NAGIBATOR]';
					$module_paths[] = $path . '/extension/module/bus_cache[NAGIBATOR]';
				}

				// проверяем и удаляем со всех тем
				foreach (glob(DIR_CATALOG . 'view/theme/*') as $path) {
					$module_paths[] = $path . '/stylesheet/bus_cache[NAGIBATOR]';
					$module_paths[] = $path . '/javascript/bus_cache[NAGIBATOR]';
					$module_paths[] = $path . '/javascript';
					$module_paths[] = $path . '/template/module/bus_cache[NAGIBATOR]';
					$module_paths[] = $path . '/template/extension/module/bus_cache[NAGIBATOR]';
				}
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

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($text, JSON_HEX_AMP));
		} else {
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($this->error['warning'], JSON_HEX_AMP));
		}
	}

	private function deleteDir($dirname, $ex = array(), $nagibator_all = false) {
		if (!$nagibator_all) {
			$this->load->language($this->paths['language']['bus_cache']);
		}

		$text = false;
		$nagibator = false;

		// мягко нагибаем
		if (strpos($dirname, '[NAGIBATOR]') !== false) {
			$dirname = str_replace('[NAGIBATOR]', '', $dirname);
			$nagibator = true;
		}

		$files = glob($dirname . '*', GLOB_NOSORT);

		if ($files) {
			foreach ($files as $dirname) {
				$filename = basename($dirname);

				if (file_exists($dirname) && !in_array($filename, $ex)) {
					if (is_dir($dirname)) {
						$dir_del = true;

						// нагибаем по иерархии
						if ($nagibator || $nagibator_all) {
							$text .= $this->deleteDir($dirname . DIRECTORY_SEPARATOR, $ex, true);
						}

						// проверяем пустая-ли папка
						$dir = opendir($dirname);
						while (($filename = readdir($dir)) !== false) {
							if (!in_array($filename, array(".", ".."))) {
								$dir_del = false;
							}
						}
						closedir($dir);

						// удаляем пустую папку
						if ($dir_del) {
							rmdir($dirname);
							$text .= "\n" . '<br>' . $this->language->get('success_uninstall_folder') . $dirname;
						}
					} else {
						// удаляем файлы кроме index.html и .htaccess или все при явном нагибании
						if ($nagibator_all || !in_array($filename, array('index.html', '.htaccess'))) {
							@unlink($dirname);
							$text .= "\n" . '<br>' . $this->language->get('success_uninstall_file') . $dirname;
						}
					}
				}
			}
		}

		return $text;
	}

	private function update() {
		$version = $this->configGet('version');

		if ($this->validate() && ($this->request->server['REQUEST_METHOD'] != 'POST') && $version && version_compare($this->version, $version, '>')) {
			if (version_compare('1.0.15', $version, '>')) {
				$this->load->model('setting/setting');

				$module_info = $this->configGet();

				if (!empty($module_info['pagespeed_lazy_load_html'])) {
					$module_info['pagespeed_html_lazy_load'] = $module_info['pagespeed_lazy_load_html'];
				}
				if (!empty($module_info['pagespeed_replace'])) {
					$module_info['pagespeed_html_replace_before'] = $module_info['pagespeed_replace'];
				}
				if (!empty($module_info['pagespeed_html_replace'])) {
					$module_info['pagespeed_html_replace_before'] = $module_info['pagespeed_html_replace'];
				}
				if (!empty($module_info['pagespeed_html_min']) && $module_info['pagespeed_html_min'] < 4 && !is_array($module_info['pagespeed_html_min'])) {
					$min_data = array();
					foreach (range(1, $module_info['pagespeed_html_min']) as $result) {
						$min_data[$result] = $result;
					}
					$module_info['pagespeed_html_min'] = $min_data;
				}
				if (!empty($module_info['pagespeed_css_replace'])) {
					$module_info['pagespeed_css_replace_before'] = $module_info['pagespeed_css_replace'];
				}
				if (!empty($module_info['pagespeed_css_min']) && $module_info['pagespeed_css_min'] < 4 && !is_array($module_info['pagespeed_css_min'])) {
					$min_data = array();
					foreach (range(1, $module_info['pagespeed_css_min']) as $result) {
						$min_data[$result] = $result;
					}
					$module_info['pagespeed_css_min'] = $min_data;
				}
				if (!empty($module_info['pagespeed_js_replace'])) {
					$module_info['pagespeed_js_replace_before'] = $module_info['pagespeed_js_replace'];
				}
				if (!empty($module_info['pagespeed_js_min']) && $module_info['pagespeed_js_min'] < 4 && !is_array($module_info['pagespeed_js_min'])) {
					$min_data = array();
					foreach (range(1, $module_info['pagespeed_js_min']) as $result) {
						$min_data[$result] = $result;
					}
					$module_info['pagespeed_js_min'] = $min_data;
				}

				$this->request->post = $module_info;
				$this->model_setting_setting->editSetting('bus_cache', array(
					'bus_cache'                         => $module_info,
					'bus_cache_status'                  => !empty($module_info['status']),
					'bus_cache_clear_blog_category'     => !empty($module_info['cache_clear']['blog_category']),
					'bus_cache_clear_blog_article'      => !empty($module_info['cache_clear']['blog_article']),
					'bus_cache_clear_category'          => !empty($module_info['cache_clear']['category']),
					'bus_cache_clear_information'       => !empty($module_info['cache_clear']['information']),
					'bus_cache_clear_manufacturer'      => !empty($module_info['cache_clear']['manufacturer']),
					'bus_cache_clear_product'           => !empty($module_info['cache_clear']['product']),
					'bus_cache_image_first_boot_status' => !empty($module_info['pagespeed_image_first_boot_status']),
					'bus_cache_image_webp_status'       => !empty($module_info['pagespeed_image_webp_status']),
					'bus_cache_image_webp_convert'      => !empty($module_info['pagespeed_image_webp_convert']),
					'bus_cache_image_webp_quality'      => (isset($module_info['pagespeed_image_webp_quality']) ? $module_info['pagespeed_image_webp_quality'] : 100),
					'bus_cache_support_disc_warning'    => !empty($module_info['support_disc_warning'])
				));
			}

			$this->clear('modifications');
			$this->session->data['success'] = $this->modification($this->language->get('heading_title') . $this->language->get('success_update'), true, 300);
		}
	}

	private function modification($message = false, $data = true, $speed = 2000) {
		// посылыаем на йух
		if (!$this->user->hasPermission('modify', $this->paths['controller']['module'])) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			if ($data) {
				$this->copyFile(false, false, 'xml_', 'xml');
			} else {
				$this->deleteFile(false, 'xml');
			}

			if ($this->version_oc >= 4) {
				$this->load->model($this->paths['model']['event']);

				if ($this->registry->has($this->paths['model']['event_path'])) {
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_clear'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_image'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_after'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_controller_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_model_before'");
					$this->db->query("DELETE FROM `" . DB_PREFIX . "event` WHERE `code` = 'bus_cache_model_module_id'");

					if ($data) {
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_clear', `trigger` = 'admin/model/*/after', `action` = '" . $this->paths['controller']['bus_cache'] . $this->paths['slash'] . "clearEvent', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_image', `trigger` = 'catalog/model/tool/image/resize/after', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "image', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_before', `trigger` = 'catalog/controller/*/before', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "start', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '-1'" : false));
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_after', `trigger` = 'catalog/controller/*/after', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "output', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '9999999'" : false));
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_controller_before', `trigger` = 'catalog/controller/*/before', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "controller', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_model_before', `trigger` = 'catalog/model/*/before', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "model', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '0'" : false));
						$this->db->query("INSERT INTO `" . DB_PREFIX . "event` SET `code` = 'bus_cache_model_module_id', `trigger` = 'catalog/model/setting/module/getModule/after', `action` = '" . $this->paths['controller']['bus_cache_event'] . $this->paths['slash'] . "moduleId', `status` = '1'" . ($this->version_oc >= 3 ? ", `sort_order` = '1'" : false));
					}
				}
			}

			// изменяем файлы
			if ($this->version_oc >= 4) {
				$path = DIR_SYSTEM . 'library/response.php';
				if (is_file($path)) {
					$file = file_get_contents($path);
					if (strpos($file, 'busGetHeaders') === false) {
						$file = str_replace("class Response {\r\n", "class Response {\r\npublic function busGetHeaders() {return \$this->headers;}\r\n", $file);
						$file = str_replace("class Response {\n", "class Response {\npublic function busGetHeaders() {return \$this->headers;}\n", $file);
						file_put_contents($path, $file);
					}
				}
			}

			// удаляем модификатор модуля, если заливался в БД
			/* $this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->deleteModification($code['modification_id']);
			} */

			// чистим кэши необходимые для модуля
			//$this->cache->delete('*');
			if ($this->version_oc >= 3) {
				$this->load->controller('common/developer/theme');
				//$this->load->controller('common/developer/sass');
			}

			// готовим данные для ajax
			$text_ocmod_clear = $this->language->get('text_ocmod_clear');
			$text_ocmod_clearlog = $this->language->get('text_ocmod_clearlog');
			$text_ocmod_refresh = $this->language->get('text_ocmod_refresh');

			if (isset($this->session->data['apply'])) {
				$success = $this->language->get('success_setting_apply') . ' ' . addslashes(preg_replace('/[\r\n\t\x0B]/', '', html_entity_decode($message, ENT_QUOTES, 'UTF-8')));
				unset($this->session->data['apply']);
			} else {
				$success = $this->language->get('success_setting_save') . ' ' . addslashes(preg_replace('/[\r\n\t\x0B]/', '', html_entity_decode($message, ENT_QUOTES, 'UTF-8')));
			}

			$error_uninstall = $this->language->get('error_uninstall');

			$url_ocmod_clear = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'clear', $this->paths['token'], true);
			$url_ocmod_clear = str_ireplace('&amp;', '&', $url_ocmod_clear);
			$url_ocmod_clearlog = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'clearlog', $this->paths['token'], true);
			$url_ocmod_clearlog = str_ireplace('&amp;', '&', $url_ocmod_clearlog);
			$url_ocmod_refresh = $this->url->link($this->paths['controller']['modification'] . $this->paths['slash'] . 'refresh', $this->paths['token'], true);
			$url_ocmod_refresh = str_ireplace('&amp;', '&', $url_ocmod_refresh);

			$text = <<<HTML
<script><!--
	$('a, button, select, input').attr('disabled', true);

	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	if ($('#alert').length == 0) {
		$('html, body').animate({scrollTop: offsetTop}, 200, 'linear');
	}

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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clear <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout(ocmodClearlog, $speed);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_clearlog <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout(ocmodRefresh, $speed);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
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
				$('.alert-success').html('<i class="fa fa-check-circle"></i> $text_ocmod_refresh <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
				setTimeout(successModule, $speed);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			$('.alert-danger').html('<i class="fa fa-exclamation-circle"></i> $error_uninstall <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
		}
	});
}

function successModule() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>');
	$('a, button, select, input').removeAttr('disabled');
}
//--></script>
HTML;

			return $text;
		}
	}
}