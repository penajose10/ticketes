<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ('zonas','select* from ZONA');
define('Recinto_nombre',"select* from CENTRO_COMERCIAL where 'Reg_nombre='%' AND apellido='%'");
define("agregar_empl","INSERT INTO EMPLEADO  values (Emp_id.nextval,'%','%','%','%','%','%','%', to_date('%','dd/mm/yyyy'),to_date('%','dd/mm/yyyy'),'%','%','%')");
define("actualiza_emp","UPDATE EMPLEADO SET emp_Nombre='%' where emp_id=%");
define("eliminar_emp","DELETE FROM EMPLEADO where emp_id=%");



abstract class ZONA extends Util_Database {
    
    private $Cod_zona;
    private $fk_Cod_recinto;
    private $fk_Cod_sala;


public static function F_zona(){

$zona =ZONA::execute_select(zonas);

print_r($zona);

}
  

  public static function f_rec_nombre($nombrerecinto, $apellido){

$values = array();
$values[0]= $nombrerecinto;
$values[1]= $apellido;
$query= Util_String::concatenate(Recinto_nombre, $values);
 print $query;

}

 public static function agregar($ci,$nombre,$apellido,$calle,$urb,$edif,$sexo,$fenac,$fetra,$empjefe,$tipo,$nivelest){

$values = array();
$values[0]= $ci;
$values[1]= $nombre;
$values[2]= $apellido;
$values[3]= $calle;
$values[4]= $urb;
$values[5]= $edif;
$values[6]= $sexo;
$values[7]= $fenac;
$values[8]= $fetra;
$values[9]= $empjefe;
$values[10]= $tipo;
$values[11]= $nivelest;
$query= Util_String::concatenate(agregar_empl, $values);
 print $query;
 ZONA::execute_query($query);

}





public static function actualizar($empnombre,$id){

$values = array();
$values[0]= $empnombre;
$values[1]= $id;


$query= Util_String::concatenate(actualiza_emp, $values);
 print $query;
 ZONA::execute_query($query);
}



public static function eliminar($id){

$values = array();
$values[0]= $id;



$query= Util_String::concatenate(eliminar_emp, $values);
 print $query;
 ZONA::execute_query($query);
}


}


//ZONA::eliminar(21);





?> 