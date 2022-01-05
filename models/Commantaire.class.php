<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Commantaire extends DataBase{
    private $id;
    private $user_id;
    private $contenu;
    private $dateCreation;
    private $valide;
 
    function __construct($id,$user_id,$contenu,$dateCreation,$valide)
 {
    $this->id= $id;
    $this->user_id = $user_id;
    $this->contenu = $contenu;
    $this->dateCreation = $dateCreation;
    $this->valide = $valide;
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }
 public function createCommantaire(){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("insert into Commantaire (user_id,contenu,dateCreation,valide) values (?,?,CURDATE(),?)");
        $rp->execute([$this->user_id,$this->contenu,$this->valide]);
    } catch (PDOException $e) {
        die("Erreur de creation la commantaire " . $e->getMessage());
    }
}
public static function findByContenu($contenu){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select * from Commantaire where contenu = ? ");
        $rp->execute([$contenu]);
        $resultat =  $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation le commantaire  depuis la base de donnees " . $e->getMessage());
    }
}
public static function user($id){ 
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select * from user where id = ?");
        $rp->execute([$id]);
        $resultat =  $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation l'utilisateur  depuis la base de donnees " . $e->getMessage());
    }
}


}