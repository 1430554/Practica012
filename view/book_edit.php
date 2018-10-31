<?php 
//Estilos traidos de header asi como fondo
	include_once "header.php";
	if($logged_in)
	{
		$after_login=true;
				//Importacion del menu para navegacion del sistema

		include_once "menu.php";
?>

<?php
		if($status=="before_submission" or $status=="failure")
		{
?>
<br>
</center>
	<div class="bordeRegistro">		
		<div class="container dentro">
			<div class="row">
				<div class="col-6">
					<center>

						<!-- Imagen mostrada para representacion de stock de producto-->

					<img src="view/images/stock.png" class="imagenStock">
					<br>	

					<div class="container">
						<div class="row" >
							<div style="margin-left: 190px; margin-right: 20px;">							
								<!-- Bboton eliminar que redirecciona al archivo book_delete tomandoel id del producto para confirmar la eliminacion -->

								<a href="index.php?page=book_delete&id=<?php echo $book[0]["id"]; ?>"><input type="submit" class="btn btn-danger" value="Eliminar" style="width: 100px;"></input></a>
							</div>
							<div >
								<!-- Boton que habilita la ventana de edicion  -->
								<a href data-toggle="modal" data-target="#editarProd"><input type="submit" class="btn btn-info" value="Editar" style="width: 100px;"></input></a>
							</div>
						</div>
					</div>
					</center>
				</div>
				<div class="col-6">
					<br>
					<div style="font-size: 25px; margin-bottom: -10px; margin-top: -30px;"><b><?php echo $book[0]["title"]; ?></b></div>
					<div style="font-size: 18px; margin-bottom: 10px;"><?php echo $book[0]["author"]; ?></div>
					<div style="margin-bottom: -10px;"><b>Stock disponible</b></div>
					<div style="font-size: 35px; "><?php echo $book[0]["stock"]; ?></div>
					<div style="margin-bottom: -10px;"><b>Precio Venta</b></div>
					<div style="font-size: 25px; ">$<?php echo $book[0]["precio"]; ?></div>
					<br>
					<div class="row" >
						<div style="margin:-2px; margin-right: 20px;">	
							<a href="index.php?page=movi_add&id=<?php echo $book[0]["id"]; ?>"><img src="view/images/stock-in.png" style="width: 100px;"></a>
						</div>
						<div style="margin:-2px; margin-right: 20px;">
							<a href="index.php?page=movi_delete&id=<?php echo $book[0]["id"]; ?>"><img src="view/images/stock-out.png" style="width: 100px;"></a>
						</div>
						<div >
							<a href="index.php?page=movi_list&id=<?php echo $book[0]["id"]; ?>" ><img src="view/images/registro.jpg" style="width: 120px;height: 103px; border: solid #2C9911 2px; border-radius: 10px; margin-top: -3px;"></a><br>
						</div>

					</div>							
				</div>				
			</div>
			<br>
			<br>


<!-- Modal editar 
 Aqui se muestra la ventana que aparece al presionar el boton editar y los campos a actualizar
 asi mismo en cada campo se asigna el campo de la base de datos a actualizar, almacenado en la variable name.
-->
<div class="modal fade" id="editarProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Editar Producto</h4>        
      </div>
      <form method="post">
      <div class="modal-body">
        <label for="title" style="font-size: 14px" >Código</label>
        <!-- Variable de edicion del campo codigo -->
        <input type="text" name="title" id="title" style="border-radius: 10px; " value="<?php echo $book[0]["title"]; ?>">
        <br>
        <label for="author" style="font-size: 14px">Nombre</label>
         <!-- Variable de edicion del campo nombre -->
        <input type="text" name="author" id="author" style="border-radius: 10px;" value="<?php echo $book[0]["author"]; ?>">
        <br>
        <label for="description" style="font-size: 14px">Categoria</label>
         <!-- Variable de edicion del campo categoria -->
        <input type="text" name="description" id="description" style="border-radius: 10px;" value="<?php echo $book[0]["description"]; ?>">
        <br>
        <label for="precio" style="font-size: 14px">Precio</label>
         <!-- Variable de edicion del campo precio -->
        <input type="text" name="precio" id="precio" style="border-radius: 10px;" value="<?php echo $book[0]["precio"]; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		<input type="hidden" name="page" value="book_edit">
		<input type="hidden" name="caller" value="self">
		<input class="btn btn-success" type="submit" value="Actualizar">
      </div>
      </form>
    </div>
  </div>
</div>



<script type="text/javascript">
	
</script>



	<!-- <div class="bordeTabla">
		<form method="post">
			<div class="container">
				<h3>Modificar Productos</h3>
				<p>Llene los siguientes campos.</p>
				<label for="title">Producto</label>
				<input type="text" name="title" id="title" value="<?php //echo $book[0]["title"]; ?>">
				<font color="red"><?php //echo $errors["title"]; ?></font>
				<br>
				<label for="author">Descripción</label>
				<input type="text" name="author" id="author" value="<?php //echo $book[0]["author"]; ?>">
				<font color="red"><?php //echo $errors["author"]; ?></font>
				<br>
				<label for="description">Cantidad</label>
				<input type="description" name="description" id="description" value="<?php// echo $book[0]["description"]; ?>">
				<font color="red"><?php// echo $errors["description"]; ?></font>
				<br>
				<input type="hidden" name="page" value="book_edit">
				<input type="hidden" name="caller" value="self">
				<input type="hidden" name="id" value="<?php //echo $book[0]["id"]; ?>">
				<br>
				<input class="btn btn-success" type="submit" value="Actualizar">
			</div>
		</form>
	</div> -->
<?php
		}
		else
		{
?>
<br>
		<div class="container">
			<div class="bienvenida">
				 <!-- Mensaje de confirmacion de actualizacion de producto -->
				<h3>Producto Actualizado</h3>
			</div>
		</div>
<?php
		}
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
				<h3>Error, vuelve a ingresar al sistema.</h3>
			</div>
		</div>
<?php
	}
	include_once "footer.php";
?>
