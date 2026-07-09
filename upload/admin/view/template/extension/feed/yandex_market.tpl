<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-yandex-market" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-yandex-market" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
              <select name="yandex_market_status" id="input-status" class="form-control">
                <?php if ($yandex_market_status) { ?>
                <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                <option value="0"><?php echo $text_disabled; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_enabled; ?></option>
                <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-secret-key"><span data-toggle="tooltip" title="<?php echo $help_secret_key; ?>"><?php echo $entry_secret_key; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="yandex_market_secret_key" value="<?php echo $yandex_market_secret_key; ?>" placeholder="<?php echo $entry_secret_key; ?>" id="input-secret-key" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-shopname"><span data-toggle="tooltip" title="<?php echo $help_shopname; ?>"><?php echo $entry_shopname; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="yandex_market_shopname" value="<?php echo $yandex_market_shopname; ?>" placeholder="<?php echo $entry_shopname; ?>" id="input-shopname" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-company"><span data-toggle="tooltip" title="<?php echo $help_company; ?>"><?php echo $entry_company; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="yandex_market_company" value="<?php echo $yandex_market_company; ?>" placeholder="<?php echo $entry_company; ?>" id="input-company" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-id"><span data-toggle="tooltip" title="<?php echo $help_id; ?>"><?php echo $entry_id; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_id" id="input-id" class="form-control">
                <?php if ($yandex_market_id == 'model') { ?> 
                <option value="product_id"><?php echo $text_product_id; ?></option>
                <option value="model" selected="selected"><?php echo $text_model; ?></option>
                <option value="sku"><?php echo $text_sku; ?></option>
                <?php } elseif ($yandex_market_id == 'sku') { ?> 
                <option value="product_id"><?php echo $text_product_id; ?></option>
                <option value="model"><?php echo $text_model; ?></option>
                <option value="sku" selected="selected"><?php echo $text_sku; ?></option>
                <?php } else { ?>
                <option value="product_id" selected="selected"><?php echo $text_product_id; ?></option>
                <option value="model"><?php echo $text_model; ?></option>
                <option value="sku"><?php echo $text_sku; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-type"><span data-toggle="tooltip" title="<?php echo $help_type; ?>"><?php echo $entry_type; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_type" id="input-type" class="form-control">
                <?php if ($yandex_market_type == 'vendor.model') { ?>
                <option value=""><?php echo $text_simplified; ?></option>
                <option value="vendor.model" selected="selected"><?php echo $text_vendor_model; ?></option>
                <option value="medicine" disabled="disabled"><?php echo $text_medicine; ?></option>
                <option value="books" disabled="disabled"><?php echo $text_books; ?></option>
                <option value="audiobooks" disabled="disabled"><?php echo $text_audiobooks; ?></option>
                <option value="artist.title" disabled="disabled"><?php echo $text_artist_title; ?></option>
                <option value="event-ticket" disabled="disabled"><?php echo $text_event_ticket; ?></option>
                <option value="tour" disabled="disabled"><?php echo $text_tour; ?></option>
                <?php } elseif ($yandex_market_type == 'medicine') { ?>
                <option value=""><?php echo $text_simplified; ?></option>
                <option value="vendor.model"><?php echo $text_vendor_model; ?></option>
                <option value="medicine" disabled="disabled" selected="selected"><?php echo $text_medicine; ?></option>
                <option value="books" disabled="disabled"><?php echo $text_books; ?></option>
                <option value="audiobooks" disabled="disabled"><?php echo $text_audiobooks; ?></option>
                <option value="artist.title" disabled="disabled"><?php echo $text_artist_title; ?></option>
                <option value="event-ticket" disabled="disabled"><?php echo $text_event_ticket; ?></option>
                <option value="tour" disabled="disabled"><?php echo $text_tour; ?></option>
                <?php } elseif ($yandex_market_type == 'books') { ?>
                <option value=""><?php echo $text_simplified; ?></option>
                <option value="vendor.model"><?php echo $text_vendor_model; ?></option>
                <option value="medicine" disabled="disabled"><?php echo $text_medicine; ?></option>
                <option value="books" disabled="disabled" selected="selected"><?php echo $text_books; ?></option>
                <option value="audiobooks" disabled="disabled"><?php echo $text_audiobooks; ?></option>
                <option value="artist.title" disabled="disabled"><?php echo $text_artist_title; ?></option>
                <option value="event-ticket" disabled="disabled"><?php echo $text_event_ticket; ?></option>
                <option value="tour" disabled="disabled"><?php echo $text_tour; ?></option>
                <?php } elseif ($yandex_market_type == 'audiobooks') { ?>
                <option value=""><?php echo $text_simplified; ?></option>
                <option value="vendor.model"><?php echo $text_vendor_model; ?></option>
                <option value="medicine" disabled="disabled"><?php echo $text_medicine; ?></option>
                <option value="books" disabled="disabled"><?php echo $text_books; ?></option>
                <option value="audiobooks" disabled="disabled" selected="selected"><?php echo $text_audiobooks; ?></option>
                <option value="artist.title" disabled="disabled"><?php echo $text_artist_title; ?></option>
                <option value="event-ticket" disabled="disabled"><?php echo $text_event_ticket; ?></option>
                <option value="tour" disabled="disabled"><?php echo $text_tour; ?></option>
                <?php } elseif ($yandex_market_type == 'artist.title') { ?>
                <option value=""><?php echo $text_simplified; ?></option>
                <option value="vendor.model"><?php echo $text_vendor_model; ?></option>
                <option value="medicine" disabled="disabled"><?php echo $text_medicine; ?></option>
                <option value="books" disabled="disabled"><?php echo $text_books; ?></option>
                <option value="audiobooks" disabled="disabled"><?php echo $text_audiobooks; ?></option>
                <option value="artist.title" disabled="disabled" selected="selected"><?php echo $text_artist_title; ?></option>
                <option value="event-ticket" disabled="disabled"><?php echo $text_event_ticket; ?></option>
                <option value="tour" disabled="disabled"><?php echo $text_tour; ?></option>
                <?php } elseif ($yandex_market_type == 'event-ticket') { ?>
                <option value=""><?php echo $text_simplified; ?></option>
                <option value="vendor.model"><?php echo $text_vendor_model; ?></option>
                <option value="medicine" disabled="disabled"><?php echo $text_medicine; ?></option>
                <option value="books" disabled="disabled"><?php echo $text_books; ?></option>
                <option value="audiobooks" disabled="disabled"><?php echo $text_audiobooks; ?></option>
                <option value="artist.title" disabled="disabled"><?php echo $text_artist_title; ?></option>
                <option value="event-ticket" disabled="disabled" selected="selected"><?php echo $text_event_ticket; ?></option>
                <option value="tour" disabled="disabled"><?php echo $text_tour; ?></option>
                <?php } elseif ($yandex_market_type == 'tour') { ?>
                <option value=""><?php echo $text_simplified; ?></option>
                <option value="vendor.model"><?php echo $text_vendor_model; ?></option>
                <option value="medicine" disabled="disabled"><?php echo $text_medicine; ?></option>
                <option value="books" disabled="disabled"><?php echo $text_books; ?></option>
                <option value="audiobooks" disabled="disabled"><?php echo $text_audiobooks; ?></option>
                <option value="artist.title" disabled="disabled"><?php echo $text_artist_title; ?></option>
                <option value="event-ticket" disabled="disabled"><?php echo $text_event_ticket; ?></option>
                <option value="tour" disabled="disabled" selected="selected"><?php echo $text_tour; ?></option>
                <?php } else { ?>
                <option value="" selected="selected"><?php echo $text_simplified; ?></option>
                <option value="vendor.model"><?php echo $text_vendor_model; ?></option>
                <option value="medicine" disabled="disabled"><?php echo $text_medicine; ?></option>
                <option value="books" disabled="disabled"><?php echo $text_books; ?></option>
                <option value="audiobooks" disabled="disabled"><?php echo $text_audiobooks; ?></option>
                <option value="artist.title" disabled="disabled"><?php echo $text_artist_title; ?></option>
                <option value="event-ticket" disabled="disabled"><?php echo $text_event_ticket; ?></option>
                <option value="tour" disabled="disabled"><?php echo $text_tour; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name"><span data-toggle="tooltip" title="<?php echo $help_name; ?>"><?php echo $entry_name; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_name" id="input-name" class="form-control">
                <?php foreach ($code_man as $result) { ?>
                <?php if ($result != 'not_unload') { ?>
                <option value="<?php echo $result; ?>"<?php if ($yandex_market_name == $result) { ?> selected="selected"<?php } ?> ><?php echo ${'text_' . $result}; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-model"><span data-toggle="tooltip" title="<?php echo $help_model; ?>"><?php echo $entry_model; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_model" id="input-model" class="form-control">
                <?php foreach ($code_man as $result) { ?>
                <?php if ($result == 'not_unload') { ?> 
                <option value=""<?php if ($yandex_market_model == $result) { ?> selected="selected"<?php } ?> ><?php echo ${'text_' . $result}; ?></option>
                <?php } else { ?>
                <option value="<?php echo $result; ?>"<?php if ($yandex_market_model == $result) { ?> selected="selected"<?php } ?> ><?php echo ${'text_' . $result}; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-vendorcode"><span data-toggle="tooltip" title="<?php echo $help_vendorcode; ?>"><?php echo $entry_vendorcode; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_vendorcode" id="input-vendorcode" class="form-control">
                <?php foreach ($code_man as $result) { ?>
                <?php if ($result == 'not_unload') { ?>
                <option value=""<?php if ($yandex_market_vendorcode == $result) { ?> selected="selected"<?php } ?> ><?php echo ${'text_' . $result}; ?></option>
                <?php } else { ?>
                <option value="<?php echo $result; ?>"<?php if ($yandex_market_vendorcode == $result) { ?> selected="selected"<?php } ?> ><?php echo ${'text_' . $result}; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-barcode"><span data-toggle="tooltip" title="<?php echo $help_barcode; ?>"><?php echo $entry_barcode; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_barcode" id="input-barcode" class="form-control">
                <?php foreach ($code_man as $result) { ?>
                <?php if ($result == 'not_unload') { ?>
                <option value=""<?php if ($yandex_market_barcode == $result) { ?> selected="selected"<?php } ?> ><?php echo ${'text_' . $result}; ?></option>
                <?php } else { ?>
                <option value="<?php echo $result; ?>"<?php if ($yandex_market_barcode == $result) { ?> selected="selected"<?php } ?> ><?php echo ${'text_' . $result}; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-image"><span data-toggle="tooltip" title="<?php echo $help_image; ?>"><?php echo $entry_image; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_image" id="input-image" class="form-control">
                <?php if ($yandex_market_image) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_image_resize; ?>"><?php echo $entry_image_resize; ?></span></label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-6">
                  <input type="number" name="yandex_market_image_width" value="<?php echo $yandex_market_image_width; ?>" placeholder="<?php echo $text_width; ?>" class="form-control" />
                </div>
                <div class="col-sm-6">
                  <input type="number" name="yandex_market_image_height" value="<?php echo $yandex_market_image_height; ?>" placeholder="<?php echo $text_height; ?>" class="form-control" />
                </div>
              </div>
              <?php if ($error_image_width) { ?>
              <div class="text-danger"><?php echo $error_image_width; ?></div>
              <?php } ?>
              <?php if ($error_image_height) { ?>
              <div class="text-danger"><?php echo $error_image_height; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-image-quantity"><span data-toggle="tooltip" title="<?php echo $help_image_quantity; ?>"><?php echo $entry_image_quantity; ?></span></label>
            <div class="col-sm-10">
              <input type="number" name="yandex_market_image_quantity" value="<?php echo $yandex_market_image_quantity; ?>" placeholder="<?php echo $entry_image_quantity; ?>" id="input-image-quantity" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-desc-html"><span data-toggle="tooltip" title="<?php echo $help_desc_html; ?>"><?php echo $entry_desc_html; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_desc_html" id="input-desc-html" class="form-control">
                <?php if ($yandex_market_desc_html) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-param"><span data-toggle="tooltip" title="<?php echo $help_param; ?>"><?php echo $entry_param; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_param" id="input-param" class="form-control">
                <?php if ($yandex_market_param) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-main-category"><span data-toggle="tooltip" title="<?php echo $help_main_category; ?>"><?php echo $entry_main_category; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_main_category" id="input-main-category" class="form-control">
                <?php if ($yandex_market_main_category) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_category; ?>"><?php echo $entry_category; ?></span></label>
            <div class="col-sm-10">
              <div class="well well-sm" style="height: 150px; overflow: auto;">
                <?php foreach ($categories as $category) { ?>
                <div class="checkbox">
                  <label>
                    <?php if (in_array($category['category_id'], $yandex_market_categories)) { ?>
                    <input type="checkbox" name="yandex_market_categories[]" value="<?php echo $category['category_id']; ?>" checked="checked" />
                    <?php echo $category['name']; ?> 
                    <?php } else { ?>
                    <input type="checkbox" name="yandex_market_categories[]" value="<?php echo $category['category_id']; ?>" />
                    <?php echo $category['name']; ?> 
                    <?php } ?>
                  </label>
                </div>
                <?php } ?>
              </div>
              <a style="cursor:default;" onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a style="cursor:default;" onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_manufacturer; ?>"><?php echo $entry_manufacturer; ?></span></label>
            <div class="col-sm-10">
              <div class="well well-sm" style="height: 150px; overflow: auto;">
                <?php foreach ($manufacturers as $manufacturer) { ?>
                <div class="checkbox">
                  <label>
                    <?php if (in_array($manufacturer['manufacturer_id'], $yandex_market_manufacturers)) { ?>
                    <input type="checkbox" name="yandex_market_manufacturers[]" value="<?php echo $manufacturer['manufacturer_id']; ?>" checked="checked" />
                    <?php echo $manufacturer['name']; ?>
                    <?php } else { ?> 
                    <input type="checkbox" name="yandex_market_manufacturers[]" value="<?php echo $manufacturer['manufacturer_id']; ?>" />
                    <?php echo $manufacturer['name']; ?>
                    <?php } ?>
                  </label>
                </div>
                <?php } ?>
              </div>
              <a style="cursor:default;" onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a style="cursor:default;" onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="<?php echo $help_currency; ?>"><?php echo $entry_currency; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_currency" id="input-currency" class="form-control">
                <?php foreach ($currencies as $currency) { ?>
                <?php if ($currency['code'] == $yandex_market_currency) { ?>
                <option value="<?php echo $currency['code']; ?>" selected="selected"><?php echo '(' . $currency['code'] .  ') ' . $currency['title']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $currency['code']; ?>"><?php echo '(' . $currency['code'] .  ') ' . $currency['title']; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-in-stock"><span data-toggle="tooltip" title="<?php echo $help_in_stock; ?>"><?php echo $entry_in_stock; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_in_stock" id="input-in-stock" class="form-control">
                <?php foreach ($stock_statuses as $stock_status) { ?>
                <?php if ($stock_status['stock_status_id'] == $yandex_market_in_stock) { ?>
                <option value="<?php echo $stock_status['stock_status_id']; ?>" selected="selected"><?php echo $stock_status['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $stock_status['stock_status_id']; ?>"><?php echo $stock_status['name']; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-out-of-stock"><span data-toggle="tooltip" title="<?php echo $help_out_of_stock; ?>"><?php echo $entry_out_of_stock; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_out_of_stock" id="input-out-of-stock" class="form-control">
                <?php foreach ($stock_statuses as $stock_status) { ?>
                <?php if ($stock_status['stock_status_id'] == $yandex_market_out_of_stock) { ?>
                <option value="<?php echo $stock_status['stock_status_id']; ?>" selected="selected"><?php echo $stock_status['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $stock_status['stock_status_id']; ?>"><?php echo $stock_status['name']; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-preorder"><span data-toggle="tooltip" title="<?php echo $help_preorder; ?>"><?php echo $entry_preorder; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_preorder" id="input-preorder" class="form-control">
                <?php foreach ($stock_statuses as $stock_status) { ?>
                <?php if ($stock_status['stock_status_id'] == $yandex_market_preorder) { ?>
                <option value="<?php echo $stock_status['stock_status_id']; ?>" selected="selected"><?php echo $stock_status['name']; ?></option>
                <?php } else { ?>
                <option value="<?php echo $stock_status['stock_status_id']; ?>"><?php echo $stock_status['name']; ?></option>
                <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-quantity-status"><span data-toggle="tooltip" title="<?php echo $help_quantity_status; ?>"><?php echo $entry_quantity_status; ?></span></label>
            <div class="col-sm-10">
              <select name="yandex_market_quantity_status" id="input-quantity-status" class="form-control">
                <?php if ($yandex_market_quantity_status) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-from-charset"><?php echo $entry_from_charset; ?></label>
            <div class="col-sm-10">
              <select name="yandex_market_from_charset" id="input-from-charset" class="form-control">
                <?php if ($yandex_market_from_charset == 'windows-1251') { ?>
                <option value="windows-1251" selected="selected">windows-1251</option>
                <option value="UTF-8">UTF-8</option>
                <?php } else { ?>
                <option value="windows-1251">windows-1251</option>
                <option value="UTF-8" selected="selected">UTF-8</option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-data-feed"><?php echo $entry_data_feed; ?></label>
            <div class="col-sm-10">
              <textarea rows="5" readonly id="input-data-feed" class="form-control"><?php echo $data_feed; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div style="text-align:center;" class="col-sm-12">
              <?php echo $help_yandex_market; ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>
