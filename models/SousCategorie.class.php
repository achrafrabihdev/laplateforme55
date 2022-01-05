<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class SousCategorie extends DataBase{
    private $id;
    private $categorie_id;
    private $nom;
 
    function __construct($id,$categorie_id,$nom)
 {
     $this->id=$id;
     $this->categorie_id=$categorie_id;
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
 public static function categorie($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select categorie.* from souscategorie,categorie WHERE souscategorie.categorie_id=categorie.id and souscategorie.id=?");
        $rp->execute([$id]);
        $resultat =  $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation le categorie des oeuvres  depuis la base de donnees " . $e->getMessage());
    }
}
}