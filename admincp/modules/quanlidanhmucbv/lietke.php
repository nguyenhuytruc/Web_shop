<?php
$sql_lietke_danhmuc = "SELECT * FROM tbl_danhmucbv ORDER BY id DESC";
$query_lietke_danhmuc = mysqli_query($mysqli, $sql_lietke_danhmuc);
?>

<p>Liệt kê danh mục bài viết</p>
<table border="1" style="width: 100%">
    <tr>
        <th>Thứ tự</th>
        <th>Tên danh mục</th>
        <th>Hành động</th>
    </tr>
    <?php
    $stt = 0;
    while ($row = mysqli_fetch_array($query_lietke_danhmuc)) {
        $stt++;
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $stt ?></td>
            <td style="text-align: center;"><?php echo $row['tendanhmucbv'] ?></td>
            <td>
                <a href="?action=quanlidanhmucbv&query=sua&id=<?php echo $row['id'] ?>">Sửa</a>
                <a onclick="return confirm('Bạn có muốn xóa danh mục này!')" href="modules/quanlidanhmucbv/xuly.php?id= <?php echo $row['id'] ?>">Xóa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>