<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_horario","insert into HORARIO values(h_codigo.nextval,to_date('%','dd/mm/yyyy'),%)");
define ("eliminar_horario","delete from HORARIO where h_codigo=%");
define ("modificar_horario","update HORARIO set h_dia='%', h_hora where s_codigo=%");





abstract class Horario extends Util_Database {
    
    private $h_codigo;
	private $h_dia;
    private $h_hora;
	
    


public static function agregar_horario ($h_dia,$h_hora) {
	
	$valores= array ();
	$valores[0]=$h_dia;
	$valores[1]=$h_hora;
	
	
$query=Util_String::concatenate(agregar_horario,$valores);
//echo $query ;
Horario::execute_query($query);
print $query;
}

public static function eliminar_horario($h_codigo){

$values = array();
$values[0]= $h_codigo;



$query= Util_String::concatenate(eliminar_horario, $values);
 print $query;
 Horario::execute_query($query);
}

public static function modificar_horario($h_dia,$h_hora,$h_codigo){

$values = array();
$values[0]= $h_dia;
$values[1]= $h_hora;
$values[2]= $h_codigo;

$query= Util_String::concatenate(modificar_horario, $values);
 print $query;
 Horario::execute_query($query);
}


  
}
  
Horario::agregar_horario('12/02/2013','3')
?> 