<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Formateur extends DataBase{
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
    public static function formations($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from formation where formateur_id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les formations depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function all(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select user.* from user,formateur where user.id = formateur.user_id");
            $rp->execute([]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les formateurs depuis la base de donnees " . $e->getMessage());
        }
    }
}