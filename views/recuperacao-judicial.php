<?php 
    $recuperacao = RecuperacaoJudicial::sql("SELECT * FROM recuperacao_judicial", SimpleOrm::FETCH_ONE);
    $rec = Recuperacao::sql("SELECT * FROM recuperacao");
?>
<style type="text/css">
    .parallax-banner { background-image: url("<?= caminhoSite ?>/uploads/<?= $recuperacao->banner ?>"); background-position: top center; background-attachment: fixed; background-repeat: no-repeat; background-size: cover }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light"><?= $recuperacao->titulo ?></h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="dourado-fonte">RECUPERAÇÃO JUDICIAL</span></p>
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
            <h4>Para visualização das imagens é necessário a prévia instalação do Adobe Acrobat Reader. </h4>
            <h4><?= $recuperacao->texto ?></h4><br>
            
            <?php 
                foreach($rec as $item){
            ?>
                <h5><a href="<?= RAIZSITE ?>/recuperacao/<?= $item->slug ?>"><?= $item->titulo ?></a></h5>
            <?php
                }
            ?>
        </div>
    </div>
</div>