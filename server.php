<?php
    $server="dbaas-db-3223557-do-user-18863318-0.j.db.ondigitalocean.com";
    $username='doadmin';
    $password="AVNS_pdNon4upWGsz0Fsy8Tb";
    $dbname="defaultdb";
    $port="25060";

    $conn = mysqli_connect($server,$username,$password,$dbname,$port);

    if($conn->connect_error){
        die("Error : ".$conn->error);
    }
?>