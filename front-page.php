<?php 
/*
*Template Name: Main
*/
get_header();?>
<!-- banner primary -->
<section id="banner">
	<?php get_template_part('template-parts/template','banner-home') ?>
</section>
<!-- itens promotion -->
<div id="three-itens-promotion">
	<?php get_template_part('template-parts/template','promotion') ?>	
</div>
<!-- about -->
<section id="about-home">
	<?php get_template_part('template-parts/template','about-home') ?>
</section>
<!-- main product -->
<div id="main-product-home">
	<?php get_template_part('template-parts/template','single-product-home') ?>
</div>
<!-- itens card shop -->
<section id="itens-card-shop">
	<?php get_template_part('template-parts/template','card-shop') ?>
</section>
<!-- video -->
<div id="video" 
		style="background: url('./wp-content/themes/bonatur/delete/Retangulo-92@2x.jpg') no-repeat right center; 
		background-size: cover; 
		height: 80vh;">

	<?php get_template_part('template-parts/template','video') ?>
</div>
<!-- blog -->
<section id="blog-home">
	<?php get_template_part('template-parts/content','posts-home') ?>
</section>
<!-- testimonial -->
<div id="testimonial">
	<?php get_template_part('template-parts/template','testimonial') ?>
</div>
<!-- form action -->
<div id="form-action"
		style="background: url('./wp-content/themes/bonatur/delete/Grupo-de-máscara-13@2x.jpg') no-repeat center center; 
		background-size: cover; 
		background-attachment: fixed;
		height: 80vh;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 float-left"></div>
			<div class="col-12 col-md-6 float-right form">
				<h3>
					Quer ganhar frete grátis
					na primeira compra?
				</h3>
				<p>
					Preencha o formulário abaixo e receba o código de desconto.  
				</p>
				<a href="" class="view">Veja as regras.</a>
				<?php echo do_shortcode('[contact-form-7 id="43" title="Desconto"]') ?>
			</div>
		</div>
	</div>
</div>
<!-- certification -->
<div id="certification">
	<?php get_template_part('template-parts/template', 'certification') ?>
</div>
<?php get_footer(); ?>