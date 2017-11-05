<?php
    ScriptLoader::LoadCSS('home');
    $home = PaginaPrincipal::sql("SELECT * FROM pagina_principal", SimpleOrm::FETCH_ONE);
    $slides_home = SlidesHome::sql("SELECT * FROM slides_home");
    $servicos = Servicos::sql("SELECT * FROM servicos ORDER BY titulo");
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
    <div class="owl-carousel slider-topo owl-theme">
        <?php foreach($slides_home as $slides) { ?>
        <div class="item vh80">
            <div class="vh80" style="background: url('<?= caminhoSite ?>/uploads/<?= $slides->imagem ?>'); background-size: cover; background-position: center center; min-height: 481px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center slider-conteudo">
                    <p class="Uppercase dourado-fonte Light titulo"><?= $slides->titulo ?></p>
                    <img src="imagens/ond1.png" class="img-responsive">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero Uppercase branco-fonte Light size20 subtitulo MarginT7p MarginB9p"><?= $slides->chamada ?></div>
                    <a href="<?= $slides->link_ ?>" class="link-default botao-dourado" role="button">SAIBA MAIS&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 empresa padding-zero bg-bege">
    <div id="waypointMenu" style="position: absolute; left: 0; height: 101px; width: 50px; top: -101px"></div>
    <div class="linha-marrom"></div>

    <div class="container conteudo">
        <img src="<?= RAIZSITE ?>/imagens/balanca.png" class="img-responsive le-2">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center titulo bc-2">
            <h3 class="Medium size30 azul-fonte Uppercase"><?= $home->titulo_empresa ?></h3>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 descritivo bc-2">
            <div class="text-justify size16 Medium"><?= $home->texto_empresa ?></div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <a href="<?= RAIZSITE ?>/sobre" class="link-default botao-azul" role="button">SAIBA MAIS&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <img src="<?= RAIZSITE ?>/imagens/ond2.png" class="img-responsive Absolute hidden-sm hidden-xs">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 areas-atuacao padding-zero bg-branco">
    <div class="linha-marrom"></div>
    <div class="container conteudo">
        <img src="<?= RAIZSITE ?>/imagens/martelo.png" class="img-responsive le-2">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center titulo bc-2">
            <h3 class="Medium size30 azul-fonte Uppercase"><?= $home->titulo_areas ?></h3>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 descritivo bc-2">
            <div class="text-justify size16 Medium margin-zero"><?= $home->texto_areas ?></div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 lista-itens">
            <?php
                $cont = 1;
                $lenght = count($servicos);
                foreach($servicos as $servico){
                    if(in_array($cont, array(1,5,9,13))){
                        echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero itens">';
                    }
            ?>               
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 item bc-2">
                        <img src="<?= caminhoSite ?>/uploads/<?= $servico->icone ?>" class="img-responsive">
                        <a href="<?= RAIZSITE ?>/servicos/#<?= $servico->link_servico ?>" class="link-default item-link">
                            <h5 class="text-center MarginT10 Bold"><?= $servico->titulo ?>&nbsp;&nbsp;<span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></h5>
                        </a>
                    </div>
            <?php
                 if(in_array($cont, array(4,8,12,16))){
                     echo '</div>';
                 } elseif($cont == $lenght){
                     echo '</div>';
                 }
                 
                 $cont++;
                }
            ?>
        </div>

        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 descritivo-alternativo bc-2">
            <a href="<?= RAIZSITE ?>/equipe" class="Medium link-default equipe-link">
                CONHEÇA NOSSA EQUIPE&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
    </div>
    <img src="<?= RAIZSITE ?>/imagens/ond2.png" class="img-responsive Absolute hidden-sm hidden-xs">
</div>

<script type="text/javascript">
    $('.owl-carousel.slider-topo').owlCarousel({
        nav:true,
        navText: ["<div class='prev-icon'></div>","<div class='next-icon'></div>"],
        dots:true,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:12000,
        autoplayHoverPause:false,
        items:1,
    });
    $('.owl-carousel.slider-topo').on('translated.owl.carousel', function(event) {
        $(".slider-conteudo .titulo").addClass("animated fadeInLeft").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass("animated esconder fadeInLeft");
        });
        $(".slider-conteudo .subtitulo").addClass("animated fadeInRight").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass("animated esconder fadeInRight");
        });
    });
</script>