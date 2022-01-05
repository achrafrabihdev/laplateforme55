<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $chemain=Exhibition::uploader($_FILES['img']);
    $e = new Exhibition(0,$_SESSION['id_user'],$titre,$description,$theme,$dateDebut,$dateFin,$chemain,0,$lieu);
    $e->createExhibition();
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='supprimer'){
    $e=Exhibition::find($id);
    Exhibition::supprimer($id);
    unlink($e->img);
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='modifier'){
    Exhibition::Modifier($id,$titre,$description,$theme,$dateDebut,$dateFin,$lieu);
    header('location:../views/Mercipourvotredemande.php');
}