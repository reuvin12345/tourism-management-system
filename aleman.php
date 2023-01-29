<?php
	include 'counter/track.php';
	$con = new mysqli('localhost', 'root', '', 'tourism');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wow Dipaculao</title>
	<link rel="stylesheet" type="text/css" href="css/newstyless2.css">
	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<header style="display: flex; flex-direction: row;">
		<div class="logo_style"style="min-width: 420px;">
	<img src="admin_homepage/logo.png" style="width: 100px;" class="img"><a href="#" class="logo" style="margin-left: 2%; white-space: nowrap;">Dipaculao Aurora</a><div class="bx bx-menu" id="menu-icon"></div>
		
</div>

		<ul class="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="#destination">Destination</a></li>
			<li><a href="#about-dipaculao">About</a></li>
			<li><a href="admin-login.php">Admin Log In</a></li>
		</ul>
	</header>

	<section class="home" id="home">
		<center><div class="home-text">
			<h1>Aleman<br> Falls</h1><br>
		</div></center>
	</section>
	<section class="about-dipaculao" id="about-dipaculao">
		<div class="title">
			<h2> WELCOME TO ALEMAN FALLS!</h2><br>
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="css/images/aleman 2.jpg" class="d-block w-100" style="height: 400px;" alt="Lipit Beach">
    </div>
    <div class="carousel-item">
      <img src="css/images/aleman falls.jpg" class="d-block w-100" style="height: 400px;" alt="Lipit Beach">
    </div>
	<div class="carousel-item">
      <img src="css/images/aleman 2 (1).jpg" class="d-block w-100" style="height: 400px;" alt="Lipit Beach">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br><br>
	<h4 align="justify">Aleman Falls has one unique feature that is rarely seen in waterfalls. At its basin is semi-fine cream sand, which makes a visit to this waterfalls in Aurora such a memorable experience. There’s nothing quite like enjoying the cascading water on your back while standing on soft, powdery, almost-golden sand.  This gorgeous waterfalls is found along the Dinadiawan River Protected Landscape in Dipaculao in Aurora Province, which is about five to seven hours away from Manila. </h4><br>
	<div class="rating" style="height: 500px; overflow: scroll;">
			<?php
				include 'submit.php';
			?>
</div>

	</section>
	<section class="destination" id="destination">
		<div class="title">
			<h2>Our Most Popular <br> Destination!</h2>
		</div>

		<div class="destination-content">
			<div class="col-content">
				<a href="diarabasin.php"><img src="css/images/diarabasin.jpg">
				<h5>Diarabasin Beach</h5></a>
			</div>

			<div class="col-content">
				<a href="dinadiawan.php"><img src="css/images/dinadiawan.jpg">
				<h5>Dinadiawan White Beach</h5></a>
			</div>

			<div class="col-content">
				<a href="lipit.php"><img src="css/images/lipit3.jpg">
				<h5>Lipit Beach</h5></a>
			</div>

			<div class="col-content">
				<a href="aleman.php"><img src="css/images/aleman 2.JPG">
				<h5>Aleman Falls</h5></a>
			</div>

			<div class="col-content">
				<a href="pamwasan.php"><img src="css/images/pamwasan cove.JPG">
				<h5>Pamwasan Cove</h5></a>

			</div>

			<div class="col-content">
				<a href="baul_falls.php"><img src="css/images/baul falls.JPG">
				<h5>Baul Falls</h5></a>
			</div>
			<div class="col-content">
				<a href="blue bridge.php"><img src="css/images/bluebridge2.JPG">
				<h5>Blue Bridge</h5></a>
			</div>
			<div class="col-content">
				<a href="ampere.php"><img src="css/images/ampere beach.JPG">
				<h5>Ampere beach</h5></a>
			</div>
            <div class="col-content">
				<a href="twin cave.php"><img src="css/images/twin cave in dibutunan.jpg">
				<h5>Twin Cave</h5></a>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#about-dipaculao">About us</a></li>
						<li><a href="#destination">Tour</a></li>
					</ul>
				</div>
				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="https://www.facebook.com/wowdipaculaoaurora"><i class='bx bxl-facebook' ></i></a>
						<a href="https://twitter.com/hashtag/dipaculao?lang=en&src=hashtag_click"><i class='bx bxl-twitter' ></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="js/script2.js"></script>
	<script type="text/javascript" src="js/popup.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
