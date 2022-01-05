<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Categorie extends DataBase{
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
 public static function oeuvres($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select oeuvre.* from categorie c,oeuvre o where c.id = o.categorie_id and c.id = ?");
        $rp->execute([$id]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation les oeuvres depuis la base de donnees " . $e->getMessage());
    }
}
public static function all(){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select * from categorie");
        $rp->execute([]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation les categories des oeuvres  depuis la base de donnees " . $e->getMessage());
    }
}
public static function souscategories($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select souscategorie.* from souscategorie,categorie WHERE souscategorie.categorie_id=categorie.id and categorie.id=?");
        $rp->execute([$id]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation les sous categories des oeuvres  depuis la base de donnees " . $e->getMessage());
    }
}
}