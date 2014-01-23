<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Proveedor;

	$prov= Proveedor::ProvN(); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("Proveedores", $prov);
    $smarty->display(Template_Dir.'ComboEditarProveedor.tpl'); 

?>
