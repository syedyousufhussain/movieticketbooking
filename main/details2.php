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
								<a class="header__nav-link" href="index2.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
								<!-- 	
								<ul class="dropdown-menu header__dropdown-menu">
									<li><a href="index2.php">Home style 1</a></li>
									<li><a href="index2.php">Home style 2</a></li>
									<li><a href="index3.php">Home style 3</a></li>
								</ul> -->
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

	<!-- details -->
	<section class="section section--details">
		<!-- details background -->
		<div class="section__details-bg" data-bg="img/bg/details__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="section__title section__title--head">I Dream in Another Language</h1>
				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="item item--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-5 col-md-5 col-lg-4 col-xl-6 col-xxl-5">
								<div class="item__cover">
									<img src="img/covers/cover1.jpg" alt="">
									<span class="item__rate item__rate--green">8.4</span>
									<button class="item__favorite item__favorite--static" type="button"><i class="ti ti-bookmark"></i></button>
								</div>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-md-7 col-lg-8 col-xl-6 col-xxl-7">
								<div class="item__content">
									<ul class="item__meta">
										<li><span>Director:</span> <a href="actor.php">Vince Gilligan</a></li>
										<li><span>Cast:</span> <a href="actor.php">Brian Cranston</a> <a href="actor.php">Jesse Plemons</a> <a href="actor.php">Matt Jones</a> <a href="actor.php">Jonathan Banks</a> <a href="actor.php">Charles Baker</a> <a href="actor.php">Tess Harper</a></li>
										<li><span>Genre:</span> <a href="catalog.php">Action</a>
										<a href="catalog.php">Triler</a></li>
										<li><span>Premiere::</span> 2019</li>
										<li><span>Running time:</span> 128 min</li>
										<li><span>Country:</span> <a href="catalog.php">USA</a></li>
									</ul>

									<div class="item__description">
										<p>When a renowned archaeologist goes missing, his daughter sets out on a perilous journey to the heart of the Amazon rainforest to find him. Along the way, she discovers a hidden city and a dangerous conspiracy that threatens the very balance of power in the world. With the help of a charming rogue, she must navigate treacherous terrain and outwit powerful enemies to save her father and uncover the secrets of the lost city. A down-on-his-luck boxer struggles to make ends meet while raising his young son. When an old friend offers him a chance to make some quick cash by fighting in an illegal underground boxing tournament, he sees it as his last shot at redemption. But as the stakes get higher and the fights get more brutal, he must confront his own demons and find the strength to win not just for himself, but for his son.</p>
										<p>A brilliant scientist discovers a way to harness the power of the ocean's currents to create a new, renewable energy source. But when her groundbreaking technology falls into the wrong hands, she must race against time to stop it from being used for evil. Along the way, she must navigate complex political alliances and confront her own past to save the world from disaster.</p>
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<div class="col-12 col-xl-6">
					<div class="section__player">
						<video controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
							<!-- Video files -->
							<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
							<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
							<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

							<!-- Caption files -->
							<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
							    default>
							<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

							<!-- Fallback for browsers that don't support the <video> element -->
							<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
						</video>
					</div>

					<div class="section__item-filter">
						<select class="section__item-select" name="season" id="filter__season">
							<option value="0">Season 1</option>
							<option value="1">Season 2</option>
							<option value="2">Season 3</option>
							<option value="3">Season 4</option>
							<option value="4">Season 5</option>
						</select>

						<select class="section__item-select" name="series" id="filter__series">
							<option value="0">Series 1</option>
							<option value="1">Series 2</option>
							<option value="2">Series 3</option>
							<option value="3">Series 4</option>
							<option value="4">Series 5</option>
							<option value="5">Series 6</option>
							<option value="6">Series 7</option>
							<option value="7">Series 8</option>
							<option value="8">Series 9</option>
							<option value="9">Series 10</option>
							<option value="10">Series 11</option>
							<option value="11">Series 12</option>
						</select>

						<select class="section__item-select" name="sync" id="filter__sync">
							<option value="0">Eng.Original</option>
							<option value="1">NewStudio</option>
							<option value="2">LostFilm</option>
							<option value="3">HotFlix</option>
						</select>
					</div>
				</div>
				<!-- end player -->
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head content__head--mt">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Discover</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Comments</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</button>
							</li>

							<li class="nav-item" role="presentation">
								<button id="3-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">Photos</button>
							</li>
						</ul>
						<!-- end content tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8">
					<!-- content tabs -->
					<div class="tab-content">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
							<div class="row">
								<!-- comments -->
								<div class="col-12">
									<div class="comments">
										<ul class="comments__list">
											<li class="comments__item">
												<div class="comments__autor">
													<img class="comments__avatar" src="img/user.svg" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">30.08.2018, 17:53</span>
												</div>
												<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="ti ti-thumb-up"></i>12</button>

														<button type="button">7<i class="ti ti-thumb-down"></i></button>
													</div>

													<button type="button"><i class="ti ti-arrow-forward-up"></i>Reply</button>
													<button type="button"><i class="ti ti-quote"></i>Quote</button>
												</div>
											</li>

											<li class="comments__item comments__item--answer">
												<div class="comments__autor">
													<img class="comments__avatar" src="img/user.svg" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">24.08.2018, 16:41</span>
												</div>
												<p class="comments__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="ti ti-thumb-up"></i>8</button>

														<button type="button">3<i class="ti ti-thumb-down"></i></button>
													</div>

													<button type="button"><i class="ti ti-arrow-forward-up"></i>Reply</button>
													<button type="button"><i class="ti ti-quote"></i>Quote</button>
												</div>
											</li>

											<li class="comments__item comments__item--quote">
												<div class="comments__autor">
													<img class="comments__avatar" src="img/user.svg" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">11.08.2018, 11:11</span>
												</div>
												<p class="comments__text"><span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="ti ti-thumb-up"></i>11</button>

														<button type="button">1<i class="ti ti-thumb-down"></i></button>
													</div>

													<button type="button"><i class="ti ti-arrow-forward-up"></i>Reply</button>
													<button type="button"><i class="ti ti-quote"></i>Quote</button>
												</div>
											</li>

											<li class="comments__item">
												<div class="comments__autor">
													<img class="comments__avatar" src="img/user.svg" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">07.08.2018, 14:33</span>
												</div>
												<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="ti ti-thumb-up"></i>99</button>

														<button type="button">35<i class="ti ti-thumb-down"></i></button>
													</div>

													<button type="button"><i class="ti ti-arrow-forward-up"></i>Reply</button>
													<button type="button"><i class="ti ti-quote"></i>Quote</button>
												</div>
											</li>

											<li class="comments__item">
												<div class="comments__autor">
													<img class="comments__avatar" src="img/user.svg" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">02.08.2018, 15:24</span>
												</div>
												<p class="comments__text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="ti ti-thumb-up"></i>74</button>

														<button type="button">13<i class="ti ti-thumb-down"></i></button>
													</div>
													
													<button type="button"><i class="ti ti-arrow-forward-up"></i>Reply</button>
													<button type="button"><i class="ti ti-quote"></i>Quote</button>
												</div>
											</li>
										</ul>

										<!-- paginator mobile -->
										<div class="paginator-mob paginator-mob--comments">
											<span class="paginator-mob__pages">5 of 628</span>

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
										<ul class="paginator paginator--comments">
											<li class="paginator__item paginator__item--prev">
												<a href="#"><i class="ti ti-chevron-left"></i></a>
											</li>
											<li class="paginator__item"><a href="#">1</a></li>
											<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
											<li class="paginator__item"><a href="#">3</a></li>
											<li class="paginator__item"><a href="#">4</a></li>
											<li class="paginator__item"><span>...</span></li>
											<li class="paginator__item"><a href="#">36</a></li>
											<li class="paginator__item paginator__item--next">
												<a href="#"><i class="ti ti-chevron-right"></i></a>
											</li>
										</ul>
										<!-- end paginator desktop -->

										<form action="#" class="sign__form sign__form--comments">
											<div class="sign__group">
												<textarea id="text" name="text" class="sign__textarea" placeholder="Add comment"></textarea>
											</div>

											<button type="button" class="sign__btn sign__btn--small">Send</button>
										</form>
									</div>
								</div>
								<!-- end comments -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<ul class="reviews__list">
											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.svg" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating reviews__rating--yellow">6</span>
												</div>
												<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li>

											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.svg" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating reviews__rating--green">9</span>
												</div>
												<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li>

											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="img/user.svg" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating reviews__rating--red">5</span>
												</div>
												<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li>
										</ul>

										<!-- paginator mobile -->
										<div class="paginator-mob paginator-mob--comments">
											<span class="paginator-mob__pages">5 of 628</span>

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
										<ul class="paginator paginator--comments">
											<li class="paginator__item paginator__item--prev">
												<a href="#"><i class="ti ti-chevron-left"></i></a>
											</li>
											<li class="paginator__item"><a href="#">1</a></li>
											<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
											<li class="paginator__item"><a href="#">3</a></li>
											<li class="paginator__item"><a href="#">4</a></li>
											<li class="paginator__item"><span>...</span></li>
											<li class="paginator__item"><a href="#">36</a></li>
											<li class="paginator__item paginator__item--next">
												<a href="#"><i class="ti ti-chevron-right"></i></a>
											</li>
										</ul>
										<!-- end paginator desktop -->

										<form action="#" class="sign__form sign__form--comments">
											<div class="sign__group">
												<input type="text" class="sign__input" placeholder="Title">
											</div>

											<div class="sign__group">
												<select class="sign__select" name="rating" id="rating">
													<option value="0">Rating</option>
													<option value="1">1 star</option>
													<option value="2">2 stars</option>
													<option value="3">3 stars</option>
													<option value="4">4 stars</option>
													<option value="5">5 stars</option>
													<option value="6">6 stars</option>
													<option value="7">7 stars</option>
													<option value="8">8 stars</option>
													<option value="9">9 stars</option>
													<option value="10">10 stars</option>
												</select>
											</div>

											<div class="sign__group">
												<textarea id="textreview" name="textreview" class="sign__textarea" placeholder="Add review"></textarea>
											</div>

											<button type="button" class="sign__btn sign__btn--small">Send</button>
										</form>
									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
							<!-- project gallery -->
							<div class="gallery" itemscope>
								<div class="row">
									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-1.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-1.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 1</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-2.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-2.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 2</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-3.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-3.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 3</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-4.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-4.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 4</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-5.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-5.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 5</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="img/gallery/project-6.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="img/gallery/project-6.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 6</figcaption>
									</figure>
									<!-- end gallery item -->
								</div>
							</div>
							<!-- end project gallery -->
						</div>
					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				<div class="col-12 col-lg-4">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">You may also like...</h2>
						</div>
						<!-- end section title -->

						<!-- item -->
						<div class="col-6 col-sm-4 col-lg-6">
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
						<div class="col-6 col-sm-4 col-lg-6">
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
						<div class="col-6 col-sm-4 col-lg-6">
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
						<div class="col-6 col-sm-4 col-lg-6">
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
						<div class="col-6 col-sm-4 col-lg-6">
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
						<div class="col-6 col-sm-4 col-lg-6">
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
					</div>
				</div>
				<!-- end sidebar -->
			</div>
		</div>
	</section>
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

	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>

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