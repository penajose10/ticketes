<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_puesto","insert into PUESTO values (p_codigo.nextval,%,%,%,%,'%')");
define ("eliminar_puesto","delete from PUESTO where p_codigo=%");
define ("modificar_puesto","update PUESTO set p_nombre='%' where p_codigo=%");



abstract class Puesto extends Util_Database {
	private $p_codigo;
	private $p_fk_recinto;
	private $p_fk_sala;
	private $p_fk_zona;
	private $p_fk_seccion;
	private $p_nombre;
	

public static function agregar_puesto ($p_fk_recinto,$p_fk_sala,$p_fk_zona,$p_fk_seccion,$p_nombre) {
	
	$valores= array ();
	$valores[0]=$p_fk_recinto;
	$valores[1]=$p_fk_sala;
	$valores[2]=$p_fk_zona;
	$valores[3]=$p_fk_seccion;
	$valores[4]=$p_nombre;
	


$query=Util_String::concatenate(agregar_puesto,$valores);
echo $query;
Puesto::execute_query($query);
}

public static function elimiar_puesto ($p_codigo) {
	
	$valores= array ();
	$valores[0]=$p_codigo;


$query=Util_String::concatenate(eliminar_puesto,$valores);
echo $query;
Puesto::execute_query($query);
}

public static function modificar_puesto ($p_nombre,$p_codigo) {
	
	$valores= array ();
	$valores[0]=$p_nombre;
	$valores[1]=$p_codigo;
	
$query=Util_String::concatenate(modificar_puesto,$valores);
echo $query;
Puesto::execute_query($query);
}

}

//Puesto::agregar_puesto(1,41,8,2,'nombre puesto tres')
//Puesto::elimiar_puesto(1)
Puesto::modificar_puesto('puesto modificado',2)
?>