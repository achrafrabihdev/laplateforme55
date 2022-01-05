<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $chemain=Formation::uploader($_FILES['img']);
    $o = new Offre(0,14,$titre,$description,$offretype,'00-00-0000',$chemain,0);
    $o->createOffre();
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='supprimer'){
    $o=Offre::find($id);
    Offre::supprimer($id);
    unlink($o->img);
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='modifier'){
    Offre::Modifier($id,$titre,$description,$offretype);
    header('location:../views/Mercipourvotredemande.php');
}