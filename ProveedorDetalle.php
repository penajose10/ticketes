<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Proveedor;
include_once Lugar;

	$pais= Lugar::lugar_N_P(); 
	$prov= Proveedor::ProvID($_POST['prov']); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("provD", $prov);
	$smarty->assign("pais", $pais);
    $smarty->display(Template_Dir.'DetalleProveedor.tpl'); 

?>
