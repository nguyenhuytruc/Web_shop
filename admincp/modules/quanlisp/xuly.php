<?php
include("../../config/config.php");

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
// xử lý hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];

if (isset($_POST['themsanpham'])) {
    $sql_them = "INSERT INTO tbl_sanpham (id, tensanpham, masp, giasp, soluong, hinhanh, tomtat, noidung, tinhtrang, id_danhmuc) 
        VALUES (null, '$tensanpham', '$masp', '$giasp', '$soluong', '$hinhanh', '$tomtat', '$noidung', '$tinhtrang', '$danhmuc')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
    header('Location:../../index.php?action=quanlisanpham&query=them');
} elseif (isset($_POST['suasanpham'])) {
    $id = $_GET['id'];
    if (isset($_FILES['hinhanh']) && $_FILES['hinhanh']['error'] == 0) {
        move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
        $sql = "SELECT * FROM tbl_sanpham WHERE id = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink("upload/" . $row['hinhanh']);
        }
        $sql_sua = "UPDATE tbl_sanpham SET tensanpham= '$tensanpham', masp = '$masp', giasp = '$giasp', soluong = '$soluong', hinhanh = '$hinhanh', tomtat = '$tomtat', noidung = '$noidung', tinhtrang = '$tinhtrang', id_danhmuc = '$danhmuc' WHERE id ='$id' ";
    } else {
        // $sql_sua = "UPDATE tbl_sanpham SET tensanpham= '$tensanpham', masp = '$masp', giasp = '$giasp', soluong = '$soluong', tomtat = '$tomtat', noidung = '$noidung', tinhtrang = '$tinhtrang' WHERE id ='$id' ";
        $sql = "SELECT * FROM tbl_sanpham WHERE id = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
        $hinhanh_goc = $row['hinhanh'];
        $sql_sua = "UPDATE tbl_sanpham SET tensanpham= '$tensanpham', masp = '$masp', giasp = '$giasp', soluong = '$soluong', hinhanh = '$hinhanh_goc', tomtat = '$tomtat', noidung = '$noidung', tinhtrang = '$tinhtrang', id_danhmuc = '$danhmuc' WHERE id ='$id' ";
    }
    mysqli_query($mysqli, $sql_sua);
    header('Location:../../index.php?action=quanlisanpham&query=them');
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id = '$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink("upload/" . $row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id = '$id'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location: ../../index.php?action=quanlisanpham&query=them');
}
