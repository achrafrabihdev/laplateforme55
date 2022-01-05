<?php include '_header.php';
$articles = Article::allArticles();
?>

		<main>
			<!-- eveProgBlock -->
			<section class="eveProgBlock pt-5 pb-3 pt-md-9 pb-md-7 pt-lg-13 pb-lg-11 pt-xl-20 pb-xl-16">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-6 mb-lg-8 mb-xl-11">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4">News Grid </h1>
								<!-- eabDescrText -->
								<div class="fontSerif eabDescrText eabDescrTextII">
									<p>This sub content title section you can add you real content.</p>
								</div>
							</div>
						</div>
					</header>
					<div class="row">
						<div class="col-12 col-md-8">
							<!-- content -->
							<div id="content" class="mb-6">
								<!-- makeItMasonery -->
								<div class="row makeItMasonery mx-xl-n4">
								<?php foreach($articles as $a) {?>
									<div class="col-12 col-lg-6 px-xl-4 mimItem">
										<!-- newsColumn -->
										<article class="newsColumn newsColumnMdMax text-gray777 mb-6 mb-lg-10 mb-xl-14 mx-auto">
											<div class="imgHolder">
												<a href="detailarticle.php?id=<?=$a->id?>">
													<img src="<?=$a->img?>" class="img-fluid" alt="image description">
												</a>
											</div>
											<div class="descrWrap bg-white position-relative mt-n16 pt-7 pr-3 pr-md-6">
												<time datetime="2011-01-12" class="ncTimeStamp d-block text-gray777 mb-2"><?=$a->dateCreation?></time>
												<h2 class="mb-4">
													<a href="detailarticle.php?id=<?=$a->id?>"><?=$a->titre?></a>
												</h2>
												<p class="mb-6" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;"><?=$a->contenu?></p>
												<a href="detailarticle.php?id=<?=$a->id?>" class="readMore">Read More</a>
											</div>
										</article>
									</div>
									<?php } ?>
								
								</div>
								<!-- btnHolder -->
								<footer class="btnHolder text-center">
									<a href="#" class="btn btnGre5 btnGre5Outline bdr2 btnMidMinWidth">Load More</a>
								</footer>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<!-- sidebar -->
							<aside id="sidebar" class="pl-lg-4 pl-xl-9 mb-6">
								<!-- widgetSearch -->
								<section class="widget widgetSearch mb-7">
									<form action="#">
										<div class="form-group position-relative mb-0">
											<input type="search" class="form-control d-block" placeholder="Search&hellip;">
											<input type="button" class="p-0 m-0 border-0 icomoon- btn position-absolute" value="&#xe904;">
										</div>
									</form>
								</section>
								<nav class="widget widgetNavList text-gray777 mb-8">
									<h3 class="border-bottom pb-3 mb-5">Categories</h3>
									<ul class="list-unstyled">
										<li>
											<a href="javascript:void(0);">Collections</a>
										</li>
										<li>
											<a href="javascript:void(0);">Press Release</a>
										</li>
										<li>
											<a href="javascript:void(0);">Exhibitions</a>
										</li>
										<li>
											<a href="javascript:void(0);">Programs</a>
										</li>
										<li>
											<a href="javascript:void(0);">People</a>
										</li>
										<li>
											<a href="javascript:void(0);">Institute Images</a>
										</li>
									</ul>
								</nav>
								
							</aside>
						</div>
					</div>
				</div>
			</section>
		</main>
		<?php include '_footer.php';?>
