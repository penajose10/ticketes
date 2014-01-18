<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_empleado","insert into to EMPLEADO values (EMPLEADOID.nextvalue,'%','%','%','%','%','%','%','%', to_date('DD/MM/YYYY,'%'), to_date('DD/MM/YYYY','%'),'%','%')");

abstract class sala extends Util_Database {
private $ci;
private $nombre;
private $apellido;
private $calle;
private $urb;
private $edificio;
private $sexo;
private $fechanac;
private $fechatra;
private $jefe;
private $tipo;
private $estudio;

public static function agregaremp ($ci,$nombre,$apellido,$calle,$urb,$edificio,$sexo,$fechanac,$fechatra,$jefe,$tipo,$estudio) {
	$valores = array ();
	$valores[0]=$ci;
	$valores[1]=$nombre;
	$valores[2]=$apellido;
	$valores[3]=$calle;
	$valores[4]=$urb;
	$valores[5]=$edificio;
	$valores[6]=$sexo;
	$valores[7]=$fechanac;
	$valores[8]=$fechatra;
	$valores[9]=$jefe;
	$valores[10]=$tipo;
	$valores[11]=$estudio;
	
$query=Util_String::concatenate(agregar_empleado,$valores);
echo $query ;
sala::execute_query($query);
}
}
sala::agregaremp(23,'jose','pena','tres','raiza','dos','m','31/08/2014','12/07/2014','si','des','bachi');

?>