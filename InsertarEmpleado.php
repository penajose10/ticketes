<?PHP

include_once 'Conf/Configuracion.php';
include_once 'Conf/Conf_Local.php';

include_once Zona;

ZONA::agregar($_POST['ci'],$_POST['nombre'],$_POST['apellido'],$_POST['c'],$_POST['urb'],$_POST['ed'],'M','09/09/1999','09/10/2013','NO','STAND','EST',1,1);



?>