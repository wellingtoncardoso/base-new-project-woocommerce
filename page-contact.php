<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/contact.css">

<?php 
/*
/Template Name: Contact
*/
get_header(); ?>
<!-- banenr -->
<div id="banner-contact"
style="background: url('<?php the_field('add_banner') ?>') no-repeat right center !important; 
background-size: cover; 
height: 39vh;">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center title">
				<h1>Contato</h1>
				<div><span class="divider">___</span></div>
				<h2>É um grande prazer falar com você.</h2>
			</div>
		</div>
	</div>
</div>
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 d2">
				<h4>Deixe sua mensagem</h4>
				<?php echo do_shortcode('[contact-form-7 id="41" title="Contact"]'); ?>
			</div>
			<div class="row col-12 col-md-6 d1">				
				<?php $i = 0; ?>
				<?php 
				$news = get_field('add_contact_info', 39);
				if($news){
					foreach($news as $news_desc){ ?>	
						<div class="col-6 col-sm-6">
							<div class="card">
								<div class="card-thumb"><img src="<?php echo $news_desc['contact_info_image'];?>" ></div>
								<div class="card-body text-center">
									<h5><?php echo $news_desc['contact_info_title'];?></h5>
									<?php echo $news_desc['contact_info_content'];?>
								</div>
							</div>
						</div>		
						<?php if(++$i == 4) break; ?>
					<?php } ?>
				<?php } ?> 
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?> 