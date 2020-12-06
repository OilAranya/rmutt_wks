<?php 
include_once "connDB.php";
$submit=$_GET['submit'];
$Select_ID=$_GET['Select_ID'];
$page=$_GET['page'];
$strSearch=$_GET['strSearch'];

$auto_id=$_POST['auto_id'];
$people_id=$_POST['people_id'];
$people_image=$_POST['people_image'];
$fname=$_POST['fname'];
$l_name=$_POST['l_name'];
$brithdate=$_POST['brithdate'];
$status=$_POST['status'];
$add_no=$_POST['add_no'];
$add_moo=$_POST['add_moo'];
$add_ban=$_POST['add_ban'];
$add_road=$_POST['add_road'];
$add_kad=$_POST['add_kad'];
$district=$_POST['district'];
$amphur=$_POST['amphur'];
$province=$_POST['province'];
$total_people=$_POST['total_people'];
$leader=$_POST['leader'];
$type=$_POST['type'];
$grade=$_POST['grade'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$facebook=$_POST['facebook'];
$remark=$_POST['remark'];
$percen=$_POST['percen'];
$parkkanmung=$_POST['parkkanmung'];
if($submit=="OK"){

//*********************** สร้างรหัสสมาชิกใหม่
		$sql="Select Max(auto_id)+1 as new_id from people";
		$rst=mysqli_query($conn,$sql);
		$data=mysqli_fetch_assoc($rst);
	
		$new_id=$data['new_id'];
		
		if($new_id==''){
			$auto_id="1";
		}else{
			$auto_id=$new_id;
		}
		/*
		if($new_id==''){
			$auto_id="0000001";
		}else{
			$auto_id=sprintf("%05d",$new_id);
		}
		*/


if ($_FILES['people_image']['name']!= '') {
$path='picture_upload/';
$file=$_FILES['people_image']['name'];
$file_type= strrchr( $file , '.' );
$pic_name='people_image_'.$auto_id.strtoupper($file_type);
copy ($_FILES['people_image']['tmp_name'],$path.$pic_name);
$people_image=$pic_name;
}

		
if($Select_ID==""){
$sql="INSERT  INTO  people set auto_id='".$auto_id."',people_id='".$people_id."',people_image='".$people_image."',fname='".$fname."',l_name='".$l_name."',brithdate='".$brithdate."',status='".$status."',add_no='".$add_no."',add_moo='".$add_moo."',add_ban='".$add_ban."',add_road='".$add_road."',add_kad='".$add_kad."',district='".$district."',amphur='".$amphur."',province='".$province."',total_people='".$total_people."',leader='".$leader."',type='".$type."',grade='".$grade."',tel='".$tel."',email='".$email."',facebook='".$facebook."',remark='".$remark."',percen='".$percen."',parkkanmung='".$parkkanmung."'";
}else{
$sql="UPDATE people set people_id='".$people_id."',people_image='".$people_image."',fname='".$fname."',l_name='".$l_name."',brithdate='".$brithdate."',status='".$status."',add_no='".$add_no."',add_moo='".$add_moo."',add_ban='".$add_ban."',add_road='".$add_road."',add_kad='".$add_kad."',district='".$district."',amphur='".$amphur."',province='".$province."',total_people='".$total_people."',leader='".$leader."',type='".$type."',grade='".$grade."',tel='".$tel."',email='".$email."',facebook='".$facebook."',remark='".$remark."',percen='".$percen."',parkkanmung='".$parkkanmung."'  WHERE auto_id='".$Select_ID."'" ;
}
mysqli_query($conn,$sql);
$action="Success";
}
if ($submit=="DEL"){
$sql="select * from people  where auto_id='".$Select_ID."' ";
$rstTemp=mysqli_query($conn,$sql);

$row= mysqli_fetch_assoc($rstTemp);
$pic_tmp=$row['people_image'];
if($pic_tmp!='') unlink('picture_upload/'.$pic_tmp);
$sql="delete from people where auto_id ='".$Select_ID."'";
mysqli_query($conn,$sql);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" > 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบสำรวจข้อมูล</title>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script src='js/formValidation.min.js'></script>
<script src='js/framework/bootstrap.min.js'></script>
<script src='js/moment-with-locales.js'></script>
<script src='js/bootstrap-datetimepicker.js'></script>

<link href="css/bootstrap-datepicker.css" rel="stylesheet" />
<script src="js/bootstrap-datepicker-custom.js"></script>
<script src="js/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>

<link href='css/bootstrap-datetimepicker.css' rel='stylesheet'>
<script src='js/bootbox.min.js'></script>
<script>
$(document).ready(function() {
$('#frm_people').formValidation();
});
function chkdel(id){
if(confirm('Do you want to Delete >>> '+id+' <<<\r\nPlease... Confirm to Delete !!!  ')){
return true;
}else{
return false;
}
}

$(function () {
$('#datetimepicker_brithdate').datetimepicker({
//daysOfWeekDisabled: [0, 6],
locale:'en',
format:'YYYY-MM-DD'
}
);
});
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

<script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: true,
                language: 'th',             //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
                thaiyear: true              //Set เป็นปี พ.ศ.
            }).datepicker("setDate", "0");  //กำหนดเป็นวันปัจุบัน
        });
    </script>
	
</head>

<div  style='margin-top:20px;'></div>
<div class='container'>
<div class='row'>
<div class='col-md-12'>
<div class='panel panel-success'>
<div class='panel-heading' style='text-align:center'>

<b style='font-size:30px;'>ระบบสำรวจข้อมูล</b>
</div>

<div class='panel-body' align='center'>
<div>

</div>

<?php if($action=="Success"){ ?>
<div class="alert alert-success" role="alert">
  <b>บันทุกข้อมูลเรียบร้อยแล้วครับ </b> ขอบคุณครับ<br>
	<img src="images/thankyou-image.png" class="img-responsive">
</div>
<?php }else{?>
<form class='form-horizontal' id='frm_people' action="add.php?submit=OK&show=OK&Select_ID=" method="post"  enctype='multipart/form-data'data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>

<div class='form-group'>
<label class='col-sm-5 control-label'>เลขที่บัตรประชาชน</label>
<div class='col-sm-5' align='left'>
<input name='people_id' id='people_id' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>People_image</label>
<div class='col-sm-5' align='left'>
<input type='file' name='people_image' id='people_image' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'> Select a Picture.
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ชื่อ</label>
<div class='col-sm-5' align='left'>
<input name='fname' id='fname' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>นามสกุล</label>
<div class='col-sm-5' align='left'>
<input name='l_name' id='l_name' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>วันเกิด</label>
<div class='col-sm-5' align='left'>
<div class='input-group date ' id='datetimepicker_brithdate'>
<input type='text' class='form-control' name='brithdate' id='brithdate'  />
<span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span>
</div>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>สถานภาพ</label>
<div class='col-sm-5' align='left'>
<select name='status' id='status' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<option value='โสด'>โสด</option>
<option value='สมรส'>สมรส</option>
<option value='อย่าร้าง'>อย่าร้าง</option>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เลขที่บ้าน</label>
<div class='col-sm-5' align='left'>
<input name='add_no' id='add_no' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>หมู่ที่</label>
<div class='col-sm-5' align='left'>
<input name='add_moo' id='add_moo' type='number' min='0' step='1' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ชื่อหมู่บ้าน (ถ้ามี)</label>
<div class='col-sm-5' align='left'>
<input name='add_ban' id='add_ban' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ถนน (ถ้ามี)</label>
<div class='col-sm-5' align='left'>
<input name='add_road' id='add_road' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<!--<div class='form-group'>
<label class='col-sm-5 control-label'>เขต</label>
<div class='col-sm-5' align='left'>
<input name='add_kad' id='add_kad' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div> -->

<div class='form-group'>
<label class='col-sm-5 control-label'>จังหวัด</label>
<div class='col-sm-5' align='left'>
<select name='province' id='province' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onchange="data_show(this.value,'amphur','');">
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
<select name='amphur' id='amphur'  class='form-control' onchange="data_show(this.value,'district','');" data-fv-notempty='true'>
		<option value=''>--- กรุณาเลือกอำเภอ ---</option>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ตำบล</label>
<div class='col-sm-5' align='left'>
<select name='district' id='district' class='form-control' data-fv-notempty='true'>
		<option value=''>--- กรุณาเลือกตำบล ---</option>
</select>
</div>
</div>


<div class='form-group'>
<label class='col-sm-5 control-label'>จำนวนพี่น้อง</label>
<div class='col-sm-5' align='left'>
<input name='total_people' id='total_people' type='number' min='0' step='1' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<!--<div class='form-group'>
<label class='col-sm-5 control-label'>Leader</label>
<div class='col-sm-5' align='left'>
<select name='leader' id='leader' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from leader');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ประเภท</label>
<div class='col-sm-5' align='left'>
<select name='type' id='type' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from type');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Grade</label>
<div class='col-sm-5' align='left'>
<select name='grade' id='grade' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from grade');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['name']?></option>
<?php }?>
</select>
</div>
</div> -->

<div class='form-group'>
<label class='col-sm-5 control-label'>เบอร์โทรศัพท์</label>
<div class='col-sm-5' align='left'>
<input name='tel' id='tel' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Email</label>
<div class='col-sm-5' align='left'>
<input name='email' id='email' type='email' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Facebook</label>
<div class='col-sm-5' align='left'>
<input name='facebook' id='facebook' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>หมายเหตุ</label>
<div class='col-sm-5' align='left'>
<textarea name='remark' cols='50' rows='4' id='remark' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'></textarea>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เปอร์เซ็นต์ที่คาดหวัง</label>
<div class='col-sm-5' align='left'>
<select name='percen' id='percen' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<option value='10'>10</option>
<option value='20'>20</option>
<option value='30'>30</option>
<option value='40'>40</option>
<option value='50'>50</option>
<option value='60'>60</option>
<option value='70'>70</option>
<option value='80'>80</option>
<option value='90'>90</option>
<option value='100'>100</option>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>พรรคการเมืองที่เลือก</label>
<div class='col-sm-5' align='left'>
<select name='parkkanmung' id='parkkanmung' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from parkkanmung');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success'>บันทึกข้อมูล</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='add.php'">ยกเลิก</button>
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

function data_show(select_id,result,point_id){
	var url = 'data.php?select_id='+select_id+'&result='+result+'&point_id='+point_id;
	//alert(url);
	
    xmlhttp = uzXmlHttp();
    xmlhttp.open("GET", url, false);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
    xmlhttp.send(null);
	document.getElementById(result).innerHTML =  xmlhttp.responseText;
}
if('<?=$action?>'=='Edit'){
	window.onLoad=data_show('<?=$province?>','amphur','<?=$amphur?>'); 
	window.onLoad=data_show('<?=$amphur?>','district','<?=$district?>'); 
}
</script>