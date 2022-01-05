<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class CategorieArt extends DataBase{
    private $id;
    private $nom;
 
    function __construct($id,$nom)
 {
     $this->id=$id;
     $this->nom=$nom;
  
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }
 public static function artistes($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select artiste.* from artiste a,artiste_categorieart ac,categorieart c where a.user_id=ac.artiste_id and ac.categorieart_id=categorieart.id and c.id=? ");
        $rp->execute([$id]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation les artistes  depuis la base de donnees " . $e->getMessage());
    }
}
}