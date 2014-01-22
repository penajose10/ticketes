<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_compra","insert into COMPRA values (comp_numero.nextval,'%','%','%','%','%',%,%,%)");
define ("eliminar_compra","delete from COMPRA where comp_numero=%");
define ("modificar_compra","update set comp_donacion='%',comp_ticket_protegido='%',comp_envio='%',comp_csntidad_entradas='%',comp_fecha='%',from COMPRA where comp_numero=%");


abstract class Compra extends Util_Database {
	private $comp_numero;
	private $comp_donacion;
	private $comp_ticket_protegido;
	private $comp_envio;
	private $comp_cantidad_entradas;
	private $comp_fecha;
	
public static function agregar_compra ($comp_donacion,$comp_ticket_protegido,$comp_envio,$comp_cantidad_entradas,$comp_fecha,$comp_fk_tipo_entrada,$comp_fk_cosumidor,$comp_fk_empleado) {
	
	$valores= array ();
	$valores[0]=$comp_numero;
	$valores[1]=$comp_donacion;
	$valores[2]=$comp_ticket_protegido;
	$valores[3]=$comp_envio;
	$valores[4]=$comp_cantidad_entradas;
	$valores[5]=$comp_fk_tipo_entrada;
	$valores[6]=$comp_fk_consumidor;
	$valores[7]=$comp_fk_empleado;


$query=Util_String::concatenate(agregar_compra,$valores);
echo $query;
Compra::execute_query($query);
}

public static function elimiar_compra ($comp_numero) {
	
	$valores= array ();
	$valores[0]=$comp_numero;


$query=Util_String::concatenate(eliminar_compra,$valores);
echo $query;
Compra::execute_query($query);
}
public static function modificar_compra ($comp_donacion,$comp_ticket_protegido,$comp_envio,$comp_cantidad_entradas,$comp_fecha,$comp_numero) {
	
	$valores= array ();
	$valores[0]=$comp_donacion;
	$valores[1]=$comp_ticket_protegido;
	$valores[2]=$comp_envio;
	$valores[3]=$comp_cantidad_entradas;
	$valores[4]=$comp_fecha;
	$valores[5]=$comp_numero;
	


$query=Util_String::concatenate(modificar_compra,$valores);
echo $query;
Compra::execute_query($query);
}

}


?>