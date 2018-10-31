<?php
include_once "model/globals.php";
include_once "model/database.php";

class Movimiento 
{
	protected $database;
	protected $fecha;
	protected $hora;
	protected $description;
	protected $referencia;
	protected $id;

	public function __construct()  
    {  
		global $db_server, $db_username, $db_password, $db_name;
		$this->database = new Database($db_server, $db_username, $db_password, $db_name);
		$this->database->connect();
    } 

	public function set($fecha, $hora, $referencia)  
    {  
        $this->fecha = $fecha;
	    $this->hora = $hora;
	    $this->referencia = $referencia;
    } 

    public function addMovi(&$errors)
    {
		if(empty($_REQUEST["caller"])) $status="before_submission";
		else if($_REQUEST["caller"]=="self")
		{
			$errors=array();
			if(empty($_REQUEST["id"])) $errors["id"]="Empty";
			if(empty($_REQUEST["fecha"])) $errors["fecha"]="Empty";
			if(empty($_REQUEST["hora"])) $errors["hora"]="Empty";
			if(empty($_REQUEST["cantidad"])) $errors["cantidad"]="Empty";
			if(empty($_REQUEST["ref"])) $errors["ref"]="Empty";
			if(empty($_REQUEST["stock"])) $errors["stock"]="Empty";

			$id = $_REQUEST["id"];
			$descripcion = "El usuario ".$_SESSION["username"]." agrego la cantidad de ".$_REQUEST["cantidad"]." al stock.";
			$total = $_REQUEST["stock"] + $_REQUEST["cantidad"];
			if(empty($errors))
			{
				$this->set($_REQUEST["fecha"], $_REQUEST["hora"], $_REQUEST["ref"]); 
				$sql="insert into movimiento values (null, '{$this->fecha}', '{$this->hora}', '$descripcion', '{$this->referencia}', '$total', '$id')";
				$this->database->execute($sql); 
				$sql="update book set stock = '$total' where id='$id'";
				$this->database->execute($sql); 
				$status="success";
			}
			else $status="failure";
		}
		return $status;
	}

	public function deleteMovi(&$errors)
    {
		if(empty($_REQUEST["caller"])) $status="before_submission";
		else if($_REQUEST["caller"]=="self")
		{
			$errors=array();
			if(empty($_REQUEST["id"])) $errors["id"]="Empty";
			if(empty($_REQUEST["fecha"])) $errors["fecha"]="Empty";
			if(empty($_REQUEST["hora"])) $errors["hora"]="Empty";
			if(empty($_REQUEST["cantidad"])) $errors["cantidad"]="Empty";
			if(empty($_REQUEST["ref"])) $errors["ref"]="Empty";
			if(empty($_REQUEST["stock"])) $errors["stock"]="Empty";

			$id = $_REQUEST["id"];
			$descripcion = "El usuario ".$_SESSION["username"]." elimino la cantidad de ".$_REQUEST["cantidad"]." del stock.";
			$total = $_REQUEST["stock"] - $_REQUEST["cantidad"];
			if(empty($errors))
			{
				$this->set($_REQUEST["fecha"], $_REQUEST["hora"], $_REQUEST["ref"]); 
				$sql="insert into movimiento values (null, '{$this->fecha}', '{$this->hora}', '$descripcion', '{$this->referencia}', '$total', '$id')";
				$this->database->execute($sql); 
				$sql="update book set stock = '$total' where id='$id'";
				$this->database->execute($sql); 
				$status="success";
			}
			else $status="failure";
		}
		return $status;
	}

	public function getPrecio()
    {
		$sql="select * from book where id = '{$_REQUEST["id"]}'";
		$precio=$this->database->execute($sql); 
		return $precio;
	}

    public function listMovi()
    {
    	
		$sql="select * from movimiento where prod = '{$_REQUEST["id"]}'";
		$movis=$this->database->execute($sql); 
		return $movis;
	}
}
?>
