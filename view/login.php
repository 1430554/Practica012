<?php 
//Estilos traidos de header asi como fondo
	include_once "header.php";
	$before_login=true;
			//Importacion del menu para navegacion del sistema
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
<br>			
<!-- Inicio de sesion al sistema de inventario -->
	<div class="container">
		<form method="post">
			<div class="cuerpo">
				<h3>Inicio Sesión</h3>
				<p>Ingrese sus datos de acceso.</p>
				<label for="username">Username</label>
				<!-- Ingreso del usuario -->
				<input type="text" name="username" id="username" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["username"]; ?></font>
				<br>
				<!-- Ingreso de contraseña -->
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Escriba aquí..." required>
				<font color="red"><?php echo $errors["password"]; ?></font>
				<br><br>
				<input type="hidden" name="page" value="login">
				<input type="hidden" name="caller" value="self">
				<input class="btn btn-success" type="submit" value="Sign In">
			</div>
		</form>
	</div>
<?php

	}
	else
	{
?>
		<form method="post">
			<input type="hidden" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<input type="hidden" name="password" id="password" value="<?php echo $_REQUEST["password"]; ?>">
			<input type="hidden" name="page" value="book_list">
		</form>
		<script>
			document.forms[0].submit();
		</script>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
