<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class RecuperacaoController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'recuperacao/gerenciar');
				setSession('blackPage', 'recuperacao/novos-dados');
				$this->renderView('recuperacao/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Recuperacao();
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/recuperacao/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Recuperacao::all();
                
                setSession('paginaAtual', 'recuperacao/gerenciar');
                setSession('blackPage', 'recuperacao/gerenciar-dados');
                $this->renderView('recuperacao/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Recuperacao::retrieveByPK($id);            
            setSession('paginaAtual', 'recuperacao/gerenciar');
            setSession('blackPage', 'recuperacao/gerenciar-dados');
            $this->renderView('recuperacao/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Recuperacao::retrieveByPK($id);
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();
                
                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/recuperacao/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Recuperacao::retrieveByPk($id);
                $this->excluir_arquivo($dados->icone);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/recuperacao/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>