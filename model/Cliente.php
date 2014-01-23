<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ('clientes','select* from CLIENTE');
define("agregarCli","INSERT INTO CLIENTE  values (cli_codigo.nextval,'%','%','%',to_date('%','yyyy-mm-dd'),'%','%','%','%',%,%,'%','%')");
define("actualizaCli","UPDATE CLIENTE SET cli_Rif='%', cli_Nombre_fiscal='%',cli_denominacion_fiscal='%',cli_fecha_creacion=to_date('%','yyyy-mm-dd'),cli_calle='%', cli_Urb='%', cli_Edificio='%', cli_tipo_cli='%', cli_puntos_acumulados=%, cli_fk_lugar=%, cli_correo='%', cli_clave='%' where cli_codigo=%");
define("eliminarCli","DELETE FROM CLIENTE where cli_codigo=%");
define('cli_id',"select * from CLIENTE where CLI_CODIGO=%");




abstract class Cliente extends Util_Database {
    
    private $Codigo;
    private $Rif;
    private $NombreF;
    private $df;
    private $fcre;
    private $calle;
	private $Urb;
    private $Edif;
    private $tipo;
    private $ptos;
    private $lug;
    private $correo;
    private $clave;
    


public static function ClienteN(){

$cliente =Cliente::execute_select(empleados);

//print_r($cliente);
return $cliente;
}
  

  public static function ClienteID($Codigo){
		$valores = array();
		$valores[0]=$Codigo;
		$query=UTIL_STRING::concatenate(cli_id,$valores);
  		$cliente= Cliente::execute_select($query);
		return $cliente;	
	}

 public static function agregarCli($Rif,$NombreF,$df,$fcre,$calle,$Urb,$Edif,$tipo,$ptos,$lug,$correo,$clave){

$values = array();
$values[0]=$Rif;
$values[1]= $NombreF;
$values[2]= $df;
$values[3]= $fcre;
$values[4]=$calle;
$values[5]= $Urb;
$values[6]= $Edif;
$values[7]=$tipo;
$values[8]= $ptos;
$values[9]= $lug;
$values[10]= $correo;
$values[11]= $clave;
$query= Util_String::concatenate(agregarCli, $values);
 print $query;
 Cliente::execute_query($query);

}





public static function actualizarCli($Rif,$NombreF,$df,$fcre,$calle,$Urb,$Edif,$tipo,$ptos,$lug,$correo,$clave,$Codigo){

$values = array();
$values[0]=$Rif;
$values[1]= $NombreF;
$values[2]= $df;
$values[3]= $fcre;
$values[4]=$calle;
$values[5]= $Urb;
$values[6]= $Edif;
$values[7]=$tipo;
$values[8]= $ptos;
$values[9]= $lug;
$values[10]= $correo;
$values[11]= $clave;
$values[12]= $Codigo;

$query= Util_String::concatenate(actualizaCli, $values);
 print $query;
 Cliente::execute_query($query);
}



public static function eliminarCli($id){

$values = array();
$values[0]= $id;



$query= Util_String::concatenate(eliminarCli, $values);
 print $query;
 Cliente::execute_query($query);
}


}

//EMPLEADO::agregar_empleado('00000','aa','aa','cc','ff','gg','M','01/01/2005','01/01/2008','SI','CALL CENTER','qq');
//EMPLEADO::f_select_nombres_empleados('aa','aa');
//EMPLEADO::actualizar('prueba cambio nombre',69);
//EMPLEADO::eliminar(69);
//Cliente::agregarCli('j6364-85','nuevoCli','novoCli','01/01/2014','morichal','guacuco','achi','CORPORATIVO',100,2,'novocli@example.com','n78996');

//Cliente::actualizarCli('j6364-8548','nuevoCli1','novoCli1','21/01/2014','morichal21','guacuco32','achiza','CORPORATIVO',102,3,'novocli@example1.com','n7899676654',1);

//Cliente::eliminarCli(1);


?> 