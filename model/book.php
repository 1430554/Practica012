<?php
include_once "model/globals.php";
include_once "model/database.php";

class Book 
{
	protected $database;
	protected $title;
	protected $author;
	protected $description;
	protected $precio;
	protected $stock;
	
	public function __construct()  
    {  
		global $db_server, $db_username, $db_password, $db_name;
		$this->database = new Database($db_server, $db_username, $db_password, $db_name);
		$this->database->connect();
    } 

	public function set($title, $author, $description, $precio, $stock)  
    {  
        $this->title = $title;
	    $this->author = $author;
	    $this->description = $description;
	    $this->precio = $precio;
	    $this->stock = $stock;
    } 

    public function add(&$errors)
    {
		if(empty($_REQUEST["caller"])) $status="before_submission";
		else if($_REQUEST["caller"]=="self")
		{
			$errors=array();
			if(empty($_REQUEST["title"])) $errors["title"]="Empty";
			if(empty($_REQUEST["author"])) $errors["author"]="Empty";
			if(empty($_REQUEST["description"])) $errors["description"]="Empty";
			if(empty($_REQUEST["precio"])) $errors["precio"]="Empty";
			if(empty($_REQUEST["stock"])) $errors["stock"]="Empty";
			if(empty($errors))
			{
				$ruta="view/images/imgProductos/";//ruta carpeta donde queremos copiar las imágenes 
				$uploadfile_temporal=$_REQUEST['imagen']; 
				$uploadfile_nombre=$ruta.$_REQUEST['imagen']; 

				if (is_uploaded_file($uploadfile_temporal)) 
				{ 
				    move_uploaded_file($uploadfile_temporal,$uploadfile_nombre); 
				} 
				else 
				{ 
					$status="failure";
				}
				$this->set($_REQUEST["title"], $_REQUEST["author"], $_REQUEST["description"], $_REQUEST["precio"], $_REQUEST["stock"]); 
				$sql="insert into book values (null, '{$this->title}', '{$this->author}', '{$this->description}', '{$this->precio}', '{$this->stock}')";
				$this->database->execute($sql); 
				$status="success";
			}
			else $status="failure";
		}
		return $status;
	}

    public function list()
    {
		$sql="select * from book order by title";
		$books=$this->database->execute($sql); 
		return $books;
	}

    public function edit(&$errors, &$book)
    {
		if(empty($_REQUEST["caller"])) $status="before_submission";
		else if($_REQUEST["caller"]=="self")
		{
			$errors=array();
			if(empty($_REQUEST["title"])) $errors["title"]="Empty";
			if(empty($_REQUEST["author"])) $errors["author"]="Empty";
			if(empty($_REQUEST["description"])) $errors["description"]="Empty";
			if(empty($_REQUEST["precio"])) $errors["precio"]="Empty";
			if(empty($errors))
			{
				$sql="update book set title='{$_REQUEST["title"]}', author='{$_REQUEST["author"]}', description='{$_REQUEST["description"]}', precio='{$_REQUEST["precio"]}' where id='{$_REQUEST["id"]}'";
				$this->database->execute($sql); 
				$status="success";
			}
			else $status="failure";
		}
		$sql="select * from book where id='{$_REQUEST["id"]}'";
		$book=$this->database->execute($sql);
		
		return $status;
	}

    public function delete(&$errors, &$book)
    {
		if(empty($_REQUEST["caller"])) $status="before_submission";
		else if($_REQUEST["caller"]=="self")
		{
			if($_REQUEST["choice"]=="yes")
			{
				$sql="delete from book where id='{$_REQUEST["id"]}'";
				$this->database->execute($sql); 
				$status="success";
			}
			else $status="failure";
		}
		$sql="select * from book where id='{$_REQUEST["id"]}'";
		$book=$this->database->execute($sql);
		
		return $status;
	}


}
?>
