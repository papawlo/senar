<?php get_header(); ?>
<main class="Page" role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="Page-content">
                    <h2 class="Icon Icon--docsBefore">Mantenha-se informado</h2> </div>
                <section id="noticias">
                    <div class="row">
                        <?php
                        $args = array(
                            'posts_per_page' => 9,
                            'paged' => (get_query_var('paged') == 0 ) ? 1 : get_query_var('paged'),
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
                        </article>
                        <div class="col-sm-12 hidden-xs">
                            <hr class="Separator">
                        </div>
                        <article class="col-sm-4">
                            <div class="Card Card--notice">
                                <header>
                                    <h3 class="Card-category">Agrícola e pecuária</h3> </header>
                                <a class="Card-link" href="./noticia.html" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">
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
                                    <h2 class="Card-title">Projeto recupera e transforma lagoas antigas em reservatórios em MG</h2>
                                    <p class="Card-description">Devem ser limpas 800 lagoas.</p>
                                </a>
                            </div>
                        </article>
                    </div>
                    <footer class="row u-vMarginTop">
                        <div class="col-sm-12 text-center">
                            <a class="btn btn-sm Button Button--secondary Icon Icon--arrow-leftAfter" title="Página anterior"></a> <span class="PageCounter">
                                <span class="PageCounter-currentPage">1</span> /846 </span>
                            <a class="btn btn-sm Button Button--secondary Icon Icon--arrow-rightAfter" title="Próxima página"></a>
                        </div>
                    </footer>
                </section>
            </div>
            <aside class="col-md-3 col-sm-12">
                <div class="Ad Widget">
                    <div class="Ad-container" style="background-image: url(<?php echo get_template_uri(); ?>/assets/img/Ad-2.jpg)">
                        <h2 class="Ad-title">Fique por dentro dos cursos</h2>
                        <p class="Ad-description">Saiba mais sobre os cursos oferecidos pelo Senar.</p> <a href="javascript:" class="btn Button Button--secondary" title="Ver curso">Ver cursos</a> </div>
                </div>
                <div class="News hidden-xs hidden-sm">
                    <div class="News-container">
                        <h2 class="News-title">Últimas notícias</h2>
                        <ol class="News-list list-unstyled">
                            <li> <a class="News-link" href="javascript:" title="Alerta da OMS sobre glifosato piora perspectiva para a Monsanto">Alerta da OMS sobre glifosato piora perspectiva para a Monsanto</a> </li>
                            <li> <a class="News-link" href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">Projeto recupera e transforma lagoas antigas em reservatórios em MG</a> </li>
                            <li> <a class="News-link" href="javascript:" title="Alerta da OMS sobre glifosato piora perspectiva para a Monsanto">Alerta da OMS sobre glifosato piora perspectiva para a Monsanto</a> </li>
                            <li> <a class="News-link" href="javascript:" title="Projeto recupera e transforma lagoas antigas em reservatórios em MG">Projeto recupera e transforma lagoas antigas em reservatórios em MG</a> </li>
                            <li> <a class="News-link" href="javascript:" title="Alerta da OMS sobre glifosato piora perspectiva para a Monsanto">Alerta da OMS sobre glifosato piora perspectiva para a Monsanto</a> </li>
                        </ol>
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
            </aside>
        </div>
    </div>
</main>
<?php get_footer(); ?>