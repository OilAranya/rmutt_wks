<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RMUTTwalkingstreet</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php include './headeradmin.php';?>
<!-- Main content -->

<center><h3>การลงทะเบียน</h3></center>
<!-- <div class=" col-sm-8 col-xs-10 mx-auto" >
	<div class="card">
		<img src="images/1.png" class="card-img-top"  width="100%" height="200"alt="">
		<div class="card-body">
			<h2 class="card-title"><center><U>จองพื้นที่เช่าขายสินค้า</U></center></h2>
			<br> 
			<div class="row col-sm-9 col-xs-9 mx-auto">
				<div class="col-sm-12">
			    	<div class="form-group">
						<label for="inputnameshop">ชื่อร้านค้า</label>
						<input type="text" class="form-control" id="inputnameshop" required>
					</div>
               </div>
        	</div> 
			<div class="row col-sm-9 col-xs-9 mx-auto">
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
               <div class="col-sm-9 col-xs-9 mx-auto">
					<p>โซนขายสินค้า</p>
					<div class="custom-radio col-sm-10 mx-auto">
						<input type="radio" id="customRadio1" name="customRadio13" class="form-control-input">
						<label class="form-control-label" for="form-control-Radio1">ทั่วไป</label>
					</div>
					<div class="custom-radio col-sm-10 mx-auto">						
						<input type="radio" id="customRadio2" name="customRadio13" class="form-control-input">
						<label class="form-control-label" for="customRadio2">ลานกิจกรรม</label>
					</div>
               </div>
           </div>
		   <br>
		   <div class="row">
		   		<div class="col-sm-9 col-xs-9 mx-auto">
					<p>ประเภทสินค้า</p>
					<select id="inputState" class="form-control">
						<option selected>---กรุณาเลือกประเภทสินค้า---</option>
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
		   <br>
		   <div class="row">
               <div class="col-sm-9 col-xs-9 mx-auto">
					<p>จำนวนไฟที่ใช้</p>
					<div class="form-check col-sm-10 mx-auto">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							<label class="form-check-label col-sm-2 mx-auto" for="inlineRadio1">1</label>&nbsp;&nbsp;
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							<label class="form-check-label col-sm-2 mx-auto" for="inlineRadio2">2</label>&nbsp;&nbsp;
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option3">
							<label class="form-check-label col-sm-2 mx-auto" for="inlineRadio3">3</label>&nbsp;&nbsp;
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option4">
							<label class="form-check-label col-sm-2 mx-auto" for="inlineRadio4">4</label>&nbsp;&nbsp;
					</div>
					<br>
			   </div>
           </div>
		   <div class="row">
               <div class="col-sm-9 col-xs-9 mx-auto">
					<p>จำนวนวัน</p>
					<div class="custom-radio col-sm-10 mx-auto">
						<input type="radio" id="customRadio1" name="customRadio12" class="form-control-input">
						<label class="form-control-label" for="form-control-Radio1">1 วัน</label>
					</div>
					<div class="custom-radio col-sm-10 mx-auto">						
						<input type="radio" id="customRadio2" name="customRadio12" class="form-control-input" value="2">
						<label class="form-control-label" for="customRadio2">2 วัน</label>
					</div>
               </div>
           </div>
           <br>
		   <div class="row">
               <div class="col-sm-9 col-xs-9 mx-auto">
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
		   <br>
		   <center><button type="submit" class="btn btn-dark btn-lg"> บันทึกการจอง</button></center>
            <br>
		</div>
	</div>
</div> -->
<center><div class="card col-sm-5 col-xs-5 mx auto">
  <br>
    <div class="contant">
    <input type = "radio" name="type" value="ผู้ค้าทั่วไป">พ่อค้า/แม่ค้า &nbsp; &nbsp; 
    <input type = "radio" name="type" value="นักศึกษา">นักศึกษา<br>
      <br>
      <td><h6><b>คำนำหน้า</b></h6></td>
        <div class="row">
          <div class="col-sm-10 col-md-10 col-xs-12">
            <select id="inputState" class="form-control">
              <option>นาย</option>
              <option>นาง</option>
              <option>นางสาว</option>
            </select>
          </div> 
        </div>
      <td><h6><b>ชื่อ-นามสกุล</b></h6></td>
      <td><input TYPE=text NAME=name SIZE=50></td><br>
      <br>
      <td><h6><b>วัน/เดือน/ปีเกิด</b></h6></td>
      <td><input TYPE=text NAME=birthday SIZE=50></td><br>
      <br>
      <td><h6><b>อีเมล</b></h6></td>
      <td><input TYPE=text NAME=email SIZE=50></td><br>
      <br>
      <td><h6><b>รหัสผ่าน</b></h6></td>
      <td><input TYPE=text NAME=password SIZE=50></td><br>
      <br>
      <td><h6><b>เบอร์โทรศัพท์</b></h6></td>
      <td><input TYPE=text NAME=tel SIZE=50></td><br>
      <br>
      <td><h6><b>ชื่อร้านค้า</b></h6></td>
      <td><input TYPE=text NAME=shop SIZE=50></td><br>
      <br>
      <td><h6><b>รายละเอียดร้านค้า</b></h6></td>
      <textarea name= “shop” rowa= “5” cols=”100”>
      </textarea ><br>
      <br>
      <!-- จะใส่รูปปปปปปปปปปป -->
      <td><h6><b>รูปภาพร้านค้า</b></h6></td>
    </div>
</div></center>

  <center><button type="button" class="btn btn-primary">บันทึก</button></center>
   <!-- End Main content -->
   <?php include './footeradmin.php';?>
</body>
</html>