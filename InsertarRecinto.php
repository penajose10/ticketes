<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Recinto;

Recinto::InsertarR($_POST['nr'],$_POST['c'],$_POST['ed'],$_POST['urb'],$_POST['ciudad']);

header('location: AgregarRecinto.php');

?>