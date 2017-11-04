<?php
    ScriptLoader::LoadPLUGINSCSS('inputfile/css/component.css');
    ScriptLoader::LoadPLUGINSJS('inputfile/js/custom-file-input.js');
    ScriptLoader::LoadCSS('footer');

    $contato_conteudo = Contato::sql("SELECT * FROM contato", SimpleOrm::FETCH_ONE);
?>
<style type="text/css">
    .parallax { background-image: url("<?= caminhoSite ?>/uploads/<?= $config->banner_newsletter ?>"); }
</style>
<footer>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero parallax newsletter Relative">
        <div class="container conteudo">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 chamada le-2">
                <h3 class="text-center branco-fonte Regular margin-zero" style="font-style:italic;"><?= $config->titulo_newsletter ?></h3>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input">
                <form action="<?= RAIZSITE ?>/formulario/?newsletter" method="post">
                    <div class="input-group">
                        <input type="hidden" name="email_disparo" value="<?= $config->email_newsletter ?>">
                        <input type="email" class="form-control email-news branco-fonte size18" name="email" onkeyup="this.value=this.value.replace(/[' '^A-ZçÇáÁàÀéèÉÈíìÍÌóòÓÒúùÚÙñÑ~&,#*+/=$%!;]/g,'')" placeholder="CADASTRE SEU E-MAIL PARA RECEBER NOSSA NEWSLETTER" required>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">CADASTRAR</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        if($pagina_atual == "home") {
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-dourado Relative contato">
        <div class="linha"></div>
        <div class="container conteudo">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center titulo bc-2">
                <h3 class="branco-fonte margin-zero icone">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </h3>
                <h3 class="branco-fonte margin-zero chamada">CONTATO</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dados">
                <div class="conteudo">
                    <p class="branco-fonte chamada margin-zero le-2"><?= $contato_conteudo->chamada ?></p>

                    <p class="Bold cnpj Uppercase margin-zero espaco le-2">
                    Brazilio Bacellar, Shirai Advogados <br>
                    <?= $config->codigo ?> • CNPJ <?= $config->cnpj ?></p>

                    <p class="branco-fonte margin-zero espaco le-2">
                    Tel.: <a href="tel:<?= $config->telefone ?>" class="link-default contato-telefone"><span class="size11">+55 41</span> <?= $config->telefone ?></a> <br>
                    Fax. <a href="tel:<?= $config->fax ?>" class="link-default contato-telefone"><span class="size11">+55 41</span> <?= $config->fax ?></a> </p>

                    <div class="espaco le-2">
                        <p class="branco-fonte margin-zero">ESCRITÓRIO</p>
                        <div class="branco-fonte endereco margin-zero">
                        <?= $config->endereco_escritorio ?></div>
                    </div>

                    <div class="espaco le-2">
                        <p class="branco-fonte margin-zero">ESTACIONAMENTO</p>
                        <div class="branco-fonte endereco margin-zero"><?= $config->endereco_estacionamento ?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form action="<?= RAIZSITE ?>/formulario/?contato" class="form-horizontal Roboto Regular" method="post" id="formulario">
                    <input type="hidden" name="email_disparo" value="<?= $config->email_contato ?>">

                    <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="nome" placeholder="NOME" required><br>
                    <input type="email" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="email" placeholder="E-MAIL" onkeyup="this.value=this.value.replace(/[' '^A-ZçÇáÁàÀéèÉÈíìÍÌóòÓÒúùÚÙñÑ~&,#*+/=$%!;]/g,'')" required><br>
                    <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado telefone" name="telefone" placeholder="TELEFONE" required><br>
                    <textarea class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="mensagem" rows="8" cols="3" placeholder="MENSAGEM" required></textarea><br>
                    <button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero footer-links bg-azul">
        <img src="<?= RAIZSITE ?>/imagens/onda-branca.png" class="img-responsive Absolute hidden-xs hidden-sm">
        
        <div class="container conteudo">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 imagem">
                <a href="<?= RAIZSITE ?>"><img src="<?= caminhoSite ?>/uploads/<?= $config->logo_footer ?>" class="img-responsive"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 dourado-fonte separador-footer links">
                <ul class="list-unstyled">
                    <li><a class="link-default" href="<?= RAIZSITE ?>/sobre">A EMPRESA</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/servicos">ÁREAS DE ATUAÇÃO</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/equipe">EQUIPE</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/contato">CONTATO</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/trabalhe-conosco">TRABALHE CONOSCO</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/links-uteis">LINKS ÚTEIS</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/consulta-processual">CONSULTA PROCESSUAL</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 dourado-fonte chamada">
                <p>FALE COM A GENTE</p>
                <p>Brazilio Bacellar Neto e Advogados <br>
                    <?= $config->codigo ?> | CNPJ <?= $config->cnpj ?> </p>
                <?= $config->endereco_escritorio ?>
                <p>Fone.: <a href="tel:<?= $config->telefone ?>" class="link-default">+ 55 41 <?= $config->telefone ?></a> <br>
                    Fax. <a href="tel:<?= $config->fax ?>" class="link-default">+ 55 41 <?= $config->fax ?></a> </p>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero copyright bg-copyright">
        <div class="container conteudo">
            <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12 assinatura">
                <p class="cinza-fonte-alternativo margin-zero size10"><span class="Lato Uppercase">© 2018 Brazilio Bacellar, Shirai Advogados</span> • <span class="OpenSans">Todos os direitos reservados.</span></p>
            </div>
            <div class="col-lg-3 col-md-1 hidden-sm hidden-xs">&nbsp;</div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 imagem">
                <a href="http://www.pepperscriacao.com" target="_blank"><img src="imagens/pepper.png" class="img-respnsive"></a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

<?php
    ScriptLoader::LoadPLUGINSJS('jQuery-Mask-Plugin-master/dist/jquery.mask.min.js');
?>
<script type="text/javascript">
	var waypoint1 = new Waypoint({
        element: document.getElementById('waypointMenu'),
        handler: function(direction) {
            if(direction == "down") {
                /* desativa o menu azul */
                $("nav.navbar").removeClass("menu-transparente");
                $("nav.navbar").addClass("menu-azul");
                /* desativa o menu azul */
            } else {
                /* ativa o menu transparente */
                $("nav.navbar").removeClass("menu-azul");
                $("nav.navbar").addClass("menu-transparente");
                /* ativa o menu transparente */
            }
        }
    });
    
    $('.owl-carousel.owl-associadas').owlCarousel({
        nav:false,
        dots:false,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1,
                loop:true
            },
            500:{
                items:2,
                loop:true
            },
            768:{
                items:3,
                loop:true
            },
            992:{
                items:4,
                loop:true
            },
            1200:{
                items:8,
                loop:true
            }
        }
    });

    $('.bc-1').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 200
    });
    $('.bc-2').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 300
    });
    $('.bc-3').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 300
    });

    $('.le-1').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInLeft',
        offset: 200
    });
    $('.le-2').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInLeft',
        offset: 300
    });
    $('.le-3').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInLeft',
        offset: 300
    });

    $('.do-1').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInDown',
        offset: 200
    });
    $('.do-2').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInDown',
        offset: 300
    });
    $('.do-3').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInDown',
        offset: 300
    });

    $('.ri-1').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInRight',
        offset: 200
    });
    $('.ri-2').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInRight',
        offset: 300
    });
    $('.ri-3').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInRight',
        offset: 300
    });
    
    new vUnit({
        CSSMap: {
            '.vh': {
                property: 'height',
                reference: 'vh'
            }
        }
    }).init();

    $(document).ready(function() {
        $('#iframeMaps').addClass('scrolloff');
        $('.google-maps').on('click', function () {
            $('#iframeMaps').removeClass('scrolloff');
        });

        $(".google-maps").mouseleave(function () {
            $('#iframeMaps').addClass('scrolloff');
        });

        $('.data').mask('00/00/0000');
        $('.telefone').mask('(00) 0000-0000');
        $('.celular').mask('(00) 0 0000-0000');
    });

    function Trim(str) {
        return str.replace(/^\s+|\s+$/g,"");
    }
</script>