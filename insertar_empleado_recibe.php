<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Empleado;

print_r($_POST);

EMPLEADO::agregar_empleado($_POST['ci'],$_POST['nombre'],$_POST['apellido'],'aa','aa','cc','ff','gg','M','01/01/2005','01/01/2008','SI','CALL CENTER','qq');

?>
