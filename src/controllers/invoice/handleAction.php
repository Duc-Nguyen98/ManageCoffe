<?php
require '../../utils/database.php';



if (isset($_POST["action"])) {
    if ($_POST["action"] == "insert") {
        insert();
    } else if ($_POST["action"] == "edit") {
        edit();
    } else {
        delete();
    }
}


function insert()
{
    global $conn;  // Đảm bảo bạn có kết nối database hoạt động

    // Lấy dữ liệu từ POST
    $totalCountExport = $_POST['totalCountExport'];
    $transportShip = $_POST['transportShip'];
    $voucherPercent = $_POST['voucherPercent'];
    $totalValue = $_POST['totalValue'];
    $tableData = json_decode($_POST['tableData'], true);  // Chuyển JSON thành mảng PHP

    // Xử lý dữ liệu nhận được
    echo "Received data: \n";
    echo "Total Count Export: $totalCountExport\n";
    echo "Transport Ship: $transportShip\n";
    echo "Voucher%: $voucherPercent\n";
    echo "Total Value: $totalValue\n";
    print_r($tableData);  // Hiển thị dữ liệu bảng

    // Tiếp tục với lưu trữ dữ liệu hoặc xử lý khác
}




