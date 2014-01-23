<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Horario;

Horario::agregar_horario(($_POST['d']),($_POST['h']));

header('location: AgregarHorario.php');

?>