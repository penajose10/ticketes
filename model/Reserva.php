<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';


define("agregar_reserva","INSERT INTO RESERVACION  values (re_consecutivo.nextval,%,to_date('%','dd/mm/yyyy'),%)");
define ("modificar_reserva","update RESERVACION set re_codigo_reserva=%, re_fecha_reserva=to_date('%','dd/mm/yyyy') where re_consecutivo=%");
define("eliminar_reserva","DELETE FROM RESERVACION where re_consecutivo=%");




abstract class Reservacion extends Util_Database {
    
    private $re_consecutivo;
    private $re_codigo_reserva;
    private $re_fecha_reserva;
	private $re_fk_cliente;
    


  public static function agregar_reservacion($re_codigo_reserva,$re_fecha_reserva,$re_fk_cliente){

$valores[0]=$re_codigo_reserva;
$valores[1]=$re_fecha_reserva;
$valores[2]=$re_fk_cliente;

$query= Util_String::concatenate(agregar_reserva, $valores);
 print $query;
 Reservacion::execute_query($query);

}





public static function modificar_reservacion($re_codigo_reserva,$re_fecha_reserva,$re_consecutivo){

$valores[0]=$$re_codigo_reserva;
$valores[1]=$re_fecha_reserva;
$valores[2]=$re_consecutivo;

$query= Util_String::concatenate(modificar_reservacion, $valores);
 print $query;
 Reservacion::execute_query($query);
}



public static function eliminar_Reservacion($re_consecutivo){

$values = array();
$values[0]= $re_consecutivo;



$query= Util_String::concatenate(eliminar_reservacion, $values);
 print $query;
 Reservacion::execute_query($query);
}


}

Reservacion::agregar_reservacion(2,'12/02/2013','null')




?> 