<?PHP

include_once 'Util_Database.php';
include_once 'Util_String.php';

define('lugar','select * from LUGAR');
define('lugar_Nombre_pais',"select * from LUGAR where L_TIPO_LUGAR= 'Pais'");
define('lugar_Nombre_ciudad',"select *from LUGAR where L_TIPO_LUGAR= 'Ciudad' and L_FK_LUGAR=%");
define('Agregar_lugar',"insert into LUGAR values(L_codigo.nextval,'%','%','%')");
define('Actualizar_lugar',"update Lugar set REC_EDIFICIO= '%' where REC_FK_LUGAR= %");
define('Eliminar_lugar',"delete from Lugar where REC_CODIGO = %");

abstract class Lugar extends Util_DataBase {
	
	private $Codigo;
	private $Nombre;
	private $tpl;
	private $lug;
	
	
	
	public static function lugar_N_P(){
		
  		$lugar= Lugar::execute_select(lugar_Nombre_pais);
		return $lugar;
	}
	
	public static function lugar_N_C($pais){
		
		$valores = array();
  		$valores[0]= $pais;
		$query=UTIL_STRING::concatenate(lugar_Nombre_ciudad,$valores);

		$ciudad= Lugar::execute_select($query);
		
		return $ciudad;
		
		
	}

	
	public static function InsertarL($tpl ,$Nombre, $lug){
		$valores = array();
		$valores[0]=$tpl;
		$valores[1]=$Nombre;
		$valores[2]=$lug;
		
		$query=UTIL_STRING::concatenate(Agregar_lugar,$valores);
		print $query;
		Lugar::execute_query($query);	
	}
	
	public static function actulizarL($Edificio, $lug){
		$valores= array();
		$valores[0]=$Edificio;
		$valores[1]=$lug;
		$query=UTIL_STRING::concatenate(Actualizar_Lugar,$valores);
		Lugar::execute_query($query);		
		}
		
		public static function eliminarL($codigo){
				$valores= array();
				$valores[0]= $codigo;
				$query = UTIL_STRING::concatenate(Eliminar_Lugar,$valores);
				Lugar::execute_query($query);
				
			}
}
    
	//Lugar::eliminarR(21);

?>