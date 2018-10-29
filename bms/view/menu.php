<nav class="navbar navbar-expand-lg navbar-light bg-light">
<?php

	if(isset($before_login))
	{
$login='';$olvidePass='';
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'login') { $login = 'active'; }
	if ($_GET['page'] == 'forgot_password') { $olvidePass = 'active' ; }
	
}
?>

<ul class="nav justify-content-center">
	<li class="nav-item"><a href="index.php"><img src="view/images/logo.png"></a></li>
	<li class="nav-item"><a class="nav-link <?php echo $login; ?>" href="index.php?page=login">Login</a></li>
	<li class="nav-item"><a class="nav-link <?php echo $olvidePass; ?>" href="index.php?page=forgot_password">Olvide la Contraseña</a></li>
</ul>
<?php
	}
	else if(isset($after_login))
	{

if (isset($_GET['page'])) {
	$perfil='';$addProd='';$productos='';$register='';
	if ($_GET['page'] == 'profile') { $perfil = 'active' ; }
	if ($_GET['page'] == 'book_add') { $addProd = 'active' ; }
	if ($_GET['page'] == 'book_list') { $productos = 'active' ; }
	if ($_GET['page'] == 'register') { $register = 'active' ; }
	
}
?>
<ul class="nav justify-content-center">
	<li class="nav-item"><a href="index.php?page=home"><img src="view/images/logo.png"></a></li>
	<li class="nav-item"><a class="nav-link <?php echo $perfil; ?>" href="index.php?page=profile">Perfil</a></li>
	<li class="nav-item"><a class="nav-link <?php echo $addProd; ?>" href="index.php?page=book_add">Añadir Producto</a></li>
	<li class="nav-item"><a class="nav-link <?php echo $productos; ?>" href="index.php?page=book_list">Productos</a></li>
	<?php 
		if ($_SESSION['username'] == "admin") {
		?>
		<li class="nav-item"><a class="nav-link <?php echo $register; ?>" href="index.php?page=register">Añadir Usuario</a></li>  
		<?php 	
		}
	?>
	
	<li class="nav-item"><a class="nav-link" href="index.php?page=logout">Salir</a></li>
</ul>
<?php
	}
?>
</nav>