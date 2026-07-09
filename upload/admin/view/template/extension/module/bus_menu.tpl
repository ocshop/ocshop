<?php echo $header; ?>
<style type="text/css">
span[data-toggle="tooltip"].awesome5:after{
    font-family: 'Font Awesome 5 Free' !important;
}
.icons i:hover {
    color: #dd4b39;
    border: solid 1px #ddd;
}
.icons i {
    padding: 10px;
    width: 45px;
    height: 45px;
    text-align: center;
    font-size: 18px !important;
    color: #555;
    cursor: pointer;
    border: solid 1px transparent;
    border-radius: 2px;
    float: left;
}
#thumb-site-ico-1.img-thumbnail i,#thumb-cats-vertical-ico-1.img-thumbnail i {
    color: #000000;
    background-color: #FFFFFF;
    font-size: 50px;
    margin-top: 1%;
}
.scroll-top-wrapper {position:fixed;opacity:0;text-align:center;z-index:9998;background-color:#777;color:#fefefe;width:40px;height:40px;line-height:40px;right:10px;bottom:30px;border-radius:4px;-webkit-transition:all 0.3s ease-in-out;-moz-transition:all 0.3s ease-in-out;-ms-transition:all 0.3s ease-in-out;-o-transition:all 0.3s ease-in-out;transition:all 0.3s ease-in-out;}
.scroll-top-wrapper i.fa {line-height:inherit;font-size:18px;}
.scroll-top-wrapper.show {cursor:pointer;opacity:0.6;right:15px;bottom:80px;}

/* Colorpicker https://www.eyecon.ro/colorpicker/ */
.colorpicker input{height:11px!important}

/* Другие стили */
.loading{position:relative;width:100%;height:200px;text-align:center;margin-top:15%;z-index:1}
.loading svg{width:50px;height:50px}
.loading svg .gear-one, .loading svg .gear-two{-webkit-animation:spin-me-right-round-baby 4s infinite linear forwards;animation:spin-me-right-round-baby 4s infinite linear forwards;-webkit-animation-play-state:running;animation-play-state:running}
.loading svg .gear-one{-webkit-transform-origin:33.505px 67.195px 0;transform-origin:33.505px 67.195px 0}
.loading svg .gear-two{-webkit-transform-origin:69.35px 29.93px 0;transform-origin:69.35px 29.93px 0;animation-direction:reverse}
.loading svg:hover .gear-one, .loading svg:hover .gear-two{-webkit-animation-play-state:paused;animation-play-state:paused}
@-webkit-keyframes spin-me-right-round-baby {to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
@keyframes spin-me-right-round-baby {to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}

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
<?php echo $column_left; ?>
<!-- // *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
     // *   © 2016-2022; BuslikDrev - Усе правы захаваныя.
     // *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ ) -->
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" disabled="true" onclick="$('form input[name=\'apply\']').val('1'); $('#form-bus-menu').submit();" data-toggle="tooltip" title="<?php echo $button_apply; ?>" class="btn btn-success"><i class="fa fa-save"></i></button>
        <button type="button" disabled="true" onclick="savePiecemeal('form-bus-menu');" data-toggle="tooltip" title="<?php echo $button_apply_piecemeal; ?>" class="btn btn-default"><i class="fa fa-save"></i></button>
        <button type="submit" disabled="true" form="form-bus-menu" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
                <option value="0"<?php if (!$type) { ?> selected="selected"<?php } ?>><?php echo $text_horizontal; ?></option>
                <option value="1"<?php if ($type == 1) { ?> selected="selected"<?php } ?>><?php echo $text_vertical; ?></option>
                <option value="2"<?php if ($type == 2) { ?> selected="selected"<?php } ?>><?php echo $text_cell; ?></option>
                <option value="3"<?php if ($type == 3) { ?> selected="selected"<?php } ?>><?php echo $text_filter; ?></option>
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
              <a id="thumb-site-ico-1" onclick="icons(this)" class="img-thumbnail" style="margin-bottom:20px;">
                <?php if ($site_ico != strip_tags(html_entity_decode($site_ico, ENT_QUOTES, 'UTF-8'))) { ?>
                <?php echo html_entity_decode($site_ico, ENT_QUOTES, 'UTF-8'); ?>
                <?php } else { ?>
                <img src="<?php echo $site_ico_thumb; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">
                <?php } ?>
              </a>
              <a id="thumb-site-ico-2" data-toggle="image" class="img-thumbnail" style="margin-bottom:20px; display: none;">
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
              <a id="thumb-cats-vertical-ico-1" onclick="icons(this)" class="img-thumbnail" style="margin-bottom:20px;">
                <?php if ($cats_vertical_ico != strip_tags(html_entity_decode($cats_vertical_ico, ENT_QUOTES, 'UTF-8'))) { ?>
                <?php echo html_entity_decode($cats_vertical_ico, ENT_QUOTES, 'UTF-8'); ?>
                <?php } else { ?>
                <img src="<?php echo $site_ico_thumb; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">
                <?php } ?>
              </a>
              <a id="thumb-cats-vertical-ico-2" data-toggle="image" class="img-thumbnail" style="margin-bottom:20px; display: none;">
                <img src="<?php echo $site_ico_thumb; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">
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
              <div class="row">
                <div class="col-sm-5">
                  <select data-name="table" class="form-control">
                    <option value="blog_category"><?php echo $text_blog_category; ?></option>
                    <option value="article"><?php echo $text_article; ?></option>
                    <option value="category" selected="selected"><?php echo $text_category; ?></option>
                    <option value="information"><?php echo $text_information; ?></option>
                    <option value="manufacturer"><?php echo $text_manufacturer; ?></option>
                    <!-- <option value="product"><?php echo $text_product; ?></option> -->
                  </select>
                </div>
                <div class="col-sm-5">
                  <input type="number" data-name="level_limit" value="" placeholder="0" class="form-control" />
                </div>
                <div class="col-sm-2">
                  <button type="button" onclick="catAddGroup(null, null, '<?php echo $tp; ?>', this);" data-toggle="tooltip" title="<?php echo $button_link_add_groups; ?>" class="btn btn-primary"><i class="fa fa-sitemap"></i></button>
                </div>
              </div>
              <div class="cats-<?php echo $tp; ?>-count"></div>
              <div id="input-cats-<?php echo $tp; ?>" class="cats dd">
                <?php if (${'cats_' . $tp}) { ?>
                  <?php echo ${'cats_' . $tp}; ?>
                <?php } else { ?>
                  <ol class="catAdd dd-list"></ol>
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
                <option value="1"<?php if ($design == 1) { ?> selected="selected"<?php } ?>><?php echo $text_design_1; ?></option>
                <option value="2"<?php if ($design == 2) { ?> selected="selected"<?php } ?>><?php echo $text_design_2; ?></option>
                <option value="3"<?php if ($design == 3) { ?> selected="selected"<?php } ?>><?php echo $text_design_3; ?></option>
                <option value="0"<?php if (!$design) { ?> selected="selected"<?php } ?>><?php echo $text_design_not; ?></option>
                <option value="own"<?php if ($design == 'own') { ?> selected="selected"<?php } ?>><?php echo $text_design_own; ?></option>
              </select>
            </div>
            <label class="own_help col-sm-2 control-label" for="input-design-id"><span title="<?php echo $help_design_id; ?>" data-toggle="tooltip"><?php echo $entry_design_id; ?></span></label>
            <div class="own_help col-sm-10">
              <input type="number" name="design_id" value="<?php echo $design_id; ?>" placeholder="<?php echo $entry_path_lvl_limit; ?>" id="input-designid" class="form-control" />
              <span class="text"><?php echo $text_design_own_help; ?></span>
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
          <div class="form-group">
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
<div class="icons modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button></br>
        <h4 class="modal-title">Иконки Font Awesome</h4>
        <select onchange="icons(null, this.value)" class="form-control">
          <option value="4.4.0">v4.4.0+</option>
          <option value="4.7.0" selected="selected">v4.7.0+</option>
          <option value="5.15.1">v5.15.1+</option>
        </select>
      </div>
      <div class="modal-body" style="overflow:auto">
      </div>
    </div>
  </div>
</div>
<!-- <link href="view/javascript/buslikdrev/font-awesome/4.7.0/css/all.min.css" type="text/css" rel="stylesheet" /> -->
<script type="text/javascript"><!--
	var icon;

	function icons(id, version_icon) {
		//parseHtmlIcons('fa');
		//parseIcons(6);
		if (!version_icon) {
			var version_icon = '4.7.0';
		}
		var type_icon = ['fa'];
		var type_name = {'fa':'Solid','fas':'Solid','fab':'Brands','fad':'Duotone','fal':'Light','far':'Regular'};
		var html = '';
		var s;
		$('span[data-toggle="tooltip"]').removeClass('awesome5');

		if (version_icon == '4.4.0') {
			//Иконки Font Awesome v4.4.0
			var title = 'Иконки Font Awesome v4.4.0';
			var base_icons = {
				'fa':["fa-glass","fa-music","fa-search","fa-envelope-o","fa-heart","fa-star","fa-star-o","fa-user","fa-film","fa-th-large","fa-th","fa-th-list","fa-check","fa-remove","fa-search-plus","fa-search-minus","fa-power-off","fa-signal","fa-gear","fa-trash-o","fa-home","fa-file-o","fa-clock-o","fa-road","fa-download","fa-arrow-circle-o-down","fa-arrow-circle-o-up","fa-inbox","fa-play-circle-o","fa-rotate-right","fa-refresh","fa-list-alt","fa-lock","fa-flag","fa-headphones","fa-volume-off","fa-volume-down","fa-volume-up","fa-qrcode","fa-barcode","fa-tag","fa-tags","fa-book","fa-bookmark","fa-print","fa-camera","fa-font","fa-bold","fa-italic","fa-text-height","fa-text-width","fa-align-left","fa-align-center","fa-align-right","fa-align-justify","fa-list","fa-dedent","fa-indent","fa-video-camera","fa-photo","fa-pencil","fa-map-marker","fa-adjust","fa-tint","fa-edit","fa-share-square-o","fa-check-square-o","fa-arrows","fa-step-backward","fa-fast-backward","fa-backward","fa-play","fa-pause","fa-stop","fa-forward","fa-fast-forward","fa-step-forward","fa-eject","fa-chevron-left","fa-chevron-right","fa-plus-circle","fa-minus-circle","fa-times-circle","fa-check-circle","fa-question-circle","fa-info-circle","fa-crosshairs","fa-times-circle-o","fa-check-circle-o","fa-ban","fa-arrow-left","fa-arrow-right","fa-arrow-up","fa-arrow-down","fa-mail-forward","fa-expand","fa-compress","fa-plus","fa-minus","fa-asterisk","fa-exclamation-circle","fa-gift","fa-leaf","fa-fire","fa-eye","fa-eye-slash","fa-warning","fa-plane","fa-calendar","fa-random","fa-comment","fa-magnet","fa-chevron-up","fa-chevron-down","fa-retweet","fa-shopping-cart","fa-folder","fa-folder-open","fa-arrows-v","fa-arrows-h","fa-bar-chart-o","fa-twitter-square","fa-facebook-square","fa-camera-retro","fa-key","fa-gears","fa-comments","fa-thumbs-o-up","fa-thumbs-o-down","fa-star-half","fa-heart-o","fa-sign-out","fa-linkedin-square","fa-thumb-tack","fa-external-link","fa-sign-in","fa-trophy","fa-github-square","fa-upload","fa-lemon-o","fa-phone","fa-square-o","fa-bookmark-o","fa-phone-square","fa-twitter","fa-facebook-f","fa-github","fa-unlock","fa-credit-card","fa-feed","fa-hdd-o","fa-bullhorn","fa-bell","fa-certificate","fa-hand-o-right","fa-hand-o-left","fa-hand-o-up","fa-hand-o-down","fa-arrow-circle-left","fa-arrow-circle-right","fa-arrow-circle-up","fa-arrow-circle-down","fa-globe","fa-wrench","fa-tasks","fa-filter","fa-briefcase","fa-arrows-alt","fa-group","fa-chain","fa-cloud","fa-flask","fa-cut","fa-copy","fa-paperclip","fa-save","fa-square","fa-navicon","fa-list-ul","fa-list-ol","fa-strikethrough","fa-underline","fa-table","fa-magic","fa-truck","fa-pinterest","fa-pinterest-square","fa-google-plus-square","fa-google-plus","fa-money","fa-caret-down","fa-caret-up","fa-caret-left","fa-caret-right","fa-columns","fa-unsorted","fa-sort-down","fa-sort-up","fa-envelope","fa-linkedin","fa-rotate-left","fa-legal","fa-dashboard","fa-comment-o","fa-comments-o","fa-flash","fa-sitemap","fa-umbrella","fa-paste","fa-lightbulb-o","fa-exchange","fa-cloud-download","fa-cloud-upload","fa-user-md","fa-stethoscope","fa-suitcase","fa-bell-o","fa-coffee","fa-cutlery","fa-file-text-o","fa-building-o","fa-hospital-o","fa-ambulance","fa-medkit","fa-fighter-jet","fa-beer","fa-h-square","fa-plus-square","fa-angle-double-left","fa-angle-double-right","fa-angle-double-up","fa-angle-double-down","fa-angle-left","fa-angle-right","fa-angle-up","fa-angle-down","fa-desktop","fa-laptop","fa-tablet","fa-mobile-phone","fa-circle-o","fa-quote-left","fa-quote-right","fa-spinner","fa-circle","fa-mail-reply","fa-github-alt","fa-folder-o","fa-folder-open-o","fa-smile-o","fa-frown-o","fa-meh-o","fa-gamepad","fa-keyboard-o","fa-flag-o","fa-flag-checkered","fa-terminal","fa-code","fa-mail-reply-all","fa-star-half-empty","fa-location-arrow","fa-crop","fa-code-fork","fa-unlink","fa-question","fa-info","fa-exclamation","fa-superscript","fa-subscript","fa-eraser","fa-puzzle-piece","fa-microphone","fa-microphone-slash","fa-shield","fa-calendar-o","fa-fire-extinguisher","fa-rocket","fa-maxcdn","fa-chevron-circle-left","fa-chevron-circle-right","fa-chevron-circle-up","fa-chevron-circle-down","fa-html5","fa-css3","fa-anchor","fa-unlock-alt","fa-bullseye","fa-ellipsis-h","fa-ellipsis-v","fa-rss-square","fa-play-circle","fa-ticket","fa-minus-square","fa-minus-square-o","fa-level-up","fa-level-down","fa-check-square","fa-pencil-square","fa-external-link-square","fa-share-square","fa-compass","fa-toggle-down","fa-toggle-up","fa-toggle-right","fa-euro","fa-gbp","fa-dollar","fa-rupee","fa-cny","fa-ruble","fa-won","fa-bitcoin","fa-file","fa-file-text","fa-sort-alpha-asc","fa-sort-alpha-desc","fa-sort-amount-asc","fa-sort-amount-desc","fa-sort-numeric-asc","fa-sort-numeric-desc","fa-thumbs-up","fa-thumbs-down","fa-youtube-square","fa-youtube","fa-xing","fa-xing-square","fa-youtube-play","fa-dropbox","fa-stack-overflow","fa-instagram","fa-flickr","fa-adn","fa-bitbucket","fa-bitbucket-square","fa-tumblr","fa-tumblr-square","fa-long-arrow-down","fa-long-arrow-up","fa-long-arrow-left","fa-long-arrow-right","fa-apple","fa-windows","fa-android","fa-linux","fa-dribbble","fa-skype","fa-foursquare","fa-trello","fa-female","fa-male","fa-gittip","fa-sun-o","fa-moon-o","fa-archive","fa-bug","fa-vk","fa-weibo","fa-renren","fa-pagelines","fa-stack-exchange","fa-arrow-circle-o-right","fa-arrow-circle-o-left","fa-toggle-left","fa-dot-circle-o","fa-wheelchair","fa-vimeo-square","fa-turkish-lira","fa-plus-square-o","fa-space-shuttle","fa-slack","fa-envelope-square","fa-wordpress","fa-openid","fa-institution","fa-mortar-board","fa-yahoo","fa-google","fa-reddit","fa-reddit-square","fa-stumbleupon-circle","fa-stumbleupon","fa-delicious","fa-digg","fa-pied-piper","fa-pied-piper-alt","fa-drupal","fa-joomla","fa-language","fa-fax","fa-building","fa-child","fa-paw","fa-spoon","fa-cube","fa-cubes","fa-behance","fa-behance-square","fa-steam","fa-steam-square","fa-recycle","fa-automobile","fa-cab","fa-tree","fa-spotify","fa-deviantart","fa-soundcloud","fa-database","fa-file-pdf-o","fa-file-word-o","fa-file-excel-o","fa-file-powerpoint-o","fa-file-photo-o","fa-file-zip-o","fa-file-sound-o","fa-file-movie-o","fa-file-code-o","fa-vine","fa-codepen","fa-jsfiddle","fa-life-bouy","fa-circle-o-notch","fa-ra","fa-ge","fa-git-square","fa-git","fa-y-combinator-square","fa-tencent-weibo","fa-qq","fa-wechat","fa-send","fa-send-o","fa-history","fa-circle-thin","fa-header","fa-paragraph","fa-sliders","fa-share-alt","fa-share-alt-square","fa-bomb","fa-soccer-ball-o","fa-tty","fa-binoculars","fa-plug","fa-slideshare","fa-twitch","fa-yelp","fa-newspaper-o","fa-wifi","fa-calculator","fa-paypal","fa-google-wallet","fa-cc-visa","fa-cc-mastercard","fa-cc-discover","fa-cc-amex","fa-cc-paypal","fa-cc-stripe","fa-bell-slash","fa-bell-slash-o","fa-trash","fa-copyright","fa-at","fa-eyedropper","fa-paint-brush","fa-birthday-cake","fa-area-chart","fa-pie-chart","fa-line-chart","fa-lastfm","fa-lastfm-square","fa-toggle-off","fa-toggle-on","fa-bicycle","fa-bus","fa-ioxhost","fa-angellist","fa-cc","fa-shekel","fa-meanpath","fa-buysellads","fa-connectdevelop","fa-dashcube","fa-forumbee","fa-leanpub","fa-sellsy","fa-shirtsinbulk","fa-simplybuilt","fa-skyatlas","fa-cart-plus","fa-cart-arrow-down","fa-diamond","fa-ship","fa-user-secret","fa-motorcycle","fa-street-view","fa-heartbeat","fa-venus","fa-mars","fa-mercury","fa-intersex","fa-transgender-alt","fa-venus-double","fa-mars-double","fa-venus-mars","fa-mars-stroke","fa-mars-stroke-v","fa-mars-stroke-h","fa-neuter","fa-genderless","fa-facebook-official","fa-pinterest-p","fa-whatsapp","fa-server","fa-user-plus","fa-user-times","fa-hotel","fa-viacoin","fa-train","fa-subway","fa-medium","fa-yc","fa-optin-monster","fa-opencart","fa-expeditedssl","fa-battery-4","fa-battery-3","fa-battery-2","fa-battery-1","fa-battery-0","fa-mouse-pointer","fa-i-cursor","fa-object-group","fa-object-ungroup","fa-sticky-note","fa-sticky-note-o","fa-cc-jcb","fa-cc-diners-club","fa-clone","fa-balance-scale","fa-hourglass-o","fa-hourglass-1","fa-hourglass-2","fa-hourglass-3","fa-hourglass","fa-hand-grab-o","fa-hand-stop-o","fa-hand-scissors-o","fa-hand-lizard-o","fa-hand-spock-o","fa-hand-pointer-o","fa-hand-peace-o","fa-trademark","fa-registered","fa-creative-commons","fa-gg","fa-gg-circle","fa-tripadvisor","fa-odnoklassniki","fa-odnoklassniki-square","fa-get-pocket","fa-wikipedia-w","fa-safari","fa-chrome","fa-firefox","fa-opera","fa-internet-explorer","fa-tv","fa-contao","fa-500px","fa-amazon","fa-calendar-plus-o","fa-calendar-minus-o","fa-calendar-times-o","fa-calendar-check-o","fa-industry","fa-map-pin","fa-map-signs","fa-map-o","fa-map","fa-commenting","fa-commenting-o","fa-houzz","fa-vimeo","fa-black-tie","fa-fonticons"]
			};
		} else if (version_icon == '4.7.0') {
			//Иконки Font Awesome v4.7.0
			var title = 'Иконки Font Awesome v4.7.0';
			var base_icons = {
				'fa':["fa-glass","fa-music","fa-search","fa-envelope-o","fa-heart","fa-star","fa-star-o","fa-user","fa-film","fa-th-large","fa-th","fa-th-list","fa-check","fa-remove","fa-search-plus","fa-search-minus","fa-power-off","fa-signal","fa-gear","fa-trash-o","fa-home","fa-file-o","fa-clock-o","fa-road","fa-download","fa-arrow-circle-o-down","fa-arrow-circle-o-up","fa-inbox","fa-play-circle-o","fa-rotate-right","fa-refresh","fa-list-alt","fa-lock","fa-flag","fa-headphones","fa-volume-off","fa-volume-down","fa-volume-up","fa-qrcode","fa-barcode","fa-tag","fa-tags","fa-book","fa-bookmark","fa-print","fa-camera","fa-font","fa-bold","fa-italic","fa-text-height","fa-text-width","fa-align-left","fa-align-center","fa-align-right","fa-align-justify","fa-list","fa-dedent","fa-indent","fa-video-camera","fa-photo","fa-pencil","fa-map-marker","fa-adjust","fa-tint","fa-edit","fa-share-square-o","fa-check-square-o","fa-arrows","fa-step-backward","fa-fast-backward","fa-backward","fa-play","fa-pause","fa-stop","fa-forward","fa-fast-forward","fa-step-forward","fa-eject","fa-chevron-left","fa-chevron-right","fa-plus-circle","fa-minus-circle","fa-times-circle","fa-check-circle","fa-question-circle","fa-info-circle","fa-crosshairs","fa-times-circle-o","fa-check-circle-o","fa-ban","fa-arrow-left","fa-arrow-right","fa-arrow-up","fa-arrow-down","fa-mail-forward","fa-expand","fa-compress","fa-plus","fa-minus","fa-asterisk","fa-exclamation-circle","fa-gift","fa-leaf","fa-fire","fa-eye","fa-eye-slash","fa-warning","fa-plane","fa-calendar","fa-random","fa-comment","fa-magnet","fa-chevron-up","fa-chevron-down","fa-retweet","fa-shopping-cart","fa-folder","fa-folder-open","fa-arrows-v","fa-arrows-h","fa-bar-chart-o","fa-twitter-square","fa-facebook-square","fa-camera-retro","fa-key","fa-gears","fa-comments","fa-thumbs-o-up","fa-thumbs-o-down","fa-star-half","fa-heart-o","fa-sign-out","fa-linkedin-square","fa-thumb-tack","fa-external-link","fa-sign-in","fa-trophy","fa-github-square","fa-upload","fa-lemon-o","fa-phone","fa-square-o","fa-bookmark-o","fa-phone-square","fa-twitter","fa-facebook-f","fa-github","fa-unlock","fa-credit-card","fa-feed","fa-hdd-o","fa-bullhorn","fa-bell","fa-certificate","fa-hand-o-right","fa-hand-o-left","fa-hand-o-up","fa-hand-o-down","fa-arrow-circle-left","fa-arrow-circle-right","fa-arrow-circle-up","fa-arrow-circle-down","fa-globe","fa-wrench","fa-tasks","fa-filter","fa-briefcase","fa-arrows-alt","fa-group","fa-chain","fa-cloud","fa-flask","fa-cut","fa-copy","fa-paperclip","fa-save","fa-square","fa-navicon","fa-list-ul","fa-list-ol","fa-strikethrough","fa-underline","fa-table","fa-magic","fa-truck","fa-pinterest","fa-pinterest-square","fa-google-plus-square","fa-google-plus","fa-money","fa-caret-down","fa-caret-up","fa-caret-left","fa-caret-right","fa-columns","fa-unsorted","fa-sort-down","fa-sort-up","fa-envelope","fa-linkedin","fa-rotate-left","fa-legal","fa-dashboard","fa-comment-o","fa-comments-o","fa-flash","fa-sitemap","fa-umbrella","fa-paste","fa-lightbulb-o","fa-exchange","fa-cloud-download","fa-cloud-upload","fa-user-md","fa-stethoscope","fa-suitcase","fa-bell-o","fa-coffee","fa-cutlery","fa-file-text-o","fa-building-o","fa-hospital-o","fa-ambulance","fa-medkit","fa-fighter-jet","fa-beer","fa-h-square","fa-plus-square","fa-angle-double-left","fa-angle-double-right","fa-angle-double-up","fa-angle-double-down","fa-angle-left","fa-angle-right","fa-angle-up","fa-angle-down","fa-desktop","fa-laptop","fa-tablet","fa-mobile-phone","fa-circle-o","fa-quote-left","fa-quote-right","fa-spinner","fa-circle","fa-mail-reply","fa-github-alt","fa-folder-o","fa-folder-open-o","fa-smile-o","fa-frown-o","fa-meh-o","fa-gamepad","fa-keyboard-o","fa-flag-o","fa-flag-checkered","fa-terminal","fa-code","fa-mail-reply-all","fa-star-half-empty","fa-location-arrow","fa-crop","fa-code-fork","fa-unlink","fa-question","fa-info","fa-exclamation","fa-superscript","fa-subscript","fa-eraser","fa-puzzle-piece","fa-microphone","fa-microphone-slash","fa-shield","fa-calendar-o","fa-fire-extinguisher","fa-rocket","fa-maxcdn","fa-chevron-circle-left","fa-chevron-circle-right","fa-chevron-circle-up","fa-chevron-circle-down","fa-html5","fa-css3","fa-anchor","fa-unlock-alt","fa-bullseye","fa-ellipsis-h","fa-ellipsis-v","fa-rss-square","fa-play-circle","fa-ticket","fa-minus-square","fa-minus-square-o","fa-level-up","fa-level-down","fa-check-square","fa-pencil-square","fa-external-link-square","fa-share-square","fa-compass","fa-toggle-down","fa-toggle-up","fa-toggle-right","fa-euro","fa-gbp","fa-dollar","fa-rupee","fa-cny","fa-ruble","fa-won","fa-bitcoin","fa-file","fa-file-text","fa-sort-alpha-asc","fa-sort-alpha-desc","fa-sort-amount-asc","fa-sort-amount-desc","fa-sort-numeric-asc","fa-sort-numeric-desc","fa-thumbs-up","fa-thumbs-down","fa-youtube-square","fa-youtube","fa-xing","fa-xing-square","fa-youtube-play","fa-dropbox","fa-stack-overflow","fa-instagram","fa-flickr","fa-adn","fa-bitbucket","fa-bitbucket-square","fa-tumblr","fa-tumblr-square","fa-long-arrow-down","fa-long-arrow-up","fa-long-arrow-left","fa-long-arrow-right","fa-apple","fa-windows","fa-android","fa-linux","fa-dribbble","fa-skype","fa-foursquare","fa-trello","fa-female","fa-male","fa-gittip","fa-sun-o","fa-moon-o","fa-archive","fa-bug","fa-vk","fa-weibo","fa-renren","fa-pagelines","fa-stack-exchange","fa-arrow-circle-o-right","fa-arrow-circle-o-left","fa-toggle-left","fa-dot-circle-o","fa-wheelchair","fa-vimeo-square","fa-turkish-lira","fa-plus-square-o","fa-space-shuttle","fa-slack","fa-envelope-square","fa-wordpress","fa-openid","fa-institution","fa-mortar-board","fa-yahoo","fa-google","fa-reddit","fa-reddit-square","fa-stumbleupon-circle","fa-stumbleupon","fa-delicious","fa-digg","fa-pied-piper-pp","fa-pied-piper-alt","fa-drupal","fa-joomla","fa-language","fa-fax","fa-building","fa-child","fa-paw","fa-spoon","fa-cube","fa-cubes","fa-behance","fa-behance-square","fa-steam","fa-steam-square","fa-recycle","fa-automobile","fa-cab","fa-tree","fa-spotify","fa-deviantart","fa-soundcloud","fa-database","fa-file-pdf-o","fa-file-word-o","fa-file-excel-o","fa-file-powerpoint-o","fa-file-photo-o","fa-file-zip-o","fa-file-sound-o","fa-file-movie-o","fa-file-code-o","fa-vine","fa-codepen","fa-jsfiddle","fa-life-bouy","fa-circle-o-notch","fa-ra","fa-ge","fa-git-square","fa-git","fa-y-combinator-square","fa-tencent-weibo","fa-qq","fa-wechat","fa-send","fa-send-o","fa-history","fa-circle-thin","fa-header","fa-paragraph","fa-sliders","fa-share-alt","fa-share-alt-square","fa-bomb","fa-soccer-ball-o","fa-tty","fa-binoculars","fa-plug","fa-slideshare","fa-twitch","fa-yelp","fa-newspaper-o","fa-wifi","fa-calculator","fa-paypal","fa-google-wallet","fa-cc-visa","fa-cc-mastercard","fa-cc-discover","fa-cc-amex","fa-cc-paypal","fa-cc-stripe","fa-bell-slash","fa-bell-slash-o","fa-trash","fa-copyright","fa-at","fa-eyedropper","fa-paint-brush","fa-birthday-cake","fa-area-chart","fa-pie-chart","fa-line-chart","fa-lastfm","fa-lastfm-square","fa-toggle-off","fa-toggle-on","fa-bicycle","fa-bus","fa-ioxhost","fa-angellist","fa-cc","fa-shekel","fa-meanpath","fa-buysellads","fa-connectdevelop","fa-dashcube","fa-forumbee","fa-leanpub","fa-sellsy","fa-shirtsinbulk","fa-simplybuilt","fa-skyatlas","fa-cart-plus","fa-cart-arrow-down","fa-diamond","fa-ship","fa-user-secret","fa-motorcycle","fa-street-view","fa-heartbeat","fa-venus","fa-mars","fa-mercury","fa-intersex","fa-transgender-alt","fa-venus-double","fa-mars-double","fa-venus-mars","fa-mars-stroke","fa-mars-stroke-v","fa-mars-stroke-h","fa-neuter","fa-genderless","fa-facebook-official","fa-pinterest-p","fa-whatsapp","fa-server","fa-user-plus","fa-user-times","fa-hotel","fa-viacoin","fa-train","fa-subway","fa-medium","fa-yc","fa-optin-monster","fa-opencart","fa-expeditedssl","fa-battery-4","fa-battery-3","fa-battery-2","fa-battery-1","fa-battery-0","fa-mouse-pointer","fa-i-cursor","fa-object-group","fa-object-ungroup","fa-sticky-note","fa-sticky-note-o","fa-cc-jcb","fa-cc-diners-club","fa-clone","fa-balance-scale","fa-hourglass-o","fa-hourglass-1","fa-hourglass-2","fa-hourglass-3","fa-hourglass","fa-hand-grab-o","fa-hand-stop-o","fa-hand-scissors-o","fa-hand-lizard-o","fa-hand-spock-o","fa-hand-pointer-o","fa-hand-peace-o","fa-trademark","fa-registered","fa-creative-commons","fa-gg","fa-gg-circle","fa-tripadvisor","fa-odnoklassniki","fa-odnoklassniki-square","fa-get-pocket","fa-wikipedia-w","fa-safari","fa-chrome","fa-firefox","fa-opera","fa-internet-explorer","fa-tv","fa-contao","fa-500px","fa-amazon","fa-calendar-plus-o","fa-calendar-minus-o","fa-calendar-times-o","fa-calendar-check-o","fa-industry","fa-map-pin","fa-map-signs","fa-map-o","fa-map","fa-commenting","fa-commenting-o","fa-houzz","fa-vimeo","fa-black-tie","fa-fonticons","fa-reddit-alien","fa-edge","fa-credit-card-alt","fa-codiepie","fa-modx","fa-fort-awesome","fa-usb","fa-product-hunt","fa-mixcloud","fa-scribd","fa-pause-circle","fa-pause-circle-o","fa-stop-circle","fa-stop-circle-o","fa-shopping-bag","fa-shopping-basket","fa-hashtag","fa-bluetooth","fa-bluetooth-b","fa-percent","fa-gitlab","fa-wpbeginner","fa-wpforms","fa-envira","fa-universal-access","fa-wheelchair-alt","fa-question-circle-o","fa-blind","fa-audio-description","fa-volume-control-phone","fa-braille","fa-assistive-listening-systems","fa-asl-interpreting","fa-deafness","fa-glide","fa-glide-g","fa-signing","fa-low-vision","fa-viadeo","fa-viadeo-square","fa-snapchat","fa-snapchat-ghost","fa-snapchat-square","fa-pied-piper","fa-first-order","fa-yoast","fa-themeisle","fa-google-plus-circle","fa-fa","fa-handshake-o","fa-envelope-open","fa-envelope-open-o","fa-linode","fa-address-book","fa-address-book-o","fa-vcard","fa-vcard-o","fa-user-circle","fa-user-circle-o","fa-user-o","fa-id-badge","fa-drivers-license","fa-drivers-license-o","fa-quora","fa-free-code-camp","fa-telegram","fa-thermometer-4","fa-thermometer-3","fa-thermometer-2","fa-thermometer-1","fa-thermometer-0","fa-shower","fa-bathtub","fa-podcast","fa-window-maximize","fa-window-minimize","fa-window-restore","fa-times-rectangle","fa-times-rectangle-o","fa-bandcamp","fa-grav","fa-etsy","fa-imdb","fa-ravelry","fa-eercast","fa-microchip","fa-snowflake-o","fa-superpowers","fa-wpexplorer","fa-meetup"]
				// revalution
				//'fa':["fa-500px","fa-address-book","fa-address-book-o","fa-address-card","fa-address-card-o","fa-adjust","fa-adn","fa-align-center","fa-align-justify","fa-align-left","fa-align-right","fa-amazon","fa-ambulance","fa-american-sign-language-interpreting","fa-anchor","fa-android","fa-angellist","fa-angle-double-down","fa-angle-double-left","fa-angle-double-right","fa-angle-double-up","fa-angle-down","fa-angle-left","fa-angle-right","fa-angle-up","fa-apple","fa-archive","fa-area-chart","fa-arrow-circle-down","fa-arrow-circle-left","fa-arrow-circle-o-down","fa-arrow-circle-o-left","fa-arrow-circle-o-right","fa-arrow-circle-o-up","fa-arrow-circle-right","fa-arrow-circle-up","fa-arrow-down","fa-arrow-left","fa-arrow-right","fa-arrow-up","fa-arrows","fa-arrows-alt","fa-arrows-h","fa-arrows-v","fa-asl-interpreting","fa-assistive-listening-systems","fa-asterisk","fa-at","fa-audio-description","fa-automobile","fa-backward","fa-balance-scale","fa-ban","fa-bandcamp","fa-bank","fa-bar-chart","fa-bar-chart-o","fa-barcode","fa-bars","fa-bath","fa-bathtub","fa-battery","fa-battery-0","fa-battery-1","fa-battery-2","fa-battery-3","fa-battery-4","fa-battery-empty","fa-battery-full","fa-battery-half","fa-battery-quarter","fa-battery-three-quarters","fa-bed","fa-beer","fa-behance","fa-behance-square","fa-bell","fa-bell-o","fa-bell-slash","fa-bell-slash-o","fa-bicycle","fa-binoculars","fa-birthday-cake","fa-bitbucket","fa-bitbucket-square","fa-bitcoin","fa-black-tie","fa-blind","fa-bluetooth","fa-bluetooth-b","fa-bold","fa-bolt","fa-bomb","fa-book","fa-bookmark","fa-bookmark-o","fa-braille","fa-briefcase","fa-btc","fa-bug","fa-building","fa-building-o","fa-bullhorn","fa-bullseye","fa-bus","fa-buysellads","fa-cab","fa-calculator","fa-calendar","fa-calendar-check-o","fa-calendar-minus-o","fa-calendar-o","fa-calendar-plus-o","fa-calendar-times-o","fa-camera","fa-camera-retro","fa-car","fa-caret-down","fa-caret-left","fa-caret-right","fa-caret-square-o-down","fa-caret-square-o-left","fa-caret-square-o-right","fa-caret-square-o-up","fa-caret-up","fa-cart-arrow-down","fa-cart-plus","fa-cc","fa-cc-amex","fa-cc-diners-club","fa-cc-discover","fa-cc-jcb","fa-cc-mastercard","fa-cc-paypal","fa-cc-stripe","fa-cc-visa","fa-certificate","fa-chain","fa-chain-broken","fa-check","fa-check-circle","fa-check-circle-o","fa-check-square","fa-check-square-o","fa-chevron-circle-down","fa-chevron-circle-left","fa-chevron-circle-right","fa-chevron-circle-up","fa-chevron-down","fa-chevron-left","fa-chevron-right","fa-chevron-up","fa-child","fa-chrome","fa-circle","fa-circle-o","fa-circle-o-notch","fa-circle-thin","fa-clipboard","fa-clock-o","fa-clone","fa-close","fa-cloud","fa-cloud-download","fa-cloud-upload","fa-cny","fa-code","fa-code-fork","fa-codepen","fa-codiepie","fa-coffee","fa-cog","fa-cogs","fa-columns","fa-comment","fa-comment-o","fa-commenting","fa-commenting-o","fa-comments","fa-comments-o","fa-compass","fa-compress","fa-connectdevelop","fa-contao","fa-copy","fa-copyright","fa-creative-commons","fa-credit-card","fa-credit-card-alt","fa-crop","fa-crosshairs","fa-css3","fa-cube","fa-cubes","fa-cut","fa-cutlery","fa-dashboard","fa-dashcube","fa-database","fa-deaf","fa-deafness","fa-dedent","fa-delicious","fa-desktop","fa-deviantart","fa-diamond","fa-digg","fa-dollar","fa-dot-circle-o","fa-download","fa-dribbble","fa-drivers-license","fa-drivers-license-o","fa-dropbox","fa-drupal","fa-edge","fa-edit","fa-eercast","fa-eject","fa-ellipsis-h","fa-ellipsis-v","fa-empire","fa-envelope","fa-envelope-o","fa-envelope-open","fa-envelope-open-o","fa-envelope-square","fa-envira","fa-eraser","fa-etsy","fa-eur","fa-euro","fa-exchange","fa-exclamation","fa-exclamation-circle","fa-exclamation-triangle","fa-expand","fa-expeditedssl","fa-external-link","fa-external-link-square","fa-eye","fa-eye-slash","fa-eyedropper","fa-fa","fa-facebook","fa-facebook-f","fa-facebook-official","fa-facebook-square","fa-fast-backward","fa-fast-forward","fa-fax","fa-feed","fa-female","fa-fighter-jet","fa-file","fa-file-archive-o","fa-file-audio-o","fa-file-code-o","fa-file-excel-o","fa-file-image-o","fa-file-movie-o","fa-file-o","fa-file-pdf-o","fa-file-photo-o","fa-file-picture-o","fa-file-powerpoint-o","fa-file-sound-o","fa-file-text","fa-file-text-o","fa-file-video-o","fa-file-word-o","fa-file-zip-o","fa-files-o","fa-film","fa-filter","fa-fire","fa-fire-extinguisher","fa-firefox","fa-first-order","fa-flag","fa-flag-checkered","fa-flag-o","fa-flash","fa-flask","fa-flickr","fa-floppy-o","fa-folder","fa-folder-o","fa-folder-open","fa-folder-open-o","fa-font","fa-font-awesome","fa-fonticons","fa-fort-awesome","fa-forumbee","fa-forward","fa-foursquare","fa-free-code-camp","fa-frown-o","fa-futbol-o","fa-gamepad","fa-gavel","fa-gbp","fa-ge","fa-gear","fa-gears","fa-genderless","fa-get-pocket","fa-gg","fa-gg-circle","fa-gift","fa-git","fa-git-square","fa-github","fa-github-alt","fa-github-square","fa-gitlab","fa-gittip","fa-glass","fa-glide","fa-glide-g","fa-globe","fa-google","fa-google-plus","fa-google-plus-circle","fa-google-plus-official","fa-google-plus-square","fa-google-wallet","fa-graduation-cap","fa-gratipay","fa-grav","fa-group","fa-h-square","fa-hacker-news","fa-hand-grab-o","fa-hand-lizard-o","fa-hand-o-down","fa-hand-o-left","fa-hand-o-right","fa-hand-o-up","fa-hand-paper-o","fa-hand-peace-o","fa-hand-pointer-o","fa-hand-rock-o","fa-hand-scissors-o","fa-hand-spock-o","fa-hand-stop-o","fa-handshake-o","fa-hard-of-hearing","fa-hashtag","fa-hdd-o","fa-header","fa-headphones","fa-heart","fa-heart-o","fa-heartbeat","fa-history","fa-home","fa-hospital-o","fa-hotel","fa-hourglass","fa-hourglass-1","fa-hourglass-2","fa-hourglass-3","fa-hourglass-end","fa-hourglass-half","fa-hourglass-o","fa-hourglass-start","fa-houzz","fa-html5","fa-i-cursor","fa-id-badge","fa-id-card","fa-id-card-o","fa-ils","fa-image","fa-imdb","fa-inbox","fa-indent","fa-industry","fa-info","fa-info-circle","fa-inr","fa-instagram","fa-institution","fa-internet-explorer","fa-intersex","fa-ioxhost","fa-italic","fa-joomla","fa-jpy","fa-jsfiddle","fa-key","fa-keyboard-o","fa-krw","fa-language","fa-laptop","fa-lastfm","fa-lastfm-square","fa-leaf","fa-leanpub","fa-legal","fa-lemon-o","fa-level-down","fa-level-up","fa-life-bouy","fa-life-buoy","fa-life-ring","fa-life-saver","fa-lightbulb-o","fa-line-chart","fa-link","fa-linkedin","fa-linkedin-square","fa-linode","fa-linux","fa-list","fa-list-alt","fa-list-ol","fa-list-ul","fa-location-arrow","fa-lock","fa-long-arrow-down","fa-long-arrow-left","fa-long-arrow-right","fa-long-arrow-up","fa-low-vision","fa-magic","fa-magnet","fa-mail-forward","fa-mail-reply","fa-mail-reply-all","fa-male","fa-map","fa-map-marker","fa-map-o","fa-map-pin","fa-map-signs","fa-mars","fa-mars-double","fa-mars-stroke","fa-mars-stroke-h","fa-mars-stroke-v","fa-maxcdn","fa-meanpath","fa-medium","fa-medkit","fa-meetup","fa-meh-o","fa-mercury","fa-microchip","fa-microphone","fa-microphone-slash","fa-minus","fa-minus-circle","fa-minus-square","fa-minus-square-o","fa-mixcloud","fa-mobile","fa-mobile-phone","fa-modx","fa-money","fa-moon-o","fa-mortar-board","fa-motorcycle","fa-mouse-pointer","fa-music","fa-navicon","fa-neuter","fa-newspaper-o","fa-object-group","fa-object-ungroup","fa-odnoklassniki","fa-odnoklassniki-square","fa-opencart","fa-openid","fa-opera","fa-optin-monster","fa-outdent","fa-pagelines","fa-paint-brush","fa-paper-plane","fa-paper-plane-o","fa-paperclip","fa-paragraph","fa-paste","fa-pause","fa-pause-circle","fa-pause-circle-o","fa-paw","fa-paypal","fa-pencil","fa-pencil-square","fa-pencil-square-o","fa-percent","fa-phone","fa-phone-square","fa-photo","fa-picture-o","fa-pie-chart","fa-pied-piper","fa-pied-piper-alt","fa-pied-piper-pp","fa-pinterest","fa-pinterest-p","fa-pinterest-square","fa-plane","fa-play","fa-play-circle","fa-play-circle-o","fa-plug","fa-plus","fa-plus-circle","fa-plus-square","fa-plus-square-o","fa-podcast","fa-power-off","fa-print","fa-product-hunt","fa-puzzle-piece","fa-qq","fa-qrcode","fa-question","fa-question-circle","fa-question-circle-o","fa-quora","fa-quote-left","fa-quote-right","fa-ra","fa-random","fa-ravelry","fa-rebel","fa-recycle","fa-reddit","fa-reddit-alien","fa-reddit-square","fa-refresh","fa-registered","fa-remove","fa-renren","fa-reorder","fa-repeat","fa-reply","fa-reply-all","fa-resistance","fa-retweet","fa-rmb","fa-road","fa-rocket","fa-rotate-left","fa-rotate-right","fa-rouble","fa-rss","fa-rss-square","fa-rub","fa-ruble","fa-rupee","fa-s15","fa-safari","fa-save","fa-scissors","fa-scribd","fa-search","fa-search-minus","fa-search-plus","fa-sellsy","fa-send","fa-send-o","fa-server","fa-share","fa-share-alt","fa-share-alt-square","fa-share-square","fa-share-square-o","fa-shekel","fa-sheqel","fa-shield","fa-ship","fa-shirtsinbulk","fa-shopping-bag","fa-shopping-basket","fa-shopping-cart","fa-shower","fa-sign-in","fa-sign-language","fa-sign-out","fa-signal","fa-signing","fa-simplybuilt","fa-sitemap","fa-skyatlas","fa-skype","fa-slack","fa-sliders","fa-slideshare","fa-smile-o","fa-snapchat","fa-snapchat-ghost","fa-snapchat-square","fa-snowflake-o","fa-soccer-ball-o","fa-sort","fa-sort-alpha-asc","fa-sort-alpha-desc","fa-sort-amount-asc","fa-sort-amount-desc","fa-sort-asc","fa-sort-desc","fa-sort-down","fa-sort-numeric-asc","fa-sort-numeric-desc","fa-sort-up","fa-soundcloud","fa-space-shuttle","fa-spinner","fa-spoon","fa-spotify","fa-square","fa-square-o","fa-stack-exchange","fa-stack-overflow","fa-star","fa-star-half","fa-star-half-empty","fa-star-half-full","fa-star-half-o","fa-star-o","fa-steam","fa-steam-square","fa-step-backward","fa-step-forward","fa-stethoscope","fa-sticky-note","fa-sticky-note-o","fa-stop","fa-stop-circle","fa-stop-circle-o","fa-street-view","fa-strikethrough","fa-stumbleupon","fa-stumbleupon-circle","fa-subscript","fa-subway","fa-suitcase","fa-sun-o","fa-superpowers","fa-superscript","fa-support","fa-table","fa-tablet","fa-tachometer","fa-tag","fa-tags","fa-tasks","fa-taxi","fa-telegram","fa-television","fa-tencent-weibo","fa-terminal","fa-text-height","fa-text-width","fa-th","fa-th-large","fa-th-list","fa-themeisle","fa-thermometer","fa-thermometer-0","fa-thermometer-1","fa-thermometer-2","fa-thermometer-3","fa-thermometer-4","fa-thermometer-empty","fa-thermometer-full","fa-thermometer-half","fa-thermometer-quarter","fa-thermometer-three-quarters","fa-thumb-tack","fa-thumbs-down","fa-thumbs-o-down","fa-thumbs-o-up","fa-thumbs-up","fa-ticket","fa-times","fa-times-circle","fa-times-circle-o","fa-times-rectangle","fa-times-rectangle-o","fa-tint","fa-toggle-down","fa-toggle-left","fa-toggle-off","fa-toggle-on","fa-toggle-right","fa-toggle-up","fa-trademark","fa-train","fa-transgender","fa-transgender-alt","fa-trash","fa-trash-o","fa-tree","fa-trello","fa-tripadvisor","fa-trophy","fa-truck","fa-try","fa-tty","fa-tumblr","fa-tumblr-square","fa-turkish-lira","fa-tv","fa-twitch","fa-twitter","fa-twitter-square","fa-umbrella","fa-underline","fa-undo","fa-universal-access","fa-university","fa-unlink","fa-unlock","fa-unlock-alt","fa-unsorted","fa-upload","fa-usb","fa-usd","fa-user","fa-user-circle","fa-user-circle-o","fa-user-md","fa-user-o","fa-user-plus","fa-user-secret","fa-user-times","fa-users","fa-vcard","fa-vcard-o","fa-venus","fa-venus-double","fa-venus-mars","fa-viacoin","fa-viadeo","fa-viadeo-square","fa-video-camera","fa-vimeo","fa-vimeo-square","fa-vine","fa-vk","fa-volume-control-phone","fa-volume-down","fa-volume-off","fa-volume-up","fa-warning","fa-wechat","fa-weibo","fa-weixin","fa-whatsapp","fa-wheelchair","fa-wheelchair-alt","fa-wifi","fa-wikipedia-w","fa-window-close","fa-window-close-o","fa-window-maximize","fa-window-minimize","fa-window-restore","fa-windows","fa-won","fa-wordpress","fa-wpbeginner","fa-wpexplorer","fa-wpforms","fa-wrench","fa-xing","fa-xing-square","fa-y-combinator","fa-y-combinator-square","fa-yahoo","fa-yc","fa-yc-square","fa-yelp","fa-yen","fa-yoast","fa-youtube","fa-youtube-play","fa-youtube-square"],
			};
		} else if (version_icon == '5.15.1') {
			/* var tooltip = document.querySelector('span[data-toggle="tooltip"]');
			if (window.getComputedStyle(tooltip,':after').fontFamily == 'FontAwesome') {
				window.getComputedStyle(tooltip,':after').fontFamily = 'Font Awesome 5 Free';
			} */
			$('span[data-toggle="tooltip"]').addClass('awesome5');
			//Иконки Font Awesome FREE v5.15.1
			var title = 'Иконки Font Awesome v5.15.1';
			type_icon = ['fas','fab','fad','fal','far']; // PRO
			type_icon = ['fas','fab','far']; // FREE
			var base_icons = {
				'fas':["fa-ad","fa-address-book","fa-address-card","fa-adjust","fa-air-freshener","fa-align-center","fa-align-justify","fa-align-left","fa-align-right","fa-allergies","fa-ambulance","fa-american-sign-language-interpreting","fa-anchor","fa-angle-double-down","fa-angle-double-left","fa-angle-double-right","fa-angle-double-up","fa-angle-down","fa-angle-left","fa-angle-right","fa-angle-up","fa-angry","fa-ankh","fa-apple-alt","fa-archive","fa-archway","fa-arrow-alt-circle-down","fa-arrow-alt-circle-left","fa-arrow-alt-circle-right","fa-arrow-alt-circle-up","fa-arrow-circle-down","fa-arrow-circle-left","fa-arrow-circle-right","fa-arrow-circle-up","fa-arrow-down","fa-arrow-left","fa-arrow-right","fa-arrow-up","fa-arrows-alt","fa-arrows-alt-h","fa-arrows-alt-v","fa-assistive-listening-systems","fa-asterisk","fa-at","fa-atlas","fa-atom","fa-audio-description","fa-award","fa-baby","fa-baby-carriage","fa-backspace","fa-backward","fa-bacon","fa-bacteria","fa-bacterium","fa-bahai","fa-balance-scale","fa-balance-scale-left","fa-balance-scale-right","fa-ban","fa-band-aid","fa-barcode","fa-bars","fa-baseball-ball","fa-basketball-ball","fa-bath","fa-battery-empty","fa-battery-full","fa-battery-half","fa-battery-quarter","fa-battery-three-quarters","fa-bed","fa-beer","fa-bell","fa-bell-slash","fa-bezier-curve","fa-bible","fa-bicycle","fa-biking","fa-binoculars","fa-biohazard","fa-birthday-cake","fa-blender","fa-blender-phone","fa-blind","fa-blog","fa-bold","fa-bolt","fa-bomb","fa-bone","fa-bong","fa-book","fa-book-dead","fa-book-medical","fa-book-open","fa-book-reader","fa-bookmark","fa-border-all","fa-border-none","fa-border-style","fa-bowling-ball","fa-box","fa-box-open","fa-box-tissue","fa-boxes","fa-braille","fa-brain","fa-bread-slice","fa-briefcase","fa-briefcase-medical","fa-broadcast-tower","fa-broom","fa-brush","fa-bug","fa-building","fa-bullhorn","fa-bullseye","fa-burn","fa-bus","fa-bus-alt","fa-business-time","fa-calculator","fa-calendar","fa-calendar-alt","fa-calendar-check","fa-calendar-day","fa-calendar-minus","fa-calendar-plus","fa-calendar-times","fa-calendar-week","fa-camera","fa-camera-retro","fa-campground","fa-candy-cane","fa-cannabis","fa-capsules","fa-car","fa-car-alt","fa-car-battery","fa-car-crash","fa-car-side","fa-caravan","fa-caret-down","fa-caret-left","fa-caret-right","fa-caret-square-down","fa-caret-square-left","fa-caret-square-right","fa-caret-square-up","fa-caret-up","fa-carrot","fa-cart-arrow-down","fa-cart-plus","fa-cash-register","fa-cat","fa-certificate","fa-chair","fa-chalkboard","fa-chalkboard-teacher","fa-charging-station","fa-chart-area","fa-chart-bar","fa-chart-line","fa-chart-pie","fa-check","fa-check-circle","fa-check-double","fa-check-square","fa-cheese","fa-chess","fa-chess-bishop","fa-chess-board","fa-chess-king","fa-chess-knight","fa-chess-pawn","fa-chess-queen","fa-chess-rook","fa-chevron-circle-down","fa-chevron-circle-left","fa-chevron-circle-right","fa-chevron-circle-up","fa-chevron-down","fa-chevron-left","fa-chevron-right","fa-chevron-up","fa-child","fa-church","fa-circle","fa-circle-notch","fa-city","fa-clinic-medical","fa-clipboard","fa-clipboard-check","fa-clipboard-list","fa-clock","fa-clone","fa-closed-captioning","fa-cloud","fa-cloud-download-alt","fa-cloud-meatball","fa-cloud-moon","fa-cloud-moon-rain","fa-cloud-rain","fa-cloud-showers-heavy","fa-cloud-sun","fa-cloud-sun-rain","fa-cloud-upload-alt","fa-cocktail","fa-code","fa-code-branch","fa-coffee","fa-cog","fa-cogs","fa-coins","fa-columns","fa-comment","fa-comment-alt","fa-comment-dollar","fa-comment-dots","fa-comment-medical","fa-comment-slash","fa-comments","fa-comments-dollar","fa-compact-disc","fa-compass","fa-compress","fa-compress-alt","fa-compress-arrows-alt","fa-concierge-bell","fa-cookie","fa-cookie-bite","fa-copy","fa-copyright","fa-couch","fa-credit-card","fa-crop","fa-crop-alt","fa-cross","fa-crosshairs","fa-crow","fa-crown","fa-crutch","fa-cube","fa-cubes","fa-cut","fa-database","fa-deaf","fa-democrat","fa-desktop","fa-dharmachakra","fa-diagnoses","fa-dice","fa-dice-d20","fa-dice-d6","fa-dice-five","fa-dice-four","fa-dice-one","fa-dice-six","fa-dice-three","fa-dice-two","fa-digital-tachograph","fa-directions","fa-disease","fa-divide","fa-dizzy","fa-dna","fa-dog","fa-dollar-sign","fa-dolly","fa-dolly-flatbed","fa-donate","fa-door-closed","fa-door-open","fa-dot-circle","fa-dove","fa-download","fa-drafting-compass","fa-dragon","fa-draw-polygon","fa-drum","fa-drum-steelpan","fa-drumstick-bite","fa-dumbbell","fa-dumpster","fa-dumpster-fire","fa-dungeon","fa-edit","fa-egg","fa-eject","fa-ellipsis-h","fa-ellipsis-v","fa-envelope","fa-envelope-open","fa-envelope-open-text","fa-envelope-square","fa-equals","fa-eraser","fa-ethernet","fa-euro-sign","fa-exchange-alt","fa-exclamation","fa-exclamation-circle","fa-exclamation-triangle","fa-expand","fa-expand-alt","fa-expand-arrows-alt","fa-external-link-alt","fa-external-link-square-alt","fa-eye","fa-eye-dropper","fa-eye-slash","fa-fan","fa-fast-backward","fa-fast-forward","fa-faucet","fa-fax","fa-feather","fa-feather-alt","fa-female","fa-fighter-jet","fa-file","fa-file-alt","fa-file-archive","fa-file-audio","fa-file-code","fa-file-contract","fa-file-csv","fa-file-download","fa-file-excel","fa-file-export","fa-file-image","fa-file-import","fa-file-invoice","fa-file-invoice-dollar","fa-file-medical","fa-file-medical-alt","fa-file-pdf","fa-file-powerpoint","fa-file-prescription","fa-file-signature","fa-file-upload","fa-file-video","fa-file-word","fa-fill","fa-fill-drip","fa-film","fa-filter","fa-fingerprint","fa-fire","fa-fire-alt","fa-fire-extinguisher","fa-first-aid","fa-fish","fa-fist-raised","fa-flag","fa-flag-checkered","fa-flag-usa","fa-flask","fa-flushed","fa-folder","fa-folder-minus","fa-folder-open","fa-folder-plus","fa-font","fa-football-ball","fa-forward","fa-frog","fa-frown","fa-frown-open","fa-funnel-dollar","fa-futbol","fa-gamepad","fa-gas-pump","fa-gavel","fa-gem","fa-genderless","fa-ghost","fa-gift","fa-gifts","fa-glass-cheers","fa-glass-martini","fa-glass-martini-alt","fa-glass-whiskey","fa-glasses","fa-globe","fa-globe-africa","fa-globe-americas","fa-globe-asia","fa-globe-europe","fa-golf-ball","fa-gopuram","fa-graduation-cap","fa-greater-than","fa-greater-than-equal","fa-grimace","fa-grin","fa-grin-alt","fa-grin-beam","fa-grin-beam-sweat","fa-grin-hearts","fa-grin-squint","fa-grin-squint-tears","fa-grin-stars","fa-grin-tears","fa-grin-tongue","fa-grin-tongue-squint","fa-grin-tongue-wink","fa-grin-wink","fa-grip-horizontal","fa-grip-lines","fa-grip-lines-vertical","fa-grip-vertical","fa-guitar","fa-h-square","fa-hamburger","fa-hammer","fa-hamsa","fa-hand-holding","fa-hand-holding-heart","fa-hand-holding-medical","fa-hand-holding-usd","fa-hand-holding-water","fa-hand-lizard","fa-hand-middle-finger","fa-hand-paper","fa-hand-peace","fa-hand-point-down","fa-hand-point-left","fa-hand-point-right","fa-hand-point-up","fa-hand-pointer","fa-hand-rock","fa-hand-scissors","fa-hand-sparkles","fa-hand-spock","fa-hands","fa-hands-helping","fa-hands-wash","fa-handshake","fa-handshake-alt-slash","fa-handshake-slash","fa-hanukiah","fa-hard-hat","fa-hashtag","fa-hat-cowboy","fa-hat-cowboy-side","fa-hat-wizard","fa-hdd","fa-head-side-cough","fa-head-side-cough-slash","fa-head-side-mask","fa-head-side-virus","fa-heading","fa-headphones","fa-headphones-alt","fa-headset","fa-heart","fa-heart-broken","fa-heartbeat","fa-helicopter","fa-highlighter","fa-hiking","fa-hippo","fa-history","fa-hockey-puck","fa-holly-berry","fa-home","fa-horse","fa-horse-head","fa-hospital","fa-hospital-alt","fa-hospital-symbol","fa-hospital-user","fa-hot-tub","fa-hotdog","fa-hotel","fa-hourglass","fa-hourglass-end","fa-hourglass-half","fa-hourglass-start","fa-house-damage","fa-house-user","fa-hryvnia","fa-i-cursor","fa-ice-cream","fa-icicles","fa-icons","fa-id-badge","fa-id-card","fa-id-card-alt","fa-igloo","fa-image","fa-images","fa-inbox","fa-indent","fa-industry","fa-infinity","fa-info","fa-info-circle","fa-italic","fa-jedi","fa-joint","fa-journal-whills","fa-kaaba","fa-key","fa-keyboard","fa-khanda","fa-kiss","fa-kiss-beam","fa-kiss-wink-heart","fa-kiwi-bird","fa-landmark","fa-language","fa-laptop","fa-laptop-code","fa-laptop-house","fa-laptop-medical","fa-laugh","fa-laugh-beam","fa-laugh-squint","fa-laugh-wink","fa-layer-group","fa-leaf","fa-lemon","fa-less-than","fa-less-than-equal","fa-level-down-alt","fa-level-up-alt","fa-life-ring","fa-lightbulb","fa-link","fa-lira-sign","fa-list","fa-list-alt","fa-list-ol","fa-list-ul","fa-location-arrow","fa-lock","fa-lock-open","fa-long-arrow-alt-down","fa-long-arrow-alt-left","fa-long-arrow-alt-right","fa-long-arrow-alt-up","fa-low-vision","fa-luggage-cart","fa-lungs","fa-lungs-virus","fa-magic","fa-magnet","fa-mail-bulk","fa-male","fa-map","fa-map-marked","fa-map-marked-alt","fa-map-marker","fa-map-marker-alt","fa-map-pin","fa-map-signs","fa-marker","fa-mars","fa-mars-double","fa-mars-stroke","fa-mars-stroke-h","fa-mars-stroke-v","fa-mask","fa-medal","fa-medkit","fa-meh","fa-meh-blank","fa-meh-rolling-eyes","fa-memory","fa-menorah","fa-mercury","fa-meteor","fa-microchip","fa-microphone","fa-microphone-alt","fa-microphone-alt-slash","fa-microphone-slash","fa-microscope","fa-minus","fa-minus-circle","fa-minus-square","fa-mitten","fa-mobile","fa-mobile-alt","fa-money-bill","fa-money-bill-alt","fa-money-bill-wave","fa-money-bill-wave-alt","fa-money-check","fa-money-check-alt","fa-monument","fa-moon","fa-mortar-pestle","fa-mosque","fa-motorcycle","fa-mountain","fa-mouse","fa-mouse-pointer","fa-mug-hot","fa-music","fa-network-wired","fa-neuter","fa-newspaper","fa-not-equal","fa-notes-medical","fa-object-group","fa-object-ungroup","fa-oil-can","fa-om","fa-otter","fa-outdent","fa-pager","fa-paint-brush","fa-paint-roller","fa-palette","fa-pallet","fa-paper-plane","fa-paperclip","fa-parachute-box","fa-paragraph","fa-parking","fa-passport","fa-pastafarianism","fa-paste","fa-pause","fa-pause-circle","fa-paw","fa-peace","fa-pen","fa-pen-alt","fa-pen-fancy","fa-pen-nib","fa-pen-square","fa-pencil-alt","fa-pencil-ruler","fa-people-arrows","fa-people-carry","fa-pepper-hot","fa-percent","fa-percentage","fa-person-booth","fa-phone","fa-phone-alt","fa-phone-slash","fa-phone-square","fa-phone-square-alt","fa-phone-volume","fa-photo-video","fa-piggy-bank","fa-pills","fa-pizza-slice","fa-place-of-worship","fa-plane","fa-plane-arrival","fa-plane-departure","fa-plane-slash","fa-play","fa-play-circle","fa-plug","fa-plus","fa-plus-circle","fa-plus-square","fa-podcast","fa-poll","fa-poll-h","fa-poo","fa-poo-storm","fa-poop","fa-portrait","fa-pound-sign","fa-power-off","fa-pray","fa-praying-hands","fa-prescription","fa-prescription-bottle","fa-prescription-bottle-alt","fa-print","fa-procedures","fa-project-diagram","fa-pump-medical","fa-pump-soap","fa-puzzle-piece","fa-qrcode","fa-question","fa-question-circle","fa-quidditch","fa-quote-left","fa-quote-right","fa-quran","fa-radiation","fa-radiation-alt","fa-rainbow","fa-random","fa-receipt","fa-record-vinyl","fa-recycle","fa-redo","fa-redo-alt","fa-registered","fa-remove-format","fa-reply","fa-reply-all","fa-republican","fa-restroom","fa-retweet","fa-ribbon","fa-ring","fa-road","fa-robot","fa-rocket","fa-route","fa-rss","fa-rss-square","fa-ruble-sign","fa-ruler","fa-ruler-combined","fa-ruler-horizontal","fa-ruler-vertical","fa-running","fa-rupee-sign","fa-sad-cry","fa-sad-tear","fa-satellite","fa-satellite-dish","fa-save","fa-school","fa-screwdriver","fa-scroll","fa-sd-card","fa-search","fa-search-dollar","fa-search-location","fa-search-minus","fa-search-plus","fa-seedling","fa-server","fa-shapes","fa-share","fa-share-alt","fa-share-alt-square","fa-share-square","fa-shekel-sign","fa-shield-alt","fa-shield-virus","fa-ship","fa-shipping-fast","fa-shoe-prints","fa-shopping-bag","fa-shopping-basket","fa-shopping-cart","fa-shower","fa-shuttle-van","fa-sign","fa-sign-in-alt","fa-sign-language","fa-sign-out-alt","fa-signal","fa-signature","fa-sim-card","fa-sink","fa-sitemap","fa-skating","fa-skiing","fa-skiing-nordic","fa-skull","fa-skull-crossbones","fa-slash","fa-sleigh","fa-sliders-h","fa-smile","fa-smile-beam","fa-smile-wink","fa-smog","fa-smoking","fa-smoking-ban","fa-sms","fa-snowboarding","fa-snowflake","fa-snowman","fa-snowplow","fa-soap","fa-socks","fa-solar-panel","fa-sort","fa-sort-alpha-down","fa-sort-alpha-down-alt","fa-sort-alpha-up","fa-sort-alpha-up-alt","fa-sort-amount-down","fa-sort-amount-down-alt","fa-sort-amount-up","fa-sort-amount-up-alt","fa-sort-down","fa-sort-numeric-down","fa-sort-numeric-down-alt","fa-sort-numeric-up","fa-sort-numeric-up-alt","fa-sort-up","fa-spa","fa-space-shuttle","fa-spell-check","fa-spider","fa-spinner","fa-splotch","fa-spray-can","fa-square","fa-square-full","fa-square-root-alt","fa-stamp","fa-star","fa-star-and-crescent","fa-star-half","fa-star-half-alt","fa-star-of-david","fa-star-of-life","fa-step-backward","fa-step-forward","fa-stethoscope","fa-sticky-note","fa-stop","fa-stop-circle","fa-stopwatch","fa-stopwatch-20","fa-store","fa-store-alt","fa-store-alt-slash","fa-store-slash","fa-stream","fa-street-view","fa-strikethrough","fa-stroopwafel","fa-subscript","fa-subway","fa-suitcase","fa-suitcase-rolling","fa-sun","fa-superscript","fa-surprise","fa-swatchbook","fa-swimmer","fa-swimming-pool","fa-synagogue","fa-sync","fa-sync-alt","fa-syringe","fa-table","fa-table-tennis","fa-tablet","fa-tablet-alt","fa-tablets","fa-tachometer-alt","fa-tag","fa-tags","fa-tape","fa-tasks","fa-taxi","fa-teeth","fa-teeth-open","fa-temperature-high","fa-temperature-low","fa-tenge","fa-terminal","fa-text-height","fa-text-width","fa-th","fa-th-large","fa-th-list","fa-theater-masks","fa-thermometer","fa-thermometer-empty","fa-thermometer-full","fa-thermometer-half","fa-thermometer-quarter","fa-thermometer-three-quarters","fa-thumbs-down","fa-thumbs-up","fa-thumbtack","fa-ticket-alt","fa-times","fa-times-circle","fa-tint","fa-tint-slash","fa-tired","fa-toggle-off","fa-toggle-on","fa-toilet","fa-toilet-paper","fa-toilet-paper-slash","fa-toolbox","fa-tools","fa-tooth","fa-torah","fa-torii-gate","fa-tractor","fa-trademark","fa-traffic-light","fa-trailer","fa-train","fa-tram","fa-transgender","fa-transgender-alt","fa-trash","fa-trash-alt","fa-trash-restore","fa-trash-restore-alt","fa-tree","fa-trophy","fa-truck","fa-truck-loading","fa-truck-monster","fa-truck-moving","fa-truck-pickup","fa-tshirt","fa-tty","fa-tv","fa-umbrella","fa-umbrella-beach","fa-underline","fa-undo","fa-undo-alt","fa-universal-access","fa-university","fa-unlink","fa-unlock","fa-unlock-alt","fa-upload","fa-user","fa-user-alt","fa-user-alt-slash","fa-user-astronaut","fa-user-check","fa-user-circle","fa-user-clock","fa-user-cog","fa-user-edit","fa-user-friends","fa-user-graduate","fa-user-injured","fa-user-lock","fa-user-md","fa-user-minus","fa-user-ninja","fa-user-nurse","fa-user-plus","fa-user-secret","fa-user-shield","fa-user-slash","fa-user-tag","fa-user-tie","fa-user-times","fa-users","fa-users-cog","fa-users-slash","fa-utensil-spoon","fa-utensils","fa-vector-square","fa-venus","fa-venus-double","fa-venus-mars","fa-vest","fa-vest-patches","fa-vial","fa-vials","fa-video","fa-video-slash","fa-vihara","fa-virus","fa-virus-slash","fa-viruses","fa-voicemail","fa-volleyball-ball","fa-volume-down","fa-volume-mute","fa-volume-off","fa-volume-up","fa-vote-yea","fa-vr-cardboard","fa-walking","fa-wallet","fa-warehouse","fa-water","fa-wave-square","fa-weight","fa-weight-hanging","fa-wheelchair","fa-wifi","fa-wind","fa-window-close","fa-window-maximize","fa-window-minimize","fa-window-restore","fa-wine-bottle","fa-wine-glass","fa-wine-glass-alt","fa-won-sign","fa-wrench","fa-x-ray","fa-yen-sign","fa-yin-yang"],
				'fab':["fa-500px","fa-accessible-icon","fa-accusoft","fa-acquisitions-incorporated","fa-adn","fa-adversal","fa-affiliatetheme","fa-airbnb","fa-algolia","fa-alipay","fa-amazon","fa-amazon-pay","fa-amilia","fa-android","fa-angellist","fa-angrycreative","fa-angular","fa-app-store","fa-app-store-ios","fa-apper","fa-apple","fa-apple-pay","fa-artstation","fa-asymmetrik","fa-atlassian","fa-audible","fa-autoprefixer","fa-avianex","fa-aviato","fa-aws","fa-bandcamp","fa-battle-net","fa-behance","fa-behance-square","fa-bimobject","fa-bitbucket","fa-bitcoin","fa-bity","fa-black-tie","fa-blackberry","fa-blogger","fa-blogger-b","fa-bluetooth","fa-bluetooth-b","fa-bootstrap","fa-btc","fa-buffer","fa-buromobelexperte","fa-buy-n-large","fa-buysellads","fa-canadian-maple-leaf","fa-cc-amazon-pay","fa-cc-amex","fa-cc-apple-pay","fa-cc-diners-club","fa-cc-discover","fa-cc-jcb","fa-cc-mastercard","fa-cc-paypal","fa-cc-stripe","fa-cc-visa","fa-centercode","fa-centos","fa-chrome","fa-chromecast","fa-cloudflare","fa-cloudscale","fa-cloudsmith","fa-cloudversify","fa-codepen","fa-codiepie","fa-confluence","fa-connectdevelop","fa-contao","fa-cotton-bureau","fa-cpanel","fa-creative-commons","fa-creative-commons-by","fa-creative-commons-nc","fa-creative-commons-nc-eu","fa-creative-commons-nc-jp","fa-creative-commons-nd","fa-creative-commons-pd","fa-creative-commons-pd-alt","fa-creative-commons-remix","fa-creative-commons-sa","fa-creative-commons-sampling","fa-creative-commons-sampling-plus","fa-creative-commons-share","fa-creative-commons-zero","fa-critical-role","fa-css3","fa-css3-alt","fa-cuttlefish","fa-d-and-d","fa-d-and-d-beyond","fa-dailymotion","fa-dashcube","fa-deezer","fa-delicious","fa-deploydog","fa-deskpro","fa-dev","fa-deviantart","fa-dhl","fa-diaspora","fa-digg","fa-digital-ocean","fa-discord","fa-discourse","fa-dochub","fa-docker","fa-draft2digital","fa-dribbble","fa-dribbble-square","fa-dropbox","fa-drupal","fa-dyalog","fa-earlybirds","fa-ebay","fa-edge","fa-edge-legacy","fa-elementor","fa-ello","fa-ember","fa-empire","fa-envira","fa-erlang","fa-ethereum","fa-etsy","fa-evernote","fa-expeditedssl","fa-facebook","fa-facebook-f","fa-facebook-messenger","fa-facebook-square","fa-fantasy-flight-games","fa-fedex","fa-fedora","fa-figma","fa-firefox","fa-firefox-browser","fa-first-order","fa-first-order-alt","fa-firstdraft","fa-flickr","fa-flipboard","fa-fly","fa-font-awesome","fa-font-awesome-alt","fa-font-awesome-flag","fa-fonticons","fa-fonticons-fi","fa-fort-awesome","fa-fort-awesome-alt","fa-forumbee","fa-foursquare","fa-free-code-camp","fa-freebsd","fa-fulcrum","fa-galactic-republic","fa-galactic-senate","fa-get-pocket","fa-gg","fa-gg-circle","fa-git","fa-git-alt","fa-git-square","fa-github","fa-github-alt","fa-github-square","fa-gitkraken","fa-gitlab","fa-gitter","fa-glide","fa-glide-g","fa-gofore","fa-goodreads","fa-goodreads-g","fa-google","fa-google-drive","fa-google-pay","fa-google-play","fa-google-plus","fa-google-plus-g","fa-google-plus-square","fa-google-wallet","fa-gratipay","fa-grav","fa-gripfire","fa-grunt","fa-guilded","fa-gulp","fa-hacker-news","fa-hacker-news-square","fa-hackerrank","fa-hips","fa-hire-a-helper","fa-hive","fa-hooli","fa-hornbill","fa-hotjar","fa-houzz","fa-html5","fa-hubspot","fa-ideal","fa-imdb","fa-innosoft","fa-instagram","fa-instagram-square","fa-instalod","fa-intercom","fa-internet-explorer","fa-invision","fa-ioxhost","fa-itch-io","fa-itunes","fa-itunes-note","fa-java","fa-jedi-order","fa-jenkins","fa-jira","fa-joget","fa-joomla","fa-js","fa-js-square","fa-jsfiddle","fa-kaggle","fa-keybase","fa-keycdn","fa-kickstarter","fa-kickstarter-k","fa-korvue","fa-laravel","fa-lastfm","fa-lastfm-square","fa-leanpub","fa-less","fa-line","fa-linkedin","fa-linkedin-in","fa-linode","fa-linux","fa-lyft","fa-magento","fa-mailchimp","fa-mandalorian","fa-markdown","fa-mastodon","fa-maxcdn","fa-mdb","fa-medapps","fa-medium","fa-medium-m","fa-medrt","fa-meetup","fa-megaport","fa-mendeley","fa-microblog","fa-microsoft","fa-mix","fa-mixcloud","fa-mixer","fa-mizuni","fa-modx","fa-monero","fa-napster","fa-neos","fa-nimblr","fa-node","fa-node-js","fa-npm","fa-ns8","fa-nutritionix","fa-octopus-deploy","fa-odnoklassniki","fa-odnoklassniki-square","fa-old-republic","fa-opencart","fa-openid","fa-opera","fa-optin-monster","fa-orcid","fa-osi","fa-page4","fa-pagelines","fa-palfed","fa-patreon","fa-paypal","fa-penny-arcade","fa-perbyte","fa-periscope","fa-phabricator","fa-phoenix-framework","fa-phoenix-squadron","fa-php","fa-pied-piper","fa-pied-piper-alt","fa-pied-piper-hat","fa-pied-piper-pp","fa-pied-piper-square","fa-pinterest","fa-pinterest-p","fa-pinterest-square","fa-playstation","fa-product-hunt","fa-pushed","fa-python","fa-qq","fa-quinscape","fa-quora","fa-r-project","fa-raspberry-pi","fa-ravelry","fa-react","fa-reacteurope","fa-readme","fa-rebel","fa-red-river","fa-reddit","fa-reddit-alien","fa-reddit-square","fa-redhat","fa-renren","fa-replyd","fa-researchgate","fa-resolving","fa-rev","fa-rocketchat","fa-rockrms","fa-rust","fa-safari","fa-salesforce","fa-sass","fa-schlix","fa-scribd","fa-searchengin","fa-sellcast","fa-sellsy","fa-servicestack","fa-shirtsinbulk","fa-shopify","fa-shopware","fa-simplybuilt","fa-sistrix","fa-sith","fa-sketch","fa-skyatlas","fa-skype","fa-slack","fa-slack-hash","fa-slideshare","fa-snapchat","fa-snapchat-ghost","fa-snapchat-square","fa-soundcloud","fa-sourcetree","fa-speakap","fa-speaker-deck","fa-spotify","fa-squarespace","fa-stack-exchange","fa-stack-overflow","fa-stackpath","fa-staylinked","fa-steam","fa-steam-square","fa-steam-symbol","fa-sticker-mule","fa-strava","fa-stripe","fa-stripe-s","fa-studiovinari","fa-stumbleupon","fa-stumbleupon-circle","fa-superpowers","fa-supple","fa-suse","fa-swift","fa-symfony","fa-teamspeak","fa-telegram","fa-telegram-plane","fa-tencent-weibo","fa-the-red-yeti","fa-themeco","fa-themeisle","fa-think-peaks","fa-tiktok","fa-trade-federation","fa-trello","fa-tripadvisor","fa-tumblr","fa-tumblr-square","fa-twitch","fa-twitter","fa-twitter-square","fa-typo3","fa-uber","fa-ubuntu","fa-uikit","fa-umbraco","fa-uncharted","fa-uniregistry","fa-unity","fa-unsplash","fa-untappd","fa-ups","fa-usb","fa-usps","fa-ussunnah","fa-vaadin","fa-viacoin","fa-viadeo","fa-viadeo-square","fa-viber","fa-vimeo","fa-vimeo-square","fa-vimeo-v","fa-vine","fa-vk","fa-vnv","fa-vuejs","fa-watchman-monitoring","fa-waze","fa-weebly","fa-weibo","fa-weixin","fa-whatsapp","fa-whatsapp-square","fa-whmcs","fa-wikipedia-w","fa-windows","fa-wix","fa-wizards-of-the-coast","fa-wodu","fa-wolf-pack-battalion","fa-wordpress","fa-wordpress-simple","fa-wpbeginner","fa-wpexplorer","fa-wpforms","fa-wpressr","fa-xbox","fa-xing","fa-xing-square","fa-y-combinator","fa-yahoo","fa-yammer","fa-yandex","fa-yandex-international","fa-yarn","fa-yelp","fa-yoast","fa-youtube","fa-youtube-square","fa-zhihu"],
				//'fad':[],
				//'fal':[],
				'far':["fa-address-book","fa-address-card","fa-angry","fa-arrow-alt-circle-down","fa-arrow-alt-circle-left","fa-arrow-alt-circle-right","fa-arrow-alt-circle-up","fa-bell","fa-bell-slash","fa-bookmark","fa-building","fa-calendar","fa-calendar-alt","fa-calendar-check","fa-calendar-minus","fa-calendar-plus","fa-calendar-times","fa-caret-square-down","fa-caret-square-left","fa-caret-square-right","fa-caret-square-up","fa-chart-bar","fa-check-circle","fa-check-square","fa-circle","fa-clipboard","fa-clock","fa-clone","fa-closed-captioning","fa-comment","fa-comment-alt","fa-comment-dots","fa-comments","fa-compass","fa-copy","fa-copyright","fa-credit-card","fa-dizzy","fa-dot-circle","fa-edit","fa-envelope","fa-envelope-open","fa-eye","fa-eye-slash","fa-file","fa-file-alt","fa-file-archive","fa-file-audio","fa-file-code","fa-file-excel","fa-file-image","fa-file-pdf","fa-file-powerpoint","fa-file-video","fa-file-word","fa-flag","fa-flushed","fa-folder","fa-folder-open","fa-frown","fa-frown-open","fa-futbol","fa-gem","fa-grimace","fa-grin","fa-grin-alt","fa-grin-beam","fa-grin-beam-sweat","fa-grin-hearts","fa-grin-squint","fa-grin-squint-tears","fa-grin-stars","fa-grin-tears","fa-grin-tongue","fa-grin-tongue-squint","fa-grin-tongue-wink","fa-grin-wink","fa-hand-lizard","fa-hand-paper","fa-hand-peace","fa-hand-point-down","fa-hand-point-left","fa-hand-point-right","fa-hand-point-up","fa-hand-pointer","fa-hand-rock","fa-hand-scissors","fa-hand-spock","fa-handshake","fa-hdd","fa-heart","fa-hospital","fa-hourglass","fa-id-badge","fa-id-card","fa-image","fa-images","fa-keyboard","fa-kiss","fa-kiss-beam","fa-kiss-wink-heart","fa-laugh","fa-laugh-beam","fa-laugh-squint","fa-laugh-wink","fa-lemon","fa-life-ring","fa-lightbulb","fa-list-alt","fa-map","fa-meh","fa-meh-blank","fa-meh-rolling-eyes","fa-minus-square","fa-money-bill-alt","fa-moon","fa-newspaper","fa-object-group","fa-object-ungroup","fa-paper-plane","fa-pause-circle","fa-play-circle","fa-plus-square","fa-question-circle","fa-registered","fa-sad-cry","fa-sad-tear","fa-save","fa-share-square","fa-smile","fa-smile-beam","fa-smile-wink","fa-snowflake","fa-square","fa-star","fa-star-half","fa-sticky-note","fa-stop-circle","fa-sun","fa-surprise","fa-thumbs-down","fa-thumbs-up","fa-times-circle","fa-tired","fa-trash-alt","fa-user","fa-user-circle","fa-window-close","fa-window-maximize","fa-window-minimize","fa-window-restore"],
			};
		}

		s = document.querySelector('link[href="view/javascript/font-awesome/css/font-awesome.min.css"]');
		if (s) {
			s.parentNode.removeChild(s);
		}
		s = document.getElementById('bus-menu-style');
		if (s) {
			s.parentNode.removeChild(s);
		}
		var s = document.createElement('link');
		/* s.type = 'text/css'; */
		s.id = 'bus-menu-style';
		s.rel = 'stylesheet';
		s.href = '//' + window.location.host + '/catalog/view/javascript/font-awesome/' + version_icon + '/css/all.min.css';
		var ss = document.getElementsByTagName('link')[0];
		ss.parentNode.insertBefore(s, ss);

		for (var t in type_icon) {
			html += '<div class="col-sm-12" style="width:100%;float:left">Тип иконок: ' + type_name[type_icon[t]] + ' ' + (base_icons[type_icon[t]].length) + ' шт.' + '</div>';
			for (var b in base_icons[type_icon[t]]) {
				html += '<i class="' + type_icon[t] + ' ' + base_icons[type_icon[t]][b] + '"></i>';
			}
		}

		$('.icons select').val(version_icon);
		$('.icons .modal-title').text(title);
		$('.icons .modal-body').html(html);

		/* var modal_title = document.querySelectorAll('.icons .modal-title');
		var icons = document.querySelectorAll('.icons .modal-body i');

		for (var i = 0; i < icons.length; i++) {
			if (window.getComputedStyle(icons[i],':before').content == 'none') {
				icons[i].style['display'] = 'none';
			}
		} */

		//$('.icons').show();
		$('.icons').modal('show');
		//document.querySelector('.icons').style.display = 'block';
		if (id) {
			icon = id;
		}

		$('.icons .modal-body i').on('click', function(e) {
			//e.target.style.display = 'none';
			if (icon) {
				$(icon).html('<i class="' + e.target.className + '"></i>');
				icon.parentNode.querySelector('input').value = '<i class="' + e.target.className + '"></i>';
			}
			//$('.icons').hide();
			$('.icons').modal('hide');
			//document.querySelector('.icons').style.display = 'none';
		});
	}
//--></script>
<script type="text/javascript"><!--
var html_loading = '<div class="loading" style="display: none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M58.097 52.127c-.431-.7-1.415-1.028-2.181-.732l-3.392 1.302c-.768.295-1.847.04-2.407-.565l-2.55-2.408c-.64-.518-.957-1.584-.706-2.367l1.104-3.46c.248-.782-.153-1.716-.891-2.075l-6.85-2.607c-.792-.224-1.712.21-2.047.96l-1.475 3.32c-.333.75-1.277 1.335-2.1 1.296l-3.508.108c-.816.08-1.795-.45-2.173-1.18l-1.668-3.227c-.375-.731-1.329-1.138-2.117-.906 0 0-1.85.547-3.454 1.267-1.606.72-3.244 1.74-3.244 1.74-.699.435-1.028 1.416-.735 2.184l1.307 3.392c.294.767.041 1.85-.564 2.406l-2.412 2.548c-.517.639-1.584.957-2.365.707l-3.46-1.104c-.782-.25-1.716.15-2.076.892l-2.607 6.85c-.222.792.21 1.71.96 2.045l3.32 1.474c.75.333 1.335 1.28 1.297 2.1l.106 3.508c.083.817-.448 1.796-1.178 2.173l-3.229 1.669c-.729.375-1.136 1.33-.904 2.119 0 0 .548 1.849 1.268 3.451.719 1.607 1.74 3.247 1.74 3.247.434.697 1.416 1.027 2.183.73l3.392-1.302c.767-.296 1.85-.04 2.406.563l2.552 2.411c.638.515.955 1.582.706 2.365l-1.104 3.46c-.251.784.15 1.718.89 2.077l6.85 2.608c.794.222 1.713-.211 2.046-.962l1.474-3.318c.335-.751 1.28-1.337 2.101-1.3l3.508-.104c.818-.084 1.795.449 2.173 1.18l1.665 3.23c.378.73 1.332 1.138 2.12.904 0 0 1.848-.548 3.454-1.268 1.605-.72 3.245-1.74 3.245-1.74.698-.434 1.027-1.416.733-2.185l-1.303-3.388c-.297-.768-.042-1.851.562-2.407l2.411-2.553c.521-.636 1.581-.955 2.365-.705l3.46 1.105c.784.25 1.719-.15 2.08-.889l2.604-6.852c.224-.79-.209-1.712-.96-2.047L57.2 70.396c-.751-.338-1.335-1.283-1.3-2.105l-.103-3.505c-.082-.82.449-1.799 1.18-2.173l3.227-1.668c.732-.375 1.139-1.332.906-2.117 0 0-.547-1.852-1.268-3.458-.724-1.606-1.746-3.243-1.746-3.243zm-21.593 21.75a7.33 7.33 0 01-9.691-3.686A7.33 7.33 0 0130.5 60.5a7.33 7.33 0 019.69 3.689 7.328 7.328 0 01-3.686 9.688z" class="gear-one"></path><path d="M94.205 26.616c-.1-.707-.763-1.315-1.478-1.351l-3.154-.156c-.716-.035-1.488-.619-1.717-1.296L86.677 21c-.325-.637-.203-1.593.27-2.129l2.097-2.36c.474-.535.485-1.419.022-1.965l-4.528-4.48c-.55-.457-1.435-.436-1.962.043l-2.342 2.119c-.527.479-1.485.61-2.124.29l-2.825-1.149c-.679-.223-1.268-.987-1.311-1.703l-.189-3.15c-.044-.714-.657-1.373-1.366-1.465 0 0-1.664-.216-3.194-.208-1.53.007-3.19.242-3.19.242-.705.098-1.314.764-1.352 1.477l-.154 3.153c-.035.716-.619 1.486-1.295 1.715l-2.814 1.18c-.638.326-1.595.204-2.129-.272l-2.36-2.093c-.533-.476-1.419-.484-1.965-.024l-4.482 4.528c-.453.55-.434 1.436.044 1.963l2.116 2.34c.483.53.613 1.489.295 2.125l-1.151 2.828c-.222.677-.99 1.269-1.7 1.311l-3.154.188c-.712.044-1.37.659-1.462 1.366 0 0-.217 1.665-.21 3.194.008 1.528.242 3.19.242 3.19.099.706.763 1.315 1.477 1.35l3.155.157c.713.034 1.485.618 1.716 1.294l1.177 2.814c.324.636.204 1.594-.27 2.128l-2.096 2.361c-.475.535-.484 1.419-.024 1.965l4.53 4.481c.55.456 1.434.437 1.962-.043l2.342-2.118c.528-.48 1.484-.61 2.123-.293l2.826 1.15c.68.223 1.268.989 1.314 1.702l.188 3.151c.043.715.657 1.372 1.366 1.465 0 0 1.662.215 3.192.207 1.529-.006 3.191-.24 3.191-.24.708-.099 1.317-.765 1.35-1.48l.157-3.15c.035-.715.618-1.487 1.296-1.717l2.813-1.178c.636-.324 1.595-.204 2.128.27l2.363 2.095c.533.474 1.417.484 1.963.023l4.481-4.528c.456-.55.437-1.433-.043-1.962l-2.118-2.341c-.481-.53-.611-1.487-.293-2.125l1.149-2.827c.222-.678.99-1.27 1.699-1.311l3.156-.19c.712-.042 1.37-.658 1.463-1.367 0 0 .214-1.662.209-3.192-.007-1.527-.241-3.189-.241-3.189zM69.391 37.203a7.27 7.27 0 11-.072-14.537 7.27 7.27 0 01.072 14.537z" class="gear-two"></path></svg></div>';

$(document).ready(function() {
<?php if (1 == 1) { ?>
	window.onload = function() {
		if ($('select[name="type"]').val() == 1 || $('select[name="type"]').val() == 3) {
			ajax('vertical');
		} else if ($('select[name="type"]').val() == 2) {
			ajax('cell');
		} else {
			ajax('horizontal');
			if ($('select[name="cats_vertical_status"]').val() == 1) {
				ajax('vertical');
			}
		}
	}
<?php } else { ?>
	count();
	buttonStatus(true);
	updateOutputChild();
	maxInputVars();
<?php } ?>

	$('select[name="type"]').change(function() {
		if ($('select[name="type"]').val() == 1) {
			$('.horizontal').fadeOut(1);
			$('.vertical').fadeIn();
			$('.cell').fadeOut(1);
			$('.filter').fadeOut(1);
			$('#heading-title b').text('<?php echo $text_vertical; ?>');
			$('#name').fadeIn();
			$('input[name="name"]').val('<?php echo ($name && $type == 1 ? $name : $text_vertical); ?>').removeAttr('disabled');
			$('.own_help .text').html('<?php echo str_replace(array('_0_', '0 -'), array('_1_', '1 -'), $text_design_own_help); ?>');
			$('#desc-status').fadeOut(1);
			$('select[name="desc_status"]').val('0').attr('disabled','true');
			$('#cats-vertical-status').fadeOut(1);
			$('select[name="cats_vertical_status"]').attr('value', '0').val('0').attr('disabled', 'true');
			$('input[name="cats_horizontal_data"]').attr('disabled','true');
			$('input[name="cats_vertical_data"]').removeAttr('disabled');
			$('input[name="cats_cell_data"]').attr('disabled','true');
			$('#cover-status').fadeOut(1);
			$('select[name="cover_status"]').val('0').attr('disabled','true');
			$('select[name="design"] option[value="0"], select[name="design"] option[value="2"], select[name="design"] option[value="3"], select[name="design"] option[value="4"]').fadeOut(1);
			$('select[name="design"] option[value="5"]').fadeOut(1);
			$('select[name="design"] option[value="6"]').fadeOut(1);
			$('select[name="design"] option[value="7"]').fadeOut(1);
			$('select[name="design"] option[value="8"]').fadeOut(1);
			$('select[name="design"] option[value="9"]').fadeOut(1);
			$('select[name="design"] option[value="10"]').fadeIn();
			$('select[name="lg"]').attr('disabled', 'true').parent().parent().parent().fadeOut(1);
			$('input[name="lg_status"]').attr('disabled', 'true');
			$('select[name="md"]').attr('disabled', 'true').parent().parent().parent().fadeOut(1);
			$('input[name="md_status"]').attr('disabled', 'true');
			$('select[name="sm"]').attr('disabled', 'true').parent().parent().parent().fadeOut(1);
			$('input[name="sm_status"]').attr('disabled', 'true');
			$('select[name="xs"]').attr('disabled', 'true').parent().parent().parent().fadeOut(1);
			$('input[name="xs_status"]').attr('disabled', 'true');
			$('input[name="menu_color"]').attr('disabled', 'true');
			$('input[name="menu_text_color"]').attr('disabled', 'true');
			$('input[name="rating_count"]').attr('disabled','false').parent().parent().fadeIn();
		} else if ($('select[name="type"]').val() == 2) {
			$('.horizontal').fadeOut(1);
			$('.vertical').fadeOut(1);
			$('.cell').fadeIn();
			$('.filter').fadeOut(1);
			$('#heading-title b').text('<?php echo $text_cell; ?>');
			$('#name').fadeIn();
			$('input[name="name"]').val('<?php echo ($name && $type == 2 ? $name : $text_cell); ?>').removeAttr('disabled');
			$('.own_help .text').html('<?php echo str_replace(array('_0_', '0 -'), array('_2_', '2 -'), $text_design_own_help); ?>');
			$('#desc-status').fadeIn();
			$('select[name="desc_status"]').removeAttr('disabled');
			$('#cats-vertical-status').fadeOut(1);
			$('select[name="cats_vertical_status"]').attr('value', '0').val('0').attr('disabled', 'true');
			$('input[name="cats_horizontal_data"]').attr('disabled', 'true');
			$('input[name="cats_vertical_data"]').attr('disabled', 'true');
			$('input[name="cats_cell_data"]').removeAttr('disabled');
			$('#cover-status').fadeOut(1);
			$('select[name="cover_status"]').val('0').attr('disabled','true');
			$('select[name="design"] option[value="0"], select[name="design"] option[value="2"], select[name="design"] option[value="3"], select[name="design"] option[value="4"]').fadeIn();
			$('select[name="design"] option[value="5"]').fadeOut(1);
			$('select[name="design"] option[value="6"]').fadeIn();
			$('select[name="design"] option[value="7"]').fadeIn();
			$('select[name="design"] option[value="8"]').fadeOut(1);
			$('select[name="design"] option[value="9"]').fadeOut(1);
			$('select[name="design"] option[value="10"]').fadeIn();
			$('select[name="lg"]').removeAttr('disabled').parent().parent().parent().fadeIn();
			$('input[name="lg_status"]').removeAttr('disabled');
			$('select[name="md"]').removeAttr('disabled').parent().parent().parent().fadeIn();
			$('input[name="md_status"]').removeAttr('disabled');
			$('select[name="sm"]').removeAttr('disabled').parent().parent().parent().fadeIn();
			$('input[name="sm_status"]').removeAttr('disabled');
			$('select[name="xs"]').removeAttr('disabled').parent().parent().parent().fadeIn();
			$('input[name="xs_status"]').removeAttr('disabled');
			$('input[name="menu_color"]').attr('disabled', 'true');
			$('input[name="menu_text_color"]').attr('disabled', 'true');
			$('input[name="rating_count"]').attr('disabled','false').parent().parent().fadeIn();
		} else if ($('select[name="type"]').val() == 3) {
			$('.horizontal').fadeOut(1);
			$('.vertical').fadeIn();
			$('.cell').fadeOut(1);
			$('.filter').fadeIn();
			$('#heading-title b').text('<?php echo $text_filter; ?>');
			$('#name').fadeIn();
			$('input[name="name"]').val('<?php echo ($name && $type == 3 ? $name : $text_filter); ?>').removeAttr('disabled');
			$('.own_help .text').html('<?php echo str_replace(array('_0_', '0 -'), array('_3_', '3 -'), $text_design_own_help); ?>');
			$('#desc-status').fadeOut(1);
			$('select[name="desc_status"]').val('0').attr('disabled','true');
			$('#cats-vertical-status').fadeOut(1);
			$('select[name="cats_vertical_status"]').attr('value', '0').val('0').attr('disabled', 'true');
			$('input[name="cats_horizontal_data"]').attr('disabled','true');
			$('input[name="cats_vertical_data"]').removeAttr('disabled');
			$('input[name="cats_cell_data"]').attr('disabled','true');
			$('#cover-status').fadeOut(1);
			$('select[name="cover_status"]').val('0').attr('disabled','true');
			$('select[name="design"] option[value="0"], select[name="design"] option[value="2"], select[name="design"] option[value="3"], select[name="design"] option[value="4"]').fadeOut(1);
			$('select[name="design"] option[value="5"]').fadeOut(1);
			$('select[name="design"] option[value="6"]').fadeOut(1);
			$('select[name="design"] option[value="7"]').fadeOut(1);
			$('select[name="design"] option[value="8"]').fadeOut(1);
			$('select[name="design"] option[value="9"]').fadeOut(1);
			$('select[name="design"] option[value="10"]').fadeOut(1);
			/* $('select[name="lg"]').attr('disabled', 'true').parent().parent().parent().fadeIn();
			$('input[name="lg_status"]').removeAttr('disabled');
			$('select[name="md"]').attr('disabled', 'true').parent().parent().parent().fadeIn();
			$('input[name="md_status"]').removeAttr('disabled');
			$('select[name="sm"]').attr('disabled', 'true').parent().parent().parent().fadeIn();
			$('input[name="sm_status"]').removeAttr('disabled');
			$('select[name="xs"]').attr('disabled', 'true').parent().parent().parent().fadeIn();
			$('input[name="xs_status"]').removeAttr('disabled'); */
			$('select[name="lg"]').attr('disabled', 'true').parent().parent().parent().fadeOut(1);
			$('input[name="lg_status"]').attr('disabled', 'true');
			$('select[name="md"]').attr('disabled', 'true').parent().parent().parent().fadeOut(1);
			$('input[name="md_status"]').attr('disabled', 'true');
			$('select[name="sm"]').attr('disabled', 'true').parent().parent().parent().fadeOut(1);
			$('input[name="sm_status"]').attr('disabled', 'true');
			$('select[name="xs"]').attr('disabled', 'true').parent().parent().parent().fadeOut(1);
			$('input[name="xs_status"]').attr('disabled', 'true');
			$('input[name="menu_color"]').attr('disabled', 'true');
			$('input[name="menu_text_color"]').attr('disabled', 'true');
			$('input[name="rating_count"]').attr('disabled','true').parent().parent().fadeOut(1);
		} else {
			$('.horizontal').fadeIn();
			$('.vertical').fadeOut(1);
			$('.cell').fadeOut(1);
			$('.filter').fadeOut(1);
			$('#heading-title b').text('<?php echo $text_horizontal; ?>');
			$('#name').fadeOut(1);
			$('input[name="name"]').val('<?php echo ($name && !$type ? $name : $text_horizontal); ?>');
			$('.own_help .text').html('<?php echo $text_design_own_help; ?>');
			$('#desc-status').fadeIn();
			$('select[name="desc_status"]').removeAttr('disabled');
			$('#cats-vertical-status').fadeIn();
			$('select[name="cats_vertical_status"]').removeAttr('disabled');
			$('input[name="cats_horizontal_data"]').removeAttr('disabled');
			$('input[name="cats_vertical_data"]').attr('disabled', 'true');
			$('input[name="cats_cell_data"]').attr('disabled', 'true');
			$('#cover-status').fadeIn();
			$('select[name="cover_status"]').removeAttr('disabled');
			$('select[name="design"] option[value="0"], select[name="design"] option[value="2"], select[name="design"] option[value="3"], select[name="design"] option[value="4"]').fadeOut(1);
			$('select[name="design"] option[value="5"]').fadeIn();
			$('select[name="design"] option[value="6"]').fadeOut(1);
			$('select[name="design"] option[value="7"]').fadeOut(1);
			$('select[name="design"] option[value="8"]').fadeIn();
			$('select[name="design"] option[value="9"]').fadeIn();
			$('select[name="design"] option[value="10"]').fadeOut(1);
			$('select[name="lg"]').removeAttr('disabled').parent().parent().parent().fadeIn();
			$('input[name="lg_status"]').removeAttr('disabled');
			$('select[name="md"]').removeAttr('disabled').parent().parent().parent().fadeIn();
			$('input[name="md_status"]').removeAttr('disabled');
			$('select[name="sm"]').removeAttr('disabled').parent().parent().parent().fadeIn();
			$('input[name="sm_status"]').removeAttr('disabled');
			$('select[name="xs"]').removeAttr('disabled').parent().parent().parent().fadeIn();
			$('input[name="xs_status"]').removeAttr('disabled');
			$('input[name="menu_color"]').removeAttr('disabled');
			$('input[name="menu_text_color"]').removeAttr('disabled');
			$('input[name="rating_count"]').attr('disabled','false').parent().parent().fadeIn();
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
			if ($('select[name="type"]').val() == '1' || $('select[name="type"]').val() == '3') {
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
			$('#thumb-site-ico-1').fadeOut(1);
			$('#thumb-site-ico-2').fadeIn();
			$('#site-image-resize').fadeIn();
			$('#site-image-resize input').removeAttr('disabled');
		} else {
			$('.popover').remove();
			$('#thumb-site-ico-1').fadeIn();
			$('#thumb-site-ico-2').fadeOut(1);
			$('#site-image-resize').fadeOut(1);
			$('#site-image-resize input').attr('disabled', 'true');
		}
	});
	$('select[id="input-site-type-ico"]').trigger("change");

	$('select[id="input-cats-vertical-type-ico"]').change(function() {
		if ($('select[id="input-cats-vertical-type-ico"]').val() == '2') {
			$('#thumb-cats-vertical-ico-1').fadeOut(1);
			$('#thumb-cats-vertical-ico-2').fadeIn();
			$('#cats-vertical-image-resize').fadeIn();
			$('#cats-vertical-image-resize input').removeAttr('disabled');
		} else {
			$('.popover').remove();
			$('#thumb-cats-vertical-ico-1').fadeIn();
			$('#thumb-cats-vertical-ico-2').fadeOut(1);
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

	$(document).on('scroll', function() {
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
});

	function count(type) {
		if (type) {
			if ($('#input-cats-' + type + ' li.dd-item').length > 0) {
				$('.cats-' + type + '-count').text($('#input-cats-' + type + ' li.dd-item').length + ' шт.');
			} else {
				$('.cats-' + type + '-count').text('');
			}
		} else {
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
	}

	function max(style, data) {
		var max = 0, id;

		$(style).each(function() {
			id = $(this).data(data); 
			max = (max < id) ? id:max; 
		});

		return max;
	}

	function buttonStatus(status) {
		if (status) {
			$('.container-fluid button').removeAttr('disabled');
		} else {
			$('.container-fluid button').attr('disabled', true);
		}
	}

	function ajax(type) {
		$('#cats-' + type + ' .catAdd').html(html_loading);
		$('#cats-' + type + ' .catAdd .loading').show();

		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?>/ajax&<?php echo $token; ?>',
			data: {module_id:'<?php echo $module_id; ?>', type:type, token:'<?php echo $token; ?>'},
			type: 'POST',
			dataType: 'html', // json
			cache: true,
			async: true,
			success: function(json) {
				if (json == '') {
					json = '<ol class="catAdd dd-list"></ol>';
				}
				if ($('#cats-' + type).css('display') != 'none') {
					$('#cats-' + type + ' .catAdd').replaceWith(json);

					count(type);
					buttonStatus(true);
					updateOutputChild(type);
					maxInputVars();
					$('.dd-item input').each(function(index) {
						catAutocomplete(index);
					});
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}

	function catAddGroup(row, query, type, _this) {
		buttonStatus(false);

		if (type) {
			if (_this) {
				$(_this).children().removeClass('fa-sitemap').addClass('fa-refresh fa-spin');
			}
			$('#cats-' + type + ' .catAdd').html(html_loading);
			$('#cats-' + type + ' .catAdd .loading').show();
			var query = $('#cats-' + type + ' select[data-name="table"]').val() + '=0';
			var level_limit = $('#cats-' + type + ' input[data-name="level_limit"]').val();
			var data = {token:'<?php echo $token; ?>', query:query, type:type, level_limit:level_limit, image_status:$('select[name="image_status"]').val()};
		} else {
			var row_end = max('.dd-item', 'id') + 1;
			var data = {token:'<?php echo $token; ?>', row:row_end, query:query, image_status:$('select[name="image_status"]').val()};
		}

		$.ajax({
			url: 'index.php?route=<?php echo $module_path; ?>/ajax&<?php echo $token; ?>',
			data: data,
			type: 'POST',
			dataType: 'html', // json
			cache: true,
			async: true,
			success: function(json) {
				if (json) {
					if (type) {
						if ($('#cats-' + type).css('display') != 'none') {
							$('#cats-' + type + ' .catAdd').replaceWith(json);
						}
						if (_this) {
							$(_this).children().removeClass('fa-refresh fa-spin').addClass('fa-sitemap');
						}
					} else {
						if ($('#cats-' + row + ' ol').length) {
							$('#cats-' + row + ' ol').replaceWith(json);
						} else {
							var html  = '        <button type="button" class="btn btn-default" data-action="collapse">Collapse</button>';
							html += '        <button type="button" class="btn btn-default" data-action="expand" style="display: none;">Expand</button>';
							$('#cats-' + row).prepend(html);
							$('#cats-' + row).append(json);
						}
					}
				}

				count(type);
				updateOutputChild(type, true);
				maxInputVars();
				$('.tooltip').remove();
				$('.dd-item input').each(function(index) {
					catAutocomplete(index);
				});
				buttonStatus(true);
				if (row) {
					$('#cats-' + row + ' button[data-action="expand"]').click();
				}
			}
		});
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
		var row = max('.dd-item', 'id') + 1;

		var html  = '<li id="cats-' + row + '" class="dd-item dd3-item" data-id="' + row + '">';
		html += '  <div class="dd-handle dd3-handle"></div>';
		html += '  <div class="dd3-content">';
		html += '    <div class="input-group">';
		html += '      <input type="text" id="name-stock-' + row + '" value="" placeholder="<?php echo $button_link_add; ?>" class="form-control" />';
		html += '      <input type="hidden" name="cats[' + row + '][query]" value="" placeholder="" class="form-control" />';
		html += '      <input type="hidden" name="cats[' + row + '][group_status]" value="0" placeholder="<?php echo $entry_status; ?>" class="form-control" />';
		html += '      <input type="hidden" name="cats[' + row + '][status]" value="1" placeholder="<?php echo $entry_status; ?>" class="form-control" />';
		html += '      <input type="hidden" name="cats[' + row + '][image_status]" value="1" placeholder="<?php echo $entry_status; ?>" class="form-control" />';
		html += '      <div class="input-group-btn">';
		html += '        <button type="button" onclick="catDelete(' + row + ');" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button>';
		html += '        <button disabled="disabled" type="button" onclick="catAddGroup(\'' + row + '\');" data-toggle="tooltip" title="<?php echo $button_link_add_group; ?>" class="btn btn-primary"><i class="fa fa-sitemap"></i></button>';
		html += '        <button type="button" onclick="catGroupStatus(' + row + ');" data-toggle="tooltip" title="<?php echo $button_link_add_group_status; ?> <?php echo $entry_status; ?> <?php echo $text_enabled; ?>" class="btn btn-danger"><i class="fa fa-sitemap"></i></button>';
		html += '        <button type="button" onclick="catStatus(' + row + ');" data-toggle="tooltip" title="<?php echo $entry_status; ?> <?php echo $text_enabled; ?>" class="btn btn-default"><i class="fa fa-pause"></i></button>';
		html += '        <button type="button" onclick="catImageStatus(' + row + ');" data-toggle="tooltip" title="<?php echo $help_cats_image_status; ?> <?php echo $text_enabled; ?>" class="btn btn-success"><i class="fa fa-image"></i></button>';
		html += '        <button type="button" onclick="catEdit(' + row + ');" data-toggle="tooltip" title="<?php echo $text_edit; ?>" class="btn btn-success"><i class="fa fa-cogs"></i></button>';
		html += '        <div id="image-' + row + '" title="<?php echo $help_cats_image; ?>" data-toggle="tooltip">';
		html += '          <a href="" id="thumb-image-' + row + '" data-toggle="image" class="img-thumbnail text-center">';
		html += '            <img src="<?php echo $placeholder; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">';
		html += '          </a>';
		html += '          <input type="hidden" name="cats[' + row + '][image]" value="" data-placeholder="<?php echo $placeholder; ?>" id="input-image-' + row + '">';
		html += '          <select name="cats[' + row + '][image_position]" class="form-control" title="<?php echo $help_cats_image_position; ?>" data-toggle="tooltip">';
		html += '            <option value="1" selected="selected"><?php echo $text_left; ?></option>';
		html += '            <option value="2"><?php echo $text_right; ?></option>';
		html += '          </select>';
		html += '        </div>';
		html += '        <div id="sticker-' + row + '" title="<?php echo $help_cats_sticker; ?>" data-toggle="tooltip">';
		html += '          <a href="" id="thumb-sticker-' + row + '" data-toggle="image" class="img-thumbnail text-center">';
		html += '            <img src="<?php echo $placeholder; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">';
		html += '          </a>';
		html += '          <input type="hidden" name="cats[' + row + '][sticker]" value="" data-placeholder="<?php echo $placeholder; ?>" id="input-sticker-' + row + '">';
		html += '          <select name="cats[' + row + '][sticker_position]" class="form-control" title="<?php echo $help_cats_sticker_position; ?>" data-toggle="tooltip">';
		html += '            <option value="1"><?php echo $text_left; ?></option>';
		html += '            <option value="2"><?php echo $text_right; ?></option>';
		html += '            <option value="3"><?php echo $text_top; ?></option>';
		html += '            <option value="4"><?php echo $text_bottom; ?></option>';
		html += '            <option value="5"><?php echo $text_left_top; ?></option>';
		html += '            <option value="6" selected="selected"><?php echo $text_right_top; ?></option>';
		html += '            <option value="7"><?php echo $text_left_bottom; ?></option>';
		html += '            <option value="8"><?php echo $text_right_bottom; ?></option>';
		html += '          </select>';
		html += '        </div>';
		html += '        <div id="cover-' + row + '" title="<?php echo $help_cover; ?>" data-toggle="tooltip" class="cover" style="display: none;">';
		html += '          <a href="" id="thumb-cover-' + row + '" data-toggle="image" class="img-thumbnail text-center">';
		html += '            <img src="<?php echo $placeholder; ?>" alt="" title="" data-placeholder="<?php echo $placeholder; ?>">';
		html += '          </a>';
		html += '          <input type="hidden" name="cats[' + row + '][cover]" value="" data-placeholder="<?php echo $placeholder; ?>" id="input-cover-' + row + '" disabled="disabled">';
		html += '          <select name="cats[' + row + '][cover_position]" class="form-control cover" title="<?php echo $help_cover_position; ?>" data-toggle="tooltip" style="display: none;" disabled="disabled">';
		html += '            <option value="1"><?php echo $text_left; ?></option>';
		html += '            <option value="2"><?php echo $text_right; ?></option>';
		html += '            <option value="3"><?php echo $text_top; ?></option>';
		html += '            <option value="4"><?php echo $text_bottom; ?></option>';
		html += '            <option value="5"><?php echo $text_left_top; ?></option>';
		html += '            <option value="6"><?php echo $text_right_top; ?></option>';
		html += '            <option value="7"><?php echo $text_left_bottom; ?></option>';
		html += '            <option value="8" selected="selected"><?php echo $text_right_bottom; ?></option>';
		html += '          </select>';
		html += '        </div>';
		html += '      </div>';
		html += '    </div>';
		html += '    <div id="cats-desc-' + row + '" class="collapse">';
		html += '      <ul class="nav nav-tabs" id="language-' + row + '">';
<?php foreach ($languages as $language) { ?>
		html += '        <li><a href="#language-<?php echo $language['language_id']; ?>-' + row + '" data-toggle="tab"><img src="<?php echo version_compare(VERSION, '2.2.0.0', '<') ? 'view/image/flags/' . $language['image'] : 'language/' . $language['code'] . '/' . $language['code'] . '.png'; ?>" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>';
<?php } ?>
		html += '      </ul>';
		html += '      <div class="tab-content">';
<?php foreach ($languages as $language) { ?>
		html += '        <div class="tab-pane" id="language-<?php echo $language['language_id']; ?>-' + row + '">';
		html += '          <span title="<?php echo $help_cats_name; ?>" data-toggle="tooltip"><input type="text" name="cats[' + row + '][name][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_cats_name; ?>" class="form-control" /></span>';
		html += '          <span title="<?php echo $help_cats_link; ?>" data-toggle="tooltip"><input type="text" name="cats[' + row + '][link][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_cats_link; ?>" class="form-control" /></span>';
		html += '          <span title="<?php echo $help_cats_title; ?>" data-toggle="tooltip"><input type="text" name="cats[' + row + '][title][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_cats_title; ?>" class="form-control" /></span>';
		html += '          <span title="<?php echo $help_cats_desc; ?>" data-toggle="tooltip"><input type="text" name="cats[' + row + '][desc][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_cats_desc; ?>" class="form-control" /></span>';
		html += '        </div>';
<?php } ?>
		html += '      </div>';
		html += '      <div class="row">';
		html += '        <div title="<?php echo $help_lg; ?> <?php echo $help_cats_column; ?>" data-toggle="tooltip" class="col-sm-3"><input type="text" name="cats[' + row + '][column_lg]" value="" placeholder="<?php echo $entry_lg; ?>" class="form-control" /></div>';
		html += '        <div title="<?php echo $help_md; ?> <?php echo $help_cats_column; ?>" data-toggle="tooltip" class="col-sm-3"><input type="text" name="cats[' + row + '][column_md]" value="" placeholder="<?php echo $entry_md; ?>" class="form-control" /></div>';
		html += '        <div title="<?php echo $help_sm; ?> <?php echo $help_cats_column; ?>" data-toggle="tooltip" class="col-sm-3"><input type="text" name="cats[' + row + '][column_sm]" value="" placeholder="<?php echo $entry_sm; ?>" class="form-control" /></div>';
		html += '        <div title="<?php echo $help_xs; ?> <?php echo $help_cats_column; ?>" data-toggle="tooltip" class="col-sm-3"><input type="text" name="cats[' + row + '][column_xs]" value="" placeholder="<?php echo $entry_xs; ?>" class="form-control" /></div>';
		html += '      </div>';
		html += '    </div>';
		html += '  </div>';
		html += '</li>';

		$('#input-cats-' + row_last + ' .catAdd').append(html);

		$('#language-' + row + ' a:first').tab('show');

		count();
		catEdit(row);
		catAutocomplete(row);
		updateOutputChild();
		maxInputVars();

		row++;
	}

	function catDelete(row) {
		$('#cats-' + row).remove();
		$('.tooltip').remove();
		count();
		updateOutputChild();
		maxInputVars();
	}

	function catStatus(row, status) {
		if ($('input[name="cats[' + row + '][status]"]').val() == 0 || status) {
			$('input[name="cats[' + row + '][status]"]').val(1);
			$('button[onclick="catStatus(' + row + ');"] i').attr('class', 'fa fa-pause');
			$('button[onclick="catStatus(' + row + ');"]').attr('data-original-title', '<?php echo $entry_status; ?> <?php echo $text_enabled; ?>');
		} else {
			$('input[name="cats[' + row + '][status]"]').val(0);
			$('button[onclick="catStatus(' + row + ');"] i').attr('class', 'fa fa-play');
			$('button[onclick="catStatus(' + row + ');"]').attr('data-original-title', '<?php echo $entry_status; ?> <?php echo $text_disabled; ?>');
		}
		$('.tooltip').remove();
	}

	function catImageStatus(row) {
		if ($('input[name="cats[' + row + '][image_status]"]').val() == '1') {
			$('input[name="cats[' + row + '][image_status]"]').val('0');
			$('button[onclick="catImageStatus(' + row + ');"]').attr('class', 'btn btn-danger').attr('data-original-title', '<?php echo $help_cats_image_status; ?> <?php echo $text_disabled; ?>');
		} else {
			$('input[name="cats[' + row + '][image_status]"]').val('1');
			$('button[onclick="catImageStatus(' + row + ');"]').attr('class', 'btn btn-success').attr('data-original-title', '<?php echo $help_cats_image_status; ?> <?php echo $text_enabled; ?>');
		}
		$('.tooltip').remove();
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
				$('#cats-' + row + ' #cover-' + row + '').show().attr('style', 'position:absolute;left:-43%;');
				$('input[name="cats[' + row + '][cover]"]').removeAttr('disabled').show();
				$('select[name="cats[' + row + '][cover_position]"]').removeAttr('disabled').show().attr('style', 'width:109px;position:absolute');
			}
			$('#cats-' + row + ' #image-' + row + '').attr('style', 'position:absolute;left:5%;');
			$('#cats-' + row + ' #image-' + row + ' img').attr('style', 'height:100px;');
			$('select[name="cats[' + row + '][image_position]"]').show().attr('style', 'width:109px;position:absolute');
			$('#cats-' + row + ' #sticker-' + row + '').attr('style', 'float:right;margin-bottom:34px');
			$('#cats-' + row + ' #sticker-' + row + ' img').attr('style', 'height:100px;');
			$('select[name="cats[' + row + '][sticker_position]"]').show().attr('style', 'width:109px;position:absolute');
		}

		$('#cats-desc-' + row).collapse('toggle');
		$('#language-' + row + ' a:first').tab('show');
		$('.tooltip').remove();
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
		$('.tooltip').remove();
	}

	function importData() {
		if (document.querySelector('input[name="import"]').value) {
			var formData = new FormData();
			formData.append('import', document.getElementsByName("import")[0].files[0]);

			var request = new XMLHttpRequest();
			request.open('POST', 'index.php?route=<?php echo $module_path; ?>/import&<?php echo $token; ?>');
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

	function savePiecemeal(id) {
		var form = document.querySelectorAll('form[id="'+ id + '"] input, form[id="'+ id + '"] select, form[id="'+ id + '"] textarea');
		//var formData = new FormData(document.forms['form-bus-menu']);

		if (form.length >= <?php echo $max_input_vars; ?>) {
			var savePiecemealAjax = function(stage, plus) {
				var text = document.createElement('i');
				text.innerHTML = '<i>' + stage + '</i>';
				document.querySelector('button[title="<?php echo $button_apply_piecemeal; ?>"] i, button[data-original-title="<?php echo $button_apply_piecemeal; ?>"] i').replaceWith(text);

				var data = new FormData();

				if (!plus) {
					var plus = 0;
				}

				for (var i = (0 + plus); i < (<?php echo $max_input_vars-2; ?> + plus); i++) {
					if (form[i] && form[i].getAttribute('disabled') != 'true') {
						data.append(form[i].name, form[i].value);
					}
				}

				data.append('module_id', <?php echo $module_id; ?>);
				if (stage > 2) {
					plus = plus + <?php echo $max_input_vars-2; ?>;
					data.append('apply', '2');
				} else if (stage > 1) {
					plus = plus + form.length - <?php echo $max_input_vars-2; ?> * (Math.ceil(form.length/<?php echo $max_input_vars-2; ?>) - 1);
					data.append('apply', '2');
				} else if (stage == 1) {
					data.append('apply', '3');
				}

				var request = new XMLHttpRequest();
				request.open('POST', '<?php echo $action; ?>'.replace('amp;', ''));
				request.send(data);
				request.onload = function(oEvent) {
					if (request.status == 200) {
						//request.response;
						if (stage > 1) {
							stage--;
							savePiecemealAjax(stage, plus);
						} else {
							text = document.createElement('i');
							text.innerHTML = '<i class="fa fa-save"></i>';
							document.querySelector('button[title="<?php echo $button_apply_piecemeal; ?>"] i, button[data-original-title="<?php echo $button_apply_piecemeal; ?>"] i').replaceWith(text);
							location.href = location.href;
						}
					} else {
						alert("Error " + request.status + " occurred when trying to upload your file.<br \/>");
					}
				};
			}

			savePiecemealAjax(Math.ceil(form.length/<?php echo $max_input_vars-2; ?>));
		} else {
			document.querySelector('form input[name="apply"]').value = 1;
			document.getElementById('form-bus-menu').submit();
		}
	}

	function catAutocomplete(row) {
		$('input#name-stock-' + row).autocomplete({
			'source': function(request, response) {
				$.ajax({
					url: 'index.php?route=<?php echo $module_path; ?>/autocomplete&<?php echo $token; ?>&seo_now=' + $('select[name="seo_now"]').val() + '&filter_name=' +  encodeURIComponent(request),
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
				$('button[onclick="catStatus(' + row + ');"] i').attr('class', 'fa fa-pause');
				catStatus(row, item['status']);
				if (item['value'] > '') {
					$('button[onclick*="catAddGroup(' + row + '"]').attr('onclick', 'catAddGroup(\'' + row + '\', \'' + item['value'] + '\')').removeAttr('disabled');
				}
				$('input[name="cats[' + row + '][query]"]').val(item['value']);
				$('input[name="cats[' + row + '][image]"]').val(item['image']);
				$('#thumb-image-' + row + ' img').attr('src', item['thumb']);
				if (!$('input[name="cats[' + row + '][query]"]').val() || $('select[name="seo_now"]').val() == '1') {
					<?php foreach ($languages as $language) { ?>
					$('input[name="cats[' + row + '][name][<?php echo $language['language_id']; ?>]"]').val(item['name'][<?php echo $language['language_id']; ?>]);
					$('input[name="cats[' + row + '][link][<?php echo $language['language_id']; ?>]"]').val(item['link']).fadeIn().removeAttr('disabled');
					<?php } ?>
				} else {
					<?php foreach ($languages as $language) { ?>
					$('input[name="cats[' + row + '][name][<?php echo $language['language_id']; ?>]"]').val(item['name'][<?php echo $language['language_id']; ?>]);
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

	function updateOutput(e) {
		var list = e.length > 0 ? e : $(e.target),
			output = list.data('output');

		if (window.JSON && list && output) {
			output.val(window.JSON.stringify(list.nestable('serialize'))).attr('value', window.JSON.stringify(list.nestable('serialize')));
		} else {
			output.val('JSON browser support required for this demo.');
		}
	};

	var dataArray = {
		listNodeName   : 'ol',
		itemNodeName   : 'li',
		rootClass      : 'dd',
		listClass      : 'dd-list',
		itemClass      : 'dd-item',
		dragClass      : 'dd-dragel',
		handleClass    : 'dd-handle',
		collapsedClass : 'dd-collapsed',
		placeClass     : 'dd-placeholder',
		noDragClass    : 'dd-nodrag',
		emptyClass     : 'dd-empty',
		expandBtnHTML  : '<button type="button" class="btn btn-default" data-action="expand">Expand</button>',
		collapseBtnHTML: '<button type="button" class="btn btn-default" data-action="collapse">Collapse</button>',
		expandAll    : true,
		group          : 0,
		maxDepth       : 20,
		threshold      : 20
	};

	$('#cats-horizontal .dd').nestable(dataArray).change(updateOutput);
	$('#cats-vertical .dd').nestable(dataArray).change(updateOutput);
	$('#cats-cell .dd').nestable(dataArray).change(updateOutput);

	function updateOutputChild(type, collapse) {
		// activate Nestable for list 1
		//$('#input-cats-horizontal').nestable({group: 1}).on('change', updateOutput);
		//dataArray['group'] = 1;
		if (type) {
			$('#cats-' + type + ' .dd').nestable(dataArray).change(updateOutput);

			updateOutput($('#cats-' + type + ' .dd').data('output', $('input[name="cats_' + type + '_data"]')));

			if (!collapse) {
				$('#cats-' + type + ' .dd').nestable('collapseAll');
			}
		} else {
			// output initial serialised data
			updateOutput($('#cats-horizontal .dd').data('output', $('input[name="cats_horizontal_data"]')));
			updateOutput($('#cats-vertical .dd').data('output', $('input[name="cats_vertical_data"]')));
			updateOutput($('#cats-cell .dd').data('output', $('input[name="cats_cell_data"]')));

			$('#cats-horizontal .dd').nestable('collapseAll');
			$('#cats-vertical .dd').nestable('collapseAll');
			$('#cats-cell .dd').nestable('collapseAll');
		}

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

		//$('#input-cats-horizontal').nestable();
		//$('#input-cats-vertical').nestable();
		//$('#input-cats-cell').nestable();
	}

	function scrollToTop() {
		var element = $('html');
		var offset = element.offset();
		element.animate({scrollTop: offset.top}, 200, 'linear');
	};

	function maxInputVars() {
		$('.max-input-vars').remove();
		var max_input_vars_run = $('form input, form select, form textarea').length;

		if ((max_input_vars_run + <?php echo $max_input_vars_cut; ?>) >= <?php echo $max_input_vars; ?>) {
			$('button[title="<?php echo $button_apply; ?>"], button[data-original-title="<?php echo $button_apply; ?>"]').attr('disabled', true);
			$('button[title="<?php echo $button_save; ?>"], button[data-original-title="<?php echo $button_save; ?>"]').attr('disabled', true);
			<?php foreach ($types as $type) { ?>
			$('button[onclick="сatAdd(\'<?php echo $type; ?>\');"]').parent().parent().after('<div class="alert alert-danger max-input-vars"><?php echo $error_max_input_vars; ?>' + max_input_vars_run + '</div>');
			<?php } ?>
		}
	}

	$('textarea').keydown(function(e) {
		if (e.keyCode === 9) { // tab was pressed
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

	function parseHtmlIcons(type) {
		var html = type + ':[';		
		var icons = document.querySelectorAll('.icons .modal-body i.' + type);

		for (var i = 0; i < icons.length; i++) {
			if (icons[i].style['display'] != 'none') {
				html += '"' + icons[i].className.replace(type + ' ', '') + '",';
			}
		}

		html += '],';

		$('.icons').html(html);
	}

	function parseIcons(key) {
		var selection = [];
		var sheets = document.styleSheets;
		var html = '[';

		for (i in sheets) {
			try {
				if (i == key) {
					var sheet = sheets[i].rules;

					if (sheet) {
						for (j in sheet) {
							if (/fa-[\d\w]+/.test(sheet[j].selectorText)) {
								var xui = sheet[j].selectorText.indexOf(',');

								if (xui != -1) {
									xui = sheet[j].selectorText.indexOf(' ');
									if (xui != -1) {
										sheet[j].selectorText = sheet[j].selectorText.substring(0, xui);
									}
									xui = sheet[j].selectorText.indexOf(':');
									if (xui != -1) {
										sheet[j].selectorText = sheet[j].selectorText.substring(0, xui);
									}
									html += '"' + sheet[j].selectorText.replace('.fa', 'fa') + '",';
									selection.push(sheet[j].selectorText.replace('.fa', 'fa'));
								} else {
									var sh = sheet[j].selectorText.split(',');

									for (s in sh) {
										xui = sh[s].indexOf(' ');
										if (xui != -1) {
											sh[s] = sh[s].substring(0, xui);
										}
										xui = sh[s].indexOf(':');
										if (xui != -1) {
											sh[s] = sh[s].substring(0, xui);
										}
										html += '"' + sh[s].replace('.fa', 'fa') + '",';
										selection.push(sh[s].replace('.fa', 'fa'));
									}
								}
							}
						}
					}
				}
			} catch(e) {
				console.log('pisec ' + sheets[i].href);
			}
		}

		html += ']';

		$('.icons').html(html);
		//console.log(selection);
	}
//--></script>
<!-- // *   Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ )
     // *   © 2016-2022; BuslikDrev - Усе правы захаваныя.
     // *   Спецыяльна для сайта: "OpenCart.pro" ( https://opencart.pro/ ) -->
<?php echo $footer; ?>
