<?PHP

include_once 'Util_Database.php';
include_once 'Util_String.php';

define('ccs','select * from CENTRO_COMERCIAL');
define('cc_id',"select * from CENTRO_COMERCIAL where CC_CODIGO=%");
define('AgregarCC',"insert into CENTRO_COMERCIAL values(cc_codigo.nextval,'%',%)");
define('ActualizarCC',"update CENTRO_COMERCIAL set CC_NOMBRE='%',CC_FK_LUGAR=% where CC_CODIGO= %");
define('EliminarCC',"delete from CENTRO_COMERCIAL where CC_CODIGO = %");

abstract class CentroComercial extends Util_DataBase {
	
	private $Codigo;
	private $Nombre;
	private $lug;
	
	
	public static function CentroComercialN(){
		
  		$cc= CentroComercial::execute_select(ccs);
		return $cc;	
	}
	
	public static function CCID($Codigo){
		$valores = array();
		$valores[0]=$Codigo;
		$query=UTIL_STRING::concatenate(cc_id,$valores);
  		$cc= CentroComercial::execute_select($query);
		return $cc;	
	}
	
	public static function InsertarCC($Nombre , $lug){
		$valores = array();
		$valores[0]=$Nombre;
		$valores[1]=$lug;
		$query=UTIL_STRING::concatenate(AgregarCC,$valores);
		print $query;
		CentroComercial::execute_query($query);	
	}
	
	public static function ActulizarCC($Nombre ,$lug,$Codigo){
		$valores= array();
		$valores[0]=$Nombre;
		$valores[1]=$lug;
		$valores[2]=$Codigo;
		$query=UTIL_STRING::concatenate(ActualizarCC,$valores);
		CentroComercial::execute_query($query);		
		}
		
		public static function eliminarCC($codigo){
				$valores= array();
				$valores[0]= $codigo;
				$query = UTIL_STRING::concatenate(EliminarCC,$valores);
				CentroComercial::execute_query($query);
				
			}
}
    
	CentroComercial::eliminarCC(141);
	//CentroComercial::ActulizarCC('nuevo22',4,141);
	//Centrocomercial::InsertarCC('nuevioCC',3);
	//Recinto::eliminarR(21);

?>