<?php
include('header.php');
?>	
	<!-- page title -->
	<section class="section section--first">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">Trailers</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							
							<li class="breadcrumbs__item"><a href="index.php">Home</a></li>
							
							<li class="breadcrumbs__item breadcrumbs__item--active">Catalog</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<!-- menu btn -->
						
						<button class="filter__menu" type="button"><i class="fa-solid fa-bars"></i>Filter</button>
						<!-- end menu btn -->

						<!-- filter desk -->
						<div class="filter__items">
							<select class="filter__select" name="genre" id="filter__genre">
								<option value="0">All genres</option>
								<option value="1">Action/Adventure</option>
								<option value="2">Animals</option>
								<option value="3">Animation</option>
								<option value="4">Biography</option>
								<option value="5">Comedy</option>
								<option value="6">Cooking</option>
								<option value="7">Dance</option>
								<option value="8">Documentary</option>
								<option value="9">Drama</option>
								<option value="10">Education</option>
								<option value="11">Entertainment</option>
								<option value="12">Family</option>
								<option value="13">Fantasy</option>
								<option value="14">History</option>
								<option value="15">Horror</option>
								<option value="16">Independent</option>
								<option value="17">International</option>
								<option value="18">Kids</option>
								<option value="19">Medical</option>
								<option value="20">Military/War</option>
								<option value="21">Music</option>
								<option value="22">Mystery/Crime</option>
								<option value="23">Nature</option>
								<option value="24">Paranormal</option>
								<option value="25">Politics</option>
								<option value="26">Racing</option>
								<option value="27">Romance</option>
								<option value="28">Sci-Fi/Horror</option>
								<option value="29">Science</option>
								<option value="30">Science Fiction</option>
								<option value="31">Science/Nature</option>
								<option value="32">Spanish</option>
								<option value="33">Travel</option>
								<option value="34">Western</option>
							</select>

							<select class="filter__select" name="quality" id="filter__quality">
								<option value="0">Any quality</option>
								<option value="1">HD 1080</option>
								<option value="2">HD 720</option>
								<option value="3">DVD</option>
								<option value="4">TS</option>
							</select>

							<select class="filter__select" name="rate" id="filter__rate">
								<option value="0">Any rating</option>
								<option value="1">from 3.0</option>
								<option value="2">from 5.0</option>
								<option value="3">from 7.0</option>
								<option value="4">Golder Star</option>
							</select>

							<select class="filter__select" name="sort" id="filter__sort">
								<option value="0">Relevance</option>
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
							</select>
						</div>
						<!-- end filter desk -->
						
						<!-- filter btn -->
						<button class="filter__btn" type="button">Apply</button>
						<!-- end filter btn -->

						<!-- amount -->
						<span class="filter__amount">Showing 18 of 1713</span>
						<!-- end amount -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->
	
	<!-- catalog -->
	<div class="section section--catalog">
		<div class="container">
		<div class="row">
<?php
include('connect.php');
$sql = "SELECT * FROM `movie_upload` limit 12";
$run = mysqli_query($con , $sql);
while ($data = mysqli_fetch_assoc($run)) {
?>
			
				<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
					<div class="item">
						<div class="item__cover">
							<img src="img/<?php echo $data['mov_image'] ?>" alt="">

							<?php

if (isset($_SESSION['role']) && $_SESSION['role'] === "User") {
?>
    <a href="details.php?movieID=<?php echo $data['mov_id'] ?>" class="item__play" style="font-size:7px;">
        WATCH TRAILER
        <!-- <i class="ti ti-player-play-filled"></i> -->
    </a>
<?php
} else {
?>
    <a href="#" onclick="alert('Please log in first to watch the trailer.'); return false;" class="item__play" style="font-size:8px;">
        WATCH TRAILER
        <!-- <i class="ti ti-player-play-filled"></i> -->
    </a>
<?php
}
?>

							<span class="item__rate item__rate--green"><?php echo $data['mov_rating'] ?></span>
							<button class="item__favorite" type="button"><i class="fa-solid fa-bookmark"></i></button>
						</div>
						<div class="item__content">
							<h3 class="item__title"><a href="details.php"><?php echo $data['mov_name'] ?></a></h3>
							<span class="item__category">
								<a href="#"><?php echo $data['mov_category'] ?></a>
							</span>
						</div>
					</div>
				</div>
				<?php }?>
			</div>



			<div class="row">
				<!-- paginator -->
				<div class="col-12">
					<!-- paginator mobile -->
					<div class="paginator-mob">
						<span class="paginator-mob__pages">18 of 1713</span>

						<ul class="paginator-mob__nav">
							<li>
								<a href="#">
									<i class="ti ti-chevron-left"></i>
									<span>Prev</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span>Next</span>
									<i class="ti ti-chevron-right"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- end paginator mobile -->

					<!-- paginator desktop -->
					<ul class="paginator">
						<li class="paginator__item paginator__item--prev">
							<a href="#"><i class="ti ti-chevron-left"></i></a>
						</li>
						<li class="paginator__item"><a href="#">1</a></li>
						<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
						<li class="paginator__item"><a href="#">3</a></li>
						<li class="paginator__item"><a href="#">4</a></li>
						<li class="paginator__item"><span>...</span></li>
						<li class="paginator__item"><a href="#">87</a></li>
						<li class="paginator__item paginator__item--next">
							<a href="#"><i class="ti ti-chevron-right"></i></a>
						</li>
					</ul>
					<!-- end paginator desktop -->
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</div>
	<!-- end catalog -->

	<!-- section -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title">Coming soon</h2>
						<a href="catalog.php" class="section__view section__view--carousel">View All</a>
					</div>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="section__carousel splide splide--content">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button">
								<i class="fa-solid fa-left-long"></i>
							</button>
							<button class="splide__arrow splide__arrow--next" type="button">
								<i class="fa-solid fa-right-long"></i>
							</button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								

							<?php
include('connect.php');
$sql = "SELECT * FROM `movie_upload` LIMIT 6 OFFSET 6";

$run = mysqli_query($con , $sql);
while ($data = mysqli_fetch_assoc($run)) {
?>
								<li class="splide__slide">
									<div class="item item--hero">
										<div class="item__cover">
											<img src="img/<?php echo $data['mov_image'] ?>" alt="">
											<?php

if (isset($_SESSION['role']) && $_SESSION['role'] === "User") {
?>
    <a href="#" class="item__play" style="font-size:8px;">
        WATCH TRAILER
        <!-- <i class="ti ti-player-play-filled"></i> -->
    </a>
<?php
} else {
?>
    <a href="#" onclick="alert('Please log in first to watch the trailer.'); return false;" class="item__play" style="font-size:8px;">
        WATCH TRAILER
        <!-- <i class="ti ti-player-play-filled"></i> -->
    </a>
<?php
}
?>


											<span class="item__rate item__rate--green"><?php echo $data['mov_rating'] ?>/10</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php"><?php echo $data['mov_name'] ?></a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
										</div>
									</div>
								</li>
<?php } ?>

							</ul>
						</div>
					</div>
				</div>
				<!-- end carousel -->
			</div>
		</div>
	</section>
	<!-- end section -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<a href="index.php" class="footer__logo">
							<img src="img/logo.svg" alt="">
						</a>

						<span class="footer__copyright">© HOTFLIX, 2019—2024 <br> Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></span>

						<nav class="footer__nav">
							<a href="about.php">About Us</a>
							<a href="contacts.php">Contacts</a>
							<a href="privacy.php">Privacy policy</a>
						</nav>

						<button class="footer__back" type="button">
							<i class="fa-solid fa-up-long"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- mobile filter -->
	<div class="mfilter">
		<div class="mfilter__head">
			<h6 class="mfilter__title">Filter</h6>

			<button class="mfilter__close" type="button"><i class="fa-solid fa-xmark"></i></button>
		</div>

		<div class="mfilter__select-wrap">
			<div class="sign__group">
				<select class="filter__select" name="mgenre" id="mfilter__genre">
					<option value="0">All genres</option>
					<option value="1">Action/Adventure</option>
					<option value="2">Animals</option>
					<option value="3">Animation</option>
					<option value="4">Biography</option>
					<option value="5">Comedy</option>
					<option value="6">Cooking</option>
					<option value="7">Dance</option>
					<option value="8">Documentary</option>
					<option value="9">Drama</option>
					<option value="10">Education</option>
					<option value="11">Entertainment</option>
					<option value="12">Family</option>
					<option value="13">Fantasy</option>
					<option value="14">History</option>
					<option value="15">Horror</option>
					<option value="16">Independent</option>
					<option value="17">International</option>
					<option value="18">Kids</option>
					<option value="19">Medical</option>
					<option value="20">Military/War</option>
					<option value="21">Music</option>
					<option value="22">Mystery/Crime</option>
					<option value="23">Nature</option>
					<option value="24">Paranormal</option>
					<option value="25">Politics</option>
					<option value="26">Racing</option>
					<option value="27">Romance</option>
					<option value="28">Sci-Fi/Horror</option>
					<option value="29">Science</option>
					<option value="30">Science Fiction</option>
					<option value="31">Science/Nature</option>
					<option value="32">Spanish</option>
					<option value="33">Travel</option>
					<option value="34">Western</option>
				</select>
			</div>

			<div class="sign__group">
				<select class="filter__select" name="mquality" id="mfilter__quality">
					<option value="0">Any quality</option>
					<option value="1">HD 1080</option>
					<option value="2">HD 720</option>
					<option value="3">DVD</option>
					<option value="4">TS</option>
				</select>
			</div>

			<div class="sign__group">
				<select class="filter__select" name="mrate" id="mfilter__rate">
					<option value="0">Any rating</option>
					<option value="1">from 3.0</option>
					<option value="2">from 5.0</option>
					<option value="3">from 7.0</option>
					<option value="4">Golder Star</option>
				</select>
			</div>

			<div class="sign__group">
				<select class="filter__select" name="msort" id="mfilter__sort">
					<option value="0">Relevance</option>
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
				</select>
			</div>
		</div>

		<button class="mfilter__apply" type="button">Apply</button>
	</div>
	<!-- end mobile filter -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/splide.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>