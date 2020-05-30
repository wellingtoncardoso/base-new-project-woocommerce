<?php

//tilte
add_action('woocommerce_single_product_summary', 'woocommerce_title_product');
function  woocommerce_title_product(){
      the_title();
}

//add cart
add_action( 'woocommerce_after_add_to_cart_button', 'content_after_addtocart_button' ); 
function content_after_addtocart_button(){
	echo '<div><br/><a href="#" class="btn btn-more">Adicionar ao Carrinho</a></div>';
	WC()->cart->add_to_cart( $p_id );
}


/*add_filter('add_to_cart_text','woocommerce_custom_cart_button_text');
add_filter('woocommerce_product_add_to_cart_text','woocommerce_custom_cart_button_text');
add_filter('woocommerce_product_single_add_to_cart_text','woocommerce_custom_cart_button_text');
function woocommerce_custom_cart_button_text(){
	return __('Add to cart');
}*/