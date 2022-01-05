<?php include '_header.php';
$events = User::mesEvenements($_SESSION['id_user']);
$formations = Formateur::formations($_SESSION['id_user']);
$exhibitions = Artiste::mesExhibitions($_SESSION['id_user']);
$oeuvres = Artiste::oeuvres($_SESSION['id_user']);
$u = User::find($_SESSION['id_user']);
?>
<main>
    <!-- mainHeadingHead -->
    <header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white"
        style="background-image: url(images/img113.jpg);">
        <div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
            <div class="container py-6">
                <span class="text-white mb-0" style="font-size: 60px;"><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></span>
            </div>
        </div>
    </header>
    <!-- detailTabartist -->
    <ul class="nav nav-tabs justify-content-center exhiTabList mt-4 mt-lg-8" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                aria-controls="profile" aria-selected="true">Mon profil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="exhibition-tab" data-toggle="tab" href="#exhibition" role="tab"
                aria-controls="exhibition" aria-selected="false">Mes Exhibitions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="oeuvre-tab" data-toggle="tab" href="#oeuvre" role="tab" aria-controls="oeuvre"
                aria-selected="false">Mes Œuvres</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="formation-tab" data-toggle="tab" href="#formation" role="tab"
                aria-controls="formation" aria-selected="false">Mes Formations</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="evenements-tab" data-toggle="tab" href="#evenements" role="tab"
                aria-controls="evenements" aria-selected="false">Mes Evenements</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="soutenir-tab" data-toggle="tab" href="#soutenir" role="tab" aria-controls="soutenir"
                aria-selected="false">Mon panier</a>
        </li>
    </ul>
    <div class="tab-content">
        <!-- profile-tab -->
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row mx-xl-n4">
                <div class="col-12 col-md-12 px-xl-4">
                    <!-- currExibitColumn -->
                    <article class="saContentBlock pt-6 pt-md-9 pt-lg-13 pt-xl-20">
                        <div class="container">
                            <div class="row mx-xl-n6">
                                <div class="col-12 col-md-6 px-xl-6">
                                    <div class="imgHolder shadow mb-6 mb-md-0 mt-md-2">
                                        <img src="<?=$u->image?>" class="img-fluid w-100" alt="image description">
                                    </div>
                                    <hr class="my-xl-9">

                                    <div class="btnHolder text-center">
                                        
                                        </p>
                                      
                                       
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 px-xl-6">
                                    <h1 class="mb-2"><?=$u->prenom?> <?=$u->nom?></h1>
                                    <div class="d-flex position-relative">
                                        <!-- Formulaire user -->
                                       <p> <a class="textDecorationNone colorInherit">Ne en <?=$u->dateDeNaissance?></a> <br>
                                        <a class="textDecorationNone colorInherit"><?=($u->sexe == '1')?'Homme':'Femme'?></a> <br>
                                             <a class="textDecorationNone colorInherit">E-mail :</a><a class="textDecorationNone colorInherit"><?=$u->email?></a><br>
                                             <a class="textDecorationNone colorInherit">Adresse :</a><a class="textDecorationNone colorInherit"><?=$u->adresse?> </a>
                                        </p>
                                        
                                    </div>
                                      <div class="eabDescrText eabDescrTextII fontSerif">

                                    <h4 class="fontBase mt-2 mb-5">Modifier Vos Informations</h4>
                                                    <div class="form-row mx-n2">
                                                        <div class="px-2 col-12 col-sm-6">
                                                            <div class="form-group position-relative mb-4">
                                                                <input type="text" class="form-control w-100 d-block"
                                                                    placeholder="Votre Nom">
                                                            </div>
                                                        </div>
                                                        <div class="px-2 col-12 col-sm-6">
                                                            <div class="form-group position-relative mb-4">
                                                                <input type="text" class="form-control w-100 d-block"
                                                                    placeholder="Votre prénom">
                                                            </div>
                                                        </div>
                                                        <div class="px-2 col-12 col-sm-6">
                                                            <div class="form-group position-relative mb-4">
                                                                <input type="text" class="form-control w-100 d-block"
                                                                    placeholder="Votre Tel">
                                                            </div>
                                                        </div>

                                                        <div class="px-2 col-12 col-sm-12">
                                                            <div class="form-group position-relative mb-4">
                                                                <input type="email" class="form-control w-100 d-block"
                                                                    placeholder="Votre Email">
                                                            </div>
                                                        </div>
                                                        <div class="px-2 col-12 col-sm-12">
                                                            <div class="form-group position-relative mb-4">
                                                                <input type="email" class="form-control w-100 d-block"
                                                                    placeholder="Votre Adresse">
                                                            </div>
                                                        </div>

                                                       
                                                    </div>
                                                    <input type="submit"
                                                        class="btn btn-secondary fontBase text-uppercase d-block w-100 mb-5"
                                                        value="Modifier mon profile">
                                    
                                    </div>

                                </div>
                            </div>
                        </div>
                    </article>

                </div>

            </div>

        </div>
        <!-- exhibition-tab -->
        <div class="tab-pane fade" id="exhibition" role="tabpanel" aria-labelledby="exhibition-tab">
            <div class="row mx-xl-n4">
                <div class="col-12 col-md-12 px-xl-4">
                    
                    <!-- currExibitColumn -->
                    <?php foreach($exhibitions as $ex) { ?>
                    <article class="saContentBlock pt-6 pt-md-9 pt-lg-13 pt-xl-20">
                        <div class="container">
                            <div class="row mx-xl-n6">
                                <div class="imgHolder flex-shrink-0 mr-4 mr-lg-6 mr-xl-8">
                                    <a href="single-exhibition.html">
                                        <img src="<?=$ex->img?>" class="img-fluid w-100 d-block"
                                            alt="image description">
                                    </a>
                                </div>
                                <div class="col-12 col-md-6 px-xl-6">
                                    <div class="descrWrap pt-md-2 pt-lg-5">
                                        <h2 class="mb-1 mb-sm-3">
                                            <a href="single-exhibition.html"><?=$ex->titre?></a>
                                        </h2>
                                        <time datetime="2011-01-12" class="d-block cecTime text-gray777"><?=$ex->dateDebut?> - <?=$ex->dateFin?></time>

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </article>
                    <hr class="my-4 my-md-3">
                    <?php } ?>

            
                    <hr class="my-4 my-md-3">
                  

                </div>

            </div>

        </div>

        <!-- oeuvre-tab -->
        <div class="tab-pane fade" id="oeuvre" role="tabpanel" aria-labelledby="oeuvre-tab">
           
            <section class="exhibitionBlock pt-6 pb-6 pt-md-9 pb-md-9 pt-lg-11 pb-lg-13 pt-xl-21 pb-xl-22">
                <div class="container">
                    <div class="row">
                        <h2>Mes commandes</h2>
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Prix</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="<?=$ex->img?>" width="200px" height="200px"  ></td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td><img src="<?=$ex->img?>" width="200px" height="200px"  ></td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td><img src="<?=$ex->img?>" width="200px" height="200px"  ></td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>


                    </div>
                </div>

            </section>


        </div>
        <!-- formation-tab -->
        <div class="tab-pane fade" id="formation" role="tabpanel" aria-labelledby="formation-tab">
            <div class="row mx-xl-n4">
                <div class="col-12 col-md-12 px-xl-4">

                    <!-- makeItMasonery -->
                    <section class="upcomingEventsBlock text-center pt-4 pt-md-9 pb-3 pb-md-7 pb-lg-10 pb-xl-14">
                        <div class="container">
                            <div class="row mx-xl-n4 justify-content-center">
                                <div class="col-12 col-md-6 col-lg-5 px-xl-4">
                                    <!-- upcEveColumn -->
                                    <?php foreach($formations as $f){ ?>
                                    <article
                                        class="upcEveColumn border position-relative py-8 px-4 mb-6 mb-xl-8 mx-auto mx-md-0">
                                        <div class="imgHolder mb-5 overflow-hidden">
                                            <a href="javascript:void(0);">
                                                <img src="<?=$f->img?>" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                        </div>
                                        <time datetime="2011-01-12"
                                            class="simupTime d-block text-gray777 mb-2"><?=$f->dateDebut?> - <?=$f->dateFin?></time>
                                        <h2 class="mb-0">
                                            <a href="javascript:void(0);"><?=$f->titre?></a>
                                        </h2>

                                        <address class="mb-5">
                                            <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;" class="mb-0"><?=$f->description?></p>
                                        </address>
                                        


                                    </article>
                                    <?php }?>
                                </div>

                            </div>
                        </div>
                    </section>

                </div>
            </div>


        </div>


        <!-- evenements-tab -->
        <div class="tab-pane fade" id="evenements" role="tabpanel" aria-labelledby="evenements-tab">
            <div class="row mx-xl-n4">
                <div class="col-12 col-md-12 px-xl-4">
                   
                    <div class="container">

                        <div class="row mx-xl-n6">

                            <div class="col-12 col-md-12 px-xl-6">


                                <!-- eveProColumn -->
                                <?php foreach($events as $e) { ?>
                                <article class="eveProColumn d-sm-flex overflow-hidden pt-6 pt-md-9 pt-lg-13 pt-xl-20">
                
                                    <div class="imgHolder flex-shrink-0 mr-4 mr-lg-8">
                                        <img src="<?=$e->img?>" class="img-fluid" alt="image description">
                                    </div>
                                    <div class="descrWrap pt-1">
                
                                        <h2 class="mb-3">
                                            <a href="javascript:void(0);"><?=$e->titre?></a>
                                        </h2>
                                        <address class="mb-5"><time datetime="2011-01-12"><?=$e->dateDebut?> - <?=$e->dateFin?></address>
                                        <p style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;" class="mb-5"> <?=$e->description?>
                                        </p>
                                       
                                    </div>
                                </article>
                                <?php }?>
                            </div>

                        </div>
                    </div>


                </div>

            </div>



        </div>
        <!-- soutenir-tab -->
        <div class="tab-pane fade" id="soutenir" role="tabpanel" aria-labelledby="soutenir-tab">
            <div class="row mx-xl-n4">
                <div class="col-12 col-md-12 px-xl-4">
                   
                    <!-- projets -->
                    <section class="venuesBlock hasBdr pt-6 pb-4 pt-md-11 pb-md-6 pt-lg-16 pb-lg-8 pt-xl-22 pb-xl-14">
                        <div class="container">
                            <header class="topHeadingHead text-center mb-7 mb-lg-12">
                                <h1>Mon Panier</h1>
                            </header>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <!-- vnFig -->
                                            <figure class="vnFig mb-6 mb-xl-8 text-center mx-auto mx-sm-0">
                                                <a href="detail-projet.html">
                                                    <div class="imgHolder">
                                                        <img src="images/img66.jpg" class="img-fluid w-100 h-100 imgFit"
                                                            alt="image description">
                                                    </div>
                                                    <div class="caption position-relative">
                                                        <h3 class="text-white fontBase mb-0">Prix</h3>
                                                    </div>
                                                </a>
                                                <button class="btn laodMore btn-outline-light bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="collapse"
                                                    data-target="#collapseModifierProjet" aria-expanded="false"
                                                    aria-controls="collapseModifierProjet">
                                                    Confirmer ma commande
                                                </button>
                                                <button class="btn laodMore btn-outline-danger bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="modal" data-target="#ModalDeleteProjet">
                                                    Supprimer ma commande
                                                </button>
                                                <div class="collapse" id="collapseModifierProjet">
                                                    

                                                </div>
                                                <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog"
                                                    aria-labelledby="ModalDelete" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg orderTicketModal" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-brown py-3 px-lg-5">
                                                                <h3 class="text-white mb-0">Voulez-vous supprimer cette
                                                                    Commande
                                                                    ?<h3>
                                                            </div>
                                                            <div class="modal-body px-lg-6 pt-lg-6">

                                                                <div class="form-row mx-n2">
                                                                    <div class="px-2 col-12 col-sm-6">
                                                                        <input type="submit"
                                                                            class="btn btn-danger fontBase text-uppercase d-block w-100 mb-5"
                                                                            value="Supprimer">
                                                                    </div>
                                                                    <div class="px-2 col-12 col-sm-6">
                                                                        <input type="submit"
                                                                            class="btn btn-secondary fontBase text-uppercase d-block w-100 mb-5"
                                                                            value="Annuler">
                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>

                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <!-- vnFig -->
                                            <figure class="vnFig mb-6 mb-xl-8 text-center mx-auto mx-sm-0">
                                                <a href="detail-projet.html">
                                                    <div class="imgHolder">
                                                        <img src="images/img67.jpg" class="img-fluid w-100 h-100 imgFit"
                                                            alt="image description">
                                                    </div>
                                                    <div class="caption position-relative">
                                                        <h3 class="text-white fontBase mb-0">Prix</h3>
                                                    </div>
                                                </a>
                                                <button class="btn laodMore btn-outline-light bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="collapse"
                                                    data-target="#collapseModifierProjet2" aria-expanded="false"
                                                    aria-controls="collapseModifierProjet2">
                                                    Modifier ma commande
                                                </button>
                                                <button class="btn laodMore btn-outline-danger bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="modal" data-target="#ModalDeleteProjet">
                                                    Supprimer ma commande
                                                </button>
                                               
                                                    
                                            </figure>

                                        </div>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <!-- vnFig -->
                                            <figure class="vnFig mb-6 mb-xl-8 text-center mx-auto mx-sm-0">
                                                <a href="detail-projet.html">
                                                    <div class="imgHolder">
                                                        <img src="images/img68.jpg" class="img-fluid w-100 h-100 imgFit"
                                                            alt="image description">
                                                    </div>
                                                    <div class="caption position-relative">
                                                        <h3 class="text-white fontBase mb-0">Prix</h3>
                                                    </div>
                                                </a>
                                                <button class="btn laodMore btn-outline-light bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="collapse"
                                                    data-target="#collapseModifierProjet3" aria-expanded="false"
                                                    aria-controls="collapseModifierProjet3">
                                                    Modifier ma commande
                                                </button>
                                                <button class="btn laodMore btn-outline-danger bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="modal" data-target="#ModalDeleteProjet">
                                                    Supprimer ma commande
                                                </button>
                                                <div class="collapse" id="collapseModifierProjet3">
                                                    <div class="card card-body">
                                                        <form action="#">
                                                            <div class="row mx-xl-n4 mt-5 mb-6 mt-md-11 mb-md-10">
                                                                <div class="col-12 col-md-12 px-xl-4">
                                                                    <h3 class="mb-5">Information sur le projet</h3>
                                                                    <div class="form-row mx-n2">
                                                                        <div class="col-12 col-sm-6 px-2">
                                                                            <div
                                                                                class="form-group position-relative mb-2">
                                                                                <label class="d-block">
                                                                                    <strong
                                                                                        class="font-weight-normal d-block mb-1">Titre
                                                                                        <span
                                                                                            class="text-brown">*</span></strong>
                                                                                    <input type="text"
                                                                                        class="form-control formControlMedium rounded-sm d-block w-100">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 px-2">
                                                                            <div
                                                                                class="form-group position-relative mb-2">
                                                                                <label class="d-block">
                                                                                    <strong
                                                                                        class="font-weight-normal d-block mb-1">Montant
                                                                                        <span
                                                                                            class="text-brown">*</span></strong>
                                                                                    <input type="text"
                                                                                        class="form-control formControlMedium rounded-sm d-block w-100">
                                                                                </label>

                                                                            </div>
                                                                        </div>

                                                                        <div class="col-12 col-sm-6 px-2">
                                                                            <div
                                                                                class="form-group position-relative mb-2">
                                                                                <label class="d-block">
                                                                                    <strong
                                                                                        class="font-weight-normal d-block mb-1">Affiche
                                                                                        du projet<span
                                                                                            class="text-brown">*</span></strong>
                                                                                    <input type="file"
                                                                                        class="form-control formControlMedium rounded-sm d-block w-100">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-6 px-2">
                                                                            <div
                                                                                class="form-group position-relative mb-2">
                                                                                <label class="d-block">
                                                                                    <strong
                                                                                        class="font-weight-normal d-block mb-1">Image
                                                                                        du projet<span
                                                                                            class="text-brown">*</span></strong>
                                                                                    <input type="file"
                                                                                        class="form-control formControlMedium rounded-sm d-block w-100">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 px-2">
                                                                            <div
                                                                                class="form-group position-relative mb-2">
                                                                                <label class="d-block">
                                                                                    <strong
                                                                                        class="font-weight-normal d-block mb-1">Description
                                                                                        du projet<span
                                                                                            class="text-brown">*</span></strong>
                                                                                    <textarea rows="20"
                                                                                        class="form-control formControlMedium rounded-sm d-block w-100"></textarea>

                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <input type="submit"
                                                                            class="btn btnBrown fontBase text-uppercase d-block w-100"
                                                                            value="Soumettre ma demande">
                                                                        <!-- <div class="col-12  px-2">
																   <a href="Mercipourvotredemande.html" class="btn btnBrown text-uppercase px-5"></a>
																</div> -->
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog"
                                                    aria-labelledby="ModalDelete" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg orderTicketModal" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-brown py-3 px-lg-5">
                                                                <h3 class="text-white mb-0">Voulez-vous supprimer ce
                                                                    projet ?<h3>
                                                            </div>
                                                            <div class="modal-body px-lg-6 pt-lg-6">

                                                                <div class="form-row mx-n2">
                                                                    <div class="px-2 col-12 col-sm-6">
                                                                        <input type="submit"
                                                                            class="btn btn-danger fontBase text-uppercase d-block w-100 mb-5"
                                                                            value="Supprimer">
                                                                    </div>
                                                                    <div class="px-2 col-12 col-sm-6">
                                                                        <input type="submit"
                                                                            class="btn btn-secondary fontBase text-uppercase d-block w-100 mb-5"
                                                                            value="Annuler">
                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- shopContentBlock -->
                    
                </div>


            </div>

        </div>
    </div>


</main>
<?php include '_footer.php';?>