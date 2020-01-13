<?php
/* 
    template name: Padrão
*/


get_header();
?>
<div class="container">


    <?php query_posts('post_type=imoveis'); ?>

    <?php if (have_posts()) :

        while (have_posts()) : ?>
            <div class="row">
                <?php the_post(); ?>

                <h1> <?php the_title(); ?> </h1>
       
                <p><?php the_post_thumbnail(); ?></p>
                <br>
                <?php if (get_field('valor_do_imovel')) :
                    the_field('valor_do_imovel');
                endif; ?>

                <?php if (get_field('disponibilidade')) :
                    the_field('disponibilidade');
                endif; ?>
 
                <?php if (get_field('tipo')) :
                    the_field('tipo');
                endif; ?>
 
                <?php if (get_field('localizacao')) :
                    the_field('localizacao');
                endif; ?>
</div>
            <?php endwhile; ?>
            
            <? php else: ?>
            não há imoveis cadastrados
        <?php endif;

        ?>
</div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>