<?php
// Định nghĩa hàm để hiển thị icon tùy thuộc vào giá trị của view
function displayViewIcon($viewValue) {
    if ($viewValue == 0) {
        return '<i class="fas fa-check"></i>';
    } elseif ($viewValue == 1) {
        return '<i class="fas fa-ban"></i>';
    } else {
        return '-';
    }
}


// Trong table của bạn, gọi hàm displayViewIcon để hiển thị icon tùy thuộc vào giá trị của view -->

// echo displayViewIcon($item['view']); 
?>
