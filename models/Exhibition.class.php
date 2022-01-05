<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Exhibition extends DataBase{
    private $id;
    private $artiste_id;
    private $titre;
    private $description;
    private $theme;
    private $dateDebut;
    private $dateFin;
    private $img;
    private $valide;
    private $lieu;
    public function __construct($id,$artiste_id,$titre,$description,$theme,$dateDebut,$dateFin,$img,$valide,$lieu)
    {
        $this->id= $id;
        $this->artiste_id= $artiste_id;
        $this->titre= $titre;
        $this->description= $description;
        $this->theme = $theme;
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
    public static function allExhibitions(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from exhibition");
            $rp->execute([]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les  depuis la base de donnees " . $e->getMessage());
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
    public function createExhibition(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into Exhibition (artiste_id,titre,description,theme,dateDebut,dateFin,img,valide,lieu) values (?,?,?,?,?,?,?,?,?)");
            $rp->execute([$this->artiste_id,$this->titre,$this->description,$this->theme,$this->dateDebut,$this->dateFin,$this->img,$this->valide,$this->lieu]);
        } catch (PDOException $e) {
            die("Erreur de creation l'exhibition " . $e->getMessage());
        }
    }
    public static function supprimer($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("delete from Exhibition where id=?");
            $rp->execute([$id]);
        } catch (PDOException $e) {
            die("erreur de suppression  d'exhibiton dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function find($id){ 
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Exhibition where id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation l'exhibiton  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function Modifier($id,$titre,$description,$theme,$dateDebut,$dateFin,$lieu){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Exhibition set titre=? ,description = ? ,theme = ?, dateDebut = ? , dateFin = ?  , lieu = ? where id =?");
            $rp->execute([$titre,$description,$theme,$dateDebut,$dateFin,$lieu,$id]);
        } catch (PDOException $e) {
            die("erreur de modification  de l'exhibiton dans  la base de donnees " . $e->getMessage());
        }
    }
}
