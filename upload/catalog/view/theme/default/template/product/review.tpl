<?php if ($reviews) { ?>
<?php foreach ($reviews as $review) { ?>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <td class="text-left col-xs-6"><strong><?php echo $review['author']; ?></strong></td>
      <td class="text-right"><?php echo $review['date_added']; ?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2"><p><?php echo $review['text']; ?></p>
        <?php for ($i = 1; $i <= 5; $i++) { ?>
        <?php if ($review['rating'] < $i) { ?>
        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
        <?php } else { ?>
        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
        <?php } ?>
        <?php } ?>
      </td>
    </tr>
  </tbody>
</table>
<?php } ?>
<div class="text-right"><?php echo $pagination; ?></div>
<?php } else { ?>
<p><?php echo $text_no_reviews; ?></p>
<?php } ?>