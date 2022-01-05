<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Admin extends DataBase{
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
    public static function valideRole($user_id,$role_id,$valide){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Role_User set valide ? where user_id = ? and role_id = ?");
            $rp->execute([$valide,$user_id,$role_id]);
        } catch (PDOException $e) {
            die("erreur de valider ce role dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function valideArticle($id,$valide){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Article set valide = ? where id = ?");
            $rp->execute([$valide,$id]);
        } catch (PDOException $e) {
            die("erreur de valider l'article dans  la base de donnees " . $e->getMessage());
        }
    }

    public static function valideEvenement($id,$valide){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Evenement set valide = ? where id = ?");
            $rp->execute([$valide,$id]);
        } catch (PDOException $e) {
            die("erreur de valider l'evenement dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function valideFormation($id,$valide){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Formation set valide = ? where id = ?");
            $rp->execute([$valide,$id]);
        } catch (PDOException $e) {
            die("erreur de valider la formation dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function valideOeuvre($id,$valide){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Oeuvre set valide = ? where id = ?");
            $rp->execute([$valide,$id]);
        } catch (PDOException $e) {
            die("erreur de valider l'oeuvre dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function valideProjet($id,$valide){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Projet set valide = ? where id = ?");
            $rp->execute([$valide,$id]);
        } catch (PDOException $e) {
            die("erreur de valider le projet dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function enchereStatus($id,$active){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update section set active = ? where id = ?");
            $rp->execute([$active,$id]);
        } catch (PDOException $e) {
            die("erreur de changer le status du section dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function section($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from section where id = ? ");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation le section  depuis la base de donnees " . $e->getMessage());
        }
    }
}