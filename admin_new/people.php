<?php 
include_once "connDB.php";
include "checkAGE.php";
//type="datetime-local" ************************************************************<<<<<<<<
$submit=$_GET['submit'];
$Select_ID=$_GET['Select_ID'];
$page=$_GET['page'];
$strSearch=$_GET['strSearch'];

$auto_id=$_POST['auto_id'];
$people_id=$_POST['people_id'];
$people_image=$_POST['people_image'];
$gender=$_POST['gender'];
$fname=$_POST['fname'];
$l_name=$_POST['l_name'];
//$brithdate=$_POST['brithdate'];
$brithdate=$_POST['sY']."-".$_POST['sM']."-".$_POST['sD'];
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
$sql="INSERT  INTO  people set auto_id='".$auto_id."',people_id='".$people_id."',people_image='".$people_image."',fname='".$fname."',l_name='".$l_name."',brithdate='".$brithdate."',status='".$status."',add_no='".$add_no."',add_moo='".$add_moo."',add_ban='".$add_ban."',add_road='".$add_road."',add_kad='".$add_kad."',district='".$district."',amphur='".$amphur."',province='".$province."',total_people='".$total_people."',leader='".$leader."',type='".$type."',grade='".$grade."',tel='".$tel."',email='".$email."',facebook='".$facebook."',remark='".$remark."',percen='".$percen."',parkkanmung='".$parkkanmung."',user_id='".$_SESSION['sys_id']."',gender='".$gender."' ";
}else{
$sql="UPDATE people set people_id='".$people_id."',people_image='".$people_image."',fname='".$fname."',l_name='".$l_name."',brithdate='".$brithdate."',status='".$status."',add_no='".$add_no."',add_moo='".$add_moo."',add_ban='".$add_ban."',add_road='".$add_road."',add_kad='".$add_kad."',district='".$district."',amphur='".$amphur."',province='".$province."',total_people='".$total_people."',leader='".$leader."',type='".$type."',grade='".$grade."',tel='".$tel."',email='".$email."',facebook='".$facebook."',remark='".$remark."',percen='".$percen."',parkkanmung='".$parkkanmung."',user_id='".$_SESSION['sys_id']."',gender='".$gender."'  WHERE auto_id='".$Select_ID."'" ;
}
//echo $sql;
mysqli_query($conn,$sql);
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
<title>PEOPLE MANAGEMENT</title>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script src='js/formValidation.min.js'></script>
<script src='js/framework/bootstrap.min.js'></script>
<script src='js/moment-with-locales.js'></script>
<script src='js/bootbox.min.js'></script>



<link rel="icon" href="favicon.png">
	<script type="text/javascript" src="js/parse-markdown-pure.js"></script>
	<script type="text/javascript" src="js/jQuery.SimpleMask.min.js"></script>
<script>
$(document).ready
(
	function()
	{
		$('#people_id' ).simpleMask( { 'mask': '#-####-#####-##-#', 'nextInput': $('#people_image') } );
		$('#frDtel').simpleMask( { 'mask': ['(##) ####-####', '(##) #####-####'], 'nextInput': $('#frTel' ) } );
		$('#tel' ).simpleMask( { 'mask': '###-###-####'          , 'nextInput': $('#frData') } );
		$('#frData').simpleMask( { 'mask': '##/##/####'                         , 'nextInput': $('#frCpf' ) } );
		$('#frCpf' ).simpleMask( { 'mask': '###.###.###-##'                     , 'nextInput': $('#frCnpj') } );
		$('#frCnpj').simpleMask( { 'mask': '##.###.###/####-##' } );

		$('#frCallback').simpleMask
		(
			{
				'mask'       : '#####',
				'nextInput'  : true,
				'onComplete' : function(element)
				{
					console.log('onComplete', element);
				}
			}
		);
		
		$('#people_id').focus();
		
	}
);

$(document).on('click', '.confirm_delete', function(e) {
	var show = $(this).data('show');
	e.preventDefault();
	
	bootbox.confirm({
	title:'Confirm for Delete!!!',
	//size: 'small',
	message: 'คุณต้องการลบ <<< <b>'+ show+' </b>>>> ใช่หรือไม่ ?',
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
$(document).ready(function() {
$('#frm_people').formValidation();
});
</script></head>
<?php include 'menu.php';?>
<div  style='margin-top:20px;'></div>
<div class='container'>
<div class='row'>
<div class='col-md-12'>
<div class='panel panel-success'>
<div class='panel-heading' style='text-align:center'>

<b style='font-size:30px;'>PEOPLE MANAGEMENT</b>
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
<form name="form1" method="post" action="people.php?show=OK&strSearch=Y" class='navbar-form navbar-left' role='search'>
<div class='form-group' >
<select name='Search2' class='form-control'>
<option value="fname" <?php if($Search2=="fname"){ echo 'selected'; }?>>ชื่อ</option>
<option value="l_name" <?php if($Search2=="l_name"){ echo 'selected'; }?>>นามสกุล</option>
<option value="brithdate" <?php if($Search2=="brithdate"){ echo 'selected'; }?>>วันเกิด</option>
<option value="status" <?php if($Search2=="status"){ echo 'selected'; }?>>สถานภาพ</option>
<option value="province" <?php if($Search2=="province"){ echo 'selected'; }?>>จังหวัด</option>
<option value="percen" <?php if($Search2=="percen"){ echo 'selected'; }?>>เปอร์เซ็นต์ที่คาดหวัง</option>
</select>
<input name='Search' type='text' class='form-control' style='width:auto'  placeholder='Enter Keyword...'  value='<?php echo $Search?>' onFocus="this.value ='' ;">
<button type='submit' class='btn btn-default' value='Search'>Search</button>
</div>
</form>

<?php
$limit = '50';

if($_SESSION['sys_type']=="User") $where_user="t1.user_id='".$_SESSION['sys_id']."' and ";
if($strSearch=="Y"){
$sql="select t1.*,t2.PROVINCE_NAME,t3.kad_name,t4.AMPHUR_NAME,t5.DISTRICT_NAME,t6.type_name from people t1,province t2,kad t3,amphur t4,district t5,type t6 Where $where_user t1.province=t2.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID and t1.district=t5.DISTRICT_ID and t1.type=t6.auto_id and (t1.user_id=t3.user_id and t1.amphur=t3.amphur) and ".$Search2." like '%".$Search."%'  ";
$Qtotal = mysqli_query($conn,$sql);
}else{
$sql="select t1.*,t2.PROVINCE_NAME,t3.kad_name,t4.AMPHUR_NAME,t5.DISTRICT_NAME,t6.type_name from people t1,province t2,kad t3,amphur t4,district t5,type t6 Where $where_user t1.province=t2.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID and t1.district=t5.DISTRICT_ID and t1.type=t6.auto_id and (t1.user_id=t3.user_id and t1.amphur=t3.amphur)";
$Qtotal = mysqli_query($conn,$sql);
}
//echo $sql."<br>";
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
  <td align='center'><strong>เพศ</strong></td>
  <td align='center'><strong>ชื่อ - นามสกุล</strong></td>
<td align='center'><strong>อายุ</strong></td>
<td align='center'><strong>อำเภอ</strong></td>
<td align='center'><strong>ตำบล </strong></td>
<td align='center'><strong>Staff </strong></td>
<?php if($_SESSION['sys_type']=="User"){?>
<td width="8%"><a href="people.php?submit=Add&show=" class='btn btn-success btn-md' role='button'>Add New</a></td>
<?php }?>
</tr>
</thead>
<tbody>
<?php 
if($strSearch=="Y"){
$sql="select t1.*,t2.PROVINCE_NAME,t3.kad_name,t4.AMPHUR_NAME,t5.DISTRICT_NAME,t6.type_name from people t1,province t2,kad t3,amphur t4,district t5,type t6 Where $where_user t1.province=t2.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID and t1.district=t5.DISTRICT_ID and t1.type=t6.auto_id and (t1.user_id=t3.user_id and t1.amphur=t3.amphur) and ".$Search2." like '%".$Search."%'   order  by  auto_id DESC LIMIT $start,$limit";
$Query = mysqli_query($conn,$sql);
}else{
$sql="select t1.*,t2.PROVINCE_NAME,t3.kad_name,t4.AMPHUR_NAME,t5.DISTRICT_NAME,t6.type_name from people t1,province t2,kad t3,amphur t4,district t5,type t6 Where $where_user t1.province=t2.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID and t1.district=t5.DISTRICT_ID and t1.type=t6.auto_id and (t1.user_id=t3.user_id and t1.amphur=t3.amphur) order  by  t1.auto_id DESC LIMIT $start,$limit";
$Query= mysqli_query($conn,$sql);
}
//echo $sql;

while($arr = mysqli_fetch_array($Query)){
$autoid = $arr['auto_id'];
?>
<tr valign='top'>
  <td align='center'><?php echo $arr['gender'] ?></td>
  <td align='left'><?php echo $arr['fname'] ?> <?php echo $arr['l_name'] ?></td>
<td align='center'>
<?php 
	$birthdate = strtotime( $arr['brithdate']  );
	$age= timespan( $birthdate , time() );
	$sql2="Update people Set people_age='".$age."' Where auto_id='".$arr['auto_id']."' ";
	mysqli_query($conn,$sql2);
	
	echo $age;
?></td>
<td align='left'><?php echo $arr['AMPHUR_NAME'] ?></td>
<td align='left'><?php echo $arr['DISTRICT_NAME'] ?></td>
<td align='left'><?php echo $arr['type_name'] ?></td>

<td align="center">

<a href="people.php?submit=Edit&Select_ID=<?php echo $autoid;?>"  title='Edit' class='btn btn-warning btn-xs'><?php if($_SESSION['sys_type']=="Admin"){ echo "Detail";}else{ echo "Edit";}?></a>&nbsp;&nbsp;
<?php if($_SESSION['sys_type']=="User"){?>
<a href="people.php?submit=DEL&show=OK&Select_ID=<?php echo $autoid;?>" title='Delete' class='confirm_delete btn btn-danger btn-xs' data-show="คุณ<?php echo $arr['fname']." ".$arr['l_name'] ?>">Del</a>
<?php }?></td>
</tr>
<?php }?>
</tbody>
</table>
<?php if($total_data!=0 and $_SESSION['sys_type']=="User"){?>
<center>
  <a href="report.php" target="_blank"><img src="images/report.jpg" alt="Report" width="64" border="0" class="img-responsive"></a>
</center>
<?php }?>

<nav>
<ul class='pagination'>
<li <?php if($page==1) echo "class='disabled' ";?>><a href='people.php?page=<?php echo $page-1?>&Search=<?php echo$Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo$strSearch?>' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a></li>

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
<li <?php if($page==$i) echo "class='active' ";?>><a href='people.php?page=<?php echo $i?>&Search=<?php echo $Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo $strSearch?>' ><?php echo $i?></a></li>
<?php }?>

<li <?php if($page==$total_page) echo "class='disabled' ";?>><a href='people.php?page=<?php echo $page+1?>&Search=<?php echo $Search?>&Search2=<?php echo $Search2?>&strSearch=<?php echo $strSearch?>' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a></li>
</ul>
</nav>

<?php }?>

<?php  if($submit=="Add"){?>
<form class='form-horizontal' id='frm_people' action="people.php?submit=OK&show=OK&Select_ID=" method="post"  enctype='multipart/form-data'data-fv-framework='bootstrap' 
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>

<div class='form-group'>
<label class='col-sm-5 control-label'>เลขที่บัตรประชาชน</label>
<div class='col-sm-5' align='left'>
<input name='people_id' id='people_id' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...' onBlur="chk_user('people_id','people_id_chk','');return false;">
<b id="people_id_chk"></b>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>People_image</label>
<div class='col-sm-5' align='left'>
<input type='file' name='people_image' id='people_image' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'> Select a Picture.
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เพศ</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-primary '>
<input  name='gender'  type='radio' value='ชาย'> ชาย
</label>
<label class='btn btn-primary '>
<input  name='gender'  type='radio' value='หญิง'> หญิง
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ชื่อ</label>
<div class='col-sm-5' align='left'>
<input name='fname' id='fname' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onBlur="chk_user('fname','fname_chk','');return false;">
<b id="fname_chk"></b>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>นามสกุล</label>
<div class='col-sm-5' align='left'>
<input name='l_name' id='l_name' type='text' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onBlur="chk_user('l_name','l_name_chk','');return false;">
<b id="l_name_chk"></b>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>วันเกิด</label>
<div class='col-sm-5' align='left'>
	<div class="form-inline">
		<!--  <label>Expiration (MM/YYYY)</label><br>
		  <input type="text" size="2" class="form-control" /> / <input type="text" size="4" class="form-control" /> / <input type="text" size="4" class="form-control" /> -->
		 <select name='sD' id='sD' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
				<option value=''> วันที่ </option>
				<?php 
					for($i=1;$i<=31;$i++){
				?>
						<option value='<?php echo $i?>'><?php echo $i?></option>
				<?php }?>
		</select>
		<select name='sM' id='sM' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
				<option value=''> เดือน </option>
						<option value='1'>มกราคม</option>
						<option value='2'>กุมภาพันธ์</option>
						<option value='3'>มีนาคม</option>
						<option value='4'>เมษายน</option>
						<option value='5'>พฤษภาคม</option>
						<option value='6'>มิถุนายน</option>
						<option value='7'>กรกฎาคม</option>
						<option value='8'>สิงหาคม</option>
						<option value='9'>กันยายน</option>
						<option value='10'>ตุลาคม</option>
						<option value='11'>พฤศจิกายน</option>
						<option value='12'>ธันวาคม</option>
		</select>
		<select name='sY' id='sY' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
				<option value=''> ปี </option>
				<?php 
					$Year=(date('Y')+543);
					for($i=1;$i<=70;$i++){
				?>
						<option value='<?php echo $i?>'><?php echo ($Year-(17+$i));?></option>
				<?php }?>
		</select>
	</div>
</div>
</div>

<!--<div class='form-group'>
<label class='col-sm-5 control-label'>วันเกิด</label>
<div class='col-sm-5' align='left'>
<div class='input-group date ' id='datetimepicker_brithdate'>
<input type='text' class='form-control' name='brithdate' id='brithdate'  />
<span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span>
</div>
</div>
</div> -->

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
<select name='province' id='province' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'  onChange="data_show(this.value,'amphur','');document.getElementById('district').innerHTML = '<option value=>--- กรุณาเลือกอำเภอ ---</option>';">
<option value=''>--- กรุณาเลือกจังหวัด ---</option>
<?php
$sql="SELECT * FROM province WHERE PROVINCE_ID in (SELECT DISTINCT province FROM  kad WHERE user_id ='".$_SESSION['sys_id']."') Order By PROVINCE_ID ASC";
//$sql="SELECT * FROM province Order By PROVINCE_ID ASC";
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

<div class='form-group'>
<label class='col-sm-5 control-label'>Leader</label>
<div class='col-sm-5' align='left'>
<select name='leader' id='leader' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from leader');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['leader_name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>STAFF</label>
<div class='col-sm-5' align='left'>
<select name='type' id='type' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from type');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['type_name']?></option>
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
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['grade_name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เบอร์โทรศัพท์</label>
<div class='col-sm-5' align='left'>
<input name='tel' id='tel' type='text' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...' >
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
<button type='submit' class='btn btn-success'>Insert Data</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='people.php?show=OK'">Cancle</button>
</div>
</div>
</form>
<?php }?>


<?php  if($submit=="Edit"){
$sql="select * from people  where auto_id ='".$Select_ID."'  ";
$tem = mysqli_query($conn,$sql);
$row3=mysqli_fetch_array($tem);
$province=$row3['province'];
$amphur=$row3['amphur'];
$district=$row3['district'];
?>

<form class='form-horizontal' id='frm_people' action="people.php?submit=OK&show=OK&Select_ID=<?php echo $Select_ID?>" method="post" enctype='multipart/form-data'>
<input type='hidden' name='auto_id' value="<?php echo $row3['auto_id']?>">
<input type='hidden' name='people_image' value="<?php echo $row3['people_image']?>" >
<div class='form-group'>
<label class='col-sm-5 control-label'>ลำดับที่</label>
<div class='col-sm-5' align='left'>
<input name='auto_id' id='auto_id' type='text' size='50' value='<?php echo $row3["auto_id"]?>' disabled class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เลขที่บัตรประชาชน</label>
<div class='col-sm-5' align='left'>
<input name='people_id' id='people_id' type='text' size='50' value='<?php echo $row3["people_id"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'  onBlur="chk_user('people_id','people_id_chk','<?php echo $row3['auto_id']?>');return false;">
<b id="people_id_chk"></b>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>People_image</label>
<div class='col-sm-5' align='left'>
<a data-toggle='lightbox' href="picture_upload/<?php echo $row3['people_image']?>" class='thumbnail'  TARGET='_blank' ><?php if($row3['people_image']==''){?>
<img id='people_image' src="picture_upload/noimg.gif">
<?php }else{?>
<img id='people_image' src="picture_upload/<?php echo $row3['people_image']?>" >
<?php }?>
</a>
<input type='file' name='people_image' id='people_image'> Edit a Picture.</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เพศ</label>
<div class='col-sm-5' align='left'>
<label class='btn btn-primary '>
<input  name='gender'  type='radio' value='ชาย' <?php if($row3['gender']=='ชาย') echo 'checked';?>> ชาย
</label>
<label class='btn btn-primary '>
<input  name='gender'  type='radio' value='หญิง' <?php if($row3['gender']=='หญิง') echo 'checked';?>> หญิง
</label>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ชื่อ</label>
<div class='col-sm-5' align='left'>
<input name='fname' id='fname' type='text' size='50' value='<?php echo $row3["fname"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onBlur="chk_user('fname','fname_chk','<?php echo $row3['auto_id']?>');return false;">
<b id="fname_chk"></b>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>นามสกุล</label>
<div class='col-sm-5' align='left'>
<input name='l_name' id='l_name' type='text' size='50' value='<?php echo $row3["l_name"]?>' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onBlur="chk_user('l_name','l_name_chk','<?php echo $row3['auto_id']?>');return false;">
<b id="l_name_chk"></b>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>วันเกิด</label>
<div class='col-sm-5' align='left'>
	<div class="form-inline">
		<?php
			$date1=explode("-",$row3["brithdate"]);
			$y=$date1[0];
			$m=$date1[1];
			$d=$date1[2];
			//echo $d."/".$m."/".$y;
		?>
		 <select name='sD' id='sD' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
				<option value=''> วันที่ </option>
				<?php 
					for($i=1;$i<=31;$i++){
				?>
						<option value='<?php echo sprintf("%02d",$i)?>' <?php if($d==sprintf("%02d",$i)) echo "selected";?>><?php echo $i?></option>
				<?php }?>
		</select>
		<select name='sM' id='sM' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
				<option value=''> เดือน </option>
						<option value='01' <?php if($m=="01") echo "selected";?>>มกราคม</option>
						<option value='02' <?php if($m=="02") echo "selected";?>>กุมภาพันธ์</option>
						<option value='03' <?php if($m=="03") echo "selected";?>>มีนาคม</option>
						<option value='04' <?php if($m=="04") echo "selected";?>>เมษายน</option>
						<option value='05' <?php if($m=="05") echo "selected";?>>พฤษภาคม</option>
						<option value='06' <?php if($m=="06") echo "selected";?>>มิถุนายน</option>
						<option value='07' <?php if($m=="07") echo "selected";?>>กรกฎาคม</option>
						<option value='08' <?php if($m=="08") echo "selected";?>>สิงหาคม</option>
						<option value='09' <?php if($m=="09") echo "selected";?>>กันยายน</option>
						<option value='10' <?php if($m=="10") echo "selected";?>>ตุลาคม</option>
						<option value='11' <?php if($m=="11") echo "selected";?>>พฤศจิกายน</option>
						<option value='12' <?php if($m=="12") echo "selected";?>>ธันวาคม</option>
		</select>
		<select name='sY' id='sY' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
				<option value=''> ปี </option>
				<?php 
					$Year=(date('Y')+543);
					for($i=1;$i<=70;$i++){
				?>
						<option value='<?php echo (($Year-(17+$i))-543);?>' <?php if($y==(($Year-(17+$i))-543)) echo "selected";?>><?php echo ($Year-(17+$i));?></option>
				<?php }?>
		</select>
	</div>
</div>
</div>


<!--<div class='form-group'>
<label class='col-sm-5 control-label'>วันเกิด</label>
<div class='col-sm-5' align='left'>
<div class='input-group date ' id='datetimepicker_brithdate'>
<input type='text' class='form-control' name='brithdate' id='brithdate' value='<?php echo $row3["brithdate"]?>' />
<span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span>
</div>
</div>
</div> -->

<div class='form-group'>
<label class='col-sm-5 control-label'>สถานภาพ</label>
<div class='col-sm-5' align='left'>
<select name='status' id='status' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<option value='โสด' <?php if($row3['status']=='โสด') echo 'selected';?>>โสด</option>
<option value='สมรส' <?php if($row3['status']=='สมรส') echo 'selected';?>>สมรส</option>
<option value='อย่าร้าง' <?php if($row3['status']=='อย่าร้าง') echo 'selected';?>>อย่าร้าง</option>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เลขที่บ้าน</label>
<div class='col-sm-5' align='left'>
<input name='add_no' id='add_no' type='text' size='50' value='<?php echo $row3["add_no"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>หมู่ที่</label>
<div class='col-sm-5' align='left'>
<input name='add_moo' id='add_moo' type='number' min='0' step='1' value='<?php echo $row3["add_moo"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ชื่อหมู่บ้าน (ถ้ามี)</label>
<div class='col-sm-5' align='left'>
<input name='add_ban' id='add_ban' type='text' size='50' value='<?php echo $row3["add_ban"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ถนน (ถ้ามี)</label>
<div class='col-sm-5' align='left'>
<input name='add_road' id='add_road' type='text' size='50' value='<?php echo $row3["add_road"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<!--<div class='form-group'>
<label class='col-sm-5 control-label'>เขต</label>
<div class='col-sm-5' align='left'>
<input name='add_kad' id='add_kad' type='text' size='50' value='<?php echo $row3["add_kad"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div> -->

<div class='form-group'>
<label class='col-sm-5 control-label'>จังหวัด</label>
<div class='col-sm-5' align='left'>
<select name='province' id='province' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...' onChange="data_show(this.value,'amphur','');document.getElementById('district').innerHTML = '<option value=>--- กรุณาเลือกอำเภอ ---</option>';">
<option value=''>--- กรุณาเลือกจังหวัด ---</option>
<?php
if($_SESSION['sys_type']=="Admin"){
		$sql="SELECT * FROM province WHERE PROVINCE_ID in (SELECT DISTINCT province FROM  kad WHERE user_id ='".$row3["user_id"]."') Order By PROVINCE_ID ASC";
}else{
		$sql="SELECT * FROM province WHERE PROVINCE_ID in (SELECT DISTINCT province FROM  kad WHERE user_id ='".$_SESSION['sys_id']."') Order By PROVINCE_ID ASC";
		//$sql="SELECT * FROM province  Order By PROVINCE_ID ASC";
}
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
<label class='col-sm-5 control-label'>ตำบล</label>
<div class='col-sm-5' align='left'>
<select name='district' id='district' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
		<option value=''>--- กรุณาเลือกตำบล ---</option>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>จำนวนพี่น้อง</label>
<div class='col-sm-5' align='left'>
<input name='total_people' id='total_people' type='number' min='0' step='1' value='<?php echo $row3["total_people"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Leader</label>
<div class='col-sm-5' align='left'>
<select name='leader' id='leader' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from leader');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>" <?php if($row3["leader"]==$arr_2['auto_id']) echo 'selected'; ?>><?php echo $arr_2['leader_name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>STAFF</label>
<div class='col-sm-5' align='left'>
<select name='type' id='type' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from type');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>" <?php if($row3["type"]==$arr_2['auto_id']) echo 'selected'; ?>><?php echo $arr_2['type_name']?></option>
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
<option value="<?php echo $arr_2['auto_id']?>" <?php if($row3["grade"]==$arr_2['auto_id']) echo 'selected'; ?>><?php echo $arr_2['grade_name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เบอร์โทรศัพท์</label>
<div class='col-sm-5' align='left'>
<input name='tel' id='tel' type='text' size='50' value='<?php echo $row3["tel"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Email</label>
<div class='col-sm-5' align='left'>
<input name='email' id='email' type='email'  value='<?php echo $row3["email"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...' >
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>Facebook</label>
<div class='col-sm-5' align='left'>
<input name='facebook' id='facebook' type='text' size='50' value='<?php echo $row3["facebook"]?>' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>หมายเหตุ</label>
<div class='col-sm-5' align='left'>
<textarea name='remark' cols='50' rows='4' id='remark' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'><?php echo $row3['remark']?></textarea>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>เปอร์เซ็นต์ที่คาดหวัง</label>
<div class='col-sm-5' align='left'>
<select name='percen' id='percen' class='form-control' data-fv-notempty='false' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<option value='10' <?php if($row3['percen']=='10') echo 'selected';?>>10</option>
<option value='20' <?php if($row3['percen']=='20') echo 'selected';?>>20</option>
<option value='30' <?php if($row3['percen']=='30') echo 'selected';?>>30</option>
<option value='40' <?php if($row3['percen']=='40') echo 'selected';?>>40</option>
<option value='50' <?php if($row3['percen']=='50') echo 'selected';?>>50</option>
<option value='60' <?php if($row3['percen']=='60') echo 'selected';?>>60</option>
<option value='70' <?php if($row3['percen']=='70') echo 'selected';?>>70</option>
<option value='80' <?php if($row3['percen']=='80') echo 'selected';?>>80</option>
<option value='90' <?php if($row3['percen']=='90') echo 'selected';?>>90</option>
<option value='100' <?php if($row3['percen']=='100') echo 'selected';?>>100</option>
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
<option value="<?php echo $arr_2['auto_id']?>" <?php if($row3["parkkanmung"]==$arr_2['auto_id']) echo 'selected'; ?>><?php echo $arr_2['name']?></option>
<?php }?>
</select>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success' <?php if($_SESSION['sys_type']=="Admin") echo "disabled";?>>Update Data</button>
<button type='button' class='btn btn-danger' onClick="document.location.href='people.php?show=OK'">Cancle</button>
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

// End XmlHttp Object
function chk_user(id,result,id_edit){
 var xhttp = new XMLHttpRequest();
  //alert("data2.php?result="+result+"&select_id="+select_id);
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(result).innerHTML = this.responseText;
    }
  };
  //alert('checkAjax.php?value_check='+document.getElementById(id).value+'&page='+result+'&id_edit='+id_edit);
  xhttp.open("GET", 'checkAjax.php?value_check='+document.getElementById(id).value+'&page='+result+'&id_edit='+id_edit, true);
  xhttp.send();
  
}

function data_show(select_id,result,point_id) {
  var xhttp = new XMLHttpRequest();
  //alert("data2.php?result="+result+"&select_id="+select_id);
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(result).innerHTML = this.responseText;
    }
  };
  
  xhttp.open("GET", "data.php?result="+result+"&select_id="+select_id+"&point_id="+point_id, true);
  xhttp.send();
}

if('<?php echo $_GET['submit']?>'=='Edit'){
	window.onLoad=data_show('<?php echo $province?>','amphur','<?php echo $amphur?>'); 
	window.onLoad=data_show('<?php echo $amphur?>','district','<?php echo $district?>');
}	
</script>

