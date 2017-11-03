<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class PaginaHomeController extends Controller {

		public function gerenciar_pagina() {
			try {
                $dados = PaginaHome::retrieveByPK(1);

				setSession('paginaAtual', 'pagina_home/gerenciar');
				setSession('blackPage', 'pagina_home/gerenciar-pagina');
				$this->renderView('pagina_home/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaHome::retrieveByPK(1);
                
                $dados->titulo = $this->requestParametrosPost["titulo"];
                
                
                $dados->texto_empresa = $this->requestParametrosPost["texto_empresa"];
                $dados->titulo_empresa = $this->requestParametrosPost["titulo_empresa"];
                $dados->link_empresa = $this->requestParametrosPost["link_empresa"];
                $dados->titulo_areas = $this->requestParametrosPost["titulo_areas"];
                $dados->texto_areas = $this->requestParametrosPost["texto_areas"];
                $dados->link_areas = $this->requestParametrosPost["link_areas"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina_home/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>