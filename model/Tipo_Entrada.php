<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_tipo_entrada","insert into TIPO_ENTRADA values (te_codigo.nextval,'%',%)");
define ("eliminar_tipo_entrada","delete from TIPO_ENTRADA where te_codigo=%");
define ("modificar_tipo_entrada","update TIPO_ENTRADA set te_nombre='%', te_costo=% where te_codigo=%");



abstract class Tipo_Entrada extends Util_Database {
	private $te_codigo;
	private $te_nombre;
	private $te_costo;
	
public static function agregar_tipo_entrada ($te_nombre,$te_costo) {
	
	$valores= array ();
	$valores[0]=$te_nombre;
	$valores[1]=$te_costo;
	

$query=Util_String::concatenate(agregar_tipo_entrada,$valores);
echo $query;
Tipo_Entrada::execute_query($query);
}

public static function elimiar_tipo_entrada ($te_codigo) {
	
	$valores= array ();
	$valores[0]=$te_codigo;


$query=Util_String::concatenate(eliminar_tipo_entrada,$valores);
echo $query;
Tipo_entrada::execute_query($query);
}

public static function modificar_tipo_entrada ($te_nombre,$te_costo,$te_codigo) {
	
	$valores= array ();
	$valores[0]=$te_nombre;
	$valores[1]=$te_costo;
	$valores[2]=$te_codigo;
	
$query=Util_String::concatenate(modificar_tipo_entrada,$valores);
echo $query;
Tipo_Entrada::execute_query($query);
}

}
//Tipo_entrada::agregar_tipo_entrada('adultos mayores',200)
//Tipo_Entrada::elimiar_tipo_entrada(2)
Tipo_Entrada::modificar_tipo_entrada('te modificado',25,21)
?>