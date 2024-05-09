<?php
function formatCurrency($number)
{
    return number_format($number, 0, ',', '.') . ' VNĐ';
}

// Sử dụng hàm
// $number = 50000;
// echo formatCurrency($number); // Kết quả: 50.000 VNĐ
