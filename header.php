<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <title><?php wp_title(''); ?></title>

        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/manifest.json">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/mstile-144x144.png">
        <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/browserconfig.xml">
        <meta name="theme-color" content="#699a33">
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head  ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if (lt IE 9) & (!IEMobile)]>
<p class="browsehappy">Você está usando um <strong>navegador antigo</strong>. Por favor <a href="http://browsehappy.com/">atualize o seu navegador</a> para uma boa experiência.</p>
<![endif]-->
        <nav class="navbar navbar-default Navbar Navbar--menu">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"> <span class="sr-only">Menu</span> </button>
                <div class="Brand Brand--faepa">
                    <a href="<?php echo home_url(); ?>" rel="nofollow"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-faepa.png" class="img-responsive"> </a>
                </div>
                <div class="Brand Brand--senar">
                    <a href="<?php echo home_url(); ?>" rel="nofollow"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-senar.png" class="img-responsive"> </a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <?php
//                        wp_nav_menu(array(
//                            'container' => false, // remove nav container
//                            'container_class' => '', // class of container (should you choose to use it)
//                            'menu' => __('The Main Menu', 'senar'), // nav name
//                            'menu_class' => 'nav navbar-nav', // adding custom nav class
//                            'theme_location' => 'main-nav', // where it's located in the theme
//                            'before' => '', // before the menu
//                            'after' => '', // after the menu
//                            'link_before' => '', // before each link
//                            'link_after' => '', // after each link
//                            'depth' => 0, // limit the depth of the nav
//                            'fallback_cb' => ''                             // fallback function (if there is one)
//                        ));
                    ?>
                    <ul class="nav navbar-nav">
                        <li class="active hidden-md"> <a href="<?php echo home_url(); ?>" title="Início" class="NavLink NavLink--menu">Início</a> </li>
                        <li class="dropdown Dropdown Dropdown--large"> <a href="javascript:" class="NavLink NavLink--menu dropdown-toggle" data-toggle="dropdown" title="O Senar">O Senar</a>
                            <div class="dropdown-menu Drodown-area">
                                <div class="container">
                                    <ul class="row">
                                        <li class="col-sm-12 col-md-2 Navbar-menuSenar">
                                            <ul>
                                                <li><a href="./quem-somos.html" title="Quem somos" class="NavLink NavLink--dropdown">Quem somos</a></li>
                                                <li><a href="./missao.html" title="Nossa missão" class="NavLink NavLink--dropdown">Nossa missão</a></li>
                                                <li><a href="javascript:" title="Código e ética" class="NavLink NavLink--dropdown">Código e ética</a></li>
                                                <li><a href="javascript:" title="Presidente e superintendente" class="NavLink NavLink--dropdown">Presidente e superintendente</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-12 col-md-2">
                                            <ul>
                                                <li><a href="./videos.html" title="Vídeos" class="NavLink NavLink--dropdown">Vídeos</a></li>
                                                <li><a href="javascript:" title="Licitações" class="NavLink NavLink--dropdown">Licitações</a></li>
                                                <li><a href="./sindicatos.html" title="Sindicatos" class="NavLink NavLink--dropdown">Sindicatos</a></li>
                                                <li><a href="./arrecadacoes.html" title="Arrecadações" class="NavLink NavLink--dropdown">Arrecadações</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown Dropdown Dropdown--large"> <a href="javascript:" class="NavLink NavLink--menu dropdown-toggle" data-toggle="dropdown" title="Notícias">Notícias</a>
                            <div class="dropdown-menu Drodown-area">
                                <div class="container">
                                    <ul class="row">
                                        <li class="col-sm-12 col-md-2 Navbar-menuNoticias">
                                            <ul>
                                                <li><a href="./noticias.html" title="Agrícola e Pecuária" class="NavLink NavLink--dropdown">Agrícola e Pecuária</a></li>
                                                <li><a href="./noticias.html" title="Crédito Rural" class="NavLink NavLink--dropdown">Crédito Rural</a></li>
                                                <li><a href="./noticias.html" title="Sustentabilidade" class="NavLink NavLink--dropdown">Sustentabilidade</a></li>
                                                <li><a href="./noticias.html" title="Economia e Negócio" class="NavLink NavLink--dropdown">Economia e Negócio</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-12 col-md-3">
                                            <ul>
                                                <li><a href="./noticias.html" title="Pesquisa e Tecnologia" class="NavLink NavLink--dropdown">Pesquisa e Tecnologia</a></li>
                                                <li><a href="./noticias.html" title="Casos de Sucesso" class="NavLink NavLink--dropdown">Casos de Sucesso</a></li>
                                                <li><a href="./noticias.html" title="Senar-PB" class="NavLink NavLink--dropdown">Senar-PB</a></li>
                                                <li><a href="./noticias.html" title="Notícia aberta" class="NavLink NavLink--dropdown">Notícia aberta</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown Dropdown Dropdown--large"> <a href="javascript:" class="NavLink NavLink--menu dropdown-toggle" data-toggle="dropdown" title="Programas">Programas</a>
                            <div class="dropdown-menu Drodown-area">
                                <div class="container">
                                    <ul class="row">
                                        <li class="col-sm-12 col-md-2 Navbar-menuProgramas">
                                            <ul>
                                                <li><a href="./programas.html" title="Sertão Empreendedor" class="NavLink NavLink--dropdown">Sertão Empreendedor</a></li>
                                                <li><a href="./programas.html" title="Balde cheio" class="NavLink NavLink--dropdown">Balde cheio</a></li>
                                                <li><a href="./programas.html" title="Pronatec" class="NavLink NavLink--dropdown">Pronatec</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-12 col-md-2">
                                            <ul>
                                                <li><a href="./programas.html" title="Redetec" class="NavLink NavLink--dropdown">Redetec</a></li>
                                                <li><a href="./programas.html" title="NCR" class="NavLink NavLink--dropdown">NCR</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="./cursos.html" title="Cursos e Treinamentos" class="NavLink NavLink--menu">Cursos e Treinamentos</a></li>
                        <li><a href="./index_blog.html" title="Blog Senar" class="NavLink NavLink--menu">Blog Senar</a></li>
                        <li><a href="./contato.html" title="Contato" class="NavLink NavLink--menu">Contato</a></li>
                        <li><a href="./premio_jornalismo.html" title="Prêmio Jornalismo" class="NavLink NavLink--menu">Prêmio Jornalismo</a></li>
                        <li class="dropdown Dropdown Dropdown--large hidden-xs hidden-sm">
                            <a href="javascript:" title="Buscar" data-toggle="dropdown" class="dropdown-toggle NavLink NavLink--search Icon Icon--searchBefore"></a>
                            <div class="dropdown-menu Drodown-area">
                                <div class="container">
                                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                        <form action="javascript:" class="Search-form row">
                                            <div class="col-sm-6 col-sm-offset-2">
                                                <div class="form-group">
                                                    <label for="search" class="sr-only">Buscar</label>
                                                    <input type="text" class="form-control input-lg Input Input--text" id="search"> </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <button class="btn btn-lg btn-block Button Button--primary Icon Icon--searchAfter" type="submit">Buscar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="visible-xs-block visible-sm-block">
                            <form action="javascript:" class="Search-form row">
                                <div class="col-xs-9">
                                    <div class="form-group">
                                        <label for="search" class="sr-only">Buscar</label>
                                        <input type="text" class="form-control input-lg Input Input--text" id="search"> </div>
                                </div>
                                <div class="col-xs-3">
                                    <button class="NavLink NavLink--search Icon Icon--searchBefore" type="submit"></button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>
            <div id="topo" class="Highlight Highlight--fHeight" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/Highlight-1.jpg)"></div>
            <div class="Bar Bar--color2">
                <div class="container">
                    <div class="row">
                        <div class="Newsletter">
                            <div class="col-sm-12 col-md-5 u-lg-valign">
                                <h2 class="Newsletter-title Icon Icon--emailBefore Icon--down-openAfter">Newsletter</h2>
                                <p class="Newsletter-description">Cadastre seu e-mail para receber nossos informativos.</p>
                            </div>
                            <div class="col-sm-12 col-md-7 u-lg-valign">
                                <form action="javascript:" class="Newsletter-form row">
                                    <div class="col-sm-9 col-md-8">
                                        <div class="form-group Newsletter-email">
                                            <label for="newsletter" class="sr-only">E-mail</label>
                                            <input id="newsletter" class="form-control input-lg Input Input--text" placeholder="Digite seu endereço de e-mail" type="text"> </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 Newsletter-send">
                                        <button class="btn btn-lg btn-block Button Button--primary Icon Icon--directionAfter">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
