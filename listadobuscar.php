<?php
$data = file_get_contents("data-1.json");
$inmuebles = json_decode($data, true);
$ciudad= $_GET['ciudad'];
$tipo=$_GET['tipo'];
$precio=$_GET['precio'];
$precioMin= substr($precio, 0, strpos($precio, ';'));
$precioMax=substr($precio, (strpos($precio, ';')+1), strlen($precio) );

//echo $ciudad . " " . $tipo . " " . $precioMin . " " .$precioMax;

?>

<table width="500" border="1">
<?php
foreach ($inmuebles as $inmueble) {
	$valor1= substr($inmueble[Precio], 1, strlen($inmueble[Precio]) );
	$valor1=str_replace(",", "", $valor1); 
	$valor1= floatval($valor1);
		
	
  if(($ciudad==$inmueble[Ciudad])&&($tipo==$inmueble[Tipo])&&(floatval($precioMin)<=floatval($valor1))&&(floatval($precioMax)>=floatval($valor1)))
  {
  ?>
  <tr>
    <td rowspan="6"><img src="img/home.jpg" width="263" height="177"></td>
    <td><strong>Direccion:</strong> <?php echo $inmueble[Direccion] ?></td>
  </tr>
  <tr>
    <td><strong>Ciudad:</strong> <?php echo $inmueble[Ciudad] ?></td>
  </tr>
  <tr>
    <td><strong>Telefono:</strong> <?php echo $inmueble[Telefono] ?></td>
  </tr>
  <tr>
    <td><strong>Codigo Postal:</strong> <?php echo $inmueble[Codigo_Postal] ?></td>
  </tr>
  <tr>
    <td><strong>Tipo:</strong> <?php echo $inmueble[Tipo] ?></td>
  </tr>
  <tr>
    <td><strong>Precio:</strong> <?php echo $inmueble[Precio] ?></td>
  </tr>
<?php  
  };
	//print_r($inmueble);
}
?>
</table>