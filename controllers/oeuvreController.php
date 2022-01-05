<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $chemain=Exhibition::uploader($_FILES['img']);
    $o = new Oeuvre(0,$_SESSION['id_user'],$cat,$nom,$description,$chemain,$histoire,0,1,0,0,0,$prix,0,$hauteur,$largeur,$epaisseur);
    $o->createOeuvre();
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='supprimer'){
    $o=Oeuvre::find($id);
    Oeuvre::supprimer($id);
    unlink($o->img);
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='modifier'){
    Formation::Modifier($cat,$nom,$description,$histoire,$prix,$hauteur,$largeur,$epaisseur,$id);
    header('location:../views/Mercipourvotredemande.php');
}