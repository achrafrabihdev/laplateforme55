<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Editeur extends DataBase{
    private $uer_id;
 
    function __construct($user_id)
 {
     $this->id=$user_id;
  
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }
public static function articles($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select * from Article where editeur_id = ?");
        $rp->execute([$id]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation les articles  depuis la base de donnees " . $e->getMessage());
    }
}
}