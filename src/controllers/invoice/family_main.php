<?php
include '../../utils/database.php';

$q = intval($_GET['q']);
echo `
<div class="row">
<table class="table"  id="recipeTable">
    <thead class="table-info">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên</th>
            <th scope="col">Barcode</th>
            <th scope="col">SL Khả dụng</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Thành tiền</th>
        </tr>
    </thead>
    <tbody>`;
// Kiểm tra xem đã chọn giá trị nào từ dropdown chưa
// Thực hiện truy vấn SQL
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
            recipe.id = $q ;
        ";

$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $price_export = $row['price_export'];
        $barcode = $row['barcode'];
        $inventory_export = $row['inventory_export'];
        $count_export = $row['count_export'];
        // Hiển thị thông tin sản phẩm
        // Code HTML để hiển thị thông tin sản phẩm ở đây
    }
} else {
    echo "<tr><td colspan='7'>Vui lòng chọn một công thức</td></tr>";
}

echo `
</tbody>
</table>
</div>`;





?>