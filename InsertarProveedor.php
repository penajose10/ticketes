<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Proveedor;

Proveedor::insertar_prov($_POST['rif'],$_POST['np'],$_POST['c'],$_POST['ed'],$_POST['urb'],$_POST['contacto'],$_POST['tel'],$_POST['ciudad']);

header('location: AgregarProveedor.php');

?>