<?php
session_start();
include("../../admincp/config/config.php");
require("../../mail/sendmail.php");
require("../../carbon/vendor/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;

$ngay_dat = Carbon::now('Asia/Ho_Chi_Minh');
$id_khachhang = $_SESSION['id'];
$code_order = rand(0, 9999);
$insert_cart = "INSERT INTO tbl_cart (id, id_khachhang, code_cart, cart_status, ngay_dat) VALUES (null, '$id_khachhang', '$code_order', 1,'$ngay_dat')";
$query = mysqli_query($mysqli, $insert_cart);

if ($query) {
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_detail = "INSERT INTO tbl_cart_detail (id, id_sanpham, code_cart, soluongmua) 
        VALUES (null, '$id_sanpham', '$code_order', '$soluong')";
        mysqli_query($mysqli, $insert_order_detail);
    }
    $tieude = "Cám ơn quý khách đã đặt hàng shop HT";
    $noidung = "<p>Bạn đã đặt hàng thành công với mã đơn hàng là: " . $code_order . "</p>";
    foreach ($_SESSION['cart'] as $key => $value) {
        $noidung.= "<ul>
                        <li>Tên sản phẩm: ".$value['tensanpham']."</li>
                        <li>Mã sản phẩm: ".$value['masp']."</li>
                        <li>Giá sản phẩm: ".number_format($value['giasp'],0,',','.')."</li>
                        <li>Số lượng mua: ".$value['soluong']."</li>
                    </ul>";
    }
    $mailKhachHang = $_SESSION['email'];
    $mail = new Mail();
    $mail->mailDatHang($mailKhachHang, $tieude, $noidung);
}

unset($_SESSION['cart']);
header('Location:../../index.php?quanli=camon');
