<?php include('_header.php'); 
extract($_GET);
extract($_POST);
$categories = Categorie::all();
?>
		<main>
			<!-- checkoutPageBlock -->
			<section class="checkoutPageBlock pt-8 pb-8 pt-lg-11 pb-lg-14 pt-xl-18 pb-xl-22">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-lg-7 mb-xl-9">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4">Ajouter une oeuvre</h1>
							</div>
						</div>
					</header>
					<!-- alert -->
				
					<form action="../controllers/oeuvreController.php?a=create" method="POST" enctype="multipart/form-data">
						<div class="row mx-xl-n4 mt-5 mb-6 mt-md-11 mb-md-10">
							<div class="col-12 col-md-6 px-xl-4">
								<h2 class="mb-5">Information sur l'oeuvre</h2>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Nom D'oeuvre</strong>
												<input type="text" name="nom" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Categorie d'oeuvre</strong>
												<select class="form-control" name="cat" id="exampleFormControlSelect1">
												<?php foreach($categories as $cat) { ?>
													<option value="<?=$cat->id?>"><?=$cat->nom?></option>
												<?php } ?>
												</select>									
												</label>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Description <span class="text-brown">*</span></strong>
												<textarea rows="20" name="description" class="form-control formControlMedium rounded-sm d-block w-100"></textarea>
											</label>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="d-block">
												<strong class="font-weight-normal d-block mb-1">Histoire <span class="text-brown">*</span></strong>
												<textarea rows="20" name="histoire" class="form-control formControlMedium rounded-sm d-block w-100"></textarea>
												
											</div>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="d-block">
												<strong class="font-weight-normal d-block mb-1">Hauteur <span class="text-brown">*</span></strong>
                                                <input type="text" name="hauteur" class="form-control formControlMedium rounded-sm d-block w-100">
												
											</div>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="d-block">
												<strong class="font-weight-normal d-block mb-1">Langeur <span class="text-brown">*</span></strong>
                                                <input type="text" name="largeur" class="form-control formControlMedium rounded-sm d-block w-100">
												
											</div>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="d-block">
												<strong class="font-weight-normal d-block mb-1">Epaisseur <span class="text-brown">*</span></strong>
                                                <input type="text" name="epaisseur" class="form-control formControlMedium rounded-sm d-block w-100">
												
											</div>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="d-block">
												<strong class="font-weight-normal d-block mb-1">Prix <span class="text-brown">*</span></strong>
                                                <input type="text" name="prix" class="form-control formControlMedium rounded-sm d-block w-100">
												
											</div>
										</div>
									</div>
                                    <div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="d-block">
												<strong class="font-weight-normal d-block mb-1">Image d'oeuvre <span class="text-brown">*</span></strong>
                                                 
												<input type="file" name="img" class="form-control formControlMedium rounded-sm d-block w-100">
												
											</div>
										</div>
									</div>
                                    
									
							
							<div class="checkoutBtnWrap text-right mx-n5 px-5 mt-10 py-4">
								<input type="submit" class="btn btn-secondary d-block d-sm-inline-block text-uppercase px-md-8 py-md-4" value="Ajouter">
							</div>
						</div>
					</form>
				</div>
			</section>
		</main>
		<?php include('_footer.php'); ?>