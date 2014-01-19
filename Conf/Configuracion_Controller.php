<?php
/* Archivo para encapsular que archivo de configuracion se debe usar */
define("Configuracion", "Conf/Conf_Local.php");
//define("Configuracion", "Conf/Conf.php");

/*Configuración Smarty */
define("Smarty_Include", "view/Smarty/libs/Smarty.class.php");       
define("Smarty_Template_Dir", "view/templates/");           
define("Smarty_Template_Dir_Comp", "view/templates_c/");
define("Template_Dir", "view/templates/");
define("Smarty_Conf", "Conf/Smarty_Conf.php");

/* Configuración Static */
define("Css","static/css/");
define("Img","static/img/");
define("Js","static/js/");
define("user_directory","uploads/");
define("Jquery_Css","static/jquery/css/ui-lightness/jquery-ui.css");
define("Jquery_Js","static/jquery/js/jquery-ui.js");

/* Rutas Model */
define("User","model/User.php");
define("Util_File","model/Util_File.php");
define("Util_Email","model/Util_Email.php");


/* Uploads*/
define("uploads","uploads/");


?>
