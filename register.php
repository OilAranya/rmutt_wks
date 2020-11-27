<?php 
    include  "connection.php";

    $SQL = "SELECT * FROM `user` WHERE `username` = '".trim($_GET['email'])."'";
    $RESULT = mysqli_query($conn,$SQL);
    $num_rows = mysqli_num_rows($RESULT);
    if($num_rows !=0){
        echo "<script>alert('หมายเลขบัตรประชาชนนี้ได้เป็นสมาชิกแล้ว! กรุณาตรวจสอบขอมูลของท่าน');</script>";
		header('Refresh:0; url=main.php');
    }else{
        $sql1= "INSERT INTO user (username, password, firstname, lastname, userlevel, prefix, tel) 
		VALUES ('".trim($_GET['email'])."', '".trim($_GET['password'])."', '".trim($_GET['firstname'])."', '".trim($_GET['lastname'])."', 'b', '".trim($_GET['prefix'])."', '".trim($_GET['tel'])."');";
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