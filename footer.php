<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3">
				<a href="" class="footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" width="212px">
				</a>
			</div>
			<div class="col-12 col-md-3">
				<h5><strong>Institucional</strong></h5>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>shop">Produtos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>blog">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>about">Sobre</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>shop">Produtos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>contact">Trabalhe conosco</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-3">
				<h5><strong>Ajuda</strong></h5>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Dúvidas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Atendimento</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Política de privacidade</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Política de trocas e devolução</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo esc_url( home_url('/'));?>">Contrato de compra e venda</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-3">
				<h5 class="title"><strong>Receba dicas,  novidades, e-books e conteúdos incríveis.</strong> Assine nossa newslatter agora para receber.  </h5>
				<?php echo do_shortcode('[contact-form-7 id="42" title="newsletter"]'); ?>
			</div>
		</div>
	</div>
</footer>
<div id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/band-cards-left.svg">
				<p class="text-1">B'Onatur Dermocosméticos LTDA - ME - CNPJ 34.181.252/0001-86
Rua Adoniram Barbosa, Jaguarí - Americana - SP - CEP 13473-675</p>
			</div>
			<div class="col-12 col-md-6 desktop">
				<img class="float-right" src="<?php echo get_template_directory_uri(); ?>/img/band-cards-right.svg">
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-8">
				<p class="tagline text-2">B'ONATUR DERMO 2020® | Todos os direitos reservados. Todo o conteúdo do site, todas as fotos, imagens, logotipos, marcas, layout, aqui veículados são de propriedade exclusiva da B'Onatur Dermocosméticos LTDA - ME. É vedada qualquer reprodução, total ou parcial, de qualquer elemento de identidade, sem expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e criminal nos termos da Lei.</p>
			</div>
			<div class="col-12 col-md-4">
				<p class="tagline float-right">Desenvolvimento <a href="https://retinaweb.com.br/" target="_blank" alt="[Retina Web]"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-retinaweb.svg"></a></p>
			</div>
		</div>
	</div>
</div>	
<?php get_template_part('template-parts/template','code-whatsapp'); ?>
<?php wp_footer(); ?>

</body>
</html>
