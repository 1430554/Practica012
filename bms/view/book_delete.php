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
				<h3>Eliminar producto del inventario</h3>
				<p>Seleccione la opcion que desea realizar</p>
				<label for="title">Realmente quieres eliminar el producto <?php echo $book[0]["title"]; ?>?</label>
				<br>
				<select name="choice">
					<option value="yes">Si</option>
					<option value="no" selected>No</option>
				</select>
				<br>
				<input type="hidden" name="page" value="book_delete">
				<input type="hidden" name="caller" value="self">
				<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>">
				<br>
				<input class="btn btn-danger" type="submit" value="Borrar">
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
		<h3>Producto Eliminado.</h3>
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
		<h3>Error, Ingrese de nuevo al sistema.</h3>
	</div>
</div>
<?php
	}
	include_once "footer.php";
?>
