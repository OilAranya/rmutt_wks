<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>RMUTTwalkingstreet</title>

<body>
<?php include './userp.php';?>


<body>

<!-- ---------------------content body---------------------------------------------------------- -->
<br>
<div class=" col-sm-8  mx-auto" >
	<div class="card">
		<img src="images/22.gif" class="card-img-top"  width="100%" height="200"alt="">
		<div class="card-body">
			<br>
			<h2 class="card-title"><center><U>จองพื้นที่เช่าขายสินค้า</U></center></h2>
			<br>
			<form>
				<div class="row">
					<div class="col-sm-2">
						<div class="form-group">
							<label for="inputtitle">คำนำหน้า</label>
							<select class="form-control" id="inputtitle" required>
							<option selected>--เลือก--</option>
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
				</div>
				<div class="row">
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
					<button type="submit" class="btn btn-dark btn-lg btn-block ">ถัดไป</button>
				</div>
				<br>
			</form>
		</div>
	</div>
</div>
<br>



<footer>
</footer>

</body>
</html>