<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Lugar;

	$pais= Lugar::lugar_N_P(); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("pais", $pais);
    $smarty->display(Template_Dir.'AgregarEvento.tpl'); 

?>
