<?php

class CL_USUARIO{
    private $id_usuario;
    private $nombre;
    private $apellido;
    private $telefono;
    private $correo;
    private $contraseña;
    
    public function set_id_usuario($x){
        $this -> id_usuario=$x;
    }
    public function set_nombre($x){
        $this -> nombre=$x;
    }

    public function set_apellido($x){
        $this -> apellido=$x;
    }

    public function set_telefono($x){
        $this -> telefono=$x;
    }

    public function set_correo($x){
        $this -> correo=$x;
    }

    public function set_contraseña($x){
        $this -> contraseña=$x;
    }

    public function get_id_usuario(){
        return $this -> id_usuario;
    }

    public function get_nombre(){
        return $this -> nombre;
    }

    public function get_apellido(){
        return $this -> apellido;
    }

    public function get_telefono(){
        return $this -> telefono;
    }

    public function get_correo(){
        return $this -> correo;
    }

    public function get_contraseña(){
        return $this -> contraseña;
    }

    

}
?>