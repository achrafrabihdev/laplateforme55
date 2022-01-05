<?php include('_header.php'); 
	$formations = Formation::allFormations();
?>
		<main>
			<!-- eveProgBlock -->
			<section class="eveProgBlock pt-5 pb-5 pt-md-9 pb-md-10 pt-lg-13 pb-lg-14 pt-xl-21 pb-xl-22">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-7 mb-md-10">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4">Les formations disponibles</h1>
								<!-- eabDescrText -->
								<div class="fontSerif eabDescrText eabDescrTextII">
									<p>Booster votre connaissances.</p>
								</div>
							</div>
						</div>
					</header>
					<!-- makeItMasonery -->
					<div class="row makeItMasonery mx-xl-n4">
					<?php foreach($formations as $f) { ?>
						<div class="col-12 col-md-6 col-lg-4 px-xl-4 mimItem">
							<!-- newsColumn -->
							<article class="newsColumn text-gray777 mb-6 mb-lg-10 mb-xl-14 mx-auto">
								<div class="imgHolder">
									<a href="detailformation.php?id=<?=$f->id?>">
										<img src="<?=$f->img?>" class="img-fluid" alt="image description">
									</a>
								</div>
								<div class="descrWrap bg-white position-relative mt-n16 pt-7 pr-3 pr-md-6">
									<time datetime="2011-01-12" class="ncTimeStamp d-block text-gray777 mb-2"><?=$f->dateDebut?> - <?=$f->dateFin?></time>
									<h2 class="mb-4">
										<a href="detailformation.php?id=<?=$f->id?>"><?=$f->titre?></a>
									</h2>
									<p class="mb-6" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;"> <?=$f->description?> </p>
									<a href="detailformation.php?id=<?=$f->id?>" class="readMore">Read More</a>
								</div>
							</article>
						</div>
						<?php } ?>
					</div>
					<!-- btnHolder -->
					<footer class="btnHolder text-center">
						<a href="single-post.html" class="btn btnGre5 btnGre5Outline bdr2 btnMidMinWidth">Load More</a>
					</footer>
				</div>
			</section>
		</main>
		<?php include('_footer.php'); ?>