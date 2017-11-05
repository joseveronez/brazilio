<?php
    ScriptLoader::LoadCSS('sobre');
    $conteudo = PaginaEmpresa::retrieveByPk(1);
    $diferenciais = Diferenciais::all();
    $slides_cima = SlidesEmpresa::sql("SELECT * FROM slides_empresa WHERE slider = 1 ORDER BY posicao"); 
    $slides_lateral = SlidesEmpresa::sql("SELECT * FROM slides_empresa WHERE slider = 2 ORDER BY posicao"); 
    $slides_baixo = SlidesEmpresa::sql("SELECT * FROM slides_empresa WHERE slider = 3 ORDER BY posicao"); 
?>
<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/cms/uploads/<?= $conteudo->banner_topo ?>"); background-position: center center; background-attachment: fixed; background-repeat: no-repeat; background-size: cover; }
    .prev-icon { background: url(<?= RAIZSITE ?>/imagens/left.png); background-size: 20%; background-position: center center; background-repeat: no-repeat; height: 50px; width: 50px; }
    .next-icon { background: url(<?= RAIZSITE ?>/imagens/right.png); background-size: 20%; background-position: center center; background-repeat: no-repeat; height: 50px; width: 50px; }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light"><?= $conteudo->titulo ?></h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="dourado-fonte Uppercase"><?= $conteudo->titulo ?></span></p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco PaddingT12p">
    <div id="waypointMenu" style="position: absolute; left: 0; height: 101px; width: 50px; top: -101px"></div>
    <div class="linha"></div>
    <div class="container">
        <img src="<?= RAIZSITE ?>/imagens/balanca.png" class="img-responsive">
        
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 MarginT10p le-2">
            <?= $conteudo->texto ?>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
    <div class="container galeria">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-branco MarginT10p">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 bg-dourado chamada-galeria le-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="branco-fonte Uppercase"><?= $conteudo->texto_carousel ?></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padding-zero">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul">
                        <div class="owl-carousel slider-topo owl-theme do-2" id="owl2">
                            <?php foreach($slides_cima as $cima) { ?>
                            <a data-fancybox="galeria1" href="<?= RAIZSITE ?>/cms/uploads/<?= $cima->imagem ?>">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" style="background: url('<?= RAIZSITE ?>/cms/uploads/<?= $cima->imagem ?>'); background-size: cover; background-position: center center; height: 200px;"></div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul">
                        <div class="owl-carousel slider-topo owl-theme bc-2" id="owl3">
                            <?php foreach($slides_lateral as $lateral) { ?>
                            <a data-fancybox="galeria2" href="<?= RAIZSITE ?>/cms/uploads/<?= $lateral->imagem ?>">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" style="background: url('<?= RAIZSITE ?>/cms/uploads/<?= $lateral->imagem ?>'); background-size: cover; background-position: center center; height: 130px;"></div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-zero">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul">
                        <div class="owl-carousel slider-topo owl-theme ri-2" id="owl4">
                            <?php foreach($slides_baixo as $baixo) { ?>
                            <a data-fancybox="galeria3" href="<?= RAIZSITE ?>/cms/uploads/<?= $baixo->imagem ?>">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" style="background: url('<?= RAIZSITE ?>/cms/uploads/<?= $baixo->imagem ?>'); background-size: cover; background-position: center center; height: 330px;"></div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
    <div class="container diferenciais">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <h3 class="dourado-fonte Light size40 margin-zero"><?= $conteudo->titulo_diferenciais ?></h3>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 text-left Medium diferenciais-lista">
            <?= $conteudo->texto_diferenciais ?>
            <ul class="lista">
                <?php foreach($diferenciais as $diferencial) { ?>
                <li class="MarginT4p bc-2"><?= $diferencial->texto ?></li>
                <?php } ?>
            </ul>

            <a href="<?= RAIZSITE ?>/servicos" class="Medium link-default equipe-link le-2">
                CONHEÇA NOSSOS SERVIÇOS&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
    </div>
</div>

<?php
    ScriptLoader::LoadPLUGINSCSS('fancybox-master/dist/jquery.fancybox.min.css');
    ScriptLoader::LoadPLUGINSJS('fancybox-master/dist/jquery.fancybox.min.js');
?>

<script type="text/javascript">
    $('#owl2').owlCarousel({
        loop:true,
        nav:true,
        navText: ["<div class='prev-icon'></div>","<div class='next-icon'></div>"],
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        items:1
    });
    $('#owl3').owlCarousel({
        loop:true,
        nav:true,
        navText: ["<div class='prev-icon'></div>","<div class='next-icon'></div>"],
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        items:1
    });
    $('#owl4').owlCarousel({
        loop:true,
        nav:true,
        navText: ["<div class='prev-icon'></div>","<div class='next-icon'></div>"],
        dots:false,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        items:1
    });
</script>