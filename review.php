<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>RMUTTwalkingstreet</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style type="text/css">
#footer{
	background-color: #dfe3e8;
}
body {
	font-family: 'Open Sans', sans-serif;
}
.form-control {
	box-shadow: none;
	border-radius: 4px;        
	border-color: #dfe3e8;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #dfe3e8;
	border-radius: 0;
}
.navbar .navbar-brand {
	font-size: 30px;
	padding-left: 0;
	padding-right: 50px;
}
.navbar .navbar-brand b {
	color: #29c68c;		
}
.navbar a, .navbar a:active {
	color: #999;
	background: transparent;
}
.navbar .navbar-nav a:hover, .navbar .navbar-nav a:focus {
	color: #29c68c !important;
}
.navbar .navbar-nav > a.active, .navbar .navbar-nav.show > a {
	color: #26bb84 !important;
	background: transparent !important;
}
.navbar .form-inline .input-group-text {
	box-shadow: none;
	border-radius: 2px 0 0 2px;
	background: #f5f5f5;
	border-color: #dfe3e8;
	font-size: 16px;
}
.navbar .form-inline i {
	font-size: 16px;
}
.navbar .form-inline .btn {
	border-radius: 2px;
	color: #fff;
	border-color: #29c68c;
	background: #29c68c;
	outline: none;
}
.navbar .form-inline .btn:hover, .navbar .form-inline .btn:focus {
	border-color: #26bb84;
	background: #26bb84;
}
.navbar .search-form {
	display: inline-block;
}
.navbar .search-form .btn {
	margin-left: 4px;
}
.navbar .search-form .form-control {
	border-radius: 2px;
}
.navbar .login-form .input-group {
	margin-right: 4px;
	float: left;
}
.navbar .login-form .form-control {
	max-width: 158px;
	border-radius: 0 2px 2px 0;
}    	
.navbar .navbar-right .dropdown-toggle::after {
	display: none;
}
.navbar .dropdown-menu {
	font-size: 14px;
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	padding: 6px 20px;
}
.navbar .login-dropdown .dropdown-menu {
	width: 505px;
	padding: 20px;
	left: auto;
	right: 0;        
}
.navbar .login-dropdown .dropdown-toggle::after {
	display: none;
}
@media (min-width: 1200px){
	.search-form .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 768px){
	.navbar .dropdown-menu {
		width: 100%;
		background: transparent;
		padding: 10px 20px;
	}
	.navbar .input-group {
		width: 100%;
		margin-bottom: 15px;
	}
	.navbar .input-group .form-control {
		max-width: none;			
	}
	.navbar .login-form .btn {
		width: 100%;
	}
}
</style>
</head> 
<body>
<img src="images/1.png" class="img-fluid" alt="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<p class="navbar-brand"><b>RMUTT</b>&nbsp;Walking Street</a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
	</button>
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="http://localhost/shop/main.php" class="nav-item nav-link">หน้าแรก</a>		
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">หมวดหมู่ร้านค้า</a>
				<div class="dropdown-menu">					
					<a href="#" class="dropdown-item">อาหาร</a>
					<a href="#" class="dropdown-item">เสื้อผ้า</a>
					<a href="#" class="dropdown-item">รองเท้า</a>
					<a href="#" class="dropdown-item">กระเป๋า</a>
					<a href="#" class="dropdown-item">เครื่องประดับ</a>
					<a href="#" class="dropdown-item">สัตว์/ต้นไม้</a>
					<a href="#" class="dropdown-item">อุกรณ์อิเล็กทรอนิกส์</a>
					<a href="#" class="dropdown-item">อื่นๆ</a>
				</div>
            </div>
			<a href="http://localhost/shop/maps.php" class="nav-item nav-link ">แผนที่</a>
			<a href="http://localhost/shop/review.php" class="nav-item nav-link ">รีวิว</a>
			<a href="http://localhost/shop/contact.php" class="nav-item nav-link">ติดต่อเจ้าหน้าที่/แจ้งปัญหา</a>
        </div>
       <form class="navbar-form form-inline search-form">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<div class="navbar-nav ml-auto">
			<div class="nav-item dropdown login-dropdown">
				<a href="#login" data-toggle="modal" class="nav-item nav-link dropdown-toggle trigger-btn "><i class="fa fa-user-o"></i> เข้าสู่ระบบ</a>			
     			<!-- Modal login -->   
				 <div id="login" class="modal fade">
					<div class="modal-dialog modal-login">
						<div class="modal-content">
							<div class="modal-header  ">				
								<h4 class="modal-title ">เข้าสู่ระบบ</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<form >
									<div class="form-group">
										<div class="input-group">
											<input type="email" class="form-control " name="email" placeholder="name@example.com" required="required">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="password" class="form-control" maxlength="8" name="password" placeholder="Password" required="required">
										</div>
									</div>
									
									<center><a href="#password1234" data-toggle="modal" class="nav-item nav-link " data-dismiss="modal" aria-hidden="true">ลืมรหัสผ่าน?</a></center>
									<center><p class="text-danger">* สำหรับผู้ที่ประสงค์จะจองพื้นที่ขายสินค้าภายในตลาด *</p></center>
									<center><p class="text-danger">RMUTT Walking Street</p></center>
								</form>
							</div>
						</div>
					</div>
				</div> 
            </div>			
        </div>
		<div class="navbar-nav ml-auto">
			<div class="nav-item dropdown register-dropdown">
				<a href="#register" data-toggle="modal" class="nav-item nav-link "><img src="images/pin.png " height="23" width="25"></i>สมัครสมาชิก</a>			
     			<!-- Modal HTML -->   
				<div id="register" class="modal fade">
					<div class="modal-dialog modal-register modal-xl">
						<div class="modal-content">
							<div class="modal-header">				
								<h4 class="modal-title">สมัครสมาชิก</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">   
								<form>
								<div class="form-group">
									<label for="exampleFormControlSelect1">คำนำหน้า</label>
										<select class="form-control" id="exampleFormControlSelect1">
										<option>นาย</option>
										<option>นาง</option>
										<option>นางสาว</option>									
									</select>
								</div>
								<div class="form-group">
									<label for="inputfirstname">ชื่อ</label>
									<input type="text" class="form-control" id="inputfirstname" required>
								</div>
								<div class="form-group">
									<label for="inputlastname">นามสกุล</label>
									<input type="text" class="form-control" id="inputlastname" required>
								</div>
								<div class="form-group">
									<label for="inputlastname">อีเมลล์</label>
									<input type="email" class="form-control"  name="email" id="inputemail"type="email" maxlength="255" placeholder="name@example.com" required>
								</div>
								<div class="form-group">
									<label for="inputlastname">รหัสผ่าน</label>
									<input type="password" class="form-control" maxlength="8" name="password" id="password" type="password" placeholder="อย่างน้อย 8 ตัว" required>
								</div>
								<div class="form-group">
									<label for="inputlastname">ยืนยันรหัสผ่าน</label>
									<input type="password" class="form-control" maxlength="8" name="password" id="password" type="password" placeholder="ยืนยันรหัสผ่านอีกครั้ง" required>
								</div>
								<div class="form-group">
									<label for="inputlastname">เบอร์โทรศัพท์</label>
									<input type="text" class="form-control" name="tel" id="tel"onkeypress="return check_number()" maxlength="10" required>
								</div>
								<p>ประเภทเจ้าของร้าน</p>
								<div class="custom-control custom-radio ">
								&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
									<label class="custom-control-label" for="customRadio1">ผู้เช่าทั่วไป</label>
							    </div>
								<div class="custom-control custom-radio">
								&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
									<label class="custom-control-label" for="customRadio2">นักศึกษา</label>
								</div>
								<br>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block btn-lg">สมัครสมาชิก</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>   
            </div>			
        </div>
	</div>
	<div class="navbar-nav ml-auto">
		<div class="nav-item dropdown password1234-dropdown">
			<div id="password1234" class="modal fade">			
				<div class="modal-dialog modal-password">				
					<div class="modal-content">				
						<div class="modal-header  ">				
							<h4 class="modal-title ">ลืมรหัสผ่าน</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<form >
							<center><p class="text-danger">* กรุณากรอกอีเมลล์ระบบจะทำการส่งรหัสไปทางอีเมลล์ของท่าน *</p></center>
								<div class="form-group row">
									<label for="inputemail" class="col-sm-2 col-form-label">อีเมลล์</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="inputemail" placeholder="email@example.com" required>
									</div>
								</div>
								<center><button type="submit" class="btn btn-primary btn-lg">ส่ง</button></center>
							</form>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>
				
</nav>
 

<!-- ----------------------------header------------------------------ -->





<!-- Bootstrap -->
<link href="bootstrap-4.3.1.css" rel="stylesheet">
<style type="text/css">

</body>
</html>