<?php
include('header.php');
?>
	<!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Dashboard</h2>

						<a href="add-item.php" class="main__title-link">add item</a>
					</div>
				</div>
				<!-- end main title -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Subscriptions this month</span>
						<!-- or .red -->
						<p>1 678 <b class="green">+15</b></p>
						<i class="ti ti-diamond"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Items added this month</span>
						<p>376 <b class="red">-44</b></p>
						<i class="ti ti-movie"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Views this month</span>
						<p>509 573 <b class="green">+3.1%</b></p>
						<i class="ti ti-eye"></i>
					</div>
				</div>
				<!-- end stats -->

				<!-- stats -->
				<div class="col-12 col-sm-6 col-xl-3">
					<div class="stats">
						<span>Reviews this month</span>
						<p>642 <b class="green">+8</b></p>
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
							<h3><i class="ti ti-trophy"></i> Top items</h3>

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
											<div class="dashbox__table-text"><a href="#">The Lost City</a></div>
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
											<div class="dashbox__table-text"><a href="#">Undercurrents</a></div>
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
											<div class="dashbox__table-text"><a href="#">Tales from the Underworld</a></div>
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
											<div class="dashbox__table-text"><a href="#">The Unseen World</a></div>
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
											<div class="dashbox__table-text"><a href="#">Redemption Road</a></div>
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
							<h3><i class="ti ti-movie"></i> Latest items</h3>

							<div class="dashbox__wrap">
								<a class="dashbox__refresh" href="#"><i class="ti ti-refresh"></i></a>
								<a class="dashbox__more" href="catalog.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap dashbox__table-wrap--2">
							<table class="dashbox__table">
								<thead>
									<tr>
										<th>ID</th>
										<th>ITEM</th>
										<th>CATEGORY</th>
										<th>RATING</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>
											<div class="dashbox__table-text dashbox__table-text--grey">824</div>
										</td>
										<td>
											<div class="dashbox__table-text"><a href="#">I Dream in Another Language</a></div>
										</td>
										<td>
											<div class="dashbox__table-text">TV Series</div>
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
											<div class="dashbox__table-text"><a href="#">Benched</a></div>
										</td>
										<td>
											<div class="dashbox__table-text">Movie</div>
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
											<div class="dashbox__table-text"><a href="#">Whitney</a></div>
										</td>
										<td>
											<div class="dashbox__table-text">TV Show</div>
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
											<div class="dashbox__table-text"><a href="#">Blindspotting</a></div>
										</td>
										<td>
											<div class="dashbox__table-text">Anime</div>
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
											<div class="dashbox__table-text"><a href="#">Another</a></div>
										</td>
										<td>
											<div class="dashbox__table-text">Movie</div>
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

				<!-- dashbox -->
				<div class="col-12 col-xl-6">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3><i class="ti ti-users"></i> Latest users</h3>

							<div class="dashbox__wrap">
								<a class="dashbox__refresh" href="#"><i class="ti ti-refresh"></i></a>
								<a class="dashbox__more" href="users.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap dashbox__table-wrap--3">
							<table class="dashbox__table">
								<thead>
									<tr>
										<th>ID</th>
										<th>FULL NAME</th>
										<th>EMAIL</th>
										<th>USERNAME</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="dashbox__table-text">23</div>
										</td>
										<td>
											<div class="dashbox__table-text"><a href="#">Brian Cranston</a></div>
										</td>
										<td>
											<div class="dashbox__table-text dashbox__table-text--grey">bcxwz@email.com</div>
										</td>
										<td>
											<div class="dashbox__table-text">BrianXWZ</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="dashbox__table-text">22</div>
										</td>
										<td>
											<div class="dashbox__table-text"><a href="#">Jesse Plemons</a></div>
										</td>
										<td>
											<div class="dashbox__table-text dashbox__table-text--grey">jess@email.com</div>
										</td>
										<td>
											<div class="dashbox__table-text">Jesse.P</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="dashbox__table-text">21</div>
										</td>
										<td>
											<div class="dashbox__table-text"><a href="#">Matt Jones</a></div>
										</td>
										<td>
											<div class="dashbox__table-text dashbox__table-text--grey">matt@email.com</div>
										</td>
										<td>
											<div class="dashbox__table-text">Matty</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="dashbox__table-text">20</div>
										</td>
										<td>
											<div class="dashbox__table-text"><a href="#">Tess Harper</a></div>
										</td>
										<td>
											<div class="dashbox__table-text dashbox__table-text--grey">harper@email.com</div>
										</td>
										<td>
											<div class="dashbox__table-text">Harper123</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="dashbox__table-text">19</div>
										</td>
										<td>
											<div class="dashbox__table-text"><a href="#">Jonathan Banks</a></div>
										</td>
										<td>
											<div class="dashbox__table-text dashbox__table-text--grey">bank@email.com</div>
										</td>
										<td>
											<div class="dashbox__table-text">Jonathan</div>
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
								<a class="dashbox__more" href="reviews.php">View All</a>
							</div>
						</div>

						<div class="dashbox__table-wrap dashbox__table-wrap--4">
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
											<div class="dashbox__table-text"><a href="#">I Dream in Another Language</a></div>
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
											<div class="dashbox__table-text"><a href="#">Benched</a></div>
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
											<div class="dashbox__table-text"><a href="#">Whitney</a></div>
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
											<div class="dashbox__table-text"><a href="#">Blindspotting</a></div>
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
											<div class="dashbox__table-text"><a href="#">Another</a></div>
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
			<video src="img/dashboard.mp4" autoplay loop muted class="background-video"></video>

		</div>
	</main>
	<!-- end main content -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>