<?php if ($ajax) { ?>
<?php if ($ajax == 1 || $ajax == 3) { ?>
<div class="bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>"></div>
<?php } ?>
<script type="text/javascript"><!--
<?php if ($ajax == 2 || $ajax == 4) { ?>
$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').hover(function() {
//bus_menu_ajax_<?php echo $module_id; ?>_<?php echo $type; ?>_<?php echo $design; ?> = Array;
//bus_menu_ajax_<?php echo $module_id; ?>_<?php echo $type; ?>_<?php echo $design; ?>['start'] = false;
//$(document).on('mouseover scroll', function() {
	//if (bus_menu_ajax_<?php echo $module_id; ?>_<?php echo $type; ?>_<?php echo $design; ?>['start'] == false) {
<?php } else { ?>
$(document).ready(function() {
<?php } ?>
<?php if (isset($debug_ajax)) { ?>
	var start = new Date().getTime();
<?php } ?>
	$.post('index.php?route=extension/module/bus_menu/ajax', {module_id:'<?php echo $module_id; ?>', cats_vertical_route:'<?php echo $cats_vertical_route; ?>', nohost_url:'<?php echo $nohost_url; ?>', host_url:'<?php echo $host_url; ?>'}).done(function(data) {
		if (data) {
			$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').replaceWith(function(){return data;});
		}
<?php if (isset($debug_ajax)) { ?>
		var end = new Date().getTime();
		$('.bus-menu-debug-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text((end - start)/1000 + ' сек. или ' + (end - start) + ' мс.');
<?php } ?>
	});
	
<?php if ($ajax == 2 || $ajax == 4) { ?>
		//bus_menu_ajax_<?php echo $module_id; ?>_<?php echo $type; ?>_<?php echo $design; ?>['start'] = true;
	//}
});
<?php } else { ?>
});
<?php } ?>
//--></script>
<?php } ?>