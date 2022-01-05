<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Formation_User extends DataBase{
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
    public static function users($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select user.* from role r,user u,role_user ru where r.id=ru.role_id and ru.user=u.id and r.id= ?");
        $rp->execute([$id]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation les usitilisateurs depuis la base de donnees " . $e->getMessage());
    }
}

}