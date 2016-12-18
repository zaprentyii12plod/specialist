<?php

class edittext {

$data = [];

public function insertElement($el)
{
	$this->data[] = $el;
}

public function printElement($i)
{
	echo $this->data[$i]->print();
}	

}

?>
