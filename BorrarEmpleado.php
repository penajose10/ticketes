<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Empleado;

EMPLEADO::eliminar_empleado($_POST['empleado']);

header('location:Eliminar_Empleado.php');

?>