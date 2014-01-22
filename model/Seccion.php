<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_seccion","insert into SECCION values (secc_codigo.nextval,%,%,%,'%')");
define ("eliminar_seccion","delete from SECCION where secc_codigo=%");
define ("modificar_seccion","update SECCION set secc_nombre='%' where secc_codigo=%");



abstract class Seccion extends Util_Database {
	private $codigo;
	private $secc_fk_zona;
	private $secc_fk_sala;
	private $secc_fk_recinto;
	private $secc_nombre;

public static function agregar_seccion ($secc_fk_zona,$secc_fk_sala,$secc_fk_recinto,$secc_nombre) {
	
	$valores= array ();
	$valores[0]=$secc_fk_zona;
	$valores[1]=$secc_fk_sala;
	$valores[2]=$secc_fk_recinto;
	$valores[3]=$secc_nombre;
	


$query=Util_String::concatenate(agregar_seccion,$valores);
echo $query;
Seccion::execute_query($query);
}

public static function elimiar_seccion ($secc_codigo) {
	
	$valores= array ();
	$valores[0]=$secc_codigo;


$query=Util_String::concatenate(eliminar_seccion,$valores);
echo $query;
Seccion::execute_query($query);
}

public static function modificar_seccion ($secc_nombre,$secc_codigo) {
	
	$valores= array ();
	$valores[0]=$secc_nombre;
	$valores[1]=$secc_codigo;
	
$query=Util_String::concatenate(modificar_seccion,$valores);
echo $query;
Seccion::execute_query($query);
}

}

//Seccion::agregar_seccion(9,41,1,'categoria zona')
//Seccion::elimiar_seccion(1)
Seccion::modificar_seccion('zona modificada',2)
?>