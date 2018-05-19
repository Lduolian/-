<?php
    require('connect.php');

    $sql = "select * from pic where id = 1";

    $result = $conn->query($sql);

    // var_dump($result);
    $res = $result ->fetch_assoc();
    if($result->num_rows >0){

        echo json_encode($res,JSON_UNESCAPED_UNICODE);
    }else{
        echo "fail";
    }

?>