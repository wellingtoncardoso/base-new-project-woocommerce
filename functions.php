<?php
//Quando o tema é ativado
function compontoweb_setup(){
	//Thumbnail destacada
	add_theme_support( 'post-thumbnails' ); 

	//Support Title SEO
	add_theme_support('title-tag');

	//Imagens SET
	add_image_size('square', 350, 350, true);
	add_image_size('portrait', 350, 724, true);
	add_image_size('cara', 400, 375, true);
	add_image_size('medium', 700, 400, true);
	add_image_size('blog', 966, 644, true);
	add_image_size('content', 966, 844, true);

}
add_action('after_setup_theme', 'compontoweb_setup');

function compontoweb_menus(){
	require_once('wp-bootstrap-navwalker.php');

	register_nav_menus(array('principal' => __('Menu Principal', 'compontoweb')));
	register_nav_menus(array('mobile' => __('Mobile', 'compontoweb')));
}//menu
add_action('init', 'compontoweb_menus');

//login user
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'user') {
		$current_user = wp_get_current_user();
		/*printf( __( 'Olá,<strong> %s!</strong>', 'textdomain' ), esc_html( $current_user->user_login ) );*/
		//$items .= '<li><a href="'. wp_logout_url() .'">Olá, ' . esc_html( $current_user->user_login ).'!</a></li>';		
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'user') {
        //$items .= '<li><a href="'. site_url('/minha-conta/edit-address/') .'">Entre ou Cadastre-se</a></li>';
    }
    return $items;
}

////
/*
*	--CHECK LOGIN-- 
*	verificar se o user está logado
*	não deixar user que não possua cadastro acessar àrea 
*	de especialista.
*/
////

/*add_action('template_redirect', 'check_user');
function check_user(){
	$pageid = 13;
	//if(is_page('home-area-do-especialista')){
		if(!is_user_logged_in() && is_page($pageid)){
			$url = add_query_arg('redirect_to', get_permalink($pageid), site_url('/'));
			wp_redirect($url);
			exit;
		}
	//}
}
add_shortcode('logado', 'check_user');*/

add_filter('login_redirect', 'custom_redirect_level_user', 10,3);

function compontoweb_scripts_styles(){
	/*Style*/	
	wp_enqueue_style('BootstrapCss','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(),'1.0.0');
	wp_enqueue_style('googleLato','https://fonts.googleapis.com/css?family=Lato:100,300,400,500,700,900&display=swap',array(),'1.0.0');

	/*Script*/
	wp_enqueue_script('Jquery','//code.jquery.com/jquery-1.11.1.min.js',array(),'1.11.1');
	wp_enqueue_script('BootstrapJs','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'1.0.0');
	wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
	wp_enqueue_script('jquery-mask', get_stylesheet_directory_uri() . '/js/jquery.mask.min.js', array('jquery'), '1.0', true );


}//style and script
add_action('wp_enqueue_scripts', 'compontoweb_scripts_styles');

/* limitar tamanho da respota do excerpt */
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 100);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

//widgets pages
function compontoweb_widget(){
	register_sidebar(array(
		'name'			=> 'Single Blog',
		'id'			=> 'sidebar-1',
		'before_widget'	=> '<div class="widget">',
		'after_widget' 	=> '</div>',
		'before_title'	=> '<h3 class="text-left">',
		'after_title'	=> '</h3>'

	));
	
}
add_action('widgets_init', 'compontoweb_widget');


// lib / suport woocommerce
//add_theme_support (  'woocommerce'  ) ;
require_once( get_template_directory().'/lib/store_functions.php' );
require_once( get_template_directory().'/lib/single_product_functions.php' );
require_once( get_template_directory().'/lib/single_product_title.php' );