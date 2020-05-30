<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/checkout.css">

<?php 
/*
*Template Name: Checkout
*/
get_header(); ?>
<main id="checkout">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo do_shortcode('[woocommerce_checkout]'); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?> 