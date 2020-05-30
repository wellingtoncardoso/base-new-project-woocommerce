<div>
	<a href="<?php the_field('link_whatsapp') ?>" target="_blank">
		<img  class="whatsapp" src="<?php echo get_template_directory_uri();?>/img/social/whatsapp.png" />
	</a>
</div>

<style>
	.whatsapp{
	    position: fixed;
	    top: 87.5%;
	    right: 10px;
	    padding: 10px;
	    z-index: 10000000;
	    transition: .3s all;
	}
	@media(max-width: 375px){
		.whatsapp{
			top: 75%;
		}
	}
	.whatsapp:hover{
		cursor: pointer;
		opacity: .8;
	}
</style>