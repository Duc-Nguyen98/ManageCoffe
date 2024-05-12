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
    $symbol = $_POST["symbol"];
    $note = $_POST["note"];

    $query = "INSERT INTO `units`(`name`, `symbol`, `note`,`soft_delete`) 
    VALUES ('$name', '$symbol', '$note', 0)";
    mysqli_query($conn, $query);
    // echo $query;
    echo "Tạo Mới Bản Ghi Thành Công!";
}



function edit()
{
    global $conn;
    $id = $_POST["id"];
    $name = $_POST["name"];
    $symbol = $_POST["symbol"];
    $note = $_POST["note"];

    $query = "UPDATE units SET `name`= '$name', `symbol`= '$symbol', `note` ='$note',  `updated_at` = NOW()  WHERE `id`=$id";
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
