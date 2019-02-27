<?php
$data = file_get_contents("data-1.json");
$inmuebles = json_decode($data, true);


?>

<table width="500" border="1">
<?php
foreach ($inmuebles as $inmueble) {
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
	//print_r($inmueble);
}
?>
</table>