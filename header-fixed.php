
<div id="header" class="fixed-top nav-top">
	<?php if(is_user_logged_in() && ($user_function === 'customer')): ?>
	<?php $current_user = wp_get_current_user(); ?>
	<div class="container">
		<div class="row topo-navbar">
			<div class="">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg"></a>
			</div>
			<form class="social input-group md-form form-sm form-2 pl-0" role="search" method="get" id="searchform"  class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input class="form-control mr-sm-2" type="search" placeholder="Digite o que você deseja" aria-label="Search"  value="<?php echo get_search_query(); ?>" name="s" id="s">
				<button class="input-group-text red lighten-3 btn my-2" type="submit" id="searchsubmit"><img src="<?php echo get_template_directory_uri(); ?>/img/search.png"></button>
			</form>
			<div class="social">
				<ul class="navbar-social">
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
					<li class="nav-item dropdown">
						<?php if ( is_user_logged_in() ) : $current_user = wp_get_current_user(); ?>							
							<a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OLÁ, <?php echo $current_user->display_name; ?></a>
						<?php endif; ?>
						<div class="dropdown-menu" aria-labelledby="dropdown07">
							<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>my-account/orders/">Meus Pedidos</a>
							<a class="dropdown-item" href="<?php the_field('add_link_troca') ?>"  target="_blank">Trocas e Devoluções</a>
							<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>favorite">Meu Favoritos</a>
							<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>my-account/edit-account/">Informações da Conta</a>
							<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>my-account/edit-address/">Meus Endereços</a>
							<a class="dropdown-item" href="<?php echo esc_url( home_url('/'));?>order-tracking/">Acompanhe seu pedido</a>
							<a class="dropdown-item" href="<?php echo wp_logout_url( home_url('/'));?>">Sair</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container">
			<!--<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg"></a>-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample05">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Início</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
						<div class="row">
							<div class="dropdown-menu navbar-product" aria-labelledby="dropdown05">
								<div class="col-12">
									<h5>nossa linha de produtos<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png"></h5>
									<span class="nav">
										<?php echo do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]'); ?>
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
				</ul>
			</div>

				<!--<?php
				wp_nav_menu( array(
					'theme_location'  => 'principal',
					'depth'	          => 2,
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarResponsive',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
				?>-->
			</div>
		</nav>
	<?php elseif(is_user_logged_in() && ($user_function === 'administrator')): ?>
	<?php $current_user = wp_get_current_user(); ?>
	<div class="container">
		<div class="row topo-navbar">
			<div class="">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg"></a>
			</div>
			<form class="social input-group md-form form-sm form-2 pl-0" role="search" method="get" id="searchform"  class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input class="form-control mr-sm-2" type="search" placeholder="Digite o que você deseja" aria-label="Search"  value="<?php echo get_search_query(); ?>" name="s" id="s">
				<button class="input-group-text red lighten-3 btn my-2" type="submit" id="searchsubmit"><img src="<?php echo get_template_directory_uri(); ?>/img/search.png"></button>
			</form>
			<div class="social">
				<ul class="navbar-social">
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
					<li class="nav-item dropdown">
						<?php if ( is_user_logged_in() ) : $current_user = wp_get_current_user(); ?>							
							<a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OLÁ, <?php echo $current_user->display_name; ?></a>
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
				</ul>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container">
			<!--<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg"></a>-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample05">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Início</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
						<div class="row">
							<div class="dropdown-menu navbar-product" aria-labelledby="dropdown05">
								<div class="col-12">
									<h5>nossa linha de produtos<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png"></h5>
									<span class="nav">
										<?php echo do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]'); ?>
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
				</ul>
			</div>

				<!--<?php
				wp_nav_menu( array(
					'theme_location'  => 'principal',
					'depth'	          => 2,
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarResponsive',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
				?>-->
			</div>
		</nav>

		<?php else: ?>
			

			<div class="container">
				<div class="row topo-navbar">
					<div class="">
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg"></a>
					</div>
					<form class="social input-group md-form form-sm form-2 pl-0" role="search" method="get" id="searchform"  class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input class="form-control mr-sm-2" type="search" placeholder="Digite o que você deseja" aria-label="Search"  value="<?php echo get_search_query(); ?>" name="s" id="s">
						<button class="input-group-text red lighten-3 btn my-2" type="submit" id="searchsubmit"><img src="<?php echo get_template_directory_uri(); ?>/img/search.png"></button>
					</form>
					<div class="social">
						<ul class="navbar-social">
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
					<div class="social">
						<ul class="navbar-shop">
							<li><a href="<?php echo esc_url( home_url('/'));?>cart"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/cart.svg"></a>
								<?php 
									global $woocommerce;
									$number = sprintf(_n('%d', $woocommerce->cart->cart_contents_count, 'woothemes'));
									echo '<p class="number-cart">'.$number.'</p>';
								?>
							</li>
							<li><a href="<?php echo esc_url( home_url('/'));?>"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/pres.svg"></a></li>
							<li><a href="<?php echo esc_url( home_url('/'));?>favorite"><img src="<?php echo get_template_directory_uri(); ?>/img/shop/like.svg"></a></li>
							<li><a href="<?php echo esc_url( home_url('/'));?>my-account">ENTRE</a></li>
							<li class="divider">|</li>
							<li><a href="<?php echo esc_url( home_url('/'));?>login">CADASTRE-SE</a></li>
						</ul>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
				<div class="container">
					<!--<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-header.svg"></a>-->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarsExample05">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Início</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
								<div class="row">
									<div class="dropdown-menu navbar-product" aria-labelledby="dropdown05">
										<div class="col-12">
											<h5>nossa linha de produtos<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png"></h5>
											<span class="nav">
												<?php echo do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]'); ?>
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
						</ul>
					</div>

				<!--<?php
				wp_nav_menu( array(
					'theme_location'  => 'principal',
					'depth'	          => 2,
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarResponsive',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				) );
				?>-->
			</div>
		</nav>
	<?php endif; ?>
	<div>


		<script>
	/*var sub_menu_timer;
	  $('.dropdown').on({
	    mouseenter: function () {
	      $('.dropdown-menu').show();
	                },
	    mouseleave: function () {
	      $('.dropdown-menu').hide();
	                }
	            });*/
	        </script>