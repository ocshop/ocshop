<?php if (isset($database_indexs)) { ?>
                <table id="database-tables" class="table table-bordered">
                  <thead>
                    <tr>
                      <td class="text-left text-start"><?php echo $entry_database_tables; ?>: <?php echo $entry_database_columns; ?> </td>
                      <td class="text-left text-start"><?php echo $entry_database_indexs; ?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($database_indexs as $result) { ?>
                    <tr id="attribute-row-<?php echo $result['tabl']; ?>">
                      <td class="text-left text-start table-striped" style="width:50px;">
                        <b><?php echo $result['tabl']; ?>:</b>
						<?php foreach ($result['columns'] as $column) { ?>
						<br><?php echo $column['COLUMN_NAME']; ?>
						<?php } ?>
                      </td>
                      <td class="text-left text-start">

                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <td class="text-left text-start"><?php echo $entry_database_index_name; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_index_type; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_unique; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_packed; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_columns; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_unique_elements; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_index_comment; ?></td>
                              <td class="text-left text-start"></td>
                            </tr>
                          </thead>
                          <tbody>
                            <?php //var_dump($result['indexs']); ?>
                            <?php foreach ($result['indexs'] as $index) { ?>
                            <tr id="attribute-row-0">
                              <td class="text-left text-start table-striped">
                              <?php echo $index['Key_name']; ?>
                              </td>
                              <td class="text-left text-start table-striped">
                              <?php echo $index['Index_type']; ?>
                              </td>
                              <td class="text-left text-start table-striped">
                              <?php if ($index['Non_unique']) { ?><?php echo $text_no; ?><?php } else { ?><?php echo $text_yes; ?><?php } ?>
                              </td>
                              <td class="text-left text-start table-striped">
                              <?php if (!$index['Packed']) { ?><?php echo $text_no; ?><?php } else { ?><?php echo $text_yes; ?><?php } ?>
                              </td>
                              <td class="text-left text-start table-striped">
                              <?php echo $index['Column_name']; ?>
                              </td>
                              <td class="text-left text-start table-striped">
                              <?php echo $index['Cardinality']; ?>
                              </td>
                              <td class="text-left text-start table-striped">
                              <?php echo $index['Index_comment']; ?>
                              </td>
                              <td class="text-left text-start table-striped" style="width:74px;">
                              <button type="button" onclick="" data-bs-toggle="tooltip" title="<?php echo $button_edit; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil fa-pencil-alt"></i></button>
                              <button type="button" onclick="" data-bs-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger btn-sm"><i class="fa fa-minus-circle"></i></button>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <td class="text-left text-start"><?php echo $entry_database_index_name; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_index_type; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_index; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_index_key_block_size; ?></td>
                              <td class="text-left text-start"><span title="<?php echo $help_database_columns; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_database_columns; ?></span></td>
                              <td class="text-left text-start"><?php echo $entry_database_index_parser; ?></td>
                              <td class="text-left text-start"><?php echo $entry_database_index_comment; ?></td>
                              <td class="text-left text-start"></td>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <!-- <td class="text-left text-start">
                                <div class="input-group">
                                  <input type="number" value="" placeholder="<?php echo $entry_database_indexs; ?>" id="input-database-indexs" class="form-control input-sm" />
                                  <div class="input-group-btn">
                                    <button type="button" onclick="$('#attribute-row-0').remove();" data-bs-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>
                                  </div>
                                </div>
                              </td> -->
                              <td class="text-left text-start">
                                <div class="input-group">
                                  <input type="text" value="" placeholder="<?php echo $entry_database_index_name; ?>" id="input-database-index-name" class="form-control input-sm" />
                                </div>
                              </td>
                              <td class="text-left text-start">
                                <div class="input-group">
                                  <select id="input-database-index-type" class="form-control form-select">
                                    <option value="BTREE"<?php if ($database_index_type == 'BTREE') { ?> selected="selected"<?php } ?>>BTREE</option>
                                    <option value="HASH"<?php if ($database_index_type == 'HASH') { ?> selected="selected"<?php } ?>>HASH</option>
                                  </select>
                                </div>
                              </td>
                              <td class="text-left text-start">
                                <div class="input-group">
                                  <select id="input-database-index" class="form-control form-select">
                                    <option value="INDEX"<?php if ($database_index == 'INDEX') { ?> selected="selected"<?php } ?>>INDEX</option>
                                    <option value="PRIMARY"<?php if ($database_index == 'PRIMARY') { ?> selected="selected"<?php } ?>>PRIMARY</option>
                                    <option value="UNIQUE"<?php if ($database_index == 'UNIQUE') { ?> selected="selected"<?php } ?>>UNIQUE</option>
                                    <option value="SPATIAL"<?php if ($database_index == 'SPATIAL') { ?> selected="selected"<?php } ?>>SPATIAL</option>
                                    <option value="FULLTEXT"<?php if ($database_index == 'FULLTEXT') { ?> selected="selected"<?php } ?>>FULLTEXT</option>
                                  </select>
                                </div>
                              </td>
                              <td class="text-left text-start">
                                <div class="input-group">
                                  <input type="text" value="" placeholder="<?php echo $entry_database_index_key_block_size; ?>" id="input-database-index-key-block-size" class="form-control input-sm" />
                                </div>
                              </td>
                              <td class="text-left text-start">
                                <div class="input-group">
                                  <textarea placeholder="<?php echo $entry_database_columns; ?>" id="input-database-index-columns" class="form-control"></textarea>
                                </div>
                              </td>
                              <td class="text-left text-start">
                                <div class="input-group">
                                  <input type="text" value="" placeholder="<?php echo $entry_database_index_parser; ?>" id="input-database-index-parser" class="form-control input-sm" />
                                </div>
                              </td>
                              <td class="text-left text-start">
                                <div class="input-group">
                                  <textarea placeholder="<?php echo $entry_database_index_comment; ?>" id="input-database-index-comment" class="form-control"></textarea>
                                </div>
                              </td>
                              <td class="text-end"><button type="button" id="button-attribute" data-bs-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary  btn-sm" data-bs-original-title="Add Attribute" aria-label="Add Attribute"><i class="fa fa-plus-circle"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>

                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
<?php } else { ?>
<?php echo $header; ?>
<style type="text/css">
#form-bus-app option:disabled {color:rgb(200 200 200);}
.tooltip {font-size:12px;}
.tooltip-inner {max-width:300px;padding:3px 8px;color:#fff;text-align:center;background-color:#000;border-radius:3px;}
.scroll-top-wrapper {position:fixed;opacity:0;text-align:center;z-index:9998;background-color:#777;color:#fefefe;width:40px;height:40px;line-height:40px;right:10px;bottom:30px;border-radius:4px;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;}
.scroll-top-wrapper i.fa {line-height:inherit;font-size:18px;}
.scroll-top-wrapper.show {cursor:pointer;opacity:0.6;right:15px;bottom:80px;}
.loading{position:relative;width:100%;height:200px;text-align:center;margin-top:15%;z-index:1}
.loading svg{width:50px;height:50px}
.loading svg .gear-one, .loading svg .gear-two{-webkit-animation:spin-me-right-round-baby 4s infinite linear forwards;animation:spin-me-right-round-baby 4s infinite linear forwards;-webkit-animation-play-state:running;animation-play-state:running}
.loading svg .gear-one{-webkit-transform-origin:33.505px 67.195px 0;transform-origin:33.505px 67.195px 0}
.loading svg .gear-two{-webkit-transform-origin:69.35px 29.93px 0;transform-origin:69.35px 29.93px 0;animation-direction:reverse}
.loading svg:hover .gear-one, .loading svg:hover .gear-two{-webkit-animation-play-state:paused;animation-play-state:paused}
@-webkit-keyframes spin-me-right-round-baby {to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
@keyframes spin-me-right-round-baby {to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
span[data-toggle="tooltip"]:after {font-family:'Font Awesome 5 Free';color:#1E91CF;content:"\f059";margin-left:4px}
input.form-control:read-only,
select.form-control:read-only {background-color: #ffffff}
button.close{padding:0;background:transparent;border:0;-webkit-appearance:none}
.close {float:right;font-size:18px;font-weight:bold;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:0.2;filter:alpha(opacity=20)}
.close:hover,
.close:focus{color:#000;text-decoration:none;cursor:pointer;opacity:0.5;filter:alpha(opacity=50)}
textarea{tab-size:4;-o-tab-size:4;-moz-tab-size:4;white-space:nowrap}
.form-control{color:#000000}
.form-group>div{padding-left:15px;padding-right:15px}
.table > :not(caption) > * > *{padding: 0 5px}
.table thead > tr > td, .table tbody > tr > td{vertical-align:top}
.modal-dialog{max-width:100%;padding:30px;margin:0}
.modal-header{display:block}
</style>
<?php echo $column_left; ?>
<!-- // *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
     // *   © 2016-2024; BuslikDrev - Усе правы захаваны. -->
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right float-end">
        <button type="button" onclick="window.location.href = '<?php echo $clear; ?>&caches=1';" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> HTML, DATA (<?php echo $support_cache_size; ?>)" class="btn btn-default btn-outline-primary" style="margin-bottom:10px;"><i class="fa fa-eraser"></i></button>
        <?php if (version_compare(VERSION, '3.0.0.0', '>=')) { ?>
        <button type="button" onclick="window.location.href = '<?php echo $clear; ?>&twig=1';" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> TWIG" class="btn btn-default btn-outline-primary" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-brands fa-html5"></i></button>
        <?php } ?>
        <button type="button" onclick="confirm('<?php echo $text_confirm; ?>') ? window.location.href = '<?php echo $clear; ?>&minify=1' : false;" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> HTML, DATA + CSS, JS (<?php echo $support_cache_minify_size; ?>)" class="btn btn-warning" style="margin-bottom:10px;"><i class="fa fa-eraser"></i></button>
        <button type="button" onclick="confirm('<?php echo $text_confirm; ?>') ? window.location.href = '<?php echo $clear; ?>&images=1' : false;" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> HTML, DATA + IMAGES (<?php echo $support_image_cache_size; ?>)" class="btn btn-info" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-picture-o fa-image"></i></button>
        <button type="button" onclick="window.location.href = '<?php echo $clear; ?>&logs=1';" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> LOGS" class="btn btn-danger" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-exclamation-triangle"></i></button>
        <button type="button" onclick="window.location.href = '<?php echo $clear; ?>&modifications=1';" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> HTML, DATA + UPDATE MODIFICATIONS, EVENTS" class="btn btn-warning" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-refresh fa-sync"></i></button>
        <button type="button" onclick="confirm('<?php echo $text_confirm; ?>') ? window.location.href = '<?php echo $clear; ?>&view_products=1' : false;" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> VIEW PRDOCUTS" class="btn btn-primary" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-eye"></i></button>
        <button type="button" onclick="confirm('<?php echo $text_confirm; ?>') ? window.location.href = '<?php echo $clear; ?>&customer_search=1' : false;" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> CUSTOMER SEARCH QUERY" class="btn btn-default btn-outline-primary" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-search"></i></button>
        <?php if ($clear_blog_search) { ?>
        <button type="button" onclick="confirm('<?php echo $text_confirm; ?>') ? window.location.href = '<?php echo $clear; ?>&customer_blog_search=1' : false;" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> CUSTOMER BLOG SEARCH QUERY" class="btn btn-default btn-outline-primary" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-search"></i></button>
        <?php } ?>
        <button type="button" onclick="confirm('<?php echo $text_confirm; ?>') ? window.location.href = '<?php echo $clear; ?>&customer_activity=1' : false;" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> CUSTOMER AND AFFILIATE ACTIVITY" class="btn btn-default btn-outline-primary" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-trophy"></i></button>
        <button type="button" onclick="confirm('<?php echo $text_confirm; ?>') ? window.location.href = '<?php echo $clear; ?>&customer_session=1' : false;" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> CUSTOMER AND API SESSION (file <?php echo $support_session_size; ?> or DB <?php echo $support_session_db_size; ?>)" class="btn btn-danger" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-unlock"></i></button>
        <button type="button" onclick="confirm('<?php echo $text_confirm; ?>') ? window.location.href = '<?php echo $clear; ?>&cart_session=1' : false;" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> GUEST CART SESSION (<?php echo $support_session_cart_size; ?>)" class="btn btn-primary" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-shopping-cart"></i></button>
        <?php if ($clear_pwa) { ?>
        <button type="button" onclick="window.location.href = '<?php echo $clear_pwa; ?>';" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> PWA" class="btn btn-primary" style="margin-bottom:10px;background-color:#570fc2;"><i class="fa fa-eraser"></i> <i class="fa fa-chrome"></i></button>
        <?php } ?>
        <button type="button" onclick="$('form input[name=\'apply\']').val('1'); $('#form-bus-app').submit();" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_clear; ?> HTML, DATA + <?php echo $button_apply; ?> <?php echo $tab_setting; ?>" class="btn btn-default btn-outline-primary" style="margin-bottom:10px;"><i class="fa fa-eraser"></i> <i class="fa fa-save"></i></button>
        <button type="button" onclick="$('form input[name=\'apply\']').val('2'); $('#form-bus-app').submit();" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_apply; ?> <?php echo $tab_setting; ?>" class="btn btn-success" style="margin-bottom:10px;"><i class="fa fa-save"></i></button>
        <button type="submit" form="form-bus-app" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_save; ?> <?php echo $tab_setting; ?>" class="btn btn-primary" style="margin-bottom:10px;"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true" title="<?php echo $button_cancel; ?>" class="btn btn-default btn-outline-primary" style="margin-bottom:10px;"><i class="fa fa-reply"></i></a>
      </div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li class="breadcrumb-item"><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error) { ?>
    <div class="alert alert-danger">
      <i class="fa fa-exclamation-circle"></i> <?php echo $error; ?> <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php if ($success) { ?>
    <div class="alert alert-success">
      <i class="fa fa-check-circle"></i> <?php echo $success; ?> <button type="button" class="btn-close close" data-dismiss="alert" data-bs-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="well loading-block" style="display: none;">
      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated active" style="width: 0%;"></div>
      </div>
      <div class="text-right text"></div>
    </div>
    <div class="panel panel-default card">
      <div class="panel-heading card-header">
        <h3 class="panel-title card-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body card-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-bus-app" class="form-horizontal">
          <input type="hidden" id="apply" name="apply" value="0">
          <legend><b><?php echo $tab_setting; ?></b></legend>
          <div class="form-group row mb-3">
            <label class="col-sm-2 control-label col-form-label" for="input-status"><span title="<?php echo $help_status; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_status; ?></span></label>
            <div class="col-sm-10">
              <select name="status" id="input-status" class="form-control form-select">
                <option value="1"<?php if ($status == 1) { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
                <option value="0"<?php if (!$status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
              </select>
            </div>
          </div>
          <div class="form-group row mb-3">
            <label class="col-sm-2 control-label col-form-label"><span title="<?php echo $help_store; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_store; ?></span></label>
            <div class="col-sm-10">
              <div class="well well-sm form-control" style="height: 150px; overflow: auto;">
                <div class="checkbox">
                  <label>
                    <?php if (in_array(0, $store)) { ?>
                    <input type="checkbox" name="store[]" value="0" checked="checked" />
                    <?php echo $text_default; ?>
                    <?php } else { ?>
                    <input type="checkbox" name="store[]" value="0" />
                    <?php echo $text_default; ?>
                    <?php } ?>
                  </label>
                </div>
                <?php foreach ($stores as $store_data) { ?>
                <div class="checkbox">
                  <label>
                    <?php if (in_array($store_data['store_id'], $store)) { ?>
                    <input type="checkbox" name="store[]" value="<?php echo $store_data['store_id']; ?>" checked="checked" />
                    <?php echo $store_data['name']; ?>
                    <?php } else { ?>
                     <input type="checkbox" name="store[]" value="<?php echo $store_data['store_id']; ?>" />
                    <?php echo $store_data['name']; ?>
                    <?php } ?>
                  </label>
                </div>
                <?php } ?>
              </div>
              <a onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
            </div>
          </div>
          <ul class="nav nav-tabs">
            <li class="nav-item active"><a href="#tab-cache" data-toggle="tab" data-bs-toggle="tab" class="nav-link active"><?php echo $tab_cache; ?></a></li>
            <li class="nav-item"><a href="#tab-pagespeed" data-toggle="tab" data-bs-toggle="tab" class="nav-link"><?php echo $tab_pagespeed; ?></a></li>
            <li class="nav-item"><a href="#tab-database" data-toggle="tab" data-bs-toggle="tab" class="nav-link"><b style="color:blue">(У распрацоўцы)</b> <?php echo $tab_database; ?></a></li>
            <li class="nav-item"><a href="#tab-export-import" data-toggle="tab" data-bs-toggle="tab" class="nav-link"><?php echo $tab_export; ?>/<?php echo $tab_import; ?></a></li>
            <li class="nav-item"><a href="#tab-cron" data-toggle="tab" data-bs-toggle="tab" class="nav-link"><b style="color:blue">(У распрацоўцы)</b> <?php echo $tab_cron; ?></a></li>
            <li class="nav-item"><a href="#tab-documentation" data-toggle="tab" data-bs-toggle="tab" class="nav-link"><?php echo $tab_documentation; ?></a></li>
            <li class="nav-item"><a href="#tab-support" data-toggle="tab" data-bs-toggle="tab" class="nav-link"><?php echo $tab_support; ?></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-cache">
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-status"><span title="<?php echo $help_cache_status; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_status; ?></span></label>
                <div class="col-sm-10">
                  <select name="cache_status" id="input-cache-status" class="form-control form-select">
                    <option value="1"<?php if ($cache_status == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    <option value="2"<?php if ($cache_status == 2) { ?> selected="selected"<?php } ?>><?php echo $text_cache_status_2; ?></option>
                    <option value="0"<?php if (!$cache_status) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-con"><span title="<?php echo $help_cache_con; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_con; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_con" rows="5" placeholder="<?php echo $entry_cache_con; ?>" id="input-cache-con" class="form-control"><?php echo $cache_con; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-ses"><span title="<?php echo $help_cache_ses; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_ses; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_ses" rows="5" placeholder="<?php echo $entry_cache_ses; ?>" id="input-cache-ses" class="form-control"><?php echo $cache_ses; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-cok"><span title="<?php echo $help_cache_cok; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_cok; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_cok" rows="5" placeholder="<?php echo $entry_cache_cok; ?>" id="input-cache-cok" class="form-control"><?php echo $cache_cok; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-par"><span title="<?php echo $help_cache_par; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_par; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_par" rows="5" placeholder="<?php echo $entry_cache_par; ?>" id="input-cache-par" class="form-control"><?php echo $cache_par; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-onrot"><span title="<?php echo $help_cache_onrot; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_onrot; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_onrot" rows="5" placeholder="<?php echo $entry_cache_onrot; ?>" id="input-cache-onrot" class="form-control"><?php echo $cache_onrot; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-rot"><span title="<?php echo $help_cache_rot; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_rot; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_rot" rows="5" placeholder="<?php echo $entry_cache_rot; ?>" id="input-cache-rot" class="form-control"><?php echo $cache_rot; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-customer"><span><?php echo $entry_cache_customer; ?></span></label>
                <div class="col-sm-10">
                  <select name="cache_customer" id="input-cache-customer" class="form-control form-select">
                    <option value="1"<?php if ($cache_customer == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    <option value="0"<?php if (!$cache_customer) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                  </select>
                </div>
              </div>
              <!-- <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-cart"><span title="<?php echo $help_cache_cart; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_cart; ?></span></label>
                <div class="col-sm-10">
                  <select name="cache_cart" id="input-cache-cart" class="form-control form-select">
                    <option value="1"<?php if ($cache_cart == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    <option value="0"<?php if (!$cache_cart) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                  </select>
                </div>
              </div> -->
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-cart-count"><span title="<?php echo $help_cache_cart_count; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_cart_count; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="cache_cart_count" value="<?php echo $cache_cart_count; ?>" placeholder="<?php echo $entry_cache_cart_count; ?>" id="input-cache-cart-count" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-controller"><span title="<?php echo $help_cache_controller; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_controller; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_controller" rows="5" placeholder="<?php echo $entry_cache_controller; ?>" id="input-cache-controller" class="form-control"><?php echo $cache_controller; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-controller-ajax"><span title="<?php echo $help_cache_controller_ajax; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_controller_ajax; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_controller_ajax" rows="5" placeholder="<?php echo $entry_cache_controller_ajax; ?>" id="input-cache-controller-ajax" class="form-control"><?php echo $cache_controller_ajax; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-model"><span title="<?php echo $help_cache_model; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_model; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="cache_model" rows="5" placeholder="<?php echo $entry_cache_model; ?>" id="input-cache-model" class="form-control"><?php echo $cache_model; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-engine"><span title="<?php echo $help_cache_engine; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_engine; ?></span></label>
                <div class="col-sm-10">
                  <select name="cache_engine" id="input-cache-engine" class="form-control form-select">
                    <?php foreach ($cache_engines as $engine) { ?>
                    <option value="<?php echo $engine['code']; ?>"<?php if ($cache_engine == $engine['code']) { ?> selected="selected"<?php } ?><?php if (!$engine['status']) { ?> disabled="disabled"<?php } ?>><?php echo $engine['name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-engine-mine"><span title="<?php echo $help_cache_engine_mine; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_engine_mine ?></span></label>
                <div class="col-sm-10">
                  <input type="text" name="cache_engine_mine" value="<?php echo $cache_engine_mine; ?>" placeholder="<?php echo $entry_cache_engine_mine; ?>" id="input-cache-engine-mine" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-oc"><span title="<?php echo $help_cache_oc; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_oc; ?></span></label>
                <div class="col-sm-10">
                  <select name="cache_oc" id="input-cache-oc" class="form-control form-select">
                    <option value="1"<?php if ($cache_oc == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    <option value="0"<?php if (!$cache_oc) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-expire"><span title="<?php echo $help_cache_expire; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_expire; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="cache_expire" value="<?php echo $cache_expire; ?>" placeholder="<?php echo $entry_cache_expire; ?>" id="input-cache-expire" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-expire-controller"><span title="<?php echo $help_cache_expire_controller; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_expire_controller; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="cache_expire_controller" value="<?php echo $cache_expire_controller; ?>" placeholder="<?php echo $entry_cache_expire_controller; ?>" id="input-cache-expire-controller" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-expire-model"><span title="<?php echo $help_cache_expire_model; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_expire_model; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="cache_expire_model" value="<?php echo $cache_expire_model; ?>" placeholder="<?php echo $entry_cache_expire_model; ?>" id="input-cache-expire-model" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-expire-all"><span title="<?php echo $help_cache_expire_all; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_expire_all; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="cache_expire_all" value="<?php echo $cache_expire_all; ?>" placeholder="<?php echo $entry_cache_expire_all; ?>" id="input-cache-expire-all" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-size-limit"><span title="<?php echo $help_cache_size_limit; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_size_limit; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="cache_size_limit" value="<?php echo $cache_size_limit; ?>" placeholder="<?php echo $entry_cache_size_limit; ?>" id="input-cache-size-limit" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cache-size-limit"><span title="<?php echo $help_cache_count; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cache_count; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="cache_count" value="<?php echo $cache_count; ?>" placeholder="<?php echo $entry_cache_count; ?>" id="input-cache-count" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label"><?php echo $entry_cache_clear; ?></label>
                <div class="col-sm-10">
                  <div class="well well-sm form-control" style="height: 150px; overflow: auto;">
                    <?php if ($clear_blog_search) { ?>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($cache_clear['blog_category'])) { ?>
                        <input type="checkbox" name="cache_clear[blog_category]" value="blog_category" checked="checked" />
                        <?php echo $text_cache_clear_blog_category; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="cache_clear[blog_category]" value="blog_category" />
                        <?php echo $text_cache_clear_blog_category; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($cache_clear['blog_article'])) { ?>
                        <input type="checkbox" name="cache_clear[blog_article]" value="blog_article" checked="checked" />
                        <?php echo $text_cache_clear_blog_article; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="cache_clear[blog_article]" value="blog_article" />
                        <?php echo $text_cache_clear_blog_article; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <?php } ?>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($cache_clear['category'])) { ?>
                        <input type="checkbox" name="cache_clear[category]" value="category" checked="checked" />
                        <?php echo $text_cache_clear_category; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="cache_clear[category]" value="category" />
                        <?php echo $text_cache_clear_category; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($cache_clear['information'])) { ?>
                        <input type="checkbox" name="cache_clear[information]" value="information" checked="checked" />
                        <?php echo $text_cache_clear_information; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="cache_clear[information]" value="information" />
                        <?php echo $text_cache_clear_information; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($cache_clear['manufacturer'])) { ?>
                        <input type="checkbox" name="cache_clear[manufacturer]" value="manufacturer" checked="checked" />
                        <?php echo $text_cache_clear_manufacturer; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="cache_clear[manufacturer]" value="manufacturer" />
                        <?php echo $text_cache_clear_manufacturer; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($cache_clear['product'])) { ?>
                        <input type="checkbox" name="cache_clear[product]" value="product" checked="checked" />
                        <?php echo $text_cache_clear_product; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="cache_clear[product]" value="product" />
                        <?php echo $text_cache_clear_product; ?>
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                  <a onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-pagespeed">
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-status"><span title="<?php echo $help_pagespeed_status; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_status; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_status" id="input-pagespeed-status" class="form-control form-select">
                    <option value="1"<?php if ($pagespeed_status == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    <option value="0"<?php if (!$pagespeed_status) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-onrot"><span title="<?php echo $help_pagespeed_onrot; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_onrot; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_onrot" rows="5" placeholder="<?php echo $entry_pagespeed_onrot; ?>" id="input-pagespeed-onrot" class="form-control"><?php echo $pagespeed_onrot; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-rot"><span title="<?php echo $help_pagespeed_rot; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_rot; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_rot" rows="5" placeholder="<?php echo $entry_pagespeed_rot; ?>" id="input-pagespeed-rot" class="form-control"><?php echo $pagespeed_rot; ?></textarea>
                </div>
              </div>
              <legend><b><?php echo $tab_image; ?></b></legend>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-image-lazy-load"><span title="<?php echo $help_pagespeed_image_lazy_load; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_image_lazy_load; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_image_lazy_load" id="input-pagespeed-image-lazy-load" class="form-control form-select">
                    <option value="0"<?php if (!$pagespeed_image_lazy_load) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($pagespeed_image_lazy_load == 1) { ?> selected="selected"<?php } ?>>loading="lazy"</option>
                    <option value="2"<?php if ($pagespeed_image_lazy_load == 2) { ?> selected="selected"<?php } ?>>bus-loading="lazy" (universal)</option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-image-first-boot-status"><span title="<?php echo $help_pagespeed_image_first_boot_status; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_image_first_boot_status; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_image_first_boot_status" id="input-pagespeed-image-first-boot-status" class="form-control form-select">
                    <option value="0"<?php if (!$pagespeed_image_first_boot_status) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($pagespeed_image_first_boot_status == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-image-first-boot-onrot"><span title="<?php echo $help_pagespeed_image_first_boot_onrot; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_image_first_boot_onrot; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_image_first_boot_onrot" rows="5" placeholder="<?php echo $entry_pagespeed_image_first_boot_onrot; ?>" id="input-pagespeed-image-first-boot-onrot" class="form-control"><?php echo $pagespeed_image_first_boot_onrot; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-image-first-boot-rot"><span title="<?php echo $help_pagespeed_image_first_boot_rot; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_image_first_boot_rot; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_image_first_boot_rot" rows="5" placeholder="<?php echo $entry_pagespeed_image_first_boot_rot; ?>" id="input-pagespeed-image-first-boot-rot" class="form-control"><?php echo $pagespeed_image_first_boot_rot; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-attribute-w-h"><span title="<?php echo $help_pagespeed_image_w_h; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_image_w_h; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_image_w_h" id="input-pagespeed-attribute-w-h" class="form-control form-select">
                    <option value="0"<?php if (!$pagespeed_image_w_h) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($pagespeed_image_w_h == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-image-webp-status"><span title="<?php echo $help_pagespeed_image_webp_status; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_image_webp_status; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_image_webp_status" id="input-pagespeed-image-webp-status" class="form-control form-select">
                    <option value="0"<?php if (!$pagespeed_image_webp_status) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($pagespeed_image_webp_status == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-image-webp-convert"><span title="<?php echo $help_pagespeed_image_webp_convert; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_image_webp_convert; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_image_webp_convert" id="input-pagespeed-image-webp-convert" class="form-control form-select">
                    <option value="0"<?php if (!$pagespeed_image_webp_convert) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($pagespeed_image_webp_convert == 1) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_image_webp_convert_1; ?></option>
                    <option value="2"<?php if ($pagespeed_image_webp_convert == 2) { ?> selected="selected"<?php } ?> disabled="disabled"><?php echo $text_pagespeed_image_webp_convert_2; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-image-webp-quality"><span title="<?php echo $help_pagespeed_image_webp_quality; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_image_webp_quality; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="pagespeed_image_webp_quality" value="<?php echo $pagespeed_image_webp_quality; ?>" placeholder="<?php echo $entry_pagespeed_image_webp_quality; ?>" id="input-pagespeed-image-webp-quality" class="form-control" />
                </div>
              </div>
              <legend><b><?php echo $tab_html; ?></b></legend>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-lazy-load-html"><span title="<?php echo $help_pagespeed_html_lazy_load; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_html_lazy_load; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_html_lazy_load" rows="5" placeholder="<?php echo $entry_pagespeed_html_lazy_load; ?>" id="input-pagespeed-lazy-load-html" class="form-control"><?php echo $pagespeed_html_lazy_load; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-html-replace-before"><span title="<?php echo $help_pagespeed_html_replace_before; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_html_replace_before; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_html_replace_before" rows="5" placeholder="<?php echo $entry_pagespeed_html_replace_before; ?>" id="input-pagespeed-html-replaces-before" class="form-control"><?php echo $pagespeed_html_replace_before; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-html-replace-after"><span title="<?php echo $help_pagespeed_html_replace_before; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_html_replace_after; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_html_replace_after" rows="5" placeholder="<?php echo $entry_pagespeed_html_replace_after; ?>" id="input-pagespeed-html-replaces-after" class="form-control"><?php echo $pagespeed_html_replace_after; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label"><span title="<?php echo $help_pagespeed_html_min; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_html_min; ?></span></label>
                <div class="col-sm-10">
                  <div class="well well-sm form-control" style="height: 150px; overflow: auto;">
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_html_min['2'])) { ?>
                        <input type="checkbox" name="pagespeed_html_min[2]" value="2" checked="checked" />
                        <?php echo $text_pagespeed_min_2; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_html_min[2]" value="2" />
                        <?php echo $text_pagespeed_min_2; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_html_min['3'])) { ?>
                        <input type="checkbox" name="pagespeed_html_min[3]" value="3" checked="checked" />
                        <?php echo $text_pagespeed_min_3; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_html_min[3]" value="3" />
                        <?php echo $text_pagespeed_min_3; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_html_min['4'])) { ?>
                        <input type="checkbox" name="pagespeed_html_min[4]" value="4" checked="checked" />
                        <?php echo $text_pagespeed_min_4; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_html_min[4]" value="4" />
                        <?php echo $text_pagespeed_min_4; ?>
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                  <a onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-html-min-tags"><span title="<?php echo $help_pagespeed_html_min_tags; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_html_min_tags; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_html_min_tags" rows="5" placeholder="<?php echo $entry_pagespeed_html_min_tags; ?>" id="input-pagespeed-html-min-tags" class="form-control"><?php echo $pagespeed_html_min_tags; ?></textarea>
                </div>
              </div>
              <legend><b><?php echo $tab_css; ?></b></legend>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-replace-before"><span title="<?php echo $help_pagespeed_css_replace_before; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_replace_before; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_replace_before" rows="5" placeholder="<?php echo $entry_pagespeed_css_replace_before; ?>" id="input-pagespeed-css-replace-before" class="form-control"><?php echo $pagespeed_css_replace_before; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-replace-after"><span title="<?php echo $help_pagespeed_css_replace_after; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_replace_after; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_replace_after" rows="5" placeholder="<?php echo $entry_pagespeed_css_replace_after; ?>" id="input-pagespeed-css-replace-after" class="form-control"><?php echo $pagespeed_css_replace_after; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label"><span title="<?php echo $help_pagespeed_css_min; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_min; ?></span></label>
                <div class="col-sm-10">
                  <div class="well well-sm form-control" style="height: 150px; overflow: auto;">
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_css_min['1'])) { ?>
                        <input type="checkbox" name="pagespeed_css_min[1]" value="1" checked="checked" />
                        <?php echo $text_pagespeed_min_1; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_css_min[1]" value="1" />
                        <?php echo $text_pagespeed_min_1; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_css_min['2'])) { ?>
                        <input type="checkbox" name="pagespeed_css_min[2]" value="2" checked="checked" />
                        <?php echo $text_pagespeed_min_2; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_css_min[2]" value="2" />
                        <?php echo $text_pagespeed_min_2; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_css_min['3'])) { ?>
                        <input type="checkbox" name="pagespeed_css_min[3]" value="3" checked="checked" />
                        <?php echo $text_pagespeed_min_3; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_css_min[3]" value="3" />
                        <?php echo $text_pagespeed_min_3; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_css_min['4'])) { ?>
                        <input type="checkbox" name="pagespeed_css_min[4]" value="4" checked="checked" />
                        <?php echo $text_pagespeed_min_4; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_css_min[4]" value="4" />
                        <?php echo $text_pagespeed_min_4; ?>
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                  <a onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-min-links"><span title="<?php echo $help_pagespeed_css_min_links; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_min_links; ?></span></label>
                <div class="col-sm-10">
                  <!--[header] [footer] [async] [defer] [prelod] [prefetch] [dns-prefetch] [preconnect] [event] [event-2000] [critical]-->
                  чтобы отложить загрузку после ссылки пропишите "|after"
                  <textarea name="pagespeed_css_min_links" rows="5" placeholder="<?php echo $entry_pagespeed_css_min_links; ?>" id="input-pagespeed-css-min-links" class="form-control"><?php echo $pagespeed_css_min_links; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-min-download"><span title="<?php echo $help_pagespeed_css_min_download; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_min_download; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_min_download" rows="5" placeholder="<?php echo $entry_pagespeed_css_min_download; ?>" id="input-pagespeed-css-min-download" class="form-control"><?php echo $pagespeed_css_min_download; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-min-exception"><span title="<?php echo $help_pagespeed_css_min_exception; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_min_exception; ?></span></label>
                <div class="col-sm-10">
                  <!--[header] [footer] [async] [defer] [prelod] [prefetch] [dns-prefetch] [preconnect] [event] [event-2000] [critical]-->
                  чтобы отложить загрузку после ссылки пропишите "|after"
                  <textarea name="pagespeed_css_min_exception" rows="5" placeholder="<?php echo $entry_pagespeed_css_min_exception; ?>" id="input-pagespeed-css-min-exception" class="form-control"><?php echo $pagespeed_css_min_exception; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-min-font"><span title="<?php echo $help_pagespeed_css_min_font; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_min_font; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_min_font" rows="5" placeholder="<?php echo $entry_pagespeed_css_min_font; ?>" id="input-pagespeed-css-min-font" class="form-control"><?php echo $pagespeed_css_min_font; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-min-convert"><span title="<?php echo $help_pagespeed_css_min_convert; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_min_convert; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_min_convert" rows="5" placeholder="<?php echo $entry_pagespeed_css_min_convert; ?>" id="input-pagespeed-css-min-convert" class="form-control"><?php echo $pagespeed_css_min_convert; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-min-display"><span title="<?php echo $help_pagespeed_css_min_display; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_min_display; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_css_min_display" id="input-pagespeed-css-min-display" class="form-control form-select">
                    <option value="auto"<?php if ($pagespeed_css_min_display == 'auto') { ?> selected="selected"<?php } ?>>auto</option>
                    <option value="block"<?php if ($pagespeed_css_min_display == 'block') { ?> selected="selected"<?php } ?>>block</option>
                    <option value="swap"<?php if ($pagespeed_css_min_display == 'swap') { ?> selected="selected"<?php } ?>>swap</option>
                    <option value="fallback"<?php if ($pagespeed_css_min_display == 'fallback') { ?> selected="selected"<?php } ?>>fallback</option>
                    <option value="optional"<?php if ($pagespeed_css_min_display == 'optional') { ?> selected="selected"<?php } ?>>optional</option>
                    <option value="0"<?php if (!$pagespeed_css_min_display) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-inline-transfer"><span title="<?php echo $help_pagespeed_css_inline_transfer; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_inline_transfer; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_css_inline_transfer" id="input-pagespeed-css-inline-transfer" class="form-control form-select">
                    <option value="0"<?php if (!$pagespeed_css_inline_transfer) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($pagespeed_css_inline_transfer == 1) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_transfer_1; ?></option>
                    <option value="2"<?php if ($pagespeed_css_inline_transfer == 2) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_transfer_2; ?></option>
                    <option value="3"<?php if ($pagespeed_css_inline_transfer == 3) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_transfer_3; ?></option>
                    <option value="4"<?php if ($pagespeed_css_inline_transfer == 4) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_transfer_4; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-events"><span title="<?php echo $help_pagespeed_css_events; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_events; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_events" rows="5" placeholder="<?php echo $entry_pagespeed_css_events; ?>" id="input-pagespeed-css-events" class="form-control"><?php echo $pagespeed_css_events; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-critical"><span title="<?php echo $help_pagespeed_css_critical; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_critical; ?></span></label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <select name="pagespeed_css_critical" id="input-pagespeed-css-critical" class="form-control form-select">
                      <option value="0"<?php if (!$pagespeed_css_critical) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                      <option value="1"<?php if ($pagespeed_css_critical == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    </select>
                    <div class="input-group-btn">
                      <button type="button" onclick="critical(true);" id="pagespeed-critical-update" data-toggle="tooltip" data-bs-toggle="tooltip" title="<?php echo $button_start; ?>" class="btn btn-warning"><i class="fa fa-refresh fa-sync"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-critical-all"><b style="color:red">(навінка)</b> <span title="<?php echo $help_pagespeed_css_critical_all; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_critical_all; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_css_critical_all" id="input-pagespeed-css-critical-all" class="form-control form-select">
                    <option value="0"<?php if (!$pagespeed_css_critical_all) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($pagespeed_css_critical_all == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-critical-offset"><b style="color:red">(навінка)</b> <span title="<?php echo $help_pagespeed_css_critical_offset; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_critical_offset; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="pagespeed_css_critical_offset" value="<?php echo $pagespeed_css_critical_offset; ?>" placeholder="<?php echo $entry_pagespeed_css_critical_time; ?>" id="input-pagespeed-css-critical-offset" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-critical-time"><span title="<?php echo $help_pagespeed_css_critical_time; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_critical_time; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="pagespeed_css_critical_time" value="<?php echo $pagespeed_css_critical_time; ?>" placeholder="<?php echo $entry_pagespeed_css_critical_time; ?>" id="input-pagespeed-css-critical-time" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-critical-elements"><span title="<?php echo $help_pagespeed_css_critical_elements; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_critical_elements; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_critical_elements" rows="5" placeholder="<?php echo $entry_pagespeed_css_critical_elements; ?>" id="input-pagespeed-css-critical-elements" class="form-control"><?php echo $pagespeed_css_critical_elements; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-critical-links"><b style="color:red">(навінка)</b> <span title="<?php echo $help_pagespeed_css_critical_links; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_critical_links; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_critical_links" rows="5" placeholder="<?php echo $entry_pagespeed_css_critical_links; ?>" id="input-pagespeed-css-critical-links" class="form-control"><?php echo $pagespeed_css_critical_links; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-css-style"><span title="<?php echo $help_pagespeed_css_style; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_css_style; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_css_style" rows="5" placeholder="<?php echo $entry_pagespeed_css_style; ?>" id="input-pagespeed-css-style" class="form-control"><?php echo $pagespeed_css_style; ?></textarea>
                </div>
              </div>
              <legend><b><?php echo $tab_js; ?></b></legend>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-replace-before"><span title="<?php echo $help_pagespeed_js_replace_before; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_replace_before; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_js_replace_before" rows="5" placeholder="<?php echo $entry_pagespeed_js_replace_before; ?>" id="input-pagespeed-js-replace-before" class="form-control"><?php echo $pagespeed_js_replace_before; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-replace-after"><span title="<?php echo $help_pagespeed_js_replace_after; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_replace_after; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_js_replace_after" rows="5" placeholder="<?php echo $entry_pagespeed_js_replace_after; ?>" id="input-pagespeed-js-replace-after" class="form-control"><?php echo $pagespeed_js_replace_after; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label"><span title="<?php echo $help_pagespeed_js_min; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_min; ?></span></label>
                <div class="col-sm-10">
                  <div class="well well-sm form-control" style="height: 150px; overflow: auto;">
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_js_min['1'])) { ?>
                        <input type="checkbox" name="pagespeed_js_min[1]" value="1" checked="checked" />
                        <?php echo $text_pagespeed_min_1; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_js_min[1]" value="1" />
                        <?php echo $text_pagespeed_min_1; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_js_min['2'])) { ?>
                        <input type="checkbox" name="pagespeed_js_min[2]" value="2" checked="checked" />
                        <?php echo $text_pagespeed_min_2; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_js_min[2]" value="2" />
                        <?php echo $text_pagespeed_min_2; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_js_min['3'])) { ?>
                        <input type="checkbox" name="pagespeed_js_min[3]" value="3" checked="checked" />
                        <?php echo $text_pagespeed_min_3; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_js_min[3]" value="3" />
                        <?php echo $text_pagespeed_min_3; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_js_min['4'])) { ?>
                        <input type="checkbox" name="pagespeed_js_min[4]" value="4" checked="checked" />
                        <?php echo $text_pagespeed_min_4; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_js_min[4]" value="4" />
                        <?php echo $text_pagespeed_min_4; ?>
                        <?php } ?>
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <?php if (isset($pagespeed_js_min['5'])) { ?>
                        <input type="checkbox" name="pagespeed_js_min[5]" value="5" checked="checked" />
                        <?php echo $text_pagespeed_min_5; ?>
                        <?php } else { ?>
                         <input type="checkbox" name="pagespeed_js_min[5]" value="5" />
                        <?php echo $text_pagespeed_min_5; ?>
                        <?php } ?>
                      </label>
                    </div>
                  </div>
                  <a onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-min-links"><span title="<?php echo $help_pagespeed_js_min_links; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_min_links; ?></span></label>
                <div class="col-sm-10">
                  <!--[header] [footer] [async] [defer] [prelod] [prefetch] [dns-prefetch] [preconnect] [event] [event-2000]-->
                  чтобы отложить загрузку после ссылки пропишите "|after"
                  <textarea name="pagespeed_js_min_links" rows="5" placeholder="<?php echo $entry_pagespeed_js_min_links; ?>" id="input-pagespeed-js-min-links" class="form-control"><?php echo $pagespeed_js_min_links; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-min-download"><span title="<?php echo $help_pagespeed_js_min_download; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_min_download; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_js_min_download" rows="5" placeholder="<?php echo $entry_pagespeed_js_min_download; ?>" id="input-pagespeed-js-min-download" class="form-control"><?php echo $pagespeed_js_min_download; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-min-exception"><span title="<?php echo $help_pagespeed_js_min_exception; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_min_exception; ?></span></label>
                <div class="col-sm-10">
                  <!--[header] [footer] [async] [defer] [prelod] [prefetch] [dns-prefetch] [preconnect] [event] [event-2000]-->
                  чтобы отложить загрузку после ссылки пропишите "|after"
                  <textarea name="pagespeed_js_min_exception" rows="5" placeholder="<?php echo $entry_pagespeed_js_min_exception; ?>" id="input-pagespeed-js-min-exception" class="form-control"><?php echo $pagespeed_js_min_exception; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-inline-event"><span title="<?php echo $help_pagespeed_js_inline_event; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_inline_event; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_js_inline_event" rows="5" placeholder="<?php echo $entry_pagespeed_js_inline_event; ?>" id="input-pagespeed-js-inline-event" class="form-control"><?php echo $pagespeed_js_inline_event; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-inline-event-time"><span title="<?php echo $help_pagespeed_js_inline_event_time; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_inline_event_time; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="pagespeed_js_inline_event_time" value="<?php echo $pagespeed_js_inline_event_time; ?>" placeholder="<?php echo $entry_pagespeed_js_inline_event_time; ?>" id="input-pagespeed-js-inline-event-time" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-inline-transfer"><span title="<?php echo $help_pagespeed_js_inline_transfer; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_inline_transfer; ?></span></label>
                <div class="col-sm-10">
                  <select name="pagespeed_js_inline_transfer" id="input-pagespeed-js-inline-transfer" class="form-control form-select">
                    <option value="0"<?php if (!$pagespeed_js_inline_transfer) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($pagespeed_js_inline_transfer == 1) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_transfer_1; ?></option>
                    <option value="2"<?php if ($pagespeed_js_inline_transfer == 2) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_transfer_2; ?></option>
                    <option value="3"<?php if ($pagespeed_js_inline_transfer == 3) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_transfer_3; ?></option>
                    <option value="4"<?php if ($pagespeed_js_inline_transfer == 4) { ?> selected="selected"<?php } ?>><?php echo $text_pagespeed_transfer_4; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-inline-transfer-onrot"><span title="<?php echo $help_pagespeed_js_inline_transfer_onrot; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_inline_transfer_onrot; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_js_inline_transfer_onrot" rows="5" placeholder="<?php echo $entry_pagespeed_js_inline_transfer_onrot; ?>" id="input-pagespeed-js-inline-transfer-onrot" class="form-control"><?php echo $pagespeed_js_inline_transfer_onrot; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-inline-exception"><span title="<?php echo $help_pagespeed_js_inline_exception; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_inline_exception; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_js_inline_exception" rows="5" placeholder="<?php echo $entry_pagespeed_js_inline_exception; ?>" id="input-pagespeed-js-inline-exception" class="form-control"><?php echo $pagespeed_js_inline_exception; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-events"><span title="<?php echo $help_pagespeed_js_events; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_events; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_js_events" rows="5" placeholder="<?php echo $entry_pagespeed_js_events; ?>" id="input-pagespeed-js-events" class="form-control"><?php echo $pagespeed_js_events; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-script"><span title="<?php echo $help_pagespeed_js_script; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_pagespeed_js_script; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="pagespeed_js_script" rows="5" placeholder="<?php echo $entry_pagespeed_js_script; ?>" id="input-pagespeed-js-script" class="form-control"><?php echo $pagespeed_js_script; ?></textarea>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-database">
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-database-status"><b style="color:blue">(У распрацоўцы)</b> <span title="<?php echo $help_database_status; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_database_status; ?></span></label>
                <div class="col-sm-10">
                  <select name="database_status" id="input-database-status" class="form-control form-select">
                    <option value="0"<?php if (!$database_status) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($database_status == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                  </select>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-pagespeed-js-script"><b style="color:blue">(У распрацоўцы)</b> <span title="<?php echo $help_database_links; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_database_links; ?></span></label>
                <div class="col-sm-10">
                  <textarea name="database_links" rows="5" placeholder="<?php echo $entry_database_links; ?>" id="input-pagespeed-js-script" class="form-control"><?php echo $database_links; ?></textarea>
                </div>
              </div>
              <div class="form-group row mb-3">
                <b style="color:blue">(У распрацоўцы)</b>
                <table id="database-tables" class="table table-bordered"></table>
              </div>
            </div>
            <div class="tab-pane" id="tab-export-import">
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-export-import-format"><?php echo $button_export; ?></label>
                <div class="col-sm-8">
                  <select id="input-export-import-format" class="form-control form-select">
                    <!-- <option value="sql"><?php echo $text_export_import_format_sql; ?></option> -->
                    <option value="json" selected="selected"><?php echo $text_export_import_format_json; ?></option>
                    <!-- <option value="csv"><?php echo $text_export_import_format_csv; ?></option> -->
                    <!-- <option value="xls"><?php echo $text_export_import_format_xls; ?></option> -->
                    <!-- <option value="xlsx"><?php echo $text_export_import_format_xlsx; ?></option> -->
                    <!-- <option value="xml"><?php echo $text_export_import_format_xml; ?></option> -->
                    <!-- <option value="yml"><?php echo $text_export_import_format_yml; ?></option> -->
                  </select>
                </div>
                <div class="col-sm-2">
                  <button type="button" data-toggle="tooltip" data-bs-toggle="tooltip" onclick="exportData();" title="<?php echo $button_export; ?>" class="col-xs-12 col-12 btn btn-default btn-outline-dark"><i class="fa fa-download"></i> <?php echo $button_export; ?></button>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-export-import-file"><?php echo $button_import; ?></label>
                <div class="col-sm-8">
                  <input type="file" value="" placeholder="" id="input-export-import-file" multiple="true" accept="application/json" class="form-control" />
                </div>
                <div class="col-sm-2">
                  <button type="button" data-toggle="tooltip" data-bs-toggle="tooltip" onclick="importData();" title="<?php echo $button_import; ?>" class="col-xs-12 col-12 btn btn-default btn-outline-dark"><i class="fa fa-upload"></i> <?php echo $button_import; ?></button>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-export-import-copy"><?php echo $button_copy; ?> <?php echo $tab_setting; ?></label>
                <div class="col-sm-8">
                  <select id="input-export-import-copy" class="form-control form-select">
                    <option value="1"><?php echo $text_export_import_copy_1; ?></option>
                    <option value="2" disabled="disabled"><?php echo $text_export_import_copy_2; ?></option>
                    <option value="3" disabled="disabled"><?php echo $text_export_import_copy_3; ?></option>
                    <!-- <option value="4" disabled="disabled"><?php echo $text_export_import_copy_4; ?></option> -->
                  </select>
                </div>
                <div class="col-sm-2">
                  <button type="button" data-toggle="tooltip" data-bs-toggle="tooltip" onclick="copyData();" title="<?php echo $button_copy; ?>" class="col-xs-12 col-12 btn btn-default btn-outline-dark"><i class="fa fa-copy"></i> <?php echo $button_copy; ?></button>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-cron">
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cron-pregeneration"><b style="color:blue">(У распрацоўцы)</b> <span title="<?php echo $help_cron_pregeneration; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cron_pregeneration; ?></span></label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <select name="cron_pregeneration" id="input-cron-pregeneration" class="form-control form-select">
                      <option value="0"<?php if (!$cron_pregeneration) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                      <option value="1"<?php if ($cron_pregeneration == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    </select>
                    <div class="input-group-btn">
                      <button type="button" onclick="pregeneration(true);" id="cron-pregeneration-update" data-toggle="tooltip" data-bs-toggle="tooltip" title="<?php echo $button_start; ?>" class="btn btn-warning"><i class="fa fa-refresh fa-sync"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-cron-pregeneration-query-count"><b style="color:blue">(У распрацоўцы)</b> <span title="<?php echo $help_cron_pregeneration_query_count; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_cron_pregeneration_query_count; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="cron_pregeneration_query_count" value="<?php echo $cron_pregeneration_query_count; ?>" placeholder="<?php echo $entry_cron_pregeneration_query_count; ?>" id="input-cron-pregeneration-query-count" class="form-control" />
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-documentation">
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-documentation-status"><?php echo $entry_documentation_status; ?></label>
                <div class="col-sm-10">
                  <select name="documentation_status" id="input-documentation-status" class="form-control form-select">
                    <option value="0"<?php if (!$documentation_status) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($documentation_status == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                  </select>
                </div>
              </div>
              <div id="documentation" class="form-group row mb-3">
                <div><?php echo $doc; ?></div>
              </div>
              <div id="documentation-status" class="form-group row mb-3">
                <div><?php echo $doc_status; ?></div>
              </div>
              <div id="documentation-store" class="form-group row mb-3">
                <div><?php echo $doc_store; ?></div>
              </div>
              <legend><b><?php echo $tab_cache; ?></b></legend>
              <div id="documentation-cache_status" class="form-group row mb-3">
                <div><?php echo $doc_cache_status; ?></div>
              </div>
              <div id="documentation-cache_con" class="form-group row mb-3">
                <div><?php echo $doc_cache_con; ?></div>
              </div>
              <div id="documentation-cache_ses" class="form-group row mb-3">
                <div><?php echo $doc_cache_ses; ?></div>
              </div>
              <div id="documentation-cache_cok" class="form-group row mb-3">
                <div><?php echo $doc_cache_cok; ?></div>
              </div>
              <div id="documentation-cache_par" class="form-group row mb-3">
                <div><?php echo $doc_cache_par; ?></div>
              </div>
              <div id="documentation-cache_onrot" class="form-group row mb-3">
                <div><?php echo $doc_cache_onrot; ?></div>
              </div>
              <div id="documentation-cache_rot" class="form-group row mb-3">
                <div><?php echo $doc_cache_rot; ?></div>
              </div>
              <div id="documentation-cache_customer" class="form-group row mb-3">
                <div><?php echo $doc_cache_customer; ?></div>
              </div>
              <div id="documentation-cache_cart_count" class="form-group row mb-3">
                <div><?php echo $doc_cache_cart_count; ?></div>
              </div>
              <div id="documentation-cache_controller" class="form-group row mb-3">
                <div><?php echo $doc_cache_controller; ?></div>
              </div>
              <div id="documentation-cache_controller_ajax" class="form-group row mb-3">
                <div><?php echo $doc_cache_controller_ajax; ?></div>
              </div>
              <div id="documentation-cache_model" class="form-group row mb-3">
                <div><?php echo $doc_cache_model; ?></div>
              </div>
              <div id="documentation-cache_engine" class="form-group row mb-3">
                <div><?php echo $doc_cache_engine; ?></div>
              </div>
              <div id="documentation-cache_engine_mine" class="form-group row mb-3">
                <div><?php echo $doc_cache_engine_mine; ?></div>
              </div>
              <div id="documentation-cache_oc" class="form-group row mb-3">
                <div><?php echo $doc_cache_oc; ?></div>
              </div>
              <div id="documentation-cache_expire" class="form-group row mb-3">
                <div><?php echo $doc_cache_expire; ?></div>
              </div>
              <div id="documentation-cache_expire_controller" class="form-group row mb-3">
                <div><?php echo $doc_cache_expire_controller; ?></div>
              </div>
              <div id="documentation-cache_expire_model" class="form-group row mb-3">
                <div><?php echo $doc_cache_expire_model; ?></div>
              </div>
              <div id="documentation-cache_expire_all" class="form-group row mb-3">
                <div><?php echo $doc_cache_expire_all; ?></div>
              </div>
              <div id="documentation-cache_size_limit" class="form-group row mb-3">
                <div><?php echo $doc_cache_size_limit; ?></div>
              </div>
              <legend><b><?php echo $tab_pagespeed; ?></b></legend>
              <div id="documentation-pagespeed_status" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_status; ?></div>
              </div>
              <div id="documentation-pagespeed_onrot" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_onrot; ?></div>
              </div>
              <div id="documentation-pagespeed_rot" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_rot; ?></div>
              </div>
              <legend><b><?php echo $tab_image; ?></b></legend>
              <div id="documentation-pagespeed_image_lazy_load" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_image_lazy_load; ?></div>
              </div>
              <div id="documentation-pagespeed_image_first_boot_status" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_image_first_boot_status; ?></div>
              </div>
              <div id="documentation-pagespeed_image_w_h" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_image_w_h; ?></div>
              </div>
              <div id="documentation-pagespeed_image_webp_status" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_image_webp_status; ?></div>
              </div>
              <div id="documentation-pagespeed_image_webp_convert" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_image_webp_convert; ?></div>
              </div>
              <div id="documentation-pagespeed_image_webp_quality" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_image_webp_quality; ?></div>
              </div>
              <legend><b><?php echo $tab_html; ?></b></legend>
              <div id="documentation-pagespeed_html_lazy_load" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_html_lazy_load; ?></div>
              </div>
              <div id="documentation-pagespeed_html_replace_before" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_html_replace_before; ?></div>
              </div>
              <div id="documentation-pagespeed_html_replace_after" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_html_replace_after; ?></div>
              </div>
              <div id="documentation-pagespeed_html_min" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_html_min; ?></div>
              </div>
              <div id="documentation-pagespeed_html_min_tags" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_html_min_tags; ?></div>
              </div>
              <legend><b><?php echo $tab_css; ?></b></legend>
              <div id="documentation-pagespeed_css_replace_before" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_replace_before; ?></div>
              </div>
              <div id="documentation-pagespeed_css_replace_after" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_replace_after; ?></div>
              </div>
              <div id="documentation-pagespeed_css_min" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_min; ?></div>
              </div>
              <div id="documentation-pagespeed_css_min_links" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_min_links; ?></div>
              </div>
              <div id="documentation-pagespeed_css_min_download" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_min_download; ?></div>
              </div>
              <div id="documentation-pagespeed_css_min_exception" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_min_exception; ?></div>
              </div>
              <div id="documentation-pagespeed_css_min_font" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_min_font; ?></div>
              </div>
              <div id="documentation-pagespeed_css_min_convert" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_min_convert; ?></div>
              </div>
              <div id="documentation-pagespeed_css_min_display" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_min_display; ?></div>
              </div>
              <div id="documentation-pagespeed_css_inline_transfer" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_inline_transfer; ?></div>
              </div>
              <div id="documentation-pagespeed_css_events" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_events; ?></div>
              </div>
              <div id="documentation-pagespeed_css_critical" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_critical; ?></div>
              </div>
              <div id="documentation-pagespeed_css_critical_all" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_critical_all; ?></div>
              </div>
              <div id="documentation-pagespeed_css_critical_offset" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_critical_offset; ?></div>
              </div>
              <div id="documentation-pagespeed_css_critical_time" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_critical_time; ?></div>
              </div>
              <div id="documentation-pagespeed_css_critical_elements" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_critical_elements; ?></div>
              </div>
              <div id="documentation-pagespeed_css_critical_elements" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_critical_links; ?></div>
              </div>
              <div id="documentation-pagespeed_css_style" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_css_style; ?></div>
              </div>
              <legend><b><?php echo $tab_js; ?></b></legend>
              <div id="documentation-pagespeed_js_replace_before" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_replace_before; ?></div>
              </div>
              <div id="documentation-pagespeed_js_replace_after" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_replace_after; ?></div>
              </div>
              <div id="documentation-pagespeed_js_min" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_min; ?></div>
              </div>
              <div id="documentation-pagespeed_js_min_links" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_min_links; ?></div>
              </div>
              <div id="documentation-pagespeed_js_min_download" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_min_download; ?></div>
              </div>
              <div id="documentation-pagespeed_js_min_exception" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_min_exception; ?></div>
              </div>
              <div id="documentation-pagespeed_js_inline_event" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_inline_event; ?></div>
              </div>
              <div id="documentation-pagespeed_js_inline_event_time" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_inline_event_time; ?></div>
              </div>
              <div id="documentation-pagespeed_js_inline_transfer" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_inline_transfer; ?></div>
              </div>
              <div id="documentation-pagespeed_js_inline_transfer_onrot" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_inline_transfer_onrot; ?></div>
              </div>
              <div id="documentation-pagespeed_js_inline_exception" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_inline_exception; ?></div>
              </div>
              <div id="documentation-pagespeed_js_events" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_events; ?></div>
              </div>
              <div id="documentation-pagespeed_js_script" class="form-group row mb-3">
                <div><?php echo $doc_pagespeed_js_script; ?></div>
              </div>
              <legend><b><?php echo $tab_database; ?></b></legend>
              <div id="documentation-database_status" class="form-group row mb-3">
                <div><?php echo $doc_database_status; ?></div>
              </div>
              <div id="documentation-database_links" class="form-group row mb-3">
                <div><?php echo $doc_database_links; ?></div>
              </div>
              <legend><b><?php echo $tab_support; ?></b></legend>
              <div id="documentation-support_update_order_id" class="form-group row mb-3">
                <div><?php echo $doc_support_update; ?></div>
              </div>
              <div id="documentation-support_stats_status" class="form-group row mb-3">
                <div><?php echo $doc_support_stats_status; ?></div>
              </div>
              <div id="documentation-support_disc_size_limit" class="form-group row mb-3">
                <div><?php echo $doc_support_disc_size_limit; ?></div>
              </div>
              <div id="documentation-support_disc_warning" class="form-group row mb-3">
                <div><?php echo $doc_support_disc_warning; ?></div>
              </div>
              <div id="documentation-support_debug" class="form-group row mb-3">
                <div><?php echo $doc_support_debug; ?></div>
              </div>
            </div>
            <div class="tab-pane" id="tab-support">
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-stats-status"><span><?php echo $entry_support_update; ?></span></label>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="support_update_order_id" value="<?php echo $support_update_order_id; ?>" placeholder="<?php echo $entry_support_update_order_id; ?>" id="input-support-update-order-id" class="form-control" />
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="support_update_key" value="<?php echo $support_update_key; ?>" placeholder="<?php echo $entry_support_update_key; ?>" id="input-support-update-key" class="form-control" />
                    </div>
                  </div>
                  <div class="input-group" style="height: max-content;">
                    <textarea rows="5" disabled="disabled" placeholder="" id="input-support-update-message" class="form-control" style="white-space: pre-wrap; resize: vertical;"><?php echo $support_update; ?></textarea>
                    <div class="input-group-btn">
                      <?php if ($support_update) { ?>
                      <button type="button" onclick="download(false);"  id="support-update-view" data-toggle="tooltip" data-bs-toggle="tooltip" title="<?php echo $button_view; ?>" class="btn btn-primary" style="height: 100%; display:none;"><i class="fa fa-eye"></i></button>
                      <button type="button" onclick="download(true);" id="support-update" data-toggle="tooltip" data-bs-toggle="tooltip" title="<?php echo $button_update; ?>" class="btn btn-warning" style="height: 100%;"><i class="fa fa-refresh fa-sync"></i></button>
                      <?php } else { ?>
                      <button type="button" onclick="download(false);"  id="support-update-view" data-toggle="tooltip" data-bs-toggle="tooltip" title="<?php echo $button_view; ?>" class="btn btn-primary" style="height: 100%;"><i class="fa fa-eye"></i></button>
                      <button type="button" onclick="download(true);" id="support-update" data-toggle="tooltip" data-bs-toggle="tooltip" title="<?php echo $button_update; ?>" class="btn btn-warning" style="height: 100%; display:none;"><i class="fa fa-refresh fa-sync"></i></button>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-stats-status"><span title="<?php echo $help_support_stats_status; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_support_stats_status; ?></span></label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <select name="support_stats_status" id="input-stats-status" class="form-control form-select">
                      <option value="0"<?php if (!$support_stats_status) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                      <option value="1"<?php if ($support_stats_status == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    </select>
                    <div class="input-group-btn">
                      <button type="button" onclick="supportGetStats(true);" id="support-stats-update" data-toggle="tooltip" data-bs-toggle="tooltip" title="<?php echo $button_update; ?>" class="btn btn-warning"><i class="fa fa-refresh fa-sync"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_cache_total; ?></label>
                <div class="col-sm-10" id="support_cache_total"><?php echo $support_cache_total; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_cache_size; ?></label>
                <div class="col-sm-10" id="support_cache_size"><?php echo $support_cache_size; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_cache_minify_total; ?></label>
                <div class="col-sm-10" id="support_cache_minify_total"><?php echo $support_cache_minify_total; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_cache_minify_size; ?></label>
                <div class="col-sm-10" id="support_cache_minify_size"><?php echo $support_cache_minify_size; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_image_total; ?></label>
                <div class="col-sm-10" id="support_image_total"><?php echo $support_image_total; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_image_size; ?></label>
                <div class="col-sm-10" id="support_image_size"><?php echo $support_image_size; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_image_cache_total; ?></label>
                <div class="col-sm-10" id="support_image_cache_total"><?php echo $support_image_cache_total; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_image_cache_size; ?></label>
                <div class="col-sm-10" id="support_image_cache_size"><?php echo $support_image_cache_size; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_session_total; ?></label>
                <div class="col-sm-10" id="support_session_total"><?php echo $support_session_total; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_session_size; ?></label>
                <div class="col-sm-10" id="support_session_size"><?php echo $support_session_size; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_session_db_total; ?></label>
                <div class="col-sm-10" id="support_session_db_total"><?php echo $support_session_db_total; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_session_db_size; ?></label>
                <div class="col-sm-10" id="support_session_db_size"><?php echo $support_session_db_size; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_session_cart_total; ?></label>
                <div class="col-sm-10" id="support_session_cart_total"><?php echo $support_session_cart_total; ?></div>
              </div>
              <div class="support_stats_status form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_session_cart_size; ?></label>
                <div class="col-sm-10" id="support_session_cart_size"><?php echo $support_session_cart_size; ?></div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_disc_total; ?></label>
                <div class="col-sm-10" id="support_disc_total"><?php echo $support_disc_total; ?></div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" style="padding:0;"><?php echo $text_support_disc_free; ?></label>
                <div class="col-sm-10" id="support_disc_free"><?php echo $support_disc_free; ?></div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-disc-limit"><span title="<?php echo $help_support_disc_size_limit; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_support_disc_size_limit; ?></span></label>
                <div class="col-sm-10">
                  <input type="number" name="support_disc_size_limit" value="<?php echo $support_disc_size_limit; ?>" placeholder="<?php echo $entry_support_disc_size_limit; ?>" id="input-disc-limit" class="form-control" />
                </div>
              </div>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-support-debug-warning"><span title="<?php echo $help_support_disc_warning; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_support_disc_warning; ?></span></label>
                <div class="col-sm-10">
                  <select name="support_disc_warning" id="input-support-debug-warning" class="form-control form-select">
                    <option value="0"<?php if (!$support_disc_warning) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($support_disc_warning == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                  </select>
                </div>
              </div>
              <?php if (version_compare(VERSION, '4.0.0.0', '<')) { ?>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-support-session-fix"><span title="<?php echo $help_support_session_fix; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_support_session_fix; ?></span></label>
                <div class="col-sm-10">
                  <select name="support_session_fix" id="input-support-session-fix" class="form-control form-select">
                    <option value="0"<?php if (!$support_session_fix) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($support_session_fix == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                  </select>
                </div>
              </div>
              <?php } ?>
              <div class="form-group row mb-3">
                <label class="col-sm-2 control-label col-form-label" for="input-support-debug"><span title="<?php echo $help_support_debug; ?>" data-toggle="tooltip" data-html="true" data-bs-toggle="tooltip" data-bs-html="true"><?php echo $entry_support_debug; ?></span></label>
                <div class="col-sm-10">
                  <select name="support_debug" id="input-support-debug" class="form-control form-select">
                    <option value="0"<?php if (!$support_debug) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
                    <option value="1"<?php if ($support_debug == 1) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
                    <option value="2"<?php if ($support_debug == 2) { ?> selected="selected"<?php } ?>><?php echo $text_support_debug_2; ?></option>
                    <option value="3"<?php if ($support_debug == 3) { ?> selected="selected"<?php } ?>><?php echo $text_support_debug_3; ?></option>
                    <option value="4"<?php if ($support_debug == 4) { ?> selected="selected"<?php } ?>><?php echo $text_support_debug_4; ?></option>
                    <option value="5"<?php if ($support_debug == 5) { ?> selected="selected"<?php } ?>><?php echo $text_support_debug_5; ?></option>
                    <option value="6"<?php if ($support_debug == 6) { ?> selected="selected"<?php } ?>><?php echo $text_support_debug_6; ?></option>
                  </select>
                </div>
              </div>
              <div class="text-center">
                <b><?php echo $text_author; ?><br /><?php echo $text_corp; ?></b>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="scroll-top-wrapper" onclick="scrollToTop()"><i class="fa fa-2x fa-arrow-circle-up"></i></div>
<script type="text/javascript"><!--
	var html_loading = '<div class="loading" style="display: none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M58.097 52.127c-.431-.7-1.415-1.028-2.181-.732l-3.392 1.302c-.768.295-1.847.04-2.407-.565l-2.55-2.408c-.64-.518-.957-1.584-.706-2.367l1.104-3.46c.248-.782-.153-1.716-.891-2.075l-6.85-2.607c-.792-.224-1.712.21-2.047.96l-1.475 3.32c-.333.75-1.277 1.335-2.1 1.296l-3.508.108c-.816.08-1.795-.45-2.173-1.18l-1.668-3.227c-.375-.731-1.329-1.138-2.117-.906 0 0-1.85.547-3.454 1.267-1.606.72-3.244 1.74-3.244 1.74-.699.435-1.028 1.416-.735 2.184l1.307 3.392c.294.767.041 1.85-.564 2.406l-2.412 2.548c-.517.639-1.584.957-2.365.707l-3.46-1.104c-.782-.25-1.716.15-2.076.892l-2.607 6.85c-.222.792.21 1.71.96 2.045l3.32 1.474c.75.333 1.335 1.28 1.297 2.1l.106 3.508c.083.817-.448 1.796-1.178 2.173l-3.229 1.669c-.729.375-1.136 1.33-.904 2.119 0 0 .548 1.849 1.268 3.451.719 1.607 1.74 3.247 1.74 3.247.434.697 1.416 1.027 2.183.73l3.392-1.302c.767-.296 1.85-.04 2.406.563l2.552 2.411c.638.515.955 1.582.706 2.365l-1.104 3.46c-.251.784.15 1.718.89 2.077l6.85 2.608c.794.222 1.713-.211 2.046-.962l1.474-3.318c.335-.751 1.28-1.337 2.101-1.3l3.508-.104c.818-.084 1.795.449 2.173 1.18l1.665 3.23c.378.73 1.332 1.138 2.12.904 0 0 1.848-.548 3.454-1.268 1.605-.72 3.245-1.74 3.245-1.74.698-.434 1.027-1.416.733-2.185l-1.303-3.388c-.297-.768-.042-1.851.562-2.407l2.411-2.553c.521-.636 1.581-.955 2.365-.705l3.46 1.105c.784.25 1.719-.15 2.08-.889l2.604-6.852c.224-.79-.209-1.712-.96-2.047L57.2 70.396c-.751-.338-1.335-1.283-1.3-2.105l-.103-3.505c-.082-.82.449-1.799 1.18-2.173l3.227-1.668c.732-.375 1.139-1.332.906-2.117 0 0-.547-1.852-1.268-3.458-.724-1.606-1.746-3.243-1.746-3.243zm-21.593 21.75a7.33 7.33 0 01-9.691-3.686A7.33 7.33 0 0130.5 60.5a7.33 7.33 0 019.69 3.689 7.328 7.328 0 01-3.686 9.688z" class="gear-one"></path><path d="M94.205 26.616c-.1-.707-.763-1.315-1.478-1.351l-3.154-.156c-.716-.035-1.488-.619-1.717-1.296L86.677 21c-.325-.637-.203-1.593.27-2.129l2.097-2.36c.474-.535.485-1.419.022-1.965l-4.528-4.48c-.55-.457-1.435-.436-1.962.043l-2.342 2.119c-.527.479-1.485.61-2.124.29l-2.825-1.149c-.679-.223-1.268-.987-1.311-1.703l-.189-3.15c-.044-.714-.657-1.373-1.366-1.465 0 0-1.664-.216-3.194-.208-1.53.007-3.19.242-3.19.242-.705.098-1.314.764-1.352 1.477l-.154 3.153c-.035.716-.619 1.486-1.295 1.715l-2.814 1.18c-.638.326-1.595.204-2.129-.272l-2.36-2.093c-.533-.476-1.419-.484-1.965-.024l-4.482 4.528c-.453.55-.434 1.436.044 1.963l2.116 2.34c.483.53.613 1.489.295 2.125l-1.151 2.828c-.222.677-.99 1.269-1.7 1.311l-3.154.188c-.712.044-1.37.659-1.462 1.366 0 0-.217 1.665-.21 3.194.008 1.528.242 3.19.242 3.19.099.706.763 1.315 1.477 1.35l3.155.157c.713.034 1.485.618 1.716 1.294l1.177 2.814c.324.636.204 1.594-.27 2.128l-2.096 2.361c-.475.535-.484 1.419-.024 1.965l4.53 4.481c.55.456 1.434.437 1.962-.043l2.342-2.118c.528-.48 1.484-.61 2.123-.293l2.826 1.15c.68.223 1.268.989 1.314 1.702l.188 3.151c.043.715.657 1.372 1.366 1.465 0 0 1.662.215 3.192.207 1.529-.006 3.191-.24 3.191-.24.708-.099 1.317-.765 1.35-1.48l.157-3.15c.035-.715.618-1.487 1.296-1.717l2.813-1.178c.636-.324 1.595-.204 2.128.27l2.363 2.095c.533.474 1.417.484 1.963.023l4.481-4.528c.456-.55.437-1.433-.043-1.962l-2.118-2.341c-.481-.53-.611-1.487-.293-2.125l1.149-2.827c.222-.678.99-1.27 1.699-1.311l3.156-.19c.712-.042 1.37-.658 1.463-1.367 0 0 .214-1.662.209-3.192-.007-1.527-.241-3.189-.241-3.189zM69.391 37.203a7.27 7.27 0 11-.072-14.537 7.27 7.27 0 01.072 14.537z" class="gear-two"></path></svg></div>';

	function database(table) {
		if (typeof table == 'undefined') {
			table = false;
			$('#database-tables').html(html_loading);
			$('#database-tables .loading').show();
		} else {
			//$('#database-tables').html(html_loading);
		}

		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?><?php echo $slash; ?>database&<?php echo $token; ?>',
			data: {table: table},
			type: 'POST',
			dataType: 'html', // json
			cache: true,
			async: true,
			success: function(json) {
				if (json) {
					if (!table) {
						$('#database-tables').replaceWith(json);
					} else {
						//$('#database-tables').replaceWith(json);
					}
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}

	function exportData() {
		var element = document.querySelector('#input-export-import-format');
		if (element.value) {
			var formData = new FormData();
			formData.append('format', element.value);

			var request = new XMLHttpRequest();
			request.open('POST', 'index.php?route=<?php echo $module_path; ?><?php echo $slash; ?>export&<?php echo $token; ?>');
			request.send(formData);
			request.responseType = 'blob';
			request.onload = function(oEvent) {
				if (request.status == 200) {
					var a = document.createElement('a');
					a.href = window.URL.createObjectURL(request.response);
					a.download = request.getResponseHeader("Content-Disposition").match(/\sfilename="([^"]+)"(\s|$)/)[1];
					a.click();
				} else {
					alert("Error " + request.status + " occurred when trying to upload your file.<br \/>");
				}
			};
		}
	}

	function importData() {
		var element = document.querySelector('#input-export-import-file');
		if (element.value) {
			var formData = new FormData();
			formData.append('import', element.files[0]);

			var request = new XMLHttpRequest();
			request.open('POST', 'index.php?route=<?php echo $module_path; ?><?php echo $slash; ?>import&<?php echo $token; ?>');
			request.send(formData);
			request.onload = function(oEvent) {
				if (request.status == 200) {
					//alert(request.response);
					window.location.href = window.location.href;
				} else {
					alert("Error " + request.status + " occurred when trying to upload your file.<br \/>");
				}
			};
		}
	}

	function copyData() {
		var element = document.querySelector('#input-export-import-copy');
		if (element.value) {
			var formData = new FormData();
			formData.append('copy', element.value);

			var request = new XMLHttpRequest();
			request.open('POST', 'index.php?route=<?php echo $module_path; ?><?php echo $slash; ?>copy&<?php echo $token; ?>');
			request.send(formData);
			request.onload = function(oEvent) {
				if (request.status == 200) {
					location.href = location.href;
				} else {
					alert("Error " + request.status + " occurred when trying to upload your file.<br \/>");
				}
			};
		}
	}

	function download(update) {
		if (update && confirm('<?php echo $text_confirm; ?>')) {
			window.location.href = 'index.php?route=<?php echo $module_path; ?><?php echo $slash; ?>download&<?php echo $token; ?>';
		} else {
			$('#support-update-view i').removeClass('fa-eye').addClass('fa-refresh fa-sync fa-spin');
			$.ajax({
				url: 'index.php?route=<?php echo $module_path; ?><?php echo $slash; ?>download&<?php echo $token; ?>',
				data: {order_id:$('#input-support-update-order-id').val(), key:$('#input-support-update-key').val()},
				type: 'POST',
				dataType: 'json',
				cache: true,
				async: true,
				success: function(json) {
					$('#support-update-view i').removeClass('fa-refresh fa-sync fa-spin').addClass('fa-eye');
					if (json) {
						if (json['message']) {
							if (json['success']) {
								$('#support-update-view').hide();
								$('#support-update').show();
							}
							$('#input-support-update-message').text(json['message']);
						}
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}

	function scrollToTop() {
		var element = $('html');
		element.animate({scrollTop: element.offset().top}, 100);
	};

	function textarea() {
		var elements, i;
		elements = document.querySelectorAll('textarea');

		for (i = 0; i < elements.length; ++i) {
			var rows = elements[i].innerHTML.split("\n").length;
			if (rows > elements[i].rows) {
				elements[i].rows = rows;
			}
			elements[i].addEventListener('keydown', function(e) {
				if (e.key == 'Tab') {
					e.preventDefault();
					var s = this.selectionStart;
					this.value = this.value.substring(0, s) + '    ' + this.value.substring(this.selectionEnd);
					this.selectionStart = this.selectionEnd = s + 4;
				}
			});
		}
	}

	function criticalnAjax(urls, i) {
		var element, l;

		if ('length' in urls) {
			l = urls.length;
		} else {
			urls = [urls];
			l = 1;
		}
		if (typeof i == 'undefined') {
			i = 0;
		}

		if (urls[i].indexOf('://') == -1) {
			urls[i] = window.location.protocol + '//' + window.location.hostname + '/' + urls[i];
		}

		element = document.createElement('iframe');
		//element.id = window.btoa(urls[i]);
		element.src = urls[i];
		element.width = window.outerWidth;
		element.height = window.outerHeight;
		element.setAttribute('data-loading', Math.round(100/l*(i+1)) + '%');
		element.hidden = true;
		element.onload = function(e) {
			setTimeout(function(element) {
				document.querySelector('.loading-block .progress-bar').style['width'] = element.getAttribute('data-loading');

				if ((i+1) >= l) {
					document.querySelector('.loading-block .text').innerHTML = '<span class="text-success"><?php echo $success_add; ?></span>';
					document.querySelector('.loading-block .progress-bar').classList.remove('progress-bar-info', 'progress-bar-success', 'progress-bar-danger');
					document.querySelector('.loading-block .progress-bar').classList.add('progress-bar-success');

					setTimeout(function() {
						document.querySelector('.loading-block').style['display'] = 'none';
						document.querySelector('#pagespeed-critical-update').disabled = false;
						document.querySelector('#pagespeed-critical-update i').classList.remove('fa-spin');
					}, 3000);

					$.ajax('<?php echo str_replace('&amp;', '&', $clear); ?>&caches=1');
				} else {
					i++;
					criticalnAjax(urls, i);
				}

				//element.parentNode.removeChild(element);
			}, <?php echo (int)$pagespeed_css_critical_time; ?> + 100, e.target);
		};
		element.onerror = function(e) {
			document.querySelector('.loading-block .text').innerHTML = '<span class="text-danger"><?php echo $error_install; ?></span>';
			document.querySelector('.loading-block .progress-bar').style['width'] = e.target.getAttribute('data-loading');
			document.querySelector('.loading-block .progress-bar').classList.remove('progress-bar-info', 'progress-bar-success', 'progress-bar-danger');
			document.querySelector('.loading-block .progress-bar').classList.add('progress-bar-danger');

			if ((i+1) >= l) {
				setTimeout(function() {
					document.querySelector('.loading-block').style['display'] = 'none';
					document.querySelector('#pagespeed-critical-update').disabled = false;
					document.querySelector('#pagespeed-critical-update i').classList.remove('fa-spin');
				}, 3000);
			}

			e.target.parentNode.removeChild(e.target);
		};
		document.body.appendChild(element);
	}

	function critical(clear) {
		if (clear) {
			scrollToTop();
			document.querySelector('#pagespeed-critical-update').disabled = true;
			document.querySelector('#pagespeed-critical-update i').classList.add('fa-spin');
		}

		document.querySelector('.loading-block .text').innerHTML = '<span class="text-info"><?php echo $text_loading; ?> Critical</span>';
		document.querySelector('.loading-block .progress-bar').style['width'] = '0%';
		document.querySelector('.loading-block .progress-bar').classList.remove('progress-bar-info', 'progress-bar-success', 'progress-bar-danger');
		document.querySelector('.loading-block .progress-bar').classList.add('progress-bar-info');
		document.querySelector('.loading-block').style['display'] = '';

		criticalnAjax(document.querySelector('[name="pagespeed_css_critical_links"]').value.replace("\r", '').split("\n"));
	}

	function pregeneration(clear) {
		if (clear) {
			scrollToTop();
			document.querySelector('#cron-pregeneration-update').disabled = true;
			document.querySelector('#cron-pregeneration-update i').classList.add('fa-spin');
		}

		document.querySelector('.loading-block .text').innerHTML = '<span class="text-info"><?php echo $text_loading; ?> Pregeneration Cache</span>';
		document.querySelector('.loading-block .progress-bar').style['width'] = '0%';
		document.querySelector('.loading-block .progress-bar').classList.remove('progress-bar-info', 'progress-bar-success', 'progress-bar-danger');
		document.querySelector('.loading-block .progress-bar').classList.add('progress-bar-info');
		document.querySelector('.loading-block').style['display'] = '';

		var i, l, elements;

		//criticalnAjax(document.querySelector('[name="pagespeed_css_critical_links"]').value.replace("\r", '').split("\n"));

		l = 0;

		for (i = 0; i < l; ++i) {
			//$.ajax();
		}

		setTimeout(function() {
			document.querySelector('.loading-block').style['display'] = 'none';
			document.querySelector('#cron-pregeneration-update').disabled = false;
			document.querySelector('#cron-pregeneration-update i').classList.remove('fa-spin');
		}, 3000);
	}

	function supportGetStats(clear) {
		if (clear) {
			scrollToTop();
			document.querySelector('#support-stats-update').disabled = true;
			document.querySelector('#support-stats-update i').classList.add('fa-spin');
		}

		document.querySelector('.loading-block .text').innerHTML = '<span class="text-info"><?php echo $text_support_stats_loading; ?></span>';
		document.querySelector('.loading-block .progress-bar').style['width'] = '0%';
		document.querySelector('.loading-block .progress-bar').classList.remove('progress-bar-info', 'progress-bar-success', 'progress-bar-danger');
		document.querySelector('.loading-block .progress-bar').classList.add('progress-bar-info');
		document.querySelector('.loading-block').style['display'] = '';

		var time, timeall, bustimerId;
		time = <?php echo (int)(ini_get('default_socket_timeout') < ini_get('max_execution_time') ? ini_get('default_socket_timeout') : ini_get('max_execution_time')); ?> * 1000;
		if (time == 0) {
			time = 2000;
		}
		timeall = 0;
		bustimerId = setInterval(function() {
			timeall += 100;
			document.querySelector('.loading-block .progress-bar').style['width'] = Math.round(100 / time * timeall) + '%';
		}, 100);

		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?><?php echo $slash; ?>getStats&<?php echo $token; ?>' + (clear ? '&clear=1' : ''),
			dataType: 'json',
			success: function(data) {
				if (typeof data == 'object') {
					var i;
					for (i in data) {
						if (i in window) {
							window[i].innerText = data[i];
						}
					}

					document.querySelector('.loading-block .text').innerHTML = '<span class="text-success"><?php echo $text_support_stats_success; ?></span>';
					document.querySelector('.loading-block .progress-bar').style['width'] = '100%';
					document.querySelector('.loading-block .progress-bar').classList.remove('progress-bar-info', 'progress-bar-success', 'progress-bar-danger');
					document.querySelector('.loading-block .progress-bar').classList.add('progress-bar-success');
				} else {
					document.querySelector('.loading-block .text').innerHTML = '<span class="text-danger"><?php echo $text_support_stats_danger; ?></span>';
					document.querySelector('.loading-block .progress-bar').style['width'] = '100%';
					document.querySelector('.loading-block .progress-bar').classList.remove('progress-bar-info', 'progress-bar-success', 'progress-bar-danger');
					document.querySelector('.loading-block .progress-bar').classList.add('progress-bar-danger');
				}

				setTimeout(function() {
					document.querySelector('.loading-block').style['display'] = 'none';
					document.querySelector('#support-stats-update').disabled = false;
					document.querySelector('#support-stats-update i').classList.remove('fa-spin');
				}, 3000);

				clearInterval(bustimerId);
			},
			'error': function() {
				document.querySelector('.loading-block .text').innerHTML = '<span class="text-danger"><?php echo $text_support_stats_danger; ?></span>';
				document.querySelector('.loading-block .progress-bar').style['width'] = '100%';
				document.querySelector('.loading-block .progress-bar').classList.remove('progress-bar-info', 'progress-bar-success', 'progress-bar-danger');
				document.querySelector('.loading-block .progress-bar').classList.add('progress-bar-danger');

				setTimeout(function() {
					document.querySelector('.loading-block').style['display'] = 'none';
					document.querySelector('#support-stats-update').disabled = false;
					document.querySelector('#support-stats-update i').classList.remove('fa-spin');
				}, 3000);

				clearInterval(bustimerId);
			}
		});
	}

	$('select[name="cache_status"]').change(function() {
		if ($('select[name="cache_status"]').val() > 0) {
			$('textarea[name="cache_ses"]').parent().parent().fadeIn();
			$('textarea[name="cache_cok"]').parent().parent().fadeIn();
			$('textarea[name="cache_par"]').parent().parent().fadeIn();
			$('textarea[name="cache_onrot"]').parent().parent().fadeIn();
			$('textarea[name="cache_rot"]').parent().parent().fadeIn();
			$('select[name="cache_customer"]').parent().parent().fadeIn();
			$('input[name="cache_cart_count"]').parent().parent().fadeIn();
			$('input[name="cache_expire_all"]').parent().parent().fadeIn();
		} else {
			$('textarea[name="cache_ses"]').parent().parent().fadeOut(1);
			$('textarea[name="cache_cok"]').parent().parent().fadeOut(1);
			$('textarea[name="cache_par"]').parent().parent().fadeOut(1);
			$('textarea[name="cache_onrot"]').parent().parent().fadeOut(1);
			$('textarea[name="cache_rot"]').parent().parent().fadeOut(1);
			$('select[name="cache_customer"]').parent().parent().fadeOut(1);
			$('input[name="cache_cart_count"]').parent().parent().fadeOut(1);
			$('input[name="cache_expire_all"]').parent().parent().fadeOut(1);
		}
	});
	$('select[name="cache_status"]').trigger("change");

	$('select[name="cache_oc"]').change(function() {
		if ($('select[name="cache_oc"]').val() > 0) {
			$('input[name="cache_expire"]').parent().parent().fadeIn();
		} else {
			$('input[name="cache_expire"]').parent().parent().fadeOut(1);
		}
	});
	$('select[name="cache_oc"]').trigger("change");

	$('select[name="pagespeed_status"]').change(function() {
		if ($('select[name="pagespeed_status"]').val() == 1) {
			$('[name*="pagespeed"]:not([name="pagespeed_status"])').parent().parent().fadeIn();
			$('input[name*="pagespeed_html_min"]').parent().parent().parent().parent().parent().fadeIn();
			$('input[name*="pagespeed_css_min"]').parent().parent().parent().parent().parent().fadeIn();
			$('input[name*="pagespeed_js_min"]').parent().parent().parent().parent().parent().fadeIn();
			$('select[name="pagespeed_css_critical"]').trigger("change");
		} else {
			$('[name*="pagespeed"]:not([name="pagespeed_status"])').parent().parent().fadeOut(1);
			$('input[name*="pagespeed_html_min"]').parent().parent().parent().parent().parent().fadeOut(1);
			$('input[name*="pagespeed_css_min"]').parent().parent().parent().parent().parent().fadeOut(1);
			$('input[name*="pagespeed_js_min"]').parent().parent().parent().parent().parent().fadeOut(1);
		}
		$('[name*="pagespeed_image"]').parent().parent().fadeIn();
		$('select[name="pagespeed_image_first_boot_status"]').trigger("change");
		$('select[name="pagespeed_image_webp_status"]').trigger("change");
	});
	$('select[name="pagespeed_status"]').trigger("change");

	$('select[name="pagespeed_image_webp_status"]').change(function() {
		if ($('select[name="pagespeed_image_webp_status"]').val() == 1) {
			$('[name*="pagespeed_image_webp"]:not([name="pagespeed_image_webp_status"])').parent().parent().fadeIn();
		} else {
			$('[name*="pagespeed_image_webp"]:not([name="pagespeed_image_webp_status"])').parent().parent().fadeOut(1);
		}
	});
	$('select[name="pagespeed_image_webp_status"]').trigger("change");

	$('select[name="pagespeed_image_first_boot_status"]').change(function() {
		if ($('select[name="pagespeed_image_first_boot_status"]').val() == 1) {
			$('[name*="pagespeed_image_first_boot"]:not([name="pagespeed_image_first_boot_status"])').parent().parent().fadeIn();
		} else {
			$('[name*="pagespeed_image_first_boot"]:not([name="pagespeed_image_first_boot_status"])').parent().parent().fadeOut(1);
		}
	});
	$('select[name="pagespeed_image_first_boot_status"]').trigger("change");

	$('select[name="pagespeed_css_critical"]').change(function() {
		if ($('select[name="pagespeed_css_critical"]').val() == 1) {
			$('[name*="pagespeed_css_critical"]:not([name="pagespeed_css_critical"])').parent().parent().fadeIn();
		} else {
			$('[name*="pagespeed_css_critical"]:not([name="pagespeed_css_critical"])').parent().parent().fadeOut(1);
		}
	});
	$('select[name="pagespeed_css_critical"]').trigger("change");

	$('select[name="support_stats_status"]').change(function() {
		if ($('select[name="support_stats_status"]').val() == 1) {
			$('.support_stats_status').fadeIn();
		} else {
			$('.support_stats_status').fadeOut(1);
		}
	});
	$('select[name="support_stats_status"]').trigger("change");

	textarea();

	var i;
	var element = document.querySelector('.nav-tabs');
	var s = window.localStorage.getItem('bus-cache-nav-tabs');

	if (element) {
		if (s) {
			if (s == '#tab-database') {
				database();
			}
			var x, e = element.querySelector('[href="' + s + '"]');
			if (e) {
				x = document.querySelector('.nav-tabs li.active');
				if (x) {
					x.classList.remove('active');
				}
				x = document.querySelector('.nav-tabs a.active');
				if (x) {
					x.classList.remove('active');
				}
				e.parentNode.classList.add('active');
				e.classList.add('active');
				x = document.querySelector('.tab-content .active');
				if (x) {
					x.classList.remove('active');
				}
				x = document.querySelector(s);
				if (x) {
					x.classList.add('active');
				}
			}
		}

		element.addEventListener('click', function(e) {
			if (e.target.hash == '#tab-database') {
				database();
			}
			window.localStorage.setItem('bus-cache-nav-tabs', e.target.hash);
		});
	}

	window.addEventListener('scroll', function(e) {
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});

<?php if (!$documentation_status) { ?>
	var x, p, e, btns = $('label span').parent();

	for (i = 0; i < btns.length; ++i) {
		x = $(btns[i]).parent().find('[name]').attr('name');
		p = x.indexOf('[');
		if (p != -1) {
			x = x.slice(0, p);
		}
		if ($('#documentation-' + x).length != 0) {
			//$(btns[i]).prepend('<a data-doc-id="#documentation-' + x + '" data-href="' + window.location.href + ' #documentation-' + x + '" data-toggle="tooltip" title="<?php echo $tab_documentation; ?>" class="documentation btn btn-primary btn-sm"><i class="fa fa-question"></i></a> ');
			$(btns[i]).parent().find('.col-sm-10').prepend('<a data-doc-id="#documentation-' + x + '" data-href="' + window.location.href + ' #documentation-' + x + '" data-toggle="tooltip" title="<?php echo $tab_documentation; ?>" class="documentation btn btn-default btn-outline-dark btn-sm" style="display: block;"><i class="fa fa-question"></i></a>');
		}
	}

	$(document).delegate('.documentation', 'click', function(e) {
		e.preventDefault();

		$('#documentation-modal').remove();

		var element = this;

		html  = '<div id="documentation-modal" class="modal">';
		html += '  <div class="modal-dialog" style="width:100%;">';
		html += '    <div class="modal-content">';
		html += '      <div class="modal-header">';
		html += '        <button type="button" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-hidden="true"><i class="fa fa-close fa-times"></i></button></br>';
		//html += '        <h4 class="modal-title">' + element.innerText + '</h4>';
		html += '      </div>';
		html += '      <div class="modal-body">';
		html += '        ' + html_loading;
		html += '        <div class="doc"></div>';
		html += '      </div>';
		html += '    </div>';
		html += '  </div>';
		html += '</div>';

		$('body').append(html);
		$('#documentation-modal .loading').show();
		$('#documentation-modal').modal('show').css('padding-right', '0');

		var iframe = $('#documentation-modal .modal-body .doc');

		if (1 == 1) {
			iframe.html($(element.getAttribute('data-doc-id')).html());

			$('#documentation-modal .loading').hide();
			textarea();
		} else {
			iframe.load(element.getAttribute('data-href'), function() {
				$('#documentation-modal .loading').hide();
				textarea();
				iframe.show();
			});
		}
	});
<?php } ?>
<?php if ($pagespeed_css_critical && !is_dir(DIR_IMAGE . 'bus_cache/css/critical/')) { ?>
	critical();
<?php } ?>
<?php if (!$support_cache_status) { ?>
	supportGetStats();
<?php } ?>
//--></script>
<!-- // *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
     // *   © 2016-2024; BuslikDrev - Усе правы захаваны. -->
<?php echo $footer; ?>
<?php } ?>