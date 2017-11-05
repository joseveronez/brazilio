<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class TrabalheConoscoController extends Controller {
		public function gerenciar_pagina() {
			try {
                $dados = PaginaTrabalheConosco::retrieveByPK(1);

				setSession('paginaAtual', 'contato/gerenciar');
				setSession('blackPage', 'trabalhe-conosco/gerenciar-pagina');
				$this->renderView('trabalhe-conosco/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaTrabalheConosco::retrieveByPK(1);
                
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
                $dados->titulo_banner = $this->requestParametrosPost["titulo_banner"];
                $dados->titulo_fale_conosco = $this->requestParametrosPost["titulo_fale_conosco"];
                $dados->conteudo = $this->requestParametrosPost["conteudo"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/trabalhe-conosco/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>