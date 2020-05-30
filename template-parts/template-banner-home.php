<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<?php $i = 0; ?>
		<?php 
		$news = get_field('add_banner', 13);
		$news = array_reverse($news);
		if($news){
			foreach($news as $news_desc){ ?>	
				<div class="carousel-item <?php if ($cont==0){echo " active";} $cont++;?>">
					<img class="d-block w-100" src="<?php echo $news_desc['banner_image']; ?>" alt="Banner B'Onatur">	
					<div class="banner-caption">
						<?php echo $news_desc['banner_content'];?>
							<?php if ($news_desc['banner_btn'] && ($news_desc['banner_btn'] != "")) :?>
								<a href="<?php echo $news_desc['banner_btn_link'];?>" class="btn btn-banner"><?php echo $news_desc['banner_btn'];?></a>
							<?php endif; ?>
					</div>	
				</div>				
				<?php if(++$i == 3) break; ?>
			<?php } ?>
		<?php } ?> 
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.png"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.png"></span>
		<span class="sr-only">Next</span>
	</a>
</div>