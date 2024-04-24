<?php
    session_start();
    include('../VISTA/CL_INTERFAZ09.php');
    include('../MODELO/CL_TABLA_RESTAURANTE.php');
    $perfil = new CL_INTERFAZ09();
    $perfil-> mostrar();

    $t_restaurante = new CL_TABLA_RESTAURANTE();

    $t_restaurante ->mostrarReservaciones();

    

?>
