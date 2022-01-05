<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Acheteur extends DataBase{
    private $user_id;
    public function __construct($user_id)
    {
        $this->user_id=$user_id;
    }
    public function __get($param)
    {
        return $this->$param;
    }
    public function __set($param, $value)
    {
        $this->$param = $value;
    }
    public static function commandes($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select commandes.* from commande c,acheteur a where c.acheteur_id=a.user_id and a.user_id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les commends  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function createAcheteur($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into acheteur (user_id) values (?)");
            $rp->execute([$id]);
        } catch (PDOException $e) {
            die("Erreur de l'inscription " . $e->getMessage());
        }
    }
}
