<?php include "connDB.php"; ?>

<?php if($result=='amphur'){ 
	//$sql="select * from amphur Where PROVINCE_ID ='".$select_id."' Order By AMPHUR_ID ASC";
	$sql="SELECT * FROM amphur WHERE PROVINCE_ID ='".$select_id."' and AMPHUR_ID in (SELECT DISTINCT amphur FROM  kad WHERE user_id ='".$_SESSION['sys_id']."') Order By PROVINCE_ID ASC";
	echo '<option value="">--- กรุณาเลือกอำเภอ ---</option>';
	$rstTemp=mysqli_query($conn,$sql);
	while($arr_2=mysqli_fetch_array($rstTemp)){
?>
	<option value="<?php echo $arr_2['AMPHUR_ID']?>" <?php if($arr_2['AMPHUR_ID']==$point_id) echo "selected";?>><?php echo $arr_2['AMPHUR_NAME']?></option>
<?php }}?>

<?php if($result=='district'){ ?>
<select name='district' id='district'>
	<?php
	$sql="select * from district Where AMPHUR_ID ='".$select_id."'  Order By DISTRICT_ID ASC";
	$rstTemp=mysqli_query($conn,$sql);
	while($arr_2=mysqli_fetch_array($rstTemp)){
	?>
	<option value="<?php echo $arr_2['DISTRICT_ID']?>" <?php if($arr_2['DISTRICT_ID']==$point_id) echo "selected";?>><?php echo $arr_2['DISTRICT_NAME']?></option>
	<?php }?>
</select>
<?php }?>