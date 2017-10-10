<style type="text/css">
    .owl-carousel .owl-item img {width: initial;}
</style>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="owl-carousel slider-topo owl-theme">
        <div class="item vh100">
            <div class="vh100" style="background: url('<?= RAIZSITE ?>/imagens/ban2.jpg'); background-size: cover; background-position: center center">
                <div class="container">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT25">
                        <h4 class="Uppercase size50 dourado-fonte Light">Brazilio Bacellar,<br> SHIRAI Advogados </h4>
                        <img src="imagens/ond1.png" class="img-responsive MarginT5" style="margin: 0 auto;">
                        <h6 class="Uppercase branco-fonte Light size20 MarginB4" style="line-height: 28px;">a solução dos conflitos de interesses preventivamente,<br> evitando o desgaste e a morosidade do Poder Judiciário. </h6>
                        <a href="#" class="link-default dourado-fonte botao-dourado" role="button" >SAIBA MAIS&nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="item vh100">
            <div class="vh100" style="background: url('<?= RAIZSITE ?>/imagens/ban1.jpg'); background-size: cover; background-position: center center"></div>
        </div>
        <div class="item vh100">
            <div class="vh100" style="background: url('<?= RAIZSITE ?>/imagens/ban3.jpg'); background-size: cover; background-position: center center"></div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $('.owl-carousel.slider-topo').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        navText: ["<div class='prev-icon'></div>","<div class='next-icon'></div>"],
        dots:true,
        autoplay:false,
        items:1
    });
</script>