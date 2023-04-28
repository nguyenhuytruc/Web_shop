<?php
$sql_lietke_dh = "SELECT * FROM tbl_cart, tbl_dangky WHERE tbl_cart.id_khachhang = tbl_dangky.id ORDER BY tbl_cart.id DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<p>Liệt kê đơn hàng</p>
<table border="1" style="width: 100%">
    <tr>
        <th>Thứ tự</th>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Email</th>
        <th>Điện thoại</th>
        <th>Địa chỉ</th>
        <th>Hành động</th>
    </tr>
    <?php
    $stt = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $stt++;
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $stt ?></td>
            <td style="text-align: center;"><?php echo $row['code_cart'] ?></td>
            <td style="text-align: center;"><?php echo $row['tenkhachhang'] ?></td>
            <td style="text-align: center;"><?php echo $row['email'] ?></td>
            <td style="text-align: center;"><?php echo $row['dienthoai'] ?></td>
            <td style="text-align: center;"><?php echo $row['diachi'] ?></td>
            <td>
                <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>