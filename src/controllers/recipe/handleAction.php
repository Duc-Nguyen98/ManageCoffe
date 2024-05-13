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
    global $conn;

    $image = 'https://image.pngaaa.com/854/6338854-middle.png';
    $name = $_POST["name"];
    $slug = $_POST["slug"];
    $idcategory = $_POST["idcategory"];
    $barcode = generateUniqueBarcode();
    $purchase_price = $_POST["purchase_price"];
    $inventory_import = 0;
    $inventory_export = 0;
    $note = $_POST["note"];
    $status = $_POST["status"];
    $brand_id = $_POST["brand_id"];
    $unit_id = $_POST["unit_id"];

    $query = "INSERT INTO `product` (`image`, `name`, `slug`, `idcategory`, `barcode`, `purchase_price`, `inventory_import`,`inventory_export`, `note`, `status`, `brand_id`, `unit_id`, `soft_delete`) 
    VALUES ('$image', '$name', '$slug', '$idcategory', '$barcode', '$purchase_price', '$inventory_import','$inventory_export', '$note', '$status', '$brand_id', '$unit_id', 0)";
    mysqli_query($conn, $query);
    // echo $query;
    echo "Tạo Mới Bản Ghi Thành Công!";
}



function edit()
{
    global $conn;
    $id = $_POST["id"];
    $name = $_POST["name"];
    $slug = $_POST["slug"];
    $idcategory = $_POST["idcategory"];
    $purchase_price = $_POST["purchase_price"];
    $note = $_POST["note"];
    $status = $_POST["status"];
    $brand_id = $_POST["brand_id"];
    $unit_id = $_POST["unit_id"];

    $query = "UPDATE product SET `name`= '$name', `slug`= '$slug', `idcategory` ='$idcategory', `purchase_price` ='$purchase_price', `note` ='$note', `status` ='$status', `brand_id` ='$brand_id', `unit_id` ='$unit_id',  `update_at` = NOW()  WHERE `id`=$id";
    mysqli_query($conn, $query);
    echo $query;
    // echo "Cập Nhật Bản Ghi Thành Công!";
}

function delete()
{
    global $conn;

    $id = $_POST["action"];
    $query = "UPDATE `client` SET `soft_delete`= 1 WHERE id = $id";
    mysqli_query($conn, $query);
    echo $query;
    echo "Deleted Successfully";
}

function generateUniqueBarcode() {
    // Lấy ngày tháng năm hiện tại (3 ký tự)
    $date = date("dmy");
    
    // Lấy thời gian hiện tại (theo giờ và phút) (2 ký tự)
    $time = date("Hi");
    
    // Kết hợp ngày và thời gian, sau đó thêm một số duy nhất (5 ký tự)
    $barcode = $date . $time . mt_rand(10000, 99999);
    
    // Nếu chiều dài của barcode lớn hơn 10, thì chỉ lấy 10 ký tự đầu
    if(strlen($barcode) > 10) {
        $barcode = substr($barcode, 0, 10);
    }
    
    return $barcode;
}
