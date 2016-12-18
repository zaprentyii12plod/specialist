<?php

class image implements element {
	public $image

	function __construct($image)
	{
		$this->image = $image;
	}

	function print()
	{
		echo $this->image;
	}

}


?>
