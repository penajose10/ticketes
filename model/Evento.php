<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_evento","insert into EVENTO values (e_codigo.nextval,'%','%','%','%','%',%,%,%)");
define ("eliminar_evento","delete from EVENTO where e_codigo=%");
define ("modificar_evento","update EVENTO set e_nombre='%',e_censura='%',e_categoria='%',e_genero='%',e_descripcion='%' where e_codigo=%");


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
public static function modificar_evento ($e_nombre,$e_censura,$e_categoria,$e_genero,$e_descripcion,$e_codigo) {
	
	$valores= array ();
	$valores[0]=$e_nombre;
	$valores[1]=$e_censura;
	$valores[2]=$e_categoria;
	$valores[3]=$e_genero;
	$valores[4]=$e_descripcion;
	$valores[5]=$e_codigo;
	


$query=Util_String::concatenate(modificar_evento,$valores);
echo $query;
Evento::execute_query($query);
}

}
//Evento::agregar_evento('la villa','A','TEATRO','D','DE','null','null','null')
//Evento::elimiar_evento(24)
Evento::modificar_evento('la risa','B','DEPORTE','gre','modificada',25)
?>