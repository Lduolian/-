<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "market";

    $conn = new mysqli($servername,$username,$password,$dbname);

    $conn->set_charset('utf8');
   
    $sql = "select * from user";

    $result = $conn->query($sql);
    

    $res = $result->fetch_assoc();

    echo json_encode($res,JSON_UNESCAPED_UNICODE);
    

?>