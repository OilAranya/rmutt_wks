<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>RMUTTwalkingstreet</title>

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