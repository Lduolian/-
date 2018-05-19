<?php
    require('connect.php');
    $username = isset($_GET['username']) ? $_GET['username'] : null;
    $password = isset($_GET['password']) ? $_GET['password'] : null;
    $type = isset($_GET['type']) ? $_GET['type'] : null;


    $sql = "select username from student where username='$username'";
    
    $res = $conn->query($sql);

    if($res->num_rows > 0){
        echo "fail";
    }else{
        if($type === 'reg'){

            $password = md5($password);
            $sql = "insert into student(username,password) values('$username','$password')";

            $result = $conn->query($sql);
            if($result){
                echo "success";
            }else{
                echo "fail";
            }
        }else{
            echo "success";
        }
    }

?>