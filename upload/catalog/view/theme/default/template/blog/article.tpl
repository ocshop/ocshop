<?php echo $header; ?>
<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php $class_article = 'col-lg-6 col-md-6 col-sm-12 col-xs-12'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php $class_article = 'col-lg-4 col-md-4 col-sm-6 col-xs-12'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php $class_article = 'col-lg-3 col-md-3 col-sm-6 col-xs-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?> product-info"><?php echo $content_top; ?>
      <div class="row">
        <?php if ($column_left && $column_right) { ?>
        <?php $class = 'col-sm-12'; ?>
        <?php } elseif ($column_left || $column_right) { ?>
        <?php $class = 'col-sm-12'; ?>
        <?php } else { ?>
        <?php $class = 'col-sm-6'; ?>
        <?php } ?>
        <div class="col-sm-12">
          <h1><?php echo $heading_title; ?></h1>
          <div class="tab-content">
            <hr>
            <div>
              <?php if ($author) { ?>
              <span><b><?php echo $text_author; ?></b></span> <span><?php echo $author; ?></span>
              <?php } ?>
              <span><b><?php echo $text_date_added; ?></b></span> <span><?php echo $date_added; ?></span>
              <?php if ($date_modified) { ?>
              <span><b><?php echo $text_date_modified; ?></b></span> <span><?php echo $date_modified; ?></span>
              <?php } ?>
              <span><b><?php echo $text_views; ?></b></span> <span><?php echo $viewed; ?></span>
            </div>
            <hr>
            <div id="description"><?php echo $description; ?></div>
            <?php if ($review_status) { ?>
            <div class="rating">
              <p>
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <?php if ($rating < $i) { ?>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } else { ?>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } ?>
                <?php } ?>
                <a href="" onclick="gotoReview(); return false;"><?php echo $reviews; ?></a> / <a href="" onclick="gotoReviewWrite(); return false;"><?php echo $text_write; ?></a>
              </p>
              <hr>
            </div>
            <br />
            <?php } ?>
            <?php if ($download_status) { ?>
            <div class="blog-info">
              <?php if ($downloads) { ?>
              <br />
              <?php foreach ($downloads as $download) { ?>
              <a href="<?php echo $download['href']; ?>" title=""><i class="fa fa-floppy-o"></i> <?php echo $download['name']; ?> <?php echo " (". $download['size'] .")";?></a><br>
              <?php } ?>
              <br />
              <?php } ?> 
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <?php if ($products) { ?>
      <h3><?php echo $text_related_product; ?></h3>
      <div class="row module">
        <?php $i = 0; ?>
        <?php foreach ($products as $product) { ?>
        <div class="<?php echo $class_article; ?>">
          <div class="product-thumb transition">
            <div class="image"><?php echo $product['sticker']; ?><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
            <div class="caption" style="min-height: 90px;">
              <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
              <p><?php echo $product['description']; ?></p>
              <?php if ($review_status) { ?>
              <div class="rating">
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                <?php if ($product['rating'] < $j) { ?>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } else { ?>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } ?>
                <?php } ?>
              </div>
              <?php } ?>
              <?php if ($product['price']) { ?>
              <p class="price">
                <?php if (!$product['special']) { ?>
                <?php echo $product['price']; ?>
                <?php } else { ?>
                <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
                <?php } ?>
                <?php if ($product['tax']) { ?>
                <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                <?php } ?>
              </p>
              <?php } ?>
            </div>
            <div class="button-group">
              <button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');" data-toggle="tooltip" aria-label="<?php echo $button_cart; ?>" title="<?php echo $button_cart; ?>"><span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span> <i class="fa fa-shopping-cart"></i></button>
              <button type="button" onclick="wishlist.add('<?php echo $product['product_id']; ?>');" data-toggle="tooltip" aria-label="<?php echo $button_wishlist; ?>" title="<?php echo $button_wishlist; ?>"><i class="fa fa-heart"></i></button>
              <button type="button" onclick="compare.add('<?php echo $product['product_id']; ?>');" data-toggle="tooltip" aria-label="<?php echo $button_compare; ?>" title="<?php echo $button_compare; ?>"><i class="fa fa-exchange"></i></button>
            </div>
          </div>
        </div>
        <?php if (($column_left && $column_right) && ($i % 2 == 0)) { ?>
        <div class="clearfix visible-md visible-sm"></div>
        <?php } elseif (($column_left || $column_right) && ($i % 3 == 0)) { ?>
        <div class="clearfix visible-md"></div>
        <?php } elseif ($i % 4 == 0) { ?>
        <div class="clearfix visible-md"></div>
        <?php } ?>
        <?php $i++; ?>
        <?php } ?>
      </div>
      <?php } ?>
      <?php if ($articles) { ?>
      <h3><?php echo $text_related; ?></h3>
      <div class="row">
        <?php $i = 0; ?>
        <?php foreach ($articles as $article) { ?>
        <div class="<?php echo $class_article; ?>">
          <div class="product-thumb transition">
            <div class="image"><a href="<?php echo $article['href']; ?>"><img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['name']; ?>" title="<?php echo $article['name']; ?>" class="img-responsive" /></a></div>
            <div class="caption" style="min-height: 90px;">
              <h4><a href="<?php echo $article['href']; ?>"><?php echo $article['name']; ?></a></h4>
              <p><?php echo $article['description']; ?></p>
              <?php if ($review_status) { ?>
              <div class="rating">
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                <?php if ($article['rating'] < $j) { ?>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } else { ?>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } ?>
                <?php } ?>
              </div>
              <?php } ?>
            </div>
            <div class="button-group">
              <button type="button" onclick="location.href = ('<?php echo $article['href']; ?>');" data-toggle="tooltip" aria-label="<?php echo $button_more; ?>" title="<?php echo $button_more; ?>"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $button_more; ?></span></button>
              <button type="button" data-toggle="tooltip" aria-label="<?php echo $article["date_added"];?>" title="<?php echo $article["date_added"];?>"><i class="fa fa-clock-o"></i></button>
              <button type="button" data-toggle="tooltip" aria-label="<?php echo $text_views; ?> <?php echo $article["viewed"];?>" title="<?php echo $text_views; ?> <?php echo $article["viewed"];?>"><i class="fa fa-eye"></i></button>
            </div>
          </div>
        </div>
        <?php if (($column_left && $column_right) && ($i % 2 == 0)) { ?>
        <div class="clearfix visible-md visible-sm"></div>
        <?php } elseif (($column_left || $column_right) && ($i % 3 == 0)) { ?>
        <div class="clearfix visible-md"></div>
        <?php } elseif ($i % 4 == 0) { ?>
        <div class="clearfix visible-md"></div>
        <?php } ?>
        <?php $i++; ?>
        <?php } ?>
      </div>
      <?php } ?>
      <?php if ($review_status) { ?>
      <div class="tab-pane" id="tab-review">
        <form class="form-horizontal" id="form-review">
        <div id="review"></div>
        <h2><?php echo $text_write; ?></h2>
        <?php if ($review_guest) { ?>
        <div class="form-group required">
          <div class="col-sm-12">
            <label class="control-label" for="input-name"><?php echo $entry_name; ?></label>
            <input type="text" name="name" value="<?php echo $customer_name; ?>" id="input-name" class="form-control" />
          </div>
        </div>
        <div class="form-group required">
          <div class="col-sm-12">
            <label class="control-label" for="input-review"><?php echo $entry_review; ?></label>
            <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
            <div class="help-block"><?php echo $text_note; ?></div>
          </div>
        </div>
        <div class="form-group required">
          <div class="col-sm-12">
            <label class="control-label"><?php echo $entry_rating; ?></label>
            &nbsp;&nbsp;&nbsp; <?php echo $entry_bad; ?>&nbsp;
            <input type="radio" name="rating" value="1" />
            &nbsp;
            <input type="radio" name="rating" value="2" />
            &nbsp;
            <input type="radio" name="rating" value="3" />
            &nbsp;
            <input type="radio" name="rating" value="4" />
            &nbsp;
            <input type="radio" name="rating" value="5" />
            &nbsp;<?php echo $entry_good; ?>
          </div>
        </div>
        <?php echo $captcha; ?>
        <div class="buttons clearfix">
          <div class="pull-right">
            <button type="button" id="button-review" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary"><?php echo $button_continue; ?></button>
          </div>
        </div>
        <?php } else { ?>
        <?php echo $text_login; ?>
        <?php } ?>
        </form>
      </div>
      <?php } ?>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
	e.preventDefault();

	$('#review').fadeOut('slow');

	$('#review').load(this.href);

	$('#review').fadeIn('slow');
});

$('#review').load('index.php?route=blog/article/review&article_id=<?php echo $article_id; ?>');

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=blog/article/write&article_id=<?php echo $article_id; ?>',
		type: 'post',
		dataType: 'json',
		data: $("#form-review").serialize(),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-success, .alert-danger').remove();

			if (json['error']) {
				$('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
});

$(document).ready(function() {
	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled:true
		}
	});
});
//--></script>
<script type="text/javascript"><!--
$(document).ready(function() {
	$('#description').find('a>img').each(function(){
		$(this).parent().addClass('gallery');
	});

	$('#description').find('a>img.nogallery').each(function(){
		$(this).parent().removeClass('gallery');
	});

	$('#description').magnificPopup({
		delegate: 'a.gallery',
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	gotoReview = function() {
		offset = $('#form-review').offset();
		$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
	}

	gotoReviewWrite = function() {
		offset = $('#form-review h2').offset();
		$('html, body').animate({ scrollTop: offset.top-20 }, 'slow');
	}
});
//--></script>
<?php echo $footer; ?>
