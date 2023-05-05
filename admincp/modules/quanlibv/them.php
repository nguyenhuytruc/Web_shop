<p>Thêm sản phẩm</p>
<form action="modules/quanlibv/xuly.php" , method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Tên bài viết</td>
            <td><input type="text" name="tenbaiviet"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" rows="5" cols="50" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" rows="5" cols="50" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmucbv ORDER BY id DESC";
                    $query = mysqli_query($mysqli, $sql_danhmuc);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['tendanhmucbv']?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="thembaiviet" value="Thêm bài viết"></td>
        </tr>
    </table>
</form>