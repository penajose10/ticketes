<?php 
include_once 'Util_Database.php';
include_once 'Util_String.php';

define ("agregar_stock","insert into STOCK values (stock_codigo.nextval,'%','%',%,%)");
define ("eliminar_stock","delete from STOCK where stock_codigo=%");
define ("modificar_stock","update set stock_nombre='%',stock_cantidad='%',from STOCK where stock_codigo=%");


abstract class Stock extends Util_Database {
	private $stock_codigo;
	private $stock_nombre;
	private $stock_cantidad;
	
public static function agregar_stock ($stock_nombre,$stock_cantidad,$stock_fk_stand,$stock_fk_producto) {
	
	$valores= array ();
	$valores[0]=$stock_codigo;
	$valores[1]=$stock_nombre;
	$valores[2]=$stock_cantidad;
	$valores[3]=$stock_fk_stand;
	$valores[4]=$stock_fk_producto;
	
$query=Util_String::concatenate(agregar_stock,$valores);
echo $query;
Stock::execute_query($query);
}

public static function elimiar_stock ($stock_codigo) {
	
	$valores= array ();
	$valores[0]=$stock_codigo;


$query=Util_String::concatenate(eliminar_stock,$valores);
echo $query;
Stock::execute_query($query);
}
public static function modificar_stock ($stock_nombre,$stock_cantidad) {
	
	$valores= array ();
	$valores[0]=$stock_nombre;
	$valores[1]=$stock_cantidad;
	
$query=Util_String::concatenate(modificar_stock,$valores);
echo $query;
Stock::execute_query($query);
}

}


?>