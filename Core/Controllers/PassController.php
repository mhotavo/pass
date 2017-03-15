<?php namespace Core\Controllers;
use Core\Models\Pass as Pass;


class PassController{

	private $Pass;

	public function __construct(){
		$this->Pass = new Pass();
	}

	public function index(){
		if (!empty($_SESSION['app_id'])) {
			$datos=$this->Pass->listar();
			return $datos;
		}  else {
			header("Location:" . URL . "Integrantes");
		}
	}

	public function agregar(){
		if ($_POST) {
			$this->Pass->__set("clave", $_POST['clave']);
			$this->Pass->__set("sitio", $_POST['sitio']);
			$this->Pass->__set("url", $_POST['URL']);
			$this->Pass->__set("img", $_POST['logo']);
			$this->Pass->__set("fecha", $_POST['fecha']);
			$this->Pass->__set("usuario", $_SESSION['app_id']);
			$this->Pass->add(); 

			header("Location:" . URL . "Pass");
		} 
	}

	public function editar($id){
		if (!$_POST) {
			$this->Pass->__set("id", $id);
			$datos=$this->Pass->view();
			return $datos;
		} else {
			$this->Pass->__set("id", $_POST['id']);
			$this->Pass->__set("clave", $_POST['clave']);
			$this->Pass->__set("sitio", $_POST['sitio']);
			$this->Pass->__set("url", $_POST['URL']);
			$this->Pass->__set("img", $_POST['logo']);
			$this->Pass->__set("fecha", $_POST['fecha']);
			$this->Pass->__set("usuario", $_SESSION['app_id']);
			$this->Pass->edit();   
			header("Location:" . URL . "Pass");
		}
	}
	
	public function eliminar($id){
		$this->Pass->__set("id", $id);
		$this->Pass->delete(); 
		header("Location:" . URL . "Pass");
	}					
}

$Passs= new PassController();


?>