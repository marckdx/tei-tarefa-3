<?php

class Form
{
	private $method, $action, $send, $body, $name;
	
	public function __construct($method, $action, $name, $send)
	{
		$this->method = $method;
		$this->action = $action;
		$this->name = $name;
		$this->send = $send;
	}
	
	public function __set($inst, $value)
	{
		if($inst=="body"){
			$this->body.= $value;
		}else{
			$this->$inst = $value;
		}
	}
	
	public function __toString()
	{
		return "<form name='".$this->name."' action='".$this->action."' method='".$this->method."'>"
				.$this->body."<input type='submit' class='btn btn-primary' value='".$this->send."' />"."</form>";
	}
}