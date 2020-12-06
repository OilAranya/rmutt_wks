<?php include_once "connDB.php";?>
<html xmlns="http://www.w3.org/1999/xhtml" > 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>รายงานสรุปยอดจำนวนตามเขตรับผิดชอบ</title>
</head>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css2' />
<style>
table{ font-size:14px;}
thead{
font-weight:bold;
}
td{padding-left:5px; text-align:left; vertical-align:middle;}
</style>
<?php
$sql="select t1.*,t2.full_name,t3.PROVINCE_NAME,t4.AMPHUR_NAME from kad t1,user t2,province t3,amphur t4 where t1.user_id=t2.auto_id and t1.province=t3.PROVINCE_ID and t1.amphur=t4.AMPHUR_ID and t1.user_id='".$_SESSION['sys_id']."' Order By t1.amphur ASC";
$query1=mysqli_query($conn,$sql);

while($data=mysqli_fetch_array($query1)){
?>
<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0" class='table table-bordered tablesorter'>
<thead>
<tr>
  <td height="30" colspan="10" align='left' style="font-weight:bold;">จังหวัด <?php echo $data['PROVINCE_NAME'] ;?> (<?php echo $data['kad_name'] ;?> / <?php echo $data['AMPHUR_NAME'] ;?>)</td>
  </tr>
<tr>
  <td width="3%" align='left' style="font-weight:bold;">No.</td>
<td width="16%" height="30" align='left' style="font-weight:bold;">ชื่อ - นามสกุล</td>
<td width="10%" align='left' style="font-weight:bold;">อำเภอ</td>
<td width="10%" align='left' style="font-weight:bold;">ตำบล</td>
<td width="3%" align='left' style="font-weight:bold;">หมู่ </td>
<td width="12%" align='left' style="font-weight:bold;">หมู่บ้าน</td>
<td width="10%" align='left' style="font-weight:bold;">ประเภท</td>
<td width="9%" align='left' style="font-weight:bold;">เกรด</td>
<td width="15%" align='left' style="font-weight:bold;">เบอร์/อีเมล์</td>
<td width="12%" align='left' style="font-weight:bold;">จาก Leader</td>
</tr>
</thead>
<tbody>
<?php 
$sql="select t1.*,t2.PROVINCE_NAME,t3.kad_name,t4.AMPHUR_NAME,t5.DISTRICT_NAME,t6.type_name,t7.grade_name,t8.leader_name from people t1,province t2,kad t3,amphur t4,district t5,type t6,grade t7,leader t8 Where (t1.province=t2.PROVINCE_ID) and (t1.amphur=t4.AMPHUR_ID) and (t1.district=t5.DISTRICT_ID) and (t1.type=t6.auto_id) and (t1.grade=t7.auto_id) and (t1.leader=t8.auto_id) and (t1.user_id=t3.user_id and t1.amphur=t3.amphur) and (t1.user_id='".$data['user_id']."' and t1.amphur='".$data['amphur']."' ) order  by  t1.auto_id DESC";
$Query= mysqli_query($conn,$sql);

$i=0;
while($arr = mysqli_fetch_array($Query)){
$autoid = $arr['auto_id'];
$i++;
?>

<tr valign='top'>
  <td align='left'><?php echo $i;?></td>
<td height="29" align='left'><?php echo $arr['fname'] ?> <?php echo $arr['l_name'] ?></td>
<td align='center'><?php echo $arr['AMPHUR_NAME'] ;?></td>
<td align='center'><?php echo $arr['DISTRICT_NAME'] ;?></td>
<td align='center'><?php echo $arr['add_moo'] ;?></td>
<td align='center'><?php echo $arr['add_ban'] ;?></td>
<td align='center'><?php echo $arr['type_name'] ?></td>
<td align='center'><?php echo $arr['grade_name'] ?></td>
<td align='center'>
<?php
 	echo $arr['tel'];
	 if($arr['tel']!='' and $arr['email']!=''){ echo "/";}
	echo $arr['email'] ;
?></td>
<td align='center'><?php echo $arr['leader_name'] ?></td>
</tr>
<?php }
$total_data=$total_data+$i;
?>
<tr valign='top' style="font-weight:bold;">
  <td height="29" colspan="8" align='left' style="border-bottom-style: none;">&nbsp;</td>
  <td align='center'>จำนวน</td>
  <td align='center'><?php echo $i ?></td>
</tr>
</tbody>
</table><br>
<?php }?>
<hr>
<center><b >จำนวนทั้งหมด <?php echo $total_data?> รายการ</b></center>
