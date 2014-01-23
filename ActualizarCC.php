<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once CentroComercial;

CentroComercial::ActulizarCC($_POST['nr'],$_POST['ciudad'],$_POST['codigo']);

header('location:ModificarCC.php');

?>