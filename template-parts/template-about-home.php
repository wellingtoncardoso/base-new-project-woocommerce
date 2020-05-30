<div class="container">
	<div class="row">
		<div class="col-12">
			<h2>
				Um pouco sobre nós<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png">
			</h2>
		</div>
		<div class="col-12 col-md-6 anime">
			<img src="<?php the_field('about_image') ?>">
		</div>
		<div class="col-12 col-md-6  anime-invert">
			<?php the_field('about_content') ?>

			<div class="text-center">
				<a href="<?php the_field('about_btn_link') ?>" class="btn btn-view-more"><span><?php the_field('about_btn') ?></span></a>
			</div>
		</div>
	</div>
</div>