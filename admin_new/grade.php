<?php 
include_once "connDB.php";
$submit=$_GET['submit'];
$Select_ID=$_GET['Select_ID'];
$page=$_GET['page'];
$strSearch=$_GET['strSearch'];

$auto_id=$_POST['auto_id'];
$grade_name=$_POST['grade_name'];
$remark=$_POST['remark'];
if($submit=="OK"){
if($Select_ID==""){
$sql="INSERT  INTO  grade set auto_id='".$auto_id."',grade_name='".$grade_name."',remark='".$remark."'";
}else{
$sql="UPDATE grade set grade_name='".$grade_name."',remark='".$remark."'  WHERE auto_id='".$Select_ID."'" ;
}
mysqli_query($conn,$sql);
}
if ($submit=="DEL"){
$sql="delete from grade where auto_id ='".$Select_ID."'";
mysqli_query($conn,$sql);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" > 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GRADE MANAGEMENT</title>
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
$('#frm_grade').formValidation();
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

<b style='font-size:30px;'>GRADE MANAGEMENT</b>
</div>

<div class='panel-body' align='center'>
<div>

</div>

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
<form name="form1" method="post" action="grade.php?show=OK&strSearch=Y" class='navbar-form navbar-left' role='search'>
<div class='form-group' >
<select name='Search2' class='form-control'>
<option value="name" <?php if($Search2=="grade_name"){ echo 'selected'; }?>>Name</option>
<option value="remark" <?php if($Search2=="remark"){ echo 'selected'; }?>>Remark</option>
</select>
<input name='Search' type='text' class='form-control' style='width:auto'  placeholder='Enter Keyword...'  value='<?php echo $Search?>' onFocus="this.value ='' ;">
<button type='submit' class='btn btn-default' value='Search'>Search</button>
</div>
</form>

<?php
$limit = '25';

if($strSearch=="Y"){
$Qtotal = mysqli_query($conn,"select * from grade Where ".$Search2." like '%".$Search."%'  ");
}else{
$Qtotal = mysqli_query($conn,"select * from grade");
}

$total_data = mysqli_num_rows($Qtotal);
$total_page= ceil($total_data/$limit);

if($page>=$total_page) $page=$total_page;
if($page<=0 or $page==''){
$start = 0;
$page=1;
}

$start=($page-1)*$limit;

$from=$start+1;
$to=$page*$limit;
if($to>$total_data) $to=$total_data;
?>

<div class='alert alert-info' role='alert' style='font-weight:bold;'>
<?php
echo $from.' - '.$to;
printf(' from %d  ',$total_data);
printf(' | Page %d <br />',$page);
?>
</div>

<table class='table table-bordered tablesorter'>
<thead>
<tr>
<td align='center'><strong>Name </strong></td>
<td align='center'><strong>Remark </strong></td>
<td width="8%"><a href="grade.php?submit=Add&show=" class='btn btn-success btn-md' role='button'>Add New</a></td>
</tr>
</thead>
<tbody>
<?php 
if($strSearch=="Y"){
$Query = mysqli_query($conn,"select * from grade Where ".$Search2." like '%".$Search."%'   order  by  auto_id DESC LIMIT $start,$limit");
}else{
$Query= mysqli_query($conn,"select * from grade order  by  auto_id DESC LIMIT $start,$limit");
}

while($arr = mysqli_fetch_array($Query)){
$autoid = $arr['auto_id'];
?>
<tr valign='top'>
<td align='center'><?php echo $arr['grade_name'] ?></td>
<td align='center'><?php echo $arr['remark'] ?></td>
<td align="center">
<a href="grade.php?submit=Edit&Select_ID=<?php echo $autoid;?>"  title='Edit' class='btn btn-warning btn-xs'>Edit</a>&nbsp;&nbsp;
<a href="grade.php?submit=DEL&show=OK&Select_ID=<?php echo $autoid;?>" title='Delete' class='confirm_delete btn btn-danger btn-xs' data-show="<?php echo $arr['auto_id'] ?>">Del</a>
</td>
</tr>
<?php }?>
</tbody>
</table>

<nav>
<ul class='pagination'>
<li <?php if($page==1) echo "class='disabled' ";?>><a href='grade.php?page=<?php echo $page-1?>&Search=<?php echo$Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo$strSearch?>' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>

<?php for($i=1;$i<=$total_page;$i++){

if($page-2>=2 and ($i>2 and $i<$page-2)) {
echo "<li ><a href=''>...</a></li>";
$i=$page-2;
}

if($page+5<=$total_page and ($i>=$page+3 and $i<=$total_page-2)) {
echo "<li ><a href='' >...</a></li>";
$i=$total_page-1;
}

?>
<li <?php if($page==$i) echo "class='active' ";?>><a href='grade.php?page=<?php echo $i?>&Search=<?php echo $Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo $strSearch?>' ><?php echo $i?></a></li>
<?php }?>

<li <?php if($page==$total_page) echo "class='disabled' ";?>><a href='grade.php?page=<?php echo $page+1?>&Search=<?php echo $Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo $strSearch?>' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>
</ul>
</nav>

<?php }?>

<?php  if($submit=="Add"){?>
<form class='form-horizontal' id='frm_grade' action="grade.php?submit=OK&show=OK&Select_ID=" method="post"  enctype='multipart/form-data'data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>

<div class='form-group'>
<label class='col-sm-5 control-label'>Name</label>
<div class='col-sm-5' align='left'>
<input name='grade_name' id='grade_name' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Remark</label>
<div class='col-sm-5' align='left'>
<textarea name='remark' cols='50' rows='4' id='remark' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'></textarea>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success'>Insert Data</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='grade.php?show=OK'">Cancle</button>
</div>
</div>
</form>
<?php }?>


<?php  if($submit=="Edit"){
$sql="select * from grade  where auto_id ='".$Select_ID."'  ";
$tem = mysqli_query($conn,$sql);
$row3=mysqli_fetch_array($tem);
?>

<form class='form-horizontal' id='frm_grade' action="grade.php?submit=OK&show=OK&Select_ID=<?php echo $Select_ID?>" method="post" enctype='multipart/form-data'>
<input type='hidden' name='auto_id' value="<?php echo $row3['auto_id']?>">
<div class='form-group'>
<label class='col-sm-5 control-label'>Auto_id</label>
<div class='col-sm-5' align='left'>
<input name='auto_id' id='auto_id' type='text' size='50' value='<?php echo $row3["auto_id"]?>' disabled class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Name</label>
<div class='col-sm-5' align='left'>
<input name='grade_name' id='grade_name' type='text' size='50' value='<?php echo $row3["grade_name"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Remark</label>
<div class='col-sm-5' align='left'>
<textarea name='remark' cols='50' rows='4' id='remark' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'><?php echo $row3['remark']?></textarea>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success'>Update Data</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='grade.php?show=OK'">Cancle</button>
</div>
</div>
</form>
<?php }?>

</div>
 </div>
</div>
</div>
</div>


