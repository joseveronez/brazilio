<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="owl-carousel slider-topo owl-theme">
        <div class="item vh100">
            <div class="vh100" style="background: url('<?= RAIZSITE ?>/imagens/ban1.jpg'); background-size: cover; background-position: center center"></div>
        </div>
        <div class="item vh100">
            <div class="vh100" style="background: url('<?= RAIZSITE ?>/imagens/ban2.jpg'); background-size: cover; background-position: center center"></div>
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
        autoplay:true,
        items:1
    });
</script>