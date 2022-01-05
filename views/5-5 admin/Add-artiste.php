<?php include('_verifier.php'); ?>
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

					<li class="sidebar-item">
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
					<li class="sidebar-item active">
						<a data-bs-target="#artiste" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Artiste</span>
						</a>
						<ul id="artiste" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item"><a class="sidebar-link" href="artiste.php">Liste des artistes</a>

							</li>
							<li class="sidebar-item active"><a class="sidebar-link" href="Add-artiste.php">Ajouter un
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
					<li class="sidebar-item">
						<a data-bs-target="#Article" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-book-reader"></i> <span
								class="align-middle">Article</span>
						</a>
						<ul id="Article" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">

							<li class="sidebar-item"><a class="sidebar-link" href="Article.php">Liste des Article</a>

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

					<h1 class="h3 mb-3">Ajouter un Artiste</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Information sur l'artiste</h5>
								</div>
								<div class="card-body">
								<form action="../../controllers/userController.php?a=signup&admin=oui" method="POST" enctype="multipart/form-data">
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Prénom <span
                                                        class="text-brown">*</span></strong>
                                                <input type="text" name="prenom" class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
										<input type="hidden" name="typecompte" value="artiste">
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Nom de famille <span
                                                        class="text-red">*</span></strong>
                                                <input type="text" name="nom" class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Email Address <span
                                                        class="text-brown">*</span></strong>
                                                <input type="email" name="email"
                                                    class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Sexe <span
                                                        class="text-brown">*</span></strong>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1" value="homme">
                                                        <label class="form-check-label" for="inlineRadio1">homme</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2" value="femme">
                                                        <label class="form-check-label" for="inlineRadio2">femme</label>
                                                    </div>
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Password <span
                                                        class="text-brown">*</span></strong>
                                                <input type="password" name="mdp"
                                                    class="form-control formControlMedium d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Date de naissance <span
                                                        class="text-red">*</span></strong>
                                                <input type="date" name="dateDeNaissance"  class="form-control formControlMedium rounded-sm d-block w-100">
                                            </label>
                                        </div>
                                        <div class="form-group position-relative mb-3">
                                            <label class="d-block mb-0">
                                                <strong class="d-block font-weight-normal mb-1">Pays d'origine <span
                                                        class="text-red">*</span></strong>
                                                <select class="form-control" id="exampleFormControlSelect1" name="pays">
                                                    <option selected >Séléctionnez votre ville
                                                    </option>


                                                    <option value="Afghanistan">Afghanistan </option>
                                                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                                                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                                    <option value="Albanie">Albanie </option>
                                                    <option value="Algerie">Algerie </option>
                                                    <option value="Allemagne">Allemagne </option>
                                                    <option value="Andorre">Andorre </option>
                                                    <option value="Angola">Angola </option>
                                                    <option value="Anguilla">Anguilla </option>
                                                    <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                                    <option value="Argentine">Argentine </option>
                                                    <option value="Armenie">Armenie </option>
                                                    <option value="Australie">Australie </option>
                                                    <option value="Autriche">Autriche </option>
                                                    <option value="Azerbaidjan">Azerbaidjan </option>

                                                    <option value="Bahamas">Bahamas </option>
                                                    <option value="Bangladesh">Bangladesh </option>
                                                    <option value="Barbade">Barbade </option>
                                                    <option value="Bahrein">Bahrein </option>
                                                    <option value="Belgique">Belgique </option>
                                                    <option value="Belize">Belize </option>
                                                    <option value="Benin">Benin </option>
                                                    <option value="Bermudes">Bermudes </option>
                                                    <option value="Bielorussie">Bielorussie </option>
                                                    <option value="Bolivie">Bolivie </option>
                                                    <option value="Botswana">Botswana </option>
                                                    <option value="Bhoutan">Bhoutan </option>
                                                    <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                                    <option value="Bresil">Bresil </option>
                                                    <option value="Brunei">Brunei </option>
                                                    <option value="Bulgarie">Bulgarie </option>
                                                    <option value="Burkina_Faso">Burkina_Faso </option>
                                                    <option value="Burundi">Burundi </option>

                                                    <option value="Caiman">Caiman </option>
                                                    <option value="Cambodge">Cambodge </option>
                                                    <option value="Cameroun">Cameroun </option>
                                                    <option value="Canada">Canada </option>
                                                    <option value="Canaries">Canaries </option>
                                                    <option value="Cap_vert">Cap_Vert </option>
                                                    <option value="Chili">Chili </option>
                                                    <option value="Chine">Chine </option>
                                                    <option value="Chypre">Chypre </option>
                                                    <option value="Colombie">Colombie </option>
                                                    <option value="Comores">Colombie </option>
                                                    <option value="Congo">Congo </option>
                                                    <option value="Congo_democratique">Congo_democratique </option>
                                                    <option value="Cook">Cook </option>
                                                    <option value="Coree_du_Nord">Coree_du_Nord </option>
                                                    <option value="Coree_du_Sud">Coree_du_Sud </option>
                                                    <option value="Costa_Rica">Costa_Rica </option>
                                                    <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                                    <option value="Croatie">Croatie </option>
                                                    <option value="Cuba">Cuba </option>

                                                    <option value="Danemark">Danemark </option>
                                                    <option value="Djibouti">Djibouti </option>
                                                    <option value="Dominique">Dominique </option>

                                                    <option value="Egypte">Egypte </option>
                                                    <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                                    <option value="Equateur">Equateur </option>
                                                    <option value="Erythree">Erythree </option>
                                                    <option value="Espagne">Espagne </option>
                                                    <option value="Estonie">Estonie </option>
                                                    <option value="Etats_Unis">Etats_Unis </option>
                                                    <option value="Ethiopie">Ethiopie </option>

                                                    <option value="Falkland">Falkland </option>
                                                    <option value="Feroe">Feroe </option>
                                                    <option value="Fidji">Fidji </option>
                                                    <option value="Finlande">Finlande </option>
                                                    <option value="France">France </option>

                                                    <option value="Gabon">Gabon </option>
                                                    <option value="Gambie">Gambie </option>
                                                    <option value="Georgie">Georgie </option>
                                                    <option value="Ghana">Ghana </option>
                                                    <option value="Gibraltar">Gibraltar </option>
                                                    <option value="Grece">Grece </option>
                                                    <option value="Grenade">Grenade </option>
                                                    <option value="Groenland">Groenland </option>
                                                    <option value="Guadeloupe">Guadeloupe </option>
                                                    <option value="Guam">Guam </option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernesey">Guernesey </option>
                                                    <option value="Guinee">Guinee </option>
                                                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                                                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                                    <option value="Guyana">Guyana </option>
                                                    <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                                    <option value="Haiti">Haiti </option>
                                                    <option value="Hawaii">Hawaii </option>
                                                    <option value="Honduras">Honduras </option>
                                                    <option value="Hong_Kong">Hong_Kong </option>
                                                    <option value="Hongrie">Hongrie </option>

                                                    <option value="Inde">Inde </option>
                                                    <option value="Indonesie">Indonesie </option>
                                                    <option value="Iran">Iran </option>
                                                    <option value="Iraq">Iraq </option>
                                                    <option value="Irlande">Irlande </option>
                                                    <option value="Islande">Islande </option>
                                                    <option value="Israel">Israel </option>
                                                    <option value="Italie">italie </option>

                                                    <option value="Jamaique">Jamaique </option>
                                                    <option value="Jan Mayen">Jan Mayen </option>
                                                    <option value="Japon">Japon </option>
                                                    <option value="Jersey">Jersey </option>
                                                    <option value="Jordanie">Jordanie </option>

                                                    <option value="Kazakhstan">Kazakhstan </option>
                                                    <option value="Kenya">Kenya </option>
                                                    <option value="Kirghizstan">Kirghizistan </option>
                                                    <option value="Kiribati">Kiribati </option>
                                                    <option value="Koweit">Koweit </option>

                                                    <option value="Laos">Laos </option>
                                                    <option value="Lesotho">Lesotho </option>
                                                    <option value="Lettonie">Lettonie </option>
                                                    <option value="Liban">Liban </option>
                                                    <option value="Liberia">Liberia </option>
                                                    <option value="Liechtenstein">Liechtenstein </option>
                                                    <option value="Lituanie">Lituanie </option>
                                                    <option value="Luxembourg">Luxembourg </option>
                                                    <option value="Lybie">Lybie </option>

                                                    <option value="Macao">Macao </option>
                                                    <option value="Macedoine">Macedoine </option>
                                                    <option value="Madagascar">Madagascar </option>
                                                    <option value="Madère">Madère </option>
                                                    <option value="Malaisie">Malaisie </option>
                                                    <option value="Malawi">Malawi </option>
                                                    <option value="Maldives">Maldives </option>
                                                    <option value="Mali">Mali </option>
                                                    <option value="Malte">Malte </option>
                                                    <option value="Man">Man </option>
                                                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                                                    <option value="Maroc">Maroc </option>
                                                    <option value="Marshall">Marshall </option>
                                                    <option value="Martinique">Martinique </option>
                                                    <option value="Maurice">Maurice </option>
                                                    <option value="Mauritanie">Mauritanie </option>
                                                    <option value="Mayotte">Mayotte </option>
                                                    <option value="Mexique">Mexique </option>
                                                    <option value="Micronesie">Micronesie </option>
                                                    <option value="Midway">Midway </option>
                                                    <option value="Moldavie">Moldavie </option>
                                                    <option value="Monaco">Monaco </option>
                                                    <option value="Mongolie">Mongolie </option>
                                                    <option value="Montserrat">Montserrat </option>
                                                    <option value="Mozambique">Mozambique </option>

                                                    <option value="Namibie">Namibie </option>
                                                    <option value="Nauru">Nauru </option>
                                                    <option value="Nepal">Nepal </option>
                                                    <option value="Nicaragua">Nicaragua </option>
                                                    <option value="Niger">Niger </option>
                                                    <option value="Nigeria">Nigeria </option>
                                                    <option value="Niue">Niue </option>
                                                    <option value="Norfolk">Norfolk </option>
                                                    <option value="Norvege">Norvege </option>
                                                    <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                                    <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                                    <option value="Oman">Oman </option>
                                                    <option value="Ouganda">Ouganda </option>
                                                    <option value="Ouzbekistan">Ouzbekistan </option>

                                                    <option value="Pakistan">Pakistan </option>
                                                    <option value="Palau">Palau </option>
                                                    <option value="Palestine">Palestine </option>
                                                    <option value="Panama">Panama </option>
                                                    <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee
                                                    </option>
                                                    <option value="Paraguay">Paraguay </option>
                                                    <option value="Pays_Bas">Pays_Bas </option>
                                                    <option value="Perou">Perou </option>
                                                    <option value="Philippines">Philippines </option>
                                                    <option value="Pologne">Pologne </option>
                                                    <option value="Polynesie">Polynesie </option>
                                                    <option value="Porto_Rico">Porto_Rico </option>
                                                    <option value="Portugal">Portugal </option>

                                                    <option value="Qatar">Qatar </option>

                                                    <option value="Republique_Dominicaine">Republique_Dominicaine
                                                    </option>
                                                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                                                    <option value="Reunion">Reunion </option>
                                                    <option value="Roumanie">Roumanie </option>
                                                    <option value="Royaume_Uni">Royaume_Uni </option>
                                                    <option value="Russie">Russie </option>
                                                    <option value="Rwanda">Rwanda </option>

                                                    <option value="Sahara Occidental">Sahara Occidental </option>
                                                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                                                    <option value="Saint_Marin">Saint_Marin </option>
                                                    <option value="Salomon">Salomon </option>
                                                    <option value="Salvador">Salvador </option>
                                                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                                                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                                    <option value="Senegal">Senegal </option>
                                                    <option value="Seychelles">Seychelles </option>
                                                    <option value="Sierra Leone">Sierra Leone </option>
                                                    <option value="Singapour">Singapour </option>
                                                    <option value="Slovaquie">Slovaquie </option>
                                                    <option value="Slovenie">Slovenie</option>
                                                    <option value="Somalie">Somalie </option>
                                                    <option value="Soudan">Soudan </option>
                                                    <option value="Sri_Lanka">Sri_Lanka </option>
                                                    <option value="Suede">Suede </option>
                                                    <option value="Suisse">Suisse </option>
                                                    <option value="Surinam">Surinam </option>
                                                    <option value="Swaziland">Swaziland </option>
                                                    <option value="Syrie">Syrie </option>

                                                    <option value="Tadjikistan">Tadjikistan </option>
                                                    <option value="Taiwan">Taiwan </option>
                                                    <option value="Tonga">Tonga </option>
                                                    <option value="Tanzanie">Tanzanie </option>
                                                    <option value="Tchad">Tchad </option>
                                                    <option value="Thailande">Thailande </option>
                                                    <option value="Tibet">Tibet </option>
                                                    <option value="Timor_Oriental">Timor_Oriental </option>
                                                    <option value="Togo">Togo </option>
                                                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                                    <option value="Tristan da cunha">Tristan de cuncha </option>
                                                    <option value="Tunisie">Tunisie </option>
                                                    <option value="Turkmenistan">Turmenistan </option>
                                                    <option value="Turquie">Turquie </option>

                                                    <option value="Ukraine">Ukraine </option>
                                                    <option value="Uruguay">Uruguay </option>

                                                    <option value="Vanuatu">Vanuatu </option>
                                                    <option value="Vatican">Vatican </option>
                                                    <option value="Venezuela">Venezuela </option>
                                                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                                                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                                    <option value="Vietnam">Vietnam </option>

                                                    <option value="Wake">Wake </option>
                                                    <option value="Wallis et Futuma">Wallis et Futuma </option>

                                                    <option value="Yemen">Yemen </option>
                                                    <option value="Yougoslavie">Yougoslavie </option>

                                                    <option value="Zambie">Zambie </option>
                                                    <option value="Zimbabwe">Zimbabwe </option>

                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-12 col-sm-6 px-2">
										<div class="form-group position-relative mb-2">
											<label class="d-block">
												<strong class="font-weight-normal d-block mb-1">Image<span class="text-brown">*</span></strong>
												<input type="file" name="img" class="form-control formControlMedium rounded-sm d-block w-100">
											</label>
										</div>
									</div>

                                        <div class="row">
                                            <div class="col-12 md-12">
                                               
                                                <table>
                                                    <tr>
                                                        <td>Artiste  Interne</td>
                                                        <td> <input type="checkbox" name="atype[]" value="interne"></td>
                                                        <td>Artiste Donateur</td>
                                                        <td>  <input type="checkbox" name="atype[]" value="donateur"></td>

                                                
                                                    </tr>
                                                    </table>
                                                    <div class="card card-body">
                                                        <strong class="d-block font-weight-normal mb-1">Catégorie <span
                                                                class="text-brown">*</span></strong>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="3" name="cat[]" class="form-check-input"
                                                                id="Photographie">
                                                            <label class="form-check-label"
                                                                for="Photographie">Photographie</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="1" name="cat[]" class="form-check-input"
                                                                id="Peinture">
                                                            <label class="form-check-label"
                                                                for="Peinture">Peinture</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="2" name="cat[]" class="form-check-input"
                                                                id="Sculpture">
                                                            <label class="form-check-label"
                                                                for="Sculpture">Sculpture</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="5" name="cat[]" class="form-check-input" id="Dessin">
                                                            <label class="form-check-label" for="Dessin">Dessinateur</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" value="4" name="cat[]" class="form-check-input"
                                                                id="Édition">
                                                            <label class="form-check-label"
                                                                for="Édition">Édition</label>
                                                        </div>
                                    
                                                        <div class="form-group position-relative mb-3">
                                                            <label class="d-block mb-0">
                                                                <strong
                                                                    class="d-block font-weight-normal mb-1">Biographie
                                                                    de l'artiste <span
                                                                        class="text-red">*</span></strong>
                                                                        <textarea class="form-control" name="biographie" id="exampleFormControlTextarea1" rows="6"></textarea>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlSelect1">Formation</label>
                                                            <select name="ecole" class="form-control" id="exampleFormControlSelect1">
                                                                <option value="1">Lauréat INBA Tétouan</option>
                                                                <option value="2">Lauréat ESBA Casablanca</option>
                                                                <option value="3">Autodidacte</option>
                                                                <option value="4">Formation 04</option>
                                                            </select>
                                                        </div>
                                                            
                                                    </div>
                                               
                                            </div>

                                        </div>
                                        <div class="btnWrap mt-5">
                                            <input type="submit" class="d-block w-100 btn btn-secondary text-uppercase"
                                                value="register">
                                        </div>
                                    </form>
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


<!-- Mirrored from demo.adminkit.io/dashboard-ecommerce.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 02:48:16 GMT -->

</html>