<?php
function generateBarcodeHTML($number, $id) {
    // Mã HTML và JavaScript tạo mã vạch
      // Mã HTML và JavaScript tạo mã vạch
      $barcodeHTML = '
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Barcode Generator</title>
          <!-- Nhúng thư viện JsBarcode -->
          <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
          <style>
              /* CSS để điều chỉnh vị trí của số dưới mã vạch */
              #barcodeContainer_' . $id . ' {
                  position: relative;
                  display: inline-block;
              }
              #barcodeNumber_' . $id . ' {
                  position: absolute;
                  bottom: -10px; /* Điều chỉnh khoảng cách giữa số và mã vạch */
                  left: 50%; /* Căn giữa theo chiều ngang */
                  transform: translateX(-50%); /* Dịch chuyển về bên trái 50% của chiều rộng */
              }
          </style>
      </head>
      <body>
          <!-- Thẻ div chứa cả mã vạch và số -->
          <div id="barcodeContainer_' . $id . '">
              <!-- Thẻ canvas để hiển thị mã barcode -->
              <canvas id="barcode_' . $id . '"></canvas>
              <!-- Hiển thị số dưới mã vạch -->
              <div id="barcodeNumber_' . $id . '"></div>
          </div>
  
          <!-- Định nghĩa hàm để tạo mã barcode -->
          <script>
              function generateBarcode_' . $id . '(number) {
                  var canvas = document.getElementById("barcode_' . $id . '");
                  var barcodeNumber = document.getElementById("barcodeNumber_' . $id . '");
                  // Tạo mã barcode
                  JsBarcode(canvas, number.toString(), {
                      format: "CODE128",
                      lineColor: "#000",
                      width: 2,
                      height: 50,
                      displayValue: false // Không hiển thị số trên mã vạch
                  });
                  // Hiển thị số dưới mã vạch
                  barcodeNumber.innerText = number;
              }
  
              // Gọi hàm để tạo mã barcode từ số được truyền vào
              generateBarcode_' . $id . '(' . $number . ');
          </script>
      </body>
      </html>';
    return $barcodeHTML;
}

// Gọi hàm để tạo mã barcode từ số 2147483647 và hiển thị trên trình duyệt
// echo generateBarcodeHTML(2147483647);
?>
