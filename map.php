<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>map</title>
<style type="text/css">
body {
	background: #eeeeee;
}
.form-control {
	box-shadow: none;
	border-radius: 10px;
	border-color: #dfe3e8;
}
.navbar {
	color: #fff;
	background: #343a40 !important;
	padding: 9px 50px;
	border: none;
}
.navbar .navbar-brand {
	color: #efe5ff;
	padding-left: 0;
	padding-right: 50px;
	font-size: 25px;
      
}
.navbar .navbar-brand b {
	color: #FFA500;
    margin-right: 10px;
}
.navbar .navbar-brand i {
	font-size: 25px;
	margin-right: 10px;
	
}
.navbar .nav-item i {
	font-size: 18px;
    margin-right: 5px;
}
.navbar .navbar-nav > a {
	color: #efe5ff;
	padding: 9px 15px;
	font-size: 17px;
  	margin-right: 40px;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: 50px;
    margin-left: 50px;
}
.btn{
    margin-right: 0px;
    padding-bottom: 10px;
	border-radius: 15px;
}
.btn:hover {opacity: 1}
h1 {
	color: #333;
	font-size: 2rem;
	text-align: center;
	font-weight: bold;
	position: relative;
}
h2 {
	color: #333;
	font-size: 1.5rem;
	text-align: center;
	font-weight: bold;
	position: relative;
}
.card:hover {
  box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}
a:hover {
  color: yellow;
} 


</style>
</head> 
<body>
<?php include './header.php';?>
<!-- ---------------------content body---------------------------------------------------------- -->
<br>
<div class="card col-sm-10  col-xs-10 mx-auto">
    <div class="card-body">
        <div class="contact-map">
            <h2 class="text-center">แผนที่ : RMUTT Walking Street</h2>
            <p class="text-center"> มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี ตำบล คลองหก อำเภอคลองหลวง ปทุมธานี 12120</p>
        </div>		
        <div class="well">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8944.077653889444!2d100.7278342082507!3d14.035004756046733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d78a2b2e5cd9d%3A0xfaf21409d7e34a68!2sRMUTT%20walking%20street!5e0!3m2!1sth!2sth!4v1595749724882!5m2!1sth!2sth" width="100%" height="500" ></iframe>
        </div>
    </div>
</div>
<br>

</body>
</html>