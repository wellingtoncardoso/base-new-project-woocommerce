<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/favorite.css">

<?php 
/*
*Template Name: Favorite
*/
get_header(); ?>
	<main id="favorite">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php echo do_shortcode('[yith_wcwl_wishlist]'); ?>
				</div>
			</div>
		</div>
	</main>		
<?php get_footer(); ?> 