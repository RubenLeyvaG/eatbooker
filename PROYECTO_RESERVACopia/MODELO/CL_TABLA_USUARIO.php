<?php
    class CL_TABLA_USUARIO{
        private $id_bd;
        private $usuario;
        private $contraseña;

        public function set_id_bd($x){
            $this-> id_bd=$x;
        }

        public function set_usuario($x){
            $this -> usuario=$x;
        }

        public function set_contraseña($x){
            $this -> contraseña=$x;
        }

        public function get_id_bd(){
            return $this-> id_bd;
        }

        public function get_usuario(){
            return $this-> usuario;
        }

        public function get_contraseña(){
            return $this -> contraseña;
        }

        public function iniciar_sesion(CL_USUARIO $x){

            $host = "b8lkttflpsfhyag3dtdz-mysql.services.clever-cloud.com";
            $usuario = "uuhyee3jdnss7b18";
            $contraseña = "GNOq5xiY3MRmZ3MxtqAl";
            $base_de_datos = "b8lkttflpsfhyag3dtdz";

            $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

            $correo = $x->get_correo();
            $contraseña_user = $x->get_contraseña();

            $query = "SELECT * FROM Usuario WHERE correo='$correo' AND contrasena='$contraseña_user'";
            $result = mysqli_query($conexion, $query);

            if (mysqli_num_rows($result) == 1) 
            {
                session_start();
    
                $usuario = mysqli_fetch_assoc($result);

                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['correo'] = $usuario['correo'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['apellido'] = $usuario['apellido'];
                $_SESSION['telefono'] = $usuario['telefono'];

                header('Location: ../CONTROL/click_perfil.php');
                exit;

            } 
            
            else {
                echo'Correo o contraseña incorrectos. Vuelve a intentarlo';
            }

            mysqli_close($conexion);

        }

        public function registrar_user(CL_USUARIO $x){
            $host = "b8lkttflpsfhyag3dtdz-mysql.services.clever-cloud.com";
            $usuario = "uuhyee3jdnss7b18";
            $contraseña = "GNOq5xiY3MRmZ3MxtqAl";
            $base_de_datos = "b8lkttflpsfhyag3dtdz";

            $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

            $nombre= $x-> get_nombre();
            $apellido= $x->get_apellido();
            $telefono= $x->get_telefono();
            $correo= $x->get_correo();
            $contraseña= $x->get_contraseña();

            $query= "INSERT INTO Usuario (nombre, apellido, telefono, correo, contrasena) VALUES ('$nombre', '$apellido', '$telefono', '$correo', '$contraseña')";
            $result = mysqli_query($conexion, $query);

            if ($result) {
                echo "Registro insertado correctamente";
            } else {
                echo "Error al insertar el registro: " . mysqli_error($conexion);
            }
        
            mysqli_close($conexion);

        }

        public function cerrar_sesion(){
            session_start();
            session_destroy();
            header('Location: ../CONTROL/index.php');
                exit;

        }
            
            
        }


?>