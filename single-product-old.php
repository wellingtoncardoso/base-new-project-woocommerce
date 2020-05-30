<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/single-product.css">

<?php get_header() ?>
<main id="single-product">
  <div class="container">
    <div class="row">
     <ul class="products">
      <?php
      $args = array( 'post_type' => 'product', 'posts_per_page' => 1);
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
       <li class="product">
         <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
          <?php
          woocommerce_show_product_sale_flash( $post, $product );
          if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID);
          else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />';
          the_title( '<h3>', '</h3>' );
          echo '<span class="price">'. $product->get_price_html() .'</span>';
          ?>
        </a>
        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
      </li>
    <?php endwhile;
    wp_reset_query(); 
    ?>
  </ul>     
</div>
</div>
</main>
<div class="container">
  <div class="row">     
    <!--<?php echo do_shortcode('[products limit="4" columns="4" orderby="category" class="quick-sale" on_sale="true" ]') ?> -->       
  </div>
</div>
<?php get_footer(); ?>