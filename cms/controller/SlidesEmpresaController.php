<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class SlidesEmpresaController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'slides_empresa/gerenciar');
				setSession('blackPage', 'slides_empresa/novos-dados');
				$this->renderView('slides_empresa/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new SlidesEmpresa();
                $dados->slider = $this->requestParametrosPost["slider"];
                if (!empty($_FILES['imagem']['name'])) {
                    $handle = new upload($_FILES['imagem']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagem = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->posicao = $this->requestParametrosPost["posicao"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/slides_empresa/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = SlidesEmpresa::all();
                
                setSession('paginaAtual', 'slides_empresa/gerenciar');
                setSession('blackPage', 'slides_empresa/gerenciar-dados');
                $this->renderView('slides_empresa/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = SlidesEmpresa::retrieveByPK($id);
            setSession('paginaAtual', 'slides_empresa/gerenciar');
            setSession('blackPage', 'slides_empresa/gerenciar-dados');
            $this->renderView('slides_empresa/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = SlidesEmpresa::retrieveByPK($id);
                $dados->slider = $this->requestParametrosPost["slider"];
                if (!empty($_FILES['imagem']['name'])) {

                    $this->excluir_arquivo($dados->imagem);

                    $handle = new upload($_FILES['imagem']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagem = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->posicao = $this->requestParametrosPost["posicao"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/slides_empresa/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = SlidesEmpresa::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/slides_empresa/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>