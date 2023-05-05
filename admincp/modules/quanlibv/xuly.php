<?php
include("../../config/config.php");

$tenbaiviet = $_POST['tenbaiviet'];
// xử lý hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];

if (isset($_POST['thembaiviet'])) {
    $sql_them = "INSERT INTO tbl_baiviet (id, tenbaiviet, hinhanh, tomtat, noidung, tinhtrang, id_danhmucbv) 
        VALUES (null, '$tenbaiviet', '$hinhanh', '$tomtat', '$noidung', '$tinhtrang', '$danhmuc')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
    header('Location:../../index.php?action=quanlibv&query=them');
} 
elseif (isset($_POST['suabaiviet'])) {
    $id = $_GET['id'];
    if (isset($_FILES['hinhanh']) && $_FILES['hinhanh']['error'] == 0) {
        move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
        $sql = "SELECT * FROM tbl_baiviet WHERE id = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink("upload/" . $row['hinhanh']);
        }
        $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet= '$tenbaiviet', hinhanh = '$hinhanh', tomtat = '$tomtat', noidung = '$noidung', tinhtrang = '$tinhtrang', id_danhmucbv = '$danhmuc' WHERE id ='$id' ";
    } else {
        // $sql_sua = "UPDATE tbl_sanpham SET tensanpham= '$tensanpham', masp = '$masp', giasp = '$giasp', soluong = '$soluong', tomtat = '$tomtat', noidung = '$noidung', tinhtrang = '$tinhtrang' WHERE id ='$id' ";
        $sql = "SELECT * FROM tbl_baiviet WHERE id = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        $hinhanh_goc = $row['hinhanh'];
        $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet= '$tenbaiviet', hinhanh = '$hinhanh_goc', tomtat = '$tomtat', noidung = '$noidung', tinhtrang = '$tinhtrang', id_danhmucbv = '$danhmuc' WHERE id ='$id' ";
    }
    mysqli_query($mysqli, $sql_sua);
    header('Location:../../index.php?action=quanlibv&query=them');
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_baiviet WHERE id = '$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink("upload/" . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_baiviet WHERE id = '$id'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location: ../../index.php?action=quanlibv&query=them');
}
