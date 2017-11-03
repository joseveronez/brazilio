<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class DiferenciaisController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'diferenciais/gerenciar');
				setSession('blackPage', 'diferenciais/novos-dados');
				$this->renderView('diferenciais/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Diferenciais();
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/diferenciais/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Diferenciais::all();
                
                setSession('paginaAtual', 'diferenciais/gerenciar');
                setSession('blackPage', 'diferenciais/gerenciar-dados');
                $this->renderView('diferenciais/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Diferenciais::retrieveByPK($id);            
            setSession('paginaAtual', 'diferenciais/gerenciar');
            setSession('blackPage', 'diferenciais/gerenciar-dados');
            $this->renderView('diferenciais/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Diferenciais::retrieveByPK($id);
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();
                
                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/diferenciais/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Diferenciais::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/diferenciais/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>