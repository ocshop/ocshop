<?php if (!empty($list_lang)) { ?>
<?php $key = 0; ?>
<?php foreach ($list_lang as $result) { ?>
<tr id="<?php echo $tab; ?>-lang-<?php echo $key; ?>">
  <td class="text-left" style="vertical-align: top;">
    <span style="font-size:16px">$_[<?php echo $result['name']; ?>] = </span>
    <br /><span><?php echo $text_path; ?>: <?php echo $result['path']; ?>.php</span>
    <input type="hidden" name="name" value="<?php echo $result['name']; ?>" placeholder="<?php echo $column_name; ?>" class="form-control" />
    <input type="hidden" name="path" value="<?php echo $result['path']; ?>" placeholder="" class="form-control" />
  </td>
  <td class="text-left">
<?php foreach ($languages as $language) { ?>
    <div class="input-group">
      <span class="input-group-addon"><img src="<?php echo version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png'; ?>" title="<?php echo $language['name']; ?>" /></span>
      <textarea name="value[<?php echo $language['code']; ?>]" rows="2" placeholder="<?php echo $column_value; ?>" class="form-control" style="width:95%" ><?php echo (isset($result['value'][$language['code']]) ? $result['value'][$language['code']] : '\'\''); ?></textarea>
      <!-- <pre name="value[<?php echo $language['code']; ?>]" onkeyup="document.querySelector('pre[name=\'value[<?php echo $language['code']; ?>]\']').innerHTML = highlight(this.innerHTML);" contenteditable="true" class="form-control lang-php" style="width:95%"><?php echo (isset($result['value'][$language['code']]) ? $result['value'][$language['code']] : '\'\''); ?></pre> --><span style="font-size:20px"> ;</span>
	</div>
<?php } ?>
  </td>
  <td class="text-right" style="vertical-align: top;">
    <span title="<?php echo $button_save; ?>" data-toggle="tooltip"><a class="btn btn-primary" onClick="bus_translation_editor.saveLang('<?php echo $tab; ?>', <?php echo $key; ?>);"><i class="fa fa-save"></i></a></span>
    <span title="<?php echo $button_delete; ?>" data-toggle="tooltip"><a class="btn btn-danger" onClick="bus_translation_editor.deleteLang('<?php echo $tab; ?>', <?php echo $key; ?>);"><i class="fa fa-trash-o"></i></a></span>
  </td>
</tr>
<?php $key++; ?>
<?php } ?>
<?php } else { ?>
<?php echo $header; ?>
<style type="text/css">
tbody form-control
[class*="col-"].input-group {
    float: none;
    padding-left: 15px;
    padding-right: 15px;
}
input[type="text"].input-lg {
    height: 40px !important;
}
.bus-search {
    margin-bottom: 20px;
}
.list-group-item-heading span[data-toggle="tooltip"]:after {
    font-family: FontAwesome;
    color: #1E91CF;
    content: "\f059";
    margin-left: 4px;
}
pre{
    resize: auto;
    overflow: auto;
}
</style>
<?php echo $column_left; ?>
<!-- // *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
     // *   © 2016-2024; BuslikDrev - Усе правы захаваны. -->
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" onclick="$('form input[name=\'apply\']').val('1'); $('#form-bus-translation-editor').submit();" data-toggle="tooltip" title="<?php echo $button_apply; ?>" class="btn btn-success"><i class="fa fa-save"></i></button>
        <button type="submit" form="form-bus-translation-editor" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
      </div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-catalog" data-toggle="tab"><?php echo $tab_catalog; ?></a></li>
          <li><a href="#tab-admin" data-toggle="tab"><?php echo $tab_admin; ?></a></li>
          <li><a href="#tab-setting" data-toggle="tab"><?php echo $tab_setting; ?></a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab-catalog">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="list-group" style="display: none;">
                  <div class="list-group-item">
                    <h4 class="list-group-item-heading"><?php echo $entry_store; ?></h4>
                  </div>
                  <div class="list-group-item">
                    <select name="store_id" class="form-control">
                      <option value="0"><?php echo $text_default; ?></option>
                      <?php foreach ($stores as $store) { ?>
                      <option value="<?php echo $store['store_id']; ?>"><?php echo $store['name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="list-group">
                  <div class="list-group-item">
                    <h4 class="list-group-item-heading"><span title="<?php echo $help_language_files; ?>" data-toggle="tooltip"><?php echo $entry_language_files; ?></span></h4>
                  </div>
                  <div class="bus-path"></div>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_info; ?></div>
                <div class="bus-search input-group">
                  <input type="text" name="search" value="" placeholder="<?php echo $text_search; ?>" class="form-control input-lg" />
                  <span title="<?php echo $help_search; ?>" data-toggle="tooltip" class="input-group-btn">
                    <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-search"></i> <?php echo $button_search; ?></button>
                  </span>
                </div>
                <div class="bus-search-result input-group"></div>
                <div class="bus-editor" style="display: none;">
                  <fieldset>
                    <legend><?php echo $entry_editor; ?></legend>
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <td class="text-left" width="30%"><?php echo $column_name; ?></td>
                          <td class="text-left" width="60%"><span title="<?php echo $help_value; ?>" data-toggle="tooltip"><?php echo $column_value; ?></span></td>
                          <td class="text-right"><?php echo $column_action; ?></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="no-result">
                          <td class="text-center" colspan="3"><?php echo $text_no_results; ?></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td class="text-right" colspan="3"><span title="<?php echo $button_add; ?>" data-toggle="tooltip"><a class="btn btn-success" onclick="bus_translation_editor.addLang('catalog');" ><?php echo $button_add; ?></a></span></td>
                        </tr>
                      </tfoot>
                    </table>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-admin">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="list-group" style="display: none;">
                  <div class="list-group-item">
                    <h4 class="list-group-item-heading"><?php echo $entry_store; ?></h4>
                  </div>
                  <div class="list-group-item">
                    <select name="store_id" class="form-control">
                      <option value="0"><?php echo $text_default; ?></option>
                      <?php foreach ($stores as $store) { ?>
                      <option value="<?php echo $store['store_id']; ?>"><?php echo $store['name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="list-group">
                  <div class="list-group-item">
                    <h4 class="list-group-item-heading"><span title="<?php echo $help_language_files; ?>" data-toggle="tooltip"><?php echo $entry_language_files; ?></span></h4>
                  </div>
                  <div class="bus-path"></div>
                </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_info; ?></div>
                <div class="bus-search input-group">
                  <input type="text" name="search" value="" placeholder="<?php echo $text_search; ?>" class="form-control input-lg" />
                  <span title="<?php echo $help_search; ?>" data-toggle="tooltip" class="input-group-btn">
                    <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-search"></i> <?php echo $button_search; ?></button>
                  </span>
                </div>
                <div class="bus-search-result input-group"></div>
                <div class="bus-editor" style="display: none;">
                  <fieldset>
                    <legend><?php echo $entry_editor; ?></legend>
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <td class="text-left" width="30%"><?php echo $column_name; ?></td>
                          <td class="text-left" width="60%"><span title="<?php echo $help_value; ?>" data-toggle="tooltip"><?php echo $column_value; ?></span></td>
                          <td class="text-right"><?php echo $column_action; ?></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="no-result">
                          <td class="text-center" colspan="3"><?php echo $text_no_results; ?></td>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td class="text-right" colspan="3"><span title="<?php echo $button_add; ?>" data-toggle="tooltip"><a class="btn btn-success" onclick="bus_translation_editor.addLang('admin');" ><?php echo $button_add; ?></a></span></td>
                        </tr>
                      </tfoot>
                    </table>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-setting">
            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-bus-translation-editor" class="form-horizontal">
              <input type="hidden" id="apply" name="apply" value="0">
              <legend><b><?php echo $tab_setting; ?></b></legend>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-status"><span title="<?php echo $help_status; ?>" data-toggle="tooltip"><?php echo $entry_status; ?></span></label>
                <div class="col-sm-10">
                  <select name="status" id="input-status" class="form-control">
                    <option value="1"<?php if ($status == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
                    <option value="0"<?php if (!$status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
                  </select>
                </div>
              </div>
              <legend><b><?php echo $tab_support; ?></b></legend>
              <div class="text-center">
                <b><?php //echo $text_author; ?><br /><?php echo $text_corp; ?></b>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
var bus_translation_editor = {
	// добавление языковой переменной
	'addLang':function(tab, data) {
		var lang_row = $('#tab-' + tab + ' .bus-editor tbody tr:not(.no-result)').length;

		if (lang_row == 0) {
			$('#tab-' + tab + ' .bus-editor tbody tr.no-result').remove();
		}

		if (typeof data == 'undefined') {
			data = {
				'path': (lang_row ? $('#' + tab + '-lang-' + (lang_row-1) + ' input[name="path"]').val() : ''),
				'name':'',
				'value':{}
			};
		}

		html = '<tr id="' + tab + '-lang-' + lang_row + '">';
		html += '  <td class="text-left" style="vertical-align: top;">';
		if (!data['name']) {
			html += '    <span style="font-size:16px">$_[</span><input type="text" name="name" value="\'' + data['name'] + '\'" placeholder="<?php echo $column_name; ?>" class="form-control" style="display:initial;width:75%" /><span style="font-size:20px">] = </span>';
		} else {
			html += '    <span style="font-size:16px">$_[' + data['name'] + '] = </span>';
			html += '    <input type="hidden" name="name" value="' + data['name'] + '" placeholder="<?php echo $column_name; ?>" class="form-control" />';
		}
		html += '    <br /><span><?php echo $text_path; ?>: ' + data['path'] + '.php</span>';
		html += '    <input type="hidden" name="path" value="' + data['path'] + '" placeholder="" class="form-control" />';
		html += '  </td>';
		html += '  <td class="text-left">';
<?php foreach ($languages as $language) { ?>
		html += '      <div class="input-group">';
		html += '        <span class="input-group-addon"><img src="<?php echo version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png'; ?>" title="<?php echo $language['name']; ?>" /></span>';
		html += '        <textarea name="value[<?php echo $language['code']; ?>]" rows="2" placeholder="<?php echo $column_value; ?>" class="form-control" style="display:initial;width:95%" >' + (typeof data['value']['<?php echo $language['code']; ?>'] != 'undefined' ? data['value']['<?php echo $language['code']; ?>'] : '\'\'') + '</textarea><span style="font-size:20px"> ;</span>';
		html += '      </div>';
<?php } ?>
		html += '  </td>';
		html += '  <td class="text-right" style="vertical-align: top;">';
		html += '    <span title="<?php echo $button_save; ?>" data-toggle="tooltip"><a class="btn btn-primary" onClick="bus_translation_editor.saveLang(\'' + tab + '\', ' + lang_row + ');"><i class="fa fa-save"></i></a></span>';
		html += '    <span title="<?php echo $button_delete; ?>" data-toggle="tooltip"><a class="btn btn-danger" onClick="bus_translation_editor.deleteLang(\'' + tab + '\', ' + lang_row + ');"><i class="fa fa-trash-o"></i></a></span>';
		html += '  </td>';
		html += '</tr>';

		$('#tab-' + tab + ' .bus-editor tbody').append(html);
	},
	'deleteLang':function(tab, lang_row) {
		if (confirm('<?php echo $text_confirm; ?>')) {
			var form = document.querySelectorAll('#' + tab + '-lang-' + lang_row + ' input, #' + tab + '-lang-' + lang_row + ' select, #' + tab + '-lang-' + lang_row + ' textarea');
			var data = new FormData();
			for (var i = 0; i < form.length; i++) {
				if (form[i] && form[i].getAttribute('disabled') != true) {
					data.append(form[i].name, form[i].value);
				}
			}

			var node = $('#' + tab + '-lang-' + lang_row + ' .btn-danger');

			$.ajax({
				url: 'index.php?route=<?php echo $module_path; ?>/delete&<?php echo $token; ?>&tab=' + tab + '&store_id=' + $('.tab-content .active select[name="store_id"]').val(),
				type: 'POST',
				dataType: 'json',
				cache : false,
				data: data,
				processData: false,
				contentType: false,
				beforeSend: function() {
					//$(node).button('loading').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
				},
				complete: function() {
					//$(node).button('reset');
				},
				success: function(json) {
					$('.alert-dismissible').remove();

					if (json['error']) {
						var button = $(node).html();
						$(node).removeClass('btn-danger').addClass('btn-danger').html('<i class="fa fa-times fa-xmark fa-solid"></i>');
						setTimeout(function() {
							$(node).removeClass('btn-danger').addClass('btn-danger').html(button);
						}, 1000);
						$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
					}

					if (json['success']) {
						var button = $(node).html();
						$(node).removeClass('btn-danger').addClass('btn-success').html('<i class="fa fa-check fa-solid"></i>');
						setTimeout(function() {
							$('#' + tab + '-lang-' + lang_row).remove();
						}, 1000);
						$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	},
	'saveLang':function(tab, lang_row) {
		var form = document.querySelectorAll('#' + tab + '-lang-' + lang_row + ' input, #' + tab + '-lang-' + lang_row + ' select, #' + tab + '-lang-' + lang_row + ' textarea');
		var data = new FormData();
		for (var i = 0; i < form.length; i++) {
			if (form[i] && form[i].getAttribute('disabled') != true) {
				data.append(form[i].name, form[i].value);
			}
		}

		var node = $('#' + tab + '-lang-' + lang_row + ' .btn-primary');

		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?>/save&<?php echo $token; ?>&tab=' + tab + '&store_id=' + $('.tab-content .active select[name="store_id"]').val(),
			type: 'POST',
			dataType: 'json',
			cache : false,
			data: data,
			processData: false,
			contentType: false,
			beforeSend: function() {
				//$(node).button('loading').html('<i class="fa fa-circle-o-notch fa-spin"></i>');
			},
			complete: function() {
				//$(node).button('reset');
			},
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['error']) {
					var button = $(node).html();
					$(node).removeClass('btn-primary').addClass('btn-danger').html('<i class="fa fa-times fa-xmark fa-solid"></i>');
					setTimeout(function() {
						$(node).removeClass('btn-danger').addClass('btn-primary').html(button);
					}, 1000);
					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}

				if (json['success']) {
					var button = $(node).html();
					$(node).removeClass('btn-primary').addClass('btn-success').html('<i class="fa fa-check fa-solid"></i>');
					setTimeout(function() {
						$(node).removeClass('btn-success').addClass('btn-primary').html(button);
					}, 1000);
					$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'loadPath':function(tab) {
		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?>/path&<?php echo $token; ?>&tab=' + tab + '&store_id=' + $('#tab-' + tab + ' select[name="store_id"]').val(),
			dataType: 'json',
			beforeSend: function() {
				$('#tab-' + tab + ' select[name="store_id"]').prop('disabled', true);
			},
			complete: function() {
				$('#tab-' + tab + ' select[name="store_id"]').prop('disabled', false);
			},
			success: function(json) {
				html = '';

				if (json['directory']) {
					for (i = 0; i < json['directory'].length; i++) {
						html += '<span><a href="' + json['directory'][i]['path'] + '" class="list-group-item directory">' + json['directory'][i]['name'] + ' <i class="fa fa-arrow-right fa-fw pull-right"></i></a></span>';
					}
				}

				if (json['file']) {
					for (i = 0; i < json['file'].length; i++) {
						html += '<span><a href="' + json['file'][i]['path'] + '" class="list-group-item file" style="width:90%;float:right">' + json['file'][i]['name'] + ' <i class="fa fa-arrow-right fa-fw pull-right"></i></a><button onclick="bus_translation_editor.restoreFile(\'' + tab + '\', this, \'' + json['file'][i]['path'] + '\');" title="<?php echo $button_restore; ?>" class="btn btn-success" style="width:10%;padding:10px 0;"><i class="fa fa-magic"></i></button></span>';
					}
				}

				$('#tab-' + tab + ' .bus-path').html(html);
				$('#tab-' + tab + ' .bus-editor tfoot tr').show();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'loadDirectory':function(tab, node) {
		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?>/path&<?php echo $token; ?>&tab=' + tab + '&store_id=' + $('#tab-' + tab + '  select[name="store_id"]').val() + '&path=' + $(node).attr('href'),
			dataType: 'json',
			beforeSend: function() {
				$(node).find('i').removeClass('fa-arrow-right');
				$(node).find('i').addClass('fa-circle-o-notch fa-spin');
			},
			complete: function() {
				$(node).find('i').removeClass('fa-circle-o-notch fa-spin');
				$(node).find('i').addClass('fa-arrow-right');
			},
			success: function(json) {
				html = '';

				if (json['directory']) {
					for (i = 0; i < json['directory'].length; i++) {
						html += '<span><a href="' + json['directory'][i]['path'] + '" class="list-group-item directory">' + json['directory'][i]['name'] + ' <i class="fa fa-arrow-right fa-fw pull-right"></i></a></span>';
					}
				}

				if (json['file']) {
					for (i = 0; i < json['file'].length; i++) {
						html += '<span><a href="' + json['file'][i]['path'] + '" class="list-group-item file" style="width:90%;float:right">' + json['file'][i]['name'] + ' <i class="fa fa-arrow-right fa-fw pull-right"></i></a><button onclick="bus_translation_editor.restoreFile(\'' + tab + '\', this, \'' + json['file'][i]['path'] + '\');" title="<?php echo $button_restore; ?>" class="btn btn-success" style="width:10%;padding:10px 0;"><i class="fa fa-magic"></i></button></span>';
					}
				}

				if (json['back']) {
					html += '<a href="' + json['back']['path'] + '" class="list-group-item directory"><?php echo $text_back; ?> <i class="fa fa-arrow-left fa-fw pull-right"></i></a>';
				}

				$('#tab-' + tab + ' .bus-path').html(html);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'loadFile':function(tab, node) {
		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?>/langfile&<?php echo $token; ?>&tab=' + tab + '&store_id=' + $('select[name="store_id"]').val() + '&path=' + $(node).attr('href'),
			dataType: 'json',
			beforeSend: function() {
				$(node).find('i').removeClass('fa-arrow-right');
				$(node).find('i').addClass('fa-circle-o-notch fa-spin');
			},
			complete: function() {
				$(node).find('i').removeClass('fa-circle-o-notch fa-spin');
				$(node).find('i').addClass('fa-arrow-right');
			},
			success: function(json) {
				if (json['success']) {
					$('#tab-' + tab + ' .bus-search-result').hide();
					$('#tab-' + tab + ' .bus-editor').show(1);
					$('#tab-' + tab + ' .bus-editor tbody').remove();
					$('#tab-' + tab + ' .bus-editor thead').after('<tbody></tbody>');
					$('#tab-' + tab + ' .bus-editor tfoot tr').show(1);
					for (var i in json['success']) {
						bus_translation_editor.addLang(tab, json['success'][i]);
					}
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'restoreFile':function(tab, node, path) {
		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?>/restore&<?php echo $token; ?>&tab=' + tab + '&store_id=' + $('select[name="store_id"]').val() + '&path=' + path,
			dataType: 'json',
			beforeSend: function() {
				$(node).find('i').removeClass('fa-magic');
				$(node).find('i').addClass('fa-circle-o-notch fa-spin');
			},
			complete: function() {
				$(node).find('i').removeClass('fa-circle-o-notch fa-spin');
				$(node).find('i').addClass('fa-magic');
			},
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['error']) {
					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}

				if (json['success']) {
					$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'search':function(tab) {
		var start = new Date().getTime();
		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?>/search&<?php echo $token; ?>&tab=' + tab + '&store_id=' + $('select[name="store_id"]').val() + '&search=' + $('#tab-' + tab + ' input[name="search"]').val(),
			dataType: 'json',
			beforeSend: function() {
				$('#tab-' + tab + ' .bus-search button').button('loading2').html('<i class="fa fa-circle-o-notch fa-spin"></i> <?php echo $text_search; ?>');
			},
			complete: function() {
				//$('#tab-' + tab + ' .bus-search button').button('reset');
			},
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['error']) {
					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}

				if (json['success']) {
					$('#tab-' + tab + ' .bus-editor').show(1);
					$('#tab-' + tab + ' .bus-editor tbody').remove();
					$('#tab-' + tab + ' .bus-editor thead').after('<tbody></tbody>');
					$('#tab-' + tab + ' .bus-editor tfoot tr').hide();

					if (json['type']) {
						$('#tab-' + tab + ' .bus-editor tbody').append(json['success']);
					} else {
						for (var i in json['success']) {
							bus_translation_editor.addLang(tab, json['success'][i]);
						}
					}
				}

				if (json['results']) {
					html = json['results']['time_php'] + '<br />';
					html += json['results']['time_js'].replace('{time}', (new Date().getTime() - start)/1000) + '<br />';
					html += json['results']['total'] + '<br />';
					html += json['results']['count'] + '<br />';
					html += json['results']['count_result'] + '<br />';
					$('#tab-' + tab + ' .bus-search-result').show(1).html(html);
				}

				$('#tab-' + tab + ' .bus-search button').button('reset');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
};

// сохранение языковой переменной
/* $('#tab-catalog .bus-path').on('click', '.btn-success', function(e) {
	e.preventDefault();

	bus_translation_editor.saveLang('catalog');
});

$('#tab-admin .bus-path').on('click', '.btn-success', function(e) {
	e.preventDefault();

	bus_translation_editor.saveLang('admin');
}); */

// добавление языковой переменной
/* $('#tab-catalog .bus-path').on('click', '.btn-danger', function(e) {
	e.preventDefault();
	bus_translation_editor.deleteLang('catalog');
});

$('#tab-admin .bus-path').on('click', '.btn-danger', function(e) {
	e.preventDefault();
	bus_translation_editor.deleteLang('admin');
}); */

// сохранение языковой переменной
/* $('#tab-catalog .bus-path').on('click', '.btn-primary', function(e) {
	e.preventDefault();

	var node = this;

	bus_translation_editor.saveLang('catalog', node);
});

$('#tab-admin .bus-path').on('click', '.btn-primary', function(e) {
	e.preventDefault();

	var node = this;

	bus_translation_editor.saveLang('admin', node);
}); */

// загрузка списка папок и файлов
$('#tab-catalog select[name="store_id"]').on('change', function(e) {
	bus_translation_editor.loadPath('catalog');
});

$('#tab-catalog select[name="store_id"]').trigger('change');

$('#tab-admin select[name="store_id"]').on('change', function(e) {
	bus_translation_editor.loadPath('admin');
});

$('#tab-admin select[name="store_id"]').trigger('change');

// навигация по папкам
$('#tab-catalog .bus-path').on('click', 'a.directory', function(e) {
	e.preventDefault();

	var node = this;

	bus_translation_editor.loadDirectory('catalog', node);
});

$('#tab-admin .bus-path').on('click', 'a.directory', function(e) {
	e.preventDefault();

	var node = this;

	bus_translation_editor.loadDirectory('admin', node);
});

// массовая загрузка языковых перемен
$('#tab-catalog .bus-path').on('click', 'a.file', function(e) {
	e.preventDefault();

	var node = this;

	bus_translation_editor.loadFile('catalog', node);
});

$('#tab-admin .bus-path').on('click', 'a.file', function(e) {
	e.preventDefault();

	var node = this;

	bus_translation_editor.loadFile('admin', node);
});

// поиск
var search = $('#tab-catalog .bus-search');
search.on('click', 'button', function(e) {
	e.preventDefault();

	bus_translation_editor.search('catalog', this);
});

search.on('keydown', 'input', function(e) {
	if (e.keyCode == 13) {
		$('#tab-catalog .bus-search').find('button').trigger('click');
	}
});

search = $('#tab-admin .bus-search');
search.on('click', 'button', function(e) {
	e.preventDefault();

	bus_translation_editor.search('admin', this);
});

search.on('keydown', 'input', function(e) {
	if (e.keyCode == 13) {
		$('#tab-admin .bus-search').find('button').trigger('click');
	}
});

/* $('.bus-editor textarea').on('keyup', function(e) {
	sh_highlightDocument();
}); */
//--></script>
<script type="text/javascript"><!--
window.addEventListener('load', function() {
	const states = {
		NONE           : 0,
		SINGLE_QUOTE   : 1, // 'string'
		DOUBLE_QUOTE   : 2, // "string"
		ML_QUOTE       : 3, // `string`
		REGEX_LITERAL  : 4, // /regex/
		SL_COMMENT     : 5, // // single line comment
		ML_COMMENT     : 6, // /* multiline comment */
		NUMBER_LITERAL : 7, // 123
		KEYWORD        : 8, // function, var etc.
		SPECIAL        : 9  // null, true etc.
	};

	const colors = {
		NONE           : '#000',
		SINGLE_QUOTE   : '#f00', // 'string'
		DOUBLE_QUOTE   : '#f00', // "string"
		ML_QUOTE       : '#f00', // `string`
		REGEX_LITERAL  : '#707', // /regex/
		SL_COMMENT     : '#0a0', // // single line comment
		ML_COMMENT     : '#0a0', // /* multiline comment */
		NUMBER_LITERAL : '#a00', // 123
		KEYWORD        : '#00a', // function, var etc.
		SPECIAL        : '#055'  // null, true etc.
	};

	const keywords = ('async|await|break|case|class|const|continue|debugger|default|delete|do|else|enum|export|extends|for|from|function|' +
			'get|if|implements|import|in|instanceof|interface|let|new|of|package|private|protected|public|return|set|static|super|' +
			'switch|throw|try|typeof|var|void|while|with|yield|catch|finally').split('|');
	const specials = 'this|null|true|false|undefined|NaN|Infinity'.split('|');

	function isAlphaNumericChar(char) {
		return char && /[0-9a-z_\$]/i.test(char);
	}

	function highlight(code) {
		let output = '';
		let state = states.NONE;
		for (let i = 0; i < code.length; i++) {
			let char = code[i], prev = code[i-1], next = code[i+1];

			if (state == states.NONE && char == '/' && next == '/') {
				state = states.SL_COMMENT;
				output += '<span style="color: ' + colors.SL_COMMENT + '">' + char;
				continue;
			}
			if (state == states.SL_COMMENT && char == '\n') {
				state = states.NONE;
				output += char + '</span>';
				continue;
			}

			if (state == states.NONE && char == '/' && next == '*') {
				state = states.ML_COMMENT;
				output += '<span style="color: ' + colors.ML_COMMENT + '">' + char;
				continue;
			}
			if (state == states.ML_COMMENT && char == '/' && prev == '*') {
				state = states.NONE;
				output += char + '</span>';
				continue;
			}

			const closingCharNotEscaped = prev != '\\' || prev == '\\' && code[i-2] == '\\';
			if (state == states.NONE && char == '\'') {
				state = states.SINGLE_QUOTE;
				output += '<span style="color: ' + colors.SINGLE_QUOTE + '">' + char;
				continue;
			}
			if (state == states.SINGLE_QUOTE && char == '\'' && closingCharNotEscaped) {
				state = states.NONE;
				output += char + '</span>';
				continue;
			}

			if (state == states.NONE && char == '"') {
				state = states.DOUBLE_QUOTE;
				output += '<span style="color: ' + colors.DOUBLE_QUOTE + '">' + char;
				continue;
			}
			if (state == states.DOUBLE_QUOTE && char == '"' && closingCharNotEscaped) {
				state = states.NONE;
				output += char + '</span>';
				continue;
			}

			if (state == states.NONE && char == '`') {
				state = states.ML_QUOTE;
				output += '<span style="color: ' + colors.ML_QUOTE + '">' + char;
				continue;
			}
			if (state == states.ML_QUOTE && char == '`' && closingCharNotEscaped) {
				state = states.NONE;
				output += char + '</span>';
				continue;
			}

			if (state == states.NONE && char == '/') {
				let word = '', j = 0, isRegex = true;
				while (i + j >= 0) {
					j--;
					if ('+/-*=|&<>%,({[?:;'.indexOf(code[i+j]) != -1) break;
					if (!isAlphaNumericChar(code[i+j]) && word.length > 0) break;
					if (isAlphaNumericChar(code[i+j])) word = code[i+j] + word;
					if (')]}'.indexOf(code[i+j]) != -1) {
						isRegex = false;
						break;
					}
				}
				if (word.length > 0 && !keywords.includes(word)) isRegex = false;
				if (isRegex) {
					state = states.REGEX_LITERAL;
					output += '<span style="color: ' + colors.REGEX_LITERAL + '">' + char;
					continue;
				}
			}
			if (state == states.REGEX_LITERAL && char == '/' && closingCharNotEscaped) {
				state = states.NONE;
				output += char + '</span>';
				continue;
			}

			if (state == states.NONE && /[0-9]/.test(char) && !isAlphaNumericChar(prev)) {
				state = states.NUMBER_LITERAL;
				output += '<span style="color: ' + colors.NUMBER_LITERAL + '">' + char;
				continue;
			}
			if (state == states.NUMBER_LITERAL && !isAlphaNumericChar(char)) {
				state = states.NONE;
				output += '</span>'
			}

			if (state == states.NONE && !isAlphaNumericChar(prev)) {
				let word = '', j = 0;
				while (code[i + j] && isAlphaNumericChar(code[i + j])) {
					word += code[i + j];
					j++;
				}
				if (keywords.includes(word)) {
					state = states.KEYWORD;
					output += '<span style="color: ' + colors.KEYWORD + '">';
				}
				if (specials.includes(word)) {
					state = states.SPECIAL;
					output += '<span style="color: ' + colors.SPECIAL + '">';
				}
			}
			if ((state == states.KEYWORD || state == states.SPECIAL) && !isAlphaNumericChar(char)) {
				state = states.NONE;
				output += '</span>';
			}

			if (state == states.NONE && '+-/*=&|%!<>?:'.indexOf(char) != -1) {
				output += '<span style="color: #07f">' + char + '</span>';
				continue;
			}

			output += char.replace('<', '&lt;');
		}

		return output.replace(/\n/gm, '<br>').replace(/\t/g, new Array(8).join('&nbsp;')).replace(/^\s+|\s{2,}/g, (a) => new Array(a.length+1).join('&nbsp;'));
	}

	window.highlight = highlight;
});
//--></script>
<!-- // *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
     // *   © 2016-2024; BuslikDrev - Усе правы захаваны. -->
<?php echo $footer; ?>
<?php } ?>