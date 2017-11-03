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

	$prefixos['pagina_home']['gerenciar-pagina'] = array('Controller' => 'PaginaHomeController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['pagina_home']['atualizar-pagina'] = array('Controller' => 'PaginaHomeController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['empresa']['gerenciar-pagina'] = array('Controller' => 'EmpresaController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['empresa']['atualizar-pagina'] = array('Controller' => 'EmpresaController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['areas']['gerenciar-pagina'] = array('Controller' => 'AreasController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['areas']['atualizar-pagina'] = array('Controller' => 'AreasController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['servicos']['novos-dados'] = array('Controller' => 'ServicosController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['servicos']['salvar-dados'] = array('Controller' => 'ServicosController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['servicos']['gerenciar-dados'] = array('Controller' => 'ServicosController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['servicos']['editar-dados'] = array('Controller' => 'ServicosController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['servicos']['atualizar-dados'] = array('Controller' => 'ServicosController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['servicos']['excluir-dados'] = array('Controller' => 'ServicosController', 'Method' => 'excluir_dados', 'logado' => true);

    $prefixos['diferenciais']['novos-dados'] = array('Controller' => 'DiferenciaisController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['diferenciais']['salvar-dados'] = array('Controller' => 'DiferenciaisController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['diferenciais']['gerenciar-dados'] = array('Controller' => 'DiferenciaisController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['diferenciais']['editar-dados'] = array('Controller' => 'DiferenciaisController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['diferenciais']['atualizar-dados'] = array('Controller' => 'DiferenciaisController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['diferenciais']['excluir-dados'] = array('Controller' => 'DiferenciaisController', 'Method' => 'excluir_dados', 'logado' => true);

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

    $prefixos['slides_home']['novos-dados'] = array('Controller' => 'SlidesHomeController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['slides_home']['salvar-dados'] = array('Controller' => 'SlidesHomeController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['slides_home']['gerenciar-dados'] = array('Controller' => 'SlidesHomeController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['slides_home']['editar-dados'] = array('Controller' => 'SlidesHomeController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['slides_home']['atualizar-dados'] = array('Controller' => 'SlidesHomeController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['slides_home']['excluir-dados'] = array('Controller' => 'SlidesHomeController', 'Method' => 'excluir_dados', 'logado' => true);

    $prefixos['slides_empresa']['novos-dados'] = array('Controller' => 'SlidesEmpresaController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['slides_empresa']['salvar-dados'] = array('Controller' => 'SlidesEmpresaController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['slides_empresa']['gerenciar-dados'] = array('Controller' => 'SlidesEmpresaController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['slides_empresa']['editar-dados'] = array('Controller' => 'SlidesEmpresaController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['slides_empresa']['atualizar-dados'] = array('Controller' => 'SlidesEmpresaController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['slides_empresa']['excluir-dados'] = array('Controller' => 'SlidesEmpresaController', 'Method' => 'excluir_dados', 'logado' => true);

	$prefixos['pagina_equipe']['gerenciar-pagina'] = array('Controller' => 'PaginaEquipeController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['pagina_equipe']['atualizar-pagina'] = array('Controller' => 'PaginaEquipeController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['equipe']['novos-dados'] = array('Controller' => 'EquipeController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['equipe']['salvar-dados'] = array('Controller' => 'EquipeController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['equipe']['gerenciar-dados'] = array('Controller' => 'EquipeController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['equipe']['editar-dados'] = array('Controller' => 'EquipeController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['equipe']['atualizar-dados'] = array('Controller' => 'EquipeController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['equipe']['excluir-dados'] = array('Controller' => 'EquipeController', 'Method' => 'excluir_dados', 'logado' => true);

	$prefixos['contato']['gerenciar-pagina'] = array('Controller' => 'ContatoController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['contato']['atualizar-pagina'] = array('Controller' => 'ContatoController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['configuracoes']['gerenciar-pagina'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['configuracoes']['atualizar-pagina'] = array('Controller' => 'ConfiguracoesController', 'Method' => 'atualizar_pagina', 'logado' => true);
?>