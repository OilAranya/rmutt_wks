<?php 
include_once "connDB.php";

?>
<html xmlns="http://www.w3.org/1999/xhtml" > 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reports</title>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script src='js/formValidation.min.js'></script>
<script src='js/framework/bootstrap.min.js'></script>
<script src='js/moment-with-locales.js'></script>
<script>
$(document).ready(function() {
	$('#report_frm').formValidation();
	<?php if($_GET['report']==1){?>
	 if ($("#province").val() or $("#amphur").val() or  $("#district").val()){
             $('input:submit').removeAttr('disabled'); 
     }
	 <?php }?>
});

</script>
 <style>
  fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
  </style>

</head>
<?php include 'menu.php';?>
<div  style='margin-top:20px;'></div>
<div class='container'>
<div class='row'>
<div class='col-md-6 col-md-offset-3'>
<div class='panel panel-success'>
<div class='panel-heading' style='text-align:center'>

<b style='font-size:30px;'>REPORTs</b>
</div>

<div class='panel-body' align='center'>
<div>

</div>

<?php if($_GET['report']==1){?>

<fieldset class="scheduler-border">
	<legend class="scheduler-border"> รายงานตามจังหวัด อำเภอ/เขต ตำบล </legend>
	<form name="report_frm" id="report_frm" class="form-horizontal" action="<?php echo $_GET['report']?>.php" enctype="multipart/form-data" method="post"  target="_blank">


<div class='form-group'>
<label class='col-sm-5 control-label'>จังหวัด</label>
<div class='col-sm-5' align='left'>
<select name='province' id='province' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'  onChange="data_show(this.value,'amphur','');document.getElementById('district').innerHTML = '<option value=>--- กรุณาเลือกอำเภอ ---</option>';">
<option value=''>--- กรุณาเลือกจังหวัด ---</option>
<?php
//$sql="SELECT * FROM province Order By PROVINCE_ID ASC";
$sql="SELECT t1.*,COUNT(t2.province) as Total_People FROM province t1,people t2 Where t1.PROVINCE_ID=t2.province";
$rstTemp=mysqli_query($conn,$sql);
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['PROVINCE_ID']?>"><?php echo $arr_2['PROVINCE_NAME']?>(<?php echo $arr_2['Total_People']?>)</option>
<?php }?>
</select>
</div>
</div>
	  
<div class='form-group'>
<label class='col-sm-5 control-label'>อำเภอ/เขต</label>
<div class='col-sm-5' align='left'>
<select name='amphur' id='amphur'  class='form-control' onChange="data_show(this.value,'district',''); document.getElementById('submit_bt').disabled=false;" data-fv-notempty='false'>
		<option value=''>--- กรุณาเลือกอำเภอ ---</option>
</select>
</div>
</div>

<div class='form-group'>
<label class='col-sm-5 control-label'>ตำบล</label>
<div class='col-sm-5' align='left'>
<select name='district' id='district' class='form-control' data-fv-notempty='false'>
		<option value=''>--- กรุณาเลือกตำบล ---</option>
</select>
</div>
</div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
<button type='submit' class='btn btn-success' id="submit_bt">Report</button>
</div>
</div> 


	  <!--<button type="submit" class="btn btn-info">Report</button> -->
	</form>
</fieldset>
<?php }?>
<?php if($_GET['report']==2){?>
<fieldset class="scheduler-border">
	<legend class="scheduler-border"> รายงานตาม Leadder </legend>
	<form name="report_frm" id="report_frm" class="form-inline" action="<?php echo $_GET['report']?>.php" enctype="multipart/form-data" method="post" target="_blank" data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>
	  <div class="form-group">
		<label for="exampleInputName2">Leadder</label>
		
		<select name='report_id' id='report_id'class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก Leadder ---</option>
<option value='All'> Leadder ทั้งหมด </option>
<?php
$sql="SELECT * FROM leader  Order By auto_id ASC";
$rstTemp=mysqli_query($conn,$sql);
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['leader_name']?></option>
<?php }?>
</select>
		
	  </div>
	  


	  
<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
	<button type="submit" class="btn btn-info">Report</button>
</div>
</div>
	</form>
</fieldset>
<?php }?>
<?php if($_GET['report']==3){?>
<fieldset class="scheduler-border">
	<legend class="scheduler-border"> รายงานตาม จำนวนสมาชิก </legend>
	<form class="form-inline">
	  <div class="form-group">
		<label for="exampleInputName2">Name</label>
		<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
	  </div>
	  <button type="submit" class="btn btn-primary">Report</button>
	</form>
</fieldset>
<?php }?>
<?php if($_GET['report']==4){?>
<fieldset class="scheduler-border">
	<legend class="scheduler-border"> รายงานตาม ช่วงอายุ </legend>
	<form name="report_frm" id="report_frm" class="form-inline" action="<?php echo $_GET['report']?>.php" enctype="multipart/form-data" method="post" target="_blank" data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>
	  <div class="form-group">
		<label for="exampleInputName2">ช่วงอายุ</label>
		
<select name='s1' id='s1' class='form-control' data-fv-notempty='true' >
				<option value=''> อายุระหว่าง </option>
						<option value='10'>10</option>
						<option value='20'>20</option>
						<option value='30'>30</option>
						<option value='40'>40</option>
						<option value='50'>50</option>
						<option value='60'>60</option>
						<option value='70'>70</option>
						<option value='80'>80</option>
		</select>
<select name='s2' id='s2' class='form-control' data-fv-notempty='true' >
				<option value=''> ถึงอายุ </option>
						<option value='20'>20</option>
						<option value='30'>30</option>
						<option value='40'>40</option>
						<option value='50'>50</option>
						<option value='60'>60</option>
						<option value='70'>70</option>
						<option value='80'>80</option>
						<option value='90'>90</option>
						<option value='120'>120</option>
		</select>		
		
	  </div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
	<button type="submit" class="btn btn-info">Report</button>
</div>
</div>
	</form>
</fieldset>
<?php }?>
<?php if($_GET['report']==5){?>
<fieldset class="scheduler-border">
	<legend class="scheduler-border"> รายงานตาม เปอร์เซ็นต์ที่คาดหวัง </legend>
	<form name="report_frm" id="report_frm" class="form-inline" action="<?php echo $_GET['report']?>.php" enctype="multipart/form-data" method="post" target="_blank" data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>
	  <div class="form-group">
		<label for="exampleInputName2">เปอร์เซ็นต์ที่คาดหวัง</label>
		
<select name='report_id' id='report_id' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
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

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
	<button type="submit" class="btn btn-info">Report</button>
</div>
</div>
	</form>
</fieldset>
<?php }?>
<?php if($_GET['report']==6){?>
<fieldset class="scheduler-border">
	<legend class="scheduler-border"> รายงานตาม พรรคการเมือง </legend>
	<form name="report_frm" id="report_frm" class="form-inline" action="<?php echo $_GET['report']?>.php" enctype="multipart/form-data" method="post" target="_blank" data-fv-framework='bootstrap'
data-fv-icon-valid='glyphicon glyphicon-ok'
data-fv-icon-invalid='glyphicon glyphicon-remove'
data-fv-icon-validating='glyphicon glyphicon-refresh'>
	  <div class="form-group">
		<label for="exampleInputName2">พรรคการเมือง</label>
		
<select name='report_id' id='report_id' class='form-control' data-fv-notempty='true' data-fv-notempty-message='Please Enter...'>
<option value=''>--- กรุณาเลือก ---</option>
<?php
$rstTemp=mysqli_query($conn,'select * from parkkanmung');
while($arr_2=mysqli_fetch_array($rstTemp)){
?>
<option value="<?php echo $arr_2['auto_id']?>"><?php echo $arr_2['name']?></option>
<?php }?>
</select>
		
	  </div>

<div class='form-group'>
<div class='col-sm-offset-2 col-sm-10'>
	<button type="submit" class="btn btn-info">Report</button>
</div>
</div>
	</form>
</fieldset>
<?php }?>
<?php if($_GET['report']==7){?>
<fieldset class="scheduler-border">
	<legend class="scheduler-border"> รายงานเฉพาะ (อำเภอ ตำบล หมู่บ้าน) </legend>
	<form class="form-inline">
	  <div class="form-group">
		<label for="exampleInputName2">Name</label>
		<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
	  </div>
	  <button type="submit" class="btn btn-primary">Report</button>
	</form>
</fieldset>
<?php }?>
</div>
 </div>
</div>
</div>
</div>

</html>
<script>
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

	//window.onLoad=data_show('<?=$province?>','amphur','<?=$amphur?>'); 
	//window.onLoad=data_show('<?=$amphur?>','district','<?=$district?>');
</script>
