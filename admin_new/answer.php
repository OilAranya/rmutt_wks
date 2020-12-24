<!-- <?php 
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
?> -->
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

<?php  
if($submit=="" or $_GET['show']=="OK"){
if($page==''){
$Search=$_POST['Search'];
$Search2=$_POST['Search2'];
}else{
$Search=$_GET['Search'];
$Search2=$_GET['Search2'];
}
?>

<?php }?>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-success">
<div class="panel-heading" style="text-align:center">
<b style="font-size:30px;">ตอบกลับปัญหา</b>
</div>
<div class="panel-body" align="center">
<div>
</div>
<form class="form-horizontal fv-form fv-form-bootstrap" id="frm_leader" action="#?submit=OK&amp;show=OK&amp;Select_ID=" method="post" enctype="multipart/form-data" data-fv-framework="bootstrap" data-fv-icon-valid="glyphicon glyphicon-ok" data-fv-icon-invalid="glyphicon glyphicon-remove" data-fv-icon-validating="glyphicon glyphicon-refresh" novalidate="novalidate"><button type="submit" class="fv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>

<div class="form-group has-feedback">
<label class="col-sm-5 control-label">ปัญหา</label>
<div class="col-sm-5" align="left">
<input name="leader_name" id="leader_name" type="text" class="form-control" data-fv-notempty="true" data-fv-notempty-message="Please Enter..." data-fv-field="leader_name"><i class="form-control-feedback" data-fv-icon-for="leader_name" style="display: none;"></i>
<small class="help-block" data-fv-validator="notEmpty" data-fv-for="leader_name" data-fv-result="NOT_VALIDATED" style="display: none;">Please Enter...</small></div>
</div>

<div class="form-group">
<label class="col-sm-5 control-label">ตอบกลับ</label>
<div class="col-sm-5" align="left">
<textarea name="remark" cols="50" rows="4" id="remark" class="form-control" data-fv-notempty="false" data-fv-notempty-message="Please Enter..."></textarea>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-success">ส่ง</button>

</div>
</div>
</form>

</div>
 </div>
</div>
</div>
</div>
</div>
 </div>