<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class EquipeController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'equipe/gerenciar');
				setSession('blackPage', 'equipe/novos-dados');
				$this->renderView('equipe/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Equipe();
                $dados->tipo = $this->requestParametrosPost["tipo"];
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->oab = $this->requestParametrosPost["oab"];
                $dados->email = $this->requestParametrosPost["email"];
                $dados->formacao = $this->requestParametrosPost["formacao"];
                if (!empty($_FILES['foto']['name'])) {
                    $handle = new upload($_FILES['foto']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->foto = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/equipe/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Equipe::all();
                
                setSession('paginaAtual', 'equipe/gerenciar');
                setSession('blackPage', 'equipe/gerenciar-dados');
                $this->renderView('equipe/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[1];
            $dados = Equipe::retrieveByPK($id);

            setSession('paginaAtual', 'equipe/gerenciar');
            setSession('blackPage', 'equipe/gerenciar-dados');
            $this->renderView('equipe/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Equipe::retrieveByPK($id);
                $dados->tipo = $this->requestParametrosPost["tipo"];
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->oab = $this->requestParametrosPost["oab"];
                $dados->email = $this->requestParametrosPost["email"];
                $dados->formacao = $this->requestParametrosPost["formacao"];
                if (!empty($_FILES['foto']['name'])) {

                    $this->excluir_arquivo($dados->foto);

                    $handle = new upload($_FILES['foto']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->foto = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/equipe/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[1];
                $dados = Equipe::retrieveByPk($id);
                $this->excluir_arquivo($dados->foto);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/equipe/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>