<?php
	$con = new mysqli('localhost', 'root', '', 'tourism');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wow Dipaculao</title>
	<link rel="stylesheet" type="text/css" href="css/newstyless2.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<header style="display: flex; flex-direction: row;">
		<div class="logo_style"style="min-width: 420px;">
	<img src="admin_homepage/logo.png" style="width: 100px;" class="img"><a href="#" class="logo" style="margin-left: 2%; white-space: nowrap;">Dipaculao Aurora</a>
		<div class="bx bx-menu" id="menu-icon"></div>
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
			<h1>WOW <br> Dipaculao</h1><br>
		</div></center>
	</section>
	<section class="about-dipaculao" id="about-dipaculao">
		<div class="title">
			<h2> WELCOME TO DIPACULAO AURORA!</h2><br>
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="css/images/baul falls.jpg" class="d-block w-100" style="height: 400px;" alt="">
    </div>
    <div class="carousel-item">
      <img src="css/images/pamwasan cove.jpg" class="d-block w-100" style="height: 400px;" alt="">
    </div>
	<div class="carousel-item">
      <img src="css/images/blue bridge.jpg" class="d-block w-100" style="height: 400px;" alt="">
    </div>
	<div class="carousel-item">
      <img src="css/images/dinadiawan white beach.jpg" class="d-block w-100" style="height: 400px;" alt="">
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
		<h4 align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim aliquid, aperiam tenetur perspiciatis, quibusdam fugit quasi quis magnam quos sequi delectus. Harum veniam iste iure mollitia minus voluptates sunt quod.</h4>
	</section>
<section class="ratings1" id="ratings1">
<h1 class="ran">RATINGS AND COMMENTS</h1>
	<div class="ratings">
	<div class="rank">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='visitors();' class='visited-btn' id="visitor">Most Place Visited</button>
                    <button type='button'onclick='ratings();' class='rating-btn' id="ratings">Top Page Visited</button>
                </div>
				<div class="visited" id="visited">
					<h1>Most Visited Places</h1>
					<?php
						include 'ranks.php';
						$rank = array($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9);
						rsort($rank);
						$arrlength = count($rank);
						for($x = 0; $x < $arrlength; $x++) {
						echo "<h5 style='font-style:'Poppins'; color='purple'; font-weight='bold'>" . $rank[$x] . "</h5>";
						} 

					?>
				</div>
				<div class="ratings" id="rating" style="display: none;">
					<h1>Top Page Visited</h1>
					<?php
						include 'top_visited.php';
						?>
		</div>
		<div class="commentss">
			<div class="comments-table">
			<?php
    $con = new mysqli('localhost', 'root', '', 'tourism');

    $sql = mysqli_query($con, "SELECT user_name , user_review, user_rating FROM feedback UNION ALL SELECT user_name , user_review, user_rating FROM feedback8 UNION ALL SELECT user_name , user_review, user_rating FROM feedback2 UNION ALL SELECT user_name , user_review, user_rating FROM feedback3 UNION ALL SELECT user_name , user_review, user_rating FROM feedback4 UNION ALL SELECT user_name , user_review, user_rating FROM feedback5 UNION ALL SELECT user_name , user_review, user_rating FROM feedback6 UNION ALL SELECT user_name , user_review, user_rating FROM feedback7 UNION ALL SELECT user_name , user_review, user_rating FROM feedback9 UNION ALL SELECT user_name , user_review, user_rating FROM feedback10");
	if(mysqli_num_rows($sql) > 0){
		while ($row = mysqli_fetch_assoc($sql)) { 
		    if(empty($row['user_name'])){
				echo '<div class="comment-sect" style=" word-break: break-all; margin-bottom: auto; height: min-content; max-width: 530px; font-size: 15px; margin-bottom: 0.5%; box-shadow: 5px 10px 8px #888888; border-radius: 20px; padding: 10px;">'. '<b>'. '<h3>Anonymous</h3>' . '</b>' . $row["user_review"] . '<br>'. '<h5> Rating: '. $row['user_rating']. '</h5>'. '</div>';
			}elseif(!empty($row['user_name'])) {
				echo '<div class="comment-sect" style=" word-break: break-all; margin-bottom: auto; height: min-content; max-width: 530px; font-size: 15px; margin-bottom: 0.5%; box-shadow: 5px 10px 8px #888888; border-radius: 20px; padding: 10px;">'. '<b>'. '<h3>'.$row["user_name"]. '</h3>' . '</b>' . $row["user_review"] . '<br>'. '<h5> Rating: '. $row['user_rating']. '</h5>'. '</div>';
			} else {
				echo 'No Comment';
			}
		}
	}

?>
			</div>
		</div>
		</div>
				<div class="overall" id="overall">
					<?php
						include 'overall_submit.php';
					?>
</div>
</div>

</section>
<section class="destination" id="destination">
		<div class="title" style="margin-top: 10%;">
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
	<script type="text/javascript" src="js/rank.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>