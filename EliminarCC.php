<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once CentroComercial;

	$cc= CentroComercial::CentroComercialN(); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("ccs", $cc);
    $smarty->display(Template_Dir.'ComboEliminarCC.tpl'); 
    

?>
