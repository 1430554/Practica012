<?php session_start();
	include_once "header.php";
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
				<h3>Registro de Usuarios</h3>
				<p>Llene los siguientes campos.</p>
				<label for="name">Nombre</label>
				<input type="text" name="name" id="name" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["name"]; ?></font>
				<br>
				<label for="username">Usuario</label>
				<input type="text" name="username" id="username" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["username"]; ?></font>
				<br>
				<label for="password">Contraseña</label>
				<input type="password" name="password" id="password" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["password"]; ?></font>
				<br><br>
				<input type="hidden" name="page" value="register">
				<input type="hidden" name="caller" value="self">
				<input class="btn btn-success" type="submit" value="Registrar">
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
				<h3>Usuario Registrado</h3>
			</div>
		</div>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
