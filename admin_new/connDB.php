<?php session_start();

                $servername = "127.0.0.1";
                $sys_user ="root";
                $sys_password = "";
                //$database_name = "people_information";
				$database_name = "oil";
                $conn = mysqli_connect($servername,$sys_user,$sys_password,$database_name) or die(mysql_error());
                //mysqli_query($conn,"SET CHARACTER SET tis620");
                mysqli_query($conn,"set character set utf8");
                error_reporting(E_ALL ^ E_NOTICE);
				
				date_default_timezone_set('Asia/Bangkok');
?>