<?php 
	$modules = array();
	if ($latest_products) {
		$modules[] = array(
			'tab' => 'latest',
			'heading_title' => $tab_latest,
			'products' => $latest_products
		);
	}
	if ($special_products) {
		$modules[] = array(
			'tab' => 'special',
			'heading_title' => $tab_special,
			'products' => $special_products
		);
	}
	if ($bestseller_products) {
		$modules[] = array(
			'tab' => 'bestseller',
			'heading_title' => $tab_bestseller,
			'products' => $bestseller_products
		);
	}
	if ($featured_products) {
		$modules[] = array(
			'tab' => 'featured',
			'heading_title' => $tab_featured,
			'products' => $featured_products
		);
	}
?>
<?php if ($modules) { ?>
  <ul class="nav nav-tabs">
    <?php foreach ($modules as $key => $module) { ?>
    <li<?php if (!$key) { ?> class="active"<?php } ?>><a href="#tab-<?php echo $module['tab']; ?>" data-toggle="tab" title="<?php echo $module['heading_title']; ?>"><?php echo $module['heading_title']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="tab-content">
    <?php foreach ($modules as $key => $module) { ?>
    <div class="tab-pane<?php if (!$key) { ?> active<?php } ?>" id="tab-<?php echo $module['tab']; ?>">
      <div class="row">
        <?php foreach ($module['products'] as $product) { ?>
        <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="product-thumb transition">
            <div class="image"><?php echo $product['sticker']; ?><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
            <div class="caption">
              <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
              <p class="description"><?php echo $product['description']; ?></p>
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
              <?php if ($product['rating']) { ?>
              <div class="rating">
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <?php if ($product['rating'] < $i) { ?>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                <?php } else { ?>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                <?php } ?>
                <?php } ?>
              </div>
              <?php } ?>
            </div>
            <div class="button-group">
              <button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');" data-toggle="tooltip" aria-label="<?php echo $button_cart; ?>" title="<?php echo $button_cart; ?>"><span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span> <i class="fa fa-shopping-cart"></i></button>
              <button type="button" onclick="wishlist.add('<?php echo $product['product_id']; ?>');" data-toggle="tooltip" aria-label="<?php echo $button_wishlist; ?>" title="<?php echo $button_wishlist; ?>"><i class="fa fa-heart"></i></button>
              <button type="button" onclick="compare.add('<?php echo $product['product_id']; ?>');" data-toggle="tooltip" aria-label="<?php echo $button_compare; ?>" title="<?php echo $button_compare; ?>"><i class="fa fa-exchange"></i></button>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>
<?php } ?>