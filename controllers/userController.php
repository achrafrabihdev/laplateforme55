<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
extract($_GET);
extract($_POST);
if($a=='signup'){
    $chemain=Formation::uploader($_FILES['img']);
    $u = new User(0,$prenom,$nom,$email,password_hash($mdp,PASSWORD_DEFAULT),'','',$pays, ($sexe=='homme')?1:2,$dateDeNaissance,$chemain);
    $u->signUp();
    $user = User::findByEmail($email);
    if($typecompte == 'artiste'){
        Role_User::createrole($user->id,2,0);
        // if(in_array('interne',$atype)){
        //     $interne=1;
        // }else{
        //     $interne=0;
        // }
        $interne = (in_array('interne',$atype))?1:0;
        $donateur = (in_array('donateur',$atype))?1:0;
        Artiste::createArtiste($user->id,$interne,$donateur,$biographie);
        foreach($cat as $c){
            Artiste_CategorieArt::createArtisteCategorieart($user->id,intval($c));
        }
       // echo 'done';

    }else{
        //$u = new User(0,$prenom,$nom,$email,$mdp,'','','', ($sexe=='homme')?1:2);
       // $u->signUp();
       // $user = User::findByEmail($email);
        Role_User::createrole($user->id,6,0);
        Acheteur::createAcheteur($user->id);
      //  echo 'done';

    }
    setcookie('popup','votre inscription a été fait avec succes',time() + 5,'/');
    if(isset($admin) && $admin=='oui'){
        header('location:../views/5-5 admin/artiste.php');
    }else{
    header('location:../views/accueil.php');
    }
}elseif($a=='signin'){
       $user= User::findByEmail($email);
       if($user!=0){
        if(password_verify($mdp,$user->mdp)){
            session_start();
                $_SESSION["id_user"] = $user->id;
                $_SESSION["prenom"] = $user->prenom;
                $_SESSION["nom"] = $user->nom;
        }else{
            setcookie('popup','Le mot de passe entré est incorrect !',time() + 5,'/');
        }
    }else{
        setcookie('popup','L’adresse e-mail que vous avez saisie n’est pas associée à un compte !',time() + 5,'/');
    }
       $roles = User::roles($user->id);
       //echo $user->prenom.' '.$user->nom;
       $rolesid =[];
       foreach($roles as $r){
            $rolesid[]=(int) $r->role_id;
       }
       $_SESSION['roles']=$rolesid;
       header('location:../views/accueil.php');
}elseif($a=='decon'){
    session_start();
    session_unset();
    session_destroy();
    header('location:../views/accueil.php');
}elseif($a=='folow'){
    session_start();
    $f = new Artiste_User($id,$_SESSION['id_user']);
    $f->folow();
    header('location:../views/accueil.php');
}elseif($a=='supprimer'){
    $u=User::find($id);
    User::supprimer($id);
    unlink($u->image);
    header('location:../views/5-5 admin/artiste.php');
}
