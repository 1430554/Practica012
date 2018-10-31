<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
<br>
</center>
	<div class="bordeRegistro">		
		<div class="container" style="width: 70%;">
			<form method="post">
				<label for="cantidad" style="font-size: 14px" >Cantidad</label>
		        <input type="number" name="cantidad" id="cantidad" style="border-radius: 10px; " placeholder="Escribe aquí..." >
		        <font color="red"><?php echo $errors["cantidad"]; ?></font>
		        <br>
		        <label for="ref" style="font-size: 14px">Referencia</label>
		        <input type="text" name="ref" id="ref" style="border-radius: 10px;" placeholder="Escribe aquí...">
		        <font color="red"><?php echo $errors["ref"]; ?></font>
		        
				<br>
				<br>
				<input type="hidden" name="id" value="<?php echo $precio[0]["id"]; ?>">
				<input type="hidden" name="stock" value="<?php echo $precio[0]["stock"]; ?>">
				<input type="hidden" name="fecha" value="<?php echo date("y-m-d"); ?>">
				<input type="hidden" name="hora" value="<?php echo date("G:i:s"); ?>">
				<input type="hidden" name="page" value="movi_add">
				<input type="hidden" name="caller" value="self">
				<input class="btn btn-success" type="submit" value="Actualizar">
			</form>
		</div>		
	</div>




<?php
		}
		else
		{
?>
<br>
		<div class="container">
			<div class="bienvenida">
				<h3>Producto Actualizado</h3>
			</div>
		</div>
<?php
		}
	}
	else
	{
		$before_login=true;
		include_once "menu.php";
?>
<br>
		<div class="container">
			<div class="bienvenida">
				<h3>Error, vuelve a ingresar al sistema.</h3>
			</div>
		</div>
<?php
	}
	include_once "footer.php";
?>
