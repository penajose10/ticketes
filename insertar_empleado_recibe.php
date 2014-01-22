<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Empleado;

//print_r($_POST);

EMPLEADO::agregar_empleado($_POST['ci'],$_POST['nombre'],$_POST['apellido'],$_POST['calle'],$_POST['urb'],$_POST['edf'],$_POST['sexo'],$_POST['fecha_nac'],$_POST['fecha_trabajo'],$_POST['jefe'],$_POST['tipo'],$_POST['nivel_est'],$_POST['pais'],$_POST['ciudad'],$_POST['nickname'],$_POST['correo'],$_POST['clave']);


header('location:agregar_empleado.php');


?>
