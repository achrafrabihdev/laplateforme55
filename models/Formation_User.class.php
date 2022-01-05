<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Formation_User extends DataBase{
    private $user_id;
    private $formation_id;
 
    function __construct($user_id,$formation_id)
 {
     $this->user_id=$user_id;
     $this->formation_id=$formation_id;
  
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }


}