<?php
    $host = 'us-cdbr-iron-east-01.cleardb.net';
    $user = 'b859a12ba0c2d9';
    $pass = 'e2e15cf7';
    $db = 'heroku_700de64fb6a62d3';
    $conn = new mysqli($host,$user,$pass,$db);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_query($conn, "SET NAMES utf8");

    $office = $_POST["office"];
    $keyword = $_POST["keyword"];
    /*$office = 'j091';
    $keyword = '00';*/
    $sql_text = "SELECT * FROM tbl_equipment WHERE office_id = '$office' AND (equip_id LIKE '%$keyword%' OR equip_name LIKE '%$keyword%')";
    $query = mysqli_query($conn,$sql_text);
    $data_return = array();
    while($obj = mysqli_fetch_assoc($query))
    {
       array_push($data_return,$obj);
    }
    echo json_encode($data_return);
?>