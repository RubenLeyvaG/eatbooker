<?php
    class CL_INTERFAZ10
    {
        private $interfaz;
        
        public function mostrar()
        {
            $this->interfaz=file_get_contents('../HTML_INTERFAZ/indexPerfil.html');
            echo $this->interfaz;
        }
    }
?>