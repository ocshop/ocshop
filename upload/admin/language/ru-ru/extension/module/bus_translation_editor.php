<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2024; BuslikDrev - Усе правы захаваны.

// Heading
$_['heading_title']                              = '<b>Редактор перевода <span style="color:limegreen">Full</span></b> v' . (isset($this->data['bus_translation_editor_version']) ? $this->data['bus_translation_editor_version'] : '1.0');
$_['heading_description']                        = '';

// Tab
$_['tab_setting']                                = 'Настройки';
$_['tab_admin']                                  = 'Admin';
$_['tab_catalog']                                = 'Catalog';
$_['tab_support']                                = 'Техническая поддержка';

// Column
$_['column_name']                                = 'Название переменной';
$_['column_value']                               = 'Значение';
$_['column_action']                              = 'Действие';

// Text
$_['text_extension']                             = 'Расширения';
$_['text_module']                                = 'Модули';
$_['text_edit']                                  = 'Редактирование';
$_['text_min']                                   = 'От';
$_['text_max']                                   = 'До';
$_['text_yes']                                   = 'Да';
$_['text_no']                                    = 'Нет';
$_['text_enabled']                               = 'Включено';
$_['text_disabled']                              = 'Отключено';
$_['text_all']                                   = ' --- Все --- ';
$_['text_none']                                  = ' --- Не выбрано --- ';
$_['text_select']                                = ' --- Выберите --- ';
$_['text_select_all']                            = 'Выделить всё';
$_['text_unselect_all']                          = 'Снять выделение';
$_['text_width']                                 = 'Ширина';
$_['text_height']                                = 'Высота';
$_['text_install']                               = 'Установка модуля...';
$_['text_uninstall']                             = 'Удаление модуля...';
$_['text_uninstall_files']                       = 'Удаление файлов модуля...';
$_['text_uninstall_files_log']                   = 'Отчёт об удалении файлов модуля';
$_['text_ocmod_clear']                           = 'Чистка модификаторов...';
$_['text_ocmod_clearlog']                        = 'Чистка лога модификаторов...';
$_['text_ocmod_refresh']                         = 'Обновление модификаторов...';
$_['text_cache_clear']                           = 'Чистка кэша...';
$_['text_processing']                            = 'Обработка';
$_['text_loading']                               = 'Загрузка';
$_['text_start']                                 = 'Старт';
$_['text_continue']                              = 'Продолжить';
$_['text_pause']                                 = 'Пауза';
$_['text_restart']                               = 'Рестарт';
$_['text_link']                                  = 'Ссылка';
$_['text_default']                               = 'По умолчанию';
$_['text_guest']                                 = 'Гость';
$_['text_dir_1']                                 = 'Справа на лево';
$_['text_dir_2']                                 = 'Слева на право';
$_['text_info']                                  = 'Бесплатная версия для OpenCart.Pro, ocStore и MaxyStore';
$_['text_search']                                = 'Поиск';
$_['text_search_time_php']                       = 'Затрачено времени PHP: %s секунд';
$_['text_search_time_js']                        = 'Затрачено времени JavaScript: %s секунд';
$_['text_total']                                 = 'Всего файлов обработано:';
$_['text_count']                                 = 'Количество файлов содержащие искомые строки:';
$_['text_count_result']                          = 'Количество найденых перемен:';
$_['text_path']                                  = 'Путь';
$_['text_no_results']                            = 'Нет данных';
$_['text_confirm']                               = 'Вы уверены?';
$_['text_back']                                  = 'Назад';
$_['text_author']                                = 'Автор: <a href="https://buslikdrev.by/" title="Товары ремесленного производства" rel="noreferrer noopener" target="_blank">БусликДрев</a>. Тех. поддержка: <a href="https://liveopencart.ru/buslikdrev" title="Техническая помощь по решению проблем связанные с модулем" rel="noreferrer noopener" target="_blank">ТУТ</a>. Тема поддержки: <a href="https://forum.opencart.pro/topic/7936-редактор-перевода-translation-editor/" title="Техническая помощь по решению проблем связанные с модулем" rel="noreferrer noopener" target="_blank">ТУТ</a>.';
$_['text_corp']                                  = '2016-' . date('d.m.Y') . '; <a href="https://buslikdrev.by/" title="BuslikDrev" rel="noreferrer noopener" target="_blank">BuslikDrev</a> - Все права сохранены.';

// Entry
$_['entry_store']                                = 'Магазин';
$_['entry_language_files']                       = 'Языковые файлы';
$_['entry_editor']                               = 'Редактор';
$_['entry_status']                               = 'Статус';

// Help
$_['help_store']                                 = 'Магазин';
$_['help_language_files']                        = 'Отображаются языковые файлы всех языков. При заполнении перевода, если файл не существует, то он будет автоматический создан.';
$_['help_search']                                = 'Ищет в языковых файлах по переменным и значениям.';
$_['help_editor']                                = 'Редактор';
$_['help_value']                                 = 'Соблюдайте целостность кавычек и экранируйте их, если нужно вывести в переводе.';
$_['help_status']                                = 'Если отключено, то весь функционал ниже будет отключён.';

//Button
$_['button_files_clear']                         = 'Удалить также файлы модуля? - если нет, просто обновите страницу от греха. Отчёт об удалении файлов смотрите в логах модификаторов.';
$_['button_add']                                 = 'Добавить';
$_['button_delete']                              = 'Удалить';
$_['button_clear']                               = 'Очистить';
$_['button_save']                                = 'Сохранить';
$_['button_apply']                               = 'Применить';
$_['button_apply_piecemeal']                     = 'Применить частями';
$_['button_export']                              = 'Экспорт';
$_['button_import']                              = 'Импорт';
$_['button_start']                               = 'Запуск загрузки';
$_['button_continue']                            = 'Продолжение загрузки с места остановки';
$_['button_pause']                               = 'Приостановка загрузки';
$_['button_restart']                             = 'Перезапуск загрузки - начать сначала';
$_['button_search']                              = 'Найти';
$_['button_edit']                                = 'Редактировать';
$_['button_restore']                             = 'Восстановить';

// Error
$_['error_permission']                           = 'У вас недостаточно прав для внесения изменений!';
$_['error_warning']                              = 'Внимательно проверьте форму на ошибки!';
$_['error_install']                              = 'Нешта пайшло не так!';
$_['error_uninstall']                            = 'Нешта пайшло не так!';
$_['error_name']                                 = 'Название должно содержать до 255 символов!';
$_['error_width']                                = 'Укажите Ширину!';
$_['error_height']                               = 'Укажите Высоту!';
$_['error_max_input_vars']                       = '<b>Внимание! Будет превышен лимит параметра %s</b>, если превысить, данные могут не сохраниться. Увеличьте значение на сервере или обратитесь с данной просьбой к хостеру для увеличения лимита. Или воспользуйтесь кнопкой применения частями.<br>Лимит на сервере: %s <br>Лимит от модуля: %s - отсечка %s во избежание потери данных<br>Текущее значение: ';
$_['error_setting_import']                       = 'Файл не содержит настройки модуля, импорту отказано!';
$_['error_setting_import_format']                = 'Модуль не знает о таком формате, импорту отказано! - модуль мягко вас послал.';
$_['error_not_required']                         = 'Не требуется!';

// Success
$_['success_install']                            = ' - успешно установлен!';
$_['success_uninstall']                          = ' - успешно удалён!';
$_['success_uninstall_data_base']                = '◄ База данных удалена ►: ';
$_['success_uninstall_modification']             = '◄ Модификатор удалён ►: ';
$_['success_uninstall_folder']                   = '◄ Папка удалена т.к. файлов нет ►: ';
$_['success_uninstall_file']                     = '◄ Файл удалён ►: ';
$_['success_update']                             = ' - успешно обновлён!';
$_['success_setting']                            = 'Настройки успешно изменены!';
$_['success_setting_apply']                      = 'Настройки успешно применены!';
$_['success_setting_save']                       = 'Настройки успешно сохранены!';
$_['success_setting_new']                        = 'Новый модуль успешно добавлен!';
$_['success_setting_redirect']                   = 'Вы были перенаправлены на нужную страницу настроек!';
$_['success_setting_import']                     = 'Настройки модуля "%s" успешно импортированы в модуль, вам осталось их применить!';
$_['success_add']                                = 'Успешно добавлено!';
$_['success_delete']                             = 'Успешно удалено!';