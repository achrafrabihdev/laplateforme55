<?php include('_header.php'); 
	extract($_GET);
	extract($_POST);
	$f = Formation::find($id);
	$u = User::find($f->formateur_id);
	$url = 'http://localhost/55p-v2/views/notrehistoire.php';
?>
		<main>
			<!-- singleContent -->
			<article id="singleContent" class="pt-6 pb-6 pt-md-8 pb-md-8 pt-lg-12  pt-xl-20 pb-xl-11">
				<div class="container">
					<!-- scHeadingHead -->
					<header class="scHeadingHead text-center mb-7 mb-md-10 mb-lg-14">
						<a href="javascript:void(0);" class="scBtnBack textDecorationNone d-inline-block align-top mb-5 mb-lg-8"><i class="fas fa-angle-left icn"><span class="sr-only">icon</span></i> Retour à toutes les formations</a>
						<h1 class="mb-5"><?=$f->titre?></h1>
						<!-- <time datetime="2011-01-12" class="d-block scTime text-gray777">20/04/2021 - 24/04/2021</time> -->
					</header>
					<div class="row">
						<div class="col-12 col-md-8 mb-6">
							<div class="imgHolder mb-8">
								<img src="<?=$f->img?>" class="w-100 img-fluid" alt="image description">
							</div>
							<!-- eabDescrText -->
							<div class="eabDescrText eabDescrTextIII fontSerif">
								<p><?=$f->description?></p>
							</div>
		
							<!-- logosWrap -->
							
						</div>
						<div class="col-12 col-md-4">
							<!-- scSidebar -->
							<aside class="scSidebar pl-lg-10 position-relative pt-8 pt-md-0">
								<a href="Postuler.php?type=1&fk_id=<?=$id?>" class="btn btnGre5 btnGre5Outline mb-4 text-uppercase bdr2 d-block w-100">Réservez votre place</a>
								<!-- <a href="javascript:void(0);" class="btn btn-secondary mb-4 text-uppercase d-block w-100">Order Ticket</a> -->
								<dl class="mb-0 scsInfosList text-gray777 mt-6">
									<dt class="d-block text-secondary font-weight-normal">Date:</dt>
									<dd class="d-block mb-5">
										<time datetime="2011-01-12"><?=$f->dateDebut?> - <?=$f->dateFin?></time>
									</dd>
									<dt class="d-block text-secondary font-weight-normal">Lieu:</dt>
									<dd class="d-block mb-5"><?=$f->lieu?></dd>
									<dt class="d-block text-secondary font-weight-normal">Organisateur:</dt>
									<dd class="d-block mb-5"><?=$u->prenom?> <?=$u->nom?></dd>
									<!-- <dt class="d-block text-secondary font-weight-normal">Duration:</dt>
									<dd class="d-block mb-5">60 Minutes (approximately)</dd> -->
								</dl>
								<div class="d-flex position-relative">
									<!-- btnShare -->
									<a href="javascript:void(0);" class="btnShare text-secondary d-flex align-items-center textDecorationNone mt-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-share-alt icn d-flex align-items-center justify-content-center rounded-circle text-white mr-2"><span class="sr-only">icon</span></i>
										Share
									</a>
									<!-- shareDropMenu -->
									<div class="dropdown-menu shareDropMenu p-0">
										<a class="dropdown-item" href="javascript:void(0);">Twitter</a>
										<a class="dropdown-item" href="https://www.facebook.com/sharer.php?u=<?=$url?>">Facebook</a>
										<a class="dropdown-item" href="javascript:void(0);">Pinterest</a>
										<a class="dropdown-item" href="javascript:void(0);">Email</a>
										<a class="dropdown-item" href="javascript:void(0);">Copy URL</a>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</article>
			<!-- galrey images -->
			<!-- relatedExhibitBlock -->
			
			<!-- scPagerNav -->
		</main>
		<?php include('_footer.php'); ?>