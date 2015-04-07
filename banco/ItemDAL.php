<?php

require('Conexao.php');
require ('model/Item.php');

class ItemDAL
{
	private $itens = array();
	private $conexao;
	
	function __construct()
	{
		$this->conexao =  new Conexao();
	}

	function getItens()
	{
		$this->conexao->open();
		$cds = $this->conexao->doQuery("SELECT id, titel, interpret, jahr FROM cds");
		
		while($cd = mysqli_fetch_assoc($cds)){
			$item = new \model\Item($cd['id'], $cd['titel']);
			array_push($this->itens, $item);
		}
		
		return $this->itens;
	}
}
