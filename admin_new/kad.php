<?php 
include_once "connDB.php";
$submit=$_GET['submit'];
$Select_ID=$_GET['Select_ID'];
$page=$_GET['page'];
$strSearch=$_GET['strSearch'];

$auto_id=$_POST['auto_id'];
$kad_name=$_POST['kad_name'];
$user_id=$_POST['user_id'];
$province=$_POST['province'];
$amphur=$_POST['amphur'];
$remark=$_POST['remark'];
if($submit=="OK"){
if($Select_ID==""){
$sql="INSERT  INTO  kad set auto_id='".$auto_id."',user_id='".$user_id."',kad_name='".$kad_name."',province='".$province."',amphur='".$amphur."',remark='".$remark."'";
}else{
$sql="UPDATE kad set user_id='".$user_id."',kad_name='".$kad_name."',province='".$province."',amphur='".$amphur."',remark='".$remark."'  WHERE auto_id='".$Select_ID."'" ;
}
mysqli_query($conn,$sql);
}
if ($submit=="DEL"){
$sql="delete from kad where auto_id ='".$Select_ID."'";
mysqli_query($conn,$sql);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" > 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KAD MANAGEMENT</title>
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
$('#frm_kad').formValidation();
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

<b style='font-size:30px;'>KAD MANAGEMENT</b>
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
<form name="form1" method="post" action="kad.php?show=OK&strSearch=Y" class='navbar-form navbar-left' role='search'>
<div class='form-group' >
<select name='Search2' class='form-control'>
<option value="t2.full_name" <?php if($Search2=="t2.full_name"){ echo 'selected'; }?>>User</option>
<option value="kad_name" <?php if($Search2=="kad_name"){ echo 'selected'; }?>>ชื่อเขต</option>
<option value="t3.PROVINCE_NAME" <?php if($Search2=="t3.PROVINCE_NAME"){ echo 'selected'; }?>>จังหวัด</option>
<option value="t4.AMPHUR_NAME" <?php if($Search2=="t4.AMPHUR_NAME"){ echo 'selected'; }?>>อำเภอ</option>
</select>
<input name='Search' type='text' class='form-control' style='width:auto'  placeholder='Enter Keyword...'  value='<?php echo $Search?>' onFocus="this.value ='' ;">
<button type='submit' class='btn btn-default' value='Search'>Search</button>
</div>
</form>

<?php
$limit = '25';

if($strSearch=="Y"){
$Qtotal = mysqli_query($conn,"select t1.*,t2.full_name,t3.PROVINCE_NAME,t4.AMPHUR_NAME from kad t1,user t2,province t3,amphur t4 where t1.user_id=t2.auto_id and t1.province=t3.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID and ".$Search2." like '%".$Search."%'  ");
}else{
$Qtotal = mysqli_query($conn,"select t1.*,t2.full_name,t3.PROVINCE_NAME,t4.AMPHUR_NAME from kad t1,user t2,province t3,amphur t4 where t1.user_id=t2.auto_id and t1.province=t3.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID");
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
  <td align='center'><strong>User </strong></td>
  <td align='center'><strong>ชื่อเขต </strong></td>
<td align='center'><strong>จังหวัด </strong></td>
<td align='center'><strong>อำเภอ </strong></td>
<td width="8%"><a href="kad.php?submit=Add&show=" class='btn btn-success btn-md' role='button'>Add New</a></td>
</tr>
</thead>
<tbody>
<?php 
if($strSearch=="Y"){
//$sql="select * from kad Where ".$Search2." like '%".$Search."%'   order  by  auto_id DESC LIMIT $start,$limit";
$sql="select t1.*,t2.full_name,t3.PROVINCE_NAME,t4.AMPHUR_NAME from kad t1,user t2,province t3,amphur t4 where t1.user_id=t2.auto_id and t1.province=t3.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID and ".$Search2." like '%".$Search."%'   order  by  t1.auto_id DESC LIMIT $start,$limit";
$Query = mysqli_query($conn,$sql);
}else{
//$sql="select * from kad order  by  auto_id DESC LIMIT $start,$limit";
$sql="select t1.*,t2.full_name,t3.PROVINCE_NAME,t4.AMPHUR_NAME from kad t1,user t2,province t3,amphur t4 where t1.user_id=t2.auto_id and t1.province=t3.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID order  by  t1.auto_id DESC LIMIT $start,$limit";
$Query= mysqli_query($conn,$sql);
}

while($arr = mysqli_fetch_array($Query)){
$autoid = $arr['auto_id'];
?>
<tr valign='top'>
  <td align='left'><?php echo $arr['full_name'] ?></td>
  <td align='center'><?php echo $arr['kad_name'] ?></td>
<td align='center'><?php echo $arr['PROVINCE_NAME'] ?></td>
<td align='center'><?php echo $arr['AMPHUR_NAME'] ?></td>
<td align="center">
<a href="kad.php?submit=Edit&Select_ID=<?php echo $autoid;?>"  title='Edit' class='btn btn-warning btn-xs'>Edit</a>&nbsp;&nbsp;
<a href="kad.php?submit=DEL&show=OK&Select_ID=<?php echo $autoid;?>" title='Delete' class='confirm_delete btn btn-danger btn-xs' data-show="<?php echo $arr['auto_id'] ?>">Del</a></td>
</tr>
<?php }?>
</tbody>
</table>

<nav>
<ul class='pagination'>
<li <?php if($page==1) echo "class='disabled' ";?>><a href='kad.php?page=<?php echo $page-1?>&Search=<?php echo$Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo$strSearch?>' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>

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
<li <?php if($page==$i) echo "class='active' ";?>><a href='kad.php?page=<?php echo $i?>&Search=<?php echo $Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo $strSearch?>' ><?php echo $i?></a></li>
<?php }?>

<li <?php if($page==$total_page) echo "class='disabled' ";?>><a href='kad.php?page=<?php echo $page+1?>&Search=<?php echo $Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo $strSearch?>' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>
</ul>
</nav>

<?php }?>

<?php  if($submit=="Add"){?>
<form class='form-horizontal' id='frm_kad' action="kad.php?submit=OK&show=OK&Select_ID=" method="post"  enctype='multipart/form-data'data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>

<div class='form-group'>
<label class='col-sm-5 control-label'>User</label>
<div class='col-sm-5' align='left'>
<select name='user_id' id='user_id' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onChange="data_show(this.value,'amphur','');">
<option value=''>--- กรุณาเลือก ---</option>
<?php
$sql="select * from user Where user_type='User' Order By auto_id ASC";
$rstTemp=mysqli_query($conn,$sql);
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['full_name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ชื่อเขต</label>
<div class='col-sm-5' align='left'>
<input name='kad_name' id='kad_name' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>จังหวัด</label>
<div class='col-sm-5' align='left'>
<select name='province' id='province' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onChange="data_show(this.value,'amphur','');">
<option value=''>--- กรุณาเลือกจังหวัด ---</option>
<?php
$sql='select * from province Order By PROVINCE_ID ASC';
$rstTemp=mysqli_query($conn,$sql);
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['PROVINCE_ID']?>"><?php echo $arr_2['PROVINCE_NAME']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>อำเภอ/เขต</label>
<div class='col-sm-5' align='left'>
<select name='amphur' id='amphur'  class='form-control' onChange="data_show(this.value,'district','');" data-fv-notempty='true'>
		<option value=''>--- กรุณาเลือกอำเภอ ---</option>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>หมายเหตุ</label>
<div class='col-sm-5' align='left'>
<textarea name='remark' cols='50' rows='4' id='remark' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'></textarea>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success'>Insert Data</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='kad.php?show=OK'">Cancle</button>
</div>
</div>
</form>
<?php }?>


<?php  if($submit=="Edit"){
$sql="select t1.*,t2.full_name from kad t1,user t2 where t1.auto_id ='".$Select_ID."' and t1.user_id=t2.auto_id";
$tem = mysqli_query($conn,$sql);
$row3=mysqli_fetch_array($tem);
$province=$row3['province'];
$amphur=$row3['amphur'];
?>

<form class='form-horizontal' id='frm_kad' action="kad.php?submit=OK&show=OK&Select_ID=<?php echo $Select_ID?>" method="post" enctype='multipart/form-data'>
<input type='hidden' name='auto_id' value="<?php echo $row3['auto_id']?>">
<input type='hidden' name='user_id' value="<?php echo $row3['user_id']?>">
<div class='form-group'>
<label class='col-sm-5 control-label'>ID</label>
<div class='col-sm-5' align='left'>
<input name='' id='' type='text' size='50' value='<?php echo $row3["auto_id"]?>' disabled class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>User</label>
<div class='col-sm-5' align='left'>
<input name='user_id' id='user_id' type='text' size='50' value='<?php echo $row3["full_name"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' disabled>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ชื่อเขต</label>
<div class='col-sm-5' align='left'>
<input name='kad_name' id='kad_name' type='text' size='50' value='<?php echo $row3["kad_name"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>จังหวัด</label>
<div class='col-sm-5' align='left'>
<select name='province' id='province' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onChange="data_show(this.value,'amphur','');document.getElementById('district').innerHTML = '<option value=>--- กรุณาเลือกอำเภอ ---</option>';">
<option value=''>--- กรุณาเลือกจังหวัด ---</option>
<?php
$sql='select * from province Order By PROVINCE_ID ASC';
$rstTemp=mysqli_query($conn,$sql);
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['PROVINCE_ID']?>" <? if($arr_2['PROVINCE_ID']==$province) echo "selected";?>><?php echo $arr_2['PROVINCE_NAME']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>อำเภอ/เขต</label>
<div class='col-sm-5' align='left'>
<select name='amphur' id='amphur'  class='form-control' onChange="data_show(this.value,'district','');" data-fv-notempty='true'>
		<option value=''>--- กรุณาเลือกอำเภอ ---</option>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>หมายเหตุ</label>
<div class='col-sm-5' align='left'>
<textarea name='remark' cols='50' rows='4' id='remark' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'><?php echo $row3['remark']?></textarea>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success'>Update Data</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='kad.php?show=OK'">Cancle</button>
</div>
</div>
</form>
<?php }?>

</div>
 </div>
</div>
</div>
</div>

<script language="javascript">
// Start XmlHttp Object
function uzXmlHttp(){
    var xmlhttp = false;
    try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(e){
            xmlhttp = false;
        }
    }
 
    if(!xmlhttp && document.createElement){
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
// End XmlHttp Object
function chk_user(id,result,id_edit){
	var url = 'checkAjax.php?value_check='+document.getElementById(id).value+'&page='+result+'&id_edit='+id_edit; 
	/*
	if(result=='artist_user1'){ var url = 'checkAjax.php?user_name='+document.getElementById(id).value+'&page='+result; }
	if(result=='artist_password1'){ var url = 'checkAjax.php?pwd1='+document.getElementById(id).value+'&page='+result; }
	if(result=='artist_password22'){ var url = 'checkAjax.php?pwd1='+document.getElementById('artist_password').value+'&pwd2='+document.getElementById('artist_password2').value+'&page='+result; }
	if(result=='artist_name'){ var url = 'checkAjax.php?user_name='+document.getElementById(id).value+'&page='+result; }
	if(result=='artist_email1'){ var url = 'checkAjax.php?user_email='+document.getElementById(id).value+'&page='+result; }
	//alert(url);
	*/
    xmlhttp = uzXmlHttp();
    xmlhttp.open("GET", url, false);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=tis-620"); // set Header
    xmlhttp.send(null);
	document.getElementById(result).innerHTML =  xmlhttp.responseText;
	//document.getElementById('result2').innerHTML ='<H1>' + str + '</h1>';
	//document.getElementById(result_num).innerHTML ='<img src="images/-.png" width="16" height="16">';
}

function data_show(select_id,result,point_id){
	var url = 'data.php?select_id='+select_id+'&result='+result+'&point_id='+point_id;
	//alert(url);
	
    xmlhttp = uzXmlHttp();
    xmlhttp.open("GET", url, false);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
    xmlhttp.send(null);
	document.getElementById(result).innerHTML =  xmlhttp.responseText;
}
if('<?php echo $_GET['submit']?>'=='Edit'){
	window.onLoad=data_show('<?=$province?>','amphur','<?=$amphur?>'); 
	//window.onLoad=data_show('<?=$amphur?>','district','<?=$district?>'); 
}
</script>

