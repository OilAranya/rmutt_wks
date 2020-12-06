<?php 
include_once "connDB.php";
$submit=$_GET['submit'];
$Select_ID=$_GET['Select_ID'];
$page=$_GET['page'];
$strSearch=$_GET['strSearch'];

$auto_id=$_POST['auto_id'];
$leader_name=$_POST['leader_name'];
$remark=$_POST['remark'];
if($submit=="OK"){
if($Select_ID==""){
$sql="INSERT  INTO  leader set auto_id='".$auto_id."',leader_name='".$leader_name."',remark='".$remark."'";
}else{
$sql="UPDATE leader set leader_name='".$leader_name."',remark='".$remark."'  WHERE auto_id='".$Select_ID."'" ;
}
mysqli_query($conn,$sql);
}
if ($submit=="DEL"){
$sql="delete from leader where auto_id ='".$Select_ID."'";
mysqli_query($conn,$sql);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" > 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RMUTT WKS Admin</title>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script src='js/formValidation.min.js'></script>
<script src='js/framework/bootstrap.min.js'></script>
<script src='js/moment-with-locales.js'></script>
<script src='js/bootstrap-datetimepicker.js'></script>
<link href='css/bootstrap-datetimepicker.css' rel='stylesheet'>
<script src='js/bootbox.min.js'></script>
<script>
$(document).ready(function() {
$('#frm_leader').formValidation();
});
function chkdel(id){
if(confirm('Do you want to Delete >>> '+id+' <<<\r\nPlease... Confirm to Delete !!!  ')){
return true;
}else{
return false;
}
}

$(document).on('click', '.confirm_delete', function(e) {
var show = $(this).data('show');
e.preventDefault();

bootbox.confirm({
title:'Confirm for Delete!!!',
//size: 'small',
message: 'Do you want to Delete <<< <b>'+ show+' </b>>>> ?',
buttons: {
confirm: {
label:'Confirm',
className:'btn-success'
},
cancel: {
label:'Cancel',
className:'btn-danger'
}

},
callback: function(result){
if (result) {
window.location.href = e.target.href;
}
}
});

});
</script>

</head>
<?php include 'menu.php';?>
<div  style='margin-top:20px;'></div>
<div class='container'>
<div class='row'>
<div class='col-md-12'>
<div class='panel panel-success'>
<div class='panel-heading' style='text-align:center'>

<b style='font-size:30px;'>แผนที่ : RMUTT Walking Street</b>
</div>
<br>
<div class="card col-sm-10  col-xs-10 mx-auto">
    <div class="card-body">
        <div class="contact-map">
            <h2><p class="text-center"> มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี ตำบล คลองหก อำเภอคลองหลวง ปทุมธานี 12120</p></h2>
        </div>
  <div class="row text-center">
   <div class="col-md-4">
    <i class="fa fa-phone" ><p>061 - 289 - 0659 , 085 - 168 - 2532</p></i>
   </div>
   <div class="col-md-4">
    <i class="fa fa-phone"></i>
     <p>RMUTT@gmail.com</p>
   </div>
  </div>
<div style="margin-left: 72px;">
  <iframe src="https://www.google.com/maps/d/embed?mid=1NwFcWIA0cETkanYcpO3sMOMSugcY0YHD" width="100%" height="600"></iframe>
</div>