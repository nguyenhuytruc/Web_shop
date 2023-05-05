<?php
$sql_lietke_sanpham = "SELECT tbl_sanpham.id, tbl_sanpham.tensanpham, tbl_sanpham.hinhanh, tbl_sanpham.giasp, tbl_sanpham.soluong, tbl_sanpham.masp, tbl_sanpham.tomtat, tbl_sanpham.tinhtrang, tbl_danhmuc.tendanhmuc 
FROM tbl_sanpham, tbl_danhmuc 
WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id ORDER BY tbl_sanpham.id DESC";

$query_lietke_sanpham = mysqli_query($mysqli, $sql_lietke_sanpham);
?>

<p>Liệt kê danh mục sản phẩm</p>
<table border="1" style="width: 100%">
    <tr>
        <th>Thứ tự</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sản phẩm</th>
        <th>Số lượng</th>
        <th>Mã sản phẩm</th>
        <th>Tóm tắt</th>
        <th>Tình trạng</th>
        <th>Danh mục</th>
        <th></th>
    </tr>
    <?php
    $stt = 0;
    while ($row = mysqli_fetch_array($query_lietke_sanpham)) {
        $stt++;
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $stt ?></td>
            <td style="text-align: center;"><?php echo $row['tensanpham'] ?></td>
            <td style="text-align: center;"> <img src="modules/quanlisp/upload/<?php echo $row['hinhanh'] ?>" alt="" width="120px"></td>
            <td style="text-align: center;"><?php echo number_format($row['giasp'],0,',','.'). ' vnđ' ?></td>
            <td style="text-align: center;"><?php echo $row['soluong'] ?></td>
            <td style="text-align: center;"><?php echo $row['masp'] ?></td>
            <td style="text-align: center;"><?php echo $row['tomtat'] ?></td>
            <td style="text-align: center;"><?php echo $row['tinhtrang'] ?></td>
            <td style="text-align: center;"><?php echo $row['tendanhmuc'] ?></td>
            <td>
                <a href="?action=quanlisanpham&query=sua&id=<?php echo $row['id'] ?>">Sửa</a>
                <a onclick="return confirm('Bạn có muốn xóa danh mục này!')" href="modules/quanlisp/xuly.php?id= <?php echo $row['id'] ?>">Xóa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>