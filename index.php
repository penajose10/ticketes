<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;




session_start();
if (isset ($_SESSION['username'])){
	if (!isset($_SESSION['success_message'])){
    	$smarty->assign("success_message", "Bienvenido al sistema ".$_SESSION['username']);
    }
    else{
    	 $smarty->assign("success_message", $_SESSION['success_message'] );
    }
	
    $smarty->display(Template_Dir.'index.tpl');   
}
else{
<<<<<<< HEAD
	$smarty -> assign ('nombre_usuario','jose');
  $smarty->display(Template_Dir.'index.tpl'); 
=======

	$smarty->assign("nombre_usuario", "DAVID");

   $smarty->display(Template_Dir.'index.tpl'); 
>>>>>>> 27c47f9b2b2474b313a299e0589dbbfbf78c368f
}




?>
