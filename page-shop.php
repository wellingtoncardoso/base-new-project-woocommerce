<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/shop.css">

<?php
/*
*Template Name: Shop
*/
get_header(); ?>
	<section id="shop">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Shop</h2>
				</div>
				<div class="col-12">
					<p>Filtro por valor:</p>
					<?php echo do_shortcode('[searchandfilter id="filter_price"]'); ?>
					<?php
					if(!function_exists('wc_get_products')) {
						return;
					}
					$paged                   = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
					$ordering                = WC()->query->get_catalog_ordering_args();
					$ordering['orderby']     = array_shift(explode(' ', $ordering['orderby']));
					$ordering['orderby']     = stristr($ordering['orderby'], 'price') ? 'meta_value_num' : $ordering['orderby'];
					$products_per_page       = apply_filters('loop_shop_per_page', wc_get_default_products_per_row() * wc_get_default_product_rows_per_page());

					$products_ids            = wc_get_products(array(
						'status'               => 'publish',
						'limit'                => $products_per_page,
						'page'                 => $paged,
						'paginate'             => true,
						'return'               => 'ids',
						'orderby'              => $ordering['orderby'],
						'order'                => $ordering['order'],
					));

					wc_set_loop_prop('current_page', $paged);
					wc_set_loop_prop('is_paginated', wc_string_to_bool(true));
					wc_set_loop_prop('page_template', get_page_template_slug());
					wc_set_loop_prop('per_page', $products_per_page);
					wc_set_loop_prop('total', $products_ids->total);
					wc_set_loop_prop('total_pages', $products_ids->max_num_pages);

					if($products_ids) {
						do_action('woocommerce_before_shop_loop');
						woocommerce_product_loop_start();
						foreach($products_ids->products as $featured_product) {
							$post_object = get_post($featured_product);
							setup_postdata($GLOBALS['post'] =& $post_object);
							wc_get_template_part('content', 'product');
						}
						wp_reset_postdata();
						woocommerce_product_loop_end();
						do_action('woocommerce_after_shop_loop');

					} else {
						do_action('woocommerce_no_products_found');
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<div id="best-sellers">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h4>Mais vendidos</h4>
				</div>
				<div class="col-12 col-md-8" style="margin: 0 auto;">
					<?php echo do_shortcode('[products limit="3" columns="3" best_selling="true" ]'); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?> 