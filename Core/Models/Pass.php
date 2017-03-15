<?php namespace Core\Models;

class Pass {
	private $id;
	private $clave;
	private $sitio;
	private $fecha;
	private $img;
	private $url;
	private $usuario;
	private $db;

	public function __construct(){
		$this->db = new Conexion();
	}

	public function __set($var, $valor) {  
		if (property_exists(__CLASS__, $var)) {  
			$this->$var = $valor;  
		} else {  
			echo "No existe el atributo $var.";  
		}  
	}  

	public function __get($var) {  
		if (property_exists(__CLASS__, $var)) {  
			return $this->$var;  
		}  
		return NULL;  
	}  

	public function listar(){
		$sql="SELECT * from log order by FECHA desc";
		$datos=$this->db->consultaRetorno($sql);
		return $datos;
	}

	public function add(){
		$sql="INSERT INTO log 
		(ID,
		USUARIO,
		CLAVE,
		SITIO,
		URL,
		IMG,
		FECHA, 
		USUARIOLOG) 
		VALUES 
		(NULL, 
		'{$this->usuario}', 
		'{$this->clave}', 
		'{$this->sitio}', 
		'{$this->url}', 
		'{$this->img}', 
		'{$this->fecha}', 
		'{$this->usuario}'); ";
		$this->db->consultaSimple($sql);

	}

	public function delete(){
		$sql="DELETE FROM log WHERE ID='{$this->id}'";
		$this->db->consultaSimple($sql);

	}

	public function edit() {
		$sql="UPDATE log SET 
		USUARIO='{$this->usuario}',
		CLAVE='{$this->clave}',
		SITIO ='{$this->sitio}',	  
		URL ='{$this->url}',	  
		IMG ='{$this->img}'	  
		WHERE ID='{$this->id}';";
		$this->db->consultaSimple($sql);
	}

	public function view(){
		$sql="SELECT * FROM log WHERE ID='{$this->id}'";
		$datos = $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;

	}

} 


?>