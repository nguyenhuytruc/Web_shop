<div class="sidebar">
    <p style="color: #23b320; font-size:larger">Danh mục sản phẩm</p>
    <ul class="list-sidebar">
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li>
                <a href="index.php?quanli=danhmuc&id=<?php echo $row_danhmuc['id'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
            </li>
        <?php
        }
        ?>
    </ul>
    <p style="color: #23b320; font-size:larger">Danh mục bài viết</p>
    <ul class="list-sidebar">
        <?php
        $sql_danhmuc = "SELECT * FROM tbl_danhmucbv ORDER BY id DESC";
        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li>
                <a href="index.php?quanli=danhmucbv&id=<?php echo $row_danhmuc['id'] ?>"><?php echo $row_danhmuc['tendanhmucbv'] ?></a>
            </li>
        <?php
        }
        ?>
    </ul>
</div>