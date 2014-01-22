<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Empleado;
include_once Lugar;


	$pais= Lugar::lugar_N_P(); 
	$empleado= EMPLEADO:: empleadoID($_POST['empleado']); 
	//print_r($empleado);
	//print_r($pais);	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("empleadoD", $empleado);
	$smarty->assign("pais", $pais);
   	$smarty->display(Template_Dir.'DetalleEmpleado.tpl'); 

?>
