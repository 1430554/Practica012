<?php 
//Estilos traidos de header asi como fondo
	include_once "header.php";
	if($logged_in)
	{
		//Importacion del menu para navegacion del sistema
		$after_login=true;
		include_once "menu.php";
?>
<br>
<div class="tituloProductos">
	<div class="row" >
		<div class="col-4">
			<h3>Control de Inventario</h3>
		</div>
		<div class="col-6">
			
		</div>
		<div class="col-2">
			<!-- este boton manda a la pestaña book_add como dice en la variable "href" -->
			<a href="index.php?page=book_add"><button class="btn btn-primary">Añadir Producto</button></a>
		</div>
	</div>
</div>
<div class="bordeTabla">

<div class="tablaScroll">
<div class="contenidoTabla">
<div class="row">
<?php
	foreach($books as $book)
	{
?>
      <!-- En el siguiente div se asigna id al producto asi como la imagen de stock por default y nombre, categoria etc que se guardaran en los campos de la base de datos-->
		<div class="cuadroProducto">
			<a href="index.php?page=book_edit&id=<?php echo $book["id"]; ?>"><center><img src="view/images/stock.png" class="imgStock"></center></a>
			<div class="titProd"><?php echo $book["title"]; ?></div>
			<div class="desProd"><?php echo $book["author"]; ?></div>			
		</div>
<?php
	}
?>
</div>
</div>		

<?php
	}
	else
	{
		//El menu y el header requieren estar en todo momento del proceso para la navegacion del sistema
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
