<?php  

session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'id933007_admin');
define('DB_PASS', '87usdf8ghsd8fh');
define('DB_NAME', 'id933007_nm');

#Constantes app
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', "http://nm.webutu.com/");
define('HTML_DIR', 'HTML/');


#Solo se define luego de iniciar sesion 
if (isset($_SESSION['app_id'])) {
	#$template=new Views\Template();
	#$template->menu();
	require_once "Core/Models/Conexion.php";
	require_once "vendor/autoload.php";
}


require_once "Core/Config/Autoload.php";
Core\Config\Autoload::run();
Core\Config\Enrutador::run(new Core\Config\Request());







?>