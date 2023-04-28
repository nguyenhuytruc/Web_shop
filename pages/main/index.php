<?php
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
}else{
    $page = 1;
}

if ($page == "" || $page ==1) {
    $start_page = 0;
}else{
    $start_page = ($page * 10) - 10;
}

$sql_prod = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id
ORDER BY tbl_sanpham.id DESC LIMIT $start_page,10";
$query_prod = mysqli_query($mysqli, $sql_prod);
?>
<h3>Sản phẩm mới nhất</h3>
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
<div style="clear: both;"></div>
<style>
    ul.list-trang{
        padding: 0;
        margin: 0;
        list-style: none;
        float: right;
        margin-right: 9px;
    }
    ul.list-trang li{
        float: left;
        padding: 5px 13px;
        margin: 5px;
        background: #fffcf7;
        display: block;
        border: solid 0.5px #dfe3eb
    }
</style>
<?php
$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
$row_count = mysqli_num_rows($sql_trang);
$trang = ceil($row_count/10);
?>
<ul class="list-trang">
    <li style="background: white; border: solid 1px #dfe3eb">Trang: </li>
    <?php
    for($i=1;$i<=$trang;$i++){
    ?>
     <li <?php if($i==$page){echo "style='background: #d5cbcb'";}else{echo '';} ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
     <?php
    }
    ?>
</ul>