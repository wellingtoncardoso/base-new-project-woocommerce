<!-- desktop -->
<div class="container desktop">
	<div class="row">
		<div class="col-12">
			<h2>
				Blog<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png">
			</h2>
		</div>
		<div class="col-12 col-md-5">
			<h4>
				Assine nossa newsletter e receba 
				dicas e novidades do setor.
			</h4>
		</div>
		<div class="col-12 col-md-7">
			<?php echo do_shortcode('[contact-form-7 id="182" title="newsletter-single"]') ?>
		</div>

		<div class="col-12 col-md-8 row column-1">

			<?php
			global $post;
			$args = array( 'posts_per_page' => 1, 'cat' => 17 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
				<article>
					<div class="col-12 col-md-7 thumb thumb-main float-left">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<span></span>
					</div>
					<div class="col-12 col-md-4 card-body float-right">
						<h5>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h5>
						<p>
							<?php echo get_excerpt(); ?>
						</p>
						<a href="<?php the_permalink(); ?>" class="more">Saiba mais <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-grey.svg"></a>
					</div>
				</article>
			<?php endforeach; ?>

		</div>
		<div class="col-12 col-md-4 row column-2" style="padding-left: 0px">

			<?php
			global $post;
			$args = array( 'posts_per_page' => 3, 'cat' => 17 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
				<article>
					<div class="col-12 col-md-6 thumb thumb-second float-left">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="col-12 col-md-6 card-body float-right">
						<h5>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h5>
						<p>
							<?php echo get_excerpt(); ?>
						</p>
						<a href="<?php the_permalink(); ?>" class="more">Saiba mais <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-grey.svg"></a>
					</div>
				</article>
			<?php endforeach; ?>

		</div>
	</div>
</div>

<!-- mobile -->
<div class="container mobile">
	<div class="row">
		<div class="col-12">
			<h2>
				Blog<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png">
			</h2>
		</div>
		<div class="col-12 d2">
			<h4>
				Assine nossa newsletter e receba 
				dicas e novidades do setor.
			</h4>
		</div>
		<div class="col-12 d2">
			<?php echo do_shortcode('[contact-form-7 id="182" title="newsletter-single"]') ?>
		</div>

		<div class="d1" style="width: 100%; padding-left: 15px; padding-right: 15px;">
			<?php
			global $post;
			$args = array( 'posts_per_page' => 1, 'cat' => 17 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) : setup_postdata($post); ?>
				<article class="row">
					<div class="col-12 thumb thumb-main">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<span></span>
					</div>
					<div class="col-12 card-body">
						<h5>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h5>
						<p>
							<?php echo get_excerpt(); ?>
						</p>
						<a href="<?php the_permalink(); ?>" class="more">Saiba mais <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-grey.svg"></a>
					</div>
				</article>
			<?php endforeach; ?>
			
				<?php
				global $post;
				$args = array( 'posts_per_page' => 3, 'cat' => 17 );
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) : setup_postdata($post); ?>
					<article class="col-6 row" style="margin: 0 auto; float: left;">
						<div class="col-12 thumb thumb-second">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="col-12 card-body">
							<h5>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h5>
							<p>
								C<?php echo get_excerpt(); ?>
							</p>
							<a href="" class="more">Saiba mais <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-grey.svg"></a>
						</div>
					</article>
				<?php endforeach; ?>
			
		</div>
	</div>
</div>