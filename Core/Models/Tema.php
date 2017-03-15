<?php namespace Core\Models;

class Tema {
	private $idTema;
	private $tema;
	private $descripcion;
	private $fecha;
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
		$sql="SELECT * from tema order by FECHA desc";
		$datos=$this->db->consultaRetorno($sql);
		return $datos;
	}

	public function add(){
		$sql="INSERT INTO tema 
		(ID_TEMA,
		TEMA,
		DESCRIPCION,
		FECHA, 
		USUARIOLOG) 
		VALUES 
		(NULL, 
		'{$this->tema}', 
		'{$this->descripcion}', 
		'{$this->fecha}', 
		'{$this->usuario}'); ";
		$this->db->consultaSimple($sql);

	}

	public function delete(){
		$sql="DELETE FROM tema WHERE ID_TEMA='{$this->idTema}'";
		$this->db->consultaSimple($sql);

	}

	public function edit() {
		$sql="UPDATE tema SET 
		TEMA='{$this->tema}',
		DESCRIPCION='{$this->descripcion}',
		FECHA ='{$this->fecha}'	  
		WHERE ID_TEMA='{$this->idTema}';";
		$this->db->consultaSimple($sql);
	}

	public function view(){
		$sql="SELECT t.*, u.* FROM tema t  INNER JOIN usuarios u ON t.USUARIOLOG=u.ID  WHERE ID_TEMA='{$this->idTema}'";
		$datos = $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row;

	}

	public function UltimaVez(){
		$sql="SELECT FECHA FROM tema  WHERE DESCRIPCION='Sex' ORDER BY FECHA DESC LIMIT 1";
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['FECHA'];
		return $datos;
	}

	public function dias(){
		$fecha= $this->UltimaVez(); 
		$sql="SELECT DATEDIFF(CURDATE(),'{$fecha}') AS dias  "; 
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['dias'];
		return $datos;
	}

	public function Primera(){
		$sql="SELECT FECHA FROM tema  WHERE DESCRIPCION='Sex' ORDER BY FECHA ASC LIMIT 1";
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['FECHA'];
		return $datos;
	}


	public function TotalSex(){
		$sql="SELECT count(*) AS TOTAL FROM tema WHERE DESCRIPCION='Sex'";		
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['TOTAL'];
		return $datos;
	}

	public function TotalOral(){
		$sql="SELECT count(*) AS TOTAL FROM tema WHERE DESCRIPCION='69'  ";		
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['TOTAL'];
		return $datos;
	}

	public function TotalOralEl(){
		$sql="SELECT count(*) AS TOTAL FROM tema WHERE DESCRIPCION='El'";		
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['TOTAL'];
		return $datos;
	}

	public function TotalOralElla(){
		$sql="SELECT count(*) AS TOTAL FROM tema WHERE DESCRIPCION='Ella'";		
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['TOTAL'];
		return $datos;
	}

	public function UltimoAndres(){
		$sql="SELECT FECHA FROM tema  WHERE DESCRIPCION='Andres' ORDER BY FECHA DESC LIMIT 1";		
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['FECHA'];
		return $datos;
	}

	public function ProximoAndres(){
		$sql="SELECT   DATE_ADD(FECHA, INTERVAL 30 DAY) AS NEXT FROM tema  WHERE DESCRIPCION='Andres' ORDER BY FECHA DESC LIMIT 1";		
		$data=  $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos = $row['NEXT'];
		return $datos;
	}


} 


?>