<body style="background-color:#d9d9d9">
	<div class="fluid">
    	<section>
            <nav class="navbar navbar-fixed-top collapse navbar-collapse" role="navigation">
                <div class="fluid">
                    <div class="collapse navbar-collapse collapse">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                            	<a onClick="perfil()" id="iconeComberweb">
                                    <img src="<?= logoEmpresa ?>" class="img-responsive" style="height: 40px;">
                                </a>
                            </li>
                        </ul>
                	</div>
            	</div>
            </nav>
        </section>
        
        <section>
        	<div id="wrapper">
                <div id="sidebar-wrapper" style="background-color:#17181b">
                	<ul class="lista">
						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina-principal/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Página principal
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "pagina-principal/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "pagina-principal/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/pagina-principal/gerenciar-pagina">Gerenciar página</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "pagina-principal/novo-slide") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/pagina-principal/novo-slide">Novo slide</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "pagina-principal/gerenciar-slides") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/pagina-principal/gerenciar-slides">Gerenciar slides</a>
	                        </li>
                    	</ul>

                    	<li class="item <?php if($_SESSION["paginaAtual"] == "empresa/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp;&nbsp;Empresa
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "empresa/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "empresa/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/empresa/gerenciar-pagina">Gerenciar página</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "empresa/gerenciar-diferenciais") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/empresa/gerenciar-diferenciais">Gerenciar diferenciais</a>
	                        </li>
	                        <li class="sub-item <?php if($_SESSION["blackPage"] == "empresa/novo-slide") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/empresa/novo-slide">Novo slide</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "empresa/gerenciar-slides") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/empresa/gerenciar-slides">Gerenciar slides</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "areas-atuacao/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;Áreas de Atuação
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "areas-atuacao/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "areas-atuacao/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/areas-atuacao/gerenciar-pagina">Gerenciar página</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "areas-atuacao/gerenciar-servicos") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/areas-atuacao/gerenciar-servicos">Gerenciar serviços</a>
	                        </li>
                    	</ul>

                    	<li class="item <?php if($_SESSION["paginaAtual"] == "equipe/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Equipe
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "equipe/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "equipe/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/equipe/gerenciar-pagina">Gerenciar página</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "equipe/gerenciar-equipe") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/equipe/gerenciar-equipe">Gerenciar equipe</a>
	                        </li>
                    	</ul>

                    	<li class="item <?php if($_SESSION["paginaAtual"] == "links-uteis/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;&nbsp;Links Úteis
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "links-uteis/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "links-uteis/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/links-uteis/gerenciar-pagina">Gerenciar página</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "links-uteis/gerenciar-categorias") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/links-uteis/gerenciar-categorias">Gerenciar categorias</a>
	                        </li>
	                        <li class="sub-item <?php if($_SESSION["blackPage"] == "links-uteis/novo-link") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/links-uteis/novo-link">Novo link</a>
	                        </li>
	                        <li class="sub-item <?php if($_SESSION["blackPage"] == "links-uteis/gerenciar-links") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/links-uteis/gerenciar-links">Gerenciar links</a>
	                        </li>
                    	</ul>

                    	<li class="item <?php if($_SESSION["paginaAtual"] == "recuperacao/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-bank" aria-hidden="true"></i>&nbsp;&nbsp;Recuperação Judicial
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "recuperacao/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "recuperacao/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/recuperacao/novos-dados">Adicionar Nova</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "recuperacao/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/recuperacao/gerenciar-dados">Gerenciar</a>
	                        </li>
                            <li class="sub-item <?php if($_SESSION["blackPage"] == "recuperacao_arquivos/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/recuperacao_arquivos/novos-dados">Adicionar Arquivos</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "recuperacao_arquivos/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/recuperacao_arquivos/gerenciar-dados">Gerenciar Arquivos</a>
	                        </li>
                            <li class="sub-item <?php if($_SESSION["blackPage"] == "recuperacao_judicial/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/recuperacao_judicial/gerenciar-pagina">Gerenciar Página</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "contato/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Pág. Contato
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "contato/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "contato/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/contato/gerenciar-pagina">Contato</a>
	                        </li>
	                        <li class="sub-item <?php if($_SESSION["blackPage"] == "trabalhe-conosco/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/trabalhe-conosco/gerenciar-pagina">Trabalhe conosco</a>
	                        </li>
	                        <li class="sub-item <?php if($_SESSION["blackPage"] == "consulta-processual/gerenciar-pagina") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/consulta-processual/gerenciar-pagina">Consulta Processual</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "configuracoes/gerenciar") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/configuracoes/gerenciar-pagina"><i class="fa fa-cog fa-spin fa-fw"></i>&nbsp;&nbsp;Configurações
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item">
                            <a href="<?= caminhoSite ?>/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
                        </li>
					</ul>
                </div>
            </div>
        </section>