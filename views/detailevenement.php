<?php include('_header.php') ; 
extract($_GET);
extract($_POST);
$e = Evenement::find($id);
?>
		<main>
			<!-- singleContent -->
			<article id="singleContent" class="pt-6 pb-6 pt-md-8 pb-md-8 pt-lg-12  pt-xl-20 pb-xl-11">
				<div class="container">
					<!-- scHeadingHead -->
					<header class="scHeadingHead text-center mb-7 mb-md-10 mb-lg-14">
						<!-- scBtnBack -->
						<a href="javascript:void(0);" class="scBtnBack textDecorationNone d-inline-block align-top mb-5 mb-lg-8"><i class="fas fa-angle-left icn"><span class="sr-only">icon</span></i> Back to all Events</a>
						<h1 class="mb-5"><?=$e->titre?></h1>
					</header>
					<div class="row mx-xl-n4">
						<div class="col-12 px-xl-4 col-md-8 mb-6">
							<div class="imgHolder mb-8 mb-xl-10">
								<img src="<?=$e->img?>" class="w-100 img-fluid" alt="image description">
							</div>
							<p class="mb-6"><?=$e->description?></p>
						</div>
						<div class="col-12 px-xl-4 col-md-4">
							<!-- scSidebar -->
							<aside class="scSidebar scSidebarII position-relative bg-secondary text-gray888 px-3 pt-3 pb-3 px-lg-8 pt-lg-8 pb-lg-8">
								<a href="Postuler.php?type=1&fk_id=<?=$id?>" class="btn btn-dark btnDarkInverse mb-7 text-uppercase d-block w-100">Order Ticket</a>
								<dl class="mb-0 scsInfosList text-gray777">
									<dt class="d-block text-white font-weight-normal">Type:</dt>
									<dd class="d-block mb-5">Pour <?=($e->type==1)?'public':'les artistes'?></dd>
									<dt class="d-block text-white font-weight-normal">Date debut:</dt>
									<dd class="d-block mb-5">
										<time datetime="2011-01-12" class="d-block"><?=$e->dateDebut?></time>
									</dd>
									<dt class="d-block text-white font-weight-normal">Date fin:</dt>
									<dd class="d-block mb-5"><?=$e->dateFin?></dd>
									<dt class="d-block text-white font-weight-normal">Lieu:</dt>
									<dd class="d-block mb-5"><?=$e->lieu?></dd>
								</dl>
								<div class="d-flex position-relative">
									<!-- btnShare -->
									<a href="javascript:void(0);" class="btnShare btnShareII text-white d-flex align-items-center textDecorationNone mt-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-share-alt icn d-flex align-items-center justify-content-center rounded-circle text-secondary mr-2"><span class="sr-only">icon</span></i>
										Share
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
							</aside>
						</div>
					</div>
				</div>
			</article>
		</main>
		<?php include('_footer.php') ; ?>