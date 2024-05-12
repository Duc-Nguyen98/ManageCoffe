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
    $slug = $_POST["slug"];
    $image = 'https://png.pngtree.com/png-clipart/20191120/original/pngtree-store-icon-in-line-style-png-image_5053711.jpg';
    $note = $_POST["note"];

    $query = "INSERT INTO `brands`(`name`, `slug`, `image`, `note`,`soft_delete`) 
    VALUES ('$name', '$slug','$image', '$note', 0)";
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
    $note = $_POST["note"];

    $query = "UPDATE brands SET `name`= '$name', `slug`= '$slug', `note` ='$note',  `update_at` = NOW()  WHERE `id`=$id";
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
