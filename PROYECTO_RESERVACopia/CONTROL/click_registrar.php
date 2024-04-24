<?php
    include('../VISTA/CL_INTERFAZ04.php');
    include('../MODELO/CL_USUARIO.php');
    include('../MODELO/CL_TABLA_USUARIO.php');

    $interfaz04 = new CL_INTERFAZ04;
    $interfaz04 -> mostrar();

    if(isset($_POST['click_registrar'])){
        $nombre;
        $apellido;
        $telefono;
        $correo;
        $contraseña;

        $nombre = $interfaz04->get_caja_texto1();
        $apellido = $interfaz04->get_caja_texto2();
        $telefono = $interfaz04->get_caja_texto3();
        $correo = $interfaz04->get_caja_texto4();
        $contraseña = $interfaz04->get_caja_texto5();

        $t_usuario = new CL_TABLA_USUARIO();
        $t_usuario -> set_id_bd('b8lkttflpsfhyag3dtdz');
        $t_usuario -> set_usuario('uuhyee3jdnss7b18');
        $t_usuario -> set_contraseña('GNOq5xiY3MRmZ3MxtqAl');

        $usuario = new CL_USUARIO();
        $usuario -> set_nombre($nombre);
        $usuario -> set_apellido($apellido);
        $usuario -> set_telefono($telefono);
        $usuario -> set_correo($correo);
        $usuario -> set_contraseña($contraseña);

        $t_usuario ->registrar_user($usuario);
        
    }

?>