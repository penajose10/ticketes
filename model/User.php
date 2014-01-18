<?php

include_once 'Util_Database.php';
include_once 'Util_String.php';
include_once 'Util_File.php';

define ("login", "select * from user where username= % and password = % and is_active=1");
define ("select_system_users", "select * from user where  is_admin=0 and is_staff=0");
define ("select_staff_users", "select * from user where  is_admin=0 and is_staff=1");
define ("add_new_user","INSERT INTO user (email, username, password, id, is_staff,full_name,role,department,business,is_admin) VALUES ('%', '%', '%', NULL, '%', '%', '%', '%', '%', '%')");
define ("disable_user","Update user set is_active=0 where username='%'");
define ("change_user_password","Update user set password='%' where username='%'");
define ("change_user_email","Update user set email='%' where username='%'");
define ("enable_user","Update user set is_active=1 where username='%'");
define ("delete_user","Delete from user  where username='%'");
define ("index", "<?php ?>");
class User extends Util_DataBase {
    
    private $email;
    private $username;
    private $password;
    private $is_staff;
    private $fullname;
    private $role;
    private $department;
    private $business;
    private $is_admin;
    
    public function User( $username, $password, $email, $is_staff, $fullname, $role, $department, $business, $is_admin){
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->is_staff = $is_staff;
        $this->fullname = $fullname;
        $this->role = $role;
        $this->department = $department;
        $this->business = $business;
        $this->is_admin = $is_admin;
    }
    
    public function save(){
        $values = array();
        $values[0] =  $this->email;
        $values[1] =  $this->username;
        $values[2] =  $this->password;
        $values[3] = $this->is_staff;
        $values[4] = $this->fullname;
        $values[5] = $this->role;
        $values[6] = $this->department;
        $values[7] = $this->business;
        $values[8] = $this->is_admin;
        $query = Util_String::concatenate(add_new_user, $values);
        User::execute_query($query);
        Util_File::create_directory($this->username, uploads, 777);
        Util_File::create_file('../uploads/'.$this->username.'/', 'index', 'php', index);
        Util_File::create_directory('creacion', uploads.$this->username.'/', 777);
        Util_File::create_file('../uploads/'.$this->username.'/creacion/', 'index', 'php', index);
        Util_File::create_directory('medios', uploads.$this->username.'/', 777);
        Util_File::create_file('../uploads/'.$this->username.'/medios/', 'index', 'php', index);
        Util_File::create_directory('ventas', uploads.$this->username.'/', 777);
        Util_File::create_file('../uploads/'.$this->username.'/ventas/', 'index', 'php', index);
        return true;
    }
    
    public static function user_login($username, $password){
        $values = array();
        $values[0] = "'".$username."'";
        $values[1] = "'".$password."'";
        $query = Util_String::concatenate(login, $values);
        $user = User::execute_select($query);
        if (sizeof($user) == 1){
         
            $_SESSION['username'] = $username;
            $_SESSION['is_staff'] = false;
            $_SESSION['is_admin'] =false;
            if ($user[0]['is_staff'] == 1){
                 $_SESSION['is_staff'] = true;
            }
            if ($user[0]['is_admin'] == 1){
                 $_SESSION['is_admin'] = true;
            }
            return true;
        }
        return false;
    }
    
     public static function disable_user($username){
        $values = array();
        $values[0] =$username;
        $query = Util_String::concatenate(disable_user, $values);
        $user = User::execute_query($query);
        if ($user != false){
            return true;
        }
        return false;
    }
    
     public static function change_user_password($username, $password){
        $values = array();
        $values[0] =$password;
        $values[1] =$username;
        $query = Util_String::concatenate(change_user_password, $values);
        $user = User::execute_query($query);
        if ($user != false){
            return true;
        }
        return false;
    }
     public static function change_user_email($username, $email){
        $values = array();
        $values[0] =$email;
        $values[1] =$username;
        $query = Util_String::concatenate(change_user_email, $values);
        $user = User::execute_query($query);
        if ($user != false){
            return true;
        }
        return false;
    }
     public static function delete_user($username){
        $values = array();
        $values[0] =$username;
        $query = Util_String::concatenate(delete_user, $values);
        $user = User::execute_query($query);
        if ($user != false){
            Util_File::delete_directory('../uploads/'.$username);
            return true;
        }
        return false;
    }
    
    public static function enable_user($username){
        $values = array();
        $values[0] =$username;
        $query = Util_String::concatenate(enable_user, $values);
        $user = User::execute_query($query);
        if ($user != false){
            return true;
        }
        return false;
    }
    
    public static function user_is_logged_in(){
        session_start();
        if (isset($_SESSION['username'])){
            return true;
        }
        return false;
    }
    
    public static function user_logout(){
        session_start();
        session_destroy();
        return true;
    }
    
    public static function user_files_list_creacion($username){
        $user_files = Util_File::list_files_in_directory('creacion/', uploads.$username.'/');
        return $user_files;
    }
    
    public static function user_files_list_medios($username){
        $user_files = Util_File::list_files_in_directory('medios/', uploads.$username.'/');
        return $user_files;
    }
    
    public static function user_files_list_ventas($username){
        $user_files = Util_File::list_files_in_directory('ventas/', uploads.$username.'/');
        return $user_files;
    }
    
    public static function users_list(){
        $users_list =  User::execute_select(select_system_users);;
        return $users_list;
    }
     public static function staff_list(){
        $users_list =  User::execute_select(select_staff_users);;
        return $users_list;
    }
    
    
}

?>
