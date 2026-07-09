<?php if ($debug) { ?>
<script type="text/javascript"><!--
var start = new Date().getTime();
//--></script>
<?php if ($ajax_style) { ?>
<?php echo $debug; ?>
<?php } ?>
<?php } ?>

<?php $cats_vertical_count = count($cats_vertical); ?>
<?php $li_height = 41; ?>
<?php $breadcrumb_height = 58; ?>
<?php $alert_height = 58; ?>
<?php if ($ajax_style) { ?>
<?php if ($menu_color || $menu_text_color || $cats_vertical_route) { ?>
<style type="text/css">
<?php if ($menu_color) { ?>#menu-horizontal, #menu-horizontal .see-all:hover, #menu-horizontal .see-all:focus, #menu-horizontal .btn-navbar, #menu-horizontal .btn-navbar:hover, #menu-horizontal .btn-navbar:focus, #menu-horizontal .btn-navbar:active, #menu-horizontal .btn-navbar.disabled, #menu-horizontal .btn-navbar[disabled], .dropdown-menu li > a:hover {background-image:unset;background-color:<?php echo $menu_color; ?>;border-color:<?php echo $menu_color; ?>}<?php } ?>
<?php if ($menu_text_color) { ?>#menu-horizontal .nav > li > a {color:<?php echo $menu_text_color; ?>}<?php } ?>
<?php if ($cats_vertical_route) { ?>
@media (min-width:992px){
	.bus-menu-style-0-1 #menu-vertical .navbar-collapse {display:block !important}
}
@media (min-width:768px){
	<?php if ($cats_vertical_position == 1) { ?>
	#column-left {margin-top:<?php echo $cats_vertical_count * $li_height - $breadcrumb_height; ?>px}
	ul.breadcrumb ~ div.alert ~ div.row #column-left {margin-top:<?php echo $cats_vertical_count * $li_height - $breadcrumb_height - $alert_height; ?>px}
	.common-home #column-left {margin-top:<?php echo $cats_vertical_count * $li_height; ?>px}
	.common-home div.alert ~ div.row #column-left {margin-top:<?php echo $cats_vertical_count * $li_height - $alert_height; ?>px !mportant}
	ul.breadcrumb, div.alert {margin-left:25.6%}
	<?php } ?>
	<?php if ($cats_vertical_position == 2) { ?>
	#column-right {margin-top:<?php echo $cats_vertical_count * $li_height - $breadcrumb_height; ?>px}
	ul.breadcrumb ~ div.alert ~ div.row #column-right {margin-top:<?php echo $cats_vertical_count * $li_height - $breadcrumb_height - $alert_height; ?>px}
	.common-home #column-right {margin-top:<?php echo $cats_vertical_count * $li_height; ?>px}
	.common-home div.alert ~ div.row #column-right {margin-top:<?php echo $cats_vertical_count * $li_height - $alert_height; ?>px}
	ul.breadcrumb, div.alert {margin-right:25.6%}
	<?php } ?>
}
<?php if (!$cats) { ?>
.bus-menu-style-0-1{display:grid;margin-bottom:-60px}
<?php } ?>
<?php } ?>
</style>
<?php } ?>
<div id="bus-menu-background"></div>
<?php if ($cats) { ?>
<div id="bus-menu-line"></div>
<?php } ?>
<?php } ?>

<?php if ($heading_title && 1 == 0) { ?>
<div class="<?php echo ($lg_status ? false : ' hidden-lg'); ?><?php echo ($md_status ? false : ' hidden-md'); ?><?php echo ($sm_status ? false : ' hidden-sm'); ?><?php echo ($xs_status ? false : ' hidden-xs'); ?>">

</div>
<?php } ?>

<?php if ($cats_vertical) { ?>
<?php $class = 'col-sm-9'; ?>
<?php } else { ?>
<?php $class = 'col-sm-12'; ?>
<?php } ?>

<div class="bus-menu-style-0-1<?php if ($ajax_script) { ?> bus-menu-ajax-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?><?php } ?>">
<?php if ($cats || $cats_vertical) { ?>
<div class="row">

<?php if ($cats_vertical) { ?>
<script type="text/javascript"><!--
$(document).ready(function() {
	$('#menu-vertical span.visible-xs').on('click', function() {
		$(this).parent().toggleClass('open');
	});
<?php if ($cats_vertical_route && $ajax_style) { ?>
	// js корректировка отступов модулей вниз от вертикального меню в зависимости от высоты вертикального и горизонтального меню
	setTimeout(function() {
		vertical = $('#menu-vertical .nav').innerHeight();
		horizontal = $('#menu-horizontal .nav').innerHeight();
		li_height = <?php echo $li_height; ?>;
		breadcrumb_height = $('ul.breadcrumb').innerHeight() + parseInt($('ul.breadcrumb').css('margin-top')) + parseInt($('ul.breadcrumb').css('margin-bottom'));
<?php if ($cats_vertical_position == 1) { ?>
		column_name = '#column-left';
<?php } else { ?>
		column_name = '#column-right';
<?php } ?>
		if (window.innerWidth > 767) {
			$(column_name).css('margin-top', vertical);
			if (vertical > horizontal && (horizontal/li_height) > 1.5) {
				$(column_name).css('margin-top', vertical - (horizontal - li_height));
			} else if (horizontal >= vertical) {
				$(column_name).css('margin-top', 0);
			} else if (!horizontal) {
				$(column_name).css('margin-top', vertical + 61);
			}
			if (breadcrumb_height) {
				$(column_name).css('margin-top', parseInt($(column_name).css('margin-top')) - breadcrumb_height);
			}
			column = parseInt($(column_name).css('margin-top'));
			$('body').on("DOMNodeInserted", function (event) {
				// тут условия отслежвания появляющих блоков по названию стиля
				if ($(event.target).hasClass('alert')) {
					//console.log(event.target);
					alert_height = $(event.target).innerHeight() + parseInt($(event.target).css('margin-top')) + parseInt($(event.target).css('margin-bottom'));
					if (alert_height) {
						$(column_name).css('margin-top', column - alert_height);
					}
				}
			});
			$('body').on("DOMNodeRemoved", function (event) {
				// тут условия отслежвания исчезающих блоков по названию стиля
				if ($(event.target).hasClass('alert')) {
					$(column_name).css('margin-top', column);
				}
			});
		}
		if (window.innerWidth > 767 && window.innerWidth < 992) {
			if (!horizontal) {
				$(column_name).css('margin-top', parseInt($(column_name).css('margin-top')) + li_height);
			}
		}
		if (window.innerWidth <= 767) {
			$('.bus-menu-style-0-1').css('margin-bottom', 0);
		}
		//console.log(vertical);
		//console.log(horizontal);
		//console.log(breadcrumb_height);
		//console.log(alert_height);
	}, 50);
<?php } ?>
});
//--></script>
<div class="col-sm-3<?php if ($cats_vertical_position == 2) { ?> bus-menu-right<?php } ?>">
  <nav id="menu-vertical" class="navbar">
    <div class="navbar-header">
	  <?php if ($cats_vertical_title || $cats_vertical_ico) { ?>
	  <?php $active = ($cats_vertical_link == '' || $cats_vertical_link == $nohost_url || $cats_vertical_link == '/' . $nohost_url || $cats_vertical_link == $host_url); ?>
	  <a <?php if (!$active && $cats_vertical_link) { ?>href="<?php echo $cats_vertical_link; ?>"<?php } ?>>
		<span>
		<?php if ($cats_vertical_ico && $cats_vertical_ico_position == 1) { ?><?php if ($cats_vertical_ico == strip_tags($cats_vertical_ico)) { ?><img src="<?php echo $cats_vertical_ico; ?>"><?php } else { ?><?php echo $cats_vertical_ico; ?><?php } ?> <?php } ?>
		<?php echo $cats_vertical_title; ?>
		<?php if ($cats_vertical_ico && $cats_vertical_ico_position == 2) { ?> <?php if ($cats_vertical_ico == strip_tags($cats_vertical_ico)) { ?><img src="<?php echo $cats_vertical_ico; ?>"><?php } else { ?><?php echo $cats_vertical_ico; ?><?php } ?><?php } ?>
		</span>
	  </a>
	  <?php } ?>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-vertical-<?php echo $module_id; ?>"><i class="fa fa-bars" aria-hidden="true"></i></button>
    </div>
    <div class="navbar-collapse navbar-collapse-vertical-<?php echo $module_id; ?> collapse">
      <ul class="nav navbar-nav">
        <?php foreach ($cats_vertical as $cat) { ?>
		<?php $active = ($cat['href'] == "" || $cat['href'] == $nohost_url || $cat['href'] == '/' . $nohost_url || $cat['href'] == $host_url); ?>
        <?php if ($cat['children']) { ?>
		<li class="has_chidren">
		<?php } else { ?>
		<li>
		<?php } ?>
		  <a <?php if (!$active) { ?>href="<?php echo $cat['href']; ?>"<?php } ?> title="<?php echo $cat['title']; ?>">
			<?php if ($cat['children']) { ?><i class="fa fa-chevron-down" aria-hidden="true"></i><?php } ?>
			<?php if ($cat['sticker']) { ?><span class="sticker_position_<?php echo $cat['sticker_position'];?>"><img src="<?php echo $cat['sticker']; ?>" /></span><?php } ?>
			<?php if ($cat['image'] && $cat['image_position'] == 1) { ?><img src="<?php echo $cat['image']; ?>" alt="<?php echo $cat['title']; ?>" title="<?php echo $cat['title']; ?>" /><?php } ?>
			<?php if ($cat['name']) { ?><span><?php echo $cat['name']; ?></span><?php } ?>
			<?php if ($cat['image'] && $cat['image_position'] == 2) { ?><img src="<?php echo $cat['image']; ?>" alt="<?php echo $cat['title']; ?>" title="<?php echo $cat['title']; ?>" /><?php } ?>
			<?php if ($cat['rating'] >= 0 && $cat['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
		    <?php if ($cat['rating'] >= 0 && $cat['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
		  </a>
		  <?php if ($cat['children']) { ?>
		  <span class="dropdown-toggle visible-xs visible-sm"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></span>
		  <?php } ?>

		  <?php if ($cat['children'] && !$ajax_script) { ?>
		  <div class="dropdown-menu">
            <div class="dropdown-inner">
              <?php if ($cat['cover']) { ?><span class="cover_position_<?php echo $cat['cover_position']; ?>"><img src="<?php echo $cat['cover']; ?>" /></span><?php } ?>
              <ul class="list-unstyled">
                <?php foreach ($cat['children'] as $cat2) { ?>
				<?php $active2 = ($cat2['href'] == '' || $cat2['href'] == $nohost_url || $cat2['href'] == '/' . $nohost_url || $cat2['href'] == $host_url); ?>
                <li class="bus-col-lg-<?php echo $cat['column_lg']; ?> bus-col-md-<?php echo $cat['column_md']; ?> bus-col-sm-<?php echo $cat['column_sm']; ?> bus-col-xs-<?php echo $cat['column_xs']; ?>">
				  <a <?php if (!$active2) { ?>href="<?php echo $cat2['href']; ?>"<?php } ?> title="<?php echo $cat2['title']; ?>">
					<i class="fa fa-level-up visible-xs visible-sm" aria-hidden="true"></i>
					<?php if ($cat2['sticker']) { ?><span class="sticker_position_<?php echo $cat2['sticker_position'];?>"><img src="<?php echo $cat2['sticker']; ?>" /></span><?php } ?>
					<?php if ($cat2['image'] && $cat2['image_position'] == 1) { ?><img src="<?php echo $cat2['image']; ?>" alt="<?php echo $cat2['title']; ?>" title="<?php echo $cat2['title']; ?>" /><?php } ?>
					<?php if ($cat2['name']) { ?><span><?php echo $cat2['name']; ?></span><?php } ?>
					<?php if ($cat2['image'] && $cat2['image_position'] == 2) { ?><img src="<?php echo $cat2['image']; ?>" alt="<?php echo $cat2['title']; ?>" title="<?php echo $cat2['title']; ?>" /><?php } ?>
					<?php if ($cat2['rating'] >= 0 && $cat2['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat2['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat2['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
				  </a>
                  <?php if ($cat2['children']) { ?>
                  <span class="dropdown-toggle visible-xs visible-sm"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></span>
                  <div class="dropdown-menu">
                    <div class="dropdown-inner">
                      <ul class="list-unstyled">
                        <?php foreach ($cat2['children'] as $cat3) { ?>
                        <?php $active3 = ($cat3['href'] == '' || $cat3['href'] == $nohost_url || $cat3['href'] == '/' . $nohost_url || $cat3['href'] == $host_url); ?>
                        <li>
                          <a <?php if (!$active3) { ?>href="<?php echo $cat3['href']; ?>"<?php } ?> title="<?php echo $cat3['title']; ?>">
                            &nbsp;-
                            <i class="fa fa-level-up visible-xs visible-sm" aria-hidden="true"></i>
                            <?php if ($cat3['sticker']) { ?><span class="sticker_position_<?php echo $cat3['sticker_position'];?>"><img src="<?php echo $cat3['sticker']; ?>" /></span><?php } ?>
                            <?php if ($cat3['image'] && $cat3['image_position'] == 1) { ?><img src="<?php echo $cat3['image']; ?>" alt="<?php echo $cat3['title']; ?>" title="<?php echo $cat3['title']; ?>" /><?php } ?>
                            <?php if ($cat3['name']) { ?><span><?php echo $cat3['name']; ?></span><?php } ?>
                            <?php if ($cat3['image'] && $cat3['image_position'] == 2) { ?><img src="<?php echo $cat3['image']; ?>" alt="<?php echo $cat3['title']; ?>" title="<?php echo $cat3['title']; ?>" /><?php } ?>
                            <?php if ($cat3['rating'] >= 0 && $cat3['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat3['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat3['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                          </a>
                          <?php if ($cat3['children']) { ?>
                          <span class="dropdown-toggle visible-xs visible-sm"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></span>
                          <div class="dropdown-menu">
                            <div class="dropdown-inner">
                              <ul class="list-unstyled">
                                <?php foreach ($cat3['children'] as $cat4) { ?>
                                <?php $active4 = ($cat4['href'] == '' || $cat4['href'] == $nohost_url || $cat4['href'] == '/' . $nohost_url || $cat4['href'] == $host_url); ?>
                                <li>
                                  <a <?php if (!$active4) { ?>href="<?php echo $cat4['href']; ?>"<?php } ?> title="<?php echo $cat4['title']; ?>">
                                    &nbsp;&nbsp;&nbsp;-
                                    <i class="fa fa-level-up visible-xs visible-sm" aria-hidden="true"></i>
                                    <?php if ($cat4['sticker']) { ?><span class="sticker_position_<?php echo $cat4['sticker_position'];?>"><img src="<?php echo $cat4['sticker']; ?>" /></span><?php } ?>
                                    <?php if ($cat4['image'] && $cat4['image_position'] == 1) { ?><img src="<?php echo $cat4['image']; ?>" alt="<?php echo $cat4['title']; ?>" title="<?php echo $cat4['title']; ?>" /><?php } ?>
                                    <?php if ($cat4['name']) { ?><span><?php echo $cat4['name']; ?></span><?php } ?>
                                    <?php if ($cat4['image'] && $cat4['image_position'] == 2) { ?><img src="<?php echo $cat4['image']; ?>" alt="<?php echo $cat4['title']; ?>" title="<?php echo $cat4['title']; ?>" /><?php } ?>
                                    <?php if ($cat4['rating'] >= 0 && $cat4['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat4['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat4['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                                  </a>
                                  <?php if ($cat4['children']) { ?>
                                  <span class="dropdown-toggle visible-xs visible-sm"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></span>
                                  <div class="dropdown-menu">
                                    <div class="dropdown-inner">
                                      <ul class="list-unstyled">
                                        <?php foreach ($cat4['children'] as $cat5) { ?>
                                        <?php $active5 = ($cat5['href'] == '' || $cat5['href'] == $nohost_url || $cat5['href'] == '/' . $nohost_url || $cat5['href'] == $host_url); ?>
                                        <li>
                                          <a <?php if (!$active5) { ?>href="<?php echo $cat5['href']; ?>"<?php } ?> title="<?php echo $cat5['title']; ?>">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                            <i class="fa fa-level-up visible-xs visible-sm" aria-hidden="true"></i>
                                            <?php if ($cat5['sticker']) { ?><span class="sticker_position_<?php echo $cat5['sticker_position'];?>"><img src="<?php echo $cat5['sticker']; ?>" /></span><?php } ?>
                                            <?php if ($cat5['image'] && $cat5['image_position'] == 1) { ?><img src="<?php echo $cat5['image']; ?>" alt="<?php echo $cat5['title']; ?>" title="<?php echo $cat5['title']; ?>" /><?php } ?>
                                            <?php if ($cat5['name']) { ?><span><?php echo $cat5['name']; ?></span><?php } ?>
                                            <?php if ($cat5['image'] && $cat5['image_position'] == 2) { ?><img src="<?php echo $cat5['image']; ?>" alt="<?php echo $cat5['title']; ?>" title="<?php echo $cat5['title']; ?>" /><?php } ?>
                                            <?php if ($cat5['rating'] >= 0 && $cat5['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat5['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat5['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                                          </a>
                                          <?php if ($cat5['children']) { ?>
                                          <span class="dropdown-toggle visible-xs visible-sm"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></span>
                                          <div class="dropdown-menu">
                                            <div class="dropdown-inner">
                                              <ul class="list-unstyled">
                                                <?php foreach ($cat5['children'] as $cat6) { ?>
                                                <?php $active6 = ($cat6['href'] == '' || $cat6['href'] == $nohost_url || $cat6['href'] == '/' . $nohost_url || $cat6['href'] == $host_url); ?>
                                                <li>
                                                  <a <?php if (!$active6) { ?>href="<?php echo $cat6['href']; ?>"<?php } ?> title="<?php echo $cat6['title']; ?>">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                    <i class="fa fa-level-up visible-xs visible-sm" aria-hidden="true"></i>
                                                    <?php if ($cat6['sticker']) { ?><span class="sticker_position_<?php echo $cat6['sticker_position'];?>"><img src="<?php echo $cat6['sticker']; ?>" /></span><?php } ?>
                                                    <?php if ($cat6['image'] && $cat6['image_position'] == 1) { ?><img src="<?php echo $cat6['image']; ?>" alt="<?php echo $cat6['title']; ?>" title="<?php echo $cat6['title']; ?>" /><?php } ?>
                                                    <?php if ($cat6['name']) { ?><span><?php echo $cat6['name']; ?></span><?php } ?>
                                                    <?php if ($cat6['image'] && $cat6['image_position'] == 2) { ?><img src="<?php echo $cat6['image']; ?>" alt="<?php echo $cat6['title']; ?>" title="<?php echo $cat6['title']; ?>" /><?php } ?>
                                                    <?php if ($cat6['rating'] >= 0 && $cat6['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat6['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat6['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                                                  </a>
                                                  <?php if ($cat6['children']) { ?>
                                                  <span class="dropdown-toggle visible-xs visible-sm"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                  <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                      <ul class="list-unstyled">
                                                        <?php foreach ($cat6['children'] as $cat7) { ?>
                                                        <?php $active7 = ($cat7['href'] == '' || $cat7['href'] == $nohost_url || $cat7['href'] == '/' . $nohost_url || $cat7['href'] == $host_url); ?>
                                                        <li>
                                                          <a <?php if (!$active7) { ?>href="<?php echo $cat7['href']; ?>"<?php } ?> title="<?php echo $cat7['title']; ?>">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                            <i class="fa fa-level-up visible-xs visible-sm" aria-hidden="true"></i>
                                                            <?php if ($cat7['sticker']) { ?><span class="sticker_position_<?php echo $cat7['sticker_position'];?>"><img src="<?php echo $cat7['sticker']; ?>" /></span><?php } ?>
                                                            <?php if ($cat7['image'] && $cat7['image_position'] == 1) { ?><img src="<?php echo $cat7['image']; ?>" alt="<?php echo $cat7['title']; ?>" title="<?php echo $cat7['title']; ?>" /><?php } ?>
                                                            <?php if ($cat7['name']) { ?><span><?php echo $cat7['name']; ?></span><?php } ?>
                                                            <?php if ($cat7['image'] && $cat7['image_position'] == 2) { ?><img src="<?php echo $cat7['image']; ?>" alt="<?php echo $cat7['title']; ?>" title="<?php echo $cat7['title']; ?>" /><?php } ?>
                                                            <?php if ($cat7['rating'] >= 0 && $cat7['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat7['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat7['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                                                          </a>
                                                          <?php if ($cat7['children']) { ?>
                                                          <span class="dropdown-toggle visible-xs visible-sm"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                          <div class="dropdown-menu">
                                                            <div class="dropdown-inner">
                                                              <ul class="list-unstyled">
                                                                <?php foreach ($cat7['children'] as $cat8) { ?>
                                                                <?php $active8 = ($cat8['href'] == '' || $cat8['href'] == $nohost_url || $cat8['href'] == '/' . $nohost_url || $cat8['href'] == $host_url); ?>
                                                                <li>
                                                                  <a <?php if (!$active8) { ?>href="<?php echo $cat8['href']; ?>"<?php } ?> title="<?php echo $cat8['title']; ?>">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                                    <i class="fa fa-level-up visible-xs visible-sm" aria-hidden="true"></i>
                                                                    <?php if ($cat8['sticker']) { ?><span class="sticker_position_<?php echo $cat8['sticker_position'];?>"><img src="<?php echo $cat8['sticker']; ?>" /></span><?php } ?>
                                                                    <?php if ($cat8['image'] && $cat8['image_position'] == 1) { ?><img src="<?php echo $cat8['image']; ?>" alt="<?php echo $cat8['title']; ?>" title="<?php echo $cat8['title']; ?>" /><?php } ?>
                                                                    <?php if ($cat8['name']) { ?><span><?php echo $cat8['name']; ?></span><?php } ?>
                                                                    <?php if ($cat8['image'] && $cat8['image_position'] == 2) { ?><img src="<?php echo $cat8['image']; ?>" alt="<?php echo $cat8['title']; ?>" title="<?php echo $cat8['title']; ?>" /><?php } ?>
                                                                    <?php if ($cat8['rating'] >= 0 && $cat8['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat8['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat8['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                                                                  </a>
                                                                  <?php if ($cat8['children']) { ?>
                                                                  <span class="dropdown-toggle visible-xs visible-sm"><i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                                  <div class="dropdown-menu">
                                                                    <div class="dropdown-inner">
                                                                      <ul class="list-unstyled">
                                                                        <?php foreach ($cat8['children'] as $cat9) { ?>
                                                                        <?php $active4 = ($cat9['href'] == '' || $cat9['href'] == $nohost_url || $cat9['href'] == '/' . $nohost_url || $cat9['href'] == $host_url); ?>
                                                                        <li>
                                                                          <a <?php if (!$active4) { ?>href="<?php echo $cat9['href']; ?>"<?php } ?> title="<?php echo $cat9['title']; ?>">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                                                            <i class="fa fa-level-up visible-xs visible-sm" aria-hidden="true"></i>
                                                                            <?php if ($cat9['sticker']) { ?><span class="sticker_position_<?php echo $cat9['sticker_position'];?>"><img src="<?php echo $cat9['sticker']; ?>" /></span><?php } ?>
                                                                            <?php if ($cat9['image'] && $cat9['image_position'] == 1) { ?><img src="<?php echo $cat9['image']; ?>" alt="<?php echo $cat9['title']; ?>" title="<?php echo $cat9['title']; ?>" /><?php } ?>
                                                                            <?php if ($cat9['name']) { ?><span><?php echo $cat9['name']; ?></span><?php } ?>
                                                                            <?php if ($cat9['image'] && $cat9['image_position'] == 2) { ?><img src="<?php echo $cat9['image']; ?>" alt="<?php echo $cat9['title']; ?>" title="<?php echo $cat9['title']; ?>" /><?php } ?>
                                                                            <?php if ($cat9['rating'] >= 0 && $cat9['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat9['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat9['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                                                                          </a>
                                                                        </li>
                                                                        <?php } ?>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                  <?php } ?>
                                                                </li>
                                                                <?php } ?>
                                                              </ul>
                                                            </div>
                                                          </div>
                                                          <?php } ?>
                                                        </li>
                                                        <?php } ?>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                  <?php } ?>
                                                </li>
                                                <?php } ?>
                                              </ul>
                                            </div>
                                          </div>
                                          <?php } ?>
                                        </li>
                                        <?php } ?>
                                      </ul>
                                    </div>
                                  </div>
                                  <?php } ?>
                                </li>
                                <?php } ?>
                              </ul>
                            </div>
                          </div>
                          <?php } ?>
                        </li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                  <?php } ?>
				</li>
                <?php } ?>
              </ul>
            </div>
		  </div>
		  <?php } ?>

        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</div>
<?php } ?>

<div class="<?php echo $class; ?>">
<?php if ($cats) { ?>
  <nav id="menu-horizontal" class="">
    <div class="navbar-header">
	  <?php if ($heading_title || $heading_ico) { ?>
	  <?php $active = ($heading_link == '' || $heading_link == $nohost_url || $heading_link == '/' . $nohost_url || $heading_link == $host_url); ?>
	  <a <?php if (!$active && $heading_link) { ?>href="<?php echo $heading_link; ?>"<?php } ?> title="<?php echo $heading_title; ?>" class="visible-xs">
		<span>
		<?php if ($heading_ico && $heading_ico_position == 1) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?><img src="<?php echo $heading_ico; ?>" alt="<?php echo $heading_title; ?>"><?php } else { ?><?php echo $heading_ico; ?><?php } ?> <?php } ?>
		<?php echo $heading_title; ?>
		<?php if ($heading_ico && $heading_ico_position == 2) { ?> <?php if ($heading_ico == strip_tags($heading_ico)) { ?><img src="<?php echo $heading_ico; ?>" alt="<?php echo $heading_title; ?>"><?php } else { ?><?php echo $heading_ico; ?><?php } ?><?php } ?>
		</span>
	  </a>
	  <?php } ?>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-<?php echo $module_id; ?>"><i class="fa fa-bars"></i></button>
    </div>
    <div class="navbar-collapse navbar-collapse-<?php echo $module_id; ?> collapse">
      <ul class="nav navbar-nav">
        <?php foreach ($cats as $cat) { ?>
		<?php $active = ($cat['href'] == '' || $cat['href'] == $nohost_url || $cat['href'] == '/' . $nohost_url || $cat['href'] == $host_url); ?>
        <li class="dropdown">
		  <a <?php if (!$active) { ?>href="<?php echo $cat['href']; ?>"<?php } ?> title="<?php echo $cat['title']; ?>" class="<?php if ($active) { ?>active <?php } ?><?php if ($cat['children']) { ?>dropdown-toggle <?php } ?>"<?php if ($cat['children']) { ?> data-toggle="dropdown"<?php } ?>>
			<?php if ($cat['sticker']) { ?><span class="sticker_position_<?php echo $cat['sticker_position'];?>"><img src="<?php echo $cat['sticker']; ?>" /></span><?php } ?>
			<?php if ($cat['image'] && $cat['image_position'] == 1) { ?><img src="<?php echo $cat['image']; ?>" alt="<?php echo $cat['title']; ?>" title="<?php echo $cat['title']; ?>" /><?php } ?>
			<?php if ($cat['name']) { ?><span><?php echo $cat['name']; ?></span><?php } ?>
			<?php if ($cat['image'] && $cat['image_position'] == 2) { ?><img src="<?php echo $cat['image']; ?>" alt="<?php echo $cat['title']; ?>" title="<?php echo $cat['title']; ?>" /><?php } ?>
			<?php if ($cat['rating'] >= 0 && $cat['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
		  </a>

		  <?php if ($cat['children'] && !$ajax_script) { ?>
          <div class="dropdown-menu">
            <div class="dropdown-inner">
              <?php if ($cat['cover']) { ?><span class="cover_position_<?php echo $cat['cover_position']; ?>"><img src="<?php echo $cat['cover']; ?>" /></span><?php } ?>
			  <ul class="list-unstyled">
                <?php foreach ($cat['children'] as $cat2) { ?>
				<?php $active2 = ($cat2['href'] == '' || $cat2['href'] == $nohost_url || $cat2['href'] == '/' . $nohost_url || $cat2['href'] == $host_url); ?>
				<div class="bus-col-lg-<?php echo $cat['column_lg']; ?> bus-col-md-<?php echo $cat['column_md']; ?> bus-col-sm-<?php echo $cat['column_sm']; ?> bus-col-xs-<?php echo $cat['column_xs']; ?>">
				<li>
				  <a <?php if (!$active2) { ?>href="<?php echo $cat2['href']; ?>"<?php } ?> title="<?php echo $cat2['title']; ?>"<?php if ($active2) { ?> class="active"<?php } ?>>
					<?php if ($cat2['sticker']) { ?><span class="sticker_position_<?php echo $cat2['sticker_position'];?>"><img src="<?php echo $cat2['sticker']; ?>" /></span><?php } ?>
					<?php if ($cat2['image'] && $cat2['image_position'] == 1) { ?><img src="<?php echo $cat2['image']; ?>" alt="<?php echo $cat2['title']; ?>" title="<?php echo $cat2['title']; ?>" /><?php } ?>
					<?php if ($cat2['name']) { ?><span><?php echo $cat2['name']; ?></span><?php } ?>
					<?php if ($cat2['image'] && $cat2['image_position'] == 2) { ?><img src="<?php echo $cat2['image']; ?>" alt="<?php echo $cat2['title']; ?>" title="<?php echo $cat2['title']; ?>" /><?php } ?>
					<?php if ($cat2['rating'] >= 0 && $cat2['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat2['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat2['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
				  </a>
				</li>
				  <?php foreach ($cat2['children'] as $cat3) { ?>
				  <?php $active3 = ($cat3['href'] == '' || $cat3['href'] == $nohost_url || $cat3['href'] == '/' . $nohost_url || $cat3['href'] == $host_url); ?>
                  <li>
					<a <?php if (!$active3) { ?>href="<?php echo $cat3['href']; ?>"<?php } ?> title="<?php echo $cat3['title']; ?>"<?php if ($active3) { ?> class="active"<?php } ?>>
					  &nbsp;-
					  <?php if ($cat3['sticker']) { ?><span class="sticker_position_<?php echo $cat3['sticker_position'];?>"><img src="<?php echo $cat3['sticker']; ?>" /></span><?php } ?>
					  <?php if ($cat3['image'] && $cat3['image_position'] == 1) { ?><img src="<?php echo $cat3['image']; ?>" alt="<?php echo $cat3['title']; ?>" title="<?php echo $cat3['title']; ?>" /><?php } ?>
					  <?php if ($cat3['name']) { ?><span><?php echo $cat3['name']; ?></span><?php } ?>
					  <?php if ($cat3['image'] && $cat3['image_position'] == 2) { ?><img src="<?php echo $cat3['image']; ?>" alt="<?php echo $cat3['title']; ?>" title="<?php echo $cat3['title']; ?>" /><?php } ?>
					  <?php if ($cat3['rating'] >= 0 && $cat3['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat3['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat3['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
					</a>
				  </li>
					<?php foreach ($cat3['children'] as $cat4) { ?>
					<?php $active4 = ($cat4['href'] == '' || $cat4['href'] == $nohost_url || $cat4['href'] == '/' . $nohost_url || $cat4['href'] == $host_url); ?>
                    <li>
					  <a <?php if (!$active4) { ?>href="<?php echo $cat4['href']; ?>"<?php } ?> title="<?php echo $cat4['title']; ?>"<?php if ($active4) { ?> class="active"<?php } ?>>
						&nbsp;&nbsp;&nbsp;-
						<?php if ($cat4['sticker']) { ?><span class="sticker_position_<?php echo $cat4['sticker_position'];?>"><img src="<?php echo $cat4['sticker']; ?>" /></span><?php } ?>
						<?php if ($cat4['image'] && $cat4['image_position'] == 1) { ?><img src="<?php echo $cat4['image']; ?>" alt="<?php echo $cat4['title']; ?>" title="<?php echo $cat4['title']; ?>" /><?php } ?>
						<?php if ($cat4['name']) { ?><span><?php echo $cat4['name']; ?></span><?php } ?>
						<?php if ($cat4['image'] && $cat4['image_position'] == 2) { ?><img src="<?php echo $cat4['image']; ?>" alt="<?php echo $cat4['title']; ?>" title="<?php echo $cat4['title']; ?>" /><?php } ?>
						<?php if ($cat4['rating'] >= 0 && $cat4['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat4['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat4['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
					  </a>
                    </li>
                      <?php foreach ($cat4['children'] as $cat5) { ?>
                      <?php $active5 = ($cat5['href'] == '' || $cat5['href'] == $nohost_url || $cat5['href'] == '/' . $nohost_url || $cat5['href'] == $host_url); ?>
                      <li>
                        <a <?php if (!$active5) { ?>href="<?php echo $cat5['href']; ?>"<?php } ?> title="<?php echo $cat5['title']; ?>"<?php if ($active5) { ?> class="active"<?php } ?>>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                          <?php if ($cat5['sticker']) { ?><span class="sticker_position_<?php echo $cat5['sticker_position'];?>"><img src="<?php echo $cat5['sticker']; ?>" /></span><?php } ?>
                          <?php if ($cat5['image'] && $cat5['image_position'] == 1) { ?><img src="<?php echo $cat5['image']; ?>" alt="<?php echo $cat5['title']; ?>" title="<?php echo $cat5['title']; ?>" /><?php } ?>
                          <?php if ($cat5['name']) { ?><span><?php echo $cat5['name']; ?></span><?php } ?>
                          <?php if ($cat5['image'] && $cat5['image_position'] == 2) { ?><img src="<?php echo $cat5['image']; ?>" alt="<?php echo $cat5['title']; ?>" title="<?php echo $cat5['title']; ?>" /><?php } ?>
                          <?php if ($cat5['rating'] >= 0 && $cat5['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat5['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat5['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                        </a>
                      </li>
                        <?php foreach ($cat5['children'] as $cat6) { ?>
                        <?php $active6 = ($cat6['href'] == '' || $cat6['href'] == $nohost_url || $cat6['href'] == '/' . $nohost_url || $cat6['href'] == $host_url); ?>
                        <li>
					      <a <?php if (!$active6) { ?>href="<?php echo $cat6['href']; ?>"<?php } ?> title="<?php echo $cat6['title']; ?>"<?php if ($active6) { ?> class="active"<?php } ?>>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                            <?php if ($cat6['sticker']) { ?><span class="sticker_position_<?php echo $cat6['sticker_position'];?>"><img src="<?php echo $cat6['sticker']; ?>" /></span><?php } ?>
                            <?php if ($cat6['image'] && $cat6['image_position'] == 1) { ?><img src="<?php echo $cat6['image']; ?>" alt="<?php echo $cat6['title']; ?>" title="<?php echo $cat6['title']; ?>" /><?php } ?>
                            <?php if ($cat6['name']) { ?><span><?php echo $cat6['name']; ?></span><?php } ?>
                            <?php if ($cat6['image'] && $cat6['image_position'] == 2) { ?><img src="<?php echo $cat6['image']; ?>" alt="<?php echo $cat6['title']; ?>" title="<?php echo $cat6['title']; ?>" /><?php } ?>
                            <?php if ($cat6['rating'] >= 0 && $cat6['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat6['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat6['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                          </a>
                        </li>
                          <?php foreach ($cat6['children'] as $cat7) { ?>
                          <?php $active7 = ($cat7['href'] == '' || $cat7['href'] == $nohost_url || $cat7['href'] == '/' . $nohost_url || $cat7['href'] == $host_url); ?>
                          <li>
                            <a <?php if (!$active7) { ?>href="<?php echo $cat7['href']; ?>"<?php } ?> title="<?php echo $cat7['title']; ?>"<?php if ($active7) { ?> class="active"<?php } ?>>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                              <?php if ($cat7['sticker']) { ?><span class="sticker_position_<?php echo $cat7['sticker_position'];?>"><img src="<?php echo $cat7['sticker']; ?>" /></span><?php } ?>
                              <?php if ($cat7['image'] && $cat7['image_position'] == 1) { ?><img src="<?php echo $cat7['image']; ?>" alt="<?php echo $cat7['title']; ?>" title="<?php echo $cat7['title']; ?>" /><?php } ?>
                              <?php if ($cat7['name']) { ?><span><?php echo $cat7['name']; ?></span><?php } ?>
                              <?php if ($cat7['image'] && $cat7['image_position'] == 2) { ?><img src="<?php echo $cat7['image']; ?>" alt="<?php echo $cat7['title']; ?>" title="<?php echo $cat7['title']; ?>" /><?php } ?>
                              <?php if ($cat7['rating'] >= 0 && $cat7['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat7['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat7['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                            </a>
                          </li>
                            <?php foreach ($cat7['children'] as $cat8) { ?>
                            <?php $active8 = ($cat8['href'] == '' || $cat8['href'] == $nohost_url || $cat8['href'] == '/' . $nohost_url || $cat8['href'] == $host_url); ?>
                            <li>
                              <a <?php if (!$active8) { ?>href="<?php echo $cat8['href']; ?>"<?php } ?> title="<?php echo $cat8['title']; ?>"<?php if ($active8) { ?> class="active"<?php } ?>>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                <?php if ($cat8['sticker']) { ?><span class="sticker_position_<?php echo $cat8['sticker_position'];?>"><img src="<?php echo $cat8['sticker']; ?>" /></span><?php } ?>
                                <?php if ($cat8['image'] && $cat8['image_position'] == 1) { ?><img src="<?php echo $cat8['image']; ?>" alt="<?php echo $cat8['title']; ?>" title="<?php echo $cat8['title']; ?>" /><?php } ?>
                                <?php if ($cat8['name']) { ?><span><?php echo $cat8['name']; ?></span><?php } ?>
                                <?php if ($cat8['image'] && $cat8['image_position'] == 2) { ?><img src="<?php echo $cat8['image']; ?>" alt="<?php echo $cat8['title']; ?>" title="<?php echo $cat8['title']; ?>" /><?php } ?>
                                <?php if ($cat8['rating'] >= 0 && $cat8['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat8['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat8['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                              </a>
                            </li>
                              <?php foreach ($cat8['children'] as $cat9) { ?>
                              <?php $active9 = ($cat9['href'] == '' || $cat9['href'] == $nohost_url || $cat9['href'] == '/' . $nohost_url || $cat9['href'] == $host_url); ?>
                              <li>
                                <a <?php if (!$active9) { ?>href="<?php echo $cat9['href']; ?>"<?php } ?> title="<?php echo $cat9['title']; ?>"<?php if ($active9) { ?> class="active"<?php } ?>>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
                                  <?php if ($cat9['sticker']) { ?><span class="sticker_position_<?php echo $cat9['sticker_position'];?>"><img src="<?php echo $cat9['sticker']; ?>" /></span><?php } ?>
                                  <?php if ($cat9['image'] && $cat9['image_position'] == 1) { ?><img src="<?php echo $cat9['image']; ?>" alt="<?php echo $cat9['title']; ?>" title="<?php echo $cat9['title']; ?>" /><?php } ?>
                                  <?php if ($cat9['name']) { ?><span><?php echo $cat9['name']; ?></span><?php } ?>
                                  <?php if ($cat9['image'] && $cat9['image_position'] == 2) { ?><img src="<?php echo $cat9['image']; ?>" alt="<?php echo $cat9['title']; ?>" title="<?php echo $cat9['title']; ?>" /><?php } ?>
                                  <?php if ($cat9['rating'] >= 0 && $cat9['text_rating']) { ?><div class="rating text-center" title="<?php echo $cat9['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat9['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
                                </a>
                              </li>
                              <?php } ?>
                            <?php } ?>
                          <?php } ?>
                        <?php } ?>
                      <?php } ?>
                    <?php } ?>
                  <?php } ?>
				</div>
                <?php } ?>
              </ul>
            </div>
			<a <?php if (!$active) { ?>href="<?php echo $cat['href']; ?>"<?php } ?> class="see-all"><?php echo $text_all; ?> <?php echo $cat['name']; ?></a>
          </div>
          <?php } ?>

        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
<?php } ?>
</div>

</div>
<?php } ?>
</div>

<?php if ($ajax_script) { ?>
<?php echo $ajax_script; ?>
<?php } ?>
<?php if ($debug) { ?>
<script type="text/javascript"><!--
var end = new Date().getTime();
$('.bus-menu-debug-theme-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text((end - start)/1000 + ' сек. или ' + (end - start) + ' мс.');
if ($('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> li').length > 0) {
	$('.bus-menu-debug-link-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text($('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> li').length + ' шт.');
} else {
	$('.bus-menu-debug-link-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text('Данных нет =(.');
}
//--></script>
<?php } ?>