<?php 
  header("content-Type: aplication/json");
  include_once ("../class/class-motoristas.php");
  switch ($_SERVER['REQUEST_METHOD']) {
     case 'POST': //guardar
        
        break;
     case 'GET': /* Obtener los ordenes */
        if (isset($_GET['codigoMotorista'])){
           Ordenes::obtenerordenes($_GET['codigoMotorista']);
        } else{
            Ordenes::obtenerordenes();
        }
        break;
     case 'PUT': /* actualizar */
        break;
     case 'DELETE': /*  */
        break;
  }
?>