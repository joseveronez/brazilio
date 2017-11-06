<?php
    $conteudo = PaginaAreasAtuacao::retrieveByPk(1);
    $servicos = Servicos::all();
?>
<script type="text/javascript">
    $(document).ready(function(){
        var hash = location.hash.replace('#','');
        <?php
            foreach($servicos as $ancoras) {

                $valor = 0;
                if($ancoras->link_servico == "administrativo") {
                    $valor = "260";
                } else {
                    $valor = "110";
                }
        ?>
        if(hash == '<?= $ancoras->link_servico ?>'){
            $('html, body').animate({ scrollTop: $('#<?= $ancoras->link_servico ?>').offset().top - <?= $valor ?>}, 1000);
        }
        <?php
            }
        ?>
    });
</script>
<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/cms/uploads/<?= $conteudo->banner_topo ?>"); background-position: top center; background-attachment: fixed; background-repeat: no-repeat; }
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <img src="<?= RAIZSITE ?>/imagens/martelo.png" class="img-responsive">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero PaddingT8p PaddingB10p">
            <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs servicos-links le-2">
                <ul class="list-unstyled">
                    <?php
                        foreach($servicos as $links) {
                    ?>
                    <li class="lista-servicos"><a href="#<?= $links->link_servico ?>" class="link-default lista-servicos-item atalho"><?= $links->titulo ?></a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 servicos-itens">
                <div id="waypointAdministrativo" style="position: absolute; left: 0; height: 135px; width: 50px; top: -135px"></div>
                <?php
                    foreach($servicos as $servico) {
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB6p bc-2" id="<?= $servico->link_servico ?>">
                    <img src="<?= RAIZSITE ?>/cms/uploads/<?= $servico->icone ?>" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero Medium titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;<?= $servico->titulo ?></h3><br>
                    <div class="text-justify size15 texto-servicos"><?= $servico->descricao ?></div>
                </div>
                <?php
                    }
                ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                    <a href="<?= RAIZSITE ?>/equipe" class="Medium link-default equipe-link">
                        CONHEÇA NOSSA EQUIPE&nbsp;&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var waypoint2 = new Waypoint({
        element: document.getElementById('waypointAdministrativo'),
        handler: function(direction) {
            if(direction == "down") {
                /* ativa o menu flutuante */
                $(".servicos-links").addClass("fixed");
                /* ativa o menu flutuante */
            } else {
                /* desativa o menu flutuante */
                $(".servicos-links").removeClass("fixed");
                /* desativa o menu flutuante */
            }
        }
    });

    $('a.atalho[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 110
                }, 1000);
                return false;
            }
        }
    });
</script>