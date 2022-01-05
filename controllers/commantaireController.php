<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $mots = GrosMot::allGrosMots();
    $valide = 1;
    foreach($mots as $m){
        if(strpos($contenu, $m->mot) !== false){
            $valide = 0;
            break;
        }
    }
    $c = new Commantaire(0,$_SESSION['id_user'],$contenu,'00-00-0000',$valide);
    $c->createCommantaire();
    $derniereCommantaire = Commantaire::findByContenu($c->contenu);

    $ac = new Article_Commantaire($id,$derniereCommantaire->id);
    $ac->createArticleCommantaire();
    header('location:../views/detailarticle.php?id='.$id);
}