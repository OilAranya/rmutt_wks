
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>main</title>
<style type="text/css">
body {
	background: #FFFFFF;
}
.form-control {
	box-shadow: none;
	border-radius: 10px;
	border-color: #dfe3e8;
}
.navbar {
	color: #fff;
	background: #343a40 !important;
	padding: 9px 50px;
	border: none;
}
.navbar .navbar-brand {
	color: #efe5ff;
	padding-left: 0;
	padding-right: 50px;
	font-size: 25px;
      
}
.navbar .navbar-brand b {
	color: #FFA500;
    margin-right: 10px;
}
.navbar .navbar-brand i {
	font-size: 25px;
	margin-right: 10px;
	
}
.navbar .nav-item i {
	font-size: 18px;
    margin-right: 5px;
}
.navbar .navbar-nav > a {
	color: #efe5ff;
	padding: 9px 15px;
	font-size: 17px;
  	margin-right: 40px;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: 50px;
    margin-left: 50px;
}
.btn{
    margin-right: 0px;
    padding-bottom: 10px;
	border-radius: 15px;
} 
.btn:hover {opacity: 1}
h1 {
	color: #333;
	font-size: 2rem;
	text-align: center;
	font-weight: bold;
	position: relative;
}
h2 {
	color: #333;
	font-size: 1.5rem;
	text-align: center;
	font-weight: bold;
	position: relative;
}
.card:hover {
  box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}
a:hover {
  color: yellow;
}
.container {
    padding: 4% 0;
    z-index: 0;
}
p {
	color: #333;
	font-weight: bold;
	position: relative;
}
</style>
</head> 
<body>

<?php include './header.php';?>
 <!-- ----------------content images--------------------------------------------------------------- -->
<img src="images/logo.gif" alt="" width="100%" height="650">
<!-- ---------------------content body---------------------------------------------------------- -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xs-12 col-sm-8" >
				<p>ป้ายประชาสัมพันธ์</p>
				<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/22.gif" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="images/atm.gif" class="d-block w-100">
						</div>
						<div class="carousel-item">
							<img src="..." class="d-block w-100">
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-xs-12 col-sm-4" >
				<p>วีดีโอแนะนำ</p>
				<video class="video"  controls="controls" autoplay="autoplay" preload="auto" style="width:100%; height: 300;">
					<!-- <source src="images/maket.mp4" type="video/mp4"> -->
				</video>
			</div>
		</div>
		<br>
		<!-- <div class="container">
			<h2>บุคลากร RMUTT Walking Street</h2>
			<div class="row">
				<div class="col-sm-3 text-center">
					<div class="container">
						<div class="card">
							<img class="card-img-top" src="images/suga.jpg">
						</div>
					</div>
					<h2> ********************** </h2>
				</div>
				<div class="col-sm-3 text-center">
					<div class="container">
						<div class="card">
							<img class="card-img-top" src="images/suga.jpg">
						</div>
					</div>
					<h2> ********************** </h2>
				</div>
				<div class="col-sm-3 text-center">
					<div class="container">
						<div class="card">
							<img class="card-img-top" src="images/suga.jpg">
						</div>
					</div>
					<h2> ********************** </h2>
				</div>
				<div class="col-sm-3 text-center">
					<div class="container">
						<div class="card">
							<img class="card-img-top" src="images/suga.jpg">
						</div>
					</div>
					<h2> ********************** </h2>
				</div>
			</div>
		</div> -->
	</div>
</section>

<footer>
</footer>
</body>
</html>
