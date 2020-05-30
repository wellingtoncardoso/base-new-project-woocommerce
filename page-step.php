<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/step.css">

<?php
/*
*Template Name: Step
*/
get_header(); ?>
<div id="banner-step"
style="background: url('<?php the_field('add_banner'); ?>') no-repeat center bottom !important; 
background-size: cover; 
height: 30vh;">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center title">
				<h1>Descubra o seu tipo de pele.</h1>
				<p>Faça o teste agora e descubra a rotina que mais combina com seu tipo de pele!</p>
			</div>	
		</div>	
	</div>
</div>

<section id="step">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php echo do_shortcode('[caldera_form id="CF5ecfa223276a9"]'); ?>
			</div>
		</div>
	</div>
</section>	
<?php get_footer(); ?> 

<script>
	
</script>

