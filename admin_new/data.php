<?php include "connDB.php"; ?>

<?php if($_GET['result']=='amphur'){ 
	echo "<option value=''>--- กรุณาเลือกอำเภอ ---</option>";
	
	if($_SESSION['sys_type']=="Admin"){
			$sql="select * from amphur Where PROVINCE_ID ='".$_GET['select_id']."' Order By AMPHUR_ID ASC";
	}else{
			$sql="SELECT * FROM amphur WHERE PROVINCE_ID ='".$_GET['select_id']."' and AMPHUR_ID in (SELECT DISTINCT amphur FROM  kad WHERE user_id ='".$_SESSION['sys_id']."') Order By PROVINCE_ID ASC";
			//$sql="select * from amphur Where PROVINCE_ID ='".$_GET['select_id']."' Order By AMPHUR_ID ASC";
	}
	
	$rstTemp=mysqli_query($conn,$sql);
	while($arr_2=mysqli_fetch_array($rstTemp)){
?>
	<option value="<?php echo $arr_2['AMPHUR_ID']?>" <?php if($arr_2['AMPHUR_ID']==$_GET['point_id']) echo "selected";?>><?php echo $arr_2['AMPHUR_NAME'];?></option>
<?php }}?>

<?php if($_GET['result']=='district'){ ?>
<select name='district' id='district'>
	<?php
	echo "<option value=''>--- กรุณาเลือกเขต/ตำบล ---</option>";
	$sql="select * from district Where AMPHUR_ID ='".$_GET['select_id']."'  Order By DISTRICT_ID ASC";
	$rstTemp=mysqli_query($conn,$sql);
	while($arr_2=mysqli_fetch_array($rstTemp)){
	?>
	<option value="<?php echo $arr_2['DISTRICT_ID']?>" <?php if($arr_2['DISTRICT_ID']==$_GET['point_id']) echo "selected";?>><?php echo $arr_2['DISTRICT_NAME']?></option>
	<?php }?>
</select>
<?php }?>