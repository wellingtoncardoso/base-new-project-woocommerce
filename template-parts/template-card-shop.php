<div class="container">
	<div class="row">
		<?php $i = 0; ?>
		<?php 
		$news = get_field('add_card_shop', 13);
		if($news){
			foreach($news as $news_desc){ ?>
				<div class="col-6 col-md-3 anime">
					<div class="card">
						<div class="thumb"><img src="<?php echo $news_desc['card_shop_image']; ?>"></div>
						<div class="card-body">
							<h5><?php echo $news_desc['card_shop_title']; ?></h5>
							<p><?php echo $news_desc['card_shop_content']; ?></p>
						</div>
					</div>
				</div>
				<?php if(++$i == 4) break; ?>
			<?php } ?>
		<?php } ?> 
	</div>
</div>