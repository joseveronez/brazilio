<?php
	$prefixos['usuarios']['login'] =  array('Controller' => 'UsuariosController', 'Method' => 'login', 'logado' => false);
	$prefixos['usuarios']['faz_login'] =  array('Controller' => 'UsuariosController', 'Method' => 'faz_login', 'logado' => false);
	
	$prefixos['usuarios']['recuperar-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'recuperar_senha', 'logado' => false);
	$prefixos['usuarios']['email'] =  array('Controller' => 'UsuariosController', 'Method' => 'email', 'logado' => false);
	$prefixos['usuarios']['verificacao'] =  array('Controller' => 'UsuariosController', 'Method' => 'verificacao', 'logado' => false);
	$prefixos['usuarios']['nova-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'nova_senha', 'logado' => false);
	$prefixos['usuarios']['salvar-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'salvar_senha', 'logado' => false);

	$routes['teste'] = array('Controller' => 'TesteController', 'Method' => 'teste', 'logado' => false);
	$routes['senha'] = array('Controller' => 'TesteController', 'Method' => 'senha', 'logado' => false);
	$routes['gerarSenha'] = array('Controller' => 'TesteController', 'Method' => 'gerarSenha', 'logado' => false);
	$routes['comparaSenha'] = array('Controller' => 'TesteController', 'Method' => 'comparaSenha', 'logado' => false);
	$routes['verificaSenha'] = array('Controller' => 'TesteController', 'Method' => 'verificaSenha', 'logado' => false);

	$routes['home'] = array('Controller' => 'HomeController', 'Method' => 'index', 'logado' => true);
	$routes['nao-logado'] = array('Controller' => 'UsuariosController', 'Method' => 'nao_logado', 'logado' => false);
	$routes['logout'] = array('Controller' => 'UsuariosController', 'Method' => 'logout', 'logado' => true);
	$routes['default'] = array('Controller' => 'DefaultController', 'Method' => 'index', 'logado' => true);

	$prefixos['testando']['testando-rotas'] = array('Controller' => 'TestandoRotasController', 'Method' => 'testando_rotas', 'logado' => true);

	/* HOME */
	// página
	$prefixos['pagina-principal']['gerenciar-pagina'] = array('Controller' => 'PaginaPrincipalController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['pagina-principal']['atualizar-pagina'] = array('Controller' => 'PaginaPrincipalController', 'Method' => 'atualizar_pagina', 'logado' => true);
	// slider
    $prefixos['pagina-principal']['novo-slide'] = array('Controller' => 'PaginaPrincipalController', 'Method' => 'novo_slide', 'logado' => true);
	$prefixos['pagina-principal']['salvar-slide'] = array('Controller' => 'PaginaPrincipalController', 'Method' => 'salvar_slide', 'logado' => true);
	$prefixos['pagina-principal']['gerenciar-slides'] = array('Controller' => 'PaginaPrincipalController', 'Method' => 'gerenciar_slides', 'logado' => true);
	$prefixos['pagina-principal']['editar-slide'] = array('Controller' => 'PaginaPrincipalController', 'Method' => 'editar_slide', 'logado' => true);
	$prefixos['pagina-principal']['atualizar-slide'] = array('Controller' => 'PaginaPrincipalController', 'Method' => 'atualizar_slide', 'logado' => true);
	$prefixos['pagina-principal']['excluir-slide'] = array('Controller' => 'PaginaPrincipalController', 'Method' => 'excluir_slide', 'logado' => true);
	/* HOME */

	/* EMPRESA */
	// página
	$prefixos['empresa']['gerenciar-pagina'] = array('Controller' => 'EmpresaController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['empresa']['atualizar-pagina'] = array('Controller' => 'EmpresaController', 'Method' => 'atualizar_pagina', 'logado' => true);
	// diferenciais
	$prefixos['empresa']['novo-diferencial'] = array('Controller' => 'EmpresaController', 'Method' => 'novo_diferencial', 'logado' => true);
	$prefixos['empresa']['salvar-diferencial'] = array('Controller' => 'EmpresaController', 'Method' => 'salvar_diferencial', 'logado' => true);
	$prefixos['empresa']['gerenciar-diferenciais'] = array('Controller' => 'EmpresaController', 'Method' => 'gerenciar_diferenciais', 'logado' => true);
	$prefixos['empresa']['editar-diferencial'] = array('Controller' => 'EmpresaController', 'Method' => 'editar_diferencial', 'logado' => true);
	$prefixos['empresa']['atualizar-diferencial'] = array('Controller' => 'EmpresaController', 'Method' => 'atualizar_diferencial', 'logado' => true);
	$prefixos['empresa']['excluir-diferencial'] = array('Controller' => 'EmpresaController', 'Method' => 'excluir_diferencial', 'logado' => true);
	// slider
	$prefixos['empresa']['novo-slide'] = array('Controller' => 'EmpresaController', 'Method' => 'novo_slide', 'logado' => true);
	$prefixos['empresa']['salvar-slide'] = array('Controller' => 'EmpresaController', 'Method' => 'salvar_slide', 'logado' => true);
	$prefixos['empresa']['gerenciar-slides'] = array('Controller' => 'EmpresaController', 'Method' => 'gerenciar_slides', 'logado' => true);
	$prefixos['empresa']['editar-slide'] = array('Controller' => 'EmpresaController', 'Method' => 'editar_slide', 'logado' => true);
	$prefixos['empresa']['atualizar-slide'] = array('Controller' => 'EmpresaController', 'Method' => 'atualizar_slide', 'logado' => true);
	$prefixos['empresa']['excluir-slide'] = array('Controller' => 'EmpresaController', 'Method' => 'excluir_slide', 'logado' => true);
	/* EMPRESA */

	$prefixos['areas-atuacao']['gerenciar-pagina'] = array('Controller' => 'AreasAtuacaoController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['areas-atuacao']['atualizar-pagina'] = array('Controller' => 'AreasAtuacaoController', 'Method' => 'atualizar_pagina', 'logado' => true);
	$prefixos['areas-atuacao']['novo-servico'] = array('Controller' => 'AreasAtuacaoController', 'Method' => 'novo_servico', 'logado' => true);
	$prefixos['areas-atuacao']['salvar-servico'] = array('Controller' => 'AreasAtuacaoController', 'Method' => 'salvar_servico', 'logado' => true);
	$prefixos['areas-atuacao']['gerenciar-servicos'] = array('Controller' => 'AreasAtuacaoController', 'Method' => 'gerenciar_servicos', 'logado' => true);
	$prefixos['areas-atuacao']['editar-servico'] = array('Controller' => 'AreasAtuacaoController', 'Method' => 'editar_servico', 'logado' => true);
	$prefixos['areas-atuacao']['atualizar-servico'] = array('Controller' => 'AreasAtuacaoController', 'Method' => 'atualizar_servico', 'logado' => true);
	$prefixos['areas-atuacao']['excluir-servico'] = array('Controller' => 'AreasAtuacaoController', 'Method' => 'excluir_servico', 'logado' => true);

	$prefixos['equipe']['gerenciar-pagina'] = array('Controller' => 'EquipeController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['equipe']['atualizar-pagina'] = array('Controller' => 'EquipeController', 'Method' => 'atualizar_pagina', 'logado' => true);
	$prefixos['equipe']['novo-integrante'] = array('Controller' => 'EquipeController', 'Method' => 'novo_integrante', 'logado' => true);
	$prefixos['equipe']['salvar-integrante'] = array('Controller' => 'EquipeController', 'Method' => 'salvar_integrante', 'logado' => true);
	$prefixos['equipe']['gerenciar-equipe'] = array('Controller' => 'EquipeController', 'Method' => 'gerenciar_equipe', 'logado' => true);
	$prefixos['equipe']['editar-integrante'] = array('Controller' => 'EquipeController', 'Method' => 'editar_integrante', 'logado' => true);
	$prefixos['equipe']['atualizar-integrante'] = array('Controller' => 'EquipeController', 'Method' => 'atualizar_integrante', 'logado' => true);
	$prefixos['equipe']['excluir-integrante'] = array('Controller' => 'EquipeController', 'Method' => 'excluir_integrante', 'logado' => true);

	$prefixos['links-uteis']['gerenciar-pagina'] = array('Controller' => 'LinksUteisController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['links-uteis']['atualizar-pagina'] = array('Controller' => 'LinksUteisController', 'Method' => 'atualizar_pagina', 'logado' => true);
	$prefixos['links-uteis']['nova-categoria'] = array('Controller' => 'LinksUteisController', 'Method' => 'nova_categoria', 'logado' => true);
	$prefixos['links-uteis']['salvar-categoria'] = array('Controller' => 'LinksUteisController', 'Method' => 'salvar_categoria', 'logado' => true);
	$prefixos['links-uteis']['gerenciar-categorias'] = array('Controller' => 'LinksUteisController', 'Method' => 'gerenciar_categorias', 'logado' => true);
	$prefixos['links-uteis']['editar-categoria'] = array('Controller' => 'LinksUteisController', 'Method' => 'editar_categoria', 'logado' => true);
	$prefixos['links-uteis']['atualizar-categoria'] = array('Controller' => 'LinksUteisController', 'Method' => 'atualizar_categoria', 'logado' => true);
	$prefixos['links-uteis']['novo-link'] = array('Controller' => 'LinksUteisController', 'Method' => 'novo_link', 'logado' => true);
	$prefixos['links-uteis']['salvar-link'] = array('Controller' => 'LinksUteisController', 'Method' => 'salvar_link', 'logado' => true);
	$prefixos['links-uteis']['gerenciar-links'] = array('Controller' => 'LinksUteisController', 'Method' => 'gerenciar_links', 'logado' => true);
	$prefixos['links-uteis']['editar-link'] = array('Controller' => 'LinksUteisController', 'Method' => 'editar_link', 'logado' => true);
	$prefixos['links-uteis']['atualizar-link'] = array('Controller' => 'LinksUteisController', 'Method' => 'atualizar_link', 'logado' => true);
	$prefixos['links-uteis']['excluir-link'] = array('Controller' => 'LinksUteisController', 'Method' => 'excluir_link', 'logado' => true);

	$prefixos['contato']['gerenciar-pagina'] = array('Controller' => 'ContatoController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['contato']['atualizar-pagina'] = array('Controller' => 'ContatoController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['trabalhe-conosco']['gerenciar-pagina'] = array('Controller' => 'TrabalheConoscoController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['trabalhe-conosco']['atualizar-pagina'] = array('Controller' => 'TrabalheConoscoController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['consulta-processual']['gerenciar-pagina'] = array('Controller' => 'ConsultaProcessualController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['consulta-processual']['atualizar-pagina'] = array('Controller' => 'ConsultaProcessualController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['recuperacao']['novos-dados'] = array('Controller' => 'RecuperacaoController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['recuperacao']['salvar-dados'] = array('Controller' => 'RecuperacaoController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['recuperacao']['gerenciar-dados'] = array('Controller' => 'RecuperacaoController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['recuperacao']['editar-dados'] = array('Controller' => 'RecuperacaoController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['recuperacao']['atualizar-dados'] = array('Controller' => 'RecuperacaoController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['recuperacao']['excluir-dados'] = array('Controller' => 'RecuperacaoController', 'Method' => 'excluir_dados', 'logado' => true);

    $prefixos['recuperacao_arquivos']['novos-dados'] = array('Controller' => 'RecuperacaoArquivosController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['recuperacao_arquivos']['salvar-dados'] = array('Controller' => 'RecuperacaoArquivosController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['recuperacao_arquivos']['gerenciar-dados'] = array('Controller' => 'RecuperacaoArquivosController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['recuperacao_arquivos']['editar-dados'] = array('Controller' => 'RecuperacaoArquivosController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['recuperacao_arquivos']['atualizar-dados'] = array('Controller' => 'RecuperacaoArquivosController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['recuperacao_arquivos']['excluir-dados'] = array('Controller' => 'RecuperacaoArquivosController', 'Method' => 'excluir_dados', 'logado' => true);

    $prefixos['recuperacao_judicial']['gerenciar-pagina'] = array('Controller' => 'RecuperacaoJudicialController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['recuperacao_judicial']['atualizar-pagina'] = array('Controller' => 'RecuperacaoJudicialController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['configuracoes']['gerenciar-pagina'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['configuracoes']['atualizar-pagina'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'atualizar_pagina', 'logado' => true);
?>