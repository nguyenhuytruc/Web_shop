<h3>Tin tức mới nhất</h3>
<?php
$sql_prod = "SELECT * FROM tbl_baiviet WHERE tinhtrang = 1";
$query_prod = mysqli_query($mysqli, $sql_prod);
?>
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
