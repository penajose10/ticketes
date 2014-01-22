<?PHP
include_once 'Conf/Configuracion_Controller.php';
include_once Configuracion;
include_once Smarty_Include;
include_once Smarty_Conf;
include_once Consumidor;

Consumidor::agregarCon($_POST['ci'],$_POST['nom'],$_POST['ap'],$_POST['g'],$_POST['telo'],$_POST['telc'],$_POST['telcel'],$_POST['correo'],$_POST['fn'],$_POST['nac'],$_POST['calle'],$_POST['ed'],$_POST['urb'],$_POST['ciudad'],$_POST['clave']);

//header('location: AgregarConsumidor.php');

?>