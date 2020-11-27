<head>
	<script type='text/javascript'>
        function preview_image(event) 
        {
             var reader = new FileReader();
             reader.onload = function()
             {
                  var output = document.getElementById('showimg');
                  output.src = reader.result;
             }
             reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</head>
<body>
<?php include './userp.php';?>
<!-- ---------------------content body---------------------------------------------------------- -->
<!-- <br>
<center>
<div class=" col-sm-7  mx-auto" >
	<div class="card">
		<br>
		<center><class="card-text"><h4>หลักฐานการชำระเงิน</h4></center>	
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
					<div class="col-md-7">
						<form action="http://devbanban.com/" method="get" enctype="multipart/form-data" class="form-horizontal">
							<div class="form-group">
								<div class="col-md-3"></div>
									<div class="col-md-7">
										<img  id="showimg" alt="" width="300" height="300">
									</div>
								</div>
							</div> 	 
						</form>
						<div class="form-group">
									<label class="control-label col-md-3"  >เลือกภาพ :</label>
									<div class="row">
										<div class="col-sm-1 mx-auto">
											<marquee direction='down'><i class="fa fa-hand-o-down"></i></marquee>
										</div>
									</div>
									<div class="col-md-5">
										<input type="file" class="form-control" id="showimg" name="showimg" accept="image/png, image/jpeg, image/gif " onchange="preview_image(event)">
									</div>
								</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<br>
<center>
<div class=" col-sm-8  mx-auto" >
	<div class="card">		
    <br>
		<center><class="card-text"><h4>หลักฐานการชำระเงิน</h4></center>
			<form action="" method="get" enctype="multipart/form-data" class="form-horizontal">
				<div class="form-group">
					<div class="col-md-3"></div>
						<div class="col-md-7">
							<img  id="showimg" alt="" width="300" height="300">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3"  >เลือกภาพ :</label>
						<div class="col-sm-1 mx-auto">
					<marquee direction='down'><i class="fa fa-hand-o-down"></i></marquee>
				</div>
						<div class="col-md-5">
							<label for="exampleFormControlFile1"></label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1" id="showimg" name="showimg" accept="image/png, image/jpeg," onchange="preview_image(event)">						
						</div>
					</div>
					<p class="text-center">อัพโหลดรูปภาพเพื่อยืนยันการชำระเงิน</p>
					<br>
					<center><button type="submit" class="btn btn-dark btn-lg"><i class="fa fa-paper-plane"></i> ส่ง</button></center>
					<br>
					<center><p class="text-danger">* ทาง RMUTT Walking Street จะทำการตรวจสอบและยืนยันการชำระเงินของท่านภายใน 24ชม *</p></center>	
				</div>  
			</form>
	</div>
</div>
<br>

<footer>
</footer>

</body>
</html>