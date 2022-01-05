<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
extract($_GET);
extract($_POST);
if($a=='valideFormateur'){

}elseif($a=='valideEditeur'){

}elseif($a=='valideArticle'){
    Admin::valideArticle($id,1);
    header('location:../views/adminearticles.php');
}elseif($a=='valideEvenement'){
    Admin::valideEvenement($id,1);
}elseif($a=='valideFormation'){
    Admin::valideFormation($id,1);
    header('location:../views/admineformations.php');
}elseif($a=='valideOeuvre'){
    Admin::valideOeuvre($id,1);
    header('location:../views/admineoeuvres.php');
}elseif($a=='valideProjet'){
    Admin::valideProjet($id,1);
    header('location:../views/admineprojets.php');
}elseif($a=='createFormation'){
    $chemain=Formation::uploader($_FILES['img']);
    $formation = new Formation(0,(int)$formateur_id,$titre,$description,$dateDebut,$dateFin,$chemain,0,$type,$lieu);
    $formation->createFormation();
    header('location:../views/5-5 admin/Formation.php');
}elseif($a=='modifierFormation'){
    Formation::Modifier($id,$titre,$description,$dateDebut,$dateFin,$type,$lieu);
    header('location:../views/5-5 admin/Formation.php');
}elseif($a=='createEvenement'){
    $chemain=Evenement::uploader($_FILES['img']);
    $event = new Evenement(0,$user_id,$titre,$description,$dateDebut,$dateFin,$chemain,0,$lieu);
    $event->createEvenement();
    header('location:../views/5-5 admin/Evenement.php');
}elseif($a=='modifierEvenement'){
    Evenement::Modifier($id,$titre,$description,$dateDebut,$dateFin,$type,$lieu);
    header('location:../views/5-5 admin/Evenement.php');
}elseif($a=='login'){
    if($email == 'admin@55plateforme.com' && $mdp == 'admin123456.'){
        session_start();
        $_SESSION['admin'] = 'ilyass';
        header('location:../views/5-5 admin/index.php');
    }else{
        header('location:../views/5-5 admin/Login.php');
    }
}elseif($a=='logout'){
    session_start();
    session_unset();
    session_destroy();
    header('location:../views/5-5 admin/Login.php');
}elseif($a=='encherestatus'){
    if($enchere=='activer'){
        Admin::enchereStatus(1,1);
    }else{
        Admin::enchereStatus(1,0);
    }
    header('location:../views/5-5 admin/HomePage.php');
}