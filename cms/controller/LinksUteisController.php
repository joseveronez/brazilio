<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class LinksUteisController extends Controller {
		public function gerenciar_pagina() {
            try {
                $dados = PaginaLinksUteis::retrieveByPK(1);

                setSession('paginaAtual', 'links-uteis/gerenciar');
                setSession('blackPage', 'links-uteis/gerenciar-pagina');
                $this->renderView('links-uteis/gerenciar_pagina', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function atualizar_pagina() {
            try {
                $dados = PaginaLinksUteis::retrieveByPK(1);
                
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
                $dados->titulo_banner = $this->requestParametrosPost["titulo_banner"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/links-uteis/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function nova_categoria() {
			try {
				setSession('paginaAtual', 'links-uteis/gerenciar');
				setSession('blackPage', 'links-uteis/nova-categoria');
				$this->renderView('links-uteis/nova_categoria');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_categoria() {
            try {
                $dados = new LinksUteisCategorias();
                $dados->categoria = $this->requestParametrosPost["categoria"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/links-uteis/gerenciar-categorias");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_categorias(){
            try {
                $dados = LinksUteisCategorias::all();
                
                setSession('paginaAtual', 'links-uteis/gerenciar');
                setSession('blackPage', 'links-uteis/gerenciar-categorias');
                $this->renderView('links-uteis/gerenciar_categorias', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_categoria() {
            $id = $this->requestParametrosGet[0];
            $dados = LinksUteisCategorias::retrieveByPK($id);            
            setSession('paginaAtual', 'links-uteis/gerenciar');
            setSession('blackPage', 'links-uteis/gerenciar-categorias');
            $this->renderView('links-uteis/editar_categoria', $dados);
        }
        public function atualizar_categoria(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = LinksUteisCategorias::retrieveByPK($id);
                $dados->categoria = $this->requestParametrosPost["categoria"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/links-uteis/gerenciar-categorias");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function novo_link() {
            try {
                $categorias = LinksUteisCategorias::all();

                setSession('paginaAtual', 'links-uteis/gerenciar');
                setSession('blackPage', 'links-uteis/novo-link');
                $this->renderView('links-uteis/novo_link', $categorias);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function salvar_link() {
            try {
                $dados = new LinksUteis();
                $dados->id_categoria = $this->requestParametrosPost["id_categoria"];
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->url = $this->requestParametrosPost["url"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/links-uteis/gerenciar-links");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_links(){
            try {
                $categorias = LinksUteisCategorias::all();
                foreach($categorias as $cat) {
                    $dados[$cat->id] = LinksUteis::sql("SELECT * FROM links_uteis WHERE id_categoria = {$cat->id}");
                }

                $parametros = array("categorias"=>$categorias, "dados"=>$dados);
                
                setSession('paginaAtual', 'links-uteis/gerenciar');
                setSession('blackPage', 'links-uteis/gerenciar-links');
                $this->renderView('links-uteis/gerenciar_links', $parametros);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_link() {
            $id = $this->requestParametrosGet[0];
            $categorias = LinksUteisCategorias::all();
            $dados = LinksUteis::retrieveByPK($id);

            $parametros = array("categorias"=>$categorias, "dados"=>$dados);

            setSession('paginaAtual', 'links-uteis/gerenciar');
            setSession('blackPage', 'links-uteis/gerenciar-links');
            $this->renderView('links-uteis/editar_link', $parametros);
        }
        public function atualizar_link(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = LinksUteis::retrieveByPK($id);
                $dados->id_categoria = $this->requestParametrosPost["id_categoria"];
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->url = $this->requestParametrosPost["url"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/links-uteis/gerenciar-links");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_link(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = LinksUteis::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/links-uteis/gerenciar-links');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>