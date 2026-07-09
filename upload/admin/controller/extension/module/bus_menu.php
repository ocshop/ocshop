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

if (version_compare(VERSION, '4.0.0', '>=')) {
	//class ControllerModuleBusMenu extends ControllerExtensionModuleBusMenu {}
}

if (version_compare(VERSION, '2.3.0', '<')) {
	class ControllerModuleBusMenu extends ControllerExtensionModuleBusMenu {}
}

class ControllerExtensionModuleBusMenu extends Controller {
	private $error = array();
	private $name_arhive = 'blMenu';
	private $code = '01000046';
	private $mame = 'ЫМеню - "blMenu"';
	private $version = '1.0.33';
	private $author = 'BuslikDrev.by';
	private $link = 'https://liveopencart.ru/buslikdrev';
	private $version_oc = 2.3;
	private $paths = array();

	public function __construct($foo) {
		parent::__construct($foo);
		if (version_compare(VERSION, '3.0.0', '>=')) {
			$this->language->set('bus_menu_version', $this->version);
			$this->version_oc = 3;
			$this->paths = array(
				'controller' => array(
					'bus_menu' => 'extension/module/bus_menu',
					'extension' => 'marketplace/extension',
					'modification' => 'marketplace/modification',
				),
				'language' => array(
					'bus_menu' => 'extension/module/bus_menu',
				),
				'model' => array(
					'bus_menu' => 'extension/module/bus_menu',
					'bus_menu_path' => 'model_extension_module_bus_menu',
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
					'bus_menu' => 'extension/module/bus_menu',
				),
				'token' => 'user_token=' . $this->session->data['user_token']
			);
		} elseif (version_compare(VERSION, '2.3.0', '>=')) {
			$this->language->set('bus_menu_version', $this->version);
			$this->version_oc = 2.3;
			$this->paths = array(
				'controller' => array(
					'bus_menu' => 'extension/module/bus_menu',
					'extension' => 'extension/extension',
					'modification' => 'extension/modification',
				),
				'language' => array(
					'bus_menu' => 'extension/module/bus_menu',
				),
				'model' => array(
					'bus_menu' => 'extension/module/bus_menu',
					'bus_menu_path' => 'model_extension_module_bus_menu',
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
					'bus_menu' => 'extension/module/bus_menu',
				),
				'token' => 'token=' . $this->session->data['token']
			);
		} else {
			$this->version_oc = 2;
			$this->paths = array(
				'controller' => array(
					'bus_menu' => 'module/bus_menu',
					'extension' => 'extension/module',
					'modification' => 'extension/modification',
				),
				'language' => array(
					'bus_menu' => 'module/bus_menu',
				),
				'model' => array(
					'bus_menu' => 'module/bus_menu',
					'bus_menu_path' => 'model_module_bus_menu',
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
					'bus_menu' => 'module/bus_menu.tpl',
				),
				'token' => 'token=' . $this->session->data['token']
			);
		}
	}

	// подмена $this->config->get()
	private function configGet($module_id = 0, $import = true) {
		$data = null;

		if (!is_numeric($module_id)) {
			$name = $module_id;
			$module_id = 0;
		} else {
			if (isset($this->session->data['import'])) {
				$data = $this->session->data['import'];
				if ($import) {
					unset($this->session->data['import']);
				}

				$data['module_id'] = $module_id;

				return $data;
			}
		}

		if (isset($this->request->get['module_id']) && !$module_id) {
			$module_id = (int)$this->request->get['module_id'];
		}

		$setting = $this->{$this->paths['model']['bus_menu_path']}->getModule($module_id);

		if ($setting) {
			$data = $setting['setting'];
			$data['cats_horizontal'] = $setting['cats']['cats_horizontal'];
			$data['cats_vertical'] = $setting['cats']['cats_vertical'];
			if ($this->config->get('bus_menu_cats_vertical')) {
				$data['cats_vertical_position'] = $this->config->get('bus_menu_cats_vertical')['position'];
				$data['cats_vertical_route'] = $this->config->get('bus_menu_cats_vertical')['route'];
			}
			$data['cats_cell'] = $setting['cats']['cats_cell'];
			$data['bus_menu'] = $this->config->get('bus_menu');
			if (isset($data['type']) && isset($data['design'])) {
				$data['style'] = $this->getFile($data['type'] .  '_' . ($data['design'] == 'own' ? 'own_' . (int)$data['design_id'] : (int)$data['design']) . '_replace', 'css');
				$data['script'] = $this->getFile($data['type'] .  '_' . ($data['design'] == 'own' ? 'own_' . (int)$data['design_id'] : (int)$data['design']) . '_replace', 'js');
			}
			if (isset($name)) {
				$data = (isset($data[$name]) ? $data[$name] : false);
			}
		}

		return $data;
	}

	// проверяем есть-ли модифицированный файл
	private function ocmod($filename) {
		$file = DIR_MODIFICATION . 'catalog/' . substr($filename, strlen(DIR_CATALOG));

		if (is_file($file)) {
			return $file;
		}

		return $filename;
	}

	// формируем ссылку с помощью seo_url или seo_pro
	private function url($seo_now = false) {
		$seo_type = $this->config->get('config_seo_url_type');

		if (!$seo_type && $this->config->get('configblog_article_limit') == null) {
			$seo_type = 'seo_url';
		} elseif (!$seo_type && $this->config->get('configblog_article_limit') != null) {
			$seo_type = 'seo_pro';
		}

		if ($this->config->get('config_seo_url') && $seo_now) {
			if (version_compare(VERSION, '2.3.0', '>=')) {
				if (class_exists('VQMod')) {
					require_once(VQMod::modCheck((DIR_CATALOG . 'controller/startup/' . $seo_type . '.php')));
				} else {
					require_once($this->ocmod(DIR_CATALOG . 'controller/startup/' . $seo_type . '.php'));
				}

				$seo_url = 'ControllerStartup' . ucfirst(str_replace('_', '', $seo_type));
			} else {
				if (class_exists('VQMod')) {
					require_once(VQMod::modCheck((DIR_CATALOG . 'controller/common/' . $seo_type . '.php')));
				} else {
					require_once($this->ocmod(DIR_CATALOG . 'controller/common/' . $seo_type . '.php'));
				}

				$seo_url = 'ControllerCommon' . ucfirst(str_replace('_', '', $seo_type));
			}
		}

		if (version_compare(VERSION, '2.3.0', '>=')) {
			$url = new Url($this->config->get('config_secure') ? HTTPS_CATALOG : HTTP_CATALOG, HTTPS_CATALOG);
		} else {
			$url = new Url($this->config->get('config_secure') ? HTTPS_CATALOG : HTTP_CATALOG, HTTPS_CATALOG);
		}

		if ($this->config->get('config_seo_url') && $seo_now) {
			$seo_url = new $seo_url($this->registry);
			$url->addRewrite($seo_url);
		}

		return $url;
	}

	// устанавливаем шаблон с учётом иерархии
	private function children_view($data, $setting = array(), $level = 0) {
		if (empty($data)) {
			return '<ol class="catAdd dd-list"></ol>';
		}

		if (!$level) {
			$html = '    <ol class="catAdd dd-list">';
		} else {
			$html = '    <ol class="dd-list">';
		}

		$level++;

		foreach ($data as $cat) {
			if (empty($cat['query'])) {
				$cat['query'] = false;
			}

			if (empty($cat['group_status'])) {
				$cat['group_status'] = false;
			}

			if (empty($cat['status'])) {
				$cat['status'] = false;
			}

			if (empty($cat['image_status'])) {
				$cat['image_status'] = false;
			}

			if (!$setting['image_status'] || empty($cat['image'])) {
				$cat['image'] = false;
			}

			if (empty($cat['image_position'])) {
				$cat['image_position'] = 1;
			}

			if (empty($cat['sticker'])) {
				$cat['sticker'] = false;
			}

			if (empty($cat['sticker_position'])) {
				$cat['sticker_position'] = 6;
			}

			if (empty($cat['cover'])) {
				$cat['cover'] = false;
			}

			if (empty($cat['cover_position'])) {
				$cat['cover_position'] = 8;
			}

			if ($cat['image'] && is_file(DIR_IMAGE . $cat['image'])) {
				$cat['thumb'] = $this->model_tool_image->resize($cat['image'], 100, 100);
			} else {
				$cat['thumb'] = $setting['placeholder'];
			}

			if ($cat['sticker'] && is_file(DIR_IMAGE . $cat['sticker'])) {
				$cat['thumb_sticker'] = $this->model_tool_image->resize($cat['sticker'], 100, 100);
			} else {
				$cat['thumb_sticker'] = $setting['placeholder'];
			}

			if ($cat['cover'] && is_file(DIR_IMAGE . $cat['cover'])) {
				$cat['thumb_cover'] = $this->model_tool_image->resize($cat['cover'], 100, 100);
			} else {
				$cat['thumb_cover'] = $setting['placeholder'];
			}

			foreach ($setting['languages'] as $language) {
				if (empty($cat['name'][$language['language_id']])) {
					$cat['name'][$language['language_id']] = false;
				}

				if (empty($cat['link'][$language['language_id']])) {
					$cat['link'][$language['language_id']] = false;
				}

				if (empty($cat['title'][$language['language_id']])) {
					$cat['title'][$language['language_id']] = false;
				}

				if (empty($cat['desc'][$language['language_id']])) {
					$cat['desc'][$language['language_id']] = false;
				}
			}

			if (!isset($cat['column'])) {
				$cat['column'] = null;
			}

			if (empty($cat['column_lg'])) {
				$cat['column_lg'] = false;
			}

			if (empty($cat['column_md'])) {
				$cat['column_md'] = false;
			}

			if (empty($cat['column_sm'])) {
				$cat['column_sm'] = false;
			}

			if (empty($cat['column_xs'])) {
				$cat['column_xs'] = false;
			}

			if (empty($cat['children'])) {
				$cat['children'] = false;
			}

			$row = $cat['row'];

			$html .= '      <li id="cats-' . $row . '" class="dd-item dd3-item" data-id="' . $row . '">';
			if ($cat['children']) {
				$html .= '        <button type="button" class="btn btn-default" data-action="collapse">Collapse</button>';
				$html .= '        <button type="button" class="btn btn-default" data-action="expand" style="display: none;">Expand</button>';
			}
			$html .= '        <div class="dd-handle dd3-handle"></div>';
			$html .= '        <div class="dd3-content">';
			$html .= '          <div class="input-group">';
			$html .= '            <input type="text" id="name-stock-' . $row . '" value="' . (isset($cat['name'][$setting['language_id']]) ? $cat['name'][$setting['language_id']] : false)  . '" placeholder="' . $setting['button_link_add']  . '" class="form-control" />';
			$html .= '            <input type="hidden" name="cats[' . $row . '][query]" value="' . $cat['query']  . '" placeholder="' . $setting['button_link_add']  . '" class="form-control" />';
			$html .= '            <input type="hidden" name="cats[' . $row . '][group_status]" value="' . $cat['group_status'] . '" placeholder="' . $setting['entry_status']  . '" class="form-control" />';
			$html .= '            <input type="hidden" name="cats[' . $row . '][status]" value="' . $cat['status'] . '" placeholder="' . $setting['entry_status']  . '" class="form-control" />';
			$html .= '            <input type="hidden" name="cats[' . $row . '][image_status]" value="' . $cat['image_status']  . '" placeholder="' . $setting['entry_status']  . '" class="form-control" />';
			$html .= '            <div class="input-group-btn">';
			$html .= '              <button type="button" onclick="catDelete(' . $row . ');" title="" data-toggle="tooltip" data-original-title="' . $setting['button_delete']  . '" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>';
			$html .= '              <button type="button" onclick="catAddGroup(' . $row . ', \'' . $cat['query'] . '\');" title="" data-toggle="tooltip" data-original-title="' . $setting['button_link_add_group']  . '" class="btn btn-primary"><i class="fa fa-sitemap"></i></button>';
			if ($cat['group_status']) {
				$html .= '              <button type="button" onclick="catGroupStatus(' . $row . ');" title="" data-toggle="tooltip" data-original-title="' . $setting['button_link_add_group_status']  . ' ' . $setting['entry_status']  . ' ' . $setting['text_enabled']  . '" class="btn btn-success"><i class="fa fa-sitemap"></i></button>';
			} else {
				$html .= '              <button type="button" onclick="catGroupStatus(' . $row . ');" title="" data-toggle="tooltip" data-original-title="' . $setting['button_link_add_group_status']  . ' ' . $setting['entry_status']  . ' ' . $setting['text_disabled']  . '" class="btn btn-danger"><i class="fa fa-sitemap"></i></button>';
			}
			if ($cat['status']) {
				$html .= '              <button type="button" onclick="catStatus(' . $row . ');" title="" data-toggle="tooltip" data-original-title="' . $setting['entry_status']  . ' ' . $setting['text_enabled']  . '" class="btn btn-default"><i class="fa fa-pause"></i></button>';
			} else {
				$html .= '              <button type="button" onclick="catStatus(' . $row . ');" title="" data-toggle="tooltip" data-original-title="' . $setting['entry_status']  . ' ' . $setting['text_disabled']  . '" class="btn btn-default"><i class="fa fa-play"></i></button>';
			}
			if ($cat['image_status']) {
				$html .= '              <button type="button" onclick="catImageStatus(' . $row . ');" title="" data-toggle="tooltip" data-original-title="' . $setting['help_cats_image_status']  . ' ' . $setting['text_enabled']  . '" class="btn btn-success"><i class="fa fa-image"></i></button>';
			} else {
				$html .= '              <button type="button" onclick="catImageStatus(' . $row . ');" title="" data-toggle="tooltip" data-original-title="' . $setting['help_cats_image_status']  . ' ' . $setting['text_disabled']  . '" class="btn btn-danger"><i class="fa fa-image"></i></button>';
			}
			$html .= '              <button type="button" onclick="catEdit(' . $row . ');" title="" data-toggle="tooltip" data-original-title="' . $setting['text_edit']  . '" class="btn btn-success"><i class="fa fa-cogs"></i></button>';
			$html .= '              <div id="image-' . $row . '" title="' . $setting['help_cats_image']  . '" data-toggle="tooltip" style="display:inline-block;">';
			$html .= '                <a href="" id="thumb-image-' . $row . '" data-toggle="image" class="img-thumbnail text-center">';
			$html .= '                  <img src="' . $cat['thumb']  . '" alt="" title="" data-placeholder="' . $setting['placeholder']  . '" style="height:26px;">';
			$html .= '                </a>';
			$html .= '                <input type="hidden" name="cats[' . $row . '][image]" value="' . $cat['image']  . '" data-placeholder="' . $setting['placeholder']  . '" id="input-image-' . $row . '">';
			$html .= '                <select name="cats[' . $row . '][image_position]" class="form-control" title="' . $setting['help_cats_image_position']  . '" data-toggle="tooltip" style="display:none;">';
			$html .= '                  <option value="1"' . ($cat['image_position'] == '1' ? ' selected="selected"' : false) . '>' . $setting['text_left'] . '</option>';
			$html .= '                  <option value="2"' . ($cat['image_position'] == '2' ? ' selected="selected"' : false) . '>' . $setting['text_right'] . '</option>';
			$html .= '                </select>';
			$html .= '              </div>';
			$html .= '              <div id="sticker-' . $row . '" title="' . $setting['help_cats_sticker']  . '" data-toggle="tooltip" style="display:inline-block;">';
			$html .= '                <a href="" id="thumb-sticker-' . $row . '" data-toggle="image" class="img-thumbnail text-center">';
			$html .= '                  <img src="' . $cat['thumb_sticker']  . '" alt="" title="" data-placeholder="' . $setting['placeholder']  . '" style="height:26px;">';
			$html .= '                </a>';
			$html .= '                <input type="hidden" name="cats[' . $row . '][sticker]" value="' . $cat['sticker']  . '" data-placeholder="' . $setting['placeholder']  . '" id="input-sticker-' . $row . '">';
			$html .= '                <select name="cats[' . $row . '][sticker_position]" class="form-control" title="' . $setting['help_cats_sticker_position']  . '" data-toggle="tooltip" style="display:none;">';
			$html .= '                  <option value="1"' . ($cat['sticker_position'] == '1' ? ' selected="selected"' : false) . '>' . $setting['text_left'] . '</option>';
			$html .= '                  <option value="2"' . ($cat['sticker_position'] == '2' ? ' selected="selected"' : false) . '>' . $setting['text_right'] . '</option>';
			$html .= '                  <option value="3"' . ($cat['sticker_position'] == '3' ? ' selected="selected"' : false) . '>' . $setting['text_top'] . '</option>';
			$html .= '                  <option value="4"' . ($cat['sticker_position'] == '4' ? ' selected="selected"' : false) . '>' . $setting['text_bottom'] . '</option>';
			$html .= '                  <option value="5"' . ($cat['sticker_position'] == '5' ? ' selected="selected"' : false) . '>' . $setting['text_left_top'] . '</option>';
			$html .= '                  <option value="6"' . ($cat['sticker_position'] == '6' ? ' selected="selected"' : false) . '>' . $setting['text_right_top'] . '</option>';
			$html .= '                  <option value="7"' . ($cat['sticker_position'] == '7' ? ' selected="selected"' : false) . '>' . $setting['text_left_bottom'] . '</option>';
			$html .= '                  <option value="8"' . ($cat['sticker_position'] == '8' ? ' selected="selected"' : false) . '>' . $setting['text_right_bottom'] . '</option>';
			$html .= '                </select>';
			$html .= '              </div>';
			$html .= '              <div id="cover-' . $row . '" title="' . $setting['help_cover']  . '" data-toggle="tooltip" class="cover" style="display:none;">';
			$html .= '                <a href="" id="thumb-cover-' . $row . '" data-toggle="image" class="img-thumbnail text-center">';
			$html .= '                  <img src="' . $cat['thumb_cover']  . '" alt="" title="" data-placeholder="' . $setting['placeholder']  . '" style="height:100px;">';
			$html .= '                </a>';
			$html .= '                <input type="hidden" name="cats[' . $row . '][cover]" value="' . $cat['cover']  . '" data-placeholder="' . $setting['placeholder']  . '" id="input-cover-' . $row . '" disabled="disabled">';
			$html .= '                <select name="cats[' . $row . '][cover_position]" class="form-control cover" title="' . $setting['help_cover_position']  . '" data-toggle="tooltip" style="display:none;" disabled="disabled">';
			$html .= '                  <option value="1"' . ($cat['cover_position'] == '1' ? ' selected="selected"' : false) . '>' . $setting['text_left'] . '</option>';
			$html .= '                  <option value="2"' . ($cat['cover_position'] == '2' ? ' selected="selected"' : false) . '>' . $setting['text_right'] . '</option>';
			$html .= '                  <option value="3"' . ($cat['cover_position'] == '3' ? ' selected="selected"' : false) . '>' . $setting['text_top'] . '</option>';
			$html .= '                  <option value="4"' . ($cat['cover_position'] == '4' ? ' selected="selected"' : false) . '>' . $setting['text_bottom'] . '</option>';
			$html .= '                  <option value="5"' . ($cat['cover_position'] == '5' ? ' selected="selected"' : false) . '>' . $setting['text_left_top'] . '</option>';
			$html .= '                  <option value="6"' . ($cat['cover_position'] == '6' ? ' selected="selected"' : false) . '>' . $setting['text_right_top'] . '</option>';
			$html .= '                  <option value="7"' . ($cat['cover_position'] == '7' ? ' selected="selected"' : false) . '>' . $setting['text_left_bottom'] . '</option>';
			$html .= '                  <option value="8"' . ($cat['cover_position'] == '8' ? ' selected="selected"' : false) . '>' . $setting['text_right_bottom'] . '</option>';
			$html .= '                </select>';
			$html .= '              </div>';
			$html .= '            </div>';
			$html .= '          </div>';
			$html .= '          <div id="cats-desc-' . $row . '" class="collapse">';
			$html .= '            <ul class="nav nav-tabs language" id="language-' . $row . '">';
			foreach ($setting['languages'] as $language) {
				$html .= '              <li><a href="#language-' . $language['language_id']  . '-' . $row . '" data-toggle="tab"><img src="' . (version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png')  . '" title="' . $language['name']  . '" /> ' . $language['name']  . '</a></li>';
			}
			$html .= '            </ul>';
			$html .= '            <div class="tab-content">';
			foreach ($setting['languages'] as $language) {
				$html .= '              <div class="tab-pane" id="language-' . $language['language_id']  . '-' . $row . '">';
				$html .= '                <span title="' . $setting['help_cats_name']  . '" data-toggle="tooltip"><input type="text" name="cats[' . $row . '][name][' . $language['language_id']  . ']" value="' . $cat['name'][$language['language_id']]  . '" placeholder="' . $setting['entry_cats_name']  . '" class="form-control" /></span>';
				$html .= '                <span title="' . $setting['help_cats_link']  . '" data-toggle="tooltip"><input type="text" name="cats[' . $row . '][link][' . $language['language_id']  . ']" value="' . $cat['link'][$language['language_id']]  . '" placeholder="' . $setting['entry_cats_link']  . '" class="form-control" /></span>';
				$html .= '                <span title="' . $setting['help_cats_title']  . '" data-toggle="tooltip"><input type="text" name="cats[' . $row . '][title][' . $language['language_id']  . ']" value="' . $cat['title'][$language['language_id']]  . '" placeholder="' . $setting['entry_cats_title']  . '" class="form-control" /></span>';
				$html .= '                <span title="' . $setting['help_cats_desc']  . '" data-toggle="tooltip"><input type="text" name="cats[' . $row . '][desc][' . $language['language_id']  . ']" value="' . $cat['desc'][$language['language_id']]  . '" placeholder="' . $setting['entry_cats_desc']  . '" class="form-control" /></span>';
				$html .= '              </div>';
			}
			$html .= '              <div class="row">';
			$html .= '                <div title="' . $setting['help_lg']  . ' ' . $setting['help_cats_column'] . '" data-toggle="tooltip" class="col-sm-3"><input type="text" name="cats[' . $row . '][column_lg]" value="' . $cat['column_lg']  . '" placeholder="' . $setting['entry_lg']  . '" class="form-control" /></div>';
			$html .= '                <div title="' . $setting['help_md']  . ' ' . $setting['help_cats_column'] . '" data-toggle="tooltip" class="col-sm-3"><input type="text" name="cats[' . $row . '][column_md]" value="' . $cat['column_md']  . '" placeholder="' . $setting['entry_md']  . '" class="form-control" /></div>';
			$html .= '                <div title="' . $setting['help_sm']  . ' ' . $setting['help_cats_column'] . '" data-toggle="tooltip" class="col-sm-3"><input type="text" name="cats[' . $row . '][column_sm]" value="' . $cat['column_sm']  . '" placeholder="' . $setting['entry_sm']  . '" class="form-control" /></div>';
			$html .= '                <div title="' . $setting['help_xs']  . ' ' . $setting['help_cats_column'] . '" data-toggle="tooltip" class="col-sm-3"><input type="text" name="cats[' . $row . '][column_xs]" value="' . $cat['column_xs']  . '" placeholder="' . $setting['entry_xs']  . '" class="form-control" /></div>';
			$html .= '              </div>';
			$html .= '            </div>';
			$html .= '          </div>';
			$html .= '        </div>';
			if ($cat['children']) {
				$html .=        $this->children_view($cat['children'], $setting, $level);
			}
			$html .= '      </li>';
		}
		$html .= '    </ol>';

		return $html;
	}

	// соединяем 2 массива: иерархию nestable и данные ссылок, чтобы не вносить правки в оригинальный скрипт nestable.js, также оптимизируем данные
	private function children($cats_data, $cats = array(), $seo_now = false) {
		$languages = $this->model_localisation_language->getLanguages();

		$data = array();

		if ($seo_now) {
			$url = $this->url($seo_now);
		}

		if (isset($cats_data)) {
			foreach ($cats_data as $key => $cat) {
				if (!empty($cats[$cat['id']])) {
					$result = $cats[$cat['id']];

					$cats_data = array(
						'row' => $cat['id']
					);

					if (!empty($result['query'])) {
						$cats_data['query'] = $result['query'];

						if ($seo_now) {
							$table = str_replace('_id', '', stristr($result['query'], '=', true));

							if ($table == 'blog_category') {
								$route = 'blog/category';
							} elseif ($table == 'article') {
								$route = 'blog/article';
							} elseif ($table == 'information') {
								$route = 'information/information';
							} elseif ($table == 'manufacturer') {
								$route = 'product/manufacturer/info';
							} else {
								if ($table == 'path') {
									$table = 'category';
								}

								$route = 'product/' . $table;
							}

							foreach ($languages as $language) {
								$result['link'][$language['language_id']] = $url->link($route, $result['query']);
							}
						} else {
							unset($result['link']);
						}
					}

					if (!empty($result['image'])) {
						$cats_data['image'] = $result['image'];
						$cats_data['image_position'] = $result['image_position'];
					}

					if (!empty($result['group_status'])) {
						$cats_data['group_status'] = $result['group_status'];
					}

					if (!empty($result['image_status'])) {
						$cats_data['image_status'] = $result['image_status'];
					}

					if (!empty($result['sticker'])) {
						$cats_data['sticker'] = $result['sticker'];
						$cats_data['sticker_position'] = $result['sticker_position'];
					}

					if (!empty($result['cover'])) {
						$cats_data['cover'] = $result['cover'];
						$cats_data['cover_position'] = $result['cover_position'];
					}

					foreach ($languages as $language) {
						if (!empty($result['name'][$language['language_id']])) {
							$cats_data['name'][$language['language_id']] = $result['name'][$language['language_id']];
						}

						if (!empty($result['link'][$language['language_id']])) {
							$cats_data['link'][$language['language_id']] = $result['link'][$language['language_id']];
						}

						if (!empty($result['title'][$language['language_id']])) {
							$cats_data['title'][$language['language_id']] = $result['title'][$language['language_id']];
						}

						if (!empty($result['desc'][$language['language_id']])) {
							$cats_data['desc'][$language['language_id']] = $result['desc'][$language['language_id']];
						}
					}

					if (isset($result['column'])) {
						$cats_data['column'] = $result['column'];
					}

					if (!empty($result['column_lg'])) {
						$cats_data['column_lg'] = $result['column_lg'];
					}

					if (!empty($result['column_md'])) {
						$cats_data['column_md'] = $result['column_md'];
					}

					if (!empty($result['column_sm'])) {
						$cats_data['column_sm'] = $result['column_sm'];
					}

					if (!empty($result['column_xs'])) {
						$cats_data['column_xs'] = $result['column_xs'];
					}

					if (!empty($cat['children'])) {
						$cats_data['children'] = $this->children($cat['children'], $cats, $seo_now);
					}

					if (!empty($result['status'])) {
						$cats_data['status'] = $result['status'];
					}

					$data[] = $cats_data;

					// если необходимые данные для "своей ссылки" не заполнены, то не сохраняем в БД
					if (empty($cats_data['query']) && empty($cats_data['image']) && empty($cats_data['name'])) {
						unset($data[$key]);
					}
				}
			}
		}

		return $data;
	}

	private function setFile($name, $value, $format = 'xml') {
		$this->deleteFile($name, $format);

		if ($value) {
			$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));

			if ($format == 'css') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_menu/bus_menu_';
				if (!is_dir(str_replace('/bus_menu/bus_menu_', '', $path))) {
					mkdir(str_replace('/bus_menu/bus_menu_', '', $path), 0755);
				}
				if (!is_dir(str_replace('/bus_menu_', '', $path))) {
					mkdir(str_replace('/bus_menu_', '', $path), 0755);
				}
			} elseif ($format == 'js') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_menu/bus_menu_';
				if (!is_dir(str_replace('/bus_menu/bus_menu_', '', $path))) {
					mkdir(str_replace('/bus_menu/bus_menu_', '', $path), 0755);
				}
				if (!is_dir(str_replace('/bus_menu_', '', $path))) {
					mkdir(str_replace('/bus_menu_', '', $path), 0755);
				}
			} elseif ($format == 'tpl') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_menu'] . '/bus_menu_';
			} elseif ($format == 'twig') {
				$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_menu'] . '/bus_menu_';
			} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json'))) {
				$path = DIR_IMAGE . 'catalog/bus_menu/';
			} else {
				$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_menu.ocmod';
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
		$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));

		if ($format == 'css') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_menu/bus_menu_';
		} elseif ($format == 'js') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_menu/bus_menu_';
		} elseif ($format == 'tpl') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_menu'] . '/bus_menu_';
		} elseif ($format == 'twig') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_menu'] . '/bus_menu_';
		} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json'))) {
			$path = DIR_IMAGE . 'catalog/bus_menu/';
		} else {
			$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_menu.ocmod';
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
		$theme = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));

		if ($format == 'css') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/stylesheet/bus_menu/bus_menu_';
		} elseif ($format == 'js') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/javascript/bus_menu/bus_menu_';
		} elseif ($format == 'tpl') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_menu'] . '/bus_menu_';
		} elseif ($format == 'twig') {
			$path = DIR_CATALOG . 'view/theme/' . $theme . '/template/' . $this->paths['controller']['bus_menu'] . '/bus_menu_';
		} elseif (in_array($format, array('jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'ico', 'json'))) {
			$path = DIR_IMAGE . 'catalog/bus_menu/';
		} else {
			$path = DIR_SYSTEM . ($name == 'library' ? 'library/' : false) . 'bus_menu.ocmod';
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

	public function export() {
		$this->load->language($this->paths['language']['bus_menu']);

		if ($this->validate()) {
			$this->load->model($this->paths['model']['bus_menu']);

			$module_id = (isset($this->request->get['module_id']) ? $this->request->get['module_id'] : 0);

			$module_info = $this->configGet($module_id);

			$this->response->addheader('Pragma: public');
			$this->response->addheader('Expires: 0');
			$this->response->addheader('Content-Description: File Transfer');
			$this->response->addheader('Content-Type: application/octet-stream');
			$this->response->addheader('Content-Disposition: attachment; filename="blMenu_module_id_' . $module_id . '_type_' . (isset($module_info['type']) ? $module_info['type'] : 0) . '_' . date('Y-m-d_H-i-s', time()) . '.json"');
			$this->response->addheader('Content-Transfer-Encoding: binary');

			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode(array('blMenu' => $module_info, 'version' => $this->version), JSON_HEX_AMP));
		} else {
			$this->session->data['warning'] = $this->language->get('error_permission');

			$this->response->redirect($this->url->link($this->paths['controller']['bus_menu'], $this->paths['token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : false), true));
		}
	}

	public function import() {
		$this->load->language($this->paths['language']['bus_menu']);

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (is_uploaded_file($this->request->files['import']['tmp_name'])) {
				$import = json_decode(file_get_contents($this->request->files['import']['tmp_name']), true);

				if (isset($import['blMenu'])) {
					/* if (isset($import['version'])) {
						if ($import['version'] == '1.0') {
							$import['blMenu']['status'] = 0;
						}
					} */

					$this->session->data['import'] = $import['blMenu'];
					$this->session->data['success'] = sprintf($this->language->get('success_setting_import'), $this->language->get('heading_title'));
				} elseif (pathinfo($this->request->files['import']['name'], PATHINFO_EXTENSION) == 'menu' && is_array($import)) {
					$this->load->model('localisation/language');

					$languages = $this->model_localisation_language->getLanguages();

					$data['blMenu'] = array();
					$data['blMenu']['cats_status'] = 1;
					$data['blMenu']['cats_horizontal'] = $this->yumenuConvert($import, $languages);

					if ($data['blMenu']['cats_horizontal']) {
						$this->session->data['import'] = $data['blMenu'];
						$this->session->data['success'] = sprintf($this->language->get('success_setting_import'), 'YUMenu v1.0.7');
					}
				} else {
					$this->session->data['warning'] = $this->language->get('error_setting_import');
				}
			} else {
				$this->session->data['warning'] = $this->language->get('error_setting_import');
			}
		} else {
			$this->session->data['warning'] = $this->language->get('error_permission');

			$this->response->redirect($this->url->link($this->paths['controller']['bus_menu'], $this->paths['token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : false), true));
		}
	}

	private function yumenuConvert($import, $languages = array()) {
		$data = array();

		foreach ($import as $cat) {
			if (!isset($cat['id'])) {
				return array();
			}

			$query = false;

			if (isset($cat['type'])) {
				if ($cat['type'] == 'custom') {
					$query = false;
				} elseif ($cat['type'] == 'category') {
					if (isset($cat['item_id'])) {
						$query = 'path=' . $cat['item_id'];
					}
				} else {
					if (isset($cat['item_id'])) {
						$query = $cat['type'] . '_id=' . $cat['item_id'];
					}
				}
			}

			$cats_horizontal = array(
				'row' => $cat['id'],
				'query' => $query,
				'status' => (isset($cat['status']) ? $cat['status'] : true),
				'image' => (isset($cat['img1']) ? $cat['img1'] : false),
				'image_position' => 1,
				'image_status' => 0,
			);

			foreach ($languages as $language) {
				if (isset($cat['img1'])) {
					$cats_horizontal['image'] = $cat['img1'];
				} elseif (isset($cat['img' . $language['language_id']])) {
					$cats_horizontal['image'] = $cat['img' . $language['language_id']];
				}
				if (isset($cat['name' . $language['language_id']])) {
					$cats_horizontal['name'][$language['language_id']] = $cat['name' . $language['language_id']];
				}
				if (isset($cat['url' . $language['language_id']])) {
					$cats_horizontal['link'][$language['language_id']] = $cat['url' . $language['language_id']];
				}
			}

			if (isset($cat['children'])) {
				$cats_horizontal['children'] = $this->yumenuConvert($cat['children'], $languages);
			}

			$data[] = $cats_horizontal;
		}

		return $data;
	}

	/* private function postArray($posts, $posts2) {
		foreach ($posts2 as $key => $post) {
			if (is_array($post)) {
				foreach ($post as $k => $p) {
					$post_data[$key][$k] = $p;
				}
			} else {
				$post_data[$key] = $post;
			}
		}
	} */

	public function index() {
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate() && isset($this->request->post['apply'])) {
			if ($this->request->post['apply'] == 2 || $this->request->post['apply'] == 3) {
				$post_data = array();

				$posts = $this->cache->get('bus_menu.apply_piecemeal');

				if ($posts) {
					foreach ($posts as $key => $post) {
						if (is_array($post)) {
							foreach ($post as $k => $p) {
								if (is_array($p)) {
									foreach ($p as $k2 => $p2) {
										$post_data[$key][$k][$k2] = $p2;
									}
								} else {
									$post_data[$key][$k] = $p;
								}
							}
						} else {
							$post_data[$key] = $post;
						}
					}

					foreach ($this->request->post as $key => $post) {
						if (is_array($post)) {
							foreach ($post as $k => $p) {
								if (is_array($p)) {
									foreach ($p as $k2 => $p2) {
										$post_data[$key][$k][$k2] = $p2;
									}
								} else {
									$post_data[$key][$k] = $p;
								}
							}
						} else {
							$post_data[$key] = $post;
						}
					}
				} else {
					$post_data = $this->request->post;
				}

				if ($this->request->post['apply'] == 3) {
					$this->request->post = $post_data;
					if (isset($this->request->post['module_id']) && $this->request->post['module_id']) {
						$this->request->get['module_id'] = $this->request->post['module_id'];
					}
					$this->cache->delete('bus_menu.apply_piecemeal');
				} else {
					$cache = new Cache('file', 60);
					$cache->set('bus_menu.apply_piecemeal', $post_data);
					$this->response->addHeader('Content-Type: application/json');
					$this->response->setOutput(json_encode(array(), JSON_HEX_AMP));
					exit();
				}
			}
		}

		foreach ($this->load->language($this->paths['language']['bus_menu']) as $key => $lang) {
			$data[$key] = $lang;
		}

		$this->load->model($this->paths['model']['bus_menu']);

		$this->load->model('design/layout');

		$this->load->model('localisation/language');

		$this->load->model('setting/store');

		$this->load->model('tool/image');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		$this->document->addStyle('view/javascript/buslikdrev/colorpicker/css/colorpicker.css');
		$this->document->addScript('view/javascript/buslikdrev/colorpicker/colorpicker.js');
		$this->document->addScript('view/javascript/buslikdrev/nestable/nestable.js');

		$this->update();

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$language_id = $this->config->get('config_language_id');

		$data['stores'] = $this->model_setting_store->getStores();

		$data['token'] = $this->paths['token'];

		$data['module_path'] = $this->paths['controller']['bus_menu'];

		if (isset($this->request->post['seo_now'])) {
			$seo_now = $this->request->post['seo_now'];
		} else {
			$seo_now = null;
		}

		if (isset($this->request->post['cats']) && isset($this->request->post['cats_horizontal_data'])) {
			$this->request->post['cats_horizontal_data'] = json_decode(str_replace('&quot;', '"', $this->request->post['cats_horizontal_data']), true);
			$this->request->post['cats_horizontal'] = $this->children($this->request->post['cats_horizontal_data'], $this->request->post['cats'], $seo_now);
		}

		if (isset($this->request->post['cats']) && isset($this->request->post['cats_vertical_data'])) {
			$this->request->post['cats_vertical_data'] = json_decode(str_replace('&quot;', '"', $this->request->post['cats_vertical_data']), true);
			$this->request->post['cats_vertical'] = $this->children($this->request->post['cats_vertical_data'], $this->request->post['cats'], $seo_now);
		}

		if (isset($this->request->post['cats']) && isset($this->request->post['cats_cell_data'])) {
			$this->request->post['cats_cell_data'] = json_decode(str_replace('&quot;', '"', $this->request->post['cats_cell_data']), true);
			$this->request->post['cats_cell'] = $this->children($this->request->post['cats_cell_data'], $this->request->post['cats'], $seo_now);
		}

		unset(
			$this->request->post['cats'],
			$this->request->post['cats_horizontal_data'],
			$this->request->post['cats_vertical_data'],
			$this->request->post['cats_cell_data']
		);

		if (!$seo_now) {
			unset($this->request->post['seo_now']);
		}

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (isset($this->request->post['apply']) && !empty($this->request->post['apply'])) {
				$apply = true;
				unset($this->request->post['apply']);
			} else {
				$apply = false;
			}

			$this->request->post['version'] = $this->version;
			$this->request->post['time_save'] = time();

			$cats = array();

			if (isset($this->request->post['cats_horizontal'])) {
				$cats['cats_horizontal'] = $this->request->post['cats_horizontal'];
				unset($this->request->post['cats_horizontal']);
			}

			if (isset($this->request->post['cats_vertical'])) {
				$cats['cats_vertical'] = $this->request->post['cats_vertical'];
				unset($this->request->post['cats_vertical']);
			}

			if (isset($this->request->post['cats_vertical_position'])) {
				$cats_vertical_position = $this->request->post['cats_vertical_position'];
				unset($this->request->post['cats_vertical_position']);
			} else {
				$cats_vertical_position = null;
			}

			if (isset($this->request->post['cats_vertical_route'])) {
				$cats_vertical_route = $this->request->post['cats_vertical_route'];

				if (isset($this->request->post['cats_vertical_route_count'])) {
					if ((count($cats_vertical_route, COUNT_RECURSIVE) - count($cats_vertical_route)) == $this->request->post['cats_vertical_route_count']) {
						$cats_vertical_route = 1;
					}
				}

				unset($this->request->post['cats_vertical_route']);
				unset($this->request->post['cats_vertical_route_count']);
			} else {
				$cats_vertical_route = null;
			}

			if (isset($this->request->post['cats_cell'])) {
				$cats['cats_cell'] = $this->request->post['cats_cell'];
				unset($this->request->post['cats_cell']);
			}

			/* if (isset($this->request->post['design']) && isset($this->request->post['design_tpl'])) {
				if ($this->request->post['design'] == 'own') {
					if (!empty($this->request->post['design_css'])) {
						$this->copyFile($this->request->post['type'], $this->request->post['type'] . '_own', 'css');
					}
					$this->copyFile($this->request->post['type'] . '_' . $this->request->post['design_set'], $this->request->post['type'] . '_' . $this->request->post['design_set'] . '_own_' . $this->request->post['design_id'], 'tpl');
				}
			} */
			//https://www.php.net/manual/ru/function.php-strip-whitespace.php

			if (isset($this->request->post['style']) && isset($this->request->post['design']) && isset($this->request->post['type'])) {
				$this->setFile($this->request->post['type'] .  '_' . ($this->request->post['design'] == 'own' ? 'own_' . (int)$this->request->post['design_id'] : (int)$this->request->post['design']) . '_replace', html_entity_decode($this->request->post['style']), 'css');

				if (!empty($this->request->post['style'])) {
					$this->request->post['style'] = true;
				}
			}

			if (isset($this->request->post['script']) && isset($this->request->post['design']) && isset($this->request->post['type'])) {
				$this->setFile($this->request->post['type'] .  '_' . ($this->request->post['design'] == 'own' ? 'own_' . (int)$this->request->post['design_id'] : (int)$this->request->post['design']) . '_replace', html_entity_decode($this->request->post['script']), 'js');

				if (!empty($this->request->post['script'])) {
					$this->request->post['script'] = true;
				}
			}

			//$this->cache->delete('*');
			$this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			$this->cache->delete('article');
			$this->cache->delete('category');
			$this->cache->delete('information');
			$this->cache->delete('manufacturer');
			$this->cache->delete('product');
			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url');
			$this->cache->delete('bus_menu');

			if (!isset($this->request->get['module_id'])) {
				$this->load->model($this->paths['model']['module']);

				$this->{$this->paths['model']['module_path']}->addModule('bus_menu', array('name' => $this->request->post['name'], 'status' => $this->request->post['status']));

				$module_id = $this->db->getLastId();

				$this->request->post['name'] = $this->request->post['name'] . ' module_id: ' . $module_id;

				$this->{$this->paths['model']['module_path']}->editModule($module_id, array('name' => $this->request->post['name'], 'module_id' => $module_id, 'status' => $this->request->post['status']));

				$this->{$this->paths['model']['bus_menu_path']}->addModule($module_id, array('setting' => $this->request->post, 'cats' => $cats));

				if (isset($this->request->post['bus_menu']) && !empty($this->request->post['bus_menu'])) {
					$this->load->model('setting/setting');

					$this->model_setting_setting->editSetting('bus_menu', array('bus_menu' => $module_id, 'bus_menu_cats_vertical' => array('position' => $cats_vertical_position, 'route' => $cats_vertical_route)));
				}
			} else {
				$this->load->model($this->paths['model']['module']);

				$this->{$this->paths['model']['module_path']}->editModule($this->request->get['module_id'], array('name' => $this->request->post['name'], 'module_id' => $this->request->get['module_id'], 'status' => $this->request->post['status']));

				$this->{$this->paths['model']['bus_menu_path']}->editModule($this->request->get['module_id'], array('setting' => $this->request->post, 'cats' => $cats));

				if (isset($this->request->post['bus_menu'])) {
					$this->load->model('setting/setting');

					if (!empty($this->request->post['bus_menu'])) {
						$this->model_setting_setting->editSetting('bus_menu', array('bus_menu' => $this->request->get['module_id'], 'bus_menu_cats_vertical' => array('position' => $cats_vertical_position, 'route' => $cats_vertical_route)));
					} elseif (empty($this->request->post['bus_menu']) && $this->config->get('bus_menu') == $this->request->get['module_id']) {
						
						$this->model_setting_setting->editSetting('bus_menu', array('bus_menu' => $this->request->post['bus_menu'], 'bus_menu_cats_vertical' => array('position' => $cats_vertical_position, 'route' => $cats_vertical_route)));
					}
				}
			}

			if ($apply) {
				if (!isset($this->request->get['module_id'])) {
					$this->session->data['success'] = $this->language->get('success_setting_new');
				} else {
					$this->session->data['success'] = $this->language->get('success_setting_apply');
				}

				$this->response->redirect($this->url->link($this->paths['controller']['bus_menu'], $this->paths['token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : '&module_id=' . $module_id), true));
			} else {
				if (!isset($this->request->get['module_id'])) {
					$this->session->data['success'] = $this->language->get('success_setting_new');
				} else {
					$this->session->data['success'] = $this->language->get('success_setting_save');
				}

				$this->response->redirect($this->url->link($this->paths['controller']['extension'], $this->paths['token'] . '&type=module', true));
			}
		}

		$data['help_site_ico'] = htmlspecialchars($this->language->get('help_site_ico'));
		$data['help_cats_vertical_ico'] = htmlspecialchars($this->language->get('help_cats_vertical_ico'));
		$data['help_style'] = htmlspecialchars($this->language->get('help_style'));
		$data['help_script'] = htmlspecialchars($this->language->get('help_script'));

		if (isset($this->session->data['warning'])) {
			$data['error'] = $this->session->data['warning'];
			unset($this->session->data['warning']);
		} elseif (isset($this->error['warning'])) {
			$data['error'] = $this->error['warning'];
		} else {
			$data['error'] = false;
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = false;
		}

		if (isset($this->error['width_1'])) {
			$data['error_width_1'] = $this->error['width_1'];
		} else {
			$data['error_width_1'] = false;
		}

		if (isset($this->error['height_1'])) {
			$data['error_height_1'] = $this->error['height_1'];
		} else {
			$data['error_height_1'] = false;
		}

		if (isset($this->error['width_2'])) {
			$data['error_width_2'] = $this->error['width_2'];
		} else {
			$data['error_width_2'] = false;
		}

		if (isset($this->error['height_2'])) {
			$data['error_height_2'] = $this->error['height_2'];
		} else {
			$data['error_height_2'] = false;
		}

		if (isset($this->error['width_3'])) {
			$data['error_width_3'] = $this->error['width_3'];
		} else {
			$data['error_width_3'] = false;
		}

		if (isset($this->error['height_3'])) {
			$data['error_height_3'] = $this->error['height_3'];
		} else {
			$data['error_height_3'] = false;
		}

		if (isset($this->error['cover_width'])) {
			$data['error_cover_width'] = $this->error['cover_width'];
		} else {
			$data['error_cover_width'] = false;
		}

		if (isset($this->error['cover_height'])) {
			$data['error_cover_height'] = $this->error['cover_height'];
		} else {
			$data['error_cover_height'] = false;
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
			'href' => $this->url->link($this->paths['controller']['bus_menu'], $this->paths['token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : false), true)
		);

		$data['action'] = $this->url->link($this->paths['controller']['bus_menu'], $this->paths['token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : false), true);
		$data['cancel'] = $this->url->link($this->paths['controller']['extension'], $this->paths['token'] . '&type=module', true);
		$data['export'] = $this->url->link($this->paths['controller']['bus_menu'] . '/export', $this->paths['token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : false), true);

		$module_info = $this->configGet(0, false);

		if (isset($module_id)) {
			$data['module_id'] = $module_id;
		} elseif (isset($this->request->get['module_id'])) {
			$data['module_id'] = $this->request->get['module_id'];
		} else {
			$data['module_id'] = 0;
		}

		if (isset($this->request->post['type'])) {
			$data['type'] = $this->request->post['type'];
		} elseif (isset($module_info['type'])) {
			$data['type'] = $module_info['type'];
		} else {
			$data['type'] = false;
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (isset($module_info['name'])) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = false;
		}

		if (isset($this->request->post['store'])) {
			$data['store'] = $this->request->post['store'];
		} elseif (isset($module_info['store'])) {
			$data['store'] = $module_info['store'];
		} else {
			$data['store'] = array(0);
		}

		if (isset($this->request->post['bus_menu']) && $this->request->post['bus_menu'] == $data['module_id']) {
			$data['bus_menu'] = $this->request->post['bus_menu'];
		} elseif (isset($module_info['bus_menu']) && $module_info['bus_menu'] == $data['module_id']) {
			$data['bus_menu'] = $module_info['bus_menu'];
		} else {
			$data['bus_menu'] = false;
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (isset($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = true;
		}

		if (isset($this->request->post['site_name'])) {
			$data['site_name'] = $this->request->post['site_name'];
		} elseif (isset($module_info['site_name'])) {
			$data['site_name'] = $module_info['site_name'];
		} else {
			$data['site_name'][$language_id] = $this->language->get('text_site_name');
		}

		if (isset($this->request->post['site_link'])) {
			$data['site_link'] = $this->request->post['site_link'];
		} elseif (isset($module_info['site_link'])) {
			$data['site_link'] = $module_info['site_link'];
		} else {
			$data['site_link'][$language_id] = false;
		}

		if (isset($this->request->post['site_ico'])) {
			$data['site_ico'] = $this->request->post['site_ico'];
		} elseif (isset($module_info['site_ico'])) {
			$data['site_ico'] = $module_info['site_ico'];
		} else {
			$data['site_ico'] = '&lt;i class=&quot;fa fa-list&quot;&gt;&lt;/i&gt;';
		}

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		if ($data['site_ico'] == strip_tags($data['site_ico']) && is_file(DIR_IMAGE . $data['site_ico'])) {
			$data['site_ico_thumb'] = $this->model_tool_image->resize($data['site_ico'], 100, 100);
		} else {
			$data['site_ico_thumb'] = $data['placeholder'];
		}

		if (isset($this->request->post['site_ico_position'])) {
			$data['site_ico_position'] = $this->request->post['site_ico_position'];
		} elseif (isset($module_info['site_ico_position'])) {
			$data['site_ico_position'] = $module_info['site_ico_position'];
		} else {
			$data['site_ico_position'] = 6;
		}

		if (isset($this->request->post['site_image_width'])) {
			$data['site_image_width'] = $this->request->post['site_image_width'];
		} elseif (isset($module_info['site_image_width'])) {
			$data['site_image_width'] = $module_info['site_image_width'];
		} else {
			$data['site_image_width'] = 20;
		}

		if (isset($this->request->post['site_image_height'])) {
			$data['site_image_height'] = $this->request->post['site_image_height'];
		} elseif (isset($module_info['site_image_height'])) {
			$data['site_image_height'] = $module_info['site_image_height'];
		} else {
			$data['site_image_height'] = 20;
		}

		if (isset($this->request->post['image_status'])) {
			$data['image_status'] = $this->request->post['image_status'];
		} elseif (isset($module_info['image_status'])) {
			$data['image_status'] = $module_info['image_status'];
		} else {
			$data['image_status'] = false;
		}

		if (isset($this->request->post['width_1'])) {
			$data['width_1'] = $this->request->post['width_1'];
		} elseif (isset($module_info['width_1'])) {
			$data['width_1'] = $module_info['width_1'];
		} else {
			$data['width_1'] = 20;
		}

		if (isset($this->request->post['height_1'])) {
			$data['height_1'] = $this->request->post['height_1'];
		} elseif (isset($module_info['height_1'])) {
			$data['height_1'] = $module_info['height_1'];
		} else {
			$data['height_1'] = 20;
		}

		if (isset($this->request->post['width_2'])) {
			$data['width_2'] = $this->request->post['width_2'];
		} elseif (isset($module_info['width_2'])) {
			$data['width_2'] = $module_info['width_2'];
		} else {
			$data['width_2'] = 20;
		}

		if (isset($this->request->post['height_2'])) {
			$data['height_2'] = $this->request->post['height_2'];
		} elseif (isset($module_info['height_2'])) {
			$data['height_2'] = $module_info['height_2'];
		} else {
			$data['height_2'] = 20;
		}

		if (isset($this->request->post['width_3'])) {
			$data['width_3'] = $this->request->post['width_3'];
		} elseif (isset($module_info['width_3'])) {
			$data['width_3'] = $module_info['width_3'];
		} else {
			$data['width_3'] = 20;
		}

		if (isset($this->request->post['height_3'])) {
			$data['height_3'] = $this->request->post['height_3'];
		} elseif (isset($module_info['height_3'])) {
			$data['height_3'] = $module_info['height_3'];
		} else {
			$data['height_3'] = 20;
		}

		if (isset($this->request->post['name_status_1'])) {
			$data['name_status_1'] = $this->request->post['name_status_1'];
		} elseif (isset($module_info['name_status_1'])) {
			$data['name_status_1'] = $module_info['name_status_1'];
		} else {
			$data['name_status_1'] = true;
		}

		if (isset($this->request->post['name_status_2'])) {
			$data['name_status_2'] = $this->request->post['name_status_2'];
		} elseif (isset($module_info['name_status_2'])) {
			$data['name_status_2'] = $module_info['name_status_2'];
		} else {
			$data['name_status_2'] = true;
		}

		if (isset($this->request->post['name_status_3'])) {
			$data['name_status_3'] = $this->request->post['name_status_3'];
		} elseif (isset($module_info['name_status_3'])) {
			$data['name_status_3'] = $module_info['name_status_3'];
		} else {
			$data['name_status_3'] = true;
		}

		if (isset($this->request->post['desc_status'])) {
			$data['desc_status'] = $this->request->post['desc_status'];
		} elseif (isset($module_info['desc_status'])) {
			$data['desc_status'] = $module_info['desc_status'];
		} else {
			$data['desc_status'] = false;
		}

		if (isset($this->request->post['desc_limit'])) {
			$data['desc_limit'] = $this->request->post['desc_limit'];
		} elseif (isset($module_info['desc_limit'])) {
			$data['desc_limit'] = $module_info['desc_limit'];
		} else {
			$data['desc_limit'] = 50;
		}

		if (isset($this->request->post['cats_status'])) {
			$data['cats_status'] = $this->request->post['cats_status'];
		} elseif (isset($module_info['cats_status'])) {
			$data['cats_status'] = $module_info['cats_status'];
		} else {
			$data['cats_status'] = false;
		}

		if (isset($this->request->post['cats_vertical_status'])) {
			$data['cats_vertical_status'] = $this->request->post['cats_vertical_status'];
		} elseif (isset($module_info['cats_vertical_status'])) {
			$data['cats_vertical_status'] = $module_info['cats_vertical_status'];
		} else {
			$data['cats_vertical_status'] = array();
		}

		if (isset($this->request->post['cats_vertical_name'])) {
			$data['cats_vertical_name'] = $this->request->post['cats_vertical_name'];
		} elseif (isset($module_info['cats_vertical_name'])) {
			$data['cats_vertical_name'] = $module_info['cats_vertical_name'];
		} else {
			$data['cats_vertical_name'][$language_id] = $this->language->get('text_site_name');
		}

		if (isset($this->request->post['cats_vertical_link'])) {
			$data['cats_vertical_link'] = $this->request->post['cats_vertical_link'];
		} elseif (isset($module_info['cats_vertical_link'])) {
			$data['cats_vertical_link'] = $module_info['cats_vertical_link'];
		} else {
			$data['cats_vertical_link'][$language_id] = false;
		}

		if (isset($this->request->post['cats_vertical_ico'])) {
			$data['cats_vertical_ico'] = $this->request->post['cats_vertical_ico'];
		} elseif (isset($module_info['cats_vertical_ico'])) {
			$data['cats_vertical_ico'] = $module_info['cats_vertical_ico'];
		} else {
			$data['cats_vertical_ico'] = '&lt;i class=&quot;fa fa-list&quot;&gt;&lt;/i&gt;';
		}

		if ($data['cats_vertical_ico'] == strip_tags($data['cats_vertical_ico']) && is_file(DIR_IMAGE . $data['cats_vertical_ico'])) {
			$data['cats_vertical_ico_thumb'] = $this->model_tool_image->resize($data['cats_vertical_ico'], 100, 100);
		} else {
			$data['cats_vertical_ico_thumb'] = $data['placeholder'];
		}

		if (isset($this->request->post['cats_vertical_ico_position'])) {
			$data['cats_vertical_ico_position'] = $this->request->post['cats_vertical_ico_position'];
		} elseif (isset($module_info['cats_vertical_ico_position'])) {
			$data['cats_vertical_ico_position'] = $module_info['cats_vertical_ico_position'];
		} else {
			$data['cats_vertical_ico_position'] = 6;
		}

		if (isset($this->request->post['cats_vertical_image_width'])) {
			$data['cats_vertical_image_width'] = $this->request->post['cats_vertical_image_width'];
		} elseif (isset($module_info['cats_vertical_image_width'])) {
			$data['cats_vertical_image_width'] = $module_info['cats_vertical_image_width'];
		} else {
			$data['cats_vertical_image_width'] = 20;
		}

		if (isset($this->request->post['cats_vertical_image_height'])) {
			$data['cats_vertical_image_height'] = $this->request->post['cats_vertical_image_height'];
		} elseif (isset($module_info['cats_vertical_image_height'])) {
			$data['cats_vertical_image_height'] = $module_info['cats_vertical_image_height'];
		} else {
			$data['cats_vertical_image_height'] = 20;
		}

		if (isset($this->request->post['cats_vertical_position'])) {
			$data['cats_vertical_position'] = $this->request->post['cats_vertical_position'];
		} elseif (isset($module_info['cats_vertical_position'])) {
			$data['cats_vertical_position'] = $module_info['cats_vertical_position'];
		} else {
			$data['cats_vertical_position'] = 1;
		}

		$data['layouts'] = array();

		$layouts = $this->model_design_layout->getLayouts(0);

		foreach ($layouts as $key => $layout) {
			$data['layouts'][] = $layout;

			$routes = $this->model_design_layout->getLayoutRoutes($layout['layout_id']);

			$data['layouts'][$key]['routes'] = $routes;

			foreach ($routes as $k => $route) {
				$store = $this->model_setting_store->getStore($route['store_id']);

				if (isset($store['name'])) {
					$data['layouts'][$key]['routes'][$k]['name'] = $store['name'];
				} else {
					$data['layouts'][$key]['routes'][$k]['name'] = $this->language->get('text_default');
				}
			}
		}

		if (isset($this->request->post['cats_vertical_route'])) {
			$data['cats_vertical_route'] = $this->request->post['cats_vertical_route'];
		} elseif (isset($module_info['cats_vertical_route'])) {
			$data['cats_vertical_route'] = $module_info['cats_vertical_route'];
		} else {
			$data['cats_vertical_route'] = array();
		}

		if (isset($this->request->post['cats_vertical_reverse'])) {
			$data['cats_vertical_reverse'] = $this->request->post['cats_vertical_reverse'];
		} elseif (isset($module_info['cats_vertical_reverse'])) {
			$data['cats_vertical_reverse'] = $module_info['cats_vertical_reverse'];
		} else {
			$data['cats_vertical_reverse'] = false;
		}

		if (isset($this->request->post['ajax'])) {
			$ajax = $this->request->post['ajax'];
		} elseif (isset($module_info['ajax'])) {
			$ajax = $module_info['ajax'];
		} else {
			$ajax = false;
		}

		$setting = array(
			'text_edit' => $data['text_edit'],
			'text_enabled' => $data['text_enabled'],
			'text_disabled' => $data['text_disabled'],
			'text_left' => $data['text_left'],
			'text_right' => $data['text_right'],
			'text_top' => $data['text_top'],
			'text_bottom' => $data['text_bottom'],
			'text_left_top' => $data['text_left_top'],
			'text_right_top' => $data['text_right_top'],
			'text_left_bottom' => $data['text_left_bottom'],
			'text_right_bottom' => $data['text_right_bottom'],
			'entry_cats_name' => $data['entry_cats_name'],
			'entry_cats_link' => $data['entry_cats_link'],
			'entry_cats_title' => $data['entry_cats_title'],
			'entry_cats_desc' => $data['entry_cats_desc'],
			'entry_cats_column' => $data['entry_cats_column'],
			'entry_lg' => $data['entry_lg'],
			'entry_md' => $data['entry_md'],
			'entry_sm' => $data['entry_sm'],
			'entry_xs' => $data['entry_xs'],
			'entry_status' => $data['entry_status'],
			'help_cats_image' => $data['help_cats_image'],
			'help_cats_image_position' => $data['help_cats_image_position'],
			'help_cats_image_status' => $data['help_cats_image_status'],
			'help_cats_sticker' => $data['help_cats_sticker'],
			'help_cats_sticker_position' => $data['help_cats_sticker_position'],
			'help_cats_sticker_status' => $data['help_cats_sticker_status'],
			'help_cover' => $data['help_cover'],
			'help_cover_position' => $data['help_cover_position'],
			'help_cats_name' => $data['help_cats_name'],
			'help_cats_link' => $data['help_cats_link'],
			'help_cats_title' => $data['help_cats_title'],
			'help_cats_desc' => $data['help_cats_desc'],
			'help_cats_column' => $data['help_cats_column'],
			'help_lg' => $data['help_lg'],
			'help_md' => $data['help_md'],
			'help_sm' => $data['help_sm'],
			'help_xs' => $data['help_xs'],
			'button_delete' => $data['button_delete'],
			'button_link_add' => $data['button_link_add'],
			'button_link_add_group' => $data['button_link_add_group'],
			'button_link_add_group_status' => $data['button_link_add_group_status'],
			'languages' => $data['languages'],
			'language_id' => $language_id,
			'placeholder' => $data['placeholder'],
			'image_status' => $data['image_status'],
		);

		if (isset($this->request->post['cats_horizontal'])) {
			$cats_horizontal = $this->request->post['cats_horizontal'];
		} elseif (isset($module_info['cats_horizontal'])) {
		    $cats_horizontal = $module_info['cats_horizontal'];
		} else {
			$cats_horizontal = array();
		}

		$setting['row_last'] = 'horizontal';
		$data['cats_horizontal'] = (1 == 1 ? false : $this->children_view($cats_horizontal, $setting));

		if (isset($this->request->post['cats_vertical'])) {
			$cats_vertical = $this->request->post['cats_vertical'];
		} elseif (isset($module_info['cats_vertical'])) {
		    $cats_vertical = $module_info['cats_vertical'];
		} else {
			$cats_vertical = array();
		}

		$setting['row_last'] = 'vertical';
		$data['cats_vertical'] = (1 == 1 ? false : $this->children_view($cats_vertical, $setting));

		if (isset($this->request->post['cats_cell'])) {
			$cats_cell = $this->request->post['cats_cell'];
		} elseif (isset($module_info['cats_cell'])) {
		    $cats_cell = $module_info['cats_cell'];
		} else {
			$cats_cell = array();
		}

		$setting['row_last'] = 'cell';
		$data['cats_cell'] = (1 == 1 ? false : $this->children_view($cats_cell, $setting));

		if (isset($this->request->post['cats_filter'])) {
			$cats_filter = $this->request->post['cats_filter'];
		} elseif (isset($module_info['cats_filter'])) {
		    $cats_filter = $module_info['cats_filter'];
		} else {
			$cats_filter = array();
		}

		$setting['row_last'] = 'filter';
		$data['cats_filter'] = (1 == 0 ? false : $this->children_view($cats_filter, $setting));

		if (isset($this->request->post['seo_now'])) {
			$data['seo_now'] = $this->request->post['seo_now'];
		} elseif (isset($module_info['seo_now'])) {
			$data['seo_now'] = $module_info['seo_now'];
		} else {
			$data['seo_now'] = false;
		}

		if (isset($this->request->post['seo_then'])) {
			$data['seo_then'] = $this->request->post['seo_then'];
		} elseif (isset($module_info['seo_then'])) {
			$data['seo_then'] = $module_info['seo_then'];
		} else {
			$data['seo_then'] = false;
		}

        if (isset($this->request->post['path_status'])) {
			$data['path_status'] = $this->request->post['path_status'];
		} elseif (isset($module_info['path_status'])) {
			$data['path_status'] = $module_info['path_status'];
		} else {
			$data['path_status'] = false;
		}

		if (isset($this->request->post['path_lvl'])) {
			$data['path_lvl'] = $this->request->post['path_lvl'];
		} elseif (isset($module_info['path_lvl'])) {
			$data['path_lvl'] = $module_info['path_lvl'];
		} else {
			$data['path_lvl'] = 0;
		}

		if (isset($this->request->post['path_lvl_limit'])) {
			$data['path_lvl_limit'] = $this->request->post['path_lvl_limit'];
		} elseif (isset($module_info['path_lvl_limit'])) {
			$data['path_lvl_limit'] = $module_info['path_lvl_limit'];
		} else {
			$data['path_lvl_limit'] = 2;
		}

		if (isset($this->request->post['path_limit'])) {
			$data['path_limit'] = $this->request->post['path_limit'];
		} elseif (isset($module_info['path_limit'])) {
			$data['path_limit'] = $module_info['path_limit'];
		} else {
			$data['path_limit'] = 5;
		}

		if (isset($this->request->post['design'])) {
			$data['design'] = $this->request->post['design'];
		} elseif (isset($module_info['design'])) {
			$data['design'] = $module_info['design'];
		} else {
			$data['design'] = 1;
		}

		if (isset($this->request->post['design_id'])) {
			$data['design_id'] = $this->request->post['design_id'];
		} elseif (isset($module_info['design_id'])) {
			$data['design_id'] = $module_info['design_id'];
		} else {
			$data['design_id'] = 1;
		}

        if (isset($this->request->post['designoptimiz'])) {
			$data['designoptimiz'] = $this->request->post['designoptimiz'];
		} elseif (isset($module_info['designoptimiz'])) {
			$data['designoptimiz'] = $module_info['designoptimiz'];
		} else {
			$data['designoptimiz'] = false;
		}

		if (isset($this->request->post['lg'])) {
			$data['lg'] = $this->request->post['lg'];
		} elseif (isset($module_info['lg'])) {
			$data['lg'] = $module_info['lg'];
		} else {
			$data['lg'] = 3;
		}

		if (isset($this->request->post['lg_status'])) {
			$data['lg_status'] = $this->request->post['lg_status'];
		} elseif (isset($module_info['lg_status'])) {
			$data['lg_status'] = $module_info['lg_status'];
		} else {
			$data['lg_status'] = 1;
		}

		if (isset($this->request->post['md'])) {
			$data['md'] = $this->request->post['md'];
		} elseif (isset($module_info['md'])) {
			$data['md'] = $module_info['md'];
		} else {
			$data['md'] = 4;
		}

		if (isset($this->request->post['md_status'])) {
			$data['md_status'] = $this->request->post['md_status'];
		} elseif (isset($module_info['md_status'])) {
			$data['md_status'] = $module_info['md_status'];
		} else {
			$data['md_status'] = 1;
		}

		if (isset($this->request->post['sm'])) {
			$data['sm'] = $this->request->post['sm'];
		} elseif (isset($module_info['sm'])) {
			$data['sm'] = $module_info['sm'];
		} else {
			$data['sm'] = 6;
		}

		if (isset($this->request->post['sm_status'])) {
			$data['sm_status'] = $this->request->post['sm_status'];
		} elseif (isset($module_info['sm_status'])) {
			$data['sm_status'] = $module_info['sm_status'];
		} else {
			$data['sm_status'] = 1;
		}

		if (isset($this->request->post['xs'])) {
			$data['xs'] = $this->request->post['xs'];
		} elseif (isset($module_info['xs'])) {
			$data['xs'] = $module_info['xs'];
		} else {
			$data['xs'] = 12;
		}

		if (isset($this->request->post['xs_status'])) {
			$data['xs_status'] = $this->request->post['xs_status'];
		} elseif (isset($module_info['xs_status'])) {
			$data['xs_status'] = $module_info['xs_status'];
		} else {
			$data['xs_status'] = 1;
		}

		if (isset($this->request->post['cover_status'])) {
			$data['cover_status'] = $this->request->post['cover_status'];
		} elseif (isset($module_info['cover_status'])) {
			$data['cover_status'] = $module_info['cover_status'];
		} else {
			$data['cover_status'] = false;
		}

		if (isset($this->request->post['cover'])) {
			$data['cover'] = $this->request->post['cover'];
		} elseif (isset($module_info['cover'])) {
			$data['cover'] = $module_info['cover'];
		} else {
			$data['cover'] = 8;
		}

		if (isset($this->request->post['cover']) && is_file(DIR_IMAGE . $this->request->post['cover'])) {
			$data['cover_thumb'] = $this->model_tool_image->resize($this->request->post['cover'], 100, 100);
		} elseif (isset($module_info['cover']) && is_file(DIR_IMAGE . $module_info['cover'])) {
			$data['cover_thumb'] = $this->model_tool_image->resize($module_info['cover'], 100, 100);
		} else {
			$data['cover_thumb'] = $data['placeholder'];
		}

		if (isset($this->request->post['cover_width'])) {
			$data['cover_width'] = $this->request->post['cover_width'];
		} elseif (isset($module_info['cover_width'])) {
			$data['cover_width'] = $module_info['cover_width'];
		} else {
			$data['cover_width'] = 500;
		}

		if (isset($this->request->post['cover_height'])) {
			$data['cover_height'] = $this->request->post['cover_height'];
		} elseif (isset($module_info['cover_height'])) {
			$data['cover_height'] = $module_info['cover_height'];
		} else {
			$data['cover_height'] = 500;
		}

		if (isset($this->request->post['cover_position'])) {
			$data['cover_position'] = $this->request->post['cover_position'];
		} elseif (isset($module_info['cover_position'])) {
			$data['cover_position'] = $module_info['cover_position'];
		} else {
			$data['cover_position'] = false;
		}

		if (isset($this->request->post['menu_color'])) {
			$data['menu_color'] = $this->request->post['menu_color'];
		} elseif (isset($module_info['menu_color'])) {
			$data['menu_color'] = $module_info['menu_color'];
		} else {
			$data['menu_color'] = false;
		}

		if (isset($this->request->post['menu_text_color'])) {
			$data['menu_text_color'] = $this->request->post['menu_text_color'];
		} elseif (isset($module_info['menu_text_color'])) {
			$data['menu_text_color'] = $module_info['menu_text_color'];
		} else {
			$data['menu_text_color'] = false;
		}

		if (isset($this->request->post['style'])) {
			$data['style'] = $this->getFile($data['type'] .  '_' . ($data['design'] == 'own' ? 'own_' . (int)$data['design_id'] : (int)$data['design']) . '_replace', 'css');
		} elseif (isset($module_info['style'])) {
			$data['style'] = $module_info['style'];
		} else {
			$data['style'] = false;
		}

		if (isset($this->request->post['script'])) {
			$data['script'] = $this->getFile($data['type'] .  '_' . ($data['design'] == 'own' ? 'own_' . (int)$data['design_id'] : (int)$data['design']) . '_replace', 'js');
		} elseif (isset($module_info['script'])) {
			$data['script'] = $module_info['script'];
		} else {
			$data['script'] = false;
		}

		if (isset($this->request->post['cache'])) {
			$data['cache'] = $this->request->post['cache'];
		} elseif (isset($module_info['cache'])) {
			$data['cache'] = $module_info['cache'];
		} else {
			$data['cache'] = false;
		}

		$data['ajax'] = $ajax;

		if (isset($this->request->post['rating_count'])) {
			$data['rating_count'] = $this->request->post['rating_count'];
		} elseif (isset($module_info['rating_count'])) {
			$data['rating_count'] = $module_info['rating_count'];
		} else {
			$data['rating_count'] = false;
		}

		if (isset($this->request->post['rating_count_check'])) {
			$data['rating_count_check'] = $this->request->post['rating_count_check'];
		} elseif (isset($module_info['rating_count_check'])) {
			$data['rating_count_check'] = $module_info['rating_count_check'];
		} else {
			$data['rating_count_check'] = array();
		}

		if (isset($this->request->post['rating_count_path_not'])) {
			$data['rating_count_path_not'] = $this->request->post['rating_count_path_not'];
		} elseif (isset($module_info['rating_count_path_not'])) {
			$data['rating_count_path_not'] = $module_info['rating_count_path_not'];
		} else {
			$data['rating_count_path_not'] = false;
		}

		if (isset($this->request->post['price_count'])) {
			$data['price_count'] = $this->request->post['price_count'];
		} elseif (isset($module_info['price_count'])) {
			$data['price_count'] = $module_info['price_count'];
		} else {
			$data['price_count'] = false;
		}

		if (isset($this->request->post['price_count_path_not'])) {
			$data['price_count_path_not'] = $this->request->post['price_count_path_not'];
		} elseif (isset($module_info['price_count_path_not'])) {
			$data['price_count_path_not'] = $module_info['price_count_path_not'];
		} else {
			$data['price_count_path_not'] = false;
		}

		if (isset($this->request->post['cat_count'])) {
			$data['cat_count'] = $this->request->post['cat_count'];
		} elseif (isset($module_info['cat_count'])) {
			$data['cat_count'] = $module_info['cat_count'];
		} else {
			$data['cat_count'] = false;
		}

		if (isset($this->request->post['product_count'])) {
			$data['product_count'] = $this->request->post['product_count'];
		} elseif (isset($module_info['product_count'])) {
			$data['product_count'] = $module_info['product_count'];
		} else {
			$data['product_count'] = false;
		}

		if (isset($this->request->post['debug'])) {
			$data['debug'] = $this->request->post['debug'];
		} elseif (isset($module_info['debug'])) {
			$data['debug'] = $module_info['debug'];
		} else {
			$data['debug'] = false;
		}

		$data['text_title'] = 'text_title';
		$data['text_message_header'] = '';
		$data['entry_server'] = '';
		$data['entry_local'] = '';
		$data['text_message_footer'] = 'max_input_vars';

		$suhosin_post_max_vars = (int)ini_get('suhosin.post.max_vars');
		$data['max_input_vars_cut'] = 50;

        if ($suhosin_post_max_vars) {
			$suhosin_request_max_vars = (int)ini_get('suhosin.request.max_vars');
			if ($suhosin_post_max_vars < $suhosin_request_max_vars) {
				$data['max_input_vars'] = $suhosin_post_max_vars;
				$data['error_max_input_vars'] = sprintf($this->language->get('error_max_input_vars'), 'suhosin.post.max_vars', $data['max_input_vars'], ($data['max_input_vars'] - $data['max_input_vars_cut']), $data['max_input_vars_cut']);
			} else {
				$data['max_input_vars'] = $suhosin_request_max_vars;
				$data['error_max_input_vars'] = sprintf($this->language->get('error_max_input_vars'), 'suhosin.request.max_vars', $data['max_input_vars'], ($data['max_input_vars'] - $data['max_input_vars_cut']), $data['max_input_vars_cut']);
			}
		} else {
			$data['max_input_vars'] = (int)ini_get('max_input_vars');
			$data['error_max_input_vars'] = sprintf($this->language->get('error_max_input_vars'), 'max_input_vars', $data['max_input_vars'], ($data['max_input_vars'] - $data['max_input_vars_cut']), $data['max_input_vars_cut']);
        }

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		if ($this->version_oc >= 3) {
			$template_engine = $this->registry->get('config')->get('template_engine');
			$this->registry->get('config')->set('template_engine', 'template');
		}

		$template = $this->load->view($this->paths['view']['bus_menu'], $data);

		if ($this->version_oc >= 3) {
			$this->registry->get('config')->set('template_engine', $template_engine);
			$this->response->addHeader('Content-Type: text/html; charset=utf-8');
		}

		$this->response->setOutput($template);
	}

	private function catGroups($data = array(), $level_limit = -1) {
		$cats = array();
		$status = false;
		$permission = array('blog_category', 'category');
		if (isset($data['submanufacturers_status'])) {
			$permission[] = 'manufacturer';
		}

		if (in_array($data['table'], $permission)) {
			if ($data['level_limit'] < 0) {
				$data['level_limit'] = 0;
			}
			$status = true;
		} else {
			$data['level_limit'] = 0;
			$status = false;
		}

		if (isset($data['level_limit']) && $data['level_limit'] > $level_limit) {
			$status = true;
		} else {
			$status = false;
		}

		if ($status) {
			$level_limit++;
			foreach ($this->{$this->paths['model']['bus_menu_path']}->getCats($data) as $result) {
				$data['id'] = $result[$data['table'] . '_id'];
				$resultDesc = $this->{$this->paths['model']['bus_menu_path']}->getCatsDesc($data);
				$result['name'] = $resultDesc['name'];
				//$result['title'] = $resultDesc['title'];
				//$result['description'] = $resultDesc['description'];
				if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
					$image = $result['image'];
					$thumb = $result['image'];
				} else {
					$image = false;
					$thumb = 'no_image.png';
				}

				$cats[] = array(
					'children'     => $this->catGroups($data, $level_limit),
					'row'          => $result[$data['table'] . '_id'],
					'status' 	   => (isset($result['status']) ? $result['status'] : true),
					'query' 	   => ($data['table'] == 'category' ? 'path' : $data['table'] . '_id') . '=' . $result[$data['table'] . '_id'],
					'image_status' => true,
					'image' 	   => $image,
					'thumb' 	   => $this->model_tool_image->resize($thumb, 100, 100),
					'name'		   => $result['name'],
					//'title'		   => $result['title'],
					//'desc'		   => $result['description'],
					'href'  	   => $this->url->link($data['route'],  ($data['table'] == 'category' ? 'path' : $data['table'] . '_id') . '=' . $result[$data['table'] . '_id'])
				);
			}
		}

		return $cats;
	}

	public function ajax() {
		$json = false;

		if (!$this->validate()) {
			exit;
		}

		if (isset($this->request->post['module_id'])) {
			$module_id = (int)$this->request->post['module_id'];
		} else {
			$module_id = 0;
		}

		if (isset($this->request->post['row'])) {
			$row = (int)$this->request->post['row'];
			$id_all = false;
		} else {
			$row = 1;
			$id_all = true;
		}

		if (!empty($this->request->post['query'])) {
			$query = $this->request->post['query'];
		} else {
			$query = 'other=0';
		}

		if (!empty($this->request->post['type'])) {
			$type = $this->request->post['type'];
		} else {
			$type = 'horizontal';
		}

		if (!empty($this->request->post['level_limit'])) {
			$level_limit = $this->request->post['level_limit'];
		} else {
			$level_limit = 0;
		}

		if (isset($this->request->post['image_status']) && !empty($this->request->post['image_status'])) {
			$image_status = true;
		} else {
			$image_status = false;
		}

		foreach ($this->load->language($this->paths['language']['bus_menu']) as $key => $lang) {
			$data[$key] = $lang;
		}

		$this->load->model($this->paths['model']['bus_menu']);

		$this->load->model('localisation/language');

		$this->load->model('tool/image');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$language_id = $this->config->get('config_language_id');

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$setting = array(
			'text_edit' => $data['text_edit'],
			'text_enabled' => $data['text_enabled'],
			'text_disabled' => $data['text_disabled'],
			'text_left' => $data['text_left'],
			'text_right' => $data['text_right'],
			'text_top' => $data['text_top'],
			'text_bottom' => $data['text_bottom'],
			'text_left_top' => $data['text_left_top'],
			'text_right_top' => $data['text_right_top'],
			'text_left_bottom' => $data['text_left_bottom'],
			'text_right_bottom' => $data['text_right_bottom'],
			'entry_cats_name' => $data['entry_cats_name'],
			'entry_cats_link' => $data['entry_cats_link'],
			'entry_cats_title' => $data['entry_cats_title'],
			'entry_cats_desc' => $data['entry_cats_desc'],
			'entry_cats_column' => $data['entry_cats_column'],
			'entry_lg' => $data['entry_lg'],
			'entry_md' => $data['entry_md'],
			'entry_sm' => $data['entry_sm'],
			'entry_xs' => $data['entry_xs'],
			'entry_status' => $data['entry_status'],
			'help_cats_image' => $data['help_cats_image'],
			'help_cats_image_position' => $data['help_cats_image_position'],
			'help_cats_image_status' => $data['help_cats_image_status'],
			'help_cats_sticker' => $data['help_cats_sticker'],
			'help_cats_sticker_position' => $data['help_cats_sticker_position'],
			'help_cats_sticker_status' => $data['help_cats_sticker_status'],
			'help_cover' => $data['help_cover'],
			'help_cover_position' => $data['help_cover_position'],
			'help_cats_name' => $data['help_cats_name'],
			'help_cats_link' => $data['help_cats_link'],
			'help_cats_title' => $data['help_cats_title'],
			'help_cats_desc' => $data['help_cats_desc'],
			'help_cats_column' => $data['help_cats_column'],
			'help_lg' => $data['help_lg'],
			'help_md' => $data['help_md'],
			'help_sm' => $data['help_sm'],
			'help_xs' => $data['help_xs'],
			'button_delete' => $data['button_delete'],
			'button_link_add' => $data['button_link_add'],
			'button_link_add_group' => $data['button_link_add_group'],
			'button_link_add_group_status' => $data['button_link_add_group_status'],
			'languages' => $data['languages'],
			'language_id' => $language_id,
			'placeholder' => $data['placeholder'],
			'image_status' => $image_status,
		);

		if ($module_id) {
			$module_info = $this->configGet($module_id);
			if (isset($module_info['image_status'])) {
				$setting['image_status'] = $module_info['image_status'];
			}
		} else {
			$filter_data = array(
				'order' => 'ASC',
			);
			$queries = explode('=', $query);
			$filter_data['table'] = str_replace('_id', '', $queries[0]);
			if (!empty($queries[1])) {
				$filter_data['id'] = (int)$queries[1];
			}
			if ($filter_data['table'] == 'blog_category') {
				$filter_data['route'] = 'blog/category';
			} elseif ($filter_data['table'] == 'article') {
				$filter_data['route'] = 'blog/article';
			} elseif ($filter_data['table'] == 'information') {
				$filter_data['route'] = 'information/information';
			} elseif ($filter_data['table'] == 'manufacturer') {
				$filter_data['route'] = 'product/manufacturer/info';
			} elseif ($filter_data['table'] == 'category' || $filter_data['table'] == 'path') {
				$filter_data['table'] = 'category';
				$filter_data['route'] = 'product/' . $filter_data['table'];
			}
			if ($id_all) {
				$filter_data['id_all'] = $id_all;
			}
			$filter_data['level_limit'] = $level_limit;
			$filter_data['order'] = 'ASC';
			if ($filter_data['table'] == 'information') {
				$filter_data['sort'] = 'cd.title';
			} elseif ($filter_data['table'] == 'manufacturer') {
				$filter_data['sort'] = 'c.name';
			} else {
				$filter_data['sort'] = 'cd.name';
			}

			$filter_data['row'] = $row;

			$module_info['cats_' . $type] = $this->catGroups($filter_data);
		}

		if (!empty($module_info['cats_' . $type])) {
		    $json = $this->children_view($module_info['cats_' . $type], $setting);
		}

		//$this->response->addHeader('Content-Type: application/json');
		//$this->response->setOutput(json_encode($json, JSON_HEX_AMP));
		$this->response->setOutput($json);
	}

	public function autocomplete() {
		$json = array();

		if (isset($this->request->get['filter_name'])) {
			$filter_name = $this->request->get['filter_name'];
		} else {
			$filter_name = null;
		}

		if (isset($filter_name)) {
			if (isset($this->request->get['seo_now'])) {
				$url = $this->url($this->request->get['seo_now']);
			} else {
				$url = $this->url(0);
			}

			$this->load->language($this->paths['language']['bus_menu']);

			$this->load->model('tool/image');

			$this->load->model($this->paths['model']['bus_menu']);

			if ($this->config->get('configblog_article_limit') != null) {
				$filter_data = array();
				$filter_data['table'] = 'blog_category';
				$filter_data['name_stock'] = true;
				$filter_data['filter_name'] = $filter_name == $this->language->get('text_other') ? '' : $filter_name;
				$filter_data['sort'] = 'cd.name';
				$filter_data['order'] = 'ASC';
				$filter_data['start'] = 0;
				$filter_data['limit'] = $this->config->get('config_limit_admin');

				$results = $this->{$this->paths['model']['bus_menu_path']}->getCats($filter_data);

				foreach ($results as $result) {
					$filter_data['id'] = $result['blog_category_id'];
					$resultDesc = $this->{$this->paths['model']['bus_menu_path']}->getCatsDesc($filter_data);
					$result['name'] = $resultDesc['name'];
					if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
						$image = $result['image'];
						$thumb = $result['image'];
					} else {
						$image = false;
						$thumb = 'no_image.png';
					}

					$json[] = array(
						'text'		 => $this->language->get('text_blog_category'),
						'name_stock' => strip_tags(html_entity_decode($result['name_stock'], ENT_QUOTES, 'UTF-8')),
						'status' 	 => (isset($result['status']) ? $result['status'] : true),
						'query' 	 => 'blog_category_id=' . $result['blog_category_id'],
						'image' 	 => $image,
						'thumb' 	 => $this->model_tool_image->resize($thumb, 100, 100),
						'name'		 => $result['name'],
						'href'  	 => $url->link('blog/category',  'blog_category_id=' . $result['blog_category_id'])
					);
				}

				$filter_data = array();
				$filter_data['table'] = 'article';
				$filter_data['name_stock'] = true;
				$filter_data['filter_name'] = $filter_name == $this->language->get('text_other') ? '' : $filter_name;
				$filter_data['sort'] = 'cd.name';
				$filter_data['order'] = 'ASC';
				$filter_data['start'] = 0;
				$filter_data['limit'] = $this->config->get('config_limit_admin');

				$results = $this->{$this->paths['model']['bus_menu_path']}->getCats($filter_data);

				foreach ($results as $result) {
					$filter_data['id'] = $result['article_id'];
					$resultDesc = $this->{$this->paths['model']['bus_menu_path']}->getCatsDesc($filter_data);
					$result['name'] = $resultDesc['name'];
					if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
						$image = $result['image'];
						$thumb = $result['image'];
					} else {
						$image = false;
						$thumb = 'no_image.png';
					}

					$json[] = array(
						'text'  	 => $this->language->get('text_article'),
						'name_stock' => strip_tags(html_entity_decode($result['name_stock'], ENT_QUOTES, 'UTF-8')),
						'status' 	 => (isset($result['status']) ? $result['status'] : true),
						'query' 	 => 'article_id=' . $result['article_id'],
						'image' 	 => $image,
						'thumb' 	 => $this->model_tool_image->resize($thumb, 100, 100),
						'name'		 => $result['name'],
						'href'  	 => $url->link('blog/article',  'article_id=' . $result['article_id'])
					);
				}
			}

			$filter_data = array();
			$filter_data['table'] = 'category';
			$filter_data['name_stock'] = true;
			$filter_data['filter_name'] = $filter_name == $this->language->get('text_other') ? '' : $filter_name;
			$filter_data['sort'] = 'cd.name';
			$filter_data['order'] = 'ASC';
			$filter_data['start'] = 0;
			$filter_data['limit'] = $this->config->get('config_limit_admin');

			$results = $this->{$this->paths['model']['bus_menu_path']}->getCats($filter_data);

			foreach ($results as $result) {
				$filter_data['id'] = $result['category_id'];
				$resultDesc = $this->{$this->paths['model']['bus_menu_path']}->getCatsDesc($filter_data);
				$result['name'] = $resultDesc['name'];
				if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
					$image = $result['image'];
					$thumb = $result['image'];
				} else {
					$image = false;
					$thumb = 'no_image.png';
				}

				$json[] = array(
					'text'  	 => $this->language->get('text_category'),
					'name_stock' => strip_tags(html_entity_decode($result['name_stock'], ENT_QUOTES, 'UTF-8')),
					'status' 	 => (isset($result['status']) ? $result['status'] : true),
					'query' 	 => 'path=' . $result['category_id'],
					'image' 	 => $image,
					'thumb' 	 => $this->model_tool_image->resize($thumb, 100, 100),
					'name'		 => $result['name'],
					'href'  	 => $url->link('product/category',  'path=' . $result['category_id'])
				);
			}

			$filter_data = array();
			$filter_data['table'] = 'information';
			$filter_data['name_stock'] = true;
			$filter_data['filter_name'] = $filter_name == $this->language->get('text_other') ? '' : $filter_name;
			$filter_data['sort'] = 'cd.title';
			$filter_data['order'] = 'ASC';
			$filter_data['start'] = 0;
			$filter_data['limit'] = $this->config->get('config_limit_admin');

			$results = $this->{$this->paths['model']['bus_menu_path']}->getCats($filter_data);

			foreach ($results as $result) {
				$filter_data['id'] = $result['information_id'];
				$resultDesc = $this->{$this->paths['model']['bus_menu_path']}->getCatsDesc($filter_data);
				$result['name'] = $resultDesc['name'];
				$image = false;
				$thumb = 'no_image.png';

				$json[] = array(
					'text'   	 => $this->language->get('text_information'),
					'name_stock' => strip_tags(html_entity_decode($result['name_stock'], ENT_QUOTES, 'UTF-8')),
					'status' 	 => (isset($result['status']) ? $result['status'] : true),
					'query' 	 => 'information_id=' . $result['information_id'],
					'image' 	 => $image,
					'thumb' 	 => $this->model_tool_image->resize($thumb, 100, 100),
					'name'		 => $result['name'],
					'href'  	 => $url->link('information/information',  'information_id=' . $result['information_id'])
				);
			}

			$filter_data = array();
			$filter_data['table'] = 'manufacturer';
			$filter_data['name_stock'] = true;
			$filter_data['filter_name'] = $filter_name == $this->language->get('text_other') ? '' : $filter_name;
			$filter_data['sort'] = 'c.name';
			$filter_data['order'] = 'ASC';
			$filter_data['start'] = 0;
			$filter_data['limit'] = $this->config->get('config_limit_admin');

			$results = $this->{$this->paths['model']['bus_menu_path']}->getCats($filter_data);

			foreach ($results as $result) {
				$filter_data['id'] = $result['manufacturer_id'];
				$resultDesc = $this->{$this->paths['model']['bus_menu_path']}->getCatsDesc($filter_data);
				$result['name'] = $resultDesc['name'];
				if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
					$image = $result['image'];
					$thumb = $result['image'];
				} else {
					$image = false;
					$thumb = 'no_image.png';
				}

				$json[] = array(
					'text'  	 => $this->language->get('text_manufacturer'),
					'name_stock' => strip_tags(html_entity_decode($result['name_stock'], ENT_QUOTES, 'UTF-8')),
					'status' 	 => (isset($result['status']) ? $result['status'] : true),
					'query' 	 => 'manufacturer_id=' . $result['manufacturer_id'],
					'image' 	 => $image,
					'thumb' 	 => $this->model_tool_image->resize($thumb, 100, 100),
					'name'		 => $result['name'],
					'href'  	 => $url->link('product/manufacturer/info',  'manufacturer_id=' . $result['manufacturer_id'])
				);
			}

			$filter_data = array();
			$filter_data['table'] = 'product';
			$filter_data['name_stock'] = true;
			$filter_data['filter_name'] = $filter_name == $this->language->get('text_other') ? '' : $filter_name;
			$filter_data['sort'] = 'cd.name';
			$filter_data['order'] = 'ASC';
			$filter_data['start'] = 0;
			$filter_data['limit'] = $this->config->get('config_limit_admin');

			$results = $this->{$this->paths['model']['bus_menu_path']}->getCats($filter_data);

			foreach ($results as $result) {
				$filter_data['id'] = $result['product_id'];
				$resultDesc = $this->{$this->paths['model']['bus_menu_path']}->getCatsDesc($filter_data);
				$result['name'] = $resultDesc['name'];
				if ($result['image'] && is_file(DIR_IMAGE . $result['image'])) {
					$image = $result['image'];
					$thumb = $result['image'];
				} else {
					$image = false;
					$thumb = 'no_image.png';
				}

				$json[] = array(
					'text'  	 => $this->language->get('text_product'),
					'name_stock' => strip_tags(html_entity_decode($result['name_stock'], ENT_QUOTES, 'UTF-8')),
					'status' 	 => (isset($result['status']) ? $result['status'] : true),
					'query' 	 => 'product_id=' . $result['product_id'],
					'image' 	 => $image,
					'thumb' 	 => $this->model_tool_image->resize($thumb, 100, 100),
					'name'		 => $result['name'],
					'href'  	 => $url->link('product/product',  'product_id=' . $result['product_id'])
				);
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json, JSON_HEX_AMP));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', $this->paths['controller']['bus_menu'])) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (isset($this->request->post['name'])) {
			if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
				$this->error['name'] = $this->language->get('error_name');
			}
		}

		if (isset($this->request->post['width_1'])) {
			if (!$this->request->post['width_1']) {
				$this->error['width_1'] = $this->language->get('error_width');
				$this->error['warning'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['height_1'])) {
			if (!$this->request->post['height_1']) {
				$this->error['height_1'] = $this->language->get('error_height');
				$this->error['warning'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['width_2'])) {
			if (!$this->request->post['width_2']) {
				$this->error['width_2'] = $this->language->get('error_width');
				$this->error['warning'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['height_2'])) {
			if (!$this->request->post['height_2']) {
				$this->error['height_2'] = $this->language->get('error_height');
				$this->error['warning'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['width_3'])) {
			if (!$this->request->post['width_3']) {
				$this->error['width_3'] = $this->language->get('error_width');
				$this->error['warning'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['height_3'])) {
			if (!$this->request->post['height_3']) {
				$this->error['height_3'] = $this->language->get('error_height');
				$this->error['warning'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['cover_width'])) {
			if (!$this->request->post['cover_width']) {
				$this->error['cover_width'] = $this->language->get('error_width');
				$this->error['warning'] = $this->language->get('error_warning');
			}
		}

		if (isset($this->request->post['cover_height'])) {
			if (!$this->request->post['cover_height']) {
				$this->error['cover_height'] = $this->language->get('error_height');
				$this->error['warning'] = $this->language->get('error_warning');
			}
		}

		return !$this->error;
	}

	// установка
	public function install() {
		$this->load->language($this->paths['language']['bus_menu']);

		// посылыаем на йух
		if ($this->version_oc >= 2.3) {
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
			$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_menu` (`module_id` int(11) NOT NULL, `setting` text NOT NULL, `cats` mediumtext NOT NULL, PRIMARY KEY (`module_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");
			$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "bus_menu_to_store` (`module_id` int(11) NOT NULL, `store_id` int(11) NOT NULL, PRIMARY KEY (`module_id`,`store_id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8");

			// создаём индекс status товара, если его нет
			/* $result = $this->db->query("SHOW INDEX FROM `" . DB_PREFIX . "product` where Key_name='status'");
			if ($result->num_rows == 0) {
				$this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ADD KEY status (status)");
			} */

			// включаем модификатор модуля, если заливался в БД
			$this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->enableModification($code['modification_id']);
			}

			// создаём копию из резерва и переименовываем модификатор, если заливался в system
			$file = $this->getFile('library', 'xml_');

			$this->setFile(false, $file, 'xml');

			// создаём событие
			//$this->load->model($this->paths['model']['event']); 

			//if ($this->version_oc >= 3) {
			//	$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_menu'] . '/event');

			//	if (!$code) {
			//		$this->{$this->paths['model']['event_path']}->addEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_menu'] . '/event', 1, 1001);
			//	}
			//}

			// чистим кэши необходимые для модуля
			//$this->cache->delete('*');
			$this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			$this->cache->delete('article');
			$this->cache->delete('category');
			$this->cache->delete('information');
			$this->cache->delete('manufacturer');
			$this->cache->delete('product');
			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url');
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
	setTimeout('successModule()', 2000);
}

function successModule() {
	$('.alert-success').html('<i class="fa fa-check-circle"></i> $success_install <button type="button" class="close" data-dismiss="alert">×</button>');
	$('a, button, select, input').removeAttr('disabled');
}
//--></script>
HTML;

			if ($this->version_oc >= 2.3) {
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
		$this->load->language($this->paths['language']['bus_menu']);

		// посылыаем на йух
		if ($this->version_oc >= 2.3) {
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
			$this->db->query("TRUNCATE `" . DB_PREFIX . "bus_menu`");
			$this->db->query("TRUNCATE `" . DB_PREFIX . "bus_menu_to_store`");
			$this->db->query("DELETE FROM " . DB_PREFIX . "setting WHERE `code` = 'bus_menu'");

			// выключаем модификатор модуля
			$this->load->model($this->paths['model']['modification']);

			$code = $this->{$this->paths['model']['modification_path']}->getModificationByCode($this->code);

			if ($code) {
				$this->{$this->paths['model']['modification_path']}->disableModification($code['modification_id']);
			}

			// удаляем копию модификатора созданную из резерва, если заливался в system
			$this->deleteFile(false, 'xml');

			// удаляем событие
			//$this->load->model($this->paths['model']['event']); 

			//if ($this->version_oc >= 3) {
			//	$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_menu'] . '/event');

			//	if ($code) {
			//		$this->{$this->paths['model']['event_path']}->deleteEvent($this->name_arhive);
			//	}
			//}

			// чистим кэши необходимые для модуля
			//$this->cache->delete('*');
			$this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			$this->cache->delete('article');
			$this->cache->delete('category');
			$this->cache->delete('information');
			$this->cache->delete('manufacturer');
			$this->cache->delete('product');
			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url');
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

			$url_uninstall_files = $this->url->link($this->paths['controller']['bus_menu'] . '/uninstallFiles', $this->paths['token'], true);
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
	setTimeout('successModule()', 2000);
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

			if ($this->version_oc >= 2.3) {
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
		$this->load->language($this->paths['language']['bus_menu']);

		// посылыаем на йух
		if ($this->version_oc >= 2.3) {
			if (!$this->user->hasPermission('modify', 'extension/extension/module') || !$this->user->hasPermission('modify', $this->paths['controller']['bus_menu'])) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		} else {
			if (!$this->user->hasPermission('modify', 'extension/module') || !$this->user->hasPermission('modify', $this->paths['controller']['bus_menu'])) {
				$this->error['warning'] = $this->language->get('error_permission');
			}
		}

		if (!$this->error) {
			// удаляем права администратора
			$this->load->model('user/user_group');

			foreach ($this->model_user_user_group->getUserGroups() as $result) {
				if ($this->version_oc >= 4) {
					$this->model_user_user_group->removePermission($result['user_group_id'], 'access', $this->paths['controller']['bus_menu']);
					$this->model_user_user_group->removePermission($result['user_group_id'], 'modify', $this->paths['controller']['bus_menu']);
				} else {
					$users = array();
					$users[0]['user_group_id'] = $result['user_group_id'];
					$users[0]['type'] = 'access';
					$users[0]['route'] = $this->paths['controller']['bus_menu'];
					$users[1]['user_group_id'] = $result['user_group_id'];
					$users[1]['type'] = 'modify';
					$users[1]['route'] = $this->paths['controller']['bus_menu'];

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
			$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_menu`");
			$this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "bus_menu_to_store`");

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
			//	$code = $this->{$this->paths['model']['event_path']}->getEvent($this->name_arhive, 'catalog/view/*/after', $this->paths['controller']['bus_menu'] . '/event');

			//	if ($code) {
			//		$this->{$this->paths['model']['event_path']}->deleteEvent($this->name_arhive);
			//	}
			//}

			// готовим данные для php
			$db_paths = array(
				DB_PREFIX . 'bus_menu',
				DB_PREFIX . 'bus_menu_to_store',
			);

			$module_paths = array(
				// 2.1 OpenCart
				DIR_APPLICATION . 'controller/module/bus_menu.php',
				DIR_APPLICATION . 'model/module/bus_menu.php',
				DIR_APPLICATION . 'view/javascript/buslikdrev/colorpicker[NAGIBATOR]',
				DIR_APPLICATION . 'view/javascript/buslikdrev/nestable[NAGIBATOR]',
				DIR_APPLICATION . 'view/javascript/buslikdrev',
				DIR_APPLICATION . 'view/template/module/bus_menu',
				DIR_CATALOG . 'controller/module/bus_menu.php',
				DIR_CATALOG . 'model/module/bus_menu.php',
				// 2.3 и 3.0 OpenCart
				DIR_APPLICATION . 'controller/extension/module/bus_menu.php',
				DIR_APPLICATION . 'model/extension/module/bus_menu.php',
				//DIR_APPLICATION . 'view/javascript/buslikdrev/colorpicker[NAGIBATOR]',
				//DIR_APPLICATION . 'view/javascript/buslikdrev/nestable[NAGIBATOR]',
				//DIR_APPLICATION . 'view/javascript/buslikdrev',
				DIR_APPLICATION . 'view/template/extension/module/bus_menu',
				DIR_CATALOG . 'controller/extension/module/bus_menu.php',
				DIR_CATALOG . 'model/extension/module/bus_menu.php',
				DIR_SYSTEM . 'library/bus_menu.ocmod.xml_',
				DIR_SYSTEM . 'bus_menu.ocmod.xml',
			);

			// проверяем и удаляем со всех языковых файлов
			foreach (glob(DIR_APPLICATION . 'language/*') as $path) {
				$module_paths[] = $path . '/module/bus_menu[NAGIBATOR]';
				$module_paths[] = $path . '/extension/module/bus_menu[NAGIBATOR]';
			}

			foreach (glob(DIR_CATALOG . 'language/*') as $path) {
				$module_paths[] = $path . '/module/bus_menu[NAGIBATOR]';
				$module_paths[] = $path . '/extension/module/bus_menu[NAGIBATOR]';
			}

			// проверяем и удаляем со всех тем
			foreach (glob(DIR_CATALOG . 'view/theme/*') as $path) {
				$module_paths[] = $path . '/stylesheet/bus_menu[NAGIBATOR]';
				$module_paths[] = $path . '/javascript/bus_menu[NAGIBATOR]';
				$module_paths[] = $path . '/javascript';
				$module_paths[] = $path . '/template/module/bus_menu[NAGIBATOR]';
				$module_paths[] = $path . '/template/extension/module/bus_menu[NAGIBATOR]';
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

			// Log
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
		$this->load->language($this->paths['language']['bus_menu']);

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
		if ($this->validate() && ($this->request->server['REQUEST_METHOD'] != 'POST') && isset($this->request->get['module_id']) && version_compare($this->version, $version, '>')) {
			if (version_compare('1.1.1', $version, '>')) {
				
			}

			$this->session->data['success'] = $this->modification($this->language->get('heading_title') . $this->language->get('success_update'));
		}
	}

	private function modification($message = false, $data = true) {
		// посылыаем на йух
		if ($this->version_oc >= 2.3) {
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

			// чистим кэши необходимые для модуля
			$this->cache->delete('blog_category');
			//$this->cache->delete('blog_article');
			$this->cache->delete('article');
			$this->cache->delete('category');
			$this->cache->delete('information');
			$this->cache->delete('manufacturer');
			$this->cache->delete('product');
			$this->cache->delete('seo_pro');
			$this->cache->delete('seo_url');
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
				setTimeout(ocmodClearlog, 2000);
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
				setTimeout(ocmodRefresh, 2000);
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
				setTimeout(successModule, 2000);
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
