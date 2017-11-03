<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class ServicosController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'servicos/gerenciar');
				setSession('blackPage', 'servicos/novos-dados');
				$this->renderView('servicos/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Servicos();
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
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->descricao = $this->requestParametrosPost["descricao"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/servicos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Servicos::all();
                
                setSession('paginaAtual', 'servicos/gerenciar');
                setSession('blackPage', 'servicos/gerenciar-dados');
                $this->renderView('servicos/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[1];
            $dados = Servicos::retrieveByPK($id);            
            setSession('paginaAtual', 'servicos/gerenciar');
            setSession('blackPage', 'servicos/gerenciar-dados');
            $this->renderView('servicos/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Servicos::retrieveByPK($id);
                if (!empty($_FILES['icone']['name'])) {

                    $this->excluir_arquivo($dados->icone);

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
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->descricao = $this->requestParametrosPost["descricao"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/servicos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[1];
                $dados = Servicos::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/servicos/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>