<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Artiste_User extends DataBase{
    private $artiste_id;
    private $user_id;
 
    function __construct($artiste_id,$user_id)
 {
    $this->artiste_id = $artiste_id;
    $this->user_id = $user_id;
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }
 public function folow(){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("insert into artiste_user (artiste_id,user_id) values (?,?)");
        $rp->execute([$this->artiste_id,$this->user_id]);
    } catch (PDOException $e) {
        die("Erreur de creation lsuivi l'artiste " . $e->getMessage());
    }
}

}