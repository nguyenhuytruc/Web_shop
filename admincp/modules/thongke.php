<?php
use Carbon\Carbon;
use Carbon\CarbonInterval;

include("../config/config.php");
require('../../carbon/vendor/autoload.php');

$subday = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

$sql = "SELECT * FROM tbl_thongke WHERE ngaydat BETWEEN '$subday' AND '$now' ORDER BY ngaydat ASC";
$sql_query = mysqli_query($mysqli, $sql);

while($val = mysqli_fetch_array($sql_query)){
    $chart_data[] = array(
        'date' => $val['ngaydat'],
        'order' => $val['donhang'],
        'sales' => $val['doanhthu'],
        'quantity' => $val['soluongban']
    );
}

echo $data = json_encode($chart_data);
?>