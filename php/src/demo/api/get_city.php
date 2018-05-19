<?php
    // $ip = isset($_GET['ip']) ? $_GET['ip'] : null;
    $ip = isset($_POST['ip']) ? $_POST['ip'] : null;

    $content = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip=$ip");

    $res = json_decode($content);
    echo $res->city;

?>