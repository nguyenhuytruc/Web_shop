<?php
$sql_sua_sanpham = "SELECT * FROM tbl_sanpham WHERE id = '$_GET[id]' LIMIT 1";
$query_sua_sanpham = mysqli_query($mysqli, $sql_sua_sanpham);
?>

<p>Sửa sản phẩm</p>
<form action="modules/quanlisp/xuly.php?id=<?php echo $_GET['id'] ?>" , method="POST" enctype="multipart/form-data">
    <table>
        <?php
        while ($row = mysqli_fetch_array($query_sua_sanpham)) {
        ?>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="tensanpham" value="<?php echo $row['tensanpham'] ?>"></td>
            </tr>
            <tr>
                <td>Mã sản phẩm</td>
                <td><input type="text" name="masp" value="<?php echo $row['masp'] ?>"></td>
            </tr>
            <tr>
                <td>Giá</td>
                <td><input type="text" name="giasp" value="<?php echo $row['giasp'] ?>"></td>
            </tr>
            <tr>
                <td>Số lượng</td>
                <td><input type="text" name="soluong" value="<?php echo $row['soluong'] ?>"></td>
            </tr>
            <tr>
                <td>Hình ảnh</td>
                <td>
                    <input type="file" name="hinhanh">
                    <img src="modules/quanlisp/upload/<?php echo $row['hinhanh'] ?>" alt="" width="120px">
                </td>
            </tr>
            <tr>
                <td>Tóm tắt</td>
                <td><textarea name="tomtat" rows="5" cols="50" style="resize: none;"><?php echo $row['tomtat'] ?></textarea></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><textarea name="noidung" rows="5" cols="50" style="resize: none;"><?php echo $row['noidung'] ?></textarea></td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                    <select name="tinhtrang">
                        <?php
                        if ($row['tinhtrang'] == 1) {
                        ?>
                            <option value="1" selected>Kích hoạt</option>
                            <option value="0">Ẩn</option>
                        <?php
                        } else {
                        ?>

                            <option value="1">Kích hoạt</option>
                            <option value="0" selected>Ẩn</option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Danh mục</td>
                <td>
                    <select name="danhmuc">
                        <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['id'] == $row['id']) {
                        ?>
                                <option value="<?php echo $row_danhmuc['id'] ?>" selected><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['id'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
            </tr>
        <?php
        }
        ?>
    </table>
</form>