<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class RecuperacaoJudicialController extends Controller {
		// página
		public function gerenciar_pagina() {
			try {
                $dados = PaginaRecuperacaoJudicial::retrieveByPK(1);

				setSession('paginaAtual', 'recuperacao-judicial/gerenciar');
				setSession('blackPage', 'recuperacao-judicial/gerenciar-pagina');
				$this->renderView('recuperacao-judicial/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaRecuperacaoJudicial::retrieveByPK(1);
                
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
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/recuperacao-judicial/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        // empresas
        public function nova_empresa() {
			try {
				setSession('paginaAtual', 'recuperacao-judicial/gerenciar');
				setSession('blackPage', 'recuperacao-judicial/nova-empresa');
				$this->renderView('recuperacao-judicial/nova_empresa');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_empresa() {
            try {
                $dados = new RecuperacaoEmpresas();
                $dados->slug = $this->requestParametrosPost["slug"];
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/recuperacao-judicial/gerenciar-empresas");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_empresas(){
            try {
                $dados = RecuperacaoEmpresas::all();
                
                setSession('paginaAtual', 'recuperacao-judicial/gerenciar');
                setSession('blackPage', 'recuperacao-judicial/gerenciar-empresas');
                $this->renderView('recuperacao-judicial/gerenciar_empresas', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_empresa() {
            $id = $this->requestParametrosGet[0];
            $dados = RecuperacaoEmpresas::retrieveByPK($id);            
            setSession('paginaAtual', 'recuperacao-judicial/gerenciar');
            setSession('blackPage', 'recuperacao-judicial/gerenciar-empresas');
            $this->renderView('recuperacao-judicial/editar_empresa', $dados);
        }
        public function atualizar_empresa(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = RecuperacaoEmpresas::retrieveByPK($id);
                $dados->slug = $this->requestParametrosPost["slug"];
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();
                
                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/recuperacao-judicial/gerenciar-empresas");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_empresa(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = RecuperacaoEmpresas::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/recuperacao-judicial/gerenciar-empresas');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        // arquivos
        public function novos_dados() {
			try {
				setSession('paginaAtual', 'recuperacao-judicial/gerenciar');
				setSession('blackPage', 'recuperacao-judicial/novos-dados');
				$this->renderView('recuperacao-judicial/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new RecuperacaoArquivos();
                $dados->id_empresa = $this->requestParametrosPost["id_empresa"];
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
                $this->redirect(caminhoSite . "/recuperacao-judicial/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = RecuperacaoArquivos::all();
                
                setSession('paginaAtual', 'recuperacao-judicial/gerenciar');
                setSession('blackPage', 'recuperacao-judicial/gerenciar-dados');
                $this->renderView('recuperacao-judicial/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = RecuperacaoArquivos::retrieveByPK($id);            
            setSession('paginaAtual', 'recuperacao-judicial/gerenciar');
            setSession('blackPage', 'recuperacao-judicial/gerenciar-dados');
            $this->renderView('recuperacao-judicial/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = RecuperacaoArquivos::retrieveByPK($id);
                $dados->id_empresa = $this->requestParametrosPost["id_empresa"];
                $dados->titulo = $this->requestParametrosPost["titulo"];
                
                if (!empty($_FILES['arquivo']['name'])) {

                    $this->excluir_pdf($dados->arquivo);

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
                $this->redirect(caminhoSite . "/recuperacao-judicial/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = RecuperacaoArquivos::retrieveByPk($id);
                $this->excluir_pdf($dados->arquivo);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/recuperacao-judicial/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>