<?php
session_start();
    include('../VISTA/CL_INTERFAZ12.php');
    include('../MODELO/CL_RESTAURANTE.php');
    include('../MODELO/CL_TABLA_RESTAURANTE.php');
    $resP1 = new CL_INTERFAZ12();
    $resP1 -> mostrar();

    if(isset($_POST['click_reservar'])){

        $fecha;
        $hora;
        $cantidad;

        $fecha = $resP1->get_caja_texto1();
        $hora = $resP1->get_caja_texto2();
        $cantidad = $resP1->get_caja_texto3();

        $t_restaurante = new CL_TABLA_RESTAURANTE();
        $t_restaurante -> set_id_bd('b8lkttflpsfhyag3dtdz');
        $t_restaurante -> set_usuario('uuhyee3jdnss7b18');
        $t_restaurante -> set_contraseña('GNOq5xiY3MRmZ3MxtqAl');

        $restaurante = new CL_RESTAURANTE();
        $restaurante -> set_fecha($fecha);
        $restaurante -> set_hora($hora);
        $restaurante -> set_cantidad($cantidad);

        $t_restaurante->reservarR1($restaurante);
    }


?>