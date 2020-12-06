<? include "connDB.php"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?
$id_edit=$_GET['id_edit'];
$value_check=$_GET['value_check'];
$page=$_GET['page'];
if($id_edit) $where=" and auto_id<>'".$id_edit."' ";
if($page=="people_id_chk" and $value_check!=''){
	$sql="Select * from people Where people_id='".$value_check."' $where";
	$rst=mysqli_query($conn,$sql);	
	$numrow=mysqli_num_rows($rst);
	//if($numrow==0) echo "<span style='color:#00FF00;'>ชื่อ $user_name สามารถใช้งานได้</span>";
	if($numrow==1) echo "<span style='color:#FF0000;'>เลขบัตรประชาชนนี้ มีอยู่ในระบบแล้ว กรุณาตรวจสอบด้วยครับ</span>";
}
?>

<?
if($page=="fname_chk"){
	$sql="Select * from people Where fname='".$value_check."' $where";
	$rst=mysqli_query($conn,$sql);	
	$numrow=mysqli_num_rows($rst);
	//if($numrow==0) echo "<span style='color:#00FF00;'>ชื่อ $user_name สามารถใช้งานได้</span>";
	if($numrow==1) echo "<span style='color:#FF0000;'>ชื่อนี้ มีอยู่ในระบบแล้ว กรุณาตรวจสอบด้วยครับ</span><input type='hidden' name='fname_chk' id='fname_chk' value='Yes'>";
}
?>

<?
if($page=="l_name_chk"){
	$sql="Select * from people Where l_name='".$value_check."' $where";
	$rst=mysqli_query($conn,$sql);	
	$numrow=mysqli_num_rows($rst);
	//if($numrow==0) echo "<span style='color:#00FF00;'>ชื่อ $user_name สามารถใช้งานได้</span>";
	if($numrow==1) echo "<span style='color:#FF0000;'>นามสกุลนี้ มีอยู่ในระบบแล้ว กรุณาตรวจสอบด้วยครับ</span><input type='hidden' name='l_name_chk' id='l_name_chk' value='Yes'>";
}
?>

<?
if($page=="artist_password1"){
	$str=strlen($pwd1);
	if($str>=6) echo "<span style='color:#00FF00;'>รหัสผ่าน ถูกต้อง (อย่างน้อย 6 ตัวอักษร)</span>";
	if($str<=5) echo "<span style='color:#FF0000;'>รหัสผ่านของคุณสั้นเกินไป (อย่างน้อย 6 ตัวอักษร)</span>";
	
}
?>

<?
if($page=="artist_password22"){
	if($pwd1==$pwd2) echo "<span style='color:#00FF00;'>รหัสผ่านและรหัสยืนยัน ถูกต้อง</span>";
	if($pwd1!=$pwd2) echo "<span style='color:#FF0000;'>รหัสผ่านและรหัสยืนยัน ไม่ถูกต้อง กรุณาตรวจสอบ</span>";
}
?>

<?
if($page=="old_pwd1"){
	$sql="Select * from artist Where artist_id='".$user_id."' ";
	$rst=mysql_query($sql);	
	$pwd=mysql_result($rst,0,'artist_password');
	if($pwd==$pwd1) echo "<span style='color:#00FF00;'>รหัสผ่านเก่า ถูกต้อง</span>";
	if($pwd!=$pwd1) echo "<span style='color:#FF0000;'>รหัสผ่านเก่า ไม่ถูกต้อง กรุณาลองใหม่</span>";
}
?>

<?
if($page=="artist_name"){ // เช็คชื่อวง ศิลปินไม่ให้ซ้ำกัน
	$sql="Select * from artist Where artist_name_eng='".$user_name."' ";
	$rst=mysql_query($sql);	
	$numrow=mysql_num_rows($rst);
	if($numrow==0) echo "<span style='color:#00FF00;'>ชื่อ $user_name สามารถใช้งานได้</span><input type='hidden' name='artist_name_chk' id='artist_name_chk' value='Yes'>";
	if($numrow==1) echo "<span style='color:#FF0000;'>ชื่อ $user_name ไม่สามารถใช้งานได้</span><input type='hidden' name='artist_name_chk' id='artist_name_chk' value='No'>";
}
?>
