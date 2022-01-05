<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $chemain=Formation::uploader($_FILES['img']);
    $formation = new Formation(0,$_SESSION['id_user'],$titre,$description,$dateDebut,$dateFin,$chemain,0,$type,$lieu);
    $formation->createFormation();
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='supprimer'){
    $formation=Formation::find($id);
    Formation::supprimer($id);
    unlink($formation->img);
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='modifier'){
    Formation::Modifier($id,$titre,$description,$dateDebut,$dateFin,$type,$lieu);
    header('location:../views/Mercipourvotredemande.php');
}