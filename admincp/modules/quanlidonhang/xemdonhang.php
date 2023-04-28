<?php
$sql_lietke_dh = "SELECT * FROM tbl_cart_detail, tbl_sanpham WHERE tbl_cart_detail.id_sanpham = tbl_sanpham.id 
AND tbl_cart_detail.code_cart = '$_GET[code]' ORDER BY tbl_cart_detail.id DESC";
$query_lietke_dh = mysqli_query($mysqli, $sql_lietke_dh);
?>

<p>Liệt kê đơn hàng</p>
<table border="1" style="width: 100%">
    <tr>
        <th>Thứ tự</th>
        <th>Mã đơn hàng</th>
        <th>Tên Sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
    <?php
    $stt = 0;
    $tongtien = 0;
    while ($row = mysqli_fetch_array($query_lietke_dh)) {
        $stt++;
        $total = $row['giasp'] * $row['soluongmua'];
        $tongtien += $total
    ?>
        <tr>
            <td style="text-align: center;"><?php echo $stt ?></td>
            <td style="text-align: center;"><?php echo $row['code_cart'] ?></td>
            <td style="text-align: center;"><?php echo $row['tensanpham'] ?></td>
            <td style="text-align: center;"><?php echo $row['soluongmua'] ?></td>
            <td style="text-align: center;"><?php echo number_format($row['giasp'], 0, ',', '.') . ' vnđ' ?></td>
            <td style="text-align: center;"><?php echo number_format($row['giasp'] * $row['soluongmua'], 0, ',', '.') . ' vnđ' ?></td>
        </tr>
    <?php
    }
    ?>
    <td colspan="6">
        Tổng tiền: <?php echo number_format($tongtien, 0, ',', '.') . ' vnđ' ?>
    </td>
</table>