<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_producto","insert into PRODUCTO values(prod_codigo.nextval,'%','%',%,%,%,%)");
define ("eliminar_producto","delete from PRODUCTO where prod_codigo=%");
define ("modificar_producto","update PRODUCTO set prod_nombre='%',prod_tipo_p='%',prod_cantidad='%',prod_inv_fisico='%',prod_inv_teorico='%' where prod_codigo=%");


abstract class Producto extends Util_Database {
	private $prod_codigo;
	private $prod_nombre;
	private $prod_tipo_p;
	private $prod_cantidad;
	private $prod_inv_fisico;
	private $prod_inv_teorico;
	private $prod_fk_proveedor;
	
public static function agregar_producto ($prod_nombre,$prod_tipo_p,$prod_cantidad,$prod_inv_fisico,$prod_inv_teorico,$prod_fk_proveedor) {
	
	$valores= array ();
	$valores[0]=$prod_nombre;
	$valores[1]=$prod_tipo_p;
	$valores[2]=$prod_cantidad;
	$valores[3]=$prod_inv_fisico;
	$valores[4]=$prod_inv_teorico;
	$valores[5]=$prod_fk_proveedor;
	
$query=Util_String::concatenate(agregar_producto,$valores);
//echo $query ;
Producto::execute_query($query);
print $query;

}

public static function modificar_producto($prod_nombre,$prod_tipo_p,$prod_inv_fisico,$prod_inv_teorico,$prod_cantidad,$prod_codigo){

$values = array();
$values[0]= $prod_nombre;
$values[1]= $prod_tipo_p;
$values[2]= $prod_inv_fisico;
$values[3]= $prod_inv_teorico;
$values[4]= $prod_cantidad;
$values[5]= $prod_codigo;


$query= Util_String::concatenate(modificar_producto, $values);
 print $query;
 Producto::execute_query($query);
}

public static function eliminar_producto($prod_codigo){

$values = array();
$values[0]= $prod_codigo;



$query= Util_String::concatenate(eliminar_producto, $values);
 print $query;
 Producto::execute_query($query);
}


}

//Producto::agregar_producto('tosoton','SNACK',10,10,10,1);
//Producto::modificar_producto('PAPASSS','BEBIDA',4,3,5,22);
Producto::eliminar_producto(22);
?>