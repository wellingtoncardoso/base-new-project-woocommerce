<?php
$user 		 	= wp_get_current_user();
$user_function  = $user->roles[0];
?>
<header id="header" class="header-mobile">
	<?php if(is_user_logged_in() && ($user_function === 'customer')): ?>
	<?php $current_user = wp_get_current_user(); ?>

	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark navbar-offcanvas "style="background-color: #155592;">
		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg" width="88"></a>
		<div class="social navbar" id="navbarsExample07">	
			<ul class="navbar-shop">
				<li class="item-shop"><a href="<?php echo esc_url( home_url('/'));?>cart"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/cart.svg"></a>
					<?php 
					global $woocommerce;
					$number = sprintf(_n('%d', $woocommerce->cart->cart_contents_count, 'woothemes'));
					echo '<p class="number-cart">'.$number.'</p>';
					?>
				</li>
				<li class="item-shop"><a href="<?php echo esc_url( home_url('/'));?>"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/pres.svg"></a></li>
				<li class="item-shop"><a href="<?php echo esc_url( home_url('/'));?>favorite"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/like.svg"></a></li>
			</ul>
		</div>
		<button class="navbar-toggler d-block" type="button" id="navToggle">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="navbar-collapse offcanvas-collapse">
			<ul class="navbar-nav mr-auto">
				<li>
					<form class="social input-group md-form form-sm form-2 pl-0" role="search" method="get" id="searchform"  class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input class="form-control mr-sm-2" type="search" placeholder="Digite o que você deseja" aria-label="Search"  value="<?php echo get_search_query(); ?>" name="s" id="s">
						<button class="input-group-text red lighten-3 btn my-2" type="submit" id="searchsubmit"><img src="<?php echo get_template_directory_uri(); ?>/img/search.png"></button>
					</form>
				</li>
			
				<li class="nav-item dropdown">
					<?php if ( is_user_logged_in() ) : $current_user = wp_get_current_user(); ?>							
						<a class="nav-link dropdown-toggle" style="text-transform: uppercase;" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OLÁ, <?php echo $current_user->display_name; ?></a>
					<?php endif; ?>
					<div class="dropdown-menu" aria-labelledby="dropdown07">
						<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>my-account/orders/">Meus Pedidos</a>
						<a class="dropdown-item" href="<?php the_field('add_link_troca') ?>" target="_blank">Trocas e Devoluções</a>
						<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>favorite">Meu Favoritos</a>
						<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>my-account/edit-account/">Informações da Conta</a>
						<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>my-account/edit-address/">Meus Endereços</a>
						<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>order-tracking/">Acompanhe seu pedido</a>
						<a class="dropdown-item" href="<?php echo wp_logout_url( home_url('/'));?>">Sair</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Início</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
					<div class="row">
						<div class="dropdown-menu navbar-product" aria-labelledby="dropdown05">
							<div class="col-12">
								<h5>nossa linha de produtos<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png"></h5>
								<span class="nav">
									<?php echo do_shortcode('[products limit="2" columns="1" orderby="id" order="DESC" visibility="visible"]'); ?>
								</span>
							</div>
						</div>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manifesto</a>
					<div class="dropdown-menu" aria-labelledby="dropdown05">
						<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>about">Sobre nós</a>
						<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>tecnology">Tecnologia e Resultados Dermotológicos</a>
						<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>projects">Projetos Ambientais e Sociais</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>blog">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?php echo esc_url( home_url('/'));?>contact">Contato</a>
				</li>
				<div class="social">
					<ul class="navbar-social-mobile">
						<li>
							<a href="<?php the_field('link_instagram') ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/instagram.svg">
							</a>
						</li>
						<li>
							<a href="<?php the_field('link_facebook') ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook.svg">
							</a>
						</li>
						<li>
							<a href="<?php the_field('link_youtube') ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/youtube.svg">
							</a>
						</li>
						<li>
							<a href="<?php the_field('link_pint') ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/pint.svg">
							</a>
						</li>
						<li>
							<a href="<?php the_field('link_icon_five') ?>" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/social/icon-five.svg">
							</a>
						</li>
					</ul>
				</div>
			</ul>
		</div>
	</nav>
	<?php else: ?>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark navbar-offcanvas "style="background-color: #155592;">
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg" width="88"></a>
			<div class="social navbar" id="navbarsExample07">	
				<ul class="navbar-shop">
					<li class="item-shop"><a href="<?php echo esc_url( home_url('/'));?>cart"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/cart.svg"></a>
						<?php 
						global $woocommerce;
						$number = sprintf(_n('%d', $woocommerce->cart->cart_contents_count, 'woothemes'));
						echo '<p class="number-cart">'.$number.'</p>';
						?>
					</li>
					<li class="item-shop"><a href="<?php echo esc_url( home_url('/'));?>"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/pres.svg"></a></li>
					<li class="item-shop"><a href="<?php echo esc_url( home_url('/'));?>favorite"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/like.svg"></a></li>
				</ul>
			</div>
			<button class="navbar-toggler d-block" type="button" id="navToggle">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar-collapse offcanvas-collapse">
				<ul class="navbar-nav mr-auto">
					<li>
						<form class="social input-group md-form form-sm form-2 pl-0" role="search" method="get" id="searchform"  class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input class="form-control mr-sm-2" type="search" placeholder="Digite o que você deseja" aria-label="Search"  value="<?php echo get_search_query(); ?>" name="s" id="s">
							<button class="input-group-text red lighten-3 btn my-2" type="submit" id="searchsubmit"><img src="<?php echo get_template_directory_uri(); ?>/img/search.png"></button>
						</form>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>my-account">Entre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>login">Cadastre-se</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Início</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
						<div class="row">
							<div class="dropdown-menu navbar-product" aria-labelledby="dropdown05">
								<div class="col-12">
									<h5>nossa linha de produtos<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png"></h5>
									<span class="nav">
										<?php echo do_shortcode('[products limit="2" columns="1" orderby="id" order="DESC" visibility="visible"]'); ?>
									</span>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manifesto</a>
						<div class="dropdown-menu" aria-labelledby="dropdown05">
							<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>about">Sobre nós</a>
							<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>tecnology">Tecnologia e Resultados Dermotológicos</a>
							<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>projects">Projetos Ambientais e Sociais</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>blog">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="<?php echo esc_url( home_url('/'));?>contact">Contato</a>
					</li>
					<div class="social">
						<ul class="navbar-social-mobile">
							<li>
								<a href="<?php the_field('link_instagram') ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/social/instagram.svg">
								</a>
							</li>
							<li>
								<a href="<?php the_field('link_facebook') ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/social/facebook.svg">
								</a>
							</li>
							<li>
								<a href="<?php the_field('link_youtube') ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/social/youtube.svg">
								</a>
							</li>
							<li>
								<a href="<?php the_field('link_pint') ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/social/pint.svg">
								</a>
							</li>
							<li>
								<a href="<?php the_field('link_icon_five') ?>" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/img/social/icon-five.svg">
								</a>
							</li>
						</ul>
					</div>
				</ul>
			</div>
		</nav>
	<?php endif; ?>
</header>

<style>
	.fixed-top{
		top: 0px !important;
	}
	.offcanvas-collapse {
		position: fixed;
		z-index: 9999;
		top: 0px;
		bottom: 0;
		right: 100%;
		left: -300px;
		width: 330px;
		padding-top: 1rem;
		padding-right: 1rem;
		padding-left: 1rem;
		overflow-y: auto;
		visibility: hidden;
		background: #4AA2B4;
		transition-timing-function: ease-in-out;
		transition-duration: .3s;
		transition-property: left, visibility;
	}

	.offcanvas-collapse {
		align-items: start;
		-moz-background-clip: padding;
		-webkit-background-clip: padding;
		background-clip: padding-box;
		border-right: 5px solid rgba(0, 0, 0, 0.2);

	}

	.offcanvas-collapse.open {
		left: 0;
		visibility: visible;
	}

	.navbar-expand-lg .navbar-nav {
		-ms-flex-direction: column;
		flex-direction: column;
	}

	.nav-scroller {
		position: relative;
		z-index: 2;
		height: 2.75rem;
		overflow-y: hidden;
	}
	.nav-scroller .nav {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: nowrap;
		flex-wrap: nowrap;
		padding-bottom: 1rem;
		margin-top: -1px;
		overflow-x: auto;
		color: rgba(255, 255, 255, .75);
		text-align: center;
		white-space: nowrap;
		-webkit-overflow-scrolling: touch;
	}

	.nav-underline .nav-link {
		padding-top: .75rem;
		padding-bottom: .75rem;
		font-size: .875rem;
		color: #6c757d;
	}

	.nav-underline .nav-link:hover {
		color: #007bff;
	}

	.nav-underline .active {
		font-weight: 500;
		color: #343a40;
	}
</style>

<script>
	$(document).ready(function () {
		console.log("document is ready");
		$('[data-toggle="offcanvas"], #navToggle').on('click', function () {
			$('.offcanvas-collapse').toggleClass('open')
		})
	});
	window.onload = function () {
		console.log("window is loaded");
	};
</script>