<article class="Card item">
    <a class="Card-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <figure>
            <?php
            if (has_post_thumbnail()):
                the_post_thumbnail("senar-thumb-320", array("class" => "img-responsive Card-thumb", 'data-no-retina' => 'true'));
            else: $img_url = wp_get_attachment_image_src(get_field('imagem_padrao', 'option'), 'senar-thumb-320');
                ?>
                <img class="img-responsive Card-thumb" src="<?php echo $img_url; ?>" alt="Imagem Padrão" data-no-retina="true"> 
            <?php endif; ?>
        </figure>
        <h2 class="Card-title"><?php the_title(); ?></h2>
        <p class="Card-description"><?php echo get_the_excerpt(); ?></p></a>
    <a href="<?php the_permalink() ?>" class="btn btn-lg Button Button--secondary Icon Icon--arrow-rightAfter" title="Ir para o curso <?php the_title_attribute() ?>">Ir para o curso</a> 
</article>