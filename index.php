<?php
	require_once ('view/Html.php');
	require_once ('view/Select.php');
	require_once ('view/Form.php');
	require_once ('view/Bootstrap.php');
	
	require ('banco/ItemDAL.php');
	
	//Linkando os arquivos de estilo e ação do bootstrap
	$boot = new Bootstrap();
	$boot->linkCSS = "css/bootstrap.css";
	$boot->linkJS = "js/bootstrap.js";
	
	//Inicia o HTML do documento
	$html = new Html("Select com banco");
	
	//Adiciona um título
	$html->body="<h1>Selecione um cd:</h1>";
	
	//Classe que faz manipulação dos dados dos itens
	$itemdal = new ItemDAL();
	$itens = $itemdal->getItens();

	//Cria o formulário
	$form = new Form("GET", "destino.php", "formMain", "Enviar");
	
	//Cria a combobox
	$select = new Select("cd");
	//Usa método que popula um combobox apartir de um arrayObject
	$select->optionsFromArray($itens);
	
	//Adiciona combobox ao formuláro
	$form->body = $select;
	//Adiciona formulário ao corpo do HTML
	$html->body = $form;
	//Adiciona as definições de Bootstrap do documento
	$html->body = $boot;
	print($html);
			
	
