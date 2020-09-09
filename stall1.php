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
<div class=" col-sm-7  mx-auto" >
	<div class="card">
		<img src="images/atm.gif" class="card-img-top"  width="100%" height="200">
		<div class="card-body">
			<br>
			<!-- <h2 class="card-title"><center><U>จองพื้นที่เช่าขายสินค้า</U></center></h2>
			<br> -->
			<!-- <form>
				<div class="row">
					<div class="col-sm-2">
						<div class="form-group">
							<label for="exampleFormControlSelect1">คำนำหน้า</label>
							<select class="form-control" id="exampleFormControlSelect1" >
								<option>นาย</option>
								<option>นาง</option>
								<option>นางสาว</option>									
							</select>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label for="inputfirstname">ชื่อ</label>
							<input type="text" class="form-control" id="inputfirstname" required>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label for="inputlastname">นามสกุล</label>
							<input type="text" class="form-control" id="inputlastname" required>
						</div>
					</div>
				</div>
				<div class="row">	
					<div class="col-sm-12">
						<div class="form-group">
							<label for="inputnameshop">ชื่อร้านค้า</label>
							<input type="text" class="form-control" id="inputnameshop" required>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<p>ประเภทเจ้าของร้าน</p>
							<select id="inputState" class="form-control">
								<option selected>--กรุณาเลือก--</option>
								<option>--กรุณาเลือก--</option>
								<option>พ่อค้า/แม่ค้า</option>
								<option>นักศึกษา</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<p>โซนขายสินค้า</p>
							<select id="inputState" class="form-control">
								<option selected>--กรุณาเลือก--</option>
								<option>ทั่วไป</option>
								<option>ลานกิจกรรม</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<p>ประเภทสินค้า</p>
							<select id="inputState" class="form-control">
								<option selected>--กรุณาเลือก--</option>
								<option>อาหาร</option>
								<option>เสื้อผ้า</option>
								<option>รองเท้า</option>
								<option>กระเป๋า</option>
								<option>เครื่องประดับ</option>
								<option>สัตว์/ต้นไม้</option>
								<option>อุปกรณ์อิเล็กทรอนิกส์</option>
								<option>อื่นๆ</option>
							</select>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
						<p>จำนวนวัน</p>
							<select id="inputState" class="form-control">
								<option selected>--กรุณาเลือก--</option>
								<option>1 วัน</option>
								<option>2 วัน</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<p>ช่องทางการชำระเงิน</p>
							<div class="custom-radio col-sm-10 mx-auto">
								<input type="radio" id="customRadio1" name="customRadio" class="form-control-input">
								<label class="form-control-label" for="form-control-Radio1">ชำระผ่านแอพธนาคาร</label>
							</div>
							<div class="custom-radio col-sm-10 mx-auto">						
								<input type="radio" id="customRadio2" name="customRadio" class="form-control-input">
								<label class="form-control-label" for="customRadio2">ชำระผ่านเจ้าหน้าที่</label>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<button type="submit" class="btn btn-dark btn-lg btn-block ">ต่อไป</button>
				</div>
				<br>
			</form> -->
		</div>
	</div>
</div>
<br>
<!-- <div class=" col-sm-4 col-xs-10 mx-auto" >
	<div class="card">
		<div align="center">
			<img src="images/atm.gif" alt="..." class="img-thumbnail" >
		</div>			
			<div class="card-body">
					<p class="text-center">ชื่อเจ้าของร้าน : *************</p>
					<p class="text-center">วันที่ : **/**/** เวลา : **.**</p>
					<p class="text-center">Center aligned text on all viewport sizes.</p>

					<p class="card-text">ยอดชำระทั้งหมด                     ****</p>
			</div>
				<center><button type="submit" class="btn btn-dark btn-lg">ชำระเงิน</button></center>
				<br>
				<center><p class="text-danger">* ทาง RMUTT Walking Street จะทำการตรวจสอบและยืนยันการชำระเงินของท่านภายใน 24ชม *</p></center>		
	</div>
</div> -->
<br>



<footer>
</footer>

</body>
</html>