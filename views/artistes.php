<?php include('_header.php'); 
$artistes = Artiste::all();
?>
		<main>
			<!-- mainHeadingHead -->
			<header class="mainHeadingHead position-relative bgCover w-100 d-flex text-white" style="background-image: url(images/img123.jpg);">
				<div class="mhhAlignHolder d-flex w-100 align-items-center position-relative">
					<div class="container py-6">
						<h1 class="text-white mb-0">Artists</h1>
					</div>
					
				</div>
			</header>
			<!-- ourAritstsBlock -->
			<section class="ourAritstsBlock text-center pt-6 pt-md-9 pt-lg-13 pt-xl-20 pb-4 pb-lg-8">
				<div class="container">
					<!-- headingHead -->
					<header class="headingHead mb-7 mb-md-9 mb-xl-13">
						<h1 class="h1Large">Our Artists</h1>
						<ul class="nav nav-tabs justify-content-center exhiTabList exhiTabListIII mt-4 mt-lg-8 pb-8" role="tablist">
							<li class="nav-item ">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Récemment Ajouté <i class="fas fa-angle-down icn"><span class="sr-only">icon</span></i></a>
								<!-- fltDropdown -->
								<div class="dropdown-menu py-0 bg-secondary fltDropdown">
									<a class="dropdown-item" id="current-tab" data-toggle="tab" href="#current" role="tab" aria-controls="current" aria-selected="true">Ghada Amer &amp; Reza (22)</a>
									<a class="dropdown-item" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab" aria-selected="true">Beom Kim (13)</a>
									<a class="dropdown-item" id="past-tab" data-toggle="tab" href="#past" role="tab" aria-selected="true">Tan Swie Hian (12)</a>
									<a class="dropdown-item" href="javascript:void(0);">Navin Rawanchaikul (5)</a>
									<a class="dropdown-item" href="javascript:void(0);">Donald Sultan (7)</a>
								</div>
							</li>
							<li class="nav-item ">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Catégorie <i class="fas fa-angle-down icn"><span class="sr-only">icon</span></i></a>

								<!-- fltDropdown -->
								<div class="dropdown-menu py-0 bg-secondary fltDropdown">
									<a class="dropdown-item" href="javascript:void(0);">Ghada Amer &amp; Reza (22)</a>
									<a class="dropdown-item" href="javascript:void(0);">Beom Kim (13)</a>
									<a class="dropdown-item" href="javascript:void(0);">Tan Swie Hian (12)</a>
									<a class="dropdown-item" href="javascript:void(0);">Navin Rawanchaikul (5)</a>
									<a class="dropdown-item" href="javascript:void(0);">Donald Sultan (7)</a>
								</div>
							</li>
							<li class="nav-item ">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">Génération INBA <i class="fas fa-angle-down icn"><span class="sr-only">icon</span></i></a>
								<!-- fltDropdown -->
								<div class="dropdown-menu py-0 dropdown-menu-right bg-secondary fltDropdown">
									<a class="dropdown-item" href="javascript:void(0);">Ghada Amer &amp; Reza (22)</a>
									<a class="dropdown-item" href="javascript:void(0);">Beom Kim (13)</a>
									<a class="dropdown-item" href="javascript:void(0);">Tan Swie Hian (12)</a>
									<a class="dropdown-item" href="javascript:void(0);">Navin Rawanchaikul (5)</a>
									<a class="dropdown-item" href="javascript:void(0);">Donald Sultan (7)</a>
								</div>
							</li>
							
						</ul>
						
					</header>
					<div class="row">
					<?php foreach($artistes as $a) { 
						$cats = Artiste::categoriearts($a->id);?>
						<div class="col-12 col-md-4">
							<!-- artistProfileColumn -->
							<article class="artistProfileColumn text-gray777 mb-6 mb-lg-9 mb-xl-13 mx-auto">
								<div class="imgHolder mb-6">
								<a href="detailartiste.php"><img src="<?=$a->image?>" class="img-fluid" alt="image description"></a>
								</div>
								<h2><?=$a->prenom?> <?=$a->nom?></h2>
								<?php foreach($cats as $cat){ ?>
								<h3 class="fontBase mb-2">
										<?=$cat->nom?>
								<?php }?>
								</h3>
							</article>
						</div>
					<?php } ?>
					</div>
				</div>
			</section>
		</main>
<?php include('_footer.php'); ?>