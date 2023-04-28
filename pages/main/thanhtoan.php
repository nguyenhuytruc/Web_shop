<?php
session_start();
include("../../admincp/config/config.php");
$id_khachhang = $_SESSION['id'];
$code_order = rand(0,9999);
$insert_cart = "INSERT INTO tbl_cart (id, id_khachhang, code_cart, cart_status) VALUES (null, '$id_khachhang', '$code_order', 1)";
$query = mysqli_query($mysqli,$insert_cart);

if ($query) {
    foreach($_SESSION['cart'] as $key => $value){
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_detail = "INSERT INTO tbl_cart_detail (id, id_sanpham, code_cart, soluongmua) 
        VALUES (null, '$id_sanpham', '$code_order', '$soluong')";
        mysqli_query($mysqli, $insert_order_detail);
    }
}

unset($_SESSION['cart']);
header('Location:../../index.php?quanli=camon');
?>