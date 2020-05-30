<?php 
/**
 * Plugin Name: WooCommerce Installments Example
 * Plugin URI: http://claudiosmweb.com/
 * Description: Added the price with 3 installments without interest.
 * Author: claudiosanches
 * Author URI: http://www.claudiosmweb.com/
 * Version: 1.0
 * License: GPLv2 or later
 */
/**
 * Calculates the price in 3 installments without interest.
 *
 * @return string Price in 3 installments.
 */
function get_valor_parcelas( $price ) {
    // $product = get_product();
    // if ( $product->get_price_including_tax() and $product->price > 10 ) {
    //     $value = woocommerce_price( $product->get_price_including_tax() / 6 );        
    // 	return $value;
    // } 

    $price = $price / 12;
    return wc_price($price);
}

function get_valor_produto( $product ) {
	$price = $product->get_price();

	if( $product->has_child() ) {
		foreach($product->get_available_variations() as $pav){
		    $def=true;
		    foreach($product->get_variation_default_attributes() as $defkey=>$defval){
		        if($pav['attributes']['attribute_'.$defkey]!=$defval){
		            $def=false;             
		        }   
		    }
		    if($def){
		        $price = $pav['display_price'];         
		    }
		}   

	}

	// return woocommerce_price($price);	
	return $price;
}

/**
 * Displays the Installments on product loop.
 * 
 * @return string Price in 3 installments.
 */
function mostrar_parcelas_loop() {
	global $post;
    $product = new WC_Product($post->ID);
    $user = wp_get_current_user();
    $price = get_valor_produto($product);
    $preco_desconto = $price*1;

    $is_atacado = false;
 
    if( $product->get_stock_status() != 'outofstock' ){
    	 
		echo '<span class="price parcel-value">'
		. '<span class="valor-parcelas">12x ' . get_valor_parcelas( $price ) . ' </span> ' 
		. '<span class="valor-desconto">5% OFF no Boleto</span></span>';    	

    } else {
    	echo '<div class="product-noprice"></div>';
    }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'mostrar_parcelas_loop', 20 );


/*
* Preço variação
*/
// preços "De R$ 10,00 a R$ 25,00"
/*function fa_custom_range_price_from_to( $price, $from, $to ) {
  return sprintf( ' %s - %s', wc_price( $from ), wc_price( $to ) );
}*/

function get_price_html( $price = '' ) {
        $prices = $this->get_variation_prices( true );

        if ( empty( $prices['price'] ) ) {
            $price = apply_filters( 'woocommerce_variable_empty_price_html', '', $this );
        } else {
            $min_price     = current( $prices['price'] );
            $max_price     = end( $prices['price'] );
            $min_reg_price = current( $prices['regular_price'] );
            $max_reg_price = end( $prices['regular_price'] );

            if ( $min_price !== $max_price ) {
                $price = wc_format_price_range( $min_price, $max_price );
            } elseif ( $this->is_on_sale() && $min_reg_price === $max_reg_price ) {
                $price = wc_format_sale_price( wc_price( $max_reg_price ), wc_price( $min_price ) );
            } else {
                $price = wc_price( $min_price );
            }

            $price = apply_filters( 'woocommerce_variable_price_html', $price . $this->get_price_suffix(), $this );
			
        }

        return apply_filters( 'woocommerce_get_price_html', $price, $this );
}

/**
 * Displays the Installments on the product page.
 *
 * @return string Price in 3 installments.
 */
function preco_completo_single( $single ) {
	global $post;
    $product = new WC_Product($post->ID);
    $user = wp_get_current_user();
	$price = get_valor_produto($product);
    $preco_desconto = $price*0.9;
    $is_atacado = false;
 
    if( $product->get_stock_status() != 'outofstock' ){
?>
    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">	 
        <p>
            <span style="color: #000;" class="price parcel-value">
            	<span class="valor-produto">R$ <?php echo  $price ; ?></span>
				<span class="valor-parcelas"><?php  _e( '12x ' ) ?> <?php echo get_valor_parcelas( $price ); ?></span><br>
            	<span class="valor-desconto">5% OFF no Boleto</span>             
            </span>
        </p>
        <meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
        <link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />
    </div>
<?php }
}
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'preco_completo_single', 20 );

// check for empty-cart get param to clear the cart
function woocommerce_clear_cart_url() {	
	if ( isset( $_GET['limpar-carrinho'] ) and $_GET['limpar-carrinho'] == 'sim' ) {
  		global $woocommerce;
		$woocommerce->cart->empty_cart(); 
	}
}
add_action( 'init', 'woocommerce_clear_cart_url' );


function clear_cart_btn() {
	global $woocommerce;
	echo '<a class="button" href="'.$woocommerce->cart->get_cart_url().'?limpar-carrinho=sim">Limpar carrinho</a>';
}
add_action( 'woocommerce_cart_actions', 'clear_cart_btn' );



function sv_custom_woocommerce_catalog_orderby( $sortby ) {
    // $sortby['alphabetical'] = 'Sort by name: alphabetical';
    // print_r($sortby);
    
	$sortby['menu_order'] = 'Ordenação padrão';
	$sortby['popularity'] = 'Relevância';
	$sortby['rating'] = 'Avaliações';
	$sortby['date'] = 'Mais Recentes';
	$sortby['price'] = 'Preço: do menor para o maior';
	$sortby['price-desc'] = 'Preço: do maior para o menor';
    return $sortby;

}
add_filter( 'woocommerce_default_catalog_orderby_options', 'sv_custom_woocommerce_catalog_orderby' );
add_filter( 'woocommerce_catalog_orderby', 'sv_custom_woocommerce_catalog_orderby' );


//* Change the Add To Cart Link
function sfws_add_product_link( $link ) {
 	global $product;
 	$product_id = $product->id;
 	$product_sku = $product->get_sku();
 	$link = '<a href="'.get_permalink().'" rel="nofollow" data-product_id="'.$product_id.'" data-product_sku="'.$product_sku.'" data-quantity="1" class="button add_to_cart_button product_type_variable">'.custom_woocommerce_product_add_to_cart_text().'</a>';
 	return $link;
}
// add_filter( 'woocommerce_loop_add_to_cart_link', 'sfws_add_product_link' );

// Use WC 2.0 variable price format, now include sale price strikeout
// add_filter( 'woocommerce_variable_sale_price_html', 'wc_wc20_variation_price_format', 10, 2 );
// add_filter( 'woocommerce_variable_price_html', 'wc_wc20_variation_price_format', 10, 2 );
function wc_wc20_variation_price_format( $price, $product ) {
    // Main Price
    foreach($product->get_available_variations() as $pav){
	    $def=true;
	    foreach($product->get_variation_default_attributes() as $defkey=>$defval){
	        if($pav['attributes']['attribute_'.$defkey]!=$defval){
	            $def=false;             
	        }   
	    }
	    if($def){
	        $price = $pav['display_price'];         
	    }
	}   

	return woocommerce_price($price);
} 

// remover meios de entrega baseado no cargo do usuário
function hide_shipping_for_user_role( $rates ) {

	// print_r($rates);
	// die();
      
    // Get current user's role
    $user = wp_get_current_user();
    if ( empty( $user ) ) {
    	// unset( $rates[ 'local_pickup' ] );
    	return $rates;
    }
 
 	// remove 'retirar na loja' para clientes de varejo e não logados
    if( in_array( 'customer', (array) $user->roles ) || !is_user_logged_in() ){
		foreach ($rates as $rk => $rate) {
			if( $rate->method_id == 'local_pickup' )
				unset( $rates[ $rk ] );
		}        
    }

    // remover frete gratis pra clientes de atacado    
    if( in_array( 'wholesale_customer', (array) $user->roles ) ){
        foreach ($rates as $rk => $rate) {
			if( $rate->method_id == 'free_shipping' )
				unset( $rates[ $rk ] );
		}        
    }
 
    return $rates;
}
// add_filter( 'woocommerce_package_rates', 'hide_shipping_for_user_role', 100, 1 );


add_filter( 'woocommerce_sale_flash', 'add_percentage_to_sale_bubble', 20 );
function add_percentage_to_sale_bubble( $html ) {
    global $product;

    if ($product->is_type('simple')) { //if simple product
        $percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 ).'%';
    } else { //if variable product
        $percentage = get_variable_sale_percentage( $product );
    }

    $output =' <span class="onsale">'.$percentage.'<br>OFF</span>';
    return $output;
}

function get_variable_sale_percentage( $product ) {
    //get variables
    $variation_min_regular_price    = $product->get_variation_regular_price('min', true);
    $variation_max_regular_price    = $product->get_variation_regular_price('max', true);
    $variation_min_sale_price       = $product->get_variation_sale_price('min', true);
    $variation_max_sale_price       = $product->get_variation_sale_price('max', true);

    //get highest and lowest percentages
    $lower_percentage   = round( ( ( $variation_min_regular_price - $variation_min_sale_price ) / $variation_min_regular_price ) * 100 );
    $higher_percentage  = round( ( ( $variation_max_regular_price - $variation_max_sale_price ) / $variation_max_regular_price ) * 100 );

    //sort array
    $percentages = array($lower_percentage, $higher_percentage);
    sort($percentages);

    return $percentages[1].'%';
}

//remove itens menu my account
// * Personalização da página Minha conta WooCommerce
add_action ('after_setup_theme','martin_custom_my_account_woocommmerce');
    function martin_custom_my_account_woocommmerce(){
        function remove_tabs ($items){
            unset($items['downloads']);
            unset( $items['orders']);
            unset( $items['edit-address']);
            unset( $items['edit-account']);
            //unset( $items['customer-logout']);
            return $items;  
        }
    }
add_filter ( 'woocommerce_account_menu_items' , 'remove_tabs' );