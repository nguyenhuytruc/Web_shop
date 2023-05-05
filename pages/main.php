<div id="main">
   <?php
   include("sidebar/sidebar.php");
   ?>
   <div class="maincontent">
      <?php
      if (isset($_GET['quanli'])) {
         $temp = $_GET['quanli'];
      } else {
         $temp = "";
      }

      if ($temp == 'danhmuc') {
         include("main/danhmuc.php");
      } elseif ($temp == 'danhmucbv') {
         include("main/danhmucbv.php");
      } elseif ($temp == 'sanpham') {
         include("main/sanpham.php");
      } elseif ($temp == 'baiviet') {
         include("main/baiviet.php");
      } elseif ($temp == 'giohang') {
         include("main/giohang.php");
      } elseif ($temp == 'dangky') {
         include("main/dangky.php");
      } elseif ($temp == 'dangnhap') {
         include("main/dangnhap.php");
      } elseif ($temp == 'thanhtoan') {
         include("main/thanhtoan.php");
      } elseif ($temp == 'timkiem') {
         include("main/timkiem.php");
      } elseif ($temp == 'camon') {
         include("main/camon.php");
      } elseif ($temp == 'doimatkhau') {
         include("main/doimatkhau.php");
      } elseif ($temp == 'lienhe') {
         include("main/lienhe.php");
      } elseif ($temp == 'tintuc') {
         include("main/tintuc.php");
      } else {
         include("main/index.php");
      }
      ?>
   </div>
</div>