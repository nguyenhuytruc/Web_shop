<?php
$sql_chitiet = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id
AND tbl_sanpham.id = '$_GET[id]'
LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>
    <div class="wrapper-chitiet">
        <div class="hinhanh-sanpham">
            <img src="admincp/modules/quanlisp/upload/<?php echo $row_chitiet['hinhanh'] ?>" alt="" style="width: 300px">
        </div>
        <form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id'] ?>" , method="POST">
            <div class="chitiet-sanpham">
                <h3>Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
                <p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
                <p>Giá sản phẩm: <?php echo number_format($row_chitiet['giasp'], 0, ',', '.') . ' vnđ' ?></p>
                <p>Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
                <p>Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
                <p>Giới thiệu: <?php echo $row_chitiet['noidung'] ?></p>
                <p><input class="themgiohang" type="submit" name="themgiohang" value="Thêm vào giỏ hàng"></p>
            </div>
        </form>
    </div>
    <div class="clear"></div>
    <div class="tabs">
        <ul id="tabs-nav">
            <li><a href="#tab1">Tóm tắt</a></li>
            <li><a href="#tab2">Nội dung</a></li>
        </ul> <!-- END tabs-nav -->
        <div id="tabs-content">
            <div id="tab1" class="tab-content">
                <p><?php echo $row_chitiet['tomtat'] ?></p>
            </div>
            <div id="tab2" class="tab-content">
                <p><?php echo $row_chitiet['noidung'] ?></p>
            </div>
        </div> <!-- END tabs-content -->
    </div> <!-- END tabs -->
<?php
}
?>