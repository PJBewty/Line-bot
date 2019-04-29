<?php
    require('Connect_DB');
    $sql_text = "SELECT * FROM Linebot1 WHERE Keyword LIKE 'ac'";
    $query = mysqli_query($conn,$sql_text);
    while($objresult = mysqli_fetch_assoc($query))
    {
        echo $objresult['amswer']."<br>";
    }
?>