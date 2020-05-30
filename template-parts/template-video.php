<div class="container">
	<div class="row">
		<div class="col-12">
			<h2>
				Sua pela<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-white.png">
			</h2>
		</div>
		<div class="col-12 col-md-6 thumb-video anime">
			<img src="<?php the_field('video_image')?>">
			<?php the_field('video_embed');?>
		</div>
		<div class="card col-12 col-md-6 anime-invert">
			<?php the_field('video_content') ?>
			<a href="<?php the_field('video_btn_link') ?>" class="btn btn-initial"><?php the_field('video_btn') ?></a>
		</div>
	</div>
</div>