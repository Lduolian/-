<?php
    $qty = isset($_GET['qty']) ? $_GET['qty'] : 10;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    $path = '../data/football.json';
    $file = fopen($path,'r');
    $content = fread($file, filesize($path));
   
    $data = json_decode($content);
    // var_dump($data);
    fclose($file);
    $data = array(
            "total" => count($data),
            "data" => array_slice($data, $qty*($page-1), $qty),
            "qty" => $qty,
            "page" => $page
        );

    echo json_encode($data,JSON_UNESCAPED_UNICODE);

    

?>