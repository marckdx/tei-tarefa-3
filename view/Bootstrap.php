<?php

class Bootstrap
{
	private $linkCSS;
	private $linkJS;
	
	private $boot;
	
	public function __construct()
	{
	}
	
	public function __set($attr, $value)
	{
		switch ($attr)
		{
			case "linkCSS":
				$this->boot.= "<link rel='stylesheet' href='".$value."'/>";
				break;
			case "linkJS":
				$this->boot.= "<script type='text/javascript' src='".$value."'>";
				break;
			default:
				$this->boot.=$value;
				break;				
		}
	}
	
	public function __toString()
	{
		return $this->boot;
	}
}