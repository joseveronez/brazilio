<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class PaginaEquipeController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = PaginaEquipe::retrieveByPK(1);

				setSession('paginaAtual', 'pagina_equipe/gerenciar');
				setSession('blackPage', 'pagina_equipe/gerenciar-pagina');
				$this->renderView('pagina_equipe/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaEquipe::retrieveByPK(1);
                
                $dados->titulo = $this->requestParametrosPost["titulo"];
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
                if (!empty($_FILES['icone']['name'])) {
                    $handle = new upload($_FILES['icone']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->icone = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina_equipe/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>