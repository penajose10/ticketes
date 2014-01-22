<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ('consumidores','select* from CONSUMIDOR');
define("agregarCon","INSERT INTO CONSUMIDOR  values (con_codigo.nextval,'%','%','%','%',%,%,%,'%',to_date('%','yyyy-mm-dd'),'%','%','%','%',%,%)");
define("actualizaCon","UPDATE CONSUMIDOR SET con_ci=%, con_nombre='%',con_apellido='%',con_sexo='%',con_telefono_oficina=%,con_telefono_casa=%, con_telefono_celular=%, con_correo='%',con_Fecha_Nacimiento=to_date('%','yyyy-mm-dd'), con_nacionalidad='%',con_calle='%',con_edificio='%', con_urbanizacion='%',con_fk_lugar=%,con_clave=% where con_codigo=%");
define("eliminarCon","DELETE FROM CONSUMIDOR where con_codigo=%");




abstract class Consumidor extends Util_Database {
    
    private $Codigo;
    private $ci;
    private $Nombre;
    private $ap;
    private $sexo;
	private $telo;
	private $telc;
    private $telcel;
    private $correo;
	private $fnac;
    private $nac;
    private $calle;
    private $ed;
    private $urb;
    private $lug;
    private $clave;
    


public static function ConsumidorN(){

$con =Consumidor::execute_select(consumidores);
 return $con;
//print_r($con);

}
  

  /*public static function f_select_nombres_empleados($nombreempleado, $apellidoempleado){

$values = array();
$values[0]= $nombreempleado;
$values[1]= $apellidoempleado;
$query= Util_String::concatenate(empleado_nombre, $values);
print_r($query);
$ejecucion=EMPLEADO::execute_select($query);
print_r($ejecucion);

}*/

 public static function agregarCon($ci,$Nombre,$ap,$sexo,$telo,$telc,$telcel,$correo,$fnac,$nac,$calle,$ed,$urb,$lug,$clave){

	$values= array();
 	$values[0]=$ci;
    $values[1]= $Nombre;
    $values[2]= $ap;
    $values[3]= $sexo;
	$values[4]= $telo;
	$values[5]= $telc;
    $values[6]= $telcel;
    $values[7]= $correo;
	$values[8]= $fnac;
    $values[9]= $nac;
    $values[10]= $calle;
    $values[11]= $ed;
    $values[12]= $urb;
    $values[13]= $lug;
    $values[14]= $clave;
$query= Util_String::concatenate(agregarCon, $values);
 print $query;
 Consumidor::execute_query($query);

}





public static function actualizarCon($ci,$Nombre,$ap,$sexo,$telo,$telc,$telcel,$correo,$fnac,$nac,$calle,$ed,$urb,$lug,$clave,$Codigo){

$values= array();
 	$values[0]=$ci;
    $values[1]= $Nombre;
    $values[2]= $ap;
    $values[3]= $sexo;
	$values[4]= $telo;
	$values[5]= $telc;
    $values[6]= $telcel;
    $values[7]= $correo;
	$values[8]= $fnac;
    $values[9]= $nac;
    $values[10]= $calle;
    $values[11]= $ed;
    $values[12]= $urb;
    $values[13]= $lug;
    $values[14]= $clave;
	$values[15]= $Codigo;

$query= Util_String::concatenate(actualizaCon, $values);
 print $query;
 Consumidor::execute_query($query);
}



public static function eliminarCon($id){

$values = array();
$values[0]= $id;



$query= Util_String::concatenate(eliminarCon, $values);
 print $query;
 Consumidor::execute_query($query);
}


}

//EMPLEADO::agregar_empleado('00000','aa','aa','cc','ff','gg','M','01/01/2005','01/01/2008','SI','CALL CENTER','qq');
//EMPLEADO::f_select_nombres_empleados('aa','aa');
//EMPLEADO::actualizar('prueba cambio nombre',69);
//EMPLEADO::eliminar(69);
//Cliente::agregarCli('j6364-85','nuevoCli','novoCli','01/01/2014','morichal','guacuco','achi','CORPORATIVO',100,2,'novocli@example.com','n78996');

//Cliente::actualizarCli('j6364-8548','nuevoCli1','novoCli1','21/01/2014','morichal21','guacuco32','achiza','CORPORATIVO',102,3,'novocli@example1.com','n7899676654',1);

//Consumidor::agregarCon(1232544,'nueov','algoasi','F',0215236545,04251236515,04241523565,'hola@example.com','01/01/1990','Venezolano','por ahi','yuju','auch',2,152422);

//Consumidor::actualizarCon(123254409,'nueov1','algoasiq','F',021523658,04251236520,04241523570,'hola1@example.com','01/01/1990','Venezolano','por ahi','yuju','auch',2,152422,3);

//consumidor::eliminarCon(21);
?> 