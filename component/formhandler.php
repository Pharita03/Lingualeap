<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
    $image = $_POST["image"];

    try{
        require_once "connect.php";

        $query = "INSERT INTO user (username , pwd ,email ,image) VALUES ( $username,$pwd,";

    }catch(PDOException $e){
        die("Query fail :" .$e->getMessage());
    }
}else{
    header("Location: ../addmin/index.php");
}
?>