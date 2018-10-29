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
				<h3>Perfil de Usuario</h3>
				<p>Si desea cambiar sus datos, llene los siguientes campos</p>
				<label for="name">Nombre</label>
				<input type="text" name="name" id="name" value="<?php echo $profile[0]["name"]; ?>" >
				<font color="red"><?php echo $errors["name"]; ?></font>
				<br>
				<label for="username">Usuario</label>
				<input type="text" name="username" id="username" value="<?php echo $profile[0]["username"]; ?>" readonly="true" >
				<font color="red"><?php echo $errors["username"]; ?></font>
				<br>
				<label for="password">Contraseña</label>
				<input type="password" name="password" id="password" placeholder="Escriba aquí...">
				<font color="red"><?php echo $errors["password"]; ?></font>
				<br>
				[LLenar solo si desea cambiar su contraseña]
				<br><br>
				<input type="hidden" name="page" value="profile">
				<input type="hidden" name="caller" value="self">
				<input class="btn btn-success" type="submit" value="Actualizar">
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
				<h3>Perfil Actualizado</h3>
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
				<h3>Error, ingrese de nuevo al sistema</h3>
			</div>
		</div>
<?php
	}
	include_once "footer.php";
?>
