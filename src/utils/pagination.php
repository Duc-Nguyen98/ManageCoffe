<?php
    // Hàm để tính toán tổng số phần tử trong bảng
    function getTotalRecords($conn, $table)
    {
        $sql = "SELECT COUNT(*) AS total FROM $table WHERE soft_delete = 0";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row['total'];
    }
?>
