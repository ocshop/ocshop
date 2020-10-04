<?php echo $header; ?><?php echo $column_left; ?>
<!-- // *   Аўтар: "БуслікДрэў" ( http://buslikdrev.by/ )
	 // *   © 2016-2020; BuslikDrev - Усе правы захаваныя.
	 // *   Спецыяльна для сайта: "OpenCart.pro" ( http://opencart.pro/ ) -->
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
		<button type="button" onclick="$('input[name=\'apply\']').val('1'); $('#' + $('#content form').attr('id')).submit();" data-toggle="tooltip" title="<?php echo $button_apply; ?>" class="btn btn-success"><i class="fa fa-save"></i></button>
        <button type="submit" form="form-bus-menu" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $export; ?>" data-toggle="tooltip" title="<?php echo $button_export; ?>" class="btn btn-default"><i class="fa fa-download"></i></a>
        <button type="button" onclick="$('input[name=\'import\']').trigger('click');" data-toggle="tooltip" title="<?php echo $button_import; ?>" class="btn btn-default"><i class="fa fa-upload"></i></button>
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
	    <div id="heading-title">
	      <h2><b><?php echo $text_horizontal; ?></b></h2>
		</div>
		<input type="file" name="import" value="" onchange="importData();" placeholder="" class="form-control hidden" />
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-bus-menu" class="form-horizontal">
		  <input type="hidden" id="apply" name="apply" value="0">
          <div class="form-group">
		    <label class="col-sm-2 control-label" for="input-type"><span title="<?php echo $help_type; ?>" data-toggle="tooltip"><?php echo $entry_type; ?></span></label>
		    <div class="col-sm-10">
			  <select name="type" id="input-type" class="form-control">
				<?php if ($type == '1') { ?>
				<option value="0"><?php echo $text_horizontal; ?></option>
				<option value="1" selected="selected"><?php echo $text_vertical; ?></option>
				<option value="2"><?php echo $text_cell; ?></option>
				<?php } elseif ($type == '2') { ?>
				<option value="0"><?php echo $text_horizontal; ?></option>
				<option value="1"><?php echo $text_vertical; ?></option>
				<option value="2" selected="selected"><?php echo $text_cell; ?></option>
				<?php } else { ?>
				<option value="0" selected="selected"><?php echo $text_horizontal; ?></option>
				<option value="1"><?php echo $text_vertical; ?></option>
				<option value="2"><?php echo $text_cell; ?></option>
				<?php } ?>
			  </select>
			</div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name"><span title="<?php echo $help_name; ?>" data-toggle="tooltip"><?php echo $entry_name; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $entry_name; ?>" id="input-name" class="form-control" />
              <?php if ($error_name) { ?>
              <div class="text-danger"><?php echo $error_name; ?></div>
              <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $entry_store; ?></label>
            <div class="col-sm-10">
              <div class="well well-sm" style="height: 150px; overflow: auto;">
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
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-main-menu"><span title="<?php echo $help_main_menu; ?>" data-toggle="tooltip"><?php echo $entry_main_menu; ?></span></label>
            <div class="col-sm-10">
			  <select name="bus_menu" id="input-main-menu" class="form-control">
                <option value="1"<?php if ($bus_menu) { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
			    <option value="0"<?php if (!$bus_menu) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
            <div class="col-sm-10">
			  <select name="status" id="input-status" class="form-control">
                <option value="1"<?php if ($status == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
			    <option value="0"<?php if (!$status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
			  </select>
            </div>
          </div>
		  <legend><b><?php echo $tab_setting; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-site-name-1"><span title="<?php echo $help_site_name; ?>" data-toggle="tooltip"><?php echo $entry_site_name; ?></span></label>
            <div class="col-sm-10">
			  <?php foreach ($languages as $language) { ?>
			  <div class="input-group">
				<span class="input-group-addon"><img src="<?php echo version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png'; ?>" title="<?php echo $language['name']; ?>" /></span>
				<input type="text" name="site_name[<?php echo $language['language_id']; ?>]" value="<?php echo isset($site_name[$language['language_id']]) ? $site_name[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_site_name; ?>" id="input-site-name-<?php echo $language['language_id']; ?>" class="form-control" />
			  </div>
			  <?php } ?>
			</div>
          </div>
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-site-link-1"><span title="<?php echo $help_site_link; ?>" data-toggle="tooltip"><?php echo $entry_site_link; ?></span></label>
            <div class="col-sm-10">
			  <?php foreach ($languages as $language) { ?>
			  <div class="input-group">
				<span class="input-group-addon"><img src="<?php echo version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png'; ?>" title="<?php echo $language['name']; ?>" /></span>
				<input type="text" name="site_link[<?php echo $language['language_id']; ?>]" value="<?php echo isset($site_link[$language['language_id']]) ? $site_link[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_site_link; ?>" id="input-site-link-<?php echo $language['language_id']; ?>" class="form-control" />
			  </div>
			  <?php } ?>
			</div>
          </div>
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-site-ico"><span title="<?php echo $help_site_ico; ?>" data-toggle="tooltip"><?php echo $entry_site_ico; ?></span></label>
            <div class="col-sm-10">
			  <select id="input-site-type-ico" class="form-control">
				<option value="1"<?php if ($site_ico != strip_tags(html_entity_decode($site_ico, ENT_QUOTES, 'UTF-8'))) { ?> selected="selected"<?php } ?>><?php echo $text_ico; ?></option>
				<option value="2"<?php if ($site_ico == strip_tags(html_entity_decode($site_ico, ENT_QUOTES, 'UTF-8'))) { ?> selected="selected"<?php } ?>><?php echo $text_image; ?></option>
			  </select>
			  <br>
			  <a href="" id="thumb-site-ico" data-toggle="image" class="img-thumbnail" style="margin-bottom:20px;">
				<img src="<?php echo $site_ico_thumb; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">
			  </a>
              <input type="text" name="site_ico" value="<?php echo $site_ico; ?>" data-placeholder="<?php echo $placeholder; ?>" placeholder="<?php echo $entry_site_ico; ?>" class="form-control" id="input-site-ico" />
            </div>
          </div>
          <div id="site-image-resize" class="form-group required">
            <label class="col-sm-2 control-label"><span title="<?php echo $help_site_image_resize; ?>" data-toggle="tooltip"><?php echo $entry_site_image_resize; ?></span></label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-6">
				  <input type="number" name="site_image_width" value="<?php echo $site_image_width; ?>" placeholder="<?php echo $text_width; ?>" class="form-control" />
				</div>
                <div class="col-sm-6">
				  <input type="number" name="site_image_height" value="<?php echo $site_image_height; ?>" placeholder="<?php echo $text_height; ?>" class="form-control" />
				</div>
              </div>
            </div>
          </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label" for="input-site-ico-position"><span title="<?php echo $help_site_ico_position; ?>" data-toggle="tooltip"><?php echo $entry_site_ico_position; ?></span></label>
		    <div class="col-sm-10">
			  <select name="site_ico_position" id="input-site-ico-position" class="form-control">
				<option value="1"<?php if ($site_ico_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_left; ?></option>
				<option value="2"<?php if ($site_ico_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_right; ?></option>
			  </select>
			</div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-image-status"><span title="<?php echo $help_image_status; ?>" data-toggle="tooltip"><?php echo $entry_image_status; ?></span></label>
            <div class="col-sm-10">
              <select name="image_status" id="input-image-status" class="form-control">
                <?php if ($image_status) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div id="image-resize-1" class="form-group required">
            <label class="col-sm-2 control-label"><span title="<?php echo $help_image_resize; ?>" data-toggle="tooltip"><?php echo $entry_image_resize_1; ?></span></label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-6">
				  <input type="number" name="width_1" value="<?php echo $width_1; ?>" placeholder="<?php echo $text_width; ?>" class="form-control" />
				  <?php if ($error_width_1) { ?>
				  <div class="text-danger"><?php echo $error_width_1; ?></div>
				  <?php } ?>
				</div>
                <div class="col-sm-6">
				  <input type="number" name="height_1" value="<?php echo $height_1; ?>" placeholder="<?php echo $text_height; ?>" class="form-control" />
				  <?php if ($error_height_1) { ?>
				  <div class="text-danger"><?php echo $error_height_1; ?></div>
				  <?php } ?>
				</div>
              </div>
			  <?php if ($error_width_1 || $error_height_1) { ?>
			  <div class="text-danger"></div>
			  <?php } ?>
            </div>
          </div>
          <div id="image-resize-2" class="form-group required">
            <label class="col-sm-2 control-label"><span title="<?php echo $help_image_resize; ?>" data-toggle="tooltip"><?php echo $entry_image_resize_2; ?></span></label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-6">
				  <input type="number" name="width_2" value="<?php echo $width_2; ?>" placeholder="<?php echo $text_width; ?>" class="form-control" />
				  <?php if ($error_width_2) { ?>
				  <div class="text-danger"><?php echo $error_width_2; ?></div>
				  <?php } ?>
				</div>
                <div class="col-sm-6">
				  <input type="number" name="height_2" value="<?php echo $height_2; ?>" placeholder="<?php echo $text_height; ?>" class="form-control" />
				  <?php if ($error_height_2) { ?>
				  <div class="text-danger"><?php echo $error_height_2; ?></div>
				  <?php } ?>
				</div>
              </div>
			  <?php if ($error_width_2 || $error_height_2) { ?>
			  <div class="text-danger"></div>
			  <?php } ?>
            </div>
          </div>
          <div id="image-resize-3" class="form-group required">
            <label class="col-sm-2 control-label"><span title="<?php echo $help_image_resize; ?>" data-toggle="tooltip"><?php echo $entry_image_resize_3; ?></span></label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-6">
				  <input type="number" name="width_3" value="<?php echo $width_3; ?>" placeholder="<?php echo $text_width; ?>" class="form-control" />
				  <?php if ($error_width_3) { ?>
				  <div class="text-danger"><?php echo $error_width_3; ?></div>
				  <?php } ?>
				</div>
                <div class="col-sm-6">
				  <input type="number" name="height_3" value="<?php echo $height_3; ?>" placeholder="<?php echo $text_height; ?>" class="form-control" />
				  <?php if ($error_height_3) { ?>
				  <div class="text-danger"><?php echo $error_height_3; ?></div>
				  <?php } ?>
				</div>
              </div>
			  <?php if ($error_width_3 || $error_height_3) { ?>
			  <div class="text-danger"></div>
			  <?php } ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name-status-1"><span title="<?php echo $help_name_status; ?>" data-toggle="tooltip"><?php echo $entry_name_status_1; ?></span></label>
            <div class="col-sm-10">
              <select name="name_status_1" id="input-name-status-1" class="form-control">
                <?php if ($name_status_1) { ?>
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
            <label class="col-sm-2 control-label" for="input-name-status-2"><span title="<?php echo $help_name_status; ?>" data-toggle="tooltip"><?php echo $entry_name_status_2; ?></span></label>
            <div class="col-sm-10">
              <select name="name_status_2" id="input-name-status-2" class="form-control">
                <?php if ($name_status_2) { ?>
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
            <label class="col-sm-2 control-label" for="input-name-status-3"><span title="<?php echo $help_name_status; ?>" data-toggle="tooltip"><?php echo $entry_name_status_3; ?></span></label>
            <div class="col-sm-10">
              <select name="name_status_3" id="input-name-status-3" class="form-control">
                <?php if ($name_status_3) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div id="desc-status" class="form-group">
            <label class="col-sm-2 control-label" for="input-desc-status"><span title="<?php echo $help_desc_status; ?>" data-toggle="tooltip"><?php echo $entry_desc_status; ?></span></label>
            <div class="col-sm-10">
              <select name="desc_status" id="input-desc-status" class="form-control">
                <?php if ($desc_status) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
		  <div id="desc-limit" class="form-group">
            <label class="col-sm-2 control-label" for="input-desc-limit"><span data-toggle="tooltip" title="<?php echo $help_desc_limit; ?>"><?php echo $entry_desc_limit; ?></span></label>
            <div class="col-sm-10">
              <input type="number" name="desc_limit" value="<?php echo $desc_limit; ?>" placeholder="<?php echo $entry_desc_limit; ?>" id="input-desc-limit" class="form-control" />
            </div>
          </div>
		  <legend><b><?php echo $tab_cat; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-cats-status"><span title="<?php echo $help_cats_status; ?>" data-toggle="tooltip"><?php echo $entry_cats_status; ?></span></label>
            <div class="col-sm-10">
              <select name="cats_status" id="input-cats-status" class="form-control">
                <?php if ($cats_status) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
		  </div>
		  <div id="cats-vertical-status" class="horizontal form-group">
            <label class="col-sm-2 control-label" for="input-cats-vertical-status"><span title="<?php echo $help_cats_vertical_status; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_status; ?></span></label>
            <div class="col-sm-10">
              <select name="cats_vertical_status" id="input-cats-vertical-status" class="form-control">
                <?php if ($cats_vertical_status) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
		  </div>
          <div id="cats-vertical-name" class="form-group">
            <label class="col-sm-2 control-label" for="input-cats-vertical-name-1"><span title="<?php echo $help_cats_vertical_name; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_name; ?></span></label>
            <div class="col-sm-10">
			  <?php foreach ($languages as $language) { ?>
			  <div class="input-group">
				<span class="input-group-addon"><img src="<?php echo version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png'; ?>" title="<?php echo $language['name']; ?>" /></span>
				<input type="text" name="cats_vertical_name[<?php echo $language['language_id']; ?>]" value="<?php echo isset($cats_vertical_name[$language['language_id']]) ? $cats_vertical_name[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_cats_vertical_name; ?>" id="input-cats-vertical-name-<?php echo $language['language_id']; ?>" class="form-control" />
			  </div>
			  <?php } ?>
			</div>
          </div>
		  <div id="cats-vertical-link" class="form-group">
            <label class="col-sm-2 control-label" for="input-cats-vertical-link-1"><span title="<?php echo $help_cats_vertical_link; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_link; ?></span></label>
            <div class="col-sm-10">
			  <?php foreach ($languages as $language) { ?>
			  <div class="input-group">
				<span class="input-group-addon"><img src="<?php echo version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png'; ?>" title="<?php echo $language['name']; ?>" /></span>
				<input type="text" name="cats_vertical_link[<?php echo $language['language_id']; ?>]" value="<?php echo isset($cats_vertical_link[$language['language_id']]) ? $cats_vertical_link[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_cats_vertical_link; ?>" id="input-cats-vertical-link-<?php echo $language['language_id']; ?>" class="form-control" />
			  </div>
			  <?php } ?>
			</div>
          </div>
		  <div id="cats-vertical-ico" class="form-group">
            <label class="col-sm-2 control-label" for="input-cats-vertical-ico"><span title="<?php echo $help_cats_vertical_ico; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_ico; ?></span></label>
            <div class="col-sm-10">
			  <select id="input-cats-vertical-type-ico" class="form-control">
				<option value="1"<?php if ($cats_vertical_ico != strip_tags(html_entity_decode($cats_vertical_ico, ENT_QUOTES, 'UTF-8'))) { ?> selected="selected"<?php } ?>><?php echo $text_ico; ?></option>
				<option value="2"<?php if ($cats_vertical_ico == strip_tags(html_entity_decode($cats_vertical_ico, ENT_QUOTES, 'UTF-8'))) { ?> selected="selected"<?php } ?>><?php echo $text_image; ?></option>
			  </select>
			  <br>
			  <a href="" id="thumb-cats-vertical-ico" data-toggle="image" class="img-thumbnail" style="margin-bottom:20px;">
				<img src="<?php echo $cats_vertical_ico_thumb; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">
			  </a>
              <input type="text" name="cats_vertical_ico" value="<?php echo $cats_vertical_ico; ?>" data-placeholder="<?php echo $placeholder; ?>" placeholder="<?php echo $entry_cats_vertical_ico; ?>" class="form-control" id="input-cats-vertical-ico" />
            </div>
          </div>
          <div id="cats-vertical-image-resize" class="form-group required">
            <label class="col-sm-2 control-label"><span title="<?php echo $help_cats_vertical_image_resize; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_image_resize; ?></span></label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-6">
				  <input type="number" name="cats_vertical_image_width" value="<?php echo $cats_vertical_image_width; ?>" placeholder="<?php echo $text_width; ?>" class="form-control" />
				</div>
                <div class="col-sm-6">
				  <input type="number" name="cats_vertical_image_height" value="<?php echo $cats_vertical_image_height; ?>" placeholder="<?php echo $text_height; ?>" class="form-control" />
				</div>
              </div>
            </div>
          </div>
		  <div id="cats-vertical-ico-position" class="form-group">
		    <label class="col-sm-2 control-label" for="input-cats-vertical-ico-position"><span title="<?php echo $help_cats_vertical_ico_position; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_ico_position; ?></span></label>
		    <div class="col-sm-10">
			  <select name="cats_vertical_ico_position" id="input-cats-vertical-ico-position" class="form-control">
				<option value="1"<?php if ($cats_vertical_ico_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_left; ?></option>
				<option value="2"<?php if ($cats_vertical_ico_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_right; ?></option>
			  </select>
			</div>
          </div>
		  <div id="cats-vertical-position" class="form-group">
		    <label class="col-sm-2 control-label" for="input-cats-vertical-position"><span title="<?php echo $help_cats_vertical_position; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_position; ?></span></label>
		    <div class="col-sm-10">
			  <select name="cats_vertical_position" id="input-cats-vertical-position" class="form-control">
                <option value="1"<?php if ($cats_vertical_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_left; ?></option>
				<option value="2"<?php if ($cats_vertical_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_right; ?></option>
			  </select>
			</div>
          </div>
		  <div id="cats-vertical-route" class="form-group">
            <label class="col-sm-2 control-label" for="input-cats-vertical-status"><span title="<?php echo $help_cats_vertical_route; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_route; ?></span></label>
            <div class="col-sm-10">
              <div class="well well-sm" style="height: 200px; overflow: auto;">
				<?php $row = 0; ?>
                <?php foreach ($layouts as $layout) { ?>
				<br><?php echo $layout['name']; ?>
				<?php foreach ($layout['routes'] as $route) { ?>
                <div class="checkbox">
                  &nbsp;- <label>
					<?php if (is_numeric($cats_vertical_route) ? true : in_array(str_replace('%', '', $route['route']), isset($cats_vertical_route[$route['store_id']]) ? $cats_vertical_route[$route['store_id']] : [])) { ?>
					<input type="checkbox" name="cats_vertical_route[<?php echo $route['store_id']; ?>][]" value="<?php echo str_replace('%', '', $route['route']); ?>" checked="checked" />
					<?php echo $route['route']; ?> - <?php echo $route['name']; ?>
					<?php } else { ?>
					<input type="checkbox" name="cats_vertical_route[<?php echo $route['store_id']; ?>][]" value="<?php echo str_replace('%', '', $route['route']); ?>" />
					<?php echo $route['route']; ?> - <?php echo $route['name']; ?>
					<?php } ?>
                  </label>
                </div>
				<?php $row++; ?>
				<?php } ?>
                <?php } ?>
              </div>
			  <input type="hidden" name="cats_vertical_route_count" value="<?php echo $row; ?>" />
              <a onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
			</div>
          </div>
		  <?php $types = ['horizontal', 'vertical', 'cell']; ?>
		  <?php foreach ($types as $tp) { ?>
		  <?php if ($tp == 'vertical') { ?>
		  <div id="cats-vertical-reverse" class="form-group">
		    <label class="col-sm-2 control-label" for="input-cats-vertical-reverse"><span title="<?php echo $help_cats_vertical_reverse; ?>" data-toggle="tooltip"><?php echo $entry_cats_vertical_reverse; ?></span></label>
		    <div class="col-sm-10">
			  <select name="cats_vertical_reverse" id="input-cats-vertical-reverse" class="form-control">
                <option value="1"<?php if ($cats_vertical_reverse == '1') { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
				<option value="0"<?php if (!$cats_vertical_reverse) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
			</div>
          </div>
		  <?php } ?>
          <div id="cats-<?php echo $tp; ?>" class="<?php echo $tp; ?> form-group">
            <label class="col-sm-2 control-label" for="input-cats-<?php echo $tp; ?>"><span title="<?php echo ${'text_' . $tp}; ?>" data-toggle="tooltip"><?php echo ${'text_' . $tp}; ?></span></label>
            <div class="col-sm-10">
			<div class="cats-<?php echo $tp; ?>-count"></div>
      		<div id="input-cats-<?php echo $tp; ?>" class="cats dd">
			  <?php if (${'cats_' . $tp}) { ?>
				<?php echo ${'cats_' . $tp}; ?>
			  <?php } else { ?>
				<ol id="cats-<?php echo $tp; ?>-ajax" class="catAdd dd-list"></ol>
			  <?php } ?>
			</div>
			<div class="cats-<?php echo $tp; ?>-count"></div>
			<div class="input-group">
              <div class="form-control">
				<?php echo $button_link_add; ?>
              </div>
              <div class="input-group-btn">
				<button type="button" onclick="сatAdd('<?php echo $tp; ?>');" title="" data-toggle="tooltip" data-original-title="<?php echo $button_link_add; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>
			  </div>
			</div>
			<input type="hidden" name="cats_<?php echo $tp; ?>_data" value="" class="form-control" />
            </div>
          </div>
		  <?php } ?>
          <div id="seo-now" class="form-group">
            <label class="col-sm-2 control-label" for="input-seo-now"><span title="<?php echo $help_seo_now; ?>" data-toggle="tooltip"><?php echo $entry_seo_now; ?></span></label>
            <div class="col-sm-10">
              <select name="seo_now" id="input-seo-now" class="form-control">
                <?php if ($seo_now) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
		  <div id="seo-then" class="form-group">
            <label class="col-sm-2 control-label" for="input-seo-then"><span title="<?php echo $help_seo_then; ?>" data-toggle="tooltip"><?php echo $entry_seo_then; ?></span></label>
            <div class="col-sm-10">
              <select name="seo_then" id="input-seo-then" class="form-control">
                <?php if ($seo_then) { ?>
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
            <label class="col-sm-2 control-label" for="input-path-status"><span title="<?php echo $help_path_status; ?>" data-toggle="tooltip"><?php echo $entry_path_status; ?></span></label>
            <div class="col-sm-10">
              <select name="path_status" id="input-path-status" class="form-control">
                <?php if ($path_status) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
		  <div id="path-lvl" class="form-group">
            <label class="col-sm-2 control-label" for="input-path-lvl"><span data-toggle="tooltip" title="<?php echo $help_path_lvl; ?>"><?php echo $entry_path_lvl; ?></span></label>
            <div class="col-sm-10">
              <input type="number" name="path_lvl" value="<?php echo $path_lvl; ?>" placeholder="<?php echo $entry_path_lvl; ?>" id="input-path-lvl" class="form-control" />
            </div>
          </div>
		  <div id="path-lvl-limit" class="form-group">
            <label class="col-sm-2 control-label" for="input-path-lvl-limit"><span data-toggle="tooltip" title="<?php echo $help_path_lvl_limit; ?>"><?php echo $entry_path_lvl_limit; ?></span></label>
            <div class="col-sm-10">
              <input type="number" name="path_lvl_limit" value="<?php echo $path_lvl_limit; ?>" placeholder="<?php echo $entry_path_lvl_limit; ?>" id="input-path-lvl-limit" class="form-control" />
            </div>
          </div>
		  <div id="path-limit" class="form-group">
            <label class="col-sm-2 control-label" for="input-path-limit"><span data-toggle="tooltip" title="<?php echo $help_path_limit; ?>"><?php echo $entry_path_limit; ?></span></label>
            <div class="col-sm-10">
              <input type="number" name="path_limit" value="<?php echo $path_limit; ?>" placeholder="<?php echo $entry_path_limit; ?>" id="input-path-limit" class="form-control" />
            </div>
          </div>
		  <legend><b><?php echo $tab_design; ?></b></legend>
          <div class="form-group">
		    <label class="col-sm-2 control-label" for="input-design"><span title="<?php echo $help_design; ?>" data-toggle="tooltip"><?php echo $entry_design; ?></span></label>
		    <div class="col-sm-10">
			  <select name="design" id="input-design" class="form-control">
                <option value="1"<?php if ($design == 1) { ?> selected="selected"<?php } ?>><?php echo $text_design_st; ?></option>
				<option value="3"<?php if ($design == 3) { ?> selected="selected"<?php } ?>><?php echo $text_design_cw; ?></option>
			    <option value="0"<?php if (!$design) { ?> selected="selected"<?php } ?>><?php echo $text_design_not; ?></option>
				<option value="own"<?php if ($design == 'own') { ?> selected="selected"<?php } ?>><?php echo $text_design_own; ?></option>
			  </select>
			</div>
			<label class="own_help col-sm-2 control-label" for="input-design-id"><span title="<?php echo $help_design_id; ?>" data-toggle="tooltip"><?php echo $entry_design_id; ?></span></label>
		    <div class="own_help col-sm-10">
			  <input type="number" name="design_id" value="<?php echo $design_id; ?>" placeholder="<?php echo $entry_path_lvl_limit; ?>" id="input-designid" class="form-control" />
			  <?php echo $text_design_own_help; ?>
			</div>
          </div>
		  <div id="designoptimiz" class="form-group">
		    <label class="col-sm-2 control-label" for="input-designoptimiz"><span title="<?php echo $help_designoptimiz; ?>" data-toggle="tooltip"><?php echo $entry_designoptimiz; ?></span></label>
		    <div class="col-sm-10">
				<select name="designoptimiz" id="input-designoptimiz" class="form-control">
                  <?php if ($designoptimiz) { ?>
                  <option value="1" selected="selected"><?php echo $text_yes; ?></option>
			      <option value="0"><?php echo $text_no; ?></option>
                  <?php } else { ?>
                  <option value="1"><?php echo $text_yes; ?></option>
				  <option value="0" selected="selected"><?php echo $text_no; ?></option>
                  <?php } ?>
				</select>
			</div>
          </div>
		  <?php $cols = ['lg' => ['col' => $lg, 'help' => $help_lg, 'entry' => $entry_lg, 'status' => $lg_status], 'md' => ['col' => $md, 'help' => $help_md, 'entry' => $entry_md, 'status' => $md_status], 'sm' => ['col' => $sm, 'help' => $help_sm, 'entry' => $entry_sm, 'status' => $sm_status], 'xs' => ['col' => $xs, 'help' => $help_xs, 'entry' => $entry_xs, 'status' => $xs_status]]; ?>
		  <?php foreach ($cols as $key => $col) { ?>
          <div class="cell form-group">
            <label class="col-sm-2 control-label" for="input-<?php echo $key; ?>"><span title="<?php echo $col['help']; ?>" data-toggle="tooltip"><?php echo $col['entry']; ?></label>
            <div class="col-sm-10">
			 <div class="input-group">
              <select name="<?php echo $key; ?>" id="input-<?php echo $key; ?>" class="form-control">
                <option value="12"<?php if ($col['col'] == 12) { ?> selected="selected"<?php } ?>>1</option>
                <option value="6"<?php if ($col['col'] == 6) { ?> selected="selected"<?php } ?>>2</option>
                <option value="4"<?php if ($col['col'] == 4) { ?> selected="selected"<?php } ?>>3</option>
                <option value="3"<?php if ($col['col'] == 3) { ?> selected="selected"<?php } ?>>4</option>
				<option value="24"<?php if ($col['col'] == 24) { ?> selected="selected"<?php } ?>>5</option>
                <option value="2"<?php if ($col['col'] == 2) { ?> selected="selected"<?php } ?>>6</option>
              </select>
			  <div class="input-group-btn">
				<input type="hidden" name="<?php echo $key; ?>_status" value="<?php echo $col['status']; ?>" placeholder="<?php echo $entry_status; ?>" class="form-control" />
				<?php if ($col['status']) { ?>
				<button type="button" onclick="colStatus('<?php echo $key; ?>');" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="<?php echo $entry_status; ?> <?php echo $text_enabled; ?>"><i class="fa fa-pause"></i></button>
				<?php } else { ?>
				<button type="button" onclick="colStatus('<?php echo $key; ?>');" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="<?php echo $entry_status; ?> <?php echo $text_disabled; ?>"><i class="fa fa-play"></i></button>
				<?php } ?>
			  </div>
			 </div>
			</div>
          </div>
		  <?php } ?>
		  <div class="horizontal form-group">
            <label class="col-sm-2 control-label" for="input-cover-status"><span title="<?php echo $help_cover_status; ?>" data-toggle="tooltip"><?php echo $entry_cover_status; ?></span></label>
            <div class="col-sm-10">
              <select name="cover_status" id="input-cover-status" class="form-control">
                <?php if ($cover_status) { ?>
                <option value="1" selected="selected"><?php echo $text_yes; ?></option>
                <option value="0"><?php echo $text_no; ?></option>
                <?php } else { ?>
                <option value="1"><?php echo $text_yes; ?></option>
                <option value="0" selected="selected"><?php echo $text_no; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
		  <div id="cover" class="horizontal form-group">
            <label class="col-sm-2 control-label" for="input-cover"><span title="<?php echo $help_cover; ?>" data-toggle="tooltip"><?php echo $entry_cover; ?></span></label>
            <div class="col-sm-10">
			  <a href="" id="thumb-cover" data-toggle="image" class="img-thumbnail">
				<img src="<?php echo $cover_thumb; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">
			  </a>
			  <input type="hidden" name="cover" value="<?php echo $cover; ?>" data-placeholder="<?php echo $placeholder; ?>" id="input-cover">
            </div>
          </div>
		  <div id="cover-resize" class="horizontal form-group required">
            <label class="col-sm-2 control-label"><span title="<?php echo $help_cover_resize; ?>" data-toggle="tooltip"><?php echo $entry_cover_resize; ?></span></label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-6">
				  <input type="number" name="cover_width" value="<?php echo $cover_width; ?>" placeholder="<?php echo $text_width; ?>" class="form-control" />
				  <?php if ($error_cover_width) { ?>
				  <div class="text-danger"><?php echo $error_cover_width; ?></div>
				  <?php } ?>
				</div>
                <div class="col-sm-6">
				  <input type="number" name="cover_height" value="<?php echo $cover_height; ?>" placeholder="<?php echo $text_height; ?>" class="form-control" />
				  <?php if ($error_cover_height) { ?>
				  <div class="text-danger"><?php echo $error_cover_height; ?></div>
				  <?php } ?>
				</div>
              </div>
			  <?php if ($error_cover_width || $error_cover_height) { ?>
			  <div class="text-danger"></div>
			  <?php } ?>
            </div>
          </div>
		  <div id="cover-position" class="horizontal form-group">
		    <label class="col-sm-2 control-label" for="input-cover-position"><span title="<?php echo $help_cover_position; ?>" data-toggle="tooltip"><?php echo $entry_cover_position; ?></span></label>
		    <div class="col-sm-10">
			  <select name="cover_position" id="input-cover-position" class="form-control">
                <option value="1"<?php if ($cover_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_left; ?></option>
				<option value="2"<?php if ($cover_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_right; ?></option>
			    <option value="3"<?php if ($cover_position == '3') { ?> selected="selected"<?php } ?>><?php echo $text_top; ?></option>
				<option value="4"<?php if ($cover_position == '4') { ?> selected="selected"<?php } ?>><?php echo $text_bottom; ?></option>
				<option value="5"<?php if ($cover_position == '5') { ?> selected="selected"<?php } ?>><?php echo $text_left_top; ?></option>
				<option value="6"<?php if ($cover_position == '6') { ?> selected="selected"<?php } ?>><?php echo $text_right_top; ?></option>
				<option value="7"<?php if ($cover_position == '7') { ?> selected="selected"<?php } ?>><?php echo $text_left_bottom; ?></option>
				<option value="8"<?php if ($cover_position == '8') { ?> selected="selected"<?php } ?>><?php echo $text_right_bottom; ?></option>
			  </select>
			</div>
          </div>
		  <div class="horizontal form-group">
            <label class="col-sm-2 control-label" for="input-menu-color"><span title="<?php echo $help_menu_color; ?>" data-toggle="tooltip"><?php echo $entry_menu_color; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="menu_color" value="<?php echo $menu_color; ?>" placeholder="<?php echo $entry_menu_color; ?>" id="input-menu-color" class="form-control" style="border-right: 20px solid <?php echo $menu_color; ?>" />
            </div>
          </div>
		  <div class="horizontal form-group">
            <label class="col-sm-2 control-label" for="input-menu-text-color"><span title="<?php echo $help_menu_text_color; ?>" data-toggle="tooltip"><?php echo $entry_menu_text_color; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="menu_text_color" value="<?php echo $menu_text_color; ?>" placeholder="<?php echo $entry_menu_text_color; ?>" id="input-menu-text-color" class="form-control" style="border-right: 20px solid <?php echo $menu_text_color; ?>" />
            </div>
          </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label" for="input-style"><span title="<?php echo $help_style; ?>" data-toggle="tooltip"><?php echo $entry_style; ?></span></label>
		    <div class="col-sm-10">
                <textarea name="style" id="input-style" rows="10" class="form-control"><?php echo $style; ?></textarea>
			</div>
          </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label" for="input-script"><span title="<?php echo $help_script; ?>" data-toggle="tooltip"><?php echo $entry_script; ?></span></label>
		    <div class="col-sm-10">
                <textarea name="script" id="input-script" rows="10" class="form-control"><?php echo $script; ?></textarea>
			</div>
          </div>
		  <legend><b><?php echo $tab_boost; ?></b></legend>
		  <div class="form-group">
		    <label class="col-sm-2 control-label" for="input-cache"><span title="<?php echo $help_cache; ?>" data-toggle="tooltip"><?php echo $entry_cache; ?></span></label>
		    <div class="col-sm-10">
			  <select name="cache" id="input-cache" class="form-control">
                <option value="1"<?php if ($cache == '1') { ?> selected="selected"<?php } ?>><?php echo $text_cache_1; ?></option>
				<option value="2"<?php if ($cache == '2') { ?> selected="selected"<?php } ?>><?php echo $text_cache_2; ?></option>
				<option value="3"<?php if ($cache == '3') { ?> selected="selected"<?php } ?>><?php echo $text_cache_3; ?></option>
			    <option value="0"<?php if (!$cache) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
			</div>
          </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label" for="input-ajax"><span title="<?php echo $help_ajax; ?>" data-toggle="tooltip"><?php echo $entry_ajax; ?></span></label>
		    <div class="col-sm-10">
			  <select name="ajax" id="input-ajax" class="form-control">
			    <option value="1"<?php if ($ajax == '1') { ?> selected="selected"<?php } ?>><?php echo $text_ajax_1; ?></option>
                <option value="2"<?php if ($ajax == '2') { ?> selected="selected"<?php } ?>><?php echo $text_ajax_2; ?></option>
				<option value="3"<?php if ($ajax == '3') { ?> selected="selected"<?php } ?>><?php echo $text_ajax_3; ?></option>
				<option value="4"<?php if ($ajax == '4') { ?> selected="selected"<?php } ?>><?php echo $text_ajax_4; ?></option>
			    <option value="0"<?php if (!$ajax) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
			</div>
          </div>
		  <legend><b><?php echo $tab_buns; ?></b></legend>
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-rating-count"><span title="<?php echo $help_rating_count; ?>" data-toggle="tooltip"><?php echo $entry_rating_count; ?></span></label>
            <div class="col-sm-10">
			  <select name="rating_count" id="input-rating-count" class="form-control">
                <option value="1"<?php if ($rating_count == '1') { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
			    <option value="0"<?php if (!$rating_count) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
            </div>
          </div>
		  <div id="rating-count-check" class="form-group">
            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo $help_rating_count_check; ?>"><?php echo $entry_rating_count_check; ?></span></label>
            <div class="col-sm-10">
              <div class="checkbox">
                <label>
                  <?php if (in_array(1, $rating_count_check)) { ?>
                  <input type="checkbox" name="rating_count_check[]" value="1" checked="checked" />
                  <?php echo $text_rating_count_check_1; ?>
                  <?php } else { ?>
                  <input type="checkbox" name="rating_count_check[]" value="1" />
                  <?php echo $text_rating_count_check_1; ?>
                  <?php } ?>
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <?php if (in_array(2, $rating_count_check)) { ?>
                  <input type="checkbox" name="rating_count_check[]" value="2" checked="checked" />
                  <?php echo $text_rating_count_check_2; ?>
                  <?php } else { ?>
                  <input type="checkbox" name="rating_count_check[]" value="2" />
                  <?php echo $text_rating_count_check_2; ?>
                  <?php } ?>
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <?php if (in_array(3, $rating_count_check)) { ?>
                  <input type="checkbox" name="rating_count_check[]" value="3" checked="checked" />
                  <?php echo $text_rating_count_check_3; ?>
                  <?php } else { ?>
                  <input type="checkbox" name="rating_count_check[]" value="3" />
                  <?php echo $text_rating_count_check_3; ?>
                  <?php } ?>
                </label>
              </div>
            </div>
          </div>
		  <div id="rating-count-path-not" class="form-group">
            <label class="col-sm-2 control-label" for="input-rating-count-path-not"><span title="<?php echo $help_rating_count_path_not; ?>" data-toggle="tooltip"><?php echo $entry_rating_count_path_not; ?></span></label>
            <div class="col-sm-10">
			  <select name="rating_count_path_not" id="input-rating-count-path-not" class="form-control">
                <option value="1"<?php if ($rating_count_path_not == '1') { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
			    <option value="0"<?php if (!$rating_count_path_not) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-price-count"><span title="<?php echo $help_price_count; ?>" data-toggle="tooltip"><?php echo $entry_price_count; ?></span></label>
            <div class="col-sm-10">
			  <select name="price_count" id="input-price-count" class="form-control">
                <option value="1"<?php if ($price_count == '1') { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
			    <option value="0"<?php if (!$price_count) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
            </div>
          </div>
		  <div id="price-count-path-not" class="form-group">
            <label class="col-sm-2 control-label" for="input-price-count-path-not"><span title="<?php echo $help_price_count_path_not; ?>" data-toggle="tooltip"><?php echo $entry_price_count_path_not; ?></span></label>
            <div class="col-sm-10">
			  <select name="price_count_path_not" id="input-price-count-path-not" class="form-control">
                <option value="1"<?php if ($price_count_path_not == '1') { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
			    <option value="0"<?php if (!$price_count_path_not) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-cat-count"><span title="<?php echo $help_cat_count; ?>" data-toggle="tooltip"><?php echo $entry_cat_count; ?></span></label>
            <div class="col-sm-10">
			  <select name="cat_count" id="input-cat-count" class="form-control">
                <option value="1"<?php if ($cat_count == '1') { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
			    <option value="0"<?php if (!$cat_count) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-product-count"><span title="<?php echo $help_product_count; ?>" data-toggle="tooltip"><?php echo $entry_product_count; ?></span></label>
            <div class="col-sm-10">
			  <select name="product_count" id="input-product-count" class="form-control">
                <option value="1"<?php if ($product_count == '1') { ?> selected="selected"<?php } ?>><?php echo $text_yes; ?></option>
				<option value="2"<?php if ($product_count == '2') { ?> selected="selected"<?php } ?>><?php echo $text_product_count; ?></option>
			    <option value="0"<?php if (!$product_count) { ?> selected="selected"<?php } ?>><?php echo $text_no; ?></option>
			  </select>
            </div>
          </div>
		  <legend><b><?php echo $tab_support; ?></b></legend>
		  <div class="form-group">
            <label class="col-sm-2 control-label" for="input-debug"><span title="<?php echo $help_debug; ?>" data-toggle="tooltip"><?php echo $entry_debug; ?></span></label>
            <div class="col-sm-10">
			  <select name="debug" id="input-debug" class="form-control">
                <option value="1"<?php if ($debug == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
			    <option value="0"<?php if (!$debug) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
			  </select>
            </div>
          </div>
		  <div class="text-center">
			<b><?php echo $text_author; ?><br /><?php echo $text_corp; ?></b>
		  </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="scroll-top-wrapper" onclick="scrollToTop()"><i class="fa fa-2x fa-arrow-circle-up"></i></div>
<script type="text/javascript"><!--
$(document).ready(function() {
	$('select[name="type"]').change(function() {
		if ($('select[name="type"]').val() == '1') {
			$('.horizontal').fadeOut(1);
			$('.vertical').fadeIn();
			$('.cell').fadeOut(1);
			$('#heading-title b').text('<?php echo $text_vertical; ?>');
			$('#name').fadeIn();
			$('input[name="name"]').val('<?php echo ($name && $type == 1 ? $name : $text_vertical); ?>').removeAttr('disabled');
			$('#desc-status').fadeOut(1);
			$('select[name="desc_status"]').val('0').attr('disabled','true');
			$('#cats-vertical-status').fadeOut(1);
			$('select[name="cats_vertical_status"]').attr('value', '0').val('0').attr('disabled', 'true');
			$('input[name="cats_horizontal_data"]').attr('disabled','true');
			$('input[name="cats_vertical_data"]').removeAttr('disabled');
			$('input[name="cats_cell_data"]').attr('disabled','true');
			$('#cover-status').fadeOut(1);
			$('select[name="cover_status"]').val('0').attr('disabled','true');
			$('select[name="design"] option[value="0"], select[name="design"] option[value="3"]').fadeOut(1);
			$('select[name="lg"]').attr('disabled', 'true');
			$('input[name="lg_status"]').attr('disabled', 'true');
			$('select[name="md"]').attr('disabled', 'true');
			$('input[name="md_status"]').attr('disabled', 'true');
			$('select[name="sm"]').attr('disabled', 'true');
			$('input[name="sm_status"]').attr('disabled', 'true');
			$('select[name="xs"]').attr('disabled', 'true');
			$('input[name="xs_status"]').attr('disabled', 'true');
			$('input[name="menu_color"]').attr('disabled', 'true');
			$('input[name="menu_text_color"]').attr('disabled', 'true');
		} else if ($('select[name="type"]').val() == '2') {
			$('.horizontal').fadeOut(1);
			$('.vertical').fadeOut(1);
			$('.cell').fadeIn();
			$('#heading-title b').text('<?php echo $text_cell; ?>');
			$('#name').fadeIn();
			$('input[name="name"]').val('<?php echo ($name && $type == 2 ? $name : $text_cell); ?>').removeAttr('disabled');
			$('#desc-status').fadeIn();
			$('select[name="desc_status"]').removeAttr('disabled');
			$('#cats-vertical-status').fadeOut(1);
			$('select[name="cats_vertical_status"]').attr('value', '0').val('0').attr('disabled', 'true');
			$('input[name="cats_horizontal_data"]').attr('disabled', 'true');
			$('input[name="cats_vertical_data"]').attr('disabled', 'true');
			$('input[name="cats_cell_data"]').removeAttr('disabled');
			$('#cover-status').fadeOut(1);
			$('select[name="cover_status"]').val('0').attr('disabled','true');
			$('select[name="design"] option[value="0"], select[name="design"] option[value="3"]').fadeIn();
			$('select[name="lg"]').removeAttr('disabled');
			$('input[name="lg_status"]').removeAttr('disabled');
			$('select[name="md"]').removeAttr('disabled');
			$('input[name="md_status"]').removeAttr('disabled');
			$('select[name="sm"]').removeAttr('disabled');
			$('input[name="sm_status"]').removeAttr('disabled');
			$('select[name="xs"]').removeAttr('disabled');
			$('input[name="xs_status"]').removeAttr('disabled');
			$('input[name="menu_color"]').attr('disabled', 'true');
			$('input[name="menu_text_color"]').attr('disabled', 'true');
		} else {
			$('.horizontal').fadeIn();
			$('.vertical').fadeOut(1);
			$('.cell').fadeOut(1);
			$('#heading-title b').text('<?php echo $text_horizontal; ?>');
			$('#name').fadeOut(1);
			$('input[name="name"]').val('<?php echo ($name && !$type ? $name : $text_horizontal); ?>');
			$('#desc-status').fadeIn();
			$('select[name="desc_status"]').removeAttr('disabled');
			$('#cats-vertical-status').fadeIn();
			$('select[name="cats_vertical_status"]').removeAttr('disabled');
			$('input[name="cats_horizontal_data"]').removeAttr('disabled');
			$('input[name="cats_vertical_data"]').attr('disabled', 'true');
			$('input[name="cats_cell_data"]').attr('disabled', 'true');
			$('#cover-status').fadeIn();
			$('select[name="cover_status"]').removeAttr('disabled');
			$('select[name="design"] option[value="0"], select[name="design"] option[value="3"]').fadeOut(1);
			$('select[name="lg"]').removeAttr('disabled');
			$('input[name="lg_status"]').removeAttr('disabled');
			$('select[name="md"]').removeAttr('disabled');
			$('input[name="md_status"]').removeAttr('disabled');
			$('select[name="sm"]').removeAttr('disabled');
			$('input[name="sm_status"]').removeAttr('disabled');
			$('select[name="xs"]').removeAttr('disabled');
			$('input[name="xs_status"]').removeAttr('disabled');
			$('input[name="menu_color"]').removeAttr('disabled');
			$('input[name="menu_text_color"]').removeAttr('disabled');
		}

		$('select[name="desc_status"]').trigger("change");
		$('select[name="cats_status"]').trigger("change");
		$('select[name="cover_status"]').trigger("change");
		$('select[name="design"]').trigger("change");
	});

	$('select[name="image_status"]').change(function() {
		if ($('select[name="image_status"]').val() == '1') {
			$('#image-resize-1').fadeIn();
			$('#image-resize-2').fadeIn();
			$('#image-resize-3').fadeIn();
		} else {
			$('#image-resize-1').fadeOut(1);
			$('#image-resize-2').fadeOut(1);
			$('#image-resize-3').fadeOut(1);
		}
	});
	$('select[name="image_status"]').trigger("change");

	$('select[name="desc_status"]').change(function() {
		if ($('select[name="desc_status"]').val() == '1') {
			$('#desc-limit').fadeIn();
			$('input[name="desc_limit"]').removeAttr('disabled');
		} else {
			$('#desc-limit').fadeOut(1);
			$('input[name="desc_limit"]').attr('disabled', 'true');
		}
	});
	$('select[name="desc_status"]').trigger("change");

	$('select[name="cats_status"]').change(function() {
		if ($('select[name="cats_status"]').val() == '1') {
			if ($('select[name="type"]').val() == '1') {
				$('#cats-vertical').fadeIn();
				/* $('input[name="cats_vertical_data"]').removeAttr('disabled'); */
				/* $('#cats-vertical-status').fadeOut(1);
				$('select[name="cats_vertical_status"]').attr('value', '0').val('0').attr('disabled', 'true'); */
				$('#cats-vertical-position').fadeOut(1);
				$('#cats-vertical-position select').attr('disabled', 'true');
				$('#cats-vertical-route').fadeOut(1);
				$('#cats-vertical-route input').attr('disabled', 'true');
				$('#cats-vertical-reverse').fadeOut(1);
				$('#cats-vertical-reverse input').attr('disabled', 'true');
				$('#cats-vertical .cover').attr('disabled', 'true').hide();
			} else if ($('select[name="type"]').val() == '2') {
				$('#cats-cell').fadeIn();
				/* $('input[name="cats_cell_data"]').removeAttr('disabled'); */
				/* $('#cats-vertical-status').fadeOut(1);
				$('select[name="cats_vertical_status"]').attr('value', '0').val('0').attr('disabled', 'true'); */
				$('#cats-vertical-position').fadeOut(1);
				$('#cats-vertical-position select').attr('disabled', 'true');
				$('#cats-vertical-route').fadeOut(1);
				$('#cats-vertical-route input').attr('disabled', 'true');
				$('#cats-vertical-reverse').fadeOut(1);
				$('#cats-vertical-reverse input').attr('disabled', 'true');
			} else {
				$('#cats-horizontal').fadeIn();
				/* $('#cats-vertical-status').fadeIn();
				$('select[name="cats_vertical_status"]').removeAttr('disabled'); */
				/* $('select[name="cats_vertical_status"]').trigger("change"); */
				$('select[name="cats_vertical_status"]').trigger("change");
				$('#cats-vertical .cover').removeAttr('disabled');
				/* $('input[name="cats_horizontal_data"]').removeAttr('disabled'); */
			}

			$('#seo-now').fadeIn();
			$('#seo-then').fadeIn();
			$('select[name="seo_now"]').removeAttr('disabled');
		} else {
			$('#cats-horizontal').fadeOut(1);
			$('#cats-vertical').fadeOut(1);
			$('#cats-cell').fadeOut(1);
			/* $('#cats-vertical-status').fadeOut(1);
			$('select[name="cats_vertical_status"]').attr('value', '0').val('0').attr('disabled', 'true');
			$('#cats-vertical-position').fadeOut(1);
			$('#cats-vertical-position select').attr('disabled', 'true');
			$('#cats-vertical-route').fadeOut(1);
			$('#cats-vertical-route input').attr('disabled', 'true');
			$('#cats-vertical-reverse').fadeOut(1);
			$('#cats-vertical-reverse input').attr('disabled', 'true'); */
			$('select[name="cats_vertical_status"]').trigger("change");
			/* $('input[name="cats_horizontal_data"]').attr('disabled', 'true');
			$('input[name="cats_vertical_data"]').attr('disabled', 'true');
			$('input[name="cats_cell_data"]').attr('disabled', 'true'); */
			$('#seo-now').fadeOut(1);
			$('#seo-then').fadeOut(1);
			$('select[name="seo_now"]').attr('disabled', 'true');
		}
	});
	$('select[name="cats_status"]').trigger("change");

	$('select[name="cats_vertical_status"]').change(function() {
		if ($('select[name="cats_vertical_status"]').val() == '1') {
			$('#cats-vertical-name').fadeIn();
			$('#cats-vertical-name input').removeAttr('disabled');
			$('#cats-vertical-link').fadeIn();
			$('#cats-vertical-link input').removeAttr('disabled');
			$('#cats-vertical-ico').fadeIn();
			$('#cats-vertical-ico input').removeAttr('disabled');
			$('#cats-vertical-ico-position').fadeIn();
			$('#cats-vertical-ico-position select').removeAttr('disabled');
			$('#cats-vertical-position').fadeIn();
			$('#cats-vertical-position select').removeAttr('disabled');
			$('#cats-vertical-route').fadeIn();
			$('#cats-vertical-route input').removeAttr('disabled');
			$('#cats-vertical-reverse').fadeIn();
			$('#cats-vertical-reverse input').removeAttr('disabled');
			$('input[name="cats_vertical_count"]').removeAttr('disabled');
			$('#cats-vertical').fadeIn();
			$('input[name="cats_vertical_data"]').removeAttr('disabled');
			$('#seo-now').fadeIn();
			$('#seo-then').fadeIn();
		} else {
			$('#cats-vertical-name').fadeOut(1);
			$('#cats-vertical-name input').attr('disabled', 'true');
			$('#cats-vertical-link').fadeOut(1);
			$('#cats-vertical-link input').attr('disabled', 'true');
			$('#cats-vertical-ico').fadeOut(1);
			$('#cats-vertical-ico input').attr('disabled', 'true');
			$('#cats-vertical-ico-position').fadeOut(1);
			$('#cats-vertical-ico-position select').attr('disabled', 'true');
			$('#cats-vertical-position').fadeOut(1);
			$('#cats-vertical-position select').attr('disabled', 'true');
			$('#cats-vertical-route').fadeOut(1);
			$('#cats-vertical-route input').attr('disabled', 'true');
			$('#cats-vertical-reverse').fadeOut(1);
			$('#cats-vertical-reverse input').attr('disabled', 'true');
			$('input[name="cats_vertical_count"]').attr('disabled', 'true');
			$('#cats-vertical').fadeOut(1);
			$('input[name="cats_vertical_data"]').attr('disabled', 'true');
			$('#seo-now').fadeOut(1);
			$('#seo-then').fadeOut(1);
		}
	});
	$('select[name="cats_vertical_status"]').trigger("change");

	$('select[id="input-site-type-ico"]').change(function() {
		if ($('select[id="input-site-type-ico"]').val() == '2') {
			$('#thumb-site-ico').fadeIn();
			$('#site-image-resize').fadeIn();
			$('#site-image-resize input').removeAttr('disabled');
		} else {
			$('#thumb-site-ico').fadeOut(1);
			$('#site-image-resize').fadeOut(1);
			$('#site-image-resize input').attr('disabled', 'true');
		}
	});
	$('select[id="input-site-type-ico"]').trigger("change");

	$('select[id="input-cats-vertical-type-ico"]').change(function() {
		if ($('select[id="input-cats-vertical-type-ico"]').val() == '2') {
			$('#thumb-cats-vertical-ico').fadeIn();
			$('#cats-vertical-image-resize').fadeIn();
			$('#cats-vertical-image-resize input').removeAttr('disabled');
		} else {
			$('#thumb-cats-vertical-ico').fadeOut(1);
			$('#cats-vertical-image-resize').fadeOut(1);
			$('#cats-vertical-image-resize input').attr('disabled', 'true');
		}
	});
	$('select[id="input-cats-vertical-type-ico"]').trigger("change");

	$('select[name="cover_status"]').change(function() {
		if ($('select[name="cover_status"]').val() == '1') {
			$('#cover').fadeIn();
			$('input[name="cover"]').removeAttr('disabled');
			$('#cover-resize').fadeIn();
			$('input[name="cover_width"]').removeAttr('disabled');
			$('input[name="cover_height"]').removeAttr('disabled');
			$('#cover-position').fadeIn();
			$('select[name="cover_position"]').removeAttr('disabled');
		} else {
			$('#cover').fadeOut(1);
			$('input[name="cover"]').attr('disabled', 'true');
			$('#cover-resize').fadeOut(1);
			$('input[name="cover_width"]').attr('disabled', 'true');
			$('input[name="cover_height"]').attr('disabled', 'true');
			$('#cover-position').fadeOut(1);
			$('select[name="cover_position"]').attr('disabled', 'true');
		}
	});
	$('select[name="cover_status"]').trigger("change");

	$('select[name="design"]').change(function() {
		if ($('select[name="design"]').val() == '2') {
			$('.own_help').fadeOut(1);
			$('#designoptimiz').fadeIn();
			$('select[name="designoptimiz"]').removeAttr('disabled');
		} else if ($('select[name="design"]').val() == 'own') {
			$('.own_help').fadeIn();
			$('#designoptimiz').fadeOut(1);
			$('select[name="designoptimiz"]').attr('disabled', 'true');
		} else {
			$('.own_help').fadeOut(1);
			$('#designoptimiz').fadeOut(1);
			$('select[name="designoptimiz"]').attr('disabled', 'true');
		}
	});
	$('select[name="design"]').trigger("change");

	$('select[name="rating_count"]').change(function() {
		if ($('select[name="rating_count"]').val() == '1') {
			$('#rating-count-check').fadeIn();
			$('input[name="rating_count_check[]"]').removeAttr('disabled');
			$('#rating-count-path-not').fadeIn();
			$('select[name="rating_count_path_not"]').removeAttr('disabled');
		} else {
			$('#rating-count-check').fadeOut(1);
			$('input[name="rating_count_check[]"]').attr('disabled', 'true');
			$('#rating-count-path-not').fadeOut(1);
			$('select[name="rating_count_path_not"]').attr('disabled', 'true');
		}
	});
	$('select[name="rating_count"]').trigger("change");

	$('select[name="price_count"]').change(function() {
		if ($('select[name="price_count"]').val() == '1') {
			$('#price-count-path-not').fadeIn();
			$('select[name="price_count_path_not"]').removeAttr('disabled');
		} else {
			$('#price-count-path-not').fadeOut(1);
			$('select[name="price_count_path_not"]').attr('disabled', 'true');
		}
	});
	$('select[name="price_count"]').trigger("change");

	$('select[name="type"]').trigger("change");

	$('.language a:first').tab('show');
});
//--></script>
<script type="text/javascript"><!--
	function count() {
		if ($('#input-cats-horizontal li.dd-item').length > 0) {
			$('.cats-horizontal-count').text($('#input-cats-horizontal li.dd-item').length + ' шт.');
		} else {
			$('.cats-horizontal-count').text('');
		}
		if ($('#input-cats-vertical li.dd-item').length > 0) {
			$('.cats-vertical-count').text($('#input-cats-vertical li.dd-item').length + ' шт.');
		} else {
			$('.cats-vertical-count').text('');
		}
		if ($('#input-cats-cell li.dd-item').length > 0) {
			$('.cats-cell-count').text($('#input-cats-cell li.dd-item').length + ' шт.');
		} else {
			$('.cats-cell-count').text('');
		}
	}

	count();

	function max(style, data) {
		var max = 0, id;

		$(style).each(function(){
		id = $(this).data(data); 
			max = (max < id) ? id:max; 
		})

		return max;
	}

	function catAddGroup(row) {
		if ($('button[onclick="catAddGroup(' + row + ');"]').hasClass('btn-success')) {
			$('button[onclick="catAddGroup(' + row + ');"]').attr('class', 'btn btn-default').attr('data-original-title', '<?php echo $button_link_add_group; ?> <?php echo $entry_status; ?> <?php echo $text_disabled; ?>');
		} else {
			$('button[onclick="catAddGroup(' + row + ');"]').attr('class', 'btn btn-success').attr('data-original-title', '<?php echo $button_link_add_group; ?> <?php echo $entry_status; ?> <?php echo $text_enabled; ?>');
		}
	}

	function catGroupStatus(row) {
		if ($('input[name="cats[' + row + '][group_status]"]').val() == '1') {
			$('input[name="cats[' + row + '][group_status]"]').val('0');
			$('button[onclick="catGroupStatus(' + row + ');"]').attr('class', 'btn btn-danger').attr('data-original-title', '<?php echo $button_link_add_group_status; ?> <?php echo $entry_status; ?> <?php echo $text_disabled; ?>');
		} else {
			$('input[name="cats[' + row + '][group_status]"]').val('1');
			$('button[onclick="catGroupStatus(' + row + ');"]').attr('class', 'btn btn-success').attr('data-original-title', '<?php echo $button_link_add_group_status; ?> <?php echo $entry_status; ?> <?php echo $text_enabled; ?>');
		}
	}

    function сatAdd(row_last) {
		var row =  max('.dd-item', 'id') + 1;

        html  = '<li id="cats-' + row + '" class="dd-item dd3-item" data-id="' + row + '">';
        html += '  <div class="dd-handle dd3-handle"></div>';
        html += '  <div class="dd3-content">';
        html += '	<div class="input-group">';
        html += '	  <input type="text" id="name-stock-' + row + '" value="" placeholder="<?php echo $button_link_add; ?>" class="form-control" />';
        html += '	  <input type="hidden" name="cats[' + row + '][query]" value="" placeholder="" class="form-control" />';
        html += '	  <input type="hidden" name="cats[' + row + '][group_status]" value="0" placeholder="<?php echo $entry_status; ?>" class="form-control" />';
        html += '	  <input type="hidden" name="cats[' + row + '][status]" value="1" placeholder="<?php echo $entry_status; ?>" class="form-control" />';
        html += '	  <input type="hidden" name="cats[' + row + '][image_status]" value="1" placeholder="<?php echo $entry_status; ?>" class="form-control" />';
        html += '	  <div class="input-group-btn">';
        html += '		<button type="button" onclick="catDelete(' + row + ');" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>';
        //html += '		<button type="button" onclick="catAddGroup(' + row + ');" data-toggle="tooltip" title="<?php echo $button_link_add_group; ?> <?php echo $entry_status; ?> <?php echo $text_enabled; ?>" class="btn btn-default"><i class="fa fa-plus"></i></button>';
        html += '		<button type="button" onclick="catGroupStatus(' + row + ');" data-toggle="tooltip" title="<?php echo $button_link_add_group_status; ?> <?php echo $entry_status; ?> <?php echo $text_enabled; ?>" class="btn btn-danger"><i class="fa fa-sitemap"></i></button>';
        html += '		<button type="button" onclick="catStatus(' + row + ');" data-toggle="tooltip" title="<?php echo $entry_status; ?> <?php echo $text_enabled; ?>" class="btn btn-default"><i class="fa fa-pause"></i></button>';
        html += '		<button type="button" onclick="catImageStatus(' + row + ');" data-toggle="tooltip" title="<?php echo $help_cats_image_status; ?> <?php echo $text_enabled; ?>" class="btn btn-success"><i class="fa fa-image"></i></button>';
        html += '		<button type="button" onclick="catEdit(' + row + ');" data-toggle="tooltip" title="<?php echo $text_edit; ?>" class="btn btn-success"><i class="fa fa-cogs"></i></button>';
        html += '		<div id="image-' + row + '" title="<?php echo $help_cats_image; ?>" data-toggle="tooltip">';
		html += '		<a href="" id="thumb-image-' + row + '" data-toggle="image" class="img-thumbnail text-center">';
        html += '		  <img src="<?php echo $placeholder; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">';
        html += '		</a>';
        html += '		<input type="hidden" name="cats[' + row + '][image]" value="" data-placeholder="<?php echo $placeholder; ?>" id="input-image-' + row + '">';
        html += '		</div>';
		html += '		<select name="cats[' + row + '][image_position]" class="form-control" title="<?php echo $help_cats_image_position; ?>" data-toggle="tooltip">';
        html += '         <option value="1" selected="selected"><?php echo $text_left; ?></option>';
		html += '		  <option value="2"><?php echo $text_right; ?></option>';
		html += '		</select>';
		html += '		<div id="sticker-' + row + '" title="<?php echo $help_cats_sticker; ?>" data-toggle="tooltip">';
		html += '		<a href="" id="thumb-sticker-' + row + '" data-toggle="image" class="img-thumbnail text-center">';
        html += '		  <img src="<?php echo $placeholder; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">';
        html += '		</a>';
        html += '		<input type="hidden" name="cats[' + row + '][sticker]" value="" data-placeholder="<?php echo $placeholder; ?>" id="input-sticker-' + row + '">';
		html += '		</div>';
		html += '		<select name="cats[' + row + '][sticker_position]" class="form-control" title="<?php echo $help_cats_sticker_position; ?>" data-toggle="tooltip">';
        html += '         <option value="1"><?php echo $text_left; ?></option>';
		html += '		  <option value="2"><?php echo $text_right; ?></option>';
		html += '	      <option value="3"><?php echo $text_top; ?></option>';
		html += '		  <option value="4"><?php echo $text_bottom; ?></option>';
		html += '		  <option value="5"><?php echo $text_left_top; ?></option>';
		html += '		  <option value="6" selected="selected"><?php echo $text_right_top; ?></option>';
		html += '		  <option value="7"><?php echo $text_left_bottom; ?></option>';
		html += '		  <option value="8"><?php echo $text_right_bottom; ?></option>';
		html += '		</select>';
		html += '		<div id="cover-' + row + '" title="<?php echo $help_cover; ?>" data-toggle="tooltip" class="cover" style="display: none;">';
		html += '		<a href="" id="thumb-cover-' + row + '" data-toggle="image" class="img-thumbnail text-center">';
        html += '		  <img src="<?php echo $placeholder; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">';
        html += '		</a>';
        html += '		<input type="hidden" name="cats[' + row + '][cover]" value="" data-placeholder="<?php echo $placeholder; ?>" id="input-cover-' + row + '" disabled="disabled">';
		html += '		</div>';
		html += '		<select name="cats[' + row + '][cover_position]" class="form-control cover" title="<?php echo $help_cover_position; ?>" data-toggle="tooltip" style="display: none;" disabled="disabled">';
        html += '         <option value="1"><?php echo $text_left; ?></option>';
		html += '		  <option value="2"><?php echo $text_right; ?></option>';
		html += '	      <option value="3"><?php echo $text_top; ?></option>';
		html += '		  <option value="4"><?php echo $text_bottom; ?></option>';
		html += '		  <option value="5"><?php echo $text_left_top; ?></option>';
		html += '		  <option value="6"><?php echo $text_right_top; ?></option>';
		html += '		  <option value="7"><?php echo $text_left_bottom; ?></option>';
		html += '		  <option value="8" selected="selected"><?php echo $text_right_bottom; ?></option>';
		html += '		</select>';
		html += '	  </div>';
        html += '	</div>';
        html += '	<div id="cats-desc-' + row + '" class="collapse">';
        html += '	  <ul class="nav nav-tabs" id="language-' + row + '">';
						<?php foreach ($languages as $language) { ?>
        html += '		<li><a href="#language-<?php echo $language['language_id']; ?>-' + row + '" data-toggle="tab"><img src="<?php echo version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png'; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>';
						<?php } ?>
        html += '	  </ul>';
        html += '	  <div class="tab-content">';
						<?php foreach ($languages as $language) { ?>
        html += '		<div class="tab-pane" id="language-<?php echo $language['language_id']; ?>-' + row + '">';
        html += '		  <span title="<?php echo $help_cats_name; ?>" data-toggle="tooltip"><input type="text" name="cats[' + row + '][name][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_cats_name; ?>" class="form-control" /></span>';
        html += '		  <span title="<?php echo $help_cats_link; ?>" data-toggle="tooltip"><input type="text" name="cats[' + row + '][link][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_cats_link; ?>" class="form-control" /></span>';
        html += '		  <span title="<?php echo $help_cats_title; ?>" data-toggle="tooltip"><input type="text" name="cats[' + row + '][title][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_cats_title; ?>" class="form-control" /></span>';
        html += '		  <span title="<?php echo $help_cats_desc; ?>" data-toggle="tooltip"><input type="text" name="cats[' + row + '][desc][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_cats_desc; ?>" class="form-control" /></span>';
        html += '		</div>';
						<?php } ?>
        html += '	  </div>';
		html += '	  <div class="row">';
		html += '		<div title="<?php echo $help_lg; ?> <?php echo $help_cats_column; ?>" data-toggle="tooltip" class="col-sm-4"><input type="text" name="cats[' + row + '][column_lg]" value="" placeholder="<?php echo $entry_lg; ?>" class="form-control" /></div>';
		html += '		<div title="<?php echo $help_md; ?> <?php echo $help_cats_column; ?>" data-toggle="tooltip" class="col-sm-4"><input type="text" name="cats[' + row + '][column_md]" value="" placeholder="<?php echo $entry_md; ?>" class="form-control" /></div>';
		html += '		<div title="<?php echo $help_sm; ?> <?php echo $help_cats_column; ?>" data-toggle="tooltip" class="col-sm-4"><input type="text" name="cats[' + row + '][column_sm]" value="" placeholder="<?php echo $entry_sm; ?>" class="form-control" /></div>';
		html += '	  </div>';
        html += '	</div>';
        html += '  </div>';
        html += '</li>';

		if (maxInputVars()) {
			$('#input-cats-' + row_last + ' .catAdd').append(html);
		}

		$('#language-' + row + ' a:first').tab('show');

		count();

		catEdit(row);

		catAutocomplete(row);

		updateOutputChild();

		row++;
	}

	function catDelete(row) {
		$('#cats-' + row).remove();

		count();

		updateOutputChild();

		maxInputVars();
	}

	function catStatus(row) {
		if ($('input[name="cats[' + row + '][status]"]').val() == '1') {
			$('input[name="cats[' + row + '][status]"]').val('0');
			$('button[onclick="catStatus(' + row + ');"] i').attr('class', 'fa fa-play');
			$('button[onclick="catStatus(' + row + ');"]').attr('data-original-title', '<?php echo $entry_status; ?> <?php echo $text_disabled; ?>');
		} else {
			$('input[name="cats[' + row + '][status]"]').val('1');
			$('button[onclick="catStatus(' + row + ');"] i').attr('class', 'fa fa-pause');
			$('button[onclick="catStatus(' + row + ');"]').attr('data-original-title', '<?php echo $entry_status; ?> <?php echo $text_enabled; ?>');
		}
	}

	function catImageStatus(row) {
		if ($('input[name="cats[' + row + '][image_status]"]').val() == '1') {
			$('input[name="cats[' + row + '][image_status]"]').val('0');
			$('button[onclick="catImageStatus(' + row + ');"]').attr('class', 'btn btn-danger').attr('data-original-title', '<?php echo $help_cats_image_status; ?> <?php echo $text_disabled; ?>');
		} else {
			$('input[name="cats[' + row + '][image_status]"]').val('1');
			$('button[onclick="catImageStatus(' + row + ');"]').attr('class', 'btn btn-success').attr('data-original-title', '<?php echo $help_cats_image_status; ?> <?php echo $text_enabled; ?>');
		}
	}

	function catEdit(row) {
		if ($('#cats-desc-' + row).hasClass("collapse in")) {
			if ($('select[name="type"]').val() < '1') {
				$('#cats-' + row + ' #cover-' + row + '').hide();
				$('input[name="cats[' + row + '][cover]"]').attr('disabled', 'true').hide();
				$('select[name="cats[' + row + '][cover_position]"]').attr('disabled', 'true').hide();
			} else {
				$('#cats-' + row + ' #cover-' + row + '').hide();
				$('input[name="cats[' + row + '][cover]"]').attr('disabled', 'true').hide();
				$('select[name="cats[' + row + '][cover_position]"]').attr('disabled', 'true').hide();
			}
			$('#cats-' + row + ' #image-' + row + '').attr('style', 'display:inline-block;');
			$('#cats-' + row + ' #image-' + row + ' img').attr('style', 'height:26px;');
			$('select[name="cats[' + row + '][image_position]"]').hide();
			$('#cats-' + row + ' #sticker-' + row + '').attr('style', 'display:inline-block;');
			$('#cats-' + row + ' #sticker-' + row + ' img').attr('style', 'height:26px;');
			$('select[name="cats[' + row + '][sticker_position]"]').hide();
		} else {
			if ($('select[name="type"]').val() < '1') {
				$('#cats-' + row + ' #cover-' + row + '').show().attr('style', 'display:block;position:absolute;bottom:35px;left:-68%;');
				$('input[name="cats[' + row + '][cover]"]').removeAttr('disabled').show();
				$('select[name="cats[' + row + '][cover_position]"]').removeAttr('disabled').show().attr('style', 'width:109px;position:absolute;bottom:0px;left:-68%;');
			}
			$('#cats-' + row + ' #image-' + row + '').attr('style', 'display:block;position:absolute;bottom:35px;left:-12%;');
			$('#cats-' + row + ' #image-' + row + ' img').attr('style', 'height:100px;');
			$('select[name="cats[' + row + '][image_position]"]').show().attr('style', 'width:109px;position:absolute;bottom:0px;left:-12%;');
			$('#cats-' + row + ' #sticker-' + row + '').attr('style', 'float:right;');
			$('#cats-' + row + ' #sticker-' + row + ' img').attr('style', 'height:100px;');
			$('select[name="cats[' + row + '][sticker_position]"]').show().attr('style', 'width:109px;float:right;');
		}

		$('#cats-desc-' + row).collapse('toggle');
		$('button').tooltip('hide');
		$('#language-' + row + ' a:first').tab('show');
	}

	function colStatus(row) {
		//alert(row);
		if ($('input[name="' + row + '_status"]').val() == '1') {
			$('input[name="' + row + '_status"]').val('0');
			$('button[onclick="colStatus(\'' + row + '\');"] i').attr('class', 'fa fa-play');
			$('button[onclick="colStatus(\'' + row + '\');"]').attr('data-original-title', '<?php echo $entry_status; ?> <?php echo $text_disabled; ?>');
		} else {
			$('input[name="' + row + '_status"]').val('1');
			$('button[onclick="colStatus(\'' + row + '\');"] i').attr('class', 'fa fa-pause');
			$('button[onclick="colStatus(\'' + row + '\');"]').attr('data-original-title', '<?php echo $entry_status; ?> <?php echo $text_enabled; ?>');
		}
	}

	function importData() {
		if ($('input[name=\'import\']').val()) {
			var formData = new FormData();
			formData.append('import', document.getElementsByName("import")[0].files[0]);

			var request = new XMLHttpRequest();
			request.open('POST', 'index.php?route=extension/module/bus_menu/import&token=<?php echo $token; ?>');
			request.send(formData);
			request.onload = function(oEvent) {
				if (request.status == 200) {
					//alert(request.response);
					location.href = location.href;
				} else {
					alert("Error " + request.status + " occurred when trying to upload your file.<br \/>");
				}
			};
		}
	}
//--></script>
<?php if ($ajax && 1 == 0) { ?>
<script type="text/javascript"><!--
$(document).ready(function() {
	$.post('index.php?route=extension/module/bus_menu/ajax&token=<?php echo $token; ?>', {module_id:'<?php echo $module_id; ?>', token:'<?php echo $token; ?>'}).done(function(json) {
		if (json['cats_horizontal'].length) {
			$('#cats-horizontal-ajax').replaceWith(json['cats_horizontal']);
		}
		if (json['cats_vertical'].length) {
			$('#cats-vertical-ajax').replaceWith(json['cats_vertical']);
		}
		if (json['cats_cell'].length) {
			$('#cats-cell-ajax').replaceWith(json['cats_cell']);
		}

		count();

		updateOutputChild();

		$('.dd-item input').each(function(index) {
			catAutocomplete(index);
		});
	});
	/* $.ajax({
		url: 'index.php?route=extension/module/bus_menu/ajax&module_id=<?php echo $module_id; ?>&token=<?php echo $token; ?>',
		dataType: 'json',
		success: function(json) {
			if (json['cats_horizontal'].length) {
				$('#cats-horizontal-ajax').replaceWith(json['cats_horizontal']);
			}
			if (json['cats_vertical'].length) {
				$('#cats-vertical-ajax').replaceWith(json['cats_vertical']);
			}
			if (json['cats_cell'].length) {
				$('#cats-cell-ajax').replaceWith(json['cats_cell']);
			}

			count();

			updateOutputChild();

			$('.dd-item input').each(function(index) {
				catAutocomplete(index);
			});
		}
	}); */
});
//--></script>
<?php } ?>
<script type="text/javascript"><!--
	function catAutocomplete(row) {
		$('input#name-stock-' + row).autocomplete({
			'source': function(request, response) {
				$.ajax({
					url: 'index.php?route=extension/module/bus_menu/autocomplete&token=<?php echo $token; ?>&seo_now=' + $('select[name="seo_now"]').val() + '&filter_name=' +  encodeURIComponent(request),
					dataType: 'json',
					success: function(json) {
						if (json.length > 0) {
							json.unshift({'name_stock':'<?php echo $text_none; ?>', 'query':null, 'image':'', 'thumb':'<?php echo $placeholder; ?>', 'name':'', 'href':''},{'name_stock':'<?php echo $text_other; ?>', 'query':null, 'image':'', 'thumb':'<?php echo $placeholder; ?>', 'name':'', 'href':''});
						}
						response($.map(json, function(item) {
							return {category: item.text, label: item.name_stock, value: item.query, image: item.image, thumb: item.thumb, name: item.name, link: item.href.replace(/&amp;/g, '&') }
						}));
					}
				});
			},
			'select': function(item) {
				if (item['label'] == '<?php echo $text_none; ?>') {
					$('input#name-stock-' + row).val('');
				} else {
					$('input#name-stock-' + row).val(item['label']);
				}
				$('input[name="cats[' + row + '][query]"]').val(item['value']);
				$('input[name="cats[' + row + '][image]"]').val(item['image']);
				$('#thumb-image-' + row + ' img').attr('src', item['thumb']);
				if (!$('input[name="cats[' + row + '][query]"]').val() || $('select[name="seo_now"]').val() == '1') {
					<?php foreach ($languages as $language) { ?>
					$('input[name="cats[' + row + '][name][<?php echo $language['language_id']; ?>]"]').val(item['name']);
					$('input[name="cats[' + row + '][link][<?php echo $language['language_id']; ?>]"]').val(item['link']).fadeIn().removeAttr('disabled');
					<?php } ?>
				} else {
					<?php foreach ($languages as $language) { ?>
					$('input[name="cats[' + row + '][name][<?php echo $language['language_id']; ?>]"]').val(item['name']);
					$('input[name="cats[' + row + '][link][<?php echo $language['language_id']; ?>]"]').fadeOut(1).val('').attr('disabled', 'true');
					<?php } ?>
				}
				if (!$('#cats-desc-' + row).hasClass("collapse in")) {
					catEdit(row);
				}
			}
		});
	}

	$('.dd-item input').each(function(index) {
		catAutocomplete(index);
	});
//--></script>
<style type="text/css">
/* Другие стили */
.dropdown-menu{max-height:350px;overflow-y:auto;}
.dd-list input[type="text"]{height:unset !important;}
/* Nestable https://dbushell.com/Nestable/ */
.dd{position:relative;display:block;margin:0;padding:0;max-width:100%;list-style:none;font-size:13px;line-height:20px}
.dd-list{display:block;position:relative;margin:0;padding:0;list-style:none}
.dd-list .dd-list{padding-left:30px}
.dd-collapsed .dd-list{display:none}
.dd-item,.dd-empty,.dd-placeholder{display:block;position:relative;margin:0;padding:0;min-height:20px;font-size:13px;line-height:20px}
.dd-handle{display:block;height:48px;margin:5px 0;padding:5px 10px;color:#333;text-decoration:none;font-weight:700;border:1px solid #ccc;background:#fafafa;background:-webkit-linear-gradient(top,#fafafa 0%,#eee 100%);background:-moz-linear-gradient(top,#fafafa 0%,#eee 100%);background:linear-gradient(top,#fafafa 0%,#eee 100%);-webkit-border-radius:3px;border-radius:3px;box-sizing:border-box;-moz-box-sizing:border-box}
.dd-handle:hover{color:#2ea8e5;background:#fff}
.dd-item > button{display:block;position:relative;cursor:pointer;float:left;width:34px;height:34px;margin:6px 0;padding:0;text-indent:100%;white-space:nowrap;overflow:hidden;font-size:16px;line-height:1;text-align:center;font-weight:700}
.dd-item > button:before{content:'+';display:block;position:absolute;width:100%;text-align:center;text-indent:0}
.dd-item > button[data-action="collapse"]:before{content:'-'}
.dd-placeholder,.dd-empty{margin:5px 0;padding:0;min-height:30px;background:#f2fbff;border:1px dashed #b6bcbf;box-sizing:border-box;-moz-box-sizing:border-box}
.dd-empty{border:1px dashed #bbb;min-height:48px;background-color:#e5e5e5;background-image:-webkit-linear-gradient(45deg,#fff 25%,transparent 25%,transparent 75%,#fff 75%,#fff),-webkit-linear-gradient(45deg,#fff 25%,transparent 25%,transparent 75%,#fff 75%,#fff);background-image:-moz-linear-gradient(45deg,#fff 25%,transparent 25%,transparent 75%,#fff 75%,#fff),-moz-linear-gradient(45deg,#fff 25%,transparent 25%,transparent 75%,#fff 75%,#fff);background-image:linear-gradient(45deg,#fff 25%,transparent 25%,transparent 75%,#fff 75%,#fff),linear-gradient(45deg,#fff 25%,transparent 25%,transparent 75%,#fff 75%,#fff);background-size:60px 60px;background-position:0 0,30px 30px}
.dd-dragel{position:absolute;pointer-events:none;z-index:9999}
.dd-dragel > .dd-item .dd-handle{margin-top:0}
.dd-dragel .dd-handle{-webkit-box-shadow:2px 4px 6px 0 rgba(0,0,0,.1);box-shadow:2px 4px 6px 0 rgba(0,0,0,.1)}
.dd3-content{display:block;min-height:46px;margin:5px 0 5px 29px;padding:5px 10px;color:#333;text-decoration:none;font-weight:700;border:1px solid #ccc;background:#fafafa;background:-webkit-linear-gradient(top,#fafafa 0%,#eee 100%);background:-moz-linear-gradient(top,#fafafa 0%,#eee 100%);background:linear-gradient(top,#fafafa 0%,#eee 100%);-webkit-border-radius:3px;border-radius:3px;box-sizing:border-box;-moz-box-sizing:border-box}
.dd3-content:hover{color:#2ea8e5;background:#fff}
.dd3-content .input-group{width:95%}
.dd-dragel > .dd3-item > .dd3-content{margin:5px 0 5px 29px}
.dd3-item > button{margin-left:30px}
.dd3-handle{position:absolute;margin:0;left:0;top:0;cursor:move;width:30px;text-indent:100%;white-space:nowrap;overflow:hidden;border:1px solid #aaa;background:#ddd;background:-webkit-linear-gradient(top,#ddd 0%,#bbb 100%);background:-moz-linear-gradient(top,#ddd 0%,#bbb 100%);background:linear-gradient(top,#ddd 0%,#bbb 100%);border-top-right-radius:0;border-bottom-right-radius:0}
.dd3-handle:before{content:'≡';display:block;position:absolute;left:0;top:30%;width:100%;text-align:center;text-indent:0;color:#fff;font-size:20px;font-weight:400}
.dd3-handle:hover{background:#ddd}
</style>
<script type="text/javascript"><!--
$(document).ready(function() {
	updateOutputChild();
});

function updateOutputChild() {
    var updateOutput = function(e) {
        var list = e.length > 0 ? e : $(e.target),
            output = list.data('output');

        if (window.JSON && list && output) {
			output.val(window.JSON.stringify(list.nestable('serialize'))).attr('value', window.JSON.stringify(list.nestable('serialize')));
        }/*  else {
            output.val('JSON browser support required for this demo.');
        } */
    };

    var dataArray = {
		listNodeName    : 'ol',
		itemNodeName    : 'li',
		rootClass       : 'dd',
		listClass       : 'dd-list',
		itemClass       : 'dd-item',
		dragClass       : 'dd-dragel',
		handleClass     : 'dd-handle',
		collapsedClass  : 'dd-collapsed',
		placeClass      : 'dd-placeholder',
		noDragClass     : 'dd-nodrag',
		emptyClass      : 'dd-empty',
		expandBtnHTML   : '<button type="button" class="btn btn-default" data-action="expand">Expand</button>',
		collapseBtnHTML : '<button type="button" class="btn btn-default" data-action="collapse">Collapse</button>',
		group           : 0,
		maxDepth        : 20,
		threshold       : 20
	};

    // activate Nestable for list 1
	//$('#input-cats-horizontal').nestable({group: 1}).on('change', updateOutput);
    $('#input-cats-horizontal').nestable(dataArray).change(updateOutput);
    // activate Nestable for list 2
    $('#input-cats-vertical').nestable(dataArray).change(updateOutput);
	// activate Nestable for list 3
    $('#input-cats-cell').nestable(dataArray).change(updateOutput);

    // output initial serialised data
    updateOutput($('#input-cats-horizontal').data('output', $('input[name="cats_horizontal_data"]')));
    updateOutput($('#input-cats-vertical').data('output', $('input[name="cats_vertical_data"]')));
	updateOutput($('#input-cats-cell').data('output', $('input[name="cats_cell_data"]')));

    /* $('#nestable-menu').on('click', function(e) {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    }); */

    //$('#cats').nestable();
}
//--></script>
<style type="text/css">
/* Colorpicker https://www.eyecon.ro/colorpicker/ */
.colorpicker input{height:11px!important}
</style>
<script type="text/javascript"><!--
$(document).ready(function() {
	colpkr = 'input[name="menu_color"], input[name="menu_text_color"]';
	$(colpkr).ColorPicker({
		onChange: function (hsb, hex, rgb, el) {
			$(el).val("#" + hex);
			//$(el).val("#" + hex);
			$(el).css("border-right", "20px solid #" + hex);
		},
		onShow: function (colpkr) {
			//$(colpkr).fadeIn();
			$(colpkr).show(500);
			return false;
		},
		onHide: function (colpkr) {
			//$(colpkr).fadeOut(500);
			$(colpkr).hide(500);
			return false;
		},
		onBeforeShow: function () {
			$(this).ColorPickerSetColor(this.value);
		}
	});
});
//--></script>
<style type="text/css">
	.scroll-top-wrapper {position:fixed;opacity:0;text-align:center;z-index:9998;background-color:#777;color:#fefefe;width:40px;height:40px;line-height:40px;right:10px;bottom:30px;border-radius:4px;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;}
	.scroll-top-wrapper i.fa {line-height:inherit;font-size:18px;}
	.scroll-top-wrapper.show {cursor:pointer;opacity:0.6;right:15px;bottom:80px;}
</style>
<script type="text/javascript"><!--
	$(document).on('scroll', function() {
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});

	function scrollToTop() {
		verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		element = $('body');
		offset = element.offset();
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 200, 'linear');
	};
//--></script>
<script type="text/javascript"><!--
    function maxInputVars() {
		max_input_vars = <?php echo $max_input_vars; ?>;
		max_input_vars_cut = <?php echo $max_input_vars_cut; ?>;
		max_input_vars_run = $('form input, form select, form textarea').length;
		error_max_input_vars = '<div class="alert alert-danger max-input-vars"><?php echo $error_max_input_vars; ?>' + max_input_vars_run + '</div>';

		if ((max_input_vars_run + max_input_vars_cut) >= max_input_vars) {
			<?php foreach ($types as $tp) { ?>
			$('button[onclick="сatAdd(\'<?php echo $tp; ?>\');"]').attr('disabled', 'true').parent().parent().after(error_max_input_vars);
			<?php } ?>

			return false;
		} else {
			$('.max-input-vars').remove();
			<?php foreach ($types as $tp) { ?>
			$('#cats-<?php echo $tp; ?> button[onclick="сatAdd(\'<?php echo $tp; ?>\');"]').removeAttr('disabled');
			<?php } ?>

			return true;
		}
    }

	$("textarea").keydown(function(e) {
		if(e.keyCode === 9) { // tab was pressed
			// get caret position/selection
			start = this.selectionStart;
            end = this.selectionEnd;
			$this = $(this);

			// set textarea value to: text before caret + tab + text after caret
			$this.val($this.val().substring(0, start) + "\t" + $this.val().substring(end));

			// put caret at right position again
			this.selectionStart = this.selectionEnd = start + 1;

			// prevent the focus lose
			return false;
		}
	});
//--></script>
<!-- // *   Аўтар: "БуслікДрэў" ( http://buslikdrev.by/ )
	 // *   © 2016-2020; BuslikDrev - Усе правы захаваныя.
	 // *   Спецыяльна для сайта: "OpenCart.pro" ( http://opencart.pro/ ) -->
<?php echo $footer; ?>