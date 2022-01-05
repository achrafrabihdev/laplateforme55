<?php
spl_autoload_register(function ($class) {
    include('../../models/' . $class . '.class.php');
});
$articles = Article::allArticles();
include('_verifier.php');
 ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.adminkit.io/dashboard-ecommerce.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 02:48:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords"
		content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="dashboard-ecommerce.php" />

	<title> 55 La PLate Forme</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

	<!-- BEGIN SETTINGS -->
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-10"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-120946860-10', {
			'anonymize_ip': true
		});
	</script>
</head>

<body data-theme="default" data-layout="fluid" data-sidebar="left">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
					<span class="align-middle">5|5 LaPlateForme</span>
				</a>

				<ul class="sidebar-nav">

					<li class="sidebar-item ">
						<a class="sidebar-link" href="index.php">
							<i class="align-middle" data-feather="sliders"></i> <span
								class="align-middle">Dashboards</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="notre-histoire.php">
							<i class="align-middle" data-feather="bar-chart"></i> <span class="align-middle">Notre
								histoire</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="HomePage.php">
							<i class="align-middle" data-feather="layout"></i> <span class="align-middle">Home
								Page</span>
						</a>
					</li>
					<li class="sidebar-item ">
						<a data-bs-target="#artiste" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Artiste</span>
						</a>
						<ul id="artiste" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item "><a class="sidebar-link" href="artiste.php">Liste des
									artistes</a>

							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="Add-artiste.php">Ajouter un
									artiste</a></li>

						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#Oeuvre" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="book-open"></i> <span
								class="align-middle">Oeuvre</span>
						</a>
						<ul id="Oeuvre" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item"><a class="sidebar-link" href="Oeuvre.php">Liste des Oeuvres</a>

							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="Add-Oeuvre.php">Ajouter un
									Oeuvre</a></li>

						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#Evenement" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-calendar-alt"></i><span
								class="align-middle">Evenement</span>
						</a>
						<ul id="Evenement" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item"><a class="sidebar-link" href="Evenement.php">Liste des
									Evenement</a>

							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="Add-Evenement.php">Ajouter un
									Evenement</a></li>

						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#Formation" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-book"></i><span
								class="align-middle">Formation</span>
						</a>
						<ul id="Formation" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item"><a class="sidebar-link" href="Formation.php">Liste des
									Formation</a>

							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="Add-Formation.php">Ajouter un
									Formation</a></li>

						</ul>
					</li>
					<li class="sidebar-item active">
						<a data-bs-target="#Article" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-book-reader"></i> <span
								class="align-middle">Article</span>
						</a>
						<ul id="Article" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item active"><a class="sidebar-link" href="Article.php">Liste des
									Article</a>

							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="Add-Article.php">Ajouter un
									Article</a></li>
						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#Project" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-book-reader"></i> <span
								class="align-middle">Projects</span>
						</a>
						<ul id="Project" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item "><a class="sidebar-link" href="Project.php">Liste des Projects</a>

							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="Add-Project.php">Ajouter un
									Project</a></li>

						</ul>
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#Soutenir" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-donate"></i> <span
								class="align-middle">Soutenant</span>
						</a>
						<ul id="Soutenir" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item"><a class="sidebar-link" href="Soutenir.php">Liste des
									Soutenant</a>

							</li>
							<li class="sidebar-item"><a class="sidebar-link" href="Add-Soutenir.php">Ajouter un
									Soutenir</a></li>

						</ul>
					</li>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
					<i class="hamburger align-self-center"></i>
				</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">1</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
								aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									1 New Notification
								</div>
								<div class="list-group">

									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
													hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>

								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
								data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
								aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg"
													class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
													tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg"
													class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod
													vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg"
													class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
												</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg"
													class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
													posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
								data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
								data-bs-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1"
									alt="Charles Hall" /> <span class="text-dark">Ilias ALAMI FILALI</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.php"><i class="align-middle me-1"
										data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.php"><i class="align-middle me-1"
										data-feather="settings"></i> Settings &
									Privacy</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1"
										data-feather="help-circle"></i> Help Center</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../../controllers/adminController.php?a=logout">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Liste des Articles</h1>
					</div>

					<div class="row">
						<div class="col-xl-12">
							<div class="card">
								<div class="card-header pb-0">
									<div class="card-actions float-end">
										<button type="button" class="btn btn-success" onclick="window.location.href='Add-Article.php';">Ajouter Article
										</button>


									</div>
									<div class="card-body">
										<div class="table-responsive" style="width:100%">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Image</th>
														<th>Date d'ajout</th>
														<th>Titre</th>
														<th>Contenu</th>
														<th>Status</th>
														<th>Action</th>

													</tr>
												</thead>
												<tbody>
													<?php foreach($articles as $a) {?>
													<tr>
														<td><img src="../<?=$a->img?>" width="32" height="32"
																class="my-n1" alt="Avatar"></td>
														<td><?=$a->dateCreation?></td>
														<td><?=$a->titre?></td>
														<td><?=$a->contenu?><td>
														<td><span class="badge bg-success">Active</span></td>

														<td><button type="button" class="btn btn-warning"
																data-bs-toggle="modal"
																data-bs-target="#ModifierArticle">Modifier
															</button>  <button type="button" class="btn btn-danger"
																data-bs-toggle="modal"
																data-bs-target="#SupprimerArticle">
																Supprimer
															</button></td>

													</tr>
														<?php }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="index.php" class="text-muted"><strong>5|5 La Plate Forme</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<!-- BEGIN Modification modal -->

	<div class="modal fade" id="ModifierArticle" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modifier Article</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body m-3">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Information sur l'article</h5>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="row">
											<div class="col-12 col-md-12 px-xl-4">
												<div class="form-row mx-n2">
													<div class="col-12 col-sm-12 px-2">
														<strong
															class="font-weight-normal d-block mb-1 form-label">Artiste
															<span class="text-brown">*</span></strong>
														<select class="form-select" id="validationCustom04" required>
															<option selected disabled value="">Choisissez l'artiste
															</option>
															<option>RIDA BENHARROU</option>
															<option>JOURNO Store</option>
															<option>Mohammed ARRHIOUI</option>
															<option>Hamza BENRACHAD</option>

														</select>
														<div class="invalid-feedback">
															Veuillez sélectionner un artiste valide.
														</div>
													</div>
													<div class="col-12 col-sm-12 px-2">
														<div class="form-group position-relative mb-2">
															<label class="d-block">
																<strong class="font-weight-normal d-block mb-1">Titre
																	<span class="text-brown">*</span></strong>
																<input type="text"
																	class="form-control formControlMedium rounded-sm d-block w-100">
															</label>
														</div>
													</div>
													<div class="col-12 col-sm-12 px-2">
														<div class="form-group position-relative mb-2">
															<label class="d-block">
																<strong class="font-weight-normal d-block mb-1">Montant
																	dont vous avez besoin <span
																		class="text-brown">*</span></strong>
																<input type="number"
																	class="form-control formControlMedium rounded-sm d-block w-100">
															</label>
														</div>
													</div>
													<div class="col-12 col-sm-12 px-2">
														<div class="form-group position-relative mb-2">
															<label class="d-block">
																<strong class="font-weight-normal d-block mb-1">Image du
																	projet<span class="text-brown">*</span></strong>
																<input type="file"
																	class="form-control formControlMedium rounded-sm d-block w-100">
															</label>
														</div>
													</div>
													<div class="col-12 col-sm-12 px-2">
														<div class="form-group position-relative mb-2">
															<label class="d-block">
																<strong class="font-weight-normal d-block mb-1">Affiche
																	du projet<span class="text-brown">*</span></strong>
																<input type="file"
																	class="form-control formControlMedium rounded-sm d-block w-100">
															</label>
														</div>
													</div>


													<div class="col-12 px-2">
														<div class="form-group position-relative mb-2">
															<label class="d-block">
																<strong
																	class="font-weight-normal d-block mb-1">Description
																	du projet<span class="text-brown">*</span></strong>
																<textarea rows="20"
																	class="form-control formControlMedium rounded-sm d-block w-100"></textarea>
															</label>
														</div>
													</div>




												</div>
											</div>

										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-warning">Soumettre ma demande</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Modification modal -->
	<!-- BEGIN Suppression modal -->

	<div class="modal fade" id="SupprimerArticle" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Supprimer Article</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body m-3">
					<p class="mb-0">Voulez-vous Supprimer cet Article</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- END Suppression modal -->





	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
						"Dec"
					],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
						"Dec"
					],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var markers = [{
					coords: [37.77, -122.41],
					name: "San Francisco: 375"
				},
				{
					coords: [40.71, -74.00],
					name: "New York: 350"
				},
				{
					coords: [39.09, -94.57],
					name: "Kansas City: 250"
				},
				{
					coords: [36.16, -115.13],
					name: "Las Vegas: 275"
				},
				{
					coords: [32.77, -96.79],
					name: "Dallas: 225"
				}
			];
			var map = new jsVectorMap({
				map: "us_aea_en",
				selector: "#usa_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function (event) {
			setTimeout(function () {
				if (localStorage.getItem('popState') !== 'shown') {
					window.notyf.open({
						type: "success",
						message: "Get access to all 500+ components and 45+ pages with AdminKit PRO. <u><a class=\"text-white\" href=\"https://adminkit.io/pricing\" target=\"_blank\">More info</a></u> 🚀",
						duration: 10000,
						ripple: true,
						dismissible: false,
						position: {
							x: "left",
							y: "bottom"
						}
					});

					localStorage.setItem('popState', 'shown');
				}
			}, 15000);
		});
	</script>
</body>



</html>