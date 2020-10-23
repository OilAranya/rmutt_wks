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
<div class="card col-sm-7  col-xs-10 mx-auto">
    <div class="card-body">
		<div class="container-lg">
			<div class="row">
				<div class="col-md-10 mx-auto">
					<div class="contact-form">
					<center><h2> ข้อมูลร้านค้า</h2></center>
					<br>
                    <div align="center">
			            <img src="images/logo.jpg" alt="..." class="img-thumbnail" width="200" >
		            </div>
					<br>    
						<form >
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="inputnameshop">ชื่อร้านค้า</label>
										<input type="text" class="form-control" id="inputnameshop" required>
									</div>
								</div>                
							</div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputlastname">ประเภทสินค้า</label>
                                        <input type="text" class="form-control" id="inputState" required>
                                    </div>
                                </div>
                            </div>
							<div class="form-group">
								<label for="inputProductdetails">รายละเอียดสินค้า</label>
								<textarea class="form-control" id="inputProductdetails" rows="5" required></textarea>
							</div>
							<center><button type="submit" class="btn btn-dark btn-lg">บันทึกข้อมูลร้านค้า</button></center>
						</form>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer>
</footer>

</body>
</html>