<?php
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmincp.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <title>Admincp</title>
</head>

<body>
    <h3 class="title-admin">Admin</h3>
    <div class="wrapper">
        <?php
        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        CKEDITOR.replace('tomtat');
        CKEDITOR.replace('noidung');
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            thongke();
        var char = new Morris.Area({
            element: 'chart',
            xkey: 'date',
            ykeys: ['order', 'sales', 'quantity'],
            labels: ['Đơn hàng', 'Doanh thu', 'Số lượng bán ra']
        });
        function thongke(){
            var text = '365 ngày qua';
            $('#text-date').text(text);
            $.ajax({
                url: "modules/thongke.php",
                method: "POST",
                dataType: "JSON",

                success: function(data){
                    char.setData(data);
                    $('#text-date').text(text);
                }
            });
        }
    });
    </script>
</body>

</html>