<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/category.css">

<?php get_header(); ?>
<section class="container">
	<div class="row">
		<main class="category col-lg-8 col-12">
			<?php $category = get_queried_object();?>
			<h2 class="text-left">Categoria: <?php echo $category->name; ?><img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png"></h2>
			<hr>
			<ul class="list-category">
				<?php get_template_part('template-parts/loop', 'category') ?>
			</ul>
		</main>
		<div class="col-lg-4 col-12 sidebar-cat">
			<?php
			$categories = get_categories( array(
				'orderby' => 'name',
				'order'   => 'ASC'
			) );

			echo '<h5>Categorias</h5>';
			foreach( $categories as $category ) {
				$category_link = sprintf( 
					'<a href="%1$s" alt="%2$s">%3$s</a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
					esc_html( $category->name )
				);
				echo '<h6>' . sprintf( esc_html__( '%s (%s)', 'textdomain' ), $category_link, $category->count ) . '</h6> ';
			} ?>
		</div>
	</div>
</section>

<div id="main-pagination">
    <div class="container">
        <div class="row">
            <?php
            global $wp_query;

            $big = 999999999;
            echo '<div id="pg-links" class="paginate-links">';
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'prev_text' => __(' < '),
                'next_text' => __(' > '),
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
            echo '</div>';

            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?> 