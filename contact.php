
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
<form  id="contact" name="contact" method="get" action="contact_db.php">
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
							
								<div class="row">	
									<div class="col-sm-6">          
										<div class="form-group">
											<label for="firstname">ชื่อ</label>
											<input type="text" class="form-control"  name="firstname" id="firstname" required>
										</div> 
									</div> 
									<div class="col-sm-6">
										<div class="form-group">
											<label for="lastname">นามสกุล</label>
											<input type="text" class="form-control" name="lastname"  id="lastname" required>           
										</div>  
									</div>
								</div>

								<div class="row">    
									<div class="col-sm-6">       
										<div class="form-group">  
											<label for="username">อีเมลล์</label>
											<input type="text" class="form-control"  name="username" id="username"type="text" maxlength="255" placeholder="name@example.com" required>              
										</div> 
									</div>    
								
									<div class="col-sm-6">               
										<div class="form-group">                
											<label for="phone_number">เบอร์โทรศัพท์</label>
											<input type="text" class="form-control" name="phone_number" id="phone_number"onkeypress="return check_number()" maxlength="10" required>
										</div>
									</div>  
								</div>  
							
								<div class="form-group">
									<label for="text_question">กล่องข้อความสำหรับแจ้งปัญหา</label>
									<textarea class="form-control" name="text_question" id="text_question" rows="5" required></textarea>
								</div>
								<center><button type="submit" class="btn btn-dark btn-lg"><i class="fa fa-paper-plane"></i>ส่ง</button></center>
						
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<br>


</body>
</html>




						<!-- <form >
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="firstname">ชื่อ</label>
										<input type="text" class="form-control" name="firstname" id="firstname" required>
									</div>
								</div>                
								<div class="col-sm-6">
									<div class="form-group">
										<label for="lastname">นามสกุล</label>
										<input type="text" class="form-control" name="lastname" id="lastname" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">            
									<div class="form-group">
										<label for="username">อีเมลล์</label>
										<input type="email" class="form-control" name="username" id="username" placeholder="name@example.com" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="phone_number">เบอร์โทรศัพท์</label>
										<input type="text" class="form-control" name="phone_number" id="phone_number" maxlength="10" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="text_question">กล่องข้อความสำหรับแจ้งปัญหา</label>
								<textarea class="form-control" name="text_question" id="text_question" rows="5" required></textarea>
							</div>
							<center><button type="submit" class="btn btn-dark btn-lg"><i class="fa fa-paper-plane"></i> ส่ง</button></center>
						</form> -->