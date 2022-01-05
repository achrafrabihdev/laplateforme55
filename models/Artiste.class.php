<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Artiste extends DataBase{
    private $user_id;
    private $categorieArt_id;
    private $artiste_interne;
    private $artiste_donateur;
    private $biographie;
    private $damarcheArtistique;
    private $temoignages;
    private $cin;
    private $passeport;
    private $numeroDeCompteBancaire;
    private $portfolio;
    public function __construct($user_id=0,$categorieArt_id,$artiste_interne,$artiste_donateur,$biographie,$damarcheArtistique=null,$temoignages=null,$cin=null,$passeport=null,$numeroDeCompteBancaire=null,$portfolio=null)
    {
        $this->user_id= $user_id;
        $this->categorieArt_id= $categorieArt_id;
        $this->artiste_interne= $artiste_interne;
        $this->artiste_donateur= $artiste_donateur;
        $this->biographie= $biographie;
        $this->damarcheArtistique= $damarcheArtistique;
        $this->temoignages= $temoignages;
        $this->cin= $cin;
        $this->passeport= $passeport;
        $this->numeroDeCompteBancaire= $numeroDeCompteBancaire;
        $this->portfolio= $portfolio;
    }
    public function __get($param)
    {
        return $this->$param;
    }
    public function __set($param, $value)
    {
        $this->$param = $value;
    }
    public function signUpArtiste(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into artiste (user_id,categorieArt_id,artiste_interne,artiste_donateur,biographie) values (?,?,?,?)");
            $rp->execute([$this->user_id,$this->categorieArt_id,$this->artiste_interne,$this->artiste_donateur,$this->biographie]);
        } catch (PDOException $e) {
            die("Erreur de l'inscription " . $e->getMessage());
        }
    }
    public static function oeuvres($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select oeuvre.* from oeuvre where artiste_id=?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les oeuvres  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function mesExhibitions($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from exhibition where artiste_id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les exhibitions  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function categoriearts($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select categorieart.* from categorieart,artiste_categorieart,artiste where categorieart.id=artiste_categorieart.categorieart_id and artiste_categorieart.artiste_id = artiste.user_id and artiste.user_id=?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les categories artistes  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function createArtiste($id,$interne,$donateur,$biographie){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into artiste (user_id,artiste_interne,artiste_donateur,biographie) values (?,?,?,?)");
            $rp->execute([$id,$interne,$donateur,$biographie]);
        } catch (PDOException $e) {
            die("Erreur de l'inscription " . $e->getMessage());
        }
    }
    public static function all(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select artiste.*,user.* from artiste ,user ,role_user  where artiste.user_id = user.id and user.id = role_user.user_id and role_user.role_id = 2 ");
            $rp->execute([]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les artistes artistes  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function mesOeuvres($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Oeuvre where artiste_id = ? ");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les oeuvres depuis la base de donnees " . $e->getMessage());
        }
    }
}