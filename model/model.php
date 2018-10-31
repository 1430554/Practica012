<?php
include_once("model/book.php");
include_once("model/user.php");
include_once("model/movimiento.php");

class Model 
{
	protected $user;
	protected $book;
	protected $movi;
	
	
	public function __construct()  
    {  
		$this->user = new User();
		$this->book = new Book();
		$this->movi = new Movimiento();
    } 
	
	public function register(&$errors)
	{
		return $this->user->register($errors);
	}
	
	public function login(&$errors)
	{
		return $this->user->login($errors);
	}
	
	public function forgot_password(&$errors)
	{
		return $this->user->forgot_password($errors);
	}
	
	public function logged_in()
	{
		return $this->user->logged_in();
	}

	public function logout()
	{
		return $this->user->logout();
	}
	
	public function profile(&$errors, &$profile)
	{
		return $this->user->profile($errors, $profile);
	}

	public function book_add(&$errors)
	{
		return $this->book->add($errors);
	}

	public function book_list()
	{
		return $this->book->list();
	}

	public function book_edit(&$errors, &$book)
	{
		return $this->book->edit($errors, $book);
	}

	public function book_delete(&$errors, &$book)
	{
		return $this->book->delete($errors, $book);
	}

	public function movi_add(&$errors)
	{
		return $this->movi->addMovi($errors);
	}

	public function movi_delete(&$errors)
	{
		return $this->movi->deleteMovi($errors);
	}

	public function get_precio()
	{
		return $this->movi->getPrecio();
	}

	public function movi_list()
	{
		return $this->movi->listMovi();
	}

}

?>
