<?php
    /**

    classe responsável pelo fluxo da requisição e carregamento da página
    **/
    class Front_Controller
    {
        private static $_routes = array(
            ''=>array('layout'=>'default','view'=>'home'),
            'sobre'=>array('layout'=>'default','view'=>'sobre'),
            'servicos'=>array('layout'=>'default','view'=>'servicos'),
            'equipe'=>array('layout'=>'default','view'=>'equipe'),
            'contato'=>array('layout'=>'default','view'=>'contato'),
            'trabalhe-conosco'=>array('layout'=>'default','view'=>'trabalhe-conosco'),
            'links-uteis'=>array('layout'=>'default','view'=>'links-uteis'),
            'consulta-processual'=>array('layout'=>'default','view'=>'consulta-processual'),
            'recuperacao-judicial'=>array('layout'=>'default','view'=>'recuperacao-judicial'),
            'recuperacao'=>array('layout'=>'default','view'=>'recuperacao'),
            'formulario'=>array('layout'=>'ajax','view'=>'formulario')
        ); //array com todas as rotas disponiveis
        private static $_pagina; //pagina requisitada
        private static $_parametros;

        /**
         * Retorna uma instância única de uma classe.
         *
         * @staticvar Front_Controller $instance A instância única dessa classe.
         *
         * @return Front_Controller A Instância única.
         */
        public static function getInstance()
        {
            static $instance = null;
            if (null === $instance) {
                $instance = new static();
            }

            return $instance;
        }

        /**
         * Construtor do tipo protegido previne que uma nova instância da
         * Classe seja criada através do operador `new` de fora dessa classe.
         */
        protected function __construct()
        {
        }

        /**
         * Método clone do tipo privado previne a clonagem dessa instância
         * da classe
         *
         * @return void
         */
        private function __clone()
        {
        }

        /**
         * Método unserialize do tipo privado para prevenir a desserialização
         * da instância dessa classe.
         *
         * @return void
         */
        private function __wakeup()
        {
        }

        public function trataRequisicao(){
    	global $urlArr;
    	
    	if(count($urlArr)){
    		$pagina = $urlArr[0];
    		array_shift($urlArr);
    		self::$_parametros = isset($urlArr[0]) ? $urlArr : array();
    	}else{
    		$pagina = '';
    		self::$_parametros = array();
    	}

    	self::$_pagina = self::$_routes[$pagina];
    	   include(LAYOUTS.self::$_pagina['layout'].".php");
        }

        public static function carregaConteudo(){
    	   include(VIEWS.self::$_pagina['view'].".php");
        }

        public static function getParametros(){
            return self::$_parametros;
        }
    }
?>