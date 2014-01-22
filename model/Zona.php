<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_zona","insert into ZONA values(z_codigo.nextval,%,%,'%')");
define ("eliminar_zona","delete from ZONA where z_codigo=%");
define ("modificar_zona","update ZONA set z_nombre='%' where z_codigo=%");





abstract class ZONA extends Util_Database {
    
    private $z_codigo;
	private $z_fk_sala;
    private $z_fk_recinto;
	private $z_nombre;
    


public static function agregar_zona ($z_fk_sala,$z_fk_recinto,$z_nombre) {
	
	$valores= array ();
	$valores[0]=$z_fk_sala;
	$valores[1]=$z_fk_recinto;
	$valores[2]=$z_nombre;
	
$query=Util_String::concatenate(agregar_zona,$valores);
//echo $query ;
Zona::execute_query($query);
print $query;
}

public static function eliminar_zona($z_codigo){

$values = array();
$values[0]= $z_codigo;



$query= Util_String::concatenate(eliminar_zona, $values);
 print $query;
 Zona::execute_query($query);
}

public static function modificar_zona($z_nombre,$z_codigo){

$values = array();
$values[0]= $z_nombre;
$values[1]= $z_codigo;

$query= Util_String::concatenate(modificar_zona, $values);
 print $query;
 Zona::execute_query($query);
}


  
}
  
//Zona::agregar_zona(42,2,'zooloo uno')
//Zona::eliminar_zona(7)
Zona::modificar_zona('modificada zona',9)
?> 