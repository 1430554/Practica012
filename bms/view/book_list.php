<?php 
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
		include_once "menu.php";
?>
<br>
<div class="bordeTabla">
	<h3>Lista de Productos</h3>
<div class="tablaScroll">

		<table id="registros" class="tabla" cellspacing="0" width="100%">
			<tr>
				<th><center>Producto</center></th>
				<th><center>Descripción</center></th>
				<th><center>Cntidad(Stock)</center></th>
				<th><center>Editar</center></th>
				<th><center>Borrar</center></th>
			</tr>
<?php
		foreach($books as $book)
		{
?>
			<tr>
				<td><?php echo $book["title"]; ?></th>
				<td><?php echo $book["author"]; ?></th>
				<td><?php echo $book["description"]; ?></th>
				<td><a href="index.php?page=book_edit&id=<?php echo $book["id"]; ?>"><center><button type="" class="btn btn-primary btnTabla" >Editar</button></center></a></th>
				<td><a href="index.php?page=book_delete&id=<?php echo $book["id"]; ?>"><center><button type="submit" class="btn btn-primary btnTabla" >Borrar</button></center></a></th>
			</tr>
<?php
		}
?>
		</table>
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
<div class="container">
	<div class="bienvenida">
		<h3>Error, Ingrese de nuevo al sistema.</h3>
	</div>
</div>
<?php
	}
	include_once "footer.php";
?>
