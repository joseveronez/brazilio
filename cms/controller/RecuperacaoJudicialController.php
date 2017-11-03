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
                
                if (!empty($_FILES['banner']['name'])) {
                    $handle = new upload($_FILES['banner']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->banner = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
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