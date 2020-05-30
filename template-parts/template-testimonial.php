<div class="container">
	<div class="row">
		<div class="col-12">
			<h2>
				o que estão falando sobre nós<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png">
			</h2>
		</div>
		<div class="col-12 text-center">
			<div class="text-center my-5">
				<div class="wrapper-carousel-fix">
					<!-- Carousel Wrapper -->
					<div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
					data-interval="false">
						<!--Slides-->
						<div class="carousel-inner" role="listbox">
							<?php $i = 0; ?>
							<?php 
							$news = get_field('add_testimonial', 13);
							$news = array_reverse($news);
							if($news){
								foreach($news as $news_desc){ ?>	
									<div class="carousel-item <?php if ($cont==0){echo " active";} $cont++;?>">
										<div class="testimonial">
											<!--Avatar-->
											<div class="avatar mx-auto mb-4">
												<img src="<?php echo $news_desc['testimonial_image'];?>" class="rounded-circle img-fluid"
												alt="First sample avatar image">
											</div>
											<h4 class="font-weight-bold"><?php echo $news_desc['testimonial_name'];?></h4>
											<!--Content-->
											<p class="content-meta">
												<?php echo $news_desc['testimonial_content'];?>
											</p>
										</div>
									</div>			
									<?php if(++$i == -1) break; ?>
								<?php } ?>
							<?php } ?> 							
						</div>
						<!--Slides-->
						<!--Controls-->
						<a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
						data-slide="prev">
							<span class="icon-prev" aria-hidden="true"></span>
							<span class="sr-only"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left-right.png"></span>
							</a>
							<a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
							data-slide="next">
							<span class="icon-next" aria-hidden="true"></span>
							<span class="sr-only"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-left-right.png"></span>
						</a>
						<!--Controls-->
					</div>
					<!-- Carousel Wrapper -->
				</div>
			</div>
		</div>
	</div>
</div>