<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_evento","insert into EVENTO values (e_codigo.nextval,'%','%','%','%','%',%,%,%)");
define ("eliminar_evento","delete from EVENTO where e_codigo=%");
define ("modificar_evento","update set e_nombre='%',e_censura='%',e_categoria='%',e_genero='%',e_descripcion='%' from EVENTO where e_codigo=%");
define ("eventos","select * from EVENTO");
define("Evento_id","select * from EVENTO where E_CODIGO=%");



abstract class Evento extends Util_Database {
	private $codigo;
	private $nombre;
	private $censura;
	private $categoria;
	private $genero;
	private $descripcion;
	private $fk_compra;
	private $fk_recinto;
	private $fk_empleado;
	
public static function agregar_evento ($nombre,$censura,$categoria,$genero,$descripcion) {
	
	$valores= array ();
	$valores[0]=$nombre;
	$valores[1]=$censura;
	$valores[2]=$categoria;
	$valores[3]=$genero;
	$valores[4]=$descripcion;
	//$valores[5]=$fk_compra;
	//$valores[6]=$fk_recinto;
	//$valores[7]=$fk_empleado;


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
public static function modificar_evento ($nombre,$censura,$categoria,$genero,$descripcion,$codigo) {
	
	$valores= array ();
	$valores[0]=$nombre;
	$valores[1]=$censura;
	$valores[2]=$categoria;
	$valores[3]=$genero;
	$valores[4]=$descripcion;
	$valores[5]=$codigo;
	


$query=Util_String::concatenate(modificar_evento,$valores);
echo $query;
Evento::execute_query($query);
}


   public static function F_evento() {

     $eventos =Evento::execute_select(eventos);
     return $eventos;
 
        //print_r($eventos);

    }

    public static function eventoID($Codigo){
        $valores = array();
        $valores[0]=$Codigo;
        $query=UTIL_STRING::concatenate(Evento_id,$valores);
        $evento= Evento::execute_select($query);
        return $evento; 

    }

}

//Evento::agregar_evento('El proyecto','A','TEATRO','locura','toal',2,3,4);
?>