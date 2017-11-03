<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/imagens/banner-servicos.jpg"); background-position: top center; background-attachment: fixed; background-repeat: no-repeat; background-size: cover }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light">RECUPERAÇÃO JUDICIAL</h3>
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
            <h4>Selecione abaixo a empresa em Recuperação Judicial sobre a qual você deseja obter informações: </h4>
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