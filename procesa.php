<?php
define("IVA",0.16);
	$cantidad1=$_POST["cantidad1"];
	$producto1=$_POST["producto1"];
	$precio1=$_POST["precio1"];
	$cantidad2=$_POST["cantidad2"];
	$producto2=$_POST["producto2"];
	$precio2=$_POST["precio2"];
	$cantidad3=$_POST["cantidad3"];
	$producto3=$_POST["producto3"];
	$precio3=$_POST["precio3"];
	$total1=$precio1*$cantidad1;
	$total2=$precio2*$cantidad2;
	$total3=$precio3*$cantidad3;
	$subtotal=$total1+$total2+$total3;
	$iva=$subtotal*IVA;
   	$total=$subtotal+$iva;

?>
<html>
	<body>
		<table border="4">
		<tr>
			<td>Cantidad</td>
			<td>Producto</td>
			<td>Precio</td>
		</tr>
		<tr>
			<td><?php echo $cantidad1;?></td>
			<td><?php echo $producto1;?></td>
			<td><?php echo $total1; ?></td>
		</tr>
		<tr>
			<td><?php echo $cantidad2;?></td>
			<td><?php echo $producto2; ?></td>
			<td><?php echo $total2; ?></td>
		</tr>
		<tr>
			<td><?php echo $cantidad3;?></td>
			<td><?php echo $producto3; ?></td>
			<td><?php echo $total3; ?></td>
		</tr>
		<tr>
			<td></td>
			<td>subtotal</td>
			<td><?php echo $subtotal; ?></td>
		</tr>
		<tr>
			<td></td>
			<td>IVA</td>
			<td><?php echo $iva; ?></td>
		</tr>
		<tr>
			<td></td>
			<td>total</td>
			<td><?php echo $total; ?></td>
		</tr>
		</table>
	</body>
</html>