<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $p = new Projet(0,$_SESSION['id_user'],$titre,$description,$besoin,0,0);
    $p->createProjet();
    header('location:../views/mesprojet.php');
}elseif($a=='termine'){
    Projet::termine($id);
    header('location:../views/mesprojet.php');
}