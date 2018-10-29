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
	<div class="container">
		<form method="post">
			<div class="cuerpo">
				<h3>Registrar un Nuevo Producto</h3>
				<p>Llene los siguientes campos</p>
				<label for="title">Producto</label>
				<input type="text" name="title" id="title" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["title"]; ?></font>
				<br>
				<label for="author">Descripcion</label>
				<input type="text" name="author" id="author" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["author"]; ?></font>
				<br>
				<label for="description">Cantidad</label>
				<input type="number" name="description" id="description" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["description"]; ?></font>
				<br>
				<input type="hidden" name="page" value="book_add">
				<input type="hidden" name="caller" value="self">
				<br>
				<input class="btn btn-success" type="submit" value="Guardar">
				<br>
			</div>
		</form>
	</div>
<?php
		}
		else
		{
?>
<br>
		<div class="container">
			<div class="bienvenida">
				<h3>Producto Guardado</h3>
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
		<h3>Error, Ingresa de nuevo al sistema</h3>
	</div>
</div>
<?php
	}
	include_once "footer.php";
?>
