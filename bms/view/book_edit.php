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
	<div class="continer">
		<form method="post">
			<div class="cuerpo">
				<h3>Modificar Productos</h3>
				<p>Llene los siguientes campos.</p>
				<label for="title">Producto</label>
				<input type="text" name="title" id="title" value="<?php echo $book[0]["title"]; ?>">
				<font color="red"><?php echo $errors["title"]; ?></font>
				<br>
				<label for="author">Descripción</label>
				<input type="text" name="author" id="author" value="<?php echo $book[0]["author"]; ?>">
				<font color="red"><?php echo $errors["author"]; ?></font>
				<br>
				<label for="description">Cantidad</label>
				<input type="description" name="description" id="description" value="<?php echo $book[0]["description"]; ?>">
				<font color="red"><?php echo $errors["description"]; ?></font>
				<br>
				<input type="hidden" name="page" value="book_edit">
				<input type="hidden" name="caller" value="self">
				<input type="hidden" name="id" value="<?php echo $book[0]["id"]; ?>">
				<br>
				<input class="btn btn-success" type="submit" value="Actualizar">
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
