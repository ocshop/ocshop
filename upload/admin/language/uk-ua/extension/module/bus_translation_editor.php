<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2021; BuslikDrev - Усе правы захаваныя.
// *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ )

// Heading
$_['heading_title']                              = '<b>Редактор перекладу <span style="color:limegreen">Full</span></b> v' . (isset($this->data['bus_translation_editor_version']) ? $this->data['bus_translation_editor_version'] : '1.0');
$_['heading_description']                        = '';

// Tab
$_['tab_setting']                                = 'Настройки';
$_['tab_admin']                                  = 'Admin';
$_['tab_catalog']                                = 'Catalog';
$_['tab_support']                                = 'Техническая поддержка';

// Column
$_['column_name']                                = 'Назва змінної';
$_['column_value']                               = 'Значення';
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
$_['text_processing']                            = 'Обробка';
$_['text_loading']                               = 'Завантаження';
$_['text_start']                                 = 'Старт';
$_['text_continue']                              = 'Продовжити';
$_['text_pause']                                 = 'Пауза';
$_['text_restart']                               = 'Рестарт';
$_['text_link']                                  = 'Посилання';
$_['text_default']                               = 'За замовчуванням';
$_['text_guest']                                 = 'Гість';
$_['text_dir_1']                                 = 'Справа на ліво';
$_['text_dir_2']                                 = 'Зліва на право';
$_['text_info']                                  = 'Безкоштовна версія для OpenCart.Pro, ocStore і MaxyStore';
$_['text_search']                                = 'Пошук';
$_['text_search_time_php']                       = 'Затрачено времени PHP: %s секунд';
$_['text_search_time_js']                        = 'Затрачено времени JavaScript: %s секунд';
$_['text_total']                                 = 'Всего файлов обработано:';
$_['text_count']                                 = 'Количество файлов содержащие искомые строки:';
$_['text_count_result']                          = 'Количество найденых перемен:';
$_['text_path']                                  = 'Шлях';
$_['text_no_results']                            = 'Немає даних';
$_['text_confirm']                               = 'Ви впевнені?';
$_['text_back']                                  = 'Назад';
$_['text_author']                                = 'Автор: <a href="https://buslikdrev.by/" title="Ремесленние ізделія" rel="noreferrer noopener" target="_blank">БуслікДрев</a>. Тех. підтримка: <a href="https://liveopencart.ru/buslikdrev" title="Технічна допомога по вирішенню проблем, повязаних з модулем" rel="noreferrer noopener" target="_blank">ТУТ</a>. Тема підтримки: <a href="https://forum.opencart.pro/topic/7366-приложение-для-сайта-app-for-website/" title="Технічна допомога по вирішенню проблем, повязаних з модулем" rel="noreferrer noopener" target="_blank">ТУТ</a>.';
$_['text_corp']                                  = '2016-' . date('d.m.Y') . '; <a href="https://buslikdrev.by/" title="BuslikDrev" rel="noreferrer noopener" target="_blank">BuslikDrev</a> - Всі права збережені.';

// Entry
$_['entry_store']                                = 'Магазин';
$_['entry_language_files']                       = 'Мовні файли';
$_['entry_editor']                               = 'Редактор';
$_['entry_status']                               = 'Статус';

// Help
$_['help_store']                                 = 'Магазин';
$_['help_language_files']                        = 'Буде відображено мовні файли всіх мов. При заповненні перекладу, якщо файл не існує, то він буде автоматичний було створено.';
$_['help_search']                                = 'Шукає в мовних файлах по змінним і значенням.';
$_['help_editor']                                = 'Редактор';
$_['help_value']                                 = 'Одинарні лапки екрануються автоматичний. Тому екранувати їх не потрібно.';
$_['help_status']                                = 'Якщо відключено, то весь функціонал нижче буде відключений.';

//Button
$_['button_files_clear']                         = 'Видалити також файли модуля? - якщо немає, просто оновіть сторінку від гріха. Звіт про видалення файлів дивіться в логах модифікаторів.';
$_['button_add']                                 = 'Додати';
$_['button_delete']                              = 'Видалити';
$_['button_clear']                               = 'Очистити';
$_['button_save']                                = 'Зберегти';
$_['button_apply']                               = 'Застосувати';
$_['button_apply_piecemeal']                     = 'Застосувати частинами';
$_['button_export']                              = 'Експорт';
$_['button_import']                              = 'Імпорт';
$_['button_start']                               = 'Запуск завантаження';
$_['button_continue']                            = 'Продовження завантаження з місця зупинки';
$_['button_pause']                               = 'Призупинення завантаження';
$_['button_restart']                             = 'Перезапуск завантаження - почати спочатку';
$_['button_search']                              = 'Знайти';
$_['button_edit']                                = 'Редагувати';

// Error
$_['error_permission']                           = 'У вас недостаточно прав для внесения изменений!';
$_['error_warning']                              = 'Внимательно проверьте форму на ошибки!';
$_['error_install']                              = 'Нешта пайшло не так!';
$_['error_uninstall']                            = 'Нешта пайшло не так!';
$_['error_name']                                 = 'Название должно содержать от 3 до 64 символов!';
$_['error_width']                                = 'Укажите Ширину!';
$_['error_height']                               = 'Укажите Высоту!';
$_['error_max_input_vars']                       = '<b>Увага! Буде перевищений ліміт параметра %s</b>, якщо перевищити, дані можуть не зберегтися. Збільште значення на сервері або зверніться з цим проханням до хостера для збільшення ліміту. Або скористайтеся кнопкою застосування частинами.<br>Ліміт на сервері: %s<br>Ліміт від модуля:%s - відсічення %s, щоб уникнути втрати даних<br>Поточне значення: ';
$_['error_setting_import']                       = 'Файл не містить настройки модуля, імпорту відмовлено!';
$_['error_setting_import_format']                = 'Модуль не знає про такий формат, імпорту відмовлено! - модуль м\'яко вас послав.';
$_['error_not_required']                         = 'Не вимагається!';

// Success
$_['success_install']                            = ' - успешно установлен!';
$_['success_uninstall']                          = ' - успешно удалён!';
$_['success_uninstall_data_base']                = '◄ База данных удалена ►: ';
$_['success_uninstall_modification']             = '◄ Модификатор удалён ►: ';
$_['success_uninstall_folder']                   = '◄ Папка удалена т.к. файлов нет ►: ';
$_['success_uninstall_file']                     = '◄ Файл удалён ►: ';
$_['success_update']                             = ' - успешно обновлён!';
$_['success_setting']                            = 'Налаштування успішно змінено!';
$_['success_setting_apply']                      = 'Настройки успешно применены!';
$_['success_setting_save']                       = 'Настройки успешно сохранены!';
$_['success_setting_new']                        = 'Новый модуль успешно добавлен!';
$_['success_setting_redirect']                   = 'Вы были перенаправлены на нужную страницу настроек!';
$_['success_setting_import']                     = 'Налаштування модуля "%s" успішно імпортовані в модуль, вам залишилося їх застосувати!';
$_['success_add']                                = 'Успішно додано!';
$_['success_delete']                             = 'Успішно видалено!';