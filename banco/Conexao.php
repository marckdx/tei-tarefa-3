<?php

class Conexao
{
	private $server, $user, $pass, $db;
	private $connection;
	
	function __construct()
	{
		$this->server = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->db = 'cdcol';
	}
	
	function open()
	{
		$this->connection = mysqli_connect($this->server, $this->user, $this->pass);
		mysqli_select_db($this->connection, $this->db);
	}
	
	function __destruct()
	{
		try{
			$this->connection->close();
		}catch(Exception $ex){
			print($ex->getMessage());
		}
	}
	
	function __get($attr)
	{
		return $this->$att;
	}
	
	function doQuery($sqlC)
	{
		return mysqli_query($this->connection, $sqlC);
	}
	
	function __set($attr, $value)
	{
		if($attr == 'connection'){
			throw new Exception('Valor de connection não pode ser alterado externamente',1);
		}else{
			$this->$attr = $value;
		}
	}
	
}