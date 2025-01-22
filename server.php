<?php
    $server="dbaas-db-3274263-do-user-18863318-0.j.db.ondigitalocean.com";
    $username='doadmin';
    $password="AVNS_YHi9FxLQohOuqD0Rn_b";
    $dbname="defaultdb";
    $port="25060";

    $conn = mysqli_connect($server,$username,$password,$dbname,$port);

    if($conn->connect_error){
        die("Error : ".$conn->error);
    }
?>