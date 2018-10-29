<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>

	<br>
	<div class="continer">
		<div class="bienvenida">
			<h3>Bienvenido a la pagina de inicio.</h3>
			<p>Seleccione alguna opcion del menú parac omenzar a trabajar</p>
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
	<div class="continer">
		<div class="bienvenida">
			<h3>Ocurrio algun error.</h3>
			<p>Favor de intentaro nuevamente.</p>
		</div>
	</div>
<?php
	}
	include_once "footer.php";
?>
