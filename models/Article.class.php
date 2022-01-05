<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Article extends DataBase{
    private $id;
    private $editeur_id;
    private $titre;
    private $contenu;
    private $dateCreation;
    private $valide;
    private $image;
 
    function __construct($id,$editeur_id,$titre,$contenu,$dateCreation,$valide,$img)
 {
    $this->id= $id;
    $this->editeur_id= $editeur_id;
    $this->titre= $titre;
    $this->contenu= $contenu;
    $this->dateCreation= $dateCreation;
    $this->valide= $valide;
    $this->img = $img;
  
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }

 public static function editeur($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select * from user where id = ? ");
        $rp->execute([$id]);
        $resultat =  $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation l'editeur  depuis la base de donnees " . $e->getMessage());
    }
}
public static function allArticles(){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select * from article ");
        $rp->execute([]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation les articles  depuis la base de donnees " . $e->getMessage());
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
public function createArticle(){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("insert into Article (editeur_id,titre,contenu,dateCreation,valide,img) values (?,?,?,CURDATE(),?,?)");
        $rp->execute([$this->editeur_id,$this->titre,$this->contenu,$this->valide,$this->img]);
    } catch (PDOException $e) {
        die("Erreur de creation l'artice " . $e->getMessage());
    }
}
public static function supprimer($id){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("delete from Article where id=?");
        $rp->execute([$id]);
    } catch (PDOException $e) {
        die("erreur de suppression  d'article dans  la base de donnees " . $e->getMessage());
    }
}
public static function find($id){ 
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select * from Article where id = ?");
        $rp->execute([$id]);
        $resultat =  $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation l'article  depuis la base de donnees " . $e->getMessage());
    }
}
public static function Modifier($id,$titre,$contenu){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("update Article set titre=? ,contenu= ? where id =?");
        $rp->execute([$titre,$contenu,$id]);
    } catch (PDOException $e) {
        die("erreur de modification  de l'article dans  la base de donnees " . $e->getMessage());
    }
}
public static function commantaires($id){ 
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select commantaire.* from commantaire,article_commantaire where commantaire.id = article_commantaire.commantaire_id and article_commantaire.article_id = ? and commantaire.valide = 1");
        $rp->execute([$id]);
        $resultat =  $rp->fetchAll();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation l'article  depuis la base de donnees " . $e->getMessage());
    }
}
public static function nbrComments($id){ 
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("select count(commantaire_id) as nbr from article_commantaire where article_id = ?");
        $rp->execute([$id]);
        $resultat =  $rp->fetch();
        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation l'utilisateur  depuis la base de donnees " . $e->getMessage());
    }
}

}