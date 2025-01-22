<?php
include "server.php";

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["user"];
    $password=$_POST["pass"];

    $stmt=$conn->prepare("SELECT id, password FROM users WHERE username=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();
    $stmt->close();

    if($hashed_password && password_verify($password, $hashed_password)){
        //Set session
        $_SESSION["user_id"]=$user_id;
        $_SESSION["username"]=$username;

        header("Location: welcome.php");
        exit;
    }else{
        echo "Invalid username or password";
    }
}
$conn->close();