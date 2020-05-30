<div class="container">
	<div class="row">
		<?php $i = 0; ?>
		<?php 
		$news = get_field('add_promotion', 13);
		$news = array_reverse($news);
		if($news){
			foreach($news as $news_desc){ ?>
				<div class="col-12 col-md-4">
					<div class="card anime">
						<div href="" class="card-body">
							<img src="<?php echo $news_desc['promotion_image'];?>" widht="440px" height="289px">
							<div class="card-title">
								<h3>
									<?php echo $news_desc['promotion_context']; ?>
								</h3>
								<a href="<?php echo $news_desc['promotion_btn_link']; ?>"><?php echo $news_desc['promotion_btn']; ?><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.svg"></a>
							</div>
						</div>
						<span class="off">
							<p><?php echo $news_desc['promotion_percent']; ?><br><strong>OFF</strong></p>
						</span>
					</div>
				</div>
				<?php if(++$i == 3) break; ?>
			<?php } ?>
		<?php } ?> 
	</div>
</div>