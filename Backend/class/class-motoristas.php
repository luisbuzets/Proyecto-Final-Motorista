<?php
    class Motoristas{
        private $codigoMotoristas;
        private $nombreMotorista;
        private $Contrasena;
        private $correo;
        private $ordenesTomadas;
        private $ordenesEntregadas;

        public function __construct($codigoMotoristas,$nombreMotorista,$Contrasena,$correo, $ordenesTomadas, $ordenesEntregadas){
            $this->codigoMotoristas = $codigoMotoristas;
            $this->nombreMotorista = $nombreMotorista;
            $this->Contrasena = $Contrasena;
            $this->correo = $correo;
            $this->ordenesTomadas = $ordenesTomadas;
            $this->ordenesEntregadas = $ordenesEntregadas;

        }

        public function __toString(){
            return $this->codigoMotoristas." ".$this->nombreMotorista." ".$this->correo.
            " ".$this->ordenesTomadas." ".$this->ordenesEntregadas;
        }

        public static function obtenermotoristas(){
                $contenidoArchivo = file_get_contents('../data/ordenes.json');
                echo $contenidoArchivo;
        }
        public static function obtenerMotorista($codigoMotorista){
                $contenidoMotorista = file_get_contents("../data/motorista.json");
                $contenidoOrdenes = file_get_contents("../data/ordenes.json");
                $ordenes = json_decode($contenidoOrdenes, true);
                $motorista = json_decode($contenidoMotorista, true);
                //Verificarsi el id de la orden está en el archivo ordenes.json
                $arrayMotorista = [];
                foreach ($motorista as $motorista) {
                   if ($motorista["codigoMotoristas"] == $codigoMotoristas) {
                      $arrayMotorista = $motorista;
                   }
                }
                $arrayOrdenes = [];
                foreach ($ordenes as $ordenes) {
                   if (in_array($ordenes["codigoOrden"],$arrayOrdenes['ordenes'])) {
                      $arrayOrdenes [] = $ordenes;
                   }
                }
             
                echo json_encode($arrayOrdenes)

        }

        /**
         * Get the value of codigoMotoristas
         */ 
        public function getCodigoMotoristas()
        {
                return $this->codigoMotoristas;
        }

        /**
         * Set the value of codigoMotoristas
         *
         * @return  self
         */ 
        public function setCodigoMotoristas($codigoMotoristas)
        {
                $this->codigoMotoristas = $codigoMotoristas;

                return $this;
        }

        /**
         * Get the value of nombreMotorista
         */ 
        public function getNombreMotorista()
        {
                return $this->nombreMotorista;
        }

        /**
         * Set the value of nombreMotorista
         *
         * @return  self
         */ 
        public function setNombreMotorista($nombreMotorista)
        {
                $this->nombreMotorista = $nombreMotorista;

                return $this;
        }

        /**
         * Get the value of Contrasena
         */ 
        public function getContrasena()
        {
                return $this->Contrasena;
        }

        /**
         * Set the value of Contrasena
         *
         * @return  self
         */ 
        public function setContrasena($Contrasena)
        {
                $this->Contrasena = $Contrasena;

                return $this;
        }

        /**
         * Get the value of correo
         */ 
        public function getCorreo()
        {
                return $this->correo;
        }

        /**
         * Set the value of correo
         *
         * @return  self
         */ 
        public function setCorreo($correo)
        {
                $this->correo = $correo;

                return $this;
        }

        /**
         * Get the value of ordenesTomadas
         */ 
        public function getOrdenesTomadas()
        {
                return $this->ordenesTomadas;
        }

        /**
         * Set the value of ordenesTomadas
         *
         * @return  self
         */ 
        public function setOrdenesTomadas($ordenesTomadas)
        {
                $this->ordenesTomadas = $ordenesTomadas;

                return $this;
        }

        /**
         * Get the value of ordenesEntregadas
         */ 
        public function getOrdenesEntregadas()
        {
                return $this->ordenesEntregadas;
        }

        /**
         * Set the value of ordenesEntregadas
         *
         * @return  self
         */ 
        public function setOrdenesEntregadas($ordenesEntregadas)
        {
                $this->ordenesEntregadas = $ordenesEntregadas;

                return $this;
        }
    }


?>