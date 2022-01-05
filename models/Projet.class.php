<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Projet extends DataBase{
    private $id;
    private $artiste_id;
    private $titre;
    private $description;
    private $besoin;
    private $valide;
    private $temine;
    public function __construct($id,$artiste_id,$titre,$description,$besoin,$valide,$termine)
    {
        $this->
        $this->artiste_id = $artiste_id;
        $this->titre = $titre;
        $this->description = $description;
        $this->besoin = $besoin;
        $this->valide = $valide;
        $this->termine = $termine;
    }
    public function __get($param)
    {
        return $this->$param;
    }
    public function __set($param, $value)
    {
        $this->$param = $value;
    }
    public function createProjet(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into Formation (artiste_id,titre,decription,besoin,valide,termine) values (?,?,?,?,?,?)");
            $rp->execute([$this->artiste_id,$this->titre,$this->description,$this->besoin,$this->termine]);
        } catch (PDOException $e) {
            die("Erreur de creation le projet " . $e->getMessage());
        }
    }
    public static function termine($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Projet set termine = 1 where id = ?");
            $rp->execute([$id]);
        } catch (PDOException $e) {
            die("erreur de valider le projet dans  la base de donnees " . $e->getMessage());
        }
    }
}