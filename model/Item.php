<?php

namespace model;

class Item
{
	private $id;
	private $content;
	
	function __construct($id, $content)
	{
		$this->id = $id;
		$this->content = $content;
	}

	function __toString()
	{
		return $this->content;
	}
	
	function __get($attr)
	{
		return $this->$attr;	
	}
}