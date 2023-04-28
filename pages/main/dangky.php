<?php
    if (isset($_POST['dangky'])) {
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $matkhau = md5($_POST['matkhau']);
        $dienthoai = $_POST['dienthoai'];
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky (id, tenkhachhang, email, diachi, matkhau, dienthoai) VALUES 
        (null, '$hoten', '$email', '$diachi', '$matkhau', '$dienthoai')");

        if ($sql_dangky) {
            echo "<p style='color: green;'>Bạn đã đăng ký thành công</p>";
            $_SESSION['dangky'] = $email;
            $_SESSION['id'] = mysqli_insert_id($mysqli);
            header("Location:index.php?quanli=giohang");
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .form {
            width: 300px;
            border: 1px solid green;
            padding: 20px;
            margin: 0 auto;
            font-weight: 700px;
        }

        .form input {
            width: 100%;
            padding: 10px 0;
            margin-bottom: 2px;
        }
    </style>
</head>

<body>

    <form method="POST" action="" class="form">

        <h2>Đăng ký thành viên</h2>
        Họ và tên: <input type="text" name="hoten">
        Email: <input type="email" name="email"/>
        Mật khẩu: <input type="text" name="matkhau"/>
        Địa chỉ: <input type="text" name="diachi"/>
        Điện thoại: <input type="tel" name="dienthoai"/>
        <input type="submit" name="dangky" value="Đăng Ký" />
        <a href="index.php?quanli=dangnhap">Đăng nhập</a>
    </form>

</body>

</html>