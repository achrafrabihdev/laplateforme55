<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Evenement_User extends DataBase{
    private $user_id;
    private $evenement__id;
 
    function __construct($user_id,$evenement__id)
 {
     $this->user_id=$user_id;
     $this->evenement__id=$evenement__id;
  
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