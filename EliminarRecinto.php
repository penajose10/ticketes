<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Recinto;

	$recinto= Recinto::RecintoN(); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("Recintos", $recinto);
    $smarty->display(Template_Dir.'ComboEliminarRecinto.tpl'); 
    

?>
