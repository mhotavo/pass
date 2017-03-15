<?php namespace Core\Controllers;
use Core\Models\Tema as Tema;


class StatisticsController{

	private $tema;
	public function __construct(){
		$this->tema = new Tema();
	}

	public function index(){


		if (empty($_SESSION['app_id'])) {
			header("Location:" . URL . "Temas");
		}else {
			$dias=$this->tema->dias();  
			$UltimaVez=$this->tema->UltimaVez(); 
			$PrimeraVez=$this->tema->Primera(); 
			$TotalSex=$this->tema->TotalSex();
			$TotalOral=$this->tema->TotalOral();
			$TotalOralEl=$this->tema->TotalOralEl();
			$TotalOralElla=$this->tema->TotalOralElla();
			$UltimoAndres=$this->tema->UltimoAndres();
			$ProximoAndres=$this->tema->ProximoAndres();

			$datos = array(
				"Dias" => $dias,
				"UltimaVez" => $UltimaVez,
				"PrimeraVez" => $PrimeraVez,
				"TotalSex" => $TotalSex,
				"Total69" => $TotalOral,
				"TotalOralEl" => $TotalOralEl,
				"TotalOralElla" => $TotalOralElla,
				"UltimoAndres" => $UltimoAndres,
				"ProximoAndres" => $ProximoAndres,
				);
			return $datos;
		}
	}
}
$Asistencia= new StatisticsController();


?>