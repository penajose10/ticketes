<?PHP

include_once 'Util_Database.php';
include_once 'Util_String.php';

define('Recintos','select * from RECINTO');
define('Recinto_id',"select * from RECINTO where REC_CODIGO=%");
define('Agregar_recinto',"insert into RECINTO values(rec_codigo.nextval,'%','%','%','%',%)");
define('Actualizar_recinto',"update RECINTO set REC_NOMBRE='%',REC_CALLE='%',REC_EDIFICIO= '%',REC_URBANIZACION='%', REC_FK_LUGAR=% where REC_CODIGO= %");
define('Eliminar_recinto',"delete from RECINTO where REC_CODIGO = %");

abstract class Recinto extends Util_DataBase {
	
	private $Codigo;
	private $Nombre;
	private $Calle;
	private $Edificio;
	private $urb;
	private $lug;
	
	
	public static function RecintoN(){
		
  		$recinto= Recinto::execute_select(Recintos);
		return $recinto;	
	}
	
	public static function RecintoID($Codigo){
		$valores = array();
		$valores[0]=$Codigo;
		$query=UTIL_STRING::concatenate(Recinto_id,$valores);
  		$recinto= Recinto::execute_select($query);
		return $recinto;	
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
	
	public static function ActulizarR($Nombre ,$Calle, $Edificio, $urb, $lug,$Codigo){
		$valores= array();
		$valores[0]=$Nombre;
		$valores[1]=$Calle;
		$valores[2]=$Edificio;
		$valores[3]=$urb;
		$valores[4]=$lug;
		$valores[5]=$Codigo;
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
    
	//Recinto::eliminarR(21);

?>