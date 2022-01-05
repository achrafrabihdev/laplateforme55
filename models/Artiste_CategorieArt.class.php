<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Artiste_CategorieArt extends DataBase{
    private $artiste_id;
    private $categorieArt_id;
    public function __construct($artiste_id,$categorieArt_id)
    {
        $this->artiste_id=$artiste_id;
        $this->categorieArt_id=$categorieArt_id;
    }
    public function __get($param)
    {
        return $this->$param;
    }
    public function __set($param, $value)
    {
        $this->$param = $value;
    }
    public static function createArtisteCategorieart($artiste_id,$categorieArt_id){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into artiste_categorieart (artiste_id,categorieart_id) values (?,?)");
            $rp->execute([$artiste_id,$categorieArt_id]);
        } catch (PDOException $e) {
            die("Erreur de creation l'artiste_categorieart " . $e->getMessage());
        }
    }
}