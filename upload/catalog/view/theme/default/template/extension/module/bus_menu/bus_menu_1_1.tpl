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
<div class="<?php //echo ($lg_status ? false : ' hidden-lg'); ?><?php //echo ($md_status ? false : ' hidden-md'); ?><?php //echo ($sm_status ? false : ' hidden-sm'); ?><?php //echo ($xs_status ? false : ' hidden-xs'); ?>">
<?php if ($heading_link) { ?>
<h3><a href="<?php echo $heading_link; ?>" title="<?php echo $heading_title; ?>"><?php if ($heading_ico && $heading_ico_position == 1) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?><img src="<?php echo $heading_ico; ?>" alt="<?php echo $heading_title; ?>"> <?php } else { ?><?php echo $heading_ico; ?> <?php } ?><?php } ?><?php echo $heading_title; ?><?php if ($heading_ico && $heading_ico_position == 2) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?> <img src="<?php echo $heading_ico; ?>" alt="<?php echo $heading_title; ?>"><?php } else { ?> <?php echo $heading_ico; ?><?php } ?><?php } ?></a></h3>
<?php } else { ?>
<h3><?php if ($heading_ico && $heading_ico_position == 1) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?><img src="<?php echo $heading_ico; ?>"> <?php } else { ?><?php echo $heading_ico; ?> <?php } ?><?php } ?><?php echo $heading_title; ?><?php if ($heading_ico && $heading_ico_position == 2) { ?><?php if ($heading_ico == strip_tags($heading_ico)) { ?> <img src="<?php echo $heading_ico; ?>"><?php } else { ?> <?php echo $heading_ico; ?><?php } ?><?php } ?></h3>
<?php } ?>
</div>
<?php } ?>
<div class="bus-menu-style-1-1 list-group">
  <?php foreach ($cats as $cat) { ?>
	<?php $active = ($cat['href'] != '' && $cat['href'] == $nohost_url || $cat['href'] == '/' . $nohost_url || $cat['href'] == $host_url); ?>
	<a <?php if (!$active) { ?>href="<?php echo $cat['href']; ?>"<?php } ?> title="<?php echo $cat['title']; ?>" class="list-group-item<?php if ($active) { ?> active<?php } ?>">
	  <?php if ($cat['sticker']) { ?><span class="sticker_position_<?php echo $cat['sticker_position'];?>"><img src="<?php echo $cat['sticker']; ?>" /></span><?php } ?>
	  <?php if ($cat['image'] && $cat['image_position'] == 1) { ?><img src="<?php echo $cat['image']; ?>" alt="<?php echo $cat['title']; ?>" title="<?php echo $cat['title']; ?>" /><?php } ?>
	  <?php if ($cat['name']) { ?><span><?php echo $cat['name']; ?></span><?php } ?>
	  <?php if ($cat['image'] && $cat['image_position'] == 2) { ?><img src="<?php echo $cat['image']; ?>" alt="<?php echo $cat['title']; ?>" title="<?php echo $cat['title']; ?>" /><?php } ?>
	  <?php if ($cat['rating'] >= 0 && $cat['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
	</a>
	<?php if (!$ajax_script) { ?>
	<?php foreach ($cat['children'] as $cat2) { ?>
	  <?php $active2 = ($cat2['href'] != '' && $cat2['href'] == $nohost_url || $cat2['href'] == '/' . $nohost_url || $cat2['href'] == $host_url); ?>
	  <a <?php if (!$active2) { ?>href="<?php echo $cat2['href']; ?>"<?php } ?> title="<?php echo $cat2['title']; ?>" class="list-group-item<?php if ($active2) { ?> active<?php } ?>">
		&nbsp;-
		<?php if ($cat2['sticker']) { ?><span class="sticker_position_<?php echo $cat2['sticker_position'];?>"><img src="<?php echo $cat2['sticker']; ?>" /></span><?php } ?>
		<?php if ($cat2['image'] && $cat2['image_position'] == 1) { ?><img src="<?php echo $cat2['image']; ?>" alt="<?php echo $cat2['title']; ?>" title="<?php echo $cat2['title']; ?>" />       <?php } ?>
		<?php if ($cat2['name']) { ?><span><?php echo $cat2['name']; ?></span><?php } ?>
		<?php if ($cat2['image'] && $cat2['image_position'] == 2) { ?><img src="<?php echo $cat2['image']; ?>" alt="<?php echo $cat2['title']; ?>" title="<?php echo $cat2['title']; ?>" /><?php } ?>
	    <?php if ($cat2['rating'] >= 0 && $cat2['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat2['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat2['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
	  </a>

	  <?php foreach ($cat2['children'] as $cat3) { ?>
		<?php $active3 = ($cat3['href'] != '' && $cat3['href'] == $nohost_url || $cat3['href'] == '/' . $nohost_url || $cat3['href'] == $host_url); ?>
		<a <?php if (!$active3) { ?>href="<?php echo $cat3['href']; ?>"<?php } ?> title="<?php echo $cat3['title']; ?>" class="list-group-item<?php if ($active3) { ?> active<?php } ?>">
		  &nbsp;&nbsp;-
		  <?php if ($cat3['sticker']) { ?><span class="sticker_position_<?php echo $cat3['sticker_position'];?>"><img src="<?php echo $cat3['sticker']; ?>" /></span><?php } ?>
		  <?php if ($cat3['image'] && $cat3['image_position'] == 1) { ?><img src="<?php echo $cat3['image']; ?>" alt="<?php echo $cat3['title']; ?>" title="<?php echo $cat3['title']; ?>" /><?php } ?>
		  <?php if ($cat3['name']) { ?><span><?php echo $cat3['name']; ?></span><?php } ?>
		  <?php if ($cat3['image'] && $cat3['image_position'] == 2) { ?><img src="<?php echo $cat3['image']; ?>" alt="<?php echo $cat3['title']; ?>" title="<?php echo $cat3['title']; ?>" /><?php } ?>
		  <?php if ($cat3['rating'] >= 0 && $cat3['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat3['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat3['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
		</a>

		<?php foreach ($cat3['children'] as $cat4) { ?>
		  <?php $active4 = ($cat4['href'] != '' && $cat4['href'] == $nohost_url || $cat4['href'] == '/' . $nohost_url || $cat4['href'] == $host_url); ?>
		  <a <?php if (!$active4) { ?>href="<?php echo $cat4['href']; ?>"<?php } ?> title="<?php echo $cat4['title']; ?>" class="list-group-item<?php if ($active4) { ?> active<?php } ?>">
		    &nbsp;&nbsp;&nbsp;-
			<?php if ($cat4['sticker']) { ?><span class="sticker_position_<?php echo $cat4['sticker_position'];?>"><img src="<?php echo $cat4['sticker']; ?>" /></span><?php } ?>
		    <?php if ($cat4['image'] && $cat4['image_position'] == 1) { ?><img src="<?php echo $cat4['image']; ?>" alt="<?php echo $cat4['title']; ?>" title="<?php echo $cat4['title']; ?>" /><?php } ?>
			<?php if ($cat4['name']) { ?><span><?php echo $cat4['name']; ?></span><?php } ?>
			<?php if ($cat4['image'] && $cat4['image_position'] == 2) { ?><img src="<?php echo $cat4['image']; ?>" alt="<?php echo $cat4['title']; ?>" title="<?php echo $cat4['title']; ?>" /><?php } ?>
			<?php if ($cat4['rating'] >= 0 && $cat4['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat4['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat4['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
		  </a>

		  <?php foreach ($cat4['children'] as $cat5) { ?>
			<?php $active5 = ($cat5['href'] != '' && $cat5['href'] == $nohost_url || $cat5['href'] == '/' . $nohost_url || $cat5['href'] == $host_url); ?>
			<a <?php if (!$active5) { ?>href="<?php echo $cat5['href']; ?>"<?php } ?> title="<?php echo $cat5['title']; ?>" class="list-group-item<?php if ($active5) { ?> active<?php } ?>">
			  &nbsp;&nbsp;&nbsp;&nbsp;-
			  <?php if ($cat5['sticker']) { ?><span class="sticker_position_<?php echo $cat5['sticker_position'];?>"><img src="<?php echo $cat5['sticker']; ?>" /></span><?php } ?>
			  <?php if ($cat5['image'] && $cat5['image_position'] == 1) { ?><img src="<?php echo $cat5['image']; ?>" alt="<?php echo $cat5['title']; ?>" title="<?php echo $cat5['title']; ?>" /><?php } ?>
			  <?php if ($cat5['name']) { ?><span><?php echo $cat5['name']; ?></span><?php } ?>
			  <?php if ($cat5['image'] && $cat5['image_position'] == 2) { ?><img src="<?php echo $cat5['image']; ?>" alt="<?php echo $cat5['title']; ?>" title="<?php echo $cat5['title']; ?>" /><?php } ?>
			  <?php if ($cat5['rating'] >= 0 && $cat5['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat5['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat5['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
			</a>

			<?php foreach ($cat5['children'] as $cat6) { ?>
			  <?php $active6 = ($cat6['href'] != '' && $cat6['href'] == $nohost_url || $cat6['href'] == '/' . $nohost_url || $cat6['href'] == $host_url); ?>
			  <a <?php if (!$active6) { ?>href="<?php echo $cat6['href']; ?>"<?php } ?> title="<?php echo $cat6['title']; ?>" class="list-group-item<?php if ($active6) { ?> active<?php } ?>">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
				<?php if ($cat6['sticker']) { ?><span class="sticker_position_<?php echo $cat6['sticker_position'];?>"><img src="<?php echo $cat6['sticker']; ?>" /></span><?php } ?>
				<?php if ($cat6['image'] && $cat6['image_position'] == 1) { ?><img src="<?php echo $cat6['image']; ?>" alt="<?php echo $cat6['title']; ?>" title="<?php echo $cat6['title']; ?>" /><?php } ?>
				<?php if ($cat6['name']) { ?><span><?php echo $cat6['name']; ?></span><?php } ?>
				<?php if ($cat6['image'] && $cat6['image_position'] == 2) { ?><img src="<?php echo $cat6['image']; ?>" alt="<?php echo $cat6['title']; ?>" title="<?php echo $cat6['title']; ?>" /><?php } ?>
			    <?php if ($cat6['rating'] >= 0 && $cat6['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat6['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat6['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
			  </a>

			  <?php foreach ($cat6['children'] as $cat7) { ?>
			    <?php $active7 = ($cat7['href'] != '' && $cat7['href'] == $nohost_url || $cat7['href'] == '/' . $nohost_url || $cat7['href'] == $host_url); ?>
			    <a <?php if (!$active7) { ?>href="<?php echo $cat7['href']; ?>"<?php } ?> title="<?php echo $cat7['title']; ?>" class="list-group-item<?php if ($active7) { ?> active<?php } ?>">
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
				  <?php if ($cat7['sticker']) { ?><span class="sticker_position_<?php echo $cat7['sticker_position'];?>"><img src="<?php echo $cat7['sticker']; ?>" /></span><?php } ?>
				  <?php if ($cat7['image'] && $cat7['image_position'] == 1) { ?><img src="<?php echo $cat7['image']; ?>" alt="<?php echo $cat7['title']; ?>" title="<?php echo $cat7['title']; ?>" /><?php } ?>
				  <?php if ($cat7['name']) { ?><span><?php echo $cat7['name']; ?></span><?php } ?>
				  <?php if ($cat7['image'] && $cat7['image_position'] == 2) { ?><img src="<?php echo $cat7['image']; ?>" alt="<?php echo $cat7['title']; ?>" title="<?php echo $cat7['title']; ?>" /><?php } ?>
			      <?php if ($cat7['rating'] >= 0 && $cat7['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat7['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat7['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
			    </a>

				<?php foreach ($cat7['children'] as $cat8) { ?>
				  <?php $active8 = ($cat8['href'] != '' && $cat8['href'] == $nohost_url || $cat8['href'] == '/' . $nohost_url || $cat8['href'] == $host_url); ?>
				  <a <?php if (!$active8) { ?>href="<?php echo $cat8['href']; ?>"<?php } ?> title="<?php echo $cat8['title']; ?>" class="list-group-item<?php if ($active8) { ?> active<?php } ?>">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
					<?php if ($cat8['sticker']) { ?><span class="sticker_position_<?php echo $cat8['sticker_position'];?>"><img src="<?php echo $cat8['sticker']; ?>" /></span><?php } ?>
					<?php if ($cat8['image'] && $cat8['image_position'] == 1) { ?><img src="<?php echo $cat8['image']; ?>" alt="<?php echo $cat8['title']; ?>" title="<?php echo $cat8['title']; ?>" /><?php } ?>
					<?php if ($cat8['name']) { ?><span><?php echo $cat8['name']; ?></span><?php } ?>
					<?php if ($cat8['image'] && $cat8['image_position'] == 2) { ?><img src="<?php echo $cat8['image']; ?>" alt="<?php echo $cat8['title']; ?>" title="<?php echo $cat8['title']; ?>" /><?php } ?>
					<?php if ($cat8['rating'] >= 0 && $cat8['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat8['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat8['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
				  </a>

				  <?php foreach ($cat8['children'] as $cat9) { ?>
					<?php $active9 = ($cat9['href'] != '' && $cat9['href'] == $nohost_url || $cat9['href'] == '/' . $nohost_url || $cat9['href'] == $host_url); ?>
					<a <?php if (!$active9) { ?>href="<?php echo $cat9['href']; ?>"<?php } ?> title="<?php echo $cat9['title']; ?>" class="list-group-item<?php if ($active9) { ?> active<?php } ?>">
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
					  <?php if ($cat9['sticker']) { ?><span class="sticker_position_<?php echo $cat9['sticker_position'];?>"><img src="<?php echo $cat9['sticker']; ?>" /></span><?php } ?>
					  <?php if ($cat9['image'] && $cat9['image_position'] == 1) { ?><img src="<?php echo $cat9['image']; ?>" alt="<?php echo $cat9['title']; ?>" title="<?php echo $cat9['title']; ?>" /><?php } ?>
					  <?php if ($cat9['name']) { ?><span><?php echo $cat9['name']; ?></span><?php } ?>
					  <?php if ($cat9['image'] && $cat9['image_position'] == 2) { ?><img src="<?php echo $cat9['image']; ?>" alt="<?php echo $cat9['title']; ?>" title="<?php echo $cat9['title']; ?>" /><?php } ?>
					  <?php if ($cat9['rating'] >= 0 && $cat9['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat9['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat9['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
					</a>

					<?php foreach ($cat9['children'] as $cat10) { ?>
					  <?php $active10 = ($cat10['href'] != '' && $cat10['href'] == $nohost_url || $cat10['href'] == '/' . $nohost_url || $cat10['href'] == $host_url); ?>
					  <a <?php if (!$active10) { ?>href="<?php echo $cat10['href']; ?>"<?php } ?> title="<?php echo $cat10['title']; ?>" class="list-group-item<?php if ($active10) { ?> active<?php } ?>">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
						<?php if ($cat10['sticker']) { ?><span class="sticker_position_<?php echo $cat10['sticker_position'];?>"><img src="<?php echo $cat10['sticker']; ?>" /></span><?php } ?>
						<?php if ($cat10['image'] && $cat10['image_position'] == 1) { ?><img src="<?php echo $cat10['image']; ?>" alt="<?php echo $cat10['title']; ?>" title="<?php echo $cat10['title']; ?>" /><?php } ?>
						<?php if ($cat10['name']) { ?><span><?php echo $cat10['name']; ?></span><?php } ?>
						<?php if ($cat10['image'] && $cat10['image_position'] == 2) { ?><img src="<?php echo $cat10['image']; ?>" alt="<?php echo $cat10['title']; ?>" title="<?php echo $cat10['title']; ?>" /><?php } ?>
						<?php if ($cat10['rating'] >= 0 && $cat10['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat10['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat10['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
					  </a>

					  <?php foreach ($cat10['children'] as $cat11) { ?>
						<?php $active11 = ($cat11['href'] != '' && $cat11['href'] == $nohost_url || $cat11['href'] == '/' . $nohost_url || $cat11['href'] == $host_url); ?>
						<a <?php if (!$active11) { ?>href="<?php echo $cat11['href']; ?>"<?php } ?> title="<?php echo $cat11['title']; ?>" class="list-group-item<?php if ($active11) { ?> active<?php } ?>">
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
						  <?php if ($cat11['sticker']) { ?><span class="sticker_position_<?php echo $cat11['sticker_position'];?>"><img src="<?php echo $cat11['sticker']; ?>" /></span><?php } ?>
						  <?php if ($cat11['image'] && $cat11['image_position'] == 1) { ?><img src="<?php echo $cat11['image']; ?>" alt="<?php echo $cat11['title']; ?>" title="<?php echo $cat11['title']; ?>" /><?php } ?>
						  <?php if ($cat11['name']) { ?><span><?php echo $cat11['name']; ?></span><?php } ?>
						  <?php if ($cat11['image'] && $cat11['image_position'] == 2) { ?><img src="<?php echo $cat11['image']; ?>" alt="<?php echo $cat11['title']; ?>" title="<?php echo $cat11['title']; ?>" /><?php } ?>
						  <?php if ($cat11['rating'] >= 0 && $cat11['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat11['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat11['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
						</a>

						<?php foreach ($cat11['children'] as $cat12) { ?>
						  <?php $active12 = ($cat12['href'] != '' && $cat12['href'] == $nohost_url || $cat12['href'] == '/' . $nohost_url || $cat12['href'] == $host_url); ?>
						  <a <?php if (!$active12) { ?>href="<?php echo $cat12['href']; ?>"<?php } ?> title="<?php echo $cat12['title']; ?>" class="list-group-item<?php if ($active12) { ?> active<?php } ?>">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
							<?php if ($cat12['sticker']) { ?><span class="sticker_position_<?php echo $cat12['sticker_position'];?>"><img src="<?php echo $cat12['sticker']; ?>" /></span><?php } ?>
							<?php if ($cat12['image'] && $cat12['image_position'] == 1) { ?><img src="<?php echo $cat12['image']; ?>" alt="<?php echo $cat12['title']; ?>" title="<?php echo $cat12['title']; ?>" /><?php } ?>
							<?php if ($cat12['name']) { ?><span><?php echo $cat12['name']; ?></span><?php } ?>
							<?php if ($cat12['image'] && $cat12['image_position'] == 2) { ?><img src="<?php echo $cat12['image']; ?>" alt="<?php echo $cat12['title']; ?>" title="<?php echo $cat12['title']; ?>" /><?php } ?>
							<?php if ($cat12['rating'] >= 0 && $cat12['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat12['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat12['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
						  </a>

						  <?php foreach ($cat12['children'] as $cat13) { ?>
							<?php $active13 = ($cat13['href'] != '' && $cat13['href'] == $nohost_url || $cat13['href'] == '/' . $nohost_url || $cat13['href'] == $host_url); ?>
							<a <?php if (!$active13) { ?>href="<?php echo $cat13['href']; ?>"<?php } ?> title="<?php echo $cat13['title']; ?>" class="list-group-item<?php if ($active13) { ?> active<?php } ?>">
							  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
							  <?php if ($cat13['sticker']) { ?><span class="sticker_position_<?php echo $cat13['sticker_position'];?>"><img src="<?php echo $cat13['sticker']; ?>" /></span><?php } ?>
							  <?php if ($cat13['image'] && $cat13['image_position'] == 1) { ?><img src="<?php echo $cat13['image']; ?>" alt="<?php echo $cat13['title']; ?>" title="<?php echo $cat13['title']; ?>" /><?php } ?>
							  <?php if ($cat13['name']) { ?><span><?php echo $cat13['name']; ?></span><?php } ?>
							  <?php if ($cat13['image'] && $cat13['image_position'] == 2) { ?><img src="<?php echo $cat13['image']; ?>" alt="<?php echo $cat13['title']; ?>" title="<?php echo $cat13['title']; ?>" /><?php } ?>
							  <?php if ($cat13['rating'] >= 0 && $cat13['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat13['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat13['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
							</a>

							<?php foreach ($cat13['children'] as $cat14) { ?>
							  <?php $active14 = ($cat14['href'] != '' && $cat14['href'] == $nohost_url || $cat14['href'] == '/' . $nohost_url || $cat14['href'] == $host_url); ?>
							  <a <?php if (!$active14) { ?>href="<?php echo $cat14['href']; ?>"<?php } ?> title="<?php echo $cat14['title']; ?>" class="list-group-item<?php if ($active14) { ?> active<?php } ?>">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
								<?php if ($cat14['sticker']) { ?><span class="sticker_position_<?php echo $cat14['sticker_position'];?>"><img src="<?php echo $cat14['sticker']; ?>" /></span><?php } ?>
								<?php if ($cat14['image'] && $cat14['image_position'] == 1) { ?><img src="<?php echo $cat14['image']; ?>" alt="<?php echo $cat14['title']; ?>" title="<?php echo $cat14['title']; ?>" /><?php } ?>
								<?php if ($cat14['name']) { ?><span><?php echo $cat14['name']; ?></span><?php } ?>
								<?php if ($cat14['image'] && $cat14['image_position'] == 2) { ?><img src="<?php echo $cat14['image']; ?>" alt="<?php echo $cat14['title']; ?>" title="<?php echo $cat14['title']; ?>" /><?php } ?>
								<?php if ($cat14['rating'] >= 0 && $cat14['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat14['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat14['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
							  </a>

							  <?php foreach ($cat14['children'] as $cat15) { ?>
								<?php $active15 = ($cat15['href'] != '' && $cat15['href'] == $nohost_url || $cat15['href'] == '/' . $nohost_url || $cat15['href'] == $host_url); ?>
								<a <?php if (!$active15) { ?>href="<?php echo $cat15['href']; ?>"<?php } ?> title="<?php echo $cat15['title']; ?>" class="list-group-item<?php if ($active15) { ?> active<?php } ?>">
								  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
								  <?php if ($cat15['sticker']) { ?><span class="sticker_position_<?php echo $cat15['sticker_position'];?>"><img src="<?php echo $cat15['sticker']; ?>" /></span><?php } ?>
								  <?php if ($cat15['image'] && $cat15['image_position'] == 1) { ?><img src="<?php echo $cat15['image']; ?>" alt="<?php echo $cat15['title']; ?>" title="<?php echo $cat15['title']; ?>" /><?php } ?>
								  <?php if ($cat15['name']) { ?><span><?php echo $cat15['name']; ?></span><?php } ?>
								  <?php if ($cat15['image'] && $cat15['image_position'] == 2) { ?><img src="<?php echo $cat15['image']; ?>" alt="<?php echo $cat15['title']; ?>" title="<?php echo $cat15['title']; ?>" /><?php } ?>
								  <?php if ($cat15['rating'] >= 0 && $cat15['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat15['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat15['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
								</a>

								<?php foreach ($cat15['children'] as $cat16) { ?>
								  <?php $active16 = ($cat16['href'] != '' && $cat16['href'] == $nohost_url || $cat16['href'] == '/' . $nohost_url || $cat16['href'] == $host_url); ?>
								  <a <?php if (!$active16) { ?>href="<?php echo $cat16['href']; ?>"<?php } ?> title="<?php echo $cat16['title']; ?>" class="list-group-item<?php if ($active16) { ?> active<?php } ?>">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
									<?php if ($cat16['sticker']) { ?><span class="sticker_position_<?php echo $cat16['sticker_position'];?>"><img src="<?php echo $cat16['sticker']; ?>" /></span><?php } ?>
									<?php if ($cat16['image'] && $cat16['image_position'] == 1) { ?><img src="<?php echo $cat16['image']; ?>" alt="<?php echo $cat16['title']; ?>" title="<?php echo $cat16['title']; ?>" /><?php } ?>
									<?php if ($cat16['name']) { ?><span><?php echo $cat16['name']; ?></span><?php } ?>
									<?php if ($cat16['image'] && $cat16['image_position'] == 2) { ?><img src="<?php echo $cat16['image']; ?>" alt="<?php echo $cat16['title']; ?>" title="<?php echo $cat16['title']; ?>" /><?php } ?>
									<?php if ($cat16['rating'] >= 0 && $cat16['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat16['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat16['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
								  </a>

								  <?php foreach ($cat16['children'] as $cat17) { ?>
									<?php $active17 = ($cat17['href'] != '' && $cat17['href'] == $nohost_url || $cat17['href'] == '/' . $nohost_url || $cat17['href'] == $host_url); ?>
									<a <?php if (!$active17) { ?>href="<?php echo $cat17['href']; ?>"<?php } ?> title="<?php echo $cat17['title']; ?>" class="list-group-item<?php if ($active17) { ?> active<?php } ?>">
									  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
									  <?php if ($cat17['sticker']) { ?><span class="sticker_position_<?php echo $cat17['sticker_position'];?>"><img src="<?php echo $cat17['sticker']; ?>" /></span><?php } ?>
									  <?php if ($cat17['image'] && $cat17['image_position'] == 1) { ?><img src="<?php echo $cat17['image']; ?>" alt="<?php echo $cat17['title']; ?>" title="<?php echo $cat17['title']; ?>" /><?php } ?>
									  <?php if ($cat17['name']) { ?><span><?php echo $cat17['name']; ?></span><?php } ?>
									  <?php if ($cat17['image'] && $cat17['image_position'] == 2) { ?><img src="<?php echo $cat17['image']; ?>" alt="<?php echo $cat17['title']; ?>" title="<?php echo $cat17['title']; ?>" /><?php } ?>
									  <?php if ($cat17['rating'] >= 0 && $cat17['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat17['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat17['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
									</a>

									<?php foreach ($cat17['children'] as $cat18) { ?>
									  <?php $active18 = ($cat18['href'] != '' && $cat18['href'] == $nohost_url || $cat18['href'] == '/' . $nohost_url || $cat18['href'] == $host_url); ?>
									  <a <?php if (!$active18) { ?>href="<?php echo $cat18['href']; ?>"<?php } ?> title="<?php echo $cat18['title']; ?>" class="list-group-item<?php if ($active18) { ?> active<?php } ?>">
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
										<?php if ($cat18['sticker']) { ?><span class="sticker_position_<?php echo $cat18['sticker_position'];?>"><img src="<?php echo $cat18['sticker']; ?>" /></span><?php } ?>
										<?php if ($cat18['image'] && $cat18['image_position'] == 1) { ?><img src="<?php echo $cat18['image']; ?>" alt="<?php echo $cat18['title']; ?>" title="<?php echo $cat18['title']; ?>" /><?php } ?>
										<?php if ($cat18['name']) { ?><span><?php echo $cat18['name']; ?></span><?php } ?>
										<?php if ($cat18['image'] && $cat18['image_position'] == 2) { ?><img src="<?php echo $cat18['image']; ?>" alt="<?php echo $cat18['title']; ?>" title="<?php echo $cat18['title']; ?>" /><?php } ?>
										<?php if ($cat18['rating'] >= 0 && $cat18['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat18['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat18['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
									  </a>

									  <?php foreach ($cat18['children'] as $cat19) { ?>
										<?php $active19 = ($cat19['href'] != '' && $cat19['href'] == $nohost_url || $cat19['href'] == '/' . $nohost_url || $cat19['href'] == $host_url); ?>
										<a <?php if (!$active19) { ?>href="<?php echo $cat19['href']; ?>"<?php } ?> title="<?php echo $cat19['title']; ?>" class="list-group-item<?php if ($active19) { ?> active<?php } ?>">
										  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
										  <?php if ($cat19['sticker']) { ?><span class="sticker_position_<?php echo $cat19['sticker_position'];?>"><img src="<?php echo $cat19['sticker']; ?>" /></span><?php } ?>
										  <?php if ($cat19['image'] && $cat19['image_position'] == 1) { ?><img src="<?php echo $cat19['image']; ?>" alt="<?php echo $cat19['title']; ?>" title="<?php echo $cat19['title']; ?>" /><?php } ?>
										  <?php if ($cat19['name']) { ?><span><?php echo $cat19['name']; ?></span><?php } ?>
										  <?php if ($cat19['image'] && $cat19['image_position'] == 2) { ?><img src="<?php echo $cat19['image']; ?>" alt="<?php echo $cat19['title']; ?>" title="<?php echo $cat19['title']; ?>" /><?php } ?>
										  <?php if ($cat19['rating'] >= 0 && $cat19['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat19['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat19['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
										</a>

										<?php foreach ($cat19['children'] as $cat20) { ?>
										  <?php $active20 = ($cat20['href'] != '' && $cat20['href'] == $nohost_url || $cat20['href'] == '/' . $nohost_url || $cat20['href'] == $host_url); ?>
										  <a <?php if (!$active20) { ?>href="<?php echo $cat20['href']; ?>"<?php } ?> title="<?php echo $cat20['title']; ?>" class="list-group-item<?php if ($active20) { ?> active<?php } ?>">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
											<?php if ($cat20['sticker']) { ?><span class="sticker_position_<?php echo $cat20['sticker_position'];?>"><img src="<?php echo $cat20['sticker']; ?>" /></span><?php } ?>
											<?php if ($cat20['image'] && $cat20['image_position'] == 1) { ?><img src="<?php echo $cat20['image']; ?>" alt="<?php echo $cat20['title']; ?>" title="<?php echo $cat20['title']; ?>" /><?php } ?>
											<?php if ($cat20['name']) { ?><span><?php echo $cat20['name']; ?></span><?php } ?>
											<?php if ($cat20['image'] && $cat20['image_position'] == 2) { ?><img src="<?php echo $cat20['image']; ?>" alt="<?php echo $cat20['title']; ?>" title="<?php echo $cat20['title']; ?>" /><?php } ?>
											<?php if ($cat20['rating'] >= 0 && $cat20['text_rating']) { ?><div class="rating text-center" data-toggle="tooltip" title="<?php echo $cat20['text_rating']; ?>"><?php for ($i = 1; $i <= 5; $i++) { ?><?php if ($cat20['rating'] < $i) { ?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><?php } else { ?><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php } ?><?php } ?></div><?php } ?>
										  </a>
										<?php } ?>
									  <?php } ?>
									<?php } ?>
								  <?php } ?>
								<?php } ?>
							  <?php } ?>
							<?php } ?>
						  <?php } ?>
						<?php } ?>
					  <?php } ?>
					<?php } ?>
				  <?php } ?>
				<?php } ?>
			  <?php } ?>
			<?php } ?>
		  <?php } ?>
		<?php } ?>
	  <?php } ?>
	<?php } ?>
	<?php } ?>
  <?php } ?>
</div>
</div>
<?php } ?>

<?php if ($ajax_script) { ?>
<?php echo $ajax_script; ?>
<?php } ?>
<?php if ($debug) { ?>
<script type="text/javascript"><!--
var end = new Date().getTime();
$('.bus-menu-debug-theme-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text((end - start)/1000 + ' сек. или ' + (end - start) + ' мс.');
if ($('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> a').length > 0) {
	$('.bus-menu-debug-link-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text($('.bus-menu-style-<?php echo $type; ?>-<?php echo $design; ?> a').length + ' шт.');
} else {
	$('.bus-menu-debug-link-<?php echo $module_id; ?>-<?php echo $type; ?>-<?php echo $design; ?>').text('Данных нет =(.');
}
//--></script>
<?php } ?>