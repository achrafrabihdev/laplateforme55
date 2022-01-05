<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Oeuvre extends DataBase{
    private $id;
    private $artiste_id;
    private $categorie_id;
    private $nom;
    private $description;
    private $image;
    private $histoire;
    private $achetable;
    private $disponible;
    private $multiples;
    private $numeroDeTirage;
    private $totalSeries;
    private $prix;
    private $valide;
    private $hauteur;
    private $largeur;
    private $epaisseur;
    public function __construct($id,$artiste_id,$categorie_id,$nom,$description,$image,$histoire,$achetable,$disponible,$multiples,$numeroDeTirage,$totalSeries,$prix,$valide,$hauteur,$largeur,$epaisseur)
    {
        $this->id= $id;
        $this->artiste_id= $artiste_id;
        $this->categorie_id= $categorie_id;
        $this->nom= $nom;
        $this->description= $description;
        $this->image= $image;
        $this->histoire= $histoire;
        $this->achetable= $achetable;
        $this->disponible= $disponible;
        $this->multiples= $multiples;
        $this->numeroDeTirage= $numeroDeTirage;
        $this->totalSeries= $totalSeries;
        $this->prix= $prix;
        $this->valide = $valide;
        $this->hauteur = $hauteur;
        $this->largeur = $largeur;
        $this->epaisseur = $epaisseur;
    }
    public function __get($param)
    {
        return $this->$param;
    }
    public function __set($param, $value)
    {
        $this->$param = $value;
    }
    public static function uploader($info){
        $tmp=$info["tmp_name"];
        $nom=$info["name"];
        $path=pathinfo($nom);
        $ext=strtolower($path["extension"]);
        $newname=md5(date("YmdHis")."_".rand(1,9999)).".".$ext;
        $chemain="../views/images/".$newname;
        $autorise=['jpg','png','jpeg','gif'];
        if(!in_array($ext,$autorise)){
            die("ce  n'est pas un image");
        }
        if(filesize($tmp)>1024*1024*30){
            die("taille de fichier est > 30Mo");
        }
        if(!move_uploaded_file($tmp,$chemain)){
            die("error d'uplode");
        }
        return $chemain;
    }
    // id,$artiste_id,$categorieArt_id,$nom,$description,$image,$histoire,$achetable,$disponible,$multiples,$numeroDeTirage,$totalSeries,$prix,$valide,$hauteur,$largeur,$epaisseur
    public function createOeuvre(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into Oeuvre (artiste_id,categorie_id,nom,description,image,histoire,achetable,disponible,multiples,numeroDeTirage,totalSeries,prix,valide,hauteur,largeur,epaisseur) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $rp->execute([$this->artiste_id,$this->categorie_id,$this->nom,$this->description,$this->image,$this->histoire,$this->achetable,$this->disponible,$this->multiples,$this->numeroDeTirage,$this->totalSeries,$this->prix,$this->valide,$this->hauteur,$this->largeur,$this->epaisseur]);
        } catch (PDOException $e) {
            die("Erreur de creation l'oeuvre' " . $e->getMessage());
        }
    }
    public static function supprimer($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("delete from Oeuvre where id=?");
            $rp->execute([$id]);
        } catch (PDOException $e) {
            die("erreur de suppression  d'oeuvre dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function find($id){ 
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Oeuvre where id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation l'oeuvre  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function artiste($id){ 
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from User where id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation l'artiste  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function Modifier($id,$categorie_id,$nom,$description,$histoire,$prix,$hauteur,$largeur,$epaisseur){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Oeuvre set categorie_id=?,nom=?,description=?,histoire=?,prix=?,hauteur=?,largeur=?,epaisseur=? where id =?");
            $rp->execute([$categorie_id,$nom,$description,$histoire,$prix,$hauteur,$largeur,$epaisseur,$id]);
        } catch (PDOException $e) {
            die("erreur de modification  de l'oeuvre dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function all(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Oeuvre");
            $rp->execute([]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les oeuvres  depuis la base de donnees " . $e->getMessage());
        }
    }
}
