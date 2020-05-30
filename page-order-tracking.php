<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/order-tracking.css">

<?php 
/*
*Template Name: Order tracking
*/
get_header(); ?>
<main id="order-tracking-page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo do_shortcode('[woocommerce_order_tracking]'); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?> 