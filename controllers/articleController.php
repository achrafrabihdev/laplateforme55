<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
extract($_GET);
extract($_POST);
if($a=='create'){
    $chemain=Article::uploader($_FILES['img']);
    $a= new Article(0,14,$titre,$contenu,'00-00-0000',0,$chemain);
    $a->createArticle();
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='supprimer') {
    $article=Article::find($id);
    Article::supprimer($id);
    unlink($article->img);
    header('location:../views/Mercipourvotredemande.php');
}elseif($a=='modifier'){
    Article::Modifier($id,$titre,$contenu);
    header('location:../views/Mercipourvotredemande.php');
}