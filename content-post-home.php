<?php
//$id_imagem_principal = get_post_thumbnail_id($post->ID);
//$large_image_url = array();
//if ($id_imagem_principal) {
//    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'senar-thumb-720-640');
//} else {
//    $large_image_url = wp_get_attachment_image_src(get_field('imagem_padrao', 'option'), 'senar-thumb-720-640');
//}
?>
<article class="col-sm-4">
    <div class="Card Card--notice">
        <header>
            <?php printf('<h3 class="Card-category">%1$s</h3>', get_the_category_list(', ')); ?>
        </header>
        <a class="Card-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
            <figure>
                <?php
                if (has_post_thumbnail()):
                    the_post_thumbnail("senar-thumb-720", array("class" => "img-responsive Card-thumb", 'data-no-retina' => 'true'));
                else:
                    $imgagem_padrao = get_field('imagem_padrao', 'option');

                    $size = 'senar-thumb-720';

                    $thumb = $imgagem_padrao['sizes'][$size];
                    
                                        ?>
                    <img class="img-responsive Card-thumb" src="<?php echo $thumb; ?>" alt="Imagem Padrão" data-no-retina="true"> 
                <?php endif; ?>
            </figure>
            <h2 class="Card-title"><?php the_title(); ?></h2>
            <p class="Card-description"><?php echo get_the_excerpt(); ?></p>
        </a>
    </div>
</article>