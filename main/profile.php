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

							<!-- dropdown -->
							<div class="header__profile">
								<a class="header__sign-in header__sign-in--user" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="ti ti-user"></i>
									<span>Nickname</span>
								</a>

								<ul class="dropdown-menu dropdown-menu-end header__dropdown-menu header__dropdown-menu--user">
									<li><a href="profile.php"><i class="ti ti-ghost"></i>Profile</a></li>
									<li><a href="profile.php"><i class="ti ti-stereo-glasses"></i>Subscription</a></li>
									<li><a href="profile.php"><i class="ti ti-bookmark"></i>Favorites</a></li>
									<li><a href="profile.php"><i class="ti ti-settings"></i>Settings</a></li>
									<li><a href="#"><i class="ti ti-logout"></i>Logout</a></li>
								</ul>
							</div>
							<!-- end dropdown -->
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
						<h1 class="section__title section__title--head">My HotFlix</h1>
						<!-- end section title -->

						<!-- breadcrumbs -->
						<ul class="breadcrumbs">
							<li class="breadcrumbs__item"><a href="index.php">Home</a></li>
							<li class="breadcrumbs__item breadcrumbs__item--active">Profile</li>
						</ul>
						<!-- end breadcrumbs -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- content -->
	<div class="content">
		<!-- profile -->
		<div class="profile">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="profile__content">
							<div class="profile__user">
								<div class="profile__avatar">
									<img src="img/user.svg" alt="">
								</div>
								<div class="profile__meta">
									<h3>John Doe</h3>
									<span>HOTFLIX ID: 78123</span>
								</div>
							</div>

							<!-- content tabs nav -->
							<ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
								<li class="nav-item" role="presentation">
									<button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Profile</button>
								</li>

								<li class="nav-item" role="presentation">
									<button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Subs</button>
								</li>

								<li class="nav-item" role="presentation">
									<button id="3-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">Favorites</button>
								</li>

								<li class="nav-item" role="presentation">
									<button id="4-tab" data-bs-toggle="tab" data-bs-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">Settings</button>
								</li>
							</ul>
							<!-- end content tabs nav -->

							<!-- logout -->
							<button class="profile__logout" type="button">
								<i class="ti ti-logout"></i>
								<span>Logout</span>
							</button>
							<!-- end logout -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end profile -->

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
					<div class="row">
						<!-- stats -->
						<div class="col-12 col-md-6 col-xl-3">
							<div class="stats">
								<span>Premium plan</span>
								<p>$34.99 / month</p>
								<i class="ti ti-credit-card"></i>
							</div>
						</div>
						<!-- end stats -->

						<!-- stats -->
						<div class="col-12 col-md-6 col-xl-3">
							<div class="stats">
								<span>Films watched</span>
								<p>1 678</p>
								<i class="ti ti-movie"></i>
							</div>
						</div>
						<!-- end stats -->

						<!-- stats -->
						<div class="col-12 col-md-6 col-xl-3">
							<div class="stats">
								<span>Your comments</span>
								<p>2 573</p>
								<i class="ti ti-message-circle"></i>
							</div>
						</div>
						<!-- end stats -->

						<!-- stats -->
						<div class="col-12 col-md-6 col-xl-3">
							<div class="stats">
								<span>Your reviews</span>
								<p>1 021</p>
								<i class="ti ti-star-half-filled"></i>
							</div>
						</div>
						<!-- end stats -->
					</div>

					<div class="row">
						<!-- dashbox -->
						<div class="col-12 col-xl-6">
							<div class="dashbox">
								<div class="dashbox__title">
									<h3><i class="ti ti-movie"></i> Movies for you</h3>

									<div class="dashbox__wrap">
										<a class="dashbox__refresh" href="#"><i class="ti ti-refresh"></i></a>
										<a class="dashbox__more" href="catalog.php">View All</a>
									</div>
								</div>

								<div class="dashbox__table-wrap dashbox__table-wrap--1">
									<table class="dashbox__table">
										<thead>
											<tr>
												<th>ID</th>
												<th>TITLE</th>
												<th>CATEGORY</th>
												<th>RATING</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">241</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">The Lost City</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Movie</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 9.2</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">825</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">Undercurrents</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Movie</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 9.1</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">9271</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">Tales from the Underworld</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">TV Series</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 9.0</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">635</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">The Unseen World</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">TV Series</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 8.9</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">825</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">Redemption Road</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">TV Series</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 8.9</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end dashbox -->

						<!-- dashbox -->
						<div class="col-12 col-xl-6">
							<div class="dashbox">
								<div class="dashbox__title">
									<h3><i class="ti ti-star-half-filled"></i> Latest reviews</h3>

									<div class="dashbox__wrap">
										<a class="dashbox__refresh" href="#"><i class="ti ti-refresh"></i></a>
										<a class="dashbox__more" href="#">View All</a>
									</div>
								</div>

								<div class="dashbox__table-wrap dashbox__table-wrap--2">
									<table class="dashbox__table">
										<thead>
											<tr>
												<th>ID</th>
												<th>ITEM</th>
												<th>AUTHOR</th>
												<th>RATING</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">824</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">I Dream in Another Language</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Eliza Josceline</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 7.2</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">602</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">Benched</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Ketut</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 6.3</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">538</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">Whitney</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Brian Cranston</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 8.4</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">129</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">Blindspotting</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Quang</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 9.0</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="dashbox__table-text dashbox__table-text--grey">360</div>
												</td>
												<td>
													<div class="dashbox__table-text"><a href="details.php">Another</a></div>
												</td>
												<td>
													<div class="dashbox__table-text">Jackson Brown</div>
												</td>
												<td>
													<div class="dashbox__table-text dashbox__table-text--rate"><i class="ti ti-star"></i> 7.7</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end dashbox -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
					<div class="row">
						<!-- plan -->
						<div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
							<div class="plan plan--active">
								<h3 class="plan__title">Basic</h3>
								<span class="plan__price">Free</span>
								<ul class="plan__list">
									<li class="plan__item"><i class="ti ti-circle-check"></i> 7 days</li>
									<li class="plan__item"><i class="ti ti-circle-check"></i> 720p Resolution</li>
									<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Limited Availability</li>
									<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Desktop Only</li>
									<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> Limited Support</li>
								</ul>
								<a href="signin.php" class="plan__btn">Current plan</a>
							</div>
						</div>
						<!-- end plan -->

						<!-- plan -->
						<div class="col-12 col-md-12 col-lg-4 order-md-1 order-lg-2">
							<div class="plan plan--orange">
								<h3 class="plan__title">Premium</h3>
								<span class="plan__price">$34.99 <sub>/ month</sub></span>
								<ul class="plan__list">
									<li class="plan__item"><i class="ti ti-circle-check"></i> 1 Month</li>
									<li class="plan__item"><i class="ti ti-circle-check"></i> Full HD</li>
									<li class="plan__item"><i class="ti ti-circle-check"></i> Limited Availability</li>
									<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> TV & Desktop</li>
									<li class="plan__item plan__item--none"><i class="ti ti-circle-minus"></i> 24/7 Support</li>
								</ul>
								<button class="plan__btn" type="button" data-bs-toggle="modal" data-bs-target="#plan-modal">Choose Plan</button>
							</div>
						</div>
						<!-- end plan -->

						<!-- plan -->
						<div class="col-12 col-md-6 col-lg-4 order-md-3">
							<div class="plan plan--red">
								<h3 class="plan__title">Cinematic</h3>
								<span class="plan__price">$49.99 <sub>/ month</sub></span>
								<ul class="plan__list">
									<li class="plan__item"><i class="ti ti-circle-check"></i> 2 Months</li>
									<li class="plan__item"><i class="ti ti-circle-check"></i> Ultra HD</li>
									<li class="plan__item"><i class="ti ti-circle-check"></i> Limited Availability</li>
									<li class="plan__item"><i class="ti ti-circle-check"></i> Any Device</li>
									<li class="plan__item"><i class="ti ti-circle-check"></i> 24/7 Support</li>
								</ul>
								<button class="plan__btn" type="button" data-bs-toggle="modal" data-bs-target="#plan-modal">Choose Plan</button>
							</div>
						</div>
						<!-- end plan -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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
									<button class="item__favorite item__favorite--active" type="button"><i class="ti ti-bookmark"></i></button>
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

				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab" tabindex="0">
					<div class="row">
						<!-- details form -->
						<div class="col-12 col-lg-6">
							<form action="#" class="sign__form sign__form--full">
								<div class="row">
									<div class="col-12">
										<h4 class="sign__title">Profile details</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="username">Username</label>
											<input id="username" type="text" name="username" class="sign__input" placeholder="User 123">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="email">Email</label>
											<input id="email" type="text" name="email" class="sign__input" placeholder="email@email.com">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="fname">Name</label>
											<input id="fname" type="text" name="fname" class="sign__input" placeholder="John Doe">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="sign__gallery-upload">Avatar</label>
											<div class="sign__gallery">
												<label id="gallery1" for="sign__gallery-upload">Upload (40x40)</label>
												<input data-name="#gallery1" id="sign__gallery-upload" name="gallery" class="sign__gallery-upload" type="file" accept=".png, .jpg, .jpeg" multiple="">
											</div>
										</div>
									</div>

									<div class="col-12">
										<button class="sign__btn sign__btn--small" type="button">Save</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end details form -->

						<!-- password form -->
						<div class="col-12 col-lg-6">
							<form action="#" class="sign__form sign__form--full">
								<div class="row">
									<div class="col-12">
										<h4 class="sign__title">Change password</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="oldpass">Old password</label>
											<input id="oldpass" type="password" name="oldpass" class="sign__input">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="newpass">New password</label>
											<input id="newpass" type="password" name="newpass" class="sign__input">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="confirmpass">Confirm new password</label>
											<input id="confirmpass" type="password" name="confirmpass" class="sign__input">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="sign__group">
											<label class="sign__label" for="select">Select</label>
											<select name="select" id="select" class="sign__select">
												<option value="0">Option</option>
												<option value="1">Option 2</option>
												<option value="2">Option 3</option>
												<option value="3">Option 4</option>
											</select>
										</div>
									</div>

									<div class="col-12">
										<button class="sign__btn sign__btn--small" type="button">Change</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end password form -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</div>
	<!-- end content -->

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

	<!-- plan modal -->
	<div class="modal fade" id="plan-modal" tabindex="-1" aria-labelledby="plan-modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<button class="modal__close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-x"></i></button>

					<form action="#" class="modal__form">
						<h4 class="modal__title">Select plan</h4>

						<div class="sign__group">
							<label for="fullname" class="sign__label">Name</label>
							<input id="fullname" type="text" name="name" class="sign__input" placeholder="Full name">
						</div>

						<div class="sign__group">
							<label for="email" class="sign__label">Email</label>
							<input id="email2" type="text" name="email2" class="sign__input" placeholder="example@domain.com">
						</div>

						<div class="sign__group">
							<label class="sign__label" for="value">Choose plan:</label>
							<select class="sign__select" name="value" id="value">
								<option value="35">Premium - $34.99</option>
								<option value="50">Cinematic - $49.99</option>
							</select>

							<span class="sign__text">You can spend money from your account on the renewal of the connected packages, or to order cars on our website.</span>
						</div>

						<div class="sign__group">
							<label class="sign__label">Payment method:</label>

							<ul class="sign__radio">
								<li>
									<input id="type1" type="radio" name="type" checked="">
									<label for="type1">Visa</label>
								</li>
								<li>
									<input id="type2" type="radio" name="type">
									<label for="type2">Mastercard</label>
								</li>
								<li>
									<input id="type3" type="radio" name="type">
									<label for="type3">Paypal</label>
								</li>
							</ul>
						</div>

						<button type="button" class="sign__btn sign__btn--modal">
							<span>Proceed</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end plan modal -->

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