<link rel="stylesheet" href="<?php echo get_template_directory_uri()  ?>/css/search.css">

<?php get_header(); ?>
<section id="search">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <?php if ( have_posts() ) : ?>
                    <header class="page-header">
                        <h1 class="page-title"><?php printf( __( 'Resultado da pesquisa: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?> </h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="resultados">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?> </a></h2>
                            <p><?php the_excerpt(); ?></p>  
                        </div>
                        <hr>
                        <!-- <?php get_template_part( 'content', 'search' ); ?> -->
                    <?php endwhile; ?>
                    <?php else : ?>
                        <?php echo '<h2 style="padding-bottom:0px;">Sorry!</h2><br><p>Não há conteúdo relacionado com sua pesquisa</p>';
                        ?>
                        <!--<?php echo '<span type="button" class="btn btn-primary" data-toggle="modal" data-target="/">Voltar</span>'; ?>-->
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<div id="main-pagination">
    <div class="container">
        <div class="row">
            <?php
            global $wp_query;

            $big = 999999999;
            echo '<div id="pg-links" class="paginate-links">';
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'prev_text' => __(' < '),
                'next_text' => __(' > '),
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
            ) );
            echo '</div>';

            ?>
        </div>
    </div>
</div>
    <?php get_footer(); ?>
