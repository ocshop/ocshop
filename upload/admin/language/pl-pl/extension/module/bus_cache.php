<?php
// *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
// *   © 2016-2024; BuslikDrev - Усе правы захаваны.

eval(base64_decode('aWYgKCFpc3NldCgkdGhpcy0+ZGF0YVsnYnVzX2NhY2hlX3ZlcnNpb24nXSkpIHsNCgkkdGhpcy0+ZGF0YVsnYnVzX2NhY2hlX3ZlcnNpb24nXSA9ICcxLjAnOw0KCWlmICh2ZXJzaW9uX2NvbXBhcmUoVkVSU0lPTiwgJzQuMC4wJywgJz49JykpIHsNCgkJJGZpbGUgPSBESVJfRVhURU5TSU9OIC4gJ2J1c19jYWNoZS9hZG1pbi9jb250cm9sbGVyL21vZHVsZS9idXNfY2FjaGUucGhwJzsNCgl9IGVsc2VpZiAodmVyc2lvbl9jb21wYXJlKFZFUlNJT04sICcyLjMuMCcsICc+PScpKSB7DQoJCSRmaWxlID0gRElSX0FQUExJQ0FUSU9OIC4gJ2NvbnRyb2xsZXIvZXh0ZW5zaW9uL21vZHVsZS9idXNfY2FjaGUucGhwJzsNCgl9IGVsc2Ugew0KCQkkZmlsZSA9IERJUl9BUFBMSUNBVElPTiAuICdjb250cm9sbGVyL21vZHVsZS9idXNfY2FjaGUucGhwJzsNCgl9DQoJaWYgKGlzX2ZpbGUoJGZpbGUpKSB7DQoJCWluY2x1ZGVfb25jZSgkZmlsZSk7DQoJCSR0aGlzLT5kYXRhWydidXNfY2FjaGVfdmVyc2lvbiddID0gKGNsYXNzX2V4aXN0cygnQnVzQ2FjaGUnKSA/IChuZXcgQnVzQ2FjaGUobmV3IFJlZ2lzdHJ5KCkpKS0+dmVyc2lvbiA6ICR0aGlzLT5kYXRhWydidXNfY2FjaGVfdmVyc2lvbiddKTsNCgl9DQp9'));

// Heading
$_['heading_title'] = '<b>Pamięć podręczna Buslik <span style="color:limegreen">Pełna</span></b> v' . $this->data['bus_cache_version'];
$_['heading_description'] = '';

// Tab
$_['tab_setting'] = 'Ustawienia';
$_['tab_cache'] = 'Buforowanie';
$_['tab_pagespeed'] = 'PageSpeed';
$_['tab_image'] = 'Obrazy';
$_['tab_html'] = 'Znacznik szablonu - HTML';
$_['tab_css'] = 'Style - CSS';
$_['tab_js'] = 'Skrypty - JS';
$_['tab_database'] = 'Optymalizacja bazy danych';
$_['tab_export'] = 'Eksportuj';
$_['tab_import'] = 'Importuj';
$_['tab_cron'] = 'Cron';
$_['tab_documentation'] = 'Dokumentacja';
$_['tab_support'] = 'Pomoc techniczna';

// Text
$_['text_extension'] = 'Rozszerzenia';
$_['text_module'] = 'Moduły';
$_['text_edit'] = 'Edycja';
$_['text_min'] = 'Od';
$_['text_max'] = 'Przed';
$_['text_yes'] = 'Tak';
$_['text_no'] = 'Nie';
$_['text_enabled'] = 'Włączone';
$_['text_disabled'] = 'Wyłączone';
$_['text_all'] = ' --- Wszystko --- ';
$_['text_none'] = ' --- Nie wybrano --- ';
$_['text_select'] = ' --- Wybierz --- ';
$_['text_select_all'] = 'Zaznacz wszystko';
$_['text_unselect_all'] = 'Odznacz wszystko';
$_['text_width'] = 'Szerokość';
$_['text_height'] = 'Wysokość';
$_['text_install'] = 'Instalowanie modułu...';
$_['text_uninstall'] = 'Odinstalowywanie modułu...';
$_['text_uninstall_files'] = 'Odinstalowywanie plików modułu...';
$_['text_uninstall_files_log'] = 'Zaloguj się podczas odinstalowywania plików modułu';
$_['text_ocmod_clear'] = 'Usuwanie modyfikatorów...';
$_['text_ocmod_clearlog'] = 'Czyszczenie dziennika modyfikatorów...';
$_['text_ocmod_refresh'] = 'Odświeżanie modyfikatorów...';
$_['text_cache_clear'] = 'Czyszczenie pamięci podręcznej...';
$_['text_processing'] = 'Przetwarzanie';
$_['text_loading'] = 'Ładowanie';
$_['text_start'] = 'Start';
$_['text_continue'] = 'Kontynuuj';
$_['text_pause'] = 'Wstrzymaj';
$_['text_restart'] = 'Uruchom ponownie';
$_['text_link'] = 'Link';
$_['text_default'] = 'Domyślnie';
$_['text_guest'] = 'Gość';
$_['text_dir_1'] = 'Od prawej do lewej';
$_['text_dir_2'] = 'Od lewej do prawej';
$_['text_path'] = 'Ścieżka';
$_['text_no_results'] = 'Brak danych';
$_['text_confirm'] = 'Czy jesteś pewien?';
$_['text_version'] = 'Wersja';
$_['text_cache_status_2'] = 'Tak, jeśli kontrolery i modele nie są buforowane';
$_['text_cache_clear_blog_category'] = 'Podczas edycji kategorii blogów';
$_['text_cache_clear_blog_article'] = 'Podczas edycji artykułów na blogu';
$_['text_cache_clear_category'] = 'Podczas edycji kategorii';
$_['text_cache_clear_information'] = 'Podczas edycji stron informacyjnych';
$_['text_cache_clear_manufacturer'] = 'Podczas edycji producentów';
$_['text_cache_clear_product'] = 'Podczas edycji produktu';
$_['text_cache_clear_time'] = 'Po upływie ustawionego czasu (niezalecane, ale jeśli nie masz nic przeciwko wydawaniu pieniędzy na pamięć, możesz)';
$_['text_pagespeed_image_webp_convert_1'] = 'Generuj przez GD';
$_['text_pagespeed_image_webp_convert_2'] = 'Generuj za pomocą ImageMagick';
$_['text_pagespeed_min_1'] = 'Połącz pliki';
$_['text_pagespeed_min_2'] = 'Usuń komentarze';
$_['text_pagespeed_min_3'] = 'Usuń spacje';
$_['text_pagespeed_min_4'] = 'Usuń zawijanie linii';
$_['text_pagespeed_min_5'] = 'Usuń <!-- //--> ze skryptów wbudowanych';
$_['text_pagespeed_transfer_1'] = 'W górę';
$_['text_pagespeed_transfer_2'] = 'W dół';
$_['text_pagespeed_transfer_3'] = 'Powyższy link do pliku kompresji';
$_['text_pagespeed_transfer_4'] = 'Poniższy link do pliku skompresowanego';
$_['text_export_import_format_sql'] = 'SQL';
$_['text_export_import_format_json'] = 'JSON';
$_['text_export_import_format_csv'] = 'CSV';
$_['text_export_import_format_xls'] = 'XLS';
$_['text_export_import_format_xlsx'] = 'XLSX';
$_['text_export_import_format_xml'] = 'XML';
$_['text_export_import_format_yml'] = 'YML';
$_['text_export_import_copy_1'] = 'Jet Cache v23+';
$_['text_export_import_copy_2'] = 'Optymalizator XYz v1.4+';
$_['text_export_import_copy_3'] = 'Oświetlenie';
$_['text_export_import_copy_4'] = '';
$_['text_support_stats_loading'] = 'Statystyki ładują się w toku - proszę czekać!';
$_['text_support_stats_success'] = 'Statystyki załadowano pomyślnie!';
$_['text_support_stats_danger'] = 'Błąd podczas ładowania statystyk!';
$_['text_support_cache_total'] = 'Liczba plików pamięci podręcznej:';
$_['text_support_cache_size'] = 'Rozmiar plików pamięci podręcznej:';
$_['text_support_cache_minify_total'] = 'Liczba plików pamięci podręcznej js i css:';
$_['text_support_cache_minify_size'] = 'Rozmiar plików pamięci podręcznej js i css:';
$_['text_support_image_total'] = 'Liczba wszystkich plików graficznych:';
$_['text_support_image_size'] = 'Całkowity rozmiar plików graficznych:';
$_['text_support_image_cache_total'] = 'Liczba kopii obrazu ze zmianą rozmiaru:';
$_['text_support_image_cache_size'] = 'Rozmiar zmiany rozmiaru obrazu:';
$_['text_support_session_total'] = 'Liczba plików sesji:';
$_['text_support_session_size'] = 'Rozmiar plików sesji:';
$_['text_support_session_db_total'] = 'Liczba wpisów sesji w bazie danych:';
$_['text_support_session_db_size'] = 'Rozmiar wpisów sesji w bazie danych:';
$_['text_support_session_cart_total'] = 'Liczba rekordów sesji koszyka gościa w DB:';
$_['text_support_session_cart_size'] = 'Rozmiar rekordów sesji koszyka gościa w DB:';
$_['text_support_disc_total'] = 'Całkowita ilość miejsca na dysku:';
$_['text_support_disc_free'] = 'Wolne miejsce na dysku:';
$_['text_support_debug_2'] = 'Tak i zregeneruj pamięć podręczną css, js';
$_['text_support_debug_3'] = 'Tak i pokaż kontrolery prędkości';
$_['text_support_debug_4'] = 'Tak i pokaż prędkość modelu';
$_['text_support_debug_5'] = 'Tak i pokaż data-busloadinglazy-id';
$_['text_support_debug_6'] = 'Tak i pokaż bus_ajax_id';
$_['text_author'] = 'Autor: <a href="https://buslikdrev.by/" title="Rękodzieło" rel="noreferrer noopener" target="_blank">BuslikDrev</a>. Te. wsparcie: <a href="https://liveopencart.ru/buslikdrev" title="Pomoc techniczna w rozwiązywaniu problemów związanych z modułem" rel="noreferrer noopener" target="_blank">TUTAJ</a>.';
$_['text_corp'] = '© 2016-' . date('d.m.Y') . '; <a href="https://buslikdrev.by/" title="BuslikDrev" rel="noreferrer noopener" target="_blank">BuslikDrev</a> - Wszelkie prawa zastrzeżone.';

// Entry
$_['entry_status'] = 'Stan';
$_['entry_store'] = 'Sklep';
$_['entry_cache_status'] = 'Włącz buforowanie strony';
$_['entry_cache_con'] = 'opcje konfiguracyjne';
$_['entry_cache_ses'] = 'opcje sesji';
$_['entry_cache_cok'] = 'Opcje plików cookie';
$_['entry_cache_par'] = 'Parametry ograniczeń';
$_['entry_cache_onrot'] = 'Parametry operacji';
$_['entry_cache_rot'] = 'Opcje wykluczenia';
$_['entry_cache_customer'] = 'Pamięć podręczna dla autoryzowanych użytkowników?';
$_['entry_cache_cart'] = 'Koszyk w pamięci podręcznej';
$_['entry_cache_cart_count'] = 'Zapisuj w pamięci podręcznej, gdy w koszyku znajduje się przedmiot';
$_['entry_cache_controller'] = 'Funkcje kontrolera buforowania';
$_['entry_cache_controller_ajax'] = 'Funkcje kontrolera ładowania Ajax';
$_['entry_cache_model'] = 'Buforowanie funkcji modelu';
$_['entry_cache_engine'] = 'Silnik pamięci podręcznej';
$_['entry_cache_engine_mine'] = 'Własny silnik pamięci podręcznej';
$_['entry_cache_oc'] = 'Kontroluj pamięć podręczną OpenCart';
$_['entry_cache_expire'] = 'Wygaśnięcie pamięci podręcznej OpenCart';
$_['entry_cache_expire_controller'] = 'Wygaśnięcie pamięci podręcznej kontrolera';
$_['entry_cache_expire_model'] = 'Wygaśnięcie pamięci podręcznej modelu';
$_['entry_cache_expire_all'] = 'Wygaśnięcie pamięci podręcznej strony';
$_['entry_cache_size_limit'] = 'Rozmiar pamięci podręcznej';
$_['entry_cache_count'] = 'Liczba dostępnej pamięci podręcznej';
$_['entry_cache_clear'] = 'Automatyczne czyszczenie pamięci podręcznej';
$_['entry_pagespeed_status'] = 'Włącz optymalizację (PageSpeed)';
$_['entry_pagespeed_onrot'] = 'Opcje operacji';
$_['entry_pagespeed_rot'] = 'Opcje wykluczenia';
$_['entry_pagespeed_image_lazy_load'] = 'Włącz leniwe ładowanie obrazów';
$_['entry_pagespeed_image_first_boot_status'] = 'Włącz obrazy pierwszego rozruchu';
$_['entry_pagespeed_image_first_boot_onrot'] = 'Ustawienia pierwszego rozruchu';
$_['entry_pagespeed_image_first_boot_rot'] = 'Opcje wykluczenia pierwszego rozruchu';
$_['entry_pagespeed_image_w_h'] = 'Włącz atrybuty szerokości i wysokości';
$_['entry_pagespeed_image_webp_status'] = 'Włącz obsługę obrazów WebP';
$_['entry_pagespeed_image_webp_convert'] = 'Konwertuj obrazy do i z WebP';
$_['entry_pagespeed_image_webp_quality'] = 'Kompresja obrazu WebP';
$_['entry_pagespeed_html_lazy_load'] = 'Włącz leniwe ładowanie HTML';
$_['entry_pagespeed_html_replace_before'] = 'Zamień w HTML przed kompresją';
$_['entry_pagespeed_html_replace_after'] = 'Zamień w kodzie HTML po kompresji';
$_['entry_pagespeed_html_min'] = 'Kompresuj kod HTML';
$_['entry_pagespeed_html_min_tags'] = 'Usuń dopełnienie po lewej stronie tagów';
$_['entry_pagespeed_css_replace_before'] = 'Css przed kompresją';
$_['entry_pagespeed_css_replace_after'] = 'Zastąpienie CSS po kompresji';
$_['entry_pagespeed_css_min'] = 'Kompresuj kod CSS';
$_['entry_pagespeed_css_min_links'] = 'Linki do plików CSS';
$_['entry_pagespeed_css_min_download'] = 'Linki do pobrania CSS';
$_['entry_pagespeed_css_min_exception'] = 'Wyjątek kompresji CSS';
$_['entry_pagespeed_css_min_font'] = 'Wstępnie załaduj czcionki lub obrazy';
$_['entry_pagespeed_css_min_convert'] = 'Konwersja kodu do pliku';
$_['entry_pagespeed_css_min_display'] = 'Wyświetlanie czcionek';
$_['entry_pagespeed_css_inline_transfer'] = 'Przenieś wbudowany kod CSS';
$_['entry_pagespeed_css_inline_exception'] = 'Wyjątek zawijania wbudowanego CSS';
$_['entry_pagespeed_css_events'] = 'Zdarzenia uruchamiające kod CSS';
$_['entry_pagespeed_css_critical'] = 'Włącz gromadzenie krytycznych stylów';
$_['entry_pagespeed_css_critical_all'] = 'Zbierz style dla wszystkich elementów';
$_['entry_pagespeed_css_critical_offset'] = 'Odcięcie zbioru od wysokości ekranu';
$_['entry_pagespeed_css_critical_time'] = 'Opóźnienie czasowe';
$_['entry_pagespeed_css_critical_elements'] = 'Elementy stylu';
$_['entry_pagespeed_css_critical_links'] = 'Linki do stron z kolekcjami krytycznych stylów';
$_['entry_pagespeed_css_style'] = 'Styl';
$_['entry_pagespeed_js_replace_before'] = 'Zastąpienie w kodzie js przed kompresją';
$_['entry_pagespeed_js_replace_after'] = 'Zastąpienie w kodzie js po kompresji';
$_['entry_pagespeed_js_min'] = 'Kompresuj kod js';
$_['entry_pagespeed_js_min_links'] = 'Linki do plików js';
$_['entry_pagespeed_js_min_download'] = 'Linki do plików js do pobrania';
$_['entry_pagespeed_js_min_exception'] = 'Wyjątek kompresji Js';
$_['entry_pagespeed_js_inline_event'] = 'Opóźnij ładowanie wbudowanego kodu js';
$_['entry_pagespeed_js_inline_event_time'] = 'Czas automatycznego uruchomienia wbudowanego kodu js';
$_['entry_pagespeed_js_inline_transfer'] = 'Przenieś wbudowany kod js';
$_['entry_pagespeed_js_inline_transfer_onrot'] = 'Przenieś wbudowany kod js';
$_['entry_pagespeed_js_inline_exception'] = 'Wyjątek transferu kodu Inline js';
$_['entry_pagespeed_js_events'] = 'Zdarzenia związane z uruchomieniem kodu js';
$_['entry_pagespeed_js_script'] = 'Skrypt';
$_['entry_database_status'] = 'Tryb konfiguracji';
$_['entry_database_speed_site'] = 'Sprawdź szybkość witryny';
$_['entry_database_links'] = 'Linki do sprawdzenia';
$_['entry_database_tables'] = 'Tabele';
$_['entry_database_indexs'] = 'Indeksy';
$_['entry_database_columns'] = 'Kolumny';
$_['entry_database_unique'] = 'Unikalny';
$_['entry_database_unique_elements'] = 'Unikalne elementy';
$_['entry_database_packed'] = 'Spakowane';
$_['entry_database_index'] = 'Indeks';
$_['entry_database_index_name'] = 'Nazwa indeksu';
$_['entry_database_index_key_block_size'] = 'Rozmiar bloku klucza';
$_['entry_database_index_type'] = 'Typ';
$_['entry_database_index_parser'] = 'Parser';
$_['entry_database_index_comment'] = 'Komentarz';
$_['entry_database_column'] = 'Kolumna';
$_['entry_cron_pregeneracja'] = 'Włącz wstępne generowanie pamięci podręcznej';
$_['entry_cron_pregeneracja_query_count'] = 'Zapytań na sekundę';
$_['entry_documentation_status'] = 'Mam dyplom Buslik';
$_['entry_support_update'] = 'Zainstaluj aktualizacje';
$_['entry_support_update_order_id'] = 'Identyfikator zamówienia';
$_['entry_support_update_key'] = 'Klucz licencyjny';
$_['entry_support_stats_status'] = 'Włącz statystyki';
$_['entry_support_disc_size_limit'] = 'Limit pamięci dysku';
$_['entry_support_disc_warning'] = 'Włącz ostrzeżenie o małej ilości pamięci';
$_['entry_support_session_fix'] = 'Włącz poprawkę zapełniania sesji';
$_['entry_support_debug'] = 'Włącz debugowanie';
$_['entry_support_debug_log'] = 'Włącz powolne rejestrowanie stron';

// Help
$_['help_status'] = 'Jeśli wyłączone, wszystkie poniższe funkcje zostaną wyłączone.';
$_['help_store'] = 'Wybierz sklepy, w których wtyczka będzie działać.';
$_['help_cache_status'] = 'Jeśli tak, całe strony będą buforowane.';
$_['help_cache_con'] = 'Określ $this->config->get opcje dywersyfikacji pamięci podręcznej. Jeśli żądany parametr znajduje się w tablicy, określ każdy parametr tablicy za pomocą \' | \', np. $this->config->get(\'products\')[\'total\'] =&gt; produkty|ogółem. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_cache_ses'] = 'Określ opcje $this->session->data, aby dostosować pamięć podręczną. Wartość jest ustawiana zaczynając od nowej linii. Jeśli żądany parametr znajduje się w tablicy, określ każdy parametr tablicy za pomocą \' | \', np. $this->session->data[\'products\'][\'total\'] =&gt; produkty|ogółem. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_cache_cok'] = 'Określ opcje $this->request->cookie, aby zróżnicować pamięć podręczną. Wartość jest ustawiana zaczynając od nowej linii. Jeśli żądany parametr znajduje się w tablicy, określ każdy parametr tablicy za pomocą \' | \', np. $this->request->cookie[\'products\'][\'total\'] =&gt; produkty|ogółem. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_cache_par'] = 'Określ parametry $this->request->get i $this->request->post, aby ograniczyć pamięć podręczną w ramach tych parametrów (tj. inne parametry zostaną obcięte i zapewnią tym parametrom dozwoloną pamięć podręczną ). Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie musisz ograniczać, pozostaw to pole puste. Jeśli chcesz, aby pamięć podręczna nie działała dla zabronionych parametrów, ustaw \'cache_off\' w pierwszej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_cache_onrot'] = 'Określ trasę lub jej słowo kluczowe (seo_url) strony w celu precyzyjnej pracy (Podstawowe ustawienia nie będą działać podczas wypełniania konfiguracji i sesji), a następnie po \ ' | \' określ czas buforowania w sekundach, a następnie \' | \' określ parametry $this->config->get() poprzez \' , \' jeśli to konieczne, a następnie po \' | \' określ parametry $this->session->data poprzez \' , \' jeśli są potrzebne (jeśli jest to tablica, oddziel parametry \' / \'), a następnie po \' | \' określ parametry $this->request->cookie oddzielone \' , \' jeśli są potrzebne (jeśli jest to tablica, to oddziel parametry \' / \'), a następnie po \' | \' określ parametry $this->request->get i $this->request->post oddzielone \' , \' jeśli to konieczne (jeśli jest to tablica, oddziel parametry \' / \'). Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_cache_rot'] = 'Określ trasę lub jej słowo kluczowe (seo_url) strony, która ma zostać wykluczona z pamięci podręcznej. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_cache_customer'] = 'Pamięć podręczna dla autoryzowanych użytkowników?';
$_['help_cache_cart'] = 'Jeśli tak, koszyk będzie buforowany dla każdego użytkownika przez czas przechowywania pamięci podręcznej kontrolera.';
$_['help_cache_cart_count'] = 'Ustaw maksymalną liczbę pozycji w koszyku, dla których będzie działać buforowanie strony.';
$_['help_cache_controller'] = 'Określ trasę kontrolera, który ma być buforowany (przykład - rozszerzenie/moduł/kategoria), a następnie po \' | \' określ czas buforowania w sekundach, a następnie \' | \' określ parametry $this->config->get() poprzez \' , \' jeśli są potrzebne (jeśli jest to tablica, oddziel parametry za pomocą \' / \'), a następnie po \' | \' określ parametry $this->session->data poprzez \' , \' jeśli są potrzebne (jeśli jest to tablica, oddziel parametry \' / \'), a następnie po \' | \' określ parametry $this->request->cookie oddzielone \' , \' jeśli są potrzebne (jeśli jest to tablica, to oddziel parametry \' / \'), a następnie po \' | \' określ parametry $this->request->get i $this->request->post za pomocą \' , \' jeśli to konieczne. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_cache_controller_ajax'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po znaku \' | \' wskazuje trasę kontrolera, która ma zostać załadowana przez ajax (przykład - rozszerzenie/moduł/kategoria, można ją znaleźć nad modułem na interesującej nas stronie w trybie debugowania), następnie po \' | \' podaj identyfikator_modułu jeśli istnieje (znajdziesz go nad modułem na interesującej Cię stronie w trybie debugowania), następnie po \' | \' wskaż numer pobrania (znajdziesz go nad modułem na interesującej Cię stronie w trybie debugowania), następnie po \' | \' określ szerokość ekranu, powyżej której ma się rozpocząć ładowanie kontrolera, jeśli chcesz ograniczyć, to poprzez \' - \' określ szerokość. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'. bus_ajax_id dla skryptów znajdziesz nad modułem na interesującej Cię stronie w trybie debugowania lub poprzez konsolę przeglądarki.';
$_['help_cache_model'] = 'Określ trasę modelu, który ma być buforowany (przykład - katalog/kategoria/getCategories), a następnie po \' | \' określ czas buforowania w sekundach, a następnie \' | \' określ parametry $this->config->get() poprzez \' , \' jeśli są potrzebne (jeśli jest to tablica, oddziel parametry za pomocą \' / \'), a następnie po \' | \' określ parametry $this->session->data poprzez \' , \' jeśli są potrzebne (jeśli jest to tablica, oddziel parametry \' / \'), a następnie po \' | \' określ parametry $this->request->cookie oddzielone \' , \' jeśli są potrzebne (jeśli jest to tablica, to oddziel parametry \' / \'), a następnie po \' | \' określ parametry $this->request->get i $this->request->post za pomocą \' , \' jeśli to konieczne. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_cache_engine'] = 'Domyślnie Buslik.<br />APC to pamięć podręczna kodów operacji i magazyn danych wykorzystująca pamięć RAM, odpowiednia dla tych, którzy nie mają rozszerzenia php OPCache;<br />APCu to nowa wersja APC jest przeznaczony do przechowywania danych wyłącznie przy użyciu pamięci RAM. Zalecane jest włączenie OpCache na serwerze;<br />Buslik to to samo, co pamięć podręczna plików, ale pozwala na przechowywanie plików pamięci podręcznej podzielonych na foldery w zależności od trasy itp., przyspieszając w ten sposób wyszukiwanie żądanej pamięci podręcznej pliku i pozwalający na przechowywanie większej ich liczby ;<br />Memcache - buforowanie danych w pamięci RAM w oparciu o tablicę mieszającą;<br />Memcached - nowa wersja Memcache do buforowania danych w pamięci RAM w oparciu o tablicę mieszającą;<br />OpCache - to samo co Buslik, ale zapisuje pamięć podręczną jako kod PHP. Wymaga 2 razy więcej miejsca na dysku. Najpierw tworzony jest kod PHP, następnie drugi przebieg jest zapisywany przy użyciu algorytmu rozszerzenia php OpCache;<br />Redis to to samo co Memcached;<br />WinCache to moduł buforujący, który pozwala zwiększyć prędkość PHP aplikacje na Windows i Windows Server. Procedura obsługi zawiera swój algorytm pracy z danymi przy użyciu pamięci RAM i dysku;<br />xCache - zawiera swój algorytm pracy z danymi przy użyciu pamięci RAM i dysku.';
$_['help_cache_engine_mine'] = 'Prześlij swój silnik pamięci podręcznej do folderu system/library/bus_cache/ i wpisz nazwę pliku w tym polu, a pamięć podręczna stron, kontrolerów i modeli będzie przetwarzana przez określony silnik.';
$_['help_cache_oc'] = 'Jeśli tak, pamięć podręczna innych modułów będzie kontrolowana przez ustawienia pamięci podręcznej BusLic.';
$_['help_cache_expire'] = 'Domyślnie jest to 3600 sekund. Czas życia pamięci podręcznej podawany jest w sekundach.';
$_['help_cache_expire_controller'] = 'Domyślnie jest to 3600 sekund. Czas życia pamięci podręcznej podawany jest w sekundach.';
$_['help_cache_expire_model'] = 'Domyślnie jest to 3600 sekund. Czas życia pamięci podręcznej podawany jest w sekundach.';
$_['help_cache_expire_all'] = 'Domyślnie jest to 36000 sekund. Czas życia pamięci podręcznej podawany jest w sekundach.';
$_['help_cache_size_limit'] = 'Domyślnie 0 - bez limitu. Limit rozmiaru tworzenia pamięci podręcznej jest ustawiony w megabajtach. Po osiągnięciu limitu kolejna pamięć podręczna będzie buforowana przez 5 minut, a jeśli skończy się pamięć, nie będzie buforowana.';
$_['help_cache_count'] = 'W przypadku obsługi Buslik i OpCache określ ilość pamięci podręcznej, która ma zostać utworzona podczas buforowania czegoś. Gdy jeden plik pamięci podręcznej zostanie zajęty przez jednego użytkownika, kolejna kopia zostanie przekazana innemu. Jeśli nie ma dostępnych kopii, pamięć podręczna dla tego użytkownika nie będzie działać (uznaje się, że nie ma pamięci podręcznej). Pamiętaj, że wymagane miejsce na dysku będzie tyle razy, ile określisz w tym polu.';
$_['help_pagespeed_status'] = 'Włączenie optymalizacji powinno przyspieszyć zwrot treści, a tym samym sprawić, że Twoja witryna zakocha się w robotach wyszukujących, co oznacza, że ​​pozycje w wynikach wyszukiwania powinny wzrosnąć.';
$_['help_pagespeed_onrot'] = 'Określ trasę lub jej stronę ze słowami kluczowymi (seo_url), aby uzyskać precyzyjną pracę. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_rot'] = 'Określ trasę lub jej słowo kluczowe (seo_url) strony, które chcesz wykluczyć z optymalizacji. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_image_lazy_load'] = 'Wybierz opcję ładowania obrazu i ramkę okna.';
$_['help_pagespeed_image_first_boot_status'] = 'Włączenie tej funkcji przyspieszy ładowanie pierwszej strony, gdy rozmiar obrazów nie został jeszcze zmieniony, łącze do obrazu zostanie zastąpione, a obraz zostanie wygenerowany na osobne żądanie.';
$_['help_pagespeed_image_first_boot_onrot'] = 'Określ trasę lub słowo kluczowe jej strony (seo_url), aby funkcja First Boot działała poprawnie. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_image_first_boot_rot'] = 'Określ trasę lub jej słowo kluczowe (seo_url) strony, która ma zostać wykluczona z optymalizacji pierwszego rozruchu. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_image_w_h'] = 'Włączenie tej funkcji spowoduje dodanie atrybutów szerokości i wysokości do wszystkich obrazów, które mają swoje rozmiary w tytułach, np. image-100x100.jpg';
$_['help_pagespeed_image_webp_status'] = 'Jeśli tak, obsługa obrazów webp zostanie włączona. Wyłącz inne moduły o podobnej funkcjonalności.';
$_['help_pagespeed_image_webp_convert'] = 'Wybierz opcję biblioteki do generowania obrazów webp.';
$_['help_pagespeed_image_webp_quality'] = 'Określ jakość obrazu,<br />100 dla dobrej jakości (bez kompresji),<br />0 dla złej jakości.';
$_['help_pagespeed_html_lazy_load'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ trasę kontrolera, która ma być załadowana poprzez scroll (przykład - rozszerzenie/moduł/kategoria, można ją znaleźć nad modułem na interesującej Cię stronie w trybie debugowania), następnie po \' | \' podaj identyfikator_modułu jeśli istnieje (znajdziesz go nad modułem na interesującej Cię stronie w trybie debugowania), następnie po \' | \' wskaż numer pobrania (znajdziesz go nad modułem na interesującej Cię stronie w trybie debugowania), następnie po \' | \' określ szerokość ekranu, powyżej której ma się rozpocząć ładowanie kontrolera, jeśli chcesz ograniczyć, to poprzez \' - \' określ szerokość. data-busloadinglazy-id dla skryptów znajdziesz nad modułem na interesującej Cię stronie w trybie debugowania lub poprzez konsolę przeglądarki.';
$_['help_pagespeed_html_replace_before'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ wiersz kodu, który ma zostać zastąpiony, a następnie po \' | \' wskaż, którą linię zastąpić. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'. Zamień podziały wierszy na [\r] lub [\r][\n].';
$_['help_pagespeed_html_replace_after'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ wiersz kodu, który ma zostać zastąpiony, a następnie po \' | \' wskaż, którą linię zastąpić. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'. Zamień podziały wierszy na [\r] lub [\r][\n].';
$_['help_pagespeed_html_min'] = 'Wybierz opcje kompresji HTML.';
$_['help_pagespeed_html_min_tags'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ flagi wyrażeń regularnych do usunięcia po lewej stronie znacznika, a następnie po \' | \' wskaż część znacznika lub cały znacznik (jeśli jest ich kilka, oddziel znaczniki \' | \'). Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_css_replace_before'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ wiersz kodu, który ma zostać zastąpiony, a następnie po \' | \' wskaż, którą linię zastąpić. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'. Zamień podziały wierszy na [\r] lub [\r][\n].';
$_['help_pagespeed_css_replace_after'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ wiersz kodu, który ma zostać zastąpiony, a następnie po \' | \' wskaż, którą linię zastąpić. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'. Zamień podziały wierszy na [\r] lub [\r][\n].';
$_['help_pagespeed_css_min'] = 'Wybierz opcję kompresji CSS. Jeśli ta opcja jest włączona, wszystkie pliki stylów, które OpenCart przetwarza zgodnie ze standardem, zostaną połączone w jeden plik i maksymalnie skompresowane.';
$_['help_pagespeed_css_min_links'] = 'Dodaj link do stylu CSS, który nie znalazł się w globalnym arkuszu stylów (aby pracować z innych witryn, umieść również link w polu pobierania). Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, to przed linkiem ustaw \' ; \'. Jeśli chcesz określić własne atrybuty, to po linku ustaw \' | \' i wprowadź atrybuty, na przykład katalog/style.css|type=&quot;text/css&quot; rel=&quot;preload&quot;<br />Możesz także określić następujące parametry na początku linku (atrybuty znajdują się nad parametrami, z wyjątkiem parametrów nawigacyjnych):<br />[header] - wyślij link do bardzo na górze strony;<br />[footer] – wyślij link na sam dół strony;<br />[async] – prosi przeglądarkę o asynchroniczne ładowanie;<br />[defer] – pyta przeglądarka ma załadować się natychmiast po zbudowaniu struktury DOM;<br />[prelod] - pyta przeglądarkę o wstępne pobieranie;<br />[prefetch] - prosi przeglądarkę o odroczenie pobierania do końca;<br />[dns-prefetch] - prosi przeglądarkę o wstępne rozpoznanie DNS dla domeny;<br />[preconnect] - prosi przeglądarkę o wstępne połączenie z <br />[event] - opóźnia ładowanie przez zdarzenie lub jakąkolwiek akcję;<br />[event-2000] - opóźnij ładowanie o czas;<br />[critical] - ten styl jest krytyczny i powinien być ładowany osobno i jako pierwszy (jeśli taki styl jest przez Ciebie przygotowany, to nie możesz uwzględnić funkcji tworzenie stylów krytycznych);';
$_['help_pagespeed_css_min_download'] = 'Dodaj link do stylu CSS, który chcesz pobrać na swoją stronę (zostanie pobrany podczas zapisywania ustawień lub czyszczenia pamięci podręcznej, zaleca się najpierw zapisać bieżące ustawienia). Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, to przed linkiem ustaw \' ; \'.';
$_['help_pagespeed_css_min_exception'] = 'Dodaj link do stylu CSS, który chcesz wykluczyć, i wyślij go na swoją ścieżkę. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, to przed linkiem ustaw \' ; \'. Jeśli chcesz określić własne atrybuty, to po linku ustaw \' | \' i wprowadź atrybuty, na przykład katalog/style.css|type=&quot;text/css&quot; rel=&quot;preload&quot;<br />Możesz także określić następujące parametry na początku linku (atrybuty znajdują się nad parametrami, z wyjątkiem parametrów nawigacyjnych):<br />[header] - wyślij link do bardzo na górze strony;<br />[footer] – wyślij link na sam dół strony;<br />[async] – prosi przeglądarkę o asynchroniczne ładowanie;<br />[defer] – pyta przeglądarka ma załadować się natychmiast po zbudowaniu struktury DOM;<br />[prelod] - pyta przeglądarkę o wstępne pobieranie;<br />[prefetch] - prosi przeglądarkę o odroczenie pobierania do końca;<br />[dns-prefetch] - prosi przeglądarkę o wstępne rozpoznanie DNS dla domeny;<br />[preconnect] - prosi przeglądarkę o wstępne połączenie z <br />[event] - opóźnia ładowanie przez zdarzenie lub jakąkolwiek akcję;<br />[event-2000] - opóźnij ładowanie o czas;<br />[critical] - ten styl jest krytyczny i powinien być ładowany osobno i jako pierwszy (jeśli taki styl jest przez Ciebie przygotowany, to nie możesz uwzględnić funkcji tworzenie stylów krytycznych);';
$_['help_pagespeed_css_min_font'] = 'Dodaj link do czcionki lub obrazu, który Pagespeed przeklina, prosząc o jego wstępne załadowanie. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, to przed linkiem ustaw \' ; \'. Domena czcionek innej firmy zostanie automatycznie połączona z atrybutami (dns-prefetch, preconnect).';
$_['help_pagespeed_css_min_convert'] = 'Określ typy kodu MIME plików w funkcji url(), które mają zostać przekonwertowane do osobnego pliku.';
$_['help_pagespeed_css_min_display'] = 'Włącz tę opcję, aby ustawić 100% czcionek na wyświetlanie czcionek, aby nie wyświetlać niewidocznego tekstu.';
$_['help_pagespeed_css_inline_transfer'] = 'Wybierz opcję przeniesienia kodu CSS.<br />W górę – tuż przed </head>;<br />W dół – tuż przed </body>;<br />Aby skompresować plik - na sam dół pliku, który jest natychmiast ładowany;</head>;';
$_['help_pagespeed_css_inline_exception'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ linię lub część linii kodu CSS, a następnie cały blok kodu w &lt;style&gt;&lt;/style&gt; nie zostaną dotknięte funkcją zawijania kodu. Wartość jest ustawiana zaczynając od nowej linii. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_css_events'] = 'Określ, na których zdarzeniach ma zostać uruchomiony kod CSS, domyślnie zdarzenie zostanie wywołane 1 raz. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_css_critical'] = 'Włączenie tej funkcji spowoduje zebranie niezbędnych stylów przy pierwszym ładowaniu strony i wysłaniu ich na serwer, później wszystkie style zostaną załadowane w wyniku interakcji. Ze względów bezpieczeństwa zbiór stylów będzie dostępny po załadowaniu strony przez administratora. Ta funkcja będzie działać tylko wtedy, gdy włączona jest kompresja i w tym przypadku zaleca się, aby nie odraczać stylów na podstawie zdarzenia (to nawet nie ma sensu).';
$_['help_pagespeed_css_critical_all'] = 'Jeśli tak, style zostaną zebrane dla wszystkich elementów strony.';
$_['help_pagespeed_css_critical_offset'] = 'Określ procent przechwytywania elementów wyższych niż wysokość ekranu.';
$_['help_pagespeed_css_critical_time'] = 'Opóźnij synchronizację selektora stylów.';
$_['help_pagespeed_css_critical_elements'] = 'Określ nazwy elementów (tagi, klasy, identyfikatory), które mają zostać umieszczone w pliku stylów krytycznych względem głównego. Ta funkcja będzie działać, gdy włączona jest kompresja i w tym przypadku nie zaleca się odkładania stylów według zdarzenia. Wartość jest podana w nowej linii.';
$_['help_pagespeed_css_critical_links'] = 'Określ linki do stron, dla których chcesz utworzyć krytyczne style. Style krytyczne zależą od nazwy trasy i stylu. Wartość jest określana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' przed linkiem; \'.';
$_['help_pagespeed_css_style'] = 'Tutaj możesz ustawić style, aby dostosować style modułów do projektu swojej witryny. Określ &lt;styl&gt;&lt;/style&gt; nie ma potrzeby.';
$_['help_pagespeed_js_replace_before'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ wiersz kodu, który ma zostać zastąpiony, a następnie po \' | \' wskaż, którą linię zastąpić. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'. Zamień podziały wierszy na [\r] lub [\r][\n].';
$_['help_pagespeed_js_replace_after'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie \' | \' określ wiersz kodu, który ma zostać zastąpiony, a następnie po \' | \' wskaż, którą linię zastąpić. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'. Zamień podziały wierszy na [\r] lub [\r][\n].';
$_['help_pagespeed_js_min'] = 'Wybierz opcję kompresji kodu js. Jeśli ta opcja jest włączona, wszystkie pliki skryptów, które OpenCart przetwarza zgodnie ze standardem, zostaną połączone w jeden plik i maksymalnie skompresowane.';
$_['help_pagespeed_js_min_links'] = 'Dodaj link do skryptu js, który nie jest zawarty w udostępnionym pliku skryptu. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, to przed linkiem ustaw \' ; \'. Jeśli chcesz określić własne atrybuty, to po linku ustaw \' | \' i wprowadź atrybuty, np. katalog/script.js|type=&quot;text/javascript&quot;<br />Możesz także określić następujące opcje na początku łącza (atrybuty znajdują się powyżej opcji, z wyjątkiem przesuń opcje):<br /> [header] – wyślij link na samą górę strony;<br />[footer] – wyślij link na sam dół strony;<br />[async] – prosi przeglądarkę o asynchroniczne ładowanie;<br />[defer] - prosi przeglądarkę o załadowanie natychmiast po zbudowaniu struktury DOM;<br />[prelod] - prosi przeglądarkę o wstępne załadowanie;<br />[prefetch] - pyta przeglądarka, aby odłożyła ładowanie do końca;<br />[dns-prefetch] - prosi przeglądarkę o wstępne pobranie DNS dla domeny;<br />[preconnect] - prosi przeglądarkę o wstępne połączenie z domeną;<br />[event] - opóźnij ładowanie o dowolne zdarzenie akcji;<br />[event-2000] - opóźnij ładowanie o czas;';
$_['help_pagespeed_js_min_download'] = 'Dodaj link do skryptu js, który chcesz pobrać na swoją stronę (zostanie pobrany po zapisaniu ustawień lub wyczyszczeniu pamięci podręcznej, zaleca się najpierw zapisać bieżące ustawienia). Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, to przed linkiem ustaw \' ; \'.';
$_['help_pagespeed_js_min_exception'] = 'Dodaj link do skryptu js, który chcesz wykluczyć, i wyślij go na swoją ścieżkę. Istnieją na przykład skrypty, które są całkowicie niezależne i nie blokują renderowania strony, więc nie należy ich kompresować innymi. może to pogorszyć optymalizację. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, to przed linkiem ustaw \' ; \'. Jeśli chcesz określić własne atrybuty, to po linku ustaw \' | \' i wprowadź atrybuty, np. katalog/script.js|type=&quot;text/javascript&quot;<br />Możesz także określić następujące opcje na początku łącza (atrybuty znajdują się powyżej opcji, z wyjątkiem przesuń opcje):<br /> [header] – wyślij link na samą górę strony;<br />[footer] – wyślij link na sam dół strony;<br />[async] – prosi przeglądarkę o asynchroniczne ładowanie;<br />[defer] - prosi przeglądarkę o załadowanie natychmiast po zbudowaniu struktury DOM;<br />[prelod] - prosi przeglądarkę o wstępne załadowanie;<br />[prefetch] - pyta przeglądarka, aby odłożyła ładowanie do końca;<br />[dns-prefetch] - prosi przeglądarkę o wstępne pobranie DNS dla domeny;<br />[preconnect] - prosi przeglądarkę o wstępne połączenie z domeną;<br />[event] - opóźnij ładowanie o dowolne zdarzenie akcji;<br />[event-2000] - opóźnij ładowanie o czas;';
$_['help_pagespeed_js_inline_event'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ linię lub część linii kodu js, a następnie cały blok kodu w &lt;script&gt;&lt;/script&gt; zostanie opakowany w wydarzenie inauguracyjne podczas dowolnej interakcji z witryną. Wartość jest ustawiana zaczynając od nowej linii. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_js_inline_event_time'] = 'Określ czas w milisekundach, jeśli chcesz, aby odroczone skrypty uruchamiały się same, bez czekania na jakąkolwiek interakcję z witryną. Jeśli podano 0, funkcja automatycznego uruchamiania nie będzie działać.';
$_['help_pagespeed_js_inline_transfer'] = 'Wybierz opcję przeniesienia kodu js.<br />W górę – tuż przed </head>;<br />W dół – tuż przed </body>;<br />Do plik skompresowany - na sam dół pliku, który jest ładowany natychmiast.';
$_['help_pagespeed_js_inline_transfer_onrot'] = 'Wprowadź trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ linię lub część linii kodu js, a następnie cały blok kodu w &lt;script&gt;&lt;/script&gt; zostanie przeniesiony (po wypełnieniu opcje wykluczenia nie zostaną zastosowane). Wartość jest ustawiana zaczynając od nowej linii. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_js_inline_exception'] = 'Określ trasę lub słowo kluczowe (seo_url) strony, a następnie po \' | \' określ linię lub część linii kodu js, a następnie cały blok kodu w &lt;script&gt;&lt;/script&gt; nie zostaną dotknięte funkcją zawijania kodu. Wartość jest ustawiana zaczynając od nowej linii. Jeśli chcesz na wszystkich stronach, zamiast trasy podaj \' # \'. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_js_events'] = 'Określ, na których zdarzeniach ma zostać uruchomiony kod js, domyślnie zdarzenie zostanie wywołane 1 raz. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_pagespeed_js_script'] = 'Tutaj możesz ustawić skrypty dostosowujące style modułów do projektu Twojej witryny. Określ &lt;skrypt&gt;&lt;/script&gt; nie ma potrzeby.';
$_['help_database_status'] = 'Wyłącz po pracy. Po włączeniu interfejs akceptuje działający parametr GET \'bus_cache_database\' ze specjalnymi wartościami, aby wyłączyć pamięć podręczną i wyświetlić niezbędne informacje o prędkości zamiast kodu HTML imitującego gościa, autoryzowanego użytkownika i administratora.';
$_['help_database_links'] = 'Wprowadź pełny link do Twojej witryny, który Cię interesuje. Wartość jest ustawiana zaczynając od nowej linii. Jeśli nie chcesz usuwać, ustaw \' na początku linii; \'.';
$_['help_database_columns'] = 'Określ kolumnę, która ma być indeksowana, a następnie po \' | \' W razie potrzeby określ rozmiar. Wartość ustawiana jest od nowej linii.';
$_['help_cron_pregeneracja'] = 'Jeśli tak, wstępne generowanie pamięci podręcznej przez cron lub ręczne uruchomienie będzie działać.';
$_['help_cron_pregeneracja_query_count'] = 'Określ liczbę zapytań wykonywanych na sekundę. Aby oszacować kwotę, zaleca się sprawdzenie obciążenia serwera. Ponadto pojemność serwera po prostu nie pozwala na wysyłanie dużej liczby żądań.';
$_['help_support_stats_status'] = 'Jeśli tak, to po wejściu w ustawienia modułu zostanie obliczony rozmiar i ilość plików na stronie. Statystyki są buforowane przez 10 minut.';
$_['help_support_disc_size_limit'] = 'Wprowadź dostępny rozmiar dysku swojego serwera w megabajtach. Domyślnie 0 to rozmiar całego dysku serwera. Jest to maksymalny rozmiar pamięci podręcznej i obrazów WebP.';
$_['help_support_disc_warning'] = 'Jeśli tak, administratorowi wyświetli się komunikat podczas logowania do panelu administracyjnego.';
$_['help_support_session_fix'] = 'Jeśli tak, tworzenie sesji zostanie zatrzymane. OpenCart ma problem z tworzeniem sesji, jeśli na stronę wejdzie użytkownik, który nie akceptuje sesji, w efekcie przy każdej wizycie tworzona jest nowa sesja. Funkcja sprawia, że ​​zapisuje adres IP użytkownika i uniemożliwia OpenCart utworzenie sesji. Plik blokady jest przechowywany w folderze sesji (jeśli istnieje) lub w pamięci podręcznej.';
$_['help_support_debug'] = 'Jeśli tak, administratorowi wyświetli się informacja o czasie ładowania strony nad nagłówkiem witryny i pamięć podręczna zacznie działać.';

// Doc
$_['doc'] = '<b>Zrozum wszystkie cytowane wartości bez spacji w środku (przykład: \' | \' stąd => \'|\'). Nie należy także pozostawiać pustych linii w ustawieniach, aby moduł nie spełniał niepotrzebnych warunków sprawdzania. Wszystkie ustawienia są podane jednym stylem pisma, ale zachowaj ostrożność i spójrz na instrukcje po najechaniu kursorem na okrąg ze znakiem zapytania.</b><br /><br /><b>Trasa</b> to trasa wartość parametru GET w linii adresowej przeglądarki po znaku \' = \' (przykład: trasa=produkt/kategoria => produkt/kategoria), lub przy ładowaniu kontrolera w kodzie pierwszy parametr (przykład: $this->load->controller(\'product/category\') => produkt/kategoria) lub podczas ładowania modelu (przykład: $this->model_catalog_category->getCategories() => katalog/kategoria/getCategories) . W OpenCart 4 funkcja kontrolera jest już poprzedzona \' | \' Lub \' . \', ale nadal wstawiasz \' / \'.<br />Trasę i słowo kluczowe strony można znaleźć po włączeniu trybu debugowania na samej górze. <b>Trasą może być także inny parametr z kolumny zapytania tabeli oc_url_alias, oc_seo_url (gdy w wierszu przeglądarki nie ma trasy, ale zamiast trasy produktu/kategorii znajduje się słowo kluczowe, np. ścieżka = 20_27 ) - w przyszłości planowana jest zmiana tego zachowania (możliwość określenia tras oddzielonych przecinkami, np. dla buforowania kategorii produkt/kategoria, ścieżka=,kategoria_id=).</b>.<br /><br />
Polecam skorzystać z tego <a href="https://liveopencart.ru/index.php?route=product/product&product_id=2519" rel="noreferrer noopener">moduł</a> i podać tam link:<br />< br />
Wyczyść pamięć podręczną HTML, DATA:<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&caches=1<br / <br />
Wyczyść pamięć podręczną TWIG:<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&twig=1<br /><br />
Wyczyść pamięć podręczną HTML, DATA + CSS, JS:<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&minify= 1<br /><br />
Wyczyść pamięć podręczną HTML, DATA + OBRAZY:<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&images=1< br /><br />
Wyczyść pamięć podręczną HTML, DATA + AKTUALIZUJ MODYFIKACJE, ZDARZENIA:<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&modifications =1<br /><br />
Czyszczenie pamięci podręcznej LOGÓW:<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&logs=1<br /><br />
Czyszczenie WIDOK PRDOCUTS (przeglądane produkty):<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&view_products=1<br / <br />
Usuwanie zapytania CUSTOMER SEARCH (wyszukiwane hasła):<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&customer_search=1<br /><br />
Czyszczenie ZAPYTANIA WYSZUKIWANIA BLOGU KLIENTÓW (zapytania wyszukiwania dla bloga OpenCart.Pro 2.3.0.2.6):<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token ]&redirect=[trasa]&customer_blog_search=1<br /><br />
Czyszczenie AKTYWNOŚCI KLIENTA (informacji o aktywności użytkownika):<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token=[user_token]&redirect=[route]&customer_activity=1< br /><br />
Czyszczenie SESJI KLIENTA I API (plik lub DB) (dane sesji użytkowników i połączeń poprzez REST API OpenCart):<br /> https://mysite.by/admin/index.php?route=extension/module/bus_cache/clear&user_token = [token_użytkownika]&redirect=[trasa]&sesja_klienta=1<br /><br />
Czyszczenie SESJI KOSZYKA GOŚCIA (dane sesji koszyka gościa): <br /><br />';
$_['doc_status'] = '<b>Stan</b> to stan modułu lub jego funkcjonalności.<br />Włączony - wszystkie funkcje modułu będą działać.<br />Wyłączony - wszystkie funkcje modułu będą działać nie będzie działać. <br />Pomiędzy zmianami statusu a zapisaniem ustawień pamięć podręczna OpenCart w systemie/pamięci/pamięci podręcznej zostanie wyczyszczona, modyfikatory i (lub) zdarzenia zostaną zaktualizowane.<br />Modyfikatory i (lub) zdarzenia modułu zostaną włączone i wyłączone w zależności od statusu.' ;
$_['doc_store'] = '<b>Sklep</b> to stan modułu lub jego funkcjonalność na stronach wybranego sklepu.<br />Lista sklepów znajduje się w panelu administracyjnym/Systemie /Ustawienia. O włączeniu pracy decyduje zaznaczenie checkboxu.';
$_['doc_cache_status'] = '<b>Włącz buforowanie stron</b> - jest to stan działania funkcjonalności modułu związanej z buforowaniem całej strony.<br />Tak - funkcje buforowania stron będą działać.<br />Nie — pamięć podręczna stron funkcji nie będzie działać.<br />Funkcje związane z tym ustawieniem znikną, jeśli zostaną wyłączone.<br />Nie zaleca się buforowania witryny, jeśli masz pamięć HDD zamiast dysku SSD (NVMe). Ogólnie rzecz biorąc, nie wynajmuj hostingu ani serwera, jeśli nie ma na nim zainstalowanego NVMe.';
$_['doc_cache_con'] = '<b>Parametry konfiguracyjne</b> to parametry łańcuchowe lub tablicowe pobrane z $this->config->get(). Różnorodność pamięci podręcznej według tych parametrów będzie obowiązywać dla pamięci podręcznej wszystkich stron, kontrolerów, modeli. Musisz ręcznie otworzyć źródło i poszukać $this->config->get(), która może się różnić w pewnych warunkach (tj. musisz utworzyć nową pamięć podręczną, gdy $this->config->get() ulegnie zmianie).' ;
$_['doc_cache_ses'] = '<b>Parametry sesji</b> to parametry tablicowe uzyskane z $this->session->data. Różnorodność pamięci podręcznej według tych parametrów będzie obowiązywać dla pamięci podręcznej wszystkich stron, z wyjątkiem pamięci podręcznej kontrolerów, modeli. Musisz ręcznie otworzyć kod źródłowy i poszukać $this->session->data, które w pewnych warunkach mogą się różnić (tj. musisz utworzyć nową pamięć podręczną, gdy $this->session->data ulegnie zmianie).';
$_['doc_cache_cok'] = '<b>Parametry pliku cookie</b> to parametry tablicowe uzyskane z pliku $this->request->cookie. Różnorodność pamięci podręcznej według tych parametrów będzie obowiązywać dla pamięci podręcznej wszystkich stron, z wyjątkiem pamięci podręcznej kontrolerów, modeli. Musisz ręcznie otworzyć źródło i poszukać $this->request->cookie, które może być inne w pewnych warunkach (tj. musisz utworzyć nową pamięć podręczną, gdy $this->request->cookie ulegnie zmianie).';
$_['doc_cache_par'] = '<b>Parametry ograniczeń</b> to parametry tablicowe uzyskane z $this->request->get i $this->request->post. Limit pamięci podręcznej dla tych parametrów będzie obowiązywał dla pamięci podręcznej wszystkich stron, z wyjątkiem pamięci podręcznej kontrolerów, modeli. Musisz ręcznie otworzyć kod źródłowy i poszukać $this->request->get ($_GET) i $this->request->post ($_POST), które mogą się różnić w pewnych warunkach (tzn. musisz utwórz nową pamięć podręczną, gdy $this się zmieni ->request->get i $this->request->post).';
$_['doc_cache_onrot'] = '<b>Parametry operacji</b> - funkcja ta odpowiada za buforowanie całych stron dla wąskiego ustawienia (możliwość skonfigurowania pamięci podręcznej dla poszczególnych stron według trasy i słowa kluczowego, określenie indywidualnych ustawień: czas pamięci podręcznej, parametry konfiguracyjne, sesja, plik cookie, pobieranie i wysyłanie dla różnorodności pamięci podręcznej).';
$_['doc_cache_rot'] = '<b>Parametry wykluczenia</b> - ta funkcja odpowiada za wykluczenie buforowania całych stron według trasy i słowa kluczowego.';
$_['doc_cache_customer'] = '<b>Pamięć podręczna dla zalogowanych użytkowników?</b> - ta funkcja odpowiada za zróżnicowanie pamięci podręcznej strony zgodnie z $this->customer->isLogged(). Jeśli nie dostosujesz buforowania całej strony, nie włączaj tej funkcji.';
$_['doc_cache_cart'] = '<b>Cache koszyka</b> - ta funkcja odpowiada za buforowanie koszyka $this->cart->getProducts().';
$_['doc_cache_cart_count'] = '<b>Cache gdy w koszyku znajduje się produkt</b> - funkcja ta odpowiada za zróżnicowanie cache\'u strony zgodnie z $this->cart->getProducts(). ';
$_['doc_cache_controller'] = '<b>Funkcje kontrolera buforującego</b> - ta funkcja odpowiada za buforowanie kontrolerów załadowanych w kodzie poprzez $this->load->controller();. Dla każdego kontrolera możesz określić indywidualne ustawienia: czas pamięci podręcznej, parametry konfiguracyjne (domyślnie pobierane z ustawień ogólnych), sesję, plik cookie, pobieranie i wysyłanie dla odmiany pamięci podręcznej.';
$_['doc_cache_controller_ajax'] = '<b>Funkcje kontrolera ładowania Ajax</b> - ta funkcja odpowiada za ładowanie kontrolerów ajax w sposób załadowany w kodzie poprzez $this->load->controller();. Tej funkcji należy użyć, jeśli chcesz ukryć informacje przed robotami wyszukiwarek, gdy moduł zawiera wiele takich samych słów na stronie lub gdy modułu nie można zapisać w pamięci podręcznej podczas buforowania całej strony.';
$_['doc_cache_model'] = '<b>Buforowanie funkcji modelu</b> - ta funkcja odpowiada za buforowanie modeli załadowanych do kodu poprzez $this->model_[ścieżka pliku modelu]->[nazwa funkcji](); . Dla każdego modelu możesz określić indywidualne ustawienia: czas pamięci podręcznej, parametry konfiguracyjne (domyślnie pobierane z ustawień ogólnych), sesję, plik cookie, pobieranie i wysyłanie dla odmiany pamięci podręcznej.';
$_['doc_cache_engine'] = '<b>Obsługa pamięci podręcznej</b> - funkcja ta odpowiada za wybór obsługi pamięci podręcznej dostarczanej przez moduł.<br />Obsługa Buslik i OpCache - pamięć podręczna plików - zalecana przy słabych hostingach, inne procedury obsługi są dodatkowo wykorzystywane w ich algorytmach RAM do buforowania.';
$_['doc_cache_engine_mine'] = '<b>Niestandardowy silnik pamięci podręcznej</b> - ta funkcja odpowiada za ustawienie silnika pamięci podręcznej. Może to być potrzebne, jeśli masz własne rozwiązanie do obsługi pamięci podręcznej lub musisz na przykład zmienić procedurę obsługi pamięci podręcznej dostarczoną z modułem i zapobiec nadpisaniu kodu podczas aktualizacji modułu.';
$_['doc_cache_oc'] = '<b>Kontroluj pamięć podręczną OpenCart</b> - ta funkcja odpowiada za ustawienie obsługi pamięci podręcznej jako domyślnej obsługi standardowej pamięci podręcznej OpenCart.';
$_['doc_cache_expire'] = '<b>Wygaśnięcie pamięci podręcznej OpenCart</b> - ta funkcja odpowiada za ustawienie domyślnego czasu pamięci podręcznej OpenCart, gdy ustawiony jest na to moduł obsługi.';
$_['doc_cache_expire_controller'] = '<b>Wygaśnięcie pamięci podręcznej kontrolera</b> - ta funkcja odpowiada za ustawienie domyślnego wygaśnięcia pamięci podręcznej kontrolera.';
$_['doc_cache_expire_model'] = '<b>Wygaśnięcie pamięci podręcznej modelu</b> - ta funkcja odpowiada za ustawienie domyślnego wygaśnięcia pamięci podręcznej modelu.';
$_['doc_cache_expire_all'] = '<b>Wygaśnięcie pamięci podręcznej strony</b> - ta funkcja odpowiada za ustawienie domyślnego wygaśnięcia pamięci podręcznej strony.';
$_['doc_cache_size_limit'] = '<b>Rozmiar pamięci podręcznej</b> - ta funkcja odpowiada za ograniczenie tworzenia pamięci podręcznej w przypadku wyczerpania się pamięci serwera lub ustawionego limitu dysku.';
$_['doc_cache_clear'] = '<b>Automatyczne czyszczenie pamięci podręcznej</b> - ta funkcja odpowiada za wyczyszczenie pamięci podręcznej w przypadku wybranych.';
$_['doc_pagespeed_status'] = '<b>Włącz optymalizację (PageSpeed)</b> - to jest stan funkcjonalności modułu związany z optymalizacją strony.<br />Tak - funkcje optymalizacji strony będą działać.<br />Nie - funkcje optymalizacji strony zostaną wyłączone.<br />Funkcje związane z tym ustawieniem znikną, jeśli zostaną wyłączone.';
$_['doc_pagespeed_onrot'] = '<b>Parametry operacji</b> - ta funkcja odpowiada za włączenie optymalizacji strony pod kątem trasy i słowa kluczowego, jeżeli strona nie posiada &lt;!DOCTYPE html';
$_['doc_pagespeed_rot'] = '<b>Parametry wykluczeń</b> - funkcja ta odpowiada za wykluczenie z optymalizacji stron według trasy i słowa kluczowego, jeśli w działaniu modułu wystąpią różne błędy.';
$_['doc_pagespeed_image_lazy_load'] = "<b>Włącz leniwe ładowanie obrazu</b> — ta funkcja włącza atrybut loading=\"lazy\" lub bus-loading=\"lazy\" w szablonach tagów &lt;img, &lt;iframe, &lt;frame, to jest to konieczne poprzez modyfikatory lub zmianę funkcjonalności w kodzie HTML i zmianę data-src na src (wersja natywna dla przeglądarki) lub data-busloadinglazy-src (wersja modułu uniwersalnego).<br /><textarea class=\"form-control\">// api bus_loading_lazy.js
/*
busLoadingLazy.browser['name'] - pobierz nazwę przeglądarki
busLoadingLazy.browser['version'] - pobierz wersję przeglądarki
busLoadingLazy.setting['browser']['name'] - uruchamiaj tylko dla nazwy przeglądarki (po wykonaniu kodu należy usunąć ograniczenie)
busLoadingLazy.setting['browser']['version'] - uruchamiane tylko dla wersji przeglądarki i nowszych (po wykonaniu kodu należy usunąć ograniczenie)
busLoadingLazy.setting['elements'] - obsługa elementów strony, domyślnie '[loading=\"lazy\"][data-busloadinglazy-src], [loading=\"lazy\"][data-busloadinglazy-id]'
busLoadingLazy.setting['element'] - obsłuż element strony, domyślnie ''
busLoadingLazy.setting['fps'] - częstotliwość akcji dowolnych zdarzeń po których Twój kod uruchomi się w zdarzeniu busLoadingLazy, domyślnie 10
busLoadingLazy.setting['offsetTop'] - odległość okna przeglądarki od elementu rozpoczynającego ładowanie, domyślnie 50
busLoadingLazy.setting['width'] - minimalna szerokość uruchomienia elementu strony, domyślnie 0
busLoadingLazy.setting['lazy'] - wymuszone ładowanie elementu, domyślnie false
busLoadingLazy.setting['start'] - rozpocznij ładowanie elementu od znalezionych od numeru, domyślnie 0
busLoadingLazy.setting['quantity'] - przetwarza liczbę elementów ze wszystkich znalezionych, domyślnie 10
busLoadingLazy.setting['exception'] - tablica zawierająca wartości data-busloadinglazy-src i data-busloadinglazy-id, które mają zostać wykluczone z przetwarzania, domyślnie {}

// Przykład:
window.addEventListener('busLoadingLazyBefore', function() {
	busLoadingLazy.setting['status'] = false; // nie ładuj modułu
	busLoadingLazy.setting['start'] = 0; // rozpocznij pobieranie z
	busLoadingLazy.setting['quantity'] = 20; // załaduj tak dużo
	busLoadingLazy.setting['exception'] = {'https://mysite.by/image.png':true}; // nie ładuj tego obrazu podczas ładowania strony
	busLoadingLazy.start(); // ładuj więcej obrazów i ramek iframe podczas ładowania strony, zaczynając od 50 w ilości 5 sztuk
	busLoadingLazy.setting['exception'] = {}; // usuń wyjątki
});
*/

// skrypt bus_loading_lazy.js jest uruchamiany, gdy strona zostanie w pełni załadowana przez zdarzenie ładowania. w tym momencie może uzyskać prawidłową wysokość i tak dalej.
// wykonaj kod podczas przewijania, zmień rozmiar zgodnie z ustawieniami częstotliwości uruchamiania busLoadingLazy.setting['fps']
window.addEventListener('busLoadingLazy', function() {
	/* Twój kod */
});

// wykonaj kod przed uruchomieniem skryptu busLoadingLazy
window.addEventListener('busLoadingLazyBefore', function() {
	/* Twój kod */
});

// wykonaj kod po uruchomieniu skryptu busLoadingLazy
window.addEventListener('busLoadingLazyAfter', function() {
	/* Twój kod */
});

// wykonaj kod, gdy pojawi się opóźniony blok
window.addEventListener('busLoadingLazyId-93fd76d319a4d202930d925a170c45ff', function() {
	/* Twój kod */
});

// przetwórz teraz element HTML (jeśli chcesz załadować po kliknięciu)
busLoadingLazy.start({element:'[data-busloadinglazy-id=\'93fd76d319a4d202930d925a170c45ff\']', lazy:true});

// bardziej poprawne uruchamianie po kliknięciu
function myclick() {
	if ('busLoadingLazy' in window) {
		busLoadingLazy.start({element:'[data-busloadinglazy-id=\93fd76d319a4d202930d925a170c45ff\']', lazy:true});
	} else {
		window.addEventListener('busLoadingLazyBefore', function() {
			busLoadingLazy.start({element:'[data-busloadinglazy-id=\93fd76d319a4d202930d925a170c45ff\']', lazy:true});
		});
	}
}</textarea>";
$_['doc_pagespeed_image_first_boot_status'] = 'Łącze zostanie zaszyfrowane jako "https://mysite.by/?bus_cache_first_boot=qwert123" przy użyciu szyfrowania $this->.';
$_['doc_pagespeed_image_w_h'] = '<b>Włącz atrybuty szerokości i wysokości</b> - ta funkcja odpowiada za włączenie atrybutów szerokości i wysokości w obrazach. Jeśli te atrybuty nie zostały gdzieś ustawione, użyj funkcji zamiany w kodzie HTML.';
$_['doc_pagespeed_image_webp_status'] = '<b>Włącz obsługę obrazów WebP</b> - ta funkcja odpowiada za włączenie obsługi formatu webp (przesyłanie obrazów do menedżera plików).<br />Funkcje z tym związane ustawienie zniknie, gdy zostanie wyłączone.<br />Pomiędzy zmianą statusu a zapisaniem ustawień pamięć podręczna OpenCart w systemie/pamięci/pamięci podręcznej zostanie wyczyszczona, modyfikatory i (lub) zdarzenia zostaną zaktualizowane.<br />Modyfikatory i (lub) zdarzenia modułu, w zależności od statusu, zostaną włączone lub wyłączone.';
$_['doc_pagespeed_image_webp_convert'] = '<b>Konwertuj obrazy do i z WebP</b> - ta funkcja odpowiada za konwersję obrazów png, jpg, gif do i z webp, jeśli przeglądarka nie obsługuje webp.<br />Polecana wersja GD 2.2.5+ (poniższa wersja nie obsługuje problemu z przezroczystym tłem i niebieskim kolorem - moduł wstawia biały kolor zamiast przezroczystości i rozwiązuje problem braku niebieskiego koloru) oraz php 7.1+ (w poniższej wersji brakuje typu IMAGETYPE_WEBP kontrola).';
$_['doc_pagespeed_image_webp_quality'] = '<b>Kompresja obrazu WebP</b> - ta funkcja odpowiada za jakość tworzonego obrazu.';
$_['doc_pagespeed_html_lazy_load'] = '<b>Włącz leniwe ładowanie HTML</b> - ta funkcja odpowiada za zawijanie kodu HTML kontrolera w &lt;div loading="lazy" data-busloadinglazy-id="93fd76d319a4d202930d925a170c45ff " data- busloadinglazy-res="1200"&gt;&lt;noscript&gt;kod kontrolera&lt;/noscript&gt;&lt;/div&gt;<br />Korzystając z funkcji zamiany w kodzie HTML, możesz zawijać w te znaczniki dowolny kod HTML, najważniejsze jest ustawienie indywidualnego identyfikatora.<br /><br />data-busloadinglazy-id to identyfikator kontrolera według trasy i nazwy modułu.<br />data-busloadinglazy-res to minimalna szerokość ekranu do uruchomienia moduł. Pamiętaj, że szerokość ekranu dotyczy wyłącznie PageSpeed, na telefonach komórkowych o wyższej rozdzielczości kod HTML zostanie uruchomiony.<br />
data-busloadinglazy-remove - ustawiane przez moduł w wybranym kontrolerze w celu zastąpienia &lt;noscript&gt; zostać usunięty podczas uruchamiania skryptu bus_loading_lazy.js.<br /><br />W przypadku opóźniania karuzeli może zaistnieć potrzeba ponownego uruchomienia kodu karuzeli - umieść kod uruchomienia karuzeli w kodzie HTML na kodzie zdarzenia przewijania. Zobacz kod zdarzenia w dokumentacji funkcji modułu powyżej.<br /><br />';
$_['doc_pagespeed_html_replace_before'] = '<b>Zamień w kodzie HTML przed kompresją</b> - ta funkcja odpowiada za zamianę kodu HTML przed jego kompresją, dzięki czemu możesz dostosować kod pod kątem niektórych funkcjonalności.<br /> Zasadniczo podmiana jest konieczna, gdy w kodzie brakuje jakiegoś elementu, co powoduje błąd po kompresji w przeglądarce, albo trzeba ustawić atrybuty szerokości i wysokości na obrazach, albo trzeba usunąć atrybut loading="lazy" itp. ';
$_['doc_pagespeed_html_replace_after'] = '<b>Zamień w kodzie HTML po kompresji</b> - ta funkcja odpowiada za zamianę w kodzie HTML po jego skompresowaniu, dzięki czemu możesz poprawić kod pod kątem funkcjonalności kompresji.< br /> Zasadniczo podmiana jest wymagana, gdy w kodzie brakuje jakiegoś elementu, co powoduje błąd po kompresji w przeglądarce, lub trzeba ustawić atrybuty szerokości i wysokości na obrazach, lub trzeba usunąć loading="lazy " itp.<br />Aby usunąć loading="lazy" we właściwych miejscach, użyj modyfikatorów, aby ustawić atrybut oznaczający na żądanych obrazach przed atrybutem src, aby moduł mógł się do niego podłączyć.';
$_['doc_pagespeed_html_min'] = '<b>Kompresuj kod HTML</b> - ta funkcja odpowiada za zmniejszenie rozmiaru stron poprzez usunięcie komentarzy, dodatkowych spacji, podziałów wierszy.<br />Również za zmniejszenie rozmiaru , jeśli to możliwe, użyj zawijania kodu wbudowanego do pliku kompresyjnego i nie umieszczaj kodu źródłowego obrazów svg w kodzie strony. Im jaśniejsza strona, tym mniej pamięci potrzeba do przetworzenia i przechowywania pamięci podręcznej.';
$_['doc_pagespeed_html_min_tags'] = '<b>Usuń wcięcia po lewej stronie tagów</b> - ta funkcja odpowiada za usuwanie wcięć pomiędzy &gt;&lt;, innymi słowy to Ty decydujesz, które tagi i na której stronie \s można usunąć, \h,\t,\r,\n itd. zgodnie z zasadami wyrażeń regularnych w nawiasach kwadratowych []';
$_['doc_pagespeed_css_replace_before'] = '<b>Zamień w kodzie CSS przed kompresją</b> - ta funkcja odpowiada za zamianę kodu CSS przed jego kompresją, dzięki czemu możesz poprawić kod pod kątem niektórych funkcjonalności.<br />Przeważnie wymiana jest wymagana, gdy w kodzie brakuje jakiegoś elementu, co powoduje, że projekt strony jest krzywy lub gdy chcesz usunąć coś zbędnego.';
$_['doc_pagespeed_css_replace_after'] = '<b>Zamień w kodzie CSS po kompresji</b> - ta funkcja odpowiada za zamianę kodu CSS po jego skompresowaniu, dzięki czemu możesz dostosować kod pod kątem niektórych funkcjonalności.<br />Przeważnie wymiana jest wymagana, gdy w kodzie brakuje jakiegoś elementu, co powoduje, że projekt strony jest krzywy lub gdy chcesz usunąć coś zbędnego.';
$_['doc_pagespeed_css_min'] = '<b>Kompresuj kod css</b> - ta funkcja odpowiada za zmniejszenie rozmiaru stron poprzez usunięcie komentarzy, dodatkowych spacji, zawijanie linii, zbieranie plików w jedną.';
$_['doc_pagespeed_css_min_links'] = '<b>Linki do plików css</b> - ta funkcja odpowiada za połączenie plików css w jeden plik. Domyślnie zbierane są pliki z $this->document->getStyles(), więc resztę należy określić ręcznie.';
$_['doc_pagespeed_css_min_download'] = '<b>Linki do plików css do pobrania</b> - ta funkcja odpowiada za zapisanie plików css na Twój serwer po zapisaniu ustawień modułu. Jest to przydatne dla witryny, ponieważ plik będzie ładowany szybciej z własnego serwera.';
$_['doc_pagespeed_css_min_exception'] = '<b>wyjątek kompresji css</b> - ta funkcja odpowiada za wykluczenie plików css z łączenia w jeden plik, który jest łączony automatycznie z $this->document->getStyles(). ';
$_['doc_pagespeed_css_min_font'] = '<b>Wstępnie ładuj czcionki lub obrazy</b> - ta funkcja odpowiada za ustawienie priorytetu ładowania czcionek i obrazów, co zminimalizuje skoki stylów i będzie miało pozytywny wpływ na układ zbiorczy Shift\'.';
$_['doc_pagespeed_css_min_convert'] = '<b>Konwertuj kod do pliku</b> - ta funkcja jest przydatna do zmniejszania rozmiaru pliku stylu i umożliwia przeglądarce buforowanie takich plików.';
$_['doc_pagespeed_css_min_display'] = '<b>Font-Display</b> - funkcja ta odpowiada za ustawienie trybu działania czcionek.';
$_['doc_pagespeed_css_inline_transfer'] = '<b>Przenieś wbudowany kod CSS</b> - ta funkcja jest odpowiedzialna za przesyłanie kodu.';
$_['doc_pagespeed_css_inline_exception'] = '<b>Wyjątek od transferu wbudowanego kodu CSS</b> - ta funkcja odpowiada za wykluczenie kodu z transferu.';
$_['doc_pagespeed_css_events'] = '<b>Zdarzenia uruchomienia kodu CSS</b> - ta funkcja odpowiada za uruchomienie odroczonego kodu CSS (kod wbudowany i pliki).';
$_['doc_pagespeed_css_critical'] = '<b>Włącz zbieranie stylów krytycznych</b> - ta funkcja odpowiada za gromadzenie niezbędnych stylów dla określonych stron. Ta funkcja skraca czas ładowania „Pierwszej treściowej farby” i „Największej treściowej farby”.';
$_['doc_pagespeed_css_critical_all'] = '<b>Zbieraj style dla wszystkich elementów</b> - ta funkcja odpowiada za zbieranie stylów bez uwzględnienia wysokości ekranu.';
$_['doc_pagespeed_css_critical_offset'] = '<b>Odcięcie kolekcji od wysokości ekranu</b> - ta funkcja odpowiada za dostosowanie wysokości strony witryny w celu gromadzenia krytycznych stylów.';
$_['doc_pagespeed_css_critical_time'] = '<b>Opóźnienie</b> - ta funkcja odpowiada za rozpoczęcie zbierania stylów po upływie potrzebnego czasu.';
$_['doc_pagespeed_css_critical_elements'] = '<b>Elementy stylu</b> - ta funkcja odpowiada za określenie dodatkowych elementów stylu, jeśli z jakiegoś powodu nie zostały one pobrane. Elementy stylu - oznaczają identyfikator stylu (.class, #id, [atrybut], tag lub pełna nazwa stylu).';
$_['doc_pagespeed_css_critical_links'] = '<b>Linki do stron kolekcji stylów krytycznych</b> - linki są niezbędne, aby moduł wiedział, dla których stron należy utworzyć style krytyczne.';
$_['doc_pagespeed_css_style'] = '<b>Styl</b> to pole, w którym możesz umieścić swój kod CSS. Plik z kodem zostanie załadowany po plikach głównych.';
$_['doc_pagespeed_js_replace_before'] = '<b>Zamień w kodzie js przed kompresją</b> - ta funkcja odpowiada za zamianę kodu js przed jego kompresją, dzięki czemu możesz dostosować kod pod kątem niektórych funkcjonalności.<br />Przeważnie trzeba wymienić, gdy brakuje jakiegoś elementu w kodzie, co powoduje błąd po kompresji w przeglądarce lub chcesz usunąć coś zbędnego.';
$_['doc_pagespeed_js_replace_after'] = '<b>Zastąpienie w kodzie js po kompresji</b> - ta funkcja odpowiada za zamianę w kodzie js po jego skompresowaniu, dzięki czemu można poprawić kod pod kątem niektórych funkcjonalności.<br />Przeważnie trzeba wymienić, gdy brakuje jakiegoś elementu w kodzie, co powoduje błąd po kompresji w przeglądarce lub chcesz usunąć coś zbędnego.';
$_['doc_pagespeed_js_min'] = '<b>Kompresuj kod js</b> - funkcja ta odpowiada za zmniejszanie rozmiaru stron poprzez usuwanie komentarzy, dodatkowych spacji, zawijanie linii, zbieranie plików w jedną';
$_['doc_pagespeed_js_min_links'] = '<b>Linki do plików js</b> - ta funkcja odpowiada za połączenie plików js w jeden plik. Domyślnie zbierane są pliki z $this->document->getScripts(), więc resztę należy określić ręcznie.';
$_['doc_pagespeed_js_min_download'] = '<b>Linki do plików js do pobrania</b> - ta funkcja odpowiada za zapisanie plików js na Twój serwer po zapisaniu ustawień modułu. Jest to przydatne dla witryny, ponieważ plik będzie ładowany szybciej z własnego serwera.';
$_['doc_pagespeed_js_min_exception'] = '<b>Wyjątek kompresji Js</b> - ta funkcja odpowiada za wykluczenie plików js z łączenia w jeden plik, który jest automatycznie łączony z $this->document->getScripts(). ';
$_['doc_pagespeed_js_inline_event'] = "<b>Opóźnij ładowanie wbudowanego kodu js</b> - ta funkcja odpowiada za zawijanie wbudowanego kodu js w window.addEventListener('busCache',function() {inline code}); Ty może zawinąć w ten kod dowolny kod, którego ładowanie musi zostać opóźnione o zdarzenia określone w polu „Zdarzenia dla uruchomienia kodu js. Należy odłożyć na później skrypty zakłócające renderowanie strony: metryki, różne czaty. Zobacz poniższe przykłady prawidłowego odroczenia metryki.<br /><textarea class=\"form-control\">// wykonaj kod, jeśli odświeżanie strony przewinie się w dół
window.addEventListener('load', function() {
	if ('busCache' in window && busCache.status == false) {
		if (document.documentElement && document.documentElement.scrollTop > 0 ||  document.body.scrollTop > 0) {
			busCache.start();
		}
	}
});

// przykład podłączenia metryki, aby można było odłożyć skrypt w polu „Linki do plików js”
<!-- Google Tag Manager -->
<script async src=\"https://www.googletagmanager.com/gtm.js?id=GTM-XXXXXX&l=dataLayer\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
	window.dataLayer = window.dataLayer || [];
	window.dataLayer.push({'gtm.start':new Date().getTime(),event:'gtm.js'});
</script>
<!-- Google Tag Manager -->
<!-- Google Tag Manager -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-XXXXXX\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
	window.dataLayer = window.dataLayer || [];
	function gtag(){window.dataLayer.push(arguments);}

	gtag('js', new Date());
	gtag('config', 'UA-XXXXXXXX-X');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<!-- Yandex.Metrika -->
<script async src=\"https://mc.yandex.ru/metrika/tag.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
	//https://yandex.ru/support/metrica/code/counter-initialize.html
	window.ym = window.ym || function() {(window.ym.a = window.ym.a || []).push(arguments);};
	window.ym.l = 1*new Date();

	ym(00000000, \"init\", {
		clickmap:true,
		trackLinks:true,
		accurateTrackBounce:10
	});
</script>
<!-- Yandex.Metrika -->
<!-- Yandex.Metrika -->
<noscript><div><img src=\"https://mc.yandex.ru/watch/00000000\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
<!-- Yandex.Metrika -->

// uruchom skrypt, kiedy jest naprawdę potrzebny
if (!('owlCarousel' in $)) {
    (function($, window, document, undefined) {
        $.fn.owlCarousel = function(setting) {
            var self = this;
            return busCache.loadScript('catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js', function() {
                return $(self).owlCarousel(setting);
            });
        };
    })($, window, document);
}</textarea>";
$_['doc_pagespeed_js_inline_event_time'] = '<b>Czas przed automatycznym uruchomieniem wbudowanego kodu js</b> - ta funkcja odpowiada za ustawienie czasu opóźnienia dla określonych zdarzeń w \'Zdarzeniach uruchomienia kodu js\'.';
$_['doc_pagespeed_js_inline_transfer'] = '<b>Przenieś wbudowany kod js</b> - ta funkcja jest odpowiedzialna za';
$_['doc_pagespeed_js_inline_transfer_onrot'] = '<b>Przenieś wbudowany kod js</b> - ta funkcja jest odpowiedzialna za';
$_['doc_pagespeed_js_inline_exception'] = '<b>Wyjątek zawijania kodu Inline js</b> - za co odpowiedzialna jest ta funkcja';
$_['doc_pagespeed_js_events'] = '<b>Zdarzenia związane z uruchomieniem kodu js</b> - ta funkcja odpowiada za uruchomienie odroczonego kodu js (kod wbudowany i pliki).';
$_['doc_pagespeed_js_script'] = '<b>Skrypt</b> to pole do umieszczenia kodu js. Plik z kodem zostanie załadowany po plikach głównych.';
$_['doc_database_status'] = '<b>Tryb dostrajania</b> to stan modułu w trybie dostrajania indeksu bazy danych. Nie zapomnij wyłączyć go po pracy.';
$_['doc_database_links'] = '<b>Ciekawe linki do sprawdzenia</b> - to jest lista linków, na których moduł sprawdzi prędkość pobierania.';
$_['doc_database_tables'] = '<b>Tabele</b> - ta funkcja jest odpowiedzialna za';
$_['doc_database_indexs'] = '<b>Indeksy</b> - za tę funkcję odpowiada';
$_['doc_database_columns'] = '<b>Kolumny</b> - za tę funkcję odpowiada';
$_['doc_database_unique'] = '<b>Unikalny</b> - ta funkcja odpowiada za';
$_['doc_database_unique_elements'] = '<b>Unikalne elementy</b> - za które odpowiada ta funkcja';
$_['doc_database_packed'] = '<b>Pakowane</b> - ta funkcja jest odpowiedzialna za';
$_['doc_database_index'] = '<b>Indeks</b> - ta funkcja odpowiada za';
$_['doc_database_index_name'] = '<b>Nazwa indeksu</b> - za tę funkcję odpowiada';
$_['doc_database_index_key_block_size'] = '<b>Rozmiar bloku klucza</b> - za co odpowiada ta funkcja';
$_['doc_database_index_type'] = '<b>Typ</b> - ta funkcja jest odpowiedzialna za';
$_['doc_database_index_parser'] = '<b>Parser</b> - za tę funkcję odpowiada';
$_['doc_database_index_comment'] = '<b>Komentarz</b> - ta funkcja jest odpowiedzialna za';
$_['doc_database_column'] = '<b>Kolumna</b> - ta funkcja jest odpowiedzialna za';
$_['doc_support_update'] = 'Jeśli zakupiłeś wersję z pomocą techniczną - przy zakupie wymagane jest podanie domeny - w przeciwnym razie nie otrzymasz aktualizacji. Jeśli zakupiłeś wersję bez wsparcia technicznego, wpisz numer zamówienia w odpowiednim polu. Jeśli okaże się, że inna domena nie jest Twoja (inne informacje prawne na stronie w porównaniu z pierwszą domeną lub w ogóle nie ma danych do sprawdzenia), aktualizacja nie będzie dostępna. Jeśli kupiłeś wersję z prawem do odsprzedaży, podaj numer zamówienia i wyślij autorowi modułu gotowy kod do tworzenia kluczy na podstawie domen Twoich klientów, aby autentyczność zakupu można było zweryfikować na stronie serwer autorski (wtedy podaj swoim klientom numer zamówienia i swój klucz - zamiast numeru zamówienia możesz użyć dowolnego innego identyfikatora - należy go jednak podać zamiast domeny przy zakupie modułu). Aktualizacja nie jest dostępna dla domen testowych.';
$_['doc_support_stats_status'] = '<b>Włącz statystyki</b> - ta funkcja odpowiada za zbieranie informacji pokazujących rozmiar pamięci podręcznej w systemie/pamięci/pamięci podręcznej, rozmiar obrazu w obrazie, rozmiar sesji w systemie/pamięci/sesji oraz oc_sesja...';
$_['doc_support_disc_size_limit'] = '<b>Limit pamięci dysku</b> - ta funkcja odpowiada za ustawienie własnego limitu pamięci dla pamięci podręcznej i obrazów webp.';
$_['doc_support_disc_warning'] = '<b>Włącz ostrzeżenie o braku pamięci</b> - ta funkcja odpowiada za powiadamianie administratora o braku pamięci podczas odwiedzania strony głównej panelu administracyjnego.';
$_['doc_support_debug'] = '<b>Włącz debugowanie</b> - ta funkcja odpowiada za informowanie administratora o szybkości działania modułu po stronie serwisu.';
$_['doc_support_debug_log'] = '<b>Włącz powolne logowanie strony</b> - za co odpowiedzialna jest ta funkcja';

//Button
$_['button_files_clear'] = 'Czy chcesz również usunąć pliki modułów? - jeśli nie, wystarczy odświeżyć stronę z grzechu. Zobacz dzienniki modyfikatorów w celu uzyskania raportów o usunięciu plików.';
$_['button_add'] = 'Dodaj';
$_['button_edit'] = 'Edytuj';
$_['button_delete'] = 'Usuń';
$_['button_copy'] = 'Kopiuj';
$_['button_update'] = 'Aktualizuj';
$_['button_clear'] = 'Wyczyść';
$_['button_clear_cache'] = 'Wyczyść pamięć podręczną';
$_['button_save'] = 'Zapisz';
$_['button_apply'] = 'Zastosuj';
$_['button_apply_piecemeal'] = 'Nakładaj partiami';
$_['button_export'] = 'Eksportuj';
$_['button_import'] = 'Importuj';
$_['button_start'] = 'Rozpoczęcie pobierania';
$_['button_continue'] = 'Kontynuuj pobieranie od miejsca, w którym zostało przerwane';
$_['button_pause'] = 'Wstrzymaj pobieranie';
$_['button_restart'] = 'Rozpocznij pobieranie ponownie - zacznij od nowa';
$_['button_search'] = 'Szukaj';
$_['button_restore'] = 'Przywróć';
$_['button_view'] = 'Widok';

// Error
$_['error_permission'] = 'Nie masz wystarczających uprawnień, aby dokonać zmian!';
$_['error_warning'] = 'Sprawdź dokładnie formularz pod kątem błędów!';
$_['error_install'] = 'Coś jest nie tak!';
$_['error_uninstall'] = 'Coś jest nie tak!';
$_['error_name'] = 'Nazwa musi mieć maksymalnie 255 znaków!';
$_['error_width'] = 'Określ szerokość!';
$_['error_height'] = 'Określ wzrost!';
$_['error_max_input_vars'] = '<b>Uwaga! Limit parametru %s</b> zostanie przekroczony, po przekroczeniu dane mogą nie zostać zapisane. Zwiększ wartość na serwerze lub skontaktuj się z hostem z tą prośbą o zwiększenie limitu. Lub użyj przycisku Zastosuj części.<br>Limit serwera: %s <br>Limit modułu: %s - odcięcie %s, aby zapobiec utracie danych<br>Aktualna wartość: ';
$_['error_setting_import'] = 'Plik nie zawiera ustawień modułu, import odrzucony!';
$_['error_setting_import_format'] = 'Moduł nie wie o tym formacie, import odrzucony! - moduł delikatnie Cię wysłał.';
$_['error_not_required'] = 'Nie wymagane!';
$_['error_cache_size_limit'] = '<b>Uwaga!</b> Limit pamięci podręcznej zostanie przekroczony! Nowa pamięć podręczna będzie buforowana przez 5 minut.';
$_['error_support_disc_size_limit'] = '<b>Ostrzeżenie!</b> Przekroczono limit pamięci podręcznej! Pamięć podręczna wyłączona.';
$_['error_curl'] = '<b>Uwaga!</b> Nie zainstalowano biblioteki Curl.';
$_['error_update'] = '<b>Ostrzeżenie!</b> Aktualizacja nie powiodła się!%s';
$_['error_update_1'] = '<b>Uwaga!</b> Nie jesteś nabywcą modułu lub licencja nie została jeszcze aktywowana, aktualizacja odrzucona!';
$_['error_update_2'] = '<b>Uwaga!</b> Okres konserwacji dobiegł końca, aktualizacja odrzucona!';
$_['error_update_3'] = '<b>Uwaga!</b> Naruszyłeś umowę licencyjną, aktualizacja odrzucona!';
$_['error_update_4'] = '<b>Uwaga!</b> Używasz najnowszej wersji!';
$_['error_update_clone'] = '<b>Uwaga!</b> Wykryto fałszowanie danych, aktualizacja odrzucona!';

// Success
$_['success_install'] = ' - pomyślnie zainstalowano!';
$_['success_uninstall'] = ' - odinstalowano pomyślnie!';
$_['success_uninstall_data_base'] = '◄ Odinstalowano bazę danych ►: ';
$_['success_uninstall_modification'] = '◄ Usunięto modyfikator ►: ';
$_['success_uninstall_folder'] = '◄ Folder został usunięty, ponieważ brak plików ►: ';
$_['success_uninstall_file'] = '◄ Plik został usunięty ►: ';
$_['success_update'] = ' - aktualizacja pomyślnie!';
$_['success_setting'] = 'Ustawienia zostały pomyślnie zmienione!';
$_['success_setting_apply'] = 'Ustawienia zostały zastosowane pomyślnie!';
$_['success_setting_save'] = 'Ustawienia zostały zapisane!';
$_['success_setting_new'] = 'Nowy moduł dodano pomyślnie!';
$_['success_setting_redirect'] = 'Zostałeś przekierowany na właściwą stronę ustawień!';
$_['success_setting_import'] = 'Ustawienia modułu "%s" zostały pomyślnie zaimportowane do modułu, wystarczy je tylko zastosować!';
$_['success_add'] = 'Dodano pomyślnie!';
$_['success_delete'] = 'Usunięto pomyślnie!';
$_['success_clear'] = 'Usunięto pomyślnie!';