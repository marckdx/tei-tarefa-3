<?php

class Html
{
	private $title;
	private $body;

	function __construct($title)
	{
		$this->title = $title;
		$this->body = '';
	}

	function __set($atributo, $valor)
	{

		if($atributo == 'body')
		{
			$this->$atributo .= $valor;
		}
		else
		{
			$this->$atributo = $valor;
		}
	}

	function __toString()
	{
		$html = '<html>
		<head>
			<title>'.$this->title.'</title>
		</head>
		<body>
			'.$this->body.'
		</body>
		</html>';

		return $html;
	}
}
