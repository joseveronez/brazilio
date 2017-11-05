<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class EquipeController extends Controller {
        public function gerenciar_pagina() {
            try {
                $dados = PaginaEquipe::retrieveByPK(1);

                setSession('paginaAtual', 'equipe/gerenciar');
                setSession('blackPage', 'equipe/gerenciar-pagina');
                $this->renderView('equipe/gerenciar_pagina', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function atualizar_pagina() {
            try {
                $dados = PaginaEquipe::retrieveByPK(1);
                
                $dados->titulo = $this->requestParametrosPost["titulo"];
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
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/equipe/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
		public function novo_integrante() {
			try {
				setSession('paginaAtual', 'equipe/gerenciar');
				setSession('blackPage', 'equipe/novo-integrante');
				$this->renderView('equipe/novo_integrante');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_integrante() {
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
                $this->redirect(caminhoSite . "/equipe/gerenciar-equipe");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_equipe(){
            try {
                $dados = Equipe::all();
                
                setSession('paginaAtual', 'equipe/gerenciar');
                setSession('blackPage', 'equipe/gerenciar-equipe');
                $this->renderView('equipe/gerenciar_equipe', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_integrante() {
            $id = $this->requestParametrosGet[0];
            $dados = Equipe::retrieveByPK($id);

            setSession('paginaAtual', 'equipe/gerenciar');
            setSession('blackPage', 'equipe/gerenciar-equipe');
            $this->renderView('equipe/editar_integrante', $dados);
        }
        public function atualizar_integrante(){
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
                $this->redirect(caminhoSite . "/equipe/gerenciar-equipe");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_integrante(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Equipe::retrieveByPk($id);
                $this->excluir_arquivo($dados->foto);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/equipe/gerenciar-equipe');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>