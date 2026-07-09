<?php
// *	@copyright	OPENCART.PRO 2011 - 2020.
// *	@forum		http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

// Heading
$_['heading_title']            = 'SEO Менеджер Pro';

// Text
$_['text_default']             = 'По умолчанию';
$_['text_module']              = 'Модули';
$_['text_additional_1']        = 'Ссылки состоящие из роутов с параметрами';
$_['text_additional_2']        = 'Ссылки состоящие из роутов без параметров';
$_['text_additional_3']        = 'Ссылки с дублями seo_url';
$_['text_description']         = '- Установите в шаблоне этот код вывода описания: "<b>&lt;?php echo (isset($description) ? $description : false); ?&gt;</b>" в нужное вам место.';
$_['text_description_bottom']  = '- Установите в шаблоне этот код вывода описания: "<b>&lt;?php echo (isset($description_bottom) ? $description_bottom : false); ?&gt;</b>" в нужное вам место.';

// Column
$_['column_query']             = 'Ссылка (роут или параметр)';
$_['column_keyword']           = 'SEO URL';
$_['column_store']             = 'Магазин';
$_['column_route']             = 'Роут';
$_['column_action']            = 'Действие';

// Entry
$_['entry_query']              = 'Ссылка (роут или параметр)';
$_['entry_keyword']            = 'SEO URL';
$_['entry_additional']         = 'Дополнительно';
$_['entry_store']              = 'Магазин';
$_['entry_route']              = 'Роут';
$_['entry_view']               = 'Роут шаблона';
$_['entry_meta_title']         = 'Мета-тег Title';
$_['entry_meta_h1']            = 'HTML-тег H1';
$_['entry_meta_description']   = 'Мета-тег Description';
$_['entry_meta_keyword']       = 'Мета-тег Keywords';
$_['entry_description']        = 'Описание верх';
$_['entry_description_bottom'] = 'Описание низ';
$_['entry_status']             = 'Статус';

// Tab
$_['tab_seourl']               = 'SEO URL';
$_['tab_seotag']               = 'SEO META-TAG';
$_['tab_generation']           = 'SEO ГЕНЕРАЦИЯ';
$_['tab_settings']             = 'НАСТРОЙКИ';

// Help
$_['help_query']               = 'Роут или параметр нужен для привязки SEO URL и META-TAGS к определённой странице. Роут имеет следующий вид: information/contact - это расположение контроллера начиная от catalog/controller/&lt;br /&gt;Параметр имеет вид типа: product_id=1';
$_['help_route']               = 'Роут нужен для привязки мета-тегов к определённой странице. Роут имеет следующий вид: information/contact - это расположение контроллера начиная от catalog/controller/';
$_['help_view']                = 'Роут шаблона нужен если вы хотите изменить шаблон для указанной страницы. Роут шаблона имеет следующий вид: information/contact - это расположение шаблона начиная от catalog/view/theme/%s/template/';
$_['help_keyword']             = 'SEO URL должен быть уникальным на всю систему, без пробелов и спецсимволов, и на латинице.';

// Button
$_['button_clear_cache']       = 'Сбросить кэш';
$_['button_insert']            = 'Добавить';

// Error
$_['error_warning']            = 'Внимательно проверьте форму на ошибки!';
$_['error_permission']         = 'У вас недостаточно прав для внесения изменений!';
$_['error_query']              = 'Укажите Роут или параметр!';
$_['error_keyword']            = 'SEO URL уже используется!';
$_['error_route']              = 'Укажите Роут!';
$_['error_meta_h1']            = 'HTML-тег H1 должен содержать от 0 до 300 символов!';
$_['error_meta_title']         = 'Мета-тег Title должен содержать от 0 до 300 символов!';
$_['error_meta_description']   = 'Мета-тег Description должен содержать от 0 до 300 символов!';
$_['error_meta_keyword']       = 'Мета-тег Keyword должен содержать от 0 до 300 символов!';

// Info
$_['info_hz']                  = 'Что-то пошло не так!';

// Success
$_['success']                  = 'Данные успешно обновлены!';
$_['success_update_url']       = 'SEO URL успешно обновлён!';
$_['success_clear']            = 'Кэш SEO URL успешно сброшен!';
$_['success_delete_url']       = 'SEO URL успешно удалён!';
$_['success_delete_tag']       = 'SEO META-TAG успешно удалён!';
