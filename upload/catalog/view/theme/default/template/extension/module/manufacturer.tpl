<?php if ($manufacturers) { ?>
<h3><?php echo $heading_title; ?></h3>
<div class="list-group">
  <?php foreach ($manufacturers as $manufacturer) { ?>
  <?php if ($manufacturer['manufacturer_id'] == $manufacturer_id) { ?>
  <a href="<?php echo $manufacturer['href']; ?>" class="list-group-item active"><?php echo $manufacturer['name']; ?></a>
  <?php } else { ?>
  <a href="<?php echo $manufacturer['href']; ?>" class="list-group-item"><?php echo $manufacturer['name']; ?></a>
  <?php } ?>
  <?php } ?>

  <?php if (1 == 0) { ?>
  <select onchange="gobrandpage(this.value)" class="form-control">
  <?php foreach ($manufacturers as $manufacturer) { ?>
    <option value="<?php echo $manufacturer['href']; ?>" <?php if ($manufacturer['manufacturer_id'] == $manufacturer_id){ echo "SELECTED"; } ?> class="list-group-item active"><?php echo $manufacturer['name']; ?></option>
  <?php } ?>
  </select>
  <?php } ?>
</div>
<?php if (1 == 0) { ?>
<script type="text/javascript"><!--
function gobrandpage(id) {
	window.location.href = id;
}
//--></script>
<?php } ?>
<?php } ?>
