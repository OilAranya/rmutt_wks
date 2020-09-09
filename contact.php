<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>RMUTTwalkingstreet</title>
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
<div class="card col-sm-10  col-xs-10 mx-auto">
    <div class="card-body">
		<div class="container-lg">
			<div class="row">
				<div class="col-md-10 mx-auto">
					<div class="contact-form">
					<center><h2> แจ้งปัญหา</h2></center>
					<br>
					<center><p class="text-danger">* โปรดกรอกข้อมูลด้านล่างและส่งข้อซักถามหรือความคิดเห็นของท่านให้เราทราบเพื่อทำการแก้ไขปรับปรุ่งต่อไป *</p></center>   
					<br>    
						<form >
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputfirstname">ชื่อ</label>
										<input type="text" class="form-control" id="inputfirstname" required>
									</div>
								</div>                
								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputlastname">นามสกุล</label>
										<input type="text" class="form-control" id="inputlastname" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">            
									<div class="form-group">
										<label for="inputemail">อีเมลล์</label>
										<input type="email" class="form-control" id="inputemail" placeholder="name@example.com" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="inputlastname">เบอร์โทรศัพท์</label>
										<input type="text" class="form-control" id="inputlasttell" maxlength="10" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="inputMessage">กล่องข้อความสำหรับแจ้งปัญหา</label>
								<textarea class="form-control" id="inputMessage" rows="5" required></textarea>
							</div>
							<center><button type="submit" class="btn btn-dark btn-lg"><i class="fa fa-paper-plane"></i> ส่ง</button></center>
						</form>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>



</body>
</html>