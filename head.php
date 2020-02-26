
<header class="header__container clear" role="banner">

	
	<div class="logo">
		<a href="<?php echo home_url(); ?>">plantground
			</a>
	</div>


	<nav class="nav" role="navigation">
	<?php global $woocommerce; ?>
 <a class="bas" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
title="<?php _e('Cart View', 'woothemes'); ?>">
<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'),
 $woocommerce->cart->cart_contents_count);?>  -
<?php echo $woocommerce->cart->get_cart_total(); ?>
	<i class="material-icons">
shopping_cart
</i>


		<?php html5blank_nav(); ?>
	</nav>
	

</header>
