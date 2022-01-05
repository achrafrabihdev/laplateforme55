<?php include '_header.php';
$events = User::mesEvenements($_SESSION['id_user']);
$formations = Formateur::formations($_SESSION['id_user']);
$exhibitions = Artiste::mesExhibitions($_SESSION['id_user']);
$oeuvres = Artiste::oeuvres($_SESSION['id_user']);
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
                aria-selected="false">Mes Soutiens</a>
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
                                        <img src="images/img172.jpg" class="img-fluid w-100" alt="image description">
                                    </div>
                                    <hr class="my-xl-9">

                                    <div class="btnHolder text-center">
                                        <button class="btn laodMore btn-outline-light bdr2 btnLgMinWidth" type="button"
                                            data-toggle="collapse" data-target="#collapseProfile" aria-expanded="false"
                                            aria-controls="collapseProfile">
                                            Modifier mon profil
                                        </button>
                                        </p>
                                        <div class="collapse" id="collapseProfile">
                                            <div class="card card-body">
                                                <form action="#">

                                                    <h4 class="fontBase mt-2 mb-5">Vos Informations</h4>
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

                                                        <div class="px-2 col-12 col-sm-12">
                                                            <div class="form-group position-relative mb-4">
                                                                <input type="email" class="form-control w-100 d-block"
                                                                    placeholder="Votre Email">
                                                            </div>
                                                        </div>

                                                        <div class="px-2 col-12">
                                                            <div class="form-group position-relative mb-4">
                                                                <textarea class="form-control d-block w-100"
                                                                    placeholder="Description&nbsp;"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="submit"
                                                        class="btn btn-secondary fontBase text-uppercase d-block w-100 mb-5"
                                                        value="Modifier mon profile">

                                                </form>
                                            </div>
                                        </div>
                                        <!-- <a href="javascript:void(0);" data-toggle="modal" data-target="#ModalEditProfil" class="btn laodMore btn-outline-light bdr2 btnLgMinWidth">Modifier mon profil</a> -->
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 px-xl-6">
                                    <h1 class="mb-2">RIDA BENHARROU</h1>
                                    <div class="d-flex position-relative">
                                        <!-- btnShare -->
                                        <a href="javascript:void(0);"
                                            class="btnShare btnShareII text-white d-flex align-items-center textDecorationNone mt-3"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i
                                                class="fa fa-share-alt icn d-flex align-items-center justify-content-center rounded-circle text-primary mr-2"><span
                                                    class="sr-only">icon</span></i>

                                        </a>
                                        <!-- shareDropMenu -->
                                        <div class="dropdown-menu shareDropMenu p-0">
                                            <a class="dropdown-item" href="javascript:void(0);">Twitter</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Facebook</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Pinterest</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Email</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Copy URL</a>
                                        </div>
                                    </div>
                                    <div class="text-gray777">
                                        <p class="mb-5 mb-md-7">Ne en 1984 à zagora <br>
                                            <!-- <a
														href="tel:+61235118954"
														class="textDecorationNone colorInherit">+61 23511 8954</a> / <a
														href="javascript:void(0);"
														class="textDecorationNone colorInherit">E-mail</a> -->
                                        </p>
                                    </div>
                                    <!-- eabDescrText -->
                                    <div class="eabDescrText eabDescrTextII fontSerif">
                                        <p class="mb-6">— FR Aurèle ANDREWS-BENMEJDOUB est né à Paris en 1970.
                                            La prise de vue ultime …. celle qui saurait s’intégrer les mondes
                                            intérieurs et extérieurs en une seule image immédiatement
                                            compréhensible malgré les superpositions d’univers connexes. Aurèle
                                            recherche par sa photographie un monde conjugué qui répondrait à sa
                                            généalogie familiale complexe et construite en parallèle d’un chemin
                                            de vie sinueux. En reconfigurant ses appareils, leurs négatifs et
                                            ses tirages, il imprime un monde instable jusqu’à parfois chaotique.
                                        </p>
                                    </div>
                                    <p class="mb-6">C’est entre les multiples réalités du rêve et de
                                        l’existantqu’il élabore une poétique qui se fige à l’interstice de
                                        l’angoisse et de la solitude silencieuse. Cette poésie a pour sujets le
                                        vivant doucement fondu à des paysages inertes …d’où il ressort comme une
                                        impossibilité de sortir d’un rêve cadré, pourtant bien vivant. — EN The
                                        ultimate photo shoot … the one that could bring together the inside and
                                        outside worlds in one unique photography straightly understandable
                                        despite of superpositions of related universes. Aurèle is researching by
                                        his photography a conjugated land that could respond to his complex
                                        genealogy which he built along a tortuous life journey.</p>
                                    <p class="mb-6">By remodelling his cameras, their films and prints, he
                                        claims a waving and almost chaotic sphere. It’s between the multiple
                                        realities of dream and existencethat he has constructed a poetry that
                                        freezes just in the borders of distress and silent lonelyness. This
                                        poetry gives birth to the living slightly unchained with lifeless
                                        landscapes … from where it appears almost impossible to get out of these
                                        squared dreams yet alive.</p>


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
                    <a href="Ajouterexhibition.php" class="btn btnBrown fontBase text-uppercase d-block w-100">Ajouter
                        une exhibition</a>

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

                                    <a href="modifierexhibition.php?id=<?=$ex->id?>" class="btn laodMore btn-outline-light bdr2 btnLgMinWidth" >
                                        Modifier mon exhibition
                                    </a>
                                    <button class="btn laodMore btn-outline-danger bdr2 btnLgMinWidth" type="button"
                                        data-toggle="modal" data-target="#ModalDelete">
                                        Supprimer mon exhibition
                                    </button>
                                   
                                    <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog"
                                        aria-labelledby="ModalDelete" aria-hidden="true">
                                        <div class="modal-dialog modal-lg orderTicketModal" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-brown py-3 px-lg-5">
                                                    <h3 class="text-white mb-0">Voulez-vous supprimer cet
                                                        exhibition ?<h3>
                                                </div>
                                                <div class="modal-body px-lg-6 pt-lg-6">

                                                    <div class="form-row mx-n2">
                                                        <div class="px-2 col-12 col-sm-6">
                                                            <a href="../controllers/exhibitionController.php?a=supprimer&id=<?=$ex->id?>"
                                                                class="btn btn-danger fontBase text-uppercase d-block w-100 mb-5">supprimer</a>
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
            <a href="ajouteroeuvre.php" class="btn btnBrown fontBase text-uppercase d-block w-100">Ajouter
                un oeuvre</a>
            <section class="exhibitionBlock pt-6 pb-6 pt-md-9 pb-md-9 pt-lg-11 pb-lg-13 pt-xl-21 pb-xl-22">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 mimItem px-xl-4">
                            <!-- collectionColumn -->
                            <?php foreach($oeuvres as $o) { ?>
                            <article class="collectionColumn mb-6 mb-xl-8 position-relative">
                                <div class="imgHolder mb-4">
                                    <a href="single-works.html">
                                        <img src="<?=$o->image?>" class="img-fluid w-100 d-block"
                                            alt="image description">
                                    </a>
                                </div>
                                <h2 class="mb-1"><a href="javascript:void(0);"><?=$o->nom?></a>
                                </h2>
                                <h3 class="fontAlter text-gray777 mb-0" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;"><?=$o->description?></h3> <br>
                                <a class="btn laodMore btn-outline-light bdr2 btnLgMinWidth" href="modifieroeuvre.php?id=<?=$id?>">
                                    Modifier mon Oeuvre
                                </a>
                                <button class="btn laodMore btn-outline-danger bdr2 btnLgMinWidth" type="button"
                                    data-toggle="modal" data-target="#ModalDeleteOeuvreone">
                                    Supprimer mon Oeuvre
                                </button>
                                <div class="modal fade" id="ModalDeleteOeuvreone" tabindex="-1" role="dialog"
                                    aria-labelledby="ModalDeleteOeuvreone" aria-hidden="true">
                                    <div class="modal-dialog modal-lg orderTicketModal" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-brown py-3 px-lg-5">
                                                <h3 class="text-white mb-0">Voulez-vous supprimer cet
                                                    Oeuvre ?<h3>
                                            </div>
                                            <div class="modal-body px-lg-6 pt-lg-6">

                                                <div class="form-row mx-n2">
                                                    <div class="px-2 col-12 col-sm-6">
                                                        <a href="../controllers/oeuvreController.php?a=supprimer&id=<?=$o->id?>"
                                                            class="btn btn-danger fontBase text-uppercase d-block w-100 mb-5"
                                                            > Supprimer</a>
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
                            </article>
                            <?php }?>
                        </div>

                    </div>
                </div>

            </section>


        </div>
        <!-- formation-tab -->
        <div class="tab-pane fade" id="formation" role="tabpanel" aria-labelledby="formation-tab">
            <div class="row mx-xl-n4">
                <div class="col-12 col-md-12 px-xl-4">
                    <a href="Ajouterformation.php" class="btn btnBrown fontBase text-uppercase d-block w-100">Ajouter
                        une formation</a>
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
                                        <a href="modifierformation.php?id=<?=$f->id?>" class="btn btn-outline-light bdr2 btnLgMinWidth">
                                            Modifier ma formation
                                        </a>
                                        <button class="btn btn-outline-danger bdr2 btnLgMinWidth" type="button"
                                            data-toggle="modal" data-target="#ModalDeleteFormation">
                                            Supprimer ma formation
                                        </button>
                                    
                                        <div class="modal fade" id="ModalDeleteFormation" tabindex="-1" role="dialog"
                                            aria-labelledby="ModalDelete" aria-hidden="true">
                                            <div class="modal-dialog modal-lg orderTicketModal" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-brown py-3 px-lg-5">
                                                        <h3 class="text-white mb-0">Voulez-vous supprimer cet
                                                            exhibition ?<h3>
                                                    </div>
                                                    <div class="modal-body px-lg-6 pt-lg-6">

                                                        <div class="form-row mx-n2">
                                                            <div class="px-2 col-12 col-sm-6">
                                                                <a href="../controllers/formationController.php?a=supprimer&id=<?=$f->id?>"
                                                                    class="btn btn-danger fontBase text-uppercase d-block w-100 mb-5">
                                                                    supprimer
                                                                </a>
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
                    <a href="ajouterevenement.php" class="btn btnBrown fontBase text-uppercase d-block w-100">Ajouter
                        un evenement</a>
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
                                        <div class="btnsWrap">
                                            <a class="btn btn-warning" href="modifierevenement.php?id=<?=$e->id?>">Modifier l'évévenment</a>

                                            <a href="javascript:void(0);" class="btn btn-danger bdr2 mr-1 btnSmall"
                                                data-toggle="modal" data-target="#ModalDeleteEvent">Supprimer
                                                l'évévenment</a>
                                            <div class="modal fade" id="ModalDeleteEvent" tabindex="-1" role="dialog"
                                                aria-labelledby="ModalDeleteEvent" aria-hidden="true">
                                                <div class="modal-dialog modal-lg orderTicketModal" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-brown py-3 px-lg-5">
                                                            <h3 class="text-white mb-0">Voulez-vous supprimer cet
                                                                evenement ?<h3>
                                                        </div>
                                                        <div class="modal-body px-lg-6 pt-lg-6">

                                                            <div class="form-row mx-n2">
                                                                <div class="px-2 col-12 col-sm-6">
                                                                    <a href="../controllers/evenementController.php?a=supprimer&id=<?=$e->id?>"
                                                                        class="btn btn-danger fontBase text-uppercase d-block w-100 mb-5"> oui </a>
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
                                        </div>
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
                    <a href="ajouterprojet.php" class="btn btnBrown fontBase text-uppercase d-block w-100">Ajouter
                        un projet</a>
                    <!-- projets -->
                    <section class="venuesBlock hasBdr pt-6 pb-4 pt-md-11 pb-md-6 pt-lg-16 pb-lg-8 pt-xl-22 pb-xl-14">
                        <div class="container">
                            <header class="topHeadingHead text-center mb-7 mb-lg-12">
                                <h1>Projects</h1>
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
                                                        <h3 class="text-white fontBase mb-0">Modern Art</h3>
                                                    </div>
                                                </a>
                                                <button class="btn laodMore btn-outline-light bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="collapse"
                                                    data-target="#collapseModifierProjet" aria-expanded="false"
                                                    aria-controls="collapseModifierProjet">
                                                    Modifier mon projet
                                                </button>
                                                <button class="btn laodMore btn-outline-danger bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="modal" data-target="#ModalDeleteProjet">
                                                    Supprimer mon projet
                                                </button>
                                                <div class="collapse" id="collapseModifierProjet">
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
                                                                    projet
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
                                                        <h3 class="text-white fontBase mb-0">Sculpters</h3>
                                                    </div>
                                                </a>
                                                <button class="btn laodMore btn-outline-light bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="collapse"
                                                    data-target="#collapseModifierProjet2" aria-expanded="false"
                                                    aria-controls="collapseModifierProjet2">
                                                    Modifier mon projet
                                                </button>
                                                <button class="btn laodMore btn-outline-danger bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="modal" data-target="#ModalDeleteProjet">
                                                    Supprimer mon projet
                                                </button>
                                                <div class="collapse" id="collapseModifierProjet2">
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
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <!-- vnFig -->
                                            <figure class="vnFig mb-6 mb-xl-8 text-center mx-auto mx-sm-0">
                                                <a href="detail-projet.html">
                                                    <div class="imgHolder">
                                                        <img src="images/img68.jpg" class="img-fluid w-100 h-100 imgFit"
                                                            alt="image description">
                                                    </div>
                                                    <div class="caption position-relative">
                                                        <h3 class="text-white fontBase mb-0">Anthropology</h3>
                                                    </div>
                                                </a>
                                                <button class="btn laodMore btn-outline-light bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="collapse"
                                                    data-target="#collapseModifierProjet3" aria-expanded="false"
                                                    aria-controls="collapseModifierProjet3">
                                                    Modifier mon projet
                                                </button>
                                                <button class="btn laodMore btn-outline-danger bdr2 btnLgMinWidth"
                                                    type="button" data-toggle="modal" data-target="#ModalDeleteProjet">
                                                    Supprimer mon projet
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
                    <a href="ajouterevenement.php" class="btn btnBrown fontBase text-uppercase d-block w-100">Ajouter
                        un produit</a>
                    <!-- shopContentBlock -->
                    <section class="shopContentBlock pt-7 pb-7 pb-md-9 pt-lg-10 pb-lg-14 pt-xl-16 pb-xl-22">
                        <div class="container">
                            <header class="topHeadingHead text-center mb-7 mb-lg-12">
                                <h1>Boutique</h1>
                            </header>
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img86.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Museum Jaggur Aceumale</a>
                                        </h3>
                                        <h4 class="fontBase">£67.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img87.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                            <strong
                                                class="prdctTag position-absolute rounded-circle bg-brown text-white d-flex align-items-center justify-content-center text-uppercase">new</strong>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Blcak Fancy Vavoom Cap</a>
                                        </h3>
                                        <h4 class="fontBase">£99.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img88.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Zerabis Caritime Mhoker Art</a>
                                        </h3>
                                        <h4 class="fontBase">£51.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img89.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Mia Calimao Uttliparian Plate</a>
                                        </h3>
                                        <h4 class="fontBase">£49.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img147.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Magzine Extreame Measure Can Andre
                                                Saraiva X </a>
                                        </h3>
                                        <h4 class="fontBase">£72.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img148.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">ART Xhoopee Juke by kai Art</a>
                                        </h3>
                                        <h4 class="fontBase">£35.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img149.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                            <strong
                                                class="prdctTag position-absolute rounded-circle bg-brown text-white d-flex align-items-center justify-content-center text-uppercase">new</strong>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Geor Museum Mesh Toy/Jen-1</a>
                                        </h3>
                                        <h4 class="fontBase">£29.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img150.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Mind The Cyber Things</a>
                                        </h3>
                                        <h4 class="fontBase">£30.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img151.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Shrigley Silk Arty Purse</a>
                                        </h3>
                                        <h4 class="fontBase">£88.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img152.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Trap Door: Trans Cultural Art</a>
                                        </h3>
                                        <h4 class="fontBase">£75.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img153.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Hercules Segers: Painter Upson Study
                                                in Beauty & Classic</a>
                                        </h3>
                                        <h4 class="fontBase">£51.00</h4>
                                    </article>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <!-- 	shopItemColumn -->
                                    <article class="shopItemColumn position-relative mb-6 mb-lg-9 mb-xl-13 mx-auto">
                                        <div class="imgHolder position-relative mb-4 overflow-hidden">
                                            <a href="single-product.html">
                                                <img src="images/img154.jpg" class="img-fluid w-100"
                                                    alt="image description">
                                            </a>
                                            <a href="single-product.html"
                                                class="sicBtnCart fontAlter font-weight-bold position-absolute btn btn-secondary text-uppercase d-block w-100">Add
                                                to Cart</a>
                                        </div>
                                        <h3 class="mb-2">
                                            <a href="single-product.html">Vadosharee Classic T-shirt</a>
                                        </h3>
                                        <h4 class="fontBase">£59.00</h4>
                                    </article>
                                </div>
                            </div>
                            <!-- btnHolder -->
                            <footer class="btnHolder text-center">
                                <a href="single-product.html"
                                    class="btn laodMore btn-outline-light bdr2 btnMidMinWidth">Load More</a>
                            </footer>
                        </div>
                    </section>
                </div>


            </div>

        </div>
    </div>


</main>
<?php include '_footer.php';?>