<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class EmpresaController extends Controller {
		// página
        public function gerenciar_pagina() {
			try {
                $dados = PaginaEmpresa::retrieveByPK(1);

				setSession('paginaAtual', 'empresa/gerenciar');
				setSession('blackPage', 'empresa/gerenciar-pagina');
                
				$this->renderView('empresa/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaEmpresa::retrieveByPK(1);
                
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
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->texto_carousel = $this->requestParametrosPost["texto_carousel"];
                $dados->titulo_diferenciais = $this->requestParametrosPost["titulo_diferenciais"];
                $dados->texto_diferenciais = $this->requestParametrosPost["texto_diferenciais"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/empresa/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        // diferencial
        public function novo_diferencial() {
            try {
                setSession('paginaAtual', 'empresa/gerenciar');
                setSession('blackPage', 'empresa/novo-diferencial');
                $this->renderView('empresa/novo_diferencial');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function salvar_diferencial() {
            try {
                $dados = new Diferenciais();
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/empresa/gerenciar-diferenciais");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_diferenciais(){
            try {
                $dados = Diferenciais::all();
                
                setSession('paginaAtual', 'empresa/gerenciar');
                setSession('blackPage', 'empresa/gerenciar-diferenciais');
                $this->renderView('empresa/gerenciar_diferenciais', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_diferencial() {
            $id = $this->requestParametrosGet[0];
            $dados = Diferenciais::retrieveByPK($id);            
            setSession('paginaAtual', 'empresa/gerenciar');
            setSession('blackPage', 'empresa/gerenciar-diferenciais');
            $this->renderView('empresa/editar_diferencial', $dados);
        }
        public function atualizar_diferencial(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Diferenciais::retrieveByPK($id);
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();
                
                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/empresa/gerenciar-diferenciais");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_diferencial(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Diferenciais::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/empresa/gerenciar-digerenciais');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        // slider
        public function novo_slide() {
            try {
                setSession('paginaAtual', 'empresa/gerenciar');
                setSession('blackPage', 'empresa/novo-slide');
                $this->renderView('empresa/novo_slide');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function salvar_slide() {
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
                $this->redirect(caminhoSite . "/empresa/gerenciar-slides");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_slides(){
            try {
                $dados = SlidesEmpresa::all();
                
                setSession('paginaAtual', 'empresa/gerenciar');
                setSession('blackPage', 'empresa/gerenciar-slides');
                $this->renderView('empresa/gerenciar_slides', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_slide() {
            $id = $this->requestParametrosGet[0];
            $dados = SlidesEmpresa::retrieveByPK($id);
            setSession('paginaAtual', 'empresa/gerenciar');
            setSession('blackPage', 'empresa/gerenciar-slides');
            $this->renderView('empresa/editar_slide', $dados);
        }
        public function atualizar_slide(){
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
                $this->redirect(caminhoSite . "/empresa/gerenciar-slides");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_slide(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = SlidesEmpresa::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/empresa/gerenciar-slides');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>