<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <a id="insert" data-toggle="tooltip" title="<?php echo $button_insert; ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <a href="<?php echo $clear; ?>" data-toggle="tooltip" title="<?php echo $button_clear_cache; ?>" class="btn btn-default"><i class="fa fa-refresh"></i></a>
        <a id="delete" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
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
    <?php if ($info) { ?>
    <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $info; ?>
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
        <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo $heading_title; ?></h3>
      </div>
      <div class="panel-body">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_seourl" data-toggle="tab"><?php echo $tab_seourl; ?></a></li>
        <li><a href="#tab_seotag" data-toggle="tab"><?php echo $tab_seotag; ?></a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_seourl">
          <div class="well">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-filter-query"><?php echo $entry_query; ?></label>
                  <input type="text" name="filter_query" value="<?php echo $filter_query; ?>" placeholder="<?php echo $entry_query; ?>" id="input-filter-query" class="form-control" />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-filter-keyword"><?php echo $entry_keyword; ?></label>
                  <input type="text" name="filter_keyword" value="<?php echo $filter_keyword; ?>" placeholder="<?php echo $entry_keyword; ?>" id="input-filter-keyword" class="form-control" />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-filter-additional"><?php echo $entry_additional; ?></label>
                  <select name="filter_additional" id="input-filter-additional" class="form-control">
                    <option value=""<?php if (!$filter_additional) { ?> selected="selected"<?php } ?>><?php echo $text_all; ?></option>
                    <option value="0"<?php if ($filter_additional == 0) { ?> selected="selected"<?php } ?>><?php echo $text_additional_1; ?></option>
                    <option value="1"<?php if ($filter_additional == 1) { ?> selected="selected"<?php } ?>><?php echo $text_additional_2; ?></option>
                    <option value="2"<?php if ($filter_additional == 2) { ?> selected="selected"<?php } ?>><?php echo $text_additional_3; ?></option>
                  </select>
                </div>
              </div>
              <div class="col-sm-12 text-right">
                <button type="button" id="button-url-filter" class="btn btn-primary"><i class="fa fa-filter"></i> <?php echo $button_filter; ?></button>
                <button type="button" id="button-url-clear-filter" class="btn btn-default"><i class="fa fa-times"></i><span class="hidden-sm"> <?php echo $button_clear; ?></span></button>
              </div>
            </div>
          </div>
          <div id="form-url-add" class="well" style="<?php if (!$error_keyword_url) { ?>display:none;<?php } ?>">
            <div class="row">
              <form action="<?php echo $save; ?>" method="post" enctype="multipart/form-data">
                <div class="col-sm-6">
                  <div class="form-group required">
                    <label class="control-label" for="input-query"><span data-toggle="tooltip" title="<?php echo $help_query; ?>"><?php echo $entry_query; ?></span>:</label>
                    <span data-toggle="tooltip" title="<?php echo $help_query; ?>"><input type="text" name="query" value="<?php echo $query; ?>" class="form-control" /></span>
                    <?php if ($error_query_url) { ?>
                    <div class="text-danger"><?php echo $error_query_url; ?></div>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group required">
                    <label class="control-label" for="input-keyword"><span data-toggle="tooltip" title="<?php echo $help_keyword; ?>"><?php echo $entry_keyword; ?></span>:</label>
                    <span data-toggle="tooltip" title="<?php echo $help_keyword; ?>"><input type="text" name="keyword" value="<?php echo $keyword; ?>" class="form-control" /></span>
                    <?php if ($error_keyword_url) { ?>
                    <div class="text-danger"><?php echo $error_keyword_url; ?></div>
                    <?php } ?>
                  </div>
                  <div class="pull-right">
                    <a onclick="$('#form-url-add form').submit();" class="button"><span data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></span></a>
                    <a onclick="fnCancel();" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
                    <input type="hidden" name="url_alias_id" value="<?php echo $url_alias_id; ?>">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <form id="form-url-delete" action="<?php echo $delete ?>" method="post" enctype="multipart/form-data">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td width="1" style="text-align: center;"><input type="checkbox" onclick="$('#form-url-delete input[name*=\'selected\']').attr('checked', this.checked);" /></td>
                    <td class="center">
                      <?php if ($sort == 'ua.query') { ?>
                      <a href="<?php echo $sort_query_url; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_query; ?></a>
                      <?php } else { ?>
                      <a href="<?php echo $sort_query_url; ?>"><?php echo $column_query; ?></a>
                      <?php } ?>
                    </td>
                    <td class="left">
                      <?php if ($sort == 'ua.keyword') { ?>
                      <a href="<?php echo $sort_keyword_url; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_keyword; ?></a>
                      <?php } else { ?>
                      <a href="<?php echo $sort_keyword_url; ?>"><?php echo $column_keyword; ?></a>
                      <?php } ?>
                    </td>
                    <td class="right"><?php echo $column_action; ?></td>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($url_aliases) { ?>
                  <?php foreach ($url_aliases as $url_alias) { ?>
                  <tr class="tr<?php echo $url_alias['url_alias_id']; ?>">
                    <td style="text-align: center;">
                      <?php if ($url_alias['selected_url']) { ?>
                      <input type="checkbox" name="selected_url[]" value="<?php echo $url_alias['url_alias_id']; ?>" checked="checked" />
                      <?php } else { ?>
                      <input type="checkbox" name="selected_url[]" value="<?php echo $url_alias['url_alias_id']; ?>" />
                      <?php } ?>
                    </td>
                    <td class="left"><?php echo $url_alias['query']; ?></td>
                    <td class="left"><?php echo $url_alias['keyword']; ?></td>
                    <td class="text-right"><a onclick="editUrl(<?php echo $url_alias['url_alias_id']; ?>)" data-toggle="tooltip" title="<?php echo $button_edit; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></a></td>
                  </tr>
                  <?php } ?>
                  <?php } else { ?>
                  <tr>
                    <td class="center" colspan="4"><?php echo $text_no_results; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </form>
          <div class="row">
            <div class="col-sm-6 text-left"><?php echo $pagination_url; ?></div>
            <div class="col-sm-6 text-right"><?php echo $results_url; ?></div>
          </div>
        </div>
        <div class="tab-pane" id="tab_seotag">
          <div class="well">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-filter-store"><?php echo $entry_store; ?></label>
                  <select name="filter_store" id="input-filter-store" class="form-control">
                    <option value=""><?php echo $text_all; ?></option>
                    <?php foreach ($stores as $store) { ?>
                    <option value="<?php echo $store['store_id']; ?>"<?php if ($store['store_id'] == $filter_store) { ?> selected="selected"<?php } ?>><?php echo $store['name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-filter-route"><?php echo $entry_route; ?></label>
                  <input type="text" name="filter_query" value="<?php echo $filter_query; ?>" placeholder="<?php echo $entry_route; ?>" id="input-filter-route" class="form-control" />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label class="control-label" for="input-filter-keyword"><?php echo $entry_keyword; ?></label>
                  <input type="text" name="filter_keyword" value="<?php echo $filter_keyword; ?>" placeholder="<?php echo $entry_keyword; ?>" id="input-filter-keyword" class="form-control" />
                </div>
              </div>
              <div class="col-sm-12 text-right">
                <button type="button" id="button-tag-filter" class="btn btn-primary"><i class="fa fa-filter"></i> <?php echo $button_filter; ?></button>
                <button type="button" id="button-tag-clear-filter" class="btn btn-default"><i class="fa fa-times"></i><span class="hidden-sm"> <?php echo $button_clear; ?></span></button>
              </div>
            </div>
          </div>
          <div id="form-tag-add" class="well" style="<?php if (!$error_keyword_tag) { ?>display:none;<?php } ?>">
            <div class="row">
              <form action="<?php echo $save; ?>" method="post" enctype="multipart/form-data">
                <div class="col-sm-12">
                  <div class="meta">
                    <div class="form-group required">
                      <label class="control-label" for="input-query"><span title="<?php echo $help_route; ?>"><?php echo $entry_route; ?></span>:</label>
                      <span data-toggle="tooltip" title="<?php echo $help_route; ?>"><input type="text" name="query" value="<?php echo $query; ?>" class="form-control" /></span>
                      <?php if ($error_query_tag) { ?>
                      <div class="text-danger"><?php echo $error_query_tag; ?></div>
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-view"><span title="<?php echo $help_view; ?>"><?php echo $entry_view; ?></span>:</label>
                      <span data-toggle="tooltip" title="<?php echo $help_view; ?>"><input type="text" name="view" value="<?php echo $view; ?>" class="form-control" /></span>
                    </div>
                    <ul class="tab-language nav nav-tabs">
                      <?php foreach ($languages as $language) { ?>
                      <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                      <?php } ?>
                    </ul>
                    <div class="tab-content">
                      <?php foreach ($languages as $language) { ?>
                      <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
                        <div class="form-group">
                          <label class="control-label" for="input-meta-h1<?php echo $language['language_id']; ?>"><?php echo $entry_meta_h1; ?></label>
                          <input type="text" name="meta[<?php echo $language['language_id']; ?>][meta_h1]" value="<?php echo isset($meta[$language['language_id']]) ? $meta[$language['language_id']]['meta_h1'] : ''; ?>" placeholder="<?php echo $entry_meta_h1; ?>" id="input-meta-title<?php echo $language['language_id']; ?>" class="form-control" />
                          <?php if (isset($error_meta_h1[$language['language_id']])) { ?>
                          <div class="text-danger"><?php echo $error_meta_h1[$language['language_id']]; ?></div>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-meta-title<?php echo $language['language_id']; ?>"><?php echo $entry_meta_title; ?></label>
                          <input type="text" name="meta[<?php echo $language['language_id']; ?>][meta_title]" value="<?php echo isset($meta[$language['language_id']]) ? $meta[$language['language_id']]['meta_title'] : ''; ?>" placeholder="<?php echo $entry_meta_title; ?>" id="input-meta-title<?php echo $language['language_id']; ?>" class="form-control" />
                          <?php if (isset($error_meta_title[$language['language_id']])) { ?>
                          <div class="text-danger"><?php echo $error_meta_title[$language['language_id']]; ?></div>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-meta-description<?php echo $language['language_id']; ?>"><?php echo $entry_meta_description; ?></label>
                          <textarea name="meta[<?php echo $language['language_id']; ?>][meta_description]" rows="5" placeholder="<?php echo $entry_meta_description; ?>" id="input-meta-description<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($meta[$language['language_id']]) ? $meta[$language['language_id']]['meta_description'] : ''; ?></textarea>
                          <?php if (isset($error_meta_description[$language['language_id']])) { ?>
                          <div class="text-danger"><?php echo $error_meta_description[$language['language_id']]; ?></div>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-meta-keyword<?php echo $language['language_id']; ?>"><?php echo $entry_meta_keyword; ?></label>
                          <textarea name="meta[<?php echo $language['language_id']; ?>][meta_keyword]" rows="5" placeholder="<?php echo $entry_meta_keyword; ?>" id="input-meta-keyword<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($meta[$language['language_id']]) ? $meta[$language['language_id']]['meta_keyword'] : ''; ?></textarea>
                          <?php if (isset($error_meta_keyword[$language['language_id']])) { ?>
                          <div class="text-danger"><?php echo $error_meta_keyword[$language['language_id']]; ?></div>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-description<?php echo $language['language_id']; ?>"><?php echo $entry_description; ?></label>  <?php echo $text_description; ?>
                          <textarea name="meta[<?php echo $language['language_id']; ?>][description]" placeholder="<?php echo $entry_description; ?>" id="input-description<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($meta[$language['language_id']]) ? $meta[$language['language_id']]['description'] : ''; ?></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-description_bottom<?php echo $language['language_id']; ?>"><?php echo $entry_description_bottom; ?></label>  <?php echo $text_description_bottom; ?>
                          <textarea name="meta[<?php echo $language['language_id']; ?>][description_bottom]" placeholder="<?php echo $entry_description_bottom; ?>" id="input-description_bottom<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($meta[$language['language_id']]) ? $meta[$language['language_id']]['description_bottom'] : ''; ?></textarea>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-keyword"><span title="<?php echo $help_keyword; ?>"><?php echo $entry_keyword; ?></span>:</label>
                      <span data-toggle="tooltip" title="<?php echo $help_keyword; ?>"><input type="text" name="keyword" value="<?php echo $keyword; ?>" class="form-control" /></span>
                      <?php if ($error_keyword_tag) { ?>
                      <div class="text-danger"><?php echo $error_keyword_tag; ?></div>
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label"><?php echo $entry_store; ?></label>
                      <div class="well well-sm" style="height: 150px; overflow: auto;">
                        <?php foreach ($stores as $store) { ?>
                        <div class="checkbox">
                          <label>
                            <?php if (in_array($store['store_id'], $store_id)) { ?>
                            <input type="checkbox" name="store[]" value="<?php echo $store['store_id']; ?>" checked="checked" />
                            <?php echo $store['name']; ?>
                            <?php } else { ?>
                            <input type="checkbox" name="store[]" value="<?php echo $store['store_id']; ?>" />
                            <?php echo $store['name']; ?>
                            <?php } ?>
                          </label>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-status"><?php echo $entry_status; ?></label>
                      <select name="status" id="input-status" class="form-control">
                        <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                        <option value="0"><?php echo $text_disabled; ?></option>
                      </select>
                    </div>
                  </div>
                  <div class="pull-right">
                    <a onclick="$('#form-tag-add form').submit();" class="button"><span data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></span></a>
                    <a onclick="fnCancel();" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
                    <input type="hidden" name="seo_tag_id" value="<?php echo $seo_tag_id; ?>">
                  </div>
                </div>
              </form>
            </div>
          </div>
          <form id="form-tag-delete" action="<?php echo $delete ?>" method="post" enctype="multipart/form-data">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td width="1" style="text-align: center;"><input type="checkbox" onclick="$('#form-tag-delete input[name*=\'selected\']').attr('checked', this.checked);" /></td>
                    <td class="center">
                      <?php if ($sort == 'st.store') { ?>
                      <a href="<?php echo $sort_store; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_store; ?></a>
                      <?php } else { ?>
                      <a href="<?php echo $sort_store; ?>"><?php echo $column_store; ?></a>
                      <?php } ?>
                    </td>
                    <td class="center">
                      <?php if ($sort == 'st.query') { ?>
                      <a href="<?php echo $sort_query_tag; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_route; ?></a>
                      <?php } else { ?>
                      <a href="<?php echo $sort_query_tag; ?>"><?php echo $column_route; ?></a>
                      <?php } ?>
                    </td>
                    <td class="left">
                      <?php if ($sort == 'st.keyword') { ?>
                      <a href="<?php echo $sort_keyword_tag; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_keyword; ?></a>
                      <?php } else { ?>
                      <a href="<?php echo $sort_keyword_tag; ?>"><?php echo $column_keyword; ?></a>
                      <?php } ?>
                    </td>
                    <td class="right"><?php echo $column_action; ?></td>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($seo_tags) { ?>
                  <?php foreach ($seo_tags as $seo_tag) { ?>
                  <tr class="tr<?php echo $seo_tag['seo_tag_id']; ?>">
                    <td style="text-align: center;">
                      <?php if ($seo_tag['selected_tag']) { ?>
                      <input type="checkbox" name="selected_tag[]" value="<?php echo $seo_tag['seo_tag_id']; ?>" checked="checked" />
                      <?php } else { ?>
                      <input type="checkbox" name="selected_tag[]" value="<?php echo $seo_tag['seo_tag_id']; ?>" />
                      <?php } ?>
                    </td>
                    <td class="left">
                      <?php foreach ($seo_tag['store'] as $key => $store) { ?>
                      <?php if ($key) { ?>,<br /><?php } ?>
                      <a href="<?php echo $store['url']; ?>index.php?route=<?php echo $seo_tag['query']; ?>" rel="noreferrer noopener" target="_blank"><?php echo $store['name']; ?></a>
                      <?php } ?>
                    </td>
                    <td class="left"><?php echo $seo_tag['query']; ?></td>
                    <td class="left"><?php echo $seo_tag['keyword']; ?></td>
                    <td class="text-right"><a onclick="editTag(<?php echo $seo_tag['seo_tag_id']; ?>)" data-toggle="tooltip" title="<?php echo $button_edit; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></a></td>
                  </tr>
                  <div class="meta<?php echo $seo_tag['seo_tag_id']; ?>" style="display:none">
                    <div class="form-group required">
                      <label class="control-label" for="input-query-tag"><span title="<?php echo $help_route; ?>"><?php echo $entry_route; ?></span>:</label>
                      <span data-toggle="tooltip" title="<?php echo $help_route; ?>"><input type="text" name="query" value="<?php echo $seo_tag['query']; ?>" class="form-control" /></span>
                      <?php if ($error_query_tag) { ?>
                      <div class="text-danger"><?php echo $error_query_tag; ?></div>
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-view-tag"><span title="<?php echo $help_view; ?>"><?php echo $entry_view; ?></span>:</label>
                      <span data-toggle="tooltip" title="<?php echo $help_view; ?>"><input type="text" name="view" value="<?php echo $seo_tag['view']; ?>" class="form-control" /></span>
                    </div>
                    <ul class="tab-language nav nav-tabs">
                      <?php foreach ($languages as $language) { ?>
                      <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
                      <?php } ?>
                    </ul>
                    <div class="tab-content">
                      <?php foreach ($languages as $language) { ?>
                      <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
                        <div class="form-group">
                          <label class="control-label" for="input-meta-h1<?php echo $language['language_id']; ?>"><?php echo $entry_meta_h1; ?></label>
                          <input type="text" name="meta[<?php echo $language['language_id']; ?>][meta_h1]" value="<?php echo isset($seo_tag['meta'][$language['language_id']]) ? $seo_tag['meta'][$language['language_id']]['meta_h1'] : ''; ?>" placeholder="<?php echo $entry_meta_h1; ?>" id="input-meta-title<?php echo $language['language_id']; ?>" class="form-control" />
                          <?php if (isset($error_meta_h1[$language['language_id']])) { ?>
                          <div class="text-danger"><?php echo $error_meta_h1[$language['language_id']]; ?></div>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-meta-title<?php echo $language['language_id']; ?>"><?php echo $entry_meta_title; ?></label>
                          <input type="text" name="meta[<?php echo $language['language_id']; ?>][meta_title]" value="<?php echo isset($seo_tag['meta'][$language['language_id']]) ? $seo_tag['meta'][$language['language_id']]['meta_title'] : ''; ?>" placeholder="<?php echo $entry_meta_title; ?>" id="input-meta-title<?php echo $language['language_id']; ?>" class="form-control" />
                          <?php if (isset($error_meta_title[$language['language_id']])) { ?>
                          <div class="text-danger"><?php echo $error_meta_title[$language['language_id']]; ?></div>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-meta-description<?php echo $language['language_id']; ?>"><?php echo $entry_meta_description; ?></label>
                          <textarea name="meta[<?php echo $language['language_id']; ?>][meta_description]" rows="5" placeholder="<?php echo $entry_meta_description; ?>" id="input-meta-description<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($seo_tag['meta'][$language['language_id']]) ? $seo_tag['meta'][$language['language_id']]['meta_description'] : ''; ?></textarea>
                          <?php if (isset($error_meta_description[$language['language_id']])) { ?>
                          <div class="text-danger"><?php echo $error_meta_description[$language['language_id']]; ?></div>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-meta-keyword<?php echo $language['language_id']; ?>"><?php echo $entry_meta_keyword; ?></label>
                          <textarea name="meta[<?php echo $language['language_id']; ?>][meta_keyword]" rows="5" placeholder="<?php echo $entry_meta_keyword; ?>" id="input-meta-keyword<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($seo_tag['meta'][$language['language_id']]) ? $seo_tag['meta'][$language['language_id']]['meta_keyword'] : ''; ?></textarea>
                          <?php if (isset($error_meta_keyword[$language['language_id']])) { ?>
                          <div class="text-danger"><?php echo $error_meta_keyword[$language['language_id']]; ?></div>
                          <?php } ?>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-description<?php echo $language['language_id']; ?>"><?php echo $entry_description; ?></label> <?php echo $text_description; ?>
                          <textarea name="meta[<?php echo $language['language_id']; ?>][description]" placeholder="<?php echo $entry_description; ?>" id="input-description<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($seo_tag['meta'][$language['language_id']]) ? $seo_tag['meta'][$language['language_id']]['description'] : ''; ?></textarea>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="input-description_bottom<?php echo $language['language_id']; ?>"><?php echo $entry_description_bottom; ?></label> <?php echo $text_description_bottom; ?>
                          <textarea name="meta[<?php echo $language['language_id']; ?>][description_bottom]" placeholder="<?php echo $entry_description_bottom; ?>" id="input-description_bottom<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset($seo_tag['meta'][$language['language_id']]) ? $seo_tag['meta'][$language['language_id']]['description_bottom'] : ''; ?></textarea>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-keyword"><span title="<?php echo $help_keyword; ?>"><?php echo $entry_keyword; ?></span>:</label>
                      <span data-toggle="tooltip" title="<?php echo $help_keyword; ?>"><input type="text" name="keyword" value="<?php echo $seo_tag['keyword']; ?>" class="form-control" /></span>
                       <?php if ($error_keyword_tag) { ?>
                      <div class="text-danger"><?php echo $error_keyword_tag; ?></div>
                      <?php } ?>
                    </div>
                    <div class="form-group">
                      <label class="control-label"><?php echo $entry_store; ?></label>
                      <div class="well well-sm" style="height: 150px; overflow: auto;">
                        <?php foreach ($stores as $store) { ?>
                        <div class="checkbox">
                          <label>
                            <?php if (in_array($store['store_id'], $seo_tag['store_id'])) { ?>
                            <input type="checkbox" name="store[]" value="<?php echo $store['store_id']; ?>" checked="checked" />
                            <?php echo $store['name']; ?>
                            <?php } else { ?>
                            <input type="checkbox" name="store[]" value="<?php echo $store['store_id']; ?>" />
                            <?php echo $store['name']; ?>
                            <?php } ?>
                          </label>
                        </div>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-status"><?php echo $entry_status; ?></label>
                      <select name="status" id="input-status" class="form-control">
                        <?php if ($seo_tag['status']) { ?>
                        <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                        <option value="0"><?php echo $text_disabled; ?></option>
                        <?php } else { ?>
                        <option value="1"><?php echo $text_enabled; ?></option>
                        <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <?php } ?>
                  <?php } else { ?>
                  <tr>
                    <td class="center" colspan="5"><?php echo $text_no_results; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </form>
          <div class="row">
            <div class="col-sm-6 text-left"><?php echo $pagination_tag; ?></div>
            <div class="col-sm-6 text-right"><?php echo $results_tag; ?></div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-url-filter').on('click', function() {
	url = 'index.php?route=tool/seomanager&token=<?php echo $token; ?>';

	var filter_query = $('#tab_seourl input[name=\'filter_query\']').val();

	if (filter_query) {
		url += '&filter_query=' + encodeURIComponent(filter_query);
	}

	var filter_keyword = $('#tab_seourl input[name=\'filter_keyword\']').val();

	if (filter_keyword) {
		url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
	}

	var filter_additional = $('#tab_seourl select[name=\'filter_additional\']').val();

	if (filter_additional) {
		url += '&filter_additional=' + encodeURIComponent(filter_additional);
	}

	url +='#tab_seourl';

	location = url;
});

$('#button-url-clear-filter').on('click', function() {
	location = 'index.php?route=tool/seomanager&token=<?php echo $token; ?>';
});

$('#button-tag-filter').on('click', function() {
	url = 'index.php?route=tool/seomanager&token=<?php echo $token; ?>';

	var filter_store = $('#tab_seotag select[name=\'filter_store\']').val();

	if (filter_store) {
		url += '&filter_store=' + encodeURIComponent(filter_store);
	}

	var filter_query = $('#tab_seotag input[name=\'filter_query\']').val();

	if (filter_query) {
		url += '&filter_query=' + encodeURIComponent(filter_query);
	}

	var filter_keyword = $('#tab_seotag input[name=\'filter_keyword\']').val();

	if (filter_keyword) {
		url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
	}

	url +='#tab_seotag';

	location = url;
});

$('#button-tag-clear-filter').on('click', function() {
	location = 'index.php?route=tool/seomanager&token=<?php echo $token; ?>#tab_seotag';
});
//--></script> 
<script type="text/javascript"><!--
function editUrl(url_alias_id) {
	$('#form-url-add input[name="query"]').val($('#form-url-delete .tr' + url_alias_id + ' td:eq(1)').text());
	$('#form-url-add input[name="keyword"]').val($('#form-url-delete .tr' + url_alias_id + ' td:eq(2)').text());
	$('#form-url-add input[name="url_alias_id"]').val(url_alias_id);
	$('.active #form-url-add').show();
	$('#form-url-add input[name="query"]').focus();

	return false;
}

function editTag(seo_tag_id) {
	$('#form-tag-add .meta').html($('#form-tag-delete .meta'+seo_tag_id).html());
	$('#form-tag-add input[name="seo_tag_id"]').val(seo_tag_id);
	$('.active #form-tag-add').show();
	$('#form-tag-add .tab-language a:first').tab('show');
	$('#form-tag-add input[name="query"]').focus();
	loadSummernote(true);

	return false;
}

function fnCancel() {
	if ($('.active #form-url-add').length) {
		$('#form-url-add').hide();
		$('#form-url-add input[name="query"]').val('');
		$('#form-url-add input[name="keyword"]').val('');
		$('#form-url-add input[name="url_alias_id"]').val('0');
	}

	if ($('.active #form-tag-add').length) {
		$('#form-tag-add').hide();
		$('#form-tag-add input').val('');
		$('#form-tag-add textarea').val('');
		$('#form-tag-add input[name="store[]"]').removeAttr('checked');
		$('#form-tag-add input[name="seo_tag_id"]').val('0');
		if (typeof (deleteCodeViewBus) === "function") {
			deleteCodeViewBus();
		}
	}

	return false;
}

$('#insert').click(function() {
	fnCancel();

	if ($('.active #form-url-add').length) {
		$('#form-url-add').show();
	}

	if ($('.active #form-tag-add').length) {
		$('#form-tag-add').show();
		$('#form-tag-add .tab-language a:first').tab('show');
		loadSummernote(true);
	}

	return false;
});

$(document).ready(function() {
	$('#delete').click(function() {
		if (!confirm('Удаление невозможно отменить! Вы уверены, что хотите это сделать?')) {
			return false;
		} else {
			if ($('#form-url-delete input[name="selected_url[]"]:checked').length) {
				$('#form-url-delete').submit();
			} else {
				$('#form-tag-delete').submit();
			}
		}
	});

<?php if ($error_query_url || $error_keyword_url) { ?>
	hash = window.location.hash;

	if (hash != '#tab_seourl') {
		location.hash = '';
		location = location.href.replace('#', '') + '#tab_seourl';
	}

	$('#form-url-add').show();
<?php } ?>
<?php foreach ($languages as $language) { ?>
<?php if (isset($error_meta_h1[$language['language_id']]) || isset($error_meta_title[$language['language_id']]) || isset($error_meta_description[$language['language_id']]) || isset($error_meta_keyword[$language['language_id']])) { ?>
	hash = window.location.hash;

	if (hash != '#tab_seotag') {
		location.hash = '';
		location = location.href.replace('#', '') + '#tab_seotag';
	}

	$('#form-tag-add').show();
	$('#form-tag-add .tab-language a:first').tab('show');
	loadSummernote();
<?php } ?>	  
<?php } ?>
<?php if ($error_query_tag || $error_keyword_tag) { ?>
	hash = window.location.hash;

	if (hash != '#tab_seotag') {
		location.hash = '';
		location = location.href.replace('#', '') + '#tab_seotag';
	}

	$('#form-tag-add').show();
	$('#form-tag-add .tab-language a:first').tab('show');
	loadSummernote();
<?php } ?>

	hash = location.hash;
	$('.nav-tabs a[href="' + hash + '"]').tab('show');
});

function loadSummernote(button) {
	if ($('.seomanager-summernote').length) {
		$('.seomanager-summernote').remove();
	}

	$('#form-tag-add textarea[name*="[description]"]').addClass('summernote');
	$('#form-tag-add textarea[name*="[description_bottom]"]').addClass('summernote');

	script = document.createElement("script");
	script.className = 'seomanager-summernote';
	script.src = 'view/javascript/summernote/summernote.js';
	script.type = "text/javascript";
	script.async = false;
	document.getElementsByTagName('head')[0].appendChild(script);

	style = document.createElement("link");
	style.className = 'seomanager-summernote';
	style.href = 'view/javascript/summernote/summernote.css';
	style.type = "text/css";
	style.rel = 'stylesheet';
	document.getElementsByTagName('head')[0].appendChild(style);

	script = document.createElement("script");
	script.className = 'seomanager-summernote';
	script.src = 'view/javascript/summernote/opencart.js';
	script.type = "text/javascript";
	script.async = false;
	document.getElementsByTagName('head')[0].appendChild(script);

	if (button && typeof addCodeViewBus === 'function') {
		setTimeout(function() {
			addCodeViewBus();
		}, 500);
	}
}
//--></script>
<?php echo $footer; ?>
