<?php
//include ('DataBase.class.php');
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Article_Commantaire extends DataBase{
    private $article_id;
    private $commantaire_id;
 
    function __construct($article_id,$commantaire_id)
 {
    $this->article_id = $article_id;
    $this->commantaire_id = $commantaire_id;
 }
 public function __get($param)
 {
     return $this->$param;
 }
 public function __set($param, $value)
 {
     $this->$param = $value;
 }
 public function createArticleCommantaire(){
    try {
        self::connect_db();
        $rp = self::$cnx->prepare("insert into article_commantaire (article_id,commantaire_id) values (?,?)");
        $rp->execute([$this->article_id,$this->commantaire_id]);
    } catch (PDOException $e) {
        die("Erreur de creation l'article_commantaire " . $e->getMessage());
    }
}

}