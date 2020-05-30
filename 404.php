<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/error.css">

<?php get_header(); ?>
<section id="error">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12"><h1>404!</h1><hr/></div>
            <div class="col-lg-12">
                <div >
                    <h1>Erro 404 - Não Encontrado</h1>
                    <p>Lamentamos, mas o que você procura não foi encontrado.</p>
                </div>
                <a  class="btn btn-more" href="<?php echo esc_url(home_url('/')) ?>shop">Voltar para loja</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>