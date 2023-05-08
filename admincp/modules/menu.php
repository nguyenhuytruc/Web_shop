<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangnhap']);
    header("Location:login.php");
}
?>
<div>
    <ul class="admincp-list">
        <li><a href="index.php">Thống kê</a></li>
        <li><a href="index.php?action=quanlidanhmucsanpham&query=them">Quản lí danh mục sản phẩm</a></li>
        <li><a href="index.php?action=quanlisanpham&query=them">Quản lí sản phẩm</a></li>
        <li><a href="index.php?action=quanlidanhmucbv&query=them">Quản lí danh mục bài viết</a></li>
        <li><a href="index.php?action=quanlibv&query=them">Quản lí bài viết</a></li>
        <li><a href="index.php?action=quanlidonhang&query=lietke">Quản lí đơn hàng</a></li>
        <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
    </ul>
</div>