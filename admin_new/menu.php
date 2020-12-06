<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<nav class='navbar navbar-inverse'>
<div class='container-fluid'>
<!-- Brand and toggle get grouped for better mobile display -->
<div class='navbar-header'>
<div class='btn-group'>
<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
<span class='sr-only'>Toggle navigation</span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
</button>

</div>

</div>

<!-- Collect the nav links, forms, and other content for toggling -->

<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>

<ul class='nav navbar-nav' style='font-weight:bold;'>
<li ><a href='#'><span class='glyphicon glyphicon-user'></span> <?php if($_SESSION['sys_type']=="Admin"){ echo "Admin";}else{ echo "User";}?> (คุณ<?php echo $_SESSION['sys_fullname'];?>)</a></li>
<li <?php if($nav=='8') echo 'class=\'active\'';?>><a href='people.php?nav=8'><span class='glyphicon glyphicon-cog'></span> PEOPLE</a></li>

<?php if($_SESSION['sys_type']=="Admin"){?>

<li <?php if($nav=='1') echo 'class=\'active\'';?>><a href='grade.php?nav=1'><span class='glyphicon glyphicon-cog'></span> GRADE</a></li>
<li <?php if($nav=='2') echo 'class=\'active\'';?>><a href='leader.php?nav=2'><span class='glyphicon glyphicon-cog'></span> LEADER</a></li>
<li <?php if($nav=='3') echo 'class=\'active\'';?>><a href='parkkanmung.php?nav=3'><span class='glyphicon glyphicon-cog'></span> PARKKANMUNG</a></li>
<li <?php if($nav=='6') echo 'class=\'active\'';?>><a href='type.php?nav=6'><span class='glyphicon glyphicon-cog'></span> STAFF</a></li>
<li <?php if($nav=='7') echo 'class=\'active\'';?>><a href='user.php?nav=7'><span class='glyphicon glyphicon-cog'></span> USER</a></li>
<li <?php if($nav=='4') echo 'class=\'active\'';?>><a href='kad.php?nav=4'><span class='glyphicon glyphicon-cog'></span> KAD</a></li>
<li <?php if($nav=='4') echo 'class=\'active\'';?>><a href='map.php?nav=5'><span class='glyphicon glyphicon-cog'></span> แผนที่</a></li>

 <li <?php if($nav=='9') echo 'class=\'active\'';?> role="presentation" class="dropdown" >
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class='glyphicon glyphicon-cog'></span> 
					  หมวดหมู่ร้านอาหาร <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
							<li><a href="food.php" >อาหาร</a></li>
							<li><a href="reports.php?nav=9&report=2" >เสื้อผ้า</a></li>
							<li><a href="reports.php?nav=9&report=3" >รองเท้า</a></li> 
							<li><a href="reports.php?nav=9&report=4" >กระเป๋า</a></li>
							<li><a href="reports.php?nav=9&report=5" >เครื่องประดับ</a></li>
							<li><a href="reports.php?nav=9&report=6" >สัตว์/ต้นไม้</a></li>
							<li><a href="#" >อุปกรณ์อิเล็กทรอนิกส์</a></li>
					</ul>
</li>
	
<?php }?>

</ul>

<button type='button' class='btn btn-danger navbar-btn navbar-right' onclick="window.location.href = 'index.php?action=Logout';"><span class='glyphicon glyphicon-off'></span> Logout </button>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


