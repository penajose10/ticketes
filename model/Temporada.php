<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_temporada","insert into TEMPORADA values (temp_codigo.nextval,'%')");
define ("eliminar_temporada","delete from TEMPORADA where temp_codigo=%");
define ("modificar_temporada","update TEMPORADA set temp_nombre='%' where temp_codigo=%");



abstract class Temporada extends Util_Database {
	private $temp_codigo;
	private $temp_nombre;
	
public static function agregar_temporada ($temp_nombre) {
	
	$valores= array ();
	$valores[0]=$temp_nombre;
	
$query=Util_String::concatenate(agregar_temporada,$valores);
echo $query;
Temporada::execute_query($query);
}

public static function elimiar_temporada ($temp_codigo) {
	
	$valores= array ();
	$valores[0]=$temp_codigo;


$query=Util_String::concatenate(eliminar_temporada,$valores);
echo $query;
Temporada::execute_query($query);
}

public static function modificar_temporada ($temp_nombre,$temp_codigo) {
	
	$valores= array ();
	$valores[0]=$temp_nombre;
	$valores[1]=$temp_codigo;
	
$query=Util_String::concatenate(modificar_temporada,$valores);
echo $query;
Temporada::execute_query($query);
}

}

//Temporada::agregar_temporada('nueva temporada')
//Temporada::elimiar_temporada(22)
//Temporada::modificar_temporada('temporada modificada',1)
?>