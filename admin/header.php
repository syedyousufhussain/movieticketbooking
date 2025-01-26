<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/slimselect.css">
	<link rel="stylesheet" href="css/admin.css"> 
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Icon font -->
	<link rel="stylesheet" href="webfont/tabler-icons.min.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Online Movies, TV Shows & Cinema HTML Template">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>
	<style>
		/* Ensure the video fills the entire screen */
.background-video {
  position: fixed; /* Fix the video in the background */
  top: 0;
  left: 0;
  width: 100%; /* Make video fill the full width */
  height: 100%; /* Make video fill the full height */
  object-fit: cover; /* Ensure the video covers the entire area */
  z-index: -1; /* Place the video behind other content */
}

/* Optional: Ensure the content doesn't get hidden behind the video */
.main {
  position: relative;
  z-index: 1;
}

.background-image {
  position: fixed; /* Fix the image in the background */
  top: 0;
  left: 0;
  width: 100%; /* Make the image fill the full width of the screen */
  height: 250%; /* Make the image fill the full height of the screen */
  object-fit: cover; /* Ensure the image covers the entire screen */
  z-index: -1; /* Put the image behind the content */
}

/* Responsive Styles */
@media (max-width: 991px) {
  .background-image {
    object-fit: cover; /* Ensure it covers the screen even on smaller devices */
  }
}
@media (max-width: 768px) {
  .background-image {
    object-fit: cover; /* Ensure it covers the screen even on smaller devices */
  }
}

@media (max-width: 480px) {
  .background-image {
    object-fit: cover; /* Ensure it still covers the screen on smaller phones */
  }
}


	</style>
</head>

<body>

<!-- header -->
	<header class="header">
		<div class="header__content">
			<!-- header logo -->
			<a href="index.php" class="header__logo">
				<img src="img/logo.svg" alt="">
			</a>
			<!-- end header logo -->

			<!-- header menu btn -->
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<!-- end header menu btn -->
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<a href="index.php" class="sidebar__logo">
			<img src="img/logo.svg" alt="">
		</a>
		<!-- end sidebar logo -->
		
		<!-- sidebar user -->
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img src="img/user.svg" alt="">
			</div>

			<div class="sidebar__user-title">
				<span>Admin</span>
				<?php
if($_SESSION['role']==="Admin"){
?>
				<p><?php echo $_SESSION['name'] ?></p>
<?php } ?>
			</div>

			<button class="sidebar__user-btn" type="button">
				<a href="../main/index3.php" style="color:white;"><i class="fa-solid fa-outdent"></i></a>
			</button>
		</div>
		<!-- end sidebar user -->

		<!-- sidebar nav -->
		<div class="sidebar__nav-wrap">
			<ul class="sidebar__nav">
				<li class="sidebar__nav-item">
					<a href="index.php" class="sidebar__nav-link sidebar__nav-link--active"><i class="fa-solid fa-house"></i> <span>Dashboard</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="category.php" class="sidebar__nav-link"><i class="fa-solid fa-video"></i> <span>Add movie details</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="add-showtime.php" class="sidebar__nav-link"><i class="fa-regular fa-clock"></i> <span>Add showtime</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="add-cinema.php" class="sidebar__nav-link"><i class="fa-solid fa-film"></i>  <span>add cimena</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="users.php" class="sidebar__nav-link"><i class="fa-solid fa-users"></i> <span>Users</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="cinema.php" class="sidebar__nav-link"><i class="fa-solid fa-film"></i> <span>View Cinema</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="showtime.php" class="sidebar__nav-link"><i class="fa-regular fa-clock"></i> <span>View Show Time</span></a>
				</li>

				<li class="sidebar__nav-item">
					<a href="view-cat.php" class="sidebar__nav-link"><i class="fa-solid fa-layer-group"></i> <span>View MOVIE DETAILS</span></a>
				</li>

				<!-- dropdown -->
				<!-- <li class="sidebar__nav-item">
					<a class="sidebar__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-files"></i> <span>Pages</span> <i class="ti ti-chevron-down"></i></a>

					<ul class="dropdown-menu sidebar__dropdown-menu">
						<li><a href="add-item.php">Add item</a></li>
						<li><a href="edit-user.php">Edit user</a></li>
						<li><a href="signin.php">Sign In</a></li>
						<li><a href="signup.php">Sign Up</a></li>
						<li><a href="forgot.php">Forgot password</a></li>
						<li><a href="404.php">404 Page</a></li>
					</ul>
				</li> -->
				<!-- end dropdown -->

				<!-- <li class="sidebar__nav-item">
					<a href="../main/index.php" class="sidebar__nav-link"><i class="fa-solid fa-square-left"></i> <span>Back to HotFlix</span></a>
				</li> -->
			</ul>
		</div>
		<!-- end sidebar nav -->
		
		<!-- sidebar copyright -->
		<div class="sidebar__copyright">© HOTFLIX, 2019—2024. <br>Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">Dmitry Volkov</a></div>
		<!-- end sidebar copyright -->
		<!-- <video src="img/bg-video.mp4" autoplay loop muted class="background-video"></video> -->
		 
	</div>
	
	<!-- end sidebar -->
