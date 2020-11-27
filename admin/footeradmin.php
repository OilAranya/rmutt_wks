
55555555
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <li class="nav-item d-none d-sm-inline-block">
    <!-- <a href="#" class="nav-link">Home</a> -->
    </li>
    <li class="nav-item d-none d-sm-inline-block">
    <!-- <a href="#" class="nav-link">Contact</a> -->
    </li>
  </nav>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
    <a href="main.php" class="brand-link">
      <img src="dist/img/am.jpg" alt="AdminLTE Logo"style="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RMUTTwalkingstreet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/am.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
          <!-- <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">admin</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="#">แก้ไขข้อมูล</a>
              <a href="#">ออกจากระบบ</a>
            </div>
          </div> -->
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div> 
     
        <div id="wrapper">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item has-treeview">
                <a href="main.php" class="nav-link">
                  <p>หน้าหลัก</p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <p>หมวดหมู่ร้านค้า</p>
                </a>
                <a class="dropdown-item" href="createfood.php">อาหาร</a>
                <a class="dropdown-item" href="#">เสื้อผ้า</a>
                <a class="dropdown-item" href="#">รองเท้า</a>
                <a class="dropdown-item" href="#">กระเป๋า</a>
                <a class="dropdown-item" href="#">เครื่องประดับ</a>
                <a class="dropdown-item" href="#">สัตว์/ต้นไม้</a>
                <a class="dropdown-item" href="#">อุปกรณ์อิเล็กทรอนิกส์</a>
              </li>

              <li class="nav-item has-treeview">
                <a href="general.php" class="nav-link">
                  <p>ตารางข้อมูลสมาชิก</p>
                </a> 
              </li> 

              <li class="nav-item has-treeview">
                <a href="stall.php" class="nav-link">
                  <p>ข้อมูลการจอง</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="receipt.php" class="nav-link">
                  <p>ข้อมูลชำระเงิน</p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="map.php" class="nav-link">
                  <p>แผนที่</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <p>รีวิว</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <p>แจ้งปัญหา</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside> 

<!-- Main Footer -->
<footer class="main-footer">
  <strong>RMUTT WALKING STREET </strong> 
    <div class="float-right d-none d-sm-inline-block">  
      มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี
    </div>
</footer>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>