<?php include('_header.php'); ?>
		<main>
			<!-- checkoutPageBlock -->
			<section class="checkoutPageBlock pt-8 pb-8 pt-lg-11 pb-lg-14 pt-xl-18 pb-xl-22">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-lg-7 mb-xl-9">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4">Vérification</h1>
							</div>
						</div>
					</header>
					<!-- alert -->
					<aside class="alert alert-light text-gray777">
						<p class="mb-0">Déjà client? <a href="javascript:void(0);" class="textDecorationNone text-secondary">Cliquer ici pour se connecter</a></p>
					</aside>
					<!-- alert -->
					<aside class="alert alert-light text-gray777">
						<p class="mb-0">avez-vous un coupon? <a href="javascript:void(0);" class="textDecorationNone text-secondary">Cliquer ici pour entrer votre code</a></p>
					</aside>
					<form action="#">
						<div class="row mx-xl-n4 mt-5 mb-6 mt-md-11 mb-md-10">
							<div class="col-12 col-md-6 px-xl-4">
								<h2 class="mb-5">Détails de la facturation</h2>
								<div class="form-row mx-n2">
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Prenom <span class="text-brown">*</span></strong>
												<input type="text" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Nom <span class="text-brown">*</span></strong>
												<input type="text" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Nom de la compagnie</strong>
												<input type="text" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Adresse email <span class="text-brown">*</span></strong>
												<input type="email" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Telephone <span class="text-brown">*</span></strong>
												<input type="tel" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Pays <span class="text-brown">*</span></strong>
												<select class="chosenSelect csSelect csSelectMedium rounded-sm" data-placeholder="Choose Country">
													<option value="1">Maroc</option>
													<option value="2">France</option>
													<option value="3">Belgique</option>
												</select>
											</label>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="d-block">
												<strong class="font-weight-normal d-block mb-1">Adresse <span class="text-brown">*</span></strong>
												<input type="text" class="form-control formControlMedium rounded-sm d-block w-100" placeholder="Adresse rue..">
												<input type="text" class="form-control mt-2 rounded-sm d-block w-100" placeholder="Apartment, suite, unit etc. (optional)">
											</div>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Ville <span class="text-brown">*</span></strong>
												<input type="text" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Province <span class="text-brown">*</span></strong>
												<input type="text" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Code postale <span class="text-brown">*</span></strong>
												<input type="text" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="custom-control custom-checkbox caCheckBox mt-1">
												<input type="checkbox" class="custom-control-input" id="ca">
												<label class="custom-control-label" for="ca">Créer un Compte?</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 px-xl-4">
								<div class="form-row mx-n2">
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<div class="custom-control custom-checkbox caCheckBox">
												<input type="checkbox" class="custom-control-input" id="spa">
												<label class="custom-control-label h2 mb-3" for="spa">Livrer dans une autre adresse?</label>
											</div>
										</div>
									</div>
									<div class="col-12 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Adresse</strong>
												<textarea class="rounded-sm form-control w-100 d-block caTextarea"></textarea>
											</label>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<h2 class="mb-4 mb-md-7">Votre Demande</h2>
						<!-- otTableWrap -->
						<div class="otTableWrap">
							<!-- orderTable -->
							<table class="w-100 orderTable text-gray777 border rounded-sm mb-8">
								<thead>
									<tr>
										<th>Produit</th>
										<th>Prix</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="tdWrap">Blcak Fancy Vavoom Cap x 1</div>
										</td>
										<td>
											<div class="tdWrap">
												<strong class="font-weight-normal text-secondary">£95.00</strong>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="tdWrap">Mia Calimao Uttliparian Plate x 1</div>
										</td>
										<td>
											<div class="tdWrap">
												<strong class="font-weight-normal text-secondary">£34.00</strong>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="tdWrap">ART Xhoopee Juke by kai Art x 1</div>
										</td>
										<td>
											<div class="tdWrap">
												<strong class="font-weight-normal text-secondary">£87.00</strong>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="tdWrap">
												<strong class="font-weight-normal text-secondary textLarge">Totale Produit</strong>
											</div>
										</td>
										<td>
											<div class="tdWrap">
												<strong class="font-weight-normal text-secondary">£198.00</strong>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="tdWrap">
												<strong class="font-weight-normal text-secondary textLarge">Livraison</strong>
											</div>
										</td>
										<td>
											<div class="tdWrap">
												<div class="custom-control ccSmall custom-radio text-gray777 mt-1 mb-1">
													<input type="radio" id="free" name="shipment" class="custom-control-input" checked="">
													<label class="custom-control-label" for="free">Livraison gratuite</label>
												</div>
												<div class="custom-control mb-2 ccSmall custom-radio text-gray777">
													<input type="radio" id="flat" name="shipment" class="custom-control-input">
													<label class="custom-control-label" for="flat"> livraison express: &nbsp;<span class="text-secondary">£10.00</span></label>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="tdWrap">
												<strong class="font-weight-normal text-secondary textLarge">Totale</strong>
											</div>
										</td>
										<td>
											<div class="tdWrap">
												<strong class="font-weight-normal text-secondary">£198.00</strong>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- orderPlacerBox -->
						<div class="orderPlacerBox bg-light rounded-sm px-5 pt-7">
							<div class="custom-control ccSmall custom-radio text-secondary mb-5">
								<input type="radio" id="dbt" name="payment" class="custom-control-input" checked="">
								<label class="custom-control-label" for="dbt">Virement bancaire direct
								</label>
								<div class="bg-white text-gray888 rounded-sm mt-3 position-relative boxNoter py-3 px-5">
									<p class="mb-0">Effectuez votre paiement directement sur notre compte bancaire. Veuillez utiliser votre ID de commande comme référence de paiement. Votre commande ne sera pas expédiée tant que le plaisir ne sera pas réglé sur notre compte.</p>
								</div>
							</div>
							<div class="custom-control ccSmall custom-radio text-secondary mb-5">
								<input type="radio" id="pp" name="payment" class="custom-control-input">
								<label class="custom-control-label" for="pp">PayPal <img src="images/paymentMethods.png" class="img-fluid my-n3 ml-2 cardImage" alt="image description"></label>
								<a href="javascript:void(0);" class="btnHelp text-primary mt-5 mt-sm-0 textDecorationNone d-inline-block align-top">C'est quoi PayPal?</a>
							</div>
							<div class="checkoutBtnWrap text-right mx-n5 px-5 mt-10 py-4">
								<input type="submit" class="btn btn-secondary d-block d-sm-inline-block text-uppercase px-md-8 py-md-4" value="Payer">
							</div>
						</div>
					</form>
				</div>
			</section>
		</main>
		<?php include('_footer.php'); ?>