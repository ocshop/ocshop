<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2024; BuslikDrev - Усе правы захаваны.

namespace Bus_Cache;
//namespace Opencart\Extension\Bus_Cache\System\library\Bus_Cache;

// забараняем прамы доступ
if (!defined('VERSION')) {
	header('Refresh: 1; URL=/');
	exit('ЗАПРЫШЧАЮ!');
}

class Image {
	private $registry;

	public function __construct($registry) {
		$this->registry = $registry;
	}

	public function resize($filename = false, $width = 0, $height = 0) {
		if ($filename) {
			$width = (int)$width;
			$height = (int)$height;
			if ($this->registry->get('config')->get('config_ssl') && $this->registry->get('request')->server['HTTPS']) {
				return $this->registry->get('config')->get('config_ssl') . '?bus_cache_first_boot=' . $this->registry->get('bus_cache')->encrypt($this->registry->get('config')->get('config_encryption'), $filename . ',' . $width . ',' . $height) . '&e=-' . $width . 'x' . $height . '.' . pathinfo($filename, PATHINFO_EXTENSION);
			} else {
				return $this->registry->get('config')->get('config_url') . '?bus_cache_first_boot=' . $this->registry->get('bus_cache')->encrypt($this->registry->get('config')->get('config_encryption'), $filename . ',' . $width . ',' . $height) . '&e=-' . $width . 'x' . $height . '.' . pathinfo($filename, PATHINFO_EXTENSION);
			}
		} else {
			return false;
		}
	}
}

class Bus_Cache {
	private $affiliate;
	private $cart;
	private $config;
	private $customer;
	private $db;
	private $session;
	private $registry;
	private $request;
	private $response;
	private $language;
	private $load;
	private $document;
	private $fileType = array(
		'woff'  => array('type' => 'font/woff', 'as' => 'font'),
		'woff'  => array('type' => 'application/font-woff', 'as' => 'font'),
		'woff2' => array('type' => 'font/woff2', 'as' => 'font'),
		'woff2' => array('type' => 'application/font-woff2', 'as' => 'font'),
		'woff'  => array('type' => 'font/woff', 'as' => 'font'),
		'woff2' => array('type' => 'font/woff2', 'as' => 'font'),
		'eot'   => array('type' => 'font/eot', 'as' => 'font'),
		'otf'   => array('type' => 'font/otf', 'as' => 'font'),
		'ttf'   => array('type' => 'font/ttf', 'as' => 'font'),
		'svg'   => array('type' => 'image/svg+xml', 'as' => 'image'),
		'svgz'  => array('type' => 'image/svg+xml', 'as' => 'image'),
		'png'   => array('type' => 'image/png', 'as' => 'image'),
		'jpg'   => array('type' => 'image/jpeg', 'as' => 'image'),
		'jpeg'  => array('type' => 'image/jpeg', 'as' => 'image'),
		'gif'   => array('type' => 'image/gif', 'as' => 'image'),
		'webp'  => array('type' => 'image/webp', 'as' => 'image'),
		'bmp'   => array('type' => 'image/bmp', 'as' => 'image'),
		'ico'   => array('type' => 'image/x-icon', 'as' => 'image'),
		'mp3'   => array('type' => 'audio/mp3', 'as' => 'audio'),
		'mp4'   => array('type' => 'video/mp4', 'as' => 'video'),
		'webm'  => array('type' => 'video/webm', 'as' => 'video'),
		'css'   => array('type' => 'text/css', 'as' => 'style'),
		'js'    => array('type' => 'text/javascript', 'as' => 'script'),
		/* 'html'  => array('type' => 'text/html', 'as' => 'document'),
		'xml'   => array('type' => 'text/xml', 'as' => 'document'),
		'json'  => array('type' => 'text/plain', 'as' => 'xhr'), */
	);
	private $fileExtension = array(
		'font/font-woff'                                  => 'woff',
		'application/font-woff'                           => 'woff',
		'font/font-woff2'                                 => 'woff2',
		'application/font-woff2'                          => 'woff2',
		/* 'video/3gpp2'                                     => '3g2',
		'video/3gp'                                       => '3gp',
		'video/3gpp'                                      => '3gp',
		'application/x-compressed'                        => '7zip',
		'audio/x-acc'                                     => 'aac',
		'audio/ac3'                                       => 'ac3',
		'application/postscript'                          => 'ai',
		'audio/x-aiff'                                    => 'aif',
		'audio/aiff'                                      => 'aif',
		'audio/x-au'                                      => 'au',
		'video/x-msvideo'                                 => 'avi',
		'video/msvideo'                                   => 'avi',
		'video/avi'                                       => 'avi',
		'application/x-troff-msvideo'                     => 'avi', */
		'image/avif'                                      => 'avif',
		/* 'application/macbinary'                           => 'bin',
		'application/mac-binary'                          => 'bin',
		'application/x-binary'                            => 'bin',
		'application/x-macbinary'                         => 'bin', */
		'image/bmp'                                       => 'bmp',
		'image/x-bmp'                                     => 'bmp',
		'image/x-bitmap'                                  => 'bmp',
		'image/x-xbitmap'                                 => 'bmp',
		'image/x-win-bitmap'                              => 'bmp',
		'image/x-windows-bmp'                             => 'bmp',
		'image/ms-bmp'                                    => 'bmp',
		'image/x-ms-bmp'                                  => 'bmp',
		'application/bmp'                                 => 'bmp',
		'application/x-bmp'                               => 'bmp',
		'application/x-win-bitmap'                        => 'bmp',
		'application/cdr'                                 => 'cdr',
		'application/coreldraw'                           => 'cdr',
		'application/x-cdr'                               => 'cdr',
		'application/x-coreldraw'                         => 'cdr',
		'image/cdr'                                       => 'cdr',
		'image/x-cdr'                                     => 'cdr',
		/* 'zz-application/zz-winassoc-cdr'                  => 'cdr',
		'application/mac-compactpro'                      => 'cpt',
		'application/pkix-crl'                            => 'crl',
		'application/pkcs-crl'                            => 'crl',
		'application/x-x509-ca-cert'                      => 'crt',
		'application/pkix-cert'                           => 'crt',
		'text/css'                                        => 'css',
		'text/x-comma-separated-values'                   => 'csv',
		'text/comma-separated-values'                     => 'csv',
		'application/vnd.msexcel'                         => 'csv',
		'application/x-director'                          => 'dcr',
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
		'application/x-dvi'                               => 'dvi',
		'message/rfc822'                                  => 'eml',
		'application/x-msdownload'                        => 'exe',
		'video/x-f4v'                                     => 'f4v',
		'audio/x-flac'                                    => 'flac',
		'video/x-flv'                                     => 'flv', */
		'image/gif'                                       => 'gif',
		/* 'application/gpg-keys'                            => 'gpg',
		'application/x-gtar'                              => 'gtar',
		'application/x-gzip'                              => 'gzip',
		'application/mac-binhex40'                        => 'hqx',
		'application/mac-binhex'                          => 'hqx',
		'application/x-binhex40'                          => 'hqx',
		'application/x-mac-binhex40'                      => 'hqx',
		'application/vnd.oasis.opendocument.text'         => 'odt',
		'application/vnd.oasis.opendocument.spreadsheet'  => 'ods',
		'application/vnd.oasis.opendocument.presentation' => 'odp',
		'text/html'                                       => 'html', */
		'image/x-icon'                                    => 'ico',
		'image/x-ico'                                     => 'ico',
		'image/vnd.microsoft.icon'                        => 'ico',
		/* 'text/calendar'                                   => 'ics',
		'application/java-archive'                        => 'jar',
		'application/x-java-application'                  => 'jar',
		'application/x-jar'                               => 'jar', */
		'image/jp2'                                       => 'jp2',
		'video/mj2'                                       => 'jp2',
		'image/jpx'                                       => 'jp2',
		'image/jpm'                                       => 'jp2',
		'image/jpeg'                                      => 'jpeg',
		'image/pjpeg'                                     => 'jpeg',
		/* 'application/x-javascript'                        => 'js',
		'application/json'                                => 'json',
		'text/json'                                       => 'json',
		'application/vnd.google-earth.kml+xml'            => 'kml',
		'application/vnd.google-earth.kmz'                => 'kmz',
		'text/x-log'                                      => 'log',
		'audio/x-m4a'                                     => 'm4a',
		'application/vnd.mpegurl'                         => 'm4u',
		'audio/midi'                                      => 'mid',
		'application/vnd.mif'                             => 'mif',
		'video/quicktime'                                 => 'mov',
		'video/x-sgi-movie'                               => 'movie',
		'audio/mpeg'                                      => 'mp3',
		'audio/mpg'                                       => 'mp3',
		'audio/mpeg3'                                     => 'mp3',
		'audio/mp3'                                       => 'mp3',
		'video/mp4'                                       => 'mp4',
		'video/mpeg'                                      => 'mpeg',
		'application/oda'                                 => 'oda',
		'audio/ogg'                                       => 'ogg',
		'video/ogg'                                       => 'ogg',
		'application/ogg'                                 => 'ogg',
		'application/x-pkcs10'                            => 'p10',
		'application/pkcs10'                              => 'p10',
		'application/x-pkcs12'                            => 'p12',
		'application/x-pkcs7-signature'                   => 'p7a',
		'application/pkcs7-mime'                          => 'p7c',
		'application/x-pkcs7-mime'                        => 'p7c',
		'application/x-pkcs7-certreqresp'                 => 'p7r',
		'application/pkcs7-signature'                     => 'p7s',
		'application/pdf'                                 => 'pdf',
		'application/octet-stream'                        => 'pdf',
		'application/x-x509-user-cert'                    => 'pem',
		'application/x-pem-file'                          => 'pem',
		'application/pgp'                                 => 'pgp',
		'application/x-httpd-php'                         => 'php',
		'application/php'                                 => 'php',
		'application/x-php'                               => 'php',
		'text/php'                                        => 'php',
		'text/x-php'                                      => 'php',
		'application/x-httpd-php-source'                  => 'php', */
		'image/apng'                                      => 'png',
		'image/png'                                       => 'png',
		'image/x-png'                                     => 'png',
		/* 'application/powerpoint'                          => 'ppt',
		'application/vnd.ms-powerpoint'                   => 'ppt',
		'application/vnd.ms-office'                       => 'ppt',
		'application/msword'                              => 'doc',
		'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx',
		'application/x-photoshop'                         => 'psd',
		'image/vnd.adobe.photoshop'                       => 'psd',
		'audio/x-realaudio'                               => 'ra',
		'audio/x-pn-realaudio'                            => 'ram',
		'application/x-rar'                               => 'rar',
		'application/rar'                                 => 'rar',
		'application/x-rar-compressed'                    => 'rar',
		'audio/x-pn-realaudio-plugin'                     => 'rpm',
		'application/x-pkcs7'                             => 'rsa',
		'text/rtf'                                        => 'rtf',
		'text/richtext'                                   => 'rtx',
		'video/vnd.rn-realvideo'                          => 'rv',
		'application/x-stuffit'                           => 'sit',
		'application/smil'                                => 'smil',
		'text/srt'                                        => 'srt', */
		'image/svg+xml'                                   => 'svg',
		//'image/svg+xml'                                   => 'svgz',
		/* 'application/x-shockwave-flash'                   => 'swf',
		'application/x-tar'                               => 'tar',
		'application/x-gzip-compressed'                   => 'tgz', */
		'image/tiff'                                      => 'tiff',
		/* 'text/plain'                                      => 'txt',
		'text/x-vcard'                                    => 'vcf',
		'application/videolan'                            => 'vlc',
		'text/vtt'                                        => 'vtt',
		'audio/x-wav'                                     => 'wav',
		'audio/wave'                                      => 'wav',
		'audio/wav'                                       => 'wav',
		'application/wbxml'                               => 'wbxml',
		'video/webm'                                      => 'webm', */
		'image/webp'                                      => 'webp',
		/* 'audio/x-ms-wma'                                  => 'wma',
		'application/wmlc'                                => 'wmlc',
		'video/x-ms-wmv'                                  => 'wmv',
		'video/x-ms-asf'                                  => 'wmv',
		'application/xhtml+xml'                           => 'xhtml',
		'application/excel'                               => 'xl',
		'application/msexcel'                             => 'xls',
		'application/x-msexcel'                           => 'xls',
		'application/x-ms-excel'                          => 'xls',
		'application/x-excel'                             => 'xls',
		'application/x-dos_ms_excel'                      => 'xls',
		'application/xls'                                 => 'xls',
		'application/x-xls'                               => 'xls',
		'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'xlsx',
		'application/vnd.ms-excel'                        => 'xlsx',
		'application/xml'                                 => 'xml',
		'text/xml'                                        => 'xml',
		'text/xsl'                                        => 'xsl',
		'application/xspf+xml'                            => 'xspf',
		'application/x-compress'                          => 'z',
		'application/x-zip'                               => 'zip',
		'application/zip'                                 => 'zip',
		'application/x-zip-compressed'                    => 'zip',
		'application/s-compressed'                        => 'zip',
		'multipart/x-zip'                                 => 'zip',
		'text/x-scriptzsh'                                => 'zsh', */
	);
	private $setting_default = array(
		'status'                              => false,
		'cache_status'                        => false,
		'cache_con'                           => false,
		'cache_ses'                           => false,
		'cache_cok'                           => false,
		'cache_par'                           => array(
			'cache_off',
			'_route_',
			'route',
			'blog_article_id',
			'article_id',
			'category_id',
			'path',
			'manufacturer_id',
			'product_id',
			'page',
			'sort',
			'order',
			'limit',
			'language_id'
		),
		'cache_onrot'                         => false,
		'cache_rot'                           => false,
		'cache_customer'                      => false,
		'cache_cart'                          => false,
		'cache_cart_count'                    => 0,
		'cache_controller'                    => false,
		'cache_controller_ajax'               => false,
		'cache_model'                         => false,
		'cache_engine'                        => 'buslik',
		'cache_engine_mine'                   => false,
		'cache_oc'                            => false,
		'cache_expire'                        => 3600,
		'cache_expire_cart'                   => 3600,
		'cache_expire_controller'             => 3600,
		'cache_expire_model'                  => 3600,
		'cache_expire_all'                    => 36000,
		'cache_size_limit'                    => 0,
		'cache_count'                         => 1,
		'pagespeed_status'                    => false,
		'pagespeed_onrot'                     => false,
		'pagespeed_rot'                       => false,
		'pagespeed_image_lazy_load'           => 0,
		'pagespeed_image_first_boot_status'   => 0,
		'pagespeed_image_first_boot_onrot'    => '',
		'pagespeed_image_first_boot_rot'      => '',
		'pagespeed_image_w_h'                 => false,
		'pagespeed_image_webp_status'         => false,
		'pagespeed_image_webp_convert'        => 0,
		'pagespeed_image_webp_quality'        => 100,
		'pagespeed_html_lazy_load'            => array(),
		'pagespeed_html_replace_before'       => false,
		'pagespeed_html_replace_after'        => false,
		'pagespeed_html_min'                  => array(),
		'pagespeed_html_min_tags'             => false,
		'pagespeed_css_replace_before'        => false,
		'pagespeed_css_replace_after'         => false,
		'pagespeed_css_min'                   => array(),
		'pagespeed_css_min_links'             => false,
		'pagespeed_css_min_exception'         => false,
		'pagespeed_css_min_download'          => false,
		'pagespeed_css_min_font'              => false,
		'pagespeed_css_min_convert'           => false,
		'pagespeed_css_min_display'           => false,
		'pagespeed_css_min_url'               => true,
		'pagespeed_css_inline_event'          => false,
		'pagespeed_css_inline_event_time'     => 0,
		'pagespeed_css_inline_transfer'       => 0,
		'pagespeed_css_inline_transfer_onrot' => false,
		'pagespeed_css_inline_exception'      => false,
		'pagespeed_css_events'                => false,
		'pagespeed_css_critical'              => false,
		'pagespeed_css_critical_status'       => false,
		'pagespeed_css_critical_name'         => '',
		'pagespeed_css_critical_all'          => false,
		'pagespeed_css_critical_offset'       => 50,
		'pagespeed_css_critical_time'         => 1,
		'pagespeed_css_critical_elements'     => "font-face\r\nkeyframes\r\n*\r\n::after, ::before\r\n]",
		'pagespeed_css_critical_links'        => false,
		'pagespeed_css_style'                 => false,
		'pagespeed_js_replace_before'         => false,
		'pagespeed_js_replace_after'          => false,
		'pagespeed_js_min'                    => array(),
		'pagespeed_js_min_links'              => false,
		'pagespeed_js_min_exception'          => false,
		'pagespeed_js_min_download'           => false,
		'pagespeed_js_inline_event'           => false,
		'pagespeed_js_inline_event_time'      => 0,
		'pagespeed_js_inline_transfer'        => 0,
		'pagespeed_js_inline_transfer_onrot'  => false,
		'pagespeed_js_inline_exception'       => false,
		'pagespeed_js_events'                 => false,
		'pagespeed_js_script'                 => false,
		'database_status'                     => false,
		'support_disc_size_limit'             => 0,
		'support_debug'                       => false,
		'getDebugSpeed'                       => false,
		'bus_cache_size_limit_one'            => 0,
	);
	private $outputTransfer = array(
		'css'        => array('', '', '', '', '', '', ''),
		'css_inline' => array('', '', '', '', '', '', ''),
		'js'         => array('', '', '', '', '', '', ''),
		'js_inline'  => array('', '', '', '', '', '', ''),
	);
	private $getDebugSpeed = '';
	private $getDebugTime = 0;
	private $controllerDubleId = array();

	//private function start() {}
	//public function output() {}
	//public function encrypt() {}
	//public function decrypt() {}
	//public function controller() {}
	//public function models() {}
	//public function model() {}
	//public function firsBoot() {}
	//public function image() {}
	//private function modification() {}
	//private function realUrlCSS() {}
	//private function minCSS() {}
	//private function minJS() {}
	//private function minHTML() {}
	//private function setDebugSpeed() {}
	//private function examination() {}

	public function __construct($registry = false, $cache_timer = 0) {
		if ($registry) {
			$this->registry = $registry;
			$this->request = $registry->get('request');
			$this->config = $registry->get('config');
			$this->load = $registry->get('load');

			$post = $this->request->post;
			$get = $this->request->get;
			if (!empty($post['bus_cache_ajax'])) {
				if (is_string($post['bus_cache_ajax'])) {
					$this->document = $registry->get('document');

					$bus_cache_ajax = json_decode($this->decrypt($this->config->get('config_encryption'), urldecode($post['bus_cache_ajax'])), true);

					if (json_last_error() === JSON_ERROR_NONE && !empty($bus_cache_ajax['route']) && is_string($bus_cache_ajax['route'])) {
						if (!empty($bus_cache_ajax['get'])) {
							$this->request->get = $bus_cache_ajax['get'];
						}

						if (!empty($bus_cache_ajax['module_id'])) {
							if (version_compare(VERSION, '3.0.0', '>=')) {
								$this->load->model('setting/module');

								$setting_info = $registry->get('model_setting_module')->getModule($bus_cache_ajax['module_id']);
							} else {
								$this->load->model('extension/module');

								$setting_info = $registry->get('model_extension_module')->getModule($bus_cache_ajax['module_id']);
							}

							if ($setting_info && !empty($setting_info['status'])) {
								$output = $this->load->controller($bus_cache_ajax['route'], $setting_info);
							}
						} else {
							if (!is_array($bus_cache_ajax['args'])) {
								$bus_cache_ajax['args'] = array();
							}
							$output = $this->load->controller($bus_cache_ajax['route'], $bus_cache_ajax['args']);
						}

						foreach ($this->document->getScripts('header') as $script) {
							if (!empty($script['href'])) {
								$script = $script['href'];
							}
							if ($script) {
								$output = '<script src="' . $script . '" type="text/javascript"></script>' . $output;
							}
						}
						foreach ($this->document->getStyles('header') as $style) {
							if (!empty($style['href'])) {
								$output = '<link href="' . $style['href'] . '" type="text/css"' . (!empty($style['rel']) ? ' rel="' . $style['rel'] . '"' : '') . (!empty($style['media']) ? ' media="' . $style['media'] . '"' : '') . '>' . $output;
							}
						}
						foreach ($this->document->getScripts('footer') as $script) {
							if (!empty($script['href'])) {
								$script = $script['href'];
							}
							if ($script) {
								$output = $output . '<script src="' . $script . '" type="text/javascript"></script>';
							}
						}

						exit($output);
					}
				}

				exit(header($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404));
			} elseif (!empty($get['bus_cache_first_boot'])) {
				if ($this->config->get('bus_cache_image_first_boot_status') && is_string($get['bus_cache_first_boot'])) {
					$file = explode(',', $this->decrypt($this->config->get('config_encryption'), $get['bus_cache_first_boot']));
				} else {
					$file = array();
				}

				if (count($file) > 2 && is_string($file[0]) && substr(str_replace('\\', '/', realpath(DIR_IMAGE . $file[0])), 0, strlen(DIR_IMAGE)) == DIR_IMAGE && is_string($file[1]) && is_string($file[2])) {
					$image = false;

					if (!$this->registry->get('model_tool_image')) {
						$this->load->model('tool/image');
					}

					if ($this->registry->get('model_tool_image')) {
						$image = $this->registry->get('model_tool_image')->resize($file[0], (int)$file[1], (int)$file[2]);
					}

					$ex = pathinfo($file[0], PATHINFO_EXTENSION);

					if ($image && in_array(strtolower($ex), array('jpg', 'jpeg', 'png', 'gif', 'webp'))) {
						$webp = $this->image(array('filename' => $file[0], 'width' => $file[1], 'height' => $file[2], 'convert' => ($ex != 'webp')));

						if ($webp) {
							$image = '/image/' . $webp;
						}
					}

					if ($image) {
						$image = substr(DIR_IMAGE, 0, -iconv_strlen(basename(DIR_IMAGE) . '/')-1) . parse_url($image, PHP_URL_PATH);
					}

					if ($image && is_file($image)) {
						list($width_orig, $height_orig, $image_type) = getimagesize($image);

						if ($image_type && is_int($image_type)) {
							header('Content-Type: ' . image_type_to_mime_type($image_type), true);

							exit(file_get_contents($image));
						} else {
							if (in_array(strtolower(pathinfo($image, PATHINFO_EXTENSION)), array('svg', 'svgz'))) {
								header('Content-Type: ' . 'image/svg+xml', true);

								exit(file_get_contents($image));
							}
						}
					}
				}

				exit(header($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404));
			} else {
				if (!$registry->has('bus_cache')) {
					$this->start($cache_timer);
				}
			}
		}
	}

	private function start($cache_timer = 0) {
		// загрузка данных
		$this->config = $this->registry->get('config');
		$this->response = $this->registry->get('response');
		$this->document = $this->registry->get('document');

		$setting = $this->config->get('bus_cache');

		if (!$setting) {
			$setting = array();
		}

		$setting['bus_cache_size_limit'] = $this->config->get('bus_cache_size_limit');

		if (empty($setting['status']) || !isset($setting['store'][$this->config->get('config_store_id')])) {
			return false;
		}

		$this->affiliate = $this->registry->get('affiliate');
		$this->cart = $this->registry->get('cart');
		$this->customer = $this->registry->get('customer');
		$this->db = $this->registry->get('db');
		$this->session = $this->registry->get('session');
		$this->language = $this->registry->get('language');
		$this->load = $this->registry->get('load');

		$setting_default = $this->setting_default;
		$setting_default['db'] = $this->db;
		if (version_compare(VERSION, '4.0.0.0', '>=')) {
			$setting_default['config_theme'] = $this->config->get('config_theme');
			$setting_default['config_path_theme'] = 'extension/bus_cache/catalog/view/theme/';
			$setting_default['config_dir_theme'] = substr(DIR_EXTENSION, 0, -iconv_strlen(basename(DIR_EXTENSION) . '/')) . $setting_default['config_path_theme'] . $setting_default['config_theme'];
		} else {
			$setting_default['config_theme'] = ($this->config->get('config_template') ? $this->config->get('config_template') : ($this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') ? $this->config->get('theme_' . str_replace('theme_', '', $this->config->get('config_theme')) . '_directory') : $this->config->get('config_theme')));
			$setting_default['config_path_theme'] = 'catalog/view/theme/';
			$setting_default['config_dir_theme'] = substr(DIR_APPLICATION, 0, -iconv_strlen(basename(DIR_APPLICATION) . '/')) . $setting_default['config_path_theme'] . $setting_default['config_theme'];
		}
		$setting_default['config_store_id'] = (int)$this->config->get('config_store_id');
		$setting_default['config_language_id'] = (int)$this->config->get('config_language_id');
		$setting_default['config_customer_group_id'] = (int)$this->config->get('config_customer_group_id');
		$setting_default['config_maintenance'] = (int)$this->config->get('config_maintenance');

		$setting_default['dir'] = substr(DIR_APPLICATION, 0, -iconv_strlen(basename(DIR_APPLICATION) . '/'));
		$setting_default['dir_len'] = iconv_strlen($setting_default['dir'], 'UTF-8');
		$setting_default['server'] = (!empty($this->config->get('config_ssl')) && !empty($this->request->server['HTTPS']) ? $this->config->get('config_ssl') : $this->config->get('config_url'));
		$setting_default['server_len'] = iconv_strlen($setting_default['server'], 'UTF-8');
		$setting_default['HTTP_HOST'] = (empty($this->request->server['HTTP_HOST']) ? $this->request->server['HTTP_HOST'] : parse_url($setting_default['server'], PHP_URL_HOST));
		$setting_default['img'] = (isset($this->request->server['HTTP_ACCEPT']) && stripos($this->request->server['HTTP_ACCEPT'], 'image/webp') !== false ? 'w' : 'i');

		$setting_default['action_default'] = ($this->config->get('action_default') ? $this->config->get('action_default') : 'common/home');
		$setting_default['action_error'] = ($this->config->get('action_error') ? $this->config->get('action_error') : 'error/not_found');
		$setting_default['route'] = false;
		$setting_default['keyword'] = false;
		$setting_default['cart'] = array();
		$setting_default['config'] = array();
		$setting_default['session'] = array();
		$setting_default['cookie'] = array();
		$setting_default['params'] = array();
		$setting_default['isUser'] = false;

		if (is_array($setting)) {
			$setting_default = array_merge($setting_default, $setting);
		}

		$setting = $setting_default;

		// время загрузки страницы
		$cache_timer = (float)$cache_timer;
		$cache_time = $cache_timer;
		if (isset($this->request->server['REQUEST_TIME_FLOAT'])) {
			$time = (float)str_replace(',', '.', $this->request->server['REQUEST_TIME_FLOAT']);
			if ($time < $cache_timer) {
				$cache_timer = $time;
			}
		}
		if (defined('BUS_CACHE_TIMER')) {
			$time = (float)BUS_CACHE_TIMER;
			if ($time < $cache_timer) {
				$cache_timer = $time;
			}
		}

		// администратор
		if (version_compare(VERSION, '4.0.0', '>=') && !empty($this->request->cookie['bus_cache_support_debug']) && $this->request->cookie['bus_cache_support_debug'] == md5($this->request->server['REMOTE_ADDR'])) {
			$setting['isUser'] = true;
		} else {
			if (isset($this->session->data['user_id']) && (!empty($this->session->data['token']) || !empty($this->session->data['user_token']))) {
				$setting['isUser'] = $this->db->query("SELECT `user_id` FROM `" . DB_PREFIX . "user` WHERE `user_id` = '" . (int)$this->session->data['user_id'] . "' AND `status` = '1'")->num_rows;
			}
		}

		// debug режим
		if ($setting['isUser']) {
			if (!$setting['support_debug'] || $setting['support_debug'] == 2) {
				$setting['cache_status'] = false;
			}
		} else {
			$setting['support_debug'] = false;
		}

		if ($setting['support_debug']) {
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			ini_set('error_reporting', E_ALL);

			if (!defined('CACHE_DEBUG')) {
				define('CACHE_DEBUG', $setting['support_debug']);
			}

			$this->config->set('config_compression', 0);

			if (version_compare(VERSION, '4.0.0', '>=')) {
				$this->load->language('extension/bus_cache/module/bus_cache');
			} elseif (version_compare(VERSION, '2.3.0', '>=')) {
				$this->load->language('extension/module/bus_cache');
			} else {
				$this->load->language('module/bus_cache');
			}

			$setting['text_bus_cache_time'] = $this->language->get('text_bus_cache_time');
			$setting['text_bus_cache_time_off'] = $this->language->get('text_bus_cache_time_off');
			$setting['text_bus_cache_time_controller'] = $this->language->get('text_bus_cache_time_controller');
			$setting['text_bus_cache_time_controller_ajax'] = $this->language->get('text_bus_cache_time_controller_ajax');
			$setting['text_bus_cache_time_model'] = $this->language->get('text_bus_cache_time_model');
			$setting['text_bus_cache_time_image'] = $this->language->get('text_bus_cache_time_image');
			$setting['text_bus_cache_time_html'] = $this->language->get('text_bus_cache_time_html');
			$setting['text_bus_cache_time_html_replace'] = $this->language->get('text_bus_cache_time_html_replace');
			$setting['text_bus_cache_time_html_replace_after'] = $this->language->get('text_bus_cache_time_html_replace_after');
			$setting['text_bus_cache_time_html_transfer'] = $this->language->get('text_bus_cache_time_html_transfer');
			$setting['text_bus_cache_time_css'] = $this->language->get('text_bus_cache_time_css');
			$setting['text_bus_cache_time_js'] = $this->language->get('text_bus_cache_time_js');
			$setting['text_bus_cache_time_inline'] = $this->language->get('text_bus_cache_time_inline');
			$setting['text_bus_cache_time_loading'] = $this->language->get('text_bus_cache_time_loading');
			$setting['text_bus_cache_timer'] = $this->language->get('text_bus_cache_timer');
			$setting['text_bus_cache_timer_off'] = $this->language->get('text_bus_cache_timer_off');
			$setting['text_bus_cache_works'] = $this->language->get('text_bus_cache_works');
			$setting['text_bus_cache_works_off'] = $this->language->get('text_bus_cache_works_off');
			$setting['text_bus_cache_function_works'] = $this->language->get('text_bus_cache_function_works');
			$setting['text_bus_cache_function_works_off'] = $this->language->get('text_bus_cache_function_works_off');
		}

		// critical
		if ($setting['isUser'] && $setting['pagespeed_css_critical'] && $setting['pagespeed_status'] && !empty($setting['pagespeed_css_min'][1])) {
			$setting['cache_status'] = false;
			if (!empty($this->request->post['bus_critical_name']) && strtolower(pathinfo($this->request->post['bus_critical_name'], PATHINFO_EXTENSION)) == 'css') {
				$setting['pagespeed_css_critical_name'] = preg_replace('/[^A-Z0-9\.]/i', '', $this->request->post['bus_critical_name']);
			}
			if (!empty($this->request->post['bus_critical']) && $setting['pagespeed_css_critical_name'] && ($setting['support_debug'] == 2 || !is_file(DIR_IMAGE . 'bus_cache/css/' . $setting['pagespeed_css_critical_name']))) {
				if (!is_dir(DIR_IMAGE . 'bus_cache/css/critical/')) {
					mkdir(DIR_IMAGE . 'bus_cache/css/critical/', 0755, true);
				}
				file_put_contents(DIR_IMAGE . 'bus_cache/css/critical/' . $setting['pagespeed_css_critical_name'], $this->minCSS(urldecode($_POST['bus_critical']), $setting['pagespeed_css_min']));
			}
		}

		// отключаем кэш, если пользователь авторизован
		if (!$setting['cache_customer'] && $setting['cache_status']) {
			if ($this->customer && $this->customer->isLogged() || $this->affiliate && method_exists($this->affiliate, 'isLogged') && $this->affiliate->isLogged()) {
				$setting['cache_status'] = false;
			}
		}

		// отключаем кэш, если товаров в корзине много
		if ($setting['cache_status']) {
			$setting['cart'] = $this->cart->getProducts();
			if (count($setting['cart']) > $setting['cache_cart_count']) {
				$setting['cache_status'] = false;
			}
		}

		// отключаем кэш, если магазин на обслуживании
		if ($setting['config_maintenance'] && !$setting['support_debug']) {
			$setting['cache_status'] = false;
		}

		// ограничение по результату параметров
		if (isset($this->request->get['limit'])) {
			if (is_int($this->config->get('config_limit'))) {
				$limit = $this->config->get('config_limit');
			} elseif (is_int($this->config->get('config_pagination'))) {
				$limit = $this->config->get('config_pagination');
			} else {
				$limit = 100;
			}

			if ($this->request->get['limit'] > $limit) {
				$this->request->get['limit'] = $limit;
			} elseif ($this->request->get['limit'] < 1) {
				unset($this->request->get['limit']);
			}
		}

		if (isset($this->request->get['search']) && $this->request->get['search'] == '') {
			unset($this->request->get['search']);
		}

		// условие обработки роута и keyword
		if ($setting['cache_status'] || $setting['cache_controller'] || $setting['cache_model'] || $setting['pagespeed_status']) {
			if (!empty($this->request->get)) {
				foreach ($this->request->get as $key => $result) {
					$setting['params'][$key] = $result;
				}
			}
			if (!empty($this->request->post)) {
				foreach ($this->request->post as $key => $result) {
					$setting['params'][$key] = $result;
				}
			}
			if (isset($this->request->get['route'])) {
				$setting['route'] = (string)$this->request->get['route'];
			} elseif (isset($this->request->post['route'])) {
				$setting['route'] = (string)$this->request->post['route'];
			} elseif (isset($this->request->get['_route_'])) {
				$setting['route'] = (string)$this->request->get['_route_'];
				// адаптация под модуль multilang
				if ($this->config->get('ocd_multilang_code')) {
					$vrot = substr($setting['route'], 0, strpos($setting['route'], '/'));
					foreach ($this->config->get('ocd_multilang_code') as $lang_code) {
						if ($vrot == $lang_code) {
							$setting['route'] = substr($setting['route'], strlen($lang_code . '/'));
						}
					}
				}
				$setting['keyword'] = basename($setting['route']);
				$str = strstr($setting['keyword'], '.', true);
				if ($str) {
					$setting['keyword'] = $str;
				}

				if (version_compare(VERSION, '4.0.0.0', '>=')) {
					$query = $this->db->query("SELECT CONCAT(`key`, '=', `value`) AS `query` FROM `" . DB_PREFIX . "seo_url` WHERE `store_id` = '" . $setting['config_store_id'] . "' AND `language_id` = '" . $setting['config_language_id'] . "' AND `keyword` = '" . $this->db->escape($setting['keyword']) . "' LIMIT 1");
				} elseif (version_compare(VERSION, '3.0.0', '>=')) {
					$query = $this->db->query("SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `store_id` = '" . $setting['config_store_id'] . "' AND `language_id` = '" . $setting['config_language_id'] . "' AND `keyword` = '" . $this->db->escape($setting['keyword']) . "' LIMIT 1");
				} else {
					$query = $this->db->query("SELECT `query` FROM `" . DB_PREFIX . "url_alias` WHERE `keyword` = '" . $this->db->escape($setting['keyword']) . "' LIMIT 1");
				}
				if ($query->num_rows && $query->row['query']) {
					$param = strstr($query->row['query'], '=', true);

					if ($param) {
						$setting['route'] = $param;
						$setting['params'][$param] = substr(strstr($query->row['query'], '='), 1);
						if ($param == 'category_id') {
							$setting['params']['path'] = $setting['params'][$param];
						}
					} else {
						$setting['route'] = $query->row['query'];
					}
				} else {
					$setting['cache_status'] = false;
				}
			} else {
				$setting['route'] = $setting['action_default'];
			}

			$setting['route'] = str_replace(array('.', '|'), '/', $setting['route']);
		}

		// параметры работы first boot
		if ($setting['pagespeed_image_first_boot_status'] && !empty($setting['pagespeed_image_first_boot_onrot'][0]) && (!in_array($setting['route'], $setting['pagespeed_image_first_boot_onrot']) && !in_array($setting['keyword'], $setting['pagespeed_image_first_boot_onrot']))) {
			$setting['pagespeed_image_first_boot_status'] = false;
			$this->config->set('bus_cache_image_first_boot_status', false);
		}

		// параметры исключения first boot
		if ($setting['pagespeed_image_first_boot_status'] && !empty($setting['pagespeed_image_first_boot_rot'][0]) && (in_array($setting['route'], $setting['pagespeed_image_first_boot_rot']) || in_array($setting['keyword'], $setting['pagespeed_image_first_boot_rot']))) {
			$setting['pagespeed_image_first_boot_status'] = false;
			$this->config->set('bus_cache_image_first_boot_status', false);
		}

		if (version_compare(VERSION, '2.2.0', '>=') && $this->config->get('bus_cache_image_first_boot_status')) {
			if (version_compare(VERSION, '4.0.0', '>=')) {
				$this->registry->set('model_tool_image', new \Opencart\Extension\Bus_Cache\System\Library\Bus_Cache\Image($this->registry));
			} else {
				$this->registry->set('model_tool_image', new \Bus_Cache\Image($this->registry));
			}
		}

		// параметры работы кэша
		if ($setting['cache_onrot'] && $setting['cache_status']) {
			$results = $setting['cache_onrot'];
			$results = explode("\r\n", $results);

			$setting['cache_status'] = false;

			foreach ($results as $result) {
				if ($result && $result[0] != ';') {
					$result = explode('|', $result);
					if ($result[0] && (strpos($setting['route'], $result[0]) !== false || strpos($this->request->server['REQUEST_URI'], $result[0]) !== false) || $setting['keyword'] == $result[0]) {
						if (!empty($result[1])) {
							$setting['cache_expire_all'] = $result[1];
						}
						if (!empty($result[2])) {
							$setting['cache_con'] = str_replace(array(',', '/'), array("\r\n", '|'), $result[2]);
						}
						if (!empty($result[3])) {
							$setting['cache_ses'] = str_replace(array(',', '/'), array("\r\n", '|'), $result[3]);
						}
						if (!empty($result[4])) {
							$setting['cache_cok'] = str_replace(array(',', '/'), array("\r\n", '|'), $result[4]);
						}
						if (!empty($result[5])) {
							$cache_par = str_replace(array(',', '/'), array("\r\n", '|'), $result[5]);
						}
						$setting['cache_status'] = true;
					}
				}
			}
		}

		// запрещаем кэшировать, если параметры не разрешены
		if ($setting['cache_par'] && $setting['cache_status']) {
			if ($setting['cache_par'][0] == 'cache_off') {
				unset($setting['cache_par'][0]);
				$params_count = count($setting['params']);
			}
			foreach ($setting['cache_par'] as $key => $result) {
				if ($result && $result[0] == ';') {
					unset($setting['cache_par'][$key]);
				}
			}
			foreach ($setting['params'] as $key => $result) {
				if (!in_array($key, $setting['cache_par'])) {
					unset($setting['params'][$key]);
				}
			}
			if (!empty($params_count) && $params_count != count($setting['params'])) {
				$setting['cache_status'] = false;
			}
		}

		// параметры исключения из кэша
		if ($setting['cache_rot'] && $setting['cache_status']) {
			$results = $setting['cache_rot'];
			$results = explode("\r\n", $results);

			foreach ($results as $result) {
				if ($result && $result[0] != ';' && (strpos($setting['route'], $result) !== false || strpos($this->request->server['REQUEST_URI'], $result) !== false) || $setting['keyword'] == $result) {
					$setting['cache_status'] = false;
				}
			}
		}

		// данные конфиг
		if ($setting['cache_con'] && ($setting['cache_status'] || $setting['cache_controller'] || $setting['cache_model'])) {
			$results = $setting['cache_con'];
			$results = explode("\r\n", $results);

			foreach ($results as $result) {
				if ($result && $result[0] != ';') {
					$result = explode('|', $result);

					if ($this->config->has($result[0])) {
						$setting['config'] = $this->examination($setting['config'], array($result[0] => $this->config->get($result[0])), $result);
					}
				}
			}
		}

		// данные сессии
		if ($setting['cache_ses'] && ($setting['cache_status'])) {
			$results = $setting['cache_ses'];
			$results = explode("\r\n", $results);

			foreach ($results as $result) {
				if ($result && $result[0] != ';') {
					$result = explode('|', $result);

					if ($result[0]) {
						$setting['session'] = $this->examination($setting['session'], $this->session->data, $result);
					}
				}
			}

			unset($setting['session']['user_id'], $setting['session']['token'], $setting['session']['user_token']);
		}

		// данные cookie
		if ($setting['cache_cok'] && ($setting['cache_status'])) {
			$results = $setting['cache_cok'];
			$results = explode("\r\n", $results);

			foreach ($results as $result) {
				if ($result && $result[0] != ';') {
					$result = explode('|', $result);

					if ($result[0]) {
						$setting['cookie'] = $this->examination($setting['cookie'], $this->request->cookie, $result);
					}
				}
			}

			unset($setting['cookie']['user_id'], $setting['cookie']['token'], $setting['cookie']['user_token'], $setting['cookie']['PHPSESSID'], $setting['cookie']['OCSESSID']);
		}

		// устанавливаем индивидуальный обработчик кэша
		if ($setting['cache_engine_mine']) {
			$setting['cache_engine'] = $setting['cache_engine_mine'];
		}

		// устанавливаем количество свободного кэша
		if ($setting['cache_count'] > 1 && in_array($setting['cache_engine'], array('buslik', 'opcache'))) {
			if (!defined('CACHE_COUNT')) {
				define('CACHE_COUNT', $setting['cache_count']);
			}
		}

		// cache
		if ($setting['cache_status']) {
			// для точечного удаления кэша
			$name_route = str_replace('/', '_', $setting['route']);

			// загружаем кэш
			if (in_array($setting['cache_engine'], array('buslik', 'opcache'))) {
				$md = md5(http_build_query(array($name_route, $setting['cart'], $setting['config'], $setting['session'], $setting['cookie'], $setting['params'])));
				$cache_dir = $name_route . '/' . $setting['img'] . '.' . (int)$setting['support_debug'] . '/' . substr($md, 0, 2) . '/';
				$cache_name = $cache_dir . substr($md, 2);
				if (!defined('CACHE_NAME')) {
					define('CACHE_NAME', $cache_name);
				}
				if (!defined('CACHE_FOLDER')) {
					define('CACHE_FOLDER', serialize(array('bus_cache_controller', 'bus_cache_model', 'bus_cache_clears', 'opencart')));
				}
			} else {
				$cache_name = $name_route . '.' . $setting['img'] . '.' . (int)$setting['support_debug'] . '.' . md5(http_build_query(array($name_route, $setting['cart'], $setting['config'], $setting['session'], $setting['cookie'], $setting['params'])));
				if (!defined('CACHE_NAME')) {
					define('CACHE_NAME', $cache_name);
				}
				if (!defined('CACHE_FOLDER')) {
					define('CACHE_FOLDER', serialize(array('bus_cache_controller', 'bus_cache_model', 'bus_cache_clears', 'opencart')));
				}
			}
			if (version_compare(VERSION, '4.0.0', '>=')) {
				if (!defined('CACHE_NULL')) {
					define('CACHE_NULL', array());
				}
				$class_cache = '\Opencart\Extension\Bus_Cache\System\Library\Bus_Cache\\' . $setting['cache_engine'];
			} else {
				$class_cache = '\Bus_Cache\\' . $setting['cache_engine'];
			}

			$cache_data = (new $class_cache($setting['cache_expire_all']))->get($cache_name);

			// обрабатываем и выводим кэш
			if (!empty($cache_data['output'])) {
				// подсчёт количества просмотров
				if (version_compare(VERSION, '4.0.0', '<') && $this->request->server['REQUEST_METHOD'] == 'GET' && !empty($setting['params']['product_id']) && ($setting['route'] == 'product/product' || $setting['route'] == 'product_id')) {
					$this->db->query("UPDATE " . DB_PREFIX . "product SET viewed = (viewed + 1) WHERE product_id = '" . (int)$setting['params']['product_id'] . "'");
				}

				// Whos Online
				if (version_compare(VERSION, '4.0.0', '<') && $this->config->get('config_customer_online')) {
					$this->load->model('tool/online');

					if (isset($this->request->server['HTTP_X_REAL_IP'])) {
						$ip = $this->request->server['HTTP_X_REAL_IP'];
					} elseif (isset($this->request->server['REMOTE_ADDR'])) {
						$ip = $this->request->server['REMOTE_ADDR'];
					} else {
						$ip = '';
					}

					if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
						$url = (!empty($this->request->server['HTTPS']) ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
					} else {
						$url = '';
					}

					if (isset($this->request->server['HTTP_REFERER'])) {
						$referer = $this->request->server['HTTP_REFERER'];
					} else {
						$referer = '';
					}

					$this->registry->get('model_tool_online')->addOnline($ip, $this->customer->getId(), $url, $referer);
				}

				// debug режим
				if ($setting['support_debug']) {
					if (!empty($cache_data['getDebugSpeed'])) {
						$this->getDebugSpeed = $cache_data['getDebugSpeed'];
					}

					if (isset($cache_time)) {
						$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time'], 'time' => round(microtime(true) - $cache_time, 3)));
					}

					if (isset($cache_timer)) {
						$this->setDebugSpeed(array('name' => $setting['text_bus_cache_timer'], 'time' => round(microtime(true) - $cache_timer, 3)));
					}

					if ($setting['support_debug']) {
						$cache_data['output'] = preg_replace('~<body([^>]*)>~ix', '<body$1>' . $this->getDebugSpeed, $cache_data['output']);
					}
				}

				if (!headers_sent()) {
					foreach ($cache_data['headers'] as $header) {
						$this->response->addHeader($header);
					}
				}

				$this->response->setCompression($this->config->get('config_compression'));
				$this->response->setOutput($cache_data['output']);
				exit($this->response->output());
			} else {
				// ограничение кэша
				if ($setting['cache_size_limit']) {
					if ($setting['bus_cache_size_limit'] > ($setting['cache_size_limit'] * 1024 * 1024)) {
						$setting['cache_expire_all'] = 300;
					}

					if ($setting['support_disc_size_limit']) {
						$setting['support_disc_size_limit'] = ($setting['support_disc_size_limit'] * 1024 * 1024);
					} else {
						$setting['support_disc_size_limit'] = disk_free_space('.');
					}

					if ($setting['support_disc_size_limit'] && $setting['bus_cache_size_limit'] > $setting['support_disc_size_limit']) {
						$setting['cache_status'] = false;
					}
				}
			}
		}

		// контроллируем другой кэш OpenCart
		if ($setting['cache_oc']) {
			if (!defined('CACHE_FOLDER')) {
				define('CACHE_FOLDER', serialize(array('bus_cache_controller', 'bus_cache_model', 'bus_cache_clears', 'opencart')));
			}
			if (version_compare(VERSION, '4.0.0', '>=')) {
				if (!defined('CACHE_NULL')) {
					define('CACHE_NULL', array());
				}
				$class_cache = '\Opencart\Extension\Bus_Cache\System\Library\Bus_Cache\\' . $setting['cache_engine'];
			} else {
				$class_cache = '\Bus_Cache\\' . $setting['cache_engine'];
			}
			$this->registry->set('cache', new $class_cache($setting['cache_expire']));
		}

		// вывод route и keyword
		if ($setting['support_debug']) {
			$this->setDebugSpeed(array('name' => 'route: ' . $setting['route']));
			$this->setDebugSpeed(array('name' => 'keyword: ' . $setting['keyword']));
			$this->setDebugSpeed(array('name' => 'params: ' . urldecode(http_build_query($setting['params']))));
		}

		// кэширование контроллеров
		if ($setting['cache_controller']) {
			if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
				$this->getDebugTime = microtime(true);
			}

			$results = $setting['cache_controller'];
			$results = explode("\r\n", $results);

			$setting['cache_controller'] = array();

			foreach ($results as $result) {
				if ($result && $result[0] != ';') {
					$result = explode('|', $result);
					if ($result[0]) {
						$result[0] = md5($result[0]);
						$setting['cache_controller'][$result[0]]['expire'] = (!empty($result[1]) ? (int)$result[1] : $setting['cache_expire_controller']);

						if (!empty($result[2])) {
							$config = array();
							foreach (explode(',', $result[2]) as $res) {
								$res = explode('/', $res);
								if ($this->config->has($res[0])) {
									$config = $this->examination($config, array($res[0] => $this->config->get($res[0])), $res);
								}
							}
						} else {
							$config = $setting['config'];
						}
						$setting['cache_controller'][$result[0]]['config'] = $config;

						$session = array();
						if (!empty($result[3])) {
							foreach (explode(',', $result[3]) as $res) {
								$res = explode('/', $res);
								if ($res[0]) {
									$session = $this->examination($session, $this->session->data, $res);
								}
							}

							unset($session['user_id'], $session['token'], $session['user_token']);
						}/*  else {
							$session = $setting['session'];
						} */
						$setting['cache_controller'][$result[0]]['session'] = $session;

						$cookie = array();
						if (!empty($result[4])) {
							foreach (explode(',', $result[4]) as $res) {
								$res = explode('/', $res);
								if ($res[0]) {
									$cookie = $this->examination($cookie, $this->request->cookie, $res);
								}
							}

							unset($cookie['user_id'], $cookie['token'], $cookie['user_token'], $cookie['PHPSESSID'], $cookie['OCSESSID']);
						}/*  else {
							$cookie = $setting['cookie'];
						} */
						$setting['cache_controller'][$result[0]]['cookie'] = $cookie;

						$params = array();
						if (!empty($result[5])) {
							foreach (explode(',', $result[5]) as $res) {
								$res = explode('/', $res);
								if ($res[0]) {
									if (isset($setting['params'][$res[0]])) {
										$params = $this->examination($params, $setting['params'], $res);
									}
									if (isset($this->request->get[$res[0]])) {
										$params = $this->examination($params, $this->request->get, $res);
									}
									if (isset($this->request->post[$res[0]])) {
										$params = $this->examination($params, $this->request->post, $res);
									}
								}
							}
						}/*  else {
							$params = $setting['params'];
						} */
						$setting['cache_controller'][$result[0]]['params'] = $params;
					}
				}
			}

			if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
				$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_controller'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
			}
		}

		// ajax загрузка контроллеров
		if ($setting['cache_controller_ajax']) {
			if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
				$this->getDebugTime = microtime(true);
			}

			$this->document->addScript($setting_default['config_path_theme'] . 'default/javascript/bus_cache/bus_ajax.js', 'header');

			$results = $setting['cache_controller_ajax'];
			$results = explode("\r\n", $results);
			$setting['cache_controller_ajax'] = array();

			foreach ($results as $result) {
				if ($result && $result[0] != ';') {
					$result = explode('|', $result);
					if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
						if (!empty($result[1]) && !in_array($result[1], array('common/header', 'common/footer'))) {
							$setting['cache_controller_ajax'][md5($result[1] . (!empty($result[2]) ? (int)$result[2] : 0)) . (!empty($result[3]) ? (int)$result[3] : '')]['res'] = (!empty($result[4]) ? $result[4] : 0);
						}
					}
				}
			}

			if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
				$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_controller_ajax'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
			}
		} else {
			$setting['cache_controller_ajax'] = array();
		}

		// кэширование моделей
		if ($setting['cache_model']) {
			if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
				$this->getDebugTime = microtime(true);
			}

			$results = $setting['cache_model'];
			$results = explode("\r\n", $results);

			$setting['cache_model'] = array();

			foreach ($results as $result) {
				if ($result && $result[0] != ';') {
					$result = explode('|', $result);
					if ($result[0]) {
						$result[0] = md5($result[0]);
						$setting['cache_model'][$result[0]]['expire'] = (!empty($result[1]) ? (int)$result[1] : $setting['cache_expire_model']);

						if (!empty($result[2])) {
							$config = array();
							foreach (explode(',', $result[2]) as $res) {
								$res = explode('/', $res);
								if ($this->config->has($res[0])) {
									$config = $this->examination($config, array($res[0] => $this->config->get($res[0])), $res);
								}
							}
						} else {
							$config = $setting['config'];
						}
						$setting['cache_model'][$result[0]]['config'] = $config;

						$session = array();
						if (!empty($result[3])) {
							foreach (explode(',', $result[3]) as $res) {
								$res = explode('/', $res);
								if ($res[0]) {
									$session = $this->examination($session, $this->session->data, $res);
								}
							}

							unset($session['user_id'], $session['token'], $session['user_token']);
						}/*  else {
							$session = $setting['session'];
						} */
						$setting['cache_model'][$result[0]]['session'] = $session;

						$cookie = array();
						if (!empty($result[4])) {
							foreach (explode(',', $result[4]) as $res) {
								$res = explode('/', $res);
								if ($res[0]) {
									$cookie = $this->examination($cookie, $this->request->cookie, $res);
								}
							}

							unset($cookie['user_id'], $cookie['token'], $cookie['user_token'], $cookie['PHPSESSID'], $cookie['OCSESSID']);
						}/*  else {
							$cookie = $setting['cookie'];
						} */
						$setting['cache_model'][$result[0]]['cookie'] = $cookie;

						$params = array();
						if (!empty($result[5])) {
							foreach (explode(',', $result[5]) as $res) {
								$res = explode('/', $res);
								if ($res[0]) {
									if (isset($setting['params'][$res[0]])) {
										$params = $this->examination($params, $setting['params'], $res);
									}
									if (isset($this->request->get[$res[0]])) {
										$params = $this->examination($params, $this->request->get, $res);
									}
									if (isset($this->request->post[$res[0]])) {
										$params = $this->examination($params, $this->request->post, $res);
									}
								}
							}
						}/*  else {
							$params = $setting['params'];
						} */
						$setting['cache_model'][$result[0]]['params'] = $params;
					}
				}
			}

			if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
				$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_model'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
			}
		}

		// lazy-load-html
		if ($setting['pagespeed_html_lazy_load']) {
			$results = $setting['pagespeed_html_lazy_load'];
			$results = explode("\r\n", $results);
			$setting['pagespeed_html_lazy_load'] = array();

			foreach ($results as $result) {
				if ($result && $result[0] != ';') {
					$result = explode('|', $result);
					if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
						if (!empty($result[1]) && !in_array($result[1], array('common/header', 'common/footer'))) {
							$setting['pagespeed_html_lazy_load'][md5($result[1] . (!empty($result[2]) ? (int)$result[2] : 0)) . (!empty($result[3]) ? (int)$result[3] : '')]['res'] = (!empty($result[4]) ? $result[4] : 0);
						}
					}
				}
			}
		} else {
			$setting['pagespeed_html_lazy_load'] = array();
		}

		// параметры работы оптимизации
		if ($setting['pagespeed_onrot'] && $setting['pagespeed_status']) {
			$results = $setting['pagespeed_onrot'];
			$results = explode("\r\n", $results);

			$setting['pagespeed_onrot'] = false;

			foreach ($results as $result) {
				if ($result && (isset($setting['params'][$result]) || strpos($setting['route'], $result) !== false || strpos($this->request->server['REQUEST_URI'], $result) !== false) || $setting['keyword'] == $result) {
					$setting['pagespeed_onrot'] = true;
				}
			}
		}

		// параметры исключения из оптимизации
		if ($setting['pagespeed_rot'] && $setting['pagespeed_status']) {
			$results = $setting['pagespeed_rot'];
			$results = explode("\r\n", $results);

			foreach ($results as $result) {
				if ($result && (isset($setting['params'][$result]) || strpos($setting['route'], $result) !== false || strpos($this->request->server['REQUEST_URI'], $result) !== false) || $setting['keyword'] == $result) {
					$setting['pagespeed_status'] = false;
				}
			}
		}

		// отправка данных
		if ($setting['cache_status'] || $setting['pagespeed_status']) {
			$setting['getDebugSpeed'] = $this->getDebugSpeed;
			if ($setting['cache_status']) {
				$setting['cache_name'] = $cache_name;
			}
			$setting['cache_timer'] = $cache_timer;
			$setting['cache_time'] = (microtime(true) - $cache_time);

			if (method_exists($this->response, 'setBuslikCache')) {
				$this->setting_default = $setting;
				$this->response->setBuslikCache($setting);
			}
		}

		$this->setting_default = $setting;
	}

	public function output($output = '', $setting = array()) {
		if (!$output) {
			return $output;
		}
		$this->getDebugSpeed = '';
		$setting_default = array();
		$setting_default['config_theme'] = 'default';
		$setting_default['server'] = false;
		$setting_default['HTTP_HOST'] = false;
		$setting_default['headers'] = array();
		$setting_default['route'] = false;
		$setting_default['keyword'] = false;
		$setting_default['params'] = array();
		$setting_default['isUser'] = false;
		$setting_default['styles'] = array();
		$setting_default['styles_after'] = array();
		$setting_default['scripts'] = array();
		$setting_default['scripts_footer'] = array();
		$setting_default['scripts_after'] = array();

		if (is_array($this->setting_default)) {
			$setting_default = array_merge($setting_default, $this->setting_default);
		}

		if (is_array($setting)) {
			$setting_default = array_merge($setting_default, $setting);
		}

		$setting = $setting_default;
		$this->setting_default = $setting_default;

		if ($setting['status']) {
			$cache_time = microtime(true);

			if (stripos($output, '<!DOCTYPE html') === false && !$setting['pagespeed_onrot']) {
				$setting['pagespeed_status'] = false;
			}

			if ($setting['route'] !== $setting['action_error']) {
				foreach ($setting['headers'] as $result) {
					if (strpos($result, ' 404 ') !== false) {
						$setting['cache_status'] = false;
					}
				}
			}

			// pagespeed
			if ($setting['pagespeed_status']) {
				if (!is_dir(DIR_IMAGE . 'bus_cache/')) {
					mkdir(DIR_IMAGE . 'bus_cache/', 0755);
				}
				if ($setting['pagespeed_css_min'] && !is_dir(DIR_IMAGE . 'bus_cache/css/')) {
					mkdir(DIR_IMAGE . 'bus_cache/css/', 0755);
				}
				if ($setting['pagespeed_js_min'] && !is_dir(DIR_IMAGE . 'bus_cache/js/')) {
					mkdir(DIR_IMAGE . 'bus_cache/js/', 0755);
				}
				if ($setting['pagespeed_css_min_convert'] && !is_dir(DIR_IMAGE . 'bus_cache/convert/')) {
					mkdir(DIR_IMAGE . 'bus_cache/convert/', 0755);
				}

				// замена на странице
				if ($setting['pagespeed_html_replace_before']) {
					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->getDebugTime = microtime(true);
					}

					$results = html_entity_decode($setting['pagespeed_html_replace_before'], ENT_QUOTES, 'UTF-8');
					$results = explode("\r\n", $results);
					$results_before = array();
					$results_after = array();

					foreach ($results as $result) {
						if ($result && $result[0] != ';') {
							$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
							$result = explode('|', $result);
							if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
								if (isset($result[1]) && isset($result[2])) {
									$results_before[] = $result[1];
									$results_after[] = $result[2];
								}
							}
						}
					}

					if ($results_before && $results_after) {
						/* if ($this->outputTransfer['css_inline'][3]) {
							$this->outputTransfer['css_inline'][3] = str_replace($results_before, $results_after, $this->outputTransfer['css_inline'][3]);
						}
						if ($this->outputTransfer['js_inline'][3]) {
							$this->outputTransfer['js_inline'][3] = str_replace($results_before, $results_after, $this->outputTransfer['js_inline'][3]);
						} */
						$output = str_replace($results_before, $results_after, $output);
					}

					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_html_replace'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
					}
				}

				if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
					$this->getDebugTime = microtime(true);
				}

				// проставляем атрибуты на изображения
				if ($setting['pagespeed_image_w_h']) {
					$output = preg_replace('!<img(.*?)src="(.[^\"]*?)-(\d{1,5})x(\d{1,5})(.[^\"\d]*?)"!', '<img$1src="$2-$3x$4$5" width="$3" height="$4"', $output);
				}

				// подгружаем html
				if ($setting['pagespeed_image_lazy_load'] == 1) {
					$output = str_replace('<img', '<img loading="lazy"' . ($setting['pagespeed_image_first_boot_status'] ? ' decoding="async"' : false), $output);
					$output = preg_replace('~<(frame|iframe)([^>]*)src=([^>]*)>~ix', '<$1$2loading="lazy" data-busloadinglazy-src=$3><noscript><$1$2src=$3></noscript>', $output);
				} elseif ($setting['pagespeed_image_lazy_load'] == 2) {
					$output = preg_replace('~<(img|frame|iframe)([^>]*)src=([^>]*)>~ix', '<$1$2loading="lazy" data-busloadinglazy-src=$3><noscript><$1$2src=$3></noscript>', $output);
				}

				if ($setting['cache_controller_ajax'] || $setting['pagespeed_html_lazy_load'] || $setting['pagespeed_image_lazy_load']) {
					$output = str_replace('<base', ($setting['pagespeed_image_lazy_load'] == 2 ? '<style type="text/css">body [loading="lazy"][data-busloadinglazy-src]{opacity:0}</style>' . PHP_EOL . '<noscript><style type="text/css">body [loading="lazy"][data-busloadinglazy-src]{display:none !important}</style></noscript>' . PHP_EOL : false) . '<script src="' . $setting['server'] . $setting_default['config_path_theme'] . 'default/javascript/bus_cache/bus_loading_lazy.js?time=' . $setting['time_save'] . '" type="text/javascript" async=""></script>' . PHP_EOL . '<base', $output);
				}

				if ($setting['pagespeed_html_lazy_load']) {
					$output = str_replace('busloadinglazy>', 'noscript>', $output);
				}

				if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
					$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_image'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
				}

				// сжимаем стили
				if (!empty($setting['pagespeed_css_min'][1])) {
					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->getDebugTime = microtime(true);
					}

					$styles = $setting['styles'];
					$styles_replace = '';
					$setting['styles'] = array();

					if ($setting['pagespeed_css_min_links']) {
						$css_links = str_replace('&amp;', '&', $setting['pagespeed_css_min_links']);
						$css_links = explode("\r\n", $css_links);
						foreach ($css_links as $style) {
							if ($style && $style[0] != ';') {
								$st = explode('|', $style);
								if (strpos($output, $st[0]) === false) {
									continue;
								}
								$style = array();
								$style['href'] = $st[0];
								$style['attribute'] = 'type="text/css" rel="preload" media="screen" as="style"';
								if (isset($st[1])) {
									$style['attribute'] = $st[1];
									unset($st[1]);
								}

								$styles_replace .= ($styles_replace ? '|' : false) . preg_quote($style['href'], '~');
								if (in_array($style['href'] . '|after', $css_links)) {
									$setting['styles_after'][] = array(
										'href'      => $style['href'],
										'attribute' => $style['attribute']
									);
								} else {
									$setting['styles'][] = array(
										'href'      => $style['href'],
										'attribute' => $style['attribute']
									);
								}
							}
						}
					}

					if ($styles) {
						$css_links = str_replace('&amp;', '&', $setting['pagespeed_css_min_exception']);
						$css_links = explode("\r\n", $css_links);
						foreach ($styles as $style) {
							if ($style) {
								$href = strstr($style['href'], '?', true);
								if (!$href) {
									$href = $style['href'];
								}
								if (!in_array($href, $css_links) || in_array(';' . $href, $css_links)) {
									$styles_replace .= ($styles_replace ? '|' : false) . preg_quote($style['href'], '~');
									if (in_array($href . '|after', $css_links) || in_array($style['href'] . '|after', $css_links)) {
										$setting['styles_after'][] = array(
											'href'      => $style['href'],
											'attribute' => 'type="text/css" rel="preload ' . $style['rel'] . '" media="' . $style['media'] . '" as="style" '
										);
									} else {
										$setting['styles'][] = array(
											'href'      => $style['href'],
											'attribute' => 'type="text/css" rel="preload ' . $style['rel'] . '" media="' . $style['media'] . '" as="style" '
										);
									}
								}
							}
						}
					}

					if ($styles_replace) {
						$output = preg_replace('~<link(.[^>]*?)href="(' . $styles_replace . ')([^>]*?)>~iS', '', $output);
					}
				}

				if ($setting['styles'] && is_array($setting['styles']) && !empty($setting['pagespeed_css_min'][1])) {
					$css = array(
						'name' => '',
						'content' => '',
						'styles' => array(),
					);

					foreach ($setting['styles'] as $style) {
						$her = (strpos($style['href'], '//') !== false);
						if (!$her || $her && $setting['HTTP_HOST'] && strpos($style['href'], $setting['HTTP_HOST']) !== false) {
							$href = explode('?', $style['href']);
							$href = $href[0];
							$href = str_replace(array('..', 'https://' . $setting['HTTP_HOST'] . '/', 'http://' . $setting['HTTP_HOST'] . '/', '://' . $setting['HTTP_HOST'] . '/', '//' . $setting['HTTP_HOST'] . '/'), '', $href);
							//$href = parse_url($href, PHP_URL_PATH);
							if (substr($href, 0, 1) == '.') {
								$href = substr($href, 1);
							}
							if (substr($href, 0, 1) == '/') {
								$href = substr($href, 1);
							}
							$file = $setting['dir'] . $href;
						} else {
							$href = md5($style['href']) . '.css';
							$file = DIR_IMAGE . 'bus_cache/download/' . $href;
							$href = basename(DIR_IMAGE) . '/bus_cache/download/' . $href;
						}
						if (is_readable($file)) {
							$file = file_get_contents($file);
							$css['name'] .= ($css['name'] ? '|' : false) . $href;
							$css['content'] .=  '/* ' . $href . ' */' . PHP_EOL;
							if (!$setting['pagespeed_css_min_url']) {
								$file = $this->realUrlCSS($file, $href);
								foreach ($file['styles'] as $style) {
									$css['styles'][] = $style;
								}
								$css['content'] .= $file['content'];
							} else {
								$css['content'] .= $file;
							}
						}
					}

					if ($css['name'] && $css['content']) {
						$name_md = md5($css['name']) . '.css';
						$file = DIR_IMAGE . 'bus_cache/css/' . $name_md;
						if (!is_file($file) || $setting['support_debug'] == 2) {
							if ($setting['pagespeed_css_min_url']) {
								$real_url = $this->realUrlCSS($css['content'], $css['name']);
								$css['content'] = $real_url['content'];
								$css['styles'] = $real_url['styles'];
							}
							if ($setting['pagespeed_css_min_display']) {
								$css['content'] = str_replace(array('@font-face{', '@font-face {'), '@font-face{font-display:' . $setting['pagespeed_css_min_display'] . ';', $css['content']);
							}
							if ($setting['pagespeed_css_replace_before']) {
								$results = html_entity_decode($setting['pagespeed_css_replace_before'], ENT_QUOTES, 'UTF-8');
								$results = explode("\r\n", $results);
								$results_before = array();
								$results_after = array();

								foreach ($results as $result) {
									if ($result && $result[0] != ';') {
										$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
										$result = explode('|', $result);
										if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
											if (isset($result[1]) && isset($result[2])) {
												$results_before[] = $result[1];
												$results_after[] = $result[2];
											}
										}
									}
								}

								if ($results_before && $results_after) {
									$css['content'] = str_replace($results_before, $results_after, $css['content']);
								}
							}
							if ($setting['pagespeed_css_style'] && is_file($setting['config_dir_theme'] . '/stylesheet/bus_cache/bus_cache_replace.css')) {
								$css['content'] .= file_get_contents($setting['config_dir_theme'] . '/stylesheet/bus_cache/bus_cache_replace.css');
							}
							$css['content'] = $this->minCSS($css['content'], $setting['pagespeed_css_min']);
							if ($setting['pagespeed_css_replace_after']) {
								$results = html_entity_decode($setting['pagespeed_css_replace_after'], ENT_QUOTES, 'UTF-8');
								$results = explode("\r\n", $results);
								$results_before = array();
								$results_after = array();

								foreach ($results as $result) {
									if ($result && $result[0] != ';') {
										$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
										$result = explode('|', $result);
										if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
											if (isset($result[1]) && isset($result[2])) {
												$results_before[] = $result[1];
												$results_after[] = $result[2];
											}
										}
									}
								}

								if ($results_before && $results_after) {
									$css['content'] = str_replace($results_before, $results_after, $css['content']);
								}
							}
							if ($css['styles']) {
								file_put_contents($file . '.json', json_encode($css['styles']));
							}
							file_put_contents($file, $css['content']);
						}

						if (!$css['styles'] && is_readable($file . '.json')) {
							$css['styles'] = json_decode(file_get_contents($file . '.json'), true);
						}

						$setting['styles'] = array();
						if (isset($css['styles'])) {
							$css_links = str_replace('&amp;', '&', $setting['pagespeed_css_min_font']);
							$css_links = explode("\r\n", $css_links);

							foreach ($css['styles'] as $result) {
								if (!$result['domain'] && in_array($result['href'], $css_links) && !in_array(';' . $result['href'], $css_links)) {
									$href = strstr($result['href'], '?', true);
									if (!$href) {
										$href = $result['href'];
									}
									$extension = pathinfo($href, PATHINFO_EXTENSION);
									if (isset($this->fileType[$extension]['as'])) {
										$key = md5($result['href']);
										$setting['styles'][$key . 1] = array(
											'href'      => $result['href'],
											'attribute' => 'type="' . $this->fileType[$extension]['type'] . '" ' . 'rel="preload" ' . 'as="' . $this->fileType[$extension]['as'] . '" ' . 'crossorigin="anonymous"'
										);
									}
								} elseif ($result['domain']) {
									$key = md5($result['domain']);
									$setting['styles'][$key . 1] = array(
										'href'      => $result['domain'],
										'attribute' => ' rel="preconnect" crossorigin="anonymous"'
									);
									$setting['styles'][$key . 2] = array(
										'href'      => $result['domain'],
										'attribute' => 'rel="dns-prefetch"'
									);
								}
							}

							foreach ($css_links as $href) {
								if ($href && $href[0] != ';') {
									$href2 = strstr($href, '?', true);
									if (!$href2) {
										$href2 = $href;
									}
									$extension = pathinfo($href2, PATHINFO_EXTENSION);
									if (isset($this->fileType[$extension]['as'])) {
										$key = md5($href);
										$setting['styles'][$key . 1] = array(
											'href'      => $href,
											'attribute' => 'type="' . $this->fileType[$extension]['type'] . '" ' . 'rel="preload" ' . 'as="' . $this->fileType[$extension]['as'] . '" ' . 'crossorigin="anonymous"'
										);
									} else {
										if ($setting['server'] && strpos($href, $setting['server']) === false) {
											$domain = parse_url($href, PHP_URL_HOST);
											if ($domain) {
												$domain = (!empty($this->request->server['HTTPS']) ? 'https://' : 'http://') . $domain . '/';
												$key = md5($domain);
												$setting['styles'][$key . 1] = array(
													'href'      => $domain,
													'attribute' => ' rel="preconnect" crossorigin="anonymous"'
												);
												$setting['styles'][$key . 2] = array(
													'href'      => $domain,
													'attribute' => 'rel="dns-prefetch"'
												);
											}
										}
									}
								}
							}
						}
						$setting['styles'][] = array(
							'href'      => $setting['server'] . 'image/bus_cache/css/' . $name_md . '?time=' . $setting['time_save'],
							'attribute' => 'type="text/css" rel="stylesheet preload" media="screen" as="style"'
						);

						foreach ($setting['styles'] as $style) {
							$this->outputTransfer['css'][1] .= '<link href="' . $style['href'] . '" ' . $style['attribute'] . ' />' . PHP_EOL;
						}
					}

					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_css'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
					}
				}

				// Добавляем свои стили
				if (empty($name_md) && $setting['pagespeed_css_style'] && is_file($setting['config_dir_theme'] . '/stylesheet/bus_cache/bus_cache_replace.css')) {
					$this->outputTransfer['css'][1] .= '<link href="' . $setting['server'] . $setting_default['config_path_theme'] . $setting['config_theme'] . '/stylesheet/bus_cache/bus_cache_replace.css?time=' . $setting['time_save'] . '" type="text/css" rel="stylesheet preload" media="screen" as="style" />' . PHP_EOL;
				}

				// сжимаем скрипты
				if (isset($setting['pagespeed_js_min'][1])) {
					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->getDebugTime = microtime(true);
					}

					$scripts = $setting['scripts'];
					$scripts_replace = '';
					$setting['scripts'] = array();

					if ($setting['pagespeed_js_min_links']) {
						$js_links = str_replace('&amp;', '&', $setting['pagespeed_js_min_links']);
						$js_links = explode("\r\n", $js_links);
						foreach ($js_links as $script) {
							if ($script && $script[0] != ';') {
								$sc = explode('|', $script);
								if (strpos($output, $sc[0]) === false) {
									continue;
								}
								$script = array();
								$script['href'] = $sc[0];
								$script['attribute'] = 'type="text/css" rel="preload" media="screen" as="style"';
								if (isset($sc[1])) {
									$script['attribute'] = $sc[1];
									unset($sc[1]);
								}

								$scripts_replace .= ($scripts_replace ? '|' : false) . preg_quote($script['href'], '~');
								if (in_array($script['href'] . '|after', $js_links)) {
									$setting['scripts_after'][] = array(
										'href'      => $script['href'],
										'attribute' => 'type="text/javascript" '
									);
								} else {
									$setting['scripts'][] = array(
										'href'      => $script['href'],
										'attribute' => 'type="text/javascript" '
									);
								}
							}
						}
					}

					if ($scripts) {
						$js_links = str_replace('&amp;', '&', $setting['pagespeed_js_min_exception']);
						$js_links = explode("\r\n", $js_links);
						foreach ($scripts as $script) {
							if (isset($script['href'])) {
								$script = $script['href'];
							}
							$href = strstr($script, '.js', true);
							if (!$href) {
								$href = strstr($script, '?', true);
								if (!$href) {
									$href = $script;
								}
							} else {
								$href .= '.js';
							}
							if (!in_array($href, $js_links) || in_array(';' . $href, $js_links)) {
								$scripts_replace .= ($scripts_replace ? '|' : false) . preg_quote($script, '~');
								if (in_array($href . '|after', $js_links) || in_array($script . '|after', $js_links)) {
									$setting['scripts_after'][] = array(
										'href'      => $href,
										'attribute' => 'type="text/javascript" '
									);
								} else {
									$setting['scripts'][] = array(
										'href'      => $href,
										'attribute' => 'type="text/javascript" '
									);
								}
							}
						}
					}

					if ($scripts_replace) {
						$output = preg_replace('~<link(.[^>]*?)href="(' . $scripts_replace . ')([^>]*?)>~i', '', $output);
						$output = preg_replace('~<script(.[^>]*?)src="(' . $scripts_replace . ')([^>]*?)></script>~i', '', $output);
					}
				}

				if ($setting['scripts'] && is_array($setting['scripts']) && isset($setting['pagespeed_js_min'][1])) {
					$js = array(
						'name' => '',
						'content' => '',
						'styles' => array(),
					);

					foreach ($setting['scripts'] as $script)  {
						$her = (strpos($script['href'], '//') !== false);
						if (!$her || $her && $setting['HTTP_HOST'] && strpos($script['href'], $setting['HTTP_HOST']) !== false) {
							$href = explode('?', $script['href']);
							$href = $href[0];
							$href = str_replace(array('..', 'https://' . $setting['HTTP_HOST'] . '/', 'http://' . $setting['HTTP_HOST'] . '/', '://' . $setting['HTTP_HOST'] . '/', '//' . $setting['HTTP_HOST'] . '/'), '', $href);
							//$href = parse_url($href, PHP_URL_PATH);
							if ($href[0] == '.') {
								$href = substr($href, 1);
							}
							if ($href[0] == '/') {
								$href = substr($href, 1);
							}
							$file = $setting['dir'] . $href;
						} else {
							$href = md5($script['href']) . '.js';
							$file = DIR_IMAGE . 'bus_cache/download/' . $href;
							$href = basename(DIR_IMAGE) . '/bus_cache/download/' . $href;
						}
						if (is_readable($file)) {
							$file = file_get_contents($file);
							$js['name'] .= ($js['name'] ? '|' : false) . $href;
							$js['content'] .=  '/* ' . $href . ' */' . PHP_EOL;
							if (1 == 0) {
								$file = $this->realUrlCSS($file, $href);
								foreach ($file['styles'] as $style) {
									$js['styles'][] = $style;
								}
								$js['content'] .= $file['content'];
							} else {
								$js['content'] .= $file;
							}
						}
					}

					if ($js['name'] && $js['content']) {
						$js['name_md'] = md5($js['name']) . '.js';
						$file = DIR_IMAGE . 'bus_cache/js/' . $js['name_md'];
						if (!is_file($file) || $setting['support_debug'] == 2) {
							if (1 == 0) {
								$real_url = $this->realUrlCSS($js['content'], $js['name']);
								$js['content'] = $real_url['content'];
								$js['styles'] = $real_url['styles'];
							}
							if ($setting['pagespeed_js_replace_before']) {
								$results = html_entity_decode($setting['pagespeed_js_replace_before'], ENT_QUOTES, 'UTF-8');
								$results = explode("\r\n", $results);
								$results_before = array();
								$results_after = array();

								foreach ($results as $result) {
									if ($result && $result[0] != ';') {
										$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
										$result = explode('|', $result);
										if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
											if (isset($result[1]) && isset($result[2])) {
												$results_before[] = $result[1];
												$results_after[] = $result[2];
											}
										}
									}
								}

								if ($results_before && $results_after) {
									$js['content'] = str_replace($results_before, $results_after, $js['content']);
								}
							}
							if ($setting['pagespeed_js_script'] && is_file($setting['config_dir_theme'] . '/javascript/bus_cache/bus_cache_replace.js')) {
								$js['content'] .= file_get_contents($setting['config_dir_theme'] . '/javascript/bus_cache/bus_cache_replace.js');
							}
							$js['content'] = $this->minJS($js['content'], $setting['pagespeed_js_min']);
							if ($setting['pagespeed_js_replace_after']) {
								$results = html_entity_decode($setting['pagespeed_js_replace_after'], ENT_QUOTES, 'UTF-8');
								$results = explode("\r\n", $results);
								$results_before = array();
								$results_after = array();

								foreach ($results as $result) {
									if ($result && $result[0] != ';') {
										$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
										$result = explode('|', $result);
										if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
											if (isset($result[1]) && isset($result[2])) {
												$results_before[] = $result[1];
												$results_after[] = $result[2];
											}
										}
									}
								}

								if ($results_before && $results_after) {
									$js['content'] = str_replace($results_before, $results_after, $js['content']);
								}
							}
							file_put_contents($file, $js['content']);
						}

						$setting['scripts_preload'] = array();
						$setting['scripts_preload'][] = array(
							'href'      => $setting['server'] . 'image/bus_cache/js/' . $js['name_md'] . '?time=' . $setting['time_save'],
							'attribute' => 'rel="preload" as="script" '
						);

						$this->outputTransfer['css'][1] .= '<link href="' . $setting['scripts_preload'][0]['href'] . '" ' . $setting['scripts_preload'][0]['attribute'] . ' />' . PHP_EOL;

						$setting['scripts'] = array();
						$setting['scripts'][] = array(
							'href'      => $setting['server'] . 'image/bus_cache/js/' . $js['name_md'] . '?time=' . $setting['time_save'],
							'attribute' => 'type="text/javascript"'
						);

						foreach ($setting['scripts'] as $script) {
							$this->outputTransfer['js'][1] .= '<script src="' . $script['href'] . '" ' . $script['attribute'] . '></script>' . PHP_EOL;
						}
					}

					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_js'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
					}
				}

				// Добавляем свои скрипты
				if (empty($js['name_md']) && $setting['pagespeed_js_script'] && is_file($setting['config_dir_theme'] . '/javascript/bus_cache/bus_cache_replace.js')) {
					$this->outputTransfer['css'][1] .= '<link href="' . $setting['server'] . $setting_default['config_path_theme'] . $setting['config_theme'] . '/javascript/bus_cache/bus_cache_replace.js?time=' . $setting['time_save'] . '" rel="preload" as="script" />' . PHP_EOL;
					$this->outputTransfer['js'][1] .= '<script src="' . $setting['server'] . $setting_default['config_path_theme'] . $setting['config_theme'] . '/javascript/bus_cache/bus_cache_replace.js?time=' . $setting['time_save'] . '" type="text/javascript"></script>' . PHP_EOL;
				}

				// critical
				if ($setting['pagespeed_css_critical'] && !empty($setting['pagespeed_css_min'][1]) && !empty($name_md)) {
					$setting['pagespeed_css_critical_name'] = md5($setting['route'] . $name_md) . '.css';
					if (is_file(DIR_IMAGE . 'bus_cache/css/critical/' . $setting['pagespeed_css_critical_name'])) {
						if ($setting['support_debug'] != 2) {
							$setting['styles_after'][] = array(
								'href'      => $setting['server'] . 'image/bus_cache/css/' . $name_md . '?time=' . $setting['time_save'],
								'attribute' => 'type="text/css" '
							);
						}
						$this->outputTransfer['css'][1] = str_replace('/' . $name_md, '/critical/' . $setting['pagespeed_css_critical_name'], $this->outputTransfer['css'][1]);
					}
					if ($setting['isUser'] && empty($this->request->post['bus_critical_name']) && ($setting['support_debug'] == 2 || !is_file(DIR_IMAGE . 'bus_cache/css/critical/' . $setting['pagespeed_css_critical_name']))) {
						$setting['cache_status'] = false;
						$html = PHP_EOL . "<script src=\"" . $setting_default['config_path_theme'] . "default/javascript/bus_cache/bus_ajax.js\" type=\"text/javascript\" async ></script>";
						$html .= PHP_EOL . "<script src=\"" . $setting_default['config_path_theme'] . "default/javascript/bus_cache/bus_critical.js\" type=\"text/javascript\" async ></script>";
						$html .= PHP_EOL . "<script type=\"text/javascript\">";
						$html .= PHP_EOL . "window.addEventListener('busCritical', function() {";
						if ($setting['pagespeed_css_critical_all']) {
							$html .= PHP_EOL . "	window.busCritical.setting['all'] = true;";
						} else {
							$html .= PHP_EOL . "	window.busCritical.setting['all'] = false;";
						}
						$html .= PHP_EOL . "	window.busCritical.setting['offset'] = " . (int)$setting['pagespeed_css_critical_offset'] . ";";
						if ($setting['pagespeed_css_critical_elements']) {
							$js_links = str_replace('&amp;', '&', $setting['pagespeed_css_critical_elements']);
							$js_links = json_encode(explode("\r\n", $js_links));
							$html .= PHP_EOL . "	window.busCritical.setting['elements'] = " . $js_links . ";";
						}

						$html .= PHP_EOL . "	setTimeout(function() {
		var time, end, critical;
		time = new Date().getTime();
		critical = window.busCritical.critical('body');

		if (critical) {
			var myAjax = function() {
				window.busAjax(window.location.href, {
					method: 'POST',
					data: {bus_critical:critical,bus_critical_name:'" . $setting['pagespeed_css_critical_name'] . "'},
					success: function(data) {
						//console.log(data);
					}
				});
			};

			if ('busAjax' in window) {
				myAjax();
			} else {
				window.addEventListener('busAjax', myAjax);
			}
		}

		time = new Date().getTime() - time;
		console.log('Полное время работы: ' + time/1000 + ' сек. или ' + time + ' мс.', critical);
	}, " . $setting['pagespeed_css_critical_time'] . ");
});";

						$html .= PHP_EOL . "</script>";

						$this->outputTransfer['js_inline'][1] .= $html;
						$setting['cache_status'] = false;
					}
				}

				// откладываем загрузку скриптов и стилей
				$html = "(function(window) {";
$html .= "
'use strict';
//'use asm';
	if (!('busCache' in window)) {
		window.busCache = {};
	}
	busCache.timeinterval = false;
	busCache.status = false;
	busCache.start = function(busAppSetting) {
		if (busCache.status == false) {
			busCache.status = true;";

			if (1 == 0) {
			$css_links = str_replace('&amp;', '&', $setting['pagespeed_css_events']);
			$css_links = explode("\r\n", $css_links);
			foreach ($css_links as $result) {
				if ($result && $result[0] != ';') {
					$html .= PHP_EOL . "			window.removeEventListener('" . $result . "', busCache.start, {once:true, passive:true});";
				}
			}
			}

			$js_links = str_replace('&amp;', '&', $setting['pagespeed_js_events']);
			$js_links = explode("\r\n", $js_links);
			foreach ($js_links as $result) {
				if ($result && $result[0] != ';') {
					$html .= PHP_EOL . "			window.removeEventListener('" . $result . "', busCache.start, {once:true, passive:true});";
				}
			}

			$html .= PHP_EOL . "
		} else {
			console.log('bus_cache уже работает!');
			return 'bus_cache уже работает!';
		}

		if (typeof window.CustomEvent !== 'function') {
			window.CustomEvent = function(event, params) {
				params = params || {bubbles:false, cancelable:false, detail:null};

				var evt = document.createEvent('CustomEvent');
				evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
				return evt;
			};
		}

		document.dispatchEvent(new CustomEvent('busCache', {bubbles: true}));
	};
	busCache.loadStyle = function(url, callback, setting) {
		var s = document.querySelector('link[href*=\"' + url + '\"]');

		if (s && typeof setting != 'object') {
			if (typeof callback == 'function') {
				if (s.getAttribute('data-start')) {
					s.addEventListener('readystatechange', callback);
					s.addEventListener('load', callback);
				} else {
					setTimeout(callback, 1);
				}
			}

			return s;
		} else {
			s = document.createElement('link');
			s.href = url;
			s.type = 'text/css';
			s.rel = 'stylesheet';

			if (typeof callback == 'function') {
				s.addEventListener('readystatechange', function() {
					s.removeAttribute('data-start');
				});
				s.addEventListener('load', function() {
					s.removeAttribute('data-start');
				});
				s.addEventListener('readystatechange', callback);
				s.addEventListener('load', callback);
			}

			if (typeof setting == 'object') {
				for (var ss in setting) {
					s.setAttribute(ss, setting[ss]);
				}
			}

			if ('head' in document) {
				document.head.appendChild(s);
			}

			return s;
		}
	};
	busCache.loadScript = function(url, callback, setting) {
		var s = document.querySelector('script[src*=\"' + url + '\"]');

		if (s && typeof setting != 'object') {
			if (typeof callback == 'function') {
				if (s.getAttribute('data-start')) {
					s.addEventListener('readystatechange', callback);
					s.addEventListener('load', callback);
				} else {
					setTimeout(callback, 1);
				}
			}

			return s;
		} else {
			s = document.createElement('script');
			s.src = url;
			s.type = 'text/javascript';
			s.setAttribute('data-start', true);

			if (typeof callback == 'function') {
				s.addEventListener('readystatechange', function() {
					s.removeAttribute('data-start');
				});
				s.addEventListener('load', function() {
					s.removeAttribute('data-start');
				});
				s.addEventListener('readystatechange', callback);
				s.addEventListener('load', callback);
			}

			if (typeof setting == 'object') {
				for (var ss in setting) {
					s.setAttribute(ss, setting[ss]);
				}
			}

			if ('head' in document) {
				document.head.appendChild(s);
			}

			return s;
		}
	};
";

				if ($setting['cache_controller_ajax']) {
					$html .= PHP_EOL . "
	busCache.ajax = function(id, data, min, max) {
		var myAjax = function() {
			busAjax({
				url: '/',
				method: 'POST',
				responseType: 'document',
				data: data,
				success: function(data) {
					if (data && window[id]) {
						document.head.appendChild(document.createRange().createContextualFragment(data.head.innerHTML));
						setTimeout(function() {
							window[id].parentNode.insertBefore(document.createRange().createContextualFragment(data.body.innerHTML), window[id]);
							window[id].parentNode.removeChild(window[id]);
						}, 200);
					}
				}
			});
		};
		if ('busLoadingLazy' in window) {
			if (busLoadingLazy.res(min, max)) {
				if ('busAjax' in window) {
					myAjax();
				} else {
					window.addEventListener('busAjax', myAjax);
				}
			}
		} else {
			window.addEventListener('busLoadingLazy', function() {
				if (busLoadingLazy.res(min, max)) {
					if ('busAjax' in window) {
						myAjax();
					} else {
						window.addEventListener('busAjax', myAjax);
					}
				}
			});
		}
	};
";
				}

				$html .= PHP_EOL . "
	window.addEventListener('DOMContentLoaded', function() {";
				if (1 == 0) {
				foreach ($css_links as $result) {
					if ($result && $result[0] != ';') {
						$html .= PHP_EOL . "		window.addEventListener('" . $result . "', busCache.start, {once:true, passive:true});";
					}
				}
				}
				foreach ($js_links as $result) {
					if ($result && $result[0] != ';') {
						$html .= PHP_EOL . "		window.addEventListener('" . $result . "', busCache.start, {once:true, passive:true});";
					}
				}

				if ($setting['pagespeed_js_inline_event_time']) {
					$html .= PHP_EOL . "		setTimeout(busCache.start, " . (int)$setting['pagespeed_js_inline_event_time'] . ");";
				}

				$html .= "
	}, {once:true, passive:true});
";

				if ($setting['styles_after'] || $setting['scripts_after']) {
					$html .= PHP_EOL . "
	window.addEventListener('busCache', function() {";
					foreach ($setting['styles_after'] as $style) {
						$html .= PHP_EOL . "		busCache.loadStyle('" . $style['href'] . "');";
					}

					foreach ($setting['scripts_after'] as $script) {
						$html .= PHP_EOL . "		busCache.loadScript('" . $script['href'] . "');";
					}

					$html .= PHP_EOL . "	});";
				}

				$html .= PHP_EOL . "})(window);";

				$html = $this->minJS($html, $setting['pagespeed_html_min']);

				if ($setting['pagespeed_js_inline_transfer'] == 3 || $setting['pagespeed_js_inline_transfer'] == 4) {
					$this->outputTransfer['js_inline'][$setting['pagespeed_js_inline_transfer']] .= $html;
				} else {
					$this->outputTransfer['js_inline'][1] .= '<script type="text/javascript"><!--' .  PHP_EOL . $html .  PHP_EOL . '//--></script>';
				}

				// проталкиваем скрипты и стили для server-push
				if (!empty($name_md) && !empty($js['name_md'])) {
					$setting['headers'][] = 'Link: <' . $setting['server'] . 'image/bus_cache/css/' . ($setting['pagespeed_css_critical_name'] ? 'critical/' . $setting['pagespeed_css_critical_name'] : $name_md) . '?time=' . $setting['time_save'] . '>; rel=preload; as=style' . (!empty($js['name_md']) ? ', <' . $setting['server'] . 'image/bus_cache/js/' . $js['name_md'] . '?time=' . $setting['time_save'] . '>; rel=preload; as=script' : false);
				}

				// Обработка inline кода
				if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
					$this->getDebugTime = microtime(true);
				}

				$inline = array(
					'route'                     => $setting['route'],
					'keyword'                   => $setting['keyword'],

					'html_min'                  => $setting['pagespeed_html_min'],
					'css_inline_event'          => array(),
					'css_inline_transfer'       => $setting['pagespeed_css_inline_transfer'],
					'css_inline_transfer_onrot' => array(),
					'css_inline_exception'      => array(),
					'js_inline_event'           => array(),
					'js_inline_transfer'        => $setting['pagespeed_js_inline_transfer'],
					'js_inline_transfer_onrot'  => array(),
					'js_inline_exception'       => array(),
				);

				if ($setting['pagespeed_css_inline_event']) {
					$inline['css_inline_event'] = str_replace('&amp;', '&', html_entity_decode($setting['pagespeed_css_inline_event'], ENT_QUOTES, 'UTF-8'));
					$inline['css_inline_event'] = explode("\r\n", $inline['css_inline_event']);
				}

				if ($setting['pagespeed_css_inline_transfer_onrot']) {
					$inline['css_inline_transfer_onrot'] = str_replace('&amp;', '&', html_entity_decode($setting['pagespeed_css_inline_transfer_onrot'], ENT_QUOTES, 'UTF-8'));
					$inline['css_inline_transfer_onrot'] = explode("\r\n", $inline['css_inline_transfer_onrot']);
					$inline['css_inline_exception'] = $inline['css_inline_transfer_onrot'];
				} elseif (!$setting['pagespeed_css_inline_transfer_onrot'] && $setting['pagespeed_css_inline_exception']) {
					$inline['css_inline_exception'] = str_replace('&amp;', '&', html_entity_decode($setting['pagespeed_css_inline_exception'], ENT_QUOTES, 'UTF-8'));
					$inline['css_inline_exception'] = explode("\r\n", $inline['css_inline_exception']);
				}

				if ($setting['pagespeed_js_inline_event']) {
					$inline['js_inline_event'] = str_replace('&amp;', '&', html_entity_decode($setting['pagespeed_js_inline_event'], ENT_QUOTES, 'UTF-8'));
					$inline['js_inline_event'] = explode("\r\n", $inline['js_inline_event']);
				}

				if ($setting['pagespeed_js_inline_transfer_onrot']) {
					$inline['js_inline_transfer_onrot'] = str_replace('&amp;', '&', html_entity_decode($setting['pagespeed_js_inline_transfer_onrot'], ENT_QUOTES, 'UTF-8'));
					$inline['js_inline_transfer_onrot'] = explode("\r\n", $inline['js_inline_transfer_onrot']);
					$inline['js_inline_exception'] = $inline['js_inline_transfer_onrot'];
				} elseif (!$setting['pagespeed_js_inline_transfer_onrot'] && $setting['pagespeed_js_inline_exception']) {
					$inline['js_inline_exception'] = str_replace('&amp;', '&', html_entity_decode($setting['pagespeed_js_inline_exception'], ENT_QUOTES, 'UTF-8'));
					$inline['js_inline_exception'] = explode("\r\n", $inline['js_inline_exception']);
				}

				//$this->outputTransfer['js_inline'][2] .= base64_decode('PCEtLSBCdXNFbmdpbmUgLS0+PHNwYW4gc3R5bGU9InBvc2l0aW9uOiBhYnNvbHV0ZTsgaGVpZ2h0OiBhdXRvOyB3aWR0aDogMTAwJTsiPjxhIGhyZWY9Imh0dHBzOi8vbGl2ZW9wZW5jYXJ0LnJ1L2luZGV4LnBocD9yb3V0ZT1wcm9kdWN0L3Byb2R1Y3QmcHJvZHVjdF9pZD0xNzk0IiB0aXRsZT0iQnVzbGlrIENhY2hlIC0g0JLQsNGIINC70YPRh9GI0LjQuSDQstGL0LHQvtGAIiByZWw9Im5vb3BlbmVyIG5vcmVmZXJyZXIiIHRhcmdldD0iX2JsYW5rIiAgc3R5bGU9InBvc2l0aW9uOiBhYnNvbHV0ZTsgd2lkdGg6IDEwMCU7IGJvdHRvbTogMDsgdGV4dC1hbGlnbjogY2VudGVyOyI+0KHQsNC50YIg0YPRgdC60L7RgNC10L0g0YEg0L/QvtC80L7RidGM0Y4gQnVzbGlrIENhY2hlPC9hPjwvc3Bhbj48IS0tIEJ1c2xpayBDYWNoZSAtLT4');

				// перемещаем inline стили
				if ($inline['html_min'] || $inline['css_inline_transfer']) {
					$output = preg_replace_callback('~(?:<!--[\s]*){0,}(?:<noscript>[\s]*){0,}<style([^>]*?){0,}>(.*?)</style>(?:[\s]*</noscript>){0,}(?:[\s]*-->){0,}~iSsu', function ($matches) use ($inline) {
						$css_inline_event = '';
						$css_inline_exception = ($inline['css_inline_transfer_onrot'] ? true : false);

						foreach ($inline['css_inline_event'] as $result) {
							$stripos = substr(strstr($result, '|'), 1);
							if ($result && $result[0] != ';' && $stripos && stripos($matches[0], $stripos) !== false) {
								$result = explode('|', $result);
								if ($result[0] == '#' || $result[0] && strpos($inline['route'], $result[0]) !== false || $inline['keyword'] && strpos($result[0], $inline['keyword']) !== false) {
									$css_inline_event = $result[1];
								}
							}
						}

						foreach ($inline['css_inline_exception'] as $result) {
							$stripos = substr(strstr($result, '|'), 1);
							if ($result && $result[0] != ';' && $stripos && stripos($matches[0], $stripos) !== false) {
								$result = explode('|', $result);
								if ($result[0] == '#' || $result[0] && strpos($inline['route'], $result[0]) !== false || $inline['keyword'] && strpos($result[0], $inline['keyword']) !== false) {
									$css_inline_exception = ($inline['css_inline_transfer_onrot'] ? false : true);
								}
							}
						}

						// откладываем по событию
						/* if ($css_inline_event) {
							$matches[0] = preg_replace('~(<script[^>]*?>)(?:[\s\r\n]*<!--|<!--){0,}(.*?)(?=' . preg_quote($js_inline_event, '~') . ')(.*?)(?://-->[\s\r\n]*|-->[\s\r\n]*|//-->|-->){0,}(</script>)~is', '$1' . PHP_EOL . 'window.addEventListener(\'busCache\', function() {$2$3});' . PHP_EOL . '$4', $matches[0]);
						} */

						if ($inline['css_inline_transfer'] && substr($matches[0], 0, 6) == '<style') {
							// сжатие
							$matches[0] = $this->minCSS($matches[0], $inline['html_min']);

							if ($inline['css_inline_transfer'] && !$css_inline_exception) {
								if ($inline['css_inline_transfer'] == 3 || $inline['css_inline_transfer'] == 4) {
									$matches[0] = preg_replace('~<style([^>]*?){0,}>(.*?)</style>~is', '$2', $matches[0]);;
								}

								$this->outputTransfer['css_inline'][$inline['css_inline_transfer']] .= $matches[0];
								return;
							}
						}

						return $matches[0];
					}, $output);
				}

				// перемещаем inline скрипты
				if ($inline['html_min'] || $inline['js_inline_transfer'] || $inline['js_inline_event']) {
					/* $output = preg_replace_callback('~<script(.[^>]*?)?>(.*?)</script>~is', function ($matches) use ($inline) { */
					$output = preg_replace_callback('~(?:<!--[\s]*){0,}<script([^>]*?){0,}>(.*?)</script>(?:[\s]*-->){0,}~iSsu', function ($matches) use ($inline) {
						$js_inline_event = '';
						$js_inline_exception = ($inline['js_inline_transfer_onrot'] ? true : false);

						foreach ($inline['js_inline_event'] as $result) {
							$stripos = substr(strstr($result, '|'), 1);
							if ($result && $result[0] != ';' && $stripos && stripos($matches[0], $stripos) !== false) {
								$result = explode('|', $result);
								if ($result[0] == '#' || $result[0] && strpos($inline['route'], $result[0]) !== false || $inline['keyword'] && strpos($result[0], $inline['keyword']) !== false) {
									$js_inline_event = $result[1];
								}
							}
						}

						foreach ($inline['js_inline_exception'] as $result) {
							$stripos = substr(strstr($result, '|'), 1);
							if ($result && $result[0] != ';' && $stripos && stripos($matches[0], $stripos) !== false) {
								$result = explode('|', $result);
								if ($result[0] == '#' || $result[0] && strpos($inline['route'], $result[0]) !== false || $inline['keyword'] && strpos($result[0], $inline['keyword']) !== false) {
									$js_inline_exception = ($inline['js_inline_transfer_onrot'] ? false : true);
								}
							}
						}

						// откладываем по событию
						if ($js_inline_event) {
							$matches[0] = preg_replace('~(<script[^>]*?>)(?:[\s\r\n]*<!--|<!--){0,}(.*?)(?=' . preg_quote($js_inline_event, '~') . ')(.*?)(?://-->[\s\r\n]*|-->[\s\r\n]*|//-->|-->){0,}(</script>)~is', '$1' . PHP_EOL . 'window.addEventListener(\'busCache\', function() {$2$3});' . PHP_EOL . '$4', $matches[0]);
						}

						// перемещаем inline
						if (substr($matches[0], 0, 7) == '<script' && !preg_match('~<script([^>]*?)src=([^>]*?)>~i', $matches[0])) {
							// сжатие
							$matches[0] = $this->minJS($matches[0], $inline['html_min']);

							if ($inline['js_inline_transfer'] && !$js_inline_exception) {
								if ($inline['js_inline_transfer'] == 3 || $inline['js_inline_transfer'] == 4) {
									$matches[0] = preg_replace('~(<script[^>]*?>)(?:[\s\r\n]*<!--|<!--){0,}(.*?)(?://-->[\s\r\n]*|-->[\s\r\n]*|//-->|-->){0,}(</script>)~is', '$2', $matches[0]);
								}

								$this->outputTransfer['js_inline'][$inline['js_inline_transfer']] .= $matches[0];
								return;
							}
						}

						return $matches[0];
					}, $output);
				}

				if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
					$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_inline'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
				}

				// устанавливаем код
				if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
					$this->getDebugTime = microtime(true);
				}

				foreach ($this->outputTransfer as $key => $result) {
					if ($this->outputTransfer[$key][1]) {
						if ($key == 'js_inline') {
							$output = str_replace('</head>', $this->outputTransfer[$key][1] . PHP_EOL . '</head>', $output);
						} else {
							$output = str_replace('<base', $this->outputTransfer[$key][1] . PHP_EOL . '<base', $output);
						}
					}
					if ($this->outputTransfer[$key][2]) {
						$output = str_replace('</body>', $this->outputTransfer[$key][2] . PHP_EOL . '</body>', $output);
					}
					if ($this->outputTransfer[$key][4]) {
						$this->outputTransfer[$key][3] = $this->outputTransfer[$key][4];
						$this->outputTransfer[$key][4] = true;
					}
					if ($this->outputTransfer[$key][3]) {
						$folder = '';
						$file = '';
						$href = '';

						if ($key == 'css_inline') {
							if ($setting['pagespeed_css_replace_before']) {
								$results = html_entity_decode($setting['pagespeed_css_replace_before'], ENT_QUOTES, 'UTF-8');
								$results = explode("\r\n", $results);
								$results_before = array();
								$results_after = array();

								foreach ($results as $result) {
									if ($result && $result[0] != ';') {
										$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
										$result = explode('|', $result);
										if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
											if (isset($result[1]) && isset($result[2])) {
												$results_before[] = $result[1];
												$results_after[] = $result[2];
											}
										}
									}
								}

								if ($results_before && $results_after) {
									$this->outputTransfer[$key][3] = str_replace($results_before, $results_after, $this->outputTransfer[$key][3]);
								}
							}
							$this->outputTransfer[$key][3] = $this->minCSS($this->outputTransfer[$key][3], $setting['pagespeed_css_min']);
							if ($setting['pagespeed_css_replace_after']) {
								$results = html_entity_decode($setting['pagespeed_css_replace_after'], ENT_QUOTES, 'UTF-8');
								$results = explode("\r\n", $results);
								$results_before = array();
								$results_after = array();

								foreach ($results as $result) {
									if ($result && $result[0] != ';') {
										$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
										$result = explode('|', $result);
										if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
											if (isset($result[1]) && isset($result[2])) {
												$results_before[] = $result[1];
												$results_after[] = $result[2];
											}
										}
									}
								}

								if ($results_before && $results_after) {
									$this->outputTransfer[$key][3] = str_replace($results_before, $results_after, $this->outputTransfer[$key][3]);
								}
							}
							$id = md5(preg_replace('/[^0-9]/', '', $this->outputTransfer[$key][3]));
							if ($id) {
								$folder = 'css/inline/' . substr($id, 0, 2) . '/';
								$id = strlen($this->outputTransfer[$key][3]) . '_' . mb_strlen($this->outputTransfer[$key][3], 'UTF-8') . '_' . $id;
								$file = DIR_IMAGE . 'bus_cache/' . $folder . 'bus_cache_inline_' . $id . '.css';
								$content = $this->realUrlCSS($this->outputTransfer[$key][3], 'image/bus_cache/' . $folder . 'bus_cache_inline_' . $id . '.css');
								$this->outputTransfer[$key][3] = $content['content'];
								$href .= '<link href="' . $setting['server'] . 'image/bus_cache/' . $folder . 'bus_cache_inline_' . $id . '.css?time=' . $setting['time_save'] . '" type="text/css" rel="stylesheet preload" media="screen" as="style" />' . PHP_EOL;
							}
						} elseif ($key == 'js_inline') {
							if ($setting['pagespeed_js_replace_before']) {
								$results = html_entity_decode($setting['pagespeed_js_replace_before'], ENT_QUOTES, 'UTF-8');
								$results = explode("\r\n", $results);
								$results_before = array();
								$results_after = array();

								foreach ($results as $result) {
									if ($result && $result[0] != ';') {
										$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
										$result = explode('|', $result);
										if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
											if (isset($result[1]) && isset($result[2])) {
												$results_before[] = $result[1];
												$results_after[] = $result[2];
											}
										}
									}
								}

								if ($results_before && $results_after) {
									$this->outputTransfer[$key][3] = str_replace($results_before, $results_after, $this->outputTransfer[$key][3]);
								}
							}
							$this->outputTransfer[$key][3] = $this->minJS($this->outputTransfer[$key][3], $setting['pagespeed_js_min']);
							if ($setting['pagespeed_js_replace_after']) {
								$results = html_entity_decode($setting['pagespeed_js_replace_after'], ENT_QUOTES, 'UTF-8');
								$results = explode("\r\n", $results);
								$results_before = array();
								$results_after = array();

								foreach ($results as $result) {
									if ($result && $result[0] != ';') {
										$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
										$result = explode('|', $result);
										if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
											if (isset($result[1]) && isset($result[2])) {
												$results_before[] = $result[1];
												$results_after[] = $result[2];
											}
										}
									}
								}

								if ($results_before && $results_after) {
									$this->outputTransfer[$key][3] = str_replace($results_before, $results_after, $this->outputTransfer[$key][3]);
								}
							}
							$id = md5(preg_replace('/[^0-9]/', '', $this->outputTransfer[$key][3]));
							if ($id) {
								$folder = 'js/inline/' . substr($id, 0, 2) . '/';
								$id = strlen($this->outputTransfer[$key][3]) . '_' . mb_strlen($this->outputTransfer[$key][3], 'UTF-8') . '_' . $id;
								$file = DIR_IMAGE . 'bus_cache/' . $folder . 'bus_cache_inline_' . $id . '.js';
								$href .= '<link href="' . $setting['server'] . 'image/bus_cache/' . $folder . 'bus_cache_inline_' . $id . '.js?time=' . $setting['time_save'] . '" rel="preload" media="screen" as="script" />' . PHP_EOL;
								$href .= '<script src="' . $setting['server'] . 'image/bus_cache/' . $folder . 'bus_cache_inline_' . $id . '.js?time=' . $setting['time_save'] . '" type="text/javascript"></script>' . PHP_EOL;
							}
						}

						if ($this->outputTransfer[$key][3]) {
							if ($this->outputTransfer[$key][4]) {
								$output = str_replace('</body>', $href . PHP_EOL . '</body>', $output);
							} else {
								$output = str_replace('<base', $href . PHP_EOL . '<base', $output);
							}

							if ($folder && !is_dir(DIR_IMAGE . 'bus_cache/' . $folder)) {
								mkdir(DIR_IMAGE . 'bus_cache/' . $folder, 0755, true);
							}

							if ($file && !is_file($file)) {
								file_put_contents($file, $this->outputTransfer[$key][3]);
							}
						}
					}
				}

				if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
					$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_html_transfer'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
				}

				// сжимаем страницу
				if ($setting['pagespeed_html_min']) {
					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->getDebugTime = microtime(true);
					}

					$output = $this->minHTML($output, $setting['pagespeed_html_min']);

					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_html'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
					}
				}

				// замена на странице
				if ($setting['pagespeed_html_replace_after']) {
					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->getDebugTime = microtime(true);
					}

					$results = html_entity_decode($setting['pagespeed_html_replace_after'], ENT_QUOTES, 'UTF-8');
					$results = explode("\r\n", $results);
					$results_before = array();
					$results_after = array();

					foreach ($results as $result) {
						if ($result && $result[0] != ';') {
							$result = str_replace(array('[\r]', '[\n]'), array("\r", "\n"), $result);
							$result = explode('|', $result);
							if ($result[0] == '#' || $result[0] && strpos($setting['route'], $result[0]) !== false || $setting['keyword'] && strpos($result[0], $setting['keyword']) !== false) {
								if (isset($result[1]) && isset($result[2])) {
									$results_before[] = $result[1];
									$results_after[] = $result[2];
								}
							}
						}
					}

					if ($results_before && $results_after) {
						$output = str_replace($results_before, $results_after, $output);
					}

					if ($setting['support_debug'] == 1 || $setting['support_debug'] == 2) {
						$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_html_replace_after'], 'time' => round(microtime(true) - $this->getDebugTime, 3)));
					}
				}
			}

			if ($setting['support_debug']) {
				if ($setting['getDebugSpeed']) {
					$setting['getDebugSpeed'] .= $this->getDebugSpeed;
					$this->getDebugSpeed = $setting['getDebugSpeed'];
				}

				if (isset($setting['cache_time'])) {
					$this->setDebugSpeed(array('name' => $setting['text_bus_cache_time_off'], 'time' => round(microtime(true) - $cache_time + $setting['cache_time'], 3)));
				}

				if (isset($setting['cache_timer'])) {
					$this->setDebugSpeed(array('name' => $setting['text_bus_cache_timer_off'], 'time' => round(microtime(true) - $setting['cache_timer'], 3)));
				}
			}

			if ($setting['cache_status']) {
				$cache_data = array(
					'headers'                     => $setting['headers'],
					'output'                      => $output,
					'getDebugSpeed'               => $this->getDebugSpeed
				);

				$setting['bus_cache_size_limit_one'] += strlen(json_encode($cache_data));

				if (version_compare(VERSION, '4.0.0', '>=')) {
					$class_cache = '\Opencart\Extension\Bus_Cache\System\Library\Bus_Cache\\' . $setting['cache_engine'];
				} else {
					$class_cache = '\Bus_Cache\\' . $setting['cache_engine'];
				}
				(new $class_cache($setting['cache_expire_all']))->set($setting['cache_name'], $cache_data);
			}

			// ограничение кэша
			if ($setting['support_disc_size_limit'] && $setting['bus_cache_size_limit_one']) {
				$setting['db']->query("UPDATE `" . DB_PREFIX . "setting` SET `value` = (value + " . (int)$setting['bus_cache_size_limit_one'] . "), `serialized` = '0'  WHERE `code` = 'bus_cache_size_limit' AND `key` = 'bus_cache_size_limit' AND `store_id` = '0'");
			}

			// debug режим
			if ($setting['support_debug']) {
				$output = preg_replace('~<body([^>]*)>~ix', '<body$1>' . $this->getDebugSpeed, $output);
			}
		}

		return $output;
	}

	public function encrypt($key, $value) {
		if (version_compare(phpversion(), '7.1.0', '>') || !function_exists('mcrypt_encrypt')) {
			// для улучшения сюда: https://www.php.net/manual/ru/function.openssl-encrypt.php
			return strtr(base64_encode(openssl_encrypt($value, 'aes-128-cbc', hash('sha256', $key, true), 0, hex2bin(substr(hash_hmac('sha256', $key, hash('sha256', $key, true)), 0, 32)))), '+/=', '-_,');
		} else {
			return strtr(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, hash('sha256', hash('sha256', $key, true), true), $value, MCRYPT_MODE_ECB)), '+/=', '-_,');
		}
	}

	public function decrypt($key, $value) {
		if (version_compare(phpversion(), '7.1.0', '>') || !function_exists('mcrypt_encrypt')) {
			// для улучшения сюда: https://www.php.net/manual/ru/function.openssl-encrypt.php
			return trim(openssl_decrypt(base64_decode(strtr($value, '-_,', '+/=')), 'aes-128-cbc', hash('sha256', $key, true), 0, hex2bin(substr(hash_hmac('sha256', $key, hash('sha256', $key, true)), 0, 32))));
		} else {
			return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, hash('sha256', hash('sha256', $key, true), true), base64_decode(strtr($value, '-_,', '+/=')), MCRYPT_MODE_ECB));
		}
	}

	public function controller($action, $route = '', $args = array()) {
		$route = preg_replace('/[^a-zA-Z0-9_|\/\.]/', '', (string)$route);
		$route = str_replace(array('|', '.'), '/', $route);
		$id = md5($route);
		$output = '';

		if (!empty($this->setting_default['cache_controller'][$id])) {
			$result = $this->setting_default['cache_controller'][$id];
			if ($this->setting_default['support_debug'] == 3) {
				$time = microtime(true);
				if (method_exists($this->response, 'setBuslikCache')) {
					$this->response->setBuslikCache(array('getDebugSpeed' => 'Controller (' . $this->setting_default['text_bus_cache_works'] . '): ' . $route . '|' . $result['expire'] . '<br>' . PHP_EOL));
				} else {
					$this->setting_default['getDebugSpeed'] .= 'Controller (' . $this->setting_default['text_bus_cache_works'] . '): ' . $route . '|' . $result['expire'] . '<br>' . PHP_EOL;
				}
			}
			if ($this->setting_default['cache_status'] == 2) {
				$this->setting_default['cache_status'] = false;
			}

			$name = 'bus_cache_controller.' . str_replace('/', '.', $route) . '.' . md5(http_build_query(array($route, $args, $this->setting_default['img'], $result['config'], $result['session'], $result['cookie'], $result['params'])));

			if (version_compare(VERSION, '4.0.0', '>=')) {
				$class_cache = '\Opencart\Extension\Bus_Cache\System\Library\Bus_Cache\\' . $this->setting_default['cache_engine'];
			} else {
				$class_cache = '\Bus_Cache\\' . $this->setting_default['cache_engine'];
			}
			$cache = new $class_cache($result['expire']);
			$output = $cache->get($name);

			if (!empty($output['output'])) {
				if (isset($output['styles'])) {
					foreach ($output['styles'] as $result) {
						$this->document->addStyle($result['href'], $result['rel'], $result['media']);
					}
				}
				if (isset($output['scripts'])) {
					foreach ($output['scripts'] as $position => $result) {
						foreach ($result as $key => $res) {
							$this->document->addScript($key, $position);
						}
					}
				}

				$output = $output['output'];
			}
		} else {
			if ($this->setting_default['support_debug'] == 3) {
				$time = microtime(true);
				if (method_exists($this->response, 'setBuslikCache')) {
					$this->response->setBuslikCache(array('getDebugSpeed' => 'Controller (' . $this->setting_default['text_bus_cache_works_off'] . '): ' . $route . '|' . $this->setting_default['cache_expire_controller'] . '<br>' . PHP_EOL));
				} else {
					$this->setting_default['getDebugSpeed'] .= 'Controller (' . $this->setting_default['text_bus_cache_works_off'] . '): ' . $route . '|' . $this->setting_default['cache_expire_controller'] . '<br>' . PHP_EOL;
				}
			}
		}

		if (!$output) {
			if (is_array($args)) {
				$arg = $args;
			} else {
				$arg = array($args);
			}

			if (!empty($arg['module_id'])) {
				$module_id = (int)$arg['module_id'];
			} elseif (!empty($arg[0]['module_id'])) {
				$module_id = (int)$arg[0]['module_id'];
			} else {
				if ($route == 'product/thumb' && !empty($arg[0]['product_id'])) {
					$module_id = (int)$arg[0]['product_id'];
				} else {
					$module_id = 0;
				}
			}

			$con_id = md5($route . $module_id);
			$module_duble_id = $con_id;

			if (isset($this->controllerDubleId[$con_id])) {
				$this->controllerDubleId[$con_id]++;
				$module_duble_id .= $this->controllerDubleId[$con_id];
			} else {
				$this->controllerDubleId[$con_id] = 1;
				$module_duble_id .= 1;
			}

			if (!(isset($this->setting_default['cache_controller_ajax'][$con_id]) || isset($this->setting_default['cache_controller_ajax'][$module_duble_id]))) {
				if (is_string($action)) {
					$action = new \Action($route, $args);
				}
				$output = $action->execute($this->registry, $args);
			}

			if (is_string($output) && ($this->setting_default['cache_controller_ajax'] && !isset($this->request->get['bus_cache_ajax']) || $this->setting_default['pagespeed_html_lazy_load'] || $this->setting_default['support_debug'] == 5 || $this->setting_default['support_debug'] == 6)) {
				if (isset($this->setting_default['cache_controller_ajax'][$con_id]) || isset($this->setting_default['cache_controller_ajax'][$module_duble_id])) {
					$bus_cache_ajax = $this->encrypt($this->registry->get('config')->get('config_encryption'), json_encode(array(
						'route'     => $route,
						'module_id' => $module_id,
						'args' 		=> !$module_id ? $args[0] : array(),
						'get'       => $this->request->get
					)));
					if (isset($this->setting_default['cache_controller_ajax'][$con_id]['res'])) {
						$this->setting_default['cache_controller_ajax'][$module_duble_id]['res'] = $this->setting_default['cache_controller_ajax'][$con_id]['res'];
					}
					if (isset($this->setting_default['cache_controller_ajax'][$module_duble_id]['res'])) {
						$result = explode('-', $this->setting_default['cache_controller_ajax'][$module_duble_id]['res']);
						$min = (int)$result[0];
						$max = (isset($result[1]) ? (int)$result[1] : 0);
					} else {
						$min = 0;
						$max = 0;
					}
					$output = "<div id=\"busCacheAjax$module_duble_id\"><script type=\"text/javascript\">
	busCache.ajax('busCacheAjax$module_duble_id', {bus_cache_ajax:'$bus_cache_ajax'}, $min, $max);
</script></div>";
				}

				if (isset($this->setting_default['pagespeed_html_lazy_load'][$con_id]) || isset($this->setting_default['pagespeed_html_lazy_load'][$module_duble_id])) {
					if (isset($this->setting_default['pagespeed_html_lazy_load'][$con_id]['res'])) {
						$this->setting_default['pagespeed_html_lazy_load'][$module_duble_id]['res'] = $this->setting_default['pagespeed_html_lazy_load'][$con_id]['res'];
					}
					$output = str_replace(array('<noscript', 'noscript>'), array('<div data-busloadinglazy-remove=""', 'div>'), $output);
					$output = '<div loading="lazy" data-busloadinglazy-id="' . $module_duble_id . '"' . (isset($this->setting_default['pagespeed_html_lazy_load'][$module_duble_id]['res']) ? ' data-busloadinglazy-res="' . $this->setting_default['pagespeed_html_lazy_load'][$module_duble_id]['res'] . '"' : false) . '><busloadinglazy>' . $output . '</busloadinglazy></div>';
				}

				if ($this->setting_default['support_debug'] == 5 && $output && !in_array($route, array('common/header', 'common/footer', 'extension/module/microdatapro/tc_og_prefix'))) {
					$output = '<div class="bus-cache-debug-5" style="display: table; position: relative; width: 100%; color: white; background-color: black; font-size: 13px; padding: 10px; z-index: 1;">' . (isset($this->setting_default['pagespeed_html_lazy_load'][$module_duble_id]) ? $this->setting_default['text_bus_cache_function_works'] : $this->setting_default['text_bus_cache_function_works_off']) . ':<br>data-busloadinglazy-id="' . $module_duble_id . '"<br>' . $this->setting_default['route'] . '|' . $route . '|' . $module_id . '|' . $this->controllerDubleId[$con_id] . '|' . (isset($this->setting_default['pagespeed_html_lazy_load'][$module_duble_id]['res']) ? $this->setting_default['pagespeed_html_lazy_load'][$module_duble_id]['res'] : 0) . '</div><br>' . $output;
				}

				if ($this->setting_default['support_debug'] == 6 && $output && !in_array($route, array('common/header', 'common/footer', 'extension/module/microdatapro/tc_og_prefix'))) {
					$output = '<div class="bus-cache-debug-6" style="display: table; position: relative; width: 100%; color: white; background-color: black; font-size: 13px; padding: 10px; z-index: 1;">' . (isset($this->setting_default['cache_controller_ajax'][$module_duble_id]) ? $this->setting_default['text_bus_cache_function_works'] : $this->setting_default['text_bus_cache_function_works_off']) . '<br>id="busCacheAjax' . $module_duble_id . '"<br>' . $this->setting_default['route'] . '|'. $route . '|' . $module_id . '|' . $this->controllerDubleId[$con_id] . '|' . (isset($this->setting_default['cache_controller_ajax'][$module_duble_id]['res']) ? $this->setting_default['cache_controller_ajax'][$module_duble_id]['res'] : 0) . '</div><br>' . $output;
				}
			}

			if ($output && !empty($this->setting_default['cache_controller'][$id]) && $this->setting_default['support_debug'] != 5 && $this->setting_default['support_debug'] != 6) {
				$styles = $this->document->getStyles();
				$scripts = array();

				foreach (array('header', 'footer') as $position) {
					$scripts[$position] = $this->document->getScripts($position);
				}

				$cache->set($name, array(
					'output'  => $output,
					'styles'  => $styles,
					'scripts' => $scripts,
				));

				// ограничение кэша
				if ($this->setting_default['cache_size_limit']) {
					if (method_exists($this->response, 'setBuslikCache')) {
						$this->response->setBuslikCache(array('bus_cache_size_limit_one' => strlen(json_encode(array('output' => $output, 'styles'  => $styles, 'scripts' => $scripts)))));
					} else {
						$this->setting_default['bus_cache_size_limit_one'] += strlen(json_encode(array('output' => $output, 'styles'  => $styles, 'scripts' => $scripts)));
					}
				}
			}
		}

		if (in_array($route, array('common/header', 'common/footer')) && method_exists($this->response, 'setBuslikCache')) {
			if ($route == 'common/header') {
				$this->response->setBuslikCache(array(
					'styles' => $this->document->getStyles(),
					'scripts' => $this->document->getScripts('header')
				));
			}
			if ($route == 'common/footer') {
				$this->response->setBuslikCache(array(
					'scripts_footer' => $this->document->getScripts('footer')
				));
			}
		}

		if ($this->setting_default['support_debug'] == 3) {
			$time = round(microtime(true) - $time, 3);
			if (method_exists($this->response, 'setBuslikCache')) {
				$this->response->setBuslikCache(array('getDebugSpeed' => $this->setting_default['text_bus_cache_time_loading'] . ' ' . $route . ': ' . $time . ' сек. или ' . ($time * 1000) . ' мс.<br>' . PHP_EOL));
			} else {
				$this->setting_default['getDebugSpeed'] .= $this->setting_default['text_bus_cache_time_loading'] . ' ' . $route . ': ' . $time . ' сек. или ' . ($time * 1000) . ' мс.<br>' . PHP_EOL;
			}
		}

		return $output;
	}

	// для OC 2.0-2.1
	public function models($class = '', $route = '') {
		if (!is_string($class)) {
			return $class;
		}

		$proxy = new Proxy();

		foreach (get_class_methods($class) as $method) {
			if (substr($method, 0, 2) != '__' && is_string($class) && is_callable($class, $method)) {
				$proxy->{$method} = function ($args) use ($class, $route, $method) {
					return $this->model($class, $route . '/' . $method, $args);
				};
			}
		}

		return $proxy;
	}

	public function model($class = '', $route = '', $args = array()) {
		$route = preg_replace('/[^a-zA-Z0-9_|\/\.]/', '', (string)$route);
		$route = str_replace(array('|', '.'), '/', $route);
		$id = md5($route);
		$output = '';

		if (!empty($this->setting_default['cache_model'][$id])) {
			$result = $this->setting_default['cache_model'][$id];
			if ($this->setting_default['support_debug'] == 4) {
				$time = microtime(true);
				if (method_exists($this->response, 'setBuslikCache')) {
					$this->response->setBuslikCache(array('getDebugSpeed' => 'Model (' . $this->setting_default['text_bus_cache_works'] . '): ' . $route . '|' . $result['expire'] . '<br>' . PHP_EOL));
				} else {
					$this->setting_default['getDebugSpeed'] .= 'Model (' . $this->setting_default['text_bus_cache_works'] . '): ' . $route . '|' . $result['expire'] . '<br>' . PHP_EOL;
				}
			}
			if ($this->setting_default['cache_status'] == 2) {
				$this->setting_default['cache_status'] = false;
			}

			$name = 'bus_cache_model.' . str_replace('/', '.', $route) . '.' . md5(http_build_query(array($route, $args, $this->setting_default['img'], $result['config'], $result['session'], $result['cookie'], $result['params'])));
			if (version_compare(VERSION, '4.0.0', '>=')) {
				$class_cache = '\Opencart\Extension\Bus_Cache\System\Library\Bus_Cache\\' . $this->setting_default['cache_engine'];
			} else {
				$class_cache = '\Bus_Cache\\' . $this->setting_default['cache_engine'];
			}
			$cache = new $class_cache($result['expire']);
			$output = $cache->get($name);
		} else {
			if ($this->setting_default['support_debug'] == 4) {
				$time = microtime(true);
				if (method_exists($this->response, 'setBuslikCache')) {
					$this->response->setBuslikCache(array('getDebugSpeed' => 'Model (' . $this->setting_default['text_bus_cache_works_off'] . '): ' . $route . '|' . $this->setting_default['cache_expire_model'] . '<br>' . PHP_EOL));
				} else {
					$this->setting_default['getDebugSpeed'] .= 'Model (' . $this->setting_default['text_bus_cache_works_off'] . '): ' . $route . '|' . $this->setting_default['cache_expire_model'] . '<br>' . PHP_EOL;
				}
			}
		}

		if (!$output) {
			if (is_string($class)) {
				static $model;

				$method = substr($route, 0, strrpos($route, '/'));

				if (!isset($model[$method])) {
					$model[$method] = new $class($this->registry);
				}

				$output = call_user_func_array(array($model[$method], basename($route)), $args);
			} else {
				$output = call_user_func_array($class, $args);
			}

			if ($output && !empty($this->setting_default['cache_model'][$id])) {
				$cache->set($name, $output);

				// ограничение кэша
				if ($this->setting_default['cache_size_limit']) {
					if (method_exists($this->response, 'setBuslikCache')) {
						$this->response->setBuslikCache(array('bus_cache_size_limit_one' => strlen(json_encode(array('output' => $output)))));
					} else {
						$this->setting_default['bus_cache_size_limit_one'] += strlen(json_encode(array('output' => $output)));
					}
				}
			}
		}

		if ($this->setting_default['support_debug'] == 4) {
			$time = round(microtime(true) - $time, 3);
			if (method_exists($this->response, 'setBuslikCache')) {
				$this->response->setBuslikCache(array('getDebugSpeed' => $this->setting_default['text_bus_cache_time_loading'] . ' ' . $route . ': ' . $time . ' сек. или ' . ($time * 1000) . ' мс.<br>' . PHP_EOL));
			} else {
				$this->setting_default['getDebugSpeed'] .= $this->setting_default['text_bus_cache_time_loading'] . ' ' . $route . ': ' . $time . ' сек. или ' . ($time * 1000) . ' мс.<br>' . PHP_EOL;
			}
		}

		return $output;
	}

	private function fixBlueWebp($img) {
		$tmp = imagecreatetruecolor(imagesx($img),imagesy($img));
		$color = imagecolorallocate($tmp, 255, 255, 255);
		imagefill($tmp, 0, 0, $color);

		for ($y = 0; $y < imagesy($img); ++$y) {
			for ($x=0; $x < imagesx($img); ++$x) {
				$rgb = imagecolorat($img, $x, $y);
				$r = ($rgb >> 24) & 0xFF;
				$g = ($rgb >> 16) & 0xFF;
				$b = ($rgb >> 8) & 0xFF;
				$pixelcolor = imagecolorallocate($tmp, $r, $g, $b);
				imagesetpixel($tmp, $x, $y, $pixelcolor);
			}
		}

		return $tmp;
	}

	public function image($data = array()) {
		if ($this->config->get('bus_cache_image_webp_status') && isset($data['filename']) && isset($data['width']) && isset($data['height'])) {
			$extension = pathinfo($data['filename'], PATHINFO_EXTENSION);
			$image_old = $data['filename'];
			$image_new = 'cache/' . mb_substr($data['filename'], 0, mb_strrpos($data['filename'], '.')) . '-' . (int)$data['width'] . 'x' . (int)$data['height'] . '.' . $extension;

			if (is_file(DIR_IMAGE  .  $image_new)) {
				$image_type = exif_imagetype(DIR_IMAGE  .  $image_new);
				if (version_compare(VERSION, '4.0.0', '>=')) {
					$data['convert'] = in_array($image_type, array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF));
				}
			} else {
				$image_type = 0;
				if (version_compare(VERSION, '4.0.0', '>=')) {
					$data['convert'] = false;
				}
			}

			if (!empty($data['convert'])) {
				if ($this->config->get('bus_cache_image_webp_convert') && isset($_SERVER['HTTP_ACCEPT']) && stripos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
					$pro_webp_image = 'cache/webp/' . mb_substr( $data['filename'] , 0, mb_strrpos( $data['filename'] , '.')) . '-' . (int)$data['width'] . 'x' . (int)$data['height'] . '.webp';

					if (!is_file(DIR_IMAGE . $pro_webp_image) || (filectime(DIR_IMAGE  .  $image_new) > filectime(DIR_IMAGE . $pro_webp_image))) {
						$pro_directories = dirname($pro_webp_image);

						if (!is_dir(DIR_IMAGE . $pro_directories)) {
							mkdir(DIR_IMAGE . $pro_directories, 0755, true);
						}

						$gd_info = (function_exists('gd_info') ? gd_info() : array('GD Version' => 'bundled (2.2.5 compatible)'));
						$config_pro_webp_size = $this->config->get('bus_cache_image_webp_quality');
						if (function_exists('imagewebp')) {
							if ($image_type == IMAGETYPE_PNG) {
								$img = imagecreatefrompng(DIR_IMAGE  .  $image_new);
							} elseif ($image_type == IMAGETYPE_GIF) {
								$img = imagecreatefromgif(DIR_IMAGE  .  $image_new);
							} else {
								$img = imagecreatefromjpeg(DIR_IMAGE  .  $image_new);
							}

							if ($image_type == IMAGETYPE_PNG || $image_type == IMAGETYPE_GIF) {
								if (version_compare($gd_info['GD Version'], 'bundled (2.2.5 compatible)', '<')) {
									$pngimg = $img;
									$img = imagecreatetruecolor($data['width'], $data['height']);
									imagefill($img, 0, 0, imagecolorallocatealpha($img, 255, 255, 255, 127));
									imagecopyresampled($img, $pngimg, 0, 0, 0, 0, $data['width'], $data['height'], $data['width'], $data['height']);
									//imagepalettetotruecolor($img); // imagewebp(): Palette image not supported by webp
									imagedestroy($pngimg);
								}
							}

							//$img = $this->fixBlueWebp($img);
							//https://stackoverflow.com/questions/39292617/fatal-error-paletter-image-not-supported-by-webp
							imagewebp($img, DIR_IMAGE . $pro_webp_image, ($config_pro_webp_size ? $config_pro_webp_size : 100));
							imagedestroy($img);
							if (filesize(DIR_IMAGE . $pro_webp_image) % 2 == 1) {
								file_put_contents(DIR_IMAGE . $pro_webp_image, "\0", FILE_APPEND);
							}
						} elseif (function_exists('exec')) {
							exec("cwebp -q " . ($config_pro_webp_size ? $config_pro_webp_size : 100) . " '" . DIR_IMAGE  .  $image_new . "' -o '". DIR_IMAGE . $pro_webp_image . "'");
						}

						if (is_file(DIR_IMAGE . $pro_webp_image)) {
							$image_new = $pro_webp_image;
						}
					} else {
						if (filesize(DIR_IMAGE . $pro_webp_image) > 1) {
							$image_new = $pro_webp_image;
						}
					}
				}

				if ($this->config->get('bus_cache_image_webp_convert') && $extension == 'webp' && isset($_SERVER['HTTP_ACCEPT']) && stripos($_SERVER['HTTP_ACCEPT'], 'image/webp') === false) {
					$pro_png_image = 'cache/png/' . mb_substr( $data['filename'] , 0, mb_strrpos( $data['filename'] , '.')) . '-' . (int)$data['width'] . 'x' . (int)$data['height'] . '.png';

					if (!is_file(DIR_IMAGE . $pro_png_image) || (filectime( DIR_IMAGE  .  $image_new ) > filectime(DIR_IMAGE . $pro_png_image))) {
						$pro_directories = dirname($pro_png_image);

						if (!is_dir(DIR_IMAGE . $pro_directories)) {
							mkdir(DIR_IMAGE . $pro_directories, 0755, true);
						}

						//$gd_info = (function_exists('gd_info') ? gd_info() : array('GD Version' => 'bundled (2.2.5 compatible)'));
						$pro_webp_image = 'cache/' . mb_substr( $data['filename'] , 0, mb_strrpos( $data['filename'] , '.')) . '-' . (int)$data['width'] . 'x' . (int)$data['height'] . '.webp';
						$config_pro_webp_size = $this->config->get('bus_cache_image_webp_quality');
						if (function_exists('imagewebp')) {
							$img = imagecreatefromwebp(DIR_IMAGE  .  $pro_webp_image);
							list($width_orig, $height_orig, $image_type) = getimagesize(DIR_IMAGE . $pro_webp_image);
							if (!$width_orig) {
								$img = $this->fixBlueWebp($img);
							}
							imagepng($img, DIR_IMAGE . $pro_png_image, 9);
							imagedestroy($img);
							if (filesize(DIR_IMAGE . $pro_png_image) % 2 == 1) {
								file_put_contents(DIR_IMAGE . $pro_png_image, "\0", FILE_APPEND);
							}
						} elseif (function_exists('exec')) {
							exec("dwebp '" . DIR_IMAGE . $pro_webp_image . "' -o '" . $pro_png_image . "'");
						}

						if (is_file(DIR_IMAGE . $pro_png_image)) {
							if ($this->setting_default['support_disc_size_limit']) {
								if (method_exists($this->response, 'setBuslikCache')) {
									$this->response->setBuslikCache(array('bus_cache_size_limit_one' => filesize(DIR_IMAGE . $pro_png_image)));
								} else {
									$this->setting_default['bus_cache_size_limit_one'] += filesize(DIR_IMAGE . $pro_png_image);
								}
							}
							$image_new = $pro_png_image;
							//return 'data:image/png;base64,'. base64_encode(file_get_contents(DIR_IMAGE . $pro_png_image));
						}
					} else {
						$image_new = $pro_png_image;
						//return 'data:image/png;base64,'. base64_encode(file_get_contents(DIR_IMAGE . $pro_png_image));
					}
				}

				if (isset($image_new)) {
					return $image_new;
				}
			} else {
				if ($this->config->get('bus_cache_image_webp_convert') && $extension == 'webp') {
					$bus_cache_image_webp_status = true;

					if (version_compare(phpversion(), '7.1.0', '>') == true) {
						if (exif_imagetype( DIR_IMAGE  .  $image_old ) != IMAGETYPE_WEBP) {
							$bus_cache_image_webp_status = false;
						}
					}

					if ($bus_cache_image_webp_status) {
						$pro_webp_image = $image_new;

						$pro_directories = dirname($pro_webp_image);

						if (!is_dir(DIR_IMAGE . $pro_directories)) {
							mkdir(DIR_IMAGE . $pro_directories, 0755, true);
						}

						$config_pro_webp_size = $this->config->get('bus_cache_image_webp_quality');
						if (function_exists('imagewebp')) {
							$img = imagecreatefromwebp(DIR_IMAGE  .  $image_old);

							if (empty($width_orig)) {
								$img = $this->fixBlueWebp($img);
								$width_orig = imagesx($img);
							}
							if (empty($height_orig)) {
								$height_orig = imagesy($img);
							}

							$scale_w = $data['width'] / $width_orig;
							$scale_h = $data['height'] / $height_orig;
							$scale = min($scale_w, $scale_h);

							$webp_new_width = (int)($width_orig * $scale);
							$webp_new_height = (int)($height_orig * $scale);

							$img_new = imagecreatetruecolor($data['width'], $data['height']);

							if (imagecolortransparent($img) !== -1) {
								imagealphablending($img_new, false);
								imagesavealpha($img_new, true);
								$background = imagecolorallocatealpha($img_new, 255, 255, 255, 127);
								imagecolortransparent($img_new, $background);
							} else {
								$background = imagecolorallocate($img_new, 255, 255, 255);
							}

							imagefilledrectangle($img_new, 0, 0, $data['width'], $data['height'], $background);
							imagecopyresampled($img_new, $img, (int)(($data['width'] - $webp_new_width) / 2), (int)(($data['height'] - $webp_new_height) / 2), 0, 0, $webp_new_width, $webp_new_height, $width_orig, $height_orig);
							imagedestroy($img);

							if (is_object($img_new) || is_resource($img_new)) {
								imagewebp($img_new, DIR_IMAGE . $pro_webp_image, ($config_pro_webp_size ? $config_pro_webp_size : 100));
								if (isset($_SERVER['HTTP_ACCEPT']) && stripos($_SERVER['HTTP_ACCEPT'], 'image/webp') === false) {
									$pro_png_image = 'cache/png/' . mb_substr( $data['filename'] , 0, mb_strrpos( $data['filename'] , '.')) . '-' . (int)$data['width'] . 'x' . (int)$data['height'] . '.png';
									$pro_directories = dirname($pro_png_image);

									if (!is_dir(DIR_IMAGE . $pro_directories)) {
										mkdir(DIR_IMAGE . $pro_directories, 0755, true);
									}
									imagepng($img_new, DIR_IMAGE . $pro_png_image, (int)(9/100*($config_pro_webp_size ? $config_pro_webp_size : 100)));
								}

								imagedestroy($img_new);
							}

							if (filesize(DIR_IMAGE . $pro_webp_image) % 2 == 1) {
								file_put_contents(DIR_IMAGE . $pro_webp_image, "\0", FILE_APPEND);
							}

							if (isset($pro_png_image)) {
								if ($this->setting_default['support_disc_size_limit']) {
									if (method_exists($this->response, 'setBuslikCache')) {
										$this->response->setBuslikCache(array('bus_cache_size_limit_one' => filesize(DIR_IMAGE . $pro_png_image)));
									} else {
										$this->setting_default['bus_cache_size_limit_one'] += filesize(DIR_IMAGE . $pro_png_image);
									}
								}
								$pro_webp_image = $pro_png_image;
							}
						} else {
							if (function_exists('exec')) {
								copy( DIR_IMAGE  .  $image_old , DIR_IMAGE  .  $pro_webp_image );
								$pro_copy = DIR_IMAGE . "cache/" . mb_substr( $data['filename'] , 0, mb_strrpos( $data['filename'] , '.')) . "-" . (int)$data['width'] . "x" . (int)$data['height'] . ".png";
								exec("dwebp '" . DIR_IMAGE . $pro_webp_image . "' -o '" . $pro_copy . "'");
								if (isset($_SERVER['HTTP_ACCEPT']) && stripos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
									exec("cwebp -q " . ($config_pro_webp_size ? $config_pro_webp_size : 100) . " -resize " . (int)$data['width'] . " " . (int)$data['height'] . " '" . $pro_copy . "' -o '" . DIR_IMAGE . $pro_webp_image . "'");
									if (is_readable($pro_copy)) {
										unlink($pro_copy);
									}
								}
							}
						}

						if (!empty($_SERVER['HTTPS']) && defined('HTTPS_SERVER')) {
							$webp = ($this->config->get('config_ssl') ? $this->config->get('config_ssl') : HTTPS_SERVER)  .  'image/' . $pro_webp_image;
						} else {
							$webp = ($this->config->get('config_url') ? $this->config->get('config_url') : HTTP_SERVER)  .  'image/' . $pro_webp_image;
						}
					} else {
						$webp = $this->registry->get('model_tool_image')->resize('error_webp_image.webp', $data['width'], $data['height']);
					}

					return $webp;
				}
			}
		}

		return false;
	}

	private function modification($output, $search, $value, $position = 'replace') {
		if ($position == 'after') {
			$pos = strpos($output, $search, 0);
			if ($pos !== false) {
				$pos = $pos + strpos(substr($output, $pos, null), "\n", 0);
				$output = substr($output, 0, $pos) . "\n" . $value . substr($output, $pos, null);
			}
		} elseif ($position == 'before') {
			$pos = strpos($output, $search, 0);
			if ($pos !== false) {
				$pos = strrpos(substr($output, 0, $pos), "\n", 0);
				$output = substr($output, 0, $pos) . "\n" . $value . substr($output, $pos, null);
			}
		} else {
			$output = str_replace($search, $value, $output);
		}

		return $output;
	}

	private function realUrlCSS($content, $css = '') {
		$styles = array();

		if (preg_match_all('/\b(' . str_replace('\|', '|', preg_quote($css, '/')) . '|\burl\(.[^\(\)]*?\))/iS', $content, $matches)) {
			if (!empty($matches[0])) {
				$css_path = '';
				$css_path_md = '';
				$before = array();
				$after = array();
				$image = basename(DIR_IMAGE);

				if ($css && strpos($css, '|') === false) {
					if (strpos($css, '://') === false) {
						$css_path = substr($css, 0, -(int)iconv_strlen(basename($css)));
					} else {
						$css_path = substr(substr($css, 0, -(int)iconv_strlen(basename($css))), $this->setting_default['server_len']);
					}

					$css_path_md = md5($css_path);
				}

				foreach ($matches[0] as $orig) {
					if ($orig) {
						$result = $orig;

						if (stripos($result, 'url(') === false && stripos($result, '.css') !== false) {
							$css = $result;
							if (strpos($css, '://') === false) {
								$css_path = substr($css, 0, -(int)iconv_strlen(basename($css)));
							} else {
								$css_path = substr(substr($css, 0, -(int)iconv_strlen(basename($css))), $this->setting_default['server_len']);
							}
							$css_path_md = md5($css_path);
						} elseif (stripos($result, 'data:') !== false) {
							$result = trim(trim(str_replace(array('url(', ')'), '', $result), '"'), "'");
							$p = stripos($result, 'base64,');
							if ($p !== false) {
								$mime = substr($result, 5, stripos($result, ';')-5);
								$result = substr($result, $p+7);
								$result = base64_decode($result);
								$file = $css_path_md . mb_strlen($result);
							} else {
								$p = stripos($result, ';');
								if ($p !== false && $p < 35) {
									$mime = substr($result, 5, $p-5);
								} else {
									$mime = substr($result, 5, stripos($result, ',')-5);
								}
								$result = substr($result, stripos($result, '%3c'));
								$result = urldecode($result);
								$file = md5($css_path_md . $result);
							}

							if (strpos($this->setting_default['pagespeed_css_min_convert'], $mime) !== false) {
								$extension = (isset($this->fileExtension[$mime]) ? $this->fileExtension[$mime] : false);

								if ($extension) {
									$file = $file . '.' . $extension;

									if (!is_file(DIR_IMAGE . 'bus_cache/convert/' . $file)) {
										file_put_contents(DIR_IMAGE . 'bus_cache/convert/' . $file, $result);
									}

									$href = $this->setting_default['server'] . $image . '/bus_cache/convert/' . $file;

									$before[] = $orig;
									$after[] = 'url("' . $href . '")';
								}
							}
						} else {
							$result = str_replace(array('url(', ')', ' ', '"', "'"), '', $result);

							$domain = '';
							$href = '';
							$hach = '';

							if (strpos($result, '://') === false) {
								$href = strstr($result, '?', true);

								if (!$href) {
									$href = strstr($result, '#', true);
								}

								if (!$href) {
									$href = $result;
								}

								$href = str_replace('\\', '/', realpath($this->setting_default['dir'] . $css_path . $href));

								if (substr($href, 0, $this->setting_default['dir_len']) == $this->setting_default['dir']) {
									$hach = strstr($result, '?');
									if (!$hach) {
										$hach = strstr($result, '#');
									}
									$href = $this->setting_default['server'] . substr($href, $this->setting_default['dir_len']) . $hach;
								} else {
									$href = $this->setting_default['server'] . ltrim(str_replace(array('\\', './', '.../'), array('/', '../', '../'), $result), '/');
								}

								$before[] = $orig;
								$after[] = 'url("' . $href . '")';
							} else {
								$domain = parse_url($result, PHP_URL_HOST);

								if ($domain && strpos($this->setting_default['server'], $domain) === false) {
									$domain = parse_url($result, PHP_URL_SCHEME) . '://' . $domain . '/';
								} else {
									$domain = '';
								}
							}

							$styles[] = array(
								'css'       => $css,
								'domain'    => $domain,
								'href'      => $href,
								'hach'      => $hach
							);
						}
					}
				}

				if ($before) {
					$content = str_replace($before, $after, $content);
				}
			}
		}

		return array(
			'styles'  => $styles,
			'content' => $content
		);
	}

	private function minCSS($output, $level = array()) {
		if (!empty($level[2])) {
			// удаляем комментарии
			$output = preg_replace('/(?:(?:\/\*[^*]*\*+([^\/][^*]*\*+)*\/))/S', '', $output);
		}

		if (!empty($level[3])) {
			// удаляем пробелы
			$output = preg_replace("/\s*(:|,|;|{|}|\t)\s*/", "$1", $output);
			$output = preg_replace("/(\s{2,}\.)/", " .", $output);
		}

		if (!empty($level[4])) {
			// удаляем перевод строк и табы
			$output = preg_replace("/(\r|\n|\t+|\s{2,})/", "", $output);
		}

		return $output;
	}

	private function minJS($output, $level = array()) {
		if (!empty($level[2])) {
			// удаляем комментарии
			$exception = str_replace('\|', '|', preg_quote('-->', '/'));
			$output = preg_replace('/(?:(?:\s){1}\/\/(?!-->|,|")[^\n]*|\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)/S', '', $output);
		}

		if (!empty($level[3])) {
			// удаляем пробелы
			$before = array('if (', ') {', '" + "', "' + '", "\0", "\x0B");
			$after = array('if(', '){', '"+"', "'+'", "", "");

			$output = str_replace($before, $after, $output);
			$output = str_replace(array('<!--', '//-->', '-->'), '', $output);
		}

		if (!empty($level[4])) {
			// удаляем перевод строк и табы
			$output = preg_replace("/(\r|\n|\t+|\s{2,})/", "", $output);
		}

		return $output;
	}

	private function minHTML($output, $level = array()) {
		if (!empty($level[2])) {
			// удаляем комментарии
			$output = preg_replace('/(?:[^>]\s|\n)<!--(?!<!)[^\[>][\s\S]*?-->/', '', $output);
			$output = preg_replace('/(?:[^>]\s|\n)<!--(?!<!)[^\[>][\s\S]*?-->/', '', $output);
		}

		if (!empty($level[3])) {
			// удаляем пробелы слева для определённых тегов
			foreach (explode("\r\n", htmlspecialchars_decode($this->setting_default['pagespeed_html_min_tags'], ENT_QUOTES)) as $result) {
				if ($result && $result[0] != ';') {
					$route = strstr($result, '|', true);

					if ($route == '#' || $route && strpos($this->setting_default['route'], $route) !== false || $this->setting_default['keyword'] && strpos($route, $this->setting_default['keyword']) !== false) {
						$tags = '';
						$flags = '\s\h\t\r\n';
						$result = explode('|', $result);

						if (!empty($result[1])) {
							$flags = $result[1];
						}

						unset($result[0], $result[1]);

						$tags = implode('|', $result);

						if ($tags) {
							$tags = str_replace('\|', '|', preg_quote($tags, '/'));
							$output = preg_replace('/>[' . $flags . ']*(?=' . $tags . ')/S', '>', $output);
						}
					}
				}
			}
		}

		if (!empty($level[4])) {
			// удаляем перевод строк
			$output = preg_replace('/([\r\n]+?)/', '', $output);
		}

		return $output;
	}

	private function setDebugSpeed($setting = array()) {
		if (!empty($setting['name']) && isset($setting['time']) && $setting['time'] >= 0) {
			$this->getDebugSpeed .= sprintf('%s: %s сек. или %s мс.<br>', $setting['name'], $setting['time'], ($setting['time'] * 1000));
		} elseif (!empty($setting['name'])) {
			$this->getDebugSpeed .= $setting['name'] . '<br>';
		}
	}

	private function examination($output = array(), $setting = array(), $result = array()) {
		$count = 0;

		// валидация
		if (isset($setting[$result[0]])) {
			$count = 1;
			if (isset($result[1]) && isset($setting[$result[0]][$result[1]])) {
				$count = 2;
				if (isset($result[2]) && isset($setting[$result[0]][$result[1]][$result[2]])) {
					$count = 3;
					if (isset($result[3]) && isset($setting[$result[0]][$result[1]][$result[2]][$result[3]])) {
						$count = 4;
						if (isset($result[4]) && isset($setting[$result[0]][$result[1]][$result[2]][$result[3]][$result[4]])) {
							$count = 5;
							if (isset($result[5]) && isset($setting[$result[0]][$result[1]][$result[2]][$result[3]][$result[4]][$result[5]])) {
								$count = 6;
							}
						}
					}
				}
			}
		}

		// устанавливаем значение после валидации
		if ($count == 1) {
			$output[$result[0]] = $setting[$result[0]];
		} elseif ($count == 2) {
			$output[$result[0]][$result[1]] = $setting[$result[0]][$result[1]];
		} elseif ($count == 3) {
			$output[$result[0]][$result[1]][$result[2]] = $setting[$result[0]][$result[1]][$result[2]];
		} elseif ($count == 4) {
			$output[$result[0]][$result[1]][$result[2]][$result[3]] = $setting[$result[0]][$result[1]][$result[2]][$result[3]];
		} elseif ($count == 5) {
			$output[$result[0]][$result[1]][$result[2]][$result[3]][$result[4]] = $setting[$result[0]][$result[1]][$result[2]][$result[3]][$result[4]];
		} elseif ($count == 6) {
			$output[$result[0]][$result[1]][$result[2]][$result[3]][$result[4]][$result[5]] = $setting[$result[0]][$result[1]][$result[2]][$result[3]][$result[4]][$result[5]];
		}

		return $output;
	}
}

// для OC 2.0-2.1
class Proxy extends Bus_Cache {
	public function __get($method) {
		return $this->{$method};
	}	

	public function __set($method, $value) {
		 $this->{$method} = $value;
	}

	public function __call($method, $args) {
		foreach ($args as $key => &$value);

		if (isset($this->{$method})) {		
			return call_user_func_array($this->{$method}, array($args));	
		} else {
			$trace = debug_backtrace();

			exit('<b>Notice</b>:  Undefined property: Proxy::' . $method . ' in <b>' . $trace[1]['file'] . '</b> on line <b>' . $trace[1]['line'] . '</b>');
		}
	}
}