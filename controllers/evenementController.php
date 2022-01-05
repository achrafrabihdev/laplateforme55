<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $chemain=Evenement::uploader($_FILES['img']);
    $event = new Evenement(0,$_SESSION['id_user'],$titre,$description,$dateDebut,$dateFin,$chemain,0,$lieu);
    $event->createEvenement();
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='supprimer'){
    $event=Evenement::find($id);
    Evenement::supprimer($id);
    unlink($event->img);
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='modifier'){
    Evenement::Modifier($id,$titre,$description,$dateDebut,$dateFin,$type,$lieu);
    header('location:../views/Mercipourvotredemande.php');
}