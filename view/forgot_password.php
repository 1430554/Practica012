<?php 
	include_once "header.php";
	$before_login=true;
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
				<h3>Forgot Password Form</h3>
				<p>Complete el siguiente campo.</p>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" >
				<font color="red"><?php echo $errors["username"]; ?></font>
				<br>
				<input type="hidden" name="page" value="forgot_password">
				<input type="hidden" name="caller" value="self">
				<br>
				<input class="btn btn-success" type="submit" value="Recuperar contraseña">
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
		<div class="continer">
			<div class="bienvenida">
				<h3>Por favor revise su correo electronico.</h3>
			</div>
		</div>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
