<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Evenement extends DataBase{
    private $id;
    private $user_id;
    private $titre;
    private $description;
    private $dateDebut;
    private $dateFin;
    private $img;
    private $valide;
    private $lieu;
    public function __construct($id,$user_id,$titre,$description,$dateDebut,$dateFin,$img,$valide,$lieu)
    {
        $this->id= $id;
        $this->user_id= $user_id;
        $this->titre= $titre;
        $this->description= $description;
        $this->dateDebut= $dateDebut;
        $this->dateFin= $dateFin;
        $this->img = $img;
        $this->valide = $valide;
        $this->lieu = $lieu;
    }
    public function __get($param)
    {
        return $this->$param;
    }
    public function __set($param, $value)
    {
        $this->$param = $value;
    }
    public static function allEvents(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from evenement");
            $rp->execute([]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les evenements  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function user($id){ 
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select user.* from user where id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation l'utilisateur  depuis la base de donnees " . $e->getMessage());
        }
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
            die("taille de fichier est > 8Mo");
        }
        if(!move_uploaded_file($tmp,$chemain)){
            die("error d'uplode");
        }
        return $chemain;
    }
    public function createEvenement(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into Evenement (user_id,titre,description,dateDebut,dateFin,img,valide,lieu) values (?,?,?,?,?,?,?,?)");
            $rp->execute([$this->user_id,$this->titre,$this->description,$this->dateDebut,$this->dateFin,$this->img,$this->valide,$this->lieu]);
        } catch (PDOException $e) {
            die("Erreur de creation l'evenement " . $e->getMessage());
        }
    }
    public static function supprimer($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("delete from Evenement where id=?");
            $rp->execute([$id]);
        } catch (PDOException $e) {
            die("erreur de suppression  d'evenement dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function find($id){ 
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Evenement where id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation l'evenement  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function Modifier($id,$titre,$description,$dateDebut,$dateFin,$type,$lieu){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Evenement set titre = ? ,description = ? , dateDebut = ? , dateFin = ? , type = ? , lieu = ? where id =?");
            $rp->execute([$titre,$description,$dateDebut,$dateFin,$type,$lieu,$id]);
        } catch (PDOException $e) {
            die("erreur de modification  de l'evenement dans  la base de donnees " . $e->getMessage());
        }
    }
}
