<?php
    class CL_INTERFAZ09
    {
        private $interfaz;
        
        public function mostrar()
        {
            $this->interfaz=file_get_contents('../HTML_INTERFAZ/perfil.html');
            $this->interfaz = str_replace('{NOMBRE_USUARIO}', $_SESSION['nombre'], $this->interfaz);
            echo $this->interfaz;
        }
    }
?>