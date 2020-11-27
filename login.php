<?php
    session_start();
    include 'connection.php'; //เรียกใช้ไฟล์ config
    $username = $_POST['email'];
    $password = $_POST['password'];

    $SQL = "SELECT * FROM user WHERE username = '$username'and password = '$password'";
    $RESULT = mysqli_query($conn,$SQL);
    $num_rows = mysqli_num_rows($RESULT); //นับแถว
    if($num_rows > 0){                      //ถ้ามากกว่า 0
        header("Location: stall.php"); //ส่งไปยังหน้าที่ตอ้งการ
    }
    else{
        echo"<script> alert('กรุณาตรวจสอบข้อมูลของท่านอีกคร้ง !!');</script>";
        header('Refresh:0; url=index.php');
    }
?>