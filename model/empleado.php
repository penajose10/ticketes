<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';

define ('empleados','select * from EMPLEADO');
define('empleado_nombre',"select * from EMPLEADO where emp_Nombre='%' AND emp_Apellido='%'");
define("agregar_empl","INSERT INTO EMPLEADO  values (emp_id.nextval,'%','%','%','%','%','%','%', to_date('%','yyyy-mm-dd'),to_date('%','yyyy-mm-dd'),'%','%','%','%','%','%','%','%')");
define('actualiza_emp',"UPDATE EMPLEADO SET EMP_CI='%', EMP_NOMBRE='%',EMP_APELLIDO='%', EMP_CALLE='%',EMP_URB='%',EMP_EDIFICIO='%',EMP_SEXO_EMP='%',EMP_FECHA_NACIMIENTO=to_date('%','yyyy-mm-dd'),EMP_FECHA_TRABAJO=to_date('%','yyyy-mm-dd'),EMP_JEFE='%',EMP_TIPO_EMP='%',EMP_NIVEL_ESTUDIO='%',EMP_FK_LUGAR_PAIS=%,EMP_FK_LUGAR_CIUDAD=%,EMP_NICKNAME='%',EMP_CORREO='%',EMP_CLAVE='%' where EMP_ID=%");
define("eliminar_emp","DELETE FROM EMPLEADO where emp_id=%");
define("Empleado_id","select * from EMPLEADO where EMP_ID=%");





abstract class EMPLEADO extends Util_Database {
    
    private $emp_id;
    private $emp_Ci;
    private $emp_Nombre;
    private $emp_Apellido;
    private $emp_Calle;
    private $emp_urb;
    private $emp_edif;
    private $emp_Sexo_emp;
    private $emp_Fecha_Nacimiento;
    private $emp_Fecha_Trabajo;
    private $emp_Jefe;
    private $emp_Tipo_emp;
    private $emp_Nivel_Estudio;
    private $emp_Lugar_Pais;
    private $emp_Lugar_Ciudad;
    private $emp_Nickname;
    private $emp_Correo;
    private $emp_Clave;


    public static function F_empleado() {

     $empleado =EMPLEADO::execute_select(empleados);
     return $empleado;
 
        //print_r($empleado);

    }
  

    public static function f_select_nombres_empleados($nombreempleado, $apellidoempleado){

     $values = array();
        $values[0]= $nombreempleado;
        $values[1]= $apellidoempleado;
        $query= Util_String::concatenate(empleado_nombre, $values);
        //print_r($query);
        $ejecucion=EMPLEADO::execute_select($query);
        //print_r($ejecucion);

    }

    public static function agregar_empleado($ci,$nombre,$apellido,$calle,$urb,$edif,$sexo,$fenac,$fetra,$empjefe,$tipo,$nivelest,$fk_pais,$fk_ciudad,$nickname,$correo,$clave){

        $values = array();
        $values[0]= $ci;
        $values[1]= $nombre;
        $values[2]= $apellido;
        $values[3]= $calle;
        $values[4]= $urb;
        $values[5]= $edif;
        $values[6]= $sexo;
        $values[7]= $fenac;
        $values[8]= $fetra;
        $values[9]= $empjefe;
        $values[10]= $tipo;
        $values[11]= $nivelest;
        $values[12]= $fk_pais;
        $values[13]= $fk_ciudad;
        $values[14]= $nickname;
        $values[15]= $correo;
        $values[16]= $clave;
        $query= Util_String::concatenate(agregar_empl, $values);
        //print $query;
        EMPLEADO::execute_query($query);

    }





    public static function actualizar($ci,$nombre,$apellido,$calle,$urb,$edif,$sexo,$fechanac,$fechatra,$empjefe,$tipo,$nivelest,$fk_pais,$fk_ciudad,$nickname,$correo,$clave,$codigo){

      $values = array();
        $values[0]= $ci;
        $values[1]= $nombre;
        $values[2]= $apellido;
        $values[3]= $calle;
        $values[4]= $urb;
        $values[5]= $edif;
        $values[6]= $sexo;
        $values[7]= $fechanac;
        $values[8]= $fechatra;
        $values[9]= $empjefe;
        $values[10]= $tipo;
        $values[11]= $nivelest;
        $values[12]= $fk_pais;
        $values[13]= $fk_ciudad;
        $values[14]= $nickname;
        $values[15]= $correo;
        $values[16]= $clave;
        $values[17]= $codigo;

        $query= Util_String::concatenate(actualiza_emp, $values);
       //print $query;
        EMPLEADO::execute_query($query);
    }



    public static function eliminar_empleado($id){

        $values = array();
        $values[0]= $id;



        $query= Util_String::concatenate(eliminar_emp, $values);
        //print $query;
        EMPLEADO::execute_query($query);
    }


    public static function empleadoID($Codigo){
        $valores = array();
        $valores[0]=$Codigo;
        $query=UTIL_STRING::concatenate(Empleado_id,$valores);
        $empleado= EMPLEADO::execute_select($query);
        return $empleado; 

    }



  
   


}


//EMPLEADO::f_select_nombres_empleados('aa','aa');
//EMPLEADO::actualizar('prueba cambio nombre',69);






?> 