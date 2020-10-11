<?php
// *	@copyright	OPENCART.PRO 2011 - 2020.
// *	@forum		http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

// Heading
$_['heading_title']            = 'SEO Manager Pro';

// Text
$_['text_default']             = 'Default';
$_['text_module']              = 'Modules';
$_['text_additional_1']        = 'Links consisting of routes with parameters';
$_['text_additional_2']        = 'Links consisting of routes without parameters';
$_['text_additional_3']        = 'Links with duplicates seo_url';
$_['text_description']         = '- Set this description output code in the template: "<b>&lt;?php echo (isset($description) ? $description : false); ?&gt;</b>" to the place you need.';
$_['text_description_bottom']  = '- Set this description output code in the template: "<b>&lt;?php echo (isset($description_bottom) ? $description_bottom : false); ?&gt;</b>" to the place you need.';

// Column
$_['column_query']             = 'Link (route or parameter)';
$_['column_keyword']           = 'SEO URL';
$_['column_store']             = 'Store';
$_['column_route']             = 'Route';
$_['column_action']            = 'Action';

// Entry
$_['entry_query']              = 'Link (route or parameter)';
$_['entry_keyword']            = 'SEO URL';
$_['entry_additional']         = 'Advanced';
$_['entry_store']              = 'Store';
$_['entry_route']              = 'Route';
$_['entry_view']               = 'Template Route';
$_['entry_meta_title']         = 'Meta-Tag Title';
$_['entry_meta_h1']            = 'HTML-Tag H1';
$_['entry_meta_description']   = 'Meta-Tag Description';
$_['entry_meta_keyword']       = 'Meta-Tag Keywords';
$_['entry_description']        = 'Description top';
$_['entry_description_bottom'] = 'Description bottom';
$_['entry_status']             = 'Status';

// Tab
$_['tab_seourl']               = 'SEO URL';
$_['tab_seotag']               = 'SEO META-TAG';
$_['tab_generation']           = 'SEO GENERATION';
$_['tab_settings']             = 'SETTINGS';

// Help
$_['help_query']               = 'A route or parameter is needed to bind SEO URLs and META-TAGS to a specific page. The route has the following form: information / contact - this is the location of the controller starting from catalog/controller/&lt;br /&gt;The parameter is of the type: product_id=1';
$_['help_route']               = 'The route has the following form: information/contact is the controller location path starting from catalog/controller/';
$_['help_view']                = 'The template route looks like this: information/contact is the location of the template starting from  catalog/view/theme/%s/template/';
$_['help_keyword']             = 'Must be unique for the whole system, without spaces and special characters, and in Latin.';

// Button
$_['button_clear_cache']       = 'Clear the cache';
$_['button_insert']            = 'Add';

// Error
$_['error_warning']            = 'Carefully check the form for errors!';
$_['error_permission']         = 'You do not have sufficient privileges to make changes!';
$_['error_query']              = 'Specify a Route or parameter!';
$_['error_keyword']            = 'SEO URL is already in use!';
$_['error_route']              = 'Specify Route!';
$_['error_meta_h1']            = 'The H1 HTML tag must be between 0 and 300 characters!';
$_['error_meta_title']         = 'Title meta tag must be between 0 and 300 characters!';
$_['error_meta_description']   = 'Description meta tag must be between 0 and 300 characters!';
$_['error_meta_keyword']       = 'The Keyword meta tag must be between 0 and 300 characters!';

// Info
$_['info_hz']                  = 'Something went wrong!';

// Success
$_['success']                  = 'Data successfully updated!';
$_['success_update_url']       = 'SEO URL updated successfully!';
$_['success_clear']            = 'SEO URL cache successfully flushed!';
$_['success_delete_url']       = 'SEO URL was successfully deleted!';
$_['success_delete_tag']       = 'SEO META-TAG successfully deleted!';
