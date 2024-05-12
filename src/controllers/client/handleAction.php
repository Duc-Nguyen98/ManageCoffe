<?php
require '../../utils/database.php';



if (isset($_POST["action"])) {
    if ($_POST["action"] == "insert") {
        // insert();
    } else if ($_POST["action"] == "edit") {
        edit();
    } else {
        // delete();
    }
}



// function insert()
// {
//   global $conn;

//   $name = $_POST["name"];
//   $email = $_POST["email"];


//   $query = "INSERT INTO users VALUES('', '$name', '$email', '$gender')";
//   mysqli_query($conn, $query);
//   echo "Inserted Successfully";
// }


function edit()
{
    global $conn;
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $account_role = $_POST["account_role"];
    $is_active = $_POST["is_active"];
    $note = $_POST["note"];

    $query = "UPDATE client SET name= '$name', email= '$email',account_role	= '$account_role',  is_active = '$is_active', note ='$note',  updated_at = NOW()  WHERE id=$id";
    mysqli_query($conn, $query);


    echo $query;
    echo "Updated Successfully";
}
