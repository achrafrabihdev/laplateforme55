<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Formation extends DataBase{
    private $id;
    private $formateur_id;
    private $titre;
    private $description;
    private $dateDebut;
    private $dateFin;
    private $img;
    private $valide;
    private $type;
    private $lieu;
    public function __construct($id,$formateur_id,$titre,$description,$dateDebut,$dateFin,$img,$valide,$type,$lieu)
    {
        $this->id= $id;
        $this->formateur_id= $formateur_id;
        $this->titre= $titre;
        $this->description= $description;
        $this->dateDebut= $dateDebut;
        $this->dateFin= $dateFin;
        $this->img = $img;
        $this->valide = $valide;
        $this->type = $type;
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
    public static function formateur($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select user.* from user where id=?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation le formateur  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function users($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select user.* from formation f,formation_user fu,user u where f.id=fu.formation_id and fu.user_id=u.id and f.id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les usitilisateurs  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function allFormations(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from formation");
            $rp->execute([]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les formations  depuis la base de donnees " . $e->getMessage());
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
    public function createFormation(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into Formation (formateur_id,titre,description,dateDebut,dateFin,img,valide,type,lieu) values (?,?,?,?,?,?,?,?,?)");
            $rp->execute([$this->formateur_id,$this->titre,$this->description,$this->dateDebut,$this->dateFin,$this->img,$this->valide,$this->type,$this->lieu]);
        } catch (PDOException $e) {
            die("Erreur de creation la formation " . $e->getMessage());
        }
    }
    public static function supprimer($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("delete from Formation where id=?");
            $rp->execute([$id]);
        } catch (PDOException $e) {
            die("erreur de suppression  de formation dans  la base de donnees " . $e->getMessage());
        }
    }
    public static function find($id){ 
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Formation where id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation la formation  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function Modifier($id,$titre,$description,$dateDebut,$dateFin,$type,$lieu){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("update Formation set titre=? ,description = ? , dateDebut = ? , dateFin = ?, type= ? , lieu = ? where id =?");
            $rp->execute([$titre,$description,$dateDebut,$dateFin,$type,$lieu,$id]);
        } catch (PDOException $e) {
            die("erreur de modification  de la formation dans  la base de donnees " . $e->getMessage());
        }
    }
}
