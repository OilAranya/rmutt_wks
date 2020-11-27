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
            

            <div class="navbar-nav ml-auto">
                <div class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar">&nbsp;&nbsp; Tangmo Tangmo <b class="caret"></b></a>
                    


                    <!-- <div class="dropdown-menu">
                        <div class="divider dropdown"></div>
                        <a href="#" class="dropdown-item"><i class="fa fa-sign-out"></i> Logout</a>
                    </div> -->



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
                </div>
            </div>
         </div>  
    </div>      
</nav>
</html>