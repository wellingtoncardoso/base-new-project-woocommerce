<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/myaccount.css">

<?php 
/*
*Template Name: Login
*/
get_header(); ?>
<main id="myaccount-page">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8" id="customer_login">
				<div id="accordion">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Já sou cadastrado
								</button>
							</h5>
						</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<?php echo do_shortcode(' [woocommerce_my_account]'); ?>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Quero me cadastrar
								</button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<?php echo do_shortcode('[wppb-register form_name="register"]') ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?> 


