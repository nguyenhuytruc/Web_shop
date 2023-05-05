<?php
include("../../config/config.php");

    $tendanhmuc = $_POST['tendanhmuc'];

    if (isset($_POST['themdanhmucbv'])) {
        $sql_them = "INSERT INTO tbl_danhmucbv (id, tendanhmucbv) VALUES (null, '$tendanhmuc')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlidanhmucbv&query=them');
    }
    elseif(isset($_POST['suadanhmucbv'])){
        $id = $_GET['id'];
        $sql_sua = "UPDATE tbl_danhmucbv SET tendanhmucbv= '$tendanhmuc' WHERE id ='$id'";
        mysqli_query($mysqli, $sql_sua);
        header('Location:../../index.php?action=quanlidanhmucbv&query=them');
    }
    else{
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM tbl_danhmucbv WHERE id = '$id'";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: ../../index.php?action=quanlidanhmucbv&query=them');
    }
