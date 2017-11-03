<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class RecuperacaoArquivosController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'recuperacao_arquivos/gerenciar');
				setSession('blackPage', 'recuperacao_arquivos/novos-dados');
				$this->renderView('recuperacao_arquivos/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new RecuperacaoArquivos();
                $dados->id_recuperacao = $this->requestParametrosPost["id_recuperacao"];
                $dados->titulo = $this->requestParametrosPost["titulo"];
                
                if (!empty($_FILES['arquivo']['name'])) {
                    $handle = new upload($_FILES['arquivo']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoPdf);
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->arquivo = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/recuperacao_arquivos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = RecuperacaoArquivos::all();
                
                setSession('paginaAtual', 'recuperacao_arquivos/gerenciar');
                setSession('blackPage', 'recuperacao_arquivos/gerenciar-dados');
                $this->renderView('recuperacao_arquivos/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = RecuperacaoArquivos::retrieveByPK($id);            
            setSession('paginaAtual', 'recuperacao_arquivos/gerenciar');
            setSession('blackPage', 'recuperacao_arquivos/gerenciar-dados');
            $this->renderView('recuperacao_arquivos/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = RecuperacaoArquivos::retrieveByPK($id);
                $dados->id_recuperacao = $this->requestParametrosPost["id_recuperacao"];
                $dados->titulo = $this->requestParametrosPost["titulo"];
                
                if (!empty($_FILES['arquivo']['name'])) {

                    $this->excluir_arquivo($dados->arquivo);

                    $handle = new upload($_FILES['arquivo']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoPdf);
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->arquivo = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->save();
                
                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/recuperacao_arquivos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = RecuperacaoArquivos::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/recuperacao_arquivos/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>