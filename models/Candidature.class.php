<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
class Candidature extends DataBase{
    private $id;
    private $prenom;
    private $nom;
    private $telephone;
    private $pays;
    private $ville;
    private $adresse;
    private $infoplus;
    private $type;
    private $fk_id;
    public function __construct($id,$prenom,$nom,$telephone,$pays,$ville,$adresse,$infoplus,$type,$fk_id)
    {
        $this->id= $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->telephone = $telephone;
        $this->pays = $pays;
        $this->ville = $ville;
        $this->adresse = $adresse;
        $this->infoplus = $infoplus;
        $this->type = $type;
        $this->fk_id = $fk_id;
    }
    public function __get($param)
    {
        return $this->$param;
    }
    public function __set($param, $value)
    {
        $this->$param = $value;
    }
    public function createCandidature(){
        try {
            self::connect_db();
            $rp = self::$cnx->prepare("insert into Candidature (prenom,nom,telephone,pays,ville,adresse,infoplus,type,fk_id) values (?,?,?,?,?,?,?,?,?)");
            $rp->execute([$this->prenom,$this->nom,$this->telephone,$this->pays,$this->ville,$this->adresse,$this->infoplus,$this->type,$this->fk_id]);
        } catch (PDOException $e) {
            die("Erreur de creation la Candidature " . $e->getMessage());
        }
    }
}
