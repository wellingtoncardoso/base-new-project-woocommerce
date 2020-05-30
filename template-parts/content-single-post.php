<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/single-post.css">


<main id="single-post">
	<div class="container">
		<div class="row">
			<article class="col-12">
				<?php while(have_posts()) : the_post(); ?>
					<div class="thumb-post">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="body-post">
						<?php 
						$URL_ATUAL= "$_SERVER[REQUEST_URI]";
						$pieces = explode("/", $URL_ATUAL);
    					//echo $pieces[3]; // piece2

						if ($pieces[2] == 'produto' && $pieces[3] != 'product' ){
				        //echo var_dump($pieces[3]);
				        //echo var_dump($URL_ATUAL);
						?>
							<h2>Produtos<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png"></h2>
							<?php echo the_content(); ?>
					</div>
					<div class="comments">
						<?php comments_template(); ?>
					</div>
					<div id="view-product">
						<div class="container">
							<div class="row">
								<div class="col-12 text-center">
									<h5>Veja também</h5>
								</div>
								<div class="col-12 col-md-8" style="margin: 0 auto;">
									<?php echo do_shortcode('[products limit="3" columns="3" best_selling="true" ]'); ?>
								</div>
							</div>
						</div>
					</div>

					<?php							
						 }else {?>
							<div class="data-post text-center"><?php the_date(); ?></div>
							<h1><?php echo the_title(); ?></h1>
							<?php echo the_content(); ?>
						</div>
						<div class="share">
							<h5>Compartilhe</h5>
							<ul>
								<li><a href="" target=""><img src="<?php echo get_template_directory_uri(); ?>/img/share/instagram-share.svg"></a></li>
								<li><a href="" target=""><img src="<?php echo get_template_directory_uri(); ?>/img/share/facebook-share.svg"></a></li>
								<li><a href="" target=""><img src="<?php echo get_template_directory_uri(); ?>/img/share/youtube-share.svg"></a></li>
								<li><a href="" target=""><img src="<?php echo get_template_directory_uri(); ?>/img/share/pint-share.svg"></a></li>
								<li><a href="" target=""><img src="<?php echo get_template_directory_uri(); ?>/img/share/icon-five-share.svg"></a></li>
							</ul>
						</div>
						<div class="comments">
							<?php comments_template(); ?>
						</div>
							<?php
						}
						?>
				<?php endwhile; ?>
			</article>
		</div>
	</div>
</main>