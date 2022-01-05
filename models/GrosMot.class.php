<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class GrosMot extends DataBase{
    private $id;
    private $mot;
 
    function __construct($id,$mot)
 {
    $this->id = $id;
    $this->mot = $mot;
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }
 public function createGrosMot(){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("insert into GrosMot (mot) values (?)");
        $rp->execute([$this->mot]);
    } catch (PDOException $e) {
        die("Erreur de creation le gros mot " . $e->getMessage());
    }
}
public static function allGrosMots(){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select * from GrosMot");
        $rp->execute([]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation les gros mots  depuis la base de donnees " . $e->getMessage());
    }
}

}