<script type="text/javascript">
    $(document).ready(function(){
        var hash = location.hash.replace('#','');
        if(hash == 'administrativo'){
            $('html, body').animate({ scrollTop: $('#waypointAdministrativo').offset().top - 0}, 1000);
        }else if(hash == 'ambiental'){
            $('html, body').animate({ scrollTop: $('#ambiental').offset().top- 110}, 1000);
        }else if(hash == 'bancario'){
            $('html, body').animate({ scrollTop: $('#bancario').offset().top- 110}, 1000);
        }else if(hash == 'civel'){
            $('html, body').animate({ scrollTop: $('#civel').offset().top- 110}, 1000);
        }else if(hash == 'comercial'){
            $('html, body').animate({ scrollTop: $('#comercial').offset().top- 110}, 1000);
        }else if(hash == 'consumidor'){
            $('html, body').animate({ scrollTop: $('#consumidor').offset().top- 110}, 1000);
        }else if(hash == 'contratos'){
            $('html, body').animate({ scrollTop: $('#contratos').offset().top- 110}, 1000);
        }else if(hash == 'familia'){
            $('html, body').animate({ scrollTop: $('#familia').offset().top- 110}, 1000);
        }else if(hash == 'gestao-legal'){
            $('html, body').animate({ scrollTop: $('#gestao-legal').offset().top- 110}, 1000);
        }else if(hash == 'internet-ecommerce'){
            $('html, body').animate({ scrollTop: $('#internet-ecommerce').offset().top- 110}, 1000);
        }else if(hash == 'propriedade-intelectual'){
            $('html, body').animate({ scrollTop: $('#propriedade-intelectual').offset().top- 110}, 1000);
        }else if(hash == 'societario'){
            $('html, body').animate({ scrollTop: $('#societario').offset().top- 110}, 1000);
        }else if(hash == 'sucessoes'){
            $('html, body').animate({ scrollTop: $('#sucessoes').offset().top- 110}, 1000);
        }else if(hash == 'trabalhista'){
            $('html, body').animate({ scrollTop: $('#trabalhista').offset().top- 110}, 1000);
        }else if(hash == 'tributario'){
            $('html, body').animate({ scrollTop: $('#tributario').offset().top- 110}, 1000);
        }
    });
</script>
<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/imagens/banner-servicos.jpg"); background-position: top center; background-attachment: fixed; background-repeat: no-repeat; background-size: cover }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light">ÁREAS DE ATUAÇÕES</h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="dourado-fonte">ÁREAS DE ATUAÇÕES</span></p>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero PaddingT15p PaddingB15p">
            <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs servicos-links le-2">
                <ul class="list-unstyled">
                    <li class="lista-servicos"><a href="#administrativo" class="link-default dourado-fonte lista-servicos-item atalho">ADMINISTRATIVO</a></li>
                    <li class="lista-servicos"><a href="#ambiental" class="link-default dourado-fonte lista-servicos-item atalho">AMBIENTAL</a></li>
                    <li class="lista-servicos"><a href="#bancario" class="link-default dourado-fonte lista-servicos-item atalho">BANCÁRIO</a></li>
                    <li class="lista-servicos"><a href="#civel" class="link-default dourado-fonte lista-servicos-item atalho">CÍVEL</a></li>
                    <li class="lista-servicos"><a href="#comercial" class="link-default dourado-fonte lista-servicos-item atalho">COMERCIAL</a></li>
                    <li class="lista-servicos"><a href="#consumidor" class="link-default dourado-fonte lista-servicos-item atalho">CONSUMIDOR</a></li>
                    <li class="lista-servicos"><a href="#contratos" class="link-default dourado-fonte lista-servicos-item atalho">CONTRATOS</a></li>
                    <li class="lista-servicos"><a href="#familia" class="link-default dourado-fonte lista-servicos-item atalho">FAMÍLIA</a></li>
                    <li class="lista-servicos"><a href="#gestao-legal" class="link-default dourado-fonte lista-servicos-item atalho">GESTÃO LEGAL DE PATRIMÔNIO</a></li>
                    <li class="lista-servicos"><a href="#internet-ecommerce" class="link-default dourado-fonte lista-servicos-item atalho">INTERNET E E-COMMERCE</a></li>
                    <li class="lista-servicos"><a href="#propriedade-intelectual" class="link-default dourado-fonte lista-servicos-item atalho">PROPRIEDADE INTELECTUAL</a></li>
                    <li class="lista-servicos"><a href="#societario" class="link-default dourado-fonte lista-servicos-item atalho">SOCIETÁRIO</a></li>
                    <li class="lista-servicos"><a href="#sucessoes" class="link-default dourado-fonte lista-servicos-item atalho">SUCESSÕES</a></li>
                    <li class="lista-servicos"><a href="#trabalhista" class="link-default dourado-fonte lista-servicos-item atalho">TRABALHISTA</a></li>
                    <li class="lista-servicos"><a href="#tributario" class="link-default dourado-fonte lista-servicos-item atalho">TRIBUTÁRIO</a></li>
                </ul>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 servicos-itens">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="administrativo">
                    <div id="waypointAdministrativo" style="position: absolute; left: 0; height: 135px; width: 50px; top: -135px"></div>

                    <img src="<?= RAIZSITE ?>/imagens/administrativo.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero Medium titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;ADMINISTRATIVO</h3><br>
                    <p class="text-justify size15 texto-servicos">
                        Assessoria nas esferas administrativa e judicial para empresas interessadas na participação em processos licitatórios, efetuando a análise da legalidade dos editais e elaboração de possíveis impugnações aos editais ou propostas dos concorrentes, bem como, tomando as medidas cabíveis à cada caso.
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="ambiental">
                    <img src="<?= RAIZSITE ?>/imagens/ambiental.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;AMBIENTAL</h3><br>
                    <p class="text-justify size15 texto-servicos">
                        Orientação e assessoria de empresas acerca da legislação ambiental, atuando de forma preventiva e no contencioso, bem como prestando auxílio na obtenção de licença/autorização perante os órgãos competentes.
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="bancario">
                    <img src="<?= RAIZSITE ?>/imagens/bancario.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;BANCÁRIO</h3><br>
                    <p class="text-justify size15 texto-servicos">
                        Assessoria e orientação acerca dos serviços prestados pelas instituições financeiras, e das limitações legais existentes para sua atuação em vista dos diversos diplomas legais aplicáveis à espécie.
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="civel">
                    <img src="<?= RAIZSITE ?>/imagens/civel.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;cível</h3><br>
                    <p class="text-justify size15 texto-servicos">
                       A atuação na área cível engloba a tomada de medidas no âmbito preventivo e contencioso, dando suporte na solução de litígios em todas as esferas do direito civil. 
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="comercial">
                    <img src="<?= RAIZSITE ?>/imagens/comercial.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;comercial</h3><br>
                    <p class="text-justify size15 texto-servicos">
                       Atividades na área de consultoria e contencioso, buscando alternativas e resolução de questões envolvendo contratos e operações comerciais. 
                        Em especial na área de recuperação de empresas e falimentar, os anos de experiência possibilitam a consultoria e assessoria jurídica em todas as fases dos processos de falência, concordata e recuperação (judicial e extrajudicial), tanto para o devedor quanto para os credores. 
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="consumidor">
                    <img src="<?= RAIZSITE ?>/imagens/consumidor.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;consumidor</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Suporte jurídico e orientações preventivas acerca da regulamentação das relações entre consumidores e fornecedores de produtos e serviços. 
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="contratos">
                    <img src="<?= RAIZSITE ?>/imagens/contrato.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;contratos</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Análise, elaboração, revisão e readequação de contratos e assessoria contratual em geral, especialmente no que tange à atividade empresarial, bem como na elaboração de pareceres e opiniões legais, e em havendo necessidade, tomada de todas as medidas legais cabíveis para revisão judicial das cláusulas contratuais.
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="familia">
                    <img src="<?= RAIZSITE ?>/imagens/familias.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;família</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Atuação no âmbito do direito de família, garantindo a solução mais célere e eficiente para todas as questões pertinentes.
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="gestao-legal">
                    <img src="<?= RAIZSITE ?>/imagens/gestao_legal_patrimonio.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;gestão legal de patrimônio</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Assessoria no âmbito de proteção patrimonial contra contingências diversas e organização de ativos e investimentos.
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="internet-ecommerce">
                    <img src="<?= RAIZSITE ?>/imagens/internet_e_ecommerce.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;internet e e-commerce</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Assessoria jurídica geral a empresas de internet e consultoria na elaboração de contratos eletrônicos.
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="propriedade-intelectual">
                    <img src="<?= RAIZSITE ?>/imagens/propriedade_intelectual.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;propriedade intelectual</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Consultoria e assessoria, assim como atuação em litígios que envolvam direitos autorais, desenhos industriais, marcas e patentes.
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="societario">
                    <img src="<?= RAIZSITE ?>/imagens/societario.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;societário</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Assessoria jurídica e consultoria na constituição, organização e transformação das sociedades empresariais, bem como elaboração de planejamento societário. Representação em discussões administrativas e judiciais, buscando defender os interesses das sociedades e dos sócios/acionistas. 
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="sucessoes">
                    <img src="<?= RAIZSITE ?>/imagens/sucessoes.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;sucessões</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Assessoria jurídica na interposição das medidas necessárias para concretização e encerramento do processo de sucessão (arrolamentos e inventários) bem como orientação jurídica para planejamento sucessório. 
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="trabalhista">
                    <img src="<?= RAIZSITE ?>/imagens/trabalhista.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;trabalhista</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      A assessoria jurídica trabalhista é voltada para os interesses patronais, oferecendo consultoria preventiva e atuação no contencioso.  
                    </p>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p bc-2" id="tributario">
                    <img src="<?= RAIZSITE ?>/imagens/tributario.png" class="img-responsive" style="float: left;">
                    <h3 class="margin-zero titulo-servicos dourado-fonte Uppercase">&nbsp;&nbsp;tributário</h3><br>
                    <p class="text-justify size15 texto-servicos">
                      Atuação na área administrativa, tanto no auxílio em medidas preventivas, como em defesas perante os órgãos arrecadadores de tributos bem como prestando assessoria na obtenção de incentivos fiscais, planejamento tributário e em procedimento de compensação e restituição de tributos. 
                    No âmbito judicial, destaque para as medidas na recuperação de tributos indevidamente exigidos e recolhidos perante as esferas Municipal, Estadual e Federal. 
                    </p>
                </div>

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