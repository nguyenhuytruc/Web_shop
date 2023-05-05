<div class="clear"></div>
<div class="main">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $temp = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $temp = "";
        $query = "";
    }

    if ($temp == 'quanlidanhmucsanpham' && $query == 'them') {
        include("modules/quanlidanhmucsp/them.php");
        include("modules/quanlidanhmucsp/lietke.php");
    } elseif ($temp == 'quanlidanhmucsanpham' && $query == 'sua') {
        include("modules/quanlidanhmucsp/sua.php");
    } elseif ($temp == 'quanlisanpham' && $query == 'them') {
        include("modules/quanlisp/them.php");
        include("modules/quanlisp/lietke.php");
    } elseif ($temp == 'quanlisanpham' && $query == 'sua') {
        include("modules/quanlisp/sua.php");
    } elseif ($temp == 'quanlidonhang' && $query == 'lietke') {
        include("modules/quanlidonhang/lietke.php");
    } elseif ($temp == 'donhang' && $query == 'xemdonhang') {
        include("modules/quanlidonhang/xemdonhang.php");
    } elseif ($temp == 'quanlidanhmucbv' && $query == 'them') {
        include("modules/quanlidanhmucbv/them.php");
        include("modules/quanlidanhmucbv/lietke.php");
    } elseif ($temp == 'quanlidanhmucbv' && $query == 'sua') {
        include("modules/quanlidanhmucbv/sua.php");
    } elseif ($temp == 'quanlibv' && $query == 'them') {
        include("modules/quanlibv/them.php");
        include("modules/quanlibv/lietke.php");
    } elseif ($temp == 'quanlibv' && $query == 'sua') {
        include("modules/quanlibv/sua.php");
    } else {
        include("modules/dashboard.php");
    }
    ?>
</div>