<?php
session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: login.html");
    exit;
}
?>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>
        <p>You are now logged in !!!!!</p>
        <a href="logout.php">Logout</a>
    </body>
</html>