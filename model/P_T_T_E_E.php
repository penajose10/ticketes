<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_pttee","insert into P_T_T_E_E values (pttee_codigo.nextval,'%','%','%',%,%,%,%,%,%,%,%)");
define ("eliminar_pttee","delete from P_T_T_E_E where pttee_codigo=%");
define ("modificar_pttee","update set pttee_costo='%',pttee_fecha_inicio='%',pttee_fecha_fin='%',from P_T_T_E_E where pttee_codigo=%");


abstract class PTTEE extends Util_Database {
	private $pttee_codigo;
	private $pttee_costo;
	private $pttee_fecha_inicio;
	private $pttee_fecha_fin;
	
public static function agregar_pttee ($ptte_costo,$pttee_fecha_inicio,$pttee_fecha_fin,$pttee_fk_puesto,$pttee_fk_evento,$pttee_fk_tipo_entrada,$pttee_fk_temporada,$pttee_fk_seccion,$pttee_fk_zona,$pttee_fk_sala,$pttee_fk_recinto) {
	
	$valores= array ();
	$valores[0]=$pttee_codigo;
	$valores[1]=$pttee_costo;
	$valores[2]=$pttee_fecha_inicio;
	$valores[3]=$pttee_fecha_fin;
	$valores[4]=$pttee_fk_puesto;
	$valores[5]=$pttee_fk_evento;
	$valores[6]=$pttee_fk_tipo_entrada;
	$valores[7]=$pttee_fk_temporada;
    $valores[8]=$pttee_fk_seccion;
	$valores[9]=$pttee_fk_zona;
	$valores[10]=$pttee_fk_sala;
	$valores[11]=$pttee_fk_recinto;

$query=Util_String::concatenate(agregar_pttee,$valores);
echo $query;
PTTEE::execute_query($query);
}

public static function elimiar_pttee ($pttee_codigo) {
	
	$valores= array ();
	$valores[0]=$pttee_codigo;


$query=Util_String::concatenate(eliminar_pttee,$valores);
echo $query;
PTTEE::execute_query($query);
}
public static function modificar_pttee ($pttee_costo,$pttee_fecha_inicio,$pttee_fecha_fin) {
	
	$valores= array ();
	$valores[0]=$pttee_costo;
	$valores[1]=$pttee_fecha_inicio;
	$valores[2]=$pttee_fecha_fin;
	
$query=Util_String::concatenate(modificar_pttee,$valores);
echo $query;
PTTEE::execute_query($query);
}

}


?>