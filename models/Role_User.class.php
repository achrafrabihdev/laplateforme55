<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Role_User extends DataBase{
    private $user_id;
    private $role_id;
 
    function __construct($user_id,$role_id)
 {
     $this->user_id=$user_id;
     $this->role_id=$role_id;
  
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }
 public static function createrole($user_id,$role_id,$valide){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("insert into role_user (user_id,role_id,valide) values (?,?,?)");
        $rp->execute([$user_id,$role_id,$valide]);
    } catch (PDOException $e) {
        die("Erreur de l'inscription " . $e->getMessage());
    }
}
}