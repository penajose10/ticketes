<?php

if(!@include("../Conf/Configuracion.php")){

}
else{
    include_once '../Conf/Configuracion.php';
    include_once Configuracion;
}


abstract class Util_DataBase {


    private static function mysql_connection(){

        $connection = mysql_connect(server_mysql,mysql_user,mysql_pass,mysql_db);
        mysql_select_db(mysql_db);
        return $connection;
    }

     private static function oracle_connection(){
        $connection = OCILogon (oracle_user,oracle_pass,oracle_server) or die (ocierror());
        return $connection;
    }

    
    public static function execute_mysql_query($query){
        $connection= Util_DataBase::mysql_connection();
        $execute = mysql_query($query) or die (mysql_error());
        mysql_close($connection);
        return $execute;
    }

     public static function execute_oracle_query($query){
        $connection= Util_DataBase::oracle_connection();
        $execute = ociparse($connection,$query);
        ociexecute($execute);
        ocilogoff($connection);
        return  $execute;
    }

    public static function execute_mysql_select($query){
        $connection= Util_DataBase::mysql_connection();
        $execute = mysql_query($query) or die (mysql_error());
        $values = array();
        $i = 0;
        while ($result = mysql_fetch_array($execute)){
            $values[$i] = $result;
            $i++;
        }
        mysql_close($connection);
        return $values;
    }

    public static function execute_oracle_select($query){
        $connection= Util_DataBase::oracle_connection();
        $parsed = ociparse($connection,$query);
        ociexecute($parsed);
        $values = array();
        $i = 0;
        while ($result = oci_fetch_array($parsed,OCI_BOTH)){
            $values[$i] = $result;
            $i++;
        }
        ocilogoff($connection);
        return $values;
    }

    public static function execute_select($query,$oracle = 1){
        if ($oracle == 0){
            return Util_DataBase::execute_mysql_select($query);
        }
        else {
             return Util_DataBase::execute_oracle_select($query);
        }
    }

    public static function execute_query($query,$oracle = 1){
        if ($oracle == 0){
            return Util_DataBase::execute_mysql_query($query);
        }
        else {
            return Util_DataBase::execute_oracle_query($query);
        }
    }


}

?>
