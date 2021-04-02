<footer class="Footer">
    <div class="container">
        <div class="row">
            <!-- facebook -->
            <div class="Footer-social col-xs-12 col-sm-6 col-sm-push-6 col-lg-3 col-lg-offset-1 col-lg-push-4">
                <h3 class="Footer-title Footer-title--negativeMargin Footer-title--icon Icon Icon--usersBefore">Redes sociais</h3>
                <div class="LikeBox">
                    <div class="fb-page" data-href="https://www.facebook.com/faepasenarpb" data-width="320" data-height="335" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
                        <div class="fb-xfbml-parse-ignore">
                            <blockquote cite="https://www.facebook.com/faepasenarpb"><a href="https://www.facebook.com/faepasenarpb">Faepa/Senar PB</a></blockquote>
                        </div>
                    </div>
                </div>
                <hr class="Separator Separator--dark hidden-sm">
                <h3 class="Footer-title Footer-title--iconBrazil Footer-title--icon Icon Icon--brazilBefore">Portal da transparência</h3> <a title="Clique e tenha acesso às informações" class="Footer-link Footer-link--transparency" href="#">Clique e tenha acesso às informações</a> </div>
            <!-- restrict area -->
            <div class="Footer-restrictArea col-xs-12 col-sm-5 col-sm-pull-6 col-lg-3 col-lg-offset-1 col-lg-pull-4">
                <h3 class="Footer-title Footer-title--border">Área restrita</h3>
                <form action="javascript:" class="LoginForm">
                    <div class="form-group">
                        <label for="login" class="LoginForm-label">Login</label>
                        <input id="login" class="form-control input-lg Input Input--text" type="text"> </div>
                    <div class="form-group">
                        <label for="password" class="LoginForm-label">Senha</label>
                        <input id="password" class="form-control input-lg Input Input--text" type="password"> </div>
                    <button class="btn btn-lg Button Button--primary" title="Entrar">Entrar</button> <a class="LoginForm-forgot pull-right" href="#" title="Esqueceu?">Esqueceu?</a> </form>
                <hr class="Separator Separator--dark visible-xs hidden-sm">
                <h3 class="Footer-title">Senar paraíba</h3>
                <p class="Footer-address Icon Icon--markerBefore">R.: Eng. Leonardo Arcoverde, 320, Jaguaribe /João Pessoa - PB CEP: 58015-660</p>
                <p class="Footer-phone Icon Icon--phoneBefore">(83) 3048 6050</p>
            </div>
            <!-- sitemap -->
            <div class="Footer-siteMap col-xs-12 col-sm-6 col-sm-push-6 col-lg-3 col-lg-offset-1 col-lg-push-0">
                <h3 class="Footer-title">Mapa do site</h3>
                <ul class="Footer-mapList list-unstyled text-uppercase">
                    <li class="Footer-mapListItem"><a href="#" title="O Senar" class="Footer-link">O Senar</a></li>
                    <li class="Footer-mapListItem"><a href="#" title="Notícias" class="Footer-link">Notícias</a></li>
                    <li class="Footer-mapListItem"><a href="#" title="Programas" class="Footer-link">Programas</a></li>
                    <li class="Footer-mapListItem"><a href="#" title="Cursos e Treinamentos" class="Footer-link">Cursos e Treinamentos</a></li>
                    <li class="Footer-mapListItem"><a href="#" title="Biblioteca" class="Footer-link">Biblioteca</a></li>
                    <li class="Footer-mapListItem"><a href="#" title="Contato" class="Footer-link">Contato</a></li>
                    <li class="Footer-mapListItem"><a href="#" title="Prêmio Jornalismo" class="Footer-link">Prêmio Jornalismo</a></li>
                </ul>
                <button title="Voltar ao topo" class="Button Button--tertiary Button--backToTop Icon Icon--up-openBefore hidden-xs hidden-sm hidden-md btn btn-lg pull-right"></button>
            </div>
        </div>
    </div>
</footer>
<?php // all js scripts are loaded in library/bones.php  ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jQuery-Mask-Plugin/dist/jquery.mask.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jqueryui/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/jqueryui/ui/i18n/datepicker-pt-BR.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl.carousel/dist/owl.carousel.min.js"></script>
<?php wp_footer(); ?>
<!-- scripts -->
<script>
    !function(d, s, id)
    {
        var js, fjs = d.getElementsByTagName(s)[0],
                p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id))
        {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');

</script>
<div id="fb-root"></div>
<script>
    (function(d, s, id)
    {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1433197473568587";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>


<!--<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>-->
</body>

</html>
