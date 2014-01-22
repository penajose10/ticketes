<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Consumidor;

	$consumidor= Consumidor::ConsumidorN(); 	 
	$smarty->assign("nombre_usuario", "DAVID");
	$smarty->assign("Consumidores", $consumidor);
    $smarty->display(Template_Dir.'ComboEliminarConsumidor.tpl'); 
    

?>
