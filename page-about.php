<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/about.css">

<?php 
/*
*Template Name: About
*/
get_header(); ?>
<!-- banenr -->
<div id="banner-about"
style="background: url('<?php the_field('add_banner'); ?>') no-repeat right center !important; 
background-size: cover; 
height: 62vh;">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center title">
				<img src="<?php echo get_template_directory_uri(); ?>/delete/uniao.png">
				<div><span class="divider">___</span></div>
				<h1>um pouco sobre nós</h1>
				<h2>Manifesto B'Onatur</h2>
			</div>
		</div>
	</div>
</div>
<!-- content -->
<div id="content-about">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<?php the_field('first_content_column_1'); ?>
			</div>
			<div class="col-12 col-md-6">
				<?php the_field('first_content_column_2'); ?>
			</div>
		</div>
	</div>
</div>

<!-- mission -->
<div id="mission">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h4>Missão e Valor:</h4>
				<?php the_field('second_content_column_1'); ?>
			</div>
			<div class="col-12 col-md-6">
				<?php the_field('second_content_column_2'); ?>
			</div>
		</div>
	</div>
</div>

<!-- origin-->
<section id="origin">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Origem</h2>
			</div>
			<div class="col-12 col-md-6">
				<img src="<?php the_field('third_content_column_1') ?>">
			</div>
			<div class="col-12 col-md-6">
				<?php the_field('third_content_column_2') ?>
			</div>
		</div>
	</div>
</section>

<!-- company -->
<section id="company">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h4>Trajetória da Empresa</h4>
			</div>
			<div class="col-12 col-md-6">
				<?php the_field('fourth_content_column_1') ?>
			</div>
			<div class="col-12 col-md-6">
				<?php the_field('fourth_content_column_2') ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?> 