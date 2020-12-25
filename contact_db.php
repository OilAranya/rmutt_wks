<?php
	include "connection.php";

	$SQL = "SELECT *  FROM 	question ";
	$result = mysqli_query($conn,$SQL);
	$result5 = mysqli_fetch_array($result);
	if($result5<0) {
		echo"<script> alert('ส่งข้อความไม่สำเร็จ! กรุณาลองใหม่อีกครั้ง');</script>";
		header('Refresh:0; url=contact.php');
	}
	else{
		
		$sql1 = "INSERT INTO question (firstname, lastname, username, phone_number, text_question) 
		VALUES ('".trim($_GET['firstname'])."', '".trim($_GET['lastname'])."', '".trim($_GET['username'])."',
		 '".trim($_GET['phone_number'])."', '".trim($_GET['text_question'])."')";

		$result1 = mysqli_query($conn,$sql1);

		if($result1) {
			echo "<script> alert('ส่งข้อความสำเร็จเรียบร้อยแล้ว');</script>";
		  header('Refresh:0; url=contact.php');
		}
		else{
			echo"<script> alert('สมัครสมาชิกไม่สำเร็จ! กรุณาลองใหม่อีกครั้ง');</script>";
			header('Refresh:0; url=contact.php');
		}
	}
	mysqli_close($conn);
?>