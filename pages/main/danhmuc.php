<?php
$sql_title = "SELECT * FROM tbl_danhmuc WHERE id = '$_GET[id]'";
$query_title = mysqli_query($mysqli, $sql_title);
$row_title = mysqli_fetch_array($query_title);

$sql_prod = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id 
AND tbl_sanpham.id_danhmuc = '$_GET[id]'
ORDER BY tbl_sanpham.id DESC";
$query_prod = mysqli_query($mysqli, $sql_prod);
?>
<h3>Danh mục : <?php echo $row_title['tendanhmuc'] ?></h3>
<ul class="product-list">
    <?php
    while ($row_prod = mysqli_fetch_array($query_prod)) {
    ?>
        <li>
            <a href="index.php?quanli=sanpham&id=<?php echo $row_prod['id'] ?>">
                <img src="admincp/modules/quanlisp/upload/<?php echo $row_prod['hinhanh'] ?>" alt="">
                <p class="product-title"><?php echo $row_prod['tensanpham'] ?></p>
                <p class="product-price"><?php echo number_format($row_prod['giasp'],0,',','.') . ' vnđ'?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>
