<?php
$data = file_get_contents("data-1.json");
$inmuebles = json_decode($data, true);

$pila = array();


foreach ($inmuebles as $inmueble) {
    if (in_array($inmueble[Ciudad], $pila))
	{
		
		
	}
else{
	echo '<option value="'.$inmueble[Ciudad].'">'.$inmueble[Ciudad].'</option>';
	//print_r($inmueble[Ciudad]);
	array_push($pila, $inmueble[Ciudad]);
	}
	//print_r($inmueble[Ciudad]);
}

?>