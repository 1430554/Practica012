<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>
<br>
</center>
	<div class="bordeRegistro">		
		<div class="container dentro">
<div class="container" style="height: 350px; overflow-y: scroll;">
	<div style="width:79.9%;margin-left: 10.1%;margin-right: auto; border:solid #d2d2d2 2px;border-bottom: none; ">
		<center>Historial de Inventario</center>
	</div>
	<table class="tablaProductos" >
		<thead >						
			<tr>
				<th><center>Fecha</center></th>
				<th><center>Hora</center></th>
				<th><center>Descripcion</center></th>
				<th><center>Referencia</center></th>
				<th><center>total</center></th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($movis as $movi)
				{
			?>
			<tr>
				<td><?php echo $movi["fecha"]; ?></td>
				<td><?php echo $movi["hora"]; ?></td>
				<td><?php echo $movi["descripcion"]; ?></td>
				<td><?php echo $movi["ref"]; ?></td>
				<td><?php echo $movi["total"]; ?></td>
			</tr>
			<?php
				}
			?>
		</tbody>

	</table>

</div>
</div>
</div>
<?php
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<br>
<div class="container">
	<div class="bienvenida">
		<h3>Error, Ingrese de nuevo al sistema.</h3>
	</div>
</div>
<?php
	}
	include_once "footer.php";
?>