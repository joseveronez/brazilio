<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class PaginaHomeController extends Controller {

		public function gerenciar_pagina() {
			try {
                $dados = PaginaHome::retrieveByPK(1);

				setSession('paginaAtual', 'pagina_home/gerenciar');
				setSession('blackPage', 'pagina_home/gerenciar-pagina');
				$this->renderView('pagina_home/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = PaginaHome::retrieveByPK(1);
                
                $dados->titulo = $this->requestParametrosPost["titulo"];
                
                
                $dados->texto_empresa = $this->requestParametrosPost["texto_empresa"];
                $dados->titulo_empresa = $this->requestParametrosPost["titulo_empresa"];
                $dados->titulo_areas = $this->requestParametrosPost["titulo_areas"];
                $dados->texto_areas = $this->requestParametrosPost["texto_areas"];
                if (!empty($_FILES['img_banner1']['name'])) {
                    $handle = new upload($_FILES['img_banner1']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->img_banner1 = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->titulo_banner1 = $this->requestParametrosPost["titulo_banner1"];
                $dados->texto_banner1 = $this->requestParametrosPost["texto_banner1"];
                if (!empty($_FILES['img_banner2']['name'])) {
                    $handle = new upload($_FILES['img_banner2']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->img_banner2 = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->titulo_banner2 = $this->requestParametrosPost["titulo_banner2"];
                $dados->texto_banner2 = $this->requestParametrosPost["texto_banner2"];
                if (!empty($_FILES['img_banner3']['name'])) {
                    $handle = new upload($_FILES['img_banner3']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->img_banner3 = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->titulo_banner3 = $this->requestParametrosPost["titulo_banner3"];
                $dados->texto_banner3 = $this->requestParametrosPost["texto_banner3"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/pagina_home/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>