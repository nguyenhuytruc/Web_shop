<?php
$sql_sua_danhmuc = "SELECT * FROM tbl_danhmuc WHERE id = '$_GET[id]' LIMIT 1";
$query_sua_danhmuc = mysqli_query($mysqli, $sql_sua_danhmuc);
?>

<p>Sửa danh mục sản phẩm</p>
<form action="modules/quanlidanhmucsp/xuly.php?id=<?php echo $_GET['id'] ?>" , method="POST">
    <table>
        <?php
        while ($row = mysqli_fetch_array($query_sua_danhmuc)) {
        ?>
            <tr>
                <td>Tên danh mục</td>
                <td><input type="text" name="tendanhmuc" value="<?php echo $row['tendanhmuc'] ?>"></td>
            </tr>
            <tr>
                <td>Thứ tự</td>
                <td><input type="text" name="thutu" value="<?php echo $row['thutu'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="suadanhmuc" value="Sửa danh mục"></td>
            </tr>
        <?php
        }
        ?>
    </table>
</form>