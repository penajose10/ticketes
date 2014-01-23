<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ('proveedor','select* from PROVEEDOR');
define("agregar_prov","INSERT INTO PROVEEDOR  values (prov_codigo.nextval,'%','%','%','%','%','%',%,%)");
define("actualiza_prov","UPDATE PROVEEDOR SET prov_rif='%',prov_nombre='%', prov_calle='%', prov_urbanizacion='%', prov_edificio='%', prov_contacto='%', prov_telefono=%,prov_fk_lugar =% where prov_codigo=%");
define("eliminar_prov","DELETE FROM PROVEEDOR where prov_codigo=%");
define('prov_id',"select * from PROVEEDOR where PROV_CODIGO=%");



abstract class Proveedor extends Util_Database {
    
    private $Codigo;
    private $rif;
    private $Nombre;
    private $calle;
    private $Urb;
    private $Edif;
    private $contacto;
	private $tel;
    private $lugar;
    

public static function ProvN(){

$proveedor =Proveedor::execute_select(proveedor);

print_r($proveedor);

}
  
  public static function ProvID($Codigo){
		$valores = array();
		$valores[0]=$Codigo;
		$query=UTIL_STRING::concatenate(prov_id,$valores);
  		$proveedor= Proveedor::execute_select($query);
		return $proveedor;	
	}

  

 public static function insertar_prov($rif,$nombre,$calle,$urb,$edif,$contacto,$tel,$lugar){

$values = array();
$values[0]= $rif;
$values[1]= $nombre;
$values[2]= $calle;
$values[3]= $urb;
$values[4]= $edif;
$values[5]= $contacto;
$values[6]= $tel;
$values[7]= $lugar;

$query= Util_String::concatenate(agregar_prov, $values);
 print $query;
 Proveedor::execute_query($query);

}





public static function actualizarProv($rif,$nombre,$calle,$urb,$edif,$contacto,$tel,$lugar,$Codigo){

$values = array();
$values[0]= $rif;
$values[1]= $nombre;
$values[2]= $calle;
$values[3]= $urb;
$values[4]= $edif;
$values[5]= $contacto;
$values[6]= $tel;
$values[7]= $lugar;
$values[8]=$Codigo;


$query= Util_String::concatenate(actualiza_prov, $values);
 print $query;
 Proveedor::execute_query($query);
}



public static function eliminarProv($Codigo){

$values = array();
$values[0]= $Codigo;



$query= Util_String::concatenate(eliminar_prov, $values);
 print $query;
 Proveedor::execute_query($query);
}


}

//EMPLEADO::agregar_empleado('00000','aa','aa','cc','ff','gg','M','01/01/2005','01/01/2008','SI','CALL CENTER','qq');
//EMPLEADO::f_select_nombres_empleados('aa','aa');
//EMPLEADO::actualizar('prueba cambio nombre',69);
//EMPLEADO::eliminar(69);


//Proveedor::actualizarProv('j123978-8','yeuyau','logro','parcero','wiii','don teso',021548,3,21);

Proveedor::eliminarProv(21);
?> 