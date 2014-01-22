<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Evento;

Evento::agregar_evento ($_POST['en'],$_POST['c'],$_POST['ca'],$_POST['g'],$_POST['d'],1,2,2);



	
 //$smarty->display(Template_Dir.'agregar_evento.tpl'); 

?>
