<?php
    class CL_TABLA_RESTAURANTE{
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

        public function reservarR1(CL_RESTAURANTE $x){
            $host = "b8lkttflpsfhyag3dtdz-mysql.services.clever-cloud.com";
            $usuario = "uuhyee3jdnss7b18";
            $contraseña = "GNOq5xiY3MRmZ3MxtqAl";
            $base_de_datos = "b8lkttflpsfhyag3dtdz";
            $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

            var_dump($_SESSION);
        
            if (!isset($_SESSION['id_usuario'])) {
                echo "Error: Sesión de usuario no encontrada";
                return;
            }
            $id_usuario = $_SESSION['id_usuario'];
            $nombre_usuario = $_SESSION['nombre'];


            $query = "SELECT telefono FROM Usuario WHERE id_usuario='$id_usuario'";
            $result = mysqli_query($conexion, $query);
            $row = mysqli_fetch_assoc($result);
            $telefono_usuario = $row['telefono'];

            $query1 = "SELECT nombre FROM Restaurante WHERE id_restaurante = '1'";

            $result = mysqli_query($conexion, $query1);
            $row = mysqli_fetch_assoc($result);
            $nombre_restaurante = $row['nombre'];
            
        
            $fecha = $x->get_fecha();
            $hora = $x->get_hora();
            $cantidad = $x->get_cantidad();
            echo 'la consulta es'. $cantidad;
        
            
            $mensaje_whatsapp = "Hola $nombre_usuario. Tu reserva ha sido confirmada en el restaurante $nombre_restaurante. Fecha: $fecha, Hora: $hora, Cantidad de personas: $cantidad. Gracias por elegirnos.";
        
            
            require_once 'C:\xampp\htdocs\PROYECTO_RESERVA\vendor\autoload.php';

            $sid    = "AC83e3e634d01fb3fc4faab785a399f2bb";
            $token  = "be835c3cf034df7a2e2e337e948ac9b0";
            $twilio = new \Twilio\Rest\Client($sid, $token);

            $message = $twilio->messages
                ->create("whatsapp:+521$telefono_usuario", // to
                #->create("whatsapp:+5217121875297", // to
                    array(
                        "from" => "whatsapp:+14155238886",
                        "body" => $mensaje_whatsapp
                    )
                );
        
            print($message->sid);
        
            $query = "INSERT INTO Reserva (id_usuario, id_restaurante, fecha, hora, cantidad_personas) VALUES ('$id_usuario', '1', '$fecha', '$hora', '$cantidad')";
            $result = mysqli_query($conexion, $query);
            
            if ($result) {
                echo "Reservación insertada correctamente";
            } else {
                echo "Error al insertar la reservación: " . mysqli_error($conexion);
            }
        
            mysqli_close($conexion);
        }
        public function reservarR2(CL_RESTAURANTE $x){
            $host = "b8lkttflpsfhyag3dtdz-mysql.services.clever-cloud.com";
            $usuario = "uuhyee3jdnss7b18";
            $contraseña = "GNOq5xiY3MRmZ3MxtqAl";
            $base_de_datos = "b8lkttflpsfhyag3dtdz";
            $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

            var_dump($_SESSION);
        
            if (!isset($_SESSION['id_usuario'])) {
                echo "Error: Sesión de usuario no encontrada";
                return;
            }
            $id_usuario = $_SESSION['id_usuario'];
            $nombre_usuario = $_SESSION['nombre'];


            $query = "SELECT telefono FROM Usuario WHERE id_usuario='$id_usuario'";
            $result = mysqli_query($conexion, $query);
            $row = mysqli_fetch_assoc($result);
            $telefono_usuario = $row['telefono'];

            $query1 = "SELECT nombre FROM Restaurante WHERE id_restaurante = '2'";

            $result = mysqli_query($conexion, $query1);
            $row = mysqli_fetch_assoc($result);
            $nombre_restaurante = $row['nombre'];
            
        
            $fecha = $x->get_fecha();
            $hora = $x->get_hora();
            $cantidad = $x->get_cantidad();
            echo 'la consulta es'. $cantidad;
        
            
            $mensaje_whatsapp = "Hola $nombre_usuario. Tu reserva ha sido confirmada en el restaurante $nombre_restaurante. Fecha: $fecha, Hora: $hora, Cantidad de personas: $cantidad. Gracias por elegirnos.";
        
            
            require_once 'C:\xampp\htdocs\PROYECTO_RESERVA\vendor\autoload.php';

            $sid    = "AC83e3e634d01fb3fc4faab785a399f2bb";
            $token  = "be835c3cf034df7a2e2e337e948ac9b0";
            $twilio = new \Twilio\Rest\Client($sid, $token);

            $message = $twilio->messages
                ->create("whatsapp:+521$telefono_usuario", // to
                #->create("whatsapp:+5217121875297", // to
                    array(
                        "from" => "whatsapp:+14155238886",
                        "body" => $mensaje_whatsapp
                    )
                );
        
            print($message->sid);
        
            $query = "INSERT INTO Reserva (id_usuario, id_restaurante, fecha, hora, cantidad_personas) VALUES ('$id_usuario', '2', '$fecha', '$hora', '$cantidad')";
            $result = mysqli_query($conexion, $query);
            
            if ($result) {
                echo "Reservación insertada correctamente";
            } else {
                echo "Error al insertar la reservación: " . mysqli_error($conexion);
            }
        
            mysqli_close($conexion);
        }

        public function reservarR3(CL_RESTAURANTE $x){
            $host = "b8lkttflpsfhyag3dtdz-mysql.services.clever-cloud.com";
            $usuario = "uuhyee3jdnss7b18";
            $contraseña = "GNOq5xiY3MRmZ3MxtqAl";
            $base_de_datos = "b8lkttflpsfhyag3dtdz";
            $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

            var_dump($_SESSION);
        
            if (!isset($_SESSION['id_usuario'])) {
                echo "Error: Sesión de usuario no encontrada";
                return;
            }
            $id_usuario = $_SESSION['id_usuario'];
            $nombre_usuario = $_SESSION['nombre'];


            $query = "SELECT telefono FROM Usuario WHERE id_usuario='$id_usuario'";
            $result = mysqli_query($conexion, $query);
            $row = mysqli_fetch_assoc($result);
            $telefono_usuario = $row['telefono'];

            $query1 = "SELECT nombre FROM Restaurante WHERE id_restaurante = '3'";

            $result = mysqli_query($conexion, $query1);
            $row = mysqli_fetch_assoc($result);
            $nombre_restaurante = $row['nombre'];
            
        
            $fecha = $x->get_fecha();
            $hora = $x->get_hora();
            $cantidad = $x->get_cantidad();
            echo 'la consulta es'. $cantidad;
        
            
            $mensaje_whatsapp = "Hola $nombre_usuario. Tu reserva ha sido confirmada en el restaurante $nombre_restaurante. Fecha: $fecha, Hora: $hora, Cantidad de personas: $cantidad. Gracias por elegirnos.";
        
            
            require_once 'C:\xampp\htdocs\PROYECTO_RESERVA\vendor\autoload.php';

            $sid    = "AC83e3e634d01fb3fc4faab785a399f2bb";
            $token  = "be835c3cf034df7a2e2e337e948ac9b0";
            $twilio = new \Twilio\Rest\Client($sid, $token);

            $message = $twilio->messages
                ->create("whatsapp:+521$telefono_usuario", // to
                #->create("whatsapp:+5217121875297", // to
                    array(
                        "from" => "whatsapp:+14155238886",
                        "body" => $mensaje_whatsapp
                    )
                );
        
            print($message->sid);
        
            $query = "INSERT INTO Reserva (id_usuario, id_restaurante, fecha, hora, cantidad_personas) VALUES ('$id_usuario', '3', '$fecha', '$hora', '$cantidad')";
            $result = mysqli_query($conexion, $query);
            
            if ($result) {
                echo "Reservación insertada correctamente";
            } else {
                echo "Error al insertar la reservación: " . mysqli_error($conexion);
            }
        
            mysqli_close($conexion);
        }


        public function reservarR4(CL_RESTAURANTE $x){
            $host = "b8lkttflpsfhyag3dtdz-mysql.services.clever-cloud.com";
            $usuario = "uuhyee3jdnss7b18";
            $contraseña = "GNOq5xiY3MRmZ3MxtqAl";
            $base_de_datos = "b8lkttflpsfhyag3dtdz";
            $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

            var_dump($_SESSION);
        
            if (!isset($_SESSION['id_usuario'])) {
                echo "Error: Sesión de usuario no encontrada";
                return;
            }
            $id_usuario = $_SESSION['id_usuario'];
            $nombre_usuario = $_SESSION['nombre'];


            $query = "SELECT telefono FROM Usuario WHERE id_usuario='$id_usuario'";
            $result = mysqli_query($conexion, $query);
            $row = mysqli_fetch_assoc($result);
            $telefono_usuario = $row['telefono'];

            $query1 = "SELECT nombre FROM Restaurante WHERE id_restaurante = '4'";

            $result = mysqli_query($conexion, $query1);
            $row = mysqli_fetch_assoc($result);
            $nombre_restaurante = $row['nombre'];
            
        
            $fecha = $x->get_fecha();
            $hora = $x->get_hora();
            $cantidad = $x->get_cantidad();
            echo 'la consulta es'. $cantidad;
        
            
            $mensaje_whatsapp = "Hola $nombre_usuario. Tu reserva ha sido confirmada en el restaurante $nombre_restaurante. Fecha: $fecha, Hora: $hora, Cantidad de personas: $cantidad. Gracias por elegirnos.";
        
            
            require_once 'C:\xampp\htdocs\PROYECTO_RESERVA\vendor\autoload.php';

            $sid    = "AC83e3e634d01fb3fc4faab785a399f2bb";
            $token  = "be835c3cf034df7a2e2e337e948ac9b0";
            $twilio = new \Twilio\Rest\Client($sid, $token);

            $message = $twilio->messages
                ->create("whatsapp:+521$telefono_usuario", // to
                #->create("whatsapp:+5217121875297", // to
                    array(
                        "from" => "whatsapp:+14155238886",
                        "body" => $mensaje_whatsapp
                    )
                );
        
            print($message->sid);
        
            $query = "INSERT INTO Reserva (id_usuario, id_restaurante, fecha, hora, cantidad_personas) VALUES ('$id_usuario', '4', '$fecha', '$hora', '$cantidad')";
            $result = mysqli_query($conexion, $query);
            
            if ($result) {
                echo "Reservación insertada correctamente";
            } else {
                echo "Error al insertar la reservación: " . mysqli_error($conexion);
            }
        
            mysqli_close($conexion);
        }


        public function mostrarReservaciones() {
            $host = "b8lkttflpsfhyag3dtdz-mysql.services.clever-cloud.com";
            $usuario = "uuhyee3jdnss7b18";
            $contraseña = "GNOq5xiY3MRmZ3MxtqAl";
            $base_de_datos = "b8lkttflpsfhyag3dtdz";
            $conexion = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);
        
            if (!isset($_SESSION['id_usuario'])) {
                echo "Error: Sesión de usuario no encontrada";
                return;
            }
            $id_usuario = $_SESSION['id_usuario'];
        
            #$query = "SELECT * FROM Reserva WHERE id_usuario = '$id_usuario'";

            $query = "SELECT r.id_reserva, r.fecha, r.hora, r.cantidad_personas, rs.nombre AS nombre_restaurante 
            FROM Reserva r 
            INNER JOIN Restaurante rs ON r.id_restaurante = rs.id_restaurante 
            WHERE id_usuario = '$id_usuario'";


            $result = mysqli_query($conexion, $query);
        
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $fecha_hora_reserva = strtotime($row['fecha'] . ' ' . $row['hora']);
                    
                    #$fecha_hora_reserva += 5 * 60;

                    $fecha_hora_reserva += 8 * 60 * 60;
                    
                    $fecha_hora_actual = time();
                    
                    #$diferencia_minutos = round(($fecha_hora_actual - $fecha_hora_reserva) / 60);

                    $diferencia_segundos = $fecha_hora_actual - $fecha_hora_reserva;
                    
                    if ($diferencia_segundos > 0) {
                        
                        $id_reserva = $row['id_reserva'];
                        $delete_query = "DELETE FROM Reserva WHERE id_reserva = '$id_reserva'";
                        $delete_result = mysqli_query($conexion, $delete_query);
                        if (!$delete_result) {
                            echo "<main class='contenedor_principal'>";
                            echo "<div class='reserva'>";
                            echo "<h4>". "Error al eliminar la reserva: " . mysqli_error($conexion) . "</h4>";
                            echo "</div>";
                            echo "</main>";
                            continue;
                        }
                        echo "<main class='contenedor_principal'>";
                        echo "<div class='reserva'>";
                        echo "<h4>". "La reserva con ID $id_reserva ha sido eliminada porque ha pasado excedido el tiempo de tu reserva". "<h4>";
                        echo "</div>";
                        echo "</main>";
                        continue;
                    }

                    
                    echo "<main class='contenedor_principal'>";
                    echo "<div class='reserva'>";
                    #echo "<p>" ."ID de reserva: " . $row['id_reserva'] . "</p>";
                    echo "<p>" . "Restaurante: " . $row['nombre_restaurante'] . "</p>";
                    echo "<p>" ."Fecha: " . $row['fecha'] . "</p>";
                    echo "<p>" ."Hora: " . $row['hora'] . "</p>";
                    echo "<p>" ."Cantidad de personas: " . $row['cantidad_personas'] . "</p>";
                    echo "</div>";
                    echo "</main>";
                    echo "<br>";
                }
            } else {
                echo "Error al consultar las reservaciones: " . mysqli_error($conexion);
            }
        
            mysqli_close($conexion);
        }


        public function recordatorio(CL_USUARIO $usuario, $fechaReserva, $horaReserva){
            $to = $usuario->get_correo();
            $subject = "Recordatorio de reserva en nuestro restaurante";
            $message = "Hola " . $usuario->get_nombre() . ",\n\nEste es un recordatorio de tu reserva en nuestro restaurante para el día $fechaReserva a las $horaReserva. ¡Esperamos verte pronto!";
            $headers = "From: tu_direccion_de_correo@ejemplo.com" . "\r\n" .
                        "Reply-To: tu_direccion_de_correo@ejemplo.com" . "\r\n" .
                        "X-Mailer: PHP/" . phpversion();
        
            if(mail($to, $subject, $message, $headers)){
                echo "Correo de recordatorio enviado correctamente a " . $usuario->get_correo();
            } else {
                echo "Error al enviar el correo de recordatorio a " . $usuario->get_correo();
            }
        }

        
    }

?>