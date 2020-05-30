<?php
global $post;
$args = array( 'posts_per_page' => 1 , 'cat' => 1);
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
	<div class="row no-gutters">
		<div class="col-md-7 card-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
		<div class="col-md-5">
			<div class="card-body">
				<h5 class="card-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h5>
				<p class="card-text"><?php echo get_excerpt(); ?></p>
				<div class="card-data"><?php the_date(); ?></div>
			</div>
		</div>
	</div>
<?php endforeach; ?>