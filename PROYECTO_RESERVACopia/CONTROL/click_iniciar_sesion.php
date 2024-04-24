<?php
    session_start();
    include('../VISTA/CL_INTERFAZ03.php');
    include('../MODELO/CL_USUARIO.php');
    include('../MODELO/CL_TABLA_USUARIO.php');

    $interfaz03 = new CL_INTERFAZ03;
    $interfaz03 -> mostrar();

    if(isset($_POST['click_iniciar_sesion'])){
        $correo;
        $contraseña;

        $correo = $interfaz03->get_caja_texto1();
        $contraseña = $interfaz03->get_caja_texto2();

        $t_usuario = new CL_TABLA_USUARIO();
        $t_usuario -> set_id_bd('b8lkttflpsfhyag3dtdz');
        $t_usuario -> set_usuario('uuhyee3jdnss7b18');
        $t_usuario -> set_contraseña('GNOq5xiY3MRmZ3MxtqAl');

        $usuario = new CL_USUARIO();
        $usuario -> set_correo($correo);
        $usuario -> set_contraseña($contraseña);

        $t_usuario ->iniciar_sesion($usuario);

    }

?>