<?php
	include caminhoFisico . '/orm/SimpleOrm.class.php';
	include caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);

	class Usuarios extends SimpleOrm {
		protected static
    	$table = 'usuarios';
	}

	class Home extends SimpleOrm {
		protected static
		$table = 'home';
	}
    
    class PaginaPrincipal extends SimpleOrm {
		protected static
		$table = 'pagina_principal';
	}

    class SlidesHome extends SimpleOrm {
		protected static
		$table = 'slides_home';
	}

	class PaginaEmpresa extends SimpleOrm {
		protected static
		$table = 'pagina_empresa';
	}

	class SlidesEmpresa extends SimpleOrm {
		protected static
		$table = 'slides_empresa';
	}

	class Diferenciais extends SimpleOrm {
		protected static
		$table = 'diferenciais';
	}

	class PaginaAreasAtuacao extends SimpleOrm {
		protected static
		$table = 'pagina_areas_atuacao';
	}

	class Servicos extends SimpleOrm {
		protected static
		$table = 'servicos';
	}

	class PaginaEquipe extends SimpleOrm {
		protected static
		$table = 'pagina_equipe';
	}

	class Equipe extends SimpleOrm {
		protected static
		$table = 'equipe';
	}

	class PaginaLinksUteis extends SimpleOrm {
		protected static
		$table = 'pagina_links_uteis';
	}

	class LinksUteisCategorias extends SimpleOrm {
		protected static
		$table = 'links_uteis_categorias';
	}

	class LinksUteis extends SimpleOrm {
		protected static
		$table = 'links_uteis';
	}

	class PaginaRecuperacaoJudicial extends SimpleOrm {
		protected static
		$table = 'pagina_recuperacao_judicial';
	}

	class RecuperacaoEmpresas extends SimpleOrm {
		protected static
		$table = 'recuperacao_empresas';
	}

    class RecuperacaoArquivos extends SimpleOrm {
		protected static
		$table = 'recuperacao_arquivos';
	}

	class PaginaContato extends SimpleOrm {
		protected static
		$table = 'pagina_contato';
	}

	class PaginaTrabalheConosco extends SimpleOrm {
		protected static
		$table = 'pagina_trabalhe_conosco';
	}

	class PaginaConsultaProcessual extends SimpleOrm {
		protected static
		$table = 'pagina_consulta_processual';
	}

	class FormularioNewsletter extends SimpleOrm {
		protected static
		$table = 'formulario_newsletter';
	}

	class FormularioContato extends SimpleOrm {
		protected static
		$table = 'formulario_contato';
	}

	class FormularioTrabalheConosco extends SimpleOrm {
		protected static
		$table = 'formulario_trabalhe_conosco';
	}

	class Configuracoes extends SimpleOrm {
		protected static
		$table = 'configuracoes';
	}
?>