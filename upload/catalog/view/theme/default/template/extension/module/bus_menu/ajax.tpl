<?php if ($ajax) { ?>
<?php if ($ajax == 1 || $ajax == 3) { ?>
<div class="bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>"></div>
<?php } ?>
<script type="text/javascript"><!--
<?php if ($ajax == 2 || $ajax == 4) { ?>
var element = document.querySelector('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>');
if (element) {
element.addEventListener('mouseover', function() {
<?php } else { ?>
document.addEventListener('DOMContentLoaded', function() {
<?php } ?>

<?php if (isset($debug_ajax)) { ?>
	var start = new Date().getTime();
<?php } ?>
	$.post('index.php?route=<?php echo $module_path; ?>/ajax', {module_id:'<?php echo $module_id; ?>', cats_vertical_route:'<?php echo $cats_vertical_route; ?>', id_request:'<?php echo $id_request; ?>', nohost_url:'<?php echo $nohost_url; ?>', host_url:'<?php echo $host_url; ?>'}).done(function(data) {
		if (data) {
			var element = document.getElementsByClassName('bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>')[0];
			if (element) {
				//element.innerHTML = data;
				//var newelement = document.createElement('div');
				//newelement.innerHTML = data;
				//element.parentNode.replaceChild(newelement, element);
				//element.replaceWith(data);
			}
			$('.bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').replaceWith(data);
		}
<?php if (isset($debug_ajax)) { ?>
		var end = new Date().getTime();
		var element = document.querySelector('.bus-menu-debug-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>');
		if (element) {
			element.innerHTML = (end - start)/1000 + ' сек. или ' + (end - start) + ' мс.';
		}
<?php } ?>
	});

});
<?php if ($ajax == 2 || $ajax == 4) { ?>
}
<?php } ?>
//--></script>
<?php } ?>