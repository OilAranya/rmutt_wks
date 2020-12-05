<?php 
    include  "connection.php";

    section_start(); 
    
    $SQL = "SELECT * FROM `stall_details` WHERE `username` = '".trim($_GET['email'])."'";
    $RESULT = mysqli_query($conn,$SQL);
    $num_rows = mysqli_num_rows($RESULT);
    if($num_rows !=0){
        echo "<script>alert('อีเมล์นี้ได้ถูกใช้งานไปแล้ว! กรุณาตรวจสอบขอมูลของท่าน');</script>";
		header('Refresh:0; url=stall1.php');
    }else{
        $sql1= "INSERT INTO stall_details (user_id, prefix, firstname, lastname, shop_name,type_user,shop_zone,light,day,payment) 
		VALUES ('', '".trim($_GET['prefix'])."', '".trim($_GET['firstname'])."', '".trim($_GET['lastname'])."','".trim($_GET['shop_name'])."','".trim($_GET['type_user'])."','".trim($_GET['shop_zone'])."','".trim($_GET['light'])."','".trim($_GET['day'])."','".trim($_GET['payment'])."');";
		$query1 = mysqli_query($conn,$sql1);


		if ($query1){
			echo"<script> alert('สมัครสมาชิกสำเร็จเรียบร้อยแล้ว');</script>";
			header('Refresh:0; url=main.php');
		  }
		  else{
			echo"<script> alert('สมัครสมาชิกไม่สำเร็จ! กรุณาลองใหม่อีกครั้ง');</script>";
			header('Refresh:0; url=main.php');
		  }

    }
   
    mysqli_close($conn); 
?>