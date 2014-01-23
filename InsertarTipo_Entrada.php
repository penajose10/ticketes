<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Tipo_Entrada;

Tipo_Entrada::agregar_tipo_entrada($_POST['te'],$_POST['ce']);

header('location: AgregarTipo_Entrada.php');

?>