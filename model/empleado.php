<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ('empleados','select* from EMPLEADO');
define('empleado_nombre',"select* from EMPLEADO where emp_Nombre='%' AND emp_Apellido='%'");
define("agregar_empl","INSERT INTO EMPLEADO  values (Emp_id.nextval,'%','%','%','%','%','%','%', to_date('%','dd/mm/yyyy'),to_date('%','dd/mm/yyyy'),'%','%','%')");
define("actualiza_emp","UPDATE EMPLEADO SET emp_Nombre='%' where emp_id=%");
define("eliminar_emp","DELETE FROM EMPLEADO where emp_id=%");




abstract class EMPLEADO extends Util_Database {
    
    private $emp_Codigo;
    private $emp_Ci;
    private $emp_Nombre;
    private $emp_Apellido;
    private $emp_Calle;
    private $emp_Urb;
    private $emp_Edif;
    private $emp_Sexo_emp;
    private $emp_Fecha_Nacimiento;
    private $emp_Fecha_Trabajo;
    private $emp_Jef;
    private $emp_Tipo_emp;
    private $emp_Nivel_Estudio;


public static function F_empleado(){

$empleado =EMPLEADO::execute_select(empleados);

print_r($empleado);

}
  

  public static function f_select_nombres_empleados($nombreempleado, $apellidoempleado){

$values = array();
$values[0]= $nombreempleado;
$values[1]= $apellidoempleado;
$query= Util_String::concatenate(empleado_nombre, $values);
print_r($query);
$ejecucion=EMPLEADO::execute_select($query);
print_r($ejecucion);

}

 public static function agregar_empleado($ci,$nombre,$apellido,$calle,$urb,$edif,$sexo,$fenac,$fetra,$empjefe,$tipo,$nivelest){

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
 EMPLEADO::execute_query($query);

}





public static function actualizar($empnombre,$id){

$values = array();
$values[0]= $empnombre;
$values[1]= $id;


$query= Util_String::concatenate(actualiza_emp, $values);
 print $query;
 EMPLEADO::execute_query($query);
}



public static function eliminar($id){

$values = array();
$values[0]= $id;



$query= Util_String::concatenate(eliminar_emp, $values);
 print $query;
 EMPLEADO::execute_query($query);
}


}

EMPLEADO::agregar_empleado('00000','aa','aa','cc','ff','gg','M','01/01/2005','01/01/2008','SI','CALL CENTER','qq');
EMPLEADO::f_select_nombres_empleados('aa','aa');
EMPLEADO::actualizar('prueba cambio nombre',69);
EMPLEADO::eliminar(69);





?> 