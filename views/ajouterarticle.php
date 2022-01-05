<?php include('_header.php');?>
		<main>
			<!-- checkoutPageBlock -->
			<section class="checkoutPageBlock pt-8 pb-8 pt-lg-11 pb-lg-14 pt-xl-18 pb-xl-22">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-lg-7 mb-xl-9">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4">Ajouter Un Article</h1>
							</div>
						</div>
					</header>
					<!-- alert -->
					
					<form action="../controllers/articleController.php?a=create" method="POST" enctype="multipart/form-data">
						<div class="row mx-xl-n4 mt-5 mb-6 mt-md-11 mb-md-10">
							<div class="col-12 col-md-6 px-xl-4">
								<h2 class="mb-5">Article Détails</h2>
								<div class="form-row mx-n2">
									<div class="col-12 col-sm-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Titre <span class="text-brown">*</span></strong>
												<input type="text" name="titre" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Contenu <span class="text-brown">*</span></strong> 
                                                <textarea rows="20" name="contenu" class="form-control formControlMedium rounded-sm d-block w-100"></textarea>
											</label>
										</div>
									</div>
								
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Image<span class="text-brown">*</span></strong>
												<input type="file" name="img" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
						
							</div>
							
						</div>
						
					
						<!-- otTableWrap -->
					
						<!-- orderPlacerBox -->
			
				<div class="col-12  px-2">
					<button class="btn btnBrown text-uppercase px-5">Soumettre ma demande</button>
				 </div>
					</form>
				</div>
			</section>
		</main>
		<?php include('_footer.php');?>