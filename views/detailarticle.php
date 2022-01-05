<?php include('_header.php');
extract($_GET);
extract($_POST);
$a = Article::find($id);
$ed = Article::editeur($a->editeur_id);
$comments = Article::commantaires($id);
$nbrComment = Article::nbrComments($id);
?>
		<main>
			<!-- singleContent -->
			<article id="singleContent" class="pt-6 pb-6 pt-md-8 pb-md-11 pt-lg-12  pt-xl-20 pb-xl-17">
				<div class="container">
					<!-- scHeadingHead -->
					<header class="scHeadingHead text-center mb-7 mb-md-10 mb-lg-14">
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
								<!-- scBtnBack -->
								<a href="javascript:void(0);" class="scBtnBack textDecorationNone d-inline-block align-top mb-5 mb-lg-8"><i class="fas fa-angle-left icn"><span class="sr-only">icon</span></i> Back to all Post</a>
								<h1 class="mb-5"><?=$a->titre?></h1>
								<time datetime="2011-01-12" class="d-block scTime text-gray777"><?=$a->dateCreation?> - By <a href="javascript:void(0);" class="textDecorationNone text-secondary"><?=$ed->prenom?> <?=$ed->nom?></a> </time>
							</div>
						</div>
					</header>
					<div class="row">
						<div class="col-12 col-md-8 mb-6">
							<div class="imgHolder mb-6">
								<img src="<?=$a->img?>" class="w-100 img-fluid" alt="image description">
							</div>
							<!-- eabDescrText -->
							<div class="eabDescrText eabDescrTextIII fontSerif">
								<p class="mb-7"><?=$a->contenu?></p>
							</div>
							
							
							<div class="tagShareFeet border-bottom mt-7 mt-lg-11 pb-2 pb-md-4">
								<div class="row">
						
									<div class="col-12 col-sm-3 text-right">
										<div class="d-flex justify-content-center justify-content-sm-end position-relative">
											<!-- btnShare -->
											<a href="javascript:void(0);" class="btnShare text-secondary d-flex align-items-center textDecorationNone " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-share-alt icn d-flex align-items-center justify-content-center rounded-circle text-white mr-2" aria-hidden="true"><span class="sr-only">icon</span></i>
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
									</div>
								</div>
							</div>
						
							<!-- commentsWrap -->
							<div class="commentsWrap">
								<!-- commentsOpener -->
								<a class="commentsOpener d-block fontSerif text-secondary position-relative mb-4" data-toggle="collapse" href="#commentsCollapse" role="button" aria-expanded="true" aria-controls="commentsCollapse"><?=$nbrComment->nbr?> Comments</a>
								<!-- commentsCollapse -->
								<div class="collapse show" id="commentsCollapse">
									<div class="overflow-hidden">
										<!-- commentsList -->
										<ul class="commentsList list-unstyled border text-gray777">
										<?php
										if(!empty($comments)){
										 foreach($comments as $c) { 
											$u = Commantaire::user($c->user_id);
											?>
											<li>
												<!-- cmWrap -->
												<div class="cmWrap px-3 pt-3 pb-3 px-md-5 pt-md-5 pb-md-6 d-flex">
													<div class="descrWrap">
														<h3 class="fontBase mb-1"><?=$u->prenom?> <?=$u->nom?></h3>
														<time datetime="2011-01-12" class="d-block mb-3"><?=$c->dateCreation?></time>
														<p class="mb-4"><?=$c->contenu?></p>
													</div>
												</div>
												
											</li>
											<?php } 
											}?>
										</ul>
									</div>
								</div>
							</div>
							<h2 class="mt-7 mt-lg-11 mb-5">Add Your Comment </h2>
							<!-- commentsForm -->
							<form action="../controllers/commantaireController.php?a=create&id=<?=$id?>" method="POST"  class="commentsForm">
								<div class="row mx-n2">
									<div class="col-12 px-2">
										<div class="form-group mb-2">
											<label for="comment" class="d-block mb-1">Your Comment</label>
											<textarea id="comment" name="contenu" class="form-control d-block w-100"></textarea>
										</div>
									</div>
								</div>
								<input type="submit" class="btn btn-secondary mt-4 text-uppercase px-6" value="Post Comment">
							</form>
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
								<!-- widgetNavList -->
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
			</article>
		</main>
		<?php include('_footer.php');?>