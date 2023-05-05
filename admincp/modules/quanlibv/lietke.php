<?php
$sql_lietke_bv = "SELECT tbl_baiviet.id, tbl_baiviet.tenbaiviet, tbl_baiviet.hinhanh, tbl_baiviet.tomtat, tbl_baiviet.noidung, tbl_baiviet.tinhtrang, tbl_danhmucbv.tendanhmucbv 
FROM tbl_baiviet, tbl_danhmucbv 
WHERE tbl_baiviet.id_danhmucbv = tbl_danhmucbv.id ORDER BY tbl_baiviet.id DESC";

$query_lietke_bv = mysqli_query($mysqli, $sql_lietke_bv);
?>

<p>Liệt kê danh mục bài viết</p>
<table border="1" style="width: 100%">
    <tr>
        <th>Thứ tự</th>
        <th>Tên bài viết</th>
        <th>Hình ảnh</th>
        <th>Tóm tắt</th>
        <th>Nội dung</th>
        <th>Tình trạng</th>
        <th>Danh mục</th>
        <th></th>
    </tr>
    <?php
    $stt = 0;
    while ($row = mysqli_fetch_array($query_lietke_bv)) {
        $stt++;
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $stt ?></td>
            <td style="text-align: center;"><?php echo $row['tenbaiviet'] ?></td>
            <td style="text-align: center;"> <img src="modules/quanlibv/upload/<?php echo $row['hinhanh'] ?>" alt="" width="120px"></td>
            <td style="text-align: center;"><?php echo $row['tomtat'] ?></td>
            <!-- <td style="text-align: center;"><?php echo $row['noidung'] ?></td> -->
            <td style="text-align: center;"><?php echo $row['tinhtrang'] ?></td>
            <td style="text-align: center;"><?php echo $row['tendanhmucbv'] ?></td>
            <td>
                <a href="?action=quanlibv&query=sua&id=<?php echo $row['id'] ?>">Sửa</a>
                <a onclick="return confirm('Bạn có muốn xóa danh mục này!')" href="modules/quanlibv/xuly.php?id= <?php echo $row['id'] ?>">Xóa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>