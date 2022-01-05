<?php
spl_autoload_register(function ($class) {
    include('../models/' . $class . '.class.php');
});
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlbeans.com/html/muzze/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 11:18:53 GMT -->

<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the page title -->
	<title>Muzze - Museum &amp; Art Gallery Exhibition HTML Template</title>
	<!-- inlcude google archivo & lora font cdn link -->
	<link
		href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Lora:ital,wght@0,400;0,700;1,400;1,700&amp;family=Muli:ital@0;1&amp;family=Merriweather&amp;display=swap"
		rel="stylesheet">
	<!-- include the site bootstrap stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="style.css">
	<!-- include the site responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<script>
		$(function () {
			$(".cat").slice(0, 6).show();
			$(".loadMore").on('click', function (e) {
				e.preventDefault();
				$(".cat:hidden").slice(0, 6).slideDown();
				if ($(".cat:hidden").length == 0) {
					$("#load").fadeOut('slow');
				}
			});
		});
	</script>

</head>

<body>
	<!-- pageWrapper -->
	<div id="pageWrapper">
		<div class="phStickyWrap phVi w-100">
			<!-- pageHeader -->
			<header id="pageHeader" class="position-absolute w-100 bg-white">
				<!-- htTopBar -->
				<div class="htTopBar py-1 py-md-2">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-5">
								<!-- search bar -->
								<div class="input-group">
									<input type="search" class="form-control" placeholder="Search…">

								</div>
							</div>
							<div class="col-12 col-md-7">
								<!-- httbLinks -->
								<ul
									class="list-unstyled httbLinks d-flex flex-wrap justify-content-center justify-content-md-end w-100 mb-0">
									<li class="nav-item dropdownn <?= (basename($_SERVER['PHP_SELF'])=='formation.php')?'active':'' ?>">
										<a href="formation.php">Formation</a>

									</li>
									<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='evenements.php')?'active':'' ?>">
										<a href="evenements.php">Evenement</a>

									</li>
									<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='articles.php')?'active':'' ?>">
										<a href="articles.php">Article</a>

									</li>
									<?php if(!isset($_SESSION['id_user'])) { ?>
									<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='registre-login.php')?'active':'' ?>">
										<a href="registre-login.php">login</a>
									</li>
									<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='detail-inscris.php.php')?'active':'' ?>">
										<a href="detail-inscris.php">register</a>
									</li>
									<?php }?>
									<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='soutenir.php')?'active':'' ?>">
										<a href="soutenir.php">Soutenir</a>
									</li>
									<ul class="navbar-nav float-md-right">
									<?php if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])) {?>
									<li class="nav-item dropdown"><button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<?php echo $_SESSION['prenom'].' '.$_SESSION['nom'];?>
										</button>
										<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href=<?=(in_array(2,$_SESSION['roles'])?'profile-artiste.php':'profile-user.php')?>>mon profile</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="../controllers/userController.php?a=decon">deconexion</a>
										</div>
									</li>
									<?php }?>
								</ul>
							</div>
					
						</div>
					</div>
				</div>
				<!-- hdHolder -->
				
				<div class="hdHolder headerFixer">
					<div class="container">
				
						<!-- navbar -->
						<nav
							class="navbar navbar-expand-md navbar-light d-block px-0 pt-2 pb-2 pt-md-2 pb-md-2 pt-lg-4 pb-lg-5">
							<div class="row">
								<div class="col-5 col-sm-3 col-lg-2">
									<!-- logo -->
									<div class="logo logoVii mt-lg-1">
										<a href="home.html">
											<img src="images/logo 55.png" class="img-fluid"
												alt="Muzze || Art &amp; History Museum">
										</a>
									</div>
								</div>
								<div
									class="col-7 col-sm-9 col-lg-10 position-static d-flex justify-content-end pt-lg-1">
									<!-- navbar collapse -->
									<div class="collapse navbar-collapse pageNavigationCollapse pageNavigationCollapseVii justify-content-md-end"
										id="pageNavigationCollapse">
										<!-- mainNavigation -->
										<ul class="navbar-nav mainNavigation mainNavigationVii text-capitalize">
											<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='accueil.php')?'active':'' ?>">
												<a class="nav-link" href="accueil.php" role="button"
													aria-haspopup="true" aria-expanded="false">Accueil</a>

											</li>
											<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='notrehistoire.php')?'active':'' ?>">
												<a class="nav-link" href="notrehistoire.php" role="button"
													aria-haspopup="true" aria-expanded="false">Notre Histoire</a>

											</li>
											<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='artistes.php')?'active':'' ?>">
												<a class="nav-link" href="artistes.php" role="button"
													aria-haspopup="true" aria-expanded="false">Artistes</a>

											</li>
											<li class="nav-item dropdown <?= (basename($_SERVER['PHP_SELF'])=='oeuvres.php')?'active':'' ?>">
												<a class="nav-link" href="oeuvres.php" role="button"
													aria-haspopup="true" aria-expanded="false">Oeuvres</a>

											</li>


										</ul>
									</div>
									<div class="d-flex align-items-center ml-3 ml-lg-6">
										<!-- navbar toggler -->
										<button class="navbar-toggler pgNavOpener pgNavOpenerVii position-absolute"
											type="button" data-toggle="collapse" data-target="#pageNavigationCollapse"
											aria-controls="pageNavigationCollapse" aria-expanded="false"
											aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"><span class="sr-only">menu</span></span>
										</button>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<nav
					class="navbar navbar-light d-flex flex-column navbarSide position-fixed h-100 px-6 pt-10 pb-6 px-md-10 pb-md-10">
					<ul class="navbar-nav mainNavigation w-100 flex-grow-1 mainSideNavigation text-capitalize d-block">
						<li class="nav-item active dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Home</a>
							<!-- dropdown menu -->
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
								<!-- mnDropList -->
								<ul class="list-unstyled mnDropList mb-0">
									<li><a target="_blank" href="home.html">Home Default</a></li>
									<li><a target="_blank" href="home-classic.html">Home Classic</a></li>
									<li><a target="_blank" href="home-creative.html">Home Creative</a></li>
									<li><a target="_blank" href="home-fullscreen.html">Home FullScreen</a></li>
									<li><a target="_blank" href="home-exhibition.html">Home Exhibition</a></li>
									<li><a target="_blank" href="home-modern.html">Home Modern</a></li>
									<li><a target="_blank" href="home-minimal.html">Home Minimal</a></li>
									<li><a target="_blank" href="home-simple-boxed.html">Home Simple Boxed</a></li>
									<li><a target="_blank" href="home-parallax.html">Home Parallax</a></li>
									<li><a target="_blank" href="home-event.html">Home Event</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">What’s On</a>
							<!-- dropdown menu -->
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
								<!-- mnDropList -->
								<ul class="list-unstyled mnDropList mb-0">
									<li class="hasDropdown">
										<a href="javascript:void(0);">Event &amp; Programs</a>
										<!-- mnDropList -->
										<ul class="list-unstyled mnDropList mb-0">
											<li><a target="_blank" href="events-list.html">Event List</a></li>
											<li><a target="_blank" href="event-grid.html">Event Grid</a></li>
											<li><a target="_blank" href="event-compact.html">Event Compact</a></li>
											<li><a target="_blank" href="single-events.html">Single Event</a></li>
										</ul>
									</li>
									<li class="hasDropdown">
										<a href="javascript:void(0);">Exhibition</a>
										<!-- mnDropList -->
										<ul class="list-unstyled mnDropList mb-0">
											<li><a target="_blank" href="exhibition-list.html">Exhibition List</a></li>
											<li><a target="_blank" href="exhibition-grid.html">Exhibition Grid</a></li>
											<li><a target="_blank" href="exhibition-compact.html">Exhibition Compact</a>
											</li>
											<li><a target="_blank" href="single-exhibition.html">Exhibition Event</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Visit</a>
							<!-- dropdown menu -->
							<div class="dropdown-menu mndDropMenu p-0">
								<!-- mnDropList -->
								<ul class="list-unstyled mnDropList mb-0">
									<li>
										<a target="_blank" href="visit-us-block.html">Plan Your Visit</a>
									</li>
									<li>
										<a target="_blank" href="visit-us-block.html">Hours &amp; Admission</a>
									</li>
									<li>
										<a target="_blank" href="visit-us-block.html">Directions</a>
									</li>
									<li>
										<a target="_blank" href="visit-us-block.html">Accessibility</a>
									</li>
									<li>
										<a target="_blank" href="visit-us-block.html">Group Tours</a>
									</li>
									<li>
										<a target="_blank" href="visit-us-block.html">Rental</a>
									</li>
									<li>
										<a target="_blank" href="visit-us-block.html">Other Facilities</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">About</a>
							<!-- dropdown menu -->
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
								<!-- mnDropList -->
								<ul class="list-unstyled mnDropList mb-0">
									<li><a target="_blank" href="mission-history.html">Mission &amp; History</a></li>
									<li><a target="_blank" href="board-staff.html">On Board &amp; Staff</a></li>
									<li><a target="_blank" href="career.html">Career</a></li>
									<li><a target="_blank" href="sponsers.html">Sponsers</a></li>
									<li><a target="_blank" href="contact-us.html">Contact Us</a></li>
									<li><a target="_blank" href="membership.html">Membership</a></li>
									<li><a target="_blank" href="donate.html">Donate</a></li>
									<li><a target="_blank" href="facility-rental.html">Facility Rental</a></li>
									<li><a target="_blank" href="career-details.html">Career Details</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Collections</a>
							<!-- dropdown menu -->
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
								<!-- mnDropList -->
								<ul class="list-unstyled mnDropList mb-0">
									<li><a target="_blank" href="collection-type-1.html">Collection Type-1</a></li>
									<li><a target="_blank" href="collection-type-2.html">Collection Type-2</a></li>
									<li><a target="_blank" href="single-works.html">Single Works</a></li>
									<li><a target="_blank" href="artists.html">Artists</a></li>
									<li><a target="_blank" href="single-artist.html">Single Artist</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="javascript:void(0);" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Pages</a>
							<!-- dropdown menu -->
							<div class="dropdown-menu mndDropMenu mndDropMenuSmall p-0">
								<!-- mnDropList -->
								<ul class="list-unstyled mnDropList mb-0">
									<li class="hasDropdown">
										<a href="javascript:void(0);">News</a>
										<!-- mnDropList -->
										<ul class="list-unstyled mnDropList mb-0">
											<li><a target="_blank" href="news-grid.html">News Grid</a></li>
											<li><a target="_blank" href="news-list.html">News Grid W/S</a></li>
											<li><a target="_blank" href="news-classic.html">News Classic</a></li>
											<li><a target="_blank" href="single-post.html">Single Post</a></li>
										</ul>
									</li>
									<li class="hasDropdown">
										<a href="javascript:void(0);">Shop</a>
										<!-- mnDropList -->
										<ul class="list-unstyled mnDropList mb-0">
											<li><a target="_blank" href="shop.html">Shop</a></li>
											<li><a target="_blank" href="single-product.html">Single Product</a></li>
											<li><a target="_blank" href="cart.html">Cart</a></li>
											<li><a target="_blank" href="checkout.html">Checkout</a></li>
										</ul>
									</li>
									<li class="hasDropdown">
										<a href="javascript:void(0);">Image Gallery</a>
										<!-- mnDropList -->
										<ul class="list-unstyled mnDropList mb-0">
											<li><a target="_blank" href="image-gallery.html">Image Gallery</a></li>
											<li><a target="_blank" href="gallery-grid.html">Gallery Grid</a></li>
											<li><a target="_blank" href="gallery-masonry.html">Gallery Masonry</a></li>
											<li><a target="_blank" href="gallery-caption.html">Gallery Caption</a></li>
											<li><a target="_blank" href="gallery-fullwidth.html">Gallery Fullwidth</a>
											</li>
										</ul>
									</li>
									<li><a target="_blank" href="venues.html">Venues</a></li>
									<li><a target="_blank" href="faq.html">Faq</a></li>
									<li><a target="_blank" href="my-account.html">My Account</a></li>
									<li><a target="_blank" href="404-page.html">404 Error</a></li>
								</ul>
							</div>
						</li>
					</ul>
					<div class="nvbBottomWrap w-100 flex-shrink-0 text-gray888 pt-10 pb-1">
						<address class="mb-0">
							<p>
								<a href="tel:16179876543" class="colorInherit textDecorationNone">1 (617) 987-6543</a>
								<br>
								<a href="mailto:email@gmail.com"
									class="colorInherit textDecorationNone">email@gmail.com</a>
							</p>
							<ul
								class="list-unstyled socialNetworks ftSocialNetworks ftSocialNetworksVix d-flex flex-wrap mb-2 mt-11">
								<li>
									<a href="javascript:void(0);">
										<i class="fab fa-twitter" aria-hidden="true"><span
												class="sr-only">twitter</span></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="fab fa-pinterest" aria-hidden="true"><span
												class="sr-only">pinterest</span></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="fab fa-facebook-f" aria-hidden="true"><span
												class="sr-only">facebook</span></i>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="fab fa-instagram" aria-hidden="true"><span
												class="sr-only">instagram</span></i>
									</a>
								</li>
							</ul>
							<ul class="list-unstyled ftTermLinks ftTermLinksVix d-flex flex-wrap mb-0">
								<li>
									<a href="javascript:void(0);">Privacy Policy</a>
								</li>
								<li>
									<a href="javascript:void(0);">Terms of Use</a>
								</li>
							</ul>
						</address>
					</div>
					<a href="javascript:void(0);" class="hdMenuOpener hdSideMenuOpener position-absolute">
						<span class="icnBar position-absolute"><span class="sr-only">menu</span></span>
					</a>
				</nav>
			</header>
		</div>