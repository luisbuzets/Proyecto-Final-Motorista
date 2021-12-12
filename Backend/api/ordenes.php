<?php 
  header("content-Type: aplication/json");
  include_once ("../class/class-ordenes.php");
  switch ($_SERVER['REQUEST_METHOD']) {
     case 'POST': //guardar
         $datos = json_decode(file_get_contents("php://input"), true);
         $ordenes = new Ordenes($datos['codigoUsuario'], $datos['codigoOrden'], $datos['title'], $datos['precio'], $datos['imagen'], $datos['cantidad']);
         $ordenes->agregarOrdenes();
        
        break;
     case 'GET': /* Obtener los ordenes */
        if (isset($_GET['codigoOrden'])){
           Ordenes::obtenerordenes($_GET['codigoOrden']);
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