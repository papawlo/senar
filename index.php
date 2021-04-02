<?php get_header(); ?>

<main class="Page Page--home" role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <section id="destaques" class="col-xs-12 Release Release--home">
                        <div class="owl-slide">
                            <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'post__in' => get_option('sticky_posts'),
                                'ignore_sticky_posts' => true,
                            );

                            $query_destaque = new WP_Query($args);
                            if ($query_destaque->have_posts()):
                                ?>

                                <?php
                                // Start the loop.
                                while ($query_destaque->have_posts()) : $query_destaque->the_post();
                                    get_template_part('content', 'post-slideshow');
                                // End the loop.
                                endwhile;
                                ?>
                            <?php endif; ?>
                            <div class="Release-item" style="background-image: url('https://placeimg.com/869/350/nature');">
                                <div class="Release-caption"> <a href="javascript:" title="Sustentabilidade"><h3 class="Release-category">Sustentabilidade</h3></a> <a href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG"><h2 class="Release-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2></a>											</div>
                                <div class="Release-gradient"></div>
                            </div>
                            <div class="Release-item" style="background-image: url('https://placeimg.com/869/350/tech');">
                                <div class="Release-caption"> <a href="javascript:" title="Sustentabilidade"><h3 class="Release-category">Sustentabilidade</h3></a> <a href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG"><h2 class="Release-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2></a>											</div>
                                <div class="Release-gradient"></div>
                            </div>
                            <div class="Release-item" style="background-image: url('https://placeimg.com/869/350/animals');">
                                <div class="Release-caption"> <a href="javascript:" title="Sustentabilidade"><h3 class="Release-category">Sustentabilidade</h3></a> <a href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG"><h2 class="Release-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2></a>											</div>
                                <div class="Release-gradient"></div>
                            </div>
                        </div>
                    </section>
                    <section id="noticias" class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-12 hidden-xs">
                                <hr class="Separator">
                            </div>
                            <?php
                            $args = array(
                                'posts_per_page' => 4,
                                'post__not_in' => get_option('sticky_posts'),
                                'ignore_sticky_posts' => false,
                            );

                            $query = new WP_Query($args);
                            if ($query->have_posts()):
                                ?>

                                <?php
                                // Start the loop.
                                while ($query->have_posts()) : $query->the_post();
                                    get_template_part('content', 'post-home');
                                // End the loop.
                                endwhile;
                            endif;
                            ?>
<!--                            <article class="col-sm-4">
                                <div class="Card Card--notice">
                                    <header>
                                        <h3 class="Card-category">Agrícola e pecuária</h3> </header>
                                    <a class="Card-link" href="./noticia.html" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                        <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/720/640/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                        <h2 class="Card-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2>
                                        <p class="Card-description">Devem ser limpas 800 lagoas.</p>
                                    </a>
                                </div>
                            </article>
                            <article class="col-sm-4">
                                <div class="Card Card--notice">
                                    <header>
                                        <h3 class="Card-category">Agrícola e pecuária</h3> </header>
                                    <a class="Card-link" href="./noticia.html" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                        <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/720/640/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                        <h2 class="Card-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2>
                                        <p class="Card-description">Devem ser limpas 800 lagoas.</p>
                                    </a>
                                </div>
                            </article>
                            <div class="col-sm-12 hidden-xs">
                                <hr class="Separator">
                            </div>
                            <article class="col-sm-4">
                                <div class="Card Card--notice">
                                    <header>
                                        <h3 class="Card-category">Agrícola e pecuária</h3> </header>
                                    <a class="Card-link" href="./noticia.html" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                        <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/720/640/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                        <h2 class="Card-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2>
                                        <p class="Card-description">Devem ser limpas 800 lagoas.</p>
                                    </a>
                                </div>
                            </article>
                            <article class="col-sm-4">
                                <div class="Card Card--notice">
                                    <header>
                                        <h3 class="Card-category">Agrícola e pecuária</h3> </header>
                                    <a class="Card-link" href="./noticia.html" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                        <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/720/640/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                        <h2 class="Card-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2>
                                        <p class="Card-description">Devem ser limpas 800 lagoas.</p>
                                    </a>
                                </div>
                            </article>
                            <article class="col-sm-4">
                                <div class="Card Card--notice">
                                    <header>
                                        <h3 class="Card-category">Agrícola e pecuária</h3> </header>
                                    <a class="Card-link" href="./noticia.html" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                        <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/720/640/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                        <h2 class="Card-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2>
                                        <p class="Card-description">Devem ser limpas 800 lagoas.</p>
                                    </a>
                                </div>
                            </article>-->
                        </div>
                        <footer class="row u-vMarginTop u-vMarginBottom">
                            <div class="col-sm-12 text-center"> <a href="<?php echo site_url('noticias'); ?>" class="btn btn-lg Button Button--secondary Icon Icon--arrow-rightAfter" title="Ir para notícias">Ir para notícias</a> </div>
                        </footer>
                    </section>
                </div>
            </div>
            <?php // get_sidebar();     ?>
            <aside class="col-md-3 col-sm-12">
                <div class="Climate Widget hidden-xs hidden-sm">
                    <div class="Climate-container">
                        <div class="Climate-content">
                            <h3 class="Climate-date">12 de março de 2015</h3>
                            <h2 class="Climate-location">João Pessoa - PB</h2>
                            <h4 class="Climate-temp Icon Icon--clockBefore">30º</h4> </div>
                        <footer class="Climate-footer">
                            <p class="Climate-tempMax Icon Icon--clockBefore">32<span>max</span></p>
                            <p class="Climate-tempMin Icon Icon--clockBefore">22<span>min</span></p>
                        </footer>
                    </div>
                </div>
                <div class="Quotation Widget">
                    <div class="Quotation-container">
                        <header class="Quotation-header">
                            <h2 class="Quotation-title">Cotação</h2>
                            <h3 class="Quotation-date">Atualizado em: 12/03/2015</h3> </header>
                        <form class="Quotation-form">
                            <select name="product" class="Select Select--quotation">
                                <option value="0">Selecione...</option>
                                <option value="1" selected="selected">Soja</option>
                            </select>
                        </form>
                        <table class="table Quotation-table">
                            <caption>R$/ @ FOB</caption>
                            <thead>
                                <tr>
                                    <th>Uf</th>
                                    <th>Praça</th>
                                    <th>Atual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PE</td>
                                    <td>Recife</td>
                                    <td>47,00</td>
                                </tr>
                                <tr>
                                    <td>PR</td>
                                    <td>Maringá</td>
                                    <td>55,00</td>
                                </tr>
                                <tr>
                                    <td>SP</td>
                                    <td>Barretos</td>
                                    <td>110,00</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="Quotation-source">Disponibilizado por: <a href="javascript:">Safras e mercado</a></p>
                    </div>
                </div>
                <div class="Ad Widget hidden-xs hidden-sm">
                    <div class="Ad-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/Ad-2.jpg)">
                        <h2 class="Ad-title">Fique por dentro dos cursos</h2>
                        <p class="Ad-description">Saiba mais sobre os cursos oferecidos pelo Senar.</p> <a href="javascript:" class="btn Button Button--secondary" title="Ver curso">Ver cursos</a> </div>
                </div>
                <div class="Ad Widget hidden-sm">
                    <div class="Ad-container" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/Ad-1.jpg)">
                        <h2 class="Ad-title">Prêmio Merito Rural</h2> <a href="javascript:" class="btn Button Button--secondary" title="Ver notícias">Ver notícia</a> </div>
                </div>
            </aside>
        </div>
    </div>
    <?php $image_chamada_url = wp_get_attachment_image_src(get_field("segunda_chamada_imagem", 'option'), 'senar-thumb-1600'); ?>
    <section id="chamada" class="Highlight u-vMarginBottom" style="background-image: url(<?php echo $image_chamada_url[0]; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-6">
                    <h2 class="Highlight-title"><?php the_field("segunda_chamada_titulo", 'option'); ?></h2>
                    <p class="Highlight-description"><?php echo get_field("segunda_chamada_descricao", 'option'); ?></p> <a href="<?php the_field("segunda_chamada_link", 'option') ?>" class="btn btn-lg Button Button--secondary" title="Ver lista de aprovados">Ver lista de aprovados</a> </div>
            </div>
        </div>
    </section>
    <section id="cursos" class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="Panel panel panel-default panel-lg">
                    <div class="panel-heading">
                        <h1 class="Panel-title Icon Icon--paperBefore">Cursos Senar Paraíba</h1> </div>
                    <div class="panel-body">
                        <div class="owl-carousel">
                            <?php
                            $args = array(
                                'post_type' => 'curso',
                                'posts_per_page' => 6,
                                'post__in' => get_option('sticky_posts'),
                                'ignore_sticky_posts' => 1,
                            );

                            $query_cursos = new WP_Query($args);
//                            print_r($query_cursos);


                            if ($query_cursos->have_posts()):
                                ?>
                                <?php
                                // Start the loop.
                                while ($query_cursos->have_posts()) : $query_cursos->the_post();
                                    get_template_part('content', 'curso-home');
                                // End the loop.
                                endwhile;
                                ?>
                            <?php endif; ?>
<!--                            <article class="Card item">
                                <a class="Card-link" href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                    <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/320/240/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                    <h2 class="Card-title">Capitação tecnológica em silvicultura</h2>
                                    <p class="Card-description">Uma pequena descrição sobre esse curso, algo para fazer o usuário entender.</p> </a><a class="btn btn-lg Button Button--secondary Icon Icon--arrow-rightAfter" title="Ir para o curso">Ir para o curso</a> 
                            </article>
                            <article class="Card item">
                                <a class="Card-link" href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                    <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/320/240/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                    <h2 class="Card-title">Capitação tecnológica em silvicultura</h2>
                                    <p class="Card-description">Uma pequena descrição sobre esse curso, algo para fazer o usuário entender.</p> </a><a class="btn btn-lg Button Button--secondary Icon Icon--arrow-rightAfter" title="Ir para o curso">Ir para o curso</a>
                            </article>
                            <article class="Card item">
                                <a class="Card-link" href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                    <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/320/240/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                    <h2 class="Card-title">Capitação tecnológica em silvicultura</h2>
                                    <p class="Card-description">Uma pequena descrição sobre esse curso, algo para fazer o usuário entender.</p></a> <a class="btn btn-lg Button Button--secondary Icon Icon--arrow-rightAfter" title="Ir para o curso">Ir para o curso</a>
                            </article>
                            <article class="Card item">
                                <a class="Card-link" href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                    <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/320/240/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                    <h2 class="Card-title">Capitação tecnológica em silvicultura</h2>
                                    <p class="Card-description">Uma pequena descrição sobre esse curso, algo para fazer o usuário entender.</p></a> <a class="btn btn-lg Button Button--secondary Icon Icon--arrow-rightAfter" title="Ir para o curso">Ir para o curso</a>
                            </article>
                            <article class="Card item">
                                <a class="Card-link" href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                    <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/320/240/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                    <h2 class="Card-title">Capitação tecnológica em silvicultura</h2>
                                    <p class="Card-description">Uma pequena descrição sobre esse curso, algo para fazer o usuário entender.</p></a> <a class="btn btn-lg Button Button--secondary Icon Icon--arrow-rightAfter" title="Ir para o curso">Ir para o curso</a>
                            </article>
                            <article class="Card item">
                                <a class="Card-link" href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
                                    <figure> <img class="img-responsive Card-thumb" src="https://placeimg.com/320/240/nature" alt="Nature Image" data-no-retina="true"> </figure>
                                    <h2 class="Card-title">Capitação tecnológica em silvicultura</h2>
                                    <p class="Card-description">Uma pequena descrição sobre esse curso, algo para fazer o usuário entender.</p></a> <a class="btn btn-lg Button Button--secondary Icon Icon--arrow-rightAfter" title="Ir para o curso">Ir para o curso</a>
                            </article>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
