<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';


define("agregar_cliente","INSERT INTO CLIENTE  values (cli_codigo.nextval,'%','%','%',to_date('%','dd/mm/yyyy'),'%','%','%', '%','%',%,'%','%')");
define("modificar_cliente","UPDATE CLIENTE SET cli_rif='%',cli_Nombre_Fiscal='%',cli_denominacion_fiscal='%',cli_fecha_creacion='%',cli_calle='%',cli_urb='%',cli_edificio='%',cli_tipo_cli='%',cli_puntos_acumulados='%',cli_correo='%',cli_clave='%'; 
where cli_codigo=%");
define("eliminar_cliente","DELETE FROM CLIENTE where cli_codigo=%");




abstract class Cliente extends Util_Database {
    
    private $cli_codigo;
    private $cli_rif;
    private $cli_nombre_fiscal;
    private $cli_denominacion_fiscal;
    private $cli_fecha_creacion;
    private $cli_calle;
    private $cli_urb;
    private $cli_edificio;
    private $cli_tipo_cli;
    private $cli_puntos_acumulados;
    private $cli_correo;
    private $cli_clave;
  
  

  public static function agregar_cliente($cli_codigo,$cli_nombre_fiscal,$cli_denominacion_fiscal,$cli_fecha_creacion,$cli_calle,$cli_urb,$cli_edificio,$cli_tipo_cli,$cli_puntos_acumulados,$cli_fk_lugar,$cli_correo,$cli_clave){

$valores[0]=$cli_codigo;
$valores[1]=$cli_nombre_fiscal;
$valores[2]=$cli_denominacion_fiscal;
$valores[3]=$cli_fecha_creacion;
$valores[4]=$cli_calle;
$valores[5]=$cli_urb;
$valores[6]=$cli_edificio;
$valores[7]=$cli_tipo_cli;
$valores[8]=$cli_puntos_acumulados;
$valores[9]=$cli_fk_lugar;
$valores[10]=$cli_correo;
$valores[11]=$cli_clave;

$query= Util_String::concatenate(agregar_cliente, $values);
 print $query;
 Cliente::execute_query($query);

}





public static function modificar_cliente($cli_codigo){

$valores[0]=$cli_codigo;
$valores[1]=$cli_nombre_fiscal;
$valores[2]=$cli_denominacion_fiscal;
$valores[3]=$cli_fecha_creacion;
$valores[4]=$cli_calle;
$valores[5]=$cli_urb;
$valores[6]=$cli_edificio;
$valores[7]=$cli_tipo_cli;
$valores[8]=$cli_puntos_acumulados;
$valores[9]=$cli_correo;
$valores[10]=$cli_clave;


$query= Util_String::concatenate(modificar_cliente, $values);
 print $query;
 Cliente::execute_query($query);
}



public static function eliminar_cliente($cli_codigo){

$values = array();
$values[0]= $cli_codigo;



$query= Util_String::concatenate(eliminar_cliente, $values);
 print $query;
 Cliente::execute_query($query);
}


}

//EMPLEADO::agregar_empleado('00000','aa','aa','cc','ff','gg','M','01/01/2005','01/01/2008','SI','CALL CENTER','qq');
//E/MPLEADO::f_select_nombres_empleados('aa','aa');
//EMPLEADO::actualizar('prueba cambio nombre',69);
//EMPLEADO::eliminar(69);





?> 