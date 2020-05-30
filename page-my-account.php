<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/myaccount.css">

<?php 
/*
*Template Name: My account
*/
get_header(); ?>
<main id="myaccount-page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo do_shortcode(' [woocommerce_my_account]'); ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?> 


