<?php 
if (isset($_FILES['fichero']['name'])) {
  	$ruta="./images/imgProductos/";//ruta carpeta donde queremos copiar las imágenes 
	$uploadfile_temporal=$_FILES['fichero']['tmp_name']; 
	$uploadfile_nombre=$ruta.$_FILES['fichero']['name']; 

	$x = $_REQUEST["fichero"];
	echo $x;
  }  
 ?>

<html>
<head>
<title>Documento</title>
<meta http-equiv="Content-Type" content="text/html;">
</head>

<body>
<form action="prueba.php" method="post" enctype="multipart/form-data"> 
    Archivo: <input name="fichero" type="file"> 
    <input name="submit" type="submit" value="Upload!">  
</form> 
</body>
</html> 