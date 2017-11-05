<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class PaginaPrincipalController extends Controller {
		// página
        public function gerenciar_pagina() {
			try {
                $dados = PaginaPrincipal::retrieveByPK(1);

				setSession('paginaAtual', 'pagina-principal/gerenciar');
				setSession('blackPage', 'pagina-principal/gerenciar-pagina');
				$this->renderView('pagina-principal/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaPrincipal::retrieveByPK(1);
                
                $dados->titulo = $this->requestParametrosPost["titulo"];
                
                
                $dados->texto_empresa = $this->requestParametrosPost["texto_empresa"];
                $dados->titulo_empresa = $this->requestParametrosPost["titulo_empresa"];
                $dados->link_empresa = $this->requestParametrosPost["link_empresa"];
                $dados->titulo_areas = $this->requestParametrosPost["titulo_areas"];
                $dados->texto_areas = $this->requestParametrosPost["texto_areas"];
                $dados->link_areas = $this->requestParametrosPost["link_areas"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina-principal/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        // slider
        public function novo_slide() {
            try {
                setSession('paginaAtual', 'pagina-principal/gerenciar');
                setSession('blackPage', 'pagina-principal/novo-slide');
                $this->renderView('pagina-principal/novo_slide');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function salvar_slide() {
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
                $dados->link = $this->requestParametrosPost["link"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina-principal/gerenciar-slides");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_slides(){
            try {
                $dados = SlidesHome::all();
                
                setSession('paginaAtual', 'pagina-principal/gerenciar');
                setSession('blackPage', 'pagina-principal/gerenciar-slides');
                $this->renderView('pagina-principal/gerenciar_slides', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_slide() {
            $id = $this->requestParametrosGet[0];
            $dados = SlidesHome::retrieveByPK($id);
            setSession('paginaAtual', 'pagina-principal/gerenciar');
            setSession('blackPage', 'pagina-principal/gerenciar-slides');
            $this->renderView('pagina-principal/editar_slide', $dados);
        }
        public function atualizar_slide(){
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
                $dados->link = $this->requestParametrosPost["link"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina-principal/gerenciar-slides");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_slide(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = SlidesHome::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/pagina-principal/gerenciar-slides');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>