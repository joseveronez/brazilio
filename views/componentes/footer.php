<?php
    ScriptLoader::LoadCSS('footer');
?>
<style type="text/css">
    .parallax { background-image: url("<?= RAIZSITE ?>/imagens/banner_email.jpg"); }
</style>
<footer>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero parallax newsletter Relative">
        <img src="<?= RAIZSITE ?>/imagens/ond2.png" class="img-responsive Absolute hidden-sm hidden-xs">
        <div class="container conteudo">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 chamada">
                <h3 class="text-center branco-fonte Regular margin-zero" style="font-style:italic;">Esteja atualizado sobre os nossos serviços, lançamentos e muito mais!</h3>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input">
                <div class="input-group">
                    <input type="email" class="form-control email-news branco-fonte" placeholder="CADASTRE SEU E-MAIL PARA RECEBER NOSSA NEWSLETTER">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">CADASTRAR</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <?php
        if($pagina_atual == "home") {
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-dourado Relative">
        <img src="imagens/separador.png" class="img-responsive Absolute" style=" left: 50%; top: -9%;">
        <div class="container MarginT4 MarginB4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT4 MarginB4">
                <h3><i class="fa fa-envelope-o branco-fonte" aria-hidden="true"></i></h3>
                <h3 class="branco-fonte" style="letter-spacing: 3px;">CONTATO</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <h5 class="branco-fonte">
                Entre em contato por telefone ou pelo formulário ao lado:</h5>
                <h5 class="marrom-fonte">
                Brazilio Bacellar, Shirai Advogados <br>
                OAB/PR 997  •  CNPJ 04.510.577/0001-02</h5>
                <h6 class="branco-fonte">
                Tel.: +55 41 3352.8363 <br>
                Fax. +55 41 3352.0167 </h6>
                <h5 class="branco-fonte">ESCRITÓRIO</h5>
                <h6 class="branco-fonte">
                Rua Marechal Hermes, 272 | Centro Cívico <br>
                Curitiba | Paraná | Brasil | CEP 80.530-230</h6>
                <h5 class="branco-fonte">ESTACIONAMENTO</h5>
                <h6 class="branco-fonte">Travessa José do Patrocinio, 48 | Alto da Glória Curitiba <br>
                    | Paraná | Brasil | CEP 80.030-190</h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <form action="" class="form-horizontal Roboto Regular" id="formulario">
                    <input type="text" class="form-control contato-footer branco-fonte bg-dourado" name="nome" placeholder="NOME" required><br>
                    <input type="email" class="form-control contato-footer branco-fonte bg-dourado" name="email" placeholder="E-MAIL" required><br>
                    <input type="text" class="form-control contato-footer branco-fonte bg-dourado" name="telefone" placeholder="TELEFONE" required><br>
                    <textarea class="form-control contato-footer branco-fonte bg-dourado" name="mensagem" rows="4" cols="3" placeholder="MENSAGEM"></textarea><br>
                    <button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero footer-links bg-azul">
        <div class="container conteudo">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 imagem">
                <a href="<?= RAIZSITE ?>"><img src="imagens/logobrazilio_dourado.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 dourado-fonte separador-footer links">
                <ul class="list-unstyled">
                    <li><a class="link-default" href="<?= RAIZSITE ?>/sobre">A EMPRESA</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/area-atuacao">ÁREA DE ATUAÇÃO</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/equipe">EQUIPE</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/contato">CONTATO</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/trabalhe-conosco">TRABALHE CONOSCO</a></li>
                    <li><a class="link-default" href="<?= RAIZSITE ?>/links-uteis">LINKS ÚTEIS</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 dourado-fonte chamada">
                <p>FALE COM A GENTE</p>
                <p>Brazilio Bacellar Neto e Advogados <br>
                    OAB/PR 997 | CNPJ 04.510.577/0001-02 </p>
                <p>Rua Marechal Hermes, 272 . Centro Cívico <br>
                    Curitiba-PR | Brasil | CEP 80.530-230</p>
                <p>Fone.: + 55 41 3352.8363 <br>
                    Fax. + 55 41 3352.0167 </p>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero copyright bg-copyright">
        <div class="container conteudo">
            <div class="col-lg-6 col-md-8 col-sm-9 col-xs-12 assinatura">
                <p class="cinza-fonte-alternativo margin-zero Upperc"><span class="Lato Uppercase">© 2018 Brazilio Bacellar, Shirai Advogados</span> • <span class="OpenSans">Todos os direitos reservados.</span></p>
            </div>
            <div class="col-lg-3 col-md-1 hidden-sm hidden-xs">&nbsp;</div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 imagem">
                <a href="http://www.pepperscriacao.com" target="_blank"><img src="imagens/pepper.png" class="img-respnsive"></a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

<script type="text/javascript">
	var waypoint1 = new Waypoint({
        element: document.getElementById('waypointMenu'),
        handler: function(direction) {
            if(direction == "down") {
                /* desativa o menu azul */
                $("nav.navbar").removeClass("menu-transparente");
                $("nav.navbar").addClass("menu-azul");
                /* desativa o menu azul */
            } else {
                /* ativa o menu transparente */
                $("nav.navbar").removeClass("menu-azul");
                $("nav.navbar").addClass("menu-transparente");
                /* ativa o menu transparente */
            }
        }
    });
    
    $('.owl-carousel.owl-associadas').owlCarousel({
        nav:false,
        dots:false,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1,
                loop:true
            },
            500:{
                items:2,
                loop:true
            },
            768:{
                items:3,
                loop:true
            },
            992:{
                items:4,
                loop:true
            },
            1200:{
                items:8,
                loop:true
            }
        }
    });

	function Trim() {
		var get_value = document.getElementById('telefone');
		var campo_temp;
		campo_temp = get_value.value.substring(5,6);

		if(campo_temp == "9" || campo_temp == "8") {
			/* console.log("mascara mobile"); */
			$("#telefone").attr("onKeyPress", "MascaraCelular(formulario.telefone);");
			$("#telefone").attr("onBlur", "ValidaCelular(formulario.telefone);");
			$("#telefone").attr("maxlength", "16");
		} else {
			/* console.log("mascara telefone"); */
			$("#telefone").attr("onKeyPress", "MascaraTelefone(formulario.telefone);");
			$("#telefone").attr("onBlur", "ValidaTelefone(formulario.telefone);");
			$("#telefone").attr("maxlength", "14");
		}
	}
    
    new vUnit({
        CSSMap: {
            '.vh': {
                property: 'height',
                reference: 'vh'
            }
        },
        onResize: function() {
            console.log('A screen resize just happened, yo.');
        }
    }).init();
</script>