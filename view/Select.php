<?php

class Select
{
	private $options;
	private $name;
	
	public function __construct($name) 
	{
		$this->name = $name;
	}
	
	public function optionsFromArray($arr)
	{
		foreach ($arr as $item)
		{
			$this->options.= "<option value='".$item->content."'>".$item->content."</option>";
		}
	}
	
	public function __set($attr, $value)
	{
		if($attr == "options"){
			$this->options.=  "<option value='".$value."'>".$value."</option>";
		}else{
			$this->$attr = $value;
		}
	}
	
	public function __toString()
	{
		return  "<select name='".$this->name."'>".$this->options."</select>";
	}
}