<?php

class edittext {

$data = [];

function insertElement($el)
{
	$this->data[] = $el;
}

function printElement($i)
{
	echo $this->data[$i]->print();
}	

}

?>
