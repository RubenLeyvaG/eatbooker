<?php
    class CL_INTERFAZ11
    {
        private $interfaz;
        
        public function mostrar()
        {
            $this->interfaz=file_get_contents('../HTML_INTERFAZ/nosotrosPerfil.html');
            echo $this->interfaz;
        }
    }
?>