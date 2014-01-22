<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_sala","INSERT INTO SALA values (s_codigo.nextval,'%',%)");
define ("modificar_sala","update SALA set s_nombre='%'where s_codigo=%");
define ("eliminar_sala","delete from SALA where s_codigo=%");




abstract class Sala extends Util_Database {
private $s_codigo;
private $s_nombre;
private $s_fk_recinto;


public static function agregar_sala ($nombre,$fk_recinto) {
	$valores = array ();
	$values[0]=$nombre;
	$values[1]=$fk_recinto;
	
$query=Util_String::concatenate(agregar_sala,$values);
//echo $query ;
Sala::execute_query($query);
print $query;
}
public static function modificar_sala($s_nombre,$s_codigo){

$values = array();
$values[0]= $s_nombre;
$values[1]= $s_codigo;

$query= Util_String::concatenate(modificar_sala, $values);
 print $query;
 Sala::execute_query($query);
}

public static function eliminar_sala($s_codigo){

$values = array();
$values[0]= $s_codigo;



$query= Util_String::concatenate(eliminar_sala, $values);
 print $query;
 Sala::execute_query($query);
}


}

//Sala::agregar_sala('la clara',2);
//Sala::modificar_sala('las unicas',43);
Sala::eliminar_sala(43);

?>