<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Proveedor;

	$p= Proveedor::ProvN(); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("Proveedores", $p);
    $smarty->display(Template_Dir.'ComboEliminarProveedo.tpl'); 
    

?>
