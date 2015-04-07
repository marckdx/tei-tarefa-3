<?php 
	require_once ('view/Html.php');
	require_once ('view/Bootstrap.php');
	require_once ('view/A.php');
	
	$html = new Html("P�gina de retorno");
	
	//Linkando os arquivos de estilo e a��o do bootstrap
	$boot = new Bootstrap();
	$boot->linkCSS = "css/bootstrap.css";
	$boot->linkJS = "js/bootstrap.js";
	
	//Verificando se h� uma vari�vel de retorno
	if(isset($_GET['cd'])){
		$html->body = "<p>O valor recebido foi: ".$_GET['cd']."</p>";
	}else{
		$html->body = "<p>Nenhum valor recebido</p>";
	}
	$html->body = new A("index.php", "Voltar", A::BTN_AZUL);
	$html->body = new A("destino.php", "Limpar", A::BTN_LARANJA);
	$html->body = $boot;
	print($html);
?>