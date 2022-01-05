<?php include('_header.php') ; 
$events = Evenement::allEvents();
?>
		<main>
			<!-- eveProgBlock -->
			<section class="eveProgBlock pt-6 pb-3 pt-md-8 pb-md-8 pt-lg-13 pb-lg-11 pt-xl-20 pb-xl-17">
				<div class="container">
					<!-- topHeadingHead -->
					<header class="topHeadingHead text-center mb-6 mb-lg-10">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
								<h1 class="h1Large mb-4">Events &amp; Program</h1>
								<!-- eabDescrText -->
								<div class="fontSerif eabDescrText eabDescrTextII">
									<p>Find out what's on at the museum’s: from current and upcoming exhibitions, to guided tours, workshops, children's activities and events.</p>
								</div>
							</div>
						</div>
					</header>
					<!-- eveProFiltersBox -->
					<div class="eveProFiltersBox bg-graye9ebed pt-4 pb-1 pb-md-4 px-4 pt-lg-8 pb-lg-8 px-lg-8 mb-8 mb-md-14">
						<form action="#">
							<div class="form-row">
								<div class="form-group mb-md-0">
									<div class="dtPickerWrap position-relative">
										<input type="text" class="form-control d-block w-100 formControlDatepicker" placeholder="Select Date">
									</div>
								</div>
								<div class="form-group mb-md-0">
									<select class="chosenSelect csSelect" data-placeholder="Event Types">
										<option value="1">lorem</option>
										<option value="2">ipsum</option>
										<option value="3">dolor</option>
									</select>
								</div>
								<div class="form-group mb-md-0">
									<select class="chosenSelect csSelect" data-placeholder="Audience Types">
										<option value="1">lorem</option>
										<option value="2">ipsum</option>
										<option value="3">dolor</option>
									</select>
								</div>
							</div>
						</form>
					</div>
					<!-- eveProColumn -->
					<?php foreach($events as $e){ ?>
					<article class="eveProColumn d-sm-flex overflow-hidden">
						<!-- <time datetime="2011-01-12" class="epcTimeStamp d-block flex-shrink-0 pt-6 pt-sm-0 mt-sm-n1 mr-2 mr-md-4 mr-lg-10 text-uppercase">
							<span class="textDate text-brown">01</span>
							<span class="textMonth fwMedium text-secondary">March</span>
							<span class="w-100 d-block textDay font-weight-normal fontSerif mt-1">WEDNESDAY</span>
						</time> -->
						<div class="imgHolder flex-shrink-0 mr-4 mr-lg-8">
							<img src="<?=$e->img?>" class="img-fluid" alt="image description">
						</div>
						<div class="descrWrap pt-1">
							<strong class="tpHeadingTitle text-uppercase font-weight-normal d-block mb-3"> <?=$e->dateDebut?> - <?=$e->dateFin?> </strong>
							<h2 class="mb-3">
								<a href="detailevenement.php?id=<?=$e->id?>"><?=$e->titre?></a>
							</h2>
							<address class="mb-5"><?=$e->lieu?></address>
							<p class="mb-5"  style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;"><?=$e->description?></p>
							<div class="btnsWrap">
								<a href="detailevenement.php?id=<?=$e->id?>" class="btn btn-outline-light mr-1 bdr2 btnSmall">Details</a>
								<a href="single-events.html" class="btn btnGree0 bdr2 mr-1 btnSmall">Free</a>
							</div>
						</div>
					</article>
					<hr class="my-4 my-md-8">
					<?php } ?>
				</div>
			</section>
		</main>
		<?php include('_footer.php') ; ?>