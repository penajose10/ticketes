<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Temporada;

Temporada::agregar_temporada($_POST['nt']);

header('location: AgregarTemporada.php');

?>