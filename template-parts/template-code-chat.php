<div>
	<a href="<?php the_field('link_whatsapp') ?>" target="_blank">
		<img  class="chat" src="<?php echo get_template_directory_uri();?>/img/social/chat.png" />
	</a>
</div>

<style>
	.chat{
	    position: fixed;
	    top: 88%;
	    right: 0px;
	    padding: 10px;
	    z-index: 10000000;
		transition: .3s all;
	}
	@media(max-width: 375px){
		.chat{
			top: 75%;
		}
	}
	.chat:hover{
		cursor: pointer;
		opacity: .8;
	}
</style>