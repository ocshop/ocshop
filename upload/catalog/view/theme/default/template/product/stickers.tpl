<?php foreach ($stickers as $sticker) { ?>
<div class="corner_<?php echo $sticker['position'];?>">
  <?php if ($sticker['image']) { ?>
  <img src="<?php echo $sticker['image'];?>" alt="<?php echo $sticker['name'];?>" title="<?php echo $sticker['name'];?>">
  <?php } else { ?>
  <span><?php echo $sticker['name'];?></span>
  <?php } ?>
</div>
<?php } ?>