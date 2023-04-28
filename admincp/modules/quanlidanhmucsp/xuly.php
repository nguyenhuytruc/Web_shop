<?php
include("../../config/config.php");

    $tendanhmuc = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];

    if (isset($_POST['themdanhmuc'])) {
        $sql_them = "INSERT INTO tbl_danhmuc (id, tendanhmuc, thutu) VALUES (null, '$tendanhmuc', '$thutu')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $id = $_GET['id'];
        $sql_sua = "UPDATE tbl_danhmuc SET tendanhmuc= '$tendanhmuc' ,thutu = '$thutu' WHERE id ='$id'";
        mysqli_query($mysqli, $sql_sua);
        header('Location:../../index.php?action=quanlidanhmucsanpham&query=them');
    }else{
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id = '$id'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: ../../index.php?action=quanlidanhmucsanpham');
    }
?>