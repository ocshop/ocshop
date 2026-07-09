<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2022; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ )

// Heading
$_['heading_title']                              = '<b>Convenient Editor <span style="color:limegreen">Full</span></b> v' . (isset($this->data['bus_editor_version']) ? $this->data['bus_editor_version'] : '1.0');

// Tab
$_['tab_blog_category']                          = 'Blog Category Settings';
$_['tab_blog_article']                           = 'Blog Article Settings';
$_['tab_category']                               = 'Product Category Settings';
$_['tab_information']                            = 'Information Page Settings';
$_['tab_manufacturer']                           = 'Manufacturers Settings';
$_['tab_product']                                = 'Product Settings';
$_['tab_universal']                              = 'Universal Settings';
$_['tab_other']                                  = 'General Settings';

// Text
$_['text_extension']                             = 'Extensions';
$_['text_module']                                = 'Modules';
$_['text_edit']                                  = 'Editing';
$_['text_install']                               = 'Installing module...';
$_['text_uninstall']                             = 'Uninstalling module...';
$_['text_uninstall_files']                       = 'Removing module files...';
$_['text_uninstall_files_log']                   = 'Report on deleting module files';
$_['text_ocmod_clear']                           = 'Clearing modification...';
$_['text_ocmod_clearlog']                        = 'Clearing modification log...';
$_['text_ocmod_refresh']                         = 'Updating modification...';
$_['text_cache_clear']                           = 'Clearing the cache...';
$_['text_width']                                 = 'Width';
$_['text_height']                                = 'Height';
$_['text_after']                                 = 'After';
$_['text_before']                                = 'Before';
$_['text_replace']                               = 'Replace';
$_['text_left']                                  = 'Left';
$_['text_right']                                 = 'Right';
$_['text_top']                                   = 'Top';
$_['text_bottom']                                = 'Bottom';
$_['text_left_top']                              = 'Left and top';
$_['text_right_top']                             = 'Right and top';
$_['text_left_bottom']                           = 'Left and bottom';
$_['text_right_bottom']                          = 'Right and bottom';
$_['text_example']                               = '<b>Example:</b> %s';
$_['text_view']                                  = '<b>The template is located along the path:</b> catalog/view/theme/%s/template/';
$_['text_author']                                = '';
$_['text_corp']                                  = '© 2016-' . date('d.m.Y') . '; <a href="https://buslikdrev.by/" title="BuslikDrev" rel="noreferrer noopener" target="_blank">BuslikDrev</a> - All rights reserved.';

// Entry
$_['entry_index']                                = 'Skip repeated';
$_['entry_position']                             = 'Position';
$_['entry_href_status']                          = 'Status button';
$_['entry_href_search']                          = 'Bind a button to code';
$_['entry_href_add']                             = 'Code button';
$_['entry_href_admin']                           = 'Link to admin panel';
$_['entry_status']                               = 'Status';

// Help
$_['help_index']                                 = 'By default, 0 means not to skip, but select the first php or html code found.';
$_['help_blog_category_href_status']             = 'If yes, then the quick edit button will be enabled on the blog category page.';
$_['help_blog_article_href_status']              = 'If yes, then the quick edit button will be enabled on the blog article page.';
$_['help_category_href_status']                  = 'If yes, then the quick edit button will be enabled on the category product page.';
$_['help_information_href_status']               = 'If yes, then the quick edit button will be enabled on the information page.';
$_['help_manufacturer_href_status']              = 'If yes, then the quick edit button will be enabled on the manufacturer page.';
$_['help_product_href_status']                   = 'If yes, then the quick edit button will be enabled on the product page.';
$_['help_href_search']                           = 'Bind a button to code. Incorrectly written code can display an error! If you are not sure what to do, leave the field empty.';
$_['help_href_add']                              = 'Button code. Incorrectly written code can display an error! If you are not sure what to do, leave the field empty.';
$_['help_href_admin']                            = 'Indicate the internal or external link of the admin panel for the button for quick editing of goods, if you changed the name of the folder on the server, for example: \'adminka/\' or \'https://site.by/adminka/\'. By default: \'admin/\'.';

//Button
$_['button_files_clear']                         = 'Delete also module files? - if not, just refresh the page from sin. See the file deletion report in the modifier logs.';
$_['button_add']                                 = 'Add';
$_['button_delete']                              = 'Delete';
$_['button_clear']                               = 'Clear cache';
$_['button_save']                                = 'Save';
$_['button_apply']                               = 'Apply';
$_['button_apply_piecemeal']                     = 'Apply in parts';
$_['button_export']                              = 'Export';
$_['button_import']                              = 'Import';
$_['button_start']                               = 'Start download';
$_['button_continue']                            = 'Continue loading from where it stopped';
$_['button_pause']                               = 'Pause download';
$_['button_restart']                             = 'Restart download - start over';
$_['button_search']                              = 'Search';
$_['button_edit']                                = 'Edit';

// Error
$_['error_permission']                           = 'You do not have permission to make changes!';
$_['error_warning']                              = 'Carefully check the form for errors!';
$_['error_install']                              = 'Something went wrong!';
$_['error_uninstall']                            = 'Something went wrong!';
$_['error_name']                                 = 'The name must contain from 3 to 64 characters!';
$_['error_width']                                = 'Specify the Width!';
$_['error_height']                               = 'Specify Height!';
$_['error_max_input_vars']                       = '<b>Warning! The %s parameter limit will be exceeded</b>, if exceeded, the data may not be saved. Increase the value on the server or contact the hoster with this request to increase the limit. Or use the apply parts button.<br>Server limit: %s <br>Module limit: %s - cutoff %s to avoid data loss<br>Current value: ';
$_['error_setting_import']                       = 'The file does not contain the module settings, import is denied!';
$_['error_setting_import_format']                = 'The module does not know about this format, import is denied! - the module sent you softly.';
$_['error_not_required']                         = 'Not required!';

// Success
$_['success_install']                            = ' - successfully installed!';
$_['success_uninstall']                          = ' - successfully uninstalled!';
$_['success_uninstall_data_base']                = '◄ DataBase uninstalled ►: ';
$_['success_uninstall_modification']             = '◄ Modification uninstalled ►: ';
$_['success_uninstall_folder']                   = '◄ Folder uninstalled because there are no files ►: ';
$_['success_uninstall_file']                     = '◄ File uninstalled ►: ';
$_['success_update']                             = ' - successfully updated!';
$_['success_setting']                            = 'Settings changed successfully!';
$_['success_setting_apply']                      = 'Settings changed apply!';
$_['success_setting_save']                       = 'Settings changed save!';
$_['success_setting_new']                        = 'New module added successfully!';
$_['success_setting_redirect']                   = 'You have been redirected to the desired settings page!';
$_['success_setting_import']                     = 'Module settings "%s" were successfully imported into the module, you just have to apply them!';
$_['success_add']                                = 'Successfully added!';
$_['success_delete']                             = 'Successfully deleted!';
$_['success_clear']                              = 'Successfully cleared!';