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
    $name = $_POST["name"];
    $slug  = $_POST["slug"];
    $note = $_POST["note"];
    $status = $_POST["status"];
    $image = 'https://t4.ftcdn.net/jpg/03/85/95/63/360_F_385956366_Zih7xDcSLqDxiJRYUfG5ZHNoFCSLMRjm.jpg';

    $query = "INSERT INTO `product_categories`(`name`, `slug`, `note`,`image`,`status`,`soft_delete`) 
    VALUES ('$name', '$slug', '$note','$image', '$status', 0)";
    mysqli_query($conn, $query);
    // echo $query;
    echo "Tạo Mới Bản Ghi Thành Công!";
}



function edit()
{
    global $conn;
    $id = $_POST["id"];
    $name = $_POST["name"];
    $status = $_POST["status"];
    $note = $_POST["note"];

    $query = "UPDATE product_categories SET `name`= '$name', `status`= '$status', `note` ='$note',  `updated_at` = NOW()  WHERE `id`= '$id';";
    mysqli_query($conn, $query);
    // echo $query;
    echo "Cập Nhật Bản Ghi Thành Công!";
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
