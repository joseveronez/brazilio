<?php
    ScriptLoader::LoadCSS('sobre');

    $conteudo_pagina = PaginaLinksUteis::retrieveByPk(1);
    $categorias = LinksUteisCategorias::all();
?>
<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/cms/uploads/<?= $conteudo_pagina->banner ?>"); background-position: top center; background-attachment: fixed; background-repeat: no-repeat; }
    .prev-icon { background: url(<?= RAIZSITE ?>/imagens/left.png); background-size: 20%; background-position: center center; background-repeat: no-repeat; height: 50px; width: 50px; }
    .next-icon { background: url(<?= RAIZSITE ?>/imagens/right.png); background-size: 20%; background-position: center center; background-repeat: no-repeat; height: 50px; width: 50px; }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light"><?= $conteudo_pagina->titulo_banner ?></h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="Uppercase dourado-fonte"><?= $conteudo_pagina->titulo_banner ?></span></p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco PaddingT12p">
    <div id="waypointMenu" style="position: absolute; left: 0; height: 101px; width: 50px; top: -101px"></div>
    <div class="linha"></div>
    <div class="container">
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 links-uteis">
            <?php foreach($categorias as $cat) { ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bloco-links padding-zero bc-1">
                <p class="text-justify size16 letter-spacing1 Medium Uppercase"><strong><?= $cat->categoria ?></strong></p>

                <?php
                    $links_uteis[$cat->id] = LinksUteis::sql("SELECT * FROM links_uteis WHERE id_categoria = {$cat->id}");
                    foreach($links_uteis[$cat->id] as $link) {
                ?>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="<?= $link->url ?>" target="_blank"><?= $link->titulo ?></a></p>
                <?php
                    }
                ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>