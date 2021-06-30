<?php if ($debug) { ?>
<script type="text/javascript"><!--
var start = new Date().getTime();
//--></script>
<?php if ($ajax_style) { ?>
<?php echo $debug; ?>
<?php } ?>
<?php } ?>

<?php if ($cats) { ?>
<div class="<?php if ($ajax_script) { ?> bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?><?php } ?>">
<?php if ($heading_title) { ?>
<div class="<?php echo ($lg_status ? false : ' hidden-lg'); ?><?php echo ($md_status ? false : ' hidden-md'); ?><?php echo ($sm_status ? false : ' hidden-sm'); ?><?php echo ($xs_status ? false : ' hidden-xs'); ?>">
<?php if ($heading_link) { ?>
<h3><a href="<?php echo $heading_link; ?>" title="<?php echo $heading_title; ?>"><?php if ($heading_ico && $heading_ico_position == 1) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?><img src="<?php echo $heading_ico; ?>" alt="<?php echo $heading_title; ?>"> <?php } else { ?><?php echo $heading_ico; ?> <?php } ?><?php } ?><?php echo $heading_title; ?><?php if ($heading_ico && $heading_ico_position == 2) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?> <img src="<?php echo $heading_ico; ?>" alt="<?php echo $heading_title; ?>"><?php } else { ?> <?php echo $heading_ico; ?><?php } ?><?php } ?></a></h3>
<?php } else { ?>
<h3><?php if ($heading_ico && $heading_ico_position == 1) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?><img src="<?php echo $heading_ico; ?>"> <?php } else { ?><?php echo $heading_ico; ?> <?php } ?><?php } ?><?php echo $heading_title; ?><?php if ($heading_ico && $heading_ico_position == 2) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?> <img src="<?php echo $heading_ico; ?>"><?php } else { ?> <?php echo $heading_ico; ?><?php } ?><?php } ?></h3>
<?php } ?>
</div>
<?php } ?>
<div class="bus-menu-style-2-3 row<?php echo ($lg_status ? false : ' hidden-lg'); ?><?php echo ($md_status ? false : ' hidden-md'); ?><?php echo ($sm_status ? false : ' hidden-sm'); ?><?php echo ($xs_status ? false : ' hidden-xs'); ?><?php if (array_column($cats, 'children')) { ?> covers<?php } ?>">
  <?php foreach ($cats as $cat) { ?>
  <div class="bus-col-lg-<?php echo $lg; ?> bus-col-md-<?php echo $md; ?> bus-col-sm-<?php echo $sm; ?> bus-col-xs-<?php echo $xs; ?>">
	<div class="bus-menu_thumbnail">
	  <div class="caption">
		<?php if ($cat['rating'] >= 0 && $cat['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
		<?php if ($cat['description']) { ?><span><?php echo $cat['description']; ?></span><?php } ?>
		<?php if ($cat['children'] && !$ajax_script) { ?>
		<ul class="list-unstyled">
		  <?php foreach ($cat['children'] as $cat2) { ?>
		  <li class="bus-col-lg-<?php echo $cat['column_lg']; ?> bus-col-md-<?php echo $cat['column_md']; ?> bus-col-sm-<?php echo $cat['column_sm']; ?> bus-col-xs-<?php echo $cat['column_xs']; ?>">
			<h5>
			  <a href="<?php echo $cat2['href']; ?>" title="<?php echo $cat2['title']; ?>" >
				<?php if ($cat2['image'] && $cat2['image_position'] == 1) { ?><img src="<?php echo $cat2['image']; ?>" alt="<?php echo $cat2['title']; ?>" title="<?php echo $cat2['title']; ?>" class="img-child-responsive" /><?php } ?>
				<?php if ($cat2['sticker']) { ?><span class="sticker_position_<?php echo $cat2['sticker_position'];?>"><img src="<?php echo $cat2['sticker']; ?>" /></span><?php } ?>
				<?php if ($cat2['name']) { ?><span><?php echo $cat2['name']; ?></span><?php } ?>
				<?php if ($cat2['image'] && $cat2['image_position'] == 2) { ?><img src="<?php echo $cat2['image']; ?>" alt="<?php echo $cat2['title']; ?>" title="<?php echo $cat2['title']; ?>" class="img-child-responsive" /><?php } ?>
			  </a>
			</h5>
			<?php if ($cat2['rating'] >= 0 && $cat2['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat2['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat2['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
		  </li>
		  <?php } ?>
		</ul>
		<?php } ?>
	  </div>
	  <?php if ($cat['image']) { ?><?php if ($cat['name']) { ?><!--noindex--><?php } ?><a href="<?php echo $cat['href']; ?>"><img src="<?php echo $cat['image']; ?>" title="<?php echo $cat['title']; ?>" alt="<?php echo $cat['title']; ?>" class="img-responsive" /></a><?php if ($cat['name']) { ?><!--/noindex--><?php } ?><?php } ?>
	  <?php if ($cat['name']) { ?><h4><a href="<?php echo $cat['href']; ?>" title="<?php echo $cat['title']; ?>" class="category_name parent" ><span><?php echo $cat['name']; ?></span></a></h4><?php } ?>
	</div>
  </div>
  <?php } ?>
</div>
<script><!--
$(document).ready(function() {
    $('.bus-menu_thumbnail').hover(
        function(){
		    //.fadeIn(287).slideDown(200) - выбор эффекта появления
            $(this).find('.caption').fadeIn(200);
            //$(this).find('.caption').slideDown(200);
        },
        function(){
		    //.fadeOut(205).slideUp(200) - выбор эффекта исчезновения
            $(this).find('.caption').fadeOut(200);
            //$(this).find('.caption').slideUp(200);
        }
    ); 
});
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
if ($('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> h4 a').length > 0) {
	$('.bus-menu-debug-link-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text($('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> h4 a').length + $('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> h5 a').length + ' шт.');
} else {
	$('.bus-menu-debug-link-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text('Данных нет =(.');
}
//--></script>
<?php } ?>