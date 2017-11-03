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

						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina_home/gerenciar-pagina") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/pagina_home/gerenciar-pagina"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Home
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        
                        <li class="item <?php if($_SESSION["paginaAtual"] == "slides_home/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Slides Home
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "slides_home/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "slides_home/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/slides_home/novos-dados">Adicionar Novo</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "slides_home/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/slides_home/gerenciar-dados">Gerenciar</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "empresa/gerenciar-pagina") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/empresa/gerenciar-pagina"><i class="fa fa-bank" aria-hidden="true"></i>&nbsp;&nbsp;Empresa
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        
                        <li class="item <?php if($_SESSION["paginaAtual"] == "slides_empresa/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-bank" aria-hidden="true"></i>&nbsp;&nbsp;Slides Empresa
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "slides_empresa/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "slides_empresa/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/slides_empresa/novos-dados">Adicionar Novo</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "slides_empresa/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/slides_empresa/gerenciar-dados">Gerenciar</a>
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
                            
                            
                    	</ul>
                        
                        <li class="item <?php if($_SESSION["paginaAtual"] == "diferenciais/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-bank" aria-hidden="true"></i>&nbsp;&nbsp;Diferenciais
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "diferenciais/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "diferenciais/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/diferenciais/novos-dados">Adicionar Novo</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "diferenciais/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/diferenciais/gerenciar-dados">Gerenciar</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "areas/gerenciar-pagina") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/areas/gerenciar-pagina"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Pág. Áreas de Atuação
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "servicos/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;Serviços
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "servicos/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "servicos/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/servicos/novos-dados">Adicionar Novo</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "servicos/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/servicos/gerenciar-dados">Gerenciar</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "pagina_equipe/gerenciar-pagina") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/pagina_equipe/gerenciar-pagina"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Página Equipe
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "equipe/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Equipe
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "equipe/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "equipe/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/equipe/novos-dados">Novo</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "equipe/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/equipe/gerenciar-dados">Gerenciar</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "contato/gerenciar-pagina") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/contato/gerenciar-pagina"><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp;Contato
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "configuracoes/gerenciar-pagina") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/configuracoes/gerenciar-pagina"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Configurações
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
						<li class="item">
                            <a href="<?= caminhoSite ?>/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
                        </li>
					</ul>
                </div>
            </div>
        </section>