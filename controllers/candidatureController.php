<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $c = new Candidature(0,$prenom,$nom,$telephone,$pays,$ville,$adresse,$infoplus,(int)$type,(int)$fk_id);
    $c->createCandidature();
    header('location:../views/Mercipourvotredemande.php');
}