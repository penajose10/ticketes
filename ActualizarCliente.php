<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Cliente;

Cliente::actulizarCli($_POST['rif'],$_POST['nf'],$_POST['df'],$_POST['fc'],$_POST['calle'],$_POST['urb'],$_POST['ed'],$_POST['tipo'],$_POST['ptos'],$_POST['ciudad'],$_POST['correo'],$_POST['clave'],$_POST['codigo']);

header('location:ModificarCliente.php');

?>