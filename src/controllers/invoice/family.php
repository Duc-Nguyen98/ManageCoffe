<?php

include '../../utils/database.php';
$q = intval($_GET['q']);

// Câu truy vấn SQL
$query = "SELECT 
recipe_product.*, 
product.id, 
product.name, 
product.barcode, 
product.inventory_export 
FROM 
    recipe_product
JOIN 
    product 
ON 
    recipe_product.id_product = product.id
JOIN
    recipe
ON
    recipe_product.id_recipe = recipe.id
WHERE 
    recipe.id = $q";

$result = mysqli_query($conn, $query);

if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

$data = [];
$value_count = 0;
$value_price = 0;  // Cập nhật để tính tổng giá trị

// Kiểm tra và hiển thị kết quả
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $barcode = $row['barcode'];
        $inventory_export = $row['inventory_export'];
        $count_export = $row['count_export'];
        $price_export = $row['price_export'];
        $total = $count_export * $price_export;

        $value_count += $count_export;
        $value_price += $total;

        $data[] = [
            'id' => $id,
            'name' => $name,
            'barcode' => $barcode,
            'inventory_export' => $inventory_export,
            'count_export' => $count_export,
            'price_export' => $price_export,
            'total' => $total,
        ];
    }
}

// In giá trị value_count và value_price ra console
error_log("value_count: " . $value_count);
error_log("value_price: " . $value_price);

$response = [
    'data' => $data,
    'value_count' => $value_count,
    'value_price' => $value_price,
];

header('Content-Type: application/json');
echo json_encode($response);

?>
