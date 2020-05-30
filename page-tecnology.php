<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/tecnology.css">

<?php 
/*
/Template Name: Tecnology
*/
get_header(); ?>
<!-- banner -->
<div id="banner-tecnology"
style="background: url('<?php the_field('add_banner'); ?>') no-repeat right center !important; 
background-size: cover; 
height: 71vh;">
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

<div id="result">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<?php the_field('tecnology_content'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?> 