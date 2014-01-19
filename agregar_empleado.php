<?php

include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;





  $smarty->assign("nombre_usuario", "ALEJANDRO" ); 
  $smarty->display(Template_Dir.'agregar_empleado.tpl'); 





?>
