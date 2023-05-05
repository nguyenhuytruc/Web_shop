<?php
$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id DESC";
$query = mysqli_query($mysqli, $sql_danhmuc);
?>

<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>
<div class="menu">
    <ul class="list-menu">
        <li><a href="index.php">Trang chủ</a></li>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <li><a href="index.php?quanli=danhmuc&id=<?php echo $row['id'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
        <?php
        }
        ?>
        <li><a href="index.php?quanli=giohang">Giỏ hàng</a></li>
        <li><a href="index.php?quanli=tintuc">Tin tức</a></li>
        <!-- <li><a href="index.php?quanli=lienhe">Liên hệ</a></li> -->
        <?php
        if (isset($_SESSION['dangky'])) {
        ?>
            <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
            <li><a href="index.php?quanli=doimatkhau">Đổi mật khẩu</a></li>
        <?php
        } else {
        ?>
            <li><a href="index.php?quanli=dangky">Đăng Ký</a></li>
        <?php
        }
        ?>
        <li>
            <p>
            <form action="index.php?quanli=timkiem" method="POST" style="margin-top: -17px;">
                <input type="text" placeholder="Nhập tên sản phẩm" name="key" autocomplete="off">
                <input type="submit" name="timkiem" value="Tìm Kiếm">
            </form>
            </p>
        </li>
    </ul>
</div>