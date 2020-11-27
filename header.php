

<!---------------------- register -------------------->
<?php 

    require_once "connection.php";

    if (isset($_POST['submit'])) {

		$prefix = $_POST['prefix'];
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
		$tel = $_POST['tel'];

        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user (prefix, firstname, lastname, username, password, tel,  userlevel)
                        VALUE ('$prefix', '$firstname', '$lastname' '$username', '$passwordenc', '$tel', 'm')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");
            }
        }

    }

?>
<!----------------------end register -------------------->
<html>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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
	border-radius: 5px;
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
<!-----------------------------------------------navbar header ------------------------------------------------------------------------------>
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
	<p class="navbar-brand"><i class="fa fa-cube"></i><b>RMUTT</b>WalkingStreet</p>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="navbarCollapse" class="collapse navbar-collapse">		
		<div class="navbar-nav ml-auto ">
			<a href="http://localhost/rmutt_wks_new/main.php" class="nav-item nav-link active"><i class="fa fa-home"></i>หน้าแรก</a>
			<div class="nav-item dropdown">
			<a href="#" data-toggle="dropdown" class="nav-item nav-link active dropdown-toggle"><i class="fa fa-shopping-bag"></i>หมวดหมู่ร้านค้า</a>
				<div class="dropdown-menu">					
						<a href="http://localhost/rmutt_wks_new/food.php" class="dropdown-item">อาหาร</a>
						<a href="http://localhost/rmutt_wks_new/clothing.php" class="dropdown-item">เสื้อผ้า</a>
						<a href="http://localhost/rmutt_wks_new/shoes.php" class="dropdown-item">รองเท้า</a>
						<a href="http://localhost/rmutt_wks_new/bag.php" class="dropdown-item">กระเป๋า</a>
						<a href="http://localhost/rmutt_wks_new/accessories.php" class="dropdown-item">เครื่องประดับ</a>
						<a href="http://localhost/rmutt_wks_new/animal.php" class="dropdown-item">สัตว์/ต้นไม้</a>
						<a href="http://localhost/rmutt_wks_new/electronics.php" class="dropdown-item">อุกรณ์อิเล็กทรอนิกส์</a>
						<a href="http://localhost/rmutt_wks_new/Other.php" class="dropdown-item">อื่นๆ</a>
					</div>
			</div>&nbsp;
			<a href="http://localhost/rmutt_wks_new/map.php" class="nav-item nav-link active"><i class="fa fa-map"></i>แผนที่</a>
			<a href="#" class="nav-item nav-link active"><i class="fa fa-thumbs-up"></i>รีวิว</a>
			<a href="http://localhost/rmutt_wks_new/contact.php" class="nav-item nav-link active"><i class="fa fa-exclamation-triangle"></i>แจ้งปัญหา</a>
 		</div>
        <div class="navbar-nav ml-auto">
			<div class="nav-item dropdown login-dropdown">
                <a href="#login" data-toggle="modal" class="btn btn-outline-warning"><i class="fa fa-sign-in"></i>เข้าสู่ระบบ</a>
                <!-- Modal login -->   
			
				<div id="login" class="modal fade">
					<div class="modal-dialog modal-login">
						<div class="modal-content">
							<div class="modal-header">				
								<h2 class="text-dark"><i class="fa fa-user-circle-o" ></i>เข้าสู่ระบบ</h2>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
							<?php 

							// 	session_start();

							// 	if (isset($_POST['username'])) {

							// 		include('connection.php');

							// 		$username = $_POST['username'];
							// 		$password = $_POST['password'];
							// 		$passwordenc = md5($password);

							// 		$query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

							// 		$result = mysqli_query($conn, $query);

							// 		if (mysqli_num_rows($result) == 1) {

							// 			$row = mysqli_fetch_array($result);

							// 			$_SESSION['userid'] = $row['id'];
							// 			$_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
							// 			$_SESSION['userlevel'] = $row['userlevel'];

							// 			if ($_SESSION['userlevel'] == 'a') { 
							// 				header("Location: admin_page.php");
							// 			}

							// 			if ($_SESSION['userlevel'] == 'm') {
							// 				header("Location: stall.php");
							// 			}
							// 		} else {
							// 			echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
							// 		}

							// 	} else {
							// 		header("Location: index.php");
							// 	}


							?> 
								<form action="login.php" method="post">
									<div class="form-group">
										<div class="input-group">
											<input type="email" class="form-control " name="email" placeholder="name@example.com" required>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<input type="password" class="form-control" maxlength="8" name="password" placeholder="Password" required>
										</div>
									</div>
									<center><button type="submit" class="btn btn-dark btn-lg btn-block ">เข้าสู่ระบบ</button></center><br>
									<center><p><a href="#password1234" data-toggle="modal"  class="text-primary"data-dismiss="modal" aria-hidden="true">ลืมรหัสผ่าน?</a></p></center>
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
                <a href="#register"  data-toggle="modal"  class="btn btn-warning"><i class="fa fa-user"></i>สมัครสมาชิก</a>	
            </div>	
		</div>
	</div>
<!-- Modal register -->   

<div id="register" class="modal fade text-dark">
	<div class="modal-dialog modal-register modal-lg">
		<div class="modal-content">
			<div class="modal-header">				
			<h2><i class="fa fa-user-plus"></i>สมัครสมาชิก</h2>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">  
				<from id="userregister" name="userregister" method="get" action="register.php">  
					<div class="row">	
						<!-- <div class="col-sm-12">
							<div class="form-group">
							<img src="images/5.jpg" alt="" width="650" height="300">
							</div>
						</div> -->
						<figure>
							<img src="/lms_thoresen/themes/template2/images/thumbnail-profile.png" class="gambar img-responsive img-thumbnail" name="item-img-output" id="item-img-output">
							<figcaption>
								<div class="btn btn-default btn-uploadimg"><i class="fa fa-camera"></i> Select picture </div>
							</figcaption>
						</figure>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-2">
							<div class="form-group">
								<label for="prefix">คำนำหน้า</label>
								<select type ="text"class="form-control" name="prefix" id="prefix" >
									<!-- <option>--เลือก--</option> -->
									<option>นาย</option>
									<option>นาง</option>
									<option>นางสาว</option>									
								</select>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label for="firstname">ชื่อ</label>
								<input type="text" class="form-control"  name="firstname" id="inputfirstname" required>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label for="lastname">นามสกุล</label>
								<input type="text" class="form-control" name="lastname"  id="inputlastname" required>
							</div>
						</div>
					</div>
					<div class="row">	
						<div class="col-sm-12">
							<div class="form-group">
								<label for="username">อีเมลล์</label>
								<input type="text" class="form-control"  name="email" id="username"type="text" maxlength="255" placeholder="name@example.com" required>
							</div>
						</div>
					</div>
					<div class="row">	
						<div class="col-sm-6">
							<div class="form-group">
								<label for="password">รหัสผ่าน</label>
								<input type="password" class="form-control" maxlength="8" name="password" id="password" type="password" placeholder="อย่างน้อย 8 ตัว" required>
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label for="confirmpassword">ยืนยันรหัสผ่าน</label>
								<input type="password" class="form-control" maxlength="8" name="password1" id="password" type="password" placeholder="ยืนยันรหัสผ่านอีกครั้ง" required>
							</div>
						</div>
					</div>
					<div class="row">	
						<div class="col-sm-6">
							<div class="form-group">
								<label for="tel">เบอร์โทรศัพท์</label>
								<input type="text" class="form-control" name="tel" id="tel"onkeypress="return check_number()" maxlength="10" required>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<button type="submit" class="btn btn-dark btn-lg btn-block ">สมัครสมาชิก</button>
					</div>
					<br>
				</form>
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
					<h2 class="text-dark"><i class="fa fa-unlock-alt"></i>ลืมรหัสผ่าน</h2>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form >
						<center><p class="text-danger">* กรุณากรอกอีเมลล์ระบบจะทำการส่งรหัสไปทางอีเมลล์ของท่าน *</p></center>
							<div class="form-group row">
								<label for="inputemail" class=" text-dark"><h5>อีเมลล์</h5></label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputemail" placeholder="email@example.com" required>
								</div>
							</div>
							<center><button type="submit" class="btn btn-dark btn-lg "><i class="fa fa-paper-plane-o"></i>ส่ง</button></center>
						</form>
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>
</nav>
</body>
</html>
