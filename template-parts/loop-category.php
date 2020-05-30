<?php while(have_posts()): the_post(); ?>
	<article class="row col-12 item-blog" style="margin-bottom: 32px;">
		<div class="col-12 col-md-5 thumb-blog">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
		<div class="col-12 col-md-7 content-blog">
			<span class="date"><?php the_time(get_option('date_format')); ?></span>
			<h4><a style="color: #000;" href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
			<p><?php echo get_excerpt(); ?></p>
			<a class="btn btn-blog" href="<?php the_permalink(); ?>">Veja Mais</a>
		</div>
	</article>
<?php endwhile; 