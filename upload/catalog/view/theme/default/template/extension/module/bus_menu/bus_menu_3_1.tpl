<?php if ($debug) { ?>
<script type="text/javascript"><!--
var start = new Date().getTime();
//--></script>
<?php if ($ajax_style) { ?>
<?php echo $debug; ?>
<?php } ?>
<?php } ?>

<?php if ($cats) { ?>
<div class="bus-menu-style-3-1 bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?><?php echo ($lg_status ? false : ' hidden-lg'); ?><?php echo ($md_status ? false : ' hidden-md'); ?><?php echo ($sm_status ? false : ' hidden-sm'); ?><?php echo ($xs_status ? false : ' hidden-xs'); ?>">
<?php if ($heading_title) { ?>
<?php if ($heading_link) { ?>
  <h3><a href="<?php echo $heading_link; ?>" title="<?php echo $heading_title; ?>"><?php if ($heading_ico && $heading_ico_position == 1) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?><img src="<?php echo $heading_ico; ?>" alt="<?php echo $heading_title; ?>"> <?php } else { ?><?php echo $heading_ico; ?> <?php } ?><?php } ?><?php echo $heading_title; ?><?php if ($heading_ico && $heading_ico_position == 2) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?> <img src="<?php echo $heading_ico; ?>" alt="<?php echo $heading_title; ?>"><?php } else { ?> <?php echo $heading_ico; ?><?php } ?><?php } ?></a></h3>
<?php } else { ?>
  <h3><?php if ($heading_ico && $heading_ico_position == 1) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?><img src="<?php echo $heading_ico; ?>"> <?php } else { ?><?php echo $heading_ico; ?> <?php } ?><?php } ?><?php echo $heading_title; ?><?php if ($heading_ico && $heading_ico_position == 2) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?> <img src="<?php echo $heading_ico; ?>"><?php } else { ?> <?php echo $heading_ico; ?><?php } ?><?php } ?></h3>
<?php } ?>
<?php } ?>
  <div class="form-group">
    <select name="cat" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 1)" class="form-control">
      <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats2 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
  <div class="form-group translucent">
    <select <?php if (!isset($cats2) || isset($cats2) && !$cats2) { ?>disabled<?php } ?> name="subcat[1]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 2)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php if (isset($cats2) && $cats2) { ?>
<?php foreach ($cats2 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats3 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php if (isset($cats3) && $cats3) { ?>
  <div class="form-group translucent">
    <select name="subcat[2]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 3)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats3 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats4 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php } ?>
<?php if (isset($cats4) && $cats4) { ?>
  <div class="form-group translucent">
    <select name="subcat[3]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 4)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats4 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats5 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php } ?>
<?php if (isset($cats5) && $cats5) { ?>
  <div class="form-group translucent">
    <select name="subcat[4]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 5)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats5 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats6 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php } ?>
<?php if (isset($cats6) && $cats6) { ?>
  <div class="form-group translucent">
    <select name="subcat[5]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 6)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats6 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats7 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php } ?>
<?php if (isset($cats7) && $cats7) { ?>
  <div class="form-group translucent">
    <select name="subcat[6]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 7)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats7 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats8 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php } ?>
<?php if (isset($cats8) && $cats8) { ?>
  <div class="form-group translucent">
    <select name="subcat[7]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 8)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats8 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats9 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php } ?>
<?php if (isset($cats9) && $cats9) { ?>
  <div class="form-group translucent">
    <select name="subcat[8]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 9)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats9 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats10 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php } ?>
<?php if (isset($cats10) && $cats10) { ?>
  <div class="form-group translucent">
    <select name="subcat[9]" onchange="busMenuGetCat<?php echo $module_id; ?>(this, 10)" class="form-control">
	  <option class="select-placeholder" value=""><?php echo $text_select; ?></option>
<?php foreach ($cats10 as $cat) { ?>
<?php $active = (strpos($nohost_url, $cat['href']) !== false || strpos($host_url, $cat['href']) !== false ? true : false); ?>
      <option value="<?php echo ($cat['children'] ? rawurlencode(json_encode($cat['children'])) : rawurlencode(json_encode($cat['href']))); ?>"<?php if ($active) { ?><?php $cats11 = $cat['children']; ?> selected="selected"<?php } ?>><?php echo $cat['name']; ?></option>
<?php } ?>
    </select>
    <span class="select-info"></span>
  </div>
<?php } ?>
  <div class="btn btn-block disabled" style="display:none;" onClick=""><?php echo $button_continue; ?></div>
<script type="text/javascript"><!--
function busMenuGetCat<?php echo $module_id; ?>(_this, block) {
	var cat = decodeURIComponent(_this.value);
	cat = JSON.parse(cat);

	if (typeof cat === 'string') {
		location = cat.replace('amp;', '');
	} else if (typeof cat === 'object') {
		if (cat) {
			var active;
			var html = '<option value="' + encodeURIComponent(JSON.stringify('{}')) + '"><?php echo $text_select; ?></option>';

			for (var i = 0; i < Object.keys(cat).length; i++) {
				if (cat[i]['children'] > '') {
					html += '<option value="' + encodeURIComponent(JSON.stringify(cat[i]['children'])) + '">' + cat[i]['name'] + '</option>';
				} else {
					html += '<option value="' + encodeURIComponent(JSON.stringify(cat[i]['href'])) + '">' + cat[i]['name'] + '</option>';
				}
			}

			for (var i = block+1; i < 10; i++) {
				$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?> select[name="subcat[' + i + ']"]').parent().remove();
			}

			if (block > 1) {
				if ($('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?> select[name="subcat[' + block + ']"]').length == 0) {
					html_new  = '  <div class="form-group translucent">';
					html_new += '    <select name="subcat[' + block + ']" onchange="busMenuGetCat<?php echo $module_id; ?>(this, ' + (block+1) + ')" class="form-control">';
					html_new += '      <option class="select-placeholder" value=""><?php echo $text_select; ?></option>';
					html_new += '    </select>';
					html_new += '    <span class="select-info"></span>';
					html_new += '  </div>';
					//console.log(html_new);
					$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?> select[name="subcat[' + (block-1) + ']"]').parent().after(html_new);
				}

				delete active;
			}

			$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?> select[name="subcat[' + block + ']"]').attr('disabled', false).css('display', 'block').html(html);
		}
	}
<?php if (1 == 0) { ?>
	var cat = _this.value;
	$.ajax({
		url: 'index.php?route=<?php echo $module_path; ?>/ajax',
		type: 'POST',
		data: {module_id:'<?php echo $module_id; ?>', cat:cat, nohost_url:'<?php echo $nohost_url; ?>', host_url:'<?php echo $host_url; ?>'},
		dataType: 'json',
		beforeSend: function() {
			$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?> select[value="' + cat + '"]').after('<span class="select-info"><i class="fa fa-circle-o-notch fa-spin"></i></span>');
		},
		complete: function() {
			$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?> select[value="' + cat + '"] .fa-spin').remove();
		},
		success: function(json) {
			//html = '<option value=""><?php echo $text_select; ?></option>';
			html = '';

			if (json) {
				for (i = 0; i < json.length; i++) {
					html += '<option value="' + json[i]['table'] + '=' + json[i]['cat_id'] + '">' + json[i]['name'] + '</option>';
				}
			}

			$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?> select[value="' + cat + '"]').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
<?php } ?>
}
//--></script>
</div>
<?php } ?>

<?php if ($ajax_script) { ?>
<?php echo $ajax_script; ?>
<?php } ?>
<?php if ($debug) { ?>
<script type="text/javascript"><!--
var end = new Date().getTime();
$('.bus-menu-debug-theme-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text((end - start)/1000 + ' сек. или ' + (end - start) + ' мс.');
if ($('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> option').length > 0) {
	$('.bus-menu-debug-link-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text($('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> option').length + ' шт.');
} else {
	$('.bus-menu-debug-link-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text('Данных нет =(.');
}
//--></script>
<?php } ?>