<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_empresa_envio","insert into EMPRESA_ENVIO values(ee_codigo.nextval,'%')");
define ("eliminar_empresa_envio","delete from EMPRESA_ENVIO where ee_codigo=%");
define ("modificar_empresa_envio","update EMPRESA_ENVIO set ee_nombre='%' where ee_codigo=%");





abstract class Empresa_Envio extends Util_Database {
    
    private $ee_codigo;
	private $ee_nombre;
   

public static function agregar_empresa_envio ($ee_nombre) {
	
	$valores= array ();
	$valores[0]=$ee_nombre;
	
$query=Util_String::concatenate(agregar_empresa_envio,$valores);
//echo $query ;
Empresa_Envio::execute_query($query);
print $query;
}

public static function eliminar_empresa_envio($ee_codigo){

$values = array();
$values[0]= $ee_codigo;



$query= Util_String::concatenate(eliminar_empresa_envio, $values);
 print $query;
 Empresa_Envio::execute_query($query);
}

public static function modificar_empresa_envio($ee_nombre,$ee_codigo){

$values = array();
$values[0]= $ee_nombre;
$values[1]= $ee_codigo;

$query= Util_String::concatenate(modificar_empresa_envio, $values);
 print $query;
 Empresa_Envio::execute_query($query);
}


  
}

//Empresa_Envio::agregar_empresa_envio('kla que envia')
//empresa_envio::eliminar_empresa_envio(21) 
 empresa_envio::modificar_empresa_envio('ee  modificada',1)
?> 