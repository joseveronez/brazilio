<?php
    ScriptLoader::LoadCSS('equipe');

    $conteudo = PaginaEquipe::retrieveByPk(1);
    $equipe = Equipe::all();
?>
<style type="text/css">
    .parallax-banner { background-image: url("<?= caminhoSite ?>/uploads/<?= $conteudo->banner ?>"); background-position: top center; background-attachment: fixed; background-repeat: no-repeat; }
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
            <img src="<?= RAIZSITE ?>/imagens/balanca.png" class="img-responsive">
        </div>

        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 MarginT10p bc-2">
            <div class="text-justify size14 letter-spacing1 Medium"><?= $conteudo->texto ?></div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT13p padding-zero">
            <div class="linha-pequena"></div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco socios">
    <div class="container conteudo">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT13p MarginB10p titulo le-2">
            <h3 class="Uppercase dourado-fonte margin-zero">SÓCIOS</h3>
        </div>
        <?php 
            $cont =1;
            foreach($equipe as $eqp){
                if($eqp->tipo == 1){
        ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bloco <?php if($cont==1){echo"primario";} else {echo"secundario";} ?> bc-2">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-dourado imagem" style="background: url('<?= caminhoSite ?>/uploads/<?= $eqp->foto ?>'); background-size: cover; background-position: center center; min-height: 335px;"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-dourado descritivo branco-fonte">
                            <h3 class="le-2"><?= $eqp->nome ?></h3>
                            <h5 class="le-2"><?= $eqp->oab ?></h5>
                            <p class="formacao bc-2"><?= $eqp->formacao ?></p>
                        </div>
                    </div>
        <?php
                    $cont++;
                }
            }
        ?>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco advogados">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <div class="linha-pequena"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT15p MarginB10p ri-2">
            <h3 class="Uppercase dourado-fonte margin-zero">ADVOGADOS</h3>
        </div>
        
        <?php 
            $order = 0;
            $eq = 0;
            foreach($equipe as $eqp) {
                if($eqp->tipo == 2 ){
                    if($eq == 4){
                        $eq = 0;
                    }

                    $eq++;
                    $order++;
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-<?= $order ?> eq-<?= $eq ?>">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= caminhoSite ?>/uploads/<?= $eqp->foto ?>'); background-size: cover; background-position: center center; min-height: 200px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                        <p><?= $eqp->nome ?></p>
                        <p><?= $eqp->oab ?></p>
                        <p><a href="mailto:<?= $eqp->email ?>" class="link-default"><?= $eqp->email ?></a></p>
                        <?= $eqp->formacao ?>
                    </div>
                </div>
        <?php
                }
            }
        ?>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco dourado-fonte equipe">
    <div class="container conteudo">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT9p">
            <div class="linha-pequena"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT12p le-2">
            <h3 class="Uppercase dourado-fonte margin-zero">EQUIPE</h3>
        </div>
        
        <?php
            foreach($equipe as $eqp){
                if($eqp->tipo == 3){
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo border-equipe bc-2">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                        <p><?= $eqp->nome ?></p>
                        <p><a href="mailto:<?= $eqp->email ?>" class="link-default"><?= $eqp->email ?></a></p>
                    </div>
                </div>
                <?php
            }
            }
        ?>
    </div>
</div>

<script type="text/javascript">
    $('.eq-1').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 100
    });
    $('.eq-2').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 200
    });
    $('.eq-3').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 300
    });
    $('.eq-4').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 400
    });
</script>