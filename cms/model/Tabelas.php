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

	class Contato extends SimpleOrm {
		protected static
		$table = 'contato';
	}

	class Configuracoes extends SimpleOrm {
		protected static
		$table = 'configuracoes';
	}
?>