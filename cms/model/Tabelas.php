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
    
    class PaginaHome extends SimpleOrm {
		protected static
		$table = 'pagina_home';
	}


	class Empresa extends SimpleOrm {
		protected static
		$table = 'empresa';
	}

	class Areas extends SimpleOrm {
		protected static
		$table = 'areas';
	}

    class SlidesHome extends SimpleOrm {
		protected static
		$table = 'slides_home';
	}

    class SlidesEmpresa extends SimpleOrm {
		protected static
		$table = 'slides_empresa';
	}

	class Servicos extends SimpleOrm {
		protected static
		$table = 'servicos';
	}

    class Diferenciais extends SimpleOrm {
		protected static
		$table = 'diferenciais';
	}

	class PaginaEquipe extends SimpleOrm {
		protected static
		$table = 'pagina_equipe';
	}

	class Equipe extends SimpleOrm {
		protected static
		$table = 'equipe';
	}

	class Contato extends SimpleOrm {
		protected static
		$table = 'contato';
	}

	class Configuracoes extends SimpleOrm {
		protected static
		$table = 'configuracoes';
	}

    class Recuperacao extends SimpleOrm {
		protected static
		$table = 'recuperacao';
	}
    
     class RecuperacaoJudicial extends SimpleOrm {
		protected static
		$table = 'recuperacao_judicial';
	}

    class RecuperacaoArquivos extends SimpleOrm {
		protected static
		$table = 'recuperacao_arquivos';
	}
?>