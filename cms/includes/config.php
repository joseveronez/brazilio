<?php 
	session_start();

	$server = $_SERVER['HTTP_HOST'];

	if($server == "localhost:8080") {
        
		$caminho_pdf =  $_SERVER['DOCUMENT_ROOT']."/brazilio/pdf";
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT']."/brazilio/cms";
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].":8080/brazilio/cms";
		$caminho_plugins = "http://".$_SERVER['SERVER_NAME'].":8080/plugins/";
	} else if($server == "localhost") {
        
		$caminho_pdf =  $_SERVER['DOCUMENT_ROOT']."/brazilio/pdf";
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT'].'/brazilio/cms';
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].'/brazilio/cms';
		$caminho_plugins = "http://".$_SERVER['SERVER_NAME'].'/plugins/';
	} else if($server == "comberweb.com.br") {
        
		$caminho_pdf =  $_SERVER['DOCUMENT_ROOT']."/projetos/brazilio/pdf";
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT']."/projetos/brazilio/cms";
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].'/projetos/brazilio/cms';
		$caminho_plugins = "http://www.".$_SERVER['SERVER_NAME'].'/projetos/plugins/';
	}

    define('caminhoPdf', $caminho_pdf);
	define('caminhoSite', $caminho_site);
	define('caminhoFisico', $caminho_raiz);
	define('caminhoPlugins', $caminho_plugins);
	define('bancoDeDados', 'comberwe_brazilio');
	define('logoEmpresa', caminhoSite . '/images/logo/logo-peppers.png');
	
	$title = 'Brazilio | CMS';
	define('title', $title);
?>