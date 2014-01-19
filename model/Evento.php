<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_evento","insert into EVENTO values (e_codigo.nextval,'%','%','%','%','%',%,%,%)");
define ("eliminar_evento","delete from EVENTO where e_codigo=%");

abstract class Evento extends Util_Database {
	private $codigo;
	private $nombre;
	private $censura;
	private $categoria;
	private $genero;
	private $descripcion;
	
public static function agregar_evento ($nombre,$censura,$categoria,$genero,$descripcion,$fk_compra,$fk_recinto,$fk_empleado) {
	
	$valores= array ();
	$valores[0]=$nombre;
	$valores[1]=$censura;
	$valores[2]=$categoria;
	$valores[3]=$genero;
	$valores[4]=$descripcion;
	$valores[5]=$fk_compra;
	$valores[6]=$fk_recinto;
	$valores[7]=$fk_empleado;


$query=Util_String::concatenate(agregar_evento,$valores);
echo $query;
Evento::execute_query($query);
}
public static function elimiar_evento ($codigo) {
	
	$valores= array ();
	$valores[0]=$codigo;


$query=Util_String::concatenate(eliminar_evento,$valores);
echo $query;
Evento::execute_query($query);
}
}

Evento::agregar_evento('El proyecto','A','TEATRO','locura','toal',2,3,4);
?>