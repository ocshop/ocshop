<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2024; BuslikDrev - Усе правы захаваны.

// Heading
$_['heading_title']                              = '<b>Translation editor <span style="color:limegreen">Full</span></b> v' . (isset($this->data['bus_translation_editor_version']) ? $this->data['bus_translation_editor_version'] : '1.0');
$_['heading_description']                        = '';

// Tab
$_['tab_setting']                                = 'Settings';
$_['tab_admin']                                  = 'Admin';
$_['tab_catalog']                                = 'Catalog';
$_['tab_support']                                = 'Technical Support';

// Column
$_['column_name']                                = 'Variable name';
$_['column_value']                               = 'Value';
$_['column_action']                              = 'Action';

// Text
$_['text_extension']                             = 'Extensions';
$_['text_module']                                = 'Modules';
$_['text_edit']                                  = 'Editing';
$_['text_min']                                   = 'Min';
$_['text_max']                                   = 'Max';
$_['text_yes']                                   = 'Yes';
$_['text_no']                                    = 'No';
$_['text_enabled']                               = 'Enabled';
$_['text_disabled']                              = 'Disabled';
$_['text_all']                                   = ' --- All --- ';
$_['text_none']                                  = ' --- None --- ';
$_['text_select']                                = ' --- Please Select --- ';
$_['text_select_all']                            = 'Select All';
$_['text_unselect_all']                          = 'Unselect All';
$_['text_width']                                 = 'Width';
$_['text_height']                                = 'Height';
$_['text_install']                               = 'Installing module...';
$_['text_uninstall']                             = 'Uninstalling module...';
$_['text_uninstall_files']                       = 'Removing module files...';
$_['text_uninstall_files_log']                   = 'Report on deleting module files';
$_['text_ocmod_clear']                           = 'Clearing modification...';
$_['text_ocmod_clearlog']                        = 'Clearing modification log...';
$_['text_ocmod_refresh']                         = 'Updating modification...';
$_['text_cache_clear']                           = 'Clearing the cache...';
$_['text_processing']                            = 'Processing';
$_['text_loading']                               = 'Loading';
$_['text_start']                                 = 'Start';
$_['text_continue']                              = 'Continue';
$_['text_pause']                                 = 'Pause';
$_['text_restart']                               = 'Restart';
$_['text_link']                                  = 'Link';
$_['text_default']                               = 'Default';
$_['text_guest']                                 = 'Guest';
$_['text_dir_1']                                 = 'Right to Left';
$_['text_dir_2']                                 = 'Left to Right';
$_['text_info']                                  = 'Free version for OpenCart.Pro, ocStore and MaxyStore';
$_['text_search']                                = 'Search';
$_['text_search_time_php']                       = 'Затрачено времени PHP: %s секунд';
$_['text_search_time_js']                        = 'Затрачено времени JavaScript: %s секунд';
$_['text_total']                                 = 'Всего файлов обработано:';
$_['text_count']                                 = 'Количество файлов содержащие искомые строки:';
$_['text_count_result']                          = 'Количество найденых перемен:';
$_['text_path']                                  = 'Path';
$_['text_no_results']                            = 'No results';
$_['text_confirm']                               = 'Are you sure?';
$_['text_back']                                  = 'Back';
$_['text_author']                                = 'Author: <a href="https://buslikdrev.by/" title="Handicraft products" rel="noreferrer noopener" target="_blank">BuslickDrev</a>. Those. Support: <a href="https://liveopencart.ru/buslikdrev" title="Technical help on solving problems associated with the module "rel="noreferrer noopener" target="_blank">HERE</a>. Theme of support: <a href="https://forum.opencart.pro/topic/7936-редактор-перевода-translation-editor/" title="Technical help on solving the problems associated with the module" rel="noreferrer noopener" target="_blank">HERE</a>.';
$_['text_corp']                                  = '2016-' . date('d.m.Y') . '; <a href="https://buslikdrev.by/" title="BuslikDrev" rel="noreferrer noopener" target="_blank">BuslikDrev</a> - All rights reserved.';

// Entry
$_['entry_store']                                = 'Store';
$_['entry_language_files']                       = 'Language_files';
$_['entry_editor']                               = 'Editor';
$_['entry_status']                               = 'Status';

// Help
$_['help_store']                                 = 'Store';
$_['help_language_files']                        = 'The language files of all languages are displayed. When filling in the translation, if the file does not exist, it will be automatically created.';
$_['help_search']                                = 'Searches language files by variables and values.';
$_['help_editor']                                = 'Editor';
$_['help_value']                                 = 'Observe the integrity of the quotes and escape them if you need to output in translation.';
$_['help_status']                                = 'If disabled, then all functionality below will be disabled.';

//Button
$_['button_files_clear']                         = 'Delete also module files? - if not, just refresh the page from sin. See the file deletion report in the modifier logs.';
$_['button_add']                                 = 'Add';
$_['button_delete']                              = 'Delete';
$_['button_clear']                               = 'Clear';
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
$_['button_restore']                             = 'Restore';

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