<?php
    require('connect.php');

    $username = isset($_GET['username']) ? $_GET['username'] : null;
    $password = isset($_GET['password']) ? $_GET['password'] : null;

    $password = md5($password);
    $sql = "select * from student where username='$username' and password='$password'";
    $result = $conn->query($sql);
    $res = $result ->fetch_assoc();
    
    if($result->num_rows >0){

        echo json_encode($res,JSON_UNESCAPED_UNICODE);
    }else{
        echo "fail";
    }
    
?>