<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class ContatoController extends Controller {
		public function gerenciar_pagina() {
			try {
                $dados = PaginaContato::retrieveByPK(1);

				setSession('paginaAtual', 'contato/gerenciar');
				setSession('blackPage', 'contato/gerenciar-pagina');
				$this->renderView('contato/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaContato::retrieveByPK(1);
                
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
                $dados->titulo_contato = $this->requestParametrosPost["titulo_contato"];
                $dados->chamada = $this->requestParametrosPost["chamada"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/contato/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>