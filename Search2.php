<?php
    require('Connect_DB.php');
    $sql_text = "SELECT * FROM Linebot1 WHERE Keyword LIKE '%a%'";
    $query = mysqli_query($conn,$sql_text);
    while($objresult = mysqli_fetch_assoc($query))
    {
        echo $objresult['Answer']."<br>";
    }
?>