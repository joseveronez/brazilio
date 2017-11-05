<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class AreasAtuacaoController extends Controller {
		public function gerenciar_pagina() {
			try {
                $dados = PaginaAreasAtuacao::retrieveByPK(1);

				setSession('paginaAtual', 'areas-atuacao/gerenciar');
				setSession('blackPage', 'areas-atuacao/gerenciar-pagina');
				$this->renderView('areas-atuacao/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaAreasAtuacao::retrieveByPK(1);
                
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
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/areas-atuacao/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function novo_servico() {
            try {
                setSession('paginaAtual', 'areas-atuacao/gerenciar');
                setSession('blackPage', 'areas-atuacao/novo-servico');
                $this->renderView('areas-atuacao/novo_servico');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function salvar_servico() {
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
                $dados->link_servico = $this->requestParametrosPost["link_servico"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/areas-atuacao/gerenciar-servicos");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_servicos(){
            try {
                $dados = Servicos::all();
                
                setSession('paginaAtual', 'areas-atuacao/gerenciar');
                setSession('blackPage', 'areas-atuacao/gerenciar-servicos');
                $this->renderView('areas-atuacao/gerenciar_servicos', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_servico() {
            $id = $this->requestParametrosGet[0];
            $dados = Servicos::retrieveByPK($id);

            setSession('paginaAtual', 'areas-atuacao/gerenciar');
            setSession('blackPage', 'areas-atuacao/gerenciar-servicos');
            $this->renderView('areas-atuacao/editar_servico', $dados);
        }
        public function atualizar_servico(){
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
                $dados->link_servico = $this->requestParametrosPost["link_servico"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/areas-atuacao/gerenciar-servicos");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_servico(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Servicos::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/areas-atuacao/gerenciar-servicos');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>