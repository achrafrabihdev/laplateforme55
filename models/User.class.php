<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class User extends DataBase{
    private $id;
    private $prenom;
    private $nom;
    private $email;
    private $mdp;
    private $numeroDeTelephone;
    private $adresse;
    private $paysOrigine;
    private $sexe;
    private $dateDeNaissance;
    private $image;
    public function __construct($id=0,$prenom,$nom,$email,$mdp,$numeroDeTelephone,$adresse,$paysOrigine,$sexe,$dateDeNaissance,$image)
    {
        $this->id=$id;
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->email=$email;
        $this->mdp=$mdp;
        $this->numeroDeTelephone=$numeroDeTelephone;
        $this->adresse=$adresse;
        $this->paysOrigine=$paysOrigine;
        $this->sexe=$sexe;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->image =$image;
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
    public function signUp(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into user (prenom,nom,email,mdp,numeroDeTelephone,adresse,paysOrigine,sexe,dateDeNaissance,image) values (?,?,?,?,?,?,?,?,?,?)");
            $rp->execute([$this->prenom,$this->nom,$this->email,$this->mdp,$this->numeroDeTelephone,$this->adresse,$this->paysOrigine,$this->sexe,$this->dateDeNaissance,$this->image]);
        } catch (PDOException $e) {
            die("Erreur de l'inscription " . $e->getMessage());
        }
    }
//     public static function signIn($email)
// {
//     try {
//         self::connect_db();
//         $rp = self::$cnx->prepare("select * from user where email = ?");
//         $rp->execute([$email]);
//         $resultat =  $rp->fetch();
//         if (!empty($resultat)) {
//             session_start();
//             $_SESSION["id_user"] = $resultat->id;
//             $_SESSION["prenom"] = $resultat->prenom;
//             $_SESSION["nom"] = $resultat->nom;
//             return $resultat;
//         } else {
//             return 0;
//         }
//     } catch (PDOException $e) {
//         die("erreur de  conexion" . $e->getMessage());
//     }
// }
    public function signUpArtiste(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into a (prenom,nom,email,mdp,numeroDeTelephone,adresse,paysOrigine,sexe) values (?,?,?,?,?,?,?,?)");
            $rp->execute([$this->prenom,$this->nom,$this->email,$this->mdp,$this->numeroDeTelephone,$this->adresse,$this->paysOrigine,$this->sexe]);
        } catch (PDOException $e) {
            die("Erreur de l'inscription " . $e->getMessage());
        }
    }
    public static function roles($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select role_id from role_user where user_id=?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les roles  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function formations($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select formation.* from user u,formation_user fu,formation f where u.id=fu.user_id and f.id=fu.formation_id and u.id=?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les formations  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function findByEmail($email){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from user where email = ?");
            $rp->execute([$email]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation l'utilisateur  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function myEvents($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Evenement where user_id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les evenements  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function find($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from user where id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetch();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation l'utolisateur'  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function mesEvenements($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("select * from Evenement where user_id = ?");
            $rp->execute([$id]);
            $resultat =  $rp->fetchAll();
            return $resultat;
        } catch (PDOException $e) {
            die("erreur de  recuperation les oeuvres  depuis la base de donnees " . $e->getMessage());
        }
    }
    public static function supprimer($id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("delete from user where id=?");
            $rp->execute([$id]);
        } catch (PDOException $e) {
            die("erreur de suppression  d'utilisateur dans  la base de donnees " . $e->getMessage());
        }
    }
}