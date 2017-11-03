<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class AreasController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = Areas::retrieveByPK(1);

				setSession('paginaAtual', 'areas/gerenciar');
				setSession('blackPage', 'areas/gerenciar-pagina');
				$this->renderView('areas/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = Areas::retrieveByPK(1);
                
                if (!empty($_FILES['banner_topo']['name'])) {
                    $handle = new upload($_FILES['banner_topo']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->banner_topo = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->titulo = $this->requestParametrosPost["titulo"];
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
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/areas/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>