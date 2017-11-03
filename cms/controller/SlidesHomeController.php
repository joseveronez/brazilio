<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class SlidesHomeController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'slides_home/gerenciar');
				setSession('blackPage', 'slides_home/novos-dados');
				$this->renderView('slides_home/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new SlidesHome();
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
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->chamada = $this->requestParametrosPost["chamada"];
                $dados->link_ = $this->requestParametrosPost["link_"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/slides_home/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = SlidesHome::all();
                
                setSession('paginaAtual', 'slides_home/gerenciar');
                setSession('blackPage', 'slides_home/gerenciar-dados');
                $this->renderView('slides_home/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = SlidesHome::retrieveByPK($id);
            setSession('paginaAtual', 'slides_home/gerenciar');
            setSession('blackPage', 'slides_home/gerenciar-dados');
            $this->renderView('slides_home/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = SlidesHome::retrieveByPK($id);
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
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->chamada = $this->requestParametrosPost["chamada"];
                $dados->link_ = $this->requestParametrosPost["link_"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/slides_home/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[1];
                $dados = SlidesHome::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/slides_home/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>