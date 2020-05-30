<div class="container">
	<div class="row">
		<div class="col-12">
			<h2>
				selos e certificações<img style="padding-top: 7px;" src="<?php echo get_template_directory_uri(); ?>/img/space-green.png">
			</h2>
		</div>
		<?php $i = 0; ?>
		<?php 
		$news = get_field('add_certification', 13);
		if($news){
			foreach($news as $news_desc){ ?>	
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="<?php echo $news_desc['certification_image'];?>" class="card-img" alt="[Selos e Certificações]">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<p class="card-text">
									<?php echo $news_desc['certification_content'];?>
								</p>
								<a href="<?php echo $news_desc['certification_btn_link'];?>" class="more"><?php echo $news_desc['certification_btn'];?> <img style="padding-left: 10px;" src="<?php echo get_template_directory_uri(); ?>/img/arrow-grey.svg"></a>
							</div>
						</div>
					</div>
				</div>	
				<?php if(++$i == -1) break; ?>
			<?php } ?>
		<?php } ?> 			
	</div>
</div>