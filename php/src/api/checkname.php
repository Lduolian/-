<?php
    $name = isset($_GET['username']) ? $_GET['username'] : null;

    $nameList = array("张三","lisi","xiaoming","xiaohong");

    $res = in_array($name,$nameList);
    if($res){
        echo "fail";
    }else{
        echo "success";
    }

?>