<?php
    class CL_RESTAURANTE{
        private $fecha;
        private $hora;
        private $cantidad;

        public function set_fecha($x){
            $this-> fecha=$x;
        }

        public function set_hora($x){
            $this-> hora=$x;
        }

        public function set_cantidad($x){
            $this-> cantidad=$x;
        }

        public function get_fecha(){
            return $this-> fecha;
        }

        public function get_hora(){
            return $this -> hora;
        }

        public function get_cantidad(){
            return $this -> cantidad;
        }
    }

?>