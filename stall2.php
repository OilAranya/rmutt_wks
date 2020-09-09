<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>RMUTTwalkingstreet</title>
<style type="text/css">
body {
	background: #eeeeee;
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
.card {
  box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}
a:hover {
  color: yellow;
} 


</style>
</head> 
<body>
<?php include './header.php';?>
<!-- ---------------------content body---------------------------------------------------------- -->
 <br>
 <center>
<div class=" col-sm-6 col-xs-10 mx-auto" >
	<div class="card">
        <div align="center">
			<img src="images/1.png" alt="..." class="img-thumbnail" >
		</div>				
        <br>
            <center><class="card-text"><h2>เจ้าของร้าน *****************</h2></center>
			<center><class="card-text"><h4>หลักฐานการชำระเงิน</h4></center>
			<div class="row">
				<div class="col-sm-1 mx-auto">
					<marquee direction='down'><i class="fa fa-hand-o-down"></i></marquee>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-5 col-xs-8 mx-auto">
					<div class="form-group">
						<label for="exampleFormControlFile1"></label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
				</div>
			</div>
            <p class="text-center">อัพโหลดรูปภาพเพื่อยืนยันการชำระเงิน</p>
			<br>
			<center><button type="submit" class="btn btn-dark btn-lg"><i class="fa fa-paper-plane"></i> ส่ง</button></center>
			<br>
			<center><p class="text-danger">* ทาง RMUTT Walking Street จะทำการตรวจสอบและยืนยันการชำระเงินของท่านภายใน 24ชม *</p></center>
	</div>
</div>
<br>



<footer>
</footer>

</body>
</html>