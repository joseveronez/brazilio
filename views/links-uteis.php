<?php
    ScriptLoader::LoadCSS('sobre');
?>
<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/imagens/banner-servicos.jpg"); background-position: center center; background-attachment: fixed; background-repeat: no-repeat; background-size: cover; }
    .prev-icon { background: url(<?= RAIZSITE ?>/imagens/left.png); background-size: 20%; background-position: center center; background-repeat: no-repeat; height: 50px; width: 50px; }
    .next-icon { background: url(<?= RAIZSITE ?>/imagens/right.png); background-size: 20%; background-position: center center; background-repeat: no-repeat; height: 50px; width: 50px; }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light">LINKS ÚTEIS</h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="dourado-fonte">LINKS ÚTEIS</span></p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco PaddingT12p">
    <div id="waypointMenu" style="position: absolute; left: 0; height: 101px; width: 50px; top: -101px"></div>
    <div class="linha"></div>
    <div class="container">
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 links-uteis">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bc-1">
                <p class="text-justify size16 letter-spacing1 Medium Uppercase"><strong>Tribunais Superiores</strong></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.stf.jus.br/portal/principal/principal.asp" target="_blank">Supremo Tribunal Federal</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.stj.gov.br/" target="_blank">Superior Tribunal de Justiça</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="https://portalextranet.tst.jus.br/" target="_blank">Tribunal Superior do Trabalho</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.tse.jus.br/" target="_blank">Tribunal Superior Eleitoral</a></p><br>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bc-1">
                <p class="text-justify size16 letter-spacing1 Medium Uppercase"><strong>Tribunais Federais</strong></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.trf1.gov.br/index2.htm" target="_blank">Tribunal Regional Federal da 1.ª Região</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www10.trf2.jus.br/portal/" target="_blank">Tribunal Regional Federal da 2.ª Região</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.trf3.gov.br/" target="_blank">Tribunal Regional Federal da 3.ª Região</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="https://www2.trf4.jus.br/trf4/" target="_blank">Tribunal Regional Federal da 4.ª Região</a></p><br>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bc-1">
                <p class="text-justify size16 letter-spacing1 Medium Uppercase"><strong>Justiça Federal</strong></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.tj.pr.gov.br" target="_blank" class="preto-fonte">Tribunal de Justiça do Estado do Paraná</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.ta.pr.gov.br" target="_blank" class="preto-fonte">Tribunal de Alçada do Estado do Paraná</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.tj.sc.gov.br" target="_blank" class="preto-fonte">Tribunal de Justiça de Estado do Santa Catarina</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.tj.rs.gov.br" target="_blank" class="preto-fonte">Tribunal de Justiça do Estado do Rio Grande do Sul</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.tj.sp.gov.br" target="_blank" class="preto-fonte">Tribunal de Justiça do Estado de São Paulo</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.ptac.sp.gov.br" target="_blank" class="preto-fonte">1º Tribunal de Alçada Civil do Estado de São Paulo</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.stac.sp.gov.br" target="_blank" class="preto-fonte">2º Tribunal de Alçada Civil do Estado de São Paulo</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.tj.rj.gov.br" target="_blank" class="preto-fonte">Tribunal de Justiça do Estado do Rio de Janeiro</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.tjdf.gov.br" target="_blank" class="preto-fonte">Tribunal de Justiça do Distrito Federal</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.tj.mg.gov.br" target="_blank" class="preto-fonte">Tribunal de Justiça do Estado de Minas Gerais</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.ta.mg.gov.br" target="_blank" class="preto-fonte">Tribunal de Alçada do Estado de Minas Gerais</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a href="http://www.tj.ba.gov.br%20" target="_blank" class="preto-fonte">Tribunal de Justiça do Estado da Bahia</a></p><br>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bc-1">
                <p class="text-justify size16 letter-spacing1 Medium Uppercase"><strong>Justiça Federal</strong></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="https://www3.jfpr.jus.br/.noindex.html" target="_blank">Justiça Federal do Estado do Paraná</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.jfsc.jus.br/novo_portal/home.php" target="_blank">Justiça Federal do Estado de Santa Catarina</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="https://www2.jfrs.jus.br/" target="_blank">Justiça Federal do Estado do Rio Grande do Sul</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.jfrj.gov.br/" target="_blank">Justiça Federal do Estado do Rio de Janeiro</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.jfsp.gov.br/" target="_blank">Justiça Federal do Estado de São Paulo</a></p><br>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bc-1">
                <p class="text-justify size16 letter-spacing1 Medium Uppercase"><strong>Úteis</strong></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.e-juridico.com.br/" target="_blank">E-jurídico</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="https://www.cartorio24horas.com.br/" target="_blank">Cartório 24 horas</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.assejepar.com.br/v2/" target="_blank">Assejepar</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.oab.org.br/" target="_blank">OAB . Conselho Federal</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.oabpr.org.br/" target="_blank">OAB/PR</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.receita.fazenda.gov.br/" target="_blank">Receita Federal</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.pgfn.fazenda.gov.br/" target="_blank">Procuradoria Geral da Fazenda Nacional</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.conselhos.fazenda.gov.br/" target="_blank">Conselho de Contribuintes</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="https://comprot.fazenda.gov.bre-gov/default.asp" target="_blank">Consulta de Processos Administrativos . Ministério da Fazenda</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.senado.gov.br/legisla.htm" target="_blank">Legislação Federal</a></p>
                <p class="text-justify size14 letter-spacing1 Medium"><a class="preto-fonte" href="http://www.inpi.gov.br/" target="_blank">INPI</a></p>
            </div>
        </div>
    </div>
</div>