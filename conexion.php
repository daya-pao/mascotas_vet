<?php
 require_once __DIR__ . "/vendor/autoload.php";
 
 use Dotenv\Dotenv;
 
 $dotenv = Dotenv::createImmutable(__DIR__);
 $dotenv->load();

class dataconexion{
   public function conexion(){
      $mysqli = new mysqli($_ENV['SERVER'],$_ENV['USER'],$_ENV['PASS'],$_ENV['DATABASE'], $_ENV['PORT']);
      if ($mysqli->connect_errno) {
         echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
       return $mysqli;
      /* echo $mysqli->host_info . "\n"; */
   }
}

?>