<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/cart.css">

<?php 
/*
*Template Name: Cart
*/
get_header(); ?>
<main id="cart">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo do_shortcode(' [woocommerce_cart]'); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?> 