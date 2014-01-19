<?PHP

include_once 'Util_Database.php';
include_once 'Util_String.php';

define('Recintos','select * from RECINTO');
define('Recinto_Nombre',"select * from RECINTO where REC_NOMBRE='%' and REC_FK_LUGAR= '%'");
define('Agregar_recinto',"insert into RECINTO values(rec_codigo.nextval,'%','%','%','%',%)");
define('Actualizar_recinto',"update RECINTO set REC_EDIFICIO= '%' where REC_FK_LUGAR= %");
define('Eliminar_recinto',"delete from RECINTO where REC_CODIGO = %");

abstract class Recinto extends Util_DataBase {
	
	private $Codigo;
	private $Nombre;
	private $Calle;
	private $Edificio;
	private $urb;
	private $lug;
	
	
	public static function Recinto_N(){
		
  		$recinto= Recinto::execute_select(Recintos);
		print_r ($recinto[0]["REC_NOMBRE"]);	
	}
	
	public static function InsertarR($Nombre ,$Calle, $Edificio, $urb, $lug){
		$valores = array();
		$valores[0]=$Nombre;
		$valores[1]=$Calle;
		$valores[2]=$Edificio;
		$valores[3]=$urb;
		$valores[4]=$lug;
		$query=UTIL_STRING::concatenate(Agregar_recinto,$valores);
		print $query;
		Recinto::execute_query($query);	
	}
	
	public static function actulizarR_E_L($Edificio, $lug){
		$valores= array();
		$valores[0]=$Edificio;
		$valores[1]=$lug;
		$query=UTIL_STRING::concatenate(Actualizar_recinto,$valores);
		Recinto::execute_query($query);		
		}
		
		public static function eliminarR($codigo){
				$valores= array();
				$valores[0]= $codigo;
				$query = UTIL_STRING::concatenate(Eliminar_recinto,$valores);
				Recinto::execute_query($query);
				
			}
}
    
	Recinto::eliminarR(21);

?>