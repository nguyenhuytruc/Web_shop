<?php
$sql_title = "SELECT * FROM tbl_danhmucbv WHERE id = '$_GET[id]'";
$query_title = mysqli_query($mysqli, $sql_title);
$row_title = mysqli_fetch_array($query_title);

$sql_prod = "SELECT * FROM tbl_danhmucbv, tbl_baiviet WHERE tbl_baiviet.id_danhmucbv = tbl_danhmucbv.id 
AND tbl_baiviet.id_danhmucbv = '$_GET[id]'
ORDER BY tbl_baiviet.id DESC";
$query_prod = mysqli_query($mysqli, $sql_prod);
?>
<h3>Danh mục : <?php echo $row_title['tendanhmucbv'] ?></h3>
<ul class="product-list">
    <?php
    while ($row_prod = mysqli_fetch_array($query_prod)) {
    ?>
        <li>
            <a style="text-align: center;" href="index.php?quanli=baiviet&id=<?php echo $row_prod['id'] ?>" >
                <img src="admincp/modules/quanlibv/upload/<?php echo $row_prod['hinhanh'] ?>" alt="" style="height: 170px;">
                <p class="product-title"><?php echo $row_prod['tenbaiviet'] ?></p>
                <p class="tomtat"><?php echo $row_prod['tomtat'] ?></p>              
            </a>
        </li>
    <?php
    }
    ?>
</ul>
