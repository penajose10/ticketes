<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Empleado;

	$empleado= EMPLEADO::f_empleado(); 	 
	//$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("empleados", $empleado);
    $smarty->display(Template_Dir.'ComboEliminarEmpleado.tpl'); 
    

?>
