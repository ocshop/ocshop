<div class="blog-search blog-search<?php echo $module_id; ?> input-group">
  <input type="text" name="search" value="<?php echo $search; ?>" placeholder="<?php echo $text_search; ?>" class="form-control input-lg" />
  <span class="input-group-btn">
    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
  </span>
</div>
<script type="text/javascript"><!--
$(document).ready(function() {
	/* Blog Search */
	$('.blog-search<?php echo $module_id; ?> input[name=\'search\']').parent().find('button').on('click', function() {
		var url = $('base').attr('href') + 'index.php?route=blog/search';

		var value = $('.blog-search<?php echo $module_id; ?> input[name=\'search\']').val();

		if (value) {
			url += '&search=' + encodeURIComponent(value);
		}

		location = url;
	});

	$('.blog-search<?php echo $module_id; ?> input[name=\'search\']').on('keydown', function(e) {
		if (e.keyCode == 13) {
			$('.blog-search<?php echo $module_id; ?> input[name=\'search\']').parent().find('button').trigger('click');
		}
	});
});
//--></script>