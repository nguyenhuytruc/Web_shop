<?php
if (isset($_POST['timkiem'])) {
    $key = $_POST['key'];
}else{
    echo "<p>Sản phẩm không tìm thấy</p>";
};
$sql_prod = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.tensanpham REGEXP '$key' 
AND tbl_sanpham.id_danhmuc = tbl_danhmuc.id 
ORDER BY tbl_sanpham.id DESC";
$query_prod = mysqli_query($mysqli, $sql_prod);
?>
<h3>Kết quả cho từ khóa tìm kiếm: <?php echo '<span style="color: red">' . $_POST['key'] . '</span>'?></h3>
<ul class="product-list">
    <?php
    while ($row_prod = mysqli_fetch_array($query_prod)) {
    ?>
        <li>
            <a href="index.php?quanli=sanpham&id=<?php echo $row_prod['id'] ?>">
                <img src="admincp/modules/quanlisp/upload/<?php echo $row_prod['hinhanh'] ?>" alt="">
                <p class="product-title"><?php echo $row_prod['tensanpham'] ?></p>
                <p class="product-price"><?php echo number_format($row_prod['giasp'], 0, ',', '.') . ' vnđ' ?></p>
                <p class="danhmuc-title"><?php echo $row_prod['tendanhmuc'] ?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>