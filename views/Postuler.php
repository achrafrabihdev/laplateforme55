<?php include('_header.php');
extract($_GET);
extract($_POST);?>
		<main>
			<!-- checkoutPageBlock -->
			<section class="checkoutPageBlock pt-8 pb-8 pt-lg-11 pb-lg-14 pt-xl-18 pb-xl-22">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-lg-7 mb-xl-9">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4"> Candidature</h1>
							</div>
						</div>
					</header>
					<!-- alert -->
<!--
					<aside class="alert alert-light text-gray777">
						<p class="mb-0">Returning customer? <a href="javascript:void(0);" class="textDecorationNone text-secondary">Click here to login</a></p>
					</aside>
-->
					<!-- alert -->
<!--
					<aside class="alert alert-light text-gray777">
						<p class="mb-0">Have a coupon? <a href="javascript:void(0);" class="textDecorationNone text-secondary">Click here to enter your code</a></p>
					</aside>
-->
					<form method="POST" action="../controllers/candidatureController.php?a=create" enctype="multipart/form-data">
					<input type="hidden" name="type" value="<?=$type?>">
					<input type="hidden" name="fk_id" value="<?=$fk_id?>">
						<div class="row mx-xl-n4 mt-5 mb-6 mt-md-11 mb-md-10">
							<div class="col-12 col-md-6 px-xl-4">
								<h2 class="mb-5">Information sur le candidat</h2>
								<div class="form-row mx-n2">
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Prenom <span class="text-brown">*</span></strong>
												<input type="text" name="prenom" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Nom <span class="text-brown">*</span></strong>
												<input type="text" name="nom" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Telephone <span class="text-brown">*</span></strong>
												<input type="text" name="telephone" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Pays <span class="text-brown">*</span></strong>
												<input type="text" name="pays" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Ville <span class="text-brown">*</span></strong>
												<input type="text" name="ville" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Adresse <span class="text-brown">*</span></strong>
												<input type="text" name="adresse" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<!-- <div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Durée <span class="text-brown">*</span></strong>
												<input type="number" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div> -->
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Des informations complémentaires à ajouter? </strong> 
                                                <textarea rows="20" name="infoplus" class="form-control formControlMedium rounded-sm d-block w-100"></textarea>
											</label>
										</div>
									</div>
                                    <div class="col-12  px-2">
                                       <button class="btn btnBrown text-uppercase px-5">Soumettre ma demande</button>
                                    </div>
							</div>
                            </div>

                            </div>
							
					</form>
				</div>
			</section>
		</main>
		<?php include('_footer.php');?>