<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/projects.css">

<?php 
/*
/Template Name: Projects
*/
get_header(); ?>
<div id="banner-projects"
style="background: url('<?php the_field('add_banner'); ?>') no-repeat center bottom !important; 
background-size: cover; 
height: 83vh;">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center title">
				<img src="<?php echo get_template_directory_uri(); ?>/delete/uniao.png">
				<div><span class="divider">___</span></div>
				<h1>um pouco sobre nós</h1>
				<h2>Tecnologias e Resultados Dermatológicos</h2>
			</div>	
		</div>
	</div>
</div>

<!-- project-environment -->
<div id="project-environment">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_field('projects_content') ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?> 