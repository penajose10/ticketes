<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_stand","insert into STAND values (s_codigo.nextval,'%','%',%,%,to_date('%','dd/mm/yyyy'),%,%)");
define ("eliminar_stand","delete from STAND where s_codigo=%");
define ("modificar_stand","update STAND set s_nombre='%',s_tipo='%',s_cantidad_snack='%',s_csntidad_bebidas='%',s_fecha_asignacion='%',from STAND where s_codigo=%");
define("tipoStand","select distinct(S_TIPO) from STAND");


abstract class Stand extends Util_Database {
	private $s_codigo;
	private $s_nombre;
	private $s_tipo;
	private $s_cantidad_snack;
	private $s_cantidad_bebidas;
	private $s_fecha_asignacion;
    private $s_fk_centro_comercial;
	private $s_fk_recinto;
	
	public static function StandT(){
		$stand= Stand::execute_select(tipoStand);
		return $stand;
		}
	
public static function agregar_stand ($s_nombre,$s_tipo,$s_cantidad_snack,$s_cantidad_bebidas,$s_fecha_asignacion,$s_fk_centro_comercial,$s_fk_recinto) {
	
	$valores= array ();
	$valores[0]=$s_codigo;
	$valores[1]=$s_nombre;
	$valores[2]=$s_tipo;
	$valores[3]=$s_cantidad_snack;
	$valores[4]=$s_cantidad_bebidas;
	$valores[5]=$s_fecha_asignacion;
	$valores[6]=$s_fk_centro_comercial;
	$valores[7]=$s_fk_recinto;

$query=Util_String::concatenate(agregar_stand,$valores);
echo $query;
Stand::execute_query($query);
}

public static function elimiar_stand ($s_codigo) {
	
	$valores= array ();
	$valores[0]=$s_codigo;
	


$query=Util_String::concatenate(eliminar_stand,$valores);
echo $query;
Stand::execute_query($query);
}
public static function modificar_stand ($s_nombre,$s_tipo,$s_cantidad_snack,$s_cantidad_bebidas,$s_fecha_asignacion,$s_codigo) {
	
	$valores= array ();
	$valores[0]=$s_nombre;
	$valores[1]=$s_tipo;
	$valores[2]=$s_cantidad_sanck;
	$valores[3]=$s_cantidad_bebidas;
	$valores[4]=$s_fecha_asignacion;
	$valores[5]=$s_codigo;
	


$query=Util_String::concatenate(modificar_stand,$valores);
echo $query;
Stand::execute_query($query);
}

}


?>