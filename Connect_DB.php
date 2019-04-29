<?php
    $host = 'us-cdbr-gcp-east-01.cleardb.net';
    $user = 'b30ef2c165e48a';
    $pass = 'bbe7a135';
    $db = 'gcp_b9c999b26f662fedbbf5';
    $conn = new mysqli($host,$user,$pass,$db);
    mysqli_query($conn, "SET NAMES utf8");
?>