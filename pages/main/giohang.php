<p>Giỏ hàng
    <?php
    if (isset($_SESSION['dangky'])) {
        echo "của: "."<span style= 'color:blue'>". $_SESSION['dangky']. "</span>";
    }
    ?>
</p>
<?php
if (isset($_SESSION['cart'])) {
    // echo "<pre>";
    // print_r($_SESSION['cart']);
    // echo "</pre>";
}
?>
<table style="width: 100%; border-collapse:collapse" border="1">
    <tr>
        <th style="text-align: center;">STT</th>
        <th style="text-align: center;">Mã sản phẩm</th>
        <th style="text-align: center;">Tên sản phẩm</th>
        <th style="text-align: center;">Hình ảnh</th>
        <th style="text-align: center;">Số lượng</th>
        <th style="text-align: center;">Giá sản phẩm</th>
        <th style="text-align: center;">Thành tiền</th>
        <th>-----</th>
    </tr>
    <tr>
        <?php
        if (isset($_SESSION['cart'])) {
            $stt = 0;
            $tongtien = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $total = $cart_item['soluong'] * $cart_item['giasp'];
                $tongtien += $total;
                $stt++
        ?>
                <td style="text-align: center;"><?php echo $stt; ?></td>
                <td style="text-align: center;"><?php echo $cart_item['masp']; ?></td>
                <td style="text-align: center;"><?php echo $cart_item['tensanpham']; ?></td>
                <td style="text-align: center;"><img src="admincp/modules/quanlisp/upload/<?php echo $cart_item['hinhanh']; ?>" alt="" width="120px"></td>
                <td style="text-align: center;">
                    <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id']; ?>" style="background: blue; border: solid cornflowerblue;">+</a>
                    <?php echo $cart_item['soluong']; ?>
                    <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id']; ?>" style="background: red; border: solid darkred;">-</a>
                </td>
                <td style="text-align: center;"><?php echo number_format($cart_item['giasp'], 0, ',', '.') . ' vnđ' ?></td>
                <td style="text-align: center;"><?php echo number_format($total, 0, ',', '.') . ' vnđ' ?></td>
                <td style="text-align: center;"><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id']; ?>">Xóa</a></td>
    </tr>
<?php
            }
?>
<tr>
    <td colspan="7">
        <p style="text-align: end; margin-right: 20px;">Tổng tiền : <?php echo number_format($tongtien, 0, ',', '.') . ' vnđ' ?></p>
    </td>
    <td>
        <p style="text-align: center;"><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
    </td>
</tr>
<?php
            if (isset($_SESSION['dangky'])) {
?>
    <tr>
        <td colspan="8">
            <p style="text-align: center;"><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
        </td>
    </tr>
<?php
            } else {
?>
    <tr>
        <td colspan="8">
            <p style="text-align: center;"><a href="index.php?quanli=dangky">Đăng ký đặt hàng</a></p>
        </td>
    </tr>
<?php
            }
?>


<?php
        } else {
?>
    <tr>
        <td colspan="7" style="text-align: center;">Hiện tại giỏ hàng trống</td>
    </tr>
<?php
        }
?>
</table>