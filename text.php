<?php

class text implements element
{

	private $text;

	function __construct($text)
	{
		$this->text = $text;
	}

	public function print()
	{
		echo $this->text;
	}

}	

?>
