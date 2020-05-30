<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/blog.css">
<?php get_header(); ?>
<article id="post-main">
	<div class="container">
		<div class="row">
			<div class="card" style="max-width: 1375px;">
				<?php get_template_part('template-parts/content','main-post'); ?>
			</div>
		</div>
	</div>
</article>

<article id="posts">
	<div class="container">
		<div class="row itens-post">
			<?php get_template_part('template-parts/content','post'); ?>
		</div>
	</div>
</article>
<?php get_footer(); ?> 