<?php include('_header.php');?>
		<main>
			<!-- checkoutPageBlock -->
			<section class="checkoutPageBlock pt-8 pb-8 pt-lg-11 pb-lg-14 pt-xl-18 pb-xl-22">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-lg-7 mb-xl-9">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4"> Ajouter ue offre</h1>
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
					<form method="POST" action="../controllers/offreController.php?a=create" enctype="multipart/form-data">
						<div class="row mx-xl-n4 mt-5 mb-6 mt-md-11 mb-md-10">
							<div class="col-12 col-md-6 px-xl-4">
								<h2 class="mb-5">Information sur l'offre</h2>
								<div class="form-row mx-n2">
									<div class="col-12 col-sm-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Titre <span class="text-brown">*</span></strong>
												<input type="text" name="titre" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">type d'offre <span class="text-brown">*</span></strong>
												<select name="offretype" class="form-control formControlMedium rounded-sm d-block w-100">
													<option value="1">offre d'emploi</option>
													<option value="2">offre de stage</option>
												</select>
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
												<strong class="font-weight-normal d-block mb-1">Description<span class="text-brown">*</span></strong> 
                                                <textarea rows="20" name="description" class="form-control formControlMedium rounded-sm d-block w-100"></textarea>
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Affiche de l'offre<span class="text-brown">*</span></strong>
												<input type="file" name="img" class="form-control formControlMedium rounded-sm d-block w-100">
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