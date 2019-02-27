<?php
$data = file_get_contents("data-1.json");
$inmuebles = json_decode($data, true);

$pila = array();


foreach ($inmuebles as $inmueble) {
    if (in_array($inmueble[Tipo], $pila))
	{
		
		
	}
else{
	echo '<option value="'.$inmueble[Tipo].'">'.$inmueble[Tipo].'</option>';
	//print_r($inmueble[Ciudad]);
	array_push($pila, $inmueble[Tipo]);
	}
	//print_r($inmueble[Ciudad]);
}

?>