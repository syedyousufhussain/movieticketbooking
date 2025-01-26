<?php
include('header.php');
?>
	<!-- main con	tent -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>MOVIE DETAILS</h2>

						<!-- <span class="main__title-stat">3,702 Total</span> -->

						<div class="main__title-wrap">
							<!-- <button type="button" data-bs-toggle="modal" class="main__title-link main__title-link--wrap" data-bs-target="#modal-user">Add user</button> -->

							<select class="filter__select" name="sort" id="filter__sort">
								<option value="0">Date created</option>
								<option value="1">Pricing plan</option>
								<option value="2">Status</option>
							</select>

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Find movie..">
								<button type="button">
									<i class="ti ti-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- users -->
				<div class="col-12">
					<div class="catalog catalog--1">
						<table class="catalog__table">
						<thead>
								<tr>
									<th>MOVIE NAME</th>
									<th>MOVIE DESCRIPTION</th>
									<th>MOVIE TRAILER</th>
									<th>MOVIE IMAGE</th>
									<th>MOVIE RATING</th>
									<th>MOVIE DIRECTOR</th>
									<th>MOVIE YEAR</th>
									<th>ACTIONS</th>
									<!-- <th>REVIEWS</th>
									<th>STATUS</th>
									<th>CRAETED DATE</th>
									<th>ACTIONS</th> -->
								</tr>
						</thead>

						<tbody>
							<?php
								include("connect.php");
								$select = "SELECT * FROM `movie_upload`";
								$result = mysqli_query($con, $select);
								while($row = mysqli_fetch_assoc($result)){
							?>
							
								<tr>
									<!-- <td>
										<div class="catalog__text">11</div>
									</td> -->
									<!-- <td>
										<div class="catalog__user">
											<div class="catalog__avatar">
												<img src="img/user.svg" alt="">
											</div>
											<div class="catalog__meta">
												<h3>Tess Harper</h3>
												<span>email@email.com</span>
											</div>
										</div>
									</td> -->
									<td>
										<div class="catalog__text"><?php echo $row['mov_name'] ?></div>
									</td>
									<td>
										<div class="catalog__text"><?php echo $row['mov_description'] ?></div>
									</td>
									<td>
										<div class="catalog__text"><?php echo $row['mov_trailer'] ?></div>
									</td>
									<td>
										<div class="catalog__text">
											<img src="img/<?php echo $row['mov_image'] ?>" style= "height: 80px; width: 50px">
										</div>
									</td>
									<td>
										<div class="catalog__text"><?php echo $row['mov_rating'] ?></div>
									</td>

									<td>
										<div class="catalog__text"><?php echo $row['mov_director'] ?></div>
									</td>

									<td>
										<div class="catalog__text"><?php echo $row['mov_year'] ?></div>
									</td>
									
									<td>
										<div class="catalog__btns">	
											<div class="catalog__btn catalog__btn--delete">
												<a href="delete2.php?deleteID=<?php echo $row['mov_id']?>"><i class="fa-sharp fa-solid fa-trash-can"></i></a> 
											</div>
										</div>
									</td>
									
								</tr>
								<?php } ?>
						</tbody>
						</table>
					</div>
				</div>
				<!-- end users -->

				<!-- paginator -->
				<!-- <div class="col-12"> -->
					<!-- <div class="main__paginator"> -->
						<!-- amount -->
						<!-- <span class="main__paginator-pages">10 of 169</span> -->
						<!-- end amount -->

						<!-- <ul class="main__paginator-list">
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

						<ul class="paginator">
							<li class="paginator__item paginator__item--prev">
								<a href="#"><i class="ti ti-chevron-left"></i></a>
							</li>
							<li class="paginator__item"><a href="#">1</a></li>
							<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
							<li class="paginator__item"><a href="#">3</a></li>
							<li class="paginator__item"><a href="#">4</a></li>
							<li class="paginator__item"><span>...</span></li>
							<li class="paginator__item"><a href="#">29</a></li>
							<li class="paginator__item"><a href="#">30</a></li>
							<li class="paginator__item paginator__item--next">
								<a href="#"><i class="ti ti-chevron-right"></i></a>
							</li>
						</ul>
					</div>
				</div> -->
				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- user modal -->
	<div class="modal fade" id="modal-user" tabindex="-1" aria-labelledby="modal-user" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<form action="#" class="modal__form">
						<h4 class="modal__title">Add User</h4>

						<div class="row">
							<div class="col-12">
								<div class="sign__group">
									<label class="sign__label" for="email0">Email</label>
									<input id="email0" type="text" name="email0" class="sign__input">
								</div>
							</div>

							<div class="col-12">
								<div class="sign__group">
									<label class="sign__label" for="pass0">Password</label>
									<input id="pass0" type="password" name="pass0" class="sign__input">
								</div>
							</div>

							<div class="col-12">
								<div class="sign__group">
									<label class="sign__label" for="subscription">Subscription</label>
									<select class="sign__select" id="subscription">
										<option value="Basic">Basic</option>
										<option value="Premium">Premium</option>
										<option value="Cinematic">Cinematic</option>
									</select>
								</div>
							</div>

							<div class="col-12">
								<div class="sign__group">
									<label class="sign__label" for="rights">Rights</label>
									<select class="sign__select" id="rights">
										<option value="User">User</option>
										<option value="Moderator">Moderator</option>
										<option value="Admin">Admin</option>
									</select>
								</div>
							</div>

							<div class="col-12 col-lg-6 offset-lg-3">
								<button type="button" class="sign__btn sign__btn--modal">Add</button>
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end user modal -->

	<!-- status modal -->
	<div class="modal fade" id="modal-status" tabindex="-1" aria-labelledby="modal-status" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<form action="#" class="modal__form">
						<h4 class="modal__title">Status change</h4>

						<p class="modal__text">Are you sure about immediately change status?</p>

						<div class="modal__btns">
							<button class="modal__btn modal__btn--apply" type="button"><span>Apply</span></button>
							<button class="modal__btn modal__btn--dismiss" type="button" data-bs-dismiss="modal" aria-label="Close"><span>Dismiss</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<img src="img/project-6.jpg" class="background-image" alt="">

	<!-- end status modal -->

	<!-- delete modal -->
	<!-- <div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-delete" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<form action="#" class="modal__form">
						<h4 class="modal__title">User delete</h4>

						<p class="modal__text">Are you sure to permanently delete this user?</p>

						<div class="modal__btns">
							<button class="modal__btn modal__btn--apply" type="button">
								<span>
									
									Delete
								</span>
							</button>
							<button class="modal__btn modal__btn--dismiss" type="button" data-bs-dismiss="modal" aria-label="Close"><span>Dismiss</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end delete modal -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>