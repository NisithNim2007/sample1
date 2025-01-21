<?php
include "server.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $stmt=$conn->prepare("INSERT INTO sample1 (username,password) VALUES(?,?)");
    $stmt->bind_param("ss",$username,$hashed_password);

    if($stmt->execute()){
        echo "Data entered successfully!!!";
    }else{
        die("Error : ".$stmt->error);
    }
    $stmt->close();
}
$conn->close();
header("Location: index.html");
?>