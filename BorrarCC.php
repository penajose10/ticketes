<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once CentroComercial;

CentroComercial::eliminarCC($_POST['cc']);

header('location:EliminarCC.php');

?>