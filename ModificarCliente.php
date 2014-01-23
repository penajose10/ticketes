<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Cliente;

	$cli= Cliente::ClienteN(); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("Clientes", $cli);
    $smarty->display(Template_Dir.'ComboEditarCliente.tpl'); 

?>
