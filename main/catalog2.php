<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/splide.min.css">
	<link rel="stylesheet" href="css/slimselect.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/photoswipe.css">
	<link rel="stylesheet" href="css/default-skin.css">
	<link rel="stylesheet" href="css/main.css">

	<!-- Icon font -->
	<link rel="stylesheet" href="webfont/tabler-icons.min.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>
</head>

<body>
	<!-- header -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<!-- header logo -->
						<a href="index.php" class="header__logo">
							<img src="img/logo.svg" alt="">
						</a>
						<!-- end header logo -->

						<!-- header nav -->
						<ul class="header__nav">
							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="index.php">Home style 1</a></li>
									<li><a href="index2.php">Home style 2</a></li>
									<li><a href="index3.php">Home style 3</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="catalog.php">Catalog style 1</a></li>
									<li><a href="catalog2.php">Catalog style 2</a></li>
									<li><a href="details.php">Details Movie</a></li>
									<li><a href="details2.php">Details TV Series</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<li class="header__nav-item">
								<a href="pricing.php" class="header__nav-link">Pricing plan</a>
							</li>

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="about.php">About Us</a></li>
									<li><a href="profile.php">Profile</a></li>
									<li><a href="actor.php">Actor</a></li>
									<li><a href="contacts.php">Contacts</a></li>
									<li><a href="faq.php">Help center</a></li>
									<li><a href="privacy.php">Privacy policy</a></li>
									<li><a href="../admin/index.php" target="_blank">Admin pages</a></li>
								</ul>
							</li>
							<!-- end dropdown -->

							<!-- dropdown -->
							<li class="header__nav-item">
								<a class="header__nav-link header__nav-link--more" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="signin.php">Sign in</a></li>
									<li><a href="signup.php">Sign up</a></li>
									<li><a href="forgot.php">Forgot password</a></li>
									<li><a href="404.php">404 Page</a></li>
								</ul>
							</li>
							<!-- end dropdown -->
						</ul>
						<!-- end header nav -->

						<!-- header auth -->
						<div class="header__auth">
							<form action="#" class="header__search">
								<input class="header__search-input" type="text" placeholder="Search...">
								<button class="header__search-button" type="button">
									<i class="ti ti-search"></i>
								</button>
								<button class="header__search-close" type="button">
									<i class="ti ti-x"></i>
								</button>
							</form>

							<button class="header__search-btn" type="button">
								<i class="ti ti-search"></i>
							</button>

							<!-- dropdown -->
							<div class="header__lang">
								<a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN <i class="ti ti-chevron-down"></i></a>

								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="#">English</a></li>
									<li><a href="#">Spanish</a></li>
									<li><a href="#">French</a></li>
								</ul>
							</div>
							<!-- end dropdown -->

							<a href="signin.php" class="header__sign-in">
								<i class="ti ti-login"></i>
								<span>sign in</span>
							</a>
						</div>
						<!-- end header auth -->

						<!-- header menu btn -->
						<button class="header__btn" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- end header menu btn -->
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
	
	<!-- page title -->
	<section class="section section--first">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h1 class="section__title section__title--head">Catalog</h1>
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

	<!-- fixed filter wrap -->
	<div>
		<!-- filter (fixed position) -->
		<div class="filter filter--fixed">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="filter__content">
							<!-- menu btn -->
							<button class="filter__menu" type="button"><i class="ti ti-filter"></i>Filter</button>
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
		<!-- end filter (fixed position) -->
		
		<!-- catalog -->
		<div class="section section--catalog">
			<div class="container">
				<div class="row">
					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">8.4</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
								<span class="item__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover2.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">7.1</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Benched</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover3.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--red">6.3</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Whitney</a></h3>
								<span class="item__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover4.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--yellow">6.9</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Blindspotting</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover5.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">8.4</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
								<span class="item__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover6.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">7.1</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Benched</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover7.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">7.1</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Benched</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover8.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--red">5.5</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
								<span class="item__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover9.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--yellow">6.7</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Blindspotting</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover10.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--red">5.6</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Whitney</a></h3>
								<span class="item__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover11.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">9.2</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Benched</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover12.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">8.4</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
								<span class="item__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover13.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">8.0</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
								<span class="item__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover14.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">7.2</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Benched</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover15.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--yellow">5.9</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Whitney</a></h3>
								<span class="item__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover16.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">8.3</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Blindspotting</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover17.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">8.0</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
								<span class="item__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->

					<!-- item -->
					<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
						<div class="item">
							<div class="item__cover">
								<img src="img/covers/cover18.jpg" alt="">
								<a href="details.php" class="item__play">
									<i class="ti ti-player-play-filled"></i>
								</a>
								<span class="item__rate item__rate--green">7.1</span>
								<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
							</div>
							<div class="item__content">
								<h3 class="item__title"><a href="details.php">Benched</a></h3>
								<span class="item__category">
									<a href="#">Comedy</a>
								</span>
							</div>
						</div>
					</div>
					<!-- end item -->
				</div>

				<div class="row">
					<!-- more -->
					<div class="col-12">
						<button class="section__more" type="button">Load more</button>
					</div>
					<!-- end more -->
				</div>
			</div>
		</div>
		<!-- end catalog -->
	</div>
	<!-- end fixed filter wrap -->

	<!-- section -->
	<section class="section section--border">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<div class="section__title-wrap">
						<h2 class="section__title">Expected premiere</h2>
						<a href="catalog.php" class="section__view section__view--carousel">View All</a>
					</div>
				</div>
				<!-- end section title -->

				<!-- carousel -->
				<div class="col-12">
					<div class="section__carousel splide splide--content">
						<div class="splide__arrows">
							<button class="splide__arrow splide__arrow--prev" type="button">
								<i class="ti ti-chevron-left"></i>
							</button>
							<button class="splide__arrow splide__arrow--next" type="button">
								<i class="ti ti-chevron-right"></i>
							</button>
						</div>

						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">8.4</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover2.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">7.1</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">Benched</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover3.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--red">6.3</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">Whitney</a></h3>
											<span class="item__category">
												<a href="#">Romance</a>
												<a href="#">Drama</a>
												<a href="#">Music</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover4.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--yellow">6.9</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">Blindspotting</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
												<a href="#">Drama</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover5.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">8.4</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover6.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">7.1</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">Benched</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover7.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">7.1</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">Benched</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover8.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--red">5.5</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover9.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--yellow">6.7</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">Blindspotting</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
												<a href="#">Drama</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover10.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--red">5.6</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">Whitney</a></h3>
											<span class="item__category">
												<a href="#">Romance</a>
												<a href="#">Drama</a>
												<a href="#">Music</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover11.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">9.2</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">Benched</a></h3>
											<span class="item__category">
												<a href="#">Comedy</a>
											</span>
										</div>
									</div>
								</li>

								<li class="splide__slide">
									<div class="item item--carousel">
										<div class="item__cover">
											<img src="img/covers/cover12.jpg" alt="">
											<a href="details.php" class="item__play">
												<i class="ti ti-player-play-filled"></i>
											</a>
											<span class="item__rate item__rate--green">8.4</span>
											<button class="item__favorite" type="button"><i class="ti ti-bookmark"></i></button>
										</div>
										<div class="item__content">
											<h3 class="item__title"><a href="details.php">I Dream in Another Language</a></h3>
											<span class="item__category">
												<a href="#">Action</a>
												<a href="#">Triler</a>
											</span>
										</div>
									</div>
								</li>
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
							<i class="ti ti-arrow-narrow-up"></i>
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

			<button class="mfilter__close" type="button"><i class="ti ti-x"></i></button>
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