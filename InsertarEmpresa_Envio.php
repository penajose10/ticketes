<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Empresa_Envio;

Empresa_Envio::agregar_empresa_envio($_POST['ne']);

header('location: AgregarEmpresa_Envio.php');

?>