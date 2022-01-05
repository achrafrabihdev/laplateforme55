<?php include('_header.php'); ?>
		<main>
			<!-- cartPageBlock -->
			<section class="cartPageBlock pt-7 pb-7 pt-md-9 pb-md-9 pt-lg-12 pb-lg-14 pt-xl-18 pb-xl-22">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-5 mb-lg-9">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4">Panier </h1>
							</div>
						</div>
					</header>
					<form action="#">
						<!-- carterTableWrap -->
						<div class="carterTableWrap">
							<!-- cartTable -->
							<table class="cartTable text-secondary w-100 mb-9">
								<thead>
									<tr>
										<th class="tbCol1">Produit</th>
										<th class="tbCol2">Prix</th>
										<th class="tbCol3">Quantité</th>
										<th class="tbCol4">Totale</th>
										<th class="tbCol5">&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="tbCol1">
											<div class="tdWrap">
												<div class="d-flex w-100 align-items-center">
													<div class="imgHolder flex-shrink-0 mr-4">
														<img src="images/img41.png" class="img-fluid" alt="image description">
													</div>
													<strong class="title d-block text-gray777 font-weight-normal">Mia Calimao Uttliparian Plate</strong>
												</div>
											</div>
										</td>
										<td class="tbCol2">
											<div class="tdWrap">£95.00</div>
										</td>
										<td class="tbCol3">
											<div class="tdWrap">
												<div class="quantity quantityII position-relative d-inline-block mt-1">
													<input type="number" min="1" value="2">
												</div>
											</div>
										</td>
										<td class="tbCol4">
											<div class="tdWrap">£190.00</div>
										</td>
										<td class="tbCol5 text-right">
											<div class="tdWrap">
												<a href="javascript:void(0);" class="btnCartRemove border rounded-circle d-inline-block align-top position-relative"><span class="sr-only">remove</span></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="tbCol1">
											<div class="tdWrap">
												<div class="d-flex w-100 align-items-center">
													<div class="imgHolder flex-shrink-0 mr-4">
														<img src="images/img161.jpg" class="img-fluid" alt="image description">
													</div>
													<strong class="title d-block text-gray777 font-weight-normal">Mia Calimao Uttliparian Plate</strong>
												</div>
											</div>
										</td>
										<td class="tbCol2">
											<div class="tdWrap">£34.00</div>
										</td>
										<td class="tbCol3">
											<div class="tdWrap">
												<div class="quantity quantityII position-relative d-inline-block mt-1">
													<input type="number" min="1" value="1">
												</div>
											</div>
										</td>
										<td class="tbCol4">
											<div class="tdWrap">£34.00</div>
										</td>
										<td class="tbCol5 text-right">
											<div class="tdWrap">
												<a href="javascript:void(0);" class="btnCartRemove border rounded-circle d-inline-block align-top position-relative"><span class="sr-only">remove</span></a>
											</div>
										</td>
									</tr>
									<tr>
										<td class="tbCol1">
											<div class="tdWrap">
												<div class="d-flex w-100 align-items-center">
													<div class="imgHolder flex-shrink-0 mr-4">
														<img src="images/img162.jpg" class="img-fluid" alt="image description">
													</div>
													<strong class="title d-block text-gray777 font-weight-normal">ART Xhoopee Juke by kai Art</strong>
												</div>
											</div>
										</td>
										<td class="tbCol2">
											<div class="tdWrap">£87.00</div>
										</td>
										<td class="tbCol3">
											<div class="tdWrap">
												<div class="quantity quantityII position-relative d-inline-block mt-1">
													<input type="number" min="1" value="1">
												</div>
											</div>
										</td>
										<td class="tbCol4">
											<div class="tdWrap">£87.00</div>
										</td>
										<td class="tbCol5 text-right">
											<div class="tdWrap">
												<a href="javascript:void(0);" class="btnCartRemove border rounded-circle d-inline-block align-top position-relative"><span class="sr-only">remove</span></a>
											</div>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="px-0">
											<div class="tdWrap">
												<div class="d-flex pt-1">
													<input type="text" class="form-control mr-2 coupenField" placeholder="Code du Coupon">
													<button type="button" class="btn bdr2 btn-outline-light btnCoupen">Ajouter Coupon</button>
												</div>
											</div>
										</td>
										<td colspan="2" class="px-0">
											<div class="tdWrap">
												<div class="text-right">
													<a href="javascript:void(0);" class="btn btnBrown btnUpdateCart">Mise à jour panier </a>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- carterTableWrap -->
						<div class="carterTableWrap">
							<div class="row no-gutters">
								<div class="col-12 col-md-8 offset-md-4 col-lg-6 offset-lg-6">
									<h2 class="mb-7">Detail panier</h2>
									<!-- cartTotals -->
									<table class="w-100 cartTotals text-secondary mb-5">
										<tbody>
											<tr>
												<td>
													<div class="tdWrap">Prix Produit</div>
												</td>
												<td>
													<div class="tdWrap">£34.00</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="tdWrap">Livraison</div>
												</td>
												<td>
													<div class="tdWrap">
														<div class="custom-control small custom-radio text-gray777 mt-1 mb-1">
															<input type="radio" id="free" name="shipment" class="custom-control-input" checked>
															<label class="custom-control-label" for="free">Livraison gratuite</label>
														</div>
														<div class="custom-control mb-1 small custom-radio text-gray777">
															<input type="radio" id="flat" name="shipment" class="custom-control-input">
															<label class="custom-control-label" for="flat">Flat Rate: &nbsp;<span class="text-secondary">£10.00</span></label>
														</div>
														<button type="button" class="btnCalcShipment border-0 p-0 mb-3">Calculer Frais de Livraison</button>
														<select class="chosenSelect csSelect csSelectSmall w-100" data-placeholder="Choose Country">
															<option value="1">Maroc</option>
															<option value="2">ipsum</option>
															<option value="3">dolor</option>
														</select>
														<select class="chosenSelect csSelect csSelectSmall w-100" data-placeholder="Select an option&hellip;">
															<option value="1">France</option>
															<option value="2">ipsum</option>
															<option value="3">dolor</option>
														</select>
														<input type="text" class="form-control cartField w-100 d-block mb-2" placeholder="Postcode / ZIP">
														<button class="btn btn-light cartBtn mb-4">Modifier</button>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="tdWrap">Totale</div>
												</td>
												<td>
													<div class="tdWrap">£198.00</div>
												</td>
											</tr>
										</tbody>
									</table>
									<a href="checkout.html" class="btn btn-secondary py-xl-4 w-100 d-block text-uppercase">Passer à la caisse</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
		</main>
		<?php include('_footer.php'); ?>