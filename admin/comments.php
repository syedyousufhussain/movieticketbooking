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
						<h2>Comments</h2>

						<span class="main__title-stat">21,356 Total</span>

						<div class="main__title-wrap">
							<select class="filter__select" name="sort" id="filter__sort">
								<option value="0">Date created</option>
								<option value="1">Rating</option>
							</select>

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Key word..">
								<button type="button">
									<i class="ti ti-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- comments -->
				<div class="col-12">
					<div class="catalog catalog--1">
						<table class="catalog__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>ITEM</th>
									<th>AUTHOR</th>
									<th>TEXT</th>
									<th>LIKE / DISLIKE</th>
									<th>CRAETED DATE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>
										<div class="catalog__text">11</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">I Dream in Another Language</a></div>
									</td>
									<td>
										<div class="catalog__text">Charlize Theron</div>
									</td>
									<td>
										<div class="catalog__text">When a renowned archaeologist goes...</div>
									</td>
									<td>
										<div class="catalog__text">12 / 7</div>
									</td>
									<td>
										<div class="catalog__text">05.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">12</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">The Forgotten Road</a></div>
									</td>
									<td>
										<div class="catalog__text">Tyreese Gibson</div>
									</td>
									<td>
										<div class="catalog__text">A down-on-his-luck boxer struggles...</div>
									</td>
									<td>
										<div class="catalog__text">67 / 22</div>
									</td>
									<td>
										<div class="catalog__text">05.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">13</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">Whitney</a></div>
									</td>
									<td>
										<div class="catalog__text">Jordana Brewster</div>
									</td>
									<td>
										<div class="catalog__text">When an old friend offers him...</div>
									</td>
									<td>
										<div class="catalog__text">44 / 5</div>
									</td>
									<td>
										<div class="catalog__text">04.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">14</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">Red Sky at Night</a></div>
									</td>
									<td>
										<div class="catalog__text">Son Gun</div>
									</td>
									<td>
										<div class="catalog__text">But as the stakes get higher...</div>
									</td>
									<td>
										<div class="catalog__text">20 / 6</div>
									</td>
									<td>
										<div class="catalog__text">04.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">15</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">Into the Unknown</a></div>
									</td>
									<td>
										<div class="catalog__text">Louis Leterrier</div>
									</td>
									<td>
										<div class="catalog__text">A brilliant scientist discovers...</div>
									</td>
									<td>
										<div class="catalog__text">8 / 132</div>
									</td>
									<td>
										<div class="catalog__text">04.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">16</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">The Unseen Journey</a></div>
									</td>
									<td>
										<div class="catalog__text">Brian Cranston</div>
									</td>
									<td>
										<div class="catalog__text">But when her groundbreaking...</div>
									</td>
									<td>
										<div class="catalog__text">6 / 1</div>
									</td>
									<td>
										<div class="catalog__text">03.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">17</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">Savage Beauty</a></div>
									</td>
									<td>
										<div class="catalog__text">Matt Jones</div>
									</td>
									<td>
										<div class="catalog__text">Along the way, she must...</div>
									</td>
									<td>
										<div class="catalog__text">10 / 0</div>
									</td>
									<td>
										<div class="catalog__text">03.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">18</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">Endless Horizon</a></div>
									</td>
									<td>
										<div class="catalog__text">Rosa Lee</div>
									</td>
									<td>
										<div class="catalog__text">Renewable energy source...</div>
									</td>
									<td>
										<div class="catalog__text">13 / 14</div>
									</td>
									<td>
										<div class="catalog__text">02.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">19</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">The Lost Key</a></div>
									</td>
									<td>
										<div class="catalog__text">Tess Harper</div>
									</td>
									<td>
										<div class="catalog__text">Confront her own past to save...</div>
									</td>
									<td>
										<div class="catalog__text">12 / 7</div>
									</td>
									<td>
										<div class="catalog__text">02.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="catalog__text">20</div>
									</td>
									<td>
										<div class="catalog__text"><a href="#">Echoes of Yesterday</a></div>
									</td>
									<td>
										<div class="catalog__text">Gene Graham</div>
									</td>
									<td>
										<div class="catalog__text">Her father and uncover the secrets...</div>
									</td>
									<td>
										<div class="catalog__text">67 / 22</div>
									</td>
									<td>
										<div class="catalog__text">01.02.2023</div>
									</td>
									<td>
										<div class="catalog__btns">
											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--view" data-bs-target="#modal-view">
												<i class="ti ti-eye"></i>
											</button>

											<button type="button" data-bs-toggle="modal" class="catalog__btn catalog__btn--delete" data-bs-target="#modal-delete">
												<i class="ti ti-trash"></i>
											</button>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- end comments -->

				<!-- paginator -->
				<div class="col-12">
					<div class="main__paginator">
						<!-- amount -->
						<span class="main__paginator-pages">10 of 169</span>
						<!-- end amount -->

						<ul class="main__paginator-list">
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
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- view modal -->
	<div class="modal fade" id="modal-view" tabindex="-1" aria-labelledby="modal-view" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content modal__content--view">
					<div class="comments__autor">
						<img class="comments__avatar" src="img/user.svg" alt="">
						<span class="comments__name">John Doe</span>
						<span class="comments__time">30.08.2023, 17:53</span>
					</div>
					<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					<div class="comments__actions">
						<div class="comments__rate">
							<span><i class="ti ti-thumb-up"></i>12</span>

							<span>7<i class="ti ti-thumb-down"></i></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end view modal -->

	<!-- delete modal -->
	<div class="modal fade" id="modal-delete" tabindex="-1" aria-labelledby="modal-delete" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal__content">
					<form action="#" class="modal__form">
						<h4 class="modal__title">Comment delete</h4>

						<p class="modal__text">Are you sure to permanently delete this comment?</p>

						<div class="modal__btns">
							<button class="modal__btn modal__btn--apply" type="button"><span>Delete</span></button>
							<button class="modal__btn modal__btn--dismiss" type="button" data-bs-dismiss="modal" aria-label="Close"><span>Dismiss</span></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end delete modal -->

	<!-- JS -->
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/slimselect.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>