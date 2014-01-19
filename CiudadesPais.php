<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Lugar;

	$ciudad= Lugar::lugar_N_C($_POST['pais']); 	 
	//$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("ciudad", $ciudad);
    $smarty->display(Template_Dir.'CiudadesPais.tpl'); 

?>
