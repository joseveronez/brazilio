<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class RecuperacaoJudicialController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = RecuperacaoJudicial::retrieveByPK(1);

				setSession('paginaAtual', 'recuperacao_judicial/gerenciar');
				setSession('blackPage', 'recuperacao_judicial/gerenciar-pagina');
				$this->renderView('recuperacao_judicial/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = RecuperacaoJudicial::retrieveByPK(1);
                
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/recuperacao_judicial/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>