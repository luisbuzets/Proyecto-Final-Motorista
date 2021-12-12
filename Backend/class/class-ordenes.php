<?php
    class Ordenes{
        private $codigoUsuario;
        private $codigoOrden;
        private $title;
        private $precio;
        private $imagen;
        private $cantidad;

        Public function __construct(
            $codigoUsuario,
            $codigoOrden,
            $title,
            $precio,
            $imagen,
            $cantidad
        ){
            $this->codigoUsuario = $codigoUsuario;
            $this->codigoOrden = $codigoOrden;
            $this->title = $title;
            $this->precio = $precio;
            $this->imagen = $imagen;
            $this->cantidad = $cantidad;
        }

        public function ___toString(){
            return $this->cocodigoUsuario." ".$this->codigoOrden.
            " ".$this->title." ".$this->precio." ".$this->imagen." ".$this->cantidad;
        }

        public static function obtenerordenes(){
            $contenidoArchivo = file_get_contents('../data/ordenes.json');
            echo $contenidoArchivo;
        }

        public static function obtenerordenes($codigoOrden){
                $contenidoArchivo =file_get_contents("../data/ordenes.json");
                $ordenes = json_decode($contenidoArchivo, true);
                $arrayOrdenes = array();
                foreach ($ordenes as $ordenes) {
                   if ($ordenes["codigoOrden"] == $codigoOrden) {
                      $arrayUsuario = $ordenes;
                   }
                }
                echo json_encode($arrayOrdenes)

        }

        /**funcion para guardar ordenes en ordenes tomadas o ordenes entregadas */
        public function agregarOrdenes() {
                $contenidoArchivo = file_get_contents("../data/motorista.json");
                $motorista = json_decode($contenidoArchivo, true);
                $arrayMotorista = array();
                foreach ($motorista as $motorista) {
                   if ($motorista["codigoMotoristas"] == $this->codigoMotoristas) {
                      $arrayMotorista = $motorista;
                   }
                }
                $arrayMotorista["ordenes Tomadas"][] = array(
                   "codigoUsuario" => $this->codigoUsuario,
                   "title" => $this->title,
                   "precio" => $this->precio,
                   "imagen" => $this->imagen,
                   "cantidad" => $this->cantidad,
                );
          
                foreach ($motorista as $key => $motorista) {
                   if ($motorista["codigoMotorista"] == $this->codigoMotorista) {
                      $motorista[$key] = $arrayMotorista;
                   }
                }
          
                $archivo = fopen("../data/motoristas.json", "w");
                fwrite($archivo, json_encode($motorista));
                fclose($archivo);
                echo json_encode ($arrayUsuario["ordenes Tomadas"]);
             }

        /**
         * Get the value of codigoUsuario
         */ 
        public function getCodigoUsuario()
        {
                return $this->codigoUsuario;
        }

        /**
         * Set the value of codigoUsuario
         *
         * @return  self
         */ 
        public function setCodigoUsuario($codigoUsuario)
        {
                $this->codigoUsuario = $codigoUsuario;

                return $this;
        }

        /**
         * Get the value of codigoOrden
         */ 
        public function getCodigoOrden()
        {
                return $this->codigoOrden;
        }

        /**
         * Set the value of codigoOrden
         *
         * @return  self
         */ 
        public function setCodigoOrden($codigoOrden)
        {
                $this->codigoOrden = $codigoOrden;

                return $this;
        }

        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */ 
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        /**
         * Get the value of cantidad
         */ 
        public function getCantidad()
        {
                return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */ 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }
    }
    
?>