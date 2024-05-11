<?php 
function formatListRecipe($jsonString) {
      // Chuyển đổi chuỗi JSON thành mảng associative trong PHP
      $recipeArray = json_decode($jsonString, true);
    
      // Biến lưu trữ chuỗi định dạng
      $formattedText = '';
      
      // Lặp qua mỗi đối tượng trong mảng
      $count = 0;
      foreach ($recipeArray as $ingredient) {
          // Tạo chuỗi cho mỗi nguyên liệu
          $formattedText .= '- ' . ucfirst($ingredient['ingredient']) . ': ' . $ingredient['quantity'] . $ingredient['unit'] . '<br>';
          
          // Tăng biến đếm
          $count++;
          
          // Kiểm tra xem đã đến dòng thứ 3 chưa
          if ($count >= 3) {
              // Nếu đã đến dòng thứ 3, thì thêm dấu ... và kết thúc vòng lặp
              $formattedText .= '...';
              break;
          }
      }
      
      // Trả về chuỗi đã được định dạng
      return $formattedText;
}

// formatListRecipe(Json)
?>