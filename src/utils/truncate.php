<?php

function truncateText($text, $maxLength = 100)
{
    if (strlen($text) > $maxLength) {
        // Cắt văn bản đến chiều dài tối đa
        $truncatedText = substr($text, 0, $maxLength);

        // Xác định vị trí của từ cuối cùng trước vị trí cắt
        $lastSpace = strrpos($truncatedText, ' ');

        // Nếu không tìm thấy khoảng trắng, giữ nguyên văn bản
        if ($lastSpace !== false) {
            $truncatedText = substr($truncatedText, 0, $lastSpace);
        }

        // Thêm dấu "..." vào cuối văn bản
        $truncatedText .= '...';

        return $truncatedText;
    }

    return $text;
}

// Sử dụng hàm
$text = "Sữa tươi được vắt trực tiếp từ các chú bò tại nông trại lớn nhất Châu Á. Xử lý qua hệ thống tiệt trùng tự động khép kín, đảm bảo chất lượng";
echo truncateText($text);

?>