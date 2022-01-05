<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Commande extends DataBase{
    private $id;
    private $acheteur_id;
    private $oeuvre_id;
    private $dateDeCommande;
    private  $statut;
 
    function __construct($id,$acheteur_id,$oeuvre_id,$dateDeCommande,$statut)
 {
    $this->id= $id;
    $this->acheteur_id= $acheteur_id;
    $this->oeuvre_id= $oeuvre_id;
    $this->dateDeCommande= $dateDeCommande;
    $this->statut=  $statut;
  
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }
 public static function acheteur($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select acheteur.* from acheteur a,commande c where a.user=c.acheter_id where c.commande_id=?");
        $rp->execute([$id]);
        $resultat =  $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation l'acheteur  depuis la base de donnees " . $e->getMessage());
    }
}

}