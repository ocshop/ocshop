<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" data-toggle="tooltip" onclick="$('input[name=\'apply\']').val('1'); $('#' + $('#content form').attr('id')).submit();" title="<?php echo $button_apply; ?>" class="btn btn-success"><i class="fa fa-save"></i></button>
        <button type="submit" form="form-bus-editor" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-bus-editor" class="form-horizontal">
          <input type="hidden" id="apply" name="apply" value="0">
          <legend><b><?php echo $tab_blog_category; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-blog-category-href-status"><span title="<?php echo $help_blog_category_href_status; ?>" data-toggle="tooltip"><?php echo $entry_href_status; ?></span></label>
            <div class="col-sm-10">
              <select name="blog_category_href_status" id="input-blog-category-href-status" class="form-control">
                <option value="1"<?php if ($blog_category_href_status == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
                <option value="0"<?php if (!$blog_category_href_status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
              </select>
            </div>
          </div>
          <div class="form-group blog_category-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-blog-category-href-index"><span data-toggle="tooltip" title="<?php echo $help_index; ?>"><?php echo $entry_index; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[blog_category_href_index]" value="<?php echo $blog_category_href_index; ?>" placeholder="<?php echo $entry_index; ?>" id="input-blog-category-href-index" class="form-control" />
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-blog-category-href-search"><span data-toggle="tooltip" title="<?php echo $help_href_search; ?>"><?php echo $entry_href_search; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[blog_category_href_search]" value="<?php echo $blog_category_href_search; ?>" placeholder="<?php echo $entry_href_search; ?>" id="input-blog-category-href-search" class="form-control" />
              <?php echo $text_example_search; ?><br /><?php echo $text_view; ?>blog/category.tpl
            </div>
            </div>
          </div>
          <div class="form-group blog_category-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-blog-category-href-position"><?php echo $entry_position; ?></label>
            <div class="col-sm-10">
              <select name="modification[blog_category_href_position]" id="input-blog-category-href-position" class="form-control">
                <option value="0"<?php if (!$blog_category_href_position) { ?> selected="selected"<?php } ?>><?php echo $text_after; ?></option>
                <option value="1"<?php if ($blog_category_href_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_before; ?></option>
                <option value="2"<?php if ($blog_category_href_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_replace; ?></option>
              </select>
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-blog-category-href-add"><span data-toggle="tooltip" title="<?php echo $help_href_add; ?>"><?php echo $entry_href_add; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[blog_category_href_add]" value="<?php echo $blog_category_href_add; ?>" placeholder="<?php echo $entry_href_add; ?>" id="input-blog-category-href-add" class="form-control" />
              <?php echo $text_example_add; ?>
            </div>
            </div>
          </div>
          <legend><b><?php echo $tab_blog_article; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-blog-article-href-status"><span title="<?php echo $help_blog_article_href_status; ?>" data-toggle="tooltip"><?php echo $entry_href_status; ?></span></label>
            <div class="col-sm-10">
              <select name="blog_article_href_status" id="input-blog-article-href-status" class="form-control">
                <option value="1"<?php if ($blog_article_href_status == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
                <option value="0"<?php if (!$blog_article_href_status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
              </select>
            </div>
          </div>
          <div class="form-group blog_article-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-blog-article-href-index"><span data-toggle="tooltip" title="<?php echo $help_index; ?>"><?php echo $entry_index; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[blog_article_href_index]" value="<?php echo $blog_article_href_index; ?>" placeholder="<?php echo $entry_index; ?>" id="input-blog-article-href-index" class="form-control" />
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-blog-article-href-search"><span data-toggle="tooltip" title="<?php echo $help_href_search; ?>"><?php echo $entry_href_search; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[blog_article_href_search]" value="<?php echo $blog_article_href_search; ?>" placeholder="<?php echo $entry_href_search; ?>" id="input-blog-article-href-search" class="form-control" />
              <?php echo $text_example_search; ?><br /><?php echo $text_view; ?>blog/article.tpl
            </div>
            </div>
          </div>
          <div class="form-group blog_article-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-blog-article-href-position"><?php echo $entry_position; ?></label>
            <div class="col-sm-10">
              <select name="modification[blog_article_href_position]" id="input-blog-article-href-position" class="form-control">
                <option value="0"<?php if (!$blog_article_href_position) { ?> selected="selected"<?php } ?>><?php echo $text_after; ?></option>
                <option value="1"<?php if ($blog_article_href_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_before; ?></option>
                <option value="2"<?php if ($blog_article_href_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_replace; ?></option>
              </select>
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-blog-article-href-add"><span data-toggle="tooltip" title="<?php echo $help_href_add; ?>"><?php echo $entry_href_add; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[blog_article_href_add]" value="<?php echo $blog_article_href_add; ?>" placeholder="<?php echo $entry_href_add; ?>" id="input-blog-article-href-add" class="form-control" />
              <?php echo $text_example_add; ?>
            </div>
            </div>
          </div>
          <legend><b><?php echo $tab_category; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-category-href-status"><span title="<?php echo $help_category_href_status; ?>" data-toggle="tooltip"><?php echo $entry_href_status; ?></span></label>
            <div class="col-sm-10">
              <select name="category_href_status" id="input-category-href-status" class="form-control">
                <option value="1"<?php if ($category_href_status == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
                <option value="0"<?php if (!$category_href_status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
              </select>
            </div>
          </div>
          <div class="form-group category-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-category-href-index"><span data-toggle="tooltip" title="<?php echo $help_index; ?>"><?php echo $entry_index; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[category_href_index]" value="<?php echo $category_href_index; ?>" placeholder="<?php echo $entry_index; ?>" id="input-category-href-index" class="form-control" />
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-category-href-search"><span data-toggle="tooltip" title="<?php echo $help_href_search; ?>"><?php echo $entry_href_search; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[category_href_search]" value="<?php echo $category_href_search; ?>" placeholder="<?php echo $entry_href_search; ?>" id="input-category-href-search" class="form-control" />
              <?php echo $text_example_search; ?><br /><?php echo $text_view; ?>product/category.tpl
            </div>
            </div>
          </div>
          <div class="form-group category-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-category-href-position"><?php echo $entry_position; ?></label>
            <div class="col-sm-10">
              <select name="modification[category_href_position]" id="input-category-href-position" class="form-control">
                <option value="0"<?php if (!$category_href_position) { ?> selected="selected"<?php } ?>><?php echo $text_after; ?></option>
                <option value="1"<?php if ($category_href_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_before; ?></option>
                <option value="2"<?php if ($category_href_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_replace; ?></option>
              </select>
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-category-href-add"><span data-toggle="tooltip" title="<?php echo $help_href_add; ?>"><?php echo $entry_href_add; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[category_href_add]" value="<?php echo $category_href_add; ?>" placeholder="<?php echo $entry_href_add; ?>" id="input-category-href-add" class="form-control" />
              <?php echo $text_example_add; ?>
            </div>
            </div>
          </div>
          <legend><b><?php echo $tab_information; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-information-href-status"><span title="<?php echo $help_information_href_status; ?>" data-toggle="tooltip"><?php echo $entry_href_status; ?></span></label>
            <div class="col-sm-10">
              <select name="information_href_status" id="input-information-href-status" class="form-control">
                <option value="1"<?php if ($information_href_status == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
                <option value="0"<?php if (!$information_href_status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
              </select>
            </div>
          </div>
          <div class="form-group information-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-information-href-index"><span data-toggle="tooltip" title="<?php echo $help_index; ?>"><?php echo $entry_index; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[information_href_index]" value="<?php echo $information_href_index; ?>" placeholder="<?php echo $entry_index; ?>" id="input-information-href-index" class="form-control" />
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-information-href-search"><span data-toggle="tooltip" title="<?php echo $help_href_search; ?>"><?php echo $entry_href_search; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[information_href_search]" value="<?php echo $information_href_search; ?>" placeholder="<?php echo $entry_href_search; ?>" id="input-information-href-search" class="form-control" />
              <?php echo $text_example_search; ?><br /><?php echo $text_view; ?>information/information.tpl
            </div>
            </div>
          </div>
          <div class="form-group information-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-information-href-position"><?php echo $entry_position; ?></label>
            <div class="col-sm-10">
              <select name="modification[information_href_position]" id="input-information-href-position" class="form-control">
                <option value="0"<?php if (!$information_href_position) { ?> selected="selected"<?php } ?>><?php echo $text_after; ?></option>
                <option value="1"<?php if ($information_href_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_before; ?></option>
                <option value="2"<?php if ($information_href_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_replace; ?></option>
              </select>
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-information-href-add"><span data-toggle="tooltip" title="<?php echo $help_href_add; ?>"><?php echo $entry_href_add; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[information_href_add]" value="<?php echo $information_href_add; ?>" placeholder="<?php echo $entry_href_add; ?>" id="input-information-href-add" class="form-control" />
              <?php echo $text_example_add; ?>
            </div>
            </div>
          </div>
          <legend><b><?php echo $tab_manufacturer; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-manufacturer-href-status"><span title="<?php echo $help_manufacturer_href_status; ?>" data-toggle="tooltip"><?php echo $entry_href_status; ?></span></label>
            <div class="col-sm-10">
              <select name="manufacturer_href_status" id="input-manufacturer-href-status" class="form-control">
                <option value="1"<?php if ($manufacturer_href_status == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
                <option value="0"<?php if (!$manufacturer_href_status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
              </select>
            </div>
          </div>
          <div class="form-group manufacturer-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-manufacturer-href-index"><span data-toggle="tooltip" title="<?php echo $help_index; ?>"><?php echo $entry_index; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[manufacturer_href_index]" value="<?php echo $manufacturer_href_index; ?>" placeholder="<?php echo $entry_index; ?>" id="input-manufacturer-href-index" class="form-control" />
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-manufacturer-href-search"><span data-toggle="tooltip" title="<?php echo $help_href_search; ?>"><?php echo $entry_href_search; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[manufacturer_href_search]" value="<?php echo $manufacturer_href_search; ?>" placeholder="<?php echo $entry_href_search; ?>" id="input-manufacturer-href-search" class="form-control" />
              <?php echo $text_example_search; ?><br /><?php echo $text_view; ?>product/manufacturer_info.tpl
            </div>
            </div>
          </div>
          <div class="form-group manufacturer-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-manufacturer-href-position"><?php echo $entry_position; ?></label>
            <div class="col-sm-10">
              <select name="modification[manufacturer_href_position]" id="input-manufacturer-href-position" class="form-control">
                <option value="0"<?php if (!$manufacturer_href_position) { ?> selected="selected"<?php } ?>><?php echo $text_after; ?></option>
                <option value="1"<?php if ($manufacturer_href_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_before; ?></option>
                <option value="2"<?php if ($manufacturer_href_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_replace; ?></option>
              </select>
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-manufacturer-href-add"><span data-toggle="tooltip" title="<?php echo $help_href_add; ?>"><?php echo $entry_href_add; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[manufacturer_href_add]" value="<?php echo $manufacturer_href_add; ?>" placeholder="<?php echo $entry_href_add; ?>" id="input-manufacturer-href-add" class="form-control" />
              <?php echo $text_example_add; ?>
            </div>
            </div>
          </div>
          <legend><b><?php echo $tab_product; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-product-href-status"><span title="<?php echo $help_product_href_status; ?>" data-toggle="tooltip"><?php echo $entry_href_status; ?></span></label>
            <div class="col-sm-10">
              <select name="product_href_status" id="input-product-href-status" class="form-control">
                <option value="1"<?php if ($product_href_status == '1') { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
                <option value="0"<?php if (!$product_href_status) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
              </select>
            </div>
          </div>
          <div class="form-group product-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-product-href-index"><span data-toggle="tooltip" title="<?php echo $help_index; ?>"><?php echo $entry_index; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[product_href_index]" value="<?php echo $product_href_index; ?>" placeholder="<?php echo $entry_index; ?>" id="input-product-href-index" class="form-control" />
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-product-href-search"><span data-toggle="tooltip" title="<?php echo $help_href_search; ?>"><?php echo $entry_href_search; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[product_href_search]" value="<?php echo $product_href_search; ?>" placeholder="<?php echo $entry_href_search; ?>" id="input-product-href-search" class="form-control" />
              <?php echo $text_example_search; ?><br /><?php echo $text_view; ?>product/product.tpl
            </div>
            </div>
          </div>
          <div class="form-group product-href-status">
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-product-href-position"><?php echo $entry_position; ?></label>
            <div class="col-sm-10">
              <select name="modification[product_href_position]" id="input-product-href-position" class="form-control">
                <option value="0"<?php if (!$product_href_position) { ?> selected="selected"<?php } ?>><?php echo $text_after; ?></option>
                <option value="1"<?php if ($product_href_position == '1') { ?> selected="selected"<?php } ?>><?php echo $text_before; ?></option>
                <option value="2"<?php if ($product_href_position == '2') { ?> selected="selected"<?php } ?>><?php echo $text_replace; ?></option>
              </select>
            </div>
            </div>
            <div class="col-sm-12">
            <label class="col-sm-2 control-label" for="input-product-href-add"><span data-toggle="tooltip" title="<?php echo $help_href_add; ?>"><?php echo $entry_href_add; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="modification[product_href_add]" value="<?php echo $product_href_add; ?>" placeholder="<?php echo $entry_href_add; ?>" id="input-product-href-add" class="form-control" />
              <?php echo $text_example_add; ?>
            </div>
            </div>
          </div>
          <!-- <legend><b><?php echo $tab_universal; ?></b></legend> -->
          <legend><b><?php echo $tab_other; ?></b></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-href-admin"><span data-toggle="tooltip" title="<?php echo $help_href_admin; ?>"><?php echo $entry_href_admin; ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="href_admin" value="<?php echo $href_admin; ?>" placeholder="<?php echo $entry_href_admin; ?>" id="input-href-admin" class="form-control" />
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
<script type="text/javascript">
<?php foreach ($tabl_array as $tabl) { ?>
	$('select[name="<?php echo $tabl; ?>_href_status"]').change(function() {
		if ($('select[name="<?php echo $tabl; ?>_href_status"]').val() == '1') {
			$('.<?php echo $tabl; ?>-href-status').fadeIn();
			$('.<?php echo $tabl; ?>-href-status [name*="modification"]').removeAttr('disabled');
		} else {
			$('.<?php echo $tabl; ?>-href-status').fadeOut(1);
			$('.<?php echo $tabl; ?>-href-status [name*="modification"]').attr('disabled', 'true');
		}
	});
	$('select[name="<?php echo $tabl; ?>_href_status"]').trigger("change");
<?php } ?>
</script>
<?php echo $footer; ?>