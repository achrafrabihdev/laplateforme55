<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Offre extends DataBase{
    private $id;
    private $user_id;
    private $titre;
    private $description;
    private $offretype;
    private $datecreation;
    private $img;
    private $valide;
    public function __construct($id,$user_id,$titre,$description,$offretype,$datecreation,$img,$valide)
    {
        $this->id= $id;
        $this->user_id = $user_id;
        $this->titre = $titre;
        $this->description = $description;
        $this->offretype = $offretype;
        $this->datecreation = $datecreation;
        $this->img = $img;
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
    public function createOffre(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into Offre (user_id,titre,description,offretype,datecreation,img,valide) values (?,?,?,?,CURDATE(),?,?)");
            $rp->execute([$this->user_id,$this->titre,$this->description,$this->offretype,$this->img,$this->valide]);
        } catch (PDOException $e) {
            die("Erreur de creation l'offre" . $e->getMessage());
        }
    }
    public static function supprimer($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("delete from Offre where id=?");
            $rp->execute([$id]);
        } catch (PDOException $e) {
            die("erreur de suppression  d'offre dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function find($id){ 
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Offre where id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation l'offre  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function Modifier($id,$titre,$description,$offretype){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Offre set titre = ? ,description = ? , offretype = ?  = where id =?");
            $rp->execute([$titre,$description,$offretype,$id]);
        } catch (PDOException $e) {
            die("erreur de modification  de l'offre dans  la base de donnees " . $e->getMessage());
        }
    }
}
