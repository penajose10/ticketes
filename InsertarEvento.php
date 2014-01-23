<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Evento;

Evento::agregar_evento($_POST['ne'],$_POST['cen'],$_POST['cat'],$_POST['g'],$_POST['desc'],$_POST['compra'],$_POST['recinto'],$_POST['empleado'],$_POST['ciudad']);

//header('location: AgregarEvento.php');

?>