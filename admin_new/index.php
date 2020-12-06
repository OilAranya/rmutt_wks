<?php
include_once "connDB.php";
if($_GET['action']=="Login"){//ผู้ใช้ล๊อกอินเข้าใช้งานระบบ
				$sql="Select * from user Where user_name='".$_POST['user_name']."' and user_password='".$_POST['user_password']."'  ";
				$query=mysqli_query($conn,$sql);
				$data=mysqli_fetch_assoc($query);
				
				if(!mysqli_num_rows($query)){//ถ้าไม่มีข้อมูล
					echo "<script type='text/javascript'>alert('USERNAME หรือ PASSWORD ไม่ถูกต้อง \\nกรุณาลองใหม่อีกครั้งครับผม...');</script>";
					echo "<script type='text/javascript'>window.location.href = \"index.php\";</script>";
				}else{//ถ้ามีข้อมูล
					
									$_SESSION["sys_id"]=$data["auto_id"];
									$_SESSION["sys_fullname"]=$data["full_name"];
									$_SESSION["sys_type"]=$data["user_type"];
									
									echo "<script type='text/javascript'>window.location.href = \"people.php\";</script>";

				}
}

if($_GET['action']=="Logout"){//ผู้ใช้ออกจากรุบบ
	
	$_SESSION["sys_id"]="";
	$_SESSION["sys_fullname"]="";
	$_SESSION["sys_type"]="";
	
	echo "<script type='text/javascript'>window.location.href = \"index.php\";</script>";
}

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เข้าสู่ระบบเพื่อใช้งาน</title>

<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script src='js/formValidation.min.js'></script>
<script src='js/framework/bootstrap.min.js'></script>
<script src='js/moment-with-locales.js'></script>
<!-- *********************** check password and confirm*********************-->
<script type="text/javascript">
$(document).ready(function() {
    $('#frm_login').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
    });
});

</script>
<!-- *********************** check password and confirm*********************-->
<style>
body, html {
    
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        display:table;
    }
    body {
        display:table-cell;
        vertical-align:middle;
    }
    form {
        display:table;/* shrinks to fit conntent */
        margin:auto;
    }

</style>
<div class="col-md-4 col-md-offset-4" style="padding-top:20px;">
  <div class="panel panel-info">
  <!-- Default panel contents -->
  <div class="panel-heading"><h4 class="form-signin-heading" align="center"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> เข้าสู่ระบบเพื่อใช้งาน</h4></div>
  <div class="panel-body">
  		<center><img src="images/login.png" class="img-responsive" width="120" /><br /></center>
  
<form  class='form-horizontal' id='frm_login'  action="index.php?action=Login" method="post"  enctype='multipart/form-data' data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>
		<div class='form-group'>
						<div class='col-sm-12'>
						<input name='user_name' id='user_name' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' placeholder="Username" value="<?php echo $_GET['UserTest']; ?>">
						</div>
						</div>

						<div class='form-group'>
						
						<div class='col-sm-12'>
						<input name='user_password' id='user_password' type='password' class=' form-control password' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' placeholder="Password" value="<?php echo $_GET['UserTest']; ?>">
						</div>
						</div>
						
						<!--<center><em style="color:#FF0000;">*** กรุณาสมัครก่อนวันหวยออกด้วยนะครับผม ***</em></center><br /> -->

							<div class='form-group'>
														<div class='col-sm-offset-3 col-sm-9'>
														<button type='submit' class='btn btn-success'> ตกลง</button>
														<button type='button' class='btn btn-danger' onClick="document.location.href='index.php'"> ยกเลิก</button>
														
														</div>
							</div>
      </form>
	  
   </div>
   </div>
</div>