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