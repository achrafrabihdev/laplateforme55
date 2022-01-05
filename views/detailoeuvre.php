<?php include('_header.php'); 
extract($_GET);
extract($_POST);
$o = Oeuvre::find($id);
$a = Oeuvre::artiste($o->artiste_id);
$mesoeuvres = Artiste::mesOeuvres($o->artiste_id);
?>


		<main>
			<!-- artworkContentBlock -->
			<section class="artworkContentBlock pt-8 pt-lg-12 pb-10 pb-lg-14 pb-xl-22">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
							<!-- acbFig -->
							<figure class="acbFig text-gray888 text-center mb-6 mb-md-10">
								<div class="imgHolder mb-3">
									<img src="<?=$o->image?>" class="img-fluid" alt="image description">
								</div>
								<figcaption>&copy; <?=$a->prenom?> <?=$a->nom?>
								</figcaption>
							</figure>
							<!-- figRelActionList -->
							<ul
								class="list-unstyled d-flex flex-wrap text-center justify-content-center figRelActionList mb-0">
								<li>
									<a href="javascript:void(0);" data-toggle="modal" data-target="#ModalShare">
										<i class="icomoon-share"><span class="sr-only">icon</span></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="icomoon-download"><span class="sr-only">icon</span></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="icomoon-resize"><span class="sr-only">icon</span></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<hr class="mt-8 mb-8 mb-lg-13 mb-xl-19">
				<div class="container">
					<div class="px-xl-6">
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 col-xl-8 offset-xl-2">
								<h2 class="mb-1"><?=$o->nom?></h2>
								<hr class="mt-5 mt-md-8 mb-4">
								<p class="mb-7"><?=$o->description?></p>
								<!-- apDataTable -->
								<table class="apDataTable apDataTableII text-gray777 w-100 mt-5 mb-9 mb-lg-14">
									<tbody>
										<tr>
											<td class="text-secondary">Artist</td>
											<td><?=$a->prenom?> <?=$a->nom?></td>
										</tr>
										<tr>
											<td class="text-secondary">Year</td>
											<td>Early 20th century</td>
										</tr>
										<tr>
											<td class="text-secondary">Location</td>
											<td>On View: Room 25, South Wall</td>
										</tr>
										<tr>
											<td class="text-secondary">Material</td>
											<td>Oil on panel</td>
										</tr>
										<tr>
											<td class="text-secondary">Accession Number</td>
											<td>1945.81</td>
										</tr>
										<tr>
											<td class="text-secondary">Dimensions</td>
											<td><?=$o->hauteur?>CM x <?=$o->largeur?>CM x <?=$o->epaisseur?>CM</td>
										</tr>
										<tr>
											<td class="text-secondary">Credit</td>
											<td>Art &amp; History Museum, on loan from a private collection</td>
										</tr>
									</tbody>
								</table>

								<!-- hamid saaidi -->
									<div class="currOnviewSliderIII" style="padding-top: 10%;">
									<?php foreach($mesoeuvres as $o){ ?>
									<div>
										<div class="col-12 px-xl-4">
											<!-- currExibitColumn -->
											<article class="currExibitColumn mb-6 mx-auto">
												<div class="imgHolder mb-3 mb-lg-7">
													<a href="detailoeuvre.php?id=<?=$id?>">>
														<img src="<?=$o->image?>" class="img-fluid w-100 d-block"
															alt="image description">
													</a>
												</div>
												<h2 class="mb-3">
													<a href="detailoeuvre.php?id=<?=$id?>"><?=$o->nom?></a>
												</h2>
									
											</article>
										</div>
									</div>
									<?php }?>
									<div>
										
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
		</main>




		<?php include('_footer.php'); ?>