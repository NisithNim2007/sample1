<?php
include "server.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "SELECT username FROM users WHERE username ='$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $updatePass = "UPDATE users SET password='$hashed_password' WHERE username='$username'";
        if(mysqli_query($conn, $updatePass)){
            echo "Password update successfull";
        }else{
            echo "ERROR updating password = ". mysqli_error($conn). "\n";
        }
    }else{
        echo "USERNAME NOT FOUND !!!!";
    }
}
$conn->close();
?>