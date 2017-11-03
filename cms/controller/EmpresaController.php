<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class EmpresaController extends Controller {


		public function gerenciar_pagina() {
			try {
                $dados = Empresa::retrieveByPK(1);

				setSession('paginaAtual', 'empresa/gerenciar');
				setSession('blackPage', 'empresa/gerenciar-pagina');
                
				$this->renderView('empresa/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = Empresa::retrieveByPK(1);
                
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
                if (!empty($_FILES['carousel_1']['name'])) {
                    $handle = new upload($_FILES['carousel_1']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->carousel_1 = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                
                if (!empty($_FILES['carousel_2']['name'])) {
                    $handle = new upload($_FILES['carousel_2']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->carousel_2 = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                if (!empty($_FILES['carousel_3']['name'])) {
                    $handle = new upload($_FILES['carousel_3']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->carousel_3 = $handle->file_dst_name;
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
    }
?>