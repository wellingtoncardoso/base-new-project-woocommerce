<div class="container">
  <div class="row">
    <div class="col-12">
      <h2>
        Lorem ipsum<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png">
      </h2>
    </div>

    <?php
    $args = array( 'post_type' => 'product', 'posts_per_page' => 1);
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
      <div class="col-12 col-md-6 text-center anime">
        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
          <?php
          woocommerce_show_product_sale_flash( $post, $product );
          if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
          else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />';
          ?>  
        </a>
      </div>
        <div class="col-12 col-md-6 card-info-product anime-invert">
          <h4><?php the_title(); ?></h4>
          <?php the_content(); ?>
          <?php echo '<span class="card-price">'. $product->get_price_html() .'</span> <br>'; ?>
          <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
          <div><a href="<?php the_permalink() ?>" class="btn btn-more"><span>Saiba Mais</span></a></div>
        </div>
      <?php endwhile;
      wp_reset_query(); 
      ?>

      <div class="col-12 text-center">
        <a href="<?php echo esc_url( home_url('/'));?>shop" class="btn btn-view-more"><span>Ver todos os produtos</span></a> 
      </div>
    </div>
  </div> 

  <!--<div class="col-12 col-md-6 text-center">
    <img src="<?php echo get_template_directory_uri(); ?>/delete/Grupo 2464@2x.png">
  </div>
  <div class="col-12 col-md-6 card-info-product">
    <h4>
      What is Lorem Ipsum
    </h4>
    <p>
      Contrary to popular belief, Lorem Ipsum is not simply random text.
    </p>
    <div><del><span class="price">R$ 329,90</span></del></div>        
    <div><ins><span class="price">R$ 219,90</span></ins></div>
    <div class="text-center">
      <div><a href="" class="btn btn-buy">Comprar</a></div>
      <div><a href="" class="btn btn-more"><span>Saiba Mais</span></a></div>
    </div>
  </div>-->