<?php

class A
{
	const BTN_AZUL = "btn btn-primary";
	const BTN_LARANJA = "btn btn-warning";
	
	private $link;
	private $text;
	private $style;
	
	private $content;
	
	public function __construct($link, $text, $style)
	{
		$this->link = $link;
		$this->style = $style;
		$this->text = $text;
	}
	
	public function __toString()
	{
		return "<a href='".$this->link."' class='".$this->style."'>".$this->text."</a>";
	}
}