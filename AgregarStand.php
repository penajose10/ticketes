<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Stand;

	$stand= Stand::StandT(); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("pais", $stand);
    $smarty->display(Template_Dir.'AgregarStand.tpl'); 

?>
