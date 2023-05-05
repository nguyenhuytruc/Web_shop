<?php
$sql_chitiet = "SELECT * FROM tbl_danhmucbv, tbl_baiviet WHERE tbl_baiviet.id_danhmucbv = tbl_danhmucbv.id
AND tbl_baiviet.id = '$_GET[id]'
LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <div class="wrapper-chitiet">
            <div class="chitiet-sanpham">
                <h3>Tên bài viết: <?php echo $row_chitiet['tenbaiviet'] ?></h3>
                <p><?php echo $row_chitiet['noidung'] ?></p>
            </div>
    </div>
<?php
}
?>