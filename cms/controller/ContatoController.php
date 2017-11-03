<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class ContatoController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = Contato::retrieveByPK(1);

				setSession('paginaAtual', 'contato/gerenciar');
				setSession('blackPage', 'contato/gerenciar-pagina');
				$this->renderView('contato/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = Contato::retrieveByPK(1);
                
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
                $dados->chamada = $this->requestParametrosPost["chamada"];
                $dados->razao_social = $this->requestParametrosPost["razao_social"];
                $dados->cnpj = $this->requestParametrosPost["cnpj"];
                $dados->telefone = $this->requestParametrosPost["telefone"];
                $dados->fax = $this->requestParametrosPost["fax"];
                $dados->endereco_escritorio = $this->requestParametrosPost["endereco_escritorio"];
                $dados->endereco_estacionamento = $this->requestParametrosPost["endereco_estacionamento"];
                $dados->mapa = $this->requestParametrosPost["mapa"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/contato/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>